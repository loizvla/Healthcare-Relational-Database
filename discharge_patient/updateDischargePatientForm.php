<?php
include 'head.php';
?>
<div class="container spacing ">
	<h1 class="my-5"> Διαχείριση Εξιτηρίων </h1>
	<div class="form-with-border">
		<?php
		include_once ('../config/functions.php');
		if (isset($_POST["id"])) {

			$userToEdit = getDischargePatientbyId($_POST['id']);

			echo '<h3 class="text-center text-primary">Edit Discharge Patient Details</h3>';
			echo '<form name="update" action="updateDischargePatient.php" method="POST">';
			echo  '<input type="hidden" value="' . $userToEdit[0]["id"] . '" name="id"/>';
			echo    '<div class="form-group">';
			echo    '<label for="output_diagnosis">Διάγνωση εξόδου</label>';
			echo    '<input type="text"  class="form-control" value="' . $userToEdit[0]["output_diagnosis"] . '" name="output_diagnosis" required>';
			echo    ' <small id="nameHelp" class="form-text text-muted">Output Diagnosis</small>';
			echo    "</div>";
			echo   '<div class="form-group">';
			echo    '<label for="date_leave">Ημ.</label>';
			echo  '<input type="datetime-local" class="form-control" value="' . $userToEdit[0]["date_leave"] . '" name="date_leave" required>';
			echo    "</div>";
			echo   '<div class="form-group">';
			echo    '<label for="medication">Φαρμακευτική αγωγή</label>';
			echo  '<input type="text" class="form-control" value="' . $userToEdit[0]["medication"] . '" name="medication" required>';
			echo    "</div>";
			echo   '<div class="form-group">';
			echo    '<label for="activities_are_limited">Δραστηριοτήτες που πρέπει να περιοριστούν</label>';
			echo  '<input type="text" class="form-control" value="' . $userToEdit[0]["activities_are_limited"] . '" name="activities_are_limited" required>';
			echo    "</div>";
			echo   '<div class="form-group">';
			echo    '<label for="description_of_symptoms">Περιγραφή των συμπτωμάτων</label>';
			echo  '<input type="text" class="form-control" value="' . $userToEdit[0]["description_of_symptoms"] . '" name="description_of_symptoms" required>';
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