<?php

$create_jumbotron_conf = '
INSERT INTO wp_db_posts (
ID, 
post_author, 
post_date, 
post_date_gmt, 
post_content, 
post_title, 
post_excerpt, 
post_status, 
comment_status, 
ping_status, 
post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES (
594, 
1, 
"2018-06-06 07:54:01", 
"2018-06-06 10:54:01", 
"", 
"Configurações do Jumbotron da Página Inicial", 
"", 
"publish", 
"closed", 
"closed", 
"", 
"jumbotron-pagina-inicial", 
"", 
"", 
"2018-06-06 08:01:28", 
"2018-06-06 11:01:28", 
"", 
0, 
"'.$url.'?post_type=configuracoes_tema&#038;p=594", 
0, 
"configuracoes_tema", 
"", 
0);
';
echo '<br><b>Cria as configurações do jumbotron</b>'. '<br>';
execute_query($create_jumbotron_conf, $conn, $debug);

$jumbotron_title = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES (594, "jumbotron_titulo", "Núcleo de Informática Aplicada à Educação");
';
echo '<br><b>Adiciona o título do Jumbotron</b>'. '<br>';
execute_query($jumbotron_title, $conn, $debug);

$jumbotron_subtitle = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES (594, "jumbotron_subtitulo", "A missão do NIED é difundir conhecimento sobre as relações entre a educação, a sociedade e a tecnologia por meio de pesquisas e desenvolvimento de tecnologias e metodologias de forma integrada às demandas da sociedade.");
';
echo '<br><b>Adiciona o subtitulo do Jumbotron</b>'. '<br>';
execute_query($jumbotron_subtitle, $conn, $debug);

$jumbotron_button = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES (594, "texto_do_botao", "Saiba Mais");
';
echo '<br><b>Adiciona o texto do botão do Jumbotron</b>'. '<br>';
execute_query($jumbotron_button, $conn, $debug);