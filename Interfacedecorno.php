<?php

include 'Connect.php';
include 'Pessoas.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Pessoa1 = new Pessoa($_POST['nome'],$_POST['telefone'],$_POST['email']);
    

    if($Pessoa1->inserir()){
        header('Location: index2.php?mensagem=success');
    }else{
        header('Location: index2.php?mensagem=Error');
    }
}

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $Pessoa1 = new Pessoa();
    if(isset($_GET['idcadastro']) && isset($_GET['action']) && $_GET['action'] == 'delete'){
        
        if($Pessoa1->delete($_GET['idcadastro'])){
            header('Location: index2.php?mensagem=success');
        }else{
            header('Location: index2.php?mensagem=Error');
        }
    }
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['atualizar'])){
    $idcadastro = $_POST['id'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    $Pessoa1 = new Pessoa();
    if ($Pessoa1->atualizar($id, $nome, $telefone, $email)) {
        header('Location: index2.php?mensagem=Atualizado com sucesso');
    } else {
        header('Location: index2.php?mensagem=Erro ao atualizar');
    }
}

//$Pessoa1 = new Pessoa("All game Strupa","718383838","lele@gmail.com");

