<?php
include_once './util/corpo.php';
include_once './util/conectaBD.php';

cabeca();
descricaoCadastrarUsuarios();
?>


<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
              <a class="nav-link " href="index.php">
              <span data-feather="home"></span>
             Painel de Controle <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link " href="cadastrar_Filmes.php" active>
              <span data-feather="file"></span>
              Adicionar Filmes
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link " href="buscar_filme.php">
              <span data-feather="database"></span>
              Buscar Filme
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link active" href="cadastroUsuario.php">
              <span data-feather="users"></span>
              Cadastrar Usuario
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="mail"></span>
              Contato
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="log-out"></span>
              Sair
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Aviso Salvos</span>
          <a class="d-flex align-items-center text-muted" href="#">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<!--        <h1 class="h2">Painel Controle</h1>-->
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
              <button type="button"  class="btn btn-sm btn-outline-secondary"><span title="imprimir" data-feather="printer">Imprimir</span></button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            Esta Semana
          </button>
        </div>
      </div>
        <div class="card">
            <div class="card-header">
                <center><h4 class="mb-0">Cadastro de Usuarios</h4></center>
                        </div>
   <!--<div class="card-header"><i class="fa fa-fw fa-globe"></i> <strong>Browse User</strong> <a href="add-users.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-plus-circle"></i> Add Users</a></div>-->
   <div class="card-body">
      <!--<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> Record added successfully!</div>-->
      <div class="col-sm-12">
         <!--<h3 class="card-title"><i class="fa fa-fw fa-search"></i> Buscar Filme</h3>-->
         <form method="get">
            <div class="row">
 <div class="container py-3">
    <div class="row">
        <div class="mx-auto col-sm-6">
                    <!-- form user info -->


<div class="card-body">
    <form class="form" role="form" autocomplete="off">
        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label">Nome</label>
            <div class="col-lg-9">
                <input class="form-control" type="text" value="">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label">Usuario</label>
            <div class="col-lg-9">
                <input class="form-control" type="text" value="">
            </div>
        </div>
             <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label">Senha</label>
            <div class="col-lg-9">
                <input class="form-control" type="password" value="">
            </div>
        </div>
                <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label"></label>
            <div class="col-lg-9">
                <input type="reset" class="btn btn-secondary" value="Apagar">
                <input type="submit" class="btn btn-primary" value="Enviar">
            </div>
        </div>
    </form>
</div>

                    <!-- /form user info -->
        </div>
    </div>
</div>
            </div>
         </form>
      </div>
   </div>
</div>
        <center><h2></h2></center>
      <div class="table-responsive">
        <div class="container">
   <div class="container-fluid">

</div>

<?php
rodape();
?>