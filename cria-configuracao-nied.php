<?php

$create_nied_conf = '
INSERT INTO 
wp_db_posts (
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
629, 
1, 
"2018-06-06 08:19:44", 
"2018-06-06 11:19:44", 
"O Núcleo de Informática Aplicada à Educação (NIED) foi criado pela Portaria GR 139 de 17 de maio de 1983 junto à Reitoria da Universidade Estadual de Campinas e institucionalizado através da Deliberação do Conselho Universitário de 27 de novembro de 1991. Constitui uma unidade especial de pesquisa interdisciplinar, vinculada diretamente à <a href=\"http://www.cocen.unicamp.br/\">Coordenadoria de Centros e Núcleos Interdisciplinares de Pesquisa - COCEN</a>. A equipe do NIED é composta por docentes que pertencem a diferentes Institutos e Faculdades da Universidade, pesquisadores, profissionais da área administrativa e da área de informática. A estrutura organizacional do NIED é bastante enxuta, formada pela Coordenação do Núcleo e dois Conselhos (o Científico e o Consultivo). A Coordenação e o Conselho Científico respaldam todas as relações institucionais entre o Núcleo e a COCEN. As decisões advindas destas relações são submetidas ao Conselho Consultivo, órgão superior do NIED.", 
"O NIED", 
"", 
"publish", 
"closed", 
"closed", 
"", 
"o-nied", 
"", 
"", 
"2018-06-06 08:22:12", 
"2018-06-06 11:22:12", 
"", 
0, 
"'.$url.'?page_id=629", 
0, 
"page", 
"", 
0);
';
echo '<br><b>Cria a página do NIED</b>'. '<br>';
execute_query($create_nied_conf, $conn, $debug);

$nied_page_template = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES (629, "_wp_page_template", "page-nied.php");
';
echo '<br><b>Adiciona o arquivo de template</b>'. '<br>';
execute_query($nied_page_template, $conn, $debug);

$nied_mission_text = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES (629, "nied_missao", "A <strong>missão</strong> do NIED é \"construir e difundir conhecimento sobre as relações entre a educação, a sociedade e a tecnologia por meio de pesquisas e desenvolvimento de tecnologias e metodologias de forma integrada às demandas da sociedade.\"");
';
echo '<br><b>Adiciona o texto da Missão</b>'. '<br>';
execute_query($nied_mission_text, $conn, $debug);

$nied_goal_text = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES (629, "nied_objetivo", "Resumidamente, o <strong>objetivo</strong> do trabalho de pesquisa realizado pelo NIED envolve duas vertentes relacionadas entre si:\r\n<ol>\r\n 	<li>Investigação sobre o papel das Tecnologias de Informação e Comunicação no processo de construção do conhecimento em contextos de ensino–aprendizagem (educação regular, especial/inclusiva, não formal, corporativa e continuada);</li>\r\n 	<li>Desenvolvimento de software e hardware utilizados nesses contextos com base em metodologias projetadas para cada um deles.</li>\r\n</ol>");
';
echo '<br><b>Adiciona o texto do Objetivo</b>'. '<br>';
execute_query($nied_goal_text, $conn, $debug);

$nied_vision_text = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES (629, "nied_visao", "A <strong>visão</strong> do NIED para o ano de 2021 é ser \"um ambiente amplo e virtualizado que reúne profissionais de diferentes perfis, cuja atuação tem impacto e reconhecimento nacional e internacional, visando à construção de conhecimentos sobre o uso de tecnologias para uma sociedade mais solidária.\"");
';
echo '<br><b>Adiciona o texto da Visão</b>'. '<br>';
execute_query($nied_vision_text, $conn, $debug);