<?php

require_once '../rb.php';
    R::setup('sqlite:../db/directory.db');
require_once("header.php");


?>


      <div class="starter-template">
        <h1>Vse osebe</h1>
		
		<table class="table table-striped">
		<thead>
			<tr>
				<th>Oseba</th>
				<th>Soba</th>
				<th>Nadstropje</th>
				<th>Navodila</th>
				<th>Uredi</th>
			</tr>
		</thead>
		<tbody>
        <?php 
			$people = R::findAll( 'person', 'ORDER BY surname COLLATE NOCASE' );
			foreach($people as $person) {
				echo '<tr>';
				
				echo '<td>';
					echo "<a href='uredi.php?id=".$person->id."'>".$person->name." ".$person->surname."</a>";
				echo '</td>';
				
				echo '<td>';
					echo $person->room;
				echo '</td>';
				
				echo '<td>';
					echo $person->floor;
				echo '</td>';
				
				echo '<td>';
					echo $person->instructions;
				echo '</td>';
				
				echo '<td>';
					echo '<a type="button" class="btn btn-default btn-s" href="uredi.php?id='.$person->id.'">Uredi</a>';
				
				echo '<a href="brisi.php?id='.$person->id.'" title="Briši" onclick="return confirm(\'Zbrišem to osebo?\');" type="button" class="btn btn-default btn-s">Briši</a>';
					
				echo '</td>';
				
				echo '</tr>';
			}

		?>
		</tbody>
		</table>
      </div>

 

<?php
require_once("footer.php");
?> 