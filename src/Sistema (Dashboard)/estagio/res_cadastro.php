<?php

  $ra = $_GET['ra'];
  $nome = $_GET['nome'];
  $idAno = $_GET['idAno'];
  $cpf = $_GET['cpf'];
  $whatsapp = $_GET['whatsapp'];
  $email = $_GET['email'];

  require('conexaobd.php');

  $result = $link->query("SELECT * FROM aluno WHERE ra = '$ra'");

  if($ra == null){
    echo "<script>
    alert('O aluno precisa ter um RA');
    window.location.href='cadastro.php';
    </script>";
  }else{
  /* para nao dar erro caso o RA ja tenha sido cadastrado */
  if($result->num_rows == 0){
  
    $sqlinsert1 = "INSERT INTO aluno (ra, nome, idAno, cpf, whatsapp, email, statusEstagio) VALUES ('$ra', '$nome', '$idAno', '$cpf', '$whatsapp', '$email', 'Estágio pausado')";
    mysqli_query($link,$sqlinsert1)or die("Não foi possivel salvar no banco1");
  
    $sqlinsert5 = "INSERT INTO horasgeral (ra, horasTotal) VALUES ('$ra', '00:00:00')";
  
    mysqli_query($link,$sqlinsert5)or die("Não foi possivel salvar no banco5");
  
    echo '<script>
    alert("Aluno(a) '.$nome.' cadastrado com sucesso") 
    window.location.href = "cadastro.php";
    </script>';


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
  $acao = "Cadastrou o(a) aluno(a) $nome";
  $usuario = $logado;
  $ip = $_SERVER['REMOTE_ADDR'];

  require('conexaobd.php'); 

  $sqlinsert6 = "INSERT INTO logs (hora, ip, acao, usuario) VALUES ('$hora', '$ip', '$acao', '$usuario')";

  mysqli_query($link,$sqlinsert6)or die("Não foi possivel salvar no banco6");
    
  }
  else
  {
    echo "<script>
    alert('Já há um(a) aluno(a) com o mesmo RA cadastrado');
    window.location.href='cadastro.php';
    </script>";
  }
}

?>

<!-- logs --> <!-- ta no fim pois caso dê conflito de ra nao registrar cadastro -->

<!-- fim de logs -->