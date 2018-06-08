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

$sql = "
SELECT * FROM INFORMATION_SCHEMA.TABLES 
WHERE TABLE_SCHEMA LIKE 'wp_db_nied' 
AND TABLE_NAME IN ('wp_db_comments', 'wp_db_links', 'wp_db_postmeta', 'wp_db_posts', 'wp_db_term_relationships', 'wp_db_term_taxonomy', 'wp_db_terms');
";
$result = $conn->query($sql);
$tables = $result->fetch_all(MYSQLI_ASSOC);

foreach($tables as $table) {
    $sql = 'TRUNCATE TABLE wp_db_nied.'.$table['TABLE_NAME'];
    print_r('Apagando tabela do Wordpress: '.$table['TABLE_NAME'].'<br>');
    $result = $conn->query($sql);
    if ($result == 1) {
        print_r('&gt;&gt;Sucesso ao apagar a tabela '. $table['TABLE_NAME'] .'<br><br>');
    } else {
        print_r('&gt;&gt;Falha ao apagar a tabela' . '<br>');
    }

}
echo '<br>'. "<b>&gt;&gt;prepara-banco.php</b>" . '<br>';
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
