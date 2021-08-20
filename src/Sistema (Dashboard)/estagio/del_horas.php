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
  /* 
  $idHorasGeralDetalhes2 = $_GET['idHorasGeralDetalhes'];
  $idHorasGeral = "SELECT idHorasGeral FROM horasGeralDetalhes WHERE idHorasGeralDetalhes = '$idHorasGeralDetalhes2'";
  $ra = "SELECT ra FROM horasGeral WHERE idHorasGeral = '$idHorasGeral'";
  $nome = "SELECT nome FROM aluno WHERE ra = $ra";
   
  nao funcionando, nome no log
  
  */
  
  $nome = $_GET['nome'];
  $data2 = $_GET['data2'];
  date_default_timezone_set('America/Sao_Paulo');
  $hora = date('Y-m-d H:i:s');
  $acao = "Deletou registro de estágio do(a) aluno(a) $nome referente a $data2";
  $usuario = $logado;
  $ip = $_SERVER['REMOTE_ADDR'];

  require('conexaobd.php'); 

  $sqlinsert = "INSERT INTO logs (hora, ip, acao, usuario) VALUES ('$hora', '$ip', '$acao', '$usuario')";

  mysqli_query($link,$sqlinsert)or die("Não foi possivel salvar no banco6".mysqli_error($link));
?>
<!-- fim de logs -->


<?php
$idHorasGeralDetalhes = $_GET['idHorasGeralDetalhes'];
$idHorasGeral = $_GET['idHorasGeral'];
require 'conexaobd.php';





    /* atualizando total geral */

    /* puxar valor do banco */
    $totalGeralAtual = "SELECT horasTotal FROM horasGeral WHERE idHorasGeral = '$idHorasGeral'";
    $resultTotalGeralAtual = mysqli_query($link,$totalGeralAtual);

    while ($row = $resultTotalGeralAtual->fetch_assoc()) {
      $totalGeralAtualValor = $row['horasTotal'];
    }

    $totalDiaDeletado = "SELECT horaDia FROM horasGeralDetalhes WHERE idHorasGeralDetalhes = '$idHorasGeralDetalhes'";
    $resultTotalDiaDeletado = mysqli_query($link,$totalDiaDeletado);

    while ($row = $resultTotalDiaDeletado->fetch_assoc()) {
      $totalDiaDeletadoValor = $row['horaDia'];
    }

    $totalDiaDeletadohora = substr($totalDiaDeletadoValor, 0, 2);
    $totalDiaDeletadominuto = substr($totalDiaDeletadoValor, -5, 2);
    $totalDiaDeletadosegundo = substr($totalDiaDeletadoValor, -2);

    $totalDiaDeletadohora_segundos = $totalDiaDeletadohora * 3600;
    $totalDiaDeletadominuto_segundos = $totalDiaDeletadominuto * 60;
    $totalDiaDeletadosegundo_segundos = $totalDiaDeletadosegundo;

    $totalDiaDeletado_segundos = $totalDiaDeletadohora_segundos + $totalDiaDeletadominuto_segundos + $totalDiaDeletadosegundo_segundos;



      /* checando pra passar de 100 horas de boa */
      $totalAtualhora = substr($totalGeralAtualValor, 0, 3);

    if(is_numeric($totalAtualhora)){
      $totalAtualhora = substr($totalGeralAtualValor, 0, 3);
    }else{
      $totalAtualhora = substr($totalGeralAtualValor, 0, 2);
    }
    /* fim */

    $totalAtualminuto = substr($totalGeralAtualValor, -5, 2);
    $totalAtualsegundo = substr($totalGeralAtualValor, -2);

    $totalAtualhora_segundos = $totalAtualhora * 3600;
    $totalAtualminuto_segundos = $totalAtualminuto * 60;
    $totalAtualsegundo_segundos = $totalAtualsegundo;

    $totalGeralAtual_segundos = $totalAtualhora_segundos + $totalAtualminuto_segundos + $totalAtualsegundo_segundos;
    $totalGeralNovo_segundos = $totalGeralAtual_segundos - $totalDiaDeletado_segundos; /* vindo la de cima, é os segundos totais feitos naquele estagio */;

    $segundosfinaltotal = $totalGeralNovo_segundos % 60; /* segudos final */
    $minutosdesegundostotal = $totalGeralNovo_segundos / 60;
    $minutosdesegundostotal2 = (int)$minutosdesegundostotal; 

    $minutosfinaltotal = $minutosdesegundostotal2 % 60; /* minutos final */
    $horasdeminutostotal = $minutosdesegundostotal2 / 60;
    $horasdeminutostotal2 = (int)$horasdeminutostotal; /* horas final */


    if ($segundosfinaltotal < 10){
      $horaDiaSegundosTotal = "0".$segundosfinaltotal;
    }
    else{
      $horaDiaSegundosTotal = $segundosfinaltotal;
    }

    if ($minutosfinaltotal < 10){
      $horaDiaMinutosTotal = "0".$minutosfinaltotal;
    }
    else{
      $horaDiaMinutosTotal = $minutosfinaltotal;
    }

    if ($horasdeminutostotal2 < 10){
      $horaDiaHorasTotal = "0".$horasdeminutostotal2;
    }
    else{
      $horaDiaHorasTotal = $horasdeminutostotal2;
    }

    $horaDiaTotal = $horaDiaHorasTotal . ":" . $horaDiaMinutosTotal . ":" . $horaDiaSegundosTotal;

if($totalDiaDeletado_segundos > $totalGeralAtual_segundos){
  $sql = "DELETE FROM horasGeralDetalhes WHERE idHorasGeralDetalhes = '$idHorasGeralDetalhes'";
  mysqli_query($link, $sql)or die("Não foi posivel deletar1!!"); 

  $sqlupdate = "UPDATE horasGeral SET horasTotal='00:00:00' WHERE idHorasGeral = '$idHorasGeral'";
  mysqli_query($link,$sqlupdate)or die("Não foi possivel altarar os dados no banco5 ".mysqli_error($link));

  echo '<script>
      alert("Horas do(a) aluno(a) '.$nome.' deletadas com sucesso") 
      location.href="javascript: history.go(-1);"
      </script>';

}
else{
$sql = "DELETE FROM horasGeralDetalhes WHERE idHorasGeralDetalhes = '$idHorasGeralDetalhes'";
mysqli_query($link, $sql)or die("Não foi posivel deletar1!!"); 

$sqlupdate = "UPDATE horasGeral SET horasTotal='$horaDiaTotal' WHERE idHorasGeral = '$idHorasGeral'";
mysqli_query($link,$sqlupdate)or die("Não foi possivel altarar os dados no banco5 ".mysqli_error($link));

echo '<script>
      alert("Horas do aluno '.$nome.' deletadas com sucesso") 
      location.href="javascript: history.go(-1);"
      </script>';
}
?>