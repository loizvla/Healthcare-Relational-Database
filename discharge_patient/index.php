<?php
include 'head.php';
	?>
	<div class="container spacing ">
	<h1 class="my-5"> Εξιτήρια </h1>
	<button class="btn btn-success" name="addBTN" onclick="window.location.href='addDischargePatientForm.php'"> Νέο Εξιτήριο
	</button>
	<table class="table table-bordered table-hover">
		<thead>
			<th>Διάγνωση εξόδου</td>
			<th>Ημ.</td>
			<th>Φαρμακευτική αγωγή</td>
			<th>Δραστηριοτήτες που πρέπει να περιοριστούν</td>
			<th>Περιγραφή των συμπτωμάτων</td>
			<th>Ενημέρωση</td>
			<th>Διαγραφή</td>
		</thead>
		<?php
		include_once ('../config/functions.php');
		$tests = getDischargePatient();
		foreach ($tests as $test) {
			echo "<tr>";
			echo "<th>" . $test["output_diagnosis"] . "</th>" .
			"<td>" . $test["date_leave"] . "</td>" .
			"<td>" . $test["medication"] . "</td>".
			"<td>" . $test["activities_are_limited"] . "</td>".
			"<td>" . $test["description_of_symptoms"] . "</td>" ;
			echo '<td>' . '<form name="editForm" action="updateDischargePatientForm.php" method="POST">' .
			'<input type="hidden" value="' . $test["id"] . '" name="id"/>' .
			'<button type="submit" class="btn btn-primary" value ="Edit" name="editbtn">Edit</button> </form>' . "</td>" .

			'<td>' . '<form class="delete" name="deleteForm" action="deleteDischargePatient.php" method="POST">' .
			'<input type="hidden" value="' . $test["id"] . '" name="id"/>' .
			'<button type="submit" class="btn btn-danger" value="Delete" id="deletebtn" name="deletebtn">Delete</button> </form>' .
			'</td>';

			echo "</tr>";
		}
		?>
	</table>
	<br>
	<h1>Σημερινά</h1>
	<table class="table table-bordered table-hover">
		<thead>
		<th>Διάγνωση εξόδου</td>
			<th>Ημ.</td>
			<th>Φαρμακευτική αγωγή</td>
			<th>Δραστηριοτήτες που πρέπει να περιοριστούν</td>
			<th>Περιγραφή των συμπτωμάτων</td>
			<th>Ενημέρωση</td>
			<th>Διαγραφή</td>
		</thead>
		<?php
		include_once ('../config/functions.php');
		$tests = getDischargePatientByDate();
		foreach ($tests as $test) {
			echo "<tr>";
			echo "<th>" . $test["output_diagnosis"] . "</th>" .
			"<td>" . $test["date_leave"] . "</td>" .
			"<td>" . $test["medication"] . "</td>".
			"<td>" . $test["activities_are_limited"] . "</td>".
			"<td>" . $test["description_of_symptoms"] . "</td>" ;
			echo '<td>' . '<form name="editForm" action="updateDischargePatientForm.php" method="POST">' .
			'<input type="hidden" value="' . $test["id"] . '" name="id"/>' .
			'<button type="submit" class="btn btn-primary" value ="Edit" name="editbtn">Edit</button> </form>' . "</td>" .

			'<td>' . '<form class="delete" name="deleteForm" action="deleteDischargePatient.php" method="POST">' .
			'<input type="hidden" value="' . $test["id"] . '" name="id"/>' .
			'<button type="submit" class="btn btn-danger" value="Delete" id="deletebtn" name="deletebtn">Delete</button> </form>' .
			'</td>';

			echo "</tr>";
		}
		?>
	</table>
</div>



	<?php
	include 'final.php';
?>