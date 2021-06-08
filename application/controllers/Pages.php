<?php
class Pages extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('users_model', 'locations_model');
    }

    public function index()
    {
        $data['title'] = 'Home';
        $data['profile'] = $this->session->userdata();
        $data['loc'] = $this->locations_model->get_loc();

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
        $data['profile'] = $this->session->userdata();
        $data['user'] = $this->users_model->getUsers()->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/flashdata', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data); 
    }

    public function buka($slug)
    {
        $data['title'] = 'View Post';
        $data['profile'] = $this->session->userdata();
        $data['post'] = $this->locations_model->view_loc($slug);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/flashdata');
        $this->load->view('pages/view', $data);
        $this->load->view('templates/footer', $data); 
    }
}