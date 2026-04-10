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
                    <div id="category_71347657774d735a384c506b343467317876316c734b7754555133594773756f676662353033385a464e673d" class="d-flex flex-column mb-4" style="scroll-margin-top: 100px;">
                        <div class="d-flex align-items-top">
                            <img class="lazy me-2 me-lg-3" style="width: 27px; height: 1.6rem; object-fit: cover;" src="../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/category-icons/b45b0859-4727-4e6c-b8d9-5efc9d06b2de.png" alt="Paket SMS &amp; Telepon">
                            <h3 class="mb-0">Paket SMS &amp; Telepon</h3>
                        </div>
                        <p class="fs-sm mb-0" style="color: #606060;"></p>
                        <div id="productList" class="row row-cols-3 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-5 g-4 pt-4 mb-4">
                            <a data-id="1528405943" href=\"{{ route('product.show', ['telkomsel-sms-telepon', '1528405943']) }}\" title="Topup Telkomsel (Paket SMS &amp; Telepon)">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/f20e0298-7721-4ca5-b1bb-fa92d8df7aef.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Telkomsel (Paket SMS &amp; Telepon)</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Telkomsel (Paket SMS &amp; Telepon)</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528545636" href=\"{{ route('product.show', ['indosat-paket-sms-telepon-', '1528545636']) }}\" title="Topup Indosat (Paket SMS &amp; Telepon)">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/3a3cd9da-823a-4b37-9226-d99cff3a0717.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Indosat (Paket SMS &amp; Telepon)</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Indosat (Paket SMS &amp; Telepon)</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528470754" href=\"{{ route('product.show', ['axis-paket-telepon-sms-', '1528470754']) }}\" title="Topup Axis (Paket Telepon &amp; SMS)">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/6c325bd4-7de7-4dbe-ac1a-7ccd579b3ce8.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Axis (Paket Telepon &amp; SMS)</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Axis (Paket Telepon &amp; SMS)</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528450160" href=\"{{ route('product.show', ['tri-paket-sms-telepon-', '1528450160']) }}\" title="Topup Tri (Paket SMS &amp; Telepon)">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/8e66778e-49de-4212-9b21-d198dbe38a0c.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Tri (Paket SMS &amp; Telepon)</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Tri (Paket SMS &amp; Telepon)</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528824046" href=\"{{ route('product.show', ['xl-paket-sms-telepon-', '1528824046']) }}\" title="Topup XL (Paket SMS &amp; Telepon)">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/0c8d7a26-8cb5-495f-83da-f6d1be677ff7.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">XL (Paket SMS &amp; Telepon)</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">XL (Paket SMS &amp; Telepon)</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528566925" href=\"{{ route('product.show', ['by-u-paket-sms-telepon-', '1528566925']) }}\" title="Topup by.U (Paket SMS &amp; Telepon)">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/e014aaa4-697e-4946-98da-97557692fdc2.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">by.U (Paket SMS &amp; Telepon)</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">by.U (Paket SMS &amp; Telepon)</span>
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
