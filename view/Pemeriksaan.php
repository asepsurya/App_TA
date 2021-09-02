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

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="../img/icons/icon-48x48.png" />

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
        		<a href="#popup"><button type="submit" class="btn btn-primary"><i class='align-middle me-1' data-feather='search'></i>Tambah Data</button></a>
				<form class="d-none d-sm-inline-block">
					<div class="input-group input-group-navbar">
						<input type="text" class="form-control" placeholder="Search…" aria-label="Search"  id="myInput" onkeyup="myFunction()">
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
					
					<h1 class="h3 mb-3">Data Pemeriksaan</h1>
					
					<div class="row">
						<div class="col-12">
							<div class="card">
								
								<div class="card-body">
								<div class="row">
						
							<div class="card flex-fill">
								<div class="card-header">
									<?php
							include '../asset/koneksi.php';
	$id = $_GET['id'];
	$tanggal2 = $_GET['tanggal'];
	$alat = $_GET['alat'];
	$nm_petugas=$_GET['nm_petugas'];
	$kode_pemilik=$_GET['id'];
      $query = "SELECT * FROM tbl_pengecekan where no='$id'";
      $result = mysqli_query($link, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($link).
           " - ".mysqli_error($link));
      }
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($data1 = mysqli_fetch_assoc($result))
      {
		$b=  $data1['no'];
		$n = $data1['alamat'];
        $a = $data1['nm_pemilik'];
		$h = $data1['tanggal'];

		  ?>
		  		<!-- ini Adalah informasi data -->
		  		<h3> Data Pemilik </h3>
				<h5 class="card-title mb-2"><strong>Nama Pemilik :</strong> <?php echo"$a"; ?></h5>
				<h5 class="card-title mb-2"><strong>Alamat :</strong> <?php echo"$n"; ?></h5>
				<h5 class="card-title mb-2"><strong>Tanggal Masuk pengecekan : </strong> <?php echo"$tanggal2"; ?></h5>
				<h5 class="card-title mb-2"><strong>Jenis UTTP : </strong> <?php echo"$alat"; ?></h5>
				<h5 class="card-title mb-2"><strong>Pemeriksa : </strong> <?php echo"$nm_petugas"; ?></h5><br>

				</div>
				<input type="text" hidden value="<?php echo $h ?>" name="tgl">
				<input type="text" hidden value="<?php echo $alat ?>" name="nm_alat">
		<div id="popup">
			<div class="window">
				<a href="#" class="close-button" title="Close">X</a>
				
				<h1 class="h3 mb-3">Form Input Data Pemeriksaan</h1>
				<div class="card">
				<form id="formtable" action="../asset/aksi_tabel_tera/proses_input_pemeriksaan.php" method="post" >
									<?php
									//mengecek 6 bulan kedepan
									$aa=date('d-m-Y');
									$tanggal=date('d-m-Y',strtotime('+1 month',strtotime($aa)));

									?>	<!-- untuk redirect alamat -->
										<input hidden type="text" name="kode_pemilik" id="id" class="form-control" value="<?php echo $kode_pemilik ?>">	
										<input hidden type="text" name="alat" id="id" class="form-control" value="<?php echo"$alat"; ?>">		
										<input hidden type="text" name="tgl_masuk" id="id" class="form-control" value="<?php echo"$tanggal2"; ?>">	
										<input hidden type="text" name="tgl_berikutnya" id="id" class="form-control" value="<?php echo"$tanggal"; ?>">	
									<div class="form-group mb-3">
										<!-- <label for="alamat" class=" form-control-label">Kode Pemilik</label> -->
										<input type="text" hidden name="kode" id="id" class="form-control" value="<?php echo"$b"; ?>" Readonly>	
									</div>
									<div class="form-group mb-3">
        								<label for="alamat" class=" form-control-label">Tanggal Pemeriksaan</label>
                                        <input type="text"  name="tanggal" id="tanggal" class="form-control" value="<?php echo date("d-m-Y");?>" readonly>
                                    </div>
									<input type="hidden" name="tgl_cek" id="tgl_cek" class="form-control" >
                                        <div class="form-group mb-3">
                                    	<label for="nama" class=" form-control-label">Nama Pemilik</label>
										<input type="text" name="nama_pmlk" id="nama_pmlk" class="form-control" value="<?php echo"$a"; ?>">
                                    </div>
									<div class="form-group mb-3">
                                    	<label for="nama" class=" form-control-label">Alamat</label>
										<textarea name="alamat" id="alamat" class="form-control" ><?php echo"$n"; ?> </textarea>
                                    </div>
                                     <div class="form-group mb-3">
                                    	<label for="nama" class=" form-control-label">Hasil Akhir</label>
										<input type="text" name="hasil" id="nama_pmlk" class="form-control" value="0">
										<input type="text" hidden name="nama_pemeriksa" id="nama_pmlk" class="form-control" value="<?php echo $nm_petugas?>">
										<small>* Standar kekuatan 50 </small>
                                    </div>
                                    <div class="form-group mb-3">
                                    	<label for="nama" class=" form-control-label">Tanggal Cek Ulang</label>
										<textarea name="alamat" id="alamat" class="form-control" readonly=""><?php echo "$tanggal"; ?> </textarea>
										<small>* pengecekan 1 bulan selanjutnya </small>
                                    </div>
									<div class="form-group mb-3">
									<button type="submit" name="input1" id="input" class="btn btn-primary"><i class="align-middle me-1" data-feather="save"></i> Simpan</button>
                                    </div>
				</div>
			</div>
		</div>
	  <?php
	  }
	  ?>

	  

	  <div style="overflow-x:auto;">
								<table class="table table-hover my-0" id="myTable">
									<thead>
										<tr>
	  										<th></th>
											<th>No.</th>
											<th>Tanggal Pengecekan</th>
											<th>Tanggal Pengecekan Berikutnya</th>
											<th>kekuatan</th>
											<th>hasil</th>
											<th>status</th>
											<th>Keterangan</th>
											
										</tr>
									</thead>
									<tbody>
					<?php
					include '../asset/koneksi.php';
		//mengecek 6 bulan kedepan
         $aa=date('d-m-Y');
         $b=date('d-m-Y',strtotime('+1 month',strtotime($aa)));


		$id = $_GET['id'];
      $query = "SELECT * FROM tbl_pemeriksaan where kode_pemilik='$id'";
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
        $h=$data['tgl_pengecekan_awal'];
        $kembali = new DateTime($data['tgl_pengecekan_awal']);
        $lambat=new DateTime($aa);
        $diff = $lambat->diff($kembali);
              
      // mencetak / menampilkan data
        echo "<tr>";
		echo'<td><a href="../laporan/laporan3.php?no='.$data['no'].'&kode_pemilik='.$data['kode_pemilik'].'"<button type="submit" class="btn btn-default"><i class="align-middle me-1" data-feather="printer"></i></button></a></td>';
        echo "<td>$no</td>"; //menampilkan no urut
       
         echo "<td><i class='align-middle me-1' data-feather='clock'></i> $data[tgl_pengecekan_awal]</td>";
        echo "<td> <i class='align-middle me-1' data-feather='calendar'></i> $data[tgl_pengecekan_akhir]</td>"; 
     	echo"<td>$data[kekuatan]</td>";
		 echo"<td>$data[hasil]</td>";
		 $standar=50; 
		 if ($data['hasil'] == $standar){
			 echo "<td><span class='badge bg-success'><i class='align-middle me-1' data-feather='alert-circle'></i> Baik </span></td>";
		 }else{
			 echo "<td><span class='badge bg-danger'><i class='align-middle me-1' data-feather='alert-triangle'></i> Buruk</span></td>";
		 }
		$tgl_now=date("d-m-Y");
		$tgl_exp=$data['tgl_pengecekan_akhir'];//tanggal expired
		if ($tgl_now >$tgl_exp ){
			$id = $_GET['id'];
         	echo'<td><a href="../asset/exp.php?id='.$id.'"; class="btn btn-danger"> Belum di Cek</a> <span></span><a href="../asset/exp.php?id='.$id.'&no_pemeriksaan='.$data['no'].'&nm_alat='.$alat.'&tgl='.$tanggal.'" class="btn btn-warning">Cek</a></td>';
		}else{
			echo "<td> <a class='btn btn-success' href='#'><input hidden type='text' name='status' value='Sudah di Cek'>Sudah di Cek </a></td>";
		}     
           
		
        echo "</tr>";
        $no++; // menambah nilai nomor urut
      }
      ?>
      
 
									</tbody>
								</table>
								</form>
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
								<a href="#popup"><button type="submit" class="btn btn-primary"><i class='align-middle me-1' data-feather='search'></i>Tambah Data</button></a>
								<?php
								$id = $_GET['id'];
								?>
								<a href="../laporan/laporan.php?id=<?php echo"$id";?>"><button type="submit" class="btn btn-default"><i class='align-middle me-1' data-feather='printer'></i>Cetak</button></a>
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
	
	<!-- untuk filter -->
	<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
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