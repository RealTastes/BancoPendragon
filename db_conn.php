<?php
$servername = "localhost";
$username = "root";
$password = "";0
$dbname = "crudhenning";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connexão Falhou " . mysqli_connect_error());
}
// echo "Conexão Bem-Sucedida";