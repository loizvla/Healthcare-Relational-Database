<?php
include 'head.php';
?>
<div class="container spacing ">
	<!-- registration form -->
	<div class="form-with-border">
		<h3 class="text-center text-primary">Καταχώρηση Ιατρού</h3>
		<form id="addForm" method="POST" action="addDoctor.php">
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
						<label class="form-control-label" for="born">Ημ. Γεν:</label>
						<input type="date" class="form-control" id="born" name="born" required>
					</div>
					<div class="form-group">
						<label class="form-control-label" for="specialty">Ειδικότητα:</label>
						<input type="text" class="form-control" id="specialty" name="specialty" required>
					</div>
					<hr class="mb-4">
			<button type="submit" class="btn btn-primary btn-lg">Καταχώρηση</button>

		</form>
		<!-- /registration form -->
	</div>
	<?php
	include 'final.php';
	?>