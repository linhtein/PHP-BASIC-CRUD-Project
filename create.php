<?php
require_once "template/functions.php";

echo "<pre>";
	if(isset($_GET['addBtn'])){
			createUser();
	}
echo "</pre>";
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-4">
			<?php include "sidebar.php"  ?>
		</div>

		<div class="col-lg-4">
			<form action="" method="get" >
				<div class="form-check-inline">
					<label for="message" class="form-label">CREATE NEW USER</label>
					<input type="text" name="message" id="message" class="form-control d-inline-block mb-3" >
					<button name="addBtn" class="btn btn-primary px-3">Add</button>
				</div>
			</form>
		</div>
	</div>
</div>
