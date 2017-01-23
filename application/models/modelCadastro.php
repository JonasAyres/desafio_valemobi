<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*Define que a classe home não pode ser acessada diretamente pela URL*/
class ModelCadastro extends CI_Model{
    /*Função do_insert verifica e insere os dados na tabela categoria no banco de dados*/        
    public function do_insert($dados=NULL){ //Verifica se os dados vindos do controler não são vazios.
        if($dados !=NULL){
            $this->db->insert('categoria',$dados); //Insere os dados no banco
        }
    }/*Função do_insertProduto insere os dados na tabela produto no banco de dados*/
    public function do_insertProduto($dadosProd=NULL){ //Verifica se os dados vindos do controler não são vazios.
        if($dadosProd !=NULL){
            $this->db->insert('produto',$dadosProd);//Insere os dados no banco
        }
    }/*Função get_all realiza uma consulta na tabela categoria*/
    public function get_all() {
        return $this->db->query('SELECT * FROM categoria'); //Retorna todos os dados salvos na tabela categoria.
    } /*Função get_allProd realiza uma consulta na tabela categoria e na tabela produto.*/
    public function get_allProd() {
        return $this->db->query('SELECT p.codigo, p.nome, p.quantidade, p.preco, tipo_negocio, c.nome as  nomeCat
            FROM categoria as c
            inner join produto as p on p.categoria_id=c.id'); /*Realiza uma consulta no banco de dados que retorna
o código, o nome, a quantidade, o preço, o tipo de negocio e a categoria do produto*/
    }
}