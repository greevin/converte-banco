<?php

$create_menu_terms = '
INSERT INTO wp_db_terms (term_id, name, slug, term_group)
VALUES (22, "Menu Inicial", "menu-inicial", 0);
';
echo '<br>'. '<b>Cria os termos do menu</b>'. '<br>';
execute_query($create_menu_terms, $conn, $debug);

$create_menu_taxonomies = '
INSERT INTO wp_db_term_taxonomy (term_taxonomy_id, term_id, taxonomy, description, parent, count)
VALUES (22, 22, "nav_menu", "", 0, 5);
';
echo '<br>'. '<b>Cria as taxonomias do menu</b>'. '<br>';
execute_query($create_menu_taxonomies, $conn, $debug);

$create_menu_relationships = '
INSERT INTO wp_db_term_relationships (object_id, term_taxonomy_id, term_order)
VALUES
    (542, 22, 0),
    (543, 22, 0),
    (544, 22, 0),
    (545, 22, 0),
    (546, 22, 0);
';
echo '<br>'. '<b>Cria as relações do menu</b>'. '<br>';
execute_query($create_menu_relationships, $conn, $debug);

$create_menu_posts = '
INSERT INTO wp_db_posts (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES
	(542, 2, "2018-06-29 15:14:10", "2018-06-29 18:14:10", "", "Início", "", "publish", "closed", "closed", "", "inicio", "", "", "2018-06-29 15:18:23", "2018-06-29 18:18:23", "", 0, "'.$url.'?p=542", 1, "nav_menu_item", "", 0),
	(543, 2, "2018-06-29 15:14:40", "2018-06-29 18:14:40", " ", "", "", "publish", "closed", "closed", "", "543", "", "", "2018-06-29 15:18:23", "2018-06-29 18:18:23", "", 0, "'.$url.'?p=543", 5, "nav_menu_item", "", 0),
	(544, 2, "2018-06-29 15:18:23", "2018-06-29 18:18:23", " ", "", "", "publish", "closed", "closed", "", "544", "", "", "2018-06-29 15:18:23", "2018-06-29 18:18:23", "", 0, "'.$url.'?p=544", 3, "nav_menu_item", "", 0),
	(545, 2, "2018-06-29 15:18:23", "2018-06-29 18:18:23", " ", "", "", "publish", "closed", "closed", "", "545", "", "", "2018-06-29 15:18:23", "2018-06-29 18:18:23", "", 0, "'.$url.'?p=545", 2, "nav_menu_item", "", 0),
	(546, 2, "2018-06-29 15:18:23", "2018-06-29 18:18:23", " ", "", "", "publish", "closed", "closed", "", "546", "", "", "2018-06-29 15:18:23", "2018-06-29 18:18:23", "", 0, "'.$url.'?p=546", 4, "nav_menu_item", "", 0);
';
echo '<br>'. '<b>Cria as entradas do post do menu</b>'. '<br>';
execute_query($create_menu_posts, $conn, $debug);

$create_menu_postmeta = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES
	(542, "_menu_item_type", "custom"),
	(542, "_menu_item_menu_item_parent", "0"),
	(542, "_menu_item_object_id", "542"),
	(542, "_menu_item_object", "custom"),
	(542, "_menu_item_target", ""),
	(542, "_menu_item_classes", "a:1:{i:0;s:0:\"\";}"),
	(542, "_menu_item_xfn", ""),
	(542, "_menu_item_url", "'.$url.'"),
	(543, "_menu_item_type", "post_type"),
	(543, "_menu_item_menu_item_parent", "0"),
	(543, "_menu_item_object_id", "26"),
	(543, "_menu_item_object", "page"),
	(543, "_menu_item_target", ""),
	(543, "_menu_item_classes", "a:1:{i:0;s:0:\"\";}"),
	(543, "_menu_item_xfn", ""),
	(543, "_menu_item_url", ""),
	(544, "_menu_item_type", "post_type"),
	(544, "_menu_item_menu_item_parent", "0"),
	(544, "_menu_item_object_id", "177"),
	(544, "_menu_item_object", "page"),
	(544, "_menu_item_target", ""),
	(544, "_menu_item_classes", "a:1:{i:0;s:0:\"\";}"),
	(544, "_menu_item_xfn", ""),
	(544, "_menu_item_url", ""),
	(545, "_menu_item_type", "post_type"),
	(545, "_menu_item_menu_item_parent", "0"),
	(545, "_menu_item_object_id", "456"),
	(545, "_menu_item_object", "page"),
	(545, "_menu_item_target", ""),
	(545, "_menu_item_classes", "a:1:{i:0;s:0:\"\";}"),
	(545, "_menu_item_xfn", ""),
	(545, "_menu_item_url", ""),
	(546, "_menu_item_type", "post_type"),
	(546, "_menu_item_menu_item_parent", "0"),
	(546, "_menu_item_object_id", "12"),
	(546, "_menu_item_object", "page"),
	(546, "_menu_item_target", ""),
	(546, "_menu_item_classes", "a:1:{i:0;s:0:\"\";}"),
	(546, "_menu_item_xfn", ""),
	(546, "_menu_item_url", "");
';
echo '<br>'. '<b>Cria do postmetas do menu</b>'. '<br>';
execute_query($create_menu_postmeta, $conn, $debug);