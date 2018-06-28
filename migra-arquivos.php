<?php

// Adiciona as informações dos arquivos
$migrate_file_info = '
INSERT INTO '.$migrate_to_db.'.wp_db_posts (
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
fm.uid "post_author",
DATE_ADD(FROM_UNIXTIME(0), interval fm.timestamp second) "post_date",
DATE_ADD(FROM_UNIXTIME(0), interval fm.timestamp second) "post_date_gmt",
" ",
REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(fm.filename, ".jpg", ""), ".JPG", ""), ".png", ""), ".PNG", ""), ".zip", ""), ".doc", ""), ".gif", ""), ".jpeg", ""), ".pdf", "") as post_title, 
" ",
REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(fm.filename, ".jpg", ""), ".JPG", ""), ".png", ""), ".PNG", ""), ".zip", ""), ".doc", ""), ".gif", ""), ".jpeg", ""), ".pdf", "") as post_name, 
DATE_ADD(FROM_UNIXTIME(0), interval fm.timestamp second) "post_modified",
DATE_ADD(FROM_UNIXTIME(0), interval fm.timestamp second) "post_modified_gmt",
IF(fm.status = 1, "inherit", "private") "post_status",
"open",
"closed",
" ",
" ",
" ",
IF(n.nid IS NULL, 0, n.nid) "post_parent",
CONCAT("'.$url.'wp-content/uploads/2018/06/", fm.filename) "guid",
"attachment",
fm.filemime "post_mime_type"
FROM '.$migrate_from_db.'.file_managed fm
left join '.$migrate_from_db.'.file_usage fu on fm.fid = fu.fid
left join '.$migrate_from_db.'.node n on fu.id = n.nid;

';
echo '<b>Adiciona as informações dos arquivos</b>'. '<br>';
execute_query($migrate_file_info, $conn, $debug);

// Adiciona as informações dos arquivos no postmeta
$postmeta_files_info = '
INSERT INTO '.$migrate_to_db.'.wp_db_postmeta (post_id, meta_key, meta_value)
SELECT IF('.$migrate_to_db.'.wp_db_posts.id IS NULL, 0, '.$migrate_to_db.'.wp_db_posts.id), "_wp_attached_file", CONCAT("2018/06/", fm.filename) as url FROM '.$migrate_from_db.'.file_managed fm
LEFT JOIN '.$migrate_from_db.'.file_usage on '.$migrate_from_db.'.file_usage.fid = fm.fid
LEFT JOIN '.$migrate_to_db.'.wp_db_posts on '.$migrate_from_db.'.file_usage.id = '.$migrate_to_db.'.wp_db_posts.post_parent;
';
echo '<br>'. '<b>Adiciona as informações dos arquivos no postmeta</b>'. '<br>';
execute_query($postmeta_files_info, $conn, $debug);

// Adiciona imagens nos posts
$add_posts_images = '
INSERT INTO '.$migrate_to_db.'.wp_db_postmeta (post_id, meta_key, meta_value)
SELECT post_parent, "_thumbnail_id", ID FROM '.$migrate_to_db.'.wp_db_posts
where post_type = "attachment";
';
echo '<br>'. '<b>Adiciona imagens nos posts</b>'. '<br>';
execute_query($add_posts_images, $conn, $debug);

