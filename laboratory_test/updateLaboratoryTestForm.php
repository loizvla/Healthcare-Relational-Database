<?php
include 'head.php';
?>
<div class="container spacing ">
	<h1 class="my-5"> Διαχείριση εργαστηριακών Test </h1>
	<div class="form-with-border">
		<?php
		include_once ('../config/functions.php');
		if (isset($_POST["id"])) {

			$userToEdit = getLaboratoryTestbyId($_POST['id']);

			echo '<h3 class="text-center text-primary">Edit Laboratory Test Details</h3>';
			echo '<form name="update" action="updateLaboratoryTest.php" method="POST">';
			echo  '<input type="hidden" value="' . $userToEdit[0]["id"] . '" name="id"/>';
			echo    '<div class="form-group">';
			echo    '<label for="type">Τύπος</label>';
			echo    '<input type="text"  class="form-control" value="' . $userToEdit[0]["type"] . '" name="type" required>';
			echo    ' <small id="nameHelp" class="form-text text-muted">Type</small>';
			echo    "</div>";
			echo   '<div class="form-group">';
			echo    '<label for="date_done">Ημ. πραγματοποίησής</label>';
			echo  '<input type="datetime-local" class="form-control" value="' . $userToEdit[0]["date_done"] . '" name="date_done" required>';
			echo    "</div>";
			echo   '<div class="form-group">';
			echo    '<label for="finding">Ευρήματα</label>';
			echo  '<input type="text" class="form-control" value="' . $userToEdit[0]["finding"] . '" name="finding" required>';
			echo    "</div>";
			echo    '<div class="form-group mt-3">';
			echo '<button type="submit" class="btn btn-primary text-right" value ="Save" name="savebtn">Καταχώρηση</button>';
			echo    "</div>";
			echo '</form>';
		} else echo 'Choose a Laboratory Test to edit first';
		?>

	</div>
</div>
<?php
include 'final.php';
?>