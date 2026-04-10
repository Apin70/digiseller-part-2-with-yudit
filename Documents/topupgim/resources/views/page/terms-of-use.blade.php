@extends('layouts.app')

@section('title', 'Persyaratan Layanan - Topupgim - TopUpGim')

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
        <main id="main-container" class="bg-body-light">
            <!-- Page Content -->
            <div class="content">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-9 col-xl-8">
                        <h2 class="text-center mb-5">Persyaratan Layanan</h2>
                        <div class="static-page pb-5">
                            <h5><strong>1. Umum</strong></h5><ul><li>Dengan mendaftar dan menggunakan layanan <strong>Topupgim</strong>, Anda secara otomatis menyetujui semua ketentuan layanan kami.</li><li>Syarat dan Ketentuan Umum dapat Kami ubah, modifikasi, tambah, hapus atau koreksi (“perubahan”) setiap saat sesuai dengan pengembangan <strong>Topupgim</strong> dan peraturan perundang-undangan. Anda Kami anjurkan untuk mengunjungi Website Kami secara berkala agar dapat mengetahui adanya perubahan tersebut.</li></ul><h5><br><strong>2. Layanan</strong></h5><ul><li><strong>Topupgim</strong> menyediakan sistem dan platform fasilitas pemesanan online secara terpadu ("Layanan"), yang dapat melayani pemesanan In Game Credits.</li><li><strong>Topupgim</strong> tidak bertanggung jawab jika Anda mengalami kerugian dalam bisnis Anda sebagai reseller seperti kesalahan penginputan pesanan, penipuan atau kesalahan penjumlahan atau data lainnya.</li><li><strong>Topupgim</strong> tidak menerima permintaan pembatalan / pengembalian dana setelah pesanan masuk ke sistem kami. Kami memberikan pengembalian dana jika pesanan tidak dapat diselesaikan sesuai dengan ketentuan yang berlaku.</li></ul><h5><br><strong>3. Akun</strong></h5><p><strong>Topupgim</strong> berhak menghentikan atau menghapus akun Anda tanpa pemberian refund dari pihak kami apabila melakukan hal dibawah ini:</p><ul><li>Memperjual Belikan akun <strong>Topupgim</strong></li><li>Melakukan penipuan atau kecurangan dalam bertransaksi di <strong>Topupgim</strong></li></ul><h5><br><strong>4. Transaksi</strong></h5><p>Apabila terdapat pengguna melakukan transaksi secara tidak resmi / kecurangan :</p><ul><li><strong>Topupgim</strong> berhak membawa kejalur hukum.</li><li>Pengguna wajib mempertanggungjawabkan kesalahannya.</li><li>Untuk metode pembayaran Transfer Bank, jika pembeli melakukan kesalahan nominal transfer yang tidak sesuai invoice, Topupgim berhak <strong>membatalkan </strong>pesanan tanpa mengirim refund jika pembeli tidak membayar denda atau tidak bersifat kooperatif.</li><li>Pengguna dilarang menggunakan Nomor Whatsapp orang lain ketika bertransaksi secara “Guest” di Topupgim.com.&nbsp;</li><li>Transaksi yang sudah melebihi 90 hari tidak akan ditampilkan pada riwayat pesanan user untuk menjaga performa dan layanan aplikasi / website topupgim.</li></ul><h5><br><strong>4. Disclaimer / Dispute</strong></h5><p>Apabila terdapat dispute dari pihak ketiga pemberi jasa:</p><ul><li><strong>Topupgim</strong> akan membantu untuk membuat laporan dan follow up ke pihak ketiga.</li><li><strong>Topupgim</strong> tidak bertanggung jawab jika kesalahan yang terjadi dilakukan pihak ketiga.</li></ul>
                        </div>

                        <!-- Pages -->
                        <!-- END Pages -->
                    </div>
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->

@endsection
