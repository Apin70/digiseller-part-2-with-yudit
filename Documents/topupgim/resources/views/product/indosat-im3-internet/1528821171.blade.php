@extends('layouts.app')

@section('title', 'Top Up Indosat IM3 Murah Paket Data Freedom Internet 24 Jam - Topupgim - TopUpGim')

@push('scripts')
<script type="text/javascript">
            const simulationControl = document.getElementById("simulation-control");
            const toggleSimulationControl = document.getElementById("toggle-simulation-control");
            const fabHome = document.getElementById("circularMenu");
            const mbClose = document.getElementById("m-banner-close");
            const lastFabHomeShown = localStorage.getItem("last_fab_home_shown");
            const currentTime = new Date().getTime();
            const diffTime = currentTime - (parseInt(lastFabHomeShown) || 0);
            if (fabHome && (!lastFabHomeShown || diffTime > 24 * 60 * 60 * 1000)) {
                setTimeout(() => {
                    fabHome.classList.add("active");
                }, 15000);
            }
            toggleSimulationControl?.addEventListener("click", () => {
                simulationControl?.classList?.remove("d-none");
                toggleSimulationControl?.classList?.add("d-none");
            });
            fabHome?.addEventListener("click", () => {
                if (fabHome.classList.contains('active')) {
                    localStorage.setItem("last_fab_home_shown", new Date().getTime());
                }
                fabHome.classList.toggle('active');
            });
            mbClose?.addEventListener("click", function () {
                this.parentNode.remove();
                fabHome.classList.remove("mb-7");
                fabHome.classList.add("mb-5");
            });
        </script>
@endpush

