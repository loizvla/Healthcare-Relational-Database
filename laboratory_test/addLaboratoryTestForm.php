<?php
include 'head.php';
?>
<div class="container spacing ">
	<div class="form-with-border">
		<h3 class="text-center text-primary">Προσθήκη εργαστηριακού τεστ</h3>
		<form id="addForm" method="POST" action="addLaboratoryTest.php">
			<h5 class="mb-4">Βασικές πληροφορίες</h5>
			<div class="form-group">
						<label class="form-control-label" for="type">Τύπος :</label>
						<input type="text" class="form-control" id="type" name="type" required>
					</div>
					<div class="form-group">
						<label class="form-control-label" for="date_done">Ημ. πραγματοποίησής:</label>
						<input type="datetime-local" class="form-control" id="date_done" name="date_done" required>
					</div>
					<div class="form-group">
						<label class="form-control-label" for="finding">Ευρήματα:</label>
						<input type="text" class="form-control" id="finding" name="finding" required>
					</div>
			<hr class="mb-4">
			<button type="submit" class="btn btn-primary btn-lg">Καταχώρηση</button>

		</form>
		<!-- /registration form -->
	</div>
	<?php
	include 'final.php';
	?>