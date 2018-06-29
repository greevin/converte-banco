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
    (467, "_eg_gallery_data", \'a:3:{s:2:\"id\";i:467;s:7:\"gallery\";a:6:{i:472;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide51.jpg\";s:5:\"title\";s:7:\"Slide51\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide51.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:473;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide52.jpg\";s:5:\"title\";s:7:\"Slide52\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide52.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:471;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide53.jpg\";s:5:\"title\";s:7:\"Slide53\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide53.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:468;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide55.jpg\";s:5:\"title\";s:7:\"Slide55\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide55.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:469;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide57.jpg\";s:5:\"title\";s:7:\"Slide57\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide57.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:470;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide56.jpg\";s:5:\"title\";s:7:\"Slide56\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide56.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}}s:6:\"config\";a:21:{s:4:\"type\";s:7:\"default\";s:7:\"columns\";s:1:\"0\";s:13:\"gallery_theme\";s:4:\"base\";s:23:\"justified_gallery_theme\";s:6:\"normal\";s:6:\"gutter\";i:10;s:6:\"margin\";i:10;s:10:\"image_size\";s:7:\"default\";s:10:\"crop_width\";i:532;s:11:\"crop_height\";i:480;s:4:\"crop\";i:0;s:12:\"lazy_loading\";i:1;s:18:\"lazy_loading_delay\";i:500;s:20:\"justified_row_height\";i:150;s:16:\"lightbox_enabled\";i:1;s:14:\"lightbox_theme\";s:4:\"base\";s:19:\"lightbox_image_size\";s:7:\"default\";s:13:\"title_display\";s:5:\"float\";s:7:\"classes\";a:1:{i:0;s:0:\"\";}s:3:\"rtl\";i:0;s:5:\"title\";s:2:\"XO\";s:4:\"slug\";s:2:\"xo\";}}\'),
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
	(474, 2, "2018-06-28 18:48:35", "2018-06-28 21:48:35", "", "Educação Aberta", "", "publish", "closed", "closed", "", "educacao-aberta", "", "", "2018-06-28 18:48:35", "2018-06-28 21:48:35", "", 0, "'.$url.'?post_type=envira&#038;p=474", 0, "envira", "", 0),
	(475, 2, "2018-06-28 18:48:06", "2018-06-28 21:48:06", "", "Slide86", "", "inherit", "open", "closed", "", "slide86", "", "", "2018-06-28 18:48:06", "2018-06-28 21:48:06", "", 474, "'.$url.'wp-content/uploads/2018/06/Slide86-1.jpg", 0, "attachment", "image/jpeg", 0),
	(476, 2, "2018-06-28 18:48:07", "2018-06-28 21:48:07", "", "Slide85", "", "inherit", "open", "closed", "", "slide85", "", "", "2018-06-28 18:48:07", "2018-06-28 21:48:07", "", 474, "'.$url.'wp-content/uploads/2018/06/Slide85-1.jpg", 0, "attachment", "image/jpeg", 0);
';
echo '<br><b>Cria a galeria de imagens do projeto Educacao Aberta</b>'. '<br>';
execute_query($create_educacao_aberta_gallery, $conn, $debug);

$create_educacao_aberta_gallery_postmeta = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES
	(474, "_eg_gallery_data", \'a:3:{s:2:\"id\";i:474;s:7:\"gallery\";a:2:{i:476;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:57:\"'.$url.'wp-content/uploads/2018/06/Slide85-1.jpg\";s:5:\"title\";s:7:\"Slide85\";s:4:\"link\";s:57:\"'.$url.'wp-content/uploads/2018/06/Slide85-1.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:475;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:57:\"'.$url.'wp-content/uploads/2018/06/Slide86-1.jpg\";s:5:\"title\";s:7:\"Slide86\";s:4:\"link\";s:57:\"'.$url.'wp-content/uploads/2018/06/Slide86-1.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}}s:6:\"config\";a:21:{s:4:\"type\";s:7:\"default\";s:7:\"columns\";s:1:\"0\";s:13:\"gallery_theme\";s:4:\"base\";s:23:\"justified_gallery_theme\";s:6:\"normal\";s:6:\"gutter\";i:10;s:6:\"margin\";i:10;s:10:\"image_size\";s:7:\"default\";s:10:\"crop_width\";i:532;s:11:\"crop_height\";i:480;s:4:\"crop\";i:0;s:12:\"lazy_loading\";i:1;s:18:\"lazy_loading_delay\";i:500;s:20:\"justified_row_height\";i:150;s:16:\"lightbox_enabled\";i:1;s:14:\"lightbox_theme\";s:4:\"base\";s:19:\"lightbox_image_size\";s:7:\"default\";s:13:\"title_display\";s:5:\"float\";s:7:\"classes\";a:1:{i:0;s:0:\"\";}s:3:\"rtl\";i:0;s:5:\"title\";s:17:\"Educação Aberta\";s:4:\"slug\";s:15:\"educacao-aberta\";}}\'),
	(474, "_eg_in_gallery", "a:2:{i:0;i:475;i:1;i:476;}"),
	(475, "_eg_has_gallery", "a:1:{i:0;i:474;}"),
	(475, "_wp_attached_file", "2018/06/Slide86-1.jpg"),
	(476, "_wp_attached_file", "2018/06/Slide85-1.jpg"),
	(476, "_eg_has_gallery", "a:1:{i:0;i:474;}");
';
echo '<br><b>Cria o postmeta da galeria de imagens do projeto Educacao Aberta</b>'. '<br>';
execute_query($create_educacao_aberta_gallery_postmeta, $conn, $debug);

//Cria a galeria de imagens do projeto UCA
$create_uca_gallery = '
INSERT INTO wp_db_posts (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES
	(477, 2, "2018-06-28 18:51:00", "2018-06-28 21:51:00", "", "UCA", "", "publish", "closed", "closed", "", "uca", "", "", "2018-06-28 18:51:00", "2018-06-28 21:51:00", "", 0, "'.$url.'?post_type=envira&#038;p=477", 0, "envira", "", 0),
	(478, 2, "2018-06-28 18:50:36", "2018-06-28 21:50:36", "", "Slide58", "", "inherit", "open", "closed", "", "slide58", "", "", "2018-06-28 18:50:36", "2018-06-28 21:50:36", "", 477, "'.$url.'wp-content/uploads/2018/06/Slide58.jpg", 0, "attachment", "image/jpeg", 0),
	(479, 2, "2018-06-28 18:50:37", "2018-06-28 21:50:37", "", "Slide59", "", "inherit", "open", "closed", "", "slide59", "", "", "2018-06-28 18:50:37", "2018-06-28 21:50:37", "", 477, "'.$url.'wp-content/uploads/2018/06/Slide59.jpg", 0, "attachment", "image/jpeg", 0),
	(480, 2, "2018-06-28 18:50:38", "2018-06-28 21:50:38", "", "Slide60", "", "inherit", "open", "closed", "", "slide60", "", "", "2018-06-28 18:50:38", "2018-06-28 21:50:38", "", 477, "'.$url.'wp-content/uploads/2018/06/Slide60.jpg", 0, "attachment", "image/jpeg", 0),
	(481, 2, "2018-06-28 18:50:39", "2018-06-28 21:50:39", "", "Slide61", "", "inherit", "open", "closed", "", "slide61", "", "", "2018-06-28 18:50:39", "2018-06-28 21:50:39", "", 477, "'.$url.'wp-content/uploads/2018/06/Slide61.jpg", 0, "attachment", "image/jpeg", 0),
	(482, 2, "2018-06-28 18:50:40", "2018-06-28 21:50:40", "", "Slide62", "", "inherit", "open", "closed", "", "slide62", "", "", "2018-06-28 18:50:40", "2018-06-28 21:50:40", "", 477, "'.$url.'wp-content/uploads/2018/06/Slide62.jpg", 0, "attachment", "image/jpeg", 0),
	(483, 2, "2018-06-28 18:50:41", "2018-06-28 21:50:41", "", "Slide63", "", "inherit", "open", "closed", "", "slide63", "", "", "2018-06-28 18:50:41", "2018-06-28 21:50:41", "", 477, "'.$url.'wp-content/uploads/2018/06/Slide63.jpg", 0, "attachment", "image/jpeg", 0),
	(484, 2, "2018-06-28 18:50:42", "2018-06-28 21:50:42", "", "Slide64", "", "inherit", "open", "closed", "", "slide64", "", "", "2018-06-28 18:50:42", "2018-06-28 21:50:42", "", 477, "'.$url.'wp-content/uploads/2018/06/Slide64.jpg", 0, "attachment", "image/jpeg", 0),
	(485, 2, "2018-06-28 18:50:43", "2018-06-28 21:50:43", "", "Slide65", "", "inherit", "open", "closed", "", "slide65", "", "", "2018-06-28 18:50:43", "2018-06-28 21:50:43", "", 477, "'.$url.'wp-content/uploads/2018/06/Slide65.jpg", 0, "attachment", "image/jpeg", 0),
	(486, 2, "2018-06-28 18:50:44", "2018-06-28 21:50:44", "", "Slide66", "", "inherit", "open", "closed", "", "slide66", "", "", "2018-06-28 18:50:44", "2018-06-28 21:50:44", "", 477, "'.$url.'wp-content/uploads/2018/06/Slide66.jpg", 0, "attachment", "image/jpeg", 0),
	(487, 2, "2018-06-28 18:50:45", "2018-06-28 21:50:45", "", "Slide67", "", "inherit", "open", "closed", "", "slide67", "", "", "2018-06-28 18:50:45", "2018-06-28 21:50:45", "", 477, "'.$url.'wp-content/uploads/2018/06/Slide67.jpg", 0, "attachment", "image/jpeg", 0),
	(488, 2, "2018-06-28 18:50:46", "2018-06-28 21:50:46", "", "Slide68", "", "inherit", "open", "closed", "", "slide68", "", "", "2018-06-28 18:50:46", "2018-06-28 21:50:46", "", 477, "'.$url.'wp-content/uploads/2018/06/Slide68.jpg", 0, "attachment", "image/jpeg", 0),
	(489, 2, "2018-06-28 18:50:47", "2018-06-28 21:50:47", "", "Slide69", "", "inherit", "open", "closed", "", "slide69", "", "", "2018-06-28 18:50:47", "2018-06-28 21:50:47", "", 477, "'.$url.'wp-content/uploads/2018/06/Slide69.jpg", 0, "attachment", "image/jpeg", 0),
	(490, 2, "2018-06-28 18:50:48", "2018-06-28 21:50:48", "", "Slide70", "", "inherit", "open", "closed", "", "slide70", "", "", "2018-06-28 18:50:48", "2018-06-28 21:50:48", "", 477, "'.$url.'wp-content/uploads/2018/06/Slide70.jpg", 0, "attachment", "image/jpeg", 0),
	(491, 2, "2018-06-28 18:50:49", "2018-06-28 21:50:49", "", "Slide71", "", "inherit", "open", "closed", "", "slide71", "", "", "2018-06-28 18:50:49", "2018-06-28 21:50:49", "", 477, "'.$url.'wp-content/uploads/2018/06/Slide71.jpg", 0, "attachment", "image/jpeg", 0),
	(492, 2, "2018-06-28 18:50:49", "2018-06-28 21:50:49", "", "Slide72", "", "inherit", "open", "closed", "", "slide72", "", "", "2018-06-28 18:50:49", "2018-06-28 21:50:49", "", 477, "'.$url.'wp-content/uploads/2018/06/Slide72.jpg", 0, "attachment", "image/jpeg", 0),
	(493, 2, "2018-06-28 18:50:50", "2018-06-28 21:50:50", "", "Slide73", "", "inherit", "open", "closed", "", "slide73", "", "", "2018-06-28 18:50:50", "2018-06-28 21:50:50", "", 477, "'.$url.'wp-content/uploads/2018/06/Slide73.jpg", 0, "attachment", "image/jpeg", 0);
';
echo '<br><b>Cria a galeria de imagens do projeto UCA</b>'. '<br>';
execute_query($create_uca_gallery, $conn, $debug);

$create_uca_gallery_postmeta = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES
	(478, "_wp_attached_file", "2018/06/Slide58.jpg"),
	(478, "_eg_has_gallery", "a:1:{i:0;i:477;}"),
	(477, "_eg_in_gallery", "a:16:{i:0;i:478;i:1;i:479;i:2;i:480;i:3;i:481;i:4;i:482;i:5;i:483;i:6;i:484;i:7;i:485;i:8;i:486;i:9;i:487;i:10;i:488;i:11;i:489;i:12;i:490;i:13;i:491;i:14;i:492;i:15;i:493;}"),
	(477, "_eg_gallery_data", \'a:3:{s:2:\"id\";i:477;s:7:\"gallery\";a:16:{i:478;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide58.jpg\";s:5:\"title\";s:7:\"Slide58\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide58.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:479;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide59.jpg\";s:5:\"title\";s:7:\"Slide59\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide59.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:480;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide60.jpg\";s:5:\"title\";s:7:\"Slide60\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide60.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:481;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide61.jpg\";s:5:\"title\";s:7:\"Slide61\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide61.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:482;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide62.jpg\";s:5:\"title\";s:7:\"Slide62\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide62.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:483;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide63.jpg\";s:5:\"title\";s:7:\"Slide63\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide63.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:484;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide64.jpg\";s:5:\"title\";s:7:\"Slide64\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide64.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:485;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide65.jpg\";s:5:\"title\";s:7:\"Slide65\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide65.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:486;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide66.jpg\";s:5:\"title\";s:7:\"Slide66\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide66.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:487;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide67.jpg\";s:5:\"title\";s:7:\"Slide67\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide67.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:488;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide68.jpg\";s:5:\"title\";s:7:\"Slide68\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide68.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:489;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide69.jpg\";s:5:\"title\";s:7:\"Slide69\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide69.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:490;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide70.jpg\";s:5:\"title\";s:7:\"Slide70\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide70.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:491;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide71.jpg\";s:5:\"title\";s:7:\"Slide71\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide71.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:492;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide72.jpg\";s:5:\"title\";s:7:\"Slide72\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide72.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:493;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide73.jpg\";s:5:\"title\";s:7:\"Slide73\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide73.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}}s:6:\"config\";a:21:{s:4:\"type\";s:7:\"default\";s:7:\"columns\";s:1:\"0\";s:13:\"gallery_theme\";s:4:\"base\";s:23:\"justified_gallery_theme\";s:6:\"normal\";s:6:\"gutter\";i:10;s:6:\"margin\";i:10;s:10:\"image_size\";s:7:\"default\";s:10:\"crop_width\";i:532;s:11:\"crop_height\";i:480;s:4:\"crop\";i:0;s:12:\"lazy_loading\";i:1;s:18:\"lazy_loading_delay\";i:500;s:20:\"justified_row_height\";i:150;s:16:\"lightbox_enabled\";i:1;s:14:\"lightbox_theme\";s:4:\"base\";s:19:\"lightbox_image_size\";s:7:\"default\";s:13:\"title_display\";s:5:\"float\";s:7:\"classes\";a:1:{i:0;s:0:\"\";}s:3:\"rtl\";i:0;s:5:\"title\";s:3:\"UCA\";s:4:\"slug\";s:3:\"uca\";}}\'),
	(479, "_wp_attached_file", "2018/06/Slide59.jpg"),
	(479, "_eg_has_gallery", "a:1:{i:0;i:477;}"),
	(480, "_wp_attached_file", "2018/06/Slide60.jpg"),
	(480, "_eg_has_gallery", "a:1:{i:0;i:477;}"),
	(481, "_wp_attached_file", "2018/06/Slide61.jpg"),
	(481, "_eg_has_gallery", "a:1:{i:0;i:477;}"),
	(482, "_wp_attached_file", "2018/06/Slide62.jpg"),
	(482, "_eg_has_gallery", "a:1:{i:0;i:477;}"),
	(483, "_wp_attached_file", "2018/06/Slide63.jpg"),
	(483, "_eg_has_gallery", "a:1:{i:0;i:477;}"),
	(484, "_wp_attached_file", "2018/06/Slide64.jpg"),
	(484, "_eg_has_gallery", "a:1:{i:0;i:477;}"),
	(485, "_wp_attached_file", "2018/06/Slide65.jpg"),
	(485, "_eg_has_gallery", "a:1:{i:0;i:477;}"),
	(486, "_wp_attached_file", "2018/06/Slide66.jpg"),
	(486, "_eg_has_gallery", "a:1:{i:0;i:477;}"),
	(487, "_wp_attached_file", "2018/06/Slide67.jpg"),
	(487, "_eg_has_gallery", "a:1:{i:0;i:477;}"),
	(488, "_wp_attached_file", "2018/06/Slide68.jpg"),
	(488, "_eg_has_gallery", "a:1:{i:0;i:477;}"),
	(489, "_wp_attached_file", "2018/06/Slide69.jpg"),
	(489, "_eg_has_gallery", "a:1:{i:0;i:477;}"),
	(490, "_wp_attached_file", "2018/06/Slide70.jpg"),
	(490, "_eg_has_gallery", "a:1:{i:0;i:477;}"),
	(491, "_wp_attached_file", "2018/06/Slide71.jpg"),
	(491, "_eg_has_gallery", "a:1:{i:0;i:477;}"),
	(492, "_wp_attached_file", "2018/06/Slide72.jpg"),
	(492, "_eg_has_gallery", "a:1:{i:0;i:477;}"),
	(493, "_wp_attached_file", "2018/06/Slide73.jpg"),
	(493, "_eg_has_gallery", "a:1:{i:0;i:477;}");
';
echo '<br><b>Cria o postmeta da galeria de imagens do projeto UCA</b>'. '<br>';
execute_query($create_uca_gallery_postmeta, $conn, $debug);

//Cria a galeria de imagens do projeto HagaQue
$create_hagaque_gallery = '
INSERT INTO wp_db_posts (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES
	(494, 2, "2018-06-28 18:51:25", "2018-06-28 21:51:25", "", "HagaQue", "", "publish", "closed", "closed", "", "hagaque", "", "", "2018-06-28 18:51:25", "2018-06-28 21:51:25", "", 0, "'.$url.'?post_type=envira&#038;p=494", 0, "envira", "", 0),
	(495, 2, "2018-06-28 18:51:17", "2018-06-28 21:51:17", "", "Slide34", "", "inherit", "open", "closed", "", "slide34", "", "", "2018-06-28 18:51:17", "2018-06-28 21:51:17", "", 494, "'.$url.'wp-content/uploads/2018/06/Slide34.jpg", 0, "attachment", "image/jpeg", 0),
	(496, 2, "2018-06-28 18:51:19", "2018-06-28 21:51:19", "", "Slide35", "", "inherit", "open", "closed", "", "slide35", "", "", "2018-06-28 18:51:19", "2018-06-28 21:51:19", "", 494, "'.$url.'wp-content/uploads/2018/06/Slide35.jpg", 0, "attachment", "image/jpeg", 0);
';
echo '<br><b>Cria a galeria de imagens do projeto HagaQue</b>'. '<br>';
execute_query($create_hagaque_gallery, $conn, $debug);

$create_hagaque_gallery_postmeta = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES
	(495, "_wp_attached_file", "2018/06/Slide34.jpg"),
	(495, "_eg_has_gallery", "a:1:{i:0;i:494;}"),
	(494, "_eg_in_gallery", "a:2:{i:0;i:495;i:1;i:496;}"),
	(494, "_eg_gallery_data", \'a:3:{s:2:\"id\";i:494;s:7:\"gallery\";a:2:{i:495;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide34.jpg\";s:5:\"title\";s:7:\"Slide34\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide34.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:496;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide35.jpg\";s:5:\"title\";s:7:\"Slide35\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide35.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}}s:6:\"config\";a:21:{s:4:\"type\";s:7:\"default\";s:7:\"columns\";s:1:\"0\";s:13:\"gallery_theme\";s:4:\"base\";s:23:\"justified_gallery_theme\";s:6:\"normal\";s:6:\"gutter\";i:10;s:6:\"margin\";i:10;s:10:\"image_size\";s:7:\"default\";s:10:\"crop_width\";i:532;s:11:\"crop_height\";i:480;s:4:\"crop\";i:0;s:12:\"lazy_loading\";i:1;s:18:\"lazy_loading_delay\";i:500;s:20:\"justified_row_height\";i:150;s:16:\"lightbox_enabled\";i:1;s:14:\"lightbox_theme\";s:4:\"base\";s:19:\"lightbox_image_size\";s:7:\"default\";s:13:\"title_display\";s:5:\"float\";s:7:\"classes\";a:1:{i:0;s:0:\"\";}s:3:\"rtl\";i:0;s:5:\"title\";s:7:\"HagaQue\";s:4:\"slug\";s:7:\"hagaque\";}}\'),
	(496, "_wp_attached_file", "2018/06/Slide35.jpg"),
	(496, "_eg_has_gallery", "a:1:{i:0;i:494;}");
';
echo '<br><b>Cria o postmeta da galeria de imagens do projeto HagaQue</b>'. '<br>';
execute_query($create_hagaque_gallery_postmeta, $conn, $debug);

//Cria a galeria de imagens do projeto DAFE
$create_dafe_gallery = '
INSERT INTO wp_db_posts (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES
	(497, 2, "2018-06-28 18:51:50", "2018-06-28 21:51:50", "", "DAFE", "", "publish", "closed", "closed", "", "dafe", "", "", "2018-06-28 18:51:50", "2018-06-28 21:51:50", "", 0, "'.$url.'?post_type=envira&#038;p=497", 0, "envira", "", 0),
	(498, 2, "2018-06-28 18:51:43", "2018-06-28 21:51:43", "", "Slide21", "", "inherit", "open", "closed", "", "slide21", "", "", "2018-06-28 18:51:43", "2018-06-28 21:51:43", "", 497, "'.$url.'wp-content/uploads/2018/06/Slide21.jpg", 0, "attachment", "image/jpeg", 0),
	(499, 2, "2018-06-28 18:51:44", "2018-06-28 21:51:44", "", "Slide22", "", "inherit", "open", "closed", "", "slide22", "", "", "2018-06-28 18:51:44", "2018-06-28 21:51:44", "", 497, "'.$url.'wp-content/uploads/2018/06/Slide22.jpg", 0, "attachment", "image/jpeg", 0),
	(500, 2, "2018-06-28 18:51:45", "2018-06-28 21:51:45", "", "Slide23", "", "inherit", "open", "closed", "", "slide23", "", "", "2018-06-28 18:51:45", "2018-06-28 21:51:45", "", 497, "'.$url.'wp-content/uploads/2018/06/Slide23.jpg", 0, "attachment", "image/jpeg", 0);
';
echo '<br><b>Cria a galeria de imagens do projeto DAFE</b>'. '<br>';
execute_query($create_dafe_gallery, $conn, $debug);

$create_dafe_gallery_postmeta = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES
	(498, "_wp_attached_file", "2018/06/Slide21.jpg"),
	(498, "_eg_has_gallery", "a:1:{i:0;i:497;}"),
	(497, "_eg_in_gallery", "a:3:{i:0;i:498;i:1;i:499;i:2;i:500;}"),
	(497, "_eg_gallery_data", \'a:3:{s:2:\"id\";i:497;s:7:\"gallery\";a:3:{i:498;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide21.jpg\";s:5:\"title\";s:7:\"Slide21\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide21.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:499;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide22.jpg\";s:5:\"title\";s:7:\"Slide22\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide22.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:500;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide23.jpg\";s:5:\"title\";s:7:\"Slide23\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide23.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}}s:6:\"config\";a:21:{s:4:\"type\";s:7:\"default\";s:7:\"columns\";s:1:\"0\";s:13:\"gallery_theme\";s:4:\"base\";s:23:\"justified_gallery_theme\";s:6:\"normal\";s:6:\"gutter\";i:10;s:6:\"margin\";i:10;s:10:\"image_size\";s:7:\"default\";s:10:\"crop_width\";i:532;s:11:\"crop_height\";i:480;s:4:\"crop\";i:0;s:12:\"lazy_loading\";i:1;s:18:\"lazy_loading_delay\";i:500;s:20:\"justified_row_height\";i:150;s:16:\"lightbox_enabled\";i:1;s:14:\"lightbox_theme\";s:4:\"base\";s:19:\"lightbox_image_size\";s:7:\"default\";s:13:\"title_display\";s:5:\"float\";s:7:\"classes\";a:1:{i:0;s:0:\"\";}s:3:\"rtl\";i:0;s:5:\"title\";s:4:\"DAFE\";s:4:\"slug\";s:4:\"dafe\";}}\'),
	(499, "_wp_attached_file", "2018/06/Slide22.jpg"),
	(499, "_eg_has_gallery", "a:1:{i:0;i:497;}"),
	(500, "_wp_attached_file", "2018/06/Slide23.jpg"),
	(500, "_eg_has_gallery", "a:1:{i:0;i:497;}");
';
echo '<br><b>Cria o postmeta da galeria de imagens do projeto DAFE</b>'. '<br>';
execute_query($create_dafe_gallery_postmeta, $conn, $debug);

//Cria a galeria de imagens do projeto Logo
$create_logo_gallery = '
INSERT INTO wp_db_posts (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES
	(501, 2, "2018-06-28 18:52:19", "2018-06-28 21:52:19", "", "Logo", "", "publish", "closed", "closed", "", "logo", "", "", "2018-06-28 18:52:19", "2018-06-28 21:52:19", "", 0, "'.$url.'?post_type=envira&#038;p=501", 0, "envira", "", 0),
	(502, 2, "2018-06-28 18:52:08", "2018-06-28 21:52:08", "", "Slide5", "", "inherit", "open", "closed", "", "slide5", "", "", "2018-06-28 18:52:08", "2018-06-28 21:52:08", "", 501, "'.$url.'wp-content/uploads/2018/06/Slide5.jpg", 0, "attachment", "image/jpeg", 0),
	(503, 2, "2018-06-28 18:52:09", "2018-06-28 21:52:09", "", "Slide6", "", "inherit", "open", "closed", "", "slide6", "", "", "2018-06-28 18:52:09", "2018-06-28 21:52:09", "", 501, "'.$url.'wp-content/uploads/2018/06/Slide6.jpg", 0, "attachment", "image/jpeg", 0),
	(504, 2, "2018-06-28 18:52:10", "2018-06-28 21:52:10", "", "Slide7", "", "inherit", "open", "closed", "", "slide7", "", "", "2018-06-28 18:52:10", "2018-06-28 21:52:10", "", 501, "'.$url.'wp-content/uploads/2018/06/Slide7.jpg", 0, "attachment", "image/jpeg", 0),
	(505, 2, "2018-06-28 18:52:11", "2018-06-28 21:52:11", "", "Slide8", "", "inherit", "open", "closed", "", "slide8", "", "", "2018-06-28 18:52:11", "2018-06-28 21:52:11", "", 501, "'.$url.'wp-content/uploads/2018/06/Slide8.jpg", 0, "attachment", "image/jpeg", 0),
	(506, 2, "2018-06-28 18:52:12", "2018-06-28 21:52:12", "", "Slide9", "", "inherit", "open", "closed", "", "slide9", "", "", "2018-06-28 18:52:12", "2018-06-28 21:52:12", "", 501, "'.$url.'wp-content/uploads/2018/06/Slide9.jpg", 0, "attachment", "image/jpeg", 0),
	(507, 2, "2018-06-28 18:52:13", "2018-06-28 21:52:13", "", "Slide10", "", "inherit", "open", "closed", "", "slide10", "", "", "2018-06-28 18:52:13", "2018-06-28 21:52:13", "", 501, "'.$url.'wp-content/uploads/2018/06/Slide10.jpg", 0, "attachment", "image/jpeg", 0),
	(508, 2, "2018-06-28 18:52:14", "2018-06-28 21:52:14", "", "Slide11", "", "inherit", "open", "closed", "", "slide11", "", "", "2018-06-28 18:52:14", "2018-06-28 21:52:14", "", 501, "'.$url.'wp-content/uploads/2018/06/Slide11.jpg", 0, "attachment", "image/jpeg", 0)
';
echo '<br><b>Cria a galeria de imagens do projeto Logo</b>'. '<br>';
execute_query($create_logo_gallery, $conn, $debug);

$create_logo_gallery_postmeta = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES
	(502, "_wp_attached_file", "2018/06/Slide5.jpg"),
	(502, "_eg_has_gallery", "a:1:{i:0;i:501;}"),
	(501, "_eg_in_gallery", "a:7:{i:0;i:502;i:1;i:503;i:2;i:504;i:3;i:505;i:4;i:506;i:5;i:507;i:6;i:508;}"),
	(501, "_eg_gallery_data", \'a:3:{s:2:\"id\";i:501;s:7:\"gallery\";a:7:{i:502;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:54:\"'.$url.'wp-content/uploads/2018/06/Slide5.jpg\";s:5:\"title\";s:6:\"Slide5\";s:4:\"link\";s:54:\"'.$url.'wp-content/uploads/2018/06/Slide5.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:503;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:54:\"'.$url.'wp-content/uploads/2018/06/Slide6.jpg\";s:5:\"title\";s:6:\"Slide6\";s:4:\"link\";s:54:\"'.$url.'wp-content/uploads/2018/06/Slide6.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:504;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:54:\"'.$url.'wp-content/uploads/2018/06/Slide7.jpg\";s:5:\"title\";s:6:\"Slide7\";s:4:\"link\";s:54:\"'.$url.'wp-content/uploads/2018/06/Slide7.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:505;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:54:\"'.$url.'wp-content/uploads/2018/06/Slide8.jpg\";s:5:\"title\";s:6:\"Slide8\";s:4:\"link\";s:54:\"'.$url.'wp-content/uploads/2018/06/Slide8.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:506;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:54:\"'.$url.'wp-content/uploads/2018/06/Slide9.jpg\";s:5:\"title\";s:6:\"Slide9\";s:4:\"link\";s:54:\"'.$url.'wp-content/uploads/2018/06/Slide9.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:507;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide10.jpg\";s:5:\"title\";s:7:\"Slide10\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide10.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:508;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide11.jpg\";s:5:\"title\";s:7:\"Slide11\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide11.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}}s:6:\"config\";a:21:{s:4:\"type\";s:7:\"default\";s:7:\"columns\";s:1:\"0\";s:13:\"gallery_theme\";s:4:\"base\";s:23:\"justified_gallery_theme\";s:6:\"normal\";s:6:\"gutter\";i:10;s:6:\"margin\";i:10;s:10:\"image_size\";s:7:\"default\";s:10:\"crop_width\";i:532;s:11:\"crop_height\";i:480;s:4:\"crop\";i:0;s:12:\"lazy_loading\";i:1;s:18:\"lazy_loading_delay\";i:500;s:20:\"justified_row_height\";i:150;s:16:\"lightbox_enabled\";i:1;s:14:\"lightbox_theme\";s:4:\"base\";s:19:\"lightbox_image_size\";s:7:\"default\";s:13:\"title_display\";s:5:\"float\";s:7:\"classes\";a:1:{i:0;s:0:\"\";}s:3:\"rtl\";i:0;s:5:\"title\";s:4:\"Logo\";s:4:\"slug\";s:4:\"logo\";}}\'),
	(503, "_wp_attached_file", "2018/06/Slide6.jpg"),
	(503, "_eg_has_gallery", "a:1:{i:0;i:501;}"),
	(504, "_wp_attached_file", "2018/06/Slide7.jpg"),
	(504, "_eg_has_gallery", "a:1:{i:0;i:501;}"),
	(505, "_wp_attached_file", "2018/06/Slide8.jpg"),
	(505, "_eg_has_gallery", "a:1:{i:0;i:501;}"),
	(506, "_wp_attached_file", "2018/06/Slide9.jpg"),
	(506, "_eg_has_gallery", "a:1:{i:0;i:501;}"),
	(507, "_wp_attached_file", "2018/06/Slide10.jpg"),
	(507, "_eg_has_gallery", "a:1:{i:0;i:501;}"),
	(508, "_wp_attached_file", "2018/06/Slide11.jpg"),
	(508, "_eg_has_gallery", "a:1:{i:0;i:501;}");
';
echo '<br><b>Cria o postmeta da galeria de imagens do projeto Logo</b>'. '<br>';
execute_query($create_logo_gallery_postmeta, $conn, $debug);

//Cria a galeria de imagens do projeto Robótica Pedagógica
$create_robotica_pedagogica_gallery = '
INSERT INTO wp_db_posts (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES
	(509, 2, "2018-06-29 10:59:12", "2018-06-29 13:59:12", "", "Robótica Pedagógica", "", "publish", "closed", "closed", "", "robotica-pedagogica", "", "", "2018-06-29 10:59:12", "2018-06-29 13:59:12", "", 0, "'.$url.'?post_type=envira&#038;p=509", 0, "envira", "", 0),
	(510, 2, "2018-06-29 10:59:04", "2018-06-29 13:59:04", "", "Slide17", "", "inherit", "open", "closed", "", "slide17", "", "", "2018-06-29 10:59:04", "2018-06-29 13:59:04", "", 509, "'.$url.'wp-content/uploads/2018/06/Slide17.jpg", 0, "attachment", "image/jpeg", 0),
	(511, 2, "2018-06-29 10:59:05", "2018-06-29 13:59:05", "", "Slide18", "", "inherit", "open", "closed", "", "slide18", "", "", "2018-06-29 10:59:05", "2018-06-29 13:59:05", "", 509, "'.$url.'wp-content/uploads/2018/06/Slide18.jpg", 0, "attachment", "image/jpeg", 0),
	(512, 2, "2018-06-29 10:59:06", "2018-06-29 13:59:06", "", "Slide19", "", "inherit", "open", "closed", "", "slide19", "", "", "2018-06-29 10:59:06", "2018-06-29 13:59:06", "", 509, "'.$url.'wp-content/uploads/2018/06/Slide19.jpg", 0, "attachment", "image/jpeg", 0),
	(513, 2, "2018-06-29 10:59:07", "2018-06-29 13:59:07", "", "Slide20", "", "inherit", "open", "closed", "", "slide20", "", "", "2018-06-29 10:59:07", "2018-06-29 13:59:07", "", 509, "'.$url.'wp-content/uploads/2018/06/Slide20-2.jpg", 0, "attachment", "image/jpeg", 0);
';
echo '<br><b>Cria a galeria de imagens do projeto Robótica Pedagógica</b>'. '<br>';
execute_query($create_robotica_pedagogica_gallery, $conn, $debug);

$create_robotica_pedagogica_gallery_postmeta = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES
    (509, "_eg_in_gallery", "a:4:{i:0;i:510;i:1;i:511;i:2;i:512;i:3;i:513;}"),
	(509, "_eg_gallery_data", \'a:3:{s:2:\"id\";i:509;s:7:\"gallery\";a:4:{i:510;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"http://nied.test/wp-content/uploads/2018/06/Slide17.jpg\";s:5:\"title\";s:7:\"Slide17\";s:4:\"link\";s:55:\"http://nied.test/wp-content/uploads/2018/06/Slide17.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:511;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"http://nied.test/wp-content/uploads/2018/06/Slide18.jpg\";s:5:\"title\";s:7:\"Slide18\";s:4:\"link\";s:55:\"http://nied.test/wp-content/uploads/2018/06/Slide18.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:512;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"http://nied.test/wp-content/uploads/2018/06/Slide19.jpg\";s:5:\"title\";s:7:\"Slide19\";s:4:\"link\";s:55:\"http://nied.test/wp-content/uploads/2018/06/Slide19.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:513;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:57:\"http://nied.test/wp-content/uploads/2018/06/Slide20-2.jpg\";s:5:\"title\";s:7:\"Slide20\";s:4:\"link\";s:57:\"http://nied.test/wp-content/uploads/2018/06/Slide20-2.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}}s:6:\"config\";a:21:{s:4:\"type\";s:7:\"default\";s:7:\"columns\";s:1:\"0\";s:13:\"gallery_theme\";s:4:\"base\";s:23:\"justified_gallery_theme\";s:6:\"normal\";s:6:\"gutter\";i:10;s:6:\"margin\";i:10;s:10:\"image_size\";s:7:\"default\";s:10:\"crop_width\";i:532;s:11:\"crop_height\";i:480;s:4:\"crop\";i:0;s:12:\"lazy_loading\";i:1;s:18:\"lazy_loading_delay\";i:500;s:20:\"justified_row_height\";i:150;s:16:\"lightbox_enabled\";i:1;s:14:\"lightbox_theme\";s:4:\"base\";s:19:\"lightbox_image_size\";s:7:\"default\";s:13:\"title_display\";s:5:\"float\";s:7:\"classes\";a:1:{i:0;s:0:\"\";}s:3:\"rtl\";i:0;s:5:\"title\";s:21:\"Robótica Pedagógica\";s:4:\"slug\";s:19:\"robotica-pedagogica\";}}\'),
	(510, "_wp_attached_file", "2018/06/Slide17.jpg"),
	(510, "_eg_has_gallery", "a:1:{i:0;i:509;}"),
	(511, "_wp_attached_file", "2018/06/Slide18.jpg"),
	(511, "_eg_has_gallery", "a:1:{i:0;i:509;}"),
	(512, "_wp_attached_file", "2018/06/Slide19.jpg"),
	(512, "_eg_has_gallery", "a:1:{i:0;i:509;}"),
	(513, "_wp_attached_file", "2018/06/Slide20-2.jpg"),
	(513, "_eg_has_gallery", "a:1:{i:0;i:509;}");

';
echo '<br><b>Cria a galeria de imagens do projeto Robótica Pedagógica</b>'. '<br>';
execute_query($create_robotica_pedagogica_gallery_postmeta, $conn, $debug);

//Cria a galeria de imagens do projeto E-Cidadania
$create_ecidadania_gallery = '
INSERT INTO wp_db_posts (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES
	(514, 2, "2018-06-28 18:54:21", "2018-06-28 21:54:21", "", "E-Cidadania", "", "publish", "closed", "closed", "", "e-cidadania", "", "", "2018-06-28 18:54:21", "2018-06-28 21:54:21", "", 0, "'.$url.'?post_type=envira&#038;p=514", 0, "envira", "", 0),
	(515, 2, "2018-06-28 18:54:10", "2018-06-28 21:54:10", "", "Slide46", "", "inherit", "open", "closed", "", "slide46", "", "", "2018-06-28 18:54:10", "2018-06-28 21:54:10", "", 514, "'.$url.'wp-content/uploads/2018/06/Slide46.jpg", 0, "attachment", "image/jpeg", 0),
	(516, 2, "2018-06-28 18:54:12", "2018-06-28 21:54:12", "", "Slide47", "", "inherit", "open", "closed", "", "slide47", "", "", "2018-06-28 18:54:12", "2018-06-28 21:54:12", "", 514, "'.$url.'wp-content/uploads/2018/06/Slide47.jpg", 0, "attachment", "image/jpeg", 0),
	(517, 2, "2018-06-28 18:54:13", "2018-06-28 21:54:13", "", "Slide48", "", "inherit", "open", "closed", "", "slide48", "", "", "2018-06-28 18:54:13", "2018-06-28 21:54:13", "", 514, "'.$url.'wp-content/uploads/2018/06/Slide48.jpg", 0, "attachment", "image/jpeg", 0),
	(518, 2, "2018-06-28 18:54:14", "2018-06-28 21:54:14", "", "Slide49", "", "inherit", "open", "closed", "", "slide49", "", "", "2018-06-28 18:54:14", "2018-06-28 21:54:14", "", 514, "'.$url.'wp-content/uploads/2018/06/Slide49.jpg", 0, "attachment", "image/jpeg", 0),
	(519, 2, "2018-06-28 18:54:16", "2018-06-28 21:54:16", "", "Slide50", "", "inherit", "open", "closed", "", "slide50", "", "", "2018-06-28 18:54:16", "2018-06-28 21:54:16", "", 514, "'.$url.'wp-content/uploads/2018/06/Slide50.jpg", 0, "attachment", "image/jpeg", 0);
';
echo '<br><b>Cria a galeria de imagens do projeto E-Cidadania</b>'. '<br>';
execute_query($create_ecidadania_gallery, $conn, $debug);

$create_ecidadania_gallery_postmeta = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES
	(515, "_wp_attached_file", "2018/06/Slide46.jpg"),
	(515, "_eg_has_gallery", "a:1:{i:0;i:514;}"),
	(514, "_eg_in_gallery", "a:5:{i:0;i:515;i:1;i:516;i:2;i:517;i:3;i:518;i:4;i:519;}"),
	(514, "_eg_gallery_data", \'a:3:{s:2:\"id\";i:514;s:7:\"gallery\";a:5:{i:515;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide46.jpg\";s:5:\"title\";s:7:\"Slide46\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide46.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:516;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide47.jpg\";s:5:\"title\";s:7:\"Slide47\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide47.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:517;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide48.jpg\";s:5:\"title\";s:7:\"Slide48\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide48.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:518;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide49.jpg\";s:5:\"title\";s:7:\"Slide49\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide49.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:519;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide50.jpg\";s:5:\"title\";s:7:\"Slide50\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide50.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}}s:6:\"config\";a:21:{s:4:\"type\";s:7:\"default\";s:7:\"columns\";s:1:\"0\";s:13:\"gallery_theme\";s:4:\"base\";s:23:\"justified_gallery_theme\";s:6:\"normal\";s:6:\"gutter\";i:10;s:6:\"margin\";i:10;s:10:\"image_size\";s:7:\"default\";s:10:\"crop_width\";i:532;s:11:\"crop_height\";i:480;s:4:\"crop\";i:0;s:12:\"lazy_loading\";i:1;s:18:\"lazy_loading_delay\";i:500;s:20:\"justified_row_height\";i:150;s:16:\"lightbox_enabled\";i:1;s:14:\"lightbox_theme\";s:4:\"base\";s:19:\"lightbox_image_size\";s:7:\"default\";s:13:\"title_display\";s:5:\"float\";s:7:\"classes\";a:1:{i:0;s:0:\"\";}s:3:\"rtl\";i:0;s:5:\"title\";s:11:\"E-Cidadania\";s:4:\"slug\";s:11:\"e-cidadania\";}}\'),
	(516, "_wp_attached_file", "2018/06/Slide47.jpg"),
	(516, "_eg_has_gallery", "a:1:{i:0;i:514;}"),
	(517, "_wp_attached_file", "2018/06/Slide48.jpg"),
	(517, "_eg_has_gallery", "a:1:{i:0;i:514;}"),
	(518, "_wp_attached_file", "2018/06/Slide49.jpg"),
	(518, "_eg_has_gallery", "a:1:{i:0;i:514;}"),
	(519, "_wp_attached_file", "2018/06/Slide50.jpg"),
	(519, "_eg_has_gallery", "a:1:{i:0;i:514;}");
';
echo '<br><b>Cria a galeria de imagens do projeto E-Cidadania</b>'. '<br>';
execute_query($create_ecidadania_gallery_postmeta, $conn, $debug);

//Cria a galeria de imagens do projeto Rota Acessível
$create_rota_acessivel_gallery = '
INSERT INTO wp_db_posts (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES
	(520, 2, "2018-06-28 18:54:45", "2018-06-28 21:54:45", "", "Rota Acessível", "", "publish", "closed", "closed", "", "rota-acessivel", "", "", "2018-06-28 18:54:45", "2018-06-28 21:54:45", "", 0, "'.$url.'?post_type=envira&#038;p=520", 0, "envira", "", 0),
	(521, 2, "2018-06-28 18:54:40", "2018-06-28 21:54:40", "", "Slide74", "", "inherit", "open", "closed", "", "slide74", "", "", "2018-06-28 18:54:40", "2018-06-28 21:54:40", "", 520, "'.$url.'wp-content/uploads/2018/06/Slide74.jpg", 0, "attachment", "image/jpeg", 0),
	(522, 2, "2018-06-28 18:54:41", "2018-06-28 21:54:41", "", "Slide75", "", "inherit", "open", "closed", "", "slide75", "", "", "2018-06-28 18:54:41", "2018-06-28 21:54:41", "", 520, "'.$url.'wp-content/uploads/2018/06/Slide75.jpg", 0, "attachment", "image/jpeg", 0),
	(523, 2, "2018-06-28 18:54:42", "2018-06-28 21:54:42", "", "Slide76", "", "inherit", "open", "closed", "", "slide76", "", "", "2018-06-28 18:54:42", "2018-06-28 21:54:42", "", 520, "'.$url.'wp-content/uploads/2018/06/Slide76.jpg", 0, "attachment", "image/jpeg", 0),
	(524, 2, "2018-06-28 18:54:43", "2018-06-28 21:54:43", "", "Slide77", "", "inherit", "open", "closed", "", "slide77", "", "", "2018-06-28 18:54:43", "2018-06-28 21:54:43", "", 520, "'.$url.'wp-content/uploads/2018/06/Slide77.jpg", 0, "attachment", "image/jpeg", 0);
';
echo '<br><b>Cria a galeria de imagens do projeto Rota Acessível</b>'. '<br>';
execute_query($create_rota_acessivel_gallery, $conn, $debug);

$create_rota_acessivel_gallery_postmeta = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES
	(521, "_wp_attached_file", "2018/06/Slide74.jpg"),
	(521, "_eg_has_gallery", "a:1:{i:0;i:520;}"),
	(520, "_eg_in_gallery", "a:4:{i:0;i:521;i:1;i:522;i:2;i:523;i:3;i:524;}"),
	(520, "_eg_gallery_data", \'a:3:{s:2:\"id\";i:520;s:7:\"gallery\";a:4:{i:521;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide74.jpg\";s:5:\"title\";s:7:\"Slide74\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide74.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:522;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide75.jpg\";s:5:\"title\";s:7:\"Slide75\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide75.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:523;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide76.jpg\";s:5:\"title\";s:7:\"Slide76\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide76.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:524;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide77.jpg\";s:5:\"title\";s:7:\"Slide77\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide77.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}}s:6:\"config\";a:21:{s:4:\"type\";s:7:\"default\";s:7:\"columns\";s:1:\"0\";s:13:\"gallery_theme\";s:4:\"base\";s:23:\"justified_gallery_theme\";s:6:\"normal\";s:6:\"gutter\";i:10;s:6:\"margin\";i:10;s:10:\"image_size\";s:7:\"default\";s:10:\"crop_width\";i:532;s:11:\"crop_height\";i:480;s:4:\"crop\";i:0;s:12:\"lazy_loading\";i:1;s:18:\"lazy_loading_delay\";i:500;s:20:\"justified_row_height\";i:150;s:16:\"lightbox_enabled\";i:1;s:14:\"lightbox_theme\";s:4:\"base\";s:19:\"lightbox_image_size\";s:7:\"default\";s:13:\"title_display\";s:5:\"float\";s:7:\"classes\";a:1:{i:0;s:0:\"\";}s:3:\"rtl\";i:0;s:5:\"title\";s:15:\"Rota Acessível\";s:4:\"slug\";s:14:\"rota-acessivel\";}}\'),
	(522, "_wp_attached_file", "2018/06/Slide75.jpg"),
	(522, "_eg_has_gallery", "a:1:{i:0;i:520;}"),
	(523, "_wp_attached_file", "2018/06/Slide76.jpg"),
	(523, "_eg_has_gallery", "a:1:{i:0;i:520;}"),
	(524, "_wp_attached_file", "2018/06/Slide77.jpg");
';
echo '<br><b>Cria a galeria de imagens do projeto Rota Acessível</b>'. '<br>';
execute_query($create_rota_acessivel_gallery_postmeta, $conn, $debug);

//Cria a galeria de imagens do projeto TelEduc
$create_teleduc_gallery = '
INSERT INTO wp_db_posts (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES
	(525, 2, "2018-06-28 18:55:29", "2018-06-28 21:55:29", "", "TelEduc", "", "publish", "closed", "closed", "", "teleduc", "", "", "2018-06-28 18:55:29", "2018-06-28 21:55:29", "", 0, "'.$url.'?post_type=envira&#038;p=525", 0, "envira", "", 0),
	(526, 2, "2018-06-28 18:55:19", "2018-06-28 21:55:19", "", "Slide12", "", "inherit", "open", "closed", "", "slide12", "", "", "2018-06-28 18:55:19", "2018-06-28 21:55:19", "", 525, "'.$url.'wp-content/uploads/2018/06/Slide12.jpg", 0, "attachment", "image/jpeg", 0),
	(527, 2, "2018-06-28 18:55:21", "2018-06-28 21:55:21", "", "Slide13", "", "inherit", "open", "closed", "", "slide13", "", "", "2018-06-28 18:55:21", "2018-06-28 21:55:21", "", 525, "'.$url.'wp-content/uploads/2018/06/Slide13.jpg", 0, "attachment", "image/jpeg", 0),
	(528, 2, "2018-06-28 18:55:22", "2018-06-28 21:55:22", "", "Slide14", "", "inherit", "open", "closed", "", "slide14", "", "", "2018-06-28 18:55:22", "2018-06-28 21:55:22", "", 525, "'.$url.'wp-content/uploads/2018/06/Slide14.jpg", 0, "attachment", "image/jpeg", 0),
	(529, 2, "2018-06-28 18:55:23", "2018-06-28 21:55:23", "", "Slide15", "", "inherit", "open", "closed", "", "slide15", "", "", "2018-06-28 18:55:23", "2018-06-28 21:55:23", "", 525, "'.$url.'wp-content/uploads/2018/06/Slide15.jpg", 0, "attachment", "image/jpeg", 0),
	(530, 2, "2018-06-28 18:55:24", "2018-06-28 21:55:24", "", "Slide16", "", "inherit", "open", "closed", "", "slide16", "", "", "2018-06-28 18:55:24", "2018-06-28 21:55:24", "", 525, "'.$url.'wp-content/uploads/2018/06/Slide16.jpg", 0, "attachment", "image/jpeg", 0);
';
echo '<br><b>Cria a galeria de imagens do projeto TelEduc</b>'. '<br>';
execute_query($create_teleduc_gallery, $conn, $debug);

$create_teleduc_gallery_postmeta = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES
	(526, "_wp_attached_file", "2018/06/Slide12.jpg"),
	(526, "_eg_has_gallery", "a:1:{i:0;i:525;}"),
	(525, "_eg_in_gallery", "a:5:{i:0;i:526;i:1;i:527;i:2;i:528;i:3;i:529;i:4;i:530;}"),
	(525, "_eg_gallery_data", \'a:3:{s:2:\"id\";i:525;s:7:\"gallery\";a:5:{i:526;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide12.jpg\";s:5:\"title\";s:7:\"Slide12\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide12.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:527;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide13.jpg\";s:5:\"title\";s:7:\"Slide13\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide13.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:528;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide14.jpg\";s:5:\"title\";s:7:\"Slide14\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide14.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:529;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide15.jpg\";s:5:\"title\";s:7:\"Slide15\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide15.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:530;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide16.jpg\";s:5:\"title\";s:7:\"Slide16\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide16.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}}s:6:\"config\";a:21:{s:4:\"type\";s:7:\"default\";s:7:\"columns\";s:1:\"0\";s:13:\"gallery_theme\";s:4:\"base\";s:23:\"justified_gallery_theme\";s:6:\"normal\";s:6:\"gutter\";i:10;s:6:\"margin\";i:10;s:10:\"image_size\";s:7:\"default\";s:10:\"crop_width\";i:532;s:11:\"crop_height\";i:480;s:4:\"crop\";i:0;s:12:\"lazy_loading\";i:1;s:18:\"lazy_loading_delay\";i:500;s:20:\"justified_row_height\";i:150;s:16:\"lightbox_enabled\";i:1;s:14:\"lightbox_theme\";s:4:\"base\";s:19:\"lightbox_image_size\";s:7:\"default\";s:13:\"title_display\";s:5:\"float\";s:7:\"classes\";a:1:{i:0;s:0:\"\";}s:3:\"rtl\";i:0;s:5:\"title\";s:7:\"TelEduc\";s:4:\"slug\";s:7:\"teleduc\";}}\'),
	(527, "_wp_attached_file", "2018/06/Slide13.jpg"),
	(527, "_eg_has_gallery", "a:1:{i:0;i:525;}"),
	(528, "_wp_attached_file", "2018/06/Slide14.jpg"),
	(528, "_eg_has_gallery", "a:1:{i:0;i:525;}"),
	(529, "_wp_attached_file", "2018/06/Slide15.jpg"),
	(529, "_eg_has_gallery", "a:1:{i:0;i:525;}"),
	(530, "_wp_attached_file", "2018/06/Slide16.jpg"),
	(530, "_eg_has_gallery", "a:1:{i:0;i:525;}");
';
echo '<br><b>Cria a galeria de imagens do projeto TelEduc</b>'. '<br>';
execute_query($create_teleduc_gallery_postmeta, $conn, $debug);

//Cria a galeria de imagens do projeto TIDIA-Ae
$create_tidiaae_gallery = '
INSERT INTO wp_db_posts (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES
	(531, 2, "2018-06-28 18:55:56", "2018-06-28 21:55:56", "", "TIDIA-Ae", "", "publish", "closed", "closed", "", "tidia-ae", "", "", "2018-06-28 18:55:56", "2018-06-28 21:55:56", "", 0, "'.$url.'?post_type=envira&#038;p=531", 0, "envira", "", 0),
	(533, 2, "2018-06-28 18:55:46", "2018-06-28 21:55:46", "", "Slide37", "", "inherit", "open", "closed", "", "slide37", "", "", "2018-06-28 18:55:46", "2018-06-28 21:55:46", "", 531, "'.$url.'wp-content/uploads/2018/06/Slide37.jpg", 0, "attachment", "image/jpeg", 0),
	(532, 2, "2018-06-28 18:55:47", "2018-06-28 21:55:47", "", "Slide38", "", "inherit", "open", "closed", "", "slide38", "", "", "2018-06-28 18:55:47", "2018-06-28 21:55:47", "", 531, "'.$url.'wp-content/uploads/2018/06/Slide38.jpg", 0, "attachment", "image/jpeg", 0);
';
echo '<br><b>Cria a galeria de imagens do projeto TIDIA-Ae</b>'. '<br>';
execute_query($create_tidiaae_gallery, $conn, $debug);

$create_tidiaae_gallery_postmeta = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES
	(533, "_wp_attached_file", "2018/06/Slide37.jpg"),
	(533, "_eg_has_gallery", "a:1:{i:0;i:531;}"),
	(531, "_eg_in_gallery", "a:2:{i:0;i:533;i:1;i:532;}"),
	(531, "_eg_gallery_data", \'a:3:{s:2:\"id\";i:531;s:7:\"gallery\";a:2:{i:533;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide37.jpg\";s:5:\"title\";s:7:\"Slide37\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide37.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:532;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide38.jpg\";s:5:\"title\";s:7:\"Slide38\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide38.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}}s:6:\"config\";a:21:{s:4:\"type\";s:7:\"default\";s:7:\"columns\";s:1:\"0\";s:13:\"gallery_theme\";s:4:\"base\";s:23:\"justified_gallery_theme\";s:6:\"normal\";s:6:\"gutter\";i:10;s:6:\"margin\";i:10;s:10:\"image_size\";s:7:\"default\";s:10:\"crop_width\";i:532;s:11:\"crop_height\";i:480;s:4:\"crop\";i:0;s:12:\"lazy_loading\";i:1;s:18:\"lazy_loading_delay\";i:500;s:20:\"justified_row_height\";i:150;s:16:\"lightbox_enabled\";i:1;s:14:\"lightbox_theme\";s:4:\"base\";s:19:\"lightbox_image_size\";s:7:\"default\";s:13:\"title_display\";s:5:\"float\";s:7:\"classes\";a:1:{i:0;s:0:\"\";}s:3:\"rtl\";i:0;s:5:\"title\";s:8:\"TIDIA-Ae\";s:4:\"slug\";s:8:\"tidia-ae\";}}\'),
	(532, "_wp_attached_file", "2018/06/Slide38.jpg"),
	(532, "_eg_has_gallery", "a:1:{i:0;i:531;}");
';
echo '<br><b>Cria a galeria de imagens do projeto TIDIA-Ae</b>'. '<br>';
execute_query($create_tidiaae_gallery_postmeta, $conn, $debug);

//Cria a galeria de imagens do projeto TIME
$create_time_gallery = '
INSERT INTO wp_db_posts (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES
	(534, 2, "2018-06-28 18:56:22", "2018-06-28 21:56:22", "", "TIME", "", "publish", "closed", "closed", "", "time", "", "", "2018-06-28 18:56:22", "2018-06-28 21:56:22", "", 0, "'.$url.'?post_type=envira&#038;p=534", 0, "envira", "", 0),
	(535, 2, "2018-06-28 18:56:12", "2018-06-28 21:56:12", "", "Slide39", "", "inherit", "open", "closed", "", "slide39", "", "", "2018-06-28 18:56:12", "2018-06-28 21:56:12", "", 534, "'.$url.'wp-content/uploads/2018/06/Slide39.jpg", 0, "attachment", "image/jpeg", 0),
	(536, 2, "2018-06-28 18:56:13", "2018-06-28 21:56:13", "", "Slide40", "", "inherit", "open", "closed", "", "slide40", "", "", "2018-06-28 18:56:13", "2018-06-28 21:56:13", "", 534, "'.$url.'wp-content/uploads/2018/06/Slide40.jpg", 0, "attachment", "image/jpeg", 0),
	(537, 2, "2018-06-28 18:56:14", "2018-06-28 21:56:14", "", "Slide41", "", "inherit", "open", "closed", "", "slide41", "", "", "2018-06-28 18:56:14", "2018-06-28 21:56:14", "", 534, "'.$url.'wp-content/uploads/2018/06/Slide41.jpg", 0, "attachment", "image/jpeg", 0),
	(538, 2, "2018-06-28 18:56:15", "2018-06-28 21:56:15", "", "Slide42", "", "inherit", "open", "closed", "", "slide42", "", "", "2018-06-28 18:56:15", "2018-06-28 21:56:15", "", 534, "'.$url.'wp-content/uploads/2018/06/Slide42.jpg", 0, "attachment", "image/jpeg", 0),
	(539, 2, "2018-06-28 18:56:16", "2018-06-28 21:56:16", "", "Slide43", "", "inherit", "open", "closed", "", "slide43", "", "", "2018-06-28 18:56:16", "2018-06-28 21:56:16", "", 534, "'.$url.'wp-content/uploads/2018/06/Slide43.jpg", 0, "attachment", "image/jpeg", 0),
	(540, 2, "2018-06-28 18:56:17", "2018-06-28 21:56:17", "", "Slide44", "", "inherit", "open", "closed", "", "slide44", "", "", "2018-06-28 18:56:17", "2018-06-28 21:56:17", "", 534, "'.$url.'wp-content/uploads/2018/06/Slide44.jpg", 0, "attachment", "image/jpeg", 0),
	(541, 2, "2018-06-28 18:56:18", "2018-06-28 21:56:18", "", "Slide45", "", "inherit", "open", "closed", "", "slide45", "", "", "2018-06-28 18:56:18", "2018-06-28 21:56:18", "", 534, "'.$url.'wp-content/uploads/2018/06/Slide45.jpg", 0, "attachment", "image/jpeg", 0);
';
echo '<br><b>Cria a galeria de imagens do projeto TIME</b>'. '<br>';
execute_query($create_time_gallery, $conn, $debug);

$create_time_gallery_postmeta = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES
	(535, "_wp_attached_file", "2018/06/Slide39.jpg"),
	(535, "_eg_has_gallery", "a:1:{i:0;i:534;}"),
	(534, "_eg_in_gallery", "a:7:{i:0;i:535;i:1;i:536;i:2;i:537;i:3;i:538;i:4;i:539;i:5;i:540;i:6;i:541;}"),
	(534, "_eg_gallery_data", \'a:3:{s:2:\"id\";i:534;s:7:\"gallery\";a:7:{i:535;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide39.jpg\";s:5:\"title\";s:7:\"Slide39\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide39.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:536;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide40.jpg\";s:5:\"title\";s:7:\"Slide40\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide40.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:537;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide41.jpg\";s:5:\"title\";s:7:\"Slide41\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide41.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:538;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide42.jpg\";s:5:\"title\";s:7:\"Slide42\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide42.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:539;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide43.jpg\";s:5:\"title\";s:7:\"Slide43\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide43.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:540;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide44.jpg\";s:5:\"title\";s:7:\"Slide44\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide44.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}i:541;a:7:{s:6:\"status\";s:6:\"active\";s:3:\"src\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide45.jpg\";s:5:\"title\";s:7:\"Slide45\";s:4:\"link\";s:55:\"'.$url.'wp-content/uploads/2018/06/Slide45.jpg\";s:3:\"alt\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:5:\"thumb\";s:0:\"\";}}s:6:\"config\";a:21:{s:4:\"type\";s:7:\"default\";s:7:\"columns\";s:1:\"0\";s:13:\"gallery_theme\";s:4:\"base\";s:23:\"justified_gallery_theme\";s:6:\"normal\";s:6:\"gutter\";i:10;s:6:\"margin\";i:10;s:10:\"image_size\";s:7:\"default\";s:10:\"crop_width\";i:532;s:11:\"crop_height\";i:480;s:4:\"crop\";i:0;s:12:\"lazy_loading\";i:1;s:18:\"lazy_loading_delay\";i:500;s:20:\"justified_row_height\";i:150;s:16:\"lightbox_enabled\";i:1;s:14:\"lightbox_theme\";s:4:\"base\";s:19:\"lightbox_image_size\";s:7:\"default\";s:13:\"title_display\";s:5:\"float\";s:7:\"classes\";a:1:{i:0;s:0:\"\";}s:3:\"rtl\";i:0;s:5:\"title\";s:4:\"TIME\";s:4:\"slug\";s:4:\"time\";}}\'),
	(536, "_wp_attached_file", "2018/06/Slide40.jpg"),
	(536, "_eg_has_gallery", "a:1:{i:0;i:534;}"),
	(537, "_wp_attached_file", "2018/06/Slide41.jpg"),
	(537, "_eg_has_gallery", "a:1:{i:0;i:534;}"),
	(538, "_wp_attached_file", "2018/06/Slide42.jpg"),
	(538, "_eg_has_gallery", "a:1:{i:0;i:534;}"),
	(539, "_wp_attached_file", "2018/06/Slide43.jpg"),
	(539, "_eg_has_gallery", "a:1:{i:0;i:534;}"),
	(540, "_wp_attached_file", "2018/06/Slide44.jpg"),
	(540, "_eg_has_gallery", "a:1:{i:0;i:534;}"),
	(541, "_wp_attached_file", "2018/06/Slide45.jpg"),
	(541, "_eg_has_gallery", "a:1:{i:0;i:534;}");
';
echo '<br><b>Cria a galeria de imagens do projeto TIME</b>'. '<br>';
execute_query($create_time_gallery_postmeta, $conn, $debug);