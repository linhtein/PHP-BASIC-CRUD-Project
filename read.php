<?php require_once "template/functions.php" ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-4">
			<?php include "sidebar.php"  ?>
		</div>
		<div class="col-lg-8">
			<h4 class="mb-2">User Lists </h4> 
			<hr>
			<table class="table table-hover table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Category Name</th>
						<th>Control</th>
						<th>Created</th>
					</tr>
				</thead>
				<tbody>
					<?php	
						foreach(readUser() as $row){
							
							$time = date("g:i A",strtotime($row['created_at']));
						
					?>
					<tr>
						<td><?php echo $row['id'] ?></td>
						<td><?php echo $row['message'] ?></td>
						<td>
							<a class="btn btn-sm btn-danger me-1" href='delete.php?id=<?php echo $row['id'] ?>'>Delete</a> 
							<a class="btn btn-sm btn-warning" href='update.php?id=<?php echo $row['id'] ?>'>Update</a> 
						</td>
						<td><?php echo $time ?></td>
					</tr>
					<?php 
						}
					?>
				</tbody>
			</table>
				
					
		</div>
</div>