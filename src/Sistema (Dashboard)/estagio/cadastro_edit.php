<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Edição de Cadastro</title>
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
      <h1>
        Editar
        <small>UNASP-HT</small>
      </h1>
    </section>

    <!-- Main content -->
    <form method="GET" action="res_cadastro_edit.php" onsubmit="return confirm('Tem certeza que deseja realizar essa ação?');"> <!-- nao eh um form de vdd, eh soh uma tag por cima da section para o botao atualizar pegar informações de 2 forms simultaneamente -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
              
              <!-- /.box-header -->
              <!-- form start -->

            <?php
            $ra = $_GET['ra'];

            require 'conexaobd.php';
            $sql = mysqli_query($link, "SELECT * FROM aluno WHERE ra = '$ra'");
            while($cont = mysqli_fetch_array($sql)){
              
            ?>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> <!-- bibliotecas para mascara de cpf -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

              
              <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control" maxlength="255" name="nome" value="<?php echo $cont['nome']; ?>" >
                  </div>
                  <div class="form-group">
                    <label>RA</label>
                    <input type="text" class="form-control" maxlength="10" name="ra" value="<?php echo $cont['ra']; ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>CPF</label>
                    <input type="text" class="form-control" maxlength="14" placeholder="000.000.000-00" name="cpf" id="cpf" value="<?php echo $cont['cpf']; ?>" >
                    <script type="text/javascript"> /* script para mascara de cpf, puxando das bibliotecas la em cima */
                    $("#cpf").mask("000.000.000-00");
                    </script>
                  </div>
                  <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" class="form-control" maxlength="255" name="email" value="<?php echo $cont['email']; ?>">
                  </div>
                    <div class="form-group">
                    <label>Telefone (Whatsapp)</label>
                    <input type="text" class="form-control" maxlength="20" name="whatsapp" id="whatsapp" placeholder="+55 (00) 00000 0000" value="<?php echo $cont['whatsapp']; ?>">
                    <script type="text/javascript"> /* script para mascara de whatsapp, puxando das bibliotecas la em cima */
                    $("#whatsapp").mask("+55 (00) 00000 0000");
                    </script>
                  </div>
                  <div class="form-group">
                      <label for="idAno">Ano</label>
                      <select class="form-control" name="idAno" value="<?php echo $cont['idAno']; ?>">
                        <option value="<?php echo $cont['idAno']; ?>"><?php echo $cont['idAno']; ?>º Ano</option>
                        <option value="1">1º Ano</option>
                        <option value="2">2º Ano</option>
                        <option value="3">3º Ano</option>
                      </select>
                  </div>
                  <?php
                    } //fechando php la em cima q seleciona a tabela aluno
                  ?>
                 
                </div>
                <!-- /.box-body -->
  
                
              
              
            </div>
          <!-- /.box -->
          




        </div>
        <!--/.col (left) -->
        <!-- right column -->


        <div class="col-md-6">

          <!-- FORM HORAS TOTAL-->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="bold">!!!!ATENÇÃO!!!! AS HORAS TOTAIS SÃO CALCULADAS AUTOMATICAMENTE AO SEREM FINALIZADOS ESTÁGIOS OU INSERIDOS MANUALMENTE, ALTERAR ESSE CAMPO IRÁ IGNORAR TODOS OS ESTÁGIOS FEITOS ATÉ O MOMENTO</h3>

              <h3 class="bold">O CAMPO DEVE ESTAR NO PADRÃO 000:00:00</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> <!-- bibliotecas para mascara -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

            <script type="text/javascript"> /* script para mascara */
            $("#horasTotal").mask("000:00:00");
            </script>

            <?php
              $ra = $_GET['ra'];

              require 'conexaobd.php';
              $sql = mysqli_query($link, "SELECT * FROM horasgeral WHERE ra = '$ra'");
              while($cont = mysqli_fetch_array($sql)){
                
              $teste = null; 
              $valorHoraTotal = $cont['horasTotal'];
              $valorHoraTotalCorte = substr($valorHoraTotal, 0, 3);
              if(is_numeric($valorHoraTotalCorte)){
                $teste = null;
              }else{
                $teste = "0";
              }
              
            
            ?>
            <form class="form-horizontal">
                


                  <div class="box-body">
                    <div class="row">
                      <div class="col-xs-9">
                        <label type="text" class="">Horas totais:</label>
                      </div>
                      <div class="col-xs-3">
                        <input type="text" class="form-control" value="<?php echo $teste ?><?php echo $cont['horasTotal']; ?>" id="horasTotal" name="horasTotal">
                      </div>
                    </div>
                  </div>
              <!-- /.box-body -->
              <?php
              }
              ?>
            </form>
            </form> <!-- esse form -->
            </form>
            </form>
            
          </div>
          <!-- FORM EXTRA -->


          
          <!-- /.box -->
  
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->

        <input type="submit" class="btn btn-primary" name="atualizar" value = "Atualizar" id="atualizar"/>
        <button type="submit" class="btn btn-danger" name="cancelar">Cancelar</button>
        
     
    </section>
    <form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
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
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
