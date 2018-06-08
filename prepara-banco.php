<?php

// Limpa as tabelas do Wordpress
$clean_tables_query = '
TRUNCATE TABLE wp_db_nied.wp_db_comments;
TRUNCATE TABLE wp_db_nied.wp_db_links;
TRUNCATE TABLE wp_db_nied.wp_db_postmeta;
TRUNCATE TABLE wp_db_nied.wp_db_posts;
TRUNCATE TABLE wp_db_nied.wp_db_term_relationships;
TRUNCATE TABLE wp_db_nied.wp_db_term_taxonomy;
TRUNCATE TABLE wp_db_nied.wp_db_terms;
';
execute_query($clean_tables_query, $conn, $debug);

// Cria o ’Sem Categoria’ se ele foi apagado
$create_no_category = '
INSERT INTO wp_db_nied.wp_db_terms (name, slug, term_group)
VALUES (\'Sem categoria\',\'sem-categoria\', 0);
';
execute_query($create_no_category, $conn, $debug);

// Converte para categorias
$create_new_categories = '
REPLACE INTO wp_db_casn.wp_terms (name, slug)
SELECT n.name, n.type
FROM drupal.node_type n;
';
execute_query($create_new_categories, $conn, $debug);

// Adiciona os termos na taxonomia
$add_new_taxonomies = '
REPLACE INTO wp_db_casn.wp_term_taxonomy (term_taxonomy_id, term_id, taxonomy, description, parent)
SELECT t.term_id, t.term_id \'term_id\', \'category\', \'\', 0
FROM wp_db_casn.wp_terms t;
';
execute_query($add_new_taxonomies, $conn, $debug);

// Associa o conteúdo com os termos
$associate_term_relationships = '
INSERT INTO wp_db_casn.wp_term_relationships (object_id, term_taxonomy_id)
SELECT node.nid, wp_db_casn.wp_terms.term_id 
FROM drupal.node
INNER JOIN wp_db_casn.wp_terms ON wp_db_casn.wp_terms.slug = node.type;
';
execute_query($associate_term_relationships, $conn, $debug);

// Atualiza o contador das tags
$update_tags_counter = '
UPDATE wp_db_nied.wp_db_term_taxonomy tt
SET count = (SELECT COUNT(tr.object_id)
FROM wp_db_nied.wp_db_term_relationships tr
WHERE tr.term_taxonomy_id = tt.term_taxonomy_id);
';
execute_query($update_tags_counter, $conn, $debug);

?>
