<?php
 include_once("./func/funcao.php");
 $email = $_POST["emailinput"];
 $senha = $_POST["senhainput"];
 $usuario = new Cliente($email,$senha);
 if ($usuario->autentica()) {
  header("location:home.php");
 }
 else {
  header("location:login.php");
 }

?>
