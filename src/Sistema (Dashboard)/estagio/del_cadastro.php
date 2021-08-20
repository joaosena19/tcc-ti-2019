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

  $nome = $_GET['nome'];
  date_default_timezone_set('America/Sao_Paulo');
  $hora = date('Y-m-d H:i:s');
  $acao = "Deletou aluno(a) $nome";
  $usuario = $logado;
  $ip = $_SERVER['REMOTE_ADDR'];

  require('conexaobd.php'); 

  $sqlinsert = "INSERT INTO logs (hora, ip, acao, usuario) VALUES ('$hora', '$ip', '$acao', '$usuario')";

  mysqli_query($link,$sqlinsert)or die("Não foi possivel salvar no banco6");
?>
<!-- fim de logs -->


<?php
$ra = $_GET['ra'];
require 'conexaobd.php';

$idHorasGeralBusca = "SELECT idHorasGeral FROM horasGeral WHERE ra = $ra";

$resultado = mysqli_query($link, $idHorasGeralBusca);
while ($cont = mysqli_fetch_array($resultado))
{
  $idHorasGeral = $cont['idHorasGeral'];
}

$sql6 = "DELETE FROM horasgeraldetalhes WHERE idHorasGeral = '$idHorasGeral'";
mysqli_query($link, $sql6)or die("Não foi posivel deletar6!!".mysqli_error($link)); 

$sql = "DELETE FROM horasgeral WHERE ra = '$ra'";
mysqli_query($link, $sql)or die("Não foi posivel deletar1!!".mysqli_error($link)); 

$sql5 = "DELETE FROM aluno WHERE ra = '$ra'";
mysqli_query($link, $sql5)or die("Não foi posivel deletar5!!"); 



echo '<script>
      alert("Aluno(a) '.$nome.' deletado com sucesso") 
      window.location.href = "listagemAlunosGeral.php";
      </script>';

?>