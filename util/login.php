<?php
include_once './conectaBD.php';

// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['user'];
$senha = $_POST['senha'];
// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
$con = conectabd();

// A variavel $result pega as varias $login e $senha, faz uma 
//pesquisa na tabela de usuarios
$queryBuscaUser = ("SELECT * FROM `usuario` WHERE `user` = '$login' AND `senha`= '$senha'");
$result = mysqli_query($con, $queryBuscaUser);
/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi 
bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor
será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do 
resultado ele redirecionará para a página site.php ou retornara  para a página 
do formulário inicial para que se possa tentar novamente realizar o login */



if(mysqli_num_rows ($result) > 0 )
{

echo "<script>alert('Usuario Logado Com sucesso !!',location.href=' ../index.php');</script>";
}
else{
 echo "<script>alert('Erro ao logar !!',location.href=' ../login.php');</script>";
  
   
  }

?>