@extends('layouts.app')

@section('title', 'Kebijakan Pengembalian Dana - Topupgim - TopUpGim')

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
                        <h2 class="text-center mb-5">Kebijakan Pengembalian Dana</h2>
                        <div class="static-page pb-5">
                            <p>Refund Policy Topupgim ini merupakan bagian dan satu kesatuan dengan Syarat &amp; Ketentuan Akses Dan Penggunaan Website, Konten Dan Layanan.</p><p>Topupgim memberikan garansi pengembalian penuh Biaya untuk Layanan tertentu, dengan syarat:</p><ol><li>Layanan tersebut termasuk dalam daftar Refund Policy. Layanan yang termasuk dalam daftar Refund Policy dapat diketahui dengan menghubungi kontak admin.</li><li>Layanan yang termasuk dalam daftar Refund Policy dapat berlaku ketika pembayaran selesai namun produk belum terkirim ke pelanggan dan diperbolehkan untuk memilih pengiriman ulang atau pengembalian Biaya.</li><li>Permintaan pengembalian Biaya harus sudah Kami terima selambatnya 3 hari sejak tanggal pemesanan Layanan.</li><li>Permintaan pengembalian Biaya dikirimkan ke kontak admin dengan melampirkan id pemesanan dan penjelasan singkat alasan permintaan pengembalian Biaya.</li><li>Bila Kami perlukan maka Anda wajib memberikan bukti transfer atas pembayaran Biaya terkait.</li><li>Pengembalian Biaya akan dilakukan selambatnya 3x24 jam (tidak termasuk weekend Sabtu&amp;Minggu atau Tanggal Merah) sejak permintaan yang sah berhasil Kami validasi.</li><li>Untuk Pembelian menggunakan transfer bank pastikan transfer sama dengan nominal yang di instruksikan, perbedaan nominal bisa menyebabkan pembelian kamu gagal diproses (non-refund) atau denda Rp 5.000 untuk pengecekan pembayaran kamu secara manual.</li><li>Jika sudah terdaftar sebagai agen tidak dapat dibatalkan, biaya administrasi pendaftaran tidak dapat dikembalikan.</li></ol><p>Topupgim memberikan garansi pengembalian 2x Biaya untuk Layanan tertentu jika pengiriman lama/telat, dengan syarat:</p><ol><li>Topupgim tidak sedang dalam status maintenance.</li><li>Game/Produk tidak sedang dalam melakukan Event.</li><li>Keterlambatan pengiriman bukan dilakukan oleh pihak developer game tersebut, melainkan Topupgim.</li><li>Lama/telat dalam durasi minimal 12 jam setelah pembelian dilakukan.</li></ol><p><br>Guna menghindari penyalahgunaan kebijakan ini maka pengembalian Biaya hanya dapat Kami lakukan ke nomor rekening bank yang Anda gunakan untuk membayar tagihan Biaya kepada Kami. Bila Anda membayar menggunakan eWallet maka pengembalian biaya akan Kami lakukan ke nomor tujuan eWallet tersebut. Kami tidak melayani pengembalian ke nomor rekening lainnya dengan alasan apapun.</p><p>Topupgim tidak akan memproses dan tidak berkewajiban menanggapi permintaan pengembalian Biaya yang tidak memenuhi ketentuan Refund Policy ini.</p><p>Pada saat permintaan pengembalian Biaya yang sah berhasil Kami validasi maka Anda tidak lagi berhak menggunakan atau memanfaatkan dalam cara apapun, termasuk namun tidak terbatas kepada penggunaan atau pemanfaatan langsung, penggunaan atau pemanfaatan duplikasinya atau atau pemanfaatan dalam bentuk/cara lainnya, produk dari Layanan terkait yang telah Kami sampaikan kepada Anda. Dan hak kekayaan intelektual dari produk tersebut dianggap tidak pernah beralih kepada Anda serta selalu berada di tangan Topupgim.</p>
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
