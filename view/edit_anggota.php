<!DOCTYPE html>
<html lang="en">
<?php $thisPage = "dashboard"; ?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="../img/logo2.png" />

	<title>Input Data Tabel Tera Ulang</title>

	<link href="../css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			
		<!-- memanggil SidebarMenu -->
		<?php
		include '../asset/sidebar_menu.php';
		?>
		</nav>
		<!-- main -->
		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle d-flex">
          <i class="hamburger align-self-center"></i>
        </a>

				<form class="d-none d-sm-inline-block">
					<div class="input-group input-group-navbar">

						<input type="text" class="form-control" placeholder="Search…" aria-label="Search">
						<button class="btn" type="button">
              <i class="align-middle" data-feather="search"></i>
            </button>
					</div>
				</form>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator">4</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-danger" data-feather="alert-circle"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-warning" data-feather="bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-primary" data-feather="home"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from 192.186.1.8</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-success" data-feather="user-plus"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">Christina accepted your request.</div>
												<div class="text-muted small mt-1">14h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="message-square"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">
										4 New Messages
									</div>
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Vanessa Tucker</div>
												<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
												<div class="text-muted small mt-1">15m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="William Harris">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">William Harris</div>
												<div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Christina Mason">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Christina Mason</div>
												<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
												<div class="text-muted small mt-1">4h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="../img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Sharon Lessman</div>
												<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all messages</a>
								</div>
							</div>
						</li>
						<!-- topbar menu-->
						<?php
						include '../asset/top-menu.php'
						?>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">
					
					<h1 class="h3 mb-3">Form Ubah Data Petugas</h1>
					<div class="row">
						<div class="col-12">
							<div class="card">
								
						
					<div class="row">
					<div class='col-12 col-md-6'>
						<div class="card">
							
							<div class="card-body">
							<form action="../asset/aksi_tabel_tera/edit_anggota.php" method="POST">
							<?php      
		include '../asset/koneksi.php';
		$id=$_GET['id'];
		$query = "SELECT * FROM tbl_petugas where kode_petugas='$id'";
		$result = mysqli_query($link, $query);
		//mengecek apakah ada error ketika menjalankan query
		if(!$result){
		  die ("Query Error: ".mysqli_errno($link).
			 " - ".mysqli_error($link));
		}
  
		//buat perulangan untuk element tabel dari data mahasiswa
		$no = 1; //variabel untuk membuat nomor urut
		// hasil query akan disimpan dalam variabel $data dalam bentuk array
		// kemudian dicetak dengan perulangan while
		while($data = mysqli_fetch_assoc($result))
		{
			?>
									<div class="form-group mb-3">
										<label class="form-label">ID Petugas</label>
										<input type="text" name="id_petugas" id="tanggal" class="form-control" value="<?php echo $data['kode_petugas'] ?>" ReadOnly>
										<small>* kode Petugas diisi Otomatis</small>
									</div>
									<div class="form-group mb-3">
                                        <label for="petugas mb-3" class=" form-control-label">Nama Petugas</label>
                                    	<input type="text" name="nm_petugas" id="petugas" class="form-control" value="<?php echo $data['nm_petugas'] ?>">
										
                                    </div>
                                        
                                        <div class="form-group mb-3">
        								<label for="alamat" class=" form-control-label">Alamat</label>
                                        <textarea name="alamat" id="alamat" class="form-control" ><?php echo $data['alamat'] ?></textarea>
                                    </div>
									<div class="form-group mb-3">
                                    	<label for="nama" class=" form-control-label">Jenis Kelamin</label>
                                       <select name="gender" class="form-control" >
									   <option> <?php echo $data['gender'] ?> </option>
									   <option> Laki - Laki </option>
									   <option> Perempuan </option>
									   </select>
                                    </div>
									
							</div>
						</div>
						</div>	
						<div class='col-12 col-md-6 '>
						<div class="card">
							<div class="card-body">
										<div class="form-group mb-3">
                                        <label for="jenisuttp" class=" form-control-label">No Kontak</label>
                                        <input type="text" name="no_kontak" id="jenisuttp" class="form-control" value="<?php echo $data['telp'] ?>">        
                                    </div>
                                   		<div class="form-group mb-3">
                                        <label for="kekuatan" class=" form-control-label">Jabatan</label>
                                        <input type="text" name="jabatan" id="kekuatan" class="form-control" value="<?php echo $data['jabatan'] ?>" > 
									</div>
                                    
							</div>
							<div class="card-body">
							<button type="reset" name="s" class="btn btn-medium btn-info" value="Reset Form"><i class="align-middle me-1" data-feather="rotate-ccw"></i>Reset</button>
                            <input type="submit" name="ubah" class="btn btn-primary" value="Ubah Data">
							</div>
						
						<?php } ?>
						</form>
						</div>
						</div>
							</div>
						</div>
					</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a href="index.html" class="text-muted"><strong>AdminKit Demo</strong></a> &copy;
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="#">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="../js/app.js"></script>

</body>

</html>