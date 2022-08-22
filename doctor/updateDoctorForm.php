<?php
include 'head.php';
?>
<div class="container spacing ">
	<h1 class="my-5"> Ενημέρωση Γιατρού </h1>
	<div class="form-with-border">
		<?php
		include_once ('../config/functions.php');
		if (isset($_POST["amka"])) {

			$userToEdit = getPatientById($_POST['amka']);

			echo '<h3 class="text-center text-primary">Επεξεργασία λεπτομερειών ιατρού</h3>';
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
			echo    '<label for="specialty">Ειδικότητα</label>';
			echo  '<input type="text" class="form-control" value="' . $userToEdit[0]["specialty"] . '" name="specialty" required>';
			echo    "</div>";
			echo    '<div class="form-group mt-3">';
			echo '<button type="submit" class="btn btn-primary text-right" value ="Save" name="savebtn">Save</button>';
			echo    "</div>";
			echo '</form>';
		} else echo 'Choose a patient to edit first';
		?>

	</div>
</div>
<?php
include 'final.php';
?>