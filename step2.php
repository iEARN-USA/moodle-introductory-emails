<?php

require_once 'includes/functions.php';

if($_SERVER['REQUEST_METHOD'] === "POST") {
	
	session_start();
	
	//$_SESSION['csv'] = str_getcsv($_POST['raw_csv']);
	
	$lines = explode("\n", $_POST['raw_csv']);
	$_SESSION['csv'] = array();
	
	foreach($lines as $line) {
		array_push($_SESSION['csv'], str_getcsv($line));
	}

	$_SESSION['template'] = $_POST['template'];
	
}


$title = 'Step 2';
require('includes/header.php');
?>

<div class="container">

	<div class="page-header">
		<h1><?php echo $title; ?></h1>
	</div>
	
	  <div class="panel panel-default">
	    
	    <div class="panel-heading">
	  	<h3 class="panel-title">Overview</h3>
	    </div>
	    
	    <div class="panel-body">
		    
		<div class="table-responsive">
	  	
	  	<table class="table table-striped">
	  		
	  		<thead>
		  		<tr>
	  			<th>#</th>
	  			<th>Name</th>
	  			<th>Email</th>
	  			<th>Username</th>
	  			<th>Password</th>
	  			</tr>
	  		</thead>
	  				
	  		<?php $counter = 1; foreach ($_SESSION['csv'] as $entry) { ?>
	  			
	  			<tr>
	  				<td><?php echo $counter; ?></td>
	  				<td><?php echo $entry[2].' '.$entry[3]; ?></td>
	  				<td><?php echo $entry[4]; ?></td>
	  				<td><?php echo $entry[0]; ?></td>
	  				<td><?php echo $entry[1]; ?></td>
	  			</tr>
	  			
	  		<?php $counter ++; } ?>
	  		
	  	</table>

	    </div>
	    
	  </div>
  	
  	</div>
	  
	  <div class="panel-group" id="accordion">
		<?php $counter = 1; foreach ($_SESSION['csv'] as $entry) { ?>
	    <div class="panel panel-default">
	  	<div class="panel-heading">
	  	  <h4 class="panel-title">
	  		<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $counter;?>">
	  		  <?php echo $entry[2].' '.$entry[3]; ?>
	  		</a>
	  	  </h4>
	  	</div>
	  	<div id="collapse<?php echo $counter;?>" class="panel-collapse collapse">
	  	  <div class="panel-body">
	  		<?php echo write_email($entry, true); ?>
	  	  </div>
	  	</div>
	    </div>
	    <?php $counter ++; } ?>
	</div>
	
	<form action="step3.php" method="post">
		<div class="form-group">
			<a href="reset.php" class="btn btn-danger">Start Over</a>
			<input class="btn btn-success pull-right" type="submit" value="Send Emails">
		</div>
	</form>
	
</div><!-- /.container -->

<?php require('includes/footer.php'); ?>