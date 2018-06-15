<?php

$select_query = 'SELECT node.nid, node.title, field_data_field_funcao.field_funcao_tid, taxonomy_term_data.name AS funcao
FROM node
LEFT JOIN field_data_field_funcao ON node.nid = field_data_field_funcao.entity_id
LEFT JOIN taxonomy_term_data ON taxonomy_term_data.tid = field_data_field_funcao.field_funcao_tid
WHERE type="equipe" AND field_data_field_funcao.field_funcao_tid IS NOT NULL';
$conn->select_db($migrate_from_db);
$result = $conn->query($select_query);

$map_id_roles_array = [];
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		if(!array_key_exists($row["nid"], $map_id_roles_array)) {
			$map_id_roles_array[$row["nid"]] = [];
		}
		$map_id_roles_array[$row["nid"]][] = $row["funcao"];
	}
}
echo "<b>Insere cargos na equipe</b>" . '<br>';
foreach ($map_id_roles_array as $id => $roles_array) {
	$array_content = 'a:' . count($roles_array) . ':{';
	foreach ($roles_array as $key => $role) {
		$array_content .= 'i:' . $key . ';s:' . strlen($role) . ':"' . $role  . '";';
	}
	$array_content .= '}';

	$insere_cargo_query = 'INSERT INTO wp_db_postmeta (post_id, meta_key, meta_value)'
											. ' VALUES (' . $id . ',' . '"cargo"'. ",'". $array_content ."');";
    $conn->select_db($migrate_to_db);

    execute_query($insere_cargo_query, $conn, $debug);
}

?>