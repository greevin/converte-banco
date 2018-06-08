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
            echo "Sucesso: ". $query . "<br>";
        } else {
            echo "Falha: " . $query . "<br>" . $conn->error;
        }
    }
}

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully" . '<br><br>';

echo "<b>&gt;&gt;carrega-cargos.php</b>" . '<br>';
require_once "carrega-cargos.php";
echo '<br>';

echo "<b>&gt;&gt;carrega-linhas-pesquisa.php</b>" . '<br>';
require_once "carrega-linhas-pesquisa.php";
echo '<br>';

echo '<br>'. "<b>&gt;&gt;prepara-banco.php</b>" . '<br>';
require_once "prepara-banco.php";

echo '<br>'. "<b>&gt;&gt;migra-arquivos.php</b>" . '<br>';
require_once "migra-arquivos.php";

echo '<br>'. "<b>&gt;&gt;remove-acentuacao.php</b>" . '<br>';
require_once "remove-acentuacao.php";

echo '<br>'. "<b>&gt;&gt;migra-eventos.php</b>" . '<br>';
require_once "migra-eventos.php";

echo '<br>'. "<b>&gt;&gt;migra-equipe.php</b>" . '<br>';
require_once "migra-equipe.php";

$conn->close();
