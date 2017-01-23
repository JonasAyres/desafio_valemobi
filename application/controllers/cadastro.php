<?<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*Define que a classe cadastro não pode ser acessada diretamente pela URL*/
class Cadastro extends CI_Controller {
    /*Função construct carrega todos os helpers, librarys e models que serão utilizados na pagina cadastro */        
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('array');
        $this->load->library('form_validation');
        $this->load->model('modelCadastro','ModelCadastro');
    }/*Função index carrega as views necessarias para exibição da pagina e também exibe os dados carregados da base de dados */
    public function index(){
        $this->data['pagina']="cadastro/cadastroProdutos";//Carrega a sessão correspondente a pagina cadastro de Produtos.
        $this->data['categoria'] = $this->ModelCadastro->get_all()->result();//Faz a consulta ao banco de dados do que será exibido na view.
        $this->load->view('default',$this->data);//Carregas a view defult e a pagina que será exibida na section.
    }/*Função cadastrar pega os dados vindos da view e faz a sua inserção no banco de dados*/
    public function cadastrar() {
        $dadosProd = elements(array('codigo','nome','quantidade','preco','tipo_negocio','categoria_id'),$this->input->post());
        //Cria a variavel $dadosProd e pega os valores vindos da view pelo metodo post.
        $this->ModelCadastro->do_insertProduto($dadosProd);//Insere os dados da variável no banco de dados.
        if($this->db->affected_rows() > 0)://Verifica se a inserção ocorreu corretamente.
        print_r ("Cadastro efeutado com sucesso!");
        redirect('lista', 'refresh');//Se a inserção de dados ocorreu corretamente, exibe uma mensagem e redireciona para a pagina lista.
        else:
        set_msg('msgerro', 'Erro ao inerir dados!', 'erro');//Caso a inserção não tenha ocorrido corretamente exibe uma mensagem de erro.
        endif;
    }/*Função categoria carrega as views necessarias para exibição da pagina  */
    public function categoria() {
        $this->data['pagina']="cadastro/cadastroCategoria";//Carrega a sessão correspondente a pagina categoria.
        $this->load->view('default',$this->data);//Carregas a view defult e a pagina que será exibida na section.
    }/*Função cadastrarCat pega os dados vindos da view e faz a sua inserção no banco de dados*/
    public function cadastroCat() {
        $dados = elements(array('nome'),$this->input->post());//Cria a variavel $dados e pega os valores vindos da view pelo metodo post.
        $this->ModelCadastro->do_insert($dados);//Insere os dados da variável no banco de dados.
        if($this->db->affected_rows() > 0)://Verifica se a inserção ocorreu corretamente.
        print_r ("Cadastro efeutado com sucesso!");
        redirect('cadastro', 'refresh');//Se a inserção de dados ocorreu corretamente, exibe uma mensagem e redireciona para a pagina de cadastro de produtos.
        else:
        set_msg('msgerro', 'Erro ao inerir dados!', 'erro');//Caso a inserção não tenha ocorrido corretamente exibe uma mensagem de erro.
        endif;
    }
}
