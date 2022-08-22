<?php
include 'head.php';
	?>
	<div class="container spacing ">
	<h1 class="my-5"> Χειρουργικές επέμβασεις </h1>
	<button class="btn btn-success" name="addBTN" onclick="window.location.href='addSurgeryForm.php'"> Προσθήκη νέου Χειρουργίου
	</button>
	<table class="table table-bordered table-hover">
		<thead>
			<th>Περιγραφή</td>
			<th>Η προγραμματισμένη ημερομηνία και ώρα διεξαγωγής</td>
			<th>Έκθεση-πρακτικό των πεπραγμένων</td>
			<th>Ενημέρωση</td>
			<th>Διαγραφή</td>
		</thead>
		<?php
		include_once ('../config/functions.php');
		$surgeries = getSurgery();
		foreach ($surgeries as $surgery) {
			echo "<tr>";
			echo "<th>" . $surgery["description"] . "</th>" .
			"<td>" . $surgery["date_and_time"] . "</td>" .
			"<td>" . $surgery["report_practical"] . "</td>" ;
			echo '<td>' . '<form name="editForm" action="updateSurgeryForm.php" method="POST">' .
			'<input type="hidden" value="' . $surgery["id"] . '" name="id"/>' .
			'<button type="submit" class="btn btn-primary" value ="Edit" name="editbtn">Edit</button> </form>' . "</td>" .

			'<td>' . '<form class="delete" name="deleteForm" action="deleteSurgery.php" method="POST">' .
			'<input type="hidden" value="' . $surgery["id"] . '" name="id"/>' .
			'<button type="submit" class="btn btn-danger" value="Delete" id="deletebtn" name="deletebtn">Delete</button> </form>' .
			'</td>';

			echo "</tr>";
		}
		?>
	</table>
	<br>
	<h1>Χειρουργικές επέμβασεις σημέρα</h1>
	<table class="table table-bordered table-hover">
		<thead>
			<th>Περιγραφή</td>
			<th>Η προγραμματισμένη ημερομηνία και ώρα διεξαγωγής</td>
			<th>Έκθεση-πρακτικό των πεπραγμένων</td>
			<th>Ενημέρωση</td>
			<th>Διαγραφή</td>
		</thead>
		<?php
		include_once ('../config/functions.php');
		$surgeries = getSurgeryByDate();
		foreach ($surgeries as $surgery) {
			echo "<tr>";
			echo "<th>" . $surgery["description"] . "</th>" .
			"<td>" . $surgery["date_and_time"] . "</td>" .
			"<td>" . $surgery["report_practical"] . "</td>" ;
			echo '<td>' . '<form name="editForm" action="updateSurgeryForm.php" method="POST">' .
			'<input type="hidden" value="' . $surgery["id"] . '" name="id"/>' .
			'<button type="submit" class="btn btn-primary" value ="Edit" name="editbtn">Edit</button> </form>' . "</td>" .

			'<td>' . '<form class="delete" name="deleteForm" action="deleteSurgery.php" method="POST">' .
			'<input type="hidden" value="' . $surgery["id"] . '" name="id"/>' .
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