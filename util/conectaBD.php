<?php
function conectabd(){
    $servername = "localhost";
    $database = "base";
    $username = "root";
    $password = "";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    return $conn;
}

function fechacon($desconecta){
    mysqli_close($desconecta);
}
?>