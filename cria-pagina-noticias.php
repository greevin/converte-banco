<?php

$create_news_page = '
INSERT INTO wp_db_posts (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES (463, 1, "2018-06-20 11:00:28", "2018-06-20 14:00:28", "", "Notícias", "", "publish", "closed", "closed", "", "noticias", "", "", "2018-06-20 11:00:28", "2018-06-20 14:00:28", "", 0, "'.$url.'?page_id=463", 0, "page", "", 0);
';
echo '<b>Cria a página de Notícias</b>'. '<br>';
execute_query($create_news_page, $conn, $debug);

$create_news_postmeta = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES (463, "_wp_page_template", "page-noticias.php");
';
echo '<br><b>Adiciona o template para essa página</b>'. '<br>';
execute_query($create_news_postmeta, $conn, $debug);
