<?php

class Locations_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
   
    public function set_loc($data)
    {
        $this->input->post('user_id');
        $this->input->post('title');
        $this->input->post('slug');
        $this->input->post('description');
        $this->input->post('address');
        $this->input->post('kel');
        $this->input->post('kec');
        $this->input->post('lat');
        $this->input->post('lon');
        $this->input->post('image');
        $this->input->post('timestamp');

        $this->db->insert('locations', $data);         
    }
    public function get_loc()
    {
        $this->db->order_by('locations.id', 'DESC');
        $this->db->join('users', 'users.id = locations.user_id');
        $query = $this->db->get('locations');
        return $query->result_array();
    }
    public function view_loc($slug)
    {
        $this->db->join('users', 'users.id = locations.user_id');
        $query = $this->db->get_where('locations', array('slug' => $slug));
        return $query->row_array();
    }
}
