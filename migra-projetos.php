<?php

// Data de Início
$migrate_start_date_info_project = '
INSERT INTO '.$migrate_to_db.'.wp_db_postmeta (post_id, meta_key, meta_value)
SELECT '.$migrate_from_db.'.node.nid, "data_de_inicio", SUBSTRING(REPLACE(field_in_cio_value, "-",""), 1, 8) as data_de_inicio FROM '.$migrate_from_db.'.node
LEFT JOIN '.$migrate_from_db.'.field_data_field_in_cio on '.$migrate_from_db.'.node.nid = '.$migrate_from_db.'.field_data_field_in_cio.entity_id
WHERE type="projeto" AND field_in_cio_value IS NOT NULL;
';
echo '<br>' . '<b>Adiciona a data de início para um projeto</b>'. '<br>';
execute_query($migrate_start_date_info_project, $conn, $debug);

// Data de Fim
$migrate_end_date_info_project = '
INSERT INTO '.$migrate_to_db.'.wp_db_postmeta (post_id, meta_key, meta_value)
SELECT '.$migrate_from_db.'.node.nid, "data_de_fim", SUBSTRING(REPLACE(field_fim_value, "-",""), 1, 8) as data_de_inicio FROM '.$migrate_from_db.'.node
LEFT JOIN '.$migrate_from_db.'.field_data_field_fim on '.$migrate_from_db.'.node.nid = '.$migrate_from_db.'.field_data_field_fim.entity_id
WHERE type="projeto" AND field_fim_value IS NOT NULL;
';
echo '<br>' . '<b>Adiciona a data de fim para um projeto</b>'. '<br>';
execute_query($migrate_end_date_info_project, $conn, $debug);

// Coordenador
$migrate_coordinator_info_project = '
INSERT INTO '.$migrate_to_db.'.wp_db_postmeta (post_id, meta_key, meta_value)
SELECT '.$migrate_from_db.'.node.nid, "coordenador", field_coordenador_value AS coordenador FROM '.$migrate_from_db.'.node
LEFT JOIN '.$migrate_from_db.'.field_data_field_coordenador ON node.nid = '.$migrate_from_db.'.field_data_field_coordenador.entity_id
WHERE type="projeto" and field_coordenador_value IS NOT NULL;
';
echo '<br>' . '<b>Adiciona as informações do coordenador para um projeto</b>'. '<br>';
execute_query($migrate_coordinator_info_project, $conn, $debug);

// Email do Coordenador
$migrate_email_coord_info_project = '
INSERT INTO '.$migrate_to_db.'.wp_db_postmeta (post_id, meta_key, meta_value)
SELECT '.$migrate_from_db.'.node.nid, "email", REPLACE(REPLACE(field_email_coord_value, " at ", "@"), " AT ", "@") as email_coord FROM '.$migrate_from_db.'.node
LEFT JOIN '.$migrate_from_db.'.field_data_field_email_coord ON '.$migrate_from_db.'.node.nid = field_data_field_email_coord.entity_id
WHERE type="projeto" and field_email_coord_value IS NOT NULL;
';
echo '<br>' . '<b>Adiciona as informações do e-mail do coordenador para um projeto</b>'. '<br>';
execute_query($migrate_email_coord_info_project, $conn, $debug);

// Mais Informações
$migrate_more_info_project = '
INSERT INTO '.$migrate_to_db.'.wp_db_postmeta (post_id, meta_key, meta_value)
SELECT '.$migrate_from_db.'.node.nid, "url_projeto", '.$migrate_from_db.'.field_data_field_url_test.field_url_test_url
FROM '.$migrate_from_db.'.node
LEFT JOIN '.$migrate_from_db.'.field_data_field_url_test ON node.nid = '.$migrate_from_db.'.field_data_field_url_test.entity_id
WHERE type="projeto" AND field_url_test_url IS NOT NULL;
';
echo '<br>' . '<b>Adiciona as mais informações do projeto</b>'. '<br>';
execute_query($migrate_more_info_project, $conn, $debug);

// Linha de Pesquisa
echo '<br>' . '<b>Adiciona a linha de pesquisa para um projeto</b>'. '<br>';
require_once "carrega-linhas-pesquisa-projetos.php";

//Adiciona template da página de Projetos
$nied_page_template = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES (12, "_wp_page_template", "page-pesquisa.php");
';
echo '<br><b>Adiciona o arquivo de template do Projeto</b>'. '<br>';
execute_query($nied_page_template, $conn, $debug);