<?php

function write_email($data, $html = false) {

	if($html) {
		$break = '<br>';
	} else {
		$break = "\n";
	}

	$output = '';

	$output .= 'Dear '.$data[2].' '.$data[3].','.$break;
	$output .= $break;
	$output .= 'Welcome!  You have been enrolled in the Completely Generic yet Random course. '.$break;
	$output .= $break;
	$output .= 'The course is officially open. This is an e-mail for you to test your login and read some introductory information about the course. Begin by using this information below to log into your course.'.$break;
	$output .= $break;
	$output .= 'To login to your course, go to http://test.com'.$break;
	$output .= $break;
	$output .= 'Your Username and Password are below. You will need to copy it exactly as it appears:'.$break;
	$output .= $break;
	$output .= 'Username: '.$data[0].$break;
	$output .= 'Password: '.$data[1].$break;
	$output .= $break;
	$output .= 'See you online soon!'.$break;
	$output .= $break;
	$output .= 'The Course Facilitators'.$break;

	return $output;	
}



?>