@extends('layouts.app')

@section('title', 'Beli Zems Zepeto | Top Up Zepeto Murah | Topupgim - TopUpGim')

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
                                <img class="img-fluid rounded img-slider w-100" src="../../https://cdn.topupgim.com/product-rectangles/a8ed04a2-5904-4899-abe4-4e4f71dd887e.jpg" alt="Top Up Zepeto">
                            </div>
                        </div>
                        <!-- END Cover Content -->

                        <!-- Description Content -->
                        <h1>Top Up Zepeto</h1>
                        <div class="d-flex flex-row flex-wrap align-items-center gy-1 mb-2">
                            <img src="{{ asset(\'assets/media/images/instant-badge.png" style="height: 50px;" class="mb-1 me-3" alt="delivery image">
                            <img src="{{ asset(\'assets/media/images/official-store-badge.png" style="height: 50px;" class="mb-1 me-3" alt="provider image">
                        </div>
                        <div class="static-page-product-desc mb-4"><p><strong>Top Up Zepeto</strong> lebih murah dengan kode promo, diskon hingga 39%. 14 Zems Zepeto<strong> hanya Rp14.000.&nbsp;</strong></p><div class="raw-html-embed"><h2 style="font-size: 16px;">Top Up Zepeto di Topupgim</h2>
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
                                <h3 class="mb-4">Sultan Zepeto</h3>
                                <div class="d-flex align-items-center border rounded p-3 mb-3 block block-rounded overflow-hidden">
                                    <span class="fw-semibold me-3">1</span>
                                    <img class="img-avatar border" style="width: 40px; height: 40px" src="../../https://cdn.topupgim.com/circle-logo.jpg">
                                    <div class="d-flex flex-column ms-3">
                                        <span class="fs-sm fw-semibold">Ayana</span>
                                        <span class="text-muted fs-sm">Rp. 932.300</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center border rounded p-3 mb-3 block block-rounded overflow-hidden">
                                    <span class="fw-semibold me-3">2</span>
                                    <img class="img-avatar border" style="width: 40px; height: 40px" src="../../https://cdn.topupgim.com/circle-logo.jpg">
                                    <div class="d-flex flex-column ms-3">
                                        <span class="fs-sm fw-semibold">6282296*****4</span>
                                        <span class="text-muted fs-sm">Rp. 487.100</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center border rounded p-3 mb-3 block block-rounded overflow-hidden">
                                    <span class="fw-semibold me-3">3</span>
                                    <img class="img-avatar border" style="width: 40px; height: 40px" src="../../https://cdn.topupgim.com/circle-logo.jpg">
                                    <div class="d-flex flex-column ms-3">
                                        <span class="fs-sm fw-semibold">6281328*****0</span>
                                        <span class="text-muted fs-sm">Rp. 372.300</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center border rounded p-3 mb-3 block block-rounded overflow-hidden">
                                    <span class="fw-semibold me-3">4</span>
                                    <img class="img-avatar border" style="width: 40px; height: 40px" src="../../https://cdn.topupgim.com/circle-logo.jpg">
                                    <div class="d-flex flex-column ms-3">
                                        <span class="fs-sm fw-semibold">vaundra al fauzul</span>
                                        <span class="text-muted fs-sm">Rp. 347.600</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center border rounded p-3 mb-3 block block-rounded overflow-hidden">
                                    <span class="fw-semibold me-3">5</span>
                                    <img class="img-avatar border" style="width: 40px; height: 40px" src="../../https://cdn.topupgim.com/circle-logo.jpg">
                                    <div class="d-flex flex-column ms-3">
                                        <span class="fs-sm fw-semibold">6281321*****3</span>
                                        <span class="text-muted fs-sm">Rp. 248.200</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Ranking Content -->

                        <!-- Article Content -->
                        <div id="parent-content-article" class="d-none">
                            <div id="content-article" class="pt-5">
                                <h2>Zepeto</h2>
                                <div class="static-page w-100"><p>Zepeto adalah sebuah aplikasi dan game sosial yang memungkinkan pengguna untuk membuat avatar 3D yang dipersonalisasi. Avatar ini dapat digunakan untuk berinteraksi dengan pengguna lain di dalam lingkungan virtual. Zepeto memungkinkan pengguna untuk mendandani avatar mereka, berfoto, dan berpartisipasi dalam berbagai aktivitas di dunia virtual yang dirancang oleh pengguna lain.</p><p>Beberapa fitur utama dari Zepeto termasuk:</p><ol><li><strong>Kustomisasi Avatar</strong>: Pengguna dapat membuat avatar 3D mereka sendiri dengan berbagai pilihan gaya rambut, pakaian, aksesori, dan fitur wajah.</li><li><strong>Dunia Virtual</strong>: Zepeto menyediakan berbagai dunia virtual di mana pengguna dapat berkeliling, bermain mini-game, dan berinteraksi dengan avatar lain.</li><li><strong>Sosialisasi</strong>: Pengguna dapat berteman dengan pengguna lain, mengobrol, dan berbagi foto atau video dari avatar mereka.</li><li><strong>Marketplace</strong>: Zepeto memiliki toko di mana pengguna bisa membeli pakaian dan aksesoris baru untuk avatar mereka menggunakan mata uang dalam game.</li><li><strong>Kreativitas Pengguna</strong>: Zepeto memungkinkan pengguna untuk membuat dan membagikan dunia dan item mereka sendiri, yang bisa digunakan oleh pengguna lain di dalam game.</li></ol><p>Aplikasi ini populer terutama di kalangan remaja dan anak muda, dan telah menciptakan komunitas besar yang aktif berinteraksi dalam berbagai kegiatan sosial dan kreatif di dunia virtualnya.</p><h2>Zems Zepeto</h2><p>Zems di Zepeto adalah mata uang virtual yang digunakan dalam aplikasi Zepeto. Zems memungkinkan pengguna untuk membeli berbagai item dalam game, seperti pakaian, aksesori, dan dekorasi untuk avatar mereka. Selain itu, Zems juga dapat digunakan untuk membeli pose khusus, gerakan, dan item eksklusif lainnya yang dapat memperkaya pengalaman pengguna di dunia Zepeto.</p><p>Ada beberapa cara untuk mendapatkan Zems di Zepeto:</p><p><strong>Pembelian dalam aplikasi</strong>: Pengguna dapat membeli Zems menggunakan uang nyata melalui pembelian dalam aplikasi.</p><p><strong>Menyelesaikan misi</strong>: Zepeto terkadang menawarkan misi atau tantangan yang dapat diselesaikan oleh pengguna untuk mendapatkan Zems sebagai hadiah.</p><p><strong>Acara khusus</strong>: Zepeto sering mengadakan acara atau promosi di mana pengguna bisa mendapatkan Zems secara gratis atau dengan diskon.</p><p><strong>Penjualan item buatan pengguna</strong>: Bagi pengguna yang membuat dan menjual item di Zepeto, mereka bisa mendapatkan Zems sebagai imbalan dari penjualan tersebut.</p><p>Zems adalah bagian penting dari ekosistem Zepeto karena memungkinkan pengguna untuk mempersonalisasi avatar mereka lebih lanjut dan membuat pengalaman bermain lebih menarik dan unik. Jika kamu mencari tempat untuk melakukan <a href="1528847900.html"><strong>top-up Zems ZEPETO</strong></a> dengan harga terjangkau, <a href="{{ route('home') }}"><strong>Topupgim</strong></a> adalah salah satu situs yang dapat kamu pertimbangkan. Situs ini sering kali menawarkan harga yang lebih murah dibandingkan platform lainnya, dengan berbagai metode pembayaran yang memudahkan proses top-up.</p><p>Untuk melakukan top-up Zems di Zepeto melalui TopUpGim, berikut adalah langkah-langkah yang bisa Anda ikuti:</p><h3>Cara Top Up Zems Zepeto Termurah</h3><ol><li><strong>Buka Website TopUpGim:</strong><br>Buka browser dan kunjungi situs <a href="{{ route('home') }}"><strong>web resmi TopUpGim</strong></a> atau unduh <a href="https://play.google.com/store/apps/details?id=com.topupgim.app"><strong>aplikasi Topupgim</strong></a> di Playstore.</li><li><strong>Cari Zepeto:</strong><br>Di halaman utama, cari dan pilih opsi untuk <a href="1528847900.html"><strong>top up Zepeto</strong></a>.</li><li><strong>Pilih Jumlah Zems:</strong><br>Pilih jumlah Zems yang ingin Anda beli. Biasanya, tersedia beberapa opsi paket dengan jumlah Zems yang berbeda.</li><li><strong>Masukkan ID Zepeto:</strong><br>Masukkan <strong>ID Zepeto</strong> Anda dengan benar. Pastikan ID yang Anda masukkan sudah sesuai untuk memastikan Zems yang dibeli masuk ke akun yang benar.</li><li><strong>Pilih Metode Pembayaran:</strong><br>Pilih metode pembayaran yang ingin Anda gunakan. TopUpGim biasanya menyediakan beberapa metode pembayaran, seperti transfer bank, e-wallet, atau pulsa.</li><li><strong>Lakukan Pembayaran:</strong><br>Ikuti instruksi untuk melakukan pembayaran sesuai metode yang Anda pilih. Pastikan untuk memasukkan informasi dengan benar dan lengkap.</li><li><strong>Konfirmasi Pembayaran:</strong><br>Setelah pembayaran selesai, biasanya Anda perlu melakukan konfirmasi. Beberapa platform mungkin memerlukan Anda untuk mengirimkan bukti pembayaran.</li><li><strong>Tunggu Zems Masuk ke Akun:</strong><br>Setelah pembayaran terkonfirmasi, Zems akan masuk ke akun Zepeto Anda dalam beberapa menit, tergantung pada proses penyelesaian transaksi.</li></ol><p>Dengan langkah-langkah di atas, Anda bisa dengan mudah melakukan <a href="1528847900.html"><strong>Beli Zems Zepeto</strong></a> melalui TopUpGim.</p><h3>Keuntungan Top Up Zepeto di Topupgim</h3><p>TopUpGim menawarkan beberapa keuntungan untuk top-up Zepeto, yang dapat menarik bagi pengguna:</p><ol><li><strong>Harga Murah:</strong><br>TopUpGim dikenal menawarkan harga yang kompetitif dan seringkali lebih murah dibandingkan platform top-up lainnya. Hal ini membuatnya menjadi pilihan yang ekonomis bagi pengguna.</li><li><strong>Proses Cepat dan Mudah:</strong><br>TopUpGim memiliki proses transaksi yang cepat dan mudah, sehingga pengguna dapat dengan cepat mendapatkan Zems yang dibutuhkan tanpa banyak kerumitan.</li><li><strong>Berbagai Metode Pembayaran:</strong><br>Platform ini menyediakan berbagai metode pembayaran, mulai dari transfer bank, e-wallet, hingga pulsa, yang memudahkan pengguna dalam memilih metode yang paling nyaman.</li><li><strong>Promosi dan Diskon:</strong><br>TopUpGim sering menawarkan promosi dan diskon tambahan untuk top-up Zepeto, sehingga pengguna bisa mendapatkan lebih banyak Zems dengan harga yang lebih rendah.</li><li><strong>Pelayanan Pelanggan yang Responsif:</strong><br>Layanan pelanggan yang responsif dan siap membantu jika terjadi masalah selama transaksi, memberikan rasa aman bagi pengguna.</li><li><strong>Transaksi Aman:</strong><br>TopUpGim mengutamakan keamanan transaksi dengan berbagai lapisan perlindungan, sehingga pengguna tidak perlu khawatir tentang keamanan data pribadi dan finansial mereka.</li><li><strong>Kemudahan Akses:</strong><br>Website TopUpGim mudah diakses dan digunakan, dengan antarmuka yang user-friendly, sehingga pengguna dari berbagai kalangan dapat dengan mudah melakukan top-up.</li></ol><p>Keuntungan-keuntungan ini membuat TopUpGim menjadi pilihan yang populer bagi banyak pengguna Zepeto yang ingin melakukan <a href="1528847900.html"><strong>top-up Zems</strong></a> dengan harga terjangkau dan proses yang mudah.</p><h3>Metode Pembayaran</h3><p>Berikut adalah opsi metode pembayaran untuk top up Zems Zepeto di TopUpGim:</p><ol><li><strong>E-Wallet (Dompet Digital)</strong>:<br>Anda bisa menggunakan e-wallet populer seperti OVO, GoPay, DANA, dan ShopeePay. Ini memudahkan pembayaran langsung dari ponsel Anda dengan cepat dan praktis.</li><li><strong>Transfer Bank</strong>:<br>Tersedia pilihan transfer bank dari berbagai bank besar di Indonesia, seperti BCA, Mandiri, BNI, dan BRI. Prosesnya mudah dan dapat dilakukan melalui mobile banking, ATM, atau internet banking.</li><li><strong>Virtual Account</strong>:<br>Anda dapat membayar melalui virtual account yang disediakan oleh bank. Ini memungkinkan pembayaran instan tanpa perlu konfirmasi tambahan.</li><li><strong>Minimarket</strong>:<br>Untuk pembayaran tunai, Anda bisa menggunakan layanan di minimarket seperti Indomaret dan Alfamart. Ini cocok bagi Anda yang lebih nyaman membayar langsung di gerai.</li><li><strong>QRIS</strong>:<br>QRIS mempermudah pembayaran melalui kode QR, mendukung berbagai aplikasi pembayaran dalam satu standar.</li><li><strong>Codashop Zepeto &amp; Unipin Zepeto</strong></li></ol><p>Dengan beragam metode ini, Anda dapat memilih yang paling sesuai dengan preferensi dan kenyamanan Anda saat melakukan <a href="1528847900.html"><strong>Top Up Zems Zepeto</strong></a> di TopUpGim.</p><h4>Rekomendasi Top Up Game Lainnya</h4><p>Di Topupgim.com, selain Zepeto, Anda juga bisa melakukan top up untuk berbagai game populer lainnya. Beberapa game yang tersedia untuk top up di Topupgim.com antara lain:&nbsp;</p><ol><li><a href="../mobile-legends/1528378309.html"><strong>Top Up Mobile Legends&nbsp;</strong></a></li><li><a href="../pubgm/1528036161.html"><strong>Top Up PUBG Mobile&nbsp;</strong></a></li><li><a href="../call-of-duty-mobile/1528919312.html"><strong>Top Up Call of Duty Mobile (CODM)&nbsp;</strong></a></li><li><a href="../honor-of-kings/1528385129.html"><strong>Top Up Honor of Kings&nbsp;</strong></a></li><li><a href="../free-fire/1528555434.html"><strong>Top Up Free Fire</strong></a></li><li><a href="../hago/1528242362.html"><strong>Top Up Hago&nbsp;</strong></a></li><li><a href="../dana/1528543830.html"><strong>Top Up Dana</strong></a></li><li><a href="../blood-strike/1528112021.html"><strong>Top Up Blood Strike&nbsp;</strong></a></li><li><a href="../honkai-star-rail/1528308068.html"><strong>Top Up Honkai: Star Rail</strong></a></li></ol></div>
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
                            <input type="hidden" name="_csrf" value="uCWMNBEh-NdTtumxlweGgTYquIyDba9jb_RI">
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
                                                <label class="col-sm-4 col-form-label" for="property-user_id">User ID <span class="text-info">*</span></label>
                                                <div class="col-sm-8">
                                                    <input data-property-type="identity" id="property-user_id" name="property-user_id" type="text" minlength="" class="form-control form-control-lg form-control-alt" placeholder="Masukkan User ID.." value="" required>
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

                                            <div class="row px-md-1 animated fadeIn" style="min-height: 7rem;">
                                                <div id="pDRoot_QL225AB8" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_QL225AB8" name="productDenomination" value="QL225AB8" data-price-preview="15000" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_QL225AB8">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/fb38d2ef-8947-42fc-91c7-3d17420e33d9.png?w=75" alt="14 ZEMS">
                                                                <span id="productDenominationTitle_QL225AB8" class="fs-sm fw-semibold">14 ZEMS</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp15.000</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp16.500</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp1.500</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_OQ104XO3" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_OQ104XO3" name="productDenomination" value="OQ104XO3" data-price-preview="29300" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_OQ104XO3">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/cbf92cbd-8a38-4055-8d45-b26cfe71fe4c.png?w=75" alt="28 ZEMS">
                                                                <span id="productDenominationTitle_OQ104XO3" class="fs-sm fw-semibold">28 ZEMS</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp29.300</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp33.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp3.700</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_JO6049N9" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_JO6049N9" name="productDenomination" value="JO6049N9" data-price-preview="58300" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_JO6049N9">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/609e4056-759d-47b2-8020-6cf4b9df7cb4.png?w=75" alt="58 ZEMS">
                                                                <span id="productDenominationTitle_JO6049N9" class="fs-sm fw-semibold">58 ZEMS</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp58.300</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp66.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp7.700</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_YD126DW1" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_YD126DW1" name="productDenomination" value="YD126DW1" data-price-preview="124100" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_YD126DW1">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/1c1fd2af-64ff-4012-a3e8-7397e7cf52ae.png?w=75" alt="128 ZEMS">
                                                                <span id="productDenominationTitle_YD126DW1" class="fs-sm fw-semibold">128 ZEMS</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp124.100</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp132.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp7.900</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_FM019IXB" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_FM019IXB" name="productDenomination" value="FM019IXB" data-price-preview="313200" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_FM019IXB">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/79b75e22-03b2-405f-a9ec-e84024cf4cac.png?w=75" alt="323 ZEMS">
                                                                <span id="productDenominationTitle_FM019IXB" class="fs-sm fw-semibold">323 ZEMS</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp313.200</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp330.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp16.800</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_UZ160AFJ" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_UZ160AFJ" name="productDenomination" value="UZ160AFJ" data-price-preview="938900" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_UZ160AFJ">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/f4c82557-ca43-4e4e-874b-a72d571378d0.png?w=75" alt="1000 ZEMS">
                                                                <span id="productDenominationTitle_UZ160AFJ" class="fs-sm fw-semibold">1000 ZEMS</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp938.900</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp990.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp51.100</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_EF727MGK" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_EF727MGK" name="productDenomination" value="EF727MGK" data-price-preview="13900" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_EF727MGK">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/c692a843-456b-41de-9c42-a86dc6cf54ea.png?w=75" alt="4680 Coins">
                                                                <span id="productDenominationTitle_EF727MGK" class="fs-sm fw-semibold">4680 Coins</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp13.900</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp17.000</del>
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
                                                <div id="pDRoot_KR777H2A" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_KR777H2A" name="productDenomination" value="KR777H2A" data-price-preview="27000" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_KR777H2A">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/60d13b94-6bdb-459d-8290-963f69c36b97.png?w=75" alt="9700 Coins">
                                                                <span id="productDenominationTitle_KR777H2A" class="fs-sm fw-semibold">9700 Coins</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp27.000</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp32.980</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp5.980</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_EV553Z5E" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_EV553Z5E" name="productDenomination" value="EV553Z5E" data-price-preview="67600" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_EV553Z5E">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/0aa5788a-f2e1-45d6-94cc-2536016be1ac.png?w=75" alt="25200 Coins">
                                                                <span id="productDenominationTitle_EV553Z5E" class="fs-sm fw-semibold">25200 Coins</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp67.600</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp82.450</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp14.850</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_WQ328K9O" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_WQ328K9O" name="productDenomination" value="WQ328K9O" data-price-preview="108200" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_WQ328K9O">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/30a2c45a-7295-48c1-9f7f-81f49f890629.png?w=75" alt="40700 Coins">
                                                                <span id="productDenominationTitle_WQ328K9O" class="fs-sm fw-semibold">40700 Coins</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp108.200</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp132.890</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp24.690</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_OE518EOQ" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_OE518EOQ" name="productDenomination" value="OE518EOQ" data-price-preview="283600" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_OE518EOQ">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/420132b5-34ee-46ae-96f6-8c2af3c097a9.png?w=75" alt="110000 Coins">
                                                                <span id="productDenominationTitle_OE518EOQ" class="fs-sm fw-semibold">110000 Coins</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp283.600</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp349.200</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp65.600</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_VV018Y2D" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_VV018Y2D" name="productDenomination" value="VV018Y2D" data-price-preview="751800" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_VV018Y2D">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/d30b6566-51a5-4933-bcb0-4abf89104829.png?w=75" alt="300000 Coins">
                                                                <span id="productDenominationTitle_VV018Y2D" class="fs-sm fw-semibold">300000 Coins</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp751.800</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp949.050</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp197.250</span>
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
                                            <div id="productPaymentMethodContainer_51372103" class="productPaymentMethodContainer form-check form-block highlight mb-3">
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
                            <div id="content-faq">
                                <h3>Frequently Asked Questions (Soal yang sering ditanya)</h3>
                                <div id="accordion_faq" role="tablist" aria-multiselectable="true">
                                    <div class="block block-rounded block-link mb-1" data-bs-toggle="collapse" data-bs-parent="#accordion_faq" href="#accordion_faq_q98750231" aria-expanded="true" aria-controls="accordion_faq_q98750231">
                                        <div class="block-header block-header-default" role="tab" id="accordion_faq_h98750231">
                                            <span class="fw-semibold">Cara Top Up Zems Zepeto?</span>
                                        </div>
                                        <div id="accordion_faq_q98750231" class="collapse" role="tabpanel" aria-labelledby="accordion_faq_h98750231">
                                            <div class="block-content static-page">
                                                <ol><li>Kunjungi halaman “<a target="_blank" rel="noopener noreferrer" href="1528847900.html"><strong>Topup Zems Zepeto Murah</strong></a>” di topupgim.com</li><li>Masukkan User ID, klik “<strong>Cara menemukan ID Zepeto kamu” </strong>jika tidak tahu apa ID Zepeto kamu.</li><li>Pilih jumlah diamond yang ingin dibeli.</li><li>Pilih metode pembayaran, rekomendasi kami “QRIS”.</li><li>Masukkan nomor Whatsapp, kemudian klik tombol “Beli Sekarang”<br><br>Jika bingung/ada pertanyaan tidak perlu ragu untuk menhubungi CS Whatsapp kami biar kami arahkan.</li></ol>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block block-rounded block-link mb-1" data-bs-toggle="collapse" data-bs-parent="#accordion_faq" href="#accordion_faq_q89333755" aria-expanded="true" aria-controls="accordion_faq_q89333755">
                                        <div class="block-header block-header-default" role="tab" id="accordion_faq_h89333755">
                                            <span class="fw-semibold">Cara Mendapatkan ID Pengguna Zepeto</span>
                                        </div>
                                        <div id="accordion_faq_q89333755" class="collapse" role="tabpanel" aria-labelledby="accordion_faq_h89333755">
                                            <div class="block-content static-page">
                                                <p>Untuk menemukan username ZEPETO Anda, login ke akun Anda dan buka Profil Anda. Username ZEPETO Anda ada dibawah foto profil Anda dan dapat di salin dengan sekali ketukan. Mohon untuk tidak mengubah username ZEPETO anda setelah melakukan pembelian di Topupgim sampai menerima ZEM anda.</p><figure class="image"><img src="../../https://cdn.topupgim.com/product-helpers/959e9213-6dc9-4ec9-a62d-cf4e3e1c740c.jpg"></figure>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block block-rounded block-link mb-1" data-bs-toggle="collapse" data-bs-parent="#accordion_faq" href="#accordion_faq_q85521495" aria-expanded="true" aria-controls="accordion_faq_q85521495">
                                        <div class="block-header block-header-default" role="tab" id="accordion_faq_h85521495">
                                            <span class="fw-semibold">Apa butuh 2 HP untuk scan kode pembayaran QRIS?</span>
                                        </div>
                                        <div id="accordion_faq_q85521495" class="collapse" role="tabpanel" aria-labelledby="accordion_faq_h85521495">
                                            <div class="block-content static-page">
                                                <p>Tidak, kalian bisa mendownload QR kodenya dengan cara menekan tombol Unduh dibawah gambar QR.</p><p>Untuk tutorial lebih lengkap silahkan baca artikel:</p><p><strong>→ </strong><a target="_blank" rel="noopener noreferrer" href="{{ route('page.show', 'cara-bayar-di-topupgim') }}"><strong>Tutorial melakukan pembayaran QRIS.&nbsp;</strong></a><strong>&nbsp;</strong></p><p>Jika bingung/ada pertanyaan tidak perlu malu untuk kontak CS Whatsapp kami biar kami arahkan.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block block-rounded block-link mb-1" data-bs-toggle="collapse" data-bs-parent="#accordion_faq" href="#accordion_faq_q47915051" aria-expanded="true" aria-controls="accordion_faq_q47915051">
                                        <div class="block-header block-header-default" role="tab" id="accordion_faq_h47915051">
                                            <span class="fw-semibold">Berapa Lama Zems Zepeto Saya Dikirim?</span>
                                        </div>
                                        <div id="accordion_faq_q47915051" class="collapse" role="tabpanel" aria-labelledby="accordion_faq_h47915051">
                                            <div class="block-content static-page">
                                                <p>Normalnya dibawah 5 menit setelah pembayaran kamu selesaikan.</p><p>Jangan lupa restart aplikasi Zepeto kalian jika belum masuk.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block block-rounded block-link mb-1" data-bs-toggle="collapse" data-bs-parent="#accordion_faq" href="#accordion_faq_q95248361" aria-expanded="true" aria-controls="accordion_faq_q95248361">
                                        <div class="block-header block-header-default" role="tab" id="accordion_faq_h95248361">
                                            <span class="fw-semibold">Pembayaran Berhasil, Tapi Zems Zepeto Saya Belum Masuk</span>
                                        </div>
                                        <div id="accordion_faq_q95248361" class="collapse" role="tabpanel" aria-labelledby="accordion_faq_h95248361">
                                            <div class="block-content static-page">
                                                <p>Jika dalam 10 menit Zems Zepeto kamu belum masuk, hubungi CS Whatsapp kami untuk menanyakan tentang pembelianmu.</p>
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
                                            <a class="fw-semibold m-3" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ftopupgim.com%2Fproduct%2Fzepeto%2F1528847900%3Faff%3DInternal_Share" target="_blank">
                                                <i class="fab fa-2x fa-facebook opacity-75"></i>
                                            </a>
                                            <a class="fw-semibold m-3" href="https://twitter.com/share?url=https%3A%2F%2Ftopupgim.com%2Fproduct%2Fzepeto%2F1528847900%3Faff%3DInternal_Share" target="_blank">
                                                <i class="fab fa-2x fa-twitter opacity-75"></i>
                                            </a>
                                            <a class="fw-semibold m-3" href="https://api.whatsapp.com/send?text=https%3A%2F%2Ftopupgim.com%2Fproduct%2Fzepeto%2F1528847900%3Faff%3DInternal_Share" target="_blank">
                                                <i class="fab fa-2x fa-whatsapp opacity-75"></i>
                                            </a>
                                            <a class="fw-semibold m-3" href="https://pinterest.com/pin/create/button/?url=https%3A%2F%2Ftopupgim.com%2Fproduct%2Fzepeto%2F1528847900%3Faff%3DInternal_Share" target="_blank">
                                                <i class="fab fa-2x fa-pinterest opacity-75"></i>
                                            </a>
                                            <a class="fw-semibold m-3" href="https://t.me/share/url?url=https%3A%2F%2Ftopupgim.com%2Fproduct%2Fzepeto%2F1528847900%3Faff%3DInternal_Share" target="_blank">
                                                <i class="fab fa-2x fa-telegram opacity-75"></i>
                                            </a>
                                            <a class="fw-semibold m-3" href="https://linkedin.com/sharing/share-offsite/?url=https%3A%2F%2Ftopupgim.com%2Fproduct%2Fzepeto%2F1528847900%3Faff%3DInternal_Share" target="_blank">
                                                <i class="fab fa-2x fa-linkedin opacity-75"></i>
                                            </a>
                                        </div>
                                        <p class="fs-sm fw-light text-center mb-4 mt-1 text-dark" style="word-break:break-all; word-wrap: break-word;">https://topupgim.com/product/zepeto/1528847900?aff=Internal_Share</p>
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
                                        <img class="img-fluid w-100 h-auto rounded mb-4" src="../../https://cdn.topupgim.com/product-helpers/959e9213-6dc9-4ec9-a62d-cf4e3e1c740c.jpg">
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
                                        <div class="static-page" style="min-height: 380px;"><p><strong>Video YouTube:</strong> Tutorial Pembelian Tanpa Login</p><div style="border-radius:12px;height:0;overflow:hidden;padding-bottom:56.25%;position:relative;"><iframe style="height:100%;left:0;position:absolute;top:0;width:100%;" src="https://www.youtube.com/embed/7_g48wHaA-Y" title="Tutorial Pembelian Tanpa Login" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen="">
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
                                                    <img class="img-fluid product-tile" style="background-image: url('../../https://cdn.topupgim.com/product-tiles/07a1b9b4-7153-4b86-8a9c-93d5d6f3c007ebf4.jpg?w=200');">
                                                </div>
                                                <div class="d-flex justify-content-end flex-column align-items-end">
                                                    <span class="h6 fs-normal fw-semibold mb-2">Zepeto</span>
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
                                                <p class="fs-sm mb-0">User ID</p>
                                                <p id="purchase-property-user_id-text" class="fs-sm fw-normal h6 mb-0"></p>
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
                    <button type="button" class="btn btn-sm btn-alt-secondary" onclick="location.href='../../featured/news-and-promotionsab50.html?code=1528847900';">
                        <i class="fa fa-fw fa-arrow-right text-muted"></i>
                    </button>
                </div>
                <div class="row items-push mb-4">
                    <div class="col-sm-6 col-lg-4">
                        <a class="block block-rounded block-link-pop overflow-hidden h-100 mb-0" href="../../news/tren-fashion-terbaru-di-zepeto-yang-harus-kamu-coba-.html">
                            <div class="ratio mb-1" style="--bs-aspect-ratio: 55%;">
                                <div>
                                    <img class="lazy img-fluid img-round-top img-slider w-100" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/pages/65d60431-be1d-48a9-94f4-127108d1e0e0.png?w=500" alt="Gambar Artikel">
                                </div>
                            </div>
                            <div class="block-content block-content-full h-100">
                                <p class="fw-bold mb-1 text-truncate">
                                    Tren Fashion Terbaru di ZEPETO yang Harus Kamu Coba!
                                </p>
                                <p class="fs-sm fw-medium text-muted text-line-2 mb-0">
                                    ZEPETO, sebagai platform sosial berbasis avatar 3D yang semakin digemari, tidak hanya berfungsi sebagai ruang untuk berkomunikasi dan berinteraksi, tetapi juga sebagai wadah bagi para penggunanya untuk menuangkan kreativitas dalam dunia fashion digital.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <a class="block block-rounded block-link-pop overflow-hidden h-100 mb-0" href="../../news/panduan-lengkap-karakter-zepeto-cara-membuat-avatar-3d-yang-unik-dan-menarik.html">
                            <div class="ratio mb-1" style="--bs-aspect-ratio: 55%;">
                                <div>
                                    <img class="lazy img-fluid img-round-top img-slider w-100" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/pages/f557542a-a24c-4071-ac12-f79eabbaeeba.png?w=500" alt="Gambar Artikel">
                                </div>
                            </div>
                            <div class="block-content block-content-full h-100">
                                <p class="fw-bold mb-1 text-truncate">
                                    Panduan Lengkap Karakter ZEPETO: Cara Membuat Avatar 3D yang Unik dan Menarik
                                </p>
                                <p class="fs-sm fw-medium text-muted text-line-2 mb-0">
                                    Buat avatar 3D unik di Zepeto, sesuaikan penampilan, ekspresi, dan jelajahi dunia virtual seru! Berinteraksi dengan teman dan bagikan momen seru di media sosial.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <a class="block block-rounded block-link-pop overflow-hidden h-100 mb-0" href="../../news/panduan-lengkap-mengembangkan-konten-di-zepeto-untuk-pemula.html">
                            <div class="ratio mb-1" style="--bs-aspect-ratio: 55%;">
                                <div>
                                    <img class="lazy img-fluid img-round-top img-slider w-100" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/pages/57e9286e-d4b3-45ca-9762-0269f2ec2f87.png?w=500" alt="Gambar Artikel">
                                </div>
                            </div>
                            <div class="block-content block-content-full h-100">
                                <p class="fw-bold mb-1 text-truncate">
                                    Panduan Lengkap Mengembangkan Konten di ZEPETO untuk Pemula
                                </p>
                                <p class="fs-sm fw-medium text-muted text-line-2 mb-0">
                                    Bergabunglah di ZEPETO dan mulai ciptakan konten kreatifmu! Kustomisasi avatar, desain pakaian, buat dunia virtual, dan bagikan foto &amp; video menarik.
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
                    <a href="../valorant/1528917260.html" title="top up Valorant" class="btn btn-alt-primary rounded-pill me-2 mb-2">
                        Valorant
                    </a>
                </div>
            </div>
        </main>
        <!-- END Main Container -->

@endsection
