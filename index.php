<?php

	require_once('header.html');
	require_once 'rb.php';
    R::setup('sqlite:./db/directory.db');
	$db = new SQLite3('./db/directory.db');
	
	$db->createCollation('NV', function ($a, $b) {
    $a = transliterator_transliterate('Any-Latin; Latin-ASCII; Lower()', $a);
    $b = transliterator_transliterate('Any-Latin; Latin-ASCII; Lower()', $b);
    return strcmp($a, $b);
});
?> 
 <!-- Begin page content -->
<div class="container">
  <div class="page-header">
	<div class="pull-right"><p class="lead">Izberite prvo črko priimka</p></div>
	<h1>Imenik stanovalcev</h1>
  </div>
  <?php
		$stmt = $db->prepare('SELECT DISTINCT substr(surname, 1,1) as letter FROM person ORDER BY letter COLLATE NV');
		$result = $stmt->execute();

while ($letter = $result->fetchArray())
{
    echo '<a href="letter.php?l='.$letter["letter"].'" class="btn btn-default btn-letter">'.$letter["letter"].'</a>';
}
  
  ?>
	
</div>

<?php
	require_once('footer.html');
?>   
