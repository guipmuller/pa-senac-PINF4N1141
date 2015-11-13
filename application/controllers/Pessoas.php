<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoas extends CI_Controller {

    public function novo() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('pessoas/formpessoas');
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

    public function editar($id) {
        $editarpessoas['pessoa'] = $this->db->get_where('pessoas', array('idpessoas' => $id))->result_array();
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('pessoas/formpessoas', $editarpessoas);
        $this->load->view('templates/footer');
    }

    public function atualizar() {
        $this->load->helper('url');
        $this->load->database();
        $id = $this->input->post('id');
        $data1 = array(
            'nome' => $this->input->post('nome'),
            'login' => $this->input->post('login'),
            'cpf' => $this->input->post('cpf'),
            'data' => $this->input->post('data'),
            'email' => $this->input->post('email'),
            'senha' => $this->input->post('senha'),
            'confirmasenha' => $this->input->post('confirmasenha'),
            'endereco' => $this->input->post('endereco'),
        );
        $this->db->where('idpessoas', $id);
        $this->db->update('pessoas', $data1);
        redirect('/pessoas/lista', 'location', 301);
    }

    public function deletar($id) {
        $this->load->helper('url');
        $this->load->database();
        $this->db->delete('pessoas', array('idpessoas' => $id));
        redirect('/pessoas/lista', 'location', 301);
    }

    public function lista() {
        $pessoas['pessoas'] = $this->db->get('pessoas')->result_array();
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('pessoas/listapessoas', $pessoas);
        $this->load->view('templates/footer');
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
