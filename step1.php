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
			<label for="template">Template</label>
			<select name="template" id="template" class="form-control">
				<?php
				$handle = opendir('template/');   
				while ($file = readdir($handle)) {
					if (substr($file,0,1) != ".") {
						echo "<option value='$file'>$file</option>";
					}
				}
				closedir($handle);  
				?>
			</select>
		</div>
		<div class="form-group">
			<label for="raw_csv">Raw CSV</label>
			<textarea class="form-control" id="raw_csv" name="raw_csv" rows="25"></textarea>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary" value="Submit">
		</div>
	</form>

</div><!-- /.container -->

<?php require('includes/footer.php'); ?>