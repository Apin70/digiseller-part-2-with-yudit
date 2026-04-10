@extends('layouts.app')

@section('title', 'Tutorial Pembayaran QRIS Menggunakan BCA - Topupgim - TopUpGim')

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
                        <h2 class="text-center mb-5">Tutorial Pembayaran QRIS Menggunakan BCA</h2>
                        <div class="static-page pb-5">
                            <h5>Tutorial Pembayaran QRIS</h5><p>Setelah tutorial sebelumnya tentang <a href="cara-bayar-di-topupgim.html"><i>tutorial pembelian di topupgim</i></a> &nbsp;Anda akan mendapatkan QRIS untuk melakukan pembayaran. &nbsp;Berikut tahap pembayaran menggunakan aplikasi GoPay</p><ol><li>Silahkan <i>screenshoot</i> QRIS dari pembelian sebelumnya<br><br><img src="../../i0.wp.com/topupgim.com/assets/media/images/pages/31eae953-4fe0-4d60-8bfe-9d38fe23b2da.html"></li><li>buka aplikasi BCA mobile</li><li>Pilih menu QR<br><img src="../../i0.wp.com/topupgim.com/assets/media/images/pages/6139239e-6e44-4386-96ba-f6d5ddd9afb5.html"></li><li>lalu masukkan gambar qr yg tadi di download</li><li>Konfirmasi apakah no rekening tujuan dan nominal sudah benar, jika ya piih <strong>OK</strong>.</li><li>Masukan PIN M-BCA lalu <strong>OK</strong>, selesai.</li></ol><p>untuk tutorial video bisa dilihat di link <a href="https://www.youtube.com/watch?v=QbFMuLU8tdU">berikut</a><br>&nbsp;</p><figure class="media"><div data-oembed-url="https://youtu.be/QbFMuLU8tdU"><div style="position: relative; padding-bottom: 100%; height: 0; padding-bottom: 56.2493%;"><iframe src="https://www.youtube.com/embed/QbFMuLU8tdU" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0;" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe></div></div></figure><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
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
