<?php
include 'head.php';
?>
<div class="container spacing ">
	<div class="form-with-border">
		<h3 class="text-center text-primary">Εξιτήριο</h3>
		<form id="addForm" method="POST" action="addDischargePatient.php">
			<h5 class="mb-4">Στοιχεία</h5>
			<div class="form-group">
						<label class="form-control-label" for="output_diagnosis">Διάγνωση εξόδου :</label>
						<input type="text" class="form-control" id="output_diagnosis" name="output_diagnosis" required>
					</div>
					<div class="form-group">
						<label class="form-control-label" for="date_leave">Ημ.:</label>
						<input type="datetime-local" class="form-control" id="date_leave" name="date_leave" required>
					</div>
					<div class="form-group">
						<label class="form-control-label" for="medication">Φαρμακευτική αγωγή:</label>
						<input type="text" class="form-control" id="medication" name="medication" required>
					</div>
					<div class="form-group">
						<label class="form-control-label" for="activities_are_limited">Δραστηριοτήτες που πρέπει να περιοριστούν:</label>
						<input type="text" class="form-control" id="activities_are_limited" name="activities_are_limited" required>
					</div>
					<div class="form-group">
						<label class="form-control-label" for="description_of_symptoms">Περιγραφή των συμπτωμάτων:</label>
						<input type="text" class="form-control" id="description_of_symptoms" name="description_of_symptoms" required>
					</div>
			<hr class="mb-4">
			<button type="submit" class="btn btn-primary btn-lg">Καταχώρηση</button>

		</form>
		<!-- /registration form -->
	</div>
	<?php
	include 'final.php';
	?>