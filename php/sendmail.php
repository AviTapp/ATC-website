<?php
	$name = strip_tags($_REQUEST['name']);
	$message = strip_tags($_REQUEST['message']);
	mail("andrew.tapp@gmail.com", "From Brook Family Video Website", $message, "From: $name" );
	header('Location: http://www.andrewtapp.com/brook.html');
	exit();
	?>