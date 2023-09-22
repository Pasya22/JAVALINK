<?php
class MLogin extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function GoLogin($username, $password)
    {
        $this->db->select('*');
        $this->db->from('login');
        $this->db->where('email', $username);
        $this->db->where('password', $password);
        $query = $this->db->get();
        return $query;
    }

    // relationship table user role and table login 
    public function GetAkses()
    {
       $this->db->select('*');
       $this->db->from('login');
       $this->db->join('role','login.role_id = role.role_id');
       $this->db->where('role.role_id');
       $query  = $this->db->get();
       return $query;
    }





    // otoritas forgot password by email for reset password 
    public function saveResetToken($email, $token)
    {
        // Simpan token reset password ke dalam tabel 'login'
        $this->db->set('token', $token);
        $this->db->where('email', $email);
        $this->db->update('login');
    }

    public function getEmailByToken($token)
    {
        // Dapatkan email pengguna berdasarkan token reset password
        $this->db->select('email');
        $this->db->from('login');
        $this->db->where('token', $token);
        $query = $this->db->get();
        $result = $query->row();
        if ($result) {
            return $result->email;
        }
        return null;
    }

    public function updatePasswordByToken($token, $password)
    {
        // Perbarui password pengguna berdasarkan token reset password
        $this->db->set('password', $password);
        $this->db->set('token', null);
        $this->db->where('token', $token);
        $this->db->update('login');
        return $this->db->affected_rows() > 0;
    }
}