@section('content')
        <!-- Main Container -->
        <main id="main-container">

            <!-- Page Content -->
            <div class="row g-0 flex-md-grow-1 ps-xl-5 pe-xl-4 pb-4">
                <div class="col-lg-5 py-4 py-lg-5">
                    <div class="ps-md-5 pe-md-5 pe-lg-0 px-3">


                        <!-- Cover Content -->
                        <div class="ratio mb-4" style="--bs-aspect-ratio: 50%;">
                            <div>
                                <img class="img-fluid rounded img-slider w-100" src="../../https://cdn.topupgim.com/product-rectangles/141d46fa-93e9-490b-bbaa-9fc948ffe999.jpg" alt="Top Up Indosat IM3 (Internet)">
                            </div>
                        </div>
                        <!-- END Cover Content -->

                        <!-- Description Content -->
                        <h1>Indosat IM3 (Internet)</h1>
                        <div class="d-flex flex-row flex-wrap align-items-center gy-1 mb-2">
                        </div>
                        <div class="static-page-product-desc mb-4"><article><h2>Top Up Paket Data Indosat IM3 Murah Online 24 Jam: Kuota Freedom Internet Harga Distributor</h2><p>Kebutuhan akan akses internet yang cepat dan terjangkau kini menjadi kebutuhan primer bagi masyarakat digital. <strong>Indosat Ooredoo Hutchison (IM3)</strong> telah lama dikenal sebagai provider yang menawarkan fleksibilitas tinggi melalui berbagai pilihan paket internet. Namun, bagi pengguna setia, tantangan terbesarnya adalah menemukan tempat <strong>top up paket data Indosat murah</strong> yang terpercaya dan instan. <strong>Topupgim</strong> hadir sebagai platform agnostik yang menyediakan kuota Indosat dengan harga grosir, jauh di bawah harga outlet konvensional.</p><p>Di Topupgim, kami mengkurasi berbagai pilihan paket internet Indosat mulai dari <strong>Freedom Internet</strong> yang memiliki kuota utama 24 jam tanpa pembagian, hingga paket ekonomis seperti <strong>Indosat Yellow</strong>. Seluruh proses pengisian di website kami dikelola oleh sistem otomatis berbasis API yang terintegrasi langsung ke provider, memastikan paket data Anda aktif dalam hitungan detik setelah pembayaran terverifikasi, bahkan di jam sibuk sekalipun.</p><h3>Keunggulan Layanan Isi Ulang Kuota Indosat di Topupgim</h3><p>Dalam ekosistem PPOB (Payment Point Online Bank) yang sangat kompetitif, Topupgim menonjolkan tiga pilar keunggulan: Transparansi, Kecepatan, dan Variasi Produk. Berikut adalah alasan mengapa kami menjadi pilihan utama bagi ribuan pengguna IM3:</p><ul><li><strong>Harga Reseller untuk Pengguna Ritel:</strong> Kami memangkas rantai distribusi sehingga Anda mendapatkan harga agen meskipun hanya membeli satu paket saja.</li><li><strong>Metode Pembayaran Modern &amp; Lengkap:</strong> Kami mendukung ekosistem pembayaran nontunai mulai dari <strong>QRIS (Dana, OVO, GoPay, ShopeePay)</strong>, Transfer Bank Virtual Account (BCA, Mandiri, BNI, BRI), hingga pembayaran via gerai Alfamart.</li><li><strong>Ketersediaan Produk 24/7:</strong> Tidak perlu menunggu jam operasional kantor. Sistem kami bekerja otomatis 24 jam penuh, memudahkan Anda yang butuh kuota mendadak di tengah malam.</li><li><strong>Jaminan Paket Original &amp; Resmi:</strong> Semua paket data yang kami jual adalah produk resmi Indosat Ooredoo, menjamin keamanan kartu dan kelancaran akses internet Anda.</li></ul><h3>Panduan Memilih Paket Internet Indosat yang Tepat</h3><p>Agar Anda tidak salah pilih, berikut adalah penjelasan mendalam mengenai kategori paket Indosat yang tersedia di Topupgim:</p><p><strong>1. Paket Freedom Internet (Best Seller)</strong><br>Ini adalah pilihan paling aman dan populer. Freedom Internet menawarkan kuota utama yang berlaku 24 jam penuh tanpa pembagian kuota malam atau kuota lokal. Sangat direkomendasikan untuk pekerja remote, mahasiswa, dan penikmat streaming yang membutuhkan koneksi stabil di mana saja dan kapan saja.</p><p><strong>2. Paket Indosat Yellow (Ekonomis)</strong><br>Bagi Anda yang memiliki anggaran terbatas namun butuh koneksi internet cepat untuk harian, paket Yellow adalah jawabannya. Dengan harga mulai dari Rp3.000-an, Anda bisa mendapatkan kuota 1GB harian yang sangat pas untuk keperluan mendesak atau browsing ringan.</p><h3>Tabel Estimasi Harga &amp; Varian Paket Indosat Terbaru 2026</h3><figure class="table"><table style="border-collapse:collapse;border:1px solid #ddd;font-size:0.95em;margin:20px 0;width:100%;"><thead><tr style="background-color:#f2f2f2;text-align:left;"><th style="border:1px solid #ddd;padding:12px;">Kategori Paket</th><th style="border:1px solid #ddd;padding:12px;">Estimasi Masa Aktif</th><th style="border:1px solid #ddd;padding:12px;">Keunggulan Produk</th></tr></thead><tbody><tr><td style="border:1px solid #ddd;padding:10px;">Freedom Internet 8GB - 50GB</td><td style="border:1px solid #ddd;padding:10px;">30 Hari</td><td style="border:1px solid #ddd;padding:10px;">Kuota Utama &amp; Nasional</td></tr><tr><td style="border:1px solid #ddd;padding:10px;">Indosat Yellow 1GB</td><td style="border:1px solid #ddd;padding:10px;">1 Hari</td><td style="border:1px solid #ddd;padding:10px;">Harga Termurah &amp; Praktis</td></tr><tr><td style="border:1px solid #ddd;padding:10px;">Freedom Combo</td><td style="border:1px solid #ddd;padding:10px;">30 Hari</td><td style="border:1px solid #ddd;padding:10px;">Bonus Nelpon &amp; Aplikasi</td></tr></tbody></table></figure><h3>Cara Top Up Indosat di Topupgim dengan Cepat</h3><p>Hanya butuh beberapa langkah sederhana untuk mengaktifkan paket data pilihan Anda:</p><ol><li>Masukkan <strong>Nomor HP Indosat IM3</strong> Anda pada kolom input di atas halaman ini.</li><li>Pilih <strong>Varian Paket Data</strong> yang sesuai dengan kebutuhan Anda.</li><li>Tentukan <strong>Metode Pembayaran</strong> yang paling mudah bagi Anda (QRIS sangat disarankan untuk proses instan).</li><li>Selesaikan transaksi sesuai instruksi yang muncul di layar.</li><li>Tunggu notifikasi SMS dari Indosat; kuota Anda akan otomatis bertambah dalam sekejap!</li></ol><p>Pastikan nomor Indosat Anda masih dalam masa aktif sebelum melakukan transaksi. Jika Anda baru saja melakukan pembayaran namun paket belum masuk, Anda bisa mencoba me-restart HP atau mengecek sisa kuota melalui kode dial *123# atau aplikasi MyIM3 secara berkala.</p><div class="faq-section" style="border-top:1px solid #eee;margin-top:30px;padding-top:20px;"><h3>Pertanyaan Sering Diajukan (FAQ)</h3><p><strong>Q: Apakah paket Freedom Internet di Topupgim berlaku Nasional?</strong><br>A: Ya, hampir semua paket Freedom Internet yang kami sediakan adalah Kuota Utama Nasional yang bisa digunakan di seluruh jaringan Indosat se-Indonesia tanpa pembagian zona lokal.</p><p><strong>Q: Apakah bisa beli paket data Indosat saat pulsa kosong?</strong><br>A: Tentu saja bisa! Karena pembayaran di Topupgim menggunakan saldo e-wallet atau transfer bank, Anda tidak memerlukan pulsa reguler untuk melakukan pembelian paket data.</p><p><strong>Q: Bagaimana jika terjadi kendala pengisian?</strong><br>A: Layanan pelanggan kami siap membantu Anda. Silakan hubungi kami via WhatsApp atau email dengan menyertakan ID transaksi untuk bantuan teknis segera.</p></div></article></div>
                        <div class="d-flex flex-row flex-wrap align-items-center gy-1">
                            <span class="text-dark fs-sm fw-semibold mb-2 me-3">
                                <i class="fa fa-cart-shopping opacity-75 me-1"></i> Terjual: <span class="text-primary">188</span>
                            </span>
                            <a class="text-dark fs-sm fw-semibold mb-2 me-3" href="#modal-share-content" data-bs-toggle="modal" data-bs-target="#modal-share-content">
                                <i class="fa fa-share-square opacity-75 me-1"></i> Share &amp; Dapatkan Uang
                            </a>
                            <a class="text-muted fs-sm fw-semibold mb-2 me-3" href="https://im3.id/portal/id/indexpersonal" target="_blank">
                                <i class="fa fa-globe opacity-75 me-1"></i> Website
                            </a>
                        </div>
                        <!-- END Description Content -->

                        <!-- Review Content -->
                        <div id="parent-content-review" class="d-none">
                            <div id="content-review">
                                <div id="review-scope-loading" class="text-center text-primary py-7 d-none">
                                    <i class="fa fa-3x fa-circle-notch fa-spin"></i>
                                </div>
                                <div id="review-scope-empty" class="d-none"></div>
                                <div id="review-scope" class="pt-4 mt-4 border-top d-none">
                                    <h3 class="mb-1">Ulasan dan Transaksi</h3>
                                    <p class="fs-sm mb-4">Ulasan dan transaksi terbaru. Ulasan akan dibuat secara otomatis jika tidak ada komplain dan kamu bisa mengedit atau menghapusnya kapan saja.</p>
                                    <div class="d-flex align-items-center mb-4 ps-3 ps-lg-0">
                                        <div class="d-flex flex-column text-center">
                                            <h2 class="display-3 mb-0">
                                                <span id="review-score-average">5.0</span><span class="fs-lg fw-normal text-muted"> /5</span>
                                            </h2>
                                            <div class="text-center">
                                                <div id="review-score-star" class="mb-1" data-score="5" data-number="5" data-readonly="true"></div>
                                                <p id="review-score-total" class="fs-sm text-muted mb-0">(5 Ulasan)</p>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 flex-column ms-1 ms-md-0 ps-4 ps-md-5 pe-5">
                                            <div class="d-flex align-items-center mb-1">
                                                <div class="d-flex flex-column" style="width: 1em;">
                                                    <span class="fs-sm">5</span>
                                                </div>
                                                <div class="d-flex flex-fill flex-column me-2">
                                                    <div class="progress m-2" style="height: 6px;">
                                                        <div id="review-score-progress-five" class="progress-bar rounded" role="progressbar" style="width: 0%;"></div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column" style="width: 1em;">
                                                    <span id="review-score-five" class="fs-sm text-nowrap">0</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-1">
                                                <div class="d-flex flex-column" style="width: 1em;">
                                                    <span class="fs-sm">4</span>
                                                </div>
                                                <div class="d-flex flex-fill flex-column me-2">
                                                    <div class="progress m-2" style="height: 6px;">
                                                        <div id="review-score-progress-four" class="progress-bar rounded" role="progressbar" style="width: 0%;"></div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column" style="width: 1em;">
                                                    <span id="review-score-four" class="fs-sm text-nowrap">0</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-1">
                                                <div class="d-flex flex-column" style="width: 1em;">
                                                    <span class="fs-sm">3</span>
                                                </div>
                                                <div class="d-flex flex-fill flex-column me-2">
                                                    <div class="progress m-2" style="height: 6px;">
                                                        <div id="review-score-progress-three" class="progress-bar rounded" role="progressbar" style="width: 0%;"></div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column" style="width: 1em;">
                                                    <span id="review-score-three" class="fs-sm text-nowrap">0</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-1">
                                                <div class="d-flex flex-column" style="width: 1em;">
                                                    <span class="fs-sm">2</span>
                                                </div>
                                                <div class="d-flex flex-fill flex-column me-2">
                                                    <div class="progress m-2" style="height: 6px;">
                                                        <div id="review-score-progress-two" class="progress-bar rounded" role="progressbar" style="width: 0%;"></div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column" style="width: 1em;">
                                                    <span id="review-score-two" class="fs-sm text-nowrap">0</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-1">
                                                <div class="d-flex flex-column" style="width: 1em;">
                                                    <span class="fs-sm">1</span>
                                                </div>
                                                <div class="d-flex flex-fill flex-column me-2">
                                                    <div class="progress m-2" style="height: 6px;">
                                                        <div id="review-score-progress-one" class="progress-bar rounded" role="progressbar" style="width: 0%;"></div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column" style="width: 1em;">
                                                    <span id="review-score-one" class="fs-sm text-nowrap">0</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <div class="d-flex mb-3 flex-wrap gap-2 align-items-center text-nowrap">
                                            <div class="form-check form-block highlight">
                                                <input type="radio" id="reviewFilter_all" class="form-check-input" name="reviewFilter" value="all" checked>
                                                <label class="form-check-label no-content bg-body py-1" for="reviewFilter_all">
                                                    <span class="fs-sm">Semua</span>
                                                </label>
                                            </div>
                                            <div class="form-check form-block highlight">
                                                <input type="radio" id="reviewFilter_with_comment" class="form-check-input" name="reviewFilter" value="with_comment">
                                                <label class="form-check-label no-content bg-body py-1" for="reviewFilter_with_comment">
                                                    <span class="fs-sm">Dengan Komentar</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div id="review-scope-list-loading" class="text-center text-primary py-7 d-none">
                                            <i class="fa fa-3x fa-circle-notch fa-spin"></i>
                                        </div>
                                        <div id="review-scope-frame-list" class="d-flex flex-column border-top pt-4 mt-1">
                                            <div id="review-scope-list" class="d-flex flex-column"></div>
                                            <div class="d-flex justify-content-between align-items-center mt-2">
                                                <button type="button" id="review-nav-prev" class="a btn btn-sm text-secondary d-none" disabled>
                                                    <i class="me-1 fa fa-angle-left"></i> Sebelumnya
                                                </button>
                                                <button type="button" id="review-nav-next" class="a btn btn-sm text-secondary d-none" disabled>
                                                    Selanjutnya <i class="ms-1 fa fa-angle-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Review Content -->

                        <!-- Ranking Content -->
                        <div id="parent-content-ranking" class="d-none">
                            <div id="content-ranking" class="mt-5">
                                <h3 class="mb-4">Sultan Indosat IM3 (Internet)</h3>
                                <div class="d-flex align-items-center border rounded p-3 mb-3 block block-rounded overflow-hidden">
                                    <span class="fw-semibold me-3">1</span>
                                    <img class="img-avatar border" style="width: 40px; height: 40px" src="../../https://cdn.topupgim.com/circle-logo.jpg">
                                    <div class="d-flex flex-column ms-3">
                                        <span class="fs-sm fw-semibold">Ayana</span>
                                        <span class="text-muted fs-sm">Rp. 66.570</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center border rounded p-3 mb-3 block block-rounded overflow-hidden">
                                    <span class="fw-semibold me-3">2</span>
                                    <img class="img-avatar border" style="width: 40px; height: 40px" src="../../https://cdn.topupgim.com/circle-logo.jpg">
                                    <div class="d-flex flex-column ms-3">
                                        <span class="fs-sm fw-semibold">sasikey</span>
                                        <span class="text-muted fs-sm">Rp. 55.000</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center border rounded p-3 mb-3 block block-rounded overflow-hidden">
                                    <span class="fw-semibold me-3">3</span>
                                    <img class="img-avatar border" style="width: 40px; height: 40px" src="../../https://cdn.topupgim.com/circle-logo.jpg">
                                    <div class="d-flex flex-column ms-3">
                                        <span class="fs-sm fw-semibold">6285829*****3</span>
                                        <span class="text-muted fs-sm">Rp. 49.600</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center border rounded p-3 mb-3 block block-rounded overflow-hidden">
                                    <span class="fw-semibold me-3">4</span>
                                    <img class="img-avatar border" style="width: 40px; height: 40px" src="../../https://cdn.topupgim.com/circle-logo.jpg">
                                    <div class="d-flex flex-column ms-3">
                                        <span class="fs-sm fw-semibold">nana</span>
                                        <span class="text-muted fs-sm">Rp. 49.200</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center border rounded p-3 mb-3 block block-rounded overflow-hidden">
                                    <span class="fw-semibold me-3">5</span>
                                    <img class="img-avatar border" style="width: 40px; height: 40px" src="../../https://cdn.topupgim.com/circle-logo.jpg">
                                    <div class="d-flex flex-column ms-3">
                                        <span class="fs-sm fw-semibold">6281339*****0</span>
                                        <span class="text-muted fs-sm">Rp. 27.500</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Ranking Content -->

                        <!-- Article Content -->
                        <div id="parent-content-article" class="d-none">
                        </div>
                        <!-- END Article Content -->

                    </div>
                </div>
                <div class="col-lg-7">
                    <div id="content-topup" class="content" style="scroll-margin-top: 50px;">
                        <a href="#modal-how-to-order" class="d-block d-md-none fw-semibold text-center btn btn-primary mt-2 w-100" style="font-size: 13px; line-height: 25px;" data-bs-toggle="modal" data-bs-target="#modal-how-to-order">
                            Tutorial Pembelian Tanpa Login?
                        </a>
                        <form class="js-validation-product-start-transaction" method="POST" novalidate="novalidate">
                            <input type="hidden" name="_csrf" value="go10qmxr-atOuZ9sJt0FktkLbkFtCmpwalqQ">
                            <input type="hidden" name="_productPaymentMethod" value="">
                            <input type="hidden" name="_redemptionIsAttached" value="">
                            <input type="hidden" name="_exfee" value="">
                            <ul class="timeline timeline-alt">

                                <div class="d-flex justify-content-end mb-3 w-100">
                                    <a href="#modal-how-to-order" class="d-none d-md-block fw-semibold" style="font-size: 13px; line-height: 25px;" data-bs-toggle="modal" data-bs-target="#modal-how-to-order">
                                        <u>Tutorial Pembelian Tanpa Login?</u>
                                    </a>
                                </div>

                                <!-- Gim ID -->
                                <li id="content-property" class="timeline-event " style="scroll-margin-top: 75px;">
                                    <div class="timeline-event-icon-flat bg-primary">
                                        <span class="fs-lg fw-bold">1</span>
                                    </div>
                                    <div id="product-account-block" class="product-block timeline-event-block-no-sm block block-rounded block-mode-loading-circle block-themed">
                                        <div class="block-header block-header-default mb-3 mb-md-0" style="background-color: #535c76;">
                                            <h3 class="block-title ms-5 ms-md-0 d-none d-md-block">Masukkan Informasi Akun</h3>
                                        </div>
                                        <div class="block-content block-content-full">
                                            <div class="row mb-4">
                                                <label class="col-sm-4 col-form-label" for="property-no_hp">Nomor HP <span class="text-info">*</span></label>
                                                <div class="col-sm-8">
                                                    <input data-property-type="phone_number_id" id="property-no_hp" name="property-no_hp" type="text" minlength="" class="form-control form-control-lg form-control-alt phone" placeholder="08XXXXXXXXXX" value="" required>
                                                </div>
                                            </div>
                                            <div class="row mb-1">
                                                <div class="col-sm-8 ms-auto d-flex">
                                                    <button type="button" id="propertyCheck" class="btn btn-sm btn-primary me-2">
                                                        <i class="far fa-fw fa-face-viewfinder me-1"></i>Periksa
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- END Gim ID -->

                                <!-- Denomination -->
                                <li id="content-denomination" class="timeline-event" style="scroll-margin-top: 75px;">
                                    <div class="timeline-event-icon-flat bg-xsmooth">
                                        <span class="fs-lg fw-bold">2</span>
                                    </div>
                                    <div id="product-denom-block" class="product-block timeline-event-block-no-sm block block-rounded block-mode-loading-circle block-themed">
                                        <div class="block-header block-header-default mb-3 mb-md-0" style="background-color: #535c76;">
                                            <h3 class="block-title ms-5 ms-md-0 d-none d-md-block">Pilih Nominal</h3>
                                        </div>
                                        <div class="block-content pb-2 animated fadeIn">

                                            <div class="px-2 py-2 mb-4 bg-info-light rounded d-flex align-items-center">
                                                <i class="far fa-info-circle me-2 text-info"></i><span class="fs-xs text-info">Harga tertera sudah termasuk biaya admin dan biaya tambahan lainnya.</span>
                                            </div>

                                            <div class="pb-2"><span class="fs-sm fw-light">Kategori</span></div>
                                            <div class="row px-md-1">
                                                <div class="col-4 col-md-3 px-2 mb-3">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="cDenom_0" name="cDenom" value="cDenom_0" checked>
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="cDenom_0">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100">
                                                                <div class="d-flex align-items-center justify-content-center" style="width: 30px; height: 30px; object-fit: cover;">
                                                                    <i class="fad fa-fw fa-lg fa-grid-2"></i>
                                                                </div>
                                                                <span id="cDenom_0" class="fs-xs fw-semibold mt-1">Semua Item</span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-4 col-md-3 px-2 mb-3">
                                                    <div class="position-relative h-100">
                                                        <div class="form-check form-block highlight h-100">
                                                            <input type="radio" class="form-check-input" data-first-open="false" id="cDenom_79" name="cDenom" value="cDenom_79">
                                                            <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="cDenom_79">
                                                                <div class="d-flex flex-column text-center justify-content-center align-items-center h-100">
                                                                    <span id="cDenom_79" class="fs-xs fw-semibold">Data</span>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4 col-md-3 px-2 mb-3">
                                                    <div class="position-relative h-100">
                                                        <div class="form-check form-block highlight h-100">
                                                            <input type="radio" class="form-check-input" data-first-open="false" id="cDenom_80" name="cDenom" value="cDenom_80">
                                                            <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="cDenom_80">
                                                                <div class="d-flex flex-column text-center justify-content-center align-items-center h-100">
                                                                    <span id="cDenom_80" class="fs-xs fw-semibold">Yellow</span>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4 col-md-3 px-2 mb-3">
                                                    <div class="position-relative h-100">
                                                        <div class="form-check form-block highlight h-100">
                                                            <input type="radio" class="form-check-input" data-first-open="false" id="cDenom_81" name="cDenom" value="cDenom_81">
                                                            <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="cDenom_81">
                                                                <div class="d-flex flex-column text-center justify-content-center align-items-center h-100">
                                                                    <span id="cDenom_81" class="fs-xs fw-semibold">Freedom Combo</span>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4 col-md-3 px-2 mb-3">
                                                    <div class="position-relative h-100">
                                                        <div class="form-check form-block highlight h-100">
                                                            <input type="radio" class="form-check-input" data-first-open="false" id="cDenom_82" name="cDenom" value="cDenom_82">
                                                            <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="cDenom_82">
                                                                <div class="d-flex flex-column text-center justify-content-center align-items-center h-100">
                                                                    <span id="cDenom_82" class="fs-xs fw-semibold">Freedom Internet</span>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4 col-md-3 px-2 mb-3">
                                                    <div class="position-relative h-100">
                                                        <div class="form-check form-block highlight h-100">
                                                            <input type="radio" class="form-check-input" data-first-open="false" id="cDenom_83" name="cDenom" value="cDenom_83">
                                                            <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="cDenom_83">
                                                                <div class="d-flex flex-column text-center justify-content-center align-items-center h-100">
                                                                    <span id="cDenom_83" class="fs-xs fw-semibold">Freedom U</span>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="cDescBox" class="d-flex align-items-center bg-body border border-1 p-2 mt-2 mb-3 form-check-label-rounded-lg w-100 d-none">
                                                <i class="far fa-circle-info fa-fw me-2"></i><span id="cDescText" class="fs-sm fw-light"></span>
                                            </div>
                                            <div class="mt-1 pb-2"><span class="fs-sm fw-light pb-4">Denominasi Item</span></div>
                                            <div class="row px-md-1 animated fadeIn" style="min-height: 7rem;">
                                                <div id="pDRoot_NY396P2O" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_NY396P2O" name="productDenomination" value="NY396P2O" data-price-preview="6860" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_NY396P2O">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/1e83971d-32cb-4890-a0d5-884ba742a1a8.png?w=75" alt="Data 1 GB 14 Hari">
                                                                <span id="productDenominationTitle_NY396P2O" class="fs-sm fw-semibold">Data 1 GB 14 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp6.860</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp10.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp3.140</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_LO564KQS" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_LO564KQS" name="productDenomination" value="LO564KQS" data-price-preview="13700" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_LO564KQS">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/dcc0f715-fb1c-4e05-abee-2e905a192a17.png?w=75" alt="Data 2 GB 7 Hari">
                                                                <span id="productDenominationTitle_LO564KQS" class="fs-sm fw-semibold">Data 2 GB 7 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp13.700</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp20.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp6.300</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_YJ101DEX" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_YJ101DEX" name="productDenomination" value="YJ101DEX" data-price-preview="27360" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_YJ101DEX">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/85bcdba0-8e66-41ea-8f5d-801bfe34020b.png?w=75" alt="Data 4 GB 30 Hari">
                                                                <span id="productDenominationTitle_YJ101DEX" class="fs-sm fw-semibold">Data 4 GB 30 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp27.360</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp40.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp12.640</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_YG284TNZ" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_YG284TNZ" name="productDenomination" value="YG284TNZ" data-price-preview="34210" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_YG284TNZ">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/c466d46c-cf21-46e5-9ba7-4859741520df.png?w=75" alt="Data 5 GB 30 Hari">
                                                                <span id="productDenominationTitle_YG284TNZ" class="fs-sm fw-semibold">Data 5 GB 30 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp34.210</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp50.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp15.790</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_MK688POW" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_MK688POW" name="productDenomination" value="MK688POW" data-price-preview="41030" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_MK688POW">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/e83eb9dd-4379-48ea-befd-6463bd3ad4b0.png?w=75" alt="Data 6 GB 30 Hari">
                                                                <span id="productDenominationTitle_MK688POW" class="fs-sm fw-semibold">Data 6 GB 30 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp41.030</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp60.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp18.970</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_JR182V93" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_JR182V93" name="productDenomination" value="JR182V93" data-price-preview="47860" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_JR182V93">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/6d886db6-4e5c-49f3-8dd7-f90f73d23c92.png?w=75" alt="Data 7 GB 30 Hari">
                                                                <span id="productDenominationTitle_JR182V93" class="fs-sm fw-semibold">Data 7 GB 30 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp47.860</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp70.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp22.140</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_FP437JYC" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_FP437JYC" name="productDenomination" value="FP437JYC" data-price-preview="54680" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_FP437JYC">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/d428940d-e1c7-4ed8-981b-220e3a6074bb.png?w=75" alt="Data 8 GB 30 Hari">
                                                                <span id="productDenominationTitle_FP437JYC" class="fs-sm fw-semibold">Data 8 GB 30 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp54.680</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp80.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp25.320</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_FQ682M00" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_FQ682M00" name="productDenomination" value="FQ682M00" data-price-preview="61510" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_FQ682M00">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/ac4beb4e-b737-4f38-9a79-fa96538dbf71.png?w=75" alt="Data 9 GB 30 Hari">
                                                                <span id="productDenominationTitle_FQ682M00" class="fs-sm fw-semibold">Data 9 GB 30 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp61.510</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp90.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp28.490</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_HW465FS5" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_HW465FS5" name="productDenomination" value="HW465FS5" data-price-preview="42820" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_HW465FS5">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/212f76e4-c1f7-43ee-bb5f-b850decd5063.png?w=75" alt="Freedom Combo 6 GB 30 Hari">
                                                                <span id="productDenominationTitle_HW465FS5" class="fs-sm fw-semibold">Freedom Combo 6 GB 30 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp42.820</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp60.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp17.180</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_VN6252Q4" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_VN6252Q4" name="productDenomination" value="VN6252Q4" data-price-preview="57610" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_VN6252Q4">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/9badd4b6-4ed3-4676-b5a4-59c5e34664ef.png?w=75" alt="Freedom Combo 10 GB 30 Hari">
                                                                <span id="productDenominationTitle_VN6252Q4" class="fs-sm fw-semibold">Freedom Combo 10 GB 30 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp57.610</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp70.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp12.390</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_QM316PT6" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_QM316PT6" name="productDenomination" value="QM316PT6" data-price-preview="86840" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_QM316PT6">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/38f1b7f6-b974-490e-a709-94f2ca539963.png?w=75" alt="Freedom Combo 20 GB 30 Hari">
                                                                <span id="productDenominationTitle_QM316PT6" class="fs-sm fw-semibold">Freedom Combo 20 GB 30 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp86.840</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp120.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp33.160</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_YB221Q3W" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_YB221Q3W" name="productDenomination" value="YB221Q3W" data-price-preview="111380" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_YB221Q3W">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/c2758bdf-583c-40bb-9b8c-9a8ff32ac99d.png?w=75" alt="Freedom Combo 30 GB 30 Hari">
                                                                <span id="productDenominationTitle_YB221Q3W" class="fs-sm fw-semibold">Freedom Combo 30 GB 30 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp111.380</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp160.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp48.620</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_SX96352R" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_SX96352R" name="productDenomination" value="SX96352R" data-price-preview="7050" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_SX96352R">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/8a9e2569-fe7f-4b3b-b3bf-31354d7d4dd3.png?w=75" alt="Freedom Internet 1 GB 2 Hari">
                                                                <span id="productDenominationTitle_SX96352R" class="fs-sm fw-semibold">Freedom Internet 1 GB 2 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp7.050</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp10.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp2.950</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_SA0861JT" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_SA0861JT" name="productDenomination" value="SA0861JT" data-price-preview="6990" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_SA0861JT">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/e2b9df0c-e585-4689-aacf-cd8b9e1d38ea.png?w=75" alt="Freedom Internet 1.5 GB 1 Hari">
                                                                <span id="productDenominationTitle_SA0861JT" class="fs-sm fw-semibold">Freedom Internet 1.5 GB 1 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp6.990</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp10.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp3.010</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_XA602A9R" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_XA602A9R" name="productDenomination" value="XA602A9R" data-price-preview="10080" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_XA602A9R">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/c533c71f-e685-4ddf-b648-5c7930038c78.png?w=75" alt="Freedom Internet 1.5 GB 3 Hari">
                                                                <span id="productDenominationTitle_XA602A9R" class="fs-sm fw-semibold">Freedom Internet 1.5 GB 3 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp10.080</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp15.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp4.920</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_QK331D6G" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_QK331D6G" name="productDenomination" value="QK331D6G" data-price-preview="14900" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_QK331D6G">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/1c7f18bd-4269-48df-bc4b-6cdcf899c333.png?w=75" alt="Freedom Internet 2 GB 5 Hari">
                                                                <span id="productDenominationTitle_QK331D6G" class="fs-sm fw-semibold">Freedom Internet 2 GB 5 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp14.900</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp20.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp5.100</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_PI4846LL" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_PI4846LL" name="productDenomination" value="PI4846LL" data-price-preview="14920" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_PI4846LL">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/d1836393-ac7b-43ed-8b81-6e7a21a8c253.png?w=75" alt="Freedom Internet 2.5 GB 5 Hari">
                                                                <span id="productDenominationTitle_PI4846LL" class="fs-sm fw-semibold">Freedom Internet 2.5 GB 5 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp14.920</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp20.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp5.080</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_ED94700Y" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_ED94700Y" name="productDenomination" value="ED94700Y" data-price-preview="8290" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_ED94700Y">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/bbebcbb5-e0bd-4625-9a80-edcf33657605.png?w=75" alt="Freedom Internet 3 GB 1 Hari">
                                                                <span id="productDenominationTitle_ED94700Y" class="fs-sm fw-semibold">Freedom Internet 3 GB 1 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp8.290</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp15.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp6.710</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_VQ226JBO" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_VQ226JBO" name="productDenomination" value="VQ226JBO" data-price-preview="23510" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_VQ226JBO">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/8cc2ee1b-86ff-455e-929e-9af7d772023e.png?w=75" alt="Freedom Internet 3 GB 14 Hari">
                                                                <span id="productDenominationTitle_VQ226JBO" class="fs-sm fw-semibold">Freedom Internet 3 GB 14 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp23.510</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp30.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp6.490</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_QH500DOW" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_QH500DOW" name="productDenomination" value="QH500DOW" data-price-preview="16260" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_QH500DOW">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/91759110-cbd4-46c7-b03f-6e4f468419fd.png?w=75" alt="Freedom Internet 3.5 GB 5 Hari">
                                                                <span id="productDenominationTitle_QH500DOW" class="fs-sm fw-semibold">Freedom Internet 3.5 GB 5 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp16.260</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp20.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp3.740</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_YY1192PN" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_YY1192PN" name="productDenomination" value="YY1192PN" data-price-preview="16280" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_YY1192PN">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/bb93e87e-a430-44eb-b191-dc031b00cbc9.png?w=75" alt="Freedom Internet 4 GB 5 Hari">
                                                                <span id="productDenominationTitle_YY1192PN" class="fs-sm fw-semibold">Freedom Internet 4 GB 5 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp16.280</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp20.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp3.720</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_JF149T9V" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_JF149T9V" name="productDenomination" value="JF149T9V" data-price-preview="9920" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_JF149T9V">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/4a3cecda-5621-416b-abfb-b9bf21134326.png?w=75" alt="Freedom Internet 5 GB 2 Hari">
                                                                <span id="productDenominationTitle_JF149T9V" class="fs-sm fw-semibold">Freedom Internet 5 GB 2 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp9.920</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp20.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp10.080</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_MZ2628F5" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_MZ2628F5" name="productDenomination" value="MZ2628F5" data-price-preview="15050" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_MZ2628F5">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/623f95d7-385e-43c5-92c0-e95b0f1d7769.png?w=75" alt="Freedom Internet 5 GB 3 Hari">
                                                                <span id="productDenominationTitle_MZ2628F5" class="fs-sm fw-semibold">Freedom Internet 5 GB 3 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp15.050</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp20.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp4.950</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_WO510KNP" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_WO510KNP" name="productDenomination" value="WO510KNP" data-price-preview="19940" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_WO510KNP">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/deb2b628-3a87-4c22-9d30-f186f6b9739e.png?w=75" alt="Freedom Internet 5 GB 5 Hari">
                                                                <span id="productDenominationTitle_WO510KNP" class="fs-sm fw-semibold">Freedom Internet 5 GB 5 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp19.940</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp25.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp5.060</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_MK248BWX" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_MK248BWX" name="productDenomination" value="MK248BWX" data-price-preview="19950" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_MK248BWX">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/07a627a0-0b91-48e5-b258-01e1b38e8203.png?w=75" alt="Freedom Internet 6 GB 5 Hari">
                                                                <span id="productDenominationTitle_MK248BWX" class="fs-sm fw-semibold">Freedom Internet 6 GB 5 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp19.950</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp25.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp5.050</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_DP821I41" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_DP821I41" name="productDenomination" value="DP821I41" data-price-preview="35230" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_DP821I41">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/b1c0c004-4bdb-449c-8436-c2d5dfab1fea.png?w=75" alt="Freedom Internet 6.5 GB 28 Hari">
                                                                <span id="productDenominationTitle_DP821I41" class="fs-sm fw-semibold">Freedom Internet 6.5 GB 28 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp35.230</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp50.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp14.770</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_BJ7048KT" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_BJ7048KT" name="productDenomination" value="BJ7048KT" data-price-preview="26560" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_BJ7048KT">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/f8994f1f-ccab-4f95-aa19-22fd07718c7d.png?w=75" alt="Freedom Internet 7 GB 7 Hari">
                                                                <span id="productDenominationTitle_BJ7048KT" class="fs-sm fw-semibold">Freedom Internet 7 GB 7 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp26.560</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp50.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp23.440</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_UV461KIF" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_UV461KIF" name="productDenomination" value="UV461KIF" data-price-preview="35230" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_UV461KIF">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/0a738517-02ef-47fe-a58f-20eef46091f1.png?w=75" alt="Freedom Internet 7 GB 28 Hari">
                                                                <span id="productDenominationTitle_UV461KIF" class="fs-sm fw-semibold">Freedom Internet 7 GB 28 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp35.230</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp50.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp14.770</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_GE7474P7" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_GE7474P7" name="productDenomination" value="GE7474P7" data-price-preview="32030" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_GE7474P7">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/d86c8daf-2e98-4e35-843a-0d706e756f83.png?w=75" alt="Freedom Internet 9 GB 7 Hari">
                                                                <span id="productDenominationTitle_GE7474P7" class="fs-sm fw-semibold">Freedom Internet 9 GB 7 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp32.030</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp50.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp17.970</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_GU137P8N" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_GU137P8N" name="productDenomination" value="GU137P8N" data-price-preview="40120" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_GU137P8N">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/2a7b7155-e035-416d-b495-28a98a494765.png?w=75" alt="Freedom Internet 9 GB 28 Hari">
                                                                <span id="productDenominationTitle_GU137P8N" class="fs-sm fw-semibold">Freedom Internet 9 GB 28 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp40.120</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp60.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp19.880</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_HP177NXX" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_HP177NXX" name="productDenomination" value="HP177NXX" data-price-preview="53020" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_HP177NXX">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/cb6d8327-726b-45ad-8e36-018ea9c6d33a.png?w=75" alt="Freedom Internet 12 GB 28 Hari">
                                                                <span id="productDenominationTitle_HP177NXX" class="fs-sm fw-semibold">Freedom Internet 12 GB 28 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp53.020</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp75.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp21.980</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_DO0731AT" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_DO0731AT" name="productDenomination" value="DO0731AT" data-price-preview="53020" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_DO0731AT">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/f6e334c2-aca5-4c54-860c-ca46352eba02.png?w=75" alt="Freedom Internet 13 GB 28 Hari">
                                                                <span id="productDenominationTitle_DO0731AT" class="fs-sm fw-semibold">Freedom Internet 13 GB 28 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp53.020</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp80.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp26.980</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_AT7256NM" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_AT7256NM" name="productDenomination" value="AT7256NM" data-price-preview="45350" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_AT7256NM">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/496a8d62-4e6f-4dcf-9546-c3efddedd40c.png?w=75" alt="Freedom Internet 14 GB 28 Hari">
                                                                <span id="productDenominationTitle_AT7256NM" class="fs-sm fw-semibold">Freedom Internet 14 GB 28 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp45.350</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp80.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp34.650</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_LF269164" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_LF269164" name="productDenomination" value="LF269164" data-price-preview="32660" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_LF269164">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/3707ccee-e520-4f81-9984-11b2241b1b96.png?w=75" alt="Freedom Internet 15 GB 7 Hari">
                                                                <span id="productDenominationTitle_LF269164" class="fs-sm fw-semibold">Freedom Internet 15 GB 7 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp32.660</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp80.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp47.340</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_XS832PTD" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_XS832PTD" name="productDenomination" value="XS832PTD" data-price-preview="53110" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_XS832PTD">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/00a4a0b4-33a1-4d9f-a9be-c97837cc9aee.png?w=75" alt="Freedom Internet 16 GB 28 Hari">
                                                                <span id="productDenominationTitle_XS832PTD" class="fs-sm fw-semibold">Freedom Internet 16 GB 28 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp53.110</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp80.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp26.890</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_WO152MNO" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_WO152MNO" name="productDenomination" value="WO152MNO" data-price-preview="41030" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_WO152MNO">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/f1fac8a0-1b83-4b51-8149-ac61f60052c3.png?w=75" alt="Freedom Internet 18 GB 7 Hari">
                                                                <span id="productDenominationTitle_WO152MNO" class="fs-sm fw-semibold">Freedom Internet 18 GB 7 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp41.030</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp80.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp38.970</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_GU138I5P" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_GU138I5P" name="productDenomination" value="GU138I5P" data-price-preview="62990" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_GU138I5P">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/f1392af5-64f3-400b-a58c-128ec07dedb8.png?w=75" alt="Freedom Internet 18 GB 28 Hari">
                                                                <span id="productDenominationTitle_GU138I5P" class="fs-sm fw-semibold">Freedom Internet 18 GB 28 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp62.990</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp80.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp17.010</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_RH734ZG7" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_RH734ZG7" name="productDenomination" value="RH734ZG7" data-price-preview="63840" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_RH734ZG7">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/4a33938a-64f8-41ff-9d41-42601def55f2.png?w=75" alt="Freedom Internet 20 GB 28 Hari">
                                                                <span id="productDenominationTitle_RH734ZG7" class="fs-sm fw-semibold">Freedom Internet 20 GB 28 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp63.840</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp80.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp16.160</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_SZ763Q9G" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_SZ763Q9G" name="productDenomination" value="SZ763Q9G" data-price-preview="106310" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_SZ763Q9G">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/721af4c7-3773-476b-9f19-8a89fc65906d.png?w=75" alt="Freedom Internet 50 GB 28 Hari">
                                                                <span id="productDenominationTitle_SZ763Q9G" class="fs-sm fw-semibold">Freedom Internet 50 GB 28 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp106.310</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp150.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp43.690</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_LX863I6P" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_LX863I6P" name="productDenomination" value="LX863I6P" data-price-preview="135610" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_LX863I6P">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/c0b64afa-c3b5-4a6e-b6eb-2913d0de4b6d.png?w=75" alt="Freedom Internet 100 GB 28 Hari">
                                                                <span id="productDenominationTitle_LX863I6P" class="fs-sm fw-semibold">Freedom Internet 100 GB 28 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp135.610</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp200.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp64.390</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_LE418JWS" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_LE418JWS" name="productDenomination" value="LE418JWS" data-price-preview="156640" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_LE418JWS">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/c032d958-ffea-4e38-beb3-19dd6194ca59.png?w=75" alt="Freedom Internet 150 GB 28 Hari">
                                                                <span id="productDenominationTitle_LE418JWS" class="fs-sm fw-semibold">Freedom Internet 150 GB 28 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp156.640</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp250.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp93.360</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_HT093GJC" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_HT093GJC" name="productDenomination" value="HT093GJC" data-price-preview="42300" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_HT093GJC">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/109675c9-47b7-4c0d-a99b-17a9f67b6f70.png?w=75" alt="Freedom U 5.5 GB 30 Hari">
                                                                <span id="productDenominationTitle_HT093GJC" class="fs-sm fw-semibold">Freedom U 5.5 GB 30 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp42.300</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp60.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp17.700</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_BV549HVD" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_BV549HVD" name="productDenomination" value="BV549HVD" data-price-preview="68150" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_BV549HVD">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/28ab7b92-6ec8-4e09-bd73-aac3ffc3bfde.png?w=75" alt="Freedom U 10 GB 30 Hari">
                                                                <span id="productDenominationTitle_BV549HVD" class="fs-sm fw-semibold">Freedom U 10 GB 30 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp68.150</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp100.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp31.850</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_PK101GWH" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_PK101GWH" name="productDenomination" value="PK101GWH" data-price-preview="95260" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_PK101GWH">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/39e21678-86cd-451f-ab4d-14f9dfbef811.png?w=75" alt="Freedom U 20 GB 30 Hari">
                                                                <span id="productDenominationTitle_PK101GWH" class="fs-sm fw-semibold">Freedom U 20 GB 30 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp95.260</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp150.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp54.740</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_YS943J17" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_YS943J17" name="productDenomination" value="YS943J17" data-price-preview="121850" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_YS943J17">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/b3907a0f-1057-4173-bad7-d61f1413939a.png?w=75" alt="Freedom U 35 GB 30 Hari">
                                                                <span id="productDenominationTitle_YS943J17" class="fs-sm fw-semibold">Freedom U 35 GB 30 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp121.850</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp200.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp78.150</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_TV4579QY" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_TV4579QY" name="productDenomination" value="TV4579QY" data-price-preview="134560" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_TV4579QY">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/30e1a213-eda4-47b9-881d-877e0221bc6e.png?w=75" alt="Freedom U 45 GB 30 Hari">
                                                                <span id="productDenominationTitle_TV4579QY" class="fs-sm fw-semibold">Freedom U 45 GB 30 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp134.560</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp250.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp115.440</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_ZO881Z04" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_ZO881Z04" name="productDenomination" value="ZO881Z04" data-price-preview="176160" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_ZO881Z04">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/251edfb7-1676-4b48-9f6f-14c4a96f5ec2.png?w=75" alt="Freedom U 90GB 30 Hari">
                                                                <span id="productDenominationTitle_ZO881Z04" class="fs-sm fw-semibold">Freedom U 90GB 30 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp176.160</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp250.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp73.840</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_PD015RB0" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_PD015RB0" name="productDenomination" value="PD015RB0" data-price-preview="6870" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_PD015RB0">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/caebafdd-160e-4aa6-858a-6824558f334d.png?w=75" alt="Yellow 1 GB 1 Hari">
                                                                <span id="productDenominationTitle_PD015RB0" class="fs-sm fw-semibold">Yellow 1 GB 1 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp6.870</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp10.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp3.130</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_OE067E9P" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_OE067E9P" name="productDenomination" value="OE067E9P" data-price-preview="6900" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_OE067E9P">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/22f28c23-1d92-42d4-8f5d-a6518342ab4f.png?w=75" alt="Yellow 1 GB 3 Hari">
                                                                <span id="productDenominationTitle_OE067E9P" class="fs-sm fw-semibold">Yellow 1 GB 3 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp6.900</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp10.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp3.100</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_RV4036YU" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_RV4036YU" name="productDenomination" value="RV4036YU" data-price-preview="6960" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_RV4036YU">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/118063df-f4e8-4ded-9642-3d9dbd023ca4.png?w=75" alt="Yellow 1 GB 7 Hari">
                                                                <span id="productDenominationTitle_RV4036YU" class="fs-sm fw-semibold">Yellow 1 GB 7 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp6.960</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp10.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp3.040</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_AN876213" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_AN876213" name="productDenomination" value="AN876213" data-price-preview="7440" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_AN876213">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/41515337-3c47-4788-9938-4cb4125bc73e.png?w=75" alt="Yellow 1 GB 15 Hari">
                                                                <span id="productDenominationTitle_AN876213" class="fs-sm fw-semibold">Yellow 1 GB 15 Hari</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp7.440</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp10.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp2.560</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- END Denomination -->

                                <!-- Payment Method -->
                                <li id="content-method" class="timeline-event" style="scroll-margin-top: 75px;">
                                    <div class="timeline-event-icon-flat bg-xwork">
                                        <span class="fs-lg fw-bold">3</span>
                                    </div>
                                    <div class="product-block timeline-event-block-no-sm block block-rounded block-mode-loading-circle block-themed">
                                        <div class="block-header block-header-default" style="background-color: #535c76;">
                                            <h3 class="block-title ms-5 ms-md-0">Pilih Metode Pembayaran</h3>
                                        </div>
                                        <div class="block-content block-content-full pb-2">
                                            <div id="productPaymentMethodContainer_18486622" class="productPaymentMethodContainer form-check form-block highlight mb-3">
                                                <input type="radio" class="form-check-input" id="productPaymentMethod_18486622" name="productPaymentMethod" value="18486622" data-xmethod="18486622" data-exfee="false" data-guarantee="false" disabled="" required>
                                                <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_18486622">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-inline-flex">
                                                            <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/069780d9-dab7-43e8-8e08-7715d92722f4.jpg">
                                                            </div>
                                                            <div class="my-auto">
                                                                <span class="chTitle fs-sm d-block fw-semibold">Gimkoin</span>
                                                                <p class="mtdTitle fs-xs m-0">Saldo Cashback</p>
                                                            </div>
                                                        </div>
                                                        <div id="productChannelName_18486622" class="productChannelName d-flex justify-content-end my-auto">
                                                            <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between form-check-description px-2 px-md-4 pt-2 mb-2 border-top border-2">
                                                        <span class="fs-xs">Bayar dengan saldo Cashback</span>
                                                        <a class="fs-xs text-primary fw-semibold" href="{{ route('page.show', 'apa-itu-gimkoin') }}" target="_blank" rel="noopener noreferrer">Apa itu Gimkoin?</a>
                                                    </div>
                                                </label>
                                            </div>                                            <div id="productPaymentMethodContainer_51372103" class="productPaymentMethodContainer form-check form-block highlight mb-3">
                                                <input type="radio" class="form-check-input" id="productPaymentMethod_51372103" name="productPaymentMethod" value="51372103" data-xmethod="51372103" data-exfee="false" data-guarantee="false" disabled="" required>
                                                <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_51372103">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-inline-flex">
                                                            <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/a9add32c-139d-4035-b768-2725f61baf34.jpg">
                                                            </div>
                                                            <div class="my-auto">
                                                                <span class="chTitle fs-sm d-block fw-semibold">QRIS</span>
                                                                <p class="mtdTitle fs-xs m-0">QR Kode</p>
                                                            </div>
                                                        </div>
                                                        <div id="productChannelName_51372103" class="productChannelName d-flex justify-content-end my-auto">
                                                            <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                        </div>
                                                    </div>
                                                    <p class="form-check-description fs-xs px-2 px-md-4 pt-2 mb-2 border-top border-2">
                                                        Cukup dengan <span class="fw-semibold">satu HP</span>, unduh QR kode dan unggah ke eWallet/mBanking milikmu
                                                    </p>
                                                </label>
                                            </div>
                                            <div id="method-EWALLET" class="method-container d-flex flex-column">
                                                <div class="method-group-label form-check form-block highlight mb-3">
                                                    <div class="form-check-label-rounded-lg h-100 p-0" onclick="document.querySelector('#method-EWALLET').classList.toggle('active');">
                                                        <div class="d-flex align-items-center py-2">
                                                            <div class="flex-grow-1 d-flex align-items-center mx-2 mx-md-4">
                                                                <span class="fw-semibold text-start my-2 me-1">eWallet</span>
                                                                <i class="method-angle-down fa fa-caret-down"></i>
                                                                <i class="method-angle-up fa fa-caret-up" style="display: none;"></i>
                                                            </div>
                                                            <div id="productMethodPrice_EWALLET" class="productMethodPrice method-angle-down d-flex justify-content-end my-auto pe-2 pe-md-4 text-nowrap">
                                                                <span class="d-block fs-sm text-end ms-2">Tidak tersedia</span>
                                                            </div>
                                                        </div>
                                                        <div class="method-icons d-flex align-items-center justify-content-between px-2 px-md-4 py-3 border-top border-2 animated fadeIn">
                                                            <div class="d-flex flex-row flex-wrap justify-content-start gap-2">
                                                                <div id="pmIcon_42913540" class="pmIcon text-center bg-white rounded px-2 border">
                                                                    <img class="img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/payment-channels/83f43cd0-202e-4f59-b2ff-853248d16e14.jpg">
                                                                </div>
                                                                <div id="pmIcon_94214661" class="pmIcon text-center bg-white rounded px-2 border">
                                                                    <img class="img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/payment-channels/f5587735-096c-4730-b053-c0d0136ad166.jpg">
                                                                </div>
                                                                <div id="pmIcon_23192177" class="pmIcon text-center bg-white rounded px-2 border">
                                                                    <img class="img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/payment-channels/d6e5c8c4-ff27-4260-8064-2e8641e95d8a.jpg">
                                                                </div>
                                                                <div id="pmIcon_48997978" class="pmIcon text-center bg-white rounded px-2 border">
                                                                    <img class="img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/payment-channels/e10a42bb-681c-4393-8bc3-be122fc7621d.jpg">
                                                                </div>
                                                                <div id="pmIcon_56178729" class="pmIcon text-center bg-white rounded px-2 border">
                                                                    <img class="img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/payment-channels/e5d0235e-de56-406d-bf5d-e50a5038c55a.jpg">
                                                                </div>
                                                                <div id="pmIcon_21321503" class="pmIcon text-center bg-white rounded px-2 border">
                                                                    <img class="img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/payment-channels/6e7c9977-84b8-4d69-80c9-1c5cf1af1256.jpg">
                                                                </div>
                                                                <div id="pmIcon_27714241" class="pmIcon text-center bg-white rounded px-2 border">
                                                                    <img class="img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/payment-channels/d40912c5-ac75-47e1-b902-de4dfd1d2cd5.jpg">
                                                                </div>
                                                                <div id="pmIcon_37311285" class="pmIcon text-center bg-white rounded px-2 border">
                                                                    <img class="img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/payment-channels/5d37722c-3f15-406e-8bb2-97bb593ab5b3.jpg">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="method-group d-flex flex-column animated fadeIn" style="display: none;">
                                                    <div id="productPaymentMethodContainer_42913540" class="productPaymentMethodContainer form-check form-block highlight mb-3 ms-3 ms-md-3">
                                                        <input type="radio" class="form-check-input" id="productPaymentMethod_42913540" name="productPaymentMethod" value="42913540" data-xmethod="51372103" data-exfee="false" data-guarantee="false" disabled="" required>
                                                        <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_42913540">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-inline-flex">
                                                                    <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                        <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/83f43cd0-202e-4f59-b2ff-853248d16e14.jpg">
                                                                    </div>
                                                                    <div class="my-auto">
                                                                        <span class="chTitle fs-sm d-block fw-semibold"> Linkaja (QR)</span>
                                                                        <p class="mtdTitle fs-xs m-0 d-none">eWallet</p>
                                                                    </div>
                                                                </div>
                                                                <div id="productChannelName_42913540" class="productChannelName d-flex justify-content-end my-auto">
                                                                    <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>                                                    <div id="productPaymentMethodContainer_94214661" class="productPaymentMethodContainer form-check form-block highlight mb-3 ms-3 ms-md-3">
                                                        <input type="radio" class="form-check-input" id="productPaymentMethod_94214661" name="productPaymentMethod" value="94214661" data-xmethod="94214661" data-exfee="false" data-guarantee="false" disabled="" required>
                                                        <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_94214661">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-inline-flex">
                                                                    <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                        <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/f5587735-096c-4730-b053-c0d0136ad166.jpg">
                                                                    </div>
                                                                    <div class="my-auto">
                                                                        <span class="chTitle fs-sm d-block fw-semibold">Dana (App)</span>
                                                                        <p class="mtdTitle fs-xs m-0 d-none">eWallet</p>
                                                                    </div>
                                                                </div>
                                                                <div id="productChannelName_94214661" class="productChannelName d-flex justify-content-end my-auto">
                                                                    <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>                                                    <div id="productPaymentMethodContainer_23192177" class="productPaymentMethodContainer form-check form-block highlight mb-3 ms-3 ms-md-3">
                                                        <input type="radio" class="form-check-input" id="productPaymentMethod_23192177" name="productPaymentMethod" value="23192177" data-xmethod="51372103" data-exfee="false" data-guarantee="false" disabled="" required>
                                                        <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_23192177">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-inline-flex">
                                                                    <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                        <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/d6e5c8c4-ff27-4260-8064-2e8641e95d8a.jpg">
                                                                    </div>
                                                                    <div class="my-auto">
                                                                        <span class="chTitle fs-sm d-block fw-semibold">Dana (QR)</span>
                                                                        <p class="mtdTitle fs-xs m-0 d-none">eWallet</p>
                                                                    </div>
                                                                </div>
                                                                <div id="productChannelName_23192177" class="productChannelName d-flex justify-content-end my-auto">
                                                                    <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>                                                    <div id="productPaymentMethodContainer_48997978" class="productPaymentMethodContainer form-check form-block highlight mb-3 ms-3 ms-md-3">
                                                        <input type="radio" class="form-check-input" id="productPaymentMethod_48997978" name="productPaymentMethod" value="48997978" data-xmethod="51372103" data-exfee="false" data-guarantee="false" disabled="" required>
                                                        <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_48997978">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-inline-flex">
                                                                    <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                        <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/e10a42bb-681c-4393-8bc3-be122fc7621d.jpg">
                                                                    </div>
                                                                    <div class="my-auto">
                                                                        <span class="chTitle fs-sm d-block fw-semibold">GoPay (QR)</span>
                                                                        <p class="mtdTitle fs-xs m-0 d-none">eWallet</p>
                                                                    </div>
                                                                </div>
                                                                <div id="productChannelName_48997978" class="productChannelName d-flex justify-content-end my-auto">
                                                                    <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>                                                    <div id="productPaymentMethodContainer_56178729" class="productPaymentMethodContainer form-check form-block highlight mb-3 ms-3 ms-md-3">
                                                        <input type="radio" class="form-check-input" id="productPaymentMethod_56178729" name="productPaymentMethod" value="56178729" data-xmethod="56178729" data-exfee="false" data-guarantee="false" disabled="" required>
                                                        <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_56178729">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-inline-flex">
                                                                    <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                        <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/e5d0235e-de56-406d-bf5d-e50a5038c55a.jpg">
                                                                    </div>
                                                                    <div class="my-auto">
                                                                        <span class="chTitle fs-sm d-block fw-semibold">LinkAja (App)</span>
                                                                        <p class="mtdTitle fs-xs m-0 d-none">eWallet</p>
                                                                    </div>
                                                                </div>
                                                                <div id="productChannelName_56178729" class="productChannelName d-flex justify-content-end my-auto">
                                                                    <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>                                                    <div id="productPaymentMethodContainer_21321503" class="productPaymentMethodContainer form-check form-block highlight mb-3 ms-3 ms-md-3">
                                                        <input type="radio" class="form-check-input" id="productPaymentMethod_21321503" name="productPaymentMethod" value="21321503" data-xmethod="51372103" data-exfee="false" data-guarantee="false" disabled="" required>
                                                        <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_21321503">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-inline-flex">
                                                                    <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                        <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/6e7c9977-84b8-4d69-80c9-1c5cf1af1256.jpg">
                                                                    </div>
                                                                    <div class="my-auto">
                                                                        <span class="chTitle fs-sm d-block fw-semibold">OVO (QR)</span>
                                                                        <p class="mtdTitle fs-xs m-0 d-none">eWallet</p>
                                                                    </div>
                                                                </div>
                                                                <div id="productChannelName_21321503" class="productChannelName d-flex justify-content-end my-auto">
                                                                    <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>                                                    <div id="productPaymentMethodContainer_27714241" class="productPaymentMethodContainer form-check form-block highlight mb-3 ms-3 ms-md-3">
                                                        <input type="radio" class="form-check-input" id="productPaymentMethod_27714241" name="productPaymentMethod" value="27714241" data-xmethod="27714241" data-exfee="false" data-guarantee="false" disabled="" required>
                                                        <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_27714241">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-inline-flex">
                                                                    <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                        <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/d40912c5-ac75-47e1-b902-de4dfd1d2cd5.jpg">
                                                                    </div>
                                                                    <div class="my-auto">
                                                                        <span class="chTitle fs-sm d-block fw-semibold">ShopeePay (App)</span>
                                                                        <p class="mtdTitle fs-xs m-0 d-none">eWallet</p>
                                                                    </div>
                                                                </div>
                                                                <div id="productChannelName_27714241" class="productChannelName d-flex justify-content-end my-auto">
                                                                    <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>                                                    <div id="productPaymentMethodContainer_37311285" class="productPaymentMethodContainer form-check form-block highlight mb-3 ms-3 ms-md-3">
                                                        <input type="radio" class="form-check-input" id="productPaymentMethod_37311285" name="productPaymentMethod" value="37311285" data-xmethod="51372103" data-exfee="false" data-guarantee="false" disabled="" required>
                                                        <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_37311285">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-inline-flex">
                                                                    <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                        <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/5d37722c-3f15-406e-8bb2-97bb593ab5b3.jpg">
                                                                    </div>
                                                                    <div class="my-auto">
                                                                        <span class="chTitle fs-sm d-block fw-semibold">ShopeePay (QR)</span>
                                                                        <p class="mtdTitle fs-xs m-0 d-none">eWallet</p>
                                                                    </div>
                                                                </div>
                                                                <div id="productChannelName_37311285" class="productChannelName d-flex justify-content-end my-auto">
                                                                    <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>                                                </div>
                                            </div>


                                            <div id="method-MBANKING" class="method-container d-flex flex-column">
                                                <div class="method-group-label form-check form-block highlight mb-3">
                                                    <div class="form-check-label-rounded-lg h-100 p-0" onclick="document.querySelector('#method-MBANKING').classList.toggle('active');">
                                                        <div class="d-flex align-items-center py-2">
                                                            <div class="flex-grow-1 d-flex align-items-center mx-2 mx-md-4">
                                                                <span class="fw-semibold text-start my-2 me-1">mBanking</span>
                                                                <i class="method-angle-down fa fa-caret-down"></i>
                                                                <i class="method-angle-up fa fa-caret-up" style="display: none;"></i>
                                                            </div>
                                                            <div id="productMethodPrice_MBANKING" class="productMethodPrice method-angle-down d-flex justify-content-end my-auto pe-2 pe-md-4 text-nowrap">
                                                                <span class="d-block fs-sm text-end ms-2">Tidak tersedia</span>
                                                            </div>
                                                        </div>
                                                        <div class="method-icons d-flex align-items-center justify-content-between px-2 px-md-4 py-3 border-top border-2 animated fadeIn">
                                                            <div class="d-flex flex-row flex-wrap justify-content-start gap-2">
                                                                <div id="pmIcon_25410203" class="pmIcon text-center bg-white rounded px-2 border">
                                                                    <img class="img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/payment-channels/e4a8f3f1-c9d9-4a69-a338-9353cfee90c8.jpg">
                                                                </div>
                                                                <div id="pmIcon_93616855" class="pmIcon text-center bg-white rounded px-2 border">
                                                                    <img class="img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/payment-channels/a1567ccd-7d2f-4cab-9a44-e50a43b140da.jpg">
                                                                </div>
                                                                <div id="pmIcon_43256979" class="pmIcon text-center bg-white rounded px-2 border">
                                                                    <img class="img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/payment-channels/1fa083d0-0bac-4d0d-a764-fe7127abfdb7.jpg">
                                                                </div>
                                                                <div id="pmIcon_64719445" class="pmIcon text-center bg-white rounded px-2 border">
                                                                    <img class="img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/payment-channels/94e06db3-058d-4833-836f-f36f8dfde1c3.jpg">
                                                                </div>
                                                                <div id="pmIcon_15442137" class="pmIcon text-center bg-white rounded px-2 border">
                                                                    <img class="img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/payment-channels/38f2a7e9-fb33-4bd8-a889-249266e04b95.jpg">
                                                                </div>
                                                                <div id="pmIcon_84546359" class="pmIcon text-center bg-white rounded px-2 border">
                                                                    <img class="img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/payment-channels/14b99eeb-7696-4be8-8cab-0e890fd9bf3a.jpg">
                                                                </div>
                                                                <div id="pmIcon_53619375" class="pmIcon text-center bg-white rounded px-2 border">
                                                                    <img class="img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/payment-channels/192cec35-f3c6-4f45-8fce-fdccd0aba224.jpg">
                                                                </div>
                                                                <div id="pmIcon_56889498" class="pmIcon text-center bg-white rounded px-2 border">
                                                                    <img class="img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/payment-channels/7224b475-c99b-4f63-84f7-843bae156445.jpg">
                                                                </div>
                                                                <div id="pmIcon_19141661" class="pmIcon text-center bg-white rounded px-2 border">
                                                                    <img class="img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/payment-channels/54183392-fd3e-45bf-8db9-15a8c2667b17.jpg">
                                                                </div>
                                                                <div id="pmIcon_14320309" class="pmIcon text-center bg-white rounded px-2 border">
                                                                    <img class="img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/payment-channels/0448d945-90d0-493a-8753-f45dae3ee219.jpg">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="method-group d-flex flex-column animated fadeIn" style="display: none;">
                                                    <div id="productPaymentMethodContainer_25410203" class="productPaymentMethodContainer form-check form-block highlight mb-3 ms-3 ms-md-3">
                                                        <input type="radio" class="form-check-input" id="productPaymentMethod_25410203" name="productPaymentMethod" value="25410203" data-xmethod="51372103" data-exfee="false" data-guarantee="false" disabled="" required>
                                                        <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_25410203">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-inline-flex">
                                                                    <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                        <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/e4a8f3f1-c9d9-4a69-a338-9353cfee90c8.jpg">
                                                                    </div>
                                                                    <div class="my-auto">
                                                                        <span class="chTitle fs-sm d-block fw-semibold"> Neobank Digital</span>
                                                                        <p class="mtdTitle fs-xs m-0 d-none">mBanking</p>
                                                                    </div>
                                                                </div>
                                                                <div id="productChannelName_25410203" class="productChannelName d-flex justify-content-end my-auto">
                                                                    <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>                                                    <div id="productPaymentMethodContainer_93616855" class="productPaymentMethodContainer form-check form-block highlight mb-3 ms-3 ms-md-3">
                                                        <input type="radio" class="form-check-input" id="productPaymentMethod_93616855" name="productPaymentMethod" value="93616855" data-xmethod="51372103" data-exfee="false" data-guarantee="false" disabled="" required>
                                                        <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_93616855">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-inline-flex">
                                                                    <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                        <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/a1567ccd-7d2f-4cab-9a44-e50a43b140da.jpg">
                                                                    </div>
                                                                    <div class="my-auto">
                                                                        <span class="chTitle fs-sm d-block fw-semibold">BCA mobile</span>
                                                                        <p class="mtdTitle fs-xs m-0 d-none">mBanking</p>
                                                                    </div>
                                                                </div>
                                                                <div id="productChannelName_93616855" class="productChannelName d-flex justify-content-end my-auto">
                                                                    <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>                                                    <div id="productPaymentMethodContainer_43256979" class="productPaymentMethodContainer form-check form-block highlight mb-3 ms-3 ms-md-3">
                                                        <input type="radio" class="form-check-input" id="productPaymentMethod_43256979" name="productPaymentMethod" value="43256979" data-xmethod="51372103" data-exfee="false" data-guarantee="false" disabled="" required>
                                                        <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_43256979">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-inline-flex">
                                                                    <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                        <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/1fa083d0-0bac-4d0d-a764-fe7127abfdb7.jpg">
                                                                    </div>
                                                                    <div class="my-auto">
                                                                        <span class="chTitle fs-sm d-block fw-semibold">BNI Mobile</span>
                                                                        <p class="mtdTitle fs-xs m-0 d-none">mBanking</p>
                                                                    </div>
                                                                </div>
                                                                <div id="productChannelName_43256979" class="productChannelName d-flex justify-content-end my-auto">
                                                                    <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>                                                    <div id="productPaymentMethodContainer_64719445" class="productPaymentMethodContainer form-check form-block highlight mb-3 ms-3 ms-md-3">
                                                        <input type="radio" class="form-check-input" id="productPaymentMethod_64719445" name="productPaymentMethod" value="64719445" data-xmethod="51372103" data-exfee="false" data-guarantee="false" disabled="" required>
                                                        <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_64719445">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-inline-flex">
                                                                    <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                        <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/94e06db3-058d-4833-836f-f36f8dfde1c3.jpg">
                                                                    </div>
                                                                    <div class="my-auto">
                                                                        <span class="chTitle fs-sm d-block fw-semibold">BRImo BRI</span>
                                                                        <p class="mtdTitle fs-xs m-0 d-none">mBanking</p>
                                                                    </div>
                                                                </div>
                                                                <div id="productChannelName_64719445" class="productChannelName d-flex justify-content-end my-auto">
                                                                    <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>                                                    <div id="productPaymentMethodContainer_15442137" class="productPaymentMethodContainer form-check form-block highlight mb-3 ms-3 ms-md-3">
                                                        <input type="radio" class="form-check-input" id="productPaymentMethod_15442137" name="productPaymentMethod" value="15442137" data-xmethod="51372103" data-exfee="false" data-guarantee="false" disabled="" required>
                                                        <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_15442137">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-inline-flex">
                                                                    <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                        <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/38f2a7e9-fb33-4bd8-a889-249266e04b95.jpg">
                                                                    </div>
                                                                    <div class="my-auto">
                                                                        <span class="chTitle fs-sm d-block fw-semibold">BSI Mobile</span>
                                                                        <p class="mtdTitle fs-xs m-0 d-none">mBanking</p>
                                                                    </div>
                                                                </div>
                                                                <div id="productChannelName_15442137" class="productChannelName d-flex justify-content-end my-auto">
                                                                    <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>                                                    <div id="productPaymentMethodContainer_84546359" class="productPaymentMethodContainer form-check form-block highlight mb-3 ms-3 ms-md-3">
                                                        <input type="radio" class="form-check-input" id="productPaymentMethod_84546359" name="productPaymentMethod" value="84546359" data-xmethod="51372103" data-exfee="false" data-guarantee="false" disabled="" required>
                                                        <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_84546359">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-inline-flex">
                                                                    <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                        <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/14b99eeb-7696-4be8-8cab-0e890fd9bf3a.jpg">
                                                                    </div>
                                                                    <div class="my-auto">
                                                                        <span class="chTitle fs-sm d-block fw-semibold">CIMB Octo Mobile</span>
                                                                        <p class="mtdTitle fs-xs m-0 d-none">mBanking</p>
                                                                    </div>
                                                                </div>
                                                                <div id="productChannelName_84546359" class="productChannelName d-flex justify-content-end my-auto">
                                                                    <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>                                                    <div id="productPaymentMethodContainer_53619375" class="productPaymentMethodContainer form-check form-block highlight mb-3 ms-3 ms-md-3">
                                                        <input type="radio" class="form-check-input" id="productPaymentMethod_53619375" name="productPaymentMethod" value="53619375" data-xmethod="51372103" data-exfee="false" data-guarantee="false" disabled="" required>
                                                        <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_53619375">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-inline-flex">
                                                                    <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                        <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/192cec35-f3c6-4f45-8fce-fdccd0aba224.jpg">
                                                                    </div>
                                                                    <div class="my-auto">
                                                                        <span class="chTitle fs-sm d-block fw-semibold">Jago/Jago Syariah</span>
                                                                        <p class="mtdTitle fs-xs m-0 d-none">mBanking</p>
                                                                    </div>
                                                                </div>
                                                                <div id="productChannelName_53619375" class="productChannelName d-flex justify-content-end my-auto">
                                                                    <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>                                                    <div id="productPaymentMethodContainer_56889498" class="productPaymentMethodContainer form-check form-block highlight mb-3 ms-3 ms-md-3">
                                                        <input type="radio" class="form-check-input" id="productPaymentMethod_56889498" name="productPaymentMethod" value="56889498" data-xmethod="51372103" data-exfee="false" data-guarantee="false" disabled="" required>
                                                        <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_56889498">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-inline-flex">
                                                                    <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                        <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/7224b475-c99b-4f63-84f7-843bae156445.jpg">
                                                                    </div>
                                                                    <div class="my-auto">
                                                                        <span class="chTitle fs-sm d-block fw-semibold">Jenius</span>
                                                                        <p class="mtdTitle fs-xs m-0 d-none">mBanking</p>
                                                                    </div>
                                                                </div>
                                                                <div id="productChannelName_56889498" class="productChannelName d-flex justify-content-end my-auto">
                                                                    <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>                                                    <div id="productPaymentMethodContainer_19141661" class="productPaymentMethodContainer form-check form-block highlight mb-3 ms-3 ms-md-3">
                                                        <input type="radio" class="form-check-input" id="productPaymentMethod_19141661" name="productPaymentMethod" value="19141661" data-xmethod="51372103" data-exfee="false" data-guarantee="false" disabled="" required>
                                                        <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_19141661">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-inline-flex">
                                                                    <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                        <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/54183392-fd3e-45bf-8db9-15a8c2667b17.jpg">
                                                                    </div>
                                                                    <div class="my-auto">
                                                                        <span class="chTitle fs-sm d-block fw-semibold">Livin&#x27; Mandiri</span>
                                                                        <p class="mtdTitle fs-xs m-0 d-none">mBanking</p>
                                                                    </div>
                                                                </div>
                                                                <div id="productChannelName_19141661" class="productChannelName d-flex justify-content-end my-auto">
                                                                    <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>                                                    <div id="productPaymentMethodContainer_14320309" class="productPaymentMethodContainer form-check form-block highlight mb-3 ms-3 ms-md-3">
                                                        <input type="radio" class="form-check-input" id="productPaymentMethod_14320309" name="productPaymentMethod" value="14320309" data-xmethod="51372103" data-exfee="false" data-guarantee="false" disabled="" required>
                                                        <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_14320309">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-inline-flex">
                                                                    <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                        <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/0448d945-90d0-493a-8753-f45dae3ee219.jpg">
                                                                    </div>
                                                                    <div class="my-auto">
                                                                        <span class="chTitle fs-sm d-block fw-semibold">MyBCA</span>
                                                                        <p class="mtdTitle fs-xs m-0 d-none">mBanking</p>
                                                                    </div>
                                                                </div>
                                                                <div id="productChannelName_14320309" class="productChannelName d-flex justify-content-end my-auto">
                                                                    <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>                                                </div>
                                            </div>


                                            <div id="method-VIRTUAL_ACCOUNT" class="method-container d-flex flex-column">
                                                <div class="method-group-label form-check form-block highlight mb-3">
                                                    <div class="form-check-label-rounded-lg h-100 p-0" onclick="document.querySelector('#method-VIRTUAL_ACCOUNT').classList.toggle('active');">
                                                        <div class="d-flex align-items-center py-2">
                                                            <div class="flex-grow-1 d-flex align-items-center mx-2 mx-md-4">
                                                                <span class="fw-semibold text-start my-2 me-1">Tranfer Bank (VA)</span>
                                                                <i class="method-angle-down fa fa-caret-down"></i>
                                                                <i class="method-angle-up fa fa-caret-up" style="display: none;"></i>
                                                            </div>
                                                            <div id="productMethodPrice_VIRTUAL_ACCOUNT" class="productMethodPrice method-angle-down d-flex justify-content-end my-auto pe-2 pe-md-4 text-nowrap">
                                                                <span class="d-block fs-sm text-end ms-2">Tidak tersedia</span>
                                                            </div>
                                                        </div>
                                                        <div class="method-icons d-flex align-items-center justify-content-between px-2 px-md-4 py-3 border-top border-2 animated fadeIn">
                                                            <div class="d-flex flex-row flex-wrap justify-content-start gap-2">
                                                                <div id="pmIcon_89469209" class="pmIcon text-center bg-white rounded px-2 border">
                                                                    <img class="img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/payment-channels/ceb08c9f-3ae2-48a1-8980-aa3b6a53a7f5.jpg">
                                                                </div>
                                                                <div id="pmIcon_73893915" class="pmIcon text-center bg-white rounded px-2 border">
                                                                    <img class="img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/payment-channels/5e95bcfe-2441-4248-955a-f566a7bfeebd.jpg">
                                                                </div>
                                                                <div id="pmIcon_38595772" class="pmIcon text-center bg-white rounded px-2 border">
                                                                    <img class="img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/payment-channels/a6d18927-25d5-429d-973b-fef0f5835a76.jpg">
                                                                </div>
                                                                <div id="pmIcon_31851227" class="pmIcon text-center bg-white rounded px-2 border">
                                                                    <img class="img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/payment-channels/7c539dba-e821-4acf-a5e9-f9b61f26772a.jpg">
                                                                </div>
                                                                <div id="pmIcon_31190119" class="pmIcon text-center bg-white rounded px-2 border">
                                                                    <img class="img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/payment-channels/0b2378d9-284b-4cfe-932c-14cc2efa3db2.jpg">
                                                                </div>
                                                                <div id="pmIcon_45669464" class="pmIcon text-center bg-white rounded px-2 border">
                                                                    <img class="img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/payment-channels/5ee759e8-75c9-4267-959c-b0c4d0641882.jpg">
                                                                </div>
                                                                <div id="pmIcon_83318454" class="pmIcon text-center bg-white rounded px-2 border">
                                                                    <img class="img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/payment-channels/acba6501-88af-4369-8e4e-1c4e519e0238.jpg">
                                                                </div>
                                                                <div id="pmIcon_73452250" class="pmIcon text-center bg-white rounded px-2 border">
                                                                    <img class="img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/payment-channels/c713c4a5-62b7-4893-acba-efdef9acc403.jpg">
                                                                </div>
                                                                <div id="pmIcon_44532319" class="pmIcon text-center bg-white rounded px-2 border">
                                                                    <img class="img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/payment-channels/48e0bbc4-bc17-42f7-9340-dfd8ffc8ff31.jpg">
                                                                </div>
                                                                <div id="pmIcon_13920347" class="pmIcon text-center bg-white rounded px-2 border">
                                                                    <img class="img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/payment-channels/0ede6492-44b8-444d-951d-e6e60919a8f1.jpg">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="method-group d-flex flex-column animated fadeIn" style="display: none;">
                                                    <div id="productPaymentMethodContainer_89469209" class="productPaymentMethodContainer form-check form-block highlight mb-3 ms-3 ms-md-3">
                                                        <input type="radio" class="form-check-input" id="productPaymentMethod_89469209" name="productPaymentMethod" value="89469209" data-xmethod="89469209" data-exfee="false" data-guarantee="false" disabled="" required>
                                                        <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_89469209">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-inline-flex">
                                                                    <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                        <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/ceb08c9f-3ae2-48a1-8980-aa3b6a53a7f5.jpg">
                                                                    </div>
                                                                    <div class="my-auto">
                                                                        <span class="chTitle fs-sm d-block fw-semibold">ATM Bersama VA</span>
                                                                        <p class="mtdTitle fs-xs m-0 d-none">Tranfer Bank (VA)</p>
                                                                    </div>
                                                                </div>
                                                                <div id="productChannelName_89469209" class="productChannelName d-flex justify-content-end my-auto">
                                                                    <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>                                                    <div id="productPaymentMethodContainer_73893915" class="productPaymentMethodContainer form-check form-block highlight mb-3 ms-3 ms-md-3">
                                                        <input type="radio" class="form-check-input" id="productPaymentMethod_73893915" name="productPaymentMethod" value="73893915" data-xmethod="73893915" data-exfee="false" data-guarantee="false" disabled="" required>
                                                        <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_73893915">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-inline-flex">
                                                                    <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                        <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/5e95bcfe-2441-4248-955a-f566a7bfeebd.jpg">
                                                                    </div>
                                                                    <div class="my-auto">
                                                                        <span class="chTitle fs-sm d-block fw-semibold">BNI</span>
                                                                        <p class="mtdTitle fs-xs m-0 d-none">Tranfer Bank (VA)</p>
                                                                    </div>
                                                                </div>
                                                                <div id="productChannelName_73893915" class="productChannelName d-flex justify-content-end my-auto">
                                                                    <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>                                                    <div id="productPaymentMethodContainer_38595772" class="productPaymentMethodContainer form-check form-block highlight mb-3 ms-3 ms-md-3">
                                                        <input type="radio" class="form-check-input" id="productPaymentMethod_38595772" name="productPaymentMethod" value="38595772" data-xmethod="38595772" data-exfee="false" data-guarantee="false" disabled="" required>
                                                        <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_38595772">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-inline-flex">
                                                                    <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                        <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/a6d18927-25d5-429d-973b-fef0f5835a76.jpg">
                                                                    </div>
                                                                    <div class="my-auto">
                                                                        <span class="chTitle fs-sm d-block fw-semibold">BRI</span>
                                                                        <p class="mtdTitle fs-xs m-0 d-none">Tranfer Bank (VA)</p>
                                                                    </div>
                                                                </div>
                                                                <div id="productChannelName_38595772" class="productChannelName d-flex justify-content-end my-auto">
                                                                    <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>                                                    <div id="productPaymentMethodContainer_31851227" class="productPaymentMethodContainer form-check form-block highlight mb-3 ms-3 ms-md-3">
                                                        <input type="radio" class="form-check-input" id="productPaymentMethod_31851227" name="productPaymentMethod" value="31851227" data-xmethod="31851227" data-exfee="false" data-guarantee="false" disabled="" required>
                                                        <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_31851227">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-inline-flex">
                                                                    <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                        <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/7c539dba-e821-4acf-a5e9-f9b61f26772a.jpg">
                                                                    </div>
                                                                    <div class="my-auto">
                                                                        <span class="chTitle fs-sm d-block fw-semibold">BSI</span>
                                                                        <p class="mtdTitle fs-xs m-0 d-none">Tranfer Bank (VA)</p>
                                                                    </div>
                                                                </div>
                                                                <div id="productChannelName_31851227" class="productChannelName d-flex justify-content-end my-auto">
                                                                    <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>                                                    <div id="productPaymentMethodContainer_31190119" class="productPaymentMethodContainer form-check form-block highlight mb-3 ms-3 ms-md-3">
                                                        <input type="radio" class="form-check-input" id="productPaymentMethod_31190119" name="productPaymentMethod" value="31190119" data-xmethod="31190119" data-exfee="false" data-guarantee="false" disabled="" required>
                                                        <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_31190119">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-inline-flex">
                                                                    <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                        <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/0b2378d9-284b-4cfe-932c-14cc2efa3db2.jpg">
                                                                    </div>
                                                                    <div class="my-auto">
                                                                        <span class="chTitle fs-sm d-block fw-semibold">CIMB Niaga</span>
                                                                        <p class="mtdTitle fs-xs m-0 d-none">Tranfer Bank (VA)</p>
                                                                    </div>
                                                                </div>
                                                                <div id="productChannelName_31190119" class="productChannelName d-flex justify-content-end my-auto">
                                                                    <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>                                                    <div id="productPaymentMethodContainer_45669464" class="productPaymentMethodContainer form-check form-block highlight mb-3 ms-3 ms-md-3">
                                                        <input type="radio" class="form-check-input" id="productPaymentMethod_45669464" name="productPaymentMethod" value="45669464" data-xmethod="45669464" data-exfee="false" data-guarantee="false" disabled="" required>
                                                        <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_45669464">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-inline-flex">
                                                                    <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                        <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/5ee759e8-75c9-4267-959c-b0c4d0641882.jpg">
                                                                    </div>
                                                                    <div class="my-auto">
                                                                        <span class="chTitle fs-sm d-block fw-semibold">Danamon</span>
                                                                        <p class="mtdTitle fs-xs m-0 d-none">Tranfer Bank (VA)</p>
                                                                    </div>
                                                                </div>
                                                                <div id="productChannelName_45669464" class="productChannelName d-flex justify-content-end my-auto">
                                                                    <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>                                                    <div id="productPaymentMethodContainer_83318454" class="productPaymentMethodContainer form-check form-block highlight mb-3 ms-3 ms-md-3">
                                                        <input type="radio" class="form-check-input" id="productPaymentMethod_83318454" name="productPaymentMethod" value="83318454" data-xmethod="83318454" data-exfee="false" data-guarantee="false" disabled="" required>
                                                        <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_83318454">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-inline-flex">
                                                                    <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                        <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/acba6501-88af-4369-8e4e-1c4e519e0238.jpg">
                                                                    </div>
                                                                    <div class="my-auto">
                                                                        <span class="chTitle fs-sm d-block fw-semibold">Mandiri</span>
                                                                        <p class="mtdTitle fs-xs m-0 d-none">Tranfer Bank (VA)</p>
                                                                    </div>
                                                                </div>
                                                                <div id="productChannelName_83318454" class="productChannelName d-flex justify-content-end my-auto">
                                                                    <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>                                                    <div id="productPaymentMethodContainer_73452250" class="productPaymentMethodContainer form-check form-block highlight mb-3 ms-3 ms-md-3">
                                                        <input type="radio" class="form-check-input" id="productPaymentMethod_73452250" name="productPaymentMethod" value="73452250" data-xmethod="73452250" data-exfee="false" data-guarantee="false" disabled="" required>
                                                        <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_73452250">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-inline-flex">
                                                                    <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                        <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/c713c4a5-62b7-4893-acba-efdef9acc403.jpg">
                                                                    </div>
                                                                    <div class="my-auto">
                                                                        <span class="chTitle fs-sm d-block fw-semibold">Maybank VA</span>
                                                                        <p class="mtdTitle fs-xs m-0 d-none">Tranfer Bank (VA)</p>
                                                                    </div>
                                                                </div>
                                                                <div id="productChannelName_73452250" class="productChannelName d-flex justify-content-end my-auto">
                                                                    <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>                                                    <div id="productPaymentMethodContainer_44532319" class="productPaymentMethodContainer form-check form-block highlight mb-3 ms-3 ms-md-3">
                                                        <input type="radio" class="form-check-input" id="productPaymentMethod_44532319" name="productPaymentMethod" value="44532319" data-xmethod="44532319" data-exfee="false" data-guarantee="false" disabled="" required>
                                                        <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_44532319">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-inline-flex">
                                                                    <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                        <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/48e0bbc4-bc17-42f7-9340-dfd8ffc8ff31.jpg">
                                                                    </div>
                                                                    <div class="my-auto">
                                                                        <span class="chTitle fs-sm d-block fw-semibold">Neo Commerce/BNC VA</span>
                                                                        <p class="mtdTitle fs-xs m-0 d-none">Tranfer Bank (VA)</p>
                                                                    </div>
                                                                </div>
                                                                <div id="productChannelName_44532319" class="productChannelName d-flex justify-content-end my-auto">
                                                                    <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>                                                    <div id="productPaymentMethodContainer_13920347" class="productPaymentMethodContainer form-check form-block highlight mb-3 ms-3 ms-md-3">
                                                        <input type="radio" class="form-check-input" id="productPaymentMethod_13920347" name="productPaymentMethod" value="13920347" data-xmethod="13920347" data-exfee="false" data-guarantee="false" disabled="" required>
                                                        <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_13920347">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-inline-flex">
                                                                    <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                        <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/0ede6492-44b8-444d-951d-e6e60919a8f1.jpg">
                                                                    </div>
                                                                    <div class="my-auto">
                                                                        <span class="chTitle fs-sm d-block fw-semibold">Permata</span>
                                                                        <p class="mtdTitle fs-xs m-0 d-none">Tranfer Bank (VA)</p>
                                                                    </div>
                                                                </div>
                                                                <div id="productChannelName_13920347" class="productChannelName d-flex justify-content-end my-auto">
                                                                    <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>                                                </div>
                                            </div>

                                            <div id="productPaymentMethodContainer_35936359" class="productPaymentMethodContainer form-check form-block highlight mb-3">
                                                <input type="radio" class="form-check-input" id="productPaymentMethod_35936359" name="productPaymentMethod" value="35936359" data-xmethod="35936359" data-exfee="false" data-guarantee="false" disabled="" required>
                                                <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_35936359">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-inline-flex">
                                                            <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/2bdd13df-707f-42c9-827c-c3485cca35c4.jpg">
                                                            </div>
                                                            <div class="my-auto">
                                                                <span class="chTitle fs-sm d-block fw-semibold">Alfamart</span>
                                                                <p class="mtdTitle fs-xs m-0">Gerai Ritel</p>
                                                            </div>
                                                        </div>
                                                        <div id="productChannelName_35936359" class="productChannelName d-flex justify-content-end my-auto">
                                                            <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                        </div>
                                                    </div>
                                                    <p class="form-check-description fs-xs px-2 px-md-4 pt-2 mb-2 border-top border-2">
                                                        Belum termasuk biaya admin Alfamart Rp3.000
                                                    </p>
                                                        </label>
                                            </div>                                            <div id="productPaymentMethodContainer_32181873" class="productPaymentMethodContainer form-check form-block highlight mb-3">
                                                <input type="radio" class="form-check-input" id="productPaymentMethod_32181873" name="productPaymentMethod" value="32181873" data-xmethod="32181873" data-exfee="false" data-guarantee="false" disabled="" required>
                                                <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_32181873">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-inline-flex">
                                                            <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/3a09b60f-51e3-4634-a7fa-6287e92cee2d.jpg">
                                                            </div>
                                                            <div class="my-auto">
                                                                <span class="chTitle fs-sm d-block fw-semibold">Topupgim</span>
                                                                <p class="mtdTitle fs-xs m-0">Saldo Reseller</p>
                                                            </div>
                                                        </div>
                                                        <div id="productChannelName_32181873" class="productChannelName d-flex justify-content-end my-auto">
                                                            <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                        </div>
                                                    </div>
                                                    <p class="form-check-description fs-xs px-2 px-md-4 pt-2 mb-2 border-top border-2">
                                                        Harga lebih hemat, cocok untuk usaha sampingan kamu top up game dan pulsa
                                                    </p>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- END Payment Method -->


                                <!-- Purchasing -->
                                <li id="content-confirm" class="timeline-event" style="scroll-margin-top: 75px;">
                                    <div class="timeline-event-icon-flat bg-xeco">
                                        <span class="fs-lg fw-bold">4</span>
                                    </div>
                                    <div class="product-block timeline-event-block-no-sm block block-rounded block-mode-loading-circle block-themed">
                                        <div class="block-header block-header-default" style="background-color: #535c76;">
                                            <h3 class="block-title ms-5 ms-md-0">Konfirmasi Pembelian</h3>
                                        </div>
                                        <div class="block-content block-content-full">
                                            <div class="row mb-4">
                                                <label class="col-sm-4 col-form-label" for="memberWhatsAppNo">
                                                    No. WhatsApp
                                                    <span class="fs-xs text-info">(opsional)</span>
                                                </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control form-control-lg form-control-alt phone" id="memberWhatsAppNo" name="memberWhatsAppNo" placeholder="6288888888888">
                                                    <p class="text-muted fs-xs my-1">Nomor ini akan dihubungi apabila ada kendala. Bisa dikosongkan jika lupa.</p>
                                                </div>
                                            </div>
                                            <div id="block-phone-extra-payment-method" class="row mb-4 d-none">
                                                <label class="col-sm-4 col-form-label" for="memberPhoneExtra"><span id="label-phone-extra">Nomor Pengirim </span><span class="text-info">*</span></label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control form-control-lg form-control-alt phone" id="memberPhoneExtra" name="memberPhoneExtra" placeholder="6288888888888" minlength="8" maxlength="16">
                                                    <p id="summary-phone-extra" class="text-muted fs-xs mb-0 my-1">Nomor ini wajib digunakan untuk pembayaran.</p>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-sm-4 col-form-label" for="redemptionApplyCode">Kode Promo</label>
                                                <div class="col-sm-8">
                                                    <div class="input-group animated fadeIn">
                                                        <input type="text" class="form-control form-control-lg form-control-alt" id="redemptionApplyCode" name="redemptionApplyCode" placeholder="Tukar kode di sini.." maxlength="20">
                                                        <button id="redemptionCancel" type="button" class="btn fs-sm btn-alt-danger rounded-end d-none"><i class="fa fa-times me-1"></i> Batal</button>
                                                        <button id="redemptionSubmit" type="button" class="btn fs-sm btn-alt-primary" disabled>Gunakan</button>
                                                    </div>
                                                    <button id="redeemAvaliable" type="button" class="btn fs-sm btn-alt-info text-start mt-3 w-100">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <i class="fa fa-badge-percent me-2"></i>
                                                            <spa class="text-start flex-fill">Kode Promo yang Tersedia</spa>
                                                            <i class="fa fa-arrow-right-long"></i>
                                                        </div>
                                                    </button>
                                                    <p id="disc-message" class="fs-xs text-dark mt-2 mb-0 d-none"></p>
                                                </div>
                                            </div>
                                            <div id="block-GUARANTEE-delivery" class="row mb-4 d-none">
                                                <label class="col-sm-4 col-form-label">Pengiriman Kilat</label>
                                                <div class="col-sm-8 my-auto">
                                                    <div class="form-check form-switch">
                                                        <input style="cursor: pointer;" class="form-check-input" type="checkbox" id="fastDeliveryGuarantee" name="fastDeliveryGuarantee" data-cost-idr="2500">
                                                        <label style="cursor: pointer;" class="form-check-label fs-sm text-muted" for="fastDeliveryGuarantee" data-bs-toggle="popover" data-bs-animation="true" data-bs-placement="top" title="" data-bs-content="Kamu dapat klaim biaya tambahan ini jika waktu pengiriman terlambat atau lebih dari 60 detik" data-bs-original-title="Garansi Pengiriman Kilat">Memakai <span class="fw-light">(Rp2.500)</span><i class="ms-1 far fa-question-circle"></i></label>
                                                    </div>
                                                    <p class="text-muted fs-xs my-1">Gak perlu ngantri, hitungan detik langsung dikirim!</p>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-4 col-form-label">Ringkasan Pesanan</label>
                                                <div class="col-sm-8 my-auto d-flex flex-column animated fadeIn">
                                                    <div class="d-flex flex-column border border-1 rounded rounded-3 px-3 py-2">
                                                        <div class="d-flex justify-content-between align-items-center pb-2 pt-2">
                                                            <p class="fs-sm mb-0">Membeli Item</p>
                                                            <p class="desk_item-selected fs-sm fw-semibold text-primary text-end h6 mb-0">Belum Dipilih</p>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center pb-2">
                                                            <p class="fs-sm mb-0">Metode Pembayaran</p>
                                                            <p class="desk_method-selected fs-sm fw-semibold text-primary text-end h6 mb-0">Belum Dipilih</p>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center pb-2">
                                                            <p class="fs-sm mb-0">Harga Awal</p>
                                                            <p class="desk_amount-before fs-sm fw-semibold text-end h6 mb-0">-</p>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center pb-2">
                                                            <p class="fs-sm mb-0">Biaya Admin</p>
                                                            <p class="desk_admin-fee fs-sm fw-semibold text-primary text-end h6 mb-0">Rp0</p>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center pb-2">
                                                            <p class="fs-sm mb-0">Diskon Hemat</p>
                                                            <p class="desk_amount-deducted fs-sm fw-semibold text-danger text-end h6 mb-0">-</p>
                                                        </div>
                                                        <div id="disc-container" class="desk_disc-container d-flex justify-content-between align-items-center pb-2 d-none">
                                                            <p class="fs-sm mb-0 text-nowrap">Diskon Promo</p>
                                                            <div class="d-flex flex-column">
                                                                <p id="disc-promo-amount" class="desk_disc-promo-amount fs-sm fw-semibold text-danger text-end h6 mb-0">-</p>
                                                                <p class="fs-xs text-end mb-0">
                                                                    <span id="disc-name" class="desk_disc-name"></span>,
                                                                    <span id="disc-summary" class="desk_disc-summary"></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center pb-2">
                                                            <p class="fs-sm mb-0" style="cursor: pointer;" data-bs-toggle="popover" data-bs-animation="true" data-bs-placement="top" title="" data-bs-content="Kamu berpotensi mendapatkan Cashback Gimkoin yang dapat kamu gunakan untuk pembelian produk tertentu. Satu Gimkoin setara dengan 1 rupiah. Pastikan kamu telah login ke akun kamu dahulu." data-bs-original-title="Cashback Gimkoin">Cashback Gimkoin <i class="ms-1 far fa-question-circle"></i></p>
                                                            <p class="desk_coin-amount fs-sm fw-semibold text-end h6 mb-0">-</p>
                                                        </div>
                                                        <div class="d-flex flex-column border-top pt-2 align-items-end">
                                                            <span class="fs-sm fw-semibold text-end pb-2">Total Tagihan</span>
                                                            <div class="d-flex align-items-center pb-2">
                                                                <span class="fs-sm me-2"><del class="desk_amount-crossed-out no-strip"></del></span>
                                                                <span id="productPriceIDR" class="desk_productPriceIDR fs-lg fw-semibold text-end text-currency">-</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <div id="guarantee-container" class="desk_guarantee-container d-flex align-items-center text-gray-dark fs-xs animated fadeIn mt-2 d-none">
                                                            (<span id="item-price" class="desk_item-price fw-light me-1"></span>+<i class="fa fa-shipping-fast mx-1"></i><span id="guarantee-price" class="desk_guarantee-price fw-light">Rp2.500</span>)
                                                        </div>
                                                        <span id="exfee-summary" class="desk_exfee-summary fs-xs text-muted mt-2 d-none">Total tagihan di atas belum termasuk biaya metode pembayaran <span id="exfee-channel-name" class="desk_exfee-channel-name"></span> yang dibebankan ke pembeli.</span>
                                                    </div>
                                                    <div class="px-2 py-2 mt-3 bg-info-light rounded d-flex align-items-center">
                                                        <i class="far fa-info-circle me-2 text-info"></i><span class="fs-xs text-info">Pastikan pesanan kamu sudah benar sebelum melanjutkan pesanan. Login/Register untuk mendapatkan Cashback Gimkoin.</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="confirmation-submit" class="desk_confirmation-submit row justify-content-center px-2 px-lg-3 py-2">
                                                <button id="productProceed" type="button" class="desk_productProceed btn btn-hero btn-primary">
                                                    Beli Sekarang
                                                </button>
                                            </div>
                                            <div id="confirmation-extra" class="desk_confirmation-extra row justify-content-center px-2 px-lg-3 py-2 d-none">
                                                <button type="button" onclick="location.href='https://resellergame.com/'" class="btn btn-hero btn-primary">
                                                    Mendaftar Agen
                                                </button>
                                            </div>
                                            <div id="confirmation-sign-in" class="desk_confirmation-sign-in row justify-content-center px-2 px-lg-3 py-2 d-none">
                                                <button type="button" onclick="location.href='../../auth/sign-in.html'" class="btn btn-hero btn-primary">
                                                    Masuk Akun
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- END Purchasing -->
                            </ul>
                        </form>

                        <!-- Review Content -->
                        <div id="parent-content-review-mobile" class="d-none" data-shown=""></div>
                        <!-- END Review Content -->

                        <!-- Ranking Content -->
                        <div id="parent-content-ranking-mobile" class="d-none" data-shown=""></div>
                        <!-- END Ranking Content -->

                        <!-- Article Content -->
                        <div id="parent-content-article-mobile" class="d-none"></div>
                        <!-- END Article Content -->

                        <!-- Faq Content -->
                        <div id="parent-content-faq" class="mt-5 d-none" style="margin-left: 4rem;">
                        </div>
                        <!-- END Faq Content -->

                        <!-- Share Modal -->
                        <div class="modal fade" id="modal-share-content" tabindex="-1" role="dialog" aria-labelledby="modal-share-content" aria-describedby="modal-share-content" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-fadein modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Bagikan Ke</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body min-scrollbar">
                                        <div class="d-flex flex-row flex-wrap justify-content-center">
                                            <a class="fw-semibold m-3" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ftopupgim.com%2Fproduct%2Findosat-im3-internet%2F1528821171%3Faff%3DInternal_Share" target="_blank">
                                                <i class="fab fa-2x fa-facebook opacity-75"></i>
                                            </a>
                                            <a class="fw-semibold m-3" href="https://twitter.com/share?url=https%3A%2F%2Ftopupgim.com%2Fproduct%2Findosat-im3-internet%2F1528821171%3Faff%3DInternal_Share" target="_blank">
                                                <i class="fab fa-2x fa-twitter opacity-75"></i>
                                            </a>
                                            <a class="fw-semibold m-3" href="https://api.whatsapp.com/send?text=https%3A%2F%2Ftopupgim.com%2Fproduct%2Findosat-im3-internet%2F1528821171%3Faff%3DInternal_Share" target="_blank">
                                                <i class="fab fa-2x fa-whatsapp opacity-75"></i>
                                            </a>
                                            <a class="fw-semibold m-3" href="https://pinterest.com/pin/create/button/?url=https%3A%2F%2Ftopupgim.com%2Fproduct%2Findosat-im3-internet%2F1528821171%3Faff%3DInternal_Share" target="_blank">
                                                <i class="fab fa-2x fa-pinterest opacity-75"></i>
                                            </a>
                                            <a class="fw-semibold m-3" href="https://t.me/share/url?url=https%3A%2F%2Ftopupgim.com%2Fproduct%2Findosat-im3-internet%2F1528821171%3Faff%3DInternal_Share" target="_blank">
                                                <i class="fab fa-2x fa-telegram opacity-75"></i>
                                            </a>
                                            <a class="fw-semibold m-3" href="https://linkedin.com/sharing/share-offsite/?url=https%3A%2F%2Ftopupgim.com%2Fproduct%2Findosat-im3-internet%2F1528821171%3Faff%3DInternal_Share" target="_blank">
                                                <i class="fab fa-2x fa-linkedin opacity-75"></i>
                                            </a>
                                        </div>
                                        <p class="fs-sm fw-light text-center mb-4 mt-1 text-dark" style="word-break:break-all; word-wrap: break-word;">https://topupgim.com/product/indosat-im3-internet/1528821171?aff=Internal_Share</p>
                                        <p class="fs-sm mb-3 border-top pt-3">Ajak pelanggan baru ke TopUpGim menggunakan link referral, dan kamu menerima 50% dari setiap keuntungan pembelian.<br /><a href="{{ route('page.show', 'referral') }}" target="_blank">Baca program referral lebih lanjut</a></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Share Modal -->

                        <!-- How To Get ID Modal -->
                        <div class="modal fade" id="modal-product-helper" tabindex="-1" role="dialog" aria-labelledby="modal-product-helper" aria-describedby="modal-product-helper" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-fadein modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Menemukan Informasi Akun</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body min-scrollbar">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END How To Get ID Modal -->

                        <!-- Verification ID Modal -->
                        <div class="modal fade" id="modal-product-info" tabindex="-1" role="dialog" aria-labelledby="modal-product-info" aria-describedby="modal-product-info" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-fadein modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 id='modal-product-info-title' class="modal-title"></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body min-scrollbar">
                                        <div class="d-flex flex-column align-items-center pt-4 w-100" style="min-height: 200px;">
                                            <h4 id="modal-product-info-message" class="text-center d-none"></h4>
                                            <div id="modal-product-info-player" class="d-flex flex-column w-100 mx-3">
                                                <p class="text-muted fs-sm mb-2"><i class="far fa-check-circle me-2"></i>Informasi akun tersimpan pada browser</p>
                                                <div class="w-100 border rounded">
                                                    <div class="d-flex justify-content-between align-items-center w-100 px-4 py-2">
                                                        <span class="text-primary fw-semibold">ID</span>
                                                        <span id="modal-product-info-player-id"></span>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center border-top px-4 py-2">
                                                        <span class="text-primary fw-semibold">Nama</span>
                                                        <span id="modal-product-info-player-name"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Verification ID Modal -->

                        <!-- How To Order Modal -->
                        <div class="modal fade" id="modal-how-to-order" tabindex="-1" role="dialog" aria-labelledby="modal-how-to-order" aria-describedby="modal-how-to-order" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-fadein modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tutorial Pembelian</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body min-scrollbar">
                                        <div class="static-page" style="min-height: 380px;"><p>Isi paket data Indosat IM3 caranya mudah:</p><ol><li>Masukkan nomor Indosat IM3 kamu.</li><li>Pilih paket yang kamu mau.</li><li>Pilih metode pembayaran.</li><li>Masukkan nomor Whatsapp kamu, nantinya kami akan mengirim invoice ke Whatsapp.</li><li>Klik tombol Beli Sekarang.</li></ol></div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END How To Order Modal -->


                        <!-- Pop Info Modal -->
                        <div class="modal fade" id="modal-pop-info" tabindex="-1" role="dialog" aria-labelledby="modal-pop-info" aria-describedby="modal-pop-info" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-fadein modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 id="modal-title-pop-info" class="modal-title"></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body min-scrollbar">
                                        <div id="modal-body-pop-info" class="static-page" style="min-height: 300px;"></div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Pop Info Modal -->

                        <!-- Redemption Avaliable Modal -->
                        <div class="modal fade" id="modal-redemption-content" tabindex="-1" role="dialog" aria-labelledby="modal-redemption-content" aria-describedby="modal-share-content" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-fadein modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Promo Tersedia</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body min-scrollbar">
                                        <div class="d-flex flex-column align-items-center w-100" style="min-height: 200px;">
                                            <span class="text-muted fs-lg py-4 px-2">Oops.., belum ada apa-apa di sini.</span>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Redemption Avaliable Modal -->

                        <!-- Pop In Confirmation -->
                        <div class="modal fade" id="modal-product-confirmation" tabindex="-1" role="dialog" aria-labelledby="modal-product-confirmation" aria-describedby="modal-product-confirmation" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-fadein modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Mohon Konfirmasi Detail Pesanan Anda</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body min-scrollbar">
                                        <div class="d-flex flex-column">
                                            <div class="d-flex justify-content-between align-items-center pb-3 mb-3 border-bottom border-2">
                                                <div class="ratio ratio-1x1" style="width: 50px;">
                                                    <img class="img-fluid product-tile" style="background-image: url('../../https://cdn.topupgim.com/product-tiles/1b3361f3-78d9-4cd5-bb25-8f9c7f40b33cebf4.jpg?w=200');">
                                                </div>
                                                <div class="d-flex justify-content-end flex-column align-items-end">
                                                    <span class="h6 fs-normal fw-semibold mb-2">Indosat IM3 (Internet)</span>
                                                    <span id="purchase-denomination-text" class="h6 fs-normal fw-normal m-0"></span>
                                                </div>
                                            </div>
                                            <div id="purchase-property-player-name" class="d-flex justify-content-between align-items-center pb-2 d-none">
                                                <p class="fs-sm mb-0 text-nowrap">Nama Pemain</p>
                                                <div class="d-flex flex-column align-items-end">
                                                    <p id="purchase-property-player-name-text" class="text-end text-primary fs-normal fw-semibold mb-0"></p>
                                                    <span id="purchase-property-no-verified" class="text-end fs-xs text-muted d-none">Pastikan kamu yakin dengan info akunmu</span>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center pb-2">
                                                <p class="fs-sm mb-0">Nomor HP</p>
                                                <p id="purchase-property-no_hp-text" class="fs-sm fw-normal h6 mb-0"></p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center pb-2">
                                                <p class="fs-sm mb-0">Metode Pembayaran</p>
                                                <p id="purchase-method-text" class="fs-sm fw-normal text-end h6 mb-0"></p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center pb-2">
                                                <p class="fs-sm mb-0">Nomor WhatsApp</p>
                                                <p id="purchase-whatsapp-text" class="fs-sm fw-normal text-end h6 mb-0"></p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center pb-2">
                                                <p class="fs-sm mb-0" style="cursor: pointer;" data-bs-toggle="popover" data-bs-animation="true" data-bs-placement="top" title="" data-bs-content="Kamu berpotensi mendapatkan Cashback Gimkoin yang dapat kamu gunakan untuk pembelian produk tertentu. Satu Gimkoin setara dengan 1 rupiah. Pastikan kamu telah login ke akun kamu dahulu." data-bs-original-title="Cashback Gimkoin">Cashback Gimkoin<i class="ms-1 far fa-question-circle"></i></p>
                                                <span>
                                                    <span class="desk_coin-amount fs-sm fw-semibold text-end h6 mb-0"></span>
                                                    <a href="../../auth/sign-in.html" class="fs-sm fw-semibold">(Perlu Login -&gt;)</a>
                                                </span>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center pb-2">
                                                <p class="fs-sm mb-0">Total Tagihan</p>
                                                <div class="d-flex flex-column align-items-end animated fadeIn">
                                                    <p id="purchase-price-text" class="fs-normal fw-semibold mb-0 text-currency"></p>
                                                    <div class="d-flex align-items-center">
                                                        <div id="purchase-disc-container" class="d-flex align-items-center text-gray-dark fs-xs d-none">
                                                            <i class="fa fa-tag me-2"></i><del><span id="purchase-disc-init-price" class="fw-light"></span></del>
                                                        </div>
                                                        <div id="purchase-guarantee-container" class="d-flex align-items-center text-gray-dark fs-xs ms-2 d-none">
                                                            (<span id="purchase-item-price" class="fw-light me-1"></span>+<i class="fa fa-shipping-fast mx-1"></i><span id="purchase-guarantee-price" class="fw-light">Rp2.500</span>)
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="border-top border-2 fs-sm mt-2 mb-4 pt-3">Terkonfirmasi sebagai menerima <a href="{{ route('page.show', 'terms-of-use') }}" class="fw-semibold text-dark"><u>Terms of Use</u></a> &amp; <a href="{{ route('page.show', 'privacy-policy') }}" class="fw-semibold text-dark"><u>Privacy Policy</u></a></p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">Batal</button>
                                        <button id="productSubmit" type="button" class="btn btn-primary">Konfirmasi</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Pop In Confirmation -->                    </div>
                </div>
            </div>

            <div class="content">
                <!-- Faq Content -->
                <div id="parent-content-faq-mobile" class="d-none mb-5"></div>
                <!-- END Faq Content -->

                <!-- Pages -->
                <!-- END Pages -->


                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="m-0">Top Up Game Populer Lainnya</h3>
                    <button type="button" class="btn btn-sm btn-alt-secondary" onclick="location.href='../../category/Game.html';">
                        <i class="fa fa-fw fa-arrow-right text-muted"></i>
                    </button>
                </div>
                <div class="d-flex flex-wrap mb-5">
                    <a href="../mobile-legends/1528378309.html" title="top up Mobile Legends" class="btn btn-alt-primary rounded-pill me-2 mb-2">
                        Mobile Legends
                    </a>
                    <a href="../free-fire/1528555434.html" title="top up Free Fire" class="btn btn-alt-primary rounded-pill me-2 mb-2">
                        Free Fire
                    </a>
                    <a href="../hago/1528242362.html" title="top up HAGO" class="btn btn-alt-primary rounded-pill me-2 mb-2">
                        HAGO
                    </a>
                    <a href="../honor-of-kings/1528385129.html" title="top up Honor of Kings" class="btn btn-alt-primary rounded-pill me-2 mb-2">
                        Honor of Kings
                    </a>
                    <a href="../pubgm/1528036161.html" title="top up PUBGM Global" class="btn btn-alt-primary rounded-pill me-2 mb-2">
                        PUBGM Global
                    </a>
                    <a href="../call-of-duty-mobile/1528919312.html" title="top up Call of Duty Mobile" class="btn btn-alt-primary rounded-pill me-2 mb-2">
                        Call of Duty Mobile
                    </a>
                    <a href="../blood-strike/1528112021.html" title="top up Blood Strike" class="btn btn-alt-primary rounded-pill me-2 mb-2">
                        Blood Strike
                    </a>
                    <a href="../zepeto/1528847900.html" title="top up Zepeto" class="btn btn-alt-primary rounded-pill me-2 mb-2">
                        Zepeto
                    </a>
                    <a href="../genshin-impact/1528787297.html" title="top up Genshin Impact" class="btn btn-alt-primary rounded-pill me-2 mb-2">
                        Genshin Impact
                    </a>
                    <a href="../magic-chess-go-go/1528273402.html" title="top up Magic Chess Go Go" class="btn btn-alt-primary rounded-pill me-2 mb-2">
                        Magic Chess Go Go
                    </a>
                    <a href="../eggy-party/1528742300.html" title="top up Eggy Party" class="btn btn-alt-primary rounded-pill me-2 mb-2">
                        Eggy Party
                    </a>
                    <a href="../point-blank/1528615283.html" title="top up Point Blank" class="btn btn-alt-primary rounded-pill me-2 mb-2">
                        Point Blank
                    </a>
                    <a href="../super-sus/1528483107.html" title="top up Super Sus" class="btn btn-alt-primary rounded-pill me-2 mb-2">
                        Super Sus
                    </a>
                    <a href="../steam-wallet-voucher/1528569704.html" title="top up Steam Wallet Voucher" class="btn btn-alt-primary rounded-pill me-2 mb-2">
                        Steam Wallet Voucher
                    </a>
                    <a href="../garena-undawn/1528433756.html" title="top up Garena Undawn" class="btn btn-alt-primary rounded-pill me-2 mb-2">
                        Garena Undawn
                    </a>
                </div>
            </div>
        </main>
        <!-- END Main Container -->

@endsection
