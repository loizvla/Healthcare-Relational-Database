<?php
include 'head.php';
?>
<div class="container spacing ">
	<div class="form-with-border">
		<?php
		include_once ('../config/functions.php');
		if (isset($_POST["id"])) {

			$userToEdit = getSurgerybyId($_POST['id']);

			echo '<h3 class="text-center text-primary">Επεξεργασία λεπτομερειών χειρουργικής επέμβασης</h3>';
			echo '<form name="update" action="updateSurgery.php" method="POST">';
			echo  '<input type="hidden" value="' . $userToEdit[0]["id"] . '" name="id"/>';
			echo    '<div class="form-group">';
			echo    '<label for="description">Περιγραφή</label>';
			echo    '<input type="text"  class="form-control" value="' . $userToEdit[0]["description"] . '" name="description" required>';
			echo    ' <small id="nameHelp" class="form-text text-muted">Description</small>';
			echo    "</div>";
			echo   '<div class="form-group">';
			echo    '<label for="date_and_time">Η προγραμματισμένη ημερομηνία και ώρα διεξαγωγής</label>';
			echo  '<input type="datetime-local" class="form-control" value="' . $userToEdit[0]["date_and_time"] . '" name="date_and_time" required>';
			echo    "</div>";
			echo   '<div class="form-group">';
			echo    '<label for="report_practical">Έκθεση-πρακτικό των πεπραγμένων</label>';
			echo  '<input type="text" class="form-control" value="' . $userToEdit[0]["report_practical"] . '" name="report_practical" required>';
			echo    "</div>";
			echo    '<div class="form-group mt-3">';
			echo '<button type="submit" class="btn btn-primary text-right" value ="Save" name="savebtn">Save</button>';
			echo    "</div>";
			echo '</form>';
		} else echo 'Choose a Surgery to edit first';
		?>

	</div>
</div>
<?php
include 'final.php';
?>