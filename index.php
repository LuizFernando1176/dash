<?php
include_once './util/corpo.php';
include_once './util/conectaBD.php';
$con = conectabd();

//insere filme
$queryIsereFilme="SELECT  `nome`, `sinopse`, `imdb`, `qualidade`, `ano`, `nome_original`, `link_fonte`, `link_imagem`, `categoria` FROM `filmes` ";
$resultados = mysqli_query($con, $queryIsereFilme);
cabeca();
?>
<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
              <a class="nav-link active" href="index.php">
              <span data-feather="home"></span>
             Painel de Controle <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="cadastrar_Filmes.php">
              <span data-feather="file"></span>
              Adicionar Filmes
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="buscar_filme.php">
              <span data-feather="database"></span>
              Buscar Filme
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Buscar Usuario 
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
        <h1 class="h2">Painel Controle</h1>
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

      

        <center> <h2>Relatorios de Filmes </h2></center>
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
    </main>
  </div>
</div>
<?php

rodape();
?>      