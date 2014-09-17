<?php
require_once '../rb.php';
    R::setup('sqlite:../db/directory.db');

if (!empty($_POST)){
 
	$person = R::dispense( 'person' );
	$person->name = $_POST["name"];
	$person->surname = $_POST["surname"];
	$person->room = $_POST["room"];
	$person->floor = $_POST["floor"];
	$person->instructions = $_POST["instructions"];
	$id = R::store( $person );
	
	R::close();
  
	header('Location: index.php');
}else{


require_once("header.php");
?>


      <div class="starter-template">
        <h1>Dodaj osebo</h1>
       <form role="form" method="post">
  <div class="form-group">
    <label for="name">Ime</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Ime">
  </div>
   <div class="form-group">
    <label for="surname">Priimek</label>
    <input type="text" name="surname" class="form-control" id="surname" placeholder="Priimek">
  </div>
  <div class="form-group">
    <label for="room">Soba</label>
    <input type="text" class="form-control" id="room" placeholder="Soba" name="room">
  </div>
  <div class="form-group">
    <label for="floor">Nadstropje</label>
    <input type="text" class="form-control" id="floor" placeholder="Nadstropje" name="floor">
  </div>
   <div class="form-group">
    <label for="instructions">Navodila</label>
    <input type="text" name="instructions" class="form-control" id="instructions" placeholder="Navodila">
  </div>
  
  <button type="submit" class="btn btn-default">Pošlji</button>
</form>

    
	  </div>

 

<?php
require_once("footer.php");

}
?> 