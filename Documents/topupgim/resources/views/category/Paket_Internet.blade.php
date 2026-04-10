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
                    <div id="category_77386a784e2b7958555863614d752f5a5957765445413d3d" class="d-flex flex-column mb-4" style="scroll-margin-top: 100px;">
                        <div class="d-flex align-items-top">
                            <img class="lazy me-2 me-lg-3" style="width: 27px; height: 1.6rem; object-fit: cover;" src="../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/category-icons/b94ae7a9-8ed6-47b1-93db-03ef2fc0ab5c.png" alt="Paket Internet">
                            <h3 class="mb-0">Paket Internet</h3>
                        </div>
                        <p class="fs-sm mb-0" style="color: #606060;"></p>
                        <div id="productList" class="row row-cols-3 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-5 g-4 pt-4 mb-4">
                            <a data-id="1528104255" href=\"{{ route('product.show', ['telkomsel-internet', '1528104255']) }}\" title="Topup Telkomsel (Internet)">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/03ddd89b-f211-4d92-9186-487cac8b7102.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Telkomsel (Internet)</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Telkomsel (Internet)</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528821171" href=\"{{ route('product.show', ['indosat-im3-internet', '1528821171']) }}\" title="Topup Indosat IM3 (Internet)">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/1b3361f3-78d9-4cd5-bb25-8f9c7f40b33c.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Indosat IM3 (Internet)</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Indosat IM3 (Internet)</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528318921" href=\"{{ route('product.show', ['axis-internet-', '1528318921']) }}\" title="Topup Axis (Internet)">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/ba2c18c6-692a-42d7-a84b-bc370eb30aae.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Axis (Internet)</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Axis (Internet)</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528015602" href=\"{{ route('product.show', ['tri-internet', '1528015602']) }}\" title="Topup Tri (Internet)">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/b57eebb5-1a92-498a-92e0-66a7e08e62ee.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Tri (Internet)</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Tri (Internet)</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528705011" href=\"{{ route('product.show', ['xl-internet', '1528705011']) }}\" title="Topup XL (Internet)">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/fbb927ef-436d-4f72-a2b4-11359bcae02a.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">XL (Internet)</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">XL (Internet)</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528113236" href=\"{{ route('product.show', ['smartfren-internet-', '1528113236']) }}\" title="Topup Smartfren (Internet)">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/f6912317-e817-4745-9833-62cd0c490b9f.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Smartfren (Internet)</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Smartfren (Internet)</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528928943" href=\"{{ route('product.show', ['by-u-internet', '1528928943']) }}\" title="Topup by.U (Internet)">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/d00b7d29-e50e-48c8-b83d-2cd3c5e7ddf0.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">by.U (Internet)</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">by.U (Internet)</span>
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
