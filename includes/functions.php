<?php

function write_email($data, $html = false) {

	if($html) {
		$break = '<br>';
	} else {
		$break = "\n";
	}

	$template_file = 'template/sample.txt';

	if (!file_exists($template_file)) {
	    return 'Template file not found!';
	    exit;
	}

	$msg_template = file_get_contents($template_file);
	$array_template_vars = array('{username}', '{password}', '{firstname}', '{lastname}');
	$array_template_data = array($data[0], $data[1], $data[2], $data[3]);
	$final_msg = str_replace($array_template_vars, $array_template_data, $msg_template);

	return $final_msg;

}

?>