<?php

//Copia usuários
$copy_users = '
INSERT INTO wp_db_users (
ID,
user_login,
user_pass,
user_nicename,
user_email,
user_registered,
user_activation_key,
user_status,
display_name)
SELECT DISTINCT
u.uid,
REPLACE(LOWER(u.name), " ", "_"),
u.pass,
u.name,
u.mail,
FROM_UNIXTIME(created),
"",
0,
u.name
FROM '.$migrate_from_db.'.users u
WHERE u.created != 0;
';
echo '<br>' . '<b>Copiando usuários</b>'. '<br>';
execute_query($copy_users, $conn, $debug);

$change_user_permission = '
INSERT IGNORE INTO wp_db_usermeta (
user_id,
meta_key,
meta_value)
SELECT DISTINCT
u.uid,
"wp_db_capabilities",
\'a:1:{s:13:"administrator";b:1;}\'
FROM '.$migrate_from_db.'.users u;
';
echo '<br>' . '<b>Atribuindo a permissão de Administrador para todos os usuários</b>'. '<br>';
execute_query($change_user_permission, $conn, $debug);

$add_user_level = '
INSERT IGNORE INTO wp_db_usermeta (
user_id,
meta_key,
meta_value)
SELECT DISTINCT
u.uid,
"wp_db_user_level",
"10"
FROM '.$migrate_from_db.'.users u;
';
echo '<br>' . '<b>Adicionando o nível do usuário</b>'. '<br>';
execute_query($change_user_permission, $conn, $debug);

$create_user = '
INSERT INTO wp_db_users (ID, user_login, user_pass, user_nicename, user_email, user_url, user_registered, user_activation_key, user_status, display_name)
VALUES (2, \'nied\', \'$P$BIZJ2x0PSuIALzCGUD5/i7FWiG94sN/\', \'nied\', \'cicero.alex@gmail.com\', \'\', \'2018-06-11 12:04:03\', \'\', 0, \'nied\');
';
echo '<br>' . '<b>Adicionando usuário de teste</b>'. '<br>';
execute_query($create_user, $conn, $debug);

$create_capabilities = '
INSERT INTO wp_db_usermeta (user_id, meta_key, meta_value)
VALUES (2, \'wp_db_capabilities\', \'a:1:{s:13:\"administrator\";b:1;}\');
';
echo '<br>' . '<b>Adicionando usuário de teste</b>'. '<br>';
execute_query($create_capabilities, $conn, $debug);

$create_user_level = '
INSERT INTO wp_db_usermeta (user_id, meta_key, meta_value)
VALUES (2, \'wp_db_user_level\', \'10\');
';
echo '<br>' . '<b>Adicionando usuário de teste</b>'. '<br>';
execute_query($create_user_level, $conn, $debug);