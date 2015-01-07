<?php
$title = 'Step 1';
require('includes/header.php');
?>

<div class="container">

	<div class="page-header">
		<h1><?php echo $title; ?></h1>
	</div>
	
	<form role="form" action="step2.php" method="post">
	  <div class="form-group">
		<label for="raw_csv">RAW CSV</label>
		<textarea class="form-control" id="raw_csv" name="raw_csv" rows="25"></textarea>
	  </div>
	  <input type="submit" class="btn btn-default" value="Submit">
	</form>

</div><!-- /.container -->

<?php require('includes/footer.php'); ?>