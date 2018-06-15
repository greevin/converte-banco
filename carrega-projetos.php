<?php

$select_query = 'SELECT field_data_field_equ_proj.entity_id, node.nid, node.title 
FROM node
LEFT JOIN field_data_field_equ_proj ON node.nid = field_data_field_equ_proj.field_equ_proj_nid
WHERE type="projeto" AND field_data_field_equ_proj.entity_id IS NOT NULL';
$conn->select_db($migrate_from_db);
$result = $conn->query($select_query);

$map_id_roles_array = [];
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		if(!array_key_exists($row["entity_id"], $map_id_roles_array)) {
			$map_id_roles_array[$row["entity_id"]] = [];
		}
		$map_id_roles_array[$row["entity_id"]][] = $row["nid"];
	}
}
echo "<b>Insere os projetos na equipe</b>" . '<br>';
foreach ($map_id_roles_array as $id => $roles_array) {
	$array_content = 'a:' . count($roles_array) . ':{';
	foreach ($roles_array as $key => $role) {
		$array_content .= 'i:' . $key . ';s:' . strlen($role) . ':"' . $role  . '";';
	}
	$array_content .= '}';

	$insere_linha_pesquisa_query = 'INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)'
                                   .' VALUES ('.$id.','.'"projetos"'.",'".$array_content."');";
    $conn->select_db($migrate_to_db);

    execute_query($insere_linha_pesquisa_query, $conn, $debug);
}

?>