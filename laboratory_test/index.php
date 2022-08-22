<?php
include 'head.php';
	?>
	<div class="container spacing ">
	<h1 class="my-5"> Εργαστηριακά τεστ </h1>
	<button class="btn btn-success" name="addBTN" onclick="window.location.href='addLaboratoryTestForm.php'"> Καταχώρηση νεου Εργαστηριακού τεστ
	</button>
	<table class="table table-bordered table-hover">
		<thead>
			<th>Τύπος</td>
			<th>Ημ. πραγματοποίησής</td>
			<th>Ευρήματα</td>
			<th>Ενημέρωση</td>
			<th>Διαγραφή</td>
		</thead>
		<?php
		include_once ('../config/functions.php');
		$tests = getLaboratoryTest();
		foreach ($tests as $test) {
			echo "<tr>";
			echo "<th>" . $test["type"] . "</th>" .
			"<td>" . $test["date_done"] . "</td>" .
			"<td>" . $test["finding"] . "</td>" ;
			echo '<td>' . '<form name="editForm" action="updateLaboratoryTestForm.php" method="POST">' .
			'<input type="hidden" value="' . $test["id"] . '" name="id"/>' .
			'<button type="submit" class="btn btn-primary" value ="Edit" name="editbtn">Edit</button> </form>' . "</td>" .

			'<td>' . '<form class="delete" name="deleteForm" action="deleteLaboratoryTest.php" method="POST">' .
			'<input type="hidden" value="' . $test["id"] . '" name="id"/>' .
			'<button type="submit" class="btn btn-danger" value="Delete" id="deletebtn" name="deletebtn">Delete</button> </form>' .
			'</td>';

			echo "</tr>";
		}
		?>
	</table>
	<br>
	<h1>Σήμερα</h1>
	<table class="table table-bordered table-hover">
		<thead>
		<th>Τύπος</td>
			<th>Ημ. πραγματοποίησής</td>
			<th>Ευρήματα</td>
			<th>Ενημέρωση</td>
			<th>Διαγραφή</td>
		</thead>
		<?php
		include_once ('../config/functions.php');
		$tests = getLaboratoryByDateTest();
		foreach ($tests as $test) {
			echo "<tr>";
			echo "<th>" . $test["type"] . "</th>" .
			"<td>" . $test["date_done"] . "</td>" .
			"<td>" . $test["finding"] . "</td>" ;
			echo '<td>' . '<form name="editForm" action="updateLaboratoryTestForm.php" method="POST">' .
			'<input type="hidden" value="' . $test["id"] . '" name="id"/>' .
			'<button type="submit" class="btn btn-primary" value ="Edit" name="editbtn">Edit</button> </form>' . "</td>" .

			'<td>' . '<form class="delete" name="deleteForm" action="deleteLaboratoryTest.php" method="POST">' .
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