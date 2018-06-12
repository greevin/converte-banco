<?php

// Data de Início
$migrate_start_date_info_project = '
INSERT INTO wp_db_nied.wp_db_postmeta (post_id, meta_key, meta_value)
SELECT drupal.node.nid, "data_de_inicio", SUBSTRING(REPLACE(field_in_cio_value, "-",""), 1, 8) as data_de_inicio FROM drupal.node
LEFT JOIN drupal.field_data_field_in_cio on drupal.node.nid = drupal.field_data_field_in_cio.entity_id
WHERE type="projeto" AND field_in_cio_value IS NOT NULL;
';
echo '<br>' . '<b>Adiciona a data de início para um projeto</b>'. '<br>';
execute_query($migrate_start_date_info_project, $conn, $debug);

// Data de Fim
$migrate_end_date_info_project = '
INSERT INTO wp_db_nied.wp_db_postmeta (post_id, meta_key, meta_value)
SELECT drupal.node.nid, "data_de_fim", SUBSTRING(REPLACE(field_fim_value, "-",""), 1, 8) as data_de_inicio FROM drupal.node
LEFT JOIN drupal.field_data_field_fim on drupal.node.nid = drupal.field_data_field_fim.entity_id
WHERE type="projeto" AND field_fim_value IS NOT NULL;
';
echo '<br>' . '<b>Adiciona a data de fim para um projeto</b>'. '<br>';
execute_query($migrate_end_date_info_project, $conn, $debug);

// Coordenador
$migrate_coordinator_info_project = '
INSERT INTO wp_db_nied.wp_db_postmeta (post_id, meta_key, meta_value)
SELECT drupal.node.nid, "coordenador", field_coordenador_value AS coordenador FROM drupal.node
LEFT JOIN drupal.field_data_field_coordenador ON node.nid = drupal.field_data_field_coordenador.entity_id
WHERE type="projeto" and field_coordenador_value IS NOT NULL;
';
echo '<br>' . '<b>Adiciona as informações do coordenador para um projeto</b>'. '<br>';
execute_query($migrate_coordinator_info_project, $conn, $debug);

// Email do Coordenador
$migrate_email_coord_info_project = '
INSERT INTO wp_db_nied.wp_db_postmeta (post_id, meta_key, meta_value)
SELECT drupal.node.nid, "email", REPLACE(REPLACE(field_email_coord_value, " at ", "@"), " AT ", "@") as email_coord FROM drupal.node
LEFT JOIN drupal.field_data_field_email_coord ON drupal.node.nid = field_data_field_email_coord.entity_id
WHERE type="projeto" and field_email_coord_value IS NOT NULL;
';
echo '<br>' . '<b>Adiciona as informações do e-mail do coordenador para um projeto</b>'. '<br>';
execute_query($migrate_email_coord_info_project, $conn, $debug);

// Mais Informações
$migrate_more_info_project = '
INSERT INTO wp_db_nied.wp_db_postmeta (post_id, meta_key, meta_value)
SELECT drupal.node.nid, "url_projeto", drupal.field_data_field_url_test.field_url_test_url
FROM drupal.node
LEFT JOIN drupal.field_data_field_url_test ON node.nid = drupal.field_data_field_url_test.entity_id
WHERE type="projeto" AND field_url_test_url IS NOT NULL;
';
echo '<br>' . '<b>Adiciona as mais informações do projeto</b>'. '<br>';
execute_query($migrate_more_info_project, $conn, $debug);

// Linha de Pesquisa
echo '<br>' . '<b>Adiciona a linha de pesquisa para um projeto</b>'. '<br>';
require_once "carrega-linhas-pesquisa-projetos.php";