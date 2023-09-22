<?php

class Model extends CI_Model
{

    public function AddData($tabel, $data = array())
    {
        $this->db->insert($tabel, $data);
    }
    //update data user
    public function UpdateData($tabel, $fieldid, $fieldvalue, $data = array())
    {
        $this->db->where($fieldid, $fieldvalue)->update($tabel, $data);
    }

    public function DeleteData($tabel, $fieldid, $fieldvalue)
    {
        $this->db->where($fieldid, $fieldvalue)->delete($tabel);
    }

    public function GetData($tabel)
    {
        $query = $this->db->get($tabel);
        return $query->result();
        
    }
    public function GetDataWhere($tabel, $id, $nilai)
    {
        $this->db->where($id, $nilai);
        $query = $this->db->get($tabel);
        return $query;
    }
    public function GetDataWhere2($tabel, $id, $nilai, $nilai2)
    {
        $this->db->where($id, $nilai2);
        $query = $this->db->get($tabel);
        return $query;
    }

    public function GetUserByRole()
    {
        $this->db->select('login.email,login.password, role.role_id, login.is_active,login.date_created');
        $this->db->from('login');
        $this->db->join('role', 'login.role_id = role.role_id');
        
        $query = $this->db->get();
        return $query;
    }

    public function GetMenuLink()
    {
        $this->db->select('login.nama_pengguna, menu.*');
        $this->db->from('login');
        $this->db->join('menu', 'login.id_pengguna = menu.id_pengguna', 'inner');
        
        $query = $this->db->get();
        return $query;
    }
    




    public function getAllMenus()
    {
        $this->db->select('icon');
        $this->db->from('menus');
        $query = $this->db->get();
    
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    
}
