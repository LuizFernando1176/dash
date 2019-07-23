<?php 
include_once 'conectaBD.php';

$user = $_POST['user'];
$senha = $_POST['senha'];
$sql =" SELECT * FROM `usuario` WHERE `user` ='$user' AND `senha` ='$senha' ;";
$conn = conectabd();
$resultados = $conn->query($sql);


if (mysqli_num_rows($resultados) === 1) {
    echo '<SCRIPT Language="javascript">
alert("Usuário logado corretamente  !!");
location.href="../index.php";
</SCRIPT>';
           
  } else {
      echo '<SCRIPT Language="javascript">
alert("Usuário errado favor tente novamente !!");
location.href="../login.php";
</SCRIPT>';
}

  session_start();
    $_SESSION['senha'] = $senha;
    $_SESSION['user']=$user;
   
   


mysqli_close($conn);
