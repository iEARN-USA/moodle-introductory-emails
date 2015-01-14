<?php

define('MANDRILL_KEY', 'mandrill_key_here');
define('TO_ARRAY', serialize(array(
	array('email' => 'example1@example.net', 'name' => 'Example Name 1', 'type' => 'cc'),
	array('email' => 'example2@example.net', 'name' => 'Example Name 2', 'type' => 'cc')
)));
define('FROM_EMAIL', 'from_email_here');
define('FROM_NAME', 'from_name_here');
define('SUBJECT', 'subject_here');

?>