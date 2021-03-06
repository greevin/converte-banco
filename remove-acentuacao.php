<?php

// Remove acentuação no post_name no Wordpress
$remove_graphic_signs = '
UPDATE '.$migrate_to_db.'.wp_db_posts
SET
post_name = TRIM(LCASE(post_name)),
post_name = REPLACE(post_name ,"á","a"),
post_name = REPLACE(post_name ,"à","a"), 
post_name = REPLACE(post_name ,"ã","a"), 
post_name = REPLACE(post_name ,"â","a"), 
post_name = REPLACE(post_name ,"é","e"), 
post_name = REPLACE(post_name ,"è","e"), 
post_name = REPLACE(post_name ,"ê","e"), 
post_name = REPLACE(post_name ,"í","i"), 
post_name = REPLACE(post_name ,"ì","i"), 
post_name = REPLACE(post_name ,"î","i"), 
post_name = REPLACE(post_name ,"ó","o"), 
post_name = REPLACE(post_name ,"ò","o"), 
post_name = REPLACE(post_name ,"ô","o"), 
post_name = REPLACE(post_name ,"õ","o"), 
post_name = REPLACE(post_name ,"ú","u"), 
post_name = REPLACE(post_name ,"ù","u"), 
post_name = REPLACE(post_name ,"û","u"), 
post_name = REPLACE(post_name ,"ü","u"), 
post_name = REPLACE(post_name ,"ç","c"),
post_name = REPLACE(post_name, "_", "-");
';
echo '<b>Remove acentuação no post_name no Wordpress</b>'. '<br>';
execute_query($remove_graphic_signs, $conn, $debug);

// Corrige tags erradas
$fix_wrongs_tags = '
INSERT INTO '.$migrate_to_db.'.wp_db_terms (term_id, slug) VALUES (6, "noticia"), (12, "publicacao"), (16, "coordenacao"), (13, "to-do")
ON DUPLICATE KEY UPDATE term_id=VALUES(term_id), slug=VALUES(slug);
';
echo '<br>' . '<b>Corrige tags erradas</b>'. '<br>';
execute_query($fix_wrongs_tags, $conn, $debug);

// Corrige post_name errado
$fix_wrong_post_name = '
UPDATE '.$migrate_to_db.'.wp_db_posts
SET post_name= REPLACE(REPLACE("construc?a?o-de-uma-metodologia-participativa-para-transformac?a?o-escolar-baseada-em-dados","c?", "c"), "a?","a")
WHERE ID = 283;
';
echo '<br>' . '<b>Corrige o post_name errado</b>'. '<br>';
execute_query($fix_wrong_post_name, $conn, $debug);

// Corrige post_title errado
$fix_wrong_post_title = '
UPDATE '.$migrate_to_db.'.wp_db_posts
SET post_title= REPLACE(REPLACE("Construc?a?o de uma metodologia participativa para a transformac?a?o escolar baseada em dados","c?", "ç"), "a?","ã")
WHERE ID = 283;

';
echo '<br>' . '<b>Corrige o post_name errado</b>'. '<br>';
execute_query($fix_wrong_post_title, $conn, $debug);

?>