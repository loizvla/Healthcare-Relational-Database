<?php
include 'head.php';
?>
<div class="container spacing ">
	<h1 class="my-5"> Εγγραφή ασθενούς </h1>
	<!-- registration form -->
	<div class="form-with-border">
		<form id="addForm" method="POST" action="addPatient.php">
			<h5 class="mb-4">Στοιχεία</h5>
			<div class="form-group">
						<label class="form-control-label" for="amka">AMKA :</label>
						<input type="text" class="form-control" id="amka" name="amka" required>
					</div>
			<div class="form-group">
						<label class="form-control-label" for="name">Όνομα :</label>
						<input type="text" class="form-control" id="name" name="name" required>
					</div>
					<div class="form-group">
						<label class="form-control-label" for="born">Ημ.Γεν:</label>
						<input type="date" class="form-control" id="born" name="born" required>
					</div>
					<div class="form-group">
						<label class="form-control-label" for="gender">Φύλο:</label>
						<input type="text" class="form-control" id="gender" name="gender" required>
					</div>
					<div class="form-group">
						<label class="form-control-label" for="insurance">Ασφάλεια:</label>
						<input type="text" class="form-control" id="insurance" name="insurance" >
					</div>
					<div class="form-group">
						<label class="form-control-label" for="current_disease">Τρέχουσα ασθένεια:</label>
						<input type="text" class="form-control" id="current_disease"  name="current_disease" >
					</div>
					<div class="form-group">
						<label class="form-control-label" for="allergies">Αλλεργίες:</label>
						<input type="text" class="form-control" id="allergies" name="allergies" required>
					</div>
					<div class="form-group">
						<label class="form-control-label" for="historian">Ιστορικό:</label>
						<input type="text" class="form-control" id="historian" name="historian" required>
					</div>
					<div class="form-group">
						<label class="form-control-label" for="medicines">Φάρμακα:</label>
						<input type="text" class="form-control" id="medicines" name="medicines" required>
					</div>
					<div class="form-group">
						<label class="form-control-label" for="current_situation">Τρέχουσα κατάσταση:</label>
						<input type="text" class="form-control" id="current_situation" name="current_situation" required>
					</div>
					
			<hr class="mb-4">
			<button type="submit" class="btn btn-primary btn-lg">Καταχώρηση</button>

		</form>
		<!-- /registration form -->
	</div>
	<?php
	include 'final.php';
	?>