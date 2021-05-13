<?php
class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->library('form_validation', 'upload');
        $this->load->database('users_model');
    }
    public function signup()
    {
        $data['title'] = 'Sign Up';

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|callback_email_exists');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password1', 'Confirm Password', 'matches[password]');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('templates/flashdata');
            $this->load->view('pages/signup', $data);
            $this->load->view('templates/footer');
        } else {
            $enc_password = md5($this->input->post('password'));

            $this->users_model->signup($enc_password);

            $this->session->set_flashdata('info', 'Congratulations now you are a member');

            redirect('users/signin');
        }
    }
    public function signin()
    {
        $data['title'] = 'Sign In';

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/flashdata');
            $this->load->view('pages/signin', $data);
            $this->load->view('templates/footer');
        } else {
            $email = $this->input->post('email', true);
            $password = md5($this->input->post('password', true));

            $user_id = $this->users_model->signin(['email' => $email, 'password' => $password])->row_array();

            if ($user_id) {
                $user_data = array(
                    'user_id' => $user_id,
                    'email' => $email,
                    'logged_in' => true
                );

                $this->session->set_userdata($user_data);

                $this->session->set_flashdata('user_loggedin', 'You are now signed in');

                redirect();
            } else {
                $this->session->set_flashdata('login_failed', 'Sign in is invalid');

                redirect();
            }
        }
    }
    public function signout()
    {
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('email');

        $this->session->set_flashdata('user_loggedout', 'You are now signed out');

        redirect();
    }
    public function email_exists($email)
    {
        $this->form_validation->set_message('email_exists', 'This email is taken.');

        if ($this->users_model->email_exists($email)) {
            return true;
        } else {
            return false;
        }
    }
    public function profile()
    {
        $data['title'] = 'Profile';
        $data['profile'] = $this->users_model->signin(['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/flashdata', $data);
        $this->load->view('pages/profile', $data);
        $this->load->view('templates/footer', $data);
    }
    public function ubahProfile()
    {
        $data['title'] = 'Ubah Profile';
        $data['profile'] = $this->users_model->signin(['email' => $this->session->userdata('email')])->row_array();
        

        $this->form_validation->set_rules('username', 'Username', 'required|trim', ['required' => 'Username can not be null']);

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/flashdata', $data);
            $this->load->view('pages/ubahProfile', $data);
            $this->load->view('templates/footer', $data); 
        } else {
            $username = $this->input->post('username', true);
            $email = $this->input->post('email', true);

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['upload_path'] = './assets/img/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max-size'] = '10000';
                $config['max-width'] = '2024';
                $config['max-height'] = '2024';
                $config['file_name'] = 'profile' . time();

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $gambar_lama = $data['profile']['img'];
                    if ($gambar_lama != 'default.png') {
                        unlink(FCPATH . '/assets/img/' . $gambar_lama);
                    }

                    $gambar_baru = $this->upload->data('file_name');
                    $this->db->set('img', $gambar_baru);
                } else { }
            }

            $this->db->set('username', $username);
            $this->db->where('email', $email);
            $this->db->update('users');

            $this->session->set_flashdata('success-foto', 'Photo profile updated');
            redirect('users/profile');
        }
    }
}
