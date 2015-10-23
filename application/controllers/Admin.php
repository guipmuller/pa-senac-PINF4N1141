<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('areaadmin');
        $this->load->view('templates/footer');
    }

    public function cliente() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('clientes/listacliente');
        $this->load->view('templates/footer');
    }

    public function produtos() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('produtos/listaproduto');
        $this->load->view('templates/footer');
    }

    public function clientes() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('clientes/listacliente');
        $this->load->view('templates/footer');
    }

    public function criaproduto() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('produtos/criaproduto');
        $this->load->view('templates/footer');
    }

}
