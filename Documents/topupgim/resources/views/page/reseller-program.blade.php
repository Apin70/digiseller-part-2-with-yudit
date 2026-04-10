@extends('layouts.app')

@section('title', 'Upgrade Akun Agen Topupgim - Topupgim - TopUpGim')

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
                        <h2 class="text-center mb-5">Upgrade Akun Agen Topupgim</h2>
                        <div class="static-page pb-5">
                            <figure class="image"><img src="../https://cdn.topupgim.com/pages/a3ac3683-da3b-4e6f-ad1b-ce522d94652d.jpg"></figure><p><strong>Upgrade ke Akun Agen, Diskon hingga 20%</strong></p><p>Ingin Bayar lebih murah hingga 20%? Punya online shop? Pasar komunitas gamer? <strong>Upgrade akun kamu</strong> menjadi akun Agen (gratis) dan nikmati pembayaran lebih murah hingga 20% melalui <strong>Voucher Topupgim</strong>.</p><p><strong>Apa keuntungan Upgrade Akun Agen?</strong></p><ol><li>Bisa deposit saldo <strong>Voucher Topupgim</strong>.</li><li>Bayar lebih murah hingga 20% dengan voucher Topupgim (hanya tersedia di <strong>Akun Agen</strong>).</li></ol><p><strong>Apakah ada biaya Upgrade Akun?</strong></p><p>Khusus Desember 2023, pendaftaran Akun Reseller Topupgim Gratis! Klik tombol Registrasi Akun Agen Sekarang!</p><p><strong>Cara melihat perbedaan harga akun Agen?</strong></p><p>Kunjungi halaman daftar harga semua produk untuk melihat perbandingan harga Akun Agen dan Akun Biasa.<br>&nbsp;</p><p><a class="btn btn-primary" href="{{ route('featured.pricings') }}">Daftar Harga Agen</a></p><p><br><strong>Bagaimana Caranya?</strong></p><ol><li>Sudah mendaftarkan akun Topupgim. Apabila belum, silahkan mendaftar di <a href="{{ route('auth.register') }}"><strong>https://topupgim.com/auth/register</strong></a><strong>.</strong></li><li>Masuk ke halaman <a href="{{ route('auth.sign-in') }}"><strong>Pendaftaran Agen</strong></a> kemudian lengkapi data yang diminta.</li><li>Tunggu konfirmasi dari tim kami via WhatsApp chat.</li><li>Setelah disetujui, buat PIN transaksi dan kamu dapat langsung transaksi dengan akun Agen Topupgim kamu.<br>&nbsp;</li></ol><p><a class="btn btn-primary" href="{{ route('auth.sign-in') }}">Registrasi Akun Agen Sekarang</a></p><p>&nbsp;</p>
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
