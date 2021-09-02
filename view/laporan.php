<?php
//Menggabungkan dengan file koneksi yang telah kita buat
include '../asset/koneksi.php';
 
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=dewan-word.doc");
?>
 
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<div align="center">
		<h2>Cara Ekspor Laporan/Data dari Database MySQL ke dalam Word Tanpa Plugin</h2>
		<h3>Sub Judul</h3>
		<p style="text-indent: 50px; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		
    <thead>
    <div align="center">
    <table border="1">
            <tr>
                                        <th >No.</th>
                                        <th>Tanggal</th>
                                        <th>Nama Pemilik</th>
                                        <th>Alamat</th>
                                        <th>Jenis UTTP</th>
                                        <th>No Seri</th>
                                        <th>Kekuatan</th>
                                        
                                       
                                        
            </tr>
            <tbody>
				<?php
                    $id = $_GET['id'];
			        $no = 1;
			        $query = "SELECT * FROM view_pemeriksaan where kode_pemilik='$id'";
      				$result = mysqli_query($link, $query);
					//mengecek apakah ada error ketika menjalankan query
					if(!$result){
       				die ("Query Error: ".mysqli_errno($link).
           			" - ".mysqli_error($link));
                    }
                     $no = 1; 
                     while($row = mysqli_fetch_assoc($result))
                    
                        {
				     $a = $row['tanggal'];
                     $b = $row['nm_pemilik'];
                     $c = $row['alamat'];
                     $d = $row['jenisuttp'];
                     $e = $row['noseri'];
                     $f = $row['standar_kekuatan'];
                    

							echo "<tr>";
								echo "<td>".$no++."</td>";
								echo "<td>".$a."</td>";
								echo "<td>".$b."</td>";
								echo "<td>".$c."</td>";
								echo "<td>".$d."</td>";
                                echo "<td>".$e."</td>";
                                echo "<td>".$f."</td>";
                               
							echo "</tr>";
			    	 } $no++;
			    ?>
	    	</tbody>
            </table>
            </div>

            <p>TABEL :</p>
		<table border="1">
	    	<thead>
            
	    		<tr>
	    			                        <th >No.</th>
											<th>Tanggal pengecekan</th>
											<th>Tanggal pengecekan Terakhir</th>
											
	    		</tr>
	    	</thead>
            
	    	<tbody>
				<?php
                    $id = $_GET['id'];
			        $no = 1;
			        $query = "SELECT * FROM view_pemeriksaan where kode_pemilik='$id'";
      				$result = mysqli_query($link, $query);
					//mengecek apakah ada error ketika menjalankan query
					if(!$result){
       				die ("Query Error: ".mysqli_errno($link).
           			" - ".mysqli_error($link));
                    }
                     $no = 1; 
                     while($row1 = mysqli_fetch_assoc($result))
                    
                        {
				     $a = $row1['tgl_pengecekan_awal'];
                     $b = $row1['tgl_pengecekan_akhir'];
                     
							echo "<tr>";
								echo "<td>".$no++."</td>";
								echo "<td>".$a."</td>";
								echo "<td>".$b."</td>";
								
							echo "</tr>";
			    	 } $no++;
			    ?>
	    	</tbody>
	    </table>
 
	    <p>www.dewankomputer.com</p>
    </div>
        </thead>

        
</body>
</html>