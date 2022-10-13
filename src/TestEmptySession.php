<?php   
    if(empty($_SESSION)){
      $_SESSION['role']="";
    }
  
    if($_SESSION['role'] === ""){
      header('Location: role.php');
    }
?>