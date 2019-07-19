<?php
include_once './util/corpo.php';
include_once './util/conectaBD.php';
$con = conectabd();

//insere filme
$queryIsereFilme="SELECT  `nome`, `sinopse`, `imdb`, `qualidade`, `ano`, `nome_original`, `link_fonte`, `link_imagem`, `categoria` FROM `filmes` ";
$resultados = mysqli_query($con, $queryIsereFilme);
cabeca();
descricaoBuscarFilmes();
?>

cabeca();
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
              <a class="nav-link active" href="buscar_filme.php">
              <span data-feather="database"></span>
              Buscar Filme
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="cadastroUsuario.php">
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
   <!--<div class="card-header"><i class="fa fa-fw fa-globe"></i> <strong>Browse User</strong> <a href="add-users.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-plus-circle"></i> Add Users</a></div>-->
   <div class="card-body">
      <!--<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> Record added successfully!</div>-->
      <div class="col-sm-12">
         <h3 class="card-title"><i class="fa fa-fw fa-search"></i> Buscar Filme</h3>
         <form method="get">
            <div class="row">
               <div class="col-sm-2">
                  <div class="form-group">
                     <label>Nome do Filme</label>
                     <input oninput="buscaFilmes(this.value);" type="text" name="nome" id="username" class="form-control" value="" >
                  </div>
               </div>
               <div class="col-sm-2">
                  <div class="form-group">
                     <label>Ano de Lancamento</label>
                     <input oninput="buscaFilmes(this.value);" name="ano" id="useremail" class="form-control" value="">
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="form-group">
                     <label>&nbsp;</label>
                     <div>
                        <button type="submit" name="submit" value="search" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-search"></i> Pesquisar</button>
                        <button type="reset" name="restar" value="" id="" class="btn btn-danger"><i class="fa fa-fw fa-sync"></i> Limpar</button>
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
          <div class="table-responsive">
        <table class="table table-striped table-sm">
         <table class="table table-striped table-responsive" >
        <thead>
            <tr><th>Nome</th><th>Nome Original</th><th>Sinopse</th><th>Nota Imdb</th><th>Ano Lancançamento</th><th>Qualidade</th><th>Link da Fonte</th><th>Link da Imagem</th><th>Categoria</th></tr>
    </thead>
        <tbody>
<?php
 
        while($resultado = mysqli_fetch_assoc($resultados)){
            echo "<tr>";
            echo "<td >" . $resultado['nome'] . "</td>";
            echo "<td >" . $resultado['nome_original'] . "</td>";
            echo "<td >" . $resultado['sinopse'] . "</td>";
            echo "<td >" . $resultado['imdb'] . "</td>";
            echo "<td >" . $resultado['ano'] . "</td>";
            echo "<td >" . $resultado['qualidade'] . "</td>";
            echo "<td >" . $resultado['link_fonte'] . "</td>";
            echo "<td >" . $resultado['link_imagem'] . "</td>";
            echo "<td >" . utf8_encode($resultado['categoria']) . "</td>";
            echo "</tr>";
        }
     
    ?>
        </tbody>
    </table>
        </table>
      </div>
      
      
   </div>
      </div>
    </main>
  </div>
</div>
<?php

rodape();
?>      