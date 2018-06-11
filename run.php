<?php

$servername = "localhost";
$username = "";
$password = "";

$debug = TRUE;

function execute_query($query, $conn, $debug) {

    if ($debug) {
        echo $query . '<br>';
    } else {
        if ($conn->query($query) === TRUE) {
            echo 'Sucesso: '.$query."<br>";
        } else {
            echo 'Falha: '.$query."<br>".$conn->error;
        }
    }
}

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die('Conexão falhou: '.$conn->connect_error);
}
echo 'Conectado com sucesso'.'<br><br>';

echo '<br>'.'<b>&gt;&gt;prepara-banco.php</b>'.'<br>';
require_once "prepara-banco.php";

echo '<br>'. "<b>&gt;&gt;migra-nodes.php</b>" . '<br>';
require_once "migra-nodes.php";

echo '<br>'. "<b>&gt;&gt;remove-acentuacao.php</b>" . '<br>';
require_once "remove-acentuacao.php";

echo '<br>'. "<b>&gt;&gt;migra-arquivos.php</b>" . '<br>';
require_once "migra-arquivos.php";

echo '<br>'. "<b>&gt;&gt;migra-equipe.php</b>" . '<br>';
require_once "migra-equipe.php";


//
//echo '<br>'. "<b>&gt;&gt;migra-eventos.php</b>" . '<br>';
//require_once "migra-eventos.php";


$conn->close();
