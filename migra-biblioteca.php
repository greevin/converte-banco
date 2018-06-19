<?php

// Altera o tipo do post
$change_type_to_biblioteca = '
UPDATE '.$migrate_to_db.'.wp_db_posts SET post_type = "biblioteca"
WHERE post_type IN (
"publica_o",
"programa");
';
echo '<br>' . '<b>Alterando publicação e projeto para o tipo "Biblioteca"</b>'. '<br>';
execute_query($change_type_to_biblioteca, $conn, $debug);

// Resumo
$add_publication_excerpt = '
UPDATE '.$migrate_to_db.'.wp_db_posts, '.$migrate_from_db.'.field_data_field_resumo
SET post_content = '.$migrate_from_db.'.field_data_field_resumo.field_resumo_value
WHERE '.$migrate_to_db.'.wp_db_posts.ID = '.$migrate_from_db.'.field_data_field_resumo.entity_id;
';
echo '<br>'. '<b>Atualiza o resumo no post_content do post</b>'. '<br>';
execute_query($add_publication_excerpt, $conn, $debug);

// Adiciona autores
$add_authors_publication = '
INSERT INTO '.$migrate_to_db.'.wp_db_postmeta (post_id, meta_key, meta_value)
SELECT '.$migrate_from_db.'.node.nid, "autores", '.$migrate_from_db.'.field_data_field_autores.field_autores_value
FROM '.$migrate_from_db.'.node
LEFT JOIN '.$migrate_from_db.'.field_data_field_autores ON '.$migrate_from_db.'.node.nid = '.$migrate_from_db.'.field_data_field_autores.entity_id
WHERE type="publica_o" and field_data_field_autores.field_autores_value IS NOT NULL;
';
echo '<br>'. '<b>Adiciona os autores da publicação</b>'. '<br>';
execute_query($add_authors_publication, $conn, $debug);

// Adiciona o ano de publicação
$add_book_year_publication = '
INSERT INTO '.$migrate_to_db.'.wp_db_postmeta (post_id, meta_key, meta_value)
SELECT '.$migrate_from_db.'.node.nid, "ano_publicacao", SUBSTRING(field_ano_value, 1, 4) as ano_publicacao FROM '.$migrate_from_db.'.node
LEFT JOIN '.$migrate_from_db.'.field_data_field_ano on '.$migrate_from_db.'.node.nid = '.$migrate_from_db.'.field_data_field_ano.entity_id
WHERE type="publica_o";
';
echo '<br>'. '<b>Adiciona o ano de publicação</b>'. '<br>';
execute_query($add_book_year_publication, $conn, $debug);

// Adiciona o ano de publicação do programa
$add_software_year_publication = '
INSERT INTO '.$migrate_to_db.'.wp_db_postmeta (post_id, meta_key, meta_value)
SELECT '.$migrate_from_db.'.node.nid, "ano_programa", SUBSTRING(field_ano_software_value, 1, 4) as ano FROM '.$migrate_from_db.'.node
LEFT JOIN '.$migrate_from_db.'.field_data_field_ano_software on '.$migrate_from_db.'.node.nid = '.$migrate_from_db.'.field_data_field_ano_software.entity_id
WHERE type="programa";
';
echo '<br>'. '<b>Adiciona o ano de publicação do programa</b>'. '<br>';
execute_query($add_software_year_publication, $conn, $debug);

// Altera a slug da categoria Livro de publicacao para livro
$change_category_slug = '
UPDATE wp_db_terms
SET slug = "livro"
WHERE term_id = 12;
';
echo '<br>'. '<b>Altera a slug da categoria Livro de publicacao para livro</b>'. '<br>';
execute_query($change_category_slug, $conn, $debug);

// Altera o nome da categoria Software para Programa
$change_category_name = '
UPDATE wp_db_terms
SET name = "Programa"
WHERE term_id = 10;
';
echo '<br>'. '<b>Altera o nome da categoria Software para Programa</b>'. '<br>';
execute_query($change_category_name, $conn, $debug);

// Altera o post_name da Biblioteca Digital de publicacao para biblioteca-digital
$change_digital_library_post_name = '
UPDATE wp_db_posts
SET post_name = "biblioteca-digital"
WHERE ID = 26;
';
echo '<br>'. '<b>Altera o post_name da Biblioteca Digital de publicacao para biblioteca-digital</b>'. '<br>';
execute_query($change_digital_library_post_name, $conn, $debug);

$change_digital_library_template = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES (26, "_wp_page_template", "page-biblioteca.php");
';
echo '<br>'. '<b>Altera o template padrão para page-biblioteca.php</b>'. '<br>';
execute_query($change_digital_library_template, $conn, $debug);