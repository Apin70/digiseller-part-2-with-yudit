@extends('layouts.app')

@section('title', 'Top Up Genshin Impact Murah | Topupgim - TopUpGim')

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
                                <img class="img-fluid rounded img-slider w-100" src="../../https://cdn.topupgim.com/product-rectangles/aa5dd594-5228-42a0-94a7-ece4ed72fcfa.jpg" alt="Top Up Genshin Impact">
                            </div>
                        </div>
                        <!-- END Cover Content -->

                        <!-- Description Content -->
                        <h1>Top Up Genshin Impact</h1>
                        <div class="d-flex flex-row flex-wrap align-items-center gy-1 mb-2">
                            <img src="{{ asset(\'assets/media/images/instant-badge.png" style="height: 50px;" class="mb-1 me-3" alt="delivery image">
                            <img src="{{ asset(\'assets/media/images/official-store-badge.png" style="height: 50px;" class="mb-1 me-3" alt="provider image">
                        </div>
                        <div class="static-page-product-desc mb-4"><p><strong>Top Up Genshin Impact</strong> lebih murah dengan kode promo, diskon hingga 39%. Blessing of the Welkin Moon Genshin Impact<strong> hanya Rp59.200.</strong></p><div class="raw-html-embed"><h2 style="font-size: 16px;">Top Up Genshin Impact di Topupgim</h2>
