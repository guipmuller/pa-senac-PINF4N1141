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
        //consulta do bd
        $this->load->library('pessoas');

        $pessoas = $this->db->select();

        //echo '<pre>';
        //var_dump($pessoas);
        //exit;


        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('pessoas/listapessoas', $pessoas);
        $this->load->view('templates/footer');
    }

    public function salvar_novo() {
        $this->load->helper('html');
        $this->load->helper('url');
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
        redirect('/pessoas/sucesso', 'location', 301);
    }

    public function editar() {
        exit;
        /* $this->load->helper('html');
          $this->load->helper('url');
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
          $this->db->update('pessoas', $data);
          redirect('/pessoas/listapessoas', 'location', 301); */
    }

    public function sucesso() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('pessoas/sucessocadastro');
        $this->load->view('templates/footer');
    }

}
