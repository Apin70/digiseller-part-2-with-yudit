@extends('layouts.app')

@section('title', 'Tutorial Pembayaran QRIS Menggunakan BNi - Topupgim - TopUpGim')

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
                        <h2 class="text-center mb-5">Tutorial Pembayaran QRIS Menggunakan BNi</h2>
                        <div class="static-page pb-5">
                            <p>&nbsp;</p><figure class="table"><table><tbody><tr><td><img src="../../www.bni.co.id/Portals/1/BNI/Beranda/Pengumuman/Images/qris-step-01-rev01.html" alt="Bayar dengan QRIS dari BNI Mobile Banking Semakin Mudah"></td><td>&nbsp;&nbsp;&nbsp;</td><td>1. Login BNI Mobile Banking lalu klik tombol QR pada halaman utama.</td></tr><tr><td colspan="3">&nbsp;</td></tr><tr><td><img src="../../www.bni.co.id/Portals/1/BNI/Beranda/Pengumuman/Images/qris-step-02.html" alt="Bayar dengan QRIS dari BNI Mobile Banking Semakin Mudah"></td><td>&nbsp;&nbsp;&nbsp;</td><td>2. Pilih rekening debit dan masukan password transaksi. Selanjutnya, klik tombol tampilkan QRIS.</td></tr><tr><td colspan="3">&nbsp;</td></tr><tr><td><img src="../../www.bni.co.id/Portals/1/BNI/Beranda/Pengumuman/Images/qris-step-03.html" alt="Bayar dengan QRIS dari BNI Mobile Banking Semakin Mudah"></td><td>&nbsp;&nbsp;&nbsp;</td><td>3. Arahkan tampilan QRIS ke QR Reader di merchant.</td></tr><tr><td colspan="3">&nbsp;</td></tr><tr><td><img src="../../www.bni.co.id/Portals/1/BNI/Beranda/Pengumuman/Images/qris-step-04.html" alt="Bayar dengan QRIS dari BNI Mobile Banking Semakin Mudah"></td><td>&nbsp;&nbsp;&nbsp;</td><td>4. Jika transaksi berhasil, muncul di layar status "Transaksi Berhasil".</td></tr></tbody></table></figure><p>bisa juga melihat tutorial video dibawah<br>&nbsp;</p><figure class="media"><div data-oembed-url="https://www.youtube.com/watch?v=VjP4Ywk_0hA"><div style="position: relative; padding-bottom: 100%; height: 0; padding-bottom: 56.2493%;"><iframe src="https://www.youtube.com/embed/VjP4Ywk_0hA" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0;" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe></div></div></figure>
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
