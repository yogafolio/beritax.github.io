<!DOCTYPE html>
<html>
<head>
	<title>CRUD ONE PAGE APPLICATION</title>
	<!-- Bootstrap CSS -->
<!--     <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css"/> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="assets/css/custom.css">	
</head>
<body>
<div class="container">
<h3>Menghapus rekaman data sekaligus dari database menggunakan PHP</h3>
<a href="javascript:void(0);" data-toggle="modal" data-target="#myModal" class="btn btn-primary pull-right bottom-gap">Tambah Baru<i class="fa fa-plus" aria-hidden="true"></i></a>
<table class="table table-bordered">
	<thead id="thead">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Contact</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody id="crudData"></tbody>
</table>
</div>
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">CRUD Application Form</h4>
			</div>
			<div class="modal-body">
				<form id="crudAppForm">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="name">Name <span class="field-required">*</span></label>
									<input type="text" name="name" id="name" placeholder="Name" class="form-control">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="email">Email <span class="field-required">*</span></label>
									<input type="text" name="email" id="email" placeholder="Email" class="form-control">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="contact">Contact <span class="field-required">*</span></label>
									<input type="text" name="contact" id="contact" placeholder="Contact" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<input type="hidden" name="editId" id="editId" value=""/>
								<button type="submit" name="submitBtn" id="submitBtn" class="btn btn-primary"><i class="fa fa-spinner fa-spin" id="spinnerLoader"></i><span id="buttonLabel">Save</span></button>
							</div>
						</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- <script src="assets/js/jquery.min.js"></script>
 --><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="crud-app.js"></script>
<!-- <script src="assets/js/bootstrap.min.js"></script>
 --><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>