<!DOCTYPE html>
<html lang="en">
<?php $thisPage = "Tabel Tera Ulang"; ?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />

	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="../img/logo2.png" />

	<?php echo "<title>$thisPage</title>"; ?>

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
        		<a href="input_tabel.php"><button type="submit" class="btn btn-primary">+ Tambah Data</button></a>
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
					
					
						<div class="col-12">
							<div class="card">
								<!-- Cari Data -->
							<div class="card-body">	
						<form class="d-none d-sm-inline-block">
					<div class="input-group input-group-navbar">
						<input type="text" class="form-control" placeholder="Cari Nama Pemilik..." aria-label="Search"  id="myInput" onkeyup="myFunction()">
						<button class="btn" type="button">
             			<i class="align-middle" data-feather="search"></i>
           				</button>
					</div>
						
					</div>
								<div class="a">
								<div class="card-body">
								<div class="row">
							<div class="card flex-fill">
								<div style="overflow-x:auto;">
								<table class="table table-hover my-0 " id="myTable">
									<thead>
										<tr>
											
											
											<th >No.</th>
											<th>Tanggal</th>
											<th >Nama Petugas</th>
											<th>Nama Pemilik</th>
											<th>Alamat</th>
											<th>Jenis UTTP</th>
											<th >No Seri</th>
											<th >Kekuatan
											</th>
											<th >Hasil Pengecekan</th>
											<th>Kualitas</th>
											
											<th></th>
											
											
										</tr>
									</thead>
									<tbody>
									<?php
									include '../asset/koneksi.php';
     								$query = "SELECT * FROM tbl_pengecekan";
      								$result = mysqli_query($link, $query);
									//mengecek apakah ada error ketika menjalankan query
									 if(!$result){
       								 die ("Query Error: ".mysqli_errno($link).
           							" - ".mysqli_error($link));
      }

      
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($data = mysqli_fetch_assoc($result))
      {
        $kk= $data['hasil_pengecekan'];
                  
      // mencetak / menampilkan data
        echo "<tr>";
	
		
        echo "<td>$no</td>"; //menampilkan no urut
		echo "<td>$data[tanggal]</td>"; //menampilkan data jenisuttp
        echo "<td >$data[nm_petugas]</td>";
		echo '<td><a href="pemeriksaan.php?id='.$data['no'].'&tanggal='.$data['tanggal'].'&alat='.$data['jenisuttp'].'&nm_petugas='.$data['nm_petugas'].'">'.$data['nm_pemilik'].'</td>';
        echo "<td >$data[alamat]</td>"; //menampilkan data alamat
		echo "<td>$data[jenisuttp]</td>"; //menampilkan data utp
        echo "<td>$data[noseri]</td>"; //menampilkan data noseri
        echo "<td>$data[standar_kekuatan]</td>"; //menampilkan data kekuata
        echo "<td>$data[hasil_pengecekan]</td>";
        $standar=50; 
        if ($kk == $standar){
			echo "<td><span class='badge bg-success'><i class='align-middle me-1' data-feather='alert-circle'></i> Baik </span></td>";
        }else{
            echo "<td><span class='badge bg-danger'><i class='align-middle me-1' data-feather='alert-triangle'></i> Buruk</span></td>";
        }
       echo '<td class="d-none d-xl-table-cell ">
		  <div class="btn-group btn-group-sm mb-3" role="group" aria-label="Small button group">
		  <a href="edit_tabel.php?id='.$data['no'].'" class="btn btn-primary">Edit</a>
		  <a href="../asset/aksi_tabel_tera/hapus_table.php?id='.$data['no'].'" class="btn btn-danger"> <i class="align-middle me-1" data-feather="trash-2"></i></a>
		  <a href="../laporan/laporan.php?id='.$data['no'].'" class="btn btn-success"> <i class="align-middle me-1" data-feather="printer"></i></a>
        </td>';
        echo "</tr>";

        $no++; // menambah nilai nomor urut
      }
	  /* 
	    <a href="edit_tabel.php?id='.$data['no'].'"><button type="button" class="btn  "> 
		  <i class="align-middle me-1" data-feather="edit-3"></i></button></a>
	  <td><a href="../laporan/laporan.php?id='.$data['no'].'" name="cetak" class="btn btn-default"><i class="align-middle me-1" data-feather="printer"></i></a></td>';
	  */
      ?>
	  </form>
		</form>
	  <div class="col-12 col-lg-6">
	  
		</tbody>
		</table>
											</div>
										</div>
									</div>
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
	
	<script type="text/javascript">
 	$(document).ready(function() {
     $('#uttp').select2({
      placeholder: 'Pilih UTTP',
      allowClear: true
     });
 });
</script>
	<!-- untuk filter -->
	<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>

</html>