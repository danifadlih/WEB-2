<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">

                <!-- Dashboard -->
                <a class="nav-link" href="/WEB-2/views/dashboard.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>

                <!-- Manajemen Anggota -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseAnggota" aria-expanded="false" aria-controls="collapseAnggota">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Manajemen Anggota
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseAnggota" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/WEB-2/views/anggota/index.php">Data Anggota</a>
                        <a class="nav-link" href="/WEB-2/views/pegawai/index.php">Pendaftaran Pegawai</a>
                        <a class="nav-link" href="/WEB-2/views/kartu diskon/index.php">Kartu Diskon</a>
                    </nav>
                </div>

                <!-- Manajemen Produk -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProduk" aria-expanded="false" aria-controls="collapseProduk">
                    <div class="sb-nav-link-icon"><i class="fas fa-store"></i></div>
                    Manajemen Produk
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseProduk" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/WEB-2/views/jenis produk/index.php">Jenis Produk</a>
                        <a class="nav-link" href="/WEB-2/views/produk/index.php">Produk</a>
                    </nav>
                </div>

                <!-- Pemesanan -->
                <a class="nav-link" href="/WEB-2/views/pesanan/index.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-receipt"></i></div>
                    Pemesanan
                </a>

                <!-- Detail Pesanan -->
                <a class="nav-link" href="/WEB-2/views/detail pesanan/index.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-cart-plus"></i></div>
                    Detail Pesanan
                </a>

                <!-- Transaksi -->
                <a class="nav-link" href="/WEB-2/views/pembayaran/index.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-wallet"></i></div>
                    Transaksi
                </a>

            </div>
        </div>
    </nav>
</div>