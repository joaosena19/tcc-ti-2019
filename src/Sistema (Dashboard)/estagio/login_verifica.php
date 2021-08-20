<?php 
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['usuario'];
$senha = $_POST['senha'];
// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.

// A variavel $result pega as varias $usuario e $senha, faz uma 
//pesquisa na tabela de usuarios

  require("conexaobd.php");
  $result = mysqli_query($link, "SELECT * FROM administrador WHERE usuario ='$login' AND senha = '$senha'");


/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi 
bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor
será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do 
resultado ele redirecionará para a página site.php ou retornara  para a página 
do formulário inicial para que se possa tentar novamente realizar o usuario */
if(mysqli_num_rows ($result) > 0 )
{
$_SESSION['usuario'] = $login;
$_SESSION['senha'] = $senha;
header('location:index.php');

  $logado = $_SESSION['usuario'];

  date_default_timezone_set('America/Sao_Paulo');
  $hora = date('Y-m-d H:i:s');
  $acao = "Iniciou sessão";
  $usuario = $logado;
  $ip = $_SERVER['REMOTE_ADDR'];

  $sqlinsert6 = "INSERT INTO logs (hora, ip, acao, usuario) VALUES ('$hora', '$ip', '$acao', '$usuario')";

  mysqli_query($link,$sqlinsert6)or die("Não foi possivel salvar no banco6");


}
else{

  $_SESSION['usuario'] = $login;
  $logado = $_SESSION['usuario'];
  $usuario = $logado;


  date_default_timezone_set('America/Sao_Paulo');
  $hora = date('Y-m-d H:i:s');
  $acao2 = "Tentativa malsucedida de iniciar sessão";
  $ip = $_SERVER['REMOTE_ADDR'];

  $sqlinsert7 = "INSERT INTO logs (hora, ip, acao, usuario) VALUES ('$hora', '$ip', '$acao2', '$usuario')";

  mysqli_query($link,$sqlinsert7)or die("Não foi possivel salvar no banco6");

  unset ($_SESSION['usuario']);
  unset ($_SESSION['senha']);
  header('location:login.php');


   
  }
?>