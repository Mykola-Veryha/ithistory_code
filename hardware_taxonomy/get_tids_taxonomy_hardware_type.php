<?php
$terms = array(
	'Analog Computer',
	'Ballistic Computer',
	'Business Computer',
	'Calculator',
	'Computer Case',
	'CPUs',
	'Data Collection',
	'Desktop Computer',
	'Electro-Mechanical Computer',
	'Electronic Digital Computer',
	'Handheld Computer',
	'Home Computer',
	'Laptop',
	'Mainframe',
	'Microcomputer',
	'Microcontroller',
	'Microprocessor',
	'Mid Range Computer ',
	'Monitors ',
	'Motherboard',
	'Networking and Telecommunications',
	'Office Equipment',
	'Other',
	'PDA',
	'Peripherals',
	'Personal Computer',
	'Portable Computer',
	'Power Supply Unit (PSU)',
	'Printer',
	'Professional Computer',
	'Projector',
	'Relay Computer',
	'Scanner',
	'Server',
	'Smartphone',
	'Sound Card',
	'Storage',
	'Super Computer',
	'Tablet',
	'Tabulating Equipment',
	'Terminal',
	'Video Card',
	'Video Game',
	'Workstation'
	);

$keys_terms = array();
foreach ($terms as $name) {
	$term_items = taxonomy_get_term_by_name($name, 'hardware_type');
	if(!empty($term_items)){
		$term = reset($term_items);
		$keys_terms[$term->tid] = $term->name;
	}
}

dpm($keys_terms);