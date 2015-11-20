<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

    public function loja() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('produtos');
        $this->load->view('templates/footer');
    }

    public function carrinho() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('produtos/mostracarrinho');
        $this->load->view('templates/footer');
    }

    public function novo() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('produtos/formprodutos');
        $this->load->view('templates/footer');
    }

    public function salvar_novo() {
        $this->load->helper('url');
        $this->load->database();
        $data1 = array(
            'nome' => $this->input->post('nome'),
            'preco' => $this->input->post('preco'),
            'descricao' => $this->input->post('descricao'),
            'imagem' => $this->input->post('imagem'),
        );
        $this->db->insert('produtos', $data1);
        redirect('/produtos/lista');
    }

    public function editar($id) {
        $editarprodutos['produto'] = $this->db->get_where('produtos', array('idprodutos' => $id))->result_array();
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('produtos/formprodutos', $editarprodutos);
        $this->load->view('templates/footer');
    }

    public function atualizar() {
        $this->load->helper('url');
        $this->load->database();
        $id = $this->input->post('id');
        $data2 = array(
            'nome' => $this->input->post('nome'),
            'preco' => $this->input->post('preco'),
            'descricao' => $this->input->post('descricao'),
            'imagem' => $this->input->post('imagem'),
        );
        $this->db->where('idprodutos', $id);
        $this->db->update('produtos', $data2);
        redirect('/produtos/lista');
    }

    public function deletar($id) {
        $this->load->helper('url');
        $this->load->database();
        $this->db->delete('produtos', array('idprodutos' => $id));
        redirect('/produtos/lista');
    }

    public function lista() {
        $produtos['produtos'] = $this->db->get('produtos')->result_array();
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('produtos/listaprodutos', $produtos);
        $this->load->view('templates/footer');
    }

}
