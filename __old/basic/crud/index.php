<?php
	require_once "function.php";

	$selectFormUser = "SELECT * FROM `emp_info`";
	$allUserInfo	= mysqli_query($conn, $selectFormUser);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="app.js"></script>
</head>
<body>
<div class="container-xl">
		<label><?php 
						if (isset($_GET["errorMass"])) {
							echo $_GET["errorMass"];
						}
						if (isset($_GET["suc"])) {
							echo $_GET["suc"];
						}
						if (isset($_GET["delsucc"])) {
							echo $_GET["delsucc"];
						}
						if (isset($_GET["dellAll"])) {
							echo $_GET["dellAll"];
						}
		?></label>
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Employees</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
						<a href="index.php?delAll" class="btn btn-danger"><i class="material-icons">&#xE15C;</i> <span>Delete All</span></a>						
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Address</th>
						<th>Phone</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($allUserInfo as $user) { ?>

						<tr>
							<td><?php echo ucwords($user["name"]);?></td>
							<td><?php echo ucwords($user["email"]);?></td>
							<td><?php echo ucwords($user["address"]);?></td>
							<td><?php echo ucwords($user["phone"]);?></td>
							<td>
								<a href="index.php?edit=<?= $user["id"]?>" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
								<a href="index.php?deleteId=<?= $user["id"]?>" class="delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
							</td>
						</tr>

					<?php	}?>

				</tbody>
			</table>
		</div>
	</div>        
</div>
<!-- Create Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
				<div class="modal-header">						
					<h4 class="modal-title">Add Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label for="name">Name</label>
						<input id="name" name="name" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" id="email" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label for="address">Address</label>
						<textarea id="address" name="address" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label for="phone">Phone</label>
						<input id="phone" name="phone" type="text" class="form-control">
					</div>				
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add" name="submit">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->

<?php

if (isset($_GET["edit"])) {

		$updateID = $_GET["edit"];
		$updateSelectedQuery = "SELECT * FROM `emp_info` WHERE id=$updateID";
		$queryConnectForUpdate = mysqli_query($conn,$updateSelectedQuery);
		$faceing	= mysqli_fetch_all($queryConnectForUpdate);
		
?>

<div id="editEmployeeModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="index.php" method="POST">
				<div class="modal-header">					
					<h4 class="modal-title">Edit Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<input type="hidden" name="hidden" value="<?= $_GET["edit"]; ?>">
						<label>Name</label>
						<input type="text" name="upName"  class="form-control" value="<?= $faceing[0][1];?>">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="upMail" class="form-control" value="<?= $faceing[0][2];?>">
					</div>
					<div class="form-group">
						<label>Address</label>
						<input type = "text" name="upAddress" class="form-control" value="<?= $faceing[0][3];?>"></textarea>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" name="upNum" class="form-control" value="<?= $faceing[0][4];?>">
					</div>					
				</div>
				<div class="modal-footer">
					<a href="index.php" type="button"  class="btn" data-dismiss="modal">Cancel</a>
					<input type="submit" name="save" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
<?php } ?>

</body>
</html>