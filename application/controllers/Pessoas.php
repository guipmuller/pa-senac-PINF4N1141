<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoas extends CI_Controller {

    public function index() {
        echo 'lista';
    }

    public function novo() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('pessoas/formpessoas');
        $this->load->view('templates/footer');
    }

    public function lista() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('pessoas/listapessoas');
        $this->load->view('templates/footer');
    }

    public function salvar_novo() {
        //inserção no banco
        //echo '<pre>';
        //var_dump($_POST);
        //exit;


        $this->load->database();

        $data = array(
            'nome' => $this->input->post('nome'),
            'login' => $this->input->post('login'),
            'cpf' => $this->input->post('cpf'),
            'data' => $this->input->post('data'),
            'email' => $this->input->post('email'),
            'senha' => $this->input->post('senha'),
            'confirmasenha' => $this->input->post('confirmasenha'),
            'endereco' => $this->input->post('endereco'),
        );

        $this->db->insert('pessoas', $data);
    }

}
