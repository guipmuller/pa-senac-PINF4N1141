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

    public function editar($id) {
        $editarprodutos['produtos'] = $this->db->get('produtos')->result_array();
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('produtos/formprodutos', $editarprodutos);
        //$this->load->view('produtos/formprodutos', [
        //    'produto' =>
        //    [
        //        'id' => $id,
        //        'nome' => 'nome legal',
        //        'preco' => '10,99',
        //        'desc' => 'kdfjsl dfjksdl fsjdfl',
        //    ]
        //]);
        $this->load->view('templates/footer');
    }

    public function salvar_novo() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->database();
        $data1 = array(
            'nome' => $this->input->post('nome'),
            'preco' => $this->input->post('preco'),
            'descricao' => $this->input->post('descricao'),
            'imagem' => $this->input->post('imagem'),
        );
        $this->db->insert('produtos', $data1);
        redirect('/produtos/lista', 'location', 301);
    }

    public function atualizar() {
        $this->load->helper('html');
        $this->load->helper('url');
        $this->load->database();
        $data2 = array(
            'nome' => $this->input->post('nome'),
            'preco' => $this->input->post('preco'),
            'descricao' => $this->input->post('descricao'),
            'imagem' => $this->input->post('imagem'),
        );
        $this->db->update('produtos', $data2);
        redirect('/produtos/lista', 'location', 301);
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
