<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoas extends CI_Controller {

//    public function login($email, $senha) {
//        $this->db->where('email', $email);
//        $this->db->where('senha', $senha);
//        isset($_SESSION['email','senha']);
//        if ($pessoa[0]['idpessoas'] = true) {
//            $this->session->user_login = true;
//            $this->session->user_id = $this->db->pessoas['idpessoas'];
//            $this->session->user_nome = $this->db->pessoas['email'];
//            $this->session->user_email = $this->db->pessoas['senha'];
//            redirect('/home/index');
//        } else {
//            $this->session->user_login = false;
//            $this->session->user_id = $this->db->pessoas['idpessoas'];
//            $this->session->user_nome = $this->db->pessoas['email'];
//            $this->session->user_email = $this->db->pessoas['senha'];
//            redirect('/home/index');
//        }
//
//criar ação para login (vai receber dados do form)
//nesta ação (function), buscar no banco por email recebido + sha1(senha)
//se usuario existir:
//redireciona sem 301
//senao
//volta mensagem de erro
//function logoff
//limpa user_logado da sessão
//limpa dados usuario sessão
//redireciona
//    }

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
            'endereco' => $this->input->post('endereco'),
        );
        $this->db->insert('pessoas', $data);
        redirect('/pessoas/sucesso');
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
            'endereco' => $this->input->post('endereco'),
        );
        $this->db->where('idpessoas', $id);
        $this->db->update('pessoas', $data1);
        redirect('/pessoas/lista');
    }

    public function deletar($id) {
        $this->load->helper('url');
        $this->load->database();
        if ($this->db->delete('pessoas', array('idpessoas' => $id))) {
            redirect('/pessoas/lista');
        } else {
            var_dump($this->db);
        }
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
