<?php

$create_library_term = '
INSERT INTO wp_db_terms (term_id, name, slug, term_group)
VALUES (19, "Biblioteca Digital", "biblioteca-digital", 0);
';
echo '<b>Cria a categoria Biblioteca Digital</b>'. '<br>';
execute_query($create_library_term, $conn, $debug);

$create_library_term_taxonomy = '
INSERT INTO wp_db_term_taxonomy (term_taxonomy_id, term_id, taxonomy, description, parent, count)
VALUES (19, 19, "category", "", 0, 0);
';
echo '<br><b>Cria a taxonomia da Biblioteca Digital</b>'. '<br>';
execute_query($create_library_term_taxonomy, $conn, $debug);

//Relatórios Técnicos
$create_rt_post = '
INSERT INTO wp_db_posts (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES (457, 1, "2018-06-14 09:56:37", "2018-06-14 12:56:37", "", "Relatórios Técnicos", "", "publish", "closed", "closed", "", "relatorios-tecnicos", "", "", "2018-06-14 10:12:13", "2018-06-14 13:12:13", "", 0, "'.$url.'?post_type=biblioteca&#038;p=457", 0, "biblioteca", "", 0);
';
echo '<br><b>Cria o post do Relatório Técnico</b>'. '<br>';
execute_query($create_rt_post, $conn, $debug);

$add_rt_to_term = '
INSERT INTO wp_db_term_relationships (object_id, term_taxonomy_id, term_order)
VALUES (457, 19, 0);
';
echo '<br><b>Adiciona o Relatório Técnico na categoria</b>'. '<br>';
execute_query($add_rt_to_term, $conn, $debug);

$add_icon_to_rt = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES (457, "icone", "document.svg");
';
echo '<br><b>Adiciona o ícone no Relatório Técnico</b>'. '<br>';
execute_query($add_icon_to_rt, $conn, $debug);

//Memos
$create_memo_post = '
INSERT INTO wp_db_posts (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES (458, 1, "2018-06-14 10:03:47", "2018-06-14 13:03:47", "", "Memos", "", "publish", "closed", "closed", "", "memos", "", "", "2018-06-14 10:10:51", "2018-06-14 13:10:51", "", 0, "'.$url.'?post_type=biblioteca&#038;p=458", 0, "biblioteca", "", 0);
';
echo '<br><b>Cria o post do Memo</b>'. '<br>';
execute_query($create_memo_post, $conn, $debug);

$add_memo_to_term = '
INSERT INTO wp_db_term_relationships (object_id, term_taxonomy_id, term_order)
VALUES (458, 19, 0);
';
echo '<br><b>Adiciona o Memo na categoria</b>'. '<br>';
execute_query($add_memo_to_term, $conn, $debug);

$add_icon_to_memo = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES (458, "icone", "list-1.svg");
';
echo '<br><b>Adiciona o ícone no Memo</b>'. '<br>';
execute_query($add_icon_to_memo, $conn, $debug);

$update_memo_page = '
UPDATE wp_db_posts
SET post_content=\'Para acessar os memos, <a href="http://www.nied.unicamp.br/ojs/index.php/memos">clique aqui</a>.\'
WHERE ID = 458;
';
echo '<br><b>Atualiza o conteúdo da página Memo</b>'. '<br>';
execute_query($update_memo_page, $conn, $debug);

//Programas
$create_software_post = '
INSERT INTO wp_db_posts (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES (459, 1, "2018-06-14 10:04:08", "2018-06-14 13:04:08", "", "Programas", "", "publish", "closed", "closed", "", "programas", "", "", "2018-06-14 10:10:35", "2018-06-14 13:10:35", "", 0, "'.$url.'?post_type=biblioteca&#038;p=459", 0, "biblioteca", "", 0);
';
echo '<br><b>Cria o post do Programa</b>'. '<br>';
execute_query($create_software_post, $conn, $debug);

$add_software_to_term = '
INSERT INTO wp_db_term_relationships (object_id, term_taxonomy_id, term_order)
VALUES (459, 19, 0);
';
echo '<br><b>Adiciona o Programa na categoria</b>'. '<br>';
execute_query($add_software_to_term, $conn, $debug);

$add_icon_to_software = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES (459, "icone", "download.svg");
';
echo '<br><b>Adiciona o ícone no Programa</b>'. '<br>';
execute_query($add_icon_to_software, $conn, $debug);

//Audiovisual
$create_audiovisual_post = '
INSERT INTO wp_db_posts (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES (460, 1, "2018-06-14 10:04:25", "2018-06-14 13:04:25", "", "Audiovisuais", "", "publish", "closed", "closed", "", "audiovisuais", "", "", "2018-06-14 10:10:16", "2018-06-14 13:10:16", "", 0, "'.$url.'?post_type=biblioteca&#038;p=460", 0, "biblioteca", "", 0);
';
echo '<br><b>Cria o post do Audiovisual</b>'. '<br>';
execute_query($create_audiovisual_post, $conn, $debug);

$add_audiovisual_to_term = '
INSERT INTO wp_db_term_relationships (object_id, term_taxonomy_id, term_order)
VALUES (460, 19, 0);
';
echo '<br><b>Adiciona o Audiovisual na categoria</b>'. '<br>';
execute_query($add_audiovisual_to_term, $conn, $debug);

$add_icon_to_audiovisual = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES (460, "icone", "play-button-1.svg");
';
echo '<br><b>Adiciona o ícone no Audiovisual</b>'. '<br>';
execute_query($add_icon_to_audiovisual, $conn, $debug);

$create_audiovisual_category = '
INSERT INTO wp_db_terms (name, slug, term_group)
VALUES  ("Audiovisual", "audiovisual", 0);
';
echo '<br><b>Cria a categoria Audiovisuais</b>'. '<br>';
execute_query($create_audiovisual_category, $conn, $debug);

$create_audiovisual_term = '
INSERT INTO wp_db_term_taxonomy (term_taxonomy_id, term_id, taxonomy, description, parent, count)
VALUES (20, 20, "category", "", 0, 0);
';
echo '<br><b>Cria a taxonomia Audiovisual</b>'. '<br>';
execute_query($create_audiovisual_term, $conn, $debug);

//Livros
$create_book_post = '
INSERT INTO wp_db_posts (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES (461, 1, "2018-06-14 10:04:35", "2018-06-14 13:04:35", "", "Livros", "", "publish", "closed", "closed", "", "livros", "", "", "2018-06-14 10:08:37", "2018-06-14 13:08:37", "", 0, "'.$url.'?post_type=biblioteca&#038;p=461", 0, "biblioteca", "", 0);
';
echo '<br><b>Cria o post do Livro</b>'. '<br>';
execute_query($create_book_post, $conn, $debug);

$add_book_to_term = '
INSERT INTO wp_db_term_relationships (object_id, term_taxonomy_id, term_order)
VALUES (461, 19, 0);
';
echo '<br><b>Adiciona o Livro na categoria</b>'. '<br>';
execute_query($add_book_to_term, $conn, $debug);

$add_icon_to_book = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES (461, "icone", "notebook-5.svg");
';
echo '<br><b>Adiciona o ícone no Livro</b>'. '<br>';
execute_query($add_icon_to_book, $conn, $debug);

//Revistas
$create_magazine_post = '
INSERT INTO wp_db_posts (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES (462, 1, "2018-06-14 10:04:48", "2018-06-14 13:04:48", "", "Revistas", "", "publish", "closed", "closed", "", "revistas", "", "", "2018-06-14 10:07:41", "2018-06-14 13:07:41", "", 0, "'.$url.'?post_type=biblioteca&#038;p=462", 0, "biblioteca", "", 0);
';
echo '<br><b>Cria o post da Revista</b>'. '<br>';
execute_query($create_magazine_post, $conn, $debug);

$add_magazine_to_term = '
INSERT INTO wp_db_term_relationships (object_id, term_taxonomy_id, term_order)
VALUES (462, 19, 0);
';
echo '<br><b>Adiciona o Revista na categoria Biblioteca Digital</b>'. '<br>';
execute_query($add_magazine_to_term, $conn, $debug);

$add_icon_to_magazine = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES (462, "icone", "reading.svg");
';
echo '<br><b>Adiciona o ícone no Revista</b>'. '<br>';
execute_query($add_icon_to_magazine, $conn, $debug);

$create_magazine_category = '
INSERT INTO wp_db_terms (name, slug, term_group)
VALUES  ("Revista", "revista", 0);
';
echo '<br><b>Cria a categoria Revista</b>'. '<br>';
execute_query($create_magazine_category, $conn, $debug);

$create_magazine_term = '
INSERT INTO wp_db_term_taxonomy (term_taxonomy_id, term_id, taxonomy, description, parent, count)
VALUES (21, 21, "category", "", 0, 0);
';
echo '<br><b>Cria a taxonomia Revista</b>'. '<br>';
execute_query($create_magazine_term, $conn, $debug);

$update_category = '
UPDATE wp_db_term_taxonomy tt
SET count = ( SELECT COUNT(tr.object_id)
FROM wp_db_term_relationships tr
WHERE tr.term_taxonomy_id = tt.term_taxonomy_id);
';
echo '<br><b>Atualiza o contador da taxonomia</b>'. '<br>';
execute_query($update_category, $conn, $debug);