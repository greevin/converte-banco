<?php

// Horário de Início
$migrate_start_time_event = '
INSERT INTO wp_db_nied.wp_db_postmeta (post_id, meta_key, meta_value)
SELECT drupal.node.nid, "horario_de_inicio", SUBSTRING(CAST(REPLACE(drupal.field_data_field_hora_inicio.field_hora_inicio_value, "h", ":00") AS TIME), 1, 5) as hora_inicio FROM drupal.node
LEFT JOIN drupal.field_data_field_hora_inicio on drupal.node.nid = drupal.field_data_field_hora_inicio.entity_id
WHERE type="evento" AND drupal.field_data_field_hora_inicio.field_hora_inicio_value IS NOT NULL;
';
echo '<b>Adiciona as informações do horário de início do evento</b>'. '<br>';
execute_query($migrate_start_time_event, $conn, $debug);

// Horário de Fim
$migrate_end_time_event = '
INSERT INTO wp_db_nied.wp_db_postmeta (post_id, meta_key, meta_value)
SELECT drupal.node.nid, "horario_de_fim", SUBSTRING(CAST(REPLACE(drupal.field_data_field_hora_fim.field_hora_fim_value, "h", ":00") AS TIME), 1, 5) as hora_fim FROM drupal.node
LEFT JOIN drupal.field_data_field_hora_fim on drupal.node.nid = drupal.field_data_field_hora_fim.entity_id
WHERE type="evento" AND drupal.field_data_field_hora_fim.field_hora_fim_value IS NOT NULL;
';
echo '<br>'. '<b>Adiciona as informações do horário de fim do evento</b>'. '<br>';
execute_query($migrate_end_time_event, $conn, $debug);

// Data de Início
$migrate_start_date_event = '
INSERT INTO wp_db_nied.wp_db_postmeta (post_id, meta_key, meta_value)
SELECT drupal.node.nid, "data_de_inicio", SUBSTRING(REPLACE(drupal.field_data_field_data.field_data_value, "-",""), 1, 8) as data_de_inicio FROM drupal.node
LEFT JOIN drupal.field_data_field_data on drupal.node.nid = drupal.field_data_field_data.entity_id
WHERE type="evento" AND drupal.field_data_field_data.field_data_value IS NOT NULL;
';
echo '<br>'. '<b>Adiciona as informações do data de início do evento</b>'. '<br>';
execute_query($migrate_start_date_event, $conn, $debug);

// Data de Fim
$migrate_end_date_event = '
INSERT INTO wp_db_nied.wp_db_postmeta (post_id, meta_key, meta_value)
SELECT drupal.node.nid, "data_de_fim", SUBSTRING(REPLACE(drupal.field_data_field_data_fim.field_data_fim_value, "-",""), 1, 8) AS data_fim FROM drupal.node
LEFT JOIN drupal.field_data_field_data_fim ON drupal.node.nid = drupal.field_data_field_data_fim.entity_id
WHERE type="evento" AND drupal.field_data_field_data_fim.field_data_fim_value IS NOT NULL;
';
echo '<br>'. '<b>Adiciona as informações do data de fim do evento</b>'. '<br>';
execute_query($migrate_end_date_event, $conn, $debug);

// Mais Informações
$migrate_more_info_event = '
INSERT INTO wp_db_nied.wp_db_postmeta (post_id, meta_key, meta_value)
SELECT drupal.node.nid, "mais_informacoes", CONCAT("", drupal.field_data_field_info.field_info_url) FROM drupal.node
LEFT JOIN drupal.field_data_field_info on drupal.node.nid = drupal.field_data_field_info.entity_id
WHERE type="evento" AND drupal.field_data_field_info.field_info_url IS NOT NULL;
';
echo '<br>'. '<b>Adiciona as mais informações sobre o evento</b>'. '<br>';
execute_query($migrate_more_info_event, $conn, $debug);

// Local
$migrate_place_event = '
INSERT INTO wp_db_nied.wp_db_postmeta (post_id, meta_key, meta_value)
SELECT drupal.node.nid, "local", drupal.field_data_field_local.field_local_value FROM drupal.node
LEFT JOIN drupal.field_data_field_local on drupal.node.nid = drupal.field_data_field_local.entity_id
WHERE type="evento" AND drupal.field_data_field_local.field_local_value IS NOT NULL;

';
echo '<br>'. '<b>Adiciona o local do evento</b>'. '<br>';
execute_query($migrate_place_event, $conn, $debug);

?>