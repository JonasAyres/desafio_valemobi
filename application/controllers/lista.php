<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*Define que a classe lista não pode ser acessada diretamente pela URL*/
class Lista extends CI_Controller {
    /*Função construct carrega todos os helpers, librarys e models que serão utilizados na pagina lista */    
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('array');
        $this->load->library('form_validation');
        $this->load->library('table');
        $this->load->model('modelCadastro','ModelCadastro');
    }/*Função index carrega as views necessarias para exibição da pagina e também exibe os dados carregados da base de dados */
    public function index(){
        $this->data['pagina']="lista/listaProdutos";//Carrega a sessão correspondente a pagina lista.
        $this->data['produto'] = $this->ModelCadastro->get_allProd()->result();//Faz a consulta ao banco de dados do que será exibido na view.
        $this->load->view('default',$this->data);//Carregas a view defult e a pagina que sera exibida na section.
        $this->table->set_heading('Código', 'Nome do Produto', 'Quantidade', 'Preço', 'Tipo de Ação', 'Categoria');//Cria uma tabela e seus respectivos campos.
        $prod=$this->ModelCadastro->get_allProd();//Cria a variavel $prod com dados do banco de dados
        echo $this->table->generate($prod);//Gera uma tabela e seus respectivos dados da consulta no banco de dados
    }
}


