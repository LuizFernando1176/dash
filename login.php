<?php
include_once './util/corpo.php';
include_once './util/conectaBD.php';



cabecalogin();

loginFilmes();
?>
      
<div class="container">
     
<div class="container-fluid">
    <br><br><br><br><br><br>
    <div class="card">
        <div class="card-body">
           
                <center> 
                    <form class="login-form" action="util/login.php" method="post" style="padding: 5%;">
                       
                        <div class="avatar" style="font-size: 150px;"><i class="material-icons" style="font-size: 62px ;">&#xE7FF;</i></div>
                        <h4 class="modal-title">Faça Seu Login</h4>
                       
                        
                        <br>
        <div class="form-group">
            <input style="width: 35%" type="text" class="form-control" placeholder="usuario" name="user" required="required">
        </div>
        <div class="form-group">
            <input style="width: 35%" type="password" class="form-control" placeholder="senha" name="senha" required="required">
        </div>
                        
        <div class="form-group small clearfix">
            <label class="checkbox-inline"><input type="checkbox"> Me Lembre!</label>
            <a href="#" class="forgot-link">Esqueceu a Senha?</a>
        </div> 
        <input type="submit" class="btn btn-primary btn-block btn-lg" style="width: 18% !important;" value="Login">              
    </form>			
   
    </center>
  
  </div>
  </div>
</div>
</div>
<?php
rodape();
?>