<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>
        <link href="asset/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
            <a class="navbar-brand" href="index.html">
				<img class="img-fluid" src="logo.png" style="width: 50px;">
                BEA CUKAI
			</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-warning" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
				<a class="btn btn-warning" href="logout.php">LOGOUT</a>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark bg-primary" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Utama</div>
                            <a class="nav-link active" href="halaman_admin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">List</div>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
							<a class="nav-link" href="daftartoko.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-list-alt"></i></div>
                                Daftar Toko
                            </a>
							<a class="nav-link" href="tambahtoko.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-file-alt"></i></div>
                                Tambah Toko
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        PENGGUNA
                    </div>
                </nav>
            </div>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
						<div class="row">
                            <div class="container">
                                <h5>I.	DASAR HUKUM</h5>
                                <p>  1.Undang-Undang Nomor 17 Tahun 2006 tentang Perubahan Undang-Undang No. 10 Tahun 1995 tentang Kepabeanan. <br>
                                     2.	Peraturan Pemerintah Republik Indonesia Nomor 55 Tahun 2008 tentang Pengenaan Bea Keluar Terhadap Barang Ekspor. <br>
                                     3.	Peraturan Menteri Keuangan Nomor No. 145/PMK.04/2007 jo. PMK No. 148/PMK.04/2011 jo. PMK No. 145/PMK.04/2014 tentang Ketentuan Kepabeanan di Bidang Ekspor. <br>
                                     4.	Peraturan Menteri Keuangan Nomor 214/PMK.04/2008 jo. PMK No. 146/PMK.04/2014 jo. PMK No. 86/PMK.04/2016 tentang Pemungutan Bea Keluar. <br>
                                     5.	Peraturan Menteri Keuangan Nomor 224/PMK.04/2015 tentang Pengawasan Terhadap Impor atau Ekspor Barang Larangan dan/atau Pembatasan. <br>
                                     6.	Peraturan Menteri Keuangan Nomor 13/PMK.010/2017 tentang Penetapan Barang Ekspor yang Dikenakan Bea Keluar dan Tarif Bea Keluar. <br>
                                     7.	Peraturan Direktur Jenderal Bea dan Cukai Nomor PER-32/BC/2014 jo. PER-29/BC/2016 tentang Tata Laksana Kepabeanan di Bidang Ekspor. <br>
                                     8.	Peraturan Direktur Jenderal Bea dan Cukai Nomor P-41/BC/2008 jo. P-07/BC/2009 jo. PER-18/BC/2012 jo. PER-34/BC/2016 tentang Pemberitahuan Pabean Ekspor.
                                </p>

                                <h5>II.	SEKILAS TENTANG EKSPOR</h5>
                                <p> 1.	Ekspor adalah kegiatan mengeluarkan barang dari daerah pabean. <br>
                                    2.	Barang ekspor adalah barang yang telah diajukan pemberitahuan ekspor barang dan telah mendapatkan nomor pendaftaran. <br>
                                    3.	Eksportir adalah orang perseorangan atau badan hukum yang melakukan ekspor. <br>
                                    4.	Pemberitahuan Ekspor Barang (PEB) adalah pemberitahuan pabean yang digunakan untuk memberitahukan ekspor barang dalam bentuk tulisan di atas formulir atau data elektronik. Bentuk dan isi pemberitahuan pabean ekspor ditetapkan dalam Peraturan Direktur Jenderal Bea dan Cukai. <br>
                                    5.	Nota Pelayanan Ekspor (NPE) adalah nota yang diterbitkan oleh Pejabat Pemeriksa Dokumen, Sistem Komputer Pelayanan, atau Pejabat Pemeriksa barang atas PEB yang disampaikan, untuk melindungi pemasukan barang yang akan diekspor ke Kawasan Pabean dan/atau pemuatannya ke sarana pengangkut.
                                </p>

                                <h5>III.	BARANG EKSPOR YANG DIKENAKAN BEA KELUAR</h5>
                                <p> 1.	Bahwa terhadap barang Ekspor dapat dikenakan Bea Keluar. <br>
                                    2.	Barang ekspor yang dikenakan Bea Keluar, yaitu sebagai berikut: <br>
                                    &emsp; a.	Kulit dan Kayu; <br>
                                    &emsp; b.	Biji kakao; <br>
                                    &emsp; c.	Kelapa sawit, Crude Palm Oil (CPO), dan produk turunannya; <br>
                                    &emsp; d.	Produk hasil pengolahan mineral logam; dan <br>
                                    &emsp; e.	Produk mineral logam dengan kriteria tertentu. <br>
                                    3.	Perhitungan Bea Keluar adalah sebagai berikut: <br>
                                    &emsp; a.	dalam hal Tarif Bea Keluar ditetapkan berdasarkan persentase dari Harga Ekspor (advalorum), Bea Keluar dihitung berdasarkan rumus sebagai &emsp; &emsp; &emsp;berikut: <br>
                                    &emsp; &ensp; Tarif Bea Keluar x Jumlah Satuan Barang x Harga Ekspor per Satuan Barang x Nilai Tukar Mata Uang <br>
                                    &emsp; b.	dalam hal Tarif Bea Keluar ditetapkan secara spesifik, Bea Keluar dihitung berdasarkan rumus sebagai berikut: <br>
                                    &emsp; &ensp; Tarif Bea Keluar Per Satuan Barang Dalam Satuan Mata Uang Tertentu x Jumlah Satuan Barang x Nilai Tukar Mata Uang
                                </p>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; BEA CUKAI JEMBER</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="asset/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="asset/assets/demo/chart-area-demo.js"></script>
        <script src="asset/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="asset/assets/demo/datatables-demo.js"></script>
    </body>
</html>
