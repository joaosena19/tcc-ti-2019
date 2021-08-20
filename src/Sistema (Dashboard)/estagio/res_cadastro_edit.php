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
  $acao = "Atualizou informações do(a) aluno(a) $nome";
  $usuario = $logado;
  $ip = $_SERVER['REMOTE_ADDR'];

  require('conexaobd.php'); 

  $sqlinsert6 = "INSERT INTO logs (hora, ip, acao, usuario) VALUES ('$hora', '$ip', '$acao', '$usuario')";

  mysqli_query($link,$sqlinsert6)or die("Não foi possivel salvar no banco6");
?>
<!-- fim de logs -->


<?php

  $ra = $_GET['ra'];
  $nome = $_GET['nome'];
  $idAno = $_GET['idAno'];
  $cpf = $_GET['cpf'];
  $whatsapp = $_GET['whatsapp'];
  $email = $_GET['email'];
  $horasTotal = $_GET['horasTotal'];



  require('conexaobd.php');

  if (isset ($_GET['atualizar'])){
    $sqlupdate = "UPDATE aluno SET ra='$ra', nome='$nome', idAno='$idAno', cpf='$cpf', whatsapp='$whatsapp', email='$email' WHERE ra = '$ra'";
    mysqli_query($link,$sqlupdate)or die("Não foi possivel altarar os dados no banco1");

    $sqlupdateb = "UPDATE horasgeral SET horasTotal='$horasTotal' WHERE ra = '$ra'";
    mysqli_query($link,$sqlupdateb)or die("Não foi possivel altarar os dados no bancob");

  ?> <!-- fechando php para informações pegadas pelo get do cadastro edit -->

    <?php

      echo '<script>
      alert("Cadastro do(a) aluno9a) '.$nome.' alterado com sucesso") 
      window.location.href = "cadastro_completo.php?ra='.$ra.'";
      </script>';
    }
    else{
      echo '<script>
      window.location.href = "cadastro_completo.php?ra='.$ra.'";
      </script>';

    }

    ?>
  



 
