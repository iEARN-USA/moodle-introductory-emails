<?php

function write_email($data, $html = false) {

	$template_file = 'template/'.$_SESSION['template'];

	if (!file_exists($template_file)) {
	    return 'Template file not found!';
	}

	$msg_template = file_get_contents($template_file);
	$array_template_vars = array('{username}', '{password}', '{firstname}', '{lastname}');
	$array_template_data = array($data[0], $data[1], $data[2], $data[3]);
	$final_msg = str_replace($array_template_vars, $array_template_data, $msg_template);
	
	if($html) {
		$final_msg = str_replace("\n", "<br>", $final_msg);
	}

	return $final_msg;

}

?>