<?php

require_once 'config.php';
require_once 'includes/functions.php';

session_start();

if($_SERVER['REQUEST_METHOD'] === "POST") {
	
	require_once('api/mandrill/src/Mandrill.php');
	
	$Mandrill = new Mandrill(MANDRILL_KEY);
	
	include_once 'template/'.str_ireplace('.txt','.php',$_SESSION['template']);
	if(!isset($subject)) { $subject = constant('SUBJECT'); } 
	if(!isset($to_array)) { $to_array = unserialize(TO_ARRAY); } 
	
	foreach ($_SESSION['csv'] as $entry) {
		
		$email_and_name = array(array('email' => $entry[4], 'name' => $entry[2].' '.$entry[3]));
		
		$message = array(
			'from_email' => FROM_EMAIL,
			'from_name' => FROM_NAME,
			'subject' => $subject,
			'to' => array_merge($email_and_name, $to_array),
			'text' => write_email($entry, false)
		);
		
		$Mandrill->messages->send($message, true);
	
	}

}

$title = 'Step 3';

require('includes/header.php');

?>

<div class="container">

	<div class="page-header">
		<h1><?php echo $title; ?></h1>
	</div>

	<div class="alert alert-success" role="alert"><strong>Success!</strong></div>
	
	<a href="reset.php" class="btn btn-default">Send Another</a>

</div><!-- /.container -->

<?php require('includes/footer.php'); ?>