<?php
	require_once('header.html');
	require_once 'rb.php';
    R::setup('sqlite:./db/directory.db');
	$person = R::load( 'person', $_GET['id'] );
?> 
 <!-- Begin page content -->
<div class="container">
  <div class="page-header">
	<h1>Oseba</h1>
  </div>
 
		<div class="panel panel-default">
  <div class="panel-body">
    <address>
  <strong><?php echo $person->name;?> <?php echo $person->surname;?></strong><br>
  Soba: <?php echo $person->room;?><br>
  Nadstropje: <?php echo $person->floor;?><br>
  Navodila: <?php echo $person->instructions;?>
</address>

  </div>
</div>
</div>
 <script>
	setTimeout(function () {
       window.location.href = "index.php"; //will redirect to your blog page (an ex: blog.html)
    }, 45000); //will call the function after 2 secs.
  
  
  </script>
<?php
	require_once('footer.html');
?>   
