<?php

  $usuario = $_GET['usuario'];
  $senha1 = $_GET['senha'];
  $senha2 = $_GET['senha2'];

  require('conexaobd.php');


  $result = $link->query("SELECT * FROM administrador WHERE usuario = '$usuario'");

  if ($usuario == null){
    echo "<script>
    alert('É necessário digitar um usuário');
    window.location.href='cadastroAdm.php';
    </script>";

  }
  else{

  /* para nao dar erro caso o admin ja tenha sido cadastrado */
  if($result->num_rows == 0){
  
  /* pra cadastrar só se as duas senhas coincidirem */
  if ($senha1 == $senha2){
    $sqlinsert1 = "INSERT INTO administrador (usuario, senha) VALUES ('$usuario', '$senha1')";
    mysqli_query($link,$sqlinsert1)or die("Não foi possivel salvar no banco1");
  
    echo '<script>
    alert("Adminitrador '.$usuario.' cadastrado com sucesso") 
    window.location.href = "cadastroAdm.php";
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

  date_default_timezone_set('America/Sao_Paulo');
  $hora = date('Y-m-d H:i:s');
  $acao = "Cadastrou o administrador $usuario";
  $usuario = $logado;
  $ip = $_SERVER['REMOTE_ADDR'];

  require('conexaobd.php'); 

  $sqlinsert6 = "INSERT INTO logs (hora, ip, acao, usuario) VALUES ('$hora', '$ip', '$acao', '$usuario')";

  mysqli_query($link,$sqlinsert6)or die("Não foi possivel salvar no banco6");
  

  }else{
    echo "<script>
    alert('Senhas não coincidem');
    window.location.href='cadastroAdm.php';
    </script>";
  }

}else{
  echo "<script>
  alert('Administrador já cadastrado');
  window.location.href='cadastroAdm.php';
  </script>";
}
}



?>
