<?php
require_once "template/functions.php";

$row = readOneUser($_GET['id']);


echo "<pre>";
	if(isset($_GET['updateBtn'])){
		updateUser();
	}
	
echo "</pre>";
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-4">
			<?php include "sidebar.php"  ?>
		</div>
		<div class="col-lg-4">
			<form action="" method="get">
				<div class="form-inline">
					<label for="updateUser" class="form-label">UPDATE USER</label>
					<input type="hidden" name="id" class="form-control" value="<?php echo $row['id'] ?>">
					<input type="text" class="mb-3 form-control" id="updateUser" name="message" value="<?php echo $row['message'] ?>">
					<button name="updateBtn" class="btn btn-outline-success btn-sm" >Update</button>
				</div>
			</form>
		</div>
</div>

