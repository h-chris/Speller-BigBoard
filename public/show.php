

<?php

	require_once "../include/helfun.php";
	
	// get table rows from display
	$rows = rows();

	$template = "table.php";
	     
		        // render header
            require("../template/header.php");

            // render template
            require("../template/$template");

            // render footer
            require("../template/footer.php");
?>

