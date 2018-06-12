<?php

// Altera a categoria para publicacoes
$change_publication_category = '
UPDATE wp_db_nied.wp_db_posts SET post_type = "publicacoes"
WHERE post_type IN (
"publica_o")
';
echo '<b>Altera a categoria das publicações</b>'. '<br>';
execute_query($change_publication_category, $conn, $debug);

// Resumo
$add_publication_excerpt = '
UPDATE wp_db_nied.wp_db_posts, drupal.field_data_field_resumo
SET post_content = drupal.field_data_field_resumo.field_resumo_value
WHERE wp_db_nied.wp_db_posts.ID = drupal.field_data_field_resumo.entity_id;
';
echo '<br>'. '<b>Atualiza o resumo no post_content do post</b>'. '<br>';
execute_query($add_publication_excerpt, $conn, $debug);

// Adiciona autores
$add_authors_publication = '
INSERT INTO wp_db_nied.wp_db_postmeta (post_id, meta_key, meta_value)
SELECT drupal.node.nid, "autores", drupal.field_data_field_autores.field_autores_value
FROM drupal.node
LEFT JOIN drupal.field_data_field_autores ON drupal.node.nid = drupal.field_data_field_autores.entity_id
WHERE type="publica_o" and field_data_field_autores.field_autores_value IS NOT NULL;

';
echo '<br>'. '<b>Adiciona os autores da publicação</b>'. '<br>';
execute_query($add_authors_publication, $conn, $debug);