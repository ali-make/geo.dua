<?php

class Posting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('Locations_model');
    }

    public function lapor()
    {
        $data['title'] = 'Posting';
        $data['profile'] = $this->session->userdata();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('lat', 'Latitude', 'required');
        $this->form_validation->set_rules('lon', 'Longitude', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/flashdata');
            $this->load->view('pages/lapor', $data);
            $this->load->view('templates/footer');
        } else {
            $this->reverse_geo();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('templates/flashdata');
            $this->load->view('pages/lapor', $data);
            $this->load->view('templates/footer');
        }
    }

    public function reverse_geo()
    {
        $lat = $this->input->post('lat');
        $lon = $this->input->post('lon');

        $title = $this->input->post('title');
        $des = $this->input->post('description');

        $slug = url_title(strtolower($this->input->post('title')));

        $lan = 'id';
        $apikey = 'PxeAZYLiwtXcQL6UpA8cg5B8Zm-VCrhXMhEUfk93Oo4';
        $url = "https://revgeocode.search.hereapi.com/v1/revgeocode?at=$lat%2C$lon&lan=$lan&apikey=$apikey";

        $json = file_get_contents($url);

        $json = json_decode($json);


        $address = $json->items[0]->address->label;
        $kel = $json->items[0]->address->subdistrict;
        $kec = $json->items[0]->address->district;
        $lat = $json->items[0]->position->lat;
        $lon = $json->items[0]->position->lng;

        $user_id = $this->session->userdata('user_id');

        // upload image
        $config['upload_path'] = './assets/img/posts';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10048';
        $config['max_width'] = '3000';
        $config['max_height'] = '3000';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            //print_r($this->upload->display_errors());
            $post_image = 'post-sample-image.png';
        } else {
            $data = array('upload_path' => $this->upload->data());
            $post_image = $_FILES['userfile']['name'];
        }

        $data = array(
            'user_id' => $user_id,
            'title' => $title,
            'slug' => $slug,
            'description' => $des,
            'address' => $address,
            'kel' => $kel,
            'kec' => $kec,
            'lat' => $lat,
            'lon' => $lon,
            'image' => $post_image,
            'timestamp' => time()
        );

        $this->locations_model->set_loc($data);
    }
}
