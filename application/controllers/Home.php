<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*Define que a classe home não pode ser acessada diretamente pela URL*/
class Home extends CI_Controller {
    public function index(){
        /*Função index que chama a pagina principal do site*/
        $this->data['pagina']="home/index"; //Carrega a sessão correspondente a pagina inicial
        $this->load->view('default',$this->data); //Carregas a view defult e a pagina que sera exibida na section
    }
}

