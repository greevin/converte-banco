<?php

$servername = '';
$username = '';
$password = '';

$migrate_from_db = '';
$migrate_to_db = '';
$url           = '';

$debug = FALSE;

function execute_query($query, $conn, $debug) {

    if ($debug) {
        echo $query . '<br>';
    } else {
        if ($conn->query($query) === TRUE) {
            echo 'Sucesso: '.$query."<br>";
        } else {
            echo 'Falha: '.$query."<br>". "<br><b>Motivo:</b> ". $conn->error."<br>";
        }
    }
}

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die('Conexão falhou: '.$conn->connect_error);
}
echo 'Conectado com sucesso'.'<br>';

echo '<br>'.'<b>&gt;&gt;prepara-banco.php</b><hr>';
require_once "prepara-banco.php";

echo '<br>'.'<b>&gt;&gt;migra-nodes.php</b><hr>';
require_once "migra-nodes.php";

echo '<br>'.'<b>&gt;&gt;remove-acentuacao.php</b><hr>';
require_once "remove-acentuacao.php";

echo '<br>'. "<b>&gt;&gt;migra-arquivos.php</b><hr>";
require_once "migra-arquivos.php";

echo '<br>'. "<b>&gt;&gt;migra-equipe.php</b><hr>";
require_once "migra-equipe.php";

echo '<br>'. "<b>&gt;&gt;migra-publicacoes.php</b><hr>";
require_once "migra-publicacoes.php";

echo '<br>'. "<b>&gt;&gt;migra-eventos.php</b><hr>";
require_once "migra-eventos.php";

echo '<br>'. "<b>&gt;&gt;migra-projetos.php</b><hr>";
require_once "migra-projetos.php";

echo '<br>'. "<b>&gt;&gt;migra-usuarios.php</b><hr>";
require_once "migra-usuarios.php";

echo '<br>'. "<b>&gt;&gt;migra-parceria.php</b><hr>";
require_once "migra-parceria.php";

echo '<br>'. "<b>&gt;&gt;cria-configuracao-jumbotron.php</b><hr>";
require_once "cria-configuracao-jumbotron.php";

echo '<br>'. "<b>&gt;&gt;cria-configuracao-revista.php</b><hr>";
require_once "cria-configuracao-revista.php";

echo '<br>'. "<b>&gt;&gt;cria-configuracao-rodape.php</b><hr>";
require_once "cria-configuracao-rodape.php";

$conn->close();
