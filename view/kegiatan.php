<!DOCTYPE html>
<html lang="en">
<?php $thisPage = "Kegiatan"; ?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="../img/logo2.png" />

	<?php echo "<title>$thisPage</title>"; ?>
	<link href="../css/style.css" rel="stylesheet">
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
		<p class="mb-0">
		
		<a href="#popup"><button type="submit"  class="btn btn-primary">+ Tambah Kegiatan</button></a>
		</p>

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
					
					<h1 class="h3 mb-3">Kegiatan</h1>

					<div class="row">
				<!--sdfsd-->
				<?php
				include '../asset/koneksi.php';
      $query = "SELECT * FROM kegiatan ORDER BY id_kegiatan DESC";
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
						echo"<div class='col-12 col-md-6 col-lg-4'>
							<div class='card'>";
								echo'<img class="card-img-top" src="../gambar/'.$data['gambar'].'" alt="Unsplash">';
								echo'<div class="card-header">
									<h5 class="card-title mb-0"><i class="align-middle me-1" data-feather="map-pin"></i><strong>'.$data['tempat'].'</strong></h5>
								</div>
								<div class="card-body">
									<p class="card-text">'.$data['keterangan'].'</p>';
								echo'<a href="../asset/aksi_tabel_tera/hapus_kegiatan.php?id_kegiatan='.$data['id_kegiatan'].'"
            						onclick="return confirm(\'Anda yakin akan menghapus data?\')<button type="button" class="card-link">
                                    <i class="align-middle me-1" data-feather="trash-2"></i>&nbsp;</button></a>
								    <div align="right"><a href="#" class="card-link"><i class="align-middle me-1" data-feather="calendar"></i> '.$data['tanggal'].'</a></div>
								</div>
							</div>
						</div>';
				  }
			?>
				</div>
	</div>		
		<div id="popup">
			<div class="window">
				<a href="#" class="close-button" title="Close">X</a>
				
				<h1 class="h3 mb-3">Form Input Data</h1>
				<div class="card">
				<form id='formtable' action="../asset/aksi_tabel_tera/proses_input_kegiatan.php" method="post" enctype="multipart/form-data">
									<div class="form-group mb-3">
										<label class="form-label">Tanggal</label>
										<input type="date" name="tanggal" id="tanggal" class="form-control"required>
									</div>
									
									<div class="form-group mb-3">
        								<label for="alamat" class=" form-control-label">Tempat</label>
                                        <textarea name="tempat" id="tempat" class="form-control" required></textarea>
                                    </div>
									<div class="form-group mb-3">
                                        <label for="petugas mb-3" class=" form-control-label">Keterangan</label>
                                    	<textarea type="text" name="ket" id="ket" class="form-control"required>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</textarea>
                                    </div>
                                        <div class="form-group mb-3">
                                    	<label for="nama" class=" form-control-label">Upload Photo</label>
										<input type="file" name="foto" required="required" class="form-control">
                                    </div>
									
									<div class="form-group mb-3">
									<button type="submit" name="input" class="btn btn-primary"><i class="align-middle me-1" data-feather="save"></i> Simpan</button>
                                    </div>
				</form>
				</div>
			
		</div>
		</div>
	
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a href="#popup"><button type="submit" class="btn btn-primary">+ Tambah Data</button>
							</p>
						</div>
					
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="../js/app.js"></script>

</body>

</html>