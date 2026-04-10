@extends('layouts.app')

@section('title', 'Submit Aplikasi atau Game - Topupgim - TopUpGim')

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
                        <h2 class="text-center mb-5">Submit Aplikasi atau Game</h2>
                        <div class="static-page pb-5">
                            <p>Punya aplikasi atau game? Kami menyediakan layanan API beserta Dasbor untuk Pengembang yang ingin mempublikasikan aplikasi atau gamenya ke Topupgim.com.<br><br>Untuk informasi lebih lanjut mengenai persyaratan dan biaya, silahkan hubungi kami melalui nomor WhatsApp <a href="https://wa.me/6281276959523">6281276959523</a>.</p>
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
