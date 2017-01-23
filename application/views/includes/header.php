<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Produtos Valemobi</title><!--Titulo da aplicação-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aplicação desenvolvida para o teste valemobi"><!--Descrição-->
    <meta name="author" content="Jonas Ayres"><!--Autor-->
    <link href="<?php echo base_url();?>public/css/scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>public/css/scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
    <!--Carrega a biblioteca bootstrap e bootstrap-respansive fremework CSS para agilizar o desenvolvimento da aplicação-->
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/scripts/fontawesome/css/font-awesome.min.css" type="text/css">
    <!--Carrega uma biblioteca de fonte-->
    <link href="<?php echo base_url();?>public/css/scripts/carousel/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>public/css/styles/custom.css" rel="stylesheet" type="text/css" />
    <!--Carrega arquivos CSS-->
    <script language="JavaScript" >
        function dadosCat(){
            if(document.dados.nome.value =="" || document.dados.nome.value.length < 3){//verifica se o campo é vazio e tem mais de 3 caracteres
            alert( "O campo categoria deve conter pelo menos 3 caracteres!" );//Caso o formulario esteja errado exibe uma mensagem de alerta
            document.dados.nome.focus();//Seleciona o campo que esta errado
            return false;}
        return true;}
    </script>
    <!--Script para validação do formulário Categoria-->
    <script language="JavaScript" >
        function enviardados(){
        if(document.dados.codigo.value=="" || document.dados.codigo.value.length <2){//verifica se o campo é vazio e tem mais de 2 caracteres
        alert( "O campo codigo deve conter apenas numeros!" );//Caso o formulario esteja errado exibe uma mensagem de alerta
        document.dados.codigo.focus();//Seleciona o campo que esta errado
        return false;
        }
        if( document.dados.nome.value=="" || document.dados.nome.value.lengt <5){//verifica se o campo é vazio e tem mais de 5 caracteres
        alert( "O campo Nome do Produto deve conter pelo menos 5 caracteres!" );//Caso o formulario esteja errado exibe uma mensagem de alerta
        document.dados.nome.focus();//Seleciona o campo que esta errado
        return false;
        }
        if (document.dados.quantidade.value=="" || document.dados.quantidade.value.lengt <1){//verifica se o campo é vazio e tem mais de 1 caracteres
        alert( "O campo quantidade deve conter apenas números!" );//Caso o formulario esteja errado exibe uma mensagem de alerta
        document.dados.quantidade.focus();//Seleciona o campo que esta errado
        return false;
        }
        if (document.dados.preco.value=="" || document.dados.preco.value.lengt <3 || document.dados.preco.value.indexOf(',')==-1){        //verifica se o campo é vazio, tem mais de 3 caracteres e esta no formato 3,00
        alert( "O campo Preço deve ser preenchido no formato correto!" );//Caso o formulario esteja errado exibe uma mensagem de alerta
        document.dados.preco.focus();//Seleciona o campo que esta errado
        return false;
        }
        if (document.dados.categoria_id.value=="selecione"){//verifica se o campo selecionado esta diferente de Selecione
        alert( "O campo Categoria deve ser selecionado!" );//Caso o formulario esteja errado exibe uma mensagem de alerta
        document.dados.categoria_id.focus();//Seleciona o campo que esta errado
        return false;
        }

        return true;
        }

    </script>
    <!--Script para validação do formulário Produto-->
</head>
<body id="pageBody"><!--Inicio do corpo da aplicação-->