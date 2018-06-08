<?php

// Currículo Lattes
$migrate_lattes_info_team = '
INSERT INTO wp_db_nied.wp_db_postmeta (post_id, meta_key, meta_value)
SELECT node.nid, "curriculo_lattes", field_data_field_lattes.field_lattes_url FROM drupal.node
LEFT JOIN field_data_field_lattes on node.nid = field_data_field_lattes.entity_id
WHERE type="equipe";
';
echo '<b>Adiciona as informações do currículo Lattes para uma pessoa</b>'. '<br>';
execute_query($migrate_lattes_info_team, $conn, $debug);

// Email
$migrate_email_info_team = '
INSERT INTO wp_db_nied.wp_db_postmeta (post_id, meta_key, meta_value)
SELECT node.nid, "email", replace(field_data_field_email.field_email_value, " AT ","@") as email FROM drupal.node
LEFT JOIN field_data_field_email on node.nid = field_data_field_email.entity_id
WHERE type="equipe" AND field_data_field_email.field_email_value IS NOT NULL;
';
echo '<br>' . '<b>Adiciona as informações do e-mail para uma pessoa</b>'. '<br>';
execute_query($migrate_email_info_team, $conn, $debug);

// Data de Início
$migrate_start_date_info_team = '
INSERT INTO wp_db_nied.wp_db_postmeta (post_id, meta_key, meta_value)
SELECT node.nid, "data_de_inicio", SUBSTRING(REPLACE(field_data_field_data.field_data_value, "-",""), 1, 8) as data_de_inicio FROM drupal.node
LEFT JOIN field_data_field_data on node.nid = field_data_field_data.entity_id
WHERE type="equipe" AND field_data_field_data.field_data_value IS NOT NULL;
';
echo '<br>' . '<b>Adiciona a data de início para uma pessoa</b>'. '<br>';
execute_query($migrate_start_date_info_team, $conn, $debug);

// Data de Fim
$migrate_end_date_info_team = '
INSERT INTO wp_db_nied.wp_db_postmeta (post_id, meta_key, meta_value);
SELECT node.nid, "data_de_fim", SUBSTRING(REPLACE(field_data_field_data_fim.field_data_fim_value, "-",""), 1, 8) as data_de_fim FROM drupal.node
LEFT JOIN field_data_field_data_fim on node.nid = field_data_field_data_fim.entity_id
WHERE type="equipe" AND field_data_field_data_fim.field_data_fim_value IS NOT NULL;
';
echo '<br>' . '<b>Adiciona a data de fim para uma pessoa</b>'. '<br>';
execute_query($migrate_end_date_info_team, $conn, $debug);