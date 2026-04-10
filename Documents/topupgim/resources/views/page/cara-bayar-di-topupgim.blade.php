@extends('layouts.app')

@section('title', 'Cara Bayar di Topupgim - Topupgim - TopUpGim')

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
                        <h2 class="text-center mb-5">Cara Bayar di Topupgim</h2>
                        <div class="static-page pb-5">
                            <h3>Tutorial Pembelian</h3><ol><li>Pilih produk yang anda inginkan pada <a href="{{ route('home') }}">Topupgim</a><br>&nbsp;</li><li>Masukkan informasi akun produk yg ingin anda beli, jika tidak mengetahui informasi tersebut baca panduan <i><strong>Cara menemukan informasi Akun </strong></i>seperti gambar dibawah<br><br><img src="../../i0.wp.com/topupgim.com/assets/media/images/pages/63d2c929-850d-4813-8dda-5626578488a9.html"><br>&nbsp;<br>&nbsp;</li><li>Pilih jumlah nominal yang ingin anda beli, setiap produk memiliki jumlah yang berbeda<br><br><img src="../../i0.wp.com/topupgim.com/assets/media/images/pages/d5c68973-f88e-444d-a3b4-73f6f687a76c.html"><br><br>&nbsp;</li><li>Gunakan metode pembayaran QRIS<br><br><img src="../../i0.wp.com/topupgim.com/assets/media/images/pages/9d45fec9-f1b0-443b-8032-b4681afac2c9.html"><br>&nbsp;<br>&nbsp;</li><li>Masukkan nomor WhatsApp Anda dan konfirmasi pembayaran<br><br><img src="../../i0.wp.com/topupgim.com/assets/media/images/pages/41176375-e1ab-4af3-ae97-d8ff8fff98f6.html"><br>&nbsp;<br>&nbsp;</li><li>Anda akan mendapatkan QRIS untuk di <i>scan saat </i>melakukan pembayaran.<br>&nbsp;</li></ol><p>Lanjutkan artikel pada :</p><ul><li><a href="tutorial-pembayaran-qris-menggunakan-gopay.html">Tutorial Pembayaran QRIS Menggunakan GoPay</a></li><li><a href="tutorial-pembayaran-qris-menggunakan-ovo">Tutorial Pembayaran QRIS Menggunakan OVO</a></li><li><a href="tutorial-pembayaran-qris-menggunakan-shopeepay.html">Tutorial Pembayaran QRIS Menggunakan ShopeePay</a></li><li><a href="tutorial-pembayaran-qris-menggunakan-bca.html">Tutorial Pembayaran QRIS Menggunakan BCA Mobile</a></li><li><a href="tutorial-pembayaran-qris-menggunakan-bni.html">Tutorial Pembayaran QRIS Menggunakan BNI Mobile</a></li><li>Pembayaran QRIS melalui LinkAja dan Dana bisa ikuti tutorial GoPay, OVO, ataupun ShopeePay (sama saja)</li></ul>
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
