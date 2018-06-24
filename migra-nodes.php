<?php

// Migra os nodes para os posts
$migrate_nodes_to_posts = '
REPLACE INTO '.$migrate_to_db.'.wp_db_posts (
ID,
post_author,
post_date,
post_date_gmt,
post_content,
post_title,
post_excerpt,
post_name,
post_modified,
post_modified_gmt,
post_type,
post_status,
to_ping,
pinged,
post_content_filtered)
SELECT DISTINCT
n.nid "ID",
n.uid "post_author",
DATE_ADD(FROM_UNIXTIME(0), interval n.created second) "post_date",
DATE_ADD(FROM_UNIXTIME(0), interval n.created second) "post_date_gmt",
IF(f.body_value IS NULL, "", f.body_value) "post_content",
n.title "post_title",
" ",
IF(a.alias IS NULL,n.nid, SUBSTRING_INDEX(a.alias, "/", -1)) "post_name",
DATE_ADD(FROM_UNIXTIME(0), interval n.changed second) "post_modified",
DATE_ADD(FROM_UNIXTIME(0), interval n.changed second) "post_modified_gmt",
n.type "post_type",
IF(n.status = 1, "publish", "private") "post_status",
" ",
" ",
" "
FROM '.$migrate_from_db.'.node n
INNER JOIN '.$migrate_from_db.'.node_revision r USING(vid)
LEFT OUTER JOIN '.$migrate_from_db.'.field_data_body f ON r.vid = f.revision_id
LEFT OUTER JOIN '.$migrate_from_db.'.url_alias a
ON a.source = CONCAT("node/", n.nid)
WHERE n.type IN (
/* List the content types you want to migrate */
"arquivo",
"article",
"coordena_o",
"equipe",
"evento",
"faq",
"not_cia",
"page",
"panel",
"parceria",
"programa",
"projeto",
"publica_o",
"to_do",
"webform");
';
echo '<b>Migrando nodes para posts</b>'. '<br>';
execute_query($migrate_nodes_to_posts, $conn, $debug);

// Altera o tipo do post
$change_type_to_post = '
UPDATE '.$migrate_to_db.'.wp_db_posts SET post_type = "post"
WHERE post_type IN (
"arquivo",
"not_cia",
"evento");
';
echo '<br>' . '<b>Alterando arquivo, noticia e evento para o tipo "Post"</b>'. '<br>';
execute_query($change_type_to_post, $conn, $debug);

// Altera o título da página
$change_title_page = '
UPDATE '.$migrate_to_db.'.wp_db_posts
SET post_title="A Criação do NIED na Unicamp"
WHERE ID = 304;
';
echo '<br>' . '<b>Altera o título da página "A Gênese do NIED" para "A Criação do NIED na Unicamp"</b>'. '<br>';
execute_query($change_title_page, $conn, $debug);

// Adiciona o autor no campo "Autor"
$add_author_to_page = '
INSERT INTO '.$migrate_to_db.'.wp_db_postmeta (post_id, meta_key, meta_value)
VALUES (304, "autor", "por José Armando Valente");
';
echo '<br>' . '<b>Adiciona o autor no campo "Autor"</b>'. '<br>';
execute_query($add_author_to_page, $conn, $debug);

?>