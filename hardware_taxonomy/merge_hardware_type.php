<?php
$old_terms = array(
	56 => 'Adding Machine',
	71 => 'Mechanical Calculator',
	78 => 'Netbook',
	79 => 'Nettop',
	81 => 'Notebook',
	);
$merge_terms = array(
	'Adding Machine' => 60,
	'Mechanical Calculator' => 60,
	'Netbook' => 69,
	'Nettop' => 69,
	'Notebook' => 69,
	);

$transfer_terms = array(
	56 => 60,
	71 => 60,
	78 => 69,
	79 => 69,
	81 => 69,
	74 => 62,
	);
set_time_limit(0);
foreach ($transfer_terms as $old_key => $new_key) {
	$query = db_select('field_data_field_hardware_type', 't');
	$query->condition('t.field_hardware_type_tid', $old_key);
	$query->fields('t', array('entity_id', 'revision_id', 'delta'));
	$results = $query->execute()->fetchAll();

	foreach ($results as  $hardware_type) {
		$execute = db_update('field_data_field_hardware_type')
		->fields(array(
			'field_hardware_type_tid' => $new_key,
			))
		->condition('entity_id', $hardware_type->entity_id)
		->condition('revision_id', $hardware_type->revision_id)
		->condition('delta', $hardware_type->delta)
		->execute();
	}
}

