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
    (602, 22, 0),
    (603, 22, 0),
    (604, 22, 0),
    (605, 22, 0),
    (606, 22, 0);
';
echo '<br>'. '<b>Cria as relações do menu</b>'. '<br>';
execute_query($create_menu_relationships, $conn, $debug);

$create_menu_posts = '
INSERT INTO wp_db_posts (ID, post_author, post_date, post_date_gmt, post_content, post_title, post_excerpt, post_status, comment_status, ping_status, post_password, post_name, to_ping, pinged, post_modified, post_modified_gmt, post_content_filtered, post_parent, guid, menu_order, post_type, post_mime_type, comment_count)
VALUES
	(602, 2, "2018-06-29 15:14:10", "2018-06-29 18:14:10", "", "Início", "", "publish", "closed", "closed", "", "inicio", "", "", "2018-06-29 15:18:23", "2018-06-29 18:18:23", "", 0, "http://nied.test/?p=602", 1, "nav_menu_item", "", 0),
	(603, 2, "2018-06-29 15:14:40", "2018-06-29 18:14:40", " ", "", "", "publish", "closed", "closed", "", "603", "", "", "2018-06-29 15:18:23", "2018-06-29 18:18:23", "", 0, "http://nied.test/?p=603", 5, "nav_menu_item", "", 0),
	(604, 2, "2018-06-29 15:18:23", "2018-06-29 18:18:23", " ", "", "", "publish", "closed", "closed", "", "604", "", "", "2018-06-29 15:18:23", "2018-06-29 18:18:23", "", 0, "http://nied.test/?p=604", 3, "nav_menu_item", "", 0),
	(605, 2, "2018-06-29 15:18:23", "2018-06-29 18:18:23", " ", "", "", "publish", "closed", "closed", "", "605", "", "", "2018-06-29 15:18:23", "2018-06-29 18:18:23", "", 0, "http://nied.test/?p=605", 2, "nav_menu_item", "", 0),
	(606, 2, "2018-06-29 15:18:23", "2018-06-29 18:18:23", " ", "", "", "publish", "closed", "closed", "", "606", "", "", "2018-06-29 15:18:23", "2018-06-29 18:18:23", "", 0, "http://nied.test/?p=606", 4, "nav_menu_item", "", 0);
';
echo '<br>'. '<b>Cria as entradas do post do menu</b>'. '<br>';
execute_query($create_menu_posts, $conn, $debug);

$create_menu_postmeta = '
INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)
VALUES
	(602, "_menu_item_type", "custom"),
	(602, "_menu_item_menu_item_parent", "0"),
	(602, "_menu_item_object_id", "602"),
	(602, "_menu_item_object", "custom"),
	(602, "_menu_item_target", ""),
	(602, "_menu_item_classes", "a:1:{i:0;s:0:\"\";}"),
	(602, "_menu_item_xfn", ""),
	(602, "_menu_item_url", "http://nied.test/"),
	(603, "_menu_item_type", "post_type"),
	(603, "_menu_item_menu_item_parent", "0"),
	(603, "_menu_item_object_id", "26"),
	(603, "_menu_item_object", "page"),
	(603, "_menu_item_target", ""),
	(603, "_menu_item_classes", "a:1:{i:0;s:0:\"\";}"),
	(603, "_menu_item_xfn", ""),
	(603, "_menu_item_url", ""),
	(604, "_menu_item_type", "post_type"),
	(604, "_menu_item_menu_item_parent", "0"),
	(604, "_menu_item_object_id", "177"),
	(604, "_menu_item_object", "page"),
	(604, "_menu_item_target", ""),
	(604, "_menu_item_classes", "a:1:{i:0;s:0:\"\";}"),
	(604, "_menu_item_xfn", ""),
	(604, "_menu_item_url", ""),
	(605, "_menu_item_type", "post_type"),
	(605, "_menu_item_menu_item_parent", "0"),
	(605, "_menu_item_object_id", "456"),
	(605, "_menu_item_object", "page"),
	(605, "_menu_item_target", ""),
	(605, "_menu_item_classes", "a:1:{i:0;s:0:\"\";}"),
	(605, "_menu_item_xfn", ""),
	(605, "_menu_item_url", ""),
	(606, "_menu_item_type", "post_type"),
	(606, "_menu_item_menu_item_parent", "0"),
	(606, "_menu_item_object_id", "12"),
	(606, "_menu_item_object", "page"),
	(606, "_menu_item_target", ""),
	(606, "_menu_item_classes", "a:1:{i:0;s:0:\"\";}"),
	(606, "_menu_item_xfn", ""),
	(606, "_menu_item_url", "");
';
echo '<br>'. '<b>Cria do postmetas do menu</b>'. '<br>';
execute_query($create_menu_postmeta, $conn, $debug);