<?php
$ra = $_GET['ra'];
$data = $_GET['data'];
$horaInicial = $_GET['horaInicial'];
$horaFinal = $_GET['horaFinal'];
  
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
      $acao = "Inseriu horas de estágio manualmente para o(a) aluno(a) $nome";
      $usuario = $logado;
      $ip = $_SERVER['REMOTE_ADDR'];

      require('conexaobd.php'); 

      $sqlinsert = "INSERT INTO logs (hora, ip, acao, usuario) VALUES ('$hora', '$ip', '$acao', '$usuario')";

      mysqli_query($link,$sqlinsert)or die("Não foi possivel salvar no banco log".mysqli_error($link));
      /* fim dos logs */

    
        
        $idHorasGeralBusca = "SELECT idHorasGeral FROM horasGeral WHERE ra = $ra";

        $resultado = mysqli_query($link, $idHorasGeralBusca);
        while ($cont = mysqli_fetch_array($resultado))
        {
          $idHorasGeral = $cont['idHorasGeral'];
        }


    $horaInicialhora = substr($horaInicial, 0, 2);
    $horaInicialminuto = substr($horaInicial, -5, 2);
    $horaInicialsegundo = substr($horaInicial, -2);
  
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


    /* atualizando dia */

    $sqlinsert2 = "INSERT INTO horasGeralDetalhes (idHorasGeral, data, horaInicial, horaFinal, horaDia) VALUES ('$idHorasGeral', '$data', '$horaInicial', '$horaFinal', '$horaDia')";
    mysqli_query($link,$sqlinsert2)or die("Não foi possivel altarar os dados no banco2 ".mysqli_error($link));
 






    

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

    echo '<script>
    location.href="horasDetalhes.php?ra='.$ra.'"
    </script>';



?>