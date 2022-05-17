<?php

/**conexão com banco de dados */

$host = "localhost";
$db = "videogame";
$user = "root";
$pass = "";

$mysqli = new mysqli($host, $user, $pass, $db);
if($mysqli->connect_errno) {
    die("Falha na conexão com o banco de dados");
} 