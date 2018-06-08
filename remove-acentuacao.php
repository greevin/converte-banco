<?php

// Remove acentuação no post_name no Wordpress
$remove_graphic_signs = '
UPDATE wp_db_posts
SET
post_name = TRIM(LCASE(post_name)),
post_name = replace(post_name ,\'á\',\'a\'),
post_name = replace(post_name ,\'à\',\'a\'), 
post_name = replace(post_name ,\'ã\',\'a\'), 
post_name = replace(post_name ,\'â\',\'a\'), 
post_name = replace(post_name ,\'é\',\'e\'), 
post_name = replace(post_name ,\'è\',\'e\'), 
post_name = replace(post_name ,\'ê\',\'e\'), 
post_name = replace(post_name ,\'í\',\'i\'), 
post_name = replace(post_name ,\'ì\',\'i\'), 
post_name = replace(post_name ,\'î\',\'i\'), 
post_name = replace(post_name ,\'ó\',\'o\'), 
post_name = replace(post_name ,\'ò\',\'o\'), 
post_name = replace(post_name ,\'ô\',\'o\'), 
post_name = replace(post_name ,\'õ\',\'o\'), 
post_name = replace(post_name ,\'ú\',\'u\'), 
post_name = replace(post_name ,\'ù\',\'u\'), 
post_name = replace(post_name ,\'û\',\'u\'), 
post_name = replace(post_name ,\'ü\',\'u\'), 
post_name = replace(post_name ,\'ç\',\'c\'),
post_name = replace(post_name, \'_\', \'-\');
';
execute_query($remove_graphic_signs, $conn, $debug);

// Corrige tags erradas
$fix_wrongs_tags = '
update wp_db_terms
set slug = replace(slug, \'_\', \'ca\')
where term_id in (12,16);

update wp_db_terms
set slug = replace(slug, \'_\', \'i\')
where term_id = 6;

update wp_db_terms
set slug = replace(slug, \'_\', \'-\')
where term_id = 13;
';
execute_query($fix_wrongs_tags, $conn, $debug);

?>