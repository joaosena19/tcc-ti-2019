<!-- necessidades para logs -->
<?php  
session_start();
  if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
  {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('location:login.php');
  }
  $logado = $_SESSION['usuario'];

  $usuario2 = $_GET['usuario'];
  date_default_timezone_set('America/Sao_Paulo');
  $hora = date('Y-m-d H:i:s');
  $acao = "Deletou administrador $usuario2";
  $usuario = $logado;
  $ip = $_SERVER['REMOTE_ADDR'];

  require('conexaobd.php'); 


?>
<!-- fim de necessidades para logs -->


<?php
$idAdmin = $_GET['idAdmin'];
require 'conexaobd.php';

if($logado == $usuario2){
  echo "<script>
      alert('Não é possível deletar a si mesmo')
      window.location.href='cadastroAdm.php';
      </script>";
}else{
  $sql5 = "DELETE FROM administrador WHERE idAdmin = '$idAdmin'";
mysqli_query($link, $sql5)or die("Não foi posivel deletar5!!"); 


/* logs */
$sqlinsert = "INSERT INTO logs (hora, ip, acao, usuario) VALUES ('$hora', '$ip', '$acao', '$usuario')";

mysqli_query($link,$sqlinsert)or die("Não foi possivel salvar no banco6");
/* fim de logs */

echo '<script>
      alert("Administrador '.$usuario2.' deletado com sucesso")
      window.location.href="cadastroAdm.php";
      </script>';

}


?>