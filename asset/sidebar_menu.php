<div class = "sidebar-content js-simplebar">
<a   class = "sidebar-brand" href   = "../view/dashboard.php">
<img src   = "../img/logo.png"  alt = "Charles Hall" width = "200"/>
        </a>
		<ul class = "sidebar-nav">
		<li class = "sidebar-header">
						Data Perusahaan
					</li>
				
					<li <?php if($thisPage == "Dashboard") echo "class='sidebar-item active'"; ?>>
					<a  class = "sidebar-link" href         = "../view/dashboard.php">
					<i  class = "align-middle" data-feather = "sliders"></i> <span class = "align-middle">Dashboard</span>
            </a>
					</li>

					

					<li <?php if($thisPage == "Kegiatan") echo "class='sidebar-item active'"; ?>>
					<a  class = "sidebar-link" href         = "../view/kegiatan.php">
					<i  class = "align-middle" data-feather = "credit-card"></i> <span class = "align-middle">Kegiatan</span>
            </a>
					</li>
					<li <?php if($thisPage == "petugas") echo "class='sidebar-item active'"; ?>>
					<a  class = "sidebar-link" href         = "../view/data_petugas.php">
					<i  class = "align-middle" data-feather = "user"></i><span class = "align-middle"> Data Petugas</span>
            </a>
					</li>
					<li <?php if($thisPage == "Alat") echo "class='sidebar-item active'"; ?>>
					<a  class = "sidebar-link" href         = "../view/alat.php">
					<i  class = "align-middle" data-feather = "inbox"></i> <span class = "align-middle">Data Alat</span>
            </a>
					<li <?php if($thisPage == "Tabel Tera Ulang") echo "class='sidebar-item active'"; ?>>
					<a  class = "sidebar-link" href         = "../view/tabel.php">
					<i  class = "align-middle" data-feather = "book"></i> <span class = "align-middle">Tabel Tera Ulang</span>
            </a>
					</li>
					<li class = "sidebar-header">
						Data Pemeriksaan
					</li>
					<li <?php if($thisPage == "pemeriksaan") echo "class='sidebar-item active'"; ?>>
					<a  class = "sidebar-link" href         = "../view/pemeriksaan_view.php">
					<i  class = "align-middle" data-feather = "book"></i><span class = "align-middle"> Data Pemeriksaan</span>
            </a>
					</li>
			<li class = "sidebar-header">
						Laporan 
					</li>
					<li <?php if($thisPage == "laporan") echo "class='sidebar-item active'"; ?>>
					<a  data-bs-target = "#ui" data-bs-toggle        = "collapse" class             = "sidebar-link collapsed">
					<i  class          = "align-middle" data-feather = "briefcase"></i> <span class = "align-middle">Laporan Tahunan</span>
            </a>
						<ul id    = "ui" class              = "sidebar-dropdown list-unstyled collapse " data-bs-parent = "#sidebar">
						<li <?php if($thisPage == "laporan") echo "class='sidebar-item active'"; ?>><a class = "sidebar-link" href= "../laporan/laporan2.php">Laporan Tera Ulang</a></li>
							
						</ul>
					</li>
				</ul>

