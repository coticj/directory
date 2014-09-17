<?php
require_once '../rb.php';
    R::setup('sqlite:../db/directory.db');

	$person = R::load( 'person', $_GET["id"] );
		
	R::trash( $person );
	
	header('Location: index.php');
	
	exit();
	
	