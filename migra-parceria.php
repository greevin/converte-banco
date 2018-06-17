<?php

$add_url_partner_info = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
SELECT node.nid, "url_parceiro", '.$migrate_from_db.'.field_data_field_url.field_url_url FROM '.$migrate_from_db.'.node
LEFT JOIN '.$migrate_from_db.'.field_data_field_url on node.nid = '.$migrate_from_db.'.field_data_field_url.entity_id
WHERE type="parceria" AND '.$migrate_from_db.'.field_data_field_url.field_url_url IS NOT NULL;
';
echo '<br>'. '<b>Adiciona as informações da URL do parceiro</b>'. '<br>';
execute_query($add_url_partner_info, $conn, $debug);

$add_financial_support_info = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
SELECT node.nid, "tipo_apoio", field_data_field_tipo_apoio.field_tipo_apoio_value FROM '.$migrate_from_db.'.node
LEFT JOIN '.$migrate_from_db.'.field_data_field_tipo_apoio ON node.nid = field_data_field_tipo_apoio.entity_id
WHERE type="parceria" AND field_data_field_tipo_apoio.field_tipo_apoio_value IS NOT NULL;
';
echo '<br>'. '<b>Adiciona as informações do tipo de apoio do parceiro</b>'. '<br>';
execute_query($add_financial_support_info, $conn, $debug);