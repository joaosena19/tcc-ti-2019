<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Horas por período</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Icone no browser -->
  <link rel="icon" href="logoicone.png">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>LISA</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>LISA - Estágio</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
  <!-- sidebar menu: : style can be found in sidebar.less -->
    <?php
    require('sidebar.php');
    ?>
  <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    <?php
        $ra = $_GET['ra'];

        require 'conexaobd.php';
        $sql = mysqli_query($link, "SELECT * FROM aluno WHERE ra = '$ra'");
        while($cont = mysqli_fetch_array($sql)){
              
    ?>
    </section>

    <!-- Main content -->
    <section class="content">
    <h3>
      <?php echo $cont['nome']; ?>
        <small>RA: <?php echo $cont['ra']; ?></small>
      </h3>
    <?php
      } //fechando php ali em cima
    ?>
      <div class="row">
        <div class="col-xs-12">
          

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Dia</th>
                  <th>Hora de Entrada</th>
                  <th>Hora de Saída</th>
                  <th>Total do Dia</th>
                  
                </tr>
                </thead>
                <tbody>
                
                <?php

                $ra = $_GET['ra'];
                $dataInicial = $_GET['dataInicial'];
                $dataFinal = $_GET['dataFinal'];

                require('conexaobd.php');

                
                $sqlAluno = "SELECT * FROM aluno WHERE ra = '$ra'";

                $resultadoAluno = mysqli_query($link, $sqlAluno);  





                /* -------------------------------------------------------- */
                /* Só pra passar o nome no get pra depois ir pros logs */
                $sql = mysqli_query($link, "SELECT * FROM aluno WHERE ra = '$ra'");
                while($cont = mysqli_fetch_array($sql)){
                  $nome2 = $cont['nome'];
                }
                /* -------------------------------------------------------- */




                /* -------------------------------------------------------- */

                $sqlHorasGeral = "SELECT * FROM horasGeral WHERE ra = $ra";

                $resultadoHorasGeral = mysqli_query($link, $sqlHorasGeral);

                while ($contHorasGeral = mysqli_fetch_array($resultadoHorasGeral))
                {
                  $idHorasGeral = $contHorasGeral['idHorasGeral'];
                  $totalGeral = $contHorasGeral['horasTotal'];
                }


                /* -------------------------------------------------------- */

                $sqlHorasGeralDetalhes = "SELECT * FROM horasGeralDetalhes WHERE idHorasGeral = '$idHorasGeral' AND data BETWEEN '$dataInicial' AND '$dataFinal'";

                $resultadoHorasGeralDetalhes = mysqli_query($link, $sqlHorasGeralDetalhes);



                $inc = 0;
                $horasPeriodoSegundos = 0;
                
                while ($contHorasGeralDetalhes = mysqli_fetch_array($resultadoHorasGeralDetalhes))
                {
                  $idHorasGeralDetalhes = $contHorasGeralDetalhes['idHorasGeralDetalhes'];
                  $dataHorasGeralDetalhes = $contHorasGeralDetalhes['data'];
                  $horaInicialHorasGeralDetalhes = $contHorasGeralDetalhes['horaInicial'];
                  $horaFinalHorasGeralDetalhes = $contHorasGeralDetalhes['horaFinal'];
                  $horaDiaHorasGeralDetalhes = $contHorasGeralDetalhes['horaDia'];

                  echo "
                    <tr>
                      <td>".$dataHorasGeralDetalhes."</td>
                      <td>".$horaInicialHorasGeralDetalhes."</td>
                      <td>".$horaFinalHorasGeralDetalhes."</td>
                      <td>".$horaDiaHorasGeralDetalhes."</td>
                    </tr>
                  ";

                  $horaPeriodohora = substr($horaDiaHorasGeralDetalhes, 0, 2);
                  $horaPeriodominuto = substr($horaDiaHorasGeralDetalhes, -5, 2);
                  $horaPeriodosegundo = substr($horaDiaHorasGeralDetalhes, -2);

                  if(is_numeric($horaPeriodohora)){
                    $hora_periodo_segundos = $horaPeriodohora * 3600;
                    $minuto_periodo_segundos = $horaPeriodominuto * 60;
                    $segundo_periodo_segundos = $horaPeriodosegundo;
  
                    $horasPeriodoSegundos_soma = $hora_periodo_segundos + $minuto_periodo_segundos + $segundo_periodo_segundos;
  
                    $horasPeriodoSegundos = $horasPeriodoSegundos + $horasPeriodoSegundos_soma;
                  }



                  $inc++;
                }

                if($inc == 0){
                  echo '<script>
                  alert("O aluno ainda não realizou nenhum estágio dentro do período") 
                  location.href="javascript: history.go(-1)"
                  </script>';

                }

                $segundosfinal = $horasPeriodoSegundos % 60; /* segudos final */
                $minutosdesegundos = $horasPeriodoSegundos / 60;
                $minutosdesegundos2 = (int)$minutosdesegundos; 
            
                $minutosfinal = $minutosdesegundos2 % 60; /* minutos final */
                $horasdeminutos = $minutosdesegundos2 / 60;
                $horasdeminutos2 = (int)$horasdeminutos; /* horas final */
            
            
                if ($segundosfinal < 10){
                  $horaPeriodoSegundos = "0".$segundosfinal;
                }
                else{
                  $horaPeriodoSegundos = $segundosfinal;
                }
            
                if ($minutosfinal < 10){
                  $horaPeriodoMinutos = "0".$minutosfinal;
                }
                else{
                  $horaPeriodoMinutos = $minutosfinal;
                }
            
                if ($horasdeminutos2 < 10){
                  $horaPeriodoHoras = "0".$horasdeminutos2;
                }
                else{
                  $horaPeriodoHoras = $horasdeminutos2;
                }
            
                $horaPeriodo = $horaPeriodoHoras . ":" . $horaPeriodoMinutos . ":" . $horaPeriodoSegundos;

                ?>


                </tbody>
                <tfoot>
                </tfoot>
              </table>
              <p>Exibindo registros de <?php echo $dataInicial; ?> até <?php echo $dataFinal; ?></p>
              <p>Total do período: <?php echo $horaPeriodo; ?></p>
              <p>Total geral: <?php echo $totalGeral; ?></p>

                <!-- imprimir -->
              <script>
                function cont(){
                  this.window.print();
                  this.window.close();
                }
                window.onload = cont();
                window.onafterprint = function() {
                history.go(-1);
                };

              </script>

              <!-- logs -->
              <?php  
            
                if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
                {
                  unset($_SESSION['usuario']);
                  unset($_SESSION['senha']);
                  header('location:login.php');
                }
                $logado = $_SESSION['usuario'];
                date_default_timezone_set('America/Sao_Paulo');
                $hora = date('Y-m-d H:i:s');
                $acao = "Gerou relatório de horas por período do(a) aluno(a) $nome2, referente a $dataInicial até $dataFinal";
                $usuario = $logado;
                $ip = $_SERVER['REMOTE_ADDR'];

                require('conexaobd.php'); 

                $sqlinsert6 = "INSERT INTO logs (hora, ip, acao, usuario) VALUES ('$hora', '$ip', '$acao', '$usuario')";

                mysqli_query($link,$sqlinsert6)or die("Não foi possivel salvar no banco6");
              ?>
              <!-- fim de logs -->


            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>

  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : false,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>