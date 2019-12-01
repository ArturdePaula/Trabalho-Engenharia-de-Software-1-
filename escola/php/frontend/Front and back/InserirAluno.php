<!--
=========================================================
 Material Dashboard - v2.1.1
=========================================================

 Product Page: https://www.creative-tim.com/product/material-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/material-dashboard/blob/master/LICENSE.md)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

<?php
require_once '../../classes/aluno.php';
require_once '../../classes/aluno.php';
$usuario = new Usuario();
$aluno = new Aluno();
if (isset($_POST['matricula'])) {
  $matricula = $_POST['matricula'];
  $aluno->setMatricula($matricula);
  $aluno->insert();
  var_dump($aluno->insert());
}
/*
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$matricula = $_POST['matricula'];
$endereco = $_POST['endereco'];
$senha = $_POST['senha'];
*/
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- CSS Files -->


  <link href="/assets/css/material-dashboard.min.css?v=2.1.1" rel="stylesheet" />
  <title>Iserir_Aluno</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          EDUCATION
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Gestão Escolar
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Diretor
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="InserirAluno.php">

              <i class="material-icons">dashboard</i>
              <p>Adicionar aluno</p>
            </a>
          </li>
          <li class="nav-item active  ">
            <a class="nav-link" href="InserirProfessor.php">
              <i class="material-icons">dashboard</i>
              <p>Adicionar professor</p>
            </a>
          </li>
          <li class="nav-item active  ">
            <a class="nav-link" href="AlunosDiretor.php">
              <i class="material-icons">dashboard</i>
              <p>Alunos</p>
            </a>
          </li>
          <li class="nav-item active  ">
            <a class="nav-link" href="ProfessorDiretor.php">
              <i class="material-icons">dashboard</i>
              <p>Professores</p>
            </a>
          </li>
          <li class="nav-item active  ">
            <a class="nav-link" href="RelatorioAlunos.php">
              <i class="material-icons">dashboard</i>
              <p>Relatorio aluno</p>
            </a>
          </li>

          <!-- your sidebar here -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Adicionar Aluno</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">

              </li>
              <!-- your navbar here -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <!-- your content here -->

          <form action="InserirAluno.php" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Nome</label>
              <input type="text" class="form-control" id="Nome" aria-describedby="emailHelp" placeholder="">
    
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">CPF</label>
              <input type="text" class="form-control" id="Cpf" placeholder="">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">RG</label>
              <input type="text" class="form-control" id="Rg" placeholder="">
            </div>
            
            <div class="form-group">
              <label for="exampleInputPassword1">Matricula</label>
              <input type="text" class="form-control" id="Matricula" placeholder="" name="matricula">
            </div>


            <div class="form-group">
              <label for="exampleInputPassword1">Endereço</label>
              <input type="text" class="form-control" id="Endereço" placeholder="">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Senha</label>
              <input type="password" class="form-control" id="Senha" placeholder="">
            </div>
            

            <button type="submit" class="btn btn-primary">Inserir</button>
          </form>
        </div>
      </div>
     
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
</body>

</html>