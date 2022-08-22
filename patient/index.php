<?php
include 'head.php';
	?>
	<div class="container spacing ">
	<h1 class="my-5"> Ασθενείς </h1>
	<button class="btn btn-success" name="addBTN" onclick="window.location.href='addPatientForm.php'"> Εισαγωγή Ασθενή
	</button>
	<br>
	<?php
		include '../config/functions.php';
		echo "<h3 class='my-5'> Αναζήτηση Ραντεβού βάση Ασθεβή</h3>";
		echo listNamePatientChoose();
	?>
	<h1 class="my-5"> Εργαστηριακά Τεστ </h1>
	<table class="table table-bordered table-hover" id="labtest">
		<thead>
			<th>Περιγραφή</td>
			<th>Η προγραμματισμένη ημερομηνία και ώρα διεξαγωγής</td>
			<th>Έκθεση-πρακτικό των πεπραγμένων</td>
		</thead>
		<tr>
		
		</tr>
	</table>
	<br>
	<h1 class="my-5"> Χειρουργεία </h1>
	<table class="table table-bordered table-hover" id="surg">
		<thead>
			<th>Τύπος</td>
			<th>Ημ. πραγματοποίησης</td>
			<th>Ευρήματα</td>
		</thead>
		<tr>
		
		</tr>
	</table>
	<br>
	<h1 class="my-5"> Εξιτήριο </h1>
	<table class="table table-bordered table-hover" id="exit">
		<thead>
			<th>Διάγνωση εξόδου</td>
			<th>Ημ.</td>
			<th>Φαρμακευτική αγωγή</td>
			<th>Δραστηριοτήτες που πρέπει να περιοριστούν</td>
			<th>Περιγραφή των συμπτωμάτων</td>
		</thead>
		<tr>
		
		</tr>
	</table>
	<br>
	<table class="table table-bordered table-hover">
		<thead>
			<th>AMKA</td>
			<th>Όνομα</td>
			<th>Ημ. Γεν.</td>
			<th>Φύλο</td>
			<th>Ασφάλεια</td>
			<th>Τρέχουσα ασθένεια</td>
			<th>Αλλεργίες</td>
			<th>Ιστορικό</td>
			<th>Φάρμακα</td>
			<th>Τρέχουσα κατάσταση</td>
			<th>Ενημέρωση</td>
			<th>Διαγραφή</td>
		</thead>
		<?php
		include_once ('../config/functions.php');
		$patients = getPatient();
		foreach ($patients as $patient) {
			echo "<tr>";
			echo "<th>" . $patient["amka"] . "</th>" .
			"<td>" . $patient["name"] . "</td>" .
			"<td>" . $patient["born"] . "</td>" .
			"<td>" . $patient["gender"] . "</td>" .
			"<td>" . $patient["insurance"] . "</td>" .
			"<td>" . $patient["current_disease"] . "</td>" .
			"<td>" . $patient["allergies"] . "</td>".
			"<td>" . $patient["historian"] . "</td>".
			"<td>" . $patient["medicines"] . "</td>".
			"<td>" . $patient["current_situation"] . "</td>";
			echo '<td>' . '<form name="editForm" action="updatePatientForm.php" method="POST">' .
			'<input type="hidden" value="' . $patient["amka"] . '" name="amka"/>' .
			'<button type="submit" class="btn btn-primary" value ="Edit" name="editbtn">Edit</button> </form>' . "</td>" .

			'<td>' . '<form class="delete" name="deleteForm" action="deletePatient.php" method="POST">' .
			'<input type="hidden" value="' . $patient["amka"] . '" name="amka"/>' .
			'<button type="submit" class="btn btn-danger" value="Delete" id="deletebtn" name="deletebtn">Delete</button> </form>' .
			'</td>';

			echo "</tr>";
		}
		?>
	</table>
	
	<br>
</div>



	<?php
	include 'final.php';
?>