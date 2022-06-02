<?php
    session_start();

    require_once 'conexao.php';
 
    $iduser = $_SESSION['iduser'];

    $sql = "SELECT * FROM users WHERE iduser = '$iduser';";

    $resultado = mysqli_query($con, $sql);
    $dados = mysqli_fetch_array($resultado);   
     
    $iduser = $dados['iduser'];
    $name = $dados['name'];
    $phone =  $dados['phone'];
    $city = $dados['city'];
    $cpf = $dados['cpf'];
    $email = $dados['email'];
    $keypix = $dados['keypix'];
    
    mysqli_close($con);
?>