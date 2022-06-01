<?php
    session_start();

    require_once 'conexao.php';

    //verifica se o usuario apertou no botao de cadastrar
    if(isset($_POST['bt_register'])){
        //pegar os dados e inserir no banco

        $emailAddress = mysqli_real_escape_string($con, $_POST['emailAddress']);
        $firstName = mysqli_real_escape_string($con, $_POST['firstName']);
        $password = md5(mysqli_real_escape_string($con, $_POST['password']));
        $birthdayDate = (mysqli_real_escape_string($con, $_POST['birthdayDate']));
        $cpf = (mysqli_real_escape_string($con, $_POST['cpf']));
        $phoneNumber = (mysqli_real_escape_string($con, $_POST['phoneNumber']));
        $cep = mysqli_real_escape_string($con, $_POST['cep']);
        $estate = mysqli_real_escape_string($con, $_POST['estate']);
        $city = mysqli_real_escape_string($con, $_POST['city']);
        $street = mysqli_real_escape_string($con, $_POST['street']);
        $houseNumber = mysqli_real_escape_string($con, $_POST['houseNumber']);


        $sql = "INSERT INTO users (firstName, password, emailAddress, birthdayDate, cpf, phoneNumber, cep, estate, city, street, houseNumber) VALUES ('$firstName', '$password', '$emailAddress', '$birthdayDate', '$cpf', '$phoneNumber', '$cep', '$estate', '$city', '$street', '$houseNumber')";

        //verificar sucesso
        if(mysqli_query($con, $sql)){
            $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
            header('Location: ../index.php');
        } else {
            $_SESSION['mensagem'] = "Cadastro não foi realizado. Tente novamente!";
        }

        mysqli_close($con);
    }