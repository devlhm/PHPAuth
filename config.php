<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$dbname = "authentication";
$con = mysqli_connect($host, $user, $password, $dbname);

if (!$con) {
  die("Falha no conexão do banco de dados: " . mysqli_connect_error());
}