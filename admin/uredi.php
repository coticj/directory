<?php
require_once '../rb.php';
    R::setup('sqlite:../db/directory.db');

if (!empty($_POST)){
	$person = R::load( 'person', $_GET['id'] );
	$person->name = $_POST["name"];
	$person->surname = $_POST["surname"];
	$person->room = $_POST["room"];
	$person->floor = $_POST["floor"];
	$person->instructions = $_POST["instructions"];
	$id = R::store( $person );
	R::close();
	
	header('Location: index.php');
}else{
$person = R::load( 'person', $_GET['id'] );
	
	R::close();

require_once("header.php");
?>


      <div class="starter-template">
        <h1>Uredi osebo</h1>
        <form role="form" method="post">
  <div class="form-group">
    <label for="name">Ime</label>
    <input type="text" name="name" value="<?php echo $person->name;?>" class="form-control" id="name" placeholder="Ime">
  </div>
   <div class="form-group">
    <label for="surname">Priimek</label>
    <input type="text" name="surname" value="<?php echo $person->surname;?>" class="form-control" id="surname" placeholder="Priimek">
  </div>
  <div class="form-group">
    <label for="room">Soba</label>
    <input type="text" class="form-control" value="<?php echo $person->room;?>" id="room" placeholder="Soba" name="room">
  </div>
  <div class="form-group">
    <label for="floor">Nadstropje</label>
    <input type="text" class="form-control" value="<?php echo $person->floor;?>" id="floor" placeholder="Nadstropje" name="floor">
  </div>
   <div class="form-group">
    <label for="instructions">Navodila</label>
    <input type="text" name="instructions" value="<?php echo $person->instructions;?>" class="form-control" id="instructions" placeholder="Navodila">
  </div>
  
  <button type="submit" class="btn btn-default">Pošlji</button>
</form>
	  
	  </div>

 

<?php
require_once("footer.php");

}
?> 