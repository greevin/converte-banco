<?php

$create_theme_conf = '
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
455, 
1, 
"2018-06-06 08:07:15", 
"2018-06-06 11:07:15", 
"", 
"Configurações do Rodapé", 
"", 
"publish", 
"closed", 
"closed", 
"", 
"rodape", 
"", 
"", 
"2018-06-08 11:16:56", 
"2018-06-08 14:16:56", 
"", 
0, 
"'.$url.'?post_type=configuracoes_tema&#038;p=455", 
0, 
"configuracoes_tema", 
"", 
0);
';
echo '<br><b>Cria as configurações do tema</b>'. '<br>';
execute_query($create_theme_conf, $conn, $debug);

$footer_license_url = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES (455, "rodape_endereco_licenca", "http://creativecommons.org/licenses/by/3.0/deed.pt");
';
echo '<br><b>Adiciona a URL da licença</b>'. '<br>';
execute_query($footer_license_url, $conn, $debug);

$footer_license_text = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES (455, "rodape_texto_licenca", "A não ser para conteúdos de terceiros ou quando claramente indicado, os conteúdos disponíveis neste site estão sob uma <a href=\"http://creativecommons.org/licenses/by/3.0/deed.pt\" rel=\"license\">Licença CC-BY</a>.");
';
echo '<br><b>Adiciona o texto da licença</b>'. '<br>';
execute_query($footer_license_text, $conn, $debug);

$footer_university_name = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES (455, "rodape_nome_universidade", "<strong>Universidade Estadual de Campinas - UNICAMP</strong>\r\nCidade Universitária \"Zeferino Vaz\"");
';
echo '<br><b>Adiciona o nome da universidade no rodapé</b>'. '<br>';
execute_query($footer_university_name, $conn, $debug);

$footer_university_address = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES (455, "rodape_endereco_universidade", "Rua Seis de Agosto, 50, Bloco V da Reitoria - 2º Piso\r\nCEP: 13083-873 \r\nCampinas - SP - Brasil");
';
echo '<br><b>Adiciona o endereço da universidade no rodapé</b>'. '<br>';
execute_query($footer_university_address, $conn, $debug);

$footer_university_phone = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES (455, "rodape_telefone_universidade", "+55 19 3521-7350");
';
echo '<br><b>Adiciona o telefone da universidade no rodapé</b>'. '<br>';
execute_query($footer_university_phone, $conn, $debug);

$footer_university_email = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES (455, "rodape_fale_conosco", "nied@unicamp.br");
';
echo '<br><b>Adiciona o email da universidade no rodapé</b>'. '<br>';
execute_query($footer_university_email, $conn, $debug);

$footer_map_url = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES (455, "rodape_mapa", "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14709.704026455363!2d-47.0676892!3d-22.8237233!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb99ebd9deaf675bb!2sNied+(Unicamp)!5e0!3m2!1spt-BR!2sbr!4v1528283715460");
';
echo '<br><b>Adiciona a URL do mapa da universidade no rodapé</b>'. '<br>';
execute_query($footer_map_url, $conn, $debug);