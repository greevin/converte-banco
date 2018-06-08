<?php

// Data de Início
$migrate_start_date_info_project = '
INSERT INTO wp_db_nied.wp_db_postmeta (post_id, meta_key, meta_value);
SELECT node.nid, "data_de_inicio", SUBSTRING(REPLACE(field_in_cio_value, "-",""), 1, 8) as data_de_inicio FROM drupal.node
LEFT JOIN drupal.field_data_field_in_cio on node.nid = drupal.field_data_field_in_cio.entity_id
WHERE type="projeto" AND field_in_cio_value IS NOT NULL;
';
echo '<br>' . '<b>Adiciona a data de início para um projeto</b>'. '<br>';
execute_query($migrate_start_date_info_project, $conn, $debug);

// Data de Fim
$migrate_end_date_info_project = '
INSERT INTO wp_db_nied.wp_db_postmeta (post_id, meta_key, meta_value);
SELECT node.nid, "data_de_fim", SUBSTRING(REPLACE(field_fim_value, "-",""), 1, 8) as data_de_inicio FROM drupal.node
LEFT JOIN drupal.field_data_field_fim on node.nid = drupal.field_data_field_fim.entity_id
WHERE type="projeto" AND field_fim_value IS NOT NULL;
';
echo '<br>' . '<b>Adiciona a data de fim para um projeto</b>'. '<br>';
execute_query($migrate_end_date_info_project, $conn, $debug);

// Email do Coordenador
$migrate_email_coord_info_project = '
INSERT INTO wp_db_nied.wp_db_postmeta (post_id, meta_key, meta_value);
SELECT node.nid, "email", REPLACE(REPLACE(field_email_coord_value, " at ", "@"), " AT ", "@") as email_coord FROM drupal.node
LEFT JOIN drupal.field_data_field_email_coord ON node.nid = field_data_field_email_coord.entity_id
WHERE type="projeto" and field_email_coord_value IS NOT NULL;
';
echo '<br>' . '<b>Adiciona as informações do e-mail para uma pessoa</b>'. '<br>';
execute_query($migrate_email_coord_info_project, $conn, $debug);