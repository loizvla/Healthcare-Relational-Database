<?php
include 'head.php';
?>
<div class="container spacing ">
	<div class="form-with-border">
		<h3 class="text-center text-primary">Προσθήκη Χειρουργίου</h3>
		<form id="addForm" method="POST" action="addSurgery.php">
			<h5 class="mb-4">Βασικές πληροφορίες</h5>
			<div class="form-group">
						<label class="form-control-label" for="type">Περιγραφή :</label>
						<input type="text" class="form-control" id="description" name="description" required>
					</div>
					<div class="form-group">
						<label class="form-control-label" for="date_and_time">Η προγραμματισμένη ημερομηνία και ώρα διεξαγωγής:</label>
						<input type="datetime-local" class="form-control" id="date_and_time" name="date_and_time" required>
					</div>
					<div class="form-group">
						<label class="form-control-label" for="report_practical">Έκθεση-πρακτικό των πεπραγμένων:</label>
						<input type="text" class="form-control" id="report_practical" name="report_practical" required>
					</div>
			<hr class="mb-4">
			<button type="submit" class="btn btn-primary btn-lg">Καταχώρηση</button>

		</form>
		<!-- /registration form -->
	</div>
	<?php
	include 'final.php';
	?>