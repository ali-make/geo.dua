<?php
class Pages extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->database('users_model');
    }

    public function index()
    {
        $data['title'] = 'Home';
        $data['profile'] = $this->users_model->signin(['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/flashdata');
        $this->load->view('pages/home', $data);
        $this->load->view('templates/js-map');
        $this->load->view('templates/footer');
    }

    public function view($page = null)
    {
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
            show_404();
        }

        $data['title'] = ucfirst($page);
        $data['profile'] = $this->users_model->signin(['email' => $this->session->userdata('email')])->row_array();
        $data['user'] = $this->users_model->getUsers()->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/flashdata', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data); 
    }
}