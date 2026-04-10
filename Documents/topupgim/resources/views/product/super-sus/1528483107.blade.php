@extends('layouts.app')

@section('title', 'Beli Goldstar Super Sus | Top Up Super Sus Murah | Topupgim - TopUpGim')

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
                                <img class="img-fluid rounded img-slider w-100" src="../../https://cdn.topupgim.com/product-rectangles/da9f3709-a845-45a6-8b7a-f6b411cbc48b.jpg" alt="Top Up Super Sus">
                            </div>
                        </div>
                        <!-- END Cover Content -->

                        <!-- Description Content -->
                        <h1>Top Up Super Sus</h1>
                        <div class="d-flex flex-row flex-wrap align-items-center gy-1 mb-2">
                            <img src="{{ asset(\'assets/media/images/instant-badge.png" style="height: 50px;" class="mb-1 me-3" alt="delivery image">
                            <img src="{{ asset(\'assets/media/images/official-store-badge.png" style="height: 50px;" class="mb-1 me-3" alt="provider image">
                        </div>
                        <div class="static-page-product-desc mb-4"><p><strong>Top Up Super Sus</strong> lebih murah dengan kode promo, diskon hingga 39%. 100 Goldstar Super Sus<strong> hanya Rp9.600.&nbsp;</strong></p><div class="raw-html-embed"><h2 style="font-size: 16px;">Top Up Super Sus di Topupgim</h2>
