@extends('layouts.app')

@section('title', 'TopUpGim - Top Up Game Harga Murah - TopUpGim')

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
            <div class="content">
                <div class="my-4 mx-2 mx-lg-4">
                    <!-- Products -->
                    <div id="category_465876485877756263774e7a2b35565169526c4f39513d3d" class="d-flex flex-column mb-4" style="scroll-margin-top: 100px;">
                        <div class="d-flex align-items-top">
                            <img class="lazy me-2 me-lg-3" style="width: 27px; height: 1.6rem; object-fit: cover;" src="../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/category-icons/4ae59eca-f4f2-4e44-b5f1-8c73bebba0c4.png" alt="Aplikasi">
                            <h3 class="mb-0">Aplikasi</h3>
                        </div>
                        <p class="fs-sm mb-0" style="color: #606060;">Top Up Aplikasi Mobile &amp; PC Lebih Hemat</p>
                        <div id="productList" class="row row-cols-3 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-5 g-4 pt-4 mb-4">
                            <a data-id="1528569704" href=\"{{ route('product.show', ['steam-wallet-voucher', '1528569704']) }}\" title="Topup Steam Wallet Voucher">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/b5a508e7-61e0-4a2e-899e-0ddd21d338a4.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Steam Wallet Voucher</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Steam Wallet Voucher</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528123409" href=\"{{ route('product.show', ['mangatoon', '1528123409']) }}\" title="Topup Mangatoon">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/6b349e92-bd3f-4ae7-9ee9-9a7081c22224.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Mangatoon</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Mangatoon</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528322790" href=\"{{ route('product.show', ['vidio-voucher', '1528322790']) }}\" title="Topup Vidio Voucher">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3 img-gray" data-bg="https://cdn.topupgim.com/product-tiles/c12d56bb-46ef-4d62-bb2e-816c03e46b22.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            <span class="position-absolute fs-xs fw-semibold text-white bg-warning text-center top-50 start-50 translate-middle py-1 py-lg-2 w-100">Perbaikan</span>
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Vidio Voucher</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Vidio Voucher</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528384729" href=\"{{ route('product.show', ['lita', '1528384729']) }}\" title="Topup Lita">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/9a6776ba-a0a1-4122-a455-8aed94b20669.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Lita</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Lita</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528138896" href=\"{{ route('product.show', ['voucher-bstation', '1528138896']) }}\" title="Topup Bstation Voucher">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/e6665567-18b1-4698-8a57-b16935cd3f02.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Bstation Voucher</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Bstation Voucher</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528999288" href=\"{{ route('product.show', ['likee', '1528999288']) }}\" title="Topup Likee">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/1fb0aecd-f518-45bc-b577-8148ccfc1523.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Likee</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Likee</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528540373" href=\"{{ route('product.show', ['wesing', '1528540373']) }}\" title="Topup WeSing">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/d255cc4d-e992-4931-b995-a7bc194a4273.jpg?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">WeSing</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">WeSing</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528472026" href=\"{{ route('product.show', ['koin-tiktok-gift-card', '1528472026']) }}\" title="Topup Koin TikTok Gift Card">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/d1e8fd65-ffc0-4d1f-9c80-34bcdf29214e.jpg?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Koin TikTok Gift Card</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Koin TikTok Gift Card</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END Products -->
                </div>
            </div>
            <!-- END Page Content -->

        </main>
        <!-- END Main Container -->

@endsection
