<?php

$create_magazine_conf = '
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
post_password, 
post_name, 
to_ping, 
pinged, 
post_modified, 
post_modified_gmt, 
post_content_filtered, 
post_parent, 
guid, 
menu_order, 
post_type, 
post_mime_type, 
comment_count)
VALUES (
595, 
1, 
"2018-06-06 08:03:36", 
"2018-06-06 11:03:36", 
"", 
"Configurações da Seção Revista da Página Inicial", 
"", 
"publish", 
"closed", 
"closed", 
"", 
"revista-pagina-inicial", 
"", 
"", 
"2018-06-06 08:05:21", 
"2018-06-06 11:05:21", 
"", 
0, 
"'.$url.'?post_type=configuracoes_tema&#038;p=595", 
0, 
"configuracoes_tema", 
"", 
0);

';
echo '<br><b>Cria as configurações da seção Revista</b>'. '<br>';
execute_query($create_magazine_conf, $conn, $debug);

$magazine_section_title = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES (595, "nome_da_secao", "Revista");

';
echo '<br><b>Adiciona o nome da seção</b>'. '<br>';
execute_query($magazine_section_title, $conn, $debug);

$magazine_text = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES (595, "texto_apresentacao", "<h2>Tecnologias, Sociedade e Conhecimento</h2>\r\n<div id=\"content\">\r\n<div>\r\n\r\nA revista eletrônica <em>Tecnologias, Sociedade e Conhecimento </em>é uma publicação científica do Núcleo de Informática Aplicada à Educação (NIED/UNICAMP) voltada para a divulgação de trabalhos acadêmicos por meio da promoção do acesso livre à informação.\r\n\r\nA revista visa a promover o debate -- a partir de diferentes perspectivas teóricas e disciplinares e interdisciplinares -- do estado atual, avanços e tendências futuras sobre a construção de conhecimentos mediada por tecnologias.\r\n\r\n</div>\r\n</div>");

';
echo '<br><b>Adiciona o texto de apresentação da Revista</b>'. '<br>';
execute_query($magazine_text, $conn, $debug);