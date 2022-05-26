<?php
    session_start();

    require_once 'conexao.php';

    //verifica se o usuario apertou no botao de cadastrar
    if(isset($_POST['bt_cadastrar'])){
        //pegar os dados e inserir no banco
        
        $nome = mysqli_real_escape_string($con, $_POST['nome']);
        $senha = mysqli_real_escape_string($con, $_POST['senha']);

        $sql = "INSERT INTO users (nome, senha) VALUES ('$nome', '$senha')";

        //verificar sucesso
        if(mysqli_query($con, $sql)){
            $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
            header('Location: ../index.php');
        } else {
            $_SESSION['mensagem'] = "Cadastro não foi realizado. Tente novamente!";
        }

        mysqli_close($con);
    }