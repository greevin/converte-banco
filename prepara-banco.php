<?php

// Limpa as tabelas do Wordpress
$sql = "
SELECT * FROM INFORMATION_SCHEMA.TABLES 
WHERE TABLE_SCHEMA LIKE '" . $database . "' 
AND TABLE_NAME IN ('wp_db_comments', 'wp_db_links', 'wp_db_postmeta', 'wp_db_posts', 'wp_db_term_relationships', 'wp_db_term_taxonomy', 'wp_db_terms');
";
$result = $conn->query($sql);
$tables = $result->fetch_all(MYSQLI_ASSOC);

foreach($tables as $table) {
    $sql = 'TRUNCATE TABLE '. $database . '.' .$table['TABLE_NAME'];
    print_r('Apagando tabela do Wordpress: '.$table['TABLE_NAME'].'<br>');
    $result = $conn->query($sql);
    if ($result == 1) {
        print_r('&gt;&gt;Sucesso ao apagar a tabela '. $table['TABLE_NAME'] .'<br><br>');
    } else {
        print_r('&gt;&gt;Falha ao apagar a tabela' . '<br>');
    }

}

// Cria o ’Sem Categoria’ se ele foi apagado
$recreate_no_category = '
INSERT INTO '.$database.".wp_db_terms (name, slug, term_group)
VALUES ('Sem categoria', 'sem-categoria', 0);
";
echo '<br>' . '<b>Recria o "Sem Categoria" se ele foi apagado</b>'. '<br>';
execute_query($recreate_no_category, $conn, $debug);

// Converte para categorias
$create_new_categories = '
REPLACE INTO '.$database.".wp_db_terms (name, slug)
SELECT n.name, n.type
FROM drupal.node_type n;
";
echo '<br>' . '<b>Convertendo as categorias</b>'. '<br>';
execute_query($create_new_categories, $conn, $debug);

// Adiciona os termos na taxonomia
$add_new_taxonomies = '
REPLACE INTO '.$database.'.wp_db_term_taxonomy (term_taxonomy_id, term_id, taxonomy, description, parent)
SELECT t.term_id, t.term_id "term_id", "category", "", 0
FROM '.$database.'.wp_db_terms t;
';
echo '<br>' . '<b>Adiciona os termos na taxonomia</b>'. '<br>';
execute_query($add_new_taxonomies, $conn, $debug);

// Associa o conteúdo com os termos
$associate_term_relationships = '
INSERT INTO '.$database.'.wp_db_term_relationships (object_id, term_taxonomy_id)
SELECT node.nid, '.$database.'.wp_db_terms.term_id
FROM drupal.node
INNER JOIN '.$database.'.wp_db_terms ON '.$database.'.wp_db_terms.slug = node.type;
';
echo '<br>' . '<b>Associa o conteúdo com os termos</b>'. '<br>';
execute_query($associate_term_relationships, $conn, $debug);

// Atualiza o contador das tags
$update_tags_counter = '
UPDATE '.$database.'.wp_db_term_taxonomy tt
SET count = (SELECT COUNT(tr.object_id)
FROM '.$database.'.wp_db_term_relationships tr
WHERE tr.term_taxonomy_id = tt.term_taxonomy_id);
';
echo '<br>' . '<b>Atualiza o contador das tags</b>'. '<br>';
execute_query($update_tags_counter, $conn, $debug);

?>
