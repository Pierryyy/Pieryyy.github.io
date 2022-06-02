<?php
    session_start();

require_once 'conexao.php';

if (isset($_POST['bt_update'])) {
  $iduser = $_SESSION['iduser'];
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $phone = (mysqli_real_escape_string($con, $_POST['phone']));
  $city = mysqli_real_escape_string($con, $_POST['city']);
  $cpf = (mysqli_real_escape_string($con, $_POST['cpf']));
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $keypix = mysqli_real_escape_string($con, $_POST['keypix']);
  
  $sql = "UPDATE users SET 
          name =  '$name',
          phone = '$phone',
          city = '$city',
          cpf = '$cpf',
          email = '$email',
          keypix = '$keypix'
          WHERE iduser = '$iduser';";

  if (mysqli_query($con, $sql)) {    
    header('Location: ../user.php');
  } else {
    $_SESSION['mensagem'] = "Cadastro não foi realizado. Tente novamente!";
  }
}