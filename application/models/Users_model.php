<?php
class Users_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function signup($enc_password)
    {
        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => $enc_password,
            'img' => 'default.png',
            'role_id' => 2,
            'timestamps' => time()
        );

        return $this->db->insert('users', $data);
    }

    public function signin($email, $password)
    {
        // validate
        $this->db->where('email', $email);
        $this->db->where('password', $password);

        $result = $this->db->get('users');

        if ($result->num_rows() == 1) {
            return $result->row(0)->id;
        } else {
            return false;
        }
    }

    public function getUsers()
    {
        return $this->db->get('users');
    }
    
    public function update_foto($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('users', $data);
    }

    public function cekUser($where = null) 
    {
        return $this->db->get_where('users', $where);
    }

    public function email_exists($email)
    {
        $query = $this->db->get_where('users', array('email' => $email));

        if (empty($query->row_array())) {
            return true;
        } else {
            return false;
        }
    }
}
