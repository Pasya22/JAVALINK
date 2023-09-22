<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('MLogin');
        $this->load->model('Model');
        $this->load->library('session');
    }

    public function index()
    {
        // $akse = $this->MLogin->GetAkses();
        if ($this->session->userdata('Login')) {
            if ($this->session->userdata('role_id') == 1) {
                redirect('welcome');
            } else if ($this->session->userdata('role_id') == 2) {
                redirect('guest');
            } else {
                // Handle unknown role
                $this->session->unset_userdata('Login');
                redirect('404');
            }
        } else {
            $data['title'] = 'Java.Link - Login';
            $this->load->view('temp/header_login', $data);
            $this->load->view('Login/VLogin', $data);
            $this->load->view('temp/footer_login', $data);
        }
    }

    public function goLogin()
    {
        $username = $this->input->post('email');
        $password = $this->input->post('password1');

        if (empty($username) || empty($password)) {
            $this->session->set_flashdata('pesan', 'Harap isi email dan password!');
            $this->session->unset_userdata('Login');
            echo json_encode(array('status' => 'error', 'pesan' => $this->session->flashdata('pesan')));
        } else {
            $masuk = $this->MLogin->GoLogin($username, $password);
            if ($masuk->num_rows() > 0) {
                $data = $masuk->row_array();
                if ($data['is_active'] == 0) {
                    $this->session->set_flashdata('pesan', 'Email belum aktif. Silakan periksa email Anda untuk aktivasi.');
                    $this->session->unset_userdata('Login');
                    echo json_encode(array('status' => 'error', 'pesan' => $this->session->flashdata('pesan')));
                } else {
                    $this->load->library('session');
                    $this->session->set_userdata('Login', 'OnLogin');
                    $this->session->set_userdata('nama_pengguna', $data['nama_pengguna']);
                    $this->session->set_userdata('email', $data['email']);
                    $this->session->set_userdata('role_id', $data['role_id']);

                    $role = '';
                    if ($data['role_id'] == 1) {
                        $role = 'admin';
                        $this->session->set_flashdata('message', $role);
                    } elseif ($data['role_id'] == 2) {
                        $role = 'member';
                        $this->session->set_flashdata('message', $this->session->userdata('nama_pengguna'));
                    } else {
                        $role = 'unknown';
                    }
                    echo json_encode(array('status' => 'success', 'message' => $this->session->flashdata('message'), 'is_active' => 1, 'role_id' => $role));
                }
            } else {
                $this->session->set_flashdata('pesan', 'Email atau password salah');
                $this->session->unset_userdata('Login');
                echo json_encode(array('status' => 'error', 'pesan' => $this->session->flashdata('pesan')));
            }
        }
    }
   
    // ==================================== View register ========================================= //
    public function register()
    {
        $data['title'] = 'Java.Link - Register';
        $this->load->view('halaman-register/Register', $data);
    }

    // ==================================== register ========================================= //
    public function addData()
    {
        // Set the rules for registration
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim|valid_email|is_unique[login.email]',
            ['is_unique' => 'Email is already taken.']
        );
        $this->form_validation->set_rules('nama_pengguna', 'Nama', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', ['matches' => 'Confirm password doesn\'t match!', 'min_length' => 'Password is too short!']);
        $this->form_validation->set_rules('password2', 'Password Confirmation', 'required|trim|matches[password1]');

        // Run registration validation
        if ($this->form_validation->run() == false) {
            // Send an error message to the registration form
            $errors = array(
                'status' => false,
                'error' => $this->form_validation->error_array(),
            );
            $data = json_encode($errors);
            echo $data;
            print_r($data, 'dataError:');
        } else {
            // Register input data
            date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
            $now = date('Y-m-d H:i:s');
            $nama_pengguna = $this->input->post('nama_pengguna');
            $email = $this->input->post('email');
            $password = $this->input->post('password1');
            $images = 'default.jpg';
            $role_id = 2;
            $is_active = 0;
            $date_created = $now;
            $add = array(
                'nama_pengguna' => $nama_pengguna,
                'email' => $email,
                'password' => $password,
                'images' => $images,
                'role_id' => $role_id,
                'is_active' => $is_active,
                'date_created' => $date_created,
            );
            $token = bin2hex(random_bytes(32)); // Menghasilkan token aktivasi acak
            $otp = '';
            $user_token = [
                'email' => $email,
                'token' => $token,
                'otp' => $otp,
                'date_created' => $now,
            ];
            // Send data to the database
            $this->Model->AddData('login', $add);
            $this->Model->AddData('user_token', $user_token);
            $this->_sendemail($token, 'verify');

            // Send a success message to the registration form
            $data = array(
                'status' => true,
                'message' => 'Congratulation!your account has been created. Please Actived Your Email',
                'data' => $add,
                'data_user' => $user_token,
            );
            $data = json_encode($data);
            echo $data;
            print_r($data, 'data');
        }
    }

    private function _sendemail($token, $type)
    {
        if ($type == 'verify') {
            $this->load->library('email');
            $this->email->from('javawebster@gmail.com', 'javawebster.Link');
            $this->email->to($this->input->post('email'));
            $this->email->subject('Verification Your Account Java.Link');
            $this->email->message('Click the following link to activate your account: <a href="' . base_url() . 'Login/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Activated</a>');

            if ($this->email->send()) {
                return true;
            } else {
                echo $this->email->print_debugger();
                die;
            }
        }

    }
    private function _sendemailForgot($token, $type, $otp)
    {
        if ($type == 'forgot') {
            $this->load->library('email');
            $this->email->from('javawebster@gmail.com', 'javawebster.Link');
            $this->email->to($this->input->post('email'));
            $this->email->subject('Reset Password Your Account Java.Link');
            // $this->email->message('Click the following link to reset password your account: <a href="' . base_url() . 'Login/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a>');
            $this->email->message('Your OTP for password reset is: ' . $otp); // Menambahkan pesan OTP ke email
            if ($this->email->send()) {
                return true;
            } else {
                echo $this->email->print_debugger();
                die;
            }

        }
    }
    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');
        $user = $this->Model->GetDataWhere('login', 'email', $email)->row();

        if ($user) {
            $user_token = $this->Model->GetDataWhere('user_token', 'token', $token)->row();
            if ($user_token) {
                $current_time = time();
                $token_creation_time = strtotime($user_token->date_created);
                $time_diff_in_hours = ($current_time - $token_creation_time) / (60 * 60);

                if (!$time_diff_in_hours < 24) {
                    $this->db->set('is_active', 1);
                    $this->db->where('email', $email);
                    $this->db->update('login');
                    $this->Model->DeleteData('user_token', 'email', $email);

                    $message = $email . ' has been activated! Please login.';
                    $this->session->set_flashdata('message', $message);
                    $this->session->set_flashdata('alert-class', 'show');

                    redirect('Login');
                } else {
                    $this->Model->DeleteData('login', 'email', $email);
                    $this->Model->DeleteData('user_token', 'email', $email);

                    $message = 'Account activation failed! Token expired. Please register again.';
                    $this->session->set_flashdata('message', $message);
                    $this->session->set_flashdata('alert-class-danger', 'show');

                    redirect('Login/register');
                }
            } else {
                $message = 'Account activation failed! Invalid token. Please register again.';
                $this->session->set_flashdata('message', $message);
                $this->session->set_flashdata('alert-class-danger', 'show');

                redirect('Login/register');
            }
        } else {
            $message = 'Account activation failed! Invalid email. Please register again.';
            $this->session->set_flashdata('message', $message);
            $this->session->set_flashdata('alert-class-danger', 'show');

            redirect('Login/register');
        }

    }

    public function FormLupaPW()
    {
        date_default_timezone_set('Asia/Jakarta'); # tambahkan kota Anda untuk mengatur zona waktu lokal
        $now = date('Y-m-d H:i:s');
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Lupa Password';
            $this->load->view('LupaPW/FormLupaPW', $data);
        } else {
            $email = $this->input->post('email');
            $user = $this->db->get_where('login', ['email' => $email, 'is_active' => 1])->row_array();

            if ($user) {
                $token = bin2hex(random_bytes(32));
                $otp = $this->generateOTP(); // Menyimpan kode OTP
                $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_created' => $now,
                    'otp' => $otp, // Menambahkan kode OTP ke user_token
                ];
                $this->Model->AddData('user_token', $user_token);
                $this->_sendemailForgot($token, 'forgot', $otp); // Mengirim kode OTP melalui email

                // Menyiapkan respons JSON
                $response = [
                    'status' => true,
                    'pesan' => 'Please check your email for further instructions reset password.',
                ];
            } else {
                $response = [
                    'status' => false,
                    'pesan2' => 'Email is not registered!',
                ];
            }

            // Mengembalikan respons JSON
            echo json_encode($response);
        }
    }

    // public function resetpassword()
    // {
    //     $email = $this->input->get('email');
    //     $token = $this->input->get('token');
    //     $otp = $this->input->get('otp');

    //     $user = $this->Model->GetDataWhere('user_token', 'email', $email);

    //     if ($user->num_rows() > 0) {
    //         $user_row = $user->row();
    //         $user_token = $this->Model->GetDataWhere('user_token', 'token', $token)->row();

    //         if ($user_token && $user_token->token === $token) {
    //             if ($user_token->otp === $otp) { // Memeriksa apakah kode OTP yang dimasukkan cocok
    //                 $this->session->set_userdata('email', $user_row->email);
    //                 redirect('Login/changePassword');
    //             } else {
    //                 $this->session->set_flashdata('message', 'Reset password gagal! OTP salah.');
    //                 $this->session->set_flashdata('alert-class-danger', 'show');
    //                 redirect('Login/FormLupaPW');
    //             }
    //         } else {
    //             $this->session->set_flashdata('message', 'Reset password gagal! Token tidak valid.');
    //             $this->session->set_flashdata('alert-class-danger', 'show');
    //             redirect('Login/FormLupaPW');
    //         }
    //     } else {
    //         $this->session->set_flashdata('message', 'Reset password gagal! Email salah.');
    //         $this->session->set_flashdata('alert-class-danger', 'show');
    //         redirect('Login/FormLupaPW');
    //     }
    // }
    public function resetpassword()
    {
        $email = $this->input->get('email');
        $otp = $this->input->get('otp');

        $user = $this->Model->GetDataWhere('login', 'email', $email);

        if ($user->num_rows() > 0) {
            $user_row = $user->row();
            $user_token = $this->Model->GetDataWhere('user_token', 'otp', $otp)->row();

            if ($user_token && $user_token->otp === $otp) {
                $this->session->set_userdata('email', $user_row->email);
                redirect('Login/changePassword');
            } else {
                $this->session->set_flashdata('message', 'Reset password gagal! OTP salah.');
                $this->session->set_flashdata('alert-class-danger', 'show');
                redirect('Login/FormLupaPW');
            }
        } else {
            $this->session->set_flashdata('message', 'Reset password gagal! Email salah.');
            $this->session->set_flashdata('alert-class-danger', 'show');
            redirect('Login/FormLupaPW');
        }
    }

    public function changePassword()
    {
        if (!$this->session->userdata('email')) {
            redirect('Login');
        }

        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
            'matches' => 'Confirm password doesn\'t match!',
            'min_length' => 'Password is too short!',
        ]);
        $this->form_validation->set_rules('password2', 'Repeat Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Change Password';
            $this->load->view('LupaPW/ResetPassword', $data);
        } else {
            $password = $this->input->post('password1');
            $email = $this->session->userdata('email');

            $update = [
                'password' => $password,
            ];
            $this->Model->UpdateData('login', 'email', $email, $update);

            $this->session->unset_userdata('email');
            $this->session->set_flashdata('message', 'Password has been changed! Please login.');
            $this->session->set_flashdata('alert-class', 'show');
            redirect('Login');
        }
    }

    private function generateOTP()
    {
        $otp = rand(100000, 999999); // Menghasilkan kode OTP acak antara 100000 dan 999999
        return $otp;
    }
    public function Logout()
    {
        $this->load->library('session');
        $this->session->unset_userdata('Login');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        redirect(site_url('Login'));
    }

}
