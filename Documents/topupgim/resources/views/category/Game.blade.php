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
                    <div id="category_6a696654526d47614936755976747971366a523830513d3d" class="d-flex flex-column mb-4" style="scroll-margin-top: 100px;">
                        <div class="d-flex align-items-top">
                            <img class="lazy me-2 me-lg-3" style="width: 27px; height: 1.6rem; object-fit: cover;" src="../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/category-icons/f7121621-7f87-4a0d-acf6-4f7498a750ed.png" alt="Game">
                            <h3 class="mb-0">Game</h3>
                        </div>
                        <p class="fs-sm mb-0" style="color: #606060;">Top Up Game Harga Lebih Hemat</p>
                        <div id="productList" class="row row-cols-3 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-5 g-4 pt-4 mb-4">
                            <a data-id="1528919312" href=\"{{ route('product.show', ['call-of-duty-mobile', '1528919312']) }}\" title="Topup Call of Duty Mobile">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/234ebffe-a86e-49f2-a6d6-0227e68b8c94.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Call of Duty Mobile</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Call of Duty Mobile</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528555434" href=\"{{ route('product.show', ['free-fire', '1528555434']) }}\" title="Topup Free Fire">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/1d2a30ea-987b-452c-a658-8fae63176cc6.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Free Fire</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Free Fire</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528787297" href=\"{{ route('product.show', ['genshin-impact', '1528787297']) }}\" title="Topup Genshin Impact">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/764918a1-b6f5-48ea-99a6-c40f04770add.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Genshin Impact</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Genshin Impact</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528242362" href=\"{{ route('product.show', ['hago', '1528242362']) }}\" title="Topup HAGO">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/4c6e19a1-1aaa-4bb4-8f3d-c321a31a250e.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">HAGO</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">HAGO</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528743885" href=\"{{ route('product.show', ['honkai-impact-3', '1528743885']) }}\" title="Topup Honkai Impact 3">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/9f05942b-f1ce-4766-9623-4abdb2567026.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Honkai Impact 3</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Honkai Impact 3</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528175611" href=\"{{ route('product.show', ['league-of-legends-wild-rift', '1528175611']) }}\" title="Topup League of Legends: Wild Rift">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/9da70036-97ac-4c07-9780-c87e908b18dd.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">League of Legends: Wild Rift</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">League of Legends: Wild Rift</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528051138" href=\"{{ route('product.show', ['lifeafter', '1528051138']) }}\" title="Topup LifeAfter">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/db38a9e1-d5a7-4914-87e5-21dba5c5247f.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">LifeAfter</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">LifeAfter</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528378309" href=\"{{ route('product.show', ['mobile-legends', '1528378309']) }}\" title="Topup Mobile Legends">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/4a6c27d3-12f4-42d0-a153-65588068ff2a.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Mobile Legends</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Mobile Legends</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528582047" href=\"{{ route('product.show', ['mu-origin-2', '1528582047']) }}\" title="Topup MU Origin 2">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/4c3e1c46-4326-4c9d-9055-b7d4a73178d5.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">MU Origin 2</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">MU Origin 2</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528072602" href=\"{{ route('product.show', ['mu-origin-3', '1528072602']) }}\" title="Topup MU ORIGIN 3">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/ee148afa-eae0-4dac-a9e7-12ef3e05e9a1.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">MU ORIGIN 3</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">MU ORIGIN 3</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528036161" href=\"{{ route('product.show', ['pubgm', '1528036161']) }}\" title="Topup PUBGM Global">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/7c8630ec-8447-45f0-85b6-5ae6a860460d.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">PUBGM Global</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">PUBGM Global</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528615283" href=\"{{ route('product.show', ['point-blank', '1528615283']) }}\" title="Topup Point Blank">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/7dc8cd98-7cc4-4b73-ad96-e9bd2d585372.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Point Blank</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Point Blank</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528471870" href=\"{{ route('product.show', ['playstation-voucher', '1528471870']) }}\" title="Topup Playstation Voucher">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3 img-gray" data-bg="https://cdn.topupgim.com/product-tiles/70e30f90-eaba-4876-8ff7-e96eadf189a9.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            <span class="position-absolute fs-xs fw-semibold text-white bg-warning text-center top-50 start-50 translate-middle py-1 py-lg-2 w-100">Perbaikan</span>
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Playstation Voucher</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Playstation Voucher</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528418009" href=\"{{ route('product.show', ['revelation-infinite-journey', '1528418009']) }}\" title="Topup Revelation: Infinite Journey">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/eed6a3bb-edba-4e6f-8fdf-031ae87ace10.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Revelation: Infinite Journey</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Revelation: Infinite Journey</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528697287" href=\"{{ route('product.show', ['roblox-voucher', '1528697287']) }}\" title="Topup Roblox Voucher">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/335f1bde-f6b3-49d3-a2c6-38bcc04bab60.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Roblox Voucher</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Roblox Voucher</span>
                                    </div>
                                </div>
                            </a>
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
                            <a data-id="1528483107" href=\"{{ route('product.show', ['super-sus', '1528483107']) }}\" title="Topup Super Sus">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/2aebce3f-239d-4355-92db-77f9738bd6db.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Super Sus</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Super Sus</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528458294" href=\"{{ route('product.show', ['sausage-man', '1528458294']) }}\" title="Topup Sausage Man">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/e7a680f2-3de9-48fa-9ef3-986029d87b17.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Sausage Man</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Sausage Man</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528917260" href=\"{{ route('product.show', ['valorant', '1528917260']) }}\" title="Topup Valorant">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/d8ac38c9-9c4f-48f1-b4c2-c4553ab80ab8.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Valorant</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Valorant</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528045596" href=\"{{ route('product.show', ['arena-of-valor', '1528045596']) }}\" title="Topup Arena of Valor">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/fdb22145-04b8-4ccb-8ed9-34cab054ff30.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Arena of Valor</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Arena of Valor</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528776844" href=\"{{ route('product.show', ['fifa-mobile', '1528776844']) }}\" title="Topup FC Mobile">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/34ce1696-92f2-4789-b110-983f18d0a682.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">FC Mobile</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">FC Mobile</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528433756" href=\"{{ route('product.show', ['garena-undawn', '1528433756']) }}\" title="Topup Garena Undawn">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/432118c9-4373-4d01-9407-fbed7fe2dab0.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Garena Undawn</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Garena Undawn</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528847900" href=\"{{ route('product.show', ['zepeto', '1528847900']) }}\" title="Topup Zepeto">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/07a1b9b4-7153-4b86-8a9c-93d5d6f3c007.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Zepeto</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Zepeto</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528308068" href=\"{{ route('product.show', ['honkai-star-rail', '1528308068']) }}\" title="Topup Honkai: Star Rail">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/75cd6755-3eae-43ce-986a-0aeee6e522c5.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Honkai: Star Rail</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Honkai: Star Rail</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528218094" href=\"{{ route('product.show', ['speed-drifters', '1528218094']) }}\" title="Topup Speed Drifters">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/c110d56f-4f63-4cbe-869d-a5cae8546202.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Speed Drifters</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Speed Drifters</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528333066" href=\"{{ route('product.show', ['ragnarok-origin', '1528333066']) }}\" title="Topup Ragnarok Origin">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/e2e5f91e-cf1b-4ec1-9181-3144e8126c84.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Ragnarok Origin</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Ragnarok Origin</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528904988" href=\"{{ route('product.show', ['arena-breakout', '1528904988']) }}\" title="Topup Arena Breakout">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/a753f87f-3b0a-4d1d-811b-c6f13a14055d.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Arena Breakout</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Arena Breakout</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528091994" href=\"{{ route('product.show', ['harry-potter-magic-awakened', '1528091994']) }}\" title="Topup Harry Potter: Magic Awakened">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/6fa6f5d0-e25b-4f23-965c-a6c4c52ac078.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Harry Potter: Magic Awakened</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Harry Potter: Magic Awakened</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528268503" href=\"{{ route('product.show', ['growtopia', '1528268503']) }}\" title="Topup Growtopia">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/03b53fa5-fce6-4c35-9088-67b7bd4b1f62.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Growtopia</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Growtopia</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528399763" href=\"{{ route('product.show', ['metal-slug-awakening', '1528399763']) }}\" title="Topup Metal Slug: Awakening">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/eea1f5fe-b025-4a33-9192-7ef040092209.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Metal Slug: Awakening</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Metal Slug: Awakening</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528901282" href=\"{{ route('product.show', ['laplace-m', '1528901282']) }}\" title="Topup Laplace M">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/b5de3ef5-e67b-4999-b0d4-b205677913b8.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Laplace M</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Laplace M</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528875201" href=\"{{ route('product.show', ['football-master-2', '1528875201']) }}\" title="Topup Football Master 2">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/7e343e09-2814-41b6-a5d1-670e93b572b6.jpg?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Football Master 2</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Football Master 2</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528921413" href=\"{{ route('product.show', ['state-of-survival-zombie-war', '1528921413']) }}\" title="Topup State of Survival: Zombie War">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/65391c86-2c18-402e-9998-0c818565bb84.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">State of Survival: Zombie War</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">State of Survival: Zombie War</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528639923" href=\"{{ route('product.show', ['tom-and-jerry-chase', '1528639923']) }}\" title="Topup Tom and Jerry: Chase">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/1e62dbfa-2764-4caa-a8b8-3045f8e4ce46.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Tom and Jerry: Chase</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Tom and Jerry: Chase</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528742300" href=\"{{ route('product.show', ['eggy-party', '1528742300']) }}\" title="Topup Eggy Party">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/9d419e98-5361-4291-8644-7bbd921f0c77.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Eggy Party</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Eggy Party</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528465847" href=\"{{ route('product.show', ['king-s-choice', '1528465847']) }}\" title="Topup King&#x27;s Choice">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/93bcd37f-407a-4cb2-81bf-3f350fa698cf.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">King&#x27;s Choice</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">King&#x27;s Choice</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528727928" href=\"{{ route('product.show', ['identity-v', '1528727928']) }}\" title="Topup Identity V">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3 img-gray" data-bg="https://cdn.topupgim.com/product-tiles/3af02654-b427-49f6-97c6-0f2aeed2c242.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            <span class="position-absolute fs-xs fw-semibold text-white bg-warning text-center top-50 start-50 translate-middle py-1 py-lg-2 w-100">Perbaikan</span>
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Identity V</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Identity V</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528243295" href=\"{{ route('product.show', ['league-of-legends-pc', '1528243295']) }}\" title="Topup League of Legends PC">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/2f6c88f7-e5d1-4a3f-a8aa-fa4e47324efb.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">League of Legends PC</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">League of Legends PC</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528750992" href=\"{{ route('product.show', ['watcher-of-realms', '1528750992']) }}\" title="Topup Watcher of Realms">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/d906326e-49d9-4cce-85d8-e1e89c80f055.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Watcher of Realms</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Watcher of Realms</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528112021" href=\"{{ route('product.show', ['blood-strike', '1528112021']) }}\" title="Topup Blood Strike">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/5dd44e64-cdb1-488e-ac6e-0db75561b53c.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Blood Strike</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Blood Strike</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528546782" href=\"{{ route('product.show', ['teamfight-tactics-mobile', '1528546782']) }}\" title="Topup Teamfight Tactics Mobile">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/cca6c90f-1ed1-4fa2-a59a-2374e621c6df.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Teamfight Tactics Mobile</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Teamfight Tactics Mobile</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528385129" href=\"{{ route('product.show', ['honor-of-kings', '1528385129']) }}\" title="Topup Honor of Kings">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/18baee53-a677-48aa-af20-63a8326d773b.jpg?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Honor of Kings</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Honor of Kings</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528223850" href=\"{{ route('product.show', ['the-ants-underground-kingdom', '1528223850']) }}\" title="Topup The Ants: Underground Kingdom">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/2c98a521-1869-468f-bf16-b2bfc8b0d6dd.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">The Ants: Underground Kingdom</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">The Ants: Underground Kingdom</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528066601" href=\"{{ route('product.show', ['asphalt-9', '1528066601']) }}\" title="Topup Asphalt 9: Legends">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/04d974c6-a2d3-42eb-82da-d25a5ddda660.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Asphalt 9: Legends</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Asphalt 9: Legends</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528778970" href=\"{{ route('product.show', ['punishing-gray-raven', '1528778970']) }}\" title="Topup Punishing Gray Raven">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/e31ade27-2e06-4bec-acd8-e7b3af110618.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Punishing Gray Raven</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Punishing Gray Raven</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528081524" href=\"{{ route('product.show', ['pixel-gun-3d', '1528081524']) }}\" title="Topup Pixel Gun 3D">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/aed1df76-a653-4ba3-ac85-37864edfe5b5.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Pixel Gun 3D</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Pixel Gun 3D</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528241863" href=\"{{ route('product.show', ['zenless-zone-zero', '1528241863']) }}\" title="Topup Zenless Zone Zero">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/3444314e-f59c-4f57-b727-5018a31a4986.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Zenless Zone Zero</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Zenless Zone Zero</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528574762" href=\"{{ route('product.show', ['moonlight-blade-m', '1528574762']) }}\" title="Topup Moonlight Blade M">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/9f0671e2-adac-45d2-8725-4a1ccd9c504f.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Moonlight Blade M</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Moonlight Blade M</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528192851" href=\"{{ route('product.show', ['tarisland', '1528192851']) }}\" title="Topup Tarisland">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/90fa47b5-81f7-4bd8-a1e9-19ed93f6d677.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Tarisland</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Tarisland</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528005371" href=\"{{ route('product.show', ['Guns-of-glory', '1528005371']) }}\" title="Topup Guns of Glory">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/7f32d34c-4446-4d30-ad9a-460027e3bedc.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Guns of Glory</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Guns of Glory</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528919206" href=\"{{ route('product.show', ['king-of-avalon', '1528919206']) }}\" title="Topup King of Avalon">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3 img-gray" data-bg="https://cdn.topupgim.com/product-tiles/c16c2c39-b68e-4bfb-94bc-61d27e2d72e6.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            <span class="position-absolute fs-xs fw-semibold text-white bg-warning text-center top-50 start-50 translate-middle py-1 py-lg-2 w-100">Perbaikan</span>
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">King of Avalon</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">King of Avalon</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528644592" href=\"{{ route('product.show', ['draconia-saga', '1528644592']) }}\" title="Topup Draconia Saga">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/4de6fb9f-7389-4e66-87bb-b2f158cc393d.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Draconia Saga</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Draconia Saga</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528188173" href=\"{{ route('product.show', ['ghost-story', '1528188173']) }}\" title="Topup Ghost Story">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/2c00b607-56a1-4342-a6f7-8449644a3a52.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Ghost Story</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Ghost Story</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528175781" href=\"{{ route('product.show', ['age-of-empires-mobile', '1528175781']) }}\" title="Topup Age of Empires Mobile">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3 img-gray" data-bg="https://cdn.topupgim.com/product-tiles/fbdb2d12-8da2-43ba-a0c2-2788138393d2.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            <span class="position-absolute fs-xs fw-semibold text-white bg-warning text-center top-50 start-50 translate-middle py-1 py-lg-2 w-100">Perbaikan</span>
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Age of Empires Mobile</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Age of Empires Mobile</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528338248" href=\"{{ route('product.show', ['delta-force', '1528338248']) }}\" title="Topup Delta Force">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3 img-gray" data-bg="https://cdn.topupgim.com/product-tiles/df7bf074-f098-4272-916f-cde8b34239d4.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            <span class="position-absolute fs-xs fw-semibold text-white bg-warning text-center top-50 start-50 translate-middle py-1 py-lg-2 w-100">Perbaikan</span>
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Delta Force</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Delta Force</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528868295" href=\"{{ route('product.show', ['heaven-burns-red', '1528868295']) }}\" title="Topup Heaven Burns Red">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/b07a26c9-e632-4f0d-ae0c-65ae0ba53630.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Heaven Burns Red</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Heaven Burns Red</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528659030" href=\"{{ route('product.show', ['naruto-shippuden', '1528659030']) }}\" title="Topup Naruto Shippuden">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/200e4399-136d-4b75-ab3b-aaf00967bf0c.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Naruto Shippuden</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Naruto Shippuden</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528396005" href=\"{{ route('product.show', ['forsaken-world-2', '1528396005']) }}\" title="Topup Forsaken World 2">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/48869766-7338-4dbd-87b0-1b940d5041cd.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Forsaken World 2</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Forsaken World 2</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528933187" href=\"{{ route('product.show', ['pokemon-unite', '1528933187']) }}\" title="Topup Pokemon Unite">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/390f4dd2-c633-4361-aa1c-2b6cddbc9a28.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Pokemon Unite</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Pokemon Unite</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528273402" href=\"{{ route('product.show', ['magic-chess-go-go', '1528273402']) }}\" title="Topup Magic Chess Go Go">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/7c2d9f47-9030-4b98-b0e7-4c741c060935.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Magic Chess Go Go</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Magic Chess Go Go</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528265369" href=\"{{ route('product.show', ['mob-rush', '1528265369']) }}\" title="Topup Mob Rush">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/c795c023-e3c0-4576-832b-f8be9bd045e0.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Mob Rush</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Mob Rush</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528531807" href=\"{{ route('product.show', ['melojam', '1528531807']) }}\" title="Topup Melojam">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/fbce793c-1779-4187-a70f-b08442f80aad.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Melojam</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Melojam</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528113822" href=\"{{ route('product.show', ['afk-journey', '1528113822']) }}\" title="Topup AFK Journey">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/e49a8f74-dd6a-4a89-8a45-c222fd37c590.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">AFK Journey</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">AFK Journey</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528265857" href=\"{{ route('product.show', ['astra-knights-of-veda', '1528265857']) }}\" title="Topup Astra Knights of Veda">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/d73e85a0-e288-4a1a-a561-2b0919ccbc95.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Astra Knights of Veda</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Astra Knights of Veda</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528782232" href=\"{{ route('product.show', ['captain-tsubasa-ace', '1528782232']) }}\" title="Topup Captain Tsubasa Ace">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/43647330-b6d2-4a6b-927f-152ca0e195c0.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Captain Tsubasa Ace</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Captain Tsubasa Ace</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528558393" href=\"{{ route('product.show', ['heroes-evolved', '1528558393']) }}\" title="Topup Heroes Evolved">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/6616c982-0f86-4efd-987c-c43bed80432b.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Heroes Evolved</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Heroes Evolved</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528915043" href=\"{{ route('product.show', ['love-and-deepspace', '1528915043']) }}\" title="Topup Love and Deepspace">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/e13e1509-12b0-48a3-82e9-6a0a1019523e.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Love and Deepspace</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Love and Deepspace</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528737122" href=\"{{ route('product.show', ['nba-infinite', '1528737122']) }}\" title="Topup NBA Infinite">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/cd4df5cc-b8a2-4a7b-bcb6-62c5a8e0fd36.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">NBA Infinite</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">NBA Infinite</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528943679" href=\"{{ route('product.show', ['soul-land', '1528943679']) }}\" title="Topup Soul Land : New World">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/0dc33d6b-a005-43aa-ac08-e70dc8b2aceb.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Soul Land : New World</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Soul Land : New World</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528380220" href=\"{{ route('product.show', ['isekai-feast-tales-of-recipes', '1528380220']) }}\" title="Topup Isekai Feast Tales of Recipes">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/2e77ad2b-202f-42cb-b1b7-908b6d4a0797.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Isekai Feast Tales of Recipes</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Isekai Feast Tales of Recipes</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528033458" href=\"{{ route('product.show', ['culinary-tour', '1528033458']) }}\" title="Topup Culinary Tour">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/893674ba-8a6f-48fb-a7b5-45836f846cca.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Culinary Tour</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Culinary Tour</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528713902" href=\"{{ route('product.show', ['destiny-m', '1528713902']) }}\" title="Topup Destiny M">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/56498c43-45ed-4c67-8b79-d6ac207e8e19.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Destiny M</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Destiny M</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528335157" href=\"{{ route('product.show', ['be-the-king', '1528335157']) }}\" title="Topup Be The King">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/a866c028-03b4-4605-b9db-f84b3ec42eb1.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Be The King</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Be The King</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528091660" href=\"{{ route('product.show', ['the-lord-of-the-rings-rise-to-war', '1528091660']) }}\" title="Topup The Lord of the Rings: Rise to War">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/a860f019-3ebb-4234-a1b5-2ce92b7f2f13.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">The Lord of the Rings: Rise to War</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">The Lord of the Rings: Rise to War</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528537672" href=\"{{ route('product.show', ['war-robots', '1528537672']) }}\" title="Topup War Robots">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3 img-gray" data-bg="https://cdn.topupgim.com/product-tiles/df193733-1869-4f45-928b-b89bcab755e7.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            <span class="position-absolute fs-xs fw-semibold text-white bg-warning text-center top-50 start-50 translate-middle py-1 py-lg-2 w-100">Perbaikan</span>
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">War Robots</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">War Robots</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528086499" href=\"{{ route('product.show', ['t3-arena', '1528086499']) }}\" title="Topup T3 Arena">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/c1565cfe-5620-48cf-9691-0523ee04e1d2.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">T3 Arena</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">T3 Arena</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528283039" href=\"{{ route('product.show', ['once-human', '1528283039']) }}\" title="Topup Once Human">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/79a538c7-9c8e-41aa-bdb0-a934c625a842.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Once Human</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Once Human</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528323527" href=\"{{ route('product.show', ['lineage2m', '1528323527']) }}\" title="Topup Lineage2M">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/7e2ac09b-e8b4-4e81-af1c-02f62dabdb66.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Lineage2M</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Lineage2M</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528708119" href=\"{{ route('product.show', ['wuthering-waves', '1528708119']) }}\" title="Topup Wuthering Waves">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/32a0994a-129c-43ae-a6ef-b12af0850a6a.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Wuthering Waves</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Wuthering Waves</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528524651" href=\"{{ route('product.show', ['mirren-star-legends', '1528524651']) }}\" title="Topup Mirren Star Legends">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/861f962c-cac6-438f-82da-c81bfcf68f44.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Mirren Star Legends</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Mirren Star Legends</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528847754" href=\"{{ route('product.show', ['trails-of-cold-steel-nw', '1528847754']) }}\" title="Topup Trails of Cold Steel NW">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/1dabb738-949f-431a-bae8-de094dc09f1f.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Trails of Cold Steel NW</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Trails of Cold Steel NW</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528049919" href=\"{{ route('product.show', ['ragnarok-monster-world', '1528049919']) }}\" title="Topup Ragnarok Monster World">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/7882533c-2629-4e63-abe4-5397f6bba605.jpg?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Ragnarok Monster World</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Ragnarok Monster World</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528096910" href=\"{{ route('product.show', ['haikyu-fly-high', '1528096910']) }}\" title="Topup Haikyu Fly High">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/a32de1e4-572f-4e64-ae53-366abb853259.jpg?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Haikyu Fly High</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Haikyu Fly High</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528084009" href=\"{{ route('product.show', ['paw-tales-eternal-bond', '1528084009']) }}\" title="Topup Paw Tales Eternal Bond">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/fa4d72af-89a0-43d4-805e-6301057dabe4.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">Paw Tales Eternal Bond</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">Paw Tales Eternal Bond</span>
                                    </div>
                                </div>
                            </a>
                            <a data-id="1528163438" href=\"{{ route('product.show', ['frag-pro-shooter', '1528163438']) }}\" title="Topup FRAG Pro Shooter">
                                <div class="product-tile-idea-card bg-body-extra-light h-100">
                                    <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                        <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/d7025de4-ee74-4ba4-bba6-8865a252a28a.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                        </div>
                                    </div>
                                    <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                        <span class="text-dark fs-sm d-none d-lg-block">FRAG Pro Shooter</span>
                                        <span class="text-dark fs-xs d-block d-lg-none">FRAG Pro Shooter</span>
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
