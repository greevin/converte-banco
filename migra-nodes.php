<?php

// Migra os nodes para os posts
$migrate_nodes_to_posts = '
REPLACE INTO wp_db_nied.wp_db_posts (
ID,
post_author,
post_date,
post_date_gmt,
post_content,
post_title,
post_excerpt,
post_name,
post_modified,
post_modified_gmt,
post_type,
post_status,
to_ping,
pinged,
post_content_filtered)
SELECT DISTINCT
n.nid \'ID\',
n.uid \'post_author\',
DATE_ADD(FROM_UNIXTIME(0), interval n.created second) \'post_date\',
DATE_ADD(FROM_UNIXTIME(0), interval n.created second) \'post_date_gmt\',
IF(f.body_value IS NULL, \'\', f.body_value) \'post_content\',
n.title \'post_title\',
\' \',
IF(a.alias IS NULL,n.nid, SUBSTRING_INDEX(a.alias, \'/\', -1)) \'post_name\',
DATE_ADD(FROM_UNIXTIME(0), interval n.changed second) \'post_modified\',
DATE_ADD(FROM_UNIXTIME(0), interval n.changed second) \'post_modified_gmt\',
n.type \'post_type\',
IF(n.status = 1, \'publish\', \'private\') \'post_status\',
\' \',
\' \',
\' \'
FROM drupal.node n
INNER JOIN drupal.node_revision r USING(vid)
LEFT OUTER JOIN drupal.field_data_body f ON r.vid = f.revision_id
LEFT OUTER JOIN drupal.url_alias a
ON a.source = CONCAT(\'node/\', n.nid)
WHERE n.type IN (
/* List the content types you want to migrate */
\'arquivo\',
\'article\',
\'coordena_o\',
\'equipe\',
\'evento\',
\'faq\',
\'not_cia\',
\'page\',
\'panel\',
\'parceria\',
\'programa\',
\'projeto\',
\'publica_o\',
\'to_do\',
\'webform\');
';
execute_query($migrate_nodes_to_posts, $conn, $debug);


// Altera o tipo do post
$change_post_type = '
UPDATE wp_db_nied.wp_db_posts SET post_type = \'post\'
WHERE post_type IN (
\'arquivo\',
\'not_cia\',
\'evento\');
';
execute_query($change_post_type, $conn, $debug);

?>