<?php
$terms = array(
  'Analog Computer' => 'Computer - Analog',
  'Ballistic Computer' => 'Computer - Ballistic',
  'Business Computer' => 'Computer - Business',
  'Calculator' => 'Calculator',
  'Computer Case' => 'Component - Computer Case',
  'CPUs' => 'CPU',
  'Data Collection' => 'Peripheral - Data Collection',
  'Desktop Computer' => 'Computer - Desktop',
  'Electro-Mechanical Computer' => 'Computer - ElectroMechanical',
  'Electronic Digital Computer' => 'Computer - Electronic Digital',
  'Handheld Computer' => 'Handheld - Computer',
  'Home Computer' => 'Computer - Home',
  'Laptop' => 'Computer - Laptop',
  'Mainframe' => 'Computer - Mainframe',
  'Microcomputer' => 'Computer - MicroComputer',
  'Microcontroller' => 'Component - Microcontroller',
  'Microprocessor' => 'CPU - Microprocessor',
  'Mid Range Computer' => 'Computer - Mid Range',
  'Monitors' => 'Display - Monitor ',
  'Motherboard' => 'Component - Motherboard',
  'Networking and Telecommunications' => 'Networking and Telecom',
  'Office Equipment' => 'Office Equipment',
  'Other' => '-OTHER-',
  'PDA' => 'Handheld - PDA',
  'Peripherals' => 'Peripheral',
  'Personal Computer' => 'Computer - Personal',
  'Portable Computer' => 'Computer - Portable',
  'Power Supply Unit (PSU)' => 'Component - Power Supply',
  'Printer' => 'Peripheral - Printer',
  'Professional Computer' => 'Computer - Professional',
  'Projector' => 'Display - Projector',
  'Relay Computer' => 'Computer - Relay',
  'Scanner' => 'Peripheral - Scanner',
  'Server' => 'Computer - Server',
  'Smartphone' => 'Handheld - Smartphone',
  'Sound Card' => 'Component - Card - Sound',
  'Storage' => 'Peripheral - Storage',
  'Super Computer' => 'Computer - SuperComputer',
  'Tablet' => 'Handheld - Tablet',
  'Tabulating Equipment' => 'Computer - Tabulating',
  'Terminal' => 'Terminal',
  'Video Card' => 'Component - Card - Video',
  'Video Game' => 'Video Game',
  'Workstation' => 'Computer - Workstation',
);

foreach ($terms as $old_name => $new_name) {
	$term_items = taxonomy_get_term_by_name($old_name, 'hardware_type');
	$term = reset($term_items);
	$term->name = $new_name;
	taxonomy_term_save($term);
}
