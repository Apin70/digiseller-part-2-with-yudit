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
                    <div id="category_4534352b564e445256654d677a7a72467743656963413d3d" class="d-flex flex-column mb-4" style="scroll-margin-top: 100px;">
                        <div class="d-flex align-items-top">
                            <img class="lazy me-2 me-lg-3" style="width: 27px; height: 1.6rem; object-fit: cover;" src="../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/category-icons/30328403-1815-403e-879a-712333048a48.png" alt="E-Wallet">
                            <h3 class="mb-0">E-Wallet</h3>
                        </div>
                        <p class="fs-sm mb-0" style="color: #606060;">Isi saldo GoPay pakai Dana?</p>
                        <div id="productList" class="row row-cols-3 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-5 g-4 pt-4 mb-4">
                            <a data-id="1528296085" href=\"{{ route('product.show', ['shopeepay', '1528296085']) }}\" title="Topup ShopeePay">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/2be9f425-1303-4094-8d93-73aa02698c37.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">ShopeePay</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">ShopeePay</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528543830" href=\"{{ route('product.show', ['dana', '1528543830']) }}\" title="Topup Dana">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/28550b75-ee02-4189-aa69-2d03b2ca513f.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Dana</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Dana</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528812696" href=\"{{ route('product.show', ['gopay', '1528812696']) }}\" title="Topup GoPay">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/2d721537-2506-4bc5-9d27-3bdc3f1f41e2.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">GoPay</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">GoPay</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528134850" href=\"{{ route('product.show', ['ovo', '1528134850']) }}\" title="Topup OVO">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/01cdd085-9486-4d5b-97b3-66993d346901.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">OVO</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">OVO</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528549889" href=\"{{ route('product.show', ['maxim-driver', '1528549889']) }}\" title="Topup Maxim Driver">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/5c340a52-b5ee-4444-932d-3f47123d642d.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Maxim Driver</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Maxim Driver</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528050491" href=\"{{ route('product.show', ['gopay-Driver-', '1528050491']) }}\" title="Topup Gopay Driver">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/21d3abae-2151-43e4-b2e4-4de9b9aeb66f.jpg?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Gopay Driver</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Gopay Driver</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528837508" href=\"{{ route('product.show', ['linkaja', '1528837508']) }}\" title="Topup Linkaja">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/460e6393-786e-433d-b73a-6a2d8cdab251.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Linkaja</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Linkaja</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528681626" href=\"{{ route('product.show', ['grab-driver-', '1528681626']) }}\" title="Topup Grab Driver Voucher">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/f3a0668c-e52f-4697-94a0-c77cca89a779.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Grab Driver Voucher</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Grab Driver Voucher</span>
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
