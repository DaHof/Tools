<!DOCTYPE html>
<html>
<head>
	<!-- META -->
	<title>Name of Email Campaign</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="" />
	
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="http://tools.jamcreative.ca/css/kickstart.css" media="all" />
	<link rel="stylesheet" type="text/css" href="http://tools.jamcreative.ca/style.css" media="all" /> 
	
	<!-- Javascript -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="http://tools.jamcreative.ca/js/kickstart.js"></script>
</head>
<body>
<div class="grid">
	<div class="col_12">
		<h1 class="center"></h1>

<table class="striped sortable">
	        <thead><tr>
				<th>English</th>
			</tr></thead>
			


<?php
if ($handle = opendir('.')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != ".." && $entry != "index.php" && $entry != "images") {
            echo "<tr><td><a href='{$entry}'>{$entry}</a></td></tr>";
        }
    }

    closedir($handle);
}
?>




		</table>

<table class="striped sortable">
	        <thead><tr>
				<th>French</th>
			</tr></thead>
			


<?php
if ($handle = opendir('.')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != ".." && $entry != "index.php" && $entry != "images") {
            echo "<tr><td><a href='{$entry}'>{$entry}</a></td></tr>";
        }
    }

    closedir($handle);
}
?>




		</table>


		<!-- DONT FORGET TO DO THE LEGAL -->

	</div>
</div> <!-- End Grid -->
</body>
</html>