<ul class="list_alasan" style="list-style: none; padding-left: 0;font-size:13px"><li style="background: #fff;padding: 5px 8px;margin-bottom: 5px;border-radius: 5px; box-shadow: 0 1px 3px rgba(214,221,237,.5), 0 1px 2px rgba(214,221,237,.5);"><strong>Lebih Murah</strong>. Hemat hingga 39% &amp; tanpa biaya admin 🔥</li><li style="background: #fff;padding: 5px 8px;margin-bottom: 5px;border-radius: 5px;box-shadow: 0 1px 3px rgba(214,221,237,.5), 0 1px 2px rgba(214,221,237,.5);"><strong>Mudah &amp; Otomatis.</strong> Tidak perlu kirim bukti pembayaran.</li><li style="background: #fff;padding: 5px 8px;margin-bottom: 5px; border-radius: 5px;box-shadow: 0 1px 3px rgba(214,221,237,.5), 0 1px 2px rgba(214,221,237,.5);"><strong>Tanpa Delay</strong>. Pengiriman hanya hitungan detik.</li></ul></div></div>
                        <div class="d-flex flex-row flex-wrap align-items-center gy-1">
                            <span class="text-dark fs-sm fw-semibold mb-2 me-3">
                                <i class="fa fa-cart-shopping opacity-75 me-1"></i> Terjual: <span class="text-primary">10rb+</span>
                            </span>
                            <a class="text-dark fs-sm fw-semibold mb-2 me-3" href="#modal-share-content" data-bs-toggle="modal" data-bs-target="#modal-share-content">
                                <i class="fa fa-share-square opacity-75 me-1"></i> Share &amp; Dapatkan Uang
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
                                <h3 class="mb-4">Sultan Genshin Impact</h3>
                                <div class="d-flex align-items-center border rounded p-3 mb-3 block block-rounded overflow-hidden">
                                    <span class="fw-semibold me-3">1</span>
                                    <img class="img-avatar border" style="width: 40px; height: 40px" src="../../https://cdn.topupgim.com/circle-logo.jpg">
                                    <div class="d-flex flex-column ms-3">
                                        <span class="fs-sm fw-semibold">Ayana</span>
                                        <span class="text-muted fs-sm">Rp. 28.994.670</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center border rounded p-3 mb-3 block block-rounded overflow-hidden">
                                    <span class="fw-semibold me-3">2</span>
                                    <img class="img-avatar border" style="width: 40px; height: 40px" src="../../https://cdn.topupgim.com/circle-logo.jpg">
                                    <div class="d-flex flex-column ms-3">
                                        <span class="fs-sm fw-semibold">Reinaldi Boletimi</span>
                                        <span class="text-muted fs-sm">Rp. 7.547.500</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center border rounded p-3 mb-3 block block-rounded overflow-hidden">
                                    <span class="fw-semibold me-3">3</span>
                                    <img class="img-avatar border" style="width: 40px; height: 40px" src="../../https://cdn.topupgim.com/circle-logo.jpg">
                                    <div class="d-flex flex-column ms-3">
                                        <span class="fs-sm fw-semibold">Ryo</span>
                                        <span class="text-muted fs-sm">Rp. 3.111.440</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center border rounded p-3 mb-3 block block-rounded overflow-hidden">
                                    <span class="fw-semibold me-3">4</span>
                                    <img class="img-avatar border" style="width: 40px; height: 40px" src="../../https://cdn.topupgim.com/circle-logo.jpg">
                                    <div class="d-flex flex-column ms-3">
                                        <span class="fs-sm fw-semibold">ARYO ADAM</span>
                                        <span class="text-muted fs-sm">Rp. 2.447.950</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center border rounded p-3 mb-3 block block-rounded overflow-hidden">
                                    <span class="fw-semibold me-3">5</span>
                                    <img class="img-avatar border" style="width: 40px; height: 40px" src="../../https://cdn.topupgim.com/circle-logo.jpg">
                                    <div class="d-flex flex-column ms-3">
                                        <span class="fs-sm fw-semibold">Yuaningtyas Pradita</span>
                                        <span class="text-muted fs-sm">Rp. 2.157.280</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Ranking Content -->

                        <!-- Article Content -->
                        <div id="parent-content-article" class="d-none">
                            <div id="content-article" class="pt-5">
                                <h2>Genshin Impact</h2>
                                <div class="static-page w-100"><p><strong>Genshin Impact</strong> adalah game action RPG yang dikembangkan oleh miHoYo, perusahaan game asal Tiongkok. Game ini pertama kali dirilis pada September 2020 dan menjadi populer di seluruh dunia karena gameplay yang menarik dan visual yang indah.</p><p>Fitur Utama Genshin Impact:</p><ol><li><strong>Open World</strong>: Genshin Impact menawarkan dunia terbuka yang luas bernama Teyvat, yang terdiri dari berbagai wilayah dengan tema dan elemen yang berbeda-beda.</li><li><strong>Sistem Karakter</strong>: Pemain dapat mengendalikan berbagai karakter yang masing-masing memiliki elemen (seperti api, air, es, dll.) dan kemampuan unik. Setiap karakter memiliki gaya bertarung dan kemampuan yang berbeda, memungkinkan pemain untuk merancang tim yang sesuai dengan gaya bermain mereka.</li><li><strong>Sistem Gacha</strong>: Untuk mendapatkan karakter baru dan senjata langka, pemain harus menggunakan sistem gacha, yang mirip dengan lotere atau undian berhadiah.</li><li><strong>Grafis dan Musik</strong>: Genshin Impact dikenal dengan grafisnya yang menakjubkan dan soundtrack yang epik. Lingkungannya dirancang dengan detail yang tinggi, memberikan pengalaman visual yang memukau.</li><li><strong>Multiplayer</strong>: Genshin Impact mendukung mode co-op multiplayer, di mana pemain bisa menjelajahi dunia Teyvat bersama teman-teman mereka.</li><li><strong>Cerita dan Lore</strong>: Game ini juga memiliki cerita yang mendalam dan karakter yang dikembangkan dengan baik. Pemain berperan sebagai "Traveler," yang menjelajahi dunia Teyvat untuk mencari saudaranya yang hilang.</li></ol><p>Genshin Impact tersedia di berbagai platform, termasuk PC, PlayStation, dan perangkat mobile. Game ini gratis untuk dimainkan (free-to-play) tetapi menawarkan pembelian dalam aplikasi.</p><h2>Genesis Crystals Genshin Impact</h2><p><strong>Genesis Crystals</strong> adalah mata uang premium di dalam game <i>Genshin Impact</i>. Pemain dapat membeli Genesis Crystals dengan uang sungguhan melalui toko dalam game. Mata uang ini digunakan untuk berbagai keperluan, seperti:</p><ol><li><strong>Mengonversi ke Primogems</strong>: Fungsi utama dari Genesis Crystals adalah mengonversinya menjadi <i>Primogems</i>, yang merupakan mata uang lain di dalam game. <i>Primogems</i> dapat digunakan untuk memutar gacha (<i>Wishes</i>) dan mendapatkan karakter atau senjata baru.</li><li><strong>Membeli Paket dan Item Khusus</strong>: Genesis Crystals juga bisa digunakan untuk membeli paket spesial, kostum karakter, atau item eksklusif yang tidak bisa dibeli dengan mata uang lain.</li></ol><p>Cara Mendapatkan Genesis Crystals</p><p>Genesis Crystals hanya bisa didapatkan melalui pembelian dengan uang sungguhan. Beberapa pilihan paket tersedia, mulai dari paket kecil dengan harga rendah hingga paket besar dengan harga yang lebih tinggi.</p><p>Genesis Crystals sering kali diikat dengan berbagai penawaran atau bonus, seperti penawaran pertama kali di mana pemain mendapatkan jumlah Crystal tambahan ketika pertama kali membeli paket tertentu.</p><p>Konversi ke Primogems</p><p>Perbandingan konversi antara Genesis Crystals dan Primogems adalah 1:1, yang berarti setiap satu Genesis Crystal dapat diubah menjadi satu Primogem. Website <a href="1528787297.html"><strong>top up Genesis Crystals Genshin Impact</strong></a> termurah adalah Topupgim. Platform ini menawarkan harga yang kompetitif dan berbagai pilihan paket yang sesuai dengan kebutuhan pemain. Selain itu, Topupgim juga dikenal karena proses transaksi yang cepat dan aman, memastikan pemain dapat segera mendapatkan Genesis Crystals untuk keperluan dalam game mereka. Dengan dukungan layanan pelanggan yang responsif, Topupgim menjadi pilihan yang andal bagi para pemain Genshin Impact yang mencari top up Genesis Crystals dengan harga terbaik.</p><h3>Cara Top Up Genesis Crystals Genshin Impact Termurah</h3><p>Untuk top up Genesis Crystals Genshin Impact di Topupgim, Anda dapat mengikuti langkah-langkah berikut:</p><ol><li><strong>Kunjungi Website Topupgim</strong>:&nbsp;<br>Buka browser dan kunjungi situs <a href="{{ route('home') }}"><strong>web resmi TopUpGim</strong></a> atau unduh <a href="https://play.google.com/store/apps/details?id=com.topupgim.app"><strong>aplikasi Topupgim</strong></a> di Playstore.</li><li><strong>Pilih Game dan Platform</strong>:&nbsp;<br>Di halaman utama, cari dan pilih opsi untuk <a href="1528787297.html"><strong>top up Genshin Impact</strong></a>.</li><li><strong>Pilih Jumlah Genesis Crystals</strong>:&nbsp;<br>Pilih jumlah Genesis Crystals yang ingin Anda beli dari daftar opsi yang tersedia. Topupgim biasanya menawarkan berbagai pilihan paket.</li><li><strong>Masukkan ID atau Username</strong>:&nbsp;<br>Anda mungkin diminta untuk memasukkan ID pengguna atau username akun Genshin Impact Anda agar Genesis Crystals dapat dikirimkan ke akun yang tepat.</li><li><strong>Pilih Metode Pembayaran</strong>:&nbsp;<br>Pilih metode pembayaran yang Anda inginkan, seperti transfer bank, kartu kredit, atau metode pembayaran lainnya yang tersedia di situs.</li><li><strong>Konfirmasi dan Bayar</strong>:&nbsp;<br>Periksa detail transaksi Anda, lalu konfirmasi pembelian dan lanjutkan ke halaman pembayaran. Ikuti petunjuk untuk menyelesaikan pembayaran.</li><li><strong>Tunggu Proses Verifikasi</strong>:&nbsp;<br>Setelah pembayaran selesai, tunggu proses verifikasi. Genesis Crystals biasanya akan dikirimkan ke akun Anda dalam waktu yang cepat, tetapi waktu proses bisa bervariasi.</li><li><strong>Cek Akun Genshin Impact</strong>:&nbsp;<br>Masuk ke akun Genshin Impact Anda dan periksa saldo Genesis Crystals untuk memastikan top up telah berhasil.</li></ol><p>Dengan mengikuti langkah-langkah ini, Anda bisa dengan mudah <a href="1528787297.html"><strong>top up Genshin Impact</strong></a> di TopUpGim.</p><h3>Keuntungan Top Up Crystals Genshin Impact di Topupgim</h3><p>Top up Genesis Crystals Genshin Impact di Topupgim menawarkan beberapa keuntungan, antara lain:</p><ol><li><strong>Harga Kompetitif</strong>:&nbsp;<br>Topupgim sering kali menyediakan harga yang lebih murah dibandingkan dengan platform lain, memberikan nilai lebih untuk setiap pembelian Genesis Crystals.</li><li><strong>Proses Transaksi Cepat</strong>:&nbsp;<br>Platform ini dikenal dengan proses transaksi yang cepat dan efisien, sehingga Anda bisa mendapatkan Genesis Crystals dengan segera tanpa harus menunggu lama.</li><li><strong>Berbagai Metode Pembayaran</strong>:&nbsp;<br>Topupgim menawarkan berbagai metode pembayaran, termasuk transfer bank, kartu kredit, dan e-wallet, memudahkan Anda untuk melakukan top up sesuai dengan preferensi pembayaran Anda.</li><li><strong>Keamanan Transaksi</strong>:&nbsp;<br>Topupgim memastikan transaksi dilakukan dengan aman, dengan perlindungan data dan privasi pelanggan sebagai prioritas utama.</li><li><strong>Layanan Pelanggan Responsif</strong>:&nbsp;<br>Jika Anda mengalami masalah atau memiliki pertanyaan, layanan pelanggan Topupgim siap membantu dengan responsif dan profesional.</li><li><strong>Penawaran dan Diskon Khusus</strong>:&nbsp;<br>Topupgim sering kali menawarkan penawaran atau diskon khusus yang dapat memberikan nilai tambah atau bonus tambahan pada setiap pembelian.</li><li><strong>Kemudahan Penggunaan</strong>:&nbsp;<br>Website Topupgim dirancang dengan antarmuka yang user-friendly, membuat proses top up menjadi mudah dan nyaman bahkan bagi pengguna baru.</li></ol><p>Dengan berbagai keuntungan ini, TopUpGim menjadi pilihan yang ideal untuk melakukan <a href="1528787297.html"><strong>top-up Crystals Genshin Impact</strong></a>.</p><h3>Metode Pembayaran</h3><p>Berikut adalah opsi metode pembayaran untuk top up Genesis Crystals Genshin Impact di TopUpGim:</p><ol><li><strong>E-Wallet (Dompet Digital)</strong>:<br>Anda bisa menggunakan e-wallet populer seperti OVO, GoPay, DANA, dan ShopeePay. Ini memudahkan pembayaran langsung dari ponsel Anda dengan cepat dan praktis.</li><li><strong>Transfer Bank</strong>:<br>Tersedia pilihan transfer bank dari berbagai bank besar di Indonesia, seperti BCA, Mandiri, BNI, dan BRI. Prosesnya mudah dan dapat dilakukan melalui mobile banking, ATM, atau internet banking.</li><li><strong>Virtual Account</strong>:<br>Anda dapat membayar melalui virtual account yang disediakan oleh bank. Ini memungkinkan pembayaran instan tanpa perlu konfirmasi tambahan.</li><li><strong>Minimarket</strong>:<br>Untuk pembayaran tunai, Anda bisa menggunakan layanan di minimarket seperti Indomaret dan Alfamart. Ini cocok bagi Anda yang lebih nyaman membayar langsung di gerai.</li><li><strong>QRIS</strong>:<br>QRIS mempermudah pembayaran melalui kode QR, mendukung berbagai aplikasi pembayaran dalam satu standar.</li><li><strong>Unipin Genshin Impact &amp; Codashop Genshin Impact</strong></li></ol><p>Dengan beragam metode ini, Anda dapat memilih yang paling sesuai dengan preferensi dan kenyamanan Anda saat melakukan top-up Genshin Impact di TopUpGim.</p><h4>Rekomendasi Top Up Game Lainnya</h4><p>Di Topupgim.com, selain Genshin Impact, Anda juga bisa melakukan top up untuk berbagai game populer lainnya. Beberapa game yang tersedia untuk top up di Topupgim.com antara lain:&nbsp;</p><ol><li><a href="../mobile-legends/1528378309.html"><strong>Top Up Mobile Legends&nbsp;</strong></a></li><li><a href="../pubgm/1528036161.html"><strong>Top Up PUBG Mobile&nbsp;</strong></a></li><li><a href="../call-of-duty-mobile/1528919312.html"><strong>Top Up Call of Duty Mobile (CODM)&nbsp;</strong></a></li><li><a href="../honor-of-kings/1528385129.html"><strong>Top Up Honor of Kings&nbsp;</strong></a></li><li><a href="../zepeto/1528847900.html"><strong>Top Up Zepeto</strong></a></li><li><a href="../hago/1528242362.html"><strong>Top Up Hago&nbsp;</strong></a></li><li><a href="../dana/1528543830.html"><strong>Top Up Dana</strong></a></li><li><a href="../blood-strike/1528112021.html"><strong>Top Up Blood Strike&nbsp;</strong></a></li><li><a href="../honkai-star-rail/1528308068.html"><strong>Top Up Honkai: Star Rail</strong></a></li></ol></div>
                            </div>
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
                            <input type="hidden" name="_csrf" value="jJZgtOC4-v1POdEgR8ZeM6ozCfTzKx8_kxRA">
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
                                                <label class="col-sm-4 col-form-label" for="property-user_id">UID <span class="text-info">*</span></label>
                                                <div class="col-sm-8">
                                                    <input data-property-type="identity" id="property-user_id" name="property-user_id" type="text" minlength="" class="form-control form-control-lg form-control-alt" placeholder="Masukkan UID.." value="" required>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-sm-4 col-form-label" for="property-zone_id">Server <span class="text-info">*</span></label>
                                                <div class="col-sm-8">
                                                    <select data-property-type="options" id="property-zone_id" name="property-zone_id" class="form-select text-body-color" required>
                                                        <option value="os_asia">Asia</option>
                                                        <option value="os_usa">Amerika</option>
                                                        <option value="os_euro">Europe</option>
                                                        <option value="os_cht">TW, HK, MO</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-1">
                                                <div class="col-sm-8 ms-auto d-flex">
                                                    <button type="button" id="propertyCheck" class="btn btn-sm btn-primary me-2">
                                                        <i class="far fa-fw fa-face-viewfinder me-1"></i>Periksa
                                                    </button>
                                                    <a href="#modal-product-helper" class="btn btn-sm btn-danger bg-xplay text-white" data-bs-toggle="modal" data-bs-target="#modal-product-helper">
                                                        <i class="far fa-fw fa-question-circle me-1"></i>Tutorial
                                                    </a>
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
                                                            <input type="radio" class="form-check-input" data-first-open="true" id="cDenom_70" name="cDenom" value="cDenom_70">
                                                            <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="cDenom_70">
                                                                <div class="d-flex flex-column text-center justify-content-center align-items-center h-100">
                                                                    <img class="lazy mb-1" style="width: 30px; height: 30px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/category-denomination-icons/7cd41cb3-40c5-4ddf-b8ce-76572f3dc3d2.png?w=40" alt="Indonesia">
                                                                    <span id="cDenom_70" class="fs-xs fw-semibold">Indonesia</span>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4 col-md-3 px-2 mb-3">
                                                    <div class="position-relative h-100">
                                                        <div class="form-check form-block highlight h-100">
                                                            <input type="radio" class="form-check-input" data-first-open="false" id="cDenom_71" name="cDenom" value="cDenom_71">
                                                            <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="cDenom_71">
                                                                <div class="d-flex flex-column text-center justify-content-center align-items-center h-100">
                                                                    <img class="lazy mb-1" style="width: 30px; height: 30px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/category-denomination-icons/1f895130-cae0-4e9d-a779-a523b5b6dc30.png?w=40" alt="Malaysia">
                                                                    <span id="cDenom_71" class="fs-xs fw-semibold">Malaysia</span>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4 col-md-3 px-2 mb-3">
                                                    <div class="position-relative h-100">
                                                        <div class="form-check form-block highlight h-100">
                                                            <input type="radio" class="form-check-input" data-first-open="false" id="cDenom_72" name="cDenom" value="cDenom_72">
                                                            <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="cDenom_72">
                                                                <div class="d-flex flex-column text-center justify-content-center align-items-center h-100">
                                                                    <img class="lazy mb-1" style="width: 30px; height: 30px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/category-denomination-icons/79969de9-ed96-4f14-9b6b-bcee9601cbb7.png?w=40" alt="USA">
                                                                    <span id="cDenom_72" class="fs-xs fw-semibold">USA</span>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4 col-md-3 px-2 mb-3">
                                                    <div class="position-relative h-100">
                                                        <div class="form-check form-block highlight h-100">
                                                            <input type="radio" class="form-check-input" data-first-open="false" id="cDenom_73" name="cDenom" value="cDenom_73">
                                                            <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="cDenom_73">
                                                                <div class="d-flex flex-column text-center justify-content-center align-items-center h-100">
                                                                    <img class="lazy mb-1" style="width: 30px; height: 30px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/category-denomination-icons/dd946e53-dafd-4a03-81bd-cd241234e68b.png?w=40" alt="filipina">
                                                                    <span id="cDenom_73" class="fs-xs fw-semibold">filipina</span>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4 col-md-3 px-2 mb-3">
                                                    <div class="position-relative h-100">
                                                        <div class="form-check form-block highlight h-100">
                                                            <input type="radio" class="form-check-input" data-first-open="false" id="cDenom_74" name="cDenom" value="cDenom_74">
                                                            <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="cDenom_74">
                                                                <div class="d-flex flex-column text-center justify-content-center align-items-center h-100">
                                                                    <img class="lazy mb-1" style="width: 30px; height: 30px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/category-denomination-icons/4c0fb024-56ba-4708-84c4-03887213738a.png?w=40" alt="Chronal Nexus">
                                                                    <span id="cDenom_74" class="fs-xs fw-semibold">Chronal Nexus</span>
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
                                                <div id="pDRoot_GH929LFI" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_GH929LFI" name="productDenomination" value="GH929LFI" data-price-preview="15440" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_GH929LFI">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/7d3c77a9-12bf-48b5-a358-3d67cb1ed825.png?w=75" alt="60 Chronal Nexus">
                                                                <span id="productDenominationTitle_GH929LFI" class="fs-sm fw-semibold">60 Chronal Nexus</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp15.440</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp16.500</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp1.060</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_WX380JYN" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_WX380JYN" name="productDenomination" value="WX380JYN" data-price-preview="13580" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_WX380JYN">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/47169263-6dc2-4bfc-8531-3740ee34da44.png?w=75" alt="60 Genesis Crystals (ID)">
                                                                <span id="productDenominationTitle_WX380JYN" class="fs-sm fw-semibold">60 Genesis Crystals (ID)</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp13.580</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp16.500</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp2.920</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_IW409ZEY" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_IW409ZEY" name="productDenomination" value="IW409ZEY" data-price-preview="14050" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_IW409ZEY">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/0eb1babb-f78c-4bd6-a175-2177d0971ad6.png?w=75" alt="60 Genesis Crystals (MY)">
                                                                <span id="productDenominationTitle_IW409ZEY" class="fs-sm fw-semibold">60 Genesis Crystals (MY)</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp14.050</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp16.500</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp2.450</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_EH96204V" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_EH96204V" name="productDenomination" value="EH96204V" data-price-preview="14800" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_EH96204V">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/0305f63f-099b-41bc-a0ef-a4ff054fd7c2.png?w=75" alt="60 Genesis Crystals (PH)">
                                                                <span id="productDenominationTitle_EH96204V" class="fs-sm fw-semibold">60 Genesis Crystals (PH)</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp14.800</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp16.500</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp1.700</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_ZX777SET" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_ZX777SET" name="productDenomination" value="ZX777SET" data-price-preview="15290" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_ZX777SET">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/2dbec027-b215-42b4-b58f-f89cc4339aa5.png?w=75" alt="60 Genesis Crystals (USA)">
                                                                <span id="productDenominationTitle_ZX777SET" class="fs-sm fw-semibold">60 Genesis Crystals (USA)</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp15.290</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp16.500</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp1.210</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_VK905I69" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_VK905I69" name="productDenomination" value="VK905I69" data-price-preview="73290" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_VK905I69">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/119d1ac1-5e2a-4956-929b-03824726335c.png?w=75" alt="300+30 Chronal Nexus">
                                                                <span id="productDenominationTitle_VK905I69" class="fs-sm fw-semibold">300+30 Chronal Nexus</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp73.290</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp81.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp7.710</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_LY878VUH" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_LY878VUH" name="productDenomination" value="LY878VUH" data-price-preview="66640" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_LY878VUH">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/dad18f92-8c44-4354-9386-6091ebd65c95.png?w=75" alt="300+30 Genesis Crystals (ID)">
                                                                <span id="productDenominationTitle_LY878VUH" class="fs-sm fw-semibold">300+30 Genesis Crystals (ID)</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp66.640</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp81.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp14.360</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_RA664RHK" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_RA664RHK" name="productDenomination" value="RA664RHK" data-price-preview="72620" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_RA664RHK">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/f4830135-f6ef-4bdf-9419-43fe740fd43a.png?w=75" alt="300+30 Genesis Crystals (MY)">
                                                                <span id="productDenominationTitle_RA664RHK" class="fs-sm fw-semibold">300+30 Genesis Crystals (MY)</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp72.620</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp81.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp8.380</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_PN345SVQ" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_PN345SVQ" name="productDenomination" value="PN345SVQ" data-price-preview="74710" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_PN345SVQ">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/8b693887-e8a4-432f-a22f-e20b6b2973cc.png?w=75" alt="300+30 Genesis Crystals (PH)">
                                                                <span id="productDenominationTitle_PN345SVQ" class="fs-sm fw-semibold">300+30 Genesis Crystals (PH)</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp74.710</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp81.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp6.290</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_AH144TBY" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_AH144TBY" name="productDenomination" value="AH144TBY" data-price-preview="77150" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_AH144TBY">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/931145b6-9883-4798-a08f-dd7bff9c5046.png?w=75" alt="300+30 Genesis Crystals (USA)">
                                                                <span id="productDenominationTitle_AH144TBY" class="fs-sm fw-semibold">300+30 Genesis Crystals (USA)</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp77.150</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp81.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp3.850</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_IQ899V6O" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_IQ899V6O" name="productDenomination" value="IQ899V6O" data-price-preview="217790" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_IQ899V6O">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/b06decf4-f9c6-43e3-9d3a-964840b13740.png?w=75" alt="980+110 Chronal Nexus">
                                                                <span id="productDenominationTitle_IQ899V6O" class="fs-sm fw-semibold">980+110 Chronal Nexus</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp217.790</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp255.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp37.210</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_TQ499I6K" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_TQ499I6K" name="productDenomination" value="TQ499I6K" data-price-preview="209660" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_TQ499I6K">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/99cc190f-f90e-4b7c-983e-0ef995ce8bca.png?w=75" alt="980+110 Genesis Crystals (ID)">
                                                                <span id="productDenominationTitle_TQ499I6K" class="fs-sm fw-semibold">980+110 Genesis Crystals (ID)</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp209.660</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp255.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp45.340</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_NR3655JW" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_NR3655JW" name="productDenomination" value="NR3655JW" data-price-preview="218330" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_NR3655JW">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/cfbf96d9-da45-4b6f-8c91-06f604cc2bf8.png?w=75" alt="980+110 Genesis Crystals (MY)">
                                                                <span id="productDenominationTitle_NR3655JW" class="fs-sm fw-semibold">980+110 Genesis Crystals (MY)</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp218.330</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp255.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp36.670</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_VK723L2H" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_VK723L2H" name="productDenomination" value="VK723L2H" data-price-preview="221290" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_VK723L2H">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/83feaeb3-5652-4928-a130-871f05e76cbe.png?w=75" alt="980+110 Genesis Crystals (PH)">
                                                                <span id="productDenominationTitle_VK723L2H" class="fs-sm fw-semibold">980+110 Genesis Crystals (PH)</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp221.290</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp255.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp33.710</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_EU0430PU" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_EU0430PU" name="productDenomination" value="EU0430PU" data-price-preview="231320" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_EU0430PU">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/b3b798ae-36aa-40c1-902d-55e8c8059d5e.png?w=75" alt="980+110 Genesis Crystals (USA)">
                                                                <span id="productDenominationTitle_EU0430PU" class="fs-sm fw-semibold">980+110 Genesis Crystals (USA)</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp231.320</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp255.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp23.680</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_QO254IQG" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_QO254IQG" name="productDenomination" value="QO254IQG" data-price-preview="473760" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_QO254IQG">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/0f226359-ced2-4053-b466-0ea9291e3317.png?w=75" alt="1980+260 Chronal Nexus">
                                                                <span id="productDenominationTitle_QO254IQG" class="fs-sm fw-semibold">1980+260 Chronal Nexus</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp473.760</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp489.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp15.240</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_II57153W" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_II57153W" name="productDenomination" value="II57153W" data-price-preview="400740" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_II57153W">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/c8bf883c-fcf6-4a29-a463-56858e04c2d8.png?w=75" alt="1980+260 Genesis Crystals (ID)">
                                                                <span id="productDenominationTitle_II57153W" class="fs-sm fw-semibold">1980+260 Genesis Crystals (ID)</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp400.740</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp489.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp88.260</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_ZQ687YYB" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_ZQ687YYB" name="productDenomination" value="ZQ687YYB" data-price-preview="471810" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_ZQ687YYB">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/f2d1516e-77bc-422e-9760-add5d3e94c20.png?w=75" alt="1980+260 Genesis Crystals (MY)">
                                                                <span id="productDenominationTitle_ZQ687YYB" class="fs-sm fw-semibold">1980+260 Genesis Crystals (MY)</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp471.810</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp489.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp17.190</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_RD290D88" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_RD290D88" name="productDenomination" value="RD290D88" data-price-preview="443680" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_RD290D88">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/9cf25fa4-0b20-440d-aa4e-e3514a276af1.png?w=75" alt="1980+260 Genesis Crystals (PH)">
                                                                <span id="productDenominationTitle_RD290D88" class="fs-sm fw-semibold">1980+260 Genesis Crystals (PH)</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp443.680</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp489.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp45.320</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_NV41611Q" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_NV41611Q" name="productDenomination" value="NV41611Q" data-price-preview="461250" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_NV41611Q">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/ba3480e4-815a-4725-b850-47bc1e03a0a9.png?w=75" alt="1980+260 Genesis Crystals (USA)">
                                                                <span id="productDenominationTitle_NV41611Q" class="fs-sm fw-semibold">1980+260 Genesis Crystals (USA)</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp461.250</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp489.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp27.750</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_AU981XXZ" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_AU981XXZ" name="productDenomination" value="AU981XXZ" data-price-preview="734490" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_AU981XXZ">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/2b918f17-2c62-4220-bdf1-738944417bee.png?w=75" alt="3280+600 Chronal Nexus">
                                                                <span id="productDenominationTitle_AU981XXZ" class="fs-sm fw-semibold">3280+600 Chronal Nexus</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp734.490</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp815.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp80.510</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_FB953BDK" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_FB953BDK" name="productDenomination" value="FB953BDK" data-price-preview="666940" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_FB953BDK">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/321da6f4-c8ef-4402-bcf1-a52f67928f30.png?w=75" alt="3280+600 Genesis Crystals (ID)">
                                                                <span id="productDenominationTitle_FB953BDK" class="fs-sm fw-semibold">3280+600 Genesis Crystals (ID)</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp666.940</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp815.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp148.060</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_CX258TOF" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_CX258TOF" name="productDenomination" value="CX258TOF" data-price-preview="725250" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_CX258TOF">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/67f543c8-a093-49b3-a301-8ee8a986c617.png?w=75" alt="3280+600 Genesis Crystals (MY)">
                                                                <span id="productDenominationTitle_CX258TOF" class="fs-sm fw-semibold">3280+600 Genesis Crystals (MY)</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp725.250</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp815.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp89.750</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_NZ513F0N" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_NZ513F0N" name="productDenomination" value="NZ513F0N" data-price-preview="742850" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_NZ513F0N">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/35b9f317-aea3-46c1-a6eb-ab6f6a433a7e.png?w=75" alt="3280+600 Genesis Crystals (PH)">
                                                                <span id="productDenominationTitle_NZ513F0N" class="fs-sm fw-semibold">3280+600 Genesis Crystals (PH)</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp742.850</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp815.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp72.150</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_KJ6005U5" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_KJ6005U5" name="productDenomination" value="KJ6005U5" data-price-preview="767730" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_KJ6005U5">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/c19914b7-157e-4865-9958-85786e0a753e.png?w=75" alt="3280+600 Genesis Crystals (USA)">
                                                                <span id="productDenominationTitle_KJ6005U5" class="fs-sm fw-semibold">3280+600 Genesis Crystals (USA)</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp767.730</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp815.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp47.270</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_VQ2584X5" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_VQ2584X5" name="productDenomination" value="VQ2584X5" data-price-preview="1469660" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_VQ2584X5">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/54b08c79-c15e-489f-948c-151eec915c3c.png?w=75" alt="6480+1600 Chronal Nexus">
                                                                <span id="productDenominationTitle_VQ2584X5" class="fs-sm fw-semibold">6480+1600 Chronal Nexus</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp1.469.660</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp1.629.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp159.340</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_KD835YY5" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_KD835YY5" name="productDenomination" value="KD835YY5" data-price-preview="1331630" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_KD835YY5">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/7dbb1fde-3311-4782-b346-599d61478a51.png?w=75" alt="6480+1600 Genesis Crystals (ID)">
                                                                <span id="productDenominationTitle_KD835YY5" class="fs-sm fw-semibold">6480+1600 Genesis Crystals (ID)</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp1.331.630</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp1.629.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp297.370</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_CL754B51" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_CL754B51" name="productDenomination" value="CL754B51" data-price-preview="1429760" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_CL754B51">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/1f6c2c0b-0c36-48e8-ad11-165aa3519561.png?w=75" alt="6480+1600 Genesis Crystals (MY)">
                                                                <span id="productDenominationTitle_CL754B51" class="fs-sm fw-semibold">6480+1600 Genesis Crystals (MY)</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp1.429.760</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp1.629.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp199.240</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_NH254BFX" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_NH254BFX" name="productDenomination" value="NH254BFX" data-price-preview="1457700" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_NH254BFX">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/56686472-8e45-4eea-b171-f9dd6aac27a9.png?w=75" alt="6480+1600 Genesis Crystals (PH)">
                                                                <span id="productDenominationTitle_NH254BFX" class="fs-sm fw-semibold">6480+1600 Genesis Crystals (PH)</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp1.457.700</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp1.629.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp171.300</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_MR278V2B" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_MR278V2B" name="productDenomination" value="MR278V2B" data-price-preview="1534070" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_MR278V2B">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/bbc6ede6-d091-4789-9e92-19fc7cd19076.png?w=75" alt="6480+1600 Genesis Crystals (USA)">
                                                                <span id="productDenominationTitle_MR278V2B" class="fs-sm fw-semibold">6480+1600 Genesis Crystals (USA)</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp1.534.070</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp1.629.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp94.930</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_OP620Y8G" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_OP620Y8G" name="productDenomination" value="OP620Y8G" data-price-preview="66640" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_OP620Y8G">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/edde341a-fc60-4d3c-8205-e2ff44b7e2ad.png?w=75" alt="Blessing of the Welkin Moon (ID)">
                                                                <span id="productDenominationTitle_OP620Y8G" class="fs-sm fw-semibold">Blessing of the Welkin Moon (ID)</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp66.640</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp81.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp14.360</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_KP79056F" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_KP79056F" name="productDenomination" value="KP79056F" data-price-preview="72790" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_KP79056F">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/25601ec0-6d7b-4d68-9c41-14448de7fa90.png?w=75" alt="Blessing of the Welkin Moon (MY)">
                                                                <span id="productDenominationTitle_KP79056F" class="fs-sm fw-semibold">Blessing of the Welkin Moon (MY)</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp72.790</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp81.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp8.210</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_HR981E6I" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_HR981E6I" name="productDenomination" value="HR981E6I" data-price-preview="74680" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_HR981E6I">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/ca4dc51e-7a8e-4792-b90f-34ab9a54dd2e.png?w=75" alt="Blessing of the Welkin Moon (PH)">
                                                                <span id="productDenominationTitle_HR981E6I" class="fs-sm fw-semibold">Blessing of the Welkin Moon (PH)</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp74.680</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp81.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp6.320</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_AA670HUD" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_AA670HUD" name="productDenomination" value="AA670HUD" data-price-preview="77150" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_AA670HUD">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/4b0f09dc-9e44-4913-a486-d2c11fe07770.png?w=75" alt="Blessing of the Welkin Moon (USA)">
                                                                <span id="productDenominationTitle_AA670HUD" class="fs-sm fw-semibold">Blessing of the Welkin Moon (USA)</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp77.150</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp81.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp3.850</span>
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
                        <div id="parent-content-review-mobile" class="d-none" data-shown="1"></div>
                        <!-- END Review Content -->

                        <!-- Ranking Content -->
                        <div id="parent-content-ranking-mobile" class="d-none" data-shown=""></div>
                        <!-- END Ranking Content -->

                        <!-- Article Content -->
                        <div id="parent-content-article-mobile" class="d-none"></div>
                        <!-- END Article Content -->

                        <!-- Faq Content -->
                        <div id="parent-content-faq" class="mt-5 d-none" style="margin-left: 4rem;">
                            <div id="content-faq">
                                <h3>Frequently Asked Questions (Soal yang sering ditanya)</h3>
                                <div id="accordion_faq" role="tablist" aria-multiselectable="true">
                                    <div class="block block-rounded block-link mb-1" data-bs-toggle="collapse" data-bs-parent="#accordion_faq" href="#accordion_faq_q23947858" aria-expanded="true" aria-controls="accordion_faq_q23947858">
                                        <div class="block-header block-header-default" role="tab" id="accordion_faq_h23947858">
                                            <span class="fw-semibold">Cara Top Up Genesis Crystals Genshin Impact (GI)?</span>
                                        </div>
                                        <div id="accordion_faq_q23947858" class="collapse" role="tabpanel" aria-labelledby="accordion_faq_h23947858">
                                            <div class="block-content static-page">
                                                <p>Cara Top Up Genesis Crystals Genshin Impact (GI)?</p><ol><li>Kunjungi halaman “<a target="_blank" rel="noopener noreferrer" href="1528787297.html"><strong>Topup Genesis Crystals Genshin Impact Murah</strong></a>” di topupgim.com</li><li>Masukkan User ID, klik “<strong>Cara menemukan ID Genshin Impact kamu” </strong>jika tidak tahu apa ID Genshin Impact kamu.</li><li>Pilih jumlah Genesis Crystals yang ingin dibeli.</li><li>Pilih metode pembayaran, rekomendasi kami “QRIS”.</li><li>Masukkan nomor Whatsapp, kemudian klik tombol “Beli Sekarang”<br><br>Jika bingung/ada pertanyaan tidak perlu ragu untuk menhubungi CS Whatsapp kami biar kami arahkan.</li></ol>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block block-rounded block-link mb-1" data-bs-toggle="collapse" data-bs-parent="#accordion_faq" href="#accordion_faq_q33920634" aria-expanded="true" aria-controls="accordion_faq_q33920634">
                                        <div class="block-header block-header-default" role="tab" id="accordion_faq_h33920634">
                                            <span class="fw-semibold">Cara Mendapatkan ID Pengguna Genshin Impact (GI)</span>
                                        </div>
                                        <div id="accordion_faq_q33920634" class="collapse" role="tabpanel" aria-labelledby="accordion_faq_h33920634">
                                            <div class="block-content static-page">
                                                <ol><li>Buka game Genshin Impact Anda. Pada halaman awal, Anda dapat melihat UID Anda di bagian pojok kanan bawah layar dan nama server akan terlihat di bagian tengah layar;</li><li>UID Anda juga dapat dilihat melalui halaman profile game.</li></ol><figure class="image"><img src="../../https://cdn.topupgim.com/product-helpers/1454a4d6-59ed-4181-9575-4d6874c4ba5c.jpg"></figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block block-rounded block-link mb-1" data-bs-toggle="collapse" data-bs-parent="#accordion_faq" href="#accordion_faq_q45370207" aria-expanded="true" aria-controls="accordion_faq_q45370207">
                                        <div class="block-header block-header-default" role="tab" id="accordion_faq_h45370207">
                                            <span class="fw-semibold">Apa butuh 2 HP untuk scan kode pembayaran QRIS?</span>
                                        </div>
                                        <div id="accordion_faq_q45370207" class="collapse" role="tabpanel" aria-labelledby="accordion_faq_h45370207">
                                            <div class="block-content static-page">
                                                <p>Tidak, kalian bisa mendownload QR kodenya dengan cara menekan tombol Unduh dibawah gambar QR.</p><p>Untuk tutorial lebih lengkap silahkan baca artikel:</p><p><strong>→ </strong><a target="_blank" rel="noopener noreferrer" href="{{ route('page.show', 'cara-bayar-di-topupgim') }}"><strong>Tutorial melakukan pembayaran QRIS.&nbsp;</strong></a><strong>&nbsp;</strong></p><p>Jika bingung/ada pertanyaan tidak perlu malu untuk kontak CS Whatsapp kami biar kami arahkan.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block block-rounded block-link mb-1" data-bs-toggle="collapse" data-bs-parent="#accordion_faq" href="#accordion_faq_q34667602" aria-expanded="true" aria-controls="accordion_faq_q34667602">
                                        <div class="block-header block-header-default" role="tab" id="accordion_faq_h34667602">
                                            <span class="fw-semibold">Cara Mendapatkan Genesis Crystals Genshin Impact Gratis?</span>
                                        </div>
                                        <div id="accordion_faq_q34667602" class="collapse" role="tabpanel" aria-labelledby="accordion_faq_h34667602">
                                            <div class="block-content static-page">
                                                <p>Ikuti event dan promo Topupgim melalui Instagram &amp; Facebook Topupgim untuk mendapatkan diskon hingga giveaway Genesis Crystal Genshin Impact gratis.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block block-rounded block-link mb-1" data-bs-toggle="collapse" data-bs-parent="#accordion_faq" href="#accordion_faq_q27398483" aria-expanded="true" aria-controls="accordion_faq_q27398483">
                                        <div class="block-header block-header-default" role="tab" id="accordion_faq_h27398483">
                                            <span class="fw-semibold">Pembayaran Berhasil, Tapi Genesis Crystals Genshin Impact (GI) Saya Belum Masuk</span>
                                        </div>
                                        <div id="accordion_faq_q27398483" class="collapse" role="tabpanel" aria-labelledby="accordion_faq_h27398483">
                                            <div class="block-content static-page">
                                                <p>Jika dalam 10 menit Genesis Crystals Genshin Impact (GI) kamu belum masuk, hubungi CS Whatsapp kami untuk menanyakan tentang pembelianmu.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                            <a class="fw-semibold m-3" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ftopupgim.com%2Fproduct%2Fgenshin-impact%2F1528787297%3Faff%3DInternal_Share" target="_blank">
                                                <i class="fab fa-2x fa-facebook opacity-75"></i>
                                            </a>
                                            <a class="fw-semibold m-3" href="https://twitter.com/share?url=https%3A%2F%2Ftopupgim.com%2Fproduct%2Fgenshin-impact%2F1528787297%3Faff%3DInternal_Share" target="_blank">
                                                <i class="fab fa-2x fa-twitter opacity-75"></i>
                                            </a>
                                            <a class="fw-semibold m-3" href="https://api.whatsapp.com/send?text=https%3A%2F%2Ftopupgim.com%2Fproduct%2Fgenshin-impact%2F1528787297%3Faff%3DInternal_Share" target="_blank">
                                                <i class="fab fa-2x fa-whatsapp opacity-75"></i>
                                            </a>
                                            <a class="fw-semibold m-3" href="https://pinterest.com/pin/create/button/?url=https%3A%2F%2Ftopupgim.com%2Fproduct%2Fgenshin-impact%2F1528787297%3Faff%3DInternal_Share" target="_blank">
                                                <i class="fab fa-2x fa-pinterest opacity-75"></i>
                                            </a>
                                            <a class="fw-semibold m-3" href="https://t.me/share/url?url=https%3A%2F%2Ftopupgim.com%2Fproduct%2Fgenshin-impact%2F1528787297%3Faff%3DInternal_Share" target="_blank">
                                                <i class="fab fa-2x fa-telegram opacity-75"></i>
                                            </a>
                                            <a class="fw-semibold m-3" href="https://linkedin.com/sharing/share-offsite/?url=https%3A%2F%2Ftopupgim.com%2Fproduct%2Fgenshin-impact%2F1528787297%3Faff%3DInternal_Share" target="_blank">
                                                <i class="fab fa-2x fa-linkedin opacity-75"></i>
                                            </a>
                                        </div>
                                        <p class="fs-sm fw-light text-center mb-4 mt-1 text-dark" style="word-break:break-all; word-wrap: break-word;">https://topupgim.com/product/genshin-impact/1528787297?aff=Internal_Share</p>
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
                                        <img class="img-fluid w-100 h-auto rounded mb-4" src="../../https://cdn.topupgim.com/product-helpers/1454a4d6-59ed-4181-9575-4d6874c4ba5c.jpg">
                                        <div class="static-page"><ol><li>Buka game Genshin Impact Anda. Pada halaman awal, Anda dapat melihat UID Anda di bagian pojok kanan bawah layar dan nama server akan terlihat di bagian tengah layar;</li><li>UID Anda juga dapat dilihat melalui halaman profile game.</li></ol><div style="border-radius:12px;height:0;overflow:hidden;padding-bottom:56.25%;position:relative;"><iframe style="height:100%;left:0;position:absolute;top:0;width:100%;" src="https://www.youtube.com/embed/HHhBih9RbvA?si=ewcknjDqSC3NnCgn" title="Tutorial Pembelian Tanpa Login" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen="">
      </iframe></div></div>
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
                                        <div class="static-page" style="min-height: 380px;"><p><strong>Video Youtube </strong>Tutorial Pembelian Tanpa perlu Login.</p><div style="border-radius:12px;height:0;overflow:hidden;padding-bottom:56.25%;position:relative;"><iframe style="height:100%;left:0;position:absolute;top:0;width:100%;" src="https://www.youtube.com/embed/7_g48wHaA-Y" title="Tutorial Pembelian Tanpa Login" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen="">
      </iframe></div></div>
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
                                                    <img class="img-fluid product-tile" style="background-image: url('../../https://cdn.topupgim.com/product-tiles/764918a1-b6f5-48ea-99a6-c40f04770addebf4.jpg?w=200');">
                                                </div>
                                                <div class="d-flex justify-content-end flex-column align-items-end">
                                                    <span class="h6 fs-normal fw-semibold mb-2">Genshin Impact</span>
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
                                                <p class="fs-sm mb-0">UID</p>
                                                <p id="purchase-property-user_id-text" class="fs-sm fw-normal h6 mb-0"></p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center pb-2">
                                                <p class="fs-sm mb-0">Server</p>
                                                <p id="purchase-property-zone_id-text" class="fs-sm fw-normal h6 mb-0"></p>
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
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="m-0">Kabar dan Promosi</h3>
                    <button type="button" class="btn btn-sm btn-alt-secondary" onclick="location.href='../../featured/news-and-promotions0366.html?code=1528787297';">
                        <i class="fa fa-fw fa-arrow-right text-muted"></i>
                    </button>
                </div>
                <div class="row items-push mb-4">
                    <div class="col-sm-6 col-lg-4">
                        <a class="block block-rounded block-link-pop overflow-hidden h-100 mb-0" href="../../news/update-luna-i-moon-wheel-genshin-impact-hadirkan-banner-baru-limit-level-100-karakter.html">
                            <div class="ratio mb-1" style="--bs-aspect-ratio: 55%;">
                                <div>
                                    <img class="lazy img-fluid img-round-top img-slider w-100" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/pages/9493ca83-2cb5-4209-98bd-c8ff3df4e4d6.jpg?w=500" alt="Gambar Artikel">
                                </div>
                            </div>
                            <div class="block-content block-content-full h-100">
                                <p class="fw-bold mb-1 text-truncate">
                                    Update Luna I: Moon Wheel Genshin Impact Hadirkan Banner Baru &amp; Limit Level 100 Karakter
                                </p>
                                <p class="fs-sm fw-medium text-muted text-line-2 mb-0">
                                    Genshin Impact hadirkan update besar Luna I: Moon Wheel! Banner baru, level 100 karakter, eksplorasi area baru, hingga event spesial siap ramaikan petualanganmu di Teyvat. Yuk simak detail lengkapnya dan maksimalkan tim kamu sekarang!
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <a class="block block-rounded block-link-pop overflow-hidden h-100 mb-0" href="../../news/genshin-impact-x-among-us-kolaborasi-tak-terduga-yang-bikin-heboh-komunitas-game.html">
                            <div class="ratio mb-1" style="--bs-aspect-ratio: 55%;">
                                <div>
                                    <img class="lazy img-fluid img-round-top img-slider w-100" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/pages/12dd7b17-da7e-46ba-bce2-6cc298dd713e.jpg?w=500" alt="Gambar Artikel">
                                </div>
                            </div>
                            <div class="block-content block-content-full h-100">
                                <p class="fw-bold mb-1 text-truncate">
                                    Genshin Impact x Among Us: Kolaborasi Tak Terduga yang Bikin Heboh Komunitas Game
                                </p>
                                <p class="fs-sm fw-medium text-muted text-line-2 mb-0">
                                    Dunia Teyvat bertemu luar angkasa! Kolaborasi Genshin Impact x Among Us hadirkan skin eksklusif, map Mondstadt, dan event seru yang sayang untuk dilewatkan. Siapkah kamu jadi crewmate bersama Paimon?
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <a class="block block-rounded block-link-pop overflow-hidden h-100 mb-0" href="../../news/cahaya-rembulan-nod-krai-menyapa-update-genshin-impact-candra-i-hadir-10-september.html">
                            <div class="ratio mb-1" style="--bs-aspect-ratio: 55%;">
                                <div>
                                    <img class="lazy img-fluid img-round-top img-slider w-100" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/pages/b13b42c6-ba71-41e7-9d4b-3eded06f006e.jpg?w=500" alt="Gambar Artikel">
                                </div>
                            </div>
                            <div class="block-content block-content-full h-100">
                                <p class="fw-bold mb-1 text-truncate">
                                    Cahaya Rembulan Nod-Krai Menyapa! Update Genshin Impact &quot;Candra I&quot; Hadir 10 September
                                </p>
                                <p class="fs-sm fw-medium text-muted text-line-2 mb-0">
                                    Update Genshin Impact “Candra I” hadir 10 September dengan wilayah baru Nod-Krai, karakter unik, dan event eksklusif. Siapkan strategi dan resource kamu untuk petualangan seru di bawah cahaya rembulan!
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
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
                    <a href="../valorant/1528917260.html" title="top up Valorant" class="btn btn-alt-primary rounded-pill me-2 mb-2">
                        Valorant
                    </a>
                </div>
            </div>
        </main>
        <!-- END Main Container -->

@endsection
