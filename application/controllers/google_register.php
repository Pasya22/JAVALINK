<?php
require_once APPPATH . 'libraries/vendor/autoload.php';

class google_register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model');
        $this->load->library('session');
    }

    public function index()
    {
        if ($this->session->userdata('Login')) {
            if ($this->session->userdata('role_id') == 2) {
                redirect(site_url('google_register/register_google'));
            } else {
                redirect(site_url('guest'));
            }
        } else {
            $data['title'] = 'Jw-Link - Login';
            $this->load->view('temp/header_login', $data);
            $this->load->view('Login/VLogin', $data);
            $this->load->view('temp/footer_login', $data);
        }
    }

    public function register_google()
    {
        $client = new Google_Client();
        $client->setClientId('437243272247-rjq7ald9hfae89muehcsc82iui3b68ne.apps.googleusercontent.com');
        $client->setClientSecret('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');
        $client->setRedirectUri(site_url('google_register/register_google'));
        $client->addScope("email");
        $client->addScope("profile");

        if (isset($_GET['code'])) {
            $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
            $client->setAccessToken($token['access_token']);
            $this->session->set_userdata('access_token', $token['access_token']);
            $google_service = new Google_Service_Oauth2($client);
            $data = $google_service->userinfo->get();

            $email = $data['email'];
            $name = $data['name'];

            $existingUser = $this->Model->GetDataWhere('login', 'email', $email);
            if (!$existingUser) {
                date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
                $now = date('Y-m-d H:i:s');
                $add = array(
                    'email' => $email,
                    'nama_pengguna' => $name,
                    'images' => 'default.jpg',
                    'role_id' => 2,
                    'is_active' => 1,
                    'date_created' => $now,
                );
                // send data to database
                $this->Model->AddData('login', $add);

            }
            // Atur data sesi dan arahkan ulang
            $this->session->set_userdata('Login', 'OnLogin');
            $this->session->set_userdata('role_id', 2);
            $this->session->set_userdata('nama_pengguna', $name);
            redirect(site_url('guest'));
        } elseif (isset($_GET['logout'])) {
            // Hapus token akses yang tersimpan
            $this->session->unset_userdata('access_token');

            // Redirect ke halaman login atau halaman lain yang sesuai
            redirect(site_url('google_register/Logout'));
        } else {
            $auth_url = $client->createAuthUrl();
            redirect($auth_url);
        }
    }

    public function Logout()
    {
        $this->session->unset_userdata('access_token');
        $this->session->unset_userdata('role_id');
        $this->session->unset_userdata('Login');
        redirect(site_url('Login'));
    }

    // public function showNotification($title, $message)
    // {
    //     echo '<div style="position: fixed; top: 10px; right: 10px; background-color: #333; color: #fff; padding: 10px; border-radius: 4px; z-index: 9999;">';
    //     echo '<strong>' . $title . '</strong>: ' . $message;
    //     echo '</div>';
    // }

}
