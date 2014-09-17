<?php
	require_once('header.html');
	require_once 'rb.php';
    R::setup('sqlite:./db/directory.db');
?> 
 <!-- Begin page content -->
<div class="container">
  <div class="page-header">
	<div class="pull-right"><p class="lead">Izberite osebo</p></div>
	<h1>Osebe</h1>
  </div>
  
<div class="list-group">
<?php 
	$letter=$_GET["l"];
	$people = R::find( 'person', ' surname LIKE ? ORDER BY surname COLLATE NOCASE', [ $letter.'%' ] );
foreach($people as $person) {
				echo '<a href="person.php?id='.$person->id.'" class="list-group-item person">'.$person->name.' '.$person->surname.'</a>';
			}
?>
  
  
 </div>
		
</div>

<?php
	require_once('footer.html');
?>   
