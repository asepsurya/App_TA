<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="../img/icons/icon-48x48.png" />

	<title>Sign In | UPTD KOTA BANJAR</title>
	<style>
	body{
            background-image: url('../img/4853433.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: 100%;
        }
	</style>

	<link href="../css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="card sm-9">
							<div class="card-body">
								<div class="m-sm-50">
									<div class="text-center">
										<img src="../img/avatars/logo1.png" alt="Charles Hall" class="img-fluid rounded-circle" width="132" height="132" />
										<div class="card-header">
										<h1 class="h2">UPTD METROLOGI LEGAL <br>KOTA  BANJAR</h1>
										</div>
									</div>
									<form role="form" action="../asset/cek_login.php" method="post">
										<div class="mb-3">
											<label class="form-label">Username</label>
											<input class="form-control form-control-lg" name="username" placeholder="Enter your email" required="required" />
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" id="myInput" name="password" placeholder="Enter your password" required="required" />
											
											<small> <a href="pages-reset-password.html">Forgot password?</a>
         									 </small>
										</div>
										<!-- php -->
							<?php 
    						if(isset($_GET['pesan'])){
        						if($_GET['pesan']=="gagal"){
           					 	echo "<div class='alert alert-danger alert-dismissible' role='alert'>
									<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
									<div class='alert-message'>
										<strong>PERHATIAN!</strong> Mohon Periksa Kembali Username dan <br>Password Anda.
									</div>
								</div>";
        						}
    						}
    						?>
										<div>
											<label class="form-check">
            <input class="form-check-input" type="checkbox" value="remember-me" name="remember-me" onclick="myFunction()">
            <span class="form-check-label">
              Show Password
            </span>
          </label>
										</div>
										<div class="text-center mt-3">
											<button type="submit" class="btn btn-lg btn-primary">Sign in</a>
											<!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>
	<script>
	function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
	<script src="../js/app.js"></script>

</body>

</html>