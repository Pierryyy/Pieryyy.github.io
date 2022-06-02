<?php
    session_start();

require_once 'conexao.php';

//verifica se o usuario apertou no botao de cadastrar
if (isset($_POST['bt_register'])) {
  //pegar os dados e inserir no banco
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $phone = (mysqli_real_escape_string($con, $_POST['phone']));
  $city = mysqli_real_escape_string($con, $_POST['city']);
  $cpf = (mysqli_real_escape_string($con, $_POST['cpf']));
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = md5(mysqli_real_escape_string($con, $_POST['password']));
  $keypix = mysqli_real_escape_string($con, $_POST['keypix']);
  
  $sql = "INSERT INTO users (name, phone, city, cpf, email, password, keypix) VALUES ('$name', '$phone', '$city', '$cpf', '$email', '$password', '$keypix')";
  
  if (mysqli_query($con, $sql)) {
    header('Location: ../login.php');
  }

  mysqli_close($con);
}