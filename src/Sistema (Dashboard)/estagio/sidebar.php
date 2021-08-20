
<?php  
session_start();
if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['usuario']);
  unset($_SESSION['senha']);
  header('location:login.php');
  }
 
$logado = $_SESSION['usuario'];
?>

<section class="sidebar">
      
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">NAVEGAÇÃO</li>
        
        <li class="treeview">
          
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
          </ul>
        </li>
 
        </li>

        <li><a href="estagio.php"><i class="fa fa-table"></i> <span>Estágio</span></a></li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-align-justify"></i> <span>Listagem de Alunos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="listagemPrimeiroAno.php"><i class="fa fa-circle-o"></i> Primeiro ano</a></li>
            <li><a href="listagemSegundoAno.php"><i class="fa fa-circle-o"></i> Segundo ano</a></li>
            <li><a href="listagemTerceiroAno.php"><i class="fa fa-circle-o"></i> Terceiro ano</a></li>
            <li><a href="listagemAlunosGeral.php"><i class="fa fa-circle-o"></i> Todos os alunos</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa  fa-calculator"></i> <span>Listagem de Horas Totais</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="listagemPrimeiroAno_horas.php"><i class="fa fa-circle-o"></i> Primeiro ano</a></li>
            <li><a href="listagemSegundoAno_horas.php"><i class="fa fa-circle-o"></i> Segundo ano</a></li>
            <li><a href="listagemTerceiroAno_horas.php"><i class="fa fa-circle-o"></i> Terceiro ano</a></li>
          </ul>
        </li>

        <li class="treeview-menu">
        <li><a href="cadastro.php"><i class="fa fa-plus-circle"></i><span>Cadastro de Alunos</span></a></li>
        <li><a href="cadastroAdm.php"><i class="fa fa-users"></i><span>Administradores</span></a></li>
        <li><a href="logs.php"><i class="fa fa-clock-o"></i><span>Registro de Atividades</span></a></li>
        <li><a href="logout.php"><i class="fa fa-power-off"></i><span>Encerrar sessão</span></a></li>
       
      </ul>
    </section>