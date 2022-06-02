<?php
    session_start();

    require_once 'conexao.php';
    
    if(isset($_POST['bt_login'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = md5(mysqli_real_escape_string($con, $_POST['password']));

        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password';";

        $resultado = mysqli_query($con, $sql);
        
        if(mysqli_affected_rows($con) > 0){
            $dados = mysqli_fetch_array($resultado);

            $_SESSION['iduser'] = $dados['iduser'];
            $_SESSION['name'] = $dados['name'];
            
            header('Location: ../user.php');
        } else {
           header('Location: ../login.php'); 
        }

        mysqli_close($con);
    }
?>