<?php

// Currículo Lattes
$migrate_lattes_info_team = '
INSERT INTO '.$migrate_to_db.'.wp_db_postmeta (post_id, meta_key, meta_value)
SELECT '.$migrate_from_db.'.node.nid, "curriculo_lattes", '.$migrate_from_db.'.field_data_field_lattes.field_lattes_url FROM '.$migrate_from_db.'.node
LEFT JOIN '.$migrate_from_db.'.field_data_field_lattes on '.$migrate_from_db.'.node.nid = '.$migrate_from_db.'.field_data_field_lattes.entity_id
WHERE type="equipe";
';
echo '<b>Adiciona as informações do currículo Lattes para uma pessoa</b>'. '<br>';
execute_query($migrate_lattes_info_team, $conn, $debug);

// Email
$migrate_email_info_team = '
INSERT INTO '.$migrate_to_db.'.wp_db_postmeta (post_id, meta_key, meta_value)
SELECT '.$migrate_from_db.'.node.nid, "email", replace('.$migrate_from_db.'.field_data_field_email.field_email_value, " AT ","@") as email FROM '.$migrate_from_db.'.node
LEFT JOIN '.$migrate_from_db.'.field_data_field_email on '.$migrate_from_db.'.node.nid = '.$migrate_from_db.'.field_data_field_email.entity_id
WHERE type="equipe" AND '.$migrate_from_db.'.field_data_field_email.field_email_value IS NOT NULL;
';
echo '<br>' . '<b>Adiciona as informações do e-mail para uma pessoa</b>'. '<br>';
execute_query($migrate_email_info_team, $conn, $debug);

// Data de Início
$migrate_start_date_info_team = '
INSERT INTO '.$migrate_to_db.'.wp_db_postmeta (post_id, meta_key, meta_value)
SELECT '.$migrate_from_db.'.node.nid, "data_de_inicio", SUBSTRING(REPLACE('.$migrate_from_db.'.field_data_field_data.field_data_value, "-",""), 1, 8) as data_de_inicio FROM '.$migrate_from_db.'.node
LEFT JOIN '.$migrate_from_db.'.field_data_field_data on '.$migrate_from_db.'.node.nid = '.$migrate_from_db.'.field_data_field_data.entity_id
WHERE type="equipe" AND '.$migrate_from_db.'.field_data_field_data.field_data_value IS NOT NULL;
';
echo '<br>' . '<b>Adiciona a data de início para uma pessoa</b>'. '<br>';
execute_query($migrate_start_date_info_team, $conn, $debug);

// Data de Fim
$migrate_end_date_info_team = '
INSERT INTO '.$migrate_to_db.'.wp_db_postmeta (post_id, meta_key, meta_value)
SELECT '.$migrate_from_db.'.node.nid, "data_de_fim", SUBSTRING(REPLACE('.$migrate_from_db.'.field_data_field_data_fim.field_data_fim_value, "-",""), 1, 8) as data_de_fim FROM '.$migrate_from_db.'.node
LEFT JOIN '.$migrate_from_db.'.field_data_field_data_fim on '.$migrate_from_db.'.node.nid = '.$migrate_from_db.'.field_data_field_data_fim.entity_id
WHERE type="equipe" AND '.$migrate_from_db.'.field_data_field_data_fim.field_data_fim_value IS NOT NULL;
';
echo '<br>' . '<b>Adiciona a data de fim para uma pessoa</b>'. '<br>';
execute_query($migrate_end_date_info_team, $conn, $debug);

echo '<br>' . '<b>Adiciona a linha de pesquisa da pessoa</b>'. '<br>';
require_once "carrega-linhas-pesquisa.php";

echo '<br>' . '<b>Adiciona o cargo da pessoa</b>'. '<br>';
require_once "carrega-cargos.php";

echo '<br>' . '<b>Adiciona os projetos da pessoa</b>'. '<br>';
require_once "carrega-projetos.php";