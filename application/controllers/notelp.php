<?php
require_once APPPATH . 'libraries/Twilio/autoload.php';
use Twilio\Rest\Client;

class notelp extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model');
        $this->load->library('session');
        $this->load->helper('url', 'form', 'date');
        $this->load->library('form_validation');
    }

    // ===================================== view login menggunakan whatsapp ======================== //
    public function index()
    {
        if ($this->session->userdata('Login')) {
            if ($this->session->userdata('role_id') == 2) {
                redirect(site_url('notelp'));
            } else {
                redirect(site_url('guest'));
            }
        } else {
            $data['title'] = 'Java.Link - Login';
            $this->load->view('no-telp/no-telp', $data);
        }
    }
    // ===================================== funsi login menggunakan whatsapp ======================== //
    public function LoginWhatsApp()
    {
        $this->form_validation->set_rules(
            'no_what',
            'Phone Number',
            'required|trim|is_unique[login.no_what]', ['is_unique' => 'Phone Number is already taken.']

        );

        if ($this->form_validation->run() == false) {
            $errors = array(
                'status' => false,
                'error' => $this->form_validation->error_array(),
            );
            $data = json_encode($errors);
            echo $data;
            print_r($data, 'dataError:');
        } else {
            date_default_timezone_set('Asia/Jakarta'); # tambahkan kota Anda untuk mengatur zona waktu lokal
            $now = date('Y-m-d H:i:s');
            $no_telp = $this->input->post('no_what');

            // $add = array(
            //     'no_what' => $no_telp,
            //     'images' => 'default.jpg',
            //     'role_id' => 2,
            //     'is_active' => 1,
            //     'date_created' => $now,
            // );
            // $this->Model->AddData('login', $add);
            $otp = $this->generateOTP();
            // $token = bin2hex(random_bytes(32));
            // $user_token = [
            //     'token' => $token,
            //     'otp' => $otp,
            //     'date_created' => $now,
            // ];

            // $this->Model->AddData('user_token', $user_token);

            // Kirim OTP melalui WhatsApp
            $this->sendOTPWhatsApp($no_telp, $otp);

            $response = array(
                'status' => true,
                'message' => 'Please check your WhatsApp for the OTP code.',
            );

            // Mengirim response sebagai JSON
            $data = json_encode($response);
            echo $data;
            print_r($data, 'data');
        }
    }

    private function sendOTPWhatsApp($no_telp, $otp)
    {
        $sid = "AC8b8daa3d3756daf8b2ae4ebf5c2e4c23";
        $token = "ff30ac8e23e02ce5387f700112e6edee";
        $twilio = new Client($sid, $token);

        $message = $twilio->messages
            ->create("+62" . $no_telp, // to
                array(
                    "from" => "+13614597459",
                    "body" => "Your OTP: " . $otp,
                )
            );
        print($message->sid);
    }

    private function generateOTP()
    {
        $otp = rand(100000, 999999); // Menghasilkan kode OTP acak antara 100000 dan 999999
        return $otp;
    }
}
