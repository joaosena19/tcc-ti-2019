<?php
$ra = $_GET['ra'];
$tipo = $_GET['tipo'];
$nome = $_GET['nome'];

if($tipo == "inicio"){
  require('conexaobd.php');

    /* conseguir pegar idHorasGeral pra colocar na tabela certa */
    $verificacaoEstagio = "SELECT statusEstagio FROM aluno WHERE ra = $ra";

    $resultadoVerificacaoEstagio = mysqli_query($link, $verificacaoEstagio);
    while ($cont = mysqli_fetch_array($resultadoVerificacaoEstagio))
    {
      $respostaVerificacaoEstagio = $cont['statusEstagio'];
    }

    if($respostaVerificacaoEstagio == "Estágio iniciado")
    {
      echo '<script>
      alert("Já há um estágio ativo no momento") 
      location.href="estagio.php"
      </script>';
    }else{

    
  
  
  require('conexaobd.php');

  /* logs */
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
  $acao = "Iniciou estágio do(a) aluno(a) $nome";
  $usuario = $logado;
  $ip = $_SERVER['REMOTE_ADDR'];

  require('conexaobd.php'); 

  $sqlinsert = "INSERT INTO logs (hora, ip, acao, usuario) VALUES ('$hora', '$ip', '$acao', '$usuario')";

  mysqli_query($link,$sqlinsert)or die("Não foi possivel salvar no banco log".mysqli_error($link));
  /* fim dos logs */



    /* status do estagio */
    $sqlupdate1 = "UPDATE aluno SET statusEstagio='Estágio iniciado' WHERE ra = '$ra'";
    mysqli_query($link,$sqlupdate1)or die("Não foi possivel altarar os dados no banco2".mysqli_error($link));


    date_default_timezone_set('America/Sao_Paulo');
    $dataCorte = date('Y-m-d H:i:s');
    $data = substr($dataCorte, 0, 10);
    $horaInicialCorte = date('Y-m-d H:i:s');
    $horaInicial = substr($horaInicialCorte, -8);

    
    /* conseguir pegar idHorasGeral pra colocar na tabela certa */
    $idHorasGeralBusca = "SELECT idHorasGeral FROM horasGeral WHERE ra = $ra";

    $resultado = mysqli_query($link, $idHorasGeralBusca);
    while ($cont = mysqli_fetch_array($resultado))
    {
      $idHorasGeral = $cont['idHorasGeral'];
    }

    $sqlinsert1 = "INSERT INTO horasgeraldetalhes (idHorasGeral, data, horaInicial) VALUES ('$idHorasGeral', '$data', '$horaInicial')";
    
    mysqli_query($link,$sqlinsert1)or die("Não foi possivel salvar no banco1 ".mysqli_error($link));

    



    
  
    echo "<script>
    window.location.href='estagio.php';
    </script>";
  }


}else if($tipo == "fim"){

  require('conexaobd.php');
  $ra = $_GET['ra'];

  $idHorasGeralBusca = "SELECT idHorasGeral FROM horasGeral WHERE ra = $ra";

  $resultado8 = mysqli_query($link, $idHorasGeralBusca);
  while ($cont8 = mysqli_fetch_array($resultado8))
  {
    $idHorasGeral = $cont8['idHorasGeral'];
  }

  $idHorasGeralDetalhesBusca = "SELECT idHorasGeralDetalhes FROM horasGeralDetalhes WHERE idHorasGeral = $idHorasGeral";

  $resultado7 = mysqli_query($link, $idHorasGeralDetalhesBusca);
  while ($cont7 = mysqli_fetch_array($resultado7))
  {
    $idHorasGeralDetalhes = $cont7['idHorasGeralDetalhes'];
  }


  $estagioFinalizado = "SELECT horaFinal FROM horasGeralDetalhes WHERE idHorasGeralDetalhes = '$idHorasGeralDetalhes'";
  $resultEstagioFinalizado = mysqli_query($link,$estagioFinalizado);

  /* puxar valor do banco */
  while ($row = $resultEstagioFinalizado->fetch_assoc()) {
    $respostaEstagioFinalizado = $row['horaFinal'];
  }

  if($respostaEstagioFinalizado === NULL){
    {

      require('conexaobd.php');
  
  
        /* logs */
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
        $acao = "Finalizou estágio do(a) aluno(a) $nome";
        $usuario = $logado;
        $ip = $_SERVER['REMOTE_ADDR'];
  
        require('conexaobd.php'); 
  
        $sqlinsert = "INSERT INTO logs (hora, ip, acao, usuario) VALUES ('$hora', '$ip', '$acao', '$usuario')";
  
        mysqli_query($link,$sqlinsert)or die("Não foi possivel salvar no banco log".mysqli_error($link));
        /* fim dos logs */
      
          /* conseguir pegar horaInical pq ela ja fechou dentro do if la atras */
          $idHorasGeralBusca = "SELECT idHorasGeral FROM horasGeral WHERE ra = $ra";
  
          $resultado = mysqli_query($link, $idHorasGeralBusca);
          while ($cont = mysqli_fetch_array($resultado))
          {
            $idHorasGeral = $cont['idHorasGeral'];
          }
  
          $idHorasGeralDetalhesBusca = "SELECT idHorasGeralDetalhes FROM horasGeralDetalhes WHERE idHorasGeral = $idHorasGeral";
  
          $resultado4 = mysqli_query($link, $idHorasGeralDetalhesBusca);
          while ($cont4 = mysqli_fetch_array($resultado4))
          {
            $idHorasGeralDetalhes = $cont4['idHorasGeralDetalhes'];
          }
  
          $horaInicial2 = "SELECT horaInicial FROM horasGeralDetalhes WHERE idHorasGeralDetalhes = $idHorasGeralDetalhes";
  
          $resultado2 = mysqli_query($link, $horaInicial2);
          while ($cont2 = mysqli_fetch_array($resultado2))
          {
            $horaInicial2 = $cont2['horaInicial'];
          }
          /* terminado o role pra pegar horasInicial */
  
      date_default_timezone_set('America/Sao_Paulo');
      $horaFinalCorte = date('Y-m-d H:i:s');
      $horaFinal = substr($horaFinalCorte, -8);
  
  
      $horaInicialhora = substr($horaInicial2, 0, 2);
      $horaInicialminuto = substr($horaInicial2, -5, 2);
      $horaInicialsegundo = substr($horaInicial2, -2);
    
      $horaFinalhora = substr($horaFinal, 0, 2);
      $horaFinalminuto = substr($horaFinal, -5, 2);
      $horaFinalsegundo = substr($horaFinal, -2);
  
      $hora_inicial_segundos = $horaInicialhora * 3600;
      $minuto_inicial_segundos = $horaInicialminuto * 60;
      $segundo_inicial_segundos = $horaInicialsegundo;
  
      $hora_final_segundos = $horaFinalhora * 3600;
      $minuto_final_segundos = $horaFinalminuto * 60;
      $segundo_final_segundos = $horaFinalsegundo;
  
      $hora_inicial_total_segundos = $hora_inicial_segundos + $minuto_inicial_segundos + $segundo_inicial_segundos;
  
      $hora_final_total_segundos = $hora_final_segundos + $minuto_final_segundos + $segundo_final_segundos;
  
      if ($hora_inicial_total_segundos > $hora_final_total_segundos)
      {
      $total_segundos_subtracao_pre = $hora_final_total_segundos + 86400;
      $total_segundos_subtracao = $total_segundos_subtracao_pre - $hora_inicial_total_segundos;
      }else{
      $total_segundos_subtracao = $hora_final_total_segundos - $hora_inicial_total_segundos;
      }
  
      $segundosfinal = $total_segundos_subtracao % 60; /* segudos final */
      $minutosdesegundos = $total_segundos_subtracao / 60;
      $minutosdesegundos2 = (int)$minutosdesegundos; 
  
      $minutosfinal = $minutosdesegundos2 % 60; /* minutos final */
      $horasdeminutos = $minutosdesegundos2 / 60;
      $horasdeminutos2 = (int)$horasdeminutos; /* horas final */
  
  
      if ($segundosfinal < 10){
        $horaDiaSegundos = "0".$segundosfinal;
      }
      else{
        $horaDiaSegundos = $segundosfinal;
      }
  
      if ($minutosfinal < 10){
        $horaDiaMinutos = "0".$minutosfinal;
      }
      else{
        $horaDiaMinutos = $minutosfinal;
      }
  
      if ($horasdeminutos2 < 10){
        $horaDiaHoras = "0".$horasdeminutos2;
      }
      else{
        $horaDiaHoras = $horasdeminutos2;
      }
  
  
  
      $horaDia = $horaDiaHoras . ":" . $horaDiaMinutos . ":" . $horaDiaSegundos;
  
  
      /* status do estagio */
      $sqlupdate2 = "UPDATE aluno SET statusEstagio='Estágio pausado' WHERE ra = '$ra'";
      mysqli_query($link,$sqlupdate2)or die("Não foi possivel altarar os dados no banco3 ".mysqli_error($link));
  
      /* atualizando dia */
      $sqlupdate3 = "UPDATE horasGeralDetalhes SET horaFinal='$horaFinal', horaDia='$horaDia' WHERE idHorasGeralDetalhes = '$idHorasGeralDetalhes'";
      mysqli_query($link,$sqlupdate3)or die("Não foi possivel altarar os dados no banco4 ".mysqli_error($link));
  
  
      /* atualizando total geral */
  
      $totalGeralAtual = "SELECT horasTotal FROM horasGeral WHERE idHorasGeral = '$idHorasGeral'";
      $resultTotalGeralAtual = mysqli_query($link,$totalGeralAtual);
  
      /* puxar valor do banco */
      while ($row = $resultTotalGeralAtual->fetch_assoc()) {
        $totalGeralAtualValor = $row['horasTotal'];
      }
      

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
      $totalGeralNovo_segundos = $totalGeralAtual_segundos + $total_segundos_subtracao/* vindo la de cima, é os segundos totais feitos naquele estagio */;
  
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
  
  
      $sqlupdate5 = "UPDATE horasGeral SET horasTotal='$horaDiaTotal' WHERE idHorasGeral = '$idHorasGeral'";
      mysqli_query($link,$sqlupdate5)or die("Não foi possivel altarar os dados no banco5 ".mysqli_error($link));
  
      echo "<script>
      window.location.href='estagio.php';
      </script>";
  
    }
  }
  else{
    echo '<script>
    alert("Não é possível finalizar um estágio que não foi iniciado") 
    location.href="estagio.php"
    </script>';
  
  }


}
else if($tipo == "time"){
  require('conexaobd.php');
  $ra = $_GET['ra']; 

  $idHorasGeralBusca = "SELECT idHorasGeral FROM horasGeral WHERE ra = $ra";

  $resultado8 = mysqli_query($link, $idHorasGeralBusca);
  while ($cont8 = mysqli_fetch_array($resultado8))
  {
    $idHorasGeral = $cont8['idHorasGeral'];
  }

  $idHorasGeralDetalhesBusca = "SELECT idHorasGeralDetalhes FROM horasGeralDetalhes WHERE idHorasGeral = $idHorasGeral";

  $resultado7 = mysqli_query($link, $idHorasGeralDetalhesBusca);
  while ($cont7 = mysqli_fetch_array($resultado7))
  {
    $idHorasGeralDetalhes = $cont7['idHorasGeralDetalhes'];
  }


  $estagioFinalizado = "SELECT horaFinal FROM horasGeralDetalhes WHERE idHorasGeralDetalhes = '$idHorasGeralDetalhes'";
  $resultEstagioFinalizado = mysqli_query($link,$estagioFinalizado);

  /* puxar valor do banco */
  while ($row = $resultEstagioFinalizado->fetch_assoc()) {
    $respostaEstagioFinalizado = $row['horaFinal'];
  }


  if ($respostaEstagioFinalizado === NULL){

 
  
  /* conseguir pegar horaInical pq ela ja fechou dentro do if la atras */
  $idHorasGeralBusca = "SELECT idHorasGeral FROM horasGeral WHERE ra = $ra";
  
  $resultado = mysqli_query($link, $idHorasGeralBusca);
  while ($cont = mysqli_fetch_array($resultado))
  {
    $idHorasGeral = $cont['idHorasGeral'];
  }

  $idHorasGeralDetalhesBusca = "SELECT idHorasGeralDetalhes FROM horasGeralDetalhes WHERE idHorasGeral = $idHorasGeral";

  $resultado4 = mysqli_query($link, $idHorasGeralDetalhesBusca);
  while ($cont4 = mysqli_fetch_array($resultado4))
  {
    $idHorasGeralDetalhes = $cont4['idHorasGeralDetalhes'];
  }

  $horaInicial2 = "SELECT horaInicial FROM horasGeralDetalhes WHERE idHorasGeralDetalhes = $idHorasGeralDetalhes";

  $resultado2 = mysqli_query($link, $horaInicial2);
  while ($cont2 = mysqli_fetch_array($resultado2))
  {
    $horaInicial2 = $cont2['horaInicial'];
  }
  /* terminado o role pra pegar horasInicial */

date_default_timezone_set('America/Sao_Paulo');
$horaFinalCorte = date('Y-m-d H:i:s');
$horaFinal = substr($horaFinalCorte, -8);


$horaInicialhora = substr($horaInicial2, 0, 2);
$horaInicialminuto = substr($horaInicial2, -5, 2);
$horaInicialsegundo = substr($horaInicial2, -2);

$horaFinalhora = substr($horaFinal, 0, 2);
$horaFinalminuto = substr($horaFinal, -5, 2);
$horaFinalsegundo = substr($horaFinal, -2);

$hora_inicial_segundos = $horaInicialhora * 3600;
$minuto_inicial_segundos = $horaInicialminuto * 60;
$segundo_inicial_segundos = $horaInicialsegundo;

$hora_final_segundos = $horaFinalhora * 3600;
$minuto_final_segundos = $horaFinalminuto * 60;
$segundo_final_segundos = $horaFinalsegundo;

$hora_inicial_total_segundos = $hora_inicial_segundos + $minuto_inicial_segundos + $segundo_inicial_segundos;

$hora_final_total_segundos = $hora_final_segundos + $minuto_final_segundos + $segundo_final_segundos;

if ($hora_inicial_total_segundos > $hora_final_total_segundos)
{
$total_segundos_subtracao_pre = $hora_final_total_segundos + 86400;
$total_segundos_subtracao = $total_segundos_subtracao_pre - $hora_inicial_total_segundos;
}else{
$total_segundos_subtracao = $hora_final_total_segundos - $hora_inicial_total_segundos;
}

$segundosfinal = $total_segundos_subtracao % 60; /* segudos final */
$minutosdesegundos = $total_segundos_subtracao / 60;
$minutosdesegundos2 = (int)$minutosdesegundos; 

$minutosfinal = $minutosdesegundos2 % 60; /* minutos final */
$horasdeminutos = $minutosdesegundos2 / 60;
$horasdeminutos2 = (int)$horasdeminutos; /* horas final */


if ($segundosfinal < 10){
$horaDiaSegundos = "0".$segundosfinal;
}
else{
$horaDiaSegundos = $segundosfinal;
}

if ($minutosfinal < 10){
$horaDiaMinutos = "0".$minutosfinal;
}
else{
$horaDiaMinutos = $minutosfinal;
}

if ($horasdeminutos2 < 10){
$horaDiaHoras = "0".$horasdeminutos2;
}
else{
$horaDiaHoras = $horasdeminutos2;
}



$horaDia = $horaDiaHoras . ":" . $horaDiaMinutos . ":" . $horaDiaSegundos;

echo '<script>
alert("Horário atual do(a) aluno(a) '.$nome.': \n\n'.$horaDia.'") 
location.href="estagio.php"
</script>';


}else{
  echo '<script>
alert("Estágio não iniciado") 
location.href="estagio.php"
</script>';
}


}








?>