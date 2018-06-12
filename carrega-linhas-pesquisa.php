<?php

$select_query = 'SELECT node.nid, node.title, REPLACE(REPLACE(field_data_field_linhasp.field_linhasp_value, "Eduação", "Educação"), "educação", "Educação") AS linha_pesquisa
FROM node
LEFT JOIN field_data_field_data_fim ON node.nid = field_data_field_data_fim.entity_id
LEFT JOIN field_data_field_linhasp ON node.nid = field_data_field_linhasp.entity_id
WHERE type="equipe" AND field_data_field_linhasp.field_linhasp_value IS NOT NULL';
$conn->select_db("drupal");
$result = $conn->query($select_query);

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
    $conn->select_db("wp_db_nied");

    execute_query($insere_linha_pesquisa_query, $conn, $debug);
}

?>