<?php
  session_start();

  require_once 'conexao.php';

  if (isset($_POST['bt_delete'])) {
    $iduser = $_SESSION['iduser'];

    $sql = "DELETE FROM users WHERE iduser = '$iduser';";
    
    if (mysqli_query($con, $sql)) {  
      session_destroy();    
      
      header('Location: ../register.php');
    }  
  }
  
  mysqli_close($con);
?>