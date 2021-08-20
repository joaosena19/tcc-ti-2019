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
  $acao = "Passou a turma de 2º Ano para o ano seguinte";
  $usuario = $logado;
  $ip = $_SERVER['REMOTE_ADDR'];

  require('conexaobd.php'); 

  $sqlinsert6 = "INSERT INTO logs (hora, ip, acao, usuario) VALUES ('$hora', '$ip', '$acao', '$usuario')";

  mysqli_query($link,$sqlinsert6)or die("Não foi possivel salvar no banco6");
?>
<!-- fim de logs -->


<?php

  require('conexaobd.php');

  if (isset ($_GET['novo_ano'])){
    $sqlupdate = "UPDATE aluno SET idAno=3 WHERE idAno=2";
    mysqli_query($link,$sqlupdate)or die("Não foi possivel altarar os dados no banco1");

  ?>

    <?php

      echo '<script>
      alert("Turma atualizada para o 3º Ano com sucesso") 
      window.location.href = "listagemTerceiroAno.php";
      </script>';
    }
    else{
      echo '<script>
      window.location.href = "listagemSegundoAno.php";
      </script>';

    }

    ?>
  



 
