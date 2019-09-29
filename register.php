<?php
session_start();
include 'Includes/header.php';
include 'Includes/navbar.php';
?>
<!--navbar--->
<!---Modelregister--->
<div class="modal fade" id="AddAdminProfiledata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header bg-primary">
				<h5 class="modal-title" id="exampleModalLabel">	Add Admin Profile</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="code.php" method="post">
					<div class="form-group">
						<label for="user">UserName:</label>
						<input type="text" id="user" name="user" placeholder="Enter the name" class="form-control">
					</div>
					<div class="form-group">
						<label for="email">UserEmail:</label>
						<input type="text" id="email" name="email" placeholder="Enter the Email" class="form-control">
					</div>
					<div class="form-group">
						<label for="password">Password:</label>
						<input type="text" name="pass" placeholder="Enter the Password" class="form-control">
					</div>
					<div class="form-group">
						<label for="cnfP">ConfirmPassword:</label>
						<input type="text" id="cnfPass" name="cnfpass" placeholder="Enter the Confirm Password" class="form-control">
					</div>
					<div class="modal-footer">
						<button class="btn btn-danger" data-dismiss="modal">Close</button>
						<button type="submit" name="register" class="btn btn-success">Register</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!----dataTable--->
<div id="content-wrapper" class="d-flex flex-column">
	<!-- Main Content -->
	<div id="content">
		<!-- Topbar -->
		<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
			<!-- Sidebar Toggle (Topbar) -->
			<button id="sidebarToggleTop" class="btn btn-link d-md-none 