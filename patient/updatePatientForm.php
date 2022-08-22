<?php
include 'head.php';
?>
<div class="container spacing ">
	<h1 class="my-5"> Ενημέρωση ασθενούς </h1>
	<div class="form-with-border">
		<?php
		include_once ('../config/functions.php');
		if (isset($_POST["amka"])) {

			$userToEdit = getPatientById($_POST['amka']);

			echo '<h3 class="text-center text-primary">Επεξεργασία λεπτομερειών ασθενούς</h3>';
			echo '<form name="update" action="updatePatient.php" method="POST">';
			echo  '<input type="hidden" value="' . $userToEdit[0]["amka"] . '" name="amka"/>';
			echo    '<div class="form-group">';
			echo    '<label for="name">Όνομα</label>';
			echo    '<input type="text"  class="form-control" value="' . $userToEdit[0]["name"] . '" name="name" required>';
			echo    "</div>";
			echo   '<div class="form-group">';
			echo    '<label for="email">Ημ. Γεν.</label>';
			echo  '<input type="date" class="form-control" value="' . $userToEdit[0]["born"] . '" name="born" required>';
			echo    "</div>";
			echo   '<div class="form-group">';
			echo    '<label for="firstname">Φύλο</label>';
			echo  '<input type="text" class="form-control" value="' . $userToEdit[0]["gender"] . '" name="gender" required>';
			echo    "</div>";
			echo   '<div class="form-group">';
			echo    '<label for="lastname">Ασφάλεια</label>';
			echo  '<input type="text" class="form-control" value="' . $userToEdit[0]["insurance"] . '" name="insurance" required>';
			echo    "</div>";
			echo   '<div class="form-group">';
			echo    '<label for="address">Τρέχουσα ασθένεια</label>';
			echo  '<input type="text" class="form-control" value="' . $userToEdit[0]["current_disease"] . '" name="current_disease" required>';
			echo    "</div>";
			echo   '<div class="form-group">';
			echo    '<label for="city">Αλλεργίες</label>';
			echo  '<input type="text" class="form-control" value="' . $userToEdit[0]["allergies"] . '" name="allergies" required>';
			echo    "</div>";
			echo   '<div class="form-group">';
			echo    '<label for="city">Ιστορικό</label>';
			echo  '<input type="text" class="form-control" value="' . $userToEdit[0]["historian"] . '" name="historian" required>';
			echo    "</div>";
			echo   '<div class="form-group">';
			echo    '<label for="city">Φάρμακα</label>';
			echo  '<input type="text" class="form-control" value="' . $userToEdit[0]["medicines"] . '" name="medicines" required>';
			echo    "</div>";
			echo   '<div class="form-group">';
			echo    '<label for="city">Τρέχουσα κατάσταση</label>';
			echo  '<input type="text" class="form-control" value="' . $userToEdit[0]["current_situation"] . '" name="current_situation" required>';
			echo    "</div>";
			echo    '<div class="form-group mt-3">';
			echo '<button type="submit" class="btn btn-primary text-right" value ="Save" name="savebtn">Καταχώρηση</button>';
			echo    "</div>";
			echo '</form>';
		} else echo 'Choose a patient to edit first';
		?>

	</div>
</div>
<?php
include 'final.php';
?>