<ul class="list_alasan" style="list-style: none; padding-left: 0;font-size:13px"><li style="background: #fff;padding: 5px 8px;margin-bottom: 5px;border-radius: 5px; box-shadow: 0 1px 3px rgba(214,221,237,.5), 0 1px 2px rgba(214,221,237,.5);"><strong>Lebih Murah</strong>. Hemat hingga 39% &amp; tanpa biaya admin 🔥</li><li style="background: #fff;padding: 5px 8px;margin-bottom: 5px;border-radius: 5px;box-shadow: 0 1px 3px rgba(214,221,237,.5), 0 1px 2px rgba(214,221,237,.5);"><strong>Mudah &amp; Otomatis.</strong> Tidak perlu kirim bukti pembayaran.</li><li style="background: #fff;padding: 5px 8px;margin-bottom: 5px; border-radius: 5px;box-shadow: 0 1px 3px rgba(214,221,237,.5), 0 1px 2px rgba(214,221,237,.5);"><strong>Tanpa Delay</strong>. Pengiriman hanya hitungan detik.</li></ul></div></div>
                        <div class="d-flex flex-row flex-wrap align-items-center gy-1">
                            <span class="text-dark fs-sm fw-semibold mb-2 me-3">
                                <i class="fa fa-cart-shopping opacity-75 me-1"></i> Terjual: <span class="text-primary">4.9 rb</span>
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
                        </div>
                        <!-- END Ranking Content -->

                        <!-- Article Content -->
                        <div id="parent-content-article" class="d-none">
                            <div id="content-article" class="pt-5">
                                <h2>Super Sus</h2>
                                <div class="static-page w-100"><p><strong>Super Sus</strong> adalah game mobile multiplayer online yang mirip dengan game populer "Among Us." Dalam game ini, pemain berperan sebagai anggota kru di sebuah pesawat luar angkasa. Di antara para kru, ada beberapa pemain yang berperan sebagai penipu atau impostor. Tujuan utama permainan ini adalah bagi para kru untuk menyelesaikan tugas-tugas yang diberikan sambil mencoba mengidentifikasi dan mengeluarkan impostor dari permainan.</p><p>Berikut adalah beberapa elemen utama dari game <strong>Super Sus</strong>:</p><ol><li><strong>Peran Pemain</strong>: Pemain dapat berperan sebagai kru atau impostor. Kru bertugas menyelesaikan tugas-tugas tertentu di pesawat, sementara impostor berusaha mengacaukan misi dan mengeliminasi kru tanpa ketahuan.</li><li><strong>Diskusi dan Voting</strong>: Saat ada pemain yang ditemukan tewas atau saat pemain merasa ada sesuatu yang mencurigakan, sesi diskusi dimulai. Pemain dapat berdiskusi untuk mencari tahu siapa impostor dan kemudian melakukan voting untuk mengeluarkan pemain yang dicurigai.</li><li><strong>Mode Permainan</strong>: Super Sus menawarkan berbagai mode permainan yang berbeda, termasuk mode standar dan mode dengan variasi peran tambahan yang membuat permainan lebih menarik dan kompleks.</li><li><strong>Fitur Sosial</strong>: Game ini memiliki fitur obrolan suara dan teks yang memungkinkan pemain untuk berkomunikasi satu sama lain selama permainan, membuat diskusi dan strategi menjadi lebih interaktif.</li><li><strong>Kustomisasi</strong>: Pemain dapat menyesuaikan karakter mereka dengan berbagai kosmetik, seperti pakaian, aksesori, dan skin.</li></ol><p>Super Sus menawarkan pengalaman sosial yang intens dengan elemen strategi dan deduksi, di mana kepercayaan dan kebohongan memainkan peran penting dalam menentukan pemenang.</p><h2>Goldstar Super Sus</h2><p><strong>Goldstar</strong> dalam game <strong>Super Sus</strong> adalah mata uang premium yang digunakan untuk membeli berbagai item, kosmetik, dan fitur eksklusif dalam permainan. Dengan Goldstar, pemain dapat:</p><ol><li><strong>Membeli Kosmetik dan Skin</strong>: Pemain bisa menggunakan Goldstar untuk membeli skin, pakaian, dan aksesori yang bisa digunakan untuk mengkustomisasi karakter mereka dalam permainan.</li><li><strong>Membuka Item dan Fitur Premium</strong>: Beberapa fitur atau item dalam game hanya bisa diakses atau dibeli dengan Goldstar.</li><li><strong>Membuka Karakter atau Peran Spesial</strong>: Dalam beberapa kasus, Goldstar mungkin digunakan untuk membuka karakter, peran, atau mode permainan tertentu yang tidak tersedia untuk pemain gratis.</li><li><strong>Mengakses Event dan Konten Eksklusif</strong>: Goldstar juga bisa digunakan untuk berpartisipasi dalam event-event khusus yang menawarkan hadiah eksklusif atau konten terbatas.</li></ol><p>Website <a href="1528483107.html"><strong>top up Goldstar Super Sus</strong></a> termurah adalah Topupgim, platform yang dikenal karena menawarkan harga yang kompetitif untuk berbagai mata uang dan item dalam game. Topupgim memungkinkan pemain untuk membeli Goldstar dengan harga yang lebih terjangkau dibandingkan dengan platform lainnya, memberikan nilai lebih bagi pemain yang ingin mendapatkan mata uang premium dalam game Super Sus. Dengan proses pembelian yang mudah dan aman, Topupgim menjadi pilihan favorit bagi banyak pemain yang mencari cara hemat untuk meningkatkan pengalaman bermain mereka.</p><div class="group/conversation-turn relative flex w-full min-w-0 flex-col agent-turn"><div class="flex-col gap-1 md:gap-3"><div class="flex max-w-full flex-col flex-grow"><div class="min-h-[20px] text-message flex w-full flex-col items-end gap-2 break-words [.text-message+&amp;]:mt-5 overflow-x-auto whitespace-normal" data-message-author-role="assistant" data-message-id="8528a926-4dcd-48a5-a269-def4bc30a0ef" dir="auto"><div class="flex w-full flex-col gap-1 empty:hidden first:pt-[3px]"><div class="markdown prose w-full break-words dark:prose-invert light"><h3>Cara Top Up Goldstar Super Sus Termurah</h3><p>Untuk melakukan top up Super Sus di Topupgim, berikut adalah langkah-langkahnya:</p><ol><li><strong>Kunjungi Situs Topupgim</strong>:&nbsp;<br>Buka browser dan kunjungi situs <a href="{{ route('home') }}"><strong>web resmi TopUpGim</strong></a> atau unduh <a href="https://play.google.com/store/apps/details?id=com.topupgim.app"><strong>aplikasi Topupgim</strong></a> di Playstore.</li><li><strong>Cari Game Super Sus</strong>:&nbsp;<br>Di halaman utama, cari dan pilih opsi untuk <strong>top up Super Sus</strong>.</li><li><strong>Pilih Nominal Goldstar</strong>:&nbsp;<br>Setelah memilih game Super Sus, pilih jumlah Goldstar yang ingin Anda beli dari opsi yang tersedia.</li><li><strong>Masukkan ID Akun</strong>:&nbsp;<br>Anda akan diminta untuk memasukkan ID akun Super Sus Anda. Pastikan ID yang dimasukkan sudah benar untuk menghindari kesalahan pengiriman.</li><li><strong>Pilih Metode Pembayaran</strong>:&nbsp;<br>Pilih metode pembayaran yang Anda inginkan. Topupgim biasanya menawarkan berbagai opsi pembayaran, termasuk transfer bank, e-wallet, dan lainnya.</li><li><strong>Lakukan Pembayaran</strong>:&nbsp;<br>Ikuti instruksi yang diberikan untuk menyelesaikan pembayaran. Pastikan Anda menyelesaikan pembayaran sesuai dengan metode yang dipilih.</li><li><strong>Konfirmasi dan Tunggu</strong>:&nbsp;<br>Setelah pembayaran berhasil, konfirmasi top up akan diproses. Goldstar akan dikirimkan langsung ke akun Super Sus Anda dalam beberapa menit.</li><li><strong>Cek Akun Anda</strong>:&nbsp;<br>Setelah top up berhasil, periksa akun Super Sus Anda untuk memastikan Goldstar telah masuk.</li></ol><p>Dengan mengikuti langkah-langkah ini, Anda bisa dengan mudah <a href="1528483107.html"><strong>top up Super Sus</strong></a> di TopUpGim.</p><h3>Keuntungan Top Up Super Sus di Topupgim</h3><p>Top up Super Sus di Topupgim menawarkan berbagai keuntungan, antara lain:</p><ol><li><strong>Harga Terjangkau</strong>: Topupgim dikenal menawarkan harga yang lebih murah dibandingkan platform lain, sehingga pemain bisa mendapatkan lebih banyak Goldstar dengan biaya lebih rendah.</li><li><strong>Proses Cepat dan Mudah</strong>: Proses top up di Topupgim dirancang agar mudah dan cepat, memungkinkan pemain untuk segera mendapatkan Goldstar tanpa perlu menunggu lama.</li><li><strong>Metode Pembayaran Beragam</strong>: Topupgim menyediakan berbagai pilihan metode pembayaran, termasuk e-wallet, transfer bank, dan lainnya, sehingga memudahkan pemain memilih metode yang paling nyaman bagi mereka.</li><li><strong>Transaksi Aman</strong>: Topupgim menjamin keamanan dalam setiap transaksi, memberikan rasa aman kepada pengguna saat melakukan pembelian.</li><li><strong>Layanan Pelanggan Responsif</strong>: Jika ada masalah atau pertanyaan, Topupgim menyediakan layanan pelanggan yang siap membantu, memastikan setiap transaksi berjalan lancar.</li><li><strong>Bonus dan Promosi</strong>: Topupgim sering menawarkan promosi atau bonus tambahan, memberi nilai lebih bagi pemain yang sering melakukan top up.</li></ol><p>Dengan semua keuntungan ini, Topupgim menjadi pilihan yang populer di kalangan pemain Super Sus.</p><h3>Metode Pembayaran</h3><p>Berikut adalah opsi metode pembayaran untuk top up diamonds Super Sus di TopUpGim:</p><ol><li><strong>E-Wallet (Dompet Digital)</strong>:<br>Anda bisa menggunakan e-wallet populer seperti OVO, GoPay, DANA, dan ShopeePay. Ini memudahkan pembayaran langsung dari ponsel Anda dengan cepat dan praktis.</li><li><strong>Transfer Bank</strong>:<br>Tersedia pilihan transfer bank dari berbagai bank besar di Indonesia, seperti BCA, Mandiri, BNI, dan BRI. Prosesnya mudah dan dapat dilakukan melalui mobile banking, ATM, atau internet banking.</li><li><strong>Virtual Account</strong>:<br>Anda dapat membayar melalui virtual account yang disediakan oleh bank. Ini memungkinkan pembayaran instan tanpa perlu konfirmasi tambahan.</li><li><strong>Minimarket</strong>:<br>Untuk pembayaran tunai, Anda bisa menggunakan layanan di minimarket seperti Indomaret dan Alfamart. Ini cocok bagi Anda yang lebih nyaman membayar langsung di gerai.</li><li><strong>QRIS</strong>:<br>QRIS mempermudah pembayaran melalui kode QR, mendukung berbagai aplikasi pembayaran dalam satu standar.</li><li><strong>Unipin Super Sus &amp; Codashop Super Sus</strong></li></ol><p>Dengan beragam metode ini, Anda dapat memilih yang paling sesuai dengan preferensi dan kenyamanan Anda saat melakukan top-up <i>Super Sus</i> di TopUpGim.</p><h4>Rekomendasi Top Up Game Lainnya</h4><p>Di Topupgim.com, selain Super Sus, Anda juga bisa melakukan top up untuk berbagai game populer lainnya. Beberapa game yang tersedia untuk top up di Topupgim.com antara lain:&nbsp;</p><ol><li><a href="../mobile-legends/1528378309.html"><strong>Top Up Mobile Legends&nbsp;</strong></a></li><li><a href="../pubgm/1528036161.html"><strong>Top Up PUBG Mobile&nbsp;</strong></a></li><li><a href="../call-of-duty-mobile/1528919312.html"><strong>Top Up Call of Duty Mobile (CODM)&nbsp;</strong></a></li><li><a href="../honor-of-kings/1528385129.html"><strong>Top Up Honor of Kings&nbsp;</strong></a></li><li><a href="../zepeto/1528847900.html"><strong>Top Up Zepeto</strong></a></li><li><a href="../hago/1528242362.html"><strong>Top Up Hago&nbsp;</strong></a></li><li><a href="../dana/1528543830.html"><strong>Top Up Dana</strong></a></li><li><a href="../blood-strike/1528112021.html"><strong>Top Up Blood Strike&nbsp;</strong></a></li><li><a href="../honkai-star-rail/1528308068.html"><strong>Top Up Honkai: Star Rail</strong></a></li></ol></div></div></div></div></div></div></div>
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
                            <input type="hidden" name="_csrf" value="SRnfqxMs-n4sv6IJw8zLcc4G5RxrLC8nMHB0">
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
                                                <label class="col-sm-4 col-form-label" for="property-user_id">ID Space <span class="text-info">*</span></label>
                                                <div class="col-sm-8">
                                                    <input data-property-type="identity" id="property-user_id" name="property-user_id" type="text" minlength="" class="form-control form-control-lg form-control-alt" placeholder="Masukkan ID Space.." value="" required>
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
                                                <div id="pDRoot_CD871U3S" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_CD871U3S" name="productDenomination" value="CD871U3S" data-price-preview="11800" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_CD871U3S">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/822502a7-16f8-493d-9fa6-917ac59c0a2f.png?w=75" alt="100 Goldstar">
                                                                <span id="productDenominationTitle_CD871U3S" class="fs-sm fw-semibold">100 Goldstar</span>
                                                                <p class="fs-sm mt-1">Rp11.800</p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_UT557TV7" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_UT557TV7" name="productDenomination" value="UT557TV7" data-price-preview="34800" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_UT557TV7">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/5eda63c7-d8ba-42c7-af01-1d8e18e2f670.png?w=75" alt="310 Goldstar">
                                                                <span id="productDenominationTitle_UT557TV7" class="fs-sm fw-semibold">310 Goldstar</span>
                                                                <p class="fs-sm mt-1">Rp34.800</p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_KA746SJ9" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_KA746SJ9" name="productDenomination" value="KA746SJ9" data-price-preview="56600" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_KA746SJ9">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/24f3853f-51cc-442e-a018-67157ab4a452.png?w=75" alt="520 Goldstar">
                                                                <span id="productDenominationTitle_KA746SJ9" class="fs-sm fw-semibold">520 Goldstar</span>
                                                                <p class="fs-sm mt-1">Rp56.600</p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_OG8209HW" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_OG8209HW" name="productDenomination" value="OG8209HW" data-price-preview="115300" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_OG8209HW">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/637b88c6-58b0-4103-9282-cf542183e8b4.png?w=75" alt="1060 Golder Star">
                                                                <span id="productDenominationTitle_OG8209HW" class="fs-sm fw-semibold">1060 Golder Star</span>
                                                                <p class="fs-sm mt-1">Rp115.300</p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_EE8077GH" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_EE8077GH" name="productDenomination" value="EE8077GH" data-price-preview="241000" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_EE8077GH">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/a20dbbc8-30cd-4fd1-bad8-cda2d27c8701.png?w=75" alt="2180 Goldstar">
                                                                <span id="productDenominationTitle_EE8077GH" class="fs-sm fw-semibold">2180 Goldstar</span>
                                                                <p class="fs-sm mt-1">Rp241.000</p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_UY4371TV" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_UY4371TV" name="productDenomination" value="UY4371TV" data-price-preview="579000" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_UY4371TV">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/399d2c0c-3f9f-473e-856c-5a727f946fe6.png?w=75" alt="5600 Goldstar">
                                                                <span id="productDenominationTitle_UY4371TV" class="fs-sm fw-semibold">5600 Goldstar</span>
                                                                <p class="fs-sm mt-1">Rp579.000</p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_ZU862EY9" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_ZU862EY9" name="productDenomination" value="ZU862EY9" data-price-preview="150200" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_ZU862EY9">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/088b3757-4e7b-42aa-bbae-b4d3ce27cb32.png?w=75" alt="Monthly Card">
                                                                <span id="productDenominationTitle_ZU862EY9" class="fs-sm fw-semibold">Monthly Card</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp150.200</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp155.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp4.800</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_CU534O3H" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_CU534O3H" name="productDenomination" value="CU534O3H" data-price-preview="80700" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_CU534O3H">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/04b897a2-c7d3-465d-9d9d-2cc67f2cdf8a.png?w=75" alt="Super Pass">
                                                                <span id="productDenominationTitle_CU534O3H" class="fs-sm fw-semibold">Super Pass</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp80.700</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp85.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp4.300</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_BI976NGX" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_BI976NGX" name="productDenomination" value="BI976NGX" data-price-preview="143500" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_BI976NGX">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/4a1ae54d-4e96-4503-9672-7f3e9c6b3cc5.png?w=75" alt="Super Pass Bundle">
                                                                <span id="productDenominationTitle_BI976NGX" class="fs-sm fw-semibold">Super Pass Bundle</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp143.500</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp145.000</del>
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
                                                <div id="pDRoot_GN737E89" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_GN737E89" name="productDenomination" value="GN737E89" data-price-preview="176400" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_GN737E89">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/1fabb505-999d-4b76-bd45-b1d0c0a09bbc.png?w=75" alt="Super VIP Card">
                                                                <span id="productDenominationTitle_GN737E89" class="fs-sm fw-semibold">Super VIP Card</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp176.400</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp180.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp3.600</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_PW677Q8J" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_PW677Q8J" name="productDenomination" value="PW677Q8J" data-price-preview="15100" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_PW677Q8J">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/d3a051f1-1231-44d1-b5a1-c472561c3fdf.png?w=75" alt="Weekly Card">
                                                                <span id="productDenominationTitle_PW677Q8J" class="fs-sm fw-semibold">Weekly Card</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp15.100</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp0</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp0</span>
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
                                            <a class="fw-semibold m-3" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ftopupgim.com%2Fproduct%2Fsuper-sus%2F1528483107%3Faff%3DInternal_Share" target="_blank">
                                                <i class="fab fa-2x fa-facebook opacity-75"></i>
                                            </a>
                                            <a class="fw-semibold m-3" href="https://twitter.com/share?url=https%3A%2F%2Ftopupgim.com%2Fproduct%2Fsuper-sus%2F1528483107%3Faff%3DInternal_Share" target="_blank">
                                                <i class="fab fa-2x fa-twitter opacity-75"></i>
                                            </a>
                                            <a class="fw-semibold m-3" href="https://api.whatsapp.com/send?text=https%3A%2F%2Ftopupgim.com%2Fproduct%2Fsuper-sus%2F1528483107%3Faff%3DInternal_Share" target="_blank">
                                                <i class="fab fa-2x fa-whatsapp opacity-75"></i>
                                            </a>
                                            <a class="fw-semibold m-3" href="https://pinterest.com/pin/create/button/?url=https%3A%2F%2Ftopupgim.com%2Fproduct%2Fsuper-sus%2F1528483107%3Faff%3DInternal_Share" target="_blank">
                                                <i class="fab fa-2x fa-pinterest opacity-75"></i>
                                            </a>
                                            <a class="fw-semibold m-3" href="https://t.me/share/url?url=https%3A%2F%2Ftopupgim.com%2Fproduct%2Fsuper-sus%2F1528483107%3Faff%3DInternal_Share" target="_blank">
                                                <i class="fab fa-2x fa-telegram opacity-75"></i>
                                            </a>
                                            <a class="fw-semibold m-3" href="https://linkedin.com/sharing/share-offsite/?url=https%3A%2F%2Ftopupgim.com%2Fproduct%2Fsuper-sus%2F1528483107%3Faff%3DInternal_Share" target="_blank">
                                                <i class="fab fa-2x fa-linkedin opacity-75"></i>
                                            </a>
                                        </div>
                                        <p class="fs-sm fw-light text-center mb-4 mt-1 text-dark" style="word-break:break-all; word-wrap: break-word;">https://topupgim.com/product/super-sus/1528483107?aff=Internal_Share</p>
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
                                        <img class="img-fluid w-100 h-auto rounded mb-4" src="../../https://cdn.topupgim.com/product-helpers/6ccde108-c43a-46e0-a73d-435bbd2fc8c7.jpg">
                                        <div class="static-page"><p>Untuk menemukan ID Space Anda, login ke dalam akun permainan, klik tombol Avatar dan Anda dapat menemukan ID Space dibawah foto profile Anda.</p></div>
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
                                                    <img class="img-fluid product-tile" style="background-image: url('../../https://cdn.topupgim.com/product-tiles/2aebce3f-239d-4355-92db-77f9738bd6dbebf4.jpg?w=200');">
                                                </div>
                                                <div class="d-flex justify-content-end flex-column align-items-end">
                                                    <span class="h6 fs-normal fw-semibold mb-2">Super Sus</span>
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
                                                <p class="fs-sm mb-0">ID Space</p>
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
                    <button type="button" class="btn btn-sm btn-alt-secondary" onclick="location.href='../../featured/news-and-promotions7294.html?code=1528483107';">
                        <i class="fa fa-fw fa-arrow-right text-muted"></i>
                    </button>
                </div>
                <div class="row items-push mb-4">
                    <div class="col-sm-6 col-lg-4">
                        <a class="block block-rounded block-link-pop overflow-hidden h-100 mb-0" href="../../news/super-sus-2025-10-fitur-baru-yang-akan-membuat-permainanmu-lebih-seru.html">
                            <div class="ratio mb-1" style="--bs-aspect-ratio: 55%;">
                                <div>
                                    <img class="lazy img-fluid img-round-top img-slider w-100" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/pages/5517bd32-73d8-40b0-a8c8-20ea24282faf.jpg?w=500" alt="Gambar Artikel">
                                </div>
                            </div>
                            <div class="block-content block-content-full h-100">
                                <p class="fw-bold mb-1 text-truncate">
                                    Super Sus 2025: 10 Fitur Baru yang Akan Membuat Permainanmu Lebih Seru!
                                </p>
                                <p class="fs-sm fw-medium text-muted text-line-2 mb-0">
                                    Jelajahi pembaruan Super Sus 2025 dengan karakter baru, sistem matchmaking cerdas, dan AI bot menantang! Update terbaru yang wajib dicoba!
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <a class="block block-rounded block-link-pop overflow-hidden h-100 mb-0" href="../../news/rekomendasi-role-terbaik-di-super-sus-2025-temukan-gaya-bermain-yang-cocok-untukmu-.html">
                            <div class="ratio mb-1" style="--bs-aspect-ratio: 55%;">
                                <div>
                                    <img class="lazy img-fluid img-round-top img-slider w-100" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/pages/44cedbbf-3da0-49aa-b743-5897808fd4d6.png?w=500" alt="Gambar Artikel">
                                </div>
                            </div>
                            <div class="block-content block-content-full h-100">
                                <p class="fw-bold mb-1 text-truncate">
                                    Rekomendasi Role Terbaik di Super Sus 2025: Temukan Gaya Bermain yang Cocok untukmu!
                                </p>
                                <p class="fs-sm fw-medium text-muted text-line-2 mb-0">
                                    Temukan role terbaik di Super Sus yang sesuai dengan gaya bermainmu! Baik kamu lebih suka bermain sebagai crewmate, impostor, atau netral, artikel ini memberikan rekomendasi lengkap untuk memaksimalkan pengalamanmu
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