// Adiciona logo da página
$add_logo = '
INSERT INTO '.$migrate_to_db.'.wp_db_posts (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES (
464, 
2, 
"2018-06-28 09:41:09", 
"2018-06-28 12:41:09", 
"", 
"LOGOTIPO_NIED_2018_FINAL_Alta_semFundo", 
"", 
"inherit", 
"open", 
"closed", 
"", 
"logotipo_nied_2018_final_alta_semfundo", 
"", 
"", 
"2018-06-28 09:41:09", 
"2018-06-28 12:41:09", 
"", 
0, 
"'.$url.'wp-content/uploads/2018/06/LOGOTIPO_NIED_2018_FINAL_Alta_semFundo.png", 
0, 
"attachment", 
"image/png", 
0);
';
echo '<br>'. '<b>Adiciona logo na página</b>'. '<br>';
execute_query($add_logo, $conn, $debug);

$add_logo_postmeta = '
INSERT INTO '.$migrate_to_db.'.wp_db_postmeta (post_id, meta_key, meta_value)
VALUES (464, "_wp_attached_file", "2018/06/LOGOTIPO_NIED_2018_FINAL_Alta_semFundo-4.png");
';
echo '<br>'. '<b>Adiciona logo na página</b>'. '<br>';
execute_query($add_logo_postmeta, $conn, $debug);

//Adiciona a imagem da edição atual da revista
$add_magazine_cover = '
INSERT INTO '.$migrate_to_db.'.wp_db_posts (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES (
465, 
2, 
"2018-06-28 10:35:59", 
"2018-06-28 13:35:59", 
"", 
"cover_issue_53_pt_BR", 
"", 
"inherit", 
"open", 
"closed", 
"", 
"cover_issue_53_pt_br", 
"", 
"", 
"2018-06-28 10:35:59", 
"2018-06-28 13:35:59", 
"", 
595, 
"'.$url.'wp-content/uploads/2018/06/cover_issue_53_pt_BR-2.jpg", 
0, 
"attachment", 
"image/jpeg", 
0);
';
echo '<br>'. '<b>Adiciona a imagem da edição atual da revista</b>'. '<br>';
execute_query($add_magazine_cover, $conn, $debug);

$add_magazine_cover_postmeta = '
INSERT INTO '.$migrate_to_db.'.wp_db_postmeta (post_id, meta_key, meta_value)
VALUES (465, "_wp_attached_file", "2018/06/cover_issue_53_pt_BR-2.jpg");
';
echo '<br>'. '<b>Adiciona o postmeta da imagem da edição atual da revista</b>'. '<br>';
execute_query($add_magazine_cover_postmeta, $conn, $debug);

$add_magazine_cover_to_acf_field = '
INSERT INTO '.$migrate_to_db.'.wp_db_postmeta (post_id, meta_key, meta_value)
VALUES 
(595, "imagem_da_edicao_atual", "465"),
(595, "_imagem_da_edicao_atual", "field_5afd86af23125");
';
echo '<br>'. '<b>Adiciona a imagem da revista no campo do ACF</b>'. '<br>';
execute_query($add_magazine_cover_to_acf_field, $conn, $debug);

//Adiciona a imagem da licença no rodapé
$add_license_image = '
INSERT INTO '.$migrate_to_db.'.wp_db_posts (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES (
466, 
2, 
"2018-06-28 10:45:43", 
"2018-06-28 13:45:43", 
"", 
"88x31 (1)", 
"", 
"inherit", 
"open", 
"closed", 
"", 
"88x31-1", 
"", 
"", 
"2018-06-28 10:45:43", 
"2018-06-28 13:45:43", 
"", 
597, 
"'.$url.'wp-content/uploads/2018/06/88x31-1.png", 
0, 
"attachment", 
"image/png", 
0);
';
echo '<br>'. '<b>Adiciona a imagem da licença</b>'. '<br>';
execute_query($add_license_image, $conn, $debug);

$add_license_postmeta = '
INSERT INTO '.$migrate_to_db.'.wp_db_postmeta (post_id, meta_key, meta_value)
VALUES (466, "_wp_attached_file", "2018/06/88x31-1.png");
';
echo '<br>'. '<b>Adiciona a postmeta da imagem da licença</b>'. '<br>';
execute_query($add_license_postmeta, $conn, $debug);

$add_license_image_to_acf_field = '
INSERT INTO '.$migrate_to_db.'.wp_db_postmeta (post_id, meta_key, meta_value)
VALUES 
(597, "rodape_imagem", "466"), 
(597, "_rodape_imagem", "field_5af03710f955e");
';
echo '<br>'. '<b>Adiciona a imagem da licença no campo do ACF</b>'. '<br>';
execute_query($add_license_image_to_acf_field, $conn, $debug);


?>