<?php

//Cria a galeria de imagens do projeto XO
$create_xo_gallery = '
INSERT INTO wp_db_posts (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES
	(467, 2, "2018-06-28 17:48:29", "2018-06-28 20:48:29", "", "XO", "", "publish", "closed", "closed", "", "xo", "", "", "2018-06-28 17:48:29", "2018-06-28 20:48:29", "", 0, "'.$url.'?post_type=envira&#038;p=467", 0, "envira", "", 0),
	(468, 2, "2018-06-28 17:48:02", "2018-06-28 20:48:02", "", "Slide55", "", "inherit", "open", "closed", "", "slide55", "", "", "2018-06-28 17:48:02", "2018-06-28 20:48:02", "", 467, "'.$url.'wp-content/uploads/2018/06/Slide55.jpg", 0, "attachment", "image/jpeg", 0),
	(469, 2, "2018-06-28 17:48:03", "2018-06-28 20:48:03", "", "Slide57", "", "inherit", "open", "closed", "", "slide57", "", "", "2018-06-28 17:48:03", "2018-06-28 20:48:03", "", 467, "'.$url.'wp-content/uploads/2018/06/Slide57.jpg", 0, "attachment", "image/jpeg", 0),
	(470, 2, "2018-06-28 17:48:04", "2018-06-28 20:48:04", "", "Slide56", "", "inherit", "open", "closed", "", "slide56", "", "", "2018-06-28 17:48:04", "2018-06-28 20:48:04", "", 467, "'.$url.'wp-content/uploads/2018/06/Slide56.jpg", 0, "attachment", "image/jpeg", 0),
	(471, 2, "2018-06-28 17:48:05", "2018-06-28 20:48:05", "", "Slide53", "", "inherit", "open", "closed", "", "slide53", "", "", "2018-06-28 17:48:05", "2018-06-28 20:48:05", "", 467, "'.$url.'wp-content/uploads/2018/06/Slide53.jpg", 0, "attachment", "image/jpeg", 0),
	(472, 2, "2018-06-28 17:48:06", "2018-06-28 20:48:06", "", "Slide51", "", "inherit", "open", "closed", "", "slide51", "", "", "2018-06-28 17:48:06", "2018-06-28 20:48:06", "", 467, "'.$url.'wp-content/uploads/2018/06/Slide51.jpg", 0, "attachment", "image/jpeg", 0),
	(473, 2, "2018-06-28 17:48:07", "2018-06-28 20:48:07", "", "Slide52", "", "inherit", "open", "closed", "", "slide52", "", "", "2018-06-28 17:48:07", "2018-06-28 20:48:07", "", 467, "'.$url.'wp-content/uploads/2018/06/Slide52.jpg", 0, "attachment", "image/jpeg", 0);
';
echo '<b>Cria a galeria de imagens do projeto XO</b>'. '<br>';
execute_query($create_xo_gallery, $conn, $debug);

$create_xo_gallery_postmeta = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES
    (467, "_eg_in_gallery", "a:6:{i:0;i:468;i:1;i:469;i:2;i:470;i:3;i:471;i:4;i:472;i:5;i:473;}"),
    (467, "_eg_gallery_data", \'a:3:{s:2:\"id\";i:467;s:7:\"gallery\";a:6:{i:472;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide51.jpg\";s:5:\"title\";s:7:\"Slide51\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide51.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:473;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide52.jpg\";s:5:\"title\";s:7:\"Slide52\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide52.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:471;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide53.jpg\";s:5:\"title\";s:7:\"Slide53\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide53.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:468;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide55.jpg\";s:5:\"title\";s:7:\"Slide55\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide55.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:469;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide57.jpg\";s:5:\"title\";s:7:\"Slide57\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide57.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:470;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide56.jpg\";s:5:\"title\";s:7:\"Slide56\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide56.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}}s:6:\"config\";a:21:{s:4:\"type\";s:7:\"default\";s:7:\"columns\";s:1:\"0\";s:13:\"gallery_theme\";s:4:\"base\";s:23:\"justified_gallery_theme\";s:6:\"normal\";s:6:\"gutter\";i:10;s:6:\"margin\";i:10;s:10:\"image_size\";s:7:\"default\";s:10:\"crop_width\";i:640;s:11:\"crop_height\";i:480;s:4:\"crop\";i:0;s:12:\"lazy_loading\";i:1;s:18:\"lazy_loading_delay\";i:500;s:20:\"justified_row_height\";i:150;s:16:\"lightbox_enabled\";i:1;s:14:\"lightbox_theme\";s:4:\"base\";s:19:\"lightbox_image_size\";s:7:\"default\";s:13:\"title_display\";s:5:\"float\";s:7:\"classes\";a:1:{i:0;s:0:\"\";}s:3:\"rtl\";i:0;s:5:\"title\";s:2:\"XO\";s:4:\"slug\";s:2:\"xo\";}}\'),
	(468, "_wp_attached_file", "2018/06/Slide55.jpg"),
	(468, "_eg_has_gallery", "a:1:{i:0;i:467;}"),
	(469, "_wp_attached_file", "2018/06/Slide57.jpg"),
	(469, "_eg_has_gallery", "a:1:{i:0;i:467;}"),
	(470, "_wp_attached_file", "2018/06/Slide56.jpg"),
	(470, "_eg_has_gallery", "a:1:{i:0;i:467;}"),
	(471, "_wp_attached_file", "2018/06/Slide53.jpg"),
	(471, "_eg_has_gallery", "a:1:{i:0;i:467;}"),
	(472, "_wp_attached_file", "2018/06/Slide51.jpg"),
	(472, "_eg_has_gallery", "a:1:{i:0;i:467;}"),
	(473, "_wp_attached_file", "2018/06/Slide52.jpg"),
	(473, "_eg_has_gallery", "a:1:{i:0;i:467;}");
';
echo '<br><b>Cria o postmeta da galeria de imagens do projeto XO</b>'. '<br>';
execute_query($create_xo_gallery_postmeta, $conn, $debug);

//Cria a galeria de imagens do projeto Educacao Aberta
$create_educacao_aberta_gallery = '
INSERT INTO wp_db_posts (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES
	(575, 2, "2018-06-28 18:48:35", "2018-06-28 21:48:35", "", "Educação Aberta", "", "publish", "closed", "closed", "", "educacao-aberta", "", "", "2018-06-28 18:48:35", "2018-06-28 21:48:35", "", 0, "'.$url.'?post_type=envira&#038;p=575", 0, "envira", "", 0),
	(576, 2, "2018-06-28 18:48:06", "2018-06-28 21:48:06", "", "Slide86", "", "inherit", "open", "closed", "", "slide86", "", "", "2018-06-28 18:48:06", "2018-06-28 21:48:06", "", 575, "'.$url.'wp-content/uploads/2018/06/Slide86-1.jpg", 0, "attachment", "image/jpeg", 0),
	(577, 2, "2018-06-28 18:48:07", "2018-06-28 21:48:07", "", "Slide85", "", "inherit", "open", "closed", "", "slide85", "", "", "2018-06-28 18:48:07", "2018-06-28 21:48:07", "", 575, "'.$url.'wp-content/uploads/2018/06/Slide85-1.jpg", 0, "attachment", "image/jpeg", 0);
';
echo '<br><b>Cria a galeria de imagens do projeto Educacao Aberta</b>'. '<br>';
execute_query($create_educacao_aberta_gallery, $conn, $debug);

$create_educacao_aberta_gallery_postmeta = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES
	(575, "_eg_gallery_data", \'a:3:{s:2:\"id\";i:575;s:7:\"gallery\";a:2:{i:577;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:57:\"'.$url.'wp-content/uploads/2018/06/Slide85-1.jpg\";s:5:\"title\";s:7:\"Slide85\";s:4:\"link\";s:57:\"'.$url.'wp-content/uploads/2018/06/Slide85-1.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:576;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:57:\"'.$url.'wp-content/uploads/2018/06/Slide86-1.jpg\";s:5:\"title\";s:7:\"Slide86\";s:4:\"link\";s:57:\"'.$url.'wp-content/uploads/2018/06/Slide86-1.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}}s:6:\"config\";a:21:{s:4:\"type\";s:7:\"default\";s:7:\"columns\";s:1:\"0\";s:13:\"gallery_theme\";s:4:\"base\";s:23:\"justified_gallery_theme\";s:6:\"normal\";s:6:\"gutter\";i:10;s:6:\"margin\";i:10;s:10:\"image_size\";s:7:\"default\";s:10:\"crop_width\";i:640;s:11:\"crop_height\";i:480;s:4:\"crop\";i:0;s:12:\"lazy_loading\";i:1;s:18:\"lazy_loading_delay\";i:500;s:20:\"justified_row_height\";i:150;s:16:\"lightbox_enabled\";i:1;s:14:\"lightbox_theme\";s:4:\"base\";s:19:\"lightbox_image_size\";s:7:\"default\";s:13:\"title_display\";s:5:\"float\";s:7:\"classes\";a:1:{i:0;s:0:\"\";}s:3:\"rtl\";i:0;s:5:\"title\";s:17:\"Educação Aberta\";s:4:\"slug\";s:15:\"educacao-aberta\";}}\'),
	(575, "_eg_in_gallery", "a:2:{i:0;i:576;i:1;i:577;}"),
	(576, "_eg_has_gallery", "a:1:{i:0;i:575;}"),
	(576, "_wp_attached_file", "2018/06/Slide86-1.jpg"),
	(577, "_wp_attached_file", "2018/06/Slide85-1.jpg"),
	(577, "_eg_has_gallery", "a:1:{i:0;i:575;}");
';
echo '<br><b>Cria o postmeta da galeria de imagens do projeto Educacao Aberta</b>'. '<br>';
execute_query($create_educacao_aberta_gallery_postmeta, $conn, $debug);

//Cria a galeria de imagens do projeto UCA
$create_uca_gallery = '
INSERT INTO wp_db_posts (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES
	(578, 2, "2018-06-28 18:51:00", "2018-06-28 21:51:00", "", "UCA", "", "publish", "closed", "closed", "", "uca", "", "", "2018-06-28 18:51:00", "2018-06-28 21:51:00", "", 0, "'.$url.'?post_type=envira&#038;p=578", 0, "envira", "", 0),
	(579, 2, "2018-06-28 18:50:36", "2018-06-28 21:50:36", "", "Slide58", "", "inherit", "open", "closed", "", "slide58", "", "", "2018-06-28 18:50:36", "2018-06-28 21:50:36", "", 578, "'.$url.'wp-content/uploads/2018/06/Slide58.jpg", 0, "attachment", "image/jpeg", 0),
	(580, 2, "2018-06-28 18:50:37", "2018-06-28 21:50:37", "", "Slide59", "", "inherit", "open", "closed", "", "slide59", "", "", "2018-06-28 18:50:37", "2018-06-28 21:50:37", "", 578, "'.$url.'wp-content/uploads/2018/06/Slide59.jpg", 0, "attachment", "image/jpeg", 0),
	(581, 2, "2018-06-28 18:50:38", "2018-06-28 21:50:38", "", "Slide60", "", "inherit", "open", "closed", "", "slide60", "", "", "2018-06-28 18:50:38", "2018-06-28 21:50:38", "", 578, "'.$url.'wp-content/uploads/2018/06/Slide60.jpg", 0, "attachment", "image/jpeg", 0),
	(582, 2, "2018-06-28 18:50:39", "2018-06-28 21:50:39", "", "Slide61", "", "inherit", "open", "closed", "", "slide61", "", "", "2018-06-28 18:50:39", "2018-06-28 21:50:39", "", 578, "'.$url.'wp-content/uploads/2018/06/Slide61.jpg", 0, "attachment", "image/jpeg", 0),
	(583, 2, "2018-06-28 18:50:40", "2018-06-28 21:50:40", "", "Slide62", "", "inherit", "open", "closed", "", "slide62", "", "", "2018-06-28 18:50:40", "2018-06-28 21:50:40", "", 578, "'.$url.'wp-content/uploads/2018/06/Slide62.jpg", 0, "attachment", "image/jpeg", 0),
	(584, 2, "2018-06-28 18:50:41", "2018-06-28 21:50:41", "", "Slide63", "", "inherit", "open", "closed", "", "slide63", "", "", "2018-06-28 18:50:41", "2018-06-28 21:50:41", "", 578, "'.$url.'wp-content/uploads/2018/06/Slide63.jpg", 0, "attachment", "image/jpeg", 0),
	(585, 2, "2018-06-28 18:50:42", "2018-06-28 21:50:42", "", "Slide64", "", "inherit", "open", "closed", "", "slide64", "", "", "2018-06-28 18:50:42", "2018-06-28 21:50:42", "", 578, "'.$url.'wp-content/uploads/2018/06/Slide64.jpg", 0, "attachment", "image/jpeg", 0),
	(586, 2, "2018-06-28 18:50:43", "2018-06-28 21:50:43", "", "Slide65", "", "inherit", "open", "closed", "", "slide65", "", "", "2018-06-28 18:50:43", "2018-06-28 21:50:43", "", 578, "'.$url.'wp-content/uploads/2018/06/Slide65.jpg", 0, "attachment", "image/jpeg", 0),
	(587, 2, "2018-06-28 18:50:44", "2018-06-28 21:50:44", "", "Slide66", "", "inherit", "open", "closed", "", "slide66", "", "", "2018-06-28 18:50:44", "2018-06-28 21:50:44", "", 578, "'.$url.'wp-content/uploads/2018/06/Slide66.jpg", 0, "attachment", "image/jpeg", 0),
	(588, 2, "2018-06-28 18:50:45", "2018-06-28 21:50:45", "", "Slide67", "", "inherit", "open", "closed", "", "slide67", "", "", "2018-06-28 18:50:45", "2018-06-28 21:50:45", "", 578, "'.$url.'wp-content/uploads/2018/06/Slide67.jpg", 0, "attachment", "image/jpeg", 0),
	(589, 2, "2018-06-28 18:50:46", "2018-06-28 21:50:46", "", "Slide68", "", "inherit", "open", "closed", "", "slide68", "", "", "2018-06-28 18:50:46", "2018-06-28 21:50:46", "", 578, "'.$url.'wp-content/uploads/2018/06/Slide68.jpg", 0, "attachment", "image/jpeg", 0),
	(590, 2, "2018-06-28 18:50:47", "2018-06-28 21:50:47", "", "Slide69", "", "inherit", "open", "closed", "", "slide69", "", "", "2018-06-28 18:50:47", "2018-06-28 21:50:47", "", 578, "'.$url.'wp-content/uploads/2018/06/Slide69.jpg", 0, "attachment", "image/jpeg", 0),
	(591, 2, "2018-06-28 18:50:48", "2018-06-28 21:50:48", "", "Slide70", "", "inherit", "open", "closed", "", "slide70", "", "", "2018-06-28 18:50:48", "2018-06-28 21:50:48", "", 578, "'.$url.'wp-content/uploads/2018/06/Slide70.jpg", 0, "attachment", "image/jpeg", 0),
	(592, 2, "2018-06-28 18:50:49", "2018-06-28 21:50:49", "", "Slide71", "", "inherit", "open", "closed", "", "slide71", "", "", "2018-06-28 18:50:49", "2018-06-28 21:50:49", "", 578, "'.$url.'wp-content/uploads/2018/06/Slide71.jpg", 0, "attachment", "image/jpeg", 0),
	(593, 2, "2018-06-28 18:50:49", "2018-06-28 21:50:49", "", "Slide72", "", "inherit", "open", "closed", "", "slide72", "", "", "2018-06-28 18:50:49", "2018-06-28 21:50:49", "", 578, "'.$url.'wp-content/uploads/2018/06/Slide72.jpg", 0, "attachment", "image/jpeg", 0),
	(594, 2, "2018-06-28 18:50:50", "2018-06-28 21:50:50", "", "Slide73", "", "inherit", "open", "closed", "", "slide73", "", "", "2018-06-28 18:50:50", "2018-06-28 21:50:50", "", 578, "'.$url.'wp-content/uploads/2018/06/Slide73.jpg", 0, "attachment", "image/jpeg", 0);
';
echo '<br><b>Cria a galeria de imagens do projeto UCA</b>'. '<br>';
execute_query($create_uca_gallery, $conn, $debug);

$create_uca_gallery_postmeta = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES
	(579, "_wp_attached_file", "2018/06/Slide58.jpg"),
	(579, "_eg_has_gallery", "a:1:{i:0;i:578;}"),
	(578, "_eg_in_gallery", "a:16:{i:0;i:579;i:1;i:580;i:2;i:581;i:3;i:582;i:4;i:583;i:5;i:584;i:6;i:585;i:7;i:586;i:8;i:587;i:9;i:588;i:10;i:589;i:11;i:590;i:12;i:591;i:13;i:592;i:14;i:593;i:15;i:594;}"),
	(578, "_eg_gallery_data", \'a:3:{s:2:\"id\";i:578;s:7:\"gallery\";a:16:{i:579;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide58.jpg\";s:5:\"title\";s:7:\"Slide58\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide58.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:580;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide59.jpg\";s:5:\"title\";s:7:\"Slide59\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide59.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:581;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide60.jpg\";s:5:\"title\";s:7:\"Slide60\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide60.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:582;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide61.jpg\";s:5:\"title\";s:7:\"Slide61\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide61.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:583;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide62.jpg\";s:5:\"title\";s:7:\"Slide62\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide62.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:584;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide63.jpg\";s:5:\"title\";s:7:\"Slide63\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide63.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:585;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide64.jpg\";s:5:\"title\";s:7:\"Slide64\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide64.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:586;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide65.jpg\";s:5:\"title\";s:7:\"Slide65\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide65.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:587;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide66.jpg\";s:5:\"title\";s:7:\"Slide66\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide66.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:588;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide67.jpg\";s:5:\"title\";s:7:\"Slide67\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide67.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:589;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide68.jpg\";s:5:\"title\";s:7:\"Slide68\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide68.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:590;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide69.jpg\";s:5:\"title\";s:7:\"Slide69\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide69.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:591;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide70.jpg\";s:5:\"title\";s:7:\"Slide70\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide70.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:592;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide71.jpg\";s:5:\"title\";s:7:\"Slide71\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide71.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:593;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide72.jpg\";s:5:\"title\";s:7:\"Slide72\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide72.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:594;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide73.jpg\";s:5:\"title\";s:7:\"Slide73\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide73.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}}s:6:\"config\";a:21:{s:4:\"type\";s:7:\"default\";s:7:\"columns\";s:1:\"0\";s:13:\"gallery_theme\";s:4:\"base\";s:23:\"justified_gallery_theme\";s:6:\"normal\";s:6:\"gutter\";i:10;s:6:\"margin\";i:10;s:10:\"image_size\";s:7:\"default\";s:10:\"crop_width\";i:640;s:11:\"crop_height\";i:480;s:4:\"crop\";i:0;s:12:\"lazy_loading\";i:1;s:18:\"lazy_loading_delay\";i:500;s:20:\"justified_row_height\";i:150;s:16:\"lightbox_enabled\";i:1;s:14:\"lightbox_theme\";s:4:\"base\";s:19:\"lightbox_image_size\";s:7:\"default\";s:13:\"title_display\";s:5:\"float\";s:7:\"classes\";a:1:{i:0;s:0:\"\";}s:3:\"rtl\";i:0;s:5:\"title\";s:3:\"UCA\";s:4:\"slug\";s:3:\"uca\";}}\'),
	(580, "_wp_attached_file", "2018/06/Slide59.jpg"),
	(580, "_eg_has_gallery", "a:1:{i:0;i:578;}"),
	(581, "_wp_attached_file", "2018/06/Slide60.jpg"),
	(581, "_eg_has_gallery", "a:1:{i:0;i:578;}"),
	(582, "_wp_attached_file", "2018/06/Slide61.jpg"),
	(582, "_eg_has_gallery", "a:1:{i:0;i:578;}"),
	(583, "_wp_attached_file", "2018/06/Slide62.jpg"),
	(583, "_eg_has_gallery", "a:1:{i:0;i:578;}"),
	(584, "_wp_attached_file", "2018/06/Slide63.jpg"),
	(584, "_eg_has_gallery", "a:1:{i:0;i:578;}"),
	(585, "_wp_attached_file", "2018/06/Slide64.jpg"),
	(585, "_eg_has_gallery", "a:1:{i:0;i:578;}"),
	(586, "_wp_attached_file", "2018/06/Slide65.jpg"),
	(586, "_eg_has_gallery", "a:1:{i:0;i:578;}"),
	(587, "_wp_attached_file", "2018/06/Slide66.jpg"),
	(587, "_eg_has_gallery", "a:1:{i:0;i:578;}"),
	(588, "_wp_attached_file", "2018/06/Slide67.jpg"),
	(588, "_eg_has_gallery", "a:1:{i:0;i:578;}"),
	(589, "_wp_attached_file", "2018/06/Slide68.jpg"),
	(589, "_eg_has_gallery", "a:1:{i:0;i:578;}"),
	(590, "_wp_attached_file", "2018/06/Slide69.jpg"),
	(590, "_eg_has_gallery", "a:1:{i:0;i:578;}"),
	(591, "_wp_attached_file", "2018/06/Slide70.jpg"),
	(591, "_eg_has_gallery", "a:1:{i:0;i:578;}"),
	(592, "_wp_attached_file", "2018/06/Slide71.jpg"),
	(592, "_eg_has_gallery", "a:1:{i:0;i:578;}"),
	(593, "_wp_attached_file", "2018/06/Slide72.jpg"),
	(593, "_eg_has_gallery", "a:1:{i:0;i:578;}"),
	(594, "_wp_attached_file", "2018/06/Slide73.jpg"),
	(594, "_eg_has_gallery", "a:1:{i:0;i:578;}");
';
echo '<br><b>Cria o postmeta da galeria de imagens do projeto UCA</b>'. '<br>';
execute_query($create_uca_gallery_postmeta, $conn, $debug);

//Cria a galeria de imagens do projeto HagaQue
$create_hagaque_gallery = '
INSERT INTO wp_db_posts (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES
	(595, 2, "2018-06-28 18:51:25", "2018-06-28 21:51:25", "", "HagaQue", "", "publish", "closed", "closed", "", "hagaque", "", "", "2018-06-28 18:51:25", "2018-06-28 21:51:25", "", 0, "'.$url.'?post_type=envira&#038;p=595", 0, "envira", "", 0),
	(596, 2, "2018-06-28 18:51:17", "2018-06-28 21:51:17", "", "Slide34", "", "inherit", "open", "closed", "", "slide34", "", "", "2018-06-28 18:51:17", "2018-06-28 21:51:17", "", 595, "'.$url.'wp-content/uploads/2018/06/Slide34.jpg", 0, "attachment", "image/jpeg", 0),
	(597, 2, "2018-06-28 18:51:19", "2018-06-28 21:51:19", "", "Slide35", "", "inherit", "open", "closed", "", "slide35", "", "", "2018-06-28 18:51:19", "2018-06-28 21:51:19", "", 595, "'.$url.'wp-content/uploads/2018/06/Slide35.jpg", 0, "attachment", "image/jpeg", 0);
';
echo '<br><b>Cria a galeria de imagens do projeto HagaQue</b>'. '<br>';
execute_query($create_hagaque_gallery, $conn, $debug);

$create_hagaque_gallery_postmeta = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES
	(596, "_wp_attached_file", "2018/06/Slide34.jpg"),
	(596, "_eg_has_gallery", "a:1:{i:0;i:595;}"),
	(595, "_eg_in_gallery", "a:2:{i:0;i:596;i:1;i:597;}"),
	(595, "_eg_gallery_data", \'a:3:{s:2:\"id\";i:595;s:7:\"gallery\";a:2:{i:596;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide34.jpg\";s:5:\"title\";s:7:\"Slide34\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide34.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:597;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide35.jpg\";s:5:\"title\";s:7:\"Slide35\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide35.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}}s:6:\"config\";a:21:{s:4:\"type\";s:7:\"default\";s:7:\"columns\";s:1:\"0\";s:13:\"gallery_theme\";s:4:\"base\";s:23:\"justified_gallery_theme\";s:6:\"normal\";s:6:\"gutter\";i:10;s:6:\"margin\";i:10;s:10:\"image_size\";s:7:\"default\";s:10:\"crop_width\";i:640;s:11:\"crop_height\";i:480;s:4:\"crop\";i:0;s:12:\"lazy_loading\";i:1;s:18:\"lazy_loading_delay\";i:500;s:20:\"justified_row_height\";i:150;s:16:\"lightbox_enabled\";i:1;s:14:\"lightbox_theme\";s:4:\"base\";s:19:\"lightbox_image_size\";s:7:\"default\";s:13:\"title_display\";s:5:\"float\";s:7:\"classes\";a:1:{i:0;s:0:\"\";}s:3:\"rtl\";i:0;s:5:\"title\";s:7:\"HagaQue\";s:4:\"slug\";s:7:\"hagaque\";}}\'),
	(597, "_wp_attached_file", "2018/06/Slide35.jpg"),
	(597, "_eg_has_gallery", "a:1:{i:0;i:595;}");
';
echo '<br><b>Cria o postmeta da galeria de imagens do projeto HagaQue</b>'. '<br>';
execute_query($create_hagaque_gallery_postmeta, $conn, $debug);

//Cria a galeria de imagens do projeto DAFE
$create_dafe_gallery = '
INSERT INTO wp_db_posts (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES
	(598, 2, "2018-06-28 18:51:50", "2018-06-28 21:51:50", "", "DAFE", "", "publish", "closed", "closed", "", "dafe", "", "", "2018-06-28 18:51:50", "2018-06-28 21:51:50", "", 0, "'.$url.'?post_type=envira&#038;p=598", 0, "envira", "", 0),
	(599, 2, "2018-06-28 18:51:43", "2018-06-28 21:51:43", "", "Slide21", "", "inherit", "open", "closed", "", "slide21", "", "", "2018-06-28 18:51:43", "2018-06-28 21:51:43", "", 598, "'.$url.'wp-content/uploads/2018/06/Slide21.jpg", 0, "attachment", "image/jpeg", 0),
	(600, 2, "2018-06-28 18:51:44", "2018-06-28 21:51:44", "", "Slide22", "", "inherit", "open", "closed", "", "slide22", "", "", "2018-06-28 18:51:44", "2018-06-28 21:51:44", "", 598, "'.$url.'wp-content/uploads/2018/06/Slide22.jpg", 0, "attachment", "image/jpeg", 0),
	(601, 2, "2018-06-28 18:51:45", "2018-06-28 21:51:45", "", "Slide23", "", "inherit", "open", "closed", "", "slide23", "", "", "2018-06-28 18:51:45", "2018-06-28 21:51:45", "", 598, "'.$url.'wp-content/uploads/2018/06/Slide23.jpg", 0, "attachment", "image/jpeg", 0);
';
echo '<br><b>Cria a galeria de imagens do projeto DAFE</b>'. '<br>';
execute_query($create_dafe_gallery, $conn, $debug);

$create_dafe_gallery_postmeta = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES
	(599, "_wp_attached_file", "2018/06/Slide21.jpg"),
	(599, "_eg_has_gallery", "a:1:{i:0;i:598;}"),
	(598, "_eg_in_gallery", "a:3:{i:0;i:599;i:1;i:600;i:2;i:601;}"),
	(598, "_eg_gallery_data", \'a:3:{s:2:\"id\";i:598;s:7:\"gallery\";a:3:{i:599;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide21.jpg\";s:5:\"title\";s:7:\"Slide21\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide21.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:600;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide22.jpg\";s:5:\"title\";s:7:\"Slide22\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide22.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:601;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide23.jpg\";s:5:\"title\";s:7:\"Slide23\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide23.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}}s:6:\"config\";a:21:{s:4:\"type\";s:7:\"default\";s:7:\"columns\";s:1:\"0\";s:13:\"gallery_theme\";s:4:\"base\";s:23:\"justified_gallery_theme\";s:6:\"normal\";s:6:\"gutter\";i:10;s:6:\"margin\";i:10;s:10:\"image_size\";s:7:\"default\";s:10:\"crop_width\";i:640;s:11:\"crop_height\";i:480;s:4:\"crop\";i:0;s:12:\"lazy_loading\";i:1;s:18:\"lazy_loading_delay\";i:500;s:20:\"justified_row_height\";i:150;s:16:\"lightbox_enabled\";i:1;s:14:\"lightbox_theme\";s:4:\"base\";s:19:\"lightbox_image_size\";s:7:\"default\";s:13:\"title_display\";s:5:\"float\";s:7:\"classes\";a:1:{i:0;s:0:\"\";}s:3:\"rtl\";i:0;s:5:\"title\";s:4:\"DAFE\";s:4:\"slug\";s:4:\"dafe\";}}\'),
	(600, "_wp_attached_file", "2018/06/Slide22.jpg"),
	(600, "_eg_has_gallery", "a:1:{i:0;i:598;}"),
	(601, "_wp_attached_file", "2018/06/Slide23.jpg"),
	(601, "_eg_has_gallery", "a:1:{i:0;i:598;}");
';
echo '<br><b>Cria o postmeta da galeria de imagens do projeto DAFE</b>'. '<br>';
execute_query($create_dafe_gallery_postmeta, $conn, $debug);

//Cria a galeria de imagens do projeto Logo
$create_logo_gallery = '
INSERT INTO wp_db_posts (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES
	(602, 2, "2018-06-28 18:52:19", "2018-06-28 21:52:19", "", "Logo", "", "publish", "closed", "closed", "", "logo", "", "", "2018-06-28 18:52:19", "2018-06-28 21:52:19", "", 0, "'.$url.'?post_type=envira&#038;p=602", 0, "envira", "", 0),
	(603, 2, "2018-06-28 18:52:08", "2018-06-28 21:52:08", "", "Slide5", "", "inherit", "open", "closed", "", "slide5", "", "", "2018-06-28 18:52:08", "2018-06-28 21:52:08", "", 602, "'.$url.'wp-content/uploads/2018/06/Slide5.jpg", 0, "attachment", "image/jpeg", 0),
	(604, 2, "2018-06-28 18:52:09", "2018-06-28 21:52:09", "", "Slide6", "", "inherit", "open", "closed", "", "slide6", "", "", "2018-06-28 18:52:09", "2018-06-28 21:52:09", "", 602, "'.$url.'wp-content/uploads/2018/06/Slide6.jpg", 0, "attachment", "image/jpeg", 0),
	(605, 2, "2018-06-28 18:52:10", "2018-06-28 21:52:10", "", "Slide7", "", "inherit", "open", "closed", "", "slide7", "", "", "2018-06-28 18:52:10", "2018-06-28 21:52:10", "", 602, "'.$url.'wp-content/uploads/2018/06/Slide7.jpg", 0, "attachment", "image/jpeg", 0),
	(606, 2, "2018-06-28 18:52:11", "2018-06-28 21:52:11", "", "Slide8", "", "inherit", "open", "closed", "", "slide8", "", "", "2018-06-28 18:52:11", "2018-06-28 21:52:11", "", 602, "'.$url.'wp-content/uploads/2018/06/Slide8.jpg", 0, "attachment", "image/jpeg", 0),
	(607, 2, "2018-06-28 18:52:12", "2018-06-28 21:52:12", "", "Slide9", "", "inherit", "open", "closed", "", "slide9", "", "", "2018-06-28 18:52:12", "2018-06-28 21:52:12", "", 602, "'.$url.'wp-content/uploads/2018/06/Slide9.jpg", 0, "attachment", "image/jpeg", 0),
	(608, 2, "2018-06-28 18:52:13", "2018-06-28 21:52:13", "", "Slide10", "", "inherit", "open", "closed", "", "slide10", "", "", "2018-06-28 18:52:13", "2018-06-28 21:52:13", "", 602, "'.$url.'wp-content/uploads/2018/06/Slide10.jpg", 0, "attachment", "image/jpeg", 0),
	(609, 2, "2018-06-28 18:52:14", "2018-06-28 21:52:14", "", "Slide11", "", "inherit", "open", "closed", "", "slide11", "", "", "2018-06-28 18:52:14", "2018-06-28 21:52:14", "", 602, "'.$url.'wp-content/uploads/2018/06/Slide11.jpg", 0, "attachment", "image/jpeg", 0)
';
echo '<br><b>Cria a galeria de imagens do projeto Logo</b>'. '<br>';
execute_query($create_logo_gallery, $conn, $debug);

$create_logo_gallery_postmeta = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES
	(603, "_wp_attached_file", "2018/06/Slide5.jpg"),
	(603, "_eg_has_gallery", "a:1:{i:0;i:602;}"),
	(602, "_eg_in_gallery", "a:7:{i:0;i:603;i:1;i:604;i:2;i:605;i:3;i:606;i:4;i:607;i:5;i:608;i:6;i:609;}"),
	(602, "_eg_gallery_data", \'a:3:{s:2:\"id\";i:602;s:7:\"gallery\";a:7:{i:603;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:54:\"'.$url.'wp-content/uploads/2018/06/Slide5.jpg\";s:5:\"title\";s:6:\"Slide5\";s:4:\"link\";s:54:\"'.$url.'wp-content/uploads/2018/06/Slide5.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:604;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:54:\"'.$url.'wp-content/uploads/2018/06/Slide6.jpg\";s:5:\"title\";s:6:\"Slide6\";s:4:\"link\";s:54:\"'.$url.'wp-content/uploads/2018/06/Slide6.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:605;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:54:\"'.$url.'wp-content/uploads/2018/06/Slide7.jpg\";s:5:\"title\";s:6:\"Slide7\";s:4:\"link\";s:54:\"'.$url.'wp-content/uploads/2018/06/Slide7.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:606;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:54:\"'.$url.'wp-content/uploads/2018/06/Slide8.jpg\";s:5:\"title\";s:6:\"Slide8\";s:4:\"link\";s:54:\"'.$url.'wp-content/uploads/2018/06/Slide8.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:607;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:54:\"'.$url.'wp-content/uploads/2018/06/Slide9.jpg\";s:5:\"title\";s:6:\"Slide9\";s:4:\"link\";s:54:\"'.$url.'wp-content/uploads/2018/06/Slide9.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:608;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide10.jpg\";s:5:\"title\";s:7:\"Slide10\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide10.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:609;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide11.jpg\";s:5:\"title\";s:7:\"Slide11\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide11.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}}s:6:\"config\";a:21:{s:4:\"type\";s:7:\"default\";s:7:\"columns\";s:1:\"0\";s:13:\"gallery_theme\";s:4:\"base\";s:23:\"justified_gallery_theme\";s:6:\"normal\";s:6:\"gutter\";i:10;s:6:\"margin\";i:10;s:10:\"image_size\";s:7:\"default\";s:10:\"crop_width\";i:640;s:11:\"crop_height\";i:480;s:4:\"crop\";i:0;s:12:\"lazy_loading\";i:1;s:18:\"lazy_loading_delay\";i:500;s:20:\"justified_row_height\";i:150;s:16:\"lightbox_enabled\";i:1;s:14:\"lightbox_theme\";s:4:\"base\";s:19:\"lightbox_image_size\";s:7:\"default\";s:13:\"title_display\";s:5:\"float\";s:7:\"classes\";a:1:{i:0;s:0:\"\";}s:3:\"rtl\";i:0;s:5:\"title\";s:4:\"Logo\";s:4:\"slug\";s:4:\"logo\";}}\'),
	(604, "_wp_attached_file", "2018/06/Slide6.jpg"),
	(604, "_eg_has_gallery", "a:1:{i:0;i:602;}"),
	(605, "_wp_attached_file", "2018/06/Slide7.jpg"),
	(605, "_eg_has_gallery", "a:1:{i:0;i:602;}"),
	(606, "_wp_attached_file", "2018/06/Slide8.jpg"),
	(606, "_eg_has_gallery", "a:1:{i:0;i:602;}"),
	(607, "_wp_attached_file", "2018/06/Slide9.jpg"),
	(607, "_eg_has_gallery", "a:1:{i:0;i:602;}"),
	(608, "_wp_attached_file", "2018/06/Slide10.jpg"),
	(608, "_eg_has_gallery", "a:1:{i:0;i:602;}"),
	(609, "_wp_attached_file", "2018/06/Slide11.jpg"),
	(609, "_eg_has_gallery", "a:1:{i:0;i:602;}");
';
echo '<br><b>Cria o postmeta da galeria de imagens do projeto Logo</b>'. '<br>';
execute_query($create_logo_gallery_postmeta, $conn, $debug);

//Cria a galeria de imagens do projeto Robótica Pedagógica
$create_robotica_pedagogica_gallery = '
INSERT INTO wp_db_posts (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES
	(649, 2, "2018-06-29 10:59:12", "2018-06-29 13:59:12", "", "Robótica Pedagógica", "", "publish", "closed", "closed", "", "robotica-pedagogica", "", "", "2018-06-29 10:59:12", "2018-06-29 13:59:12", "", 0, "'.$url.'?post_type=envira&#038;p=649", 0, "envira", "", 0),
	(650, 2, "2018-06-29 10:59:04", "2018-06-29 13:59:04", "", "Slide17", "", "inherit", "open", "closed", "", "slide17", "", "", "2018-06-29 10:59:04", "2018-06-29 13:59:04", "", 649, "'.$url.'wp-content/uploads/2018/06/Slide17.jpg", 0, "attachment", "image/jpeg", 0),
	(651, 2, "2018-06-29 10:59:05", "2018-06-29 13:59:05", "", "Slide18", "", "inherit", "open", "closed", "", "slide18", "", "", "2018-06-29 10:59:05", "2018-06-29 13:59:05", "", 649, "'.$url.'wp-content/uploads/2018/06/Slide18.jpg", 0, "attachment", "image/jpeg", 0),
	(652, 2, "2018-06-29 10:59:06", "2018-06-29 13:59:06", "", "Slide19", "", "inherit", "open", "closed", "", "slide19", "", "", "2018-06-29 10:59:06", "2018-06-29 13:59:06", "", 649, "'.$url.'wp-content/uploads/2018/06/Slide19.jpg", 0, "attachment", "image/jpeg", 0),
	(653, 2, "2018-06-29 10:59:07", "2018-06-29 13:59:07", "", "Slide20", "", "inherit", "open", "closed", "", "slide20", "", "", "2018-06-29 10:59:07", "2018-06-29 13:59:07", "", 649, "'.$url.'wp-content/uploads/2018/06/Slide20-2.jpg", 0, "attachment", "image/jpeg", 0);
';
echo '<br><b>Cria a galeria de imagens do projeto Robótica Pedagógica</b>'. '<br>';
execute_query($create_robotica_pedagogica_gallery, $conn, $debug);

$create_robotica_pedagogica_gallery_postmeta = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES
    (649, "_eg_in_gallery", "a:4:{i:0;i:650;i:1;i:651;i:2;i:652;i:3;i:653;}"),
	(649, "_eg_gallery_data", \'a:3:{s:2:\"id\";i:649;s:7:\"gallery\";a:4:{i:650;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"http://nied.test/wp-content/uploads/2018/06/Slide17.jpg\";s:5:\"title\";s:7:\"Slide17\";s:4:\"link\";s:55:\"http://nied.test/wp-content/uploads/2018/06/Slide17.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:651;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"http://nied.test/wp-content/uploads/2018/06/Slide18.jpg\";s:5:\"title\";s:7:\"Slide18\";s:4:\"link\";s:55:\"http://nied.test/wp-content/uploads/2018/06/Slide18.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:652;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"http://nied.test/wp-content/uploads/2018/06/Slide19.jpg\";s:5:\"title\";s:7:\"Slide19\";s:4:\"link\";s:55:\"http://nied.test/wp-content/uploads/2018/06/Slide19.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:653;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:57:\"http://nied.test/wp-content/uploads/2018/06/Slide20-2.jpg\";s:5:\"title\";s:7:\"Slide20\";s:4:\"link\";s:57:\"http://nied.test/wp-content/uploads/2018/06/Slide20-2.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}}s:6:\"config\";a:21:{s:4:\"type\";s:7:\"default\";s:7:\"columns\";s:1:\"0\";s:13:\"gallery_theme\";s:4:\"base\";s:23:\"justified_gallery_theme\";s:6:\"normal\";s:6:\"gutter\";i:10;s:6:\"margin\";i:10;s:10:\"image_size\";s:7:\"default\";s:10:\"crop_width\";i:640;s:11:\"crop_height\";i:480;s:4:\"crop\";i:0;s:12:\"lazy_loading\";i:1;s:18:\"lazy_loading_delay\";i:500;s:20:\"justified_row_height\";i:150;s:16:\"lightbox_enabled\";i:1;s:14:\"lightbox_theme\";s:4:\"base\";s:19:\"lightbox_image_size\";s:7:\"default\";s:13:\"title_display\";s:5:\"float\";s:7:\"classes\";a:1:{i:0;s:0:\"\";}s:3:\"rtl\";i:0;s:5:\"title\";s:21:\"Robótica Pedagógica\";s:4:\"slug\";s:19:\"robotica-pedagogica\";}}\'),
	(650, "_wp_attached_file", "2018/06/Slide17.jpg"),
	(650, "_eg_has_gallery", "a:1:{i:0;i:649;}"),
	(651, "_wp_attached_file", "2018/06/Slide18.jpg"),
	(651, "_eg_has_gallery", "a:1:{i:0;i:649;}"),
	(652, "_wp_attached_file", "2018/06/Slide19.jpg"),
	(652, "_eg_has_gallery", "a:1:{i:0;i:649;}"),
	(653, "_wp_attached_file", "2018/06/Slide20-2.jpg"),
	(653, "_eg_has_gallery", "a:1:{i:0;i:649;}");

';
echo '<br><b>Cria a galeria de imagens do projeto Robótica Pedagógica</b>'. '<br>';
execute_query($create_robotica_pedagogica_gallery_postmeta, $conn, $debug);

//Cria a galeria de imagens do projeto E-Cidadania
$create_ecidadania_gallery = '
INSERT INTO wp_db_posts (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES
	(620, 2, "2018-06-28 18:54:21", "2018-06-28 21:54:21", "", "E-Cidadania", "", "publish", "closed", "closed", "", "e-cidadania", "", "", "2018-06-28 18:54:21", "2018-06-28 21:54:21", "", 0, "'.$url.'?post_type=envira&#038;p=620", 0, "envira", "", 0),
	(621, 2, "2018-06-28 18:54:10", "2018-06-28 21:54:10", "", "Slide46", "", "inherit", "open", "closed", "", "slide46", "", "", "2018-06-28 18:54:10", "2018-06-28 21:54:10", "", 620, "'.$url.'wp-content/uploads/2018/06/Slide46.jpg", 0, "attachment", "image/jpeg", 0),
	(622, 2, "2018-06-28 18:54:12", "2018-06-28 21:54:12", "", "Slide47", "", "inherit", "open", "closed", "", "slide47", "", "", "2018-06-28 18:54:12", "2018-06-28 21:54:12", "", 620, "'.$url.'wp-content/uploads/2018/06/Slide47.jpg", 0, "attachment", "image/jpeg", 0),
	(623, 2, "2018-06-28 18:54:13", "2018-06-28 21:54:13", "", "Slide48", "", "inherit", "open", "closed", "", "slide48", "", "", "2018-06-28 18:54:13", "2018-06-28 21:54:13", "", 620, "'.$url.'wp-content/uploads/2018/06/Slide48.jpg", 0, "attachment", "image/jpeg", 0),
	(624, 2, "2018-06-28 18:54:14", "2018-06-28 21:54:14", "", "Slide49", "", "inherit", "open", "closed", "", "slide49", "", "", "2018-06-28 18:54:14", "2018-06-28 21:54:14", "", 620, "'.$url.'wp-content/uploads/2018/06/Slide49.jpg", 0, "attachment", "image/jpeg", 0),
	(625, 2, "2018-06-28 18:54:16", "2018-06-28 21:54:16", "", "Slide50", "", "inherit", "open", "closed", "", "slide50", "", "", "2018-06-28 18:54:16", "2018-06-28 21:54:16", "", 620, "'.$url.'wp-content/uploads/2018/06/Slide50.jpg", 0, "attachment", "image/jpeg", 0);
';
echo '<br><b>Cria a galeria de imagens do projeto E-Cidadania</b>'. '<br>';
execute_query($create_ecidadania_gallery, $conn, $debug);

$create_ecidadania_gallery_postmeta = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES
	(621, "_wp_attached_file", "2018/06/Slide46.jpg"),
	(621, "_eg_has_gallery", "a:1:{i:0;i:620;}"),
	(620, "_eg_in_gallery", "a:5:{i:0;i:621;i:1;i:622;i:2;i:623;i:3;i:624;i:4;i:625;}"),
	(620, "_eg_gallery_data", \'a:3:{s:2:\"id\";i:620;s:7:\"gallery\";a:5:{i:621;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide46.jpg\";s:5:\"title\";s:7:\"Slide46\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide46.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:622;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide47.jpg\";s:5:\"title\";s:7:\"Slide47\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide47.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:623;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide48.jpg\";s:5:\"title\";s:7:\"Slide48\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide48.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:624;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide49.jpg\";s:5:\"title\";s:7:\"Slide49\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide49.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:625;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide50.jpg\";s:5:\"title\";s:7:\"Slide50\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide50.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}}s:6:\"config\";a:21:{s:4:\"type\";s:7:\"default\";s:7:\"columns\";s:1:\"0\";s:13:\"gallery_theme\";s:4:\"base\";s:23:\"justified_gallery_theme\";s:6:\"normal\";s:6:\"gutter\";i:10;s:6:\"margin\";i:10;s:10:\"image_size\";s:7:\"default\";s:10:\"crop_width\";i:640;s:11:\"crop_height\";i:480;s:4:\"crop\";i:0;s:12:\"lazy_loading\";i:1;s:18:\"lazy_loading_delay\";i:500;s:20:\"justified_row_height\";i:150;s:16:\"lightbox_enabled\";i:1;s:14:\"lightbox_theme\";s:4:\"base\";s:19:\"lightbox_image_size\";s:7:\"default\";s:13:\"title_display\";s:5:\"float\";s:7:\"classes\";a:1:{i:0;s:0:\"\";}s:3:\"rtl\";i:0;s:5:\"title\";s:11:\"E-Cidadania\";s:4:\"slug\";s:11:\"e-cidadania\";}}\'),
	(622, "_wp_attached_file", "2018/06/Slide47.jpg"),
	(622, "_eg_has_gallery", "a:1:{i:0;i:620;}"),
	(623, "_wp_attached_file", "2018/06/Slide48.jpg"),
	(623, "_eg_has_gallery", "a:1:{i:0;i:620;}"),
	(624, "_wp_attached_file", "2018/06/Slide49.jpg"),
	(624, "_eg_has_gallery", "a:1:{i:0;i:620;}"),
	(625, "_wp_attached_file", "2018/06/Slide50.jpg"),
	(625, "_eg_has_gallery", "a:1:{i:0;i:620;}");
';
echo '<br><b>Cria a galeria de imagens do projeto E-Cidadania</b>'. '<br>';
execute_query($create_ecidadania_gallery_postmeta, $conn, $debug);

//Cria a galeria de imagens do projeto Rota Acessível
$create_rota_acessivel_gallery = '
INSERT INTO wp_db_posts (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES
	(626, 2, "2018-06-28 18:54:45", "2018-06-28 21:54:45", "", "Rota Acessível", "", "publish", "closed", "closed", "", "rota-acessivel", "", "", "2018-06-28 18:54:45", "2018-06-28 21:54:45", "", 0, "'.$url.'?post_type=envira&#038;p=626", 0, "envira", "", 0),
	(627, 2, "2018-06-28 18:54:40", "2018-06-28 21:54:40", "", "Slide74", "", "inherit", "open", "closed", "", "slide74", "", "", "2018-06-28 18:54:40", "2018-06-28 21:54:40", "", 626, "'.$url.'wp-content/uploads/2018/06/Slide74.jpg", 0, "attachment", "image/jpeg", 0),
	(628, 2, "2018-06-28 18:54:41", "2018-06-28 21:54:41", "", "Slide75", "", "inherit", "open", "closed", "", "slide75", "", "", "2018-06-28 18:54:41", "2018-06-28 21:54:41", "", 626, "'.$url.'wp-content/uploads/2018/06/Slide75.jpg", 0, "attachment", "image/jpeg", 0),
	(629, 2, "2018-06-28 18:54:42", "2018-06-28 21:54:42", "", "Slide76", "", "inherit", "open", "closed", "", "slide76", "", "", "2018-06-28 18:54:42", "2018-06-28 21:54:42", "", 626, "'.$url.'wp-content/uploads/2018/06/Slide76.jpg", 0, "attachment", "image/jpeg", 0),
	(630, 2, "2018-06-28 18:54:43", "2018-06-28 21:54:43", "", "Slide77", "", "inherit", "open", "closed", "", "slide77", "", "", "2018-06-28 18:54:43", "2018-06-28 21:54:43", "", 626, "'.$url.'wp-content/uploads/2018/06/Slide77.jpg", 0, "attachment", "image/jpeg", 0);
';
echo '<br><b>Cria a galeria de imagens do projeto Rota Acessível</b>'. '<br>';
execute_query($create_rota_acessivel_gallery, $conn, $debug);

$create_rota_acessivel_gallery_postmeta = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES
	(627, "_wp_attached_file", "2018/06/Slide74.jpg"),
	(627, "_eg_has_gallery", "a:1:{i:0;i:626;}"),
	(626, "_eg_in_gallery", "a:4:{i:0;i:627;i:1;i:628;i:2;i:629;i:3;i:630;}"),
	(626, "_eg_gallery_data", \'a:3:{s:2:\"id\";i:626;s:7:\"gallery\";a:4:{i:627;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide74.jpg\";s:5:\"title\";s:7:\"Slide74\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide74.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:628;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide75.jpg\";s:5:\"title\";s:7:\"Slide75\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide75.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:629;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide76.jpg\";s:5:\"title\";s:7:\"Slide76\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide76.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:630;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide77.jpg\";s:5:\"title\";s:7:\"Slide77\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide77.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}}s:6:\"config\";a:21:{s:4:\"type\";s:7:\"default\";s:7:\"columns\";s:1:\"0\";s:13:\"gallery_theme\";s:4:\"base\";s:23:\"justified_gallery_theme\";s:6:\"normal\";s:6:\"gutter\";i:10;s:6:\"margin\";i:10;s:10:\"image_size\";s:7:\"default\";s:10:\"crop_width\";i:640;s:11:\"crop_height\";i:480;s:4:\"crop\";i:0;s:12:\"lazy_loading\";i:1;s:18:\"lazy_loading_delay\";i:500;s:20:\"justified_row_height\";i:150;s:16:\"lightbox_enabled\";i:1;s:14:\"lightbox_theme\";s:4:\"base\";s:19:\"lightbox_image_size\";s:7:\"default\";s:13:\"title_display\";s:5:\"float\";s:7:\"classes\";a:1:{i:0;s:0:\"\";}s:3:\"rtl\";i:0;s:5:\"title\";s:15:\"Rota Acessível\";s:4:\"slug\";s:14:\"rota-acessivel\";}}\'),
	(628, "_wp_attached_file", "2018/06/Slide75.jpg"),
	(628, "_eg_has_gallery", "a:1:{i:0;i:626;}"),
	(629, "_wp_attached_file", "2018/06/Slide76.jpg"),
	(629, "_eg_has_gallery", "a:1:{i:0;i:626;}"),
	(630, "_wp_attached_file", "2018/06/Slide77.jpg");
';
echo '<br><b>Cria a galeria de imagens do projeto Rota Acessível</b>'. '<br>';
execute_query($create_rota_acessivel_gallery_postmeta, $conn, $debug);

//Cria a galeria de imagens do projeto TelEduc
$create_teleduc_gallery = '
INSERT INTO wp_db_posts (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES
	(632, 2, "2018-06-28 18:55:29", "2018-06-28 21:55:29", "", "TelEduc", "", "publish", "closed", "closed", "", "teleduc", "", "", "2018-06-28 18:55:29", "2018-06-28 21:55:29", "", 0, "'.$url.'?post_type=envira&#038;p=632", 0, "envira", "", 0),
	(633, 2, "2018-06-28 18:55:19", "2018-06-28 21:55:19", "", "Slide12", "", "inherit", "open", "closed", "", "slide12", "", "", "2018-06-28 18:55:19", "2018-06-28 21:55:19", "", 632, "'.$url.'wp-content/uploads/2018/06/Slide12.jpg", 0, "attachment", "image/jpeg", 0),
	(634, 2, "2018-06-28 18:55:21", "2018-06-28 21:55:21", "", "Slide13", "", "inherit", "open", "closed", "", "slide13", "", "", "2018-06-28 18:55:21", "2018-06-28 21:55:21", "", 632, "'.$url.'wp-content/uploads/2018/06/Slide13.jpg", 0, "attachment", "image/jpeg", 0),
	(635, 2, "2018-06-28 18:55:22", "2018-06-28 21:55:22", "", "Slide14", "", "inherit", "open", "closed", "", "slide14", "", "", "2018-06-28 18:55:22", "2018-06-28 21:55:22", "", 632, "'.$url.'wp-content/uploads/2018/06/Slide14.jpg", 0, "attachment", "image/jpeg", 0),
	(636, 2, "2018-06-28 18:55:23", "2018-06-28 21:55:23", "", "Slide15", "", "inherit", "open", "closed", "", "slide15", "", "", "2018-06-28 18:55:23", "2018-06-28 21:55:23", "", 632, "'.$url.'wp-content/uploads/2018/06/Slide15.jpg", 0, "attachment", "image/jpeg", 0),
	(637, 2, "2018-06-28 18:55:24", "2018-06-28 21:55:24", "", "Slide16", "", "inherit", "open", "closed", "", "slide16", "", "", "2018-06-28 18:55:24", "2018-06-28 21:55:24", "", 632, "'.$url.'wp-content/uploads/2018/06/Slide16.jpg", 0, "attachment", "image/jpeg", 0);
';
echo '<br><b>Cria a galeria de imagens do projeto TelEduc</b>'. '<br>';
execute_query($create_teleduc_gallery, $conn, $debug);

$create_teleduc_gallery_postmeta = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES
	(633, "_wp_attached_file", "2018/06/Slide12.jpg"),
	(633, "_eg_has_gallery", "a:1:{i:0;i:632;}"),
	(632, "_eg_in_gallery", "a:5:{i:0;i:633;i:1;i:634;i:2;i:635;i:3;i:636;i:4;i:637;}"),
	(632, "_eg_gallery_data", \'a:3:{s:2:\"id\";i:632;s:7:\"gallery\";a:5:{i:633;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide12.jpg\";s:5:\"title\";s:7:\"Slide12\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide12.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:634;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide13.jpg\";s:5:\"title\";s:7:\"Slide13\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide13.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:635;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide14.jpg\";s:5:\"title\";s:7:\"Slide14\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide14.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:636;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide15.jpg\";s:5:\"title\";s:7:\"Slide15\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide15.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:637;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide16.jpg\";s:5:\"title\";s:7:\"Slide16\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide16.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}}s:6:\"config\";a:21:{s:4:\"type\";s:7:\"default\";s:7:\"columns\";s:1:\"0\";s:13:\"gallery_theme\";s:4:\"base\";s:23:\"justified_gallery_theme\";s:6:\"normal\";s:6:\"gutter\";i:10;s:6:\"margin\";i:10;s:10:\"image_size\";s:7:\"default\";s:10:\"crop_width\";i:640;s:11:\"crop_height\";i:480;s:4:\"crop\";i:0;s:12:\"lazy_loading\";i:1;s:18:\"lazy_loading_delay\";i:500;s:20:\"justified_row_height\";i:150;s:16:\"lightbox_enabled\";i:1;s:14:\"lightbox_theme\";s:4:\"base\";s:19:\"lightbox_image_size\";s:7:\"default\";s:13:\"title_display\";s:5:\"float\";s:7:\"classes\";a:1:{i:0;s:0:\"\";}s:3:\"rtl\";i:0;s:5:\"title\";s:7:\"TelEduc\";s:4:\"slug\";s:7:\"teleduc\";}}\'),
	(634, "_wp_attached_file", "2018/06/Slide13.jpg"),
	(634, "_eg_has_gallery", "a:1:{i:0;i:632;}"),
	(635, "_wp_attached_file", "2018/06/Slide14.jpg"),
	(635, "_eg_has_gallery", "a:1:{i:0;i:632;}"),
	(636, "_wp_attached_file", "2018/06/Slide15.jpg"),
	(636, "_eg_has_gallery", "a:1:{i:0;i:632;}"),
	(637, "_wp_attached_file", "2018/06/Slide16.jpg"),
	(637, "_eg_has_gallery", "a:1:{i:0;i:632;}");
';
echo '<br><b>Cria a galeria de imagens do projeto TelEduc</b>'. '<br>';
execute_query($create_teleduc_gallery_postmeta, $conn, $debug);

//Cria a galeria de imagens do projeto TIDIA-Ae
$create_tidiaae_gallery = '
INSERT INTO wp_db_posts (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES
	(638, 2, "2018-06-28 18:55:56", "2018-06-28 21:55:56", "", "TIDIA-Ae", "", "publish", "closed", "closed", "", "tidia-ae", "", "", "2018-06-28 18:55:56", "2018-06-28 21:55:56", "", 0, "'.$url.'?post_type=envira&#038;p=638", 0, "envira", "", 0),
	(639, 2, "2018-06-28 18:55:46", "2018-06-28 21:55:46", "", "Slide37", "", "inherit", "open", "closed", "", "slide37", "", "", "2018-06-28 18:55:46", "2018-06-28 21:55:46", "", 638, "'.$url.'wp-content/uploads/2018/06/Slide37.jpg", 0, "attachment", "image/jpeg", 0),
	(640, 2, "2018-06-28 18:55:47", "2018-06-28 21:55:47", "", "Slide38", "", "inherit", "open", "closed", "", "slide38", "", "", "2018-06-28 18:55:47", "2018-06-28 21:55:47", "", 638, "'.$url.'wp-content/uploads/2018/06/Slide38.jpg", 0, "attachment", "image/jpeg", 0);
';
echo '<br><b>Cria a galeria de imagens do projeto TIDIA-Ae</b>'. '<br>';
execute_query($create_tidiaae_gallery, $conn, $debug);

$create_tidiaae_gallery_postmeta = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES
	(639, "_wp_attached_file", "2018/06/Slide37.jpg"),
	(639, "_eg_has_gallery", "a:1:{i:0;i:638;}"),
	(638, "_eg_in_gallery", "a:2:{i:0;i:639;i:1;i:640;}"),
	(638, "_eg_gallery_data", \'a:3:{s:2:\"id\";i:638;s:7:\"gallery\";a:2:{i:639;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide37.jpg\";s:5:\"title\";s:7:\"Slide37\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide37.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:640;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide38.jpg\";s:5:\"title\";s:7:\"Slide38\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide38.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}}s:6:\"config\";a:21:{s:4:\"type\";s:7:\"default\";s:7:\"columns\";s:1:\"0\";s:13:\"gallery_theme\";s:4:\"base\";s:23:\"justified_gallery_theme\";s:6:\"normal\";s:6:\"gutter\";i:10;s:6:\"margin\";i:10;s:10:\"image_size\";s:7:\"default\";s:10:\"crop_width\";i:640;s:11:\"crop_height\";i:480;s:4:\"crop\";i:0;s:12:\"lazy_loading\";i:1;s:18:\"lazy_loading_delay\";i:500;s:20:\"justified_row_height\";i:150;s:16:\"lightbox_enabled\";i:1;s:14:\"lightbox_theme\";s:4:\"base\";s:19:\"lightbox_image_size\";s:7:\"default\";s:13:\"title_display\";s:5:\"float\";s:7:\"classes\";a:1:{i:0;s:0:\"\";}s:3:\"rtl\";i:0;s:5:\"title\";s:8:\"TIDIA-Ae\";s:4:\"slug\";s:8:\"tidia-ae\";}}\'),
	(640, "_wp_attached_file", "2018/06/Slide38.jpg"),
	(640, "_eg_has_gallery", "a:1:{i:0;i:638;}");
';
echo '<br><b>Cria a galeria de imagens do projeto TIDIA-Ae</b>'. '<br>';
execute_query($create_tidiaae_gallery_postmeta, $conn, $debug);

//Cria a galeria de imagens do projeto TIME
$create_time_gallery = '
INSERT INTO wp_db_posts (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES
	(641, 2, "2018-06-28 18:56:22", "2018-06-28 21:56:22", "", "TIME", "", "publish", "closed", "closed", "", "time", "", "", "2018-06-28 18:56:22", "2018-06-28 21:56:22", "", 0, "'.$url.'?post_type=envira&#038;p=641", 0, "envira", "", 0),
	(642, 2, "2018-06-28 18:56:12", "2018-06-28 21:56:12", "", "Slide39", "", "inherit", "open", "closed", "", "slide39", "", "", "2018-06-28 18:56:12", "2018-06-28 21:56:12", "", 641, "'.$url.'wp-content/uploads/2018/06/Slide39.jpg", 0, "attachment", "image/jpeg", 0),
	(643, 2, "2018-06-28 18:56:13", "2018-06-28 21:56:13", "", "Slide40", "", "inherit", "open", "closed", "", "slide40", "", "", "2018-06-28 18:56:13", "2018-06-28 21:56:13", "", 641, "'.$url.'wp-content/uploads/2018/06/Slide40.jpg", 0, "attachment", "image/jpeg", 0),
	(644, 2, "2018-06-28 18:56:14", "2018-06-28 21:56:14", "", "Slide41", "", "inherit", "open", "closed", "", "slide41", "", "", "2018-06-28 18:56:14", "2018-06-28 21:56:14", "", 641, "'.$url.'wp-content/uploads/2018/06/Slide41.jpg", 0, "attachment", "image/jpeg", 0),
	(645, 2, "2018-06-28 18:56:15", "2018-06-28 21:56:15", "", "Slide42", "", "inherit", "open", "closed", "", "slide42", "", "", "2018-06-28 18:56:15", "2018-06-28 21:56:15", "", 641, "'.$url.'wp-content/uploads/2018/06/Slide42.jpg", 0, "attachment", "image/jpeg", 0),
	(646, 2, "2018-06-28 18:56:16", "2018-06-28 21:56:16", "", "Slide43", "", "inherit", "open", "closed", "", "slide43", "", "", "2018-06-28 18:56:16", "2018-06-28 21:56:16", "", 641, "'.$url.'wp-content/uploads/2018/06/Slide43.jpg", 0, "attachment", "image/jpeg", 0),
	(647, 2, "2018-06-28 18:56:17", "2018-06-28 21:56:17", "", "Slide44", "", "inherit", "open", "closed", "", "slide44", "", "", "2018-06-28 18:56:17", "2018-06-28 21:56:17", "", 641, "'.$url.'wp-content/uploads/2018/06/Slide44.jpg", 0, "attachment", "image/jpeg", 0),
	(648, 2, "2018-06-28 18:56:18", "2018-06-28 21:56:18", "", "Slide45", "", "inherit", "open", "closed", "", "slide45", "", "", "2018-06-28 18:56:18", "2018-06-28 21:56:18", "", 641, "'.$url.'wp-content/uploads/2018/06/Slide45.jpg", 0, "attachment", "image/jpeg", 0);
';
echo '<br><b>Cria a galeria de imagens do projeto TIME</b>'. '<br>';
execute_query($create_time_gallery, $conn, $debug);

$create_time_gallery_postmeta = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES
	(642, "_wp_attached_file", "2018/06/Slide39.jpg"),
	(642, "_eg_has_gallery", "a:1:{i:0;i:641;}"),
	(641, "_eg_in_gallery", "a:7:{i:0;i:642;i:1;i:643;i:2;i:644;i:3;i:645;i:4;i:646;i:5;i:647;i:6;i:648;}"),
	(641, "_eg_gallery_data", \'a:3:{s:2:\"id\";i:641;s:7:\"gallery\";a:7:{i:642;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide39.jpg\";s:5:\"title\";s:7:\"Slide39\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide39.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:643;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide40.jpg\";s:5:\"title\";s:7:\"Slide40\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide40.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:644;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide41.jpg\";s:5:\"title\";s:7:\"Slide41\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide41.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:645;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide42.jpg\";s:5:\"title\";s:7:\"Slide42\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide42.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:646;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide43.jpg\";s:5:\"title\";s:7:\"Slide43\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide43.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:647;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide44.jpg\";s:5:\"title\";s:7:\"Slide44\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide44.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:648;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide45.jpg\";s:5:\"title\";s:7:\"Slide45\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide45.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}}s:6:\"config\";a:21:{s:4:\"type\";s:7:\"default\";s:7:\"columns\";s:1:\"0\";s:13:\"gallery_theme\";s:4:\"base\";s:23:\"justified_gallery_theme\";s:6:\"normal\";s:6:\"gutter\";i:10;s:6:\"margin\";i:10;s:10:\"image_size\";s:7:\"default\";s:10:\"crop_width\";i:640;s:11:\"crop_height\";i:480;s:4:\"crop\";i:0;s:12:\"lazy_loading\";i:1;s:18:\"lazy_loading_delay\";i:500;s:20:\"justified_row_height\";i:150;s:16:\"lightbox_enabled\";i:1;s:14:\"lightbox_theme\";s:4:\"base\";s:19:\"lightbox_image_size\";s:7:\"default\";s:13:\"title_display\";s:5:\"float\";s:7:\"classes\";a:1:{i:0;s:0:\"\";}s:3:\"rtl\";i:0;s:5:\"title\";s:4:\"TIME\";s:4:\"slug\";s:4:\"time\";}}\'),
	(643, "_wp_attached_file", "2018/06/Slide40.jpg"),
	(643, "_eg_has_gallery", "a:1:{i:0;i:641;}"),
	(644, "_wp_attached_file", "2018/06/Slide41.jpg"),
	(644, "_eg_has_gallery", "a:1:{i:0;i:641;}"),
	(645, "_wp_attached_file", "2018/06/Slide42.jpg"),
	(645, "_eg_has_gallery", "a:1:{i:0;i:641;}"),
	(646, "_wp_attached_file", "2018/06/Slide43.jpg"),
	(646, "_eg_has_gallery", "a:1:{i:0;i:641;}"),
	(647, "_wp_attached_file", "2018/06/Slide44.jpg"),
	(647, "_eg_has_gallery", "a:1:{i:0;i:641;}"),
	(648, "_wp_attached_file", "2018/06/Slide45.jpg"),
	(648, "_eg_has_gallery", "a:1:{i:0;i:641;}");
';
echo '<br><b>Cria a galeria de imagens do projeto TIME</b>'. '<br>';
execute_query($create_time_gallery_postmeta, $conn, $debug);