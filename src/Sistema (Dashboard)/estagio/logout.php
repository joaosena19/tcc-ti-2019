<!-- logs -->
<?php  
session_start();
  if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
  {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('location:login.php');
  }
  $logado = $_SESSION['usuario'];

  date_default_timezone_set('America/Sao_Paulo');
  $hora = date('Y-m-d H:i:s');
  $acao = "Encerrou sessão";
  $usuario = $logado;
  $ip = $_SERVER['REMOTE_ADDR'];

  require('conexaobd.php'); 

  $sqlinsert = "INSERT INTO logs (hora, ip, acao, usuario) VALUES ('$hora', '$ip', '$acao', '$usuario')";

  mysqli_query($link,$sqlinsert)or die("Não foi possivel salvar no banco");
?>
<!-- fim de logs -->


<?php
// aceder às sessões
session_start();
 
// para terminar uma sessão, apenas é necessário destruí-la
session_destroy();
 
// redirecionar o utilizador para outra página, login.php por exemplo
header('Location: login.php');
?>