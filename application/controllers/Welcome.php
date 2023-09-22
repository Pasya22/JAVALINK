<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model');
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->helper('url', 'form', 'date');
        $this->load->library('form_validation');
    }

    // ======================================  Home after login =============================== //
    public function index()
    {
        if ($this->session->userdata('Login')) {
            if ($this->session->userdata('role_id') == 1) {
                $data['title'] = 'Home';
                $data['tampil'] = $this->Model->GetData('konten-admin');
                // $data['show'] = $this->Model->GetData('login');
                $this->load->view('temp/header', $data);
                $data['content'] = 'VBlank';
                $this->load->view('admin/Home', $data);
                $this->load->view('temp/footer', $data);
            }
        } else {
            redirect(site_url('Login'));
        }
    }

    // ==================================== View Users ========================================= //
    public function DataUser()
    {
        $data['title'] = 'Data User';
        $data['show'] = $this->Model->GetData('login');
        $data['tampil'] = $this->Model->GetData('konten-admin');
        $data['level'] = $this->Model->GetData('role');
        $this->load->view('temp/header', $data);
        $data['content'] = 'VBlank';
        $this->load->view('admin/DataUser', $data);
        $this->load->view('temp/footer', $data);
    }

    public function GetUser()
    {
        $data = $this->Model->GetUserByRole()->result();
        echo json_encode($data);
    }
    // ==================================== add User ========================================= //
    public function addUser()
    {
        // Set the rules for registration
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim|valid_email|is_unique[login.email]',
            ['is_unique' => 'Email is already taken.']
        );
        $this->form_validation->set_rules('nama_pengguna', 'Nama', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[4]');
    
        // Run registration validation
        if ($this->form_validation->run() == false) {
            // Send an error message to the registration form
            $errors = array(
                'status' => false,
                'error' => $this->form_validation->error_array(),
            );
            $data = json_encode($errors);
            echo $data;
        } else {
            // Register input data
            date_default_timezone_set('Asia/Jakarta');
            $now = date('Y-m-d H:i:s');
            $nama_pengguna = $this->input->post('nama_pengguna');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $role_id = $this->input->post('role_id');
            $is_active = $this->input->post('is_active');
            $date_created = $now;
    
            $up_file = $this->file_upload_user('./picture/');
            if ($up_file == false) {
                // Jika upload gagal, kirim pesan error ke form registrasi
                $errors = array(
                    'status' => false,
                    'error' => array('images' => 'Failed to upload file.'),
                );
                $data = json_encode($errors);
                echo $data;
                return;
            }
    
            $add = array(
                'nama_pengguna' => $nama_pengguna,
                'email' => $email,
                'password' => $password,
                'images' => $up_file,
                'role_id' => $role_id,
                'is_active' => $is_active,
                'date_created' => $date_created,
            );
    
            // Send data to the database
            $this->Model->AddData('login', $add);
    
            // Send a success message to the registration form
            $data = array(
                'status' => true,
                'message' => 'Data Berhasil Di Tambahkan',
                'data' => $add,
            );
            $data = json_encode($data);
            echo $data;
        }
    }
    // ====================================== edit User ===================================== //
    public function EditUser()
    {
       $this->form_validation->set_rules('nama_pengguna','nama pengguna','required');
       $this->form_validation->set_rules('email','email','required|trim');
       $this->form_validation->set_rules('password','Password','required|trim');

       if ($this->form_validation->run() == false) {
        // $errors = array(
        //     'status' => false,
        //     'error' => $this->form_validation->error_array(),
        // );
        $data = json_encode(array( 'status' => false,
        'error' => $this->form_validation->error_array()));
        echo $data;
        // Rest of the code...
    }else{
        date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
        $now = date('Y-m-d H:i:s');
        $id_pengguna = $this->uri->segment(3);
        $nama_pengguna = $this->input->post('nama_pengguna');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $images = $this->input->post('images');
        $role_id = $this->input->post('role_id');
        $is_active = $this->input->post('is_active');
        $date_created = $this->input->post('date_created');
        $update = array(
            'nama_pengguna' => $nama_pengguna,
            'email' => $email,
            'password' => $password,
            'images' => $images,
            'role_id' => $role_id,
            'is_active' => $is_active,
            'date_created' => $date_created,
        );
        // Send data to the database
        $this->Model->UpdateData('login','id_pengguna',$id_pengguna,$update);
        $data = array(
            'status' => true,
            'message' => 'Data Berhasil Di Ubah',
            'data' => $update,
        );
        $data = json_encode($data);
        echo $data;
        // $this->session->set_flashdata('edit-sukses','berhasil di ubah');
        // redirect('Welcome/DataUser');
       }
    }
    // ==================================== delete User =================================== //
    public function DeleteUser()
    {
        $id =$this->uri->segment(3);
        $delete =$this->Model->DeleteData('login', 'id_pengguna', $id);
        $data = array(
            'status' => true,
            'message' => 'Data Berhasil Di Hapus',
            'data' => $delete,
        );
        $data = json_encode($data);
        echo $data;
        // $this->session->set_flashdata('delete-sukses','Data Berhasil Dihapus');
        // redirect('Welcome/DataUser');
    }

    // ================================= fungsi upload user icon/images ==================== //
    public function file_upload_user($dir = null)
	{
		$config['upload_path'] = $dir;
		$config['allowed_types'] = 'jpg|png|JPG|PNG';
		$config['max_size'] = 5000;


		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('images')) {
			return false;
		} else {
			$upload_data = $this->upload->data();
			$file_name = $upload_data['file_name'];
			return $file_name;
		}
	}
    // ==================================== END USER ====================================== //

    // ================================= View Link ============================== //
    public function DataLink()
    {
        $data['title'] = 'Data Link';
        $data['tampil'] = $this->Model->GetData('konten-admin');
        $data['level'] = $this->Model->GetData('role');
        $data['menu'] = $this->Model->GetMenuLink()->result();
        $this->load->view('temp/header', $data);
        $data['content'] = 'VBlank';
        $this->load->view('admin/DataLink', $data);
        $this->load->view('temp/footer', $data);
    }

    public function GetMenu()
    {
       $data['menu'] = $this->Model->GetMenuLink()->result();
       echo json_encode($data);
    }
    // ==================================== add Link ========================================= //
    public function addLink()
    {
        $this->form_validation->set_rules('id_pengguna','Nama pengguna','required');
        $this->form_validation->set_rules('role_id','Role','required');
        $this->form_validation->set_rules('nama_menu','menu','required');
        $this->form_validation->set_rules('icon','Icon menu','required');
        $this->form_validation->set_rules('url','url','required');
        $this->form_validation->set_rules('status','Status menu','required');

        if ($this->form_validation->run() == false) {
            
             $errors = array(
                'status' => false,
                'error' => $this->form_validation->error_array(),
            );
            $data = json_encode($errors);
            echo $data;
        }
        else {
            $id_pengguna = $this->input->post('id_pengguna');
            $role_id = $this->input->post('role_id');
            $nama_menu = $this->input->post('nama_menu');
            $icon = $this->input->post('icon');
            $url = $this->input->post('url');
            $status = $this->input->post('status');

            // data di tampung menggunakan array object
            $add = array(
                'id_pengguna' => $id_pengguna,
                'role_id' => $role_id,
                'nama_menu' => $nama_menu,
                'icon' => $icon,
                'url' => $url,
                'status' => $status,
             );

            // data akan di kirim ke database
             $this->Model->AddData('menu',$add);
            
            // mengirim response untuk data jika berhasil di input berbentuk format JSON
              $data = array(
                'status' => true,
                'message' => 'Data Berhasil Ditambahkan',
                'data' => $add,
            );
            $data = json_encode($data);
            echo $data;

        }
    }
     // ====================================== edit Link ===================================== //
     public function EditLink()
     {
        $this->form_validation->set_rules('id_pengguna','Nama pengguna','required');
        $this->form_validation->set_rules('role_id','Role','required');
        $this->form_validation->set_rules('nama_menu','menu','required');
        $this->form_validation->set_rules('icon','Icon menu','required');
        $this->form_validation->set_rules('url','url','required');
        $this->form_validation->set_rules('status','Status menu','required');

        if ($this->form_validation->run()==false) {
         $errors = array(
             'status' => false,
             'error' => $this->form_validation->error_array(),
         );
         $data = json_encode($errors);
         echo $data;
         // $this->session->set_flashdata('edit-gagal','gagal di ubah');
         // redirect('Welcome/DataUser');
        }else{
       
         $menu_id = $this->uri->segment(3);
         $id_pengguna = $this->input->post('id_pengguna');
         $role_id = $this->input->post('role_id');
         $nama_menu = $this->input->post('nama_menu');
         $icon = $this->input->post('icon');
         $url = $this->input->post('url');
         $status = $this->input->post('status');
         
         $update = array(
             'id_pengguna' => $id_pengguna,
             'role_id' => $role_id,
             'nama_menu' => $nama_menu,
             'icon' => $icon,
             'url' => $url,
             'status' => $status
         );
         // Send data to the database
         $this->Model->UpdateData('menu','menu_id',$menu_id,$update);
         $data = array(
             'status' => true,
             'message' => 'Data Berhasil Di Ubah',
             'data' => $update,
         );
         $data = json_encode($data);
         echo $data;
         // $this->session->set_flashdata('edit-sukses','berhasil di ubah');
         // redirect('Welcome/DataUser');
        }
     }
     // ==================================== delete User =================================== //
    public function DeleteLink()
    {
        $id =$this->uri->segment(3);
        $delete =$this->Model->DeleteData('menu', 'menu_id', $id);
        $data = array(
            'status' => true,
            'message' => 'Data Berhasil Di Hapus',
            'data' => $delete,
        );
        $data = json_encode($data);
        echo $data;
        // $this->session->set_flashdata('delete-sukses','Data Berhasil Dihapus');
        // redirect('Welcome/DataUser');
    }

}
