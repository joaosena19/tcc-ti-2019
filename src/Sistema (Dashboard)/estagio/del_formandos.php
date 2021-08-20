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
  $acao = "Deletou a turma de formandos atual";
  $usuario = $logado;
  $ip = $_SERVER['REMOTE_ADDR'];

  require('conexaobd.php'); 

  $sqlinsert = "INSERT INTO logs (hora, ip, acao, usuario) VALUES ('$hora', '$ip', '$acao', '$usuario')";

  mysqli_query($link,$sqlinsert)or die("Não foi possivel salvar no banco6");
?>
<!-- fim de logs -->


<?php


require 'conexaobd.php';

$sql = "SELECT * FROM aluno WHERE idAno = 3";

$resultado = mysqli_query($link, $sql);

while($cont = mysqli_fetch_array($resultado)){


$ra = $cont['ra'];
require 'conexaobd.php';

$idHorasGeralBusca = "SELECT idHorasGeral FROM horasGeral WHERE ra = $ra";

$reultado2 = mysqli_query($link, $idHorasGeralBusca);
while ($cont = mysqli_fetch_array($reultado2))
{
  $idHorasGeral = $cont['idHorasGeral'];
}

$sql6 = "DELETE FROM horasgeraldetalhes WHERE idHorasGeral = '$idHorasGeral'";
mysqli_query($link, $sql6)or die("Não foi posivel deletar6!!".mysqli_error($link)); 

$sql = "DELETE FROM horasgeral WHERE ra = '$ra'";
mysqli_query($link, $sql)or die("Não foi posivel deletar1!!".mysqli_error($link)); 

$sql5 = "DELETE FROM aluno WHERE ra = '$ra'";
mysqli_query($link, $sql5)or die("Não foi posivel deletar5!!"); 

}

echo '<script>
      alert("Turma de formandos deletada com sucesso") 
      window.location.href = "index.php";
      </script>';

?>