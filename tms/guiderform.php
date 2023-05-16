

<html>
<head>
<title>Login page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<!-- RegisterButton 2-->
<div class="container jumbotron text-center">
    <h3>Guiders Can Register Here..!</h3>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#loginModal">Click Here</button>
</div>

<div class="modal fade" role="dialog" id="loginModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="model-title">Guider Registration Form</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

			<form action="insertcodeguider.php" method="POST">
				<div class="modal-body">
					<div class="form-group">
						<input type="text" name="name" class="form-control" placeholder="Your name">
					</div>
					<div class="form-group">
						<input type="email" name="emailid" class="form-control" placeholder="Your E-mail">
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Your password">
					</div>
					
				</div>

				<div class="modal-footer">
					<button type="submit" name="insertdata" class="btn btn-success">Register</button>
				</div>
			</form>

        </div>
    </div>
</div>
<!-- /RegisterButton -->
	

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>


</body>

</html>