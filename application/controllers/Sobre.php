<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sobre extends CI_Controller {

    public function index() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('sobre');
        $this->load->view('templates/footer');
    }

}
