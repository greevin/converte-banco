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