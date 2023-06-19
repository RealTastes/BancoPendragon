<?php
$servername = "mysql835.umbler.com";
$username = "walteradmin";
$password = "crud2002";
$dbname = "crudhenning";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connexão Falhou " . mysqli_connect_error());
}
// echo "Conexão Bem-Sucedida";
