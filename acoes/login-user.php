<?php
    session_start();

    require_once 'conexao.php';
    
    if(isset($_POST['bt_register'])){
        $emailAddress = mysqli_real_escape_string($con, $_POST['emailAddress']);
        $password = md5(mysqli_real_escape_string($con, $_POST['password']));

        $sql = "SELECT * FROM users WHERE email = '$emailAddress' and password = '$password';";

        $resultado = mysqli_query($con, $sql);
        
        if(mysqli_affected_rows($con) > 0){
            $dados = mysqli_fetch_array($resultado);
            
            $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
            $_SESSION['iduser'] = $dados['iduser'];
            $_SESSION['idemail'] = $dados['idemail'];

            header('Location: ../index.php');
        } else {
            $_SESSION['mensagem'] = "Cadastro não foi realizado. Tente novamente!";
        }

        mysqli_close($con);
    }
?>