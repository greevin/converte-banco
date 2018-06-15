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