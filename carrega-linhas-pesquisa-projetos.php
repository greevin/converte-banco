<?php

//Linha de Pesquisa para Projetos
$select_research_line_query = 'SELECT 
'.$migrate_from_db.'.node.nid, 
'.$migrate_from_db.'.node.title,
field_pesquisa_value AS linha_pesquisa
FROM '.$migrate_from_db.'.node
LEFT JOIN '.$migrate_from_db.'.field_data_field_pesquisa ON '.$migrate_from_db.'.node.nid = '.$migrate_from_db.'.field_data_field_pesquisa.entity_id
WHERE type="projeto" and field_pesquisa_value IS NOT NULL';
$conn->select_db($migrate_from_db);
$result = $conn->query($select_research_line_query);

$map_id_roles_array = [];
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		if(!array_key_exists($row["nid"], $map_id_roles_array)) {
			$map_id_roles_array[$row["nid"]] = [];
		}
		$map_id_roles_array[$row["nid"]][] = $row["linha_pesquisa"];
	}
}

foreach ($map_id_roles_array as $id => $roles_array) {
	$array_content = 'a:' . count($roles_array) . ':{';
	foreach ($roles_array as $key => $role) {
		$array_content .= 'i:' . $key . ';s:' . strlen($role) . ':"' . $role  . '";';
	}
	$array_content .= '}';

	$insere_linha_pesquisa_query = 'INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)'
                                   .' VALUES ('.$id.','.'"linha_de_pesquisa"'.",'".$array_content."');";
    $conn->select_db($migrate_to_db);

    execute_query($insere_linha_pesquisa_query, $conn, $debug);
}

// Equipe
$select_team_query = '
SELECT node.nid, node.title, node_revision.nid AS equipe
FROM node
LEFT JOIN field_data_field_equipe ON node.nid = field_data_field_equipe.entity_id
LEFT JOIN node_revision ON node_revision.nid = field_data_field_equipe.field_equipe_nid
WHERE type="projeto" AND node_revision.title IS NOT NULL
';
$conn->select_db($migrate_from_db);
$result = $conn->query($select_team_query);

$map_id_roles_array = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if(!array_key_exists($row["nid"], $map_id_roles_array)) {
            $map_id_roles_array[$row["nid"]] = [];
        }
        $map_id_roles_array[$row["nid"]][] = $row["equipe"];
    }
}

foreach ($map_id_roles_array as $id => $roles_array) {
    $array_content = 'a:' . count($roles_array) . ':{';
    foreach ($roles_array as $key => $role) {
        $array_content .= 'i:' . $key . ';s:' . strlen($role) . ':"' . $role  . '";';
    }
    $array_content .= '}';

    $insere_equipe_query = 'INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)'
                                   .' VALUES ('.$id.','.'"equipe"'.",'".$array_content."');";
    $conn->select_db($migrate_to_db);

    execute_query($insere_equipe_query, $conn, $debug);
}

//Outros Colaboradores
$select_others_colaborators_query = '
SELECT '.$migrate_from_db.'.node.nid, '.$migrate_from_db.'.node.title, '.$migrate_from_db.'.field_data_field_outros_colaboradores.entity_id, '.$migrate_from_db.'.field_data_field_outros_colaboradores.field_outros_colaboradores_value 
FROM '.$migrate_from_db.'.node
LEFT JOIN '.$migrate_from_db.'.field_data_field_outros_colaboradores ON node.nid = '.$migrate_from_db.'.field_data_field_outros_colaboradores.entity_id
WHERE type="projeto" AND field_outros_colaboradores_value IS NOT NULL
';
$conn->select_db($migrate_from_db);
$result = $conn->query($select_others_colaborators_query);

$map_id_roles_array = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if(!array_key_exists($row["nid"], $map_id_roles_array)) {
            $map_id_roles_array[$row["nid"]] = [];
        }
        $map_id_roles_array[$row["nid"]][] = $row["field_outros_colaboradores_value"];
    }
}

foreach ($map_id_roles_array as $id => $roles_array) {
    $array_content = 'a:' . count($roles_array) . ':{';
    foreach ($roles_array as $key => $role) {
        $array_content .= 'i:' . $key . ';s:' . strlen($role) . ':"' . $role  . '";';
    }
    $array_content .= '}';

    $insere_outros_colaboradores_query = 'INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)'
                           .' VALUES ('.$id.','.'"outros_colaboradores"'.",'".$array_content."');";
    $conn->select_db($migrate_to_db);

    execute_query($insere_outros_colaboradores_query, $conn, $debug);
}

//Parceiros
$select_partners_query = '
SELECT '.$migrate_from_db.'.node.nid, '.$migrate_from_db.'.node.title, '.$migrate_from_db.'.field_data_field_rel_parcerias.field_rel_parcerias_nid 
FROM '.$migrate_from_db.'.node
LEFT JOIN '.$migrate_from_db.'.field_data_field_rel_parcerias ON node.nid = '.$migrate_from_db.'.field_data_field_rel_parcerias.entity_id
WHERE type="projeto" AND field_rel_parcerias_nid IS NOT NULL
';
$conn->select_db($migrate_from_db);
$result = $conn->query($select_partners_query);

$map_id_roles_array = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if(!array_key_exists($row["nid"], $map_id_roles_array)) {
            $map_id_roles_array[$row["nid"]] = [];
        }
        $map_id_roles_array[$row["nid"]][] = $row["field_rel_parcerias_nid"];
    }
}

foreach ($map_id_roles_array as $id => $roles_array) {
    $array_content = 'a:' . count($roles_array) . ':{';
    foreach ($roles_array as $key => $role) {
        $array_content .= 'i:' . $key . ';s:' . strlen($role) . ':"' . $role  . '";';
    }
    $array_content .= '}';

    $insere_parceiros_query = 'INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)'
                                         .' VALUES ('.$id.','.'"parceiros"'.",'".$array_content."');";
    $conn->select_db($migrate_to_db);

    execute_query($insere_parceiros_query, $conn, $debug);
}

?>