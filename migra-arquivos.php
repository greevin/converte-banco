<?php

// Adiciona as informações dos arquivos
$migrate_file_info = '
INSERT INTO wp_db_nied.wp_db_posts (
post_author,
post_date,
post_date_gmt,
post_content,
post_title,
post_excerpt,
post_name,
post_modified,
post_modified_gmt,
post_status,
comment_status,
ping_status,
to_ping,
pinged,
post_content_filtered,
post_parent,
guid,
post_type,
post_mime_type)
SELECT DISTINCT
fm.uid \'post_author\',
DATE_ADD(FROM_UNIXTIME(0), interval fm.timestamp second) \'post_date\',
DATE_ADD(FROM_UNIXTIME(0), interval fm.timestamp second) \'post_date_gmt\',
\' \',
REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(fm.filename, \'.jpg\', \'\'), \'.JPG\', \'\'), \'.png\', \'\'), \'.PNG\', \'\'), \'.zip\', \'\'), \'.doc\', \'\'), \'.gif\', \'\'), \'.jpeg\', \'\'), \'.pdf\', \'\') as post_title, 
\' \',
REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(fm.filename, \'.jpg\', \'\'), \'.JPG\', \'\'), \'.png\', \'\'), \'.PNG\', \'\'), \'.zip\', \'\'), \'.doc\', \'\'), \'.gif\', \'\'), \'.jpeg\', \'\'), \'.pdf\', \'\') as post_name, 
DATE_ADD(FROM_UNIXTIME(0), interval fm.timestamp second) \'post_modified\',
DATE_ADD(FROM_UNIXTIME(0), interval fm.timestamp second) \'post_modified_gmt\',
IF(fm.status = 1, \'inherit\', \'private\') \'post_status\',
\'open\',
\'closed\',
\' \',
\' \',
\' \',
IF(n.nid IS NULL, 0, n.nid) \'post_parent\',
CONCAT(\'https://zephyrus.nied.unicamp.br/novosite/wp-content/uploads/2018/06/\', fm.filename) \'guid\',
\'attachment\',
fm.filemime \'post_mime_type\'
FROM drupal.file_managed fm
left join file_usage fu on fm.fid = fu.fid
left join node n on fu.id = n.nid;

';
execute_query($migrate_file_info, $conn, $debug);

// Adiciona as informações dos arquivos no postmeta
$postmeta_files_info = '
INSERT INTO wp_db_nied.wp_db_postmeta (post_id, meta_key, meta_value)
SELECT IF(wp_db_nied.wp_db_posts.id IS NULL, 0, wp_db_nied.wp_db_posts.id), \'_wp_attached_file\', CONCAT(\'2018/06/\', fm.filename) as url FROM drupal.file_managed fm
LEFT JOIN drupal.file_usage on drupal.file_usage.fid = fm.fid
LEFT JOIN wp_db_nied.wp_db_posts on drupal.file_usage.id = wp_db_nied.wp_db_posts.post_parent;
';
execute_query($postmeta_files_info, $conn, $debug);

// Adiciona imagens nos posts
$add_posts_images = '
INSERT INTO wp_db_nied.wp_db_postmeta (post_id, meta_key, meta_value)
SELECT post_parent, \'_thumbnail_id\', ID FROM wp_db_posts
where post_type = \'attachment\';
';
execute_query($add_posts_images, $conn, $debug);

?>