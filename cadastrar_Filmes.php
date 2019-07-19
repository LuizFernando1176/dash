<?php
include_once './util/corpo.php';

cabeca();
?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
   
	jQuery(document).ready(function() {
    jQuery('#ajax_form').submit(function() {
        var dados = jQuery(this).serialize();


        jQuery.ajax({
            type: "POST",
            url: "inserts/inserir_filmes.php",
            data: dados,
            success: function(data) {
                alert(data);
                $('#ajax_form').each(function() {
                    this.reset();
                });
            }

        })


        return false;
    });

});
     
	</script>
       
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
              <a class="nav-link active" href="cadastrar_Filmes.php" active>
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
        <center><h2>Cadastrar Filmes</h2></center>
      <div class="table-responsive">
        <div class="container">
   <div class="container-fluid">
      <br><br>
      <div class="card">
         
          <form method="post" id="ajax_form" style="padding: 2%;">
            <div class="row">
               <div class="col-sm">
                  <div class="form-group">
                     <label>Nome do Filme <span class="text-danger">*</span></label>
                     <input type="text" name="nome" id="nome" class="form-control"  required>
                  </div>
               </div>
                <div class="col-sm">
                  <div class="form-group">
                     <label>Nome do Original <span class="text-danger">*</span></label>
                     <input type="text" name="nome_original" id="nome_original" class="form-control"  required>
                  </div>
               </div>
               <div class="col-sm">
                  <div class="form-group">
                     <label>Sinopse Do Filme <span class="text-danger">*</span></label>
                     <input type="text" name="sinopse" id="sinopse" class="form-control"  required>
                  </div>
               </div>
               <div class="col-sm">
                  <div class="form-group">
                     <label>Nota do IMDB <span class="text-danger">*</span></label>
                     <input type="text" name="imdb" id="imdb" class="form-control"  required>
                  </div>
               </div>
                <div class="col-sm">
                  <div class="form-group">
                     <label>Ano de Lançamento <span class="text-danger">*</span></label>
                     <input type="text" name="ano" id="ano" class="form-control"  required>
                  </div>
               </div>   
            </div>
            
            <div class="row">
               <div class="col-sm">
                  <div class="form-group">
                     <label>Qualidade do Filme  <span class="text-danger">*</span></label>
                     <input type="text" name="qualidade" id="qualidade" class="form-control"  required>
                  </div>
               </div>
                <div class="col-sm">
                  <div class="form-group">
                     <label>Link da Fonte <span class="text-danger">*</span></label>
                     <input type="text" name="link_fonte" id="link_fonte" class="form-control"  required>
                  </div>
               </div>
                <div class="col-sm">
                  <div class="form-group">
                     <label>Link da Imagem  <span class="text-danger">*</span></label>
                     <input type="text" name="link_imagem" id="link_imagem" class="form-control"  required>
                  </div>
               </div>
               <div class="col-sm">
                  <div class="form-group">
                     <label>Categoria<span class="text-danger">*</span></label>
                      <input type="text" name="categoria" id="categoria" class="form-control"  required>
                     <br>
                  </div>
               </div>
            </div>
             <center>
             <br>
             <button type="submit" class="btn btn-outline-success btn-enviar" onclick="apagar();">Enviar</button>
               <button type="reset" class="btn btn-outline-danger">Corrigir</button>
               <br>
               </center>
         </form>
      </div>
   </div>
      </div>
    </main>
  </div>
</div>
<?php

rodape();
?>      