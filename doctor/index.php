<?php
include 'head.php';
	?>
	<div class="container spacing ">
	<h1 class="my-5"> Διαχείριση γιατρών </h1>
	<button class="btn btn-success" name="addBTN" onclick="window.location.href='addDoctorForm.php'"> Εγγραφή νέου Ιατρού
	</button>
	<br>
	<?php
		include '../config/functions.php';
		echo "<h3 class='my-5'> Αναζήτηση χειρουγίων βάση γιατορύ</h3>";
		echo listNameDoctorChoose();
	?>
	<br>
	<h1 class="my-5"> Χειρουργία Επικεφαλής</h1>
	<table class="table table-bordered table-hover" id="surgmain">
		<thead>
			<th>Τύπος</td>
			<th>Ημ. πραγματοποίησής</td>
			<th>Ευρήματα</td>
		</thead>
		<tr>
		
		</tr>
	</table>
	<br>
	<br>
	<h1 class="my-5"> Χειρουργία Σημετοχή</h1>
	<table class="table table-bordered table-hover" id="surgpar">
		<thead>
			<th>Τύπος</td>
			<th>Ημ. πραγματοποίησής</td>
			<th>Ευρήματα</td>
		</thead>
		<tr>
		
		</tr>
	</table>
	<br>
	<br>
	<table class="table table-bordered table-hover">
		<thead>
			<th>AMKA</td>
			<th>Όνομα</td>
			<th>Ημ.Γεν.</td>
			<th>Ειδικότητα</td>
			<th>Ενημέρωση</td>
			<th>Διαγραφή</td>
		</thead>
		<?php
		include_once ('../config/functions.php');
		$doctors = getDoctor();
		foreach ($doctors as $doctor) {
			echo "<tr>";
			echo "<th>" . $doctor["amka"] . "</th>" .
			"<td>" . $doctor["name"] . "</td>" .
			"<td>" . $doctor["born"] . "</td>" .
			"<td>" . $doctor["specialty"] . "</td>";
			echo '<td>' . '<form name="editForm" action="updateDoctorForm.php" method="POST">' .
			'<input type="hidden" value="' . $doctor["amka"] . '" name="amka"/>' .
			'<button type="submit" class="btn btn-primary" value ="Edit" name="editbtn">Edit</button> </form>' . "</td>" .

			'<td>' . '<form class="delete" name="deleteForm" action="deleteDoctor.php" method="POST">' .
			'<input type="hidden" value="' . $doctor["amka"] . '" name="amka"/>' .
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