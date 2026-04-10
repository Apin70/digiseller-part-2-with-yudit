@extends('layouts.app')

@section('title', 'TopUpGim - Top Up Game Murah dan Instan')

@push('scripts')
<script>Topupgim.helpersOnLoad(['jq-slick-main']);</script>
<script src="https://cdn.topupgim.com/topupgim-dist/main/assets/js/pages/frontend-home-069daa7e.js"></script>
<script type="text/javascript">
    const backdropImage = null;
    const simulationList = null;
    const applyScrollControl = () => {
        document.querySelectorAll(".horizon-scroll-control")?.forEach(element => {
            const dataSign = element.getAttribute("data-sign");
            const elementWitdh = parseInt(element.offsetWidth || element.clientWidth);
            const addScroll = elementWitdh + (0.02 * elementWitdh);
            const controlLeftElem = document.querySelector(`#scroll-control-left-${dataSign}`);
            const controlRightElem = document.querySelector(`#scroll-control-right-${dataSign}`);
            controlLeftElem?.addEventListener('click', function () {
                element.scrollTo({ left: parseInt(element.scrollLeft) - addScroll, behavior: 'smooth' });
                controlLeftElem.blur();
            });
            controlRightElem?.addEventListener('click', function () {
                element.scrollTo({ left: parseInt(element.scrollLeft) + addScroll, behavior: 'smooth' });
                controlRightElem.blur();
            });
            element.addEventListener('scroll', function () {
                var scrollLeft = parseInt(element.scrollLeft);
                if (scrollLeft < 5) { controlLeftElem?.classList?.add('d-none'); }
                else if (scrollLeft > 5) { controlLeftElem?.classList?.remove('d-none'); }
                if (parseInt(elementWitdh + element.scrollLeft + 5) < element.scrollWidth) {
                    controlRightElem?.classList?.remove('d-none');
                } else { controlRightElem?.classList?.add('d-none'); }
            });
        });
    }
    window.applyScrollControl = applyScrollControl;
    Topupgim.onLoad(() => { const lazyContent = new LazyLoad({}); });
    applyScrollControl();
</script>
@endpush

@section('content')
        <!-- Main Container -->
        <main id="main-container" class="container-home">

            <div class="d-block d-lg-none bg-gd-body-light-op-rl">
                <div class="block bg-body py-2 px-3 mb-2 static-page">
                    <p class="text-center fs-sm mb-0" style="font-size:0.875rem;"><strong>Hemat</strong> &amp; <strong>Instan </strong>di TopUpGim.com</p>
                </div>
            </div>

            <!-- Idea Content -->
            <div id="hero-top" class="d-flex flex-column bg-image">
                <div class="bg-gd-body-light-op-rl">
                    <div class="content mb-5 mb-md-0 pb-5 pb-md-7 pt-2 pt-md-4 mt-0 mt-md-2">


                        <!-- Main Slider -->
                        <div class="res-slider px-2 px-lg-3 mb-lg-3">
                            <div id="main-slider" class="slick-nav-animate slick-dotted-inner slick-dotted-white overflow-hidden visibility gone" style="border-radius: 0.45em;" data-dots="true" data-arrows="true" data-slides-to-show="1" center-padding="10%" adaptive-height="true" data-center-mode="true" data-autoplay="true" data-autoplay-speed="3000">
                                <a class="mx-md-3 res-slider border rounded" href="https://play.google.com/store/apps/details?id=com.topupgim.app">
                                    <div class="position-relative rounded w-100 h-100" style="background-image: linear-gradient(to bottom,  rgba(0, 0, 0, 0.2), transparent), url('https://cdn.topupgim.com/sliders/8cd2ec2e-fda0-4633-bfb2-2a05ce3cd36c.jpg'); background-size: cover;">
                                    </div>
                                </a>
                                <a class="mx-md-3 res-slider border rounded" href=\"{{ route('product.show', ['roblox-voucher', '1528697287']) }}\">
                                    <div class="position-relative rounded w-100 h-100" style="background-image: linear-gradient(to bottom,  rgba(0, 0, 0, 0.2), transparent), url('https://cdn.topupgim.com/sliders/0dafce3d-20b4-498a-b393-415839cc7fab.jpg'); background-size: cover;">
                                    </div>
                                </a>
                                <a class="mx-md-3 res-slider border rounded" href=\"{{ route('product.show', ['free-fire', '1528555434']) }}\">
                                    <div class="position-relative rounded w-100 h-100" style="background-image: linear-gradient(to bottom,  rgba(0, 0, 0, 0.2), transparent), url('https://cdn.topupgim.com/sliders/2712b97e-95b6-47b6-a2ee-14e2c9f3b2af.jpg'); background-size: cover;">
                                    </div>
                                </a>
                                <a class="mx-md-3 res-slider border rounded" href=\"{{ route('product.show', ['mobile-legends', '1528378309']) }}\">
                                    <div class="position-relative rounded w-100 h-100" style="background-image: linear-gradient(to bottom,  rgba(0, 0, 0, 0.2), transparent), url('https://cdn.topupgim.com/sliders/eb02255e-8185-49d6-b075-a643b5cd1894.jpg'); background-size: cover;">
                                    </div>
                                </a>
                                <a class="mx-md-3 res-slider border rounded" href=\"{{ route('product.show', ['mobile-legends', '1528378309']) }}\">
                                    <div class="position-relative rounded w-100 h-100" style="background-image: linear-gradient(to bottom,  rgba(0, 0, 0, 0.2), transparent), url('https://cdn.topupgim.com/sliders/c437831c-9aee-4e4b-877c-95527efad837.jpg'); background-size: cover;">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- END Main Slider -->
                    </div>
                </div>
            </div>
            <!-- End Idea Content -->

            <div class="content bg-transparent d-none d-md-block" style="margin-top: -6.8em;">
                <div class="px-3">
                    <div class="block block-rounded animated fadeIn mb-2">
                        <div class="block-content block-content-full" style="padding: 0.75rem 0.75rem; 1px !important;">
                            <div class="row py-3 px-4 gy-3 border-bottom mb-3">
                                <div class="col-4 col-md-3 h-100 d-flex flex-column align-items-center justify-content-center">
                                    <span class="text-dark"><i class="far fa-coin fa-lg mb-2 me-1"></i> Rp0</span>
                                    <span class="text-dark fs-xs fw-light mt-1 text-center">Saldo Cashback</span>
                                </div>
                                <div class="col-4 col-md-3 h-100 d-flex flex-column align-items-center justify-content-center">
                                    <span class="text-dark"><i class="far fa-ticket-alt fa-lg mb-2 me-1"></i> Rp0</span>
                                    <span class="text-dark fs-xs fw-light mt-1 text-center">Saldo Reseller</span>
                                </div>
                                <div class="col-4 col-md-3 h-100 d-flex flex-column align-items-center justify-content-center d-none d-lg-flex">
                                    <span class="text-dark"><i class="far fa-coins fa-lg mb-2 me-1"></i> Rp0</span>
                                    <span class="text-dark fs-xs fw-light mt-1 text-center">Komisi Referral</span>
                                </div>
                                <a class="col-4 col-md-3 h-100 d-flex flex-column align-items-center justify-content-center" href="{{ route('auth.sign-in') }}">
                                    <span class="text-dark"><i class="far fa-sign-in fa-lg mb-2"></i></span>
                                    <span class="text-dark fs-xs fw-light mt-1 text-center">Masuk</span>
                                </a>
                            </div>
                            <div class="d-flex justify-content-around py-2 px-4 gy-3">
                                <a class="h-100 d-flex flex-column align-items-center justify-content-center" href="{{ route('category.show', 'E-Wallet') }}">
                                    <img class="lazy" style="width: 30px; height: 30px;" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/category-icons/30328403-1815-403e-879a-712333048a48.png" alt="E-Wallet">
                                    <span class="text-dark fs-xs fw-light mt-1 text-center">E-Wallet</span>
                                </a>
                                <a class="h-100 d-flex flex-column align-items-center justify-content-center" href="{{ route('order.pulsa') }}">
                                    <img class="lazy" style="width: 30px; height: 30px;" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/category-icons/562478a4-afba-4a6a-acd9-02954df15bed.png" alt="Pulsa">
                                    <span class="text-dark fs-xs fw-light mt-1 text-center">Pulsa</span>
                                </a>
                                <a class="h-100 d-flex flex-column align-items-center justify-content-center" href="{{ route('category.show', 'Game') }}">
                                    <img class="lazy" style="width: 30px; height: 30px;" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/category-icons/f7121621-7f87-4a0d-acf6-4f7498a750ed.png" alt="Game">
                                    <span class="text-dark fs-xs fw-light mt-1 text-center">Game</span>
                                </a>
                                <a class="h-100 d-flex flex-column align-items-center justify-content-center" href="{{ route('category.show', 'Aplikasi') }}">
                                    <img class="lazy" style="width: 30px; height: 30px;" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/category-icons/4ae59eca-f4f2-4e44-b5f1-8c73bebba0c4.png" alt="Aplikasi">
                                    <span class="text-dark fs-xs fw-light mt-1 text-center">Aplikasi</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content bg-transparent d-block d-md-none" style="margin-top: -6.4em;">
                <div class="px-2 mt-3">
                    <div class="block block-rounded animated fadeIn mb-2">
                        <div class="block-content block-content-full" style="padding: 0.75rem 0.75rem; 1px !important;">
                            <div class="row gy-4 border-bottom pt-2 pb-3 mb-3">
                                <div class="col-4 h-100 d-flex flex-column align-items-center justify-content-center">
                                    <span class="text-dark"><i class="far fa-coin fa-lg mb-2 me-1"></i> Rp0</span>
                                    <span class="text-dark fs-xs fw-light mt-1 text-center">Saldo Cashback</span>
                                </div>
                                <div class="col-4 h-100 d-flex flex-column align-items-center justify-content-center">
                                    <span class="text-dark"><i class="far fa-ticket-alt fa-lg mb-2 me-1"></i> Rp0</span>
                                    <span class="text-dark fs-xs fw-light mt-1 text-center">Saldo Reseller</span>
                                </div>
                                <a class="col-4 h-100 d-flex flex-column align-items-center justify-content-center" href="{{ route('auth.sign-in') }}">
                                    <span class="text-dark"><i class="far fa-sign-in fa-lg mb-2"></i></span>
                                    <span class="text-dark fs-xs fw-light mt-1 text-center">Masuk</span>
                                </a>
                            </div>
                            <div class="row gy-4">
                                <a class="col-3 h-100 d-flex flex-column align-items-center justify-content-center" href="{{ route('category.show', 'E-Wallet') }}">
                                    <img class="lazy" style="width: 30px; height: 30px;" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/category-icons/30328403-1815-403e-879a-712333048a48.png" alt="E-Wallet">
                                    <span class="text-dark fs-xs fw-light mt-1 text-center">E-Wallet</span>
                                </a>
                                <a class="col-3 h-100 d-flex flex-column align-items-center justify-content-center" href="{{ route('order.pulsa') }}">
                                    <img class="lazy" style="width: 30px; height: 30px;" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/category-icons/562478a4-afba-4a6a-acd9-02954df15bed.png" alt="Pulsa">
                                    <span class="text-dark fs-xs fw-light mt-1 text-center">Pulsa</span>
                                </a>
                                <a class="col-3 h-100 d-flex flex-column align-items-center justify-content-center" href="{{ route('category.show', 'Game') }}">
                                    <img class="lazy" style="width: 30px; height: 30px;" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/category-icons/f7121621-7f87-4a0d-acf6-4f7498a750ed.png" alt="Game">
                                    <span class="text-dark fs-xs fw-light mt-1 text-center">Game</span>
                                </a>
                                <a class="col-3 h-100 d-flex flex-column align-items-center justify-content-center" href="{{ route('category.show', 'Aplikasi') }}">
                                    <img class="lazy" style="width: 30px; height: 30px;" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/category-icons/4ae59eca-f4f2-4e44-b5f1-8c73bebba0c4.png" alt="Aplikasi">
                                    <span class="text-dark fs-xs fw-light mt-1 text-center">Aplikasi</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Redemptions -->
            <!-- END Redemptions -->

            <div class="content my-0 py-0">
                <div class="mx-2 mx-lg-4 static-page-no-mb"><div class="raw-html-embed d-lg-none">    <h2 style="font-size: 13px;margin-top: 20px; text-decoration: underline; color: #0665d0;display:none" class="mobileonly">        Top Up yang pasti-pasti aja di TopUpGim.com    </h2>    <p style="font-size: 14px;margin: -15px 0;display:none;" class="mobileonly">                                <i class="fa-solid fa-fw fa-tag" style="                            color: red;                        "></i> <b><u>Pasti Hemat</u></b> <span style="font-size:12px">kode promo &amp; diskon setiap hari.</span>                                                        <br>                                <i class="fa-solid fa-fw fa-truck-fast" style="                            color: #0665d0;                        "></i> <b><u>Pasti Instan</u></b> <span style="font-size:12px">proses hanya hitungan detik.</span>                                                        <br>                                <i class="fa-solid fa-fw fa-check-double" style="                            color: green;                        "></i> <b><u>Pasti Official</u></b> <span style="font-size:12px">garansi pengembalian uang 100%.</span>                                        </p></div></div>
            </div>

            <!-- Page Content -->
            <div class="mt-5">

                <div id="history-container" class="d-flex flex-column mb-5 animated fadeIn d-none" style="scroll-margin-top: 100px;">
                    <div class="content py-0 my-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mx-2 mx-lg-4">
                                <div class="d-flex align-items-top">
                                    <h3 class="mb-0">Riwayat Pesanan</h3>
                                </div>
                            </div>
                            <button id="history-more" type="button" class="btn btn-sm btn-alt-secondary">
                                Lainnya <i class="fa fa-fw fa-arrow-right text-muted"></i>
                            </button>
                        </div>
                    </div>
                    <div class="position-relative pb-2">
                        <div class="content py-0 my-0">
                            <div class="mx-2 mx-lg-4">
                                <div class="horizon-scroll-control overflow-auto disable-scrollbars" data-sign="purchase-history">
                                    <div id="history-list" class="d-flex pt-4"></div>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute top-50 start-0 translate-middle-y" style="z-index: 800;">
                            <div class="ms-2 ms-md-3 ms-lg-4 ms-xl-6 ps-xl-2 pt-4">
                                <button id="scroll-control-left-purchase-history" type="button" class="btn ratio ratio-1x1 bg-body-light p-4 rounded rounded-circle block m-0 p-0 block-bordered block-fx-shadow animated bounceIn d-none" style="cursor: pointer;">
                                    <div>
                                        <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                            <i class="far fa-fw fa-lg fa-chevron-left text-muted"></i>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <div class="position-absolute top-50 end-0 translate-middle-y" style="z-index: 800;">
                            <div class="me-2 me-md-3 me-lg-4 me-xl-6 pe-xl-2 pt-4">
                                <button id="scroll-control-right-purchase-history" type="button" class="btn ratio ratio-1x1 bg-body-light p-4 rounded rounded-circle block m-0 p-0 block-bordered block-fx-shadow animated bounceIn d-none" style="cursor: pointer;">
                                    <div>
                                        <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                            <i class="far fa-fw fa-lg fa-chevron-right text-muted"></i>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>                    </div>
                </div>

                <!-- Products -->
                <div id="category_54664e6747776535417572633954416e65795a716a673d3d" class="d-flex flex-column mb-5" style="scroll-margin-top: 100px;">
                    <div class="content py-0 my-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mx-2 mx-lg-4">
                                <div class="d-flex align-items-top">
                                    <img class="lazy me-2 me-lg-3" style="width: 27px; height: 1.6rem; object-fit: cover;" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/category-icons/b3cb23c6-1f21-4e5d-9251-c3065ead895a.png" alt="Game Populer">
                                    <h3 class="mb-0">Game Populer</h3>
                                </div>
                            </div>
                        </div>
                        <div class="mx-2 mx-lg-4">
                            <div class="row gy-4 row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 row-cols-xl-6 pt-4 pb-2 gx-lg-3">
                                <a data-id="1528378309" href=\"{{ route('product.show', ['mobile-legends', '1528378309']) }}\" title="Topup Mobile Legends">
                                    <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                        <div class="px-lg-3 mb-2">
                                            <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/4a6c27d3-12f4-42d0-a153-65588068ff2a.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="px-3 mb-1">
                                                    <p class="text-dark fw-medium fs-sm mb-2 text-start">Mobile Legends </p>
                                                </div>
                                                <div class="d-flex flex-wrap gap-2 align-items-center pb-2 mb-1 px-3 text-nowrap">
                                                    <span class="rounded bg-danger-light text-danger fs-xs fw-medium" style="padding: 1px 4px">Kode Promo</span>
                                                    <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 px-3 border-top text-nowrap">
                                                <span class="fs-xs text-muted">
                                                    <i class="far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 10rb+
                                                </span>
                                            </div>
                                        </div>                    </div>
                                </a>
                                <a data-id="1528273402" href=\"{{ route('product.show', ['magic-chess-go-go', '1528273402']) }}\" title="Topup Magic Chess Go Go">
                                    <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                        <div class="px-lg-3 mb-2">
                                            <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/7c2d9f47-9030-4b98-b0e7-4c741c060935.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="px-3 mb-1">
                                                    <p class="text-dark fw-medium fs-sm mb-2 text-start">Magic Chess Go Go </p>
                                                </div>
                                                <div class="d-flex flex-wrap gap-2 align-items-center pb-2 mb-1 px-3 text-nowrap">
                                                    <span class="rounded bg-danger-light text-danger fs-xs fw-medium" style="padding: 1px 4px">Kode Promo</span>
                                                    <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 px-3 border-top text-nowrap">
                                                <span class="fs-xs text-muted">
                                                    <i class="far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 10rb+
                                                </span>
                                            </div>
                                        </div>                    </div>
                                </a>
                                <a data-id="1528555434" href=\"{{ route('product.show', ['free-fire', '1528555434']) }}\" title="Topup Free Fire">
                                    <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                        <div class="px-lg-3 mb-2">
                                            <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/1d2a30ea-987b-452c-a658-8fae63176cc6.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="px-3 mb-1">
                                                    <p class="text-dark fw-medium fs-sm mb-2 text-start">Free Fire </p>
                                                </div>
                                                <div class="d-flex flex-wrap gap-2 align-items-center pb-2 mb-1 px-3 text-nowrap">
                                                    <span class="rounded bg-danger-light text-danger fs-xs fw-medium" style="padding: 1px 4px">Kode Promo</span>
                                                    <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 px-3 border-top text-nowrap">
                                                <span class="fs-xs text-muted">
                                                    <i class="far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 10rb+
                                                </span>
                                            </div>
                                        </div>                    </div>
                                </a>
                                <a data-id="1528242362" href=\"{{ route('product.show', ['hago', '1528242362']) }}\" title="Topup HAGO">
                                    <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                        <div class="px-lg-3 mb-2">
                                            <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/4c6e19a1-1aaa-4bb4-8f3d-c321a31a250e.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="px-3 mb-1">
                                                    <p class="text-dark fw-medium fs-sm mb-2 text-start">HAGO </p>
                                                </div>
                                                <div class="d-flex flex-wrap gap-2 align-items-center pb-2 mb-1 px-3 text-nowrap">
                                                    <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 px-3 border-top text-nowrap">
                                                <span class="fs-xs text-muted">
                                                    <i class="far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 10rb+
                                                </span>
                                            </div>
                                        </div>                    </div>
                                </a>
                                <a data-id="1528036161" href=\"{{ route('product.show', ['pubgm', '1528036161']) }}\" title="Topup PUBGM Global">
                                    <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                        <div class="px-lg-3 mb-2">
                                            <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/7c8630ec-8447-45f0-85b6-5ae6a860460d.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="px-3 mb-1">
                                                    <p class="text-dark fw-medium fs-sm mb-2 text-start">PUBGM Global </p>
                                                </div>
                                                <div class="d-flex flex-wrap gap-2 align-items-center pb-2 mb-1 px-3 text-nowrap">
                                                    <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 px-3 border-top text-nowrap">
                                                <span class="fs-xs text-muted">
                                                    <i class="far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 10rb+
                                                </span>
                                            </div>
                                        </div>                    </div>
                                </a>
                                <a data-id="1528787297" href=\"{{ route('product.show', ['genshin-impact', '1528787297']) }}\" title="Topup Genshin Impact">
                                    <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                        <div class="px-lg-3 mb-2">
                                            <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/764918a1-b6f5-48ea-99a6-c40f04770add.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="px-3 mb-1">
                                                    <p class="text-dark fw-medium fs-sm mb-2 text-start">Genshin Impact </p>
                                                </div>
                                                <div class="d-flex flex-wrap gap-2 align-items-center pb-2 mb-1 px-3 text-nowrap">
                                                    <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 px-3 border-top text-nowrap">
                                                <span class="fs-xs text-muted">
                                                    <i class="far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 10rb+
                                                </span>
                                            </div>
                                        </div>                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>                                <div id="category_646a62726e48554e504a5a3832614167796844716c513d3d" class="d-flex flex-column mb-5" style="scroll-margin-top: 100px;">
                    <div class="content my-0 py-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mx-2 mx-lg-4">
                                <div class="d-flex align-items-top">
                                    <img class="lazy me-2 me-lg-3" style="width: 27px; height: 1.6rem; object-fit: cover;" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/category-icons/e594793b-3b53-469d-bcd8-07f820a3c99f.png" alt="Produk Trending">
                                    <h3 class="mb-0">Produk Trending</h3>
                                </div>
                            </div>
                        </div>
                        <div class="mx-2 mx-lg-4">
                            <div class="row gy-4 row-cols-3 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 row-cols-xl-6 pt-4 pb-2 gx-lg-3">
                                <a data-id="1528543830" href=\"{{ route('product.show', ['dana', '1528543830']) }}\" title="Topup Dana">
                                    <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                        <div class="px-lg-3 mb-2">
                                            <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/28550b75-ee02-4189-aa69-2d03b2ca513f.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            </div>
                                        </div>
                                        <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                    <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">Dana</p>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 border-top text-nowrap" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                <span class="text-muted" style="font-size: 11px;">
                                                    <i class="d-none d-md-inline-block far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 10rb+
                                                </span>
                                            </div>
                                        </div>                        <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="px-3 mb-1">
                                                    <p class="text-dark fw-medium fs-sm mb-2 text-start">Dana</p>
                                                </div>
                                                <div class="d-flex flex-wrap gap-2 align-items-center pb-2 mb-1 px-3 text-nowrap">
                                                    <span class="rounded bg-warning-light text-warning fs-xs fw-medium" style="padding: 1px 4px">Gimkoin</span>
                                                    <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 px-3 border-top text-nowrap">
                                                <span class="fs-xs text-muted">
                                                    <i class="far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 10rb+
                                                </span>
                                            </div>
                                        </div>                    </div>
                                </a>
                                <a data-id="1528847900" href=\"{{ route('product.show', ['zepeto', '1528847900']) }}\" title="Topup Zepeto">
                                    <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                        <div class="px-lg-3 mb-2">
                                            <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/07a1b9b4-7153-4b86-8a9c-93d5d6f3c007.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            </div>
                                        </div>
                                        <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                    <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">Zepeto</p>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 border-top text-nowrap" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                <span class="text-muted" style="font-size: 11px;">
                                                    <i class="d-none d-md-inline-block far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 10rb+
                                                </span>
                                            </div>
                                        </div>                        <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="px-3 mb-1">
                                                    <p class="text-dark fw-medium fs-sm mb-2 text-start">Zepeto</p>
                                                </div>
                                                <div class="d-flex flex-wrap gap-2 align-items-center pb-2 mb-1 px-3 text-nowrap">
                                                    <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 px-3 border-top text-nowrap">
                                                <span class="fs-xs text-muted">
                                                    <i class="far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 10rb+
                                                </span>
                                            </div>
                                        </div>                    </div>
                                </a>
                                <a data-id="1528112021" href=\"{{ route('product.show', ['blood-strike', '1528112021']) }}\" title="Topup Blood Strike">
                                    <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                        <div class="px-lg-3 mb-2">
                                            <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/5dd44e64-cdb1-488e-ac6e-0db75561b53c.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            </div>
                                        </div>
                                        <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                    <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">Blood Strike</p>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 border-top text-nowrap" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                <span class="text-muted" style="font-size: 11px;">
                                                    <i class="d-none d-md-inline-block far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 10rb+
                                                </span>
                                            </div>
                                        </div>                        <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="px-3 mb-1">
                                                    <p class="text-dark fw-medium fs-sm mb-2 text-start">Blood Strike</p>
                                                </div>
                                                <div class="d-flex flex-wrap gap-2 align-items-center pb-2 mb-1 px-3 text-nowrap">
                                                    <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 px-3 border-top text-nowrap">
                                                <span class="fs-xs text-muted">
                                                    <i class="far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 10rb+
                                                </span>
                                            </div>
                                        </div>                    </div>
                                </a>
                                <a data-id="1528615283" href=\"{{ route('product.show', ['point-blank', '1528615283']) }}\" title="Topup Point Blank">
                                    <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                        <div class="px-lg-3 mb-2">
                                            <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/7dc8cd98-7cc4-4b73-ad96-e9bd2d585372.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            </div>
                                        </div>
                                        <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                    <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">Point Blank</p>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 border-top text-nowrap" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                <span class="text-muted" style="font-size: 11px;">
                                                    <i class="d-none d-md-inline-block far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 6 rb+
                                                </span>
                                            </div>
                                        </div>                        <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="px-3 mb-1">
                                                    <p class="text-dark fw-medium fs-sm mb-2 text-start">Point Blank</p>
                                                </div>
                                                <div class="d-flex flex-wrap gap-2 align-items-center pb-2 mb-1 px-3 text-nowrap">
                                                    <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 px-3 border-top text-nowrap">
                                                <span class="fs-xs text-muted">
                                                    <i class="far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 6 rb+
                                                </span>
                                            </div>
                                        </div>                    </div>
                                </a>
                                <a data-id="1528919312" href=\"{{ route('product.show', ['call-of-duty-mobile', '1528919312']) }}\" title="Topup Call of Duty Mobile">
                                    <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                        <div class="px-lg-3 mb-2">
                                            <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/234ebffe-a86e-49f2-a6d6-0227e68b8c94.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            </div>
                                        </div>
                                        <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                    <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">Call of Duty Mobile</p>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 border-top text-nowrap" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                <span class="text-muted" style="font-size: 11px;">
                                                    <i class="d-none d-md-inline-block far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 10rb+
                                                </span>
                                            </div>
                                        </div>                        <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="px-3 mb-1">
                                                    <p class="text-dark fw-medium fs-sm mb-2 text-start">Call of Duty Mobile</p>
                                                </div>
                                                <div class="d-flex flex-wrap gap-2 align-items-center pb-2 mb-1 px-3 text-nowrap">
                                                    <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 px-3 border-top text-nowrap">
                                                <span class="fs-xs text-muted">
                                                    <i class="far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 10rb+
                                                </span>
                                            </div>
                                        </div>                    </div>
                                </a>
                                <a data-id="1528768154" href=\"{{ route('product.show', ['telkomsel', '1528768154']) }}\" title="Topup Telkomsel">
                                    <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                        <div class="px-lg-3 mb-2">
                                            <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/7b91b6b1-b983-4b74-b93f-75acce75f3fc.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            </div>
                                        </div>
                                        <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                    <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">Telkomsel</p>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 border-top text-nowrap" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                <span class="text-muted" style="font-size: 11px;">
                                                    <i class="d-none d-md-inline-block far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 10rb+
                                                </span>
                                            </div>
                                        </div>                        <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="px-3 mb-1">
                                                    <p class="text-dark fw-medium fs-sm mb-2 text-start">Telkomsel</p>
                                                </div>
                                                <div class="d-flex flex-wrap gap-2 align-items-center pb-2 mb-1 px-3 text-nowrap">
                                                    <span class="rounded bg-warning-light text-warning fs-xs fw-medium" style="padding: 1px 4px">Gimkoin</span>
                                                    <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 px-3 border-top text-nowrap">
                                                <span class="fs-xs text-muted">
                                                    <i class="far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 10rb+
                                                </span>
                                            </div>
                                        </div>                    </div>
                                </a>
                                <a data-id="1528742300" href=\"{{ route('product.show', ['eggy-party', '1528742300']) }}\" title="Topup Eggy Party">
                                    <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                        <div class="px-lg-3 mb-2">
                                            <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/9d419e98-5361-4291-8644-7bbd921f0c77.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            </div>
                                        </div>
                                        <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                    <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">Eggy Party</p>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 border-top text-nowrap" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                <span class="text-muted" style="font-size: 11px;">
                                                    <i class="d-none d-md-inline-block far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 7.2 rb+
                                                </span>
                                            </div>
                                        </div>                        <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="px-3 mb-1">
                                                    <p class="text-dark fw-medium fs-sm mb-2 text-start">Eggy Party</p>
                                                </div>
                                                <div class="d-flex flex-wrap gap-2 align-items-center pb-2 mb-1 px-3 text-nowrap">
                                                    <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 px-3 border-top text-nowrap">
                                                <span class="fs-xs text-muted">
                                                    <i class="far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 7.2 rb+
                                                </span>
                                            </div>
                                        </div>                    </div>
                                </a>
                                <a data-id="1528917260" href=\"{{ route('product.show', ['valorant', '1528917260']) }}\" title="Topup Valorant">
                                    <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                        <div class="px-lg-3 mb-2">
                                            <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/d8ac38c9-9c4f-48f1-b4c2-c4553ab80ab8.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            </div>
                                        </div>
                                        <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                    <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">Valorant</p>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 border-top text-nowrap" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                <span class="text-muted" style="font-size: 11px;">
                                                    <i class="d-none d-md-inline-block far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 2.6 rb+
                                                </span>
                                            </div>
                                        </div>                        <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="px-3 mb-1">
                                                    <p class="text-dark fw-medium fs-sm mb-2 text-start">Valorant</p>
                                                </div>
                                                <div class="d-flex flex-wrap gap-2 align-items-center pb-2 mb-1 px-3 text-nowrap">
                                                    <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 px-3 border-top text-nowrap">
                                                <span class="fs-xs text-muted">
                                                    <i class="far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 2.6 rb+
                                                </span>
                                            </div>
                                        </div>                    </div>
                                </a>
                                <a data-id="1528433756" href=\"{{ route('product.show', ['garena-undawn', '1528433756']) }}\" title="Topup Garena Undawn">
                                    <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                        <div class="px-lg-3 mb-2">
                                            <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/432118c9-4373-4d01-9407-fbed7fe2dab0.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            </div>
                                        </div>
                                        <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                    <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">Garena Undawn</p>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 border-top text-nowrap" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                <span class="text-muted" style="font-size: 11px;">
                                                    <i class="d-none d-md-inline-block far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 2.7 rb+
                                                </span>
                                            </div>
                                        </div>                        <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="px-3 mb-1">
                                                    <p class="text-dark fw-medium fs-sm mb-2 text-start">Garena Undawn</p>
                                                </div>
                                                <div class="d-flex flex-wrap gap-2 align-items-center pb-2 mb-1 px-3 text-nowrap">
                                                    <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 px-3 border-top text-nowrap">
                                                <span class="fs-xs text-muted">
                                                    <i class="far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 2.7 rb+
                                                </span>
                                            </div>
                                        </div>                    </div>
                                </a>
                                <a data-id="1528483107" href=\"{{ route('product.show', ['super-sus', '1528483107']) }}\" title="Topup Super Sus">
                                    <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                        <div class="px-lg-3 mb-2">
                                            <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/2aebce3f-239d-4355-92db-77f9738bd6db.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            </div>
                                        </div>
                                        <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                    <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">Super Sus</p>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 border-top text-nowrap" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                <span class="text-muted" style="font-size: 11px;">
                                                    <i class="d-none d-md-inline-block far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 4.9 rb+
                                                </span>
                                            </div>
                                        </div>                        <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="px-3 mb-1">
                                                    <p class="text-dark fw-medium fs-sm mb-2 text-start">Super Sus</p>
                                                </div>
                                                <div class="d-flex flex-wrap gap-2 align-items-center pb-2 mb-1 px-3 text-nowrap">
                                                    <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 px-3 border-top text-nowrap">
                                                <span class="fs-xs text-muted">
                                                    <i class="far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 4.9 rb+
                                                </span>
                                            </div>
                                        </div>                    </div>
                                </a>
                                <a data-id="1528569704" href=\"{{ route('product.show', ['steam-wallet-voucher', '1528569704']) }}\" title="Topup Steam Wallet Voucher">
                                    <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                        <div class="px-lg-3 mb-2">
                                            <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/b5a508e7-61e0-4a2e-899e-0ddd21d338a4.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            </div>
                                        </div>
                                        <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                    <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">Steam Wallet Voucher</p>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 border-top text-nowrap" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                <span class="text-muted" style="font-size: 11px;">
                                                    <i class="d-none d-md-inline-block far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 2.8 rb+
                                                </span>
                                            </div>
                                        </div>                        <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="px-3 mb-1">
                                                    <p class="text-dark fw-medium fs-sm mb-2 text-start">Steam Wallet Voucher</p>
                                                </div>
                                                <div class="d-flex flex-wrap gap-2 align-items-center pb-2 mb-1 px-3 text-nowrap">
                                                    <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 px-3 border-top text-nowrap">
                                                <span class="fs-xs text-muted">
                                                    <i class="far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 2.8 rb+
                                                </span>
                                            </div>
                                        </div>                    </div>
                                </a>
                                <a data-id="1528308068" href=\"{{ route('product.show', ['honkai-star-rail', '1528308068']) }}\" title="Topup Honkai: Star Rail">
                                    <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                        <div class="px-lg-3 mb-2">
                                            <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/75cd6755-3eae-43ce-986a-0aeee6e522c5.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            </div>
                                        </div>
                                        <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                    <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">Honkai: Star Rail</p>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 border-top text-nowrap" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                <span class="text-muted" style="font-size: 11px;">
                                                    <i class="d-none d-md-inline-block far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 1.9 rb+
                                                </span>
                                            </div>
                                        </div>                        <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="px-3 mb-1">
                                                    <p class="text-dark fw-medium fs-sm mb-2 text-start">Honkai: Star Rail</p>
                                                </div>
                                                <div class="d-flex flex-wrap gap-2 align-items-center pb-2 mb-1 px-3 text-nowrap">
                                                    <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 px-3 border-top text-nowrap">
                                                <span class="fs-xs text-muted">
                                                    <i class="far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 1.9 rb+
                                                </span>
                                            </div>
                                        </div>                    </div>
                                </a>
                                <a data-id="1528904988" href=\"{{ route('product.show', ['arena-breakout', '1528904988']) }}\" title="Topup Arena Breakout">
                                    <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                        <div class="px-lg-3 mb-2">
                                            <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/a753f87f-3b0a-4d1d-811b-c6f13a14055d.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            </div>
                                        </div>
                                        <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                    <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">Arena Breakout</p>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 border-top text-nowrap" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                <span class="text-muted" style="font-size: 11px;">
                                                    <i class="d-none d-md-inline-block far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 1.4 rb+
                                                </span>
                                            </div>
                                        </div>                        <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="px-3 mb-1">
                                                    <p class="text-dark fw-medium fs-sm mb-2 text-start">Arena Breakout</p>
                                                </div>
                                                <div class="d-flex flex-wrap gap-2 align-items-center pb-2 mb-1 px-3 text-nowrap">
                                                    <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 px-3 border-top text-nowrap">
                                                <span class="fs-xs text-muted">
                                                    <i class="far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 1.4 rb+
                                                </span>
                                            </div>
                                        </div>                    </div>
                                </a>
                                <a data-id="1528138896" href=\"{{ route('product.show', ['voucher-bstation', '1528138896']) }}\" title="Topup Bstation Voucher">
                                    <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                        <div class="px-lg-3 mb-2">
                                            <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/e6665567-18b1-4698-8a57-b16935cd3f02.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            </div>
                                        </div>
                                        <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                    <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">Bstation Voucher</p>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 border-top text-nowrap" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                <span class="text-muted" style="font-size: 11px;">
                                                    <i class="d-none d-md-inline-block far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 955
                                                </span>
                                            </div>
                                        </div>                        <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="px-3 mb-1">
                                                    <p class="text-dark fw-medium fs-sm mb-2 text-start">Bstation Voucher</p>
                                                </div>
                                                <div class="d-flex flex-wrap gap-2 align-items-center pb-2 mb-1 px-3 text-nowrap">
                                                    <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 px-3 border-top text-nowrap">
                                                <span class="fs-xs text-muted">
                                                    <i class="far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 955
                                                </span>
                                            </div>
                                        </div>                    </div>
                                </a>
                                <a data-id="1528875201" href=\"{{ route('product.show', ['football-master-2', '1528875201']) }}\" title="Topup Football Master 2">
                                    <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                        <div class="px-lg-3 mb-2">
                                            <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/7e343e09-2814-41b6-a5d1-670e93b572b6.jpg?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            </div>
                                        </div>
                                        <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                    <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">Football Master 2</p>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 border-top text-nowrap" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                <span class="text-muted" style="font-size: 11px;">
                                                    <i class="d-none d-md-inline-block far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 2.6 rb+
                                                </span>
                                            </div>
                                        </div>                        <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="px-3 mb-1">
                                                    <p class="text-dark fw-medium fs-sm mb-2 text-start">Football Master 2</p>
                                                </div>
                                                <div class="d-flex flex-wrap gap-2 align-items-center pb-2 mb-1 px-3 text-nowrap">
                                                    <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 px-3 border-top text-nowrap">
                                                <span class="fs-xs text-muted">
                                                    <i class="far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 2.6 rb+
                                                </span>
                                            </div>
                                        </div>                    </div>
                                </a>
                                <a data-id="1528385129" href=\"{{ route('product.show', ['honor-of-kings', '1528385129']) }}\" title="Topup Honor of Kings">
                                    <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                        <div class="px-lg-3 mb-2">
                                            <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/18baee53-a677-48aa-af20-63a8326d773b.jpg?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            </div>
                                        </div>
                                        <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                    <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">Honor of Kings</p>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 border-top text-nowrap" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                <span class="text-muted" style="font-size: 11px;">
                                                    <i class="d-none d-md-inline-block far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 10rb+
                                                </span>
                                            </div>
                                        </div>                        <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="px-3 mb-1">
                                                    <p class="text-dark fw-medium fs-sm mb-2 text-start">Honor of Kings</p>
                                                </div>
                                                <div class="d-flex flex-wrap gap-2 align-items-center pb-2 mb-1 px-3 text-nowrap">
                                                    <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 px-3 border-top text-nowrap">
                                                <span class="fs-xs text-muted">
                                                    <i class="far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 10rb+
                                                </span>
                                            </div>
                                        </div>                    </div>
                                </a>
                                <a data-id="1528693523" href=\"{{ route('product.show', ['mobile-legends-malaysia', '1528693523']) }}\" title="Topup Mobile Legends Malaysia">
                                    <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                        <div class="px-lg-3 mb-2">
                                            <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/1f067106-428b-43e6-ad80-48a61df0a3a8.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            </div>
                                        </div>
                                        <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                    <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">Mobile Legends Malaysia</p>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 border-top text-nowrap" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                <span class="text-muted" style="font-size: 11px;">
                                                    <i class="d-none d-md-inline-block far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 1.6 rb+
                                                </span>
                                            </div>
                                        </div>                        <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="px-3 mb-2">
                                                    <p class="text-dark fw-medium fs-sm mb-2 text-start">Mobile Legends Malaysia</p>
                                                </div>
                                            </div>
                                            <div class="d-flex py-2 px-3 border-top text-nowrap">
                                                <span class="fs-xs text-muted">
                                                    <i class="far fa-fw fa-cart-shopping text-muted me-1"></i>Terjual 1.6 rb+
                                                </span>
                                            </div>
                                        </div>                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>                <div id="category_5050334479667a6b44414569545762507366615857413d3d" class="d-flex flex-column mb-5" style="scroll-margin-top: 100px;">
                    <div class="content my-0 py-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mx-2 mx-lg-4">
                                <div class="d-flex align-items-top">
                                    <img class="lazy me-2 me-lg-3" style="width: 27px; height: 1.6rem; object-fit: cover;" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/category-icons/55a5e6e1-ccc7-4e95-b160-b2d6228a8fba.png" alt="Produk Harian">
                                    <h3 class="mb-0">Produk Harian</h3>
                                </div>
                            </div>
                        </div>
                        <div class="mx-2 mx-lg-4">
                            <div class="row gy-4 row-cols-3 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 row-cols-xl-6 pt-4 pb-2 gx-lg-3">
                                <a data-id="1528543830" href="{{ route('category.show', 'E-Wallet') }}" title="Topup E-Wallet">
                                    <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                        <div class="px-lg-3 mb-2">
                                            <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/shortcut-tiles/f09f49b0-e31a-4bc1-aaef-9014df77149a.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            </div>
                                        </div>
                                        <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                    <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">E-Wallet</p>
                                                </div>
                                            </div>
                                        </div>                        <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="px-3 mb-1">
                                                    <p class="text-dark fw-medium fs-sm mb-2 text-start">E-Wallet</p>
                                                </div>
                                                <div class="d-flex flex-wrap gap-2 align-items-center pb-3 px-3 text-nowrap">
                                                    <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Instan</span>
                                                </div>
                                            </div>
                                        </div>                    </div>
                                </a>
                                <a data-id="1528768154" href="category/Isi%20Pulsa.html" title="Topup Isi Pulsa">
                                    <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                        <div class="px-lg-3 mb-2">
                                            <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/shortcut-tiles/17aa213c-46d4-48de-8daf-97d33febe19d.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            </div>
                                        </div>
                                        <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                    <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">Isi Pulsa</p>
                                                </div>
                                            </div>
                                        </div>                        <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="px-3 mb-1">
                                                    <p class="text-dark fw-medium fs-sm mb-2 text-start">Isi Pulsa</p>
                                                </div>
                                                <div class="d-flex flex-wrap gap-2 align-items-center pb-3 px-3 text-nowrap">
                                                    <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Instan</span>
                                                </div>
                                            </div>
                                        </div>                    </div>
                                </a>
                                <a data-id="1528659351" href=\"{{ route('product.show', ['token-listrik-pln', '1528659351']) }}\" title="Topup Token Listrik PLN">
                                    <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                        <div class="px-lg-3 mb-2">
                                            <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/ef669c5c-1046-4bcf-b957-2b5e5d9d2b52.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            </div>
                                        </div>
                                        <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                    <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">Token Listrik PLN</p>
                                                </div>
                                            </div>
                                        </div>                        <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="px-3 mb-1">
                                                    <p class="text-dark fw-medium fs-sm mb-2 text-start">Token Listrik PLN</p>
                                                </div>
                                                <div class="d-flex flex-wrap gap-2 align-items-center pb-3 px-3 text-nowrap">
                                                    <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                </div>
                                            </div>
                                        </div>                    </div>
                                </a>
                                <a data-id="1528104255" href="category/Paket%20Internet.html" title="Topup Paket Internet">
                                    <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                        <div class="px-lg-3 mb-2">
                                            <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/shortcut-tiles/eb23142b-0e98-4ef6-ba4d-de410bb38184.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            </div>
                                        </div>
                                        <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                    <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">Paket Internet</p>
                                                </div>
                                            </div>
                                        </div>                        <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="px-3 mb-1">
                                                    <p class="text-dark fw-medium fs-sm mb-2 text-start">Paket Internet</p>
                                                </div>
                                                <div class="d-flex flex-wrap gap-2 align-items-center pb-3 px-3 text-nowrap">
                                                    <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Instan</span>
                                                </div>
                                            </div>
                                        </div>                    </div>
                                </a>
                                <a data-id="1528665218" href="category/Tambah%20Masa%20Aktif.html" title="Topup Tambah Masa Aktif">
                                    <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                        <div class="px-lg-3 mb-2">
                                            <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/shortcut-tiles/13344c3d-f525-47a7-91d0-10f0de4e3524.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            </div>
                                        </div>
                                        <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                    <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">Tambah Masa Aktif</p>
                                                </div>
                                            </div>
                                        </div>                        <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="px-3 mb-1">
                                                    <p class="text-dark fw-medium fs-sm mb-2 text-start">Tambah Masa Aktif</p>
                                                </div>
                                                <div class="d-flex flex-wrap gap-2 align-items-center pb-3 px-3 text-nowrap">
                                                    <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Instan</span>
                                                </div>
                                            </div>
                                        </div>                    </div>
                                </a>
                                <a data-id="1528405943" href="category/Paket%20SMS%20%26%20Telepon.html" title="Topup Paket SMS &amp; Telepon">
                                    <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                        <div class="px-lg-3 mb-2">
                                            <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/shortcut-tiles/28c52d32-c5ef-4e8b-8c0b-ab28fa6e61bc.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                            </div>
                                        </div>
                                        <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                    <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">Paket SMS &amp; Telepon</p>
                                                </div>
                                            </div>
                                        </div>                        <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                            <div class="flex-grow-1">
                                                <div class="px-3 mb-1">
                                                    <p class="text-dark fw-medium fs-sm mb-2 text-start">Paket SMS &amp; Telepon</p>
                                                </div>
                                                <div class="d-flex flex-wrap gap-2 align-items-center pb-3 px-3 text-nowrap">
                                                    <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Instan</span>
                                                </div>
                                            </div>
                                        </div>                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>                <div id="category_4534352b564e445256654d677a7a72467743656963413d3d" class="d-flex flex-column mb-5" style="scroll-margin-top: 100px;">
                    <div class="content py-0 my-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mx-2 mx-lg-4">
                                <div class="d-flex align-items-top">
                                    <img class="lazy me-2 me-lg-3" style="width: 27px; height: 1.6rem; object-fit: cover;" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/category-icons/30328403-1815-403e-879a-712333048a48.png" alt="E-Wallet">
                                    <h3 class="mb-0">E-Wallet</h3>
                                </div>
                                <p class="fs-sm mb-0" style="color: #606060;">Isi saldo GoPay pakai Dana?</p>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative pb-2">
                        <div class="content py-0 my-0">
                            <div class="mx-2 mx-lg-4">
                                <div class="horizon-scroll-control overflow-auto disable-scrollbars" data-sign="4534352b564e445256654d677a7a72467743656963413d3d">
                                    <div class="pt-4">
                                        <div class="row flex-nowrap row-cols-3 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 row-cols-xl-6 gx-lg-3">
                                            <a data-id="1528296085" class="horizon-scroll-item mb-4" href=\"{{ route('product.show', ['shopeepay', '1528296085']) }}\" title="Topup ShopeePay" title="Topup ShopeePay">
                                                <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                                    <div class="px-lg-3 mb-2">
                                                        <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/2be9f425-1303-4094-8d93-73aa02698c37.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                                        <div class="flex-grow-1">
                                                            <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                                <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">ShopeePay</p>
                                                            </div>
                                                        </div>
                                                    </div>                                    <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                                        <div class="flex-grow-1">
                                                            <div class="px-3 mb-1">
                                                                <p class="text-dark fw-medium fs-sm mb-2 text-start">ShopeePay</p>
                                                            </div>
                                                            <div class="d-flex flex-wrap gap-2 align-items-center pb-3 px-3 text-nowrap">
                                                                <span class="rounded bg-warning-light text-warning fs-xs fw-medium" style="padding: 1px 4px">Gimkoin</span>
                                                                <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                            </div>
                                                        </div>
                                                    </div>                                </div>
                                            </a>
                                            <a data-id="1528543830" class="horizon-scroll-item mb-4" href=\"{{ route('product.show', ['dana', '1528543830']) }}\" title="Topup Dana" title="Topup Dana">
                                                <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                                    <div class="px-lg-3 mb-2">
                                                        <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/28550b75-ee02-4189-aa69-2d03b2ca513f.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                                        <div class="flex-grow-1">
                                                            <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                                <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">Dana</p>
                                                            </div>
                                                        </div>
                                                    </div>                                    <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                                        <div class="flex-grow-1">
                                                            <div class="px-3 mb-1">
                                                                <p class="text-dark fw-medium fs-sm mb-2 text-start">Dana</p>
                                                            </div>
                                                            <div class="d-flex flex-wrap gap-2 align-items-center pb-3 px-3 text-nowrap">
                                                                <span class="rounded bg-warning-light text-warning fs-xs fw-medium" style="padding: 1px 4px">Gimkoin</span>
                                                                <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                            </div>
                                                        </div>
                                                    </div>                                </div>
                                            </a>
                                            <a data-id="1528812696" class="horizon-scroll-item mb-4" href=\"{{ route('product.show', ['gopay', '1528812696']) }}\" title="Topup GoPay" title="Topup GoPay">
                                                <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                                    <div class="px-lg-3 mb-2">
                                                        <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/2d721537-2506-4bc5-9d27-3bdc3f1f41e2.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                                        <div class="flex-grow-1">
                                                            <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                                <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">GoPay</p>
                                                            </div>
                                                        </div>
                                                    </div>                                    <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                                        <div class="flex-grow-1">
                                                            <div class="px-3 mb-1">
                                                                <p class="text-dark fw-medium fs-sm mb-2 text-start">GoPay</p>
                                                            </div>
                                                            <div class="d-flex flex-wrap gap-2 align-items-center pb-3 px-3 text-nowrap">
                                                                <span class="rounded bg-warning-light text-warning fs-xs fw-medium" style="padding: 1px 4px">Gimkoin</span>
                                                                <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                            </div>
                                                        </div>
                                                    </div>                                </div>
                                            </a>
                                            <a data-id="1528134850" class="horizon-scroll-item mb-4" href=\"{{ route('product.show', ['ovo', '1528134850']) }}\" title="Topup OVO" title="Topup OVO">
                                                <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                                    <div class="px-lg-3 mb-2">
                                                        <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/01cdd085-9486-4d5b-97b3-66993d346901.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                                        <div class="flex-grow-1">
                                                            <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                                <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">OVO</p>
                                                            </div>
                                                        </div>
                                                    </div>                                    <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                                        <div class="flex-grow-1">
                                                            <div class="px-3 mb-1">
                                                                <p class="text-dark fw-medium fs-sm mb-2 text-start">OVO</p>
                                                            </div>
                                                            <div class="d-flex flex-wrap gap-2 align-items-center pb-3 px-3 text-nowrap">
                                                                <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                            </div>
                                                        </div>
                                                    </div>                                </div>
                                            </a>
                                            <a data-id="1528549889" class="horizon-scroll-item mb-4" href=\"{{ route('product.show', ['maxim-driver', '1528549889']) }}\" title="Topup Maxim Driver" title="Topup Maxim Driver">
                                                <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                                    <div class="px-lg-3 mb-2">
                                                        <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/5c340a52-b5ee-4444-932d-3f47123d642d.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                                        <div class="flex-grow-1">
                                                            <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                                <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">Maxim Driver</p>
                                                            </div>
                                                        </div>
                                                    </div>                                    <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                                        <div class="flex-grow-1">
                                                            <div class="px-3 mb-1">
                                                                <p class="text-dark fw-medium fs-sm mb-2 text-start">Maxim Driver</p>
                                                            </div>
                                                            <div class="d-flex flex-wrap gap-2 align-items-center pb-3 px-3 text-nowrap">
                                                                <span class="rounded bg-warning-light text-warning fs-xs fw-medium" style="padding: 1px 4px">Gimkoin</span>
                                                                <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                            </div>
                                                        </div>
                                                    </div>                                </div>
                                            </a>
                                            <a data-id="1528050491" class="horizon-scroll-item mb-4" href=\"{{ route('product.show', ['gopay-Driver-', '1528050491']) }}\" title="Topup Gopay Driver" title="Topup Gopay Driver">
                                                <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                                    <div class="px-lg-3 mb-2">
                                                        <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/21d3abae-2151-43e4-b2e4-4de9b9aeb66f.jpg?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                                        <div class="flex-grow-1">
                                                            <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                                <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">Gopay Driver</p>
                                                            </div>
                                                        </div>
                                                    </div>                                    <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                                        <div class="flex-grow-1">
                                                            <div class="px-3 mb-2">
                                                                <p class="text-dark fw-medium fs-sm mb-2 text-start">Gopay Driver</p>
                                                            </div>
                                                        </div>
                                                    </div>                                </div>
                                            </a>
                                            <a data-id="1528837508" class="horizon-scroll-item mb-4" href=\"{{ route('product.show', ['linkaja', '1528837508']) }}\" title="Topup Linkaja" title="Topup Linkaja">
                                                <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                                    <div class="px-lg-3 mb-2">
                                                        <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/460e6393-786e-433d-b73a-6a2d8cdab251.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                                        <div class="flex-grow-1">
                                                            <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                                <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">Linkaja</p>
                                                            </div>
                                                        </div>
                                                    </div>                                    <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                                        <div class="flex-grow-1">
                                                            <div class="px-3 mb-2">
                                                                <p class="text-dark fw-medium fs-sm mb-2 text-start">Linkaja</p>
                                                            </div>
                                                        </div>
                                                    </div>                                </div>
                                            </a>
                                            <a data-id="1528681626" class="horizon-scroll-item mb-4" href=\"{{ route('product.show', ['grab-driver-', '1528681626']) }}\" title="Topup Grab Driver Voucher" title="Topup Grab Driver Voucher">
                                                <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                                    <div class="px-lg-3 mb-2">
                                                        <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/f3a0668c-e52f-4697-94a0-c77cca89a779.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                                        <div class="flex-grow-1">
                                                            <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                                <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">Grab Driver Voucher</p>
                                                            </div>
                                                        </div>
                                                    </div>                                    <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                                        <div class="flex-grow-1">
                                                            <div class="px-3 mb-2">
                                                                <p class="text-dark fw-medium fs-sm mb-2 text-start">Grab Driver Voucher</p>
                                                            </div>
                                                        </div>
                                                    </div>                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute top-50 start-0 translate-middle-y" style="z-index: 800;">
                            <div class="ms-2 ms-md-3 ms-lg-4 ms-xl-6 ps-xl-2 ">
                                <button id="scroll-control-left-4534352b564e445256654d677a7a72467743656963413d3d" type="button" class="btn ratio ratio-1x1 bg-body-light p-4 rounded rounded-circle block m-0 p-0 block-bordered block-fx-shadow animated bounceIn d-none" style="cursor: pointer;">
                                    <div>
                                        <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                            <i class="far fa-fw fa-lg fa-chevron-left text-muted"></i>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <div class="position-absolute top-50 end-0 translate-middle-y" style="z-index: 800;">
                            <div class="me-2 me-md-3 me-lg-4 me-xl-6 pe-xl-2 ">
                                <button id="scroll-control-right-4534352b564e445256654d677a7a72467743656963413d3d" type="button" class="btn ratio ratio-1x1 bg-body-light p-4 rounded rounded-circle block m-0 p-0 block-bordered block-fx-shadow animated bounceIn d-none" style="cursor: pointer;">
                                    <div>
                                        <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                            <i class="far fa-fw fa-lg fa-chevron-right text-muted"></i>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>    </div>
                </div>                <div id="category_73756d7679785a5a364a514e4b6a46724e6d735271673d3d" class="d-flex flex-column mb-5" style="scroll-margin-top: 100px;">
                    <div class="content py-0 my-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mx-2 mx-lg-4">
                                <div class="d-flex align-items-top">
                                    <img class="lazy me-2 me-lg-3" style="width: 27px; height: 1.6rem; object-fit: cover;" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/category-icons/562478a4-afba-4a6a-acd9-02954df15bed.png" alt="Pulsa">
                                    <h3 class="mb-0">Pulsa</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative pb-2">
                        <div class="content py-0 my-0">
                            <div class="mx-2 mx-lg-4">
                                <div class="horizon-scroll-control overflow-auto disable-scrollbars" data-sign="73756d7679785a5a364a514e4b6a46724e6d735271673d3d">
                                    <div class="pt-4">
                                        <div class="row flex-nowrap row-cols-3 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 row-cols-xl-6 gx-lg-3">
                                            <a data-id="1528768154" class="horizon-scroll-item mb-4" href=\"{{ route('product.show', ['telkomsel', '1528768154']) }}\" title="Topup Telkomsel" title="Topup Telkomsel">
                                                <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                                    <div class="px-lg-3 mb-2">
                                                        <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/7b91b6b1-b983-4b74-b93f-75acce75f3fc.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                                        <div class="flex-grow-1">
                                                            <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                                <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">Telkomsel</p>
                                                            </div>
                                                        </div>
                                                    </div>                                    <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                                        <div class="flex-grow-1">
                                                            <div class="px-3 mb-1">
                                                                <p class="text-dark fw-medium fs-sm mb-2 text-start">Telkomsel</p>
                                                            </div>
                                                            <div class="d-flex flex-wrap gap-2 align-items-center pb-3 px-3 text-nowrap">
                                                                <span class="rounded bg-warning-light text-warning fs-xs fw-medium" style="padding: 1px 4px">Gimkoin</span>
                                                                <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                            </div>
                                                        </div>
                                                    </div>                                </div>
                                            </a>
                                            <a data-id="1528542016" class="horizon-scroll-item mb-4" href=\"{{ route('product.show', ['indosat-im3', '1528542016']) }}\" title="Topup Indosat IM3" title="Topup Indosat IM3">
                                                <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                                    <div class="px-lg-3 mb-2">
                                                        <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/4b2b36af-b0fc-4558-9978-74b1986a7063.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                                        <div class="flex-grow-1">
                                                            <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                                <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">Indosat IM3</p>
                                                            </div>
                                                        </div>
                                                    </div>                                    <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                                        <div class="flex-grow-1">
                                                            <div class="px-3 mb-1">
                                                                <p class="text-dark fw-medium fs-sm mb-2 text-start">Indosat IM3</p>
                                                            </div>
                                                            <div class="d-flex flex-wrap gap-2 align-items-center pb-3 px-3 text-nowrap">
                                                                <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                            </div>
                                                        </div>
                                                    </div>                                </div>
                                            </a>
                                            <a data-id="1528761408" class="horizon-scroll-item mb-4" href=\"{{ route('product.show', ['xl-pulsa', '1528761408']) }}\" title="Topup XL Pulsa" title="Topup XL Pulsa">
                                                <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                                    <div class="px-lg-3 mb-2">
                                                        <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/f9829a99-6cb4-4123-925d-d76bc9f6f978.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                                        <div class="flex-grow-1">
                                                            <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                                <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">XL Pulsa</p>
                                                            </div>
                                                        </div>
                                                    </div>                                    <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                                        <div class="flex-grow-1">
                                                            <div class="px-3 mb-1">
                                                                <p class="text-dark fw-medium fs-sm mb-2 text-start">XL Pulsa</p>
                                                            </div>
                                                            <div class="d-flex flex-wrap gap-2 align-items-center pb-3 px-3 text-nowrap">
                                                                <span class="rounded bg-warning-light text-warning fs-xs fw-medium" style="padding: 1px 4px">Gimkoin</span>
                                                                <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                            </div>
                                                        </div>
                                                    </div>                                </div>
                                            </a>
                                            <a data-id="1528027223" class="horizon-scroll-item mb-4" href=\"{{ route('product.show', ['axis', '1528027223']) }}\" title="Topup AXIS" title="Topup AXIS">
                                                <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                                    <div class="px-lg-3 mb-2">
                                                        <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/ef4b4b8d-302f-4b58-8a32-7766ebfbf07e.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                                        <div class="flex-grow-1">
                                                            <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                                <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">AXIS</p>
                                                            </div>
                                                        </div>
                                                    </div>                                    <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                                        <div class="flex-grow-1">
                                                            <div class="px-3 mb-1">
                                                                <p class="text-dark fw-medium fs-sm mb-2 text-start">AXIS</p>
                                                            </div>
                                                            <div class="d-flex flex-wrap gap-2 align-items-center pb-3 px-3 text-nowrap">
                                                                <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                            </div>
                                                        </div>
                                                    </div>                                </div>
                                            </a>
                                            <a data-id="1528658729" class="horizon-scroll-item mb-4" href=\"{{ route('product.show', ['tri', '1528658729']) }}\" title="Topup Tri" title="Topup Tri">
                                                <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                                    <div class="px-lg-3 mb-2">
                                                        <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/0e0383e1-54bc-459c-8fbf-449634b04321.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                                        <div class="flex-grow-1">
                                                            <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                                <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">Tri</p>
                                                            </div>
                                                        </div>
                                                    </div>                                    <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                                        <div class="flex-grow-1">
                                                            <div class="px-3 mb-1">
                                                                <p class="text-dark fw-medium fs-sm mb-2 text-start">Tri</p>
                                                            </div>
                                                            <div class="d-flex flex-wrap gap-2 align-items-center pb-3 px-3 text-nowrap">
                                                                <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                            </div>
                                                        </div>
                                                    </div>                                </div>
                                            </a>
                                            <a data-id="1528707010" class="horizon-scroll-item mb-4" href=\"{{ route('product.show', ['smartfren', '1528707010']) }}\" title="Topup SMARTFREN" title="Topup SMARTFREN">
                                                <div class="d-flex flex-column product-tile-idea-card bg-body-extra-light h-100 pt-lg-3 overflow-hidden">
                                                    <div class="px-lg-3 mb-2">
                                                        <div class="lazy product-tile-idea cover-product position-relative" data-bg="https://cdn.topupgim.com/product-tiles/dfd8d57d-8582-46e4-8142-66f02b727f3f.png?w=200" style="background-image: url('https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex d-md-none flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                                        <div class="flex-grow-1">
                                                            <div class="mb-2" style="padding-left: 0.75rem; padding-right: 0.75rem;">
                                                                <p class="text-dark fw-medium mb-2 text-start" style="font-size: 13px;">SMARTFREN</p>
                                                            </div>
                                                        </div>
                                                    </div>                                    <div class="d-none d-md-flex flex-grow-1 d-flex flex-column" style="margin-top: -2px;">
                                                        <div class="flex-grow-1">
                                                            <div class="px-3 mb-1">
                                                                <p class="text-dark fw-medium fs-sm mb-2 text-start">SMARTFREN</p>
                                                            </div>
                                                            <div class="d-flex flex-wrap gap-2 align-items-center pb-3 px-3 text-nowrap">
                                                                <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                            </div>
                                                        </div>
                                                    </div>                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute top-50 start-0 translate-middle-y" style="z-index: 800;">
                            <div class="ms-2 ms-md-3 ms-lg-4 ms-xl-6 ps-xl-2 ">
                                <button id="scroll-control-left-73756d7679785a5a364a514e4b6a46724e6d735271673d3d" type="button" class="btn ratio ratio-1x1 bg-body-light p-4 rounded rounded-circle block m-0 p-0 block-bordered block-fx-shadow animated bounceIn d-none" style="cursor: pointer;">
                                    <div>
                                        <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                            <i class="far fa-fw fa-lg fa-chevron-left text-muted"></i>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <div class="position-absolute top-50 end-0 translate-middle-y" style="z-index: 800;">
                            <div class="me-2 me-md-3 me-lg-4 me-xl-6 pe-xl-2 ">
                                <button id="scroll-control-right-73756d7679785a5a364a514e4b6a46724e6d735271673d3d" type="button" class="btn ratio ratio-1x1 bg-body-light p-4 rounded rounded-circle block m-0 p-0 block-bordered block-fx-shadow animated bounceIn d-none" style="cursor: pointer;">
                                    <div>
                                        <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                            <i class="far fa-fw fa-lg fa-chevron-right text-muted"></i>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>    </div>
                </div>                <div id="category_6a696654526d47614936755976747971366a523830513d3d" class="d-flex flex-column mb-5" style="scroll-margin-top: 100px;">
                    <div class="content py-0 my-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mx-2 mx-lg-4">
                                <div class="d-flex align-items-top">
                                    <img class="lazy me-2 me-lg-3" style="width: 27px; height: 1.6rem; object-fit: cover;" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/category-icons/f7121621-7f87-4a0d-acf6-4f7498a750ed.png" alt="Game">
                                    <h3 class="mb-0">Game</h3>
                                </div>
                                <p class="fs-sm mb-0" style="color: #606060;">Top Up Game Harga Lebih Hemat</p>
                            </div>
                            <button type="button" class="btn btn-sm btn-alt-secondary" onclick="location.href='category/Game.html';">
                                Lainnya <i class="fa fa-fw fa-arrow-right text-muted"></i>
                            </button>
                        </div>
                    </div>
                    <div class="position-relative pb-2">
                        <div class="content py-0 my-0">
                            <div class="mx-2 mx-lg-4">
                                <div class="horizon-scroll-control overflow-auto disable-scrollbars" data-sign="6a696654526d47614936755976747971366a523830513d3d">
                                    <div class="d-flex pt-4">
                                        <div class="list-group d-flex flex-column gap-3 me-3">
                                            <a class="horizon-scroll-item list-group-item list-group-item-action d-flex align-items-center p-3 border" data-id="1528919312" href=\"{{ route('product.show', ['call-of-duty-mobile', '1528919312']) }}\" title="Topup Call of Duty Mobile" title="Topup Call of Duty Mobile" style="border-radius: 12px; min-width: 280px;">
                                                <img class="block block-fx-shadow block-bordered p-0 my-0 ms-0 lazy  me-3" data-src="https://cdn.topupgim.com/product-tiles/234ebffe-a86e-49f2-a6d6-0227e68b8c94.png?w=200" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" style="width: 64px; height: 64px; border-radius: 12px;" />
                                                <div class="d-flex flex-column justify-content-center gap-2">
                                                    <span class="text-dark text-nowrap">Call of Duty Mobile</span>
                                                    <div class="d-flex gap-2 align-items-center text-nowrap">
                                                        <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="horizon-scroll-item list-group-item list-group-item-action d-flex align-items-center p-3 border" data-id="1528555434" href=\"{{ route('product.show', ['free-fire', '1528555434']) }}\" title="Topup Free Fire" title="Topup Free Fire" style="border-radius: 12px; min-width: 280px;">
                                                <img class="block block-fx-shadow block-bordered p-0 my-0 ms-0 lazy  me-3" data-src="https://cdn.topupgim.com/product-tiles/1d2a30ea-987b-452c-a658-8fae63176cc6.png?w=200" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" style="width: 64px; height: 64px; border-radius: 12px;" />
                                                <div class="d-flex flex-column justify-content-center gap-2">
                                                    <span class="text-dark text-nowrap">Free Fire</span>
                                                    <div class="d-flex gap-2 align-items-center text-nowrap">
                                                        <span class="rounded bg-danger-light text-danger fs-xs fw-medium" style="padding: 1px 4px">Kode Promo</span>
                                                        <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="horizon-scroll-item list-group-item list-group-item-action d-flex align-items-center p-3 border" data-id="1528787297" href=\"{{ route('product.show', ['genshin-impact', '1528787297']) }}\" title="Topup Genshin Impact" title="Topup Genshin Impact" style="border-radius: 12px; min-width: 280px;">
                                                <img class="block block-fx-shadow block-bordered p-0 my-0 ms-0 lazy  me-3" data-src="https://cdn.topupgim.com/product-tiles/764918a1-b6f5-48ea-99a6-c40f04770add.png?w=200" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" style="width: 64px; height: 64px; border-radius: 12px;" />
                                                <div class="d-flex flex-column justify-content-center gap-2">
                                                    <span class="text-dark text-nowrap">Genshin Impact</span>
                                                    <div class="d-flex gap-2 align-items-center text-nowrap">
                                                        <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group d-flex flex-column gap-3 me-3">
                                            <a class="horizon-scroll-item list-group-item list-group-item-action d-flex align-items-center p-3 border" data-id="1528242362" href=\"{{ route('product.show', ['hago', '1528242362']) }}\" title="Topup HAGO" title="Topup HAGO" style="border-radius: 12px; min-width: 280px;">
                                                <img class="block block-fx-shadow block-bordered p-0 my-0 ms-0 lazy  me-3" data-src="https://cdn.topupgim.com/product-tiles/4c6e19a1-1aaa-4bb4-8f3d-c321a31a250e.png?w=200" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" style="width: 64px; height: 64px; border-radius: 12px;" />
                                                <div class="d-flex flex-column justify-content-center gap-2">
                                                    <span class="text-dark text-nowrap">HAGO</span>
                                                    <div class="d-flex gap-2 align-items-center text-nowrap">
                                                        <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="horizon-scroll-item list-group-item list-group-item-action d-flex align-items-center p-3 border" data-id="1528743885" href=\"{{ route('product.show', ['honkai-impact-3', '1528743885']) }}\" title="Topup Honkai Impact 3" title="Topup Honkai Impact 3" style="border-radius: 12px; min-width: 280px;">
                                                <img class="block block-fx-shadow block-bordered p-0 my-0 ms-0 lazy  me-3" data-src="https://cdn.topupgim.com/product-tiles/9f05942b-f1ce-4766-9623-4abdb2567026.png?w=200" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" style="width: 64px; height: 64px; border-radius: 12px;" />
                                                <div class="d-flex flex-column justify-content-center gap-2">
                                                    <span class="text-dark text-nowrap">Honkai Impact 3</span>
                                                    <div class="d-flex gap-2 align-items-center text-nowrap">
                                                        <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="horizon-scroll-item list-group-item list-group-item-action d-flex align-items-center p-3 border" data-id="1528175611" href=\"{{ route('product.show', ['league-of-legends-wild-rift', '1528175611']) }}\" title="Topup League of Legends: Wild Rift" title="Topup League of Legends: Wild Rift" style="border-radius: 12px; min-width: 280px;">
                                                <img class="block block-fx-shadow block-bordered p-0 my-0 ms-0 lazy  me-3" data-src="https://cdn.topupgim.com/product-tiles/9da70036-97ac-4c07-9780-c87e908b18dd.png?w=200" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" style="width: 64px; height: 64px; border-radius: 12px;" />
                                                <div class="d-flex flex-column justify-content-center gap-2">
                                                    <span class="text-dark text-nowrap">League of Legends: Wild Rift</span>
                                                    <div class="d-flex gap-2 align-items-center text-nowrap">
                                                        <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group d-flex flex-column gap-3 me-3">
                                            <a class="horizon-scroll-item list-group-item list-group-item-action d-flex align-items-center p-3 border" data-id="1528051138" href=\"{{ route('product.show', ['lifeafter', '1528051138']) }}\" title="Topup LifeAfter" title="Topup LifeAfter" style="border-radius: 12px; min-width: 280px;">
                                                <img class="block block-fx-shadow block-bordered p-0 my-0 ms-0 lazy  me-3" data-src="https://cdn.topupgim.com/product-tiles/db38a9e1-d5a7-4914-87e5-21dba5c5247f.png?w=200" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" style="width: 64px; height: 64px; border-radius: 12px;" />
                                                <div class="d-flex flex-column justify-content-center gap-2">
                                                    <span class="text-dark text-nowrap">LifeAfter</span>
                                                    <div class="d-flex gap-2 align-items-center text-nowrap">
                                                        <span class="rounded bg-xsmooth-lighter text-xsmooth fs-xs fw-medium" style="padding: 1px 4px">Diskon</span>
                                                        <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="horizon-scroll-item list-group-item list-group-item-action d-flex align-items-center p-3 border" data-id="1528378309" href=\"{{ route('product.show', ['mobile-legends', '1528378309']) }}\" title="Topup Mobile Legends" title="Topup Mobile Legends" style="border-radius: 12px; min-width: 280px;">
                                                <img class="block block-fx-shadow block-bordered p-0 my-0 ms-0 lazy  me-3" data-src="https://cdn.topupgim.com/product-tiles/4a6c27d3-12f4-42d0-a153-65588068ff2a.png?w=200" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" style="width: 64px; height: 64px; border-radius: 12px;" />
                                                <div class="d-flex flex-column justify-content-center gap-2">
                                                    <span class="text-dark text-nowrap">Mobile Legends</span>
                                                    <div class="d-flex gap-2 align-items-center text-nowrap">
                                                        <span class="rounded bg-danger-light text-danger fs-xs fw-medium" style="padding: 1px 4px">Kode Promo</span>
                                                        <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="horizon-scroll-item list-group-item list-group-item-action d-flex align-items-center p-3 border" data-id="1528582047" href=\"{{ route('product.show', ['mu-origin-2', '1528582047']) }}\" title="Topup MU Origin 2" title="Topup MU Origin 2" style="border-radius: 12px; min-width: 280px;">
                                                <img class="block block-fx-shadow block-bordered p-0 my-0 ms-0 lazy  me-3" data-src="https://cdn.topupgim.com/product-tiles/4c3e1c46-4326-4c9d-9055-b7d4a73178d5.png?w=200" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" style="width: 64px; height: 64px; border-radius: 12px;" />
                                                <div class="d-flex flex-column justify-content-center gap-2">
                                                    <span class="text-dark text-nowrap">MU Origin 2</span>
                                                    <div class="d-flex gap-2 align-items-center text-nowrap">
                                                        <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group d-flex flex-column gap-3 me-3">
                                            <a class="horizon-scroll-item list-group-item list-group-item-action d-flex align-items-center p-3 border" data-id="1528072602" href=\"{{ route('product.show', ['mu-origin-3', '1528072602']) }}\" title="Topup MU ORIGIN 3" title="Topup MU ORIGIN 3" style="border-radius: 12px; min-width: 280px;">
                                                <img class="block block-fx-shadow block-bordered p-0 my-0 ms-0 lazy  me-3" data-src="https://cdn.topupgim.com/product-tiles/ee148afa-eae0-4dac-a9e7-12ef3e05e9a1.png?w=200" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" style="width: 64px; height: 64px; border-radius: 12px;" />
                                                <div class="d-flex flex-column justify-content-center gap-2">
                                                    <span class="text-dark text-nowrap">MU ORIGIN 3</span>
                                                    <div class="d-flex gap-2 align-items-center text-nowrap">
                                                        <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="horizon-scroll-item list-group-item list-group-item-action d-flex align-items-center p-3 border" data-id="1528036161" href=\"{{ route('product.show', ['pubgm', '1528036161']) }}\" title="Topup PUBGM Global" title="Topup PUBGM Global" style="border-radius: 12px; min-width: 280px;">
                                                <img class="block block-fx-shadow block-bordered p-0 my-0 ms-0 lazy  me-3" data-src="https://cdn.topupgim.com/product-tiles/7c8630ec-8447-45f0-85b6-5ae6a860460d.png?w=200" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" style="width: 64px; height: 64px; border-radius: 12px;" />
                                                <div class="d-flex flex-column justify-content-center gap-2">
                                                    <span class="text-dark text-nowrap">PUBGM Global</span>
                                                    <div class="d-flex gap-2 align-items-center text-nowrap">
                                                        <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="horizon-scroll-item list-group-item list-group-item-action d-flex align-items-center p-3 border" data-id="1528615283" href=\"{{ route('product.show', ['point-blank', '1528615283']) }}\" title="Topup Point Blank" title="Topup Point Blank" style="border-radius: 12px; min-width: 280px;">
                                                <img class="block block-fx-shadow block-bordered p-0 my-0 ms-0 lazy  me-3" data-src="https://cdn.topupgim.com/product-tiles/7dc8cd98-7cc4-4b73-ad96-e9bd2d585372.png?w=200" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" style="width: 64px; height: 64px; border-radius: 12px;" />
                                                <div class="d-flex flex-column justify-content-center gap-2">
                                                    <span class="text-dark text-nowrap">Point Blank</span>
                                                    <div class="d-flex gap-2 align-items-center text-nowrap">
                                                        <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group d-flex flex-column gap-3 me-3">
                                            <a class="horizon-scroll-item list-group-item list-group-item-action d-flex align-items-center p-3 border" data-id="1528471870" href=\"{{ route('product.show', ['playstation-voucher', '1528471870']) }}\" title="Topup Playstation Voucher" title="Topup Playstation Voucher" style="border-radius: 12px; min-width: 280px;">
                                                <img class="block block-fx-shadow block-bordered p-0 my-0 ms-0 lazy  img-gray me-3" data-src="https://cdn.topupgim.com/product-tiles/70e30f90-eaba-4876-8ff7-e96eadf189a9.png?w=200" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" style="width: 64px; height: 64px; border-radius: 12px;" />
                                                <div class="d-flex flex-column justify-content-center gap-2">
                                                    <span class="text-dark text-nowrap">Playstation Voucher</span>
                                                    <div class="d-flex gap-2 align-items-center text-nowrap">
                                                        <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">30 Menit</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="horizon-scroll-item list-group-item list-group-item-action d-flex align-items-center p-3 border" data-id="1528418009" href=\"{{ route('product.show', ['revelation-infinite-journey', '1528418009']) }}\" title="Topup Revelation: Infinite Journey" title="Topup Revelation: Infinite Journey" style="border-radius: 12px; min-width: 280px;">
                                                <img class="block block-fx-shadow block-bordered p-0 my-0 ms-0 lazy  me-3" data-src="https://cdn.topupgim.com/product-tiles/eed6a3bb-edba-4e6f-8fdf-031ae87ace10.png?w=200" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" style="width: 64px; height: 64px; border-radius: 12px;" />
                                                <div class="d-flex flex-column justify-content-center gap-2">
                                                    <span class="text-dark text-nowrap">Revelation: Infinite Journey</span>
                                                    <div class="d-flex gap-2 align-items-center text-nowrap">
                                                        <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="horizon-scroll-item list-group-item list-group-item-action d-flex align-items-center p-3 border" data-id="1528697287" href=\"{{ route('product.show', ['roblox-voucher', '1528697287']) }}\" title="Topup Roblox Voucher" title="Topup Roblox Voucher" style="border-radius: 12px; min-width: 280px;">
                                                <img class="block block-fx-shadow block-bordered p-0 my-0 ms-0 lazy  me-3" data-src="https://cdn.topupgim.com/product-tiles/335f1bde-f6b3-49d3-a2c6-38bcc04bab60.png?w=200" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" style="width: 64px; height: 64px; border-radius: 12px;" />
                                                <div class="d-flex flex-column justify-content-center gap-2">
                                                    <span class="text-dark text-nowrap">Roblox Voucher</span>
                                                    <div class="d-flex gap-2 align-items-center text-nowrap">
                                                        <span class="rounded bg-warning-light text-warning fs-xs fw-medium" style="padding: 1px 4px">Manual</span>
                                                        <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">30 Menit</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute top-50 start-0 translate-middle-y" style="z-index: 800;">
                            <div class="ms-2 ms-md-3 ms-lg-4 ms-xl-6 ps-xl-2 pt-4">
                                <button id="scroll-control-left-6a696654526d47614936755976747971366a523830513d3d" type="button" class="btn ratio ratio-1x1 bg-body-light p-4 rounded rounded-circle block m-0 p-0 block-bordered block-fx-shadow animated bounceIn d-none" style="cursor: pointer;">
                                    <div>
                                        <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                            <i class="far fa-fw fa-lg fa-chevron-left text-muted"></i>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <div class="position-absolute top-50 end-0 translate-middle-y" style="z-index: 800;">
                            <div class="me-2 me-md-3 me-lg-4 me-xl-6 pe-xl-2 pt-4">
                                <button id="scroll-control-right-6a696654526d47614936755976747971366a523830513d3d" type="button" class="btn ratio ratio-1x1 bg-body-light p-4 rounded rounded-circle block m-0 p-0 block-bordered block-fx-shadow animated bounceIn d-none" style="cursor: pointer;">
                                    <div>
                                        <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                            <i class="far fa-fw fa-lg fa-chevron-right text-muted"></i>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>    </div>
                </div>                <div id="category_465876485877756263774e7a2b35565169526c4f39513d3d" class="d-flex flex-column mb-5" style="scroll-margin-top: 100px;">
                    <div class="content py-0 my-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mx-2 mx-lg-4">
                                <div class="d-flex align-items-top">
                                    <img class="lazy me-2 me-lg-3" style="width: 27px; height: 1.6rem; object-fit: cover;" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/category-icons/4ae59eca-f4f2-4e44-b5f1-8c73bebba0c4.png" alt="Aplikasi">
                                    <h3 class="mb-0">Aplikasi</h3>
                                </div>
                                <p class="fs-sm mb-0" style="color: #606060;">Top Up Aplikasi Mobile &amp; PC Lebih Hemat</p>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative pb-2">
                        <div class="content py-0 my-0">
                            <div class="mx-2 mx-lg-4">
                                <div class="horizon-scroll-control overflow-auto disable-scrollbars" data-sign="465876485877756263774e7a2b35565169526c4f39513d3d">
                                    <div class="d-flex pt-4">
                                        <div class="list-group d-flex flex-column gap-3 me-3">
                                            <a class="horizon-scroll-item list-group-item list-group-item-action d-flex align-items-center p-3 border" data-id="1528138896" href=\"{{ route('product.show', ['voucher-bstation', '1528138896']) }}\" title="Topup Bstation Voucher" title="Topup Bstation Voucher" style="border-radius: 12px; min-width: 280px;">
                                                <img class="block block-fx-shadow block-bordered p-0 my-0 ms-0 lazy  me-3" data-src="https://cdn.topupgim.com/product-tiles/e6665567-18b1-4698-8a57-b16935cd3f02.png?w=200" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" style="width: 64px; height: 64px; border-radius: 12px;" />
                                                <div class="d-flex flex-column justify-content-center gap-2">
                                                    <span class="text-dark text-nowrap">Bstation Voucher</span>
                                                    <div class="d-flex gap-2 align-items-center text-nowrap">
                                                        <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="horizon-scroll-item list-group-item list-group-item-action d-flex align-items-center p-3 border" data-id="1528472026" href=\"{{ route('product.show', ['koin-tiktok-gift-card', '1528472026']) }}\" title="Topup Koin TikTok Gift Card" title="Topup Koin TikTok Gift Card" style="border-radius: 12px; min-width: 280px;">
                                                <img class="block block-fx-shadow block-bordered p-0 my-0 ms-0 lazy  me-3" data-src="https://cdn.topupgim.com/product-tiles/d1e8fd65-ffc0-4d1f-9c80-34bcdf29214e.jpg?w=200" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" style="width: 64px; height: 64px; border-radius: 12px;" />
                                                <div class="d-flex flex-column justify-content-center gap-2">
                                                    <span class="text-dark text-nowrap">Koin TikTok Gift Card</span>
                                                </div>
                                            </a>
                                            <a class="horizon-scroll-item list-group-item list-group-item-action d-flex align-items-center p-3 border" data-id="1528999288" href=\"{{ route('product.show', ['likee', '1528999288']) }}\" title="Topup Likee" title="Topup Likee" style="border-radius: 12px; min-width: 280px;">
                                                <img class="block block-fx-shadow block-bordered p-0 my-0 ms-0 lazy  me-3" data-src="https://cdn.topupgim.com/product-tiles/1fb0aecd-f518-45bc-b577-8148ccfc1523.png?w=200" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" style="width: 64px; height: 64px; border-radius: 12px;" />
                                                <div class="d-flex flex-column justify-content-center gap-2">
                                                    <span class="text-dark text-nowrap">Likee</span>
                                                    <div class="d-flex gap-2 align-items-center text-nowrap">
                                                        <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group d-flex flex-column gap-3 me-3">
                                            <a class="horizon-scroll-item list-group-item list-group-item-action d-flex align-items-center p-3 border" data-id="1528384729" href=\"{{ route('product.show', ['lita', '1528384729']) }}\" title="Topup Lita" title="Topup Lita" style="border-radius: 12px; min-width: 280px;">
                                                <img class="block block-fx-shadow block-bordered p-0 my-0 ms-0 lazy  me-3" data-src="https://cdn.topupgim.com/product-tiles/9a6776ba-a0a1-4122-a455-8aed94b20669.png?w=200" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" style="width: 64px; height: 64px; border-radius: 12px;" />
                                                <div class="d-flex flex-column justify-content-center gap-2">
                                                    <span class="text-dark text-nowrap">Lita</span>
                                                    <div class="d-flex gap-2 align-items-center text-nowrap">
                                                        <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="horizon-scroll-item list-group-item list-group-item-action d-flex align-items-center p-3 border" data-id="1528123409" href=\"{{ route('product.show', ['mangatoon', '1528123409']) }}\" title="Topup Mangatoon" title="Topup Mangatoon" style="border-radius: 12px; min-width: 280px;">
                                                <img class="block block-fx-shadow block-bordered p-0 my-0 ms-0 lazy  me-3" data-src="https://cdn.topupgim.com/product-tiles/6b349e92-bd3f-4ae7-9ee9-9a7081c22224.png?w=200" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" style="width: 64px; height: 64px; border-radius: 12px;" />
                                                <div class="d-flex flex-column justify-content-center gap-2">
                                                    <span class="text-dark text-nowrap">Mangatoon</span>
                                                    <div class="d-flex gap-2 align-items-center text-nowrap">
                                                        <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="horizon-scroll-item list-group-item list-group-item-action d-flex align-items-center p-3 border" data-id="1528569704" href=\"{{ route('product.show', ['steam-wallet-voucher', '1528569704']) }}\" title="Topup Steam Wallet Voucher" title="Topup Steam Wallet Voucher" style="border-radius: 12px; min-width: 280px;">
                                                <img class="block block-fx-shadow block-bordered p-0 my-0 ms-0 lazy  me-3" data-src="https://cdn.topupgim.com/product-tiles/b5a508e7-61e0-4a2e-899e-0ddd21d338a4.png?w=200" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" style="width: 64px; height: 64px; border-radius: 12px;" />
                                                <div class="d-flex flex-column justify-content-center gap-2">
                                                    <span class="text-dark text-nowrap">Steam Wallet Voucher</span>
                                                    <div class="d-flex gap-2 align-items-center text-nowrap">
                                                        <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group d-flex flex-column gap-3 me-3">
                                            <a class="horizon-scroll-item list-group-item list-group-item-action d-flex align-items-center p-3 border" data-id="1528322790" href=\"{{ route('product.show', ['vidio-voucher', '1528322790']) }}\" title="Topup Vidio Voucher" title="Topup Vidio Voucher" style="border-radius: 12px; min-width: 280px;">
                                                <img class="block block-fx-shadow block-bordered p-0 my-0 ms-0 lazy  img-gray me-3" data-src="https://cdn.topupgim.com/product-tiles/c12d56bb-46ef-4d62-bb2e-816c03e46b22.png?w=200" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" style="width: 64px; height: 64px; border-radius: 12px;" />
                                                <div class="d-flex flex-column justify-content-center gap-2">
                                                    <span class="text-dark text-nowrap">Vidio Voucher</span>
                                                    <div class="d-flex gap-2 align-items-center text-nowrap">
                                                        <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="horizon-scroll-item list-group-item list-group-item-action d-flex align-items-center p-3 border" data-id="1528540373" href=\"{{ route('product.show', ['wesing', '1528540373']) }}\" title="Topup WeSing" title="Topup WeSing" style="border-radius: 12px; min-width: 280px;">
                                                <img class="block block-fx-shadow block-bordered p-0 my-0 ms-0 lazy  me-3" data-src="https://cdn.topupgim.com/product-tiles/d255cc4d-e992-4931-b995-a7bc194a4273.jpg?w=200" src="https://cdn.topupgim.com/no-image2575.jpg?w=100" style="width: 64px; height: 64px; border-radius: 12px;" />
                                                <div class="d-flex flex-column justify-content-center gap-2">
                                                    <span class="text-dark text-nowrap">WeSing</span>
                                                    <div class="d-flex gap-2 align-items-center text-nowrap">
                                                        <span class="rounded bg-info-light text-info fs-xs fw-medium" style="padding: 1px 4px">Cashback</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute top-50 start-0 translate-middle-y" style="z-index: 800;">
                            <div class="ms-2 ms-md-3 ms-lg-4 ms-xl-6 ps-xl-2 pt-4">
                                <button id="scroll-control-left-465876485877756263774e7a2b35565169526c4f39513d3d" type="button" class="btn ratio ratio-1x1 bg-body-light p-4 rounded rounded-circle block m-0 p-0 block-bordered block-fx-shadow animated bounceIn d-none" style="cursor: pointer;">
                                    <div>
                                        <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                            <i class="far fa-fw fa-lg fa-chevron-left text-muted"></i>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <div class="position-absolute top-50 end-0 translate-middle-y" style="z-index: 800;">
                            <div class="me-2 me-md-3 me-lg-4 me-xl-6 pe-xl-2 pt-4">
                                <button id="scroll-control-right-465876485877756263774e7a2b35565169526c4f39513d3d" type="button" class="btn ratio ratio-1x1 bg-body-light p-4 rounded rounded-circle block m-0 p-0 block-bordered block-fx-shadow animated bounceIn d-none" style="cursor: pointer;">
                                    <div>
                                        <div class="d-flex justify-content-center align-items-center h-100 w-100">
                                            <i class="far fa-fw fa-lg fa-chevron-right text-muted"></i>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>    </div>
                </div>                <!-- END Products -->
            </div>

            <div class="content my-0 py-0">
                <div class="mx-2 mx-lg-4 static-page"><div class="raw-html-embed">        <style>.block.bg-body.py-2.px-3.mb-2 {    background-color: #f9f9f9 !important;}@media (max-width: 768px) {.mobileonly{display:block !important;}.bg-gd-body-light-op-rl {    background: rgb(211 221 255 / 98%) !important;}}.content.bg-transparent.d-block.d-md-none {    margin-top: -6.8em !important;}.content.bg-transparent.d-block.d-md-none .px-2.mt-4 {    margin-top: 8px !important;}</style></div></div>
            </div>

            <div class="content my-0 py-0">
                <div class="mx-2 mx-lg-4">
                    <!-- Information Featured -->
                    <!-- END Information Featured -->

                    <!-- Mass Media -->
                    <!-- END Mass Media -->
                </div>
            </div>
            <!-- END Page Content -->

            <!-- Featured -->
            <div class="bg-body-light">
                <div class="content content-full py-5">
                    <div class="pb-4 text-center">
                        <h3 class="fw-bold mb-3">Tentang TopUpGim</h3>
                        <div class="row g-0 justify-content-center">
                            <div class="col-lg-10">
                                <p class="fs-md mb-0">
                                    TopUpGim adalah platform penjualan produk hiburan digital yang menawarkan harga dan layanan paling menarik untuk semua pelanggan. Pedagang dan pihak yang bekerja sama dengan kami semuanya berasal dari perusahaan yang tepercaya. Selain itu, metode pembayaran yang kami dukung mudah digunakan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-2">
                        <div class="col-md-6 mt-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0 item item-rounded bg-xeco text-white fw-semibold me-4">
                                    <i class="fab fa-2x fa-whatsapp"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h4 class="mb-1">Resi WhatsApp</h4>
                                    <p class="mb-0">
                                        Jika diperlukan Anda dapat meminta resi pembelian yang akan dikirim ke WhatsApp Anda.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0 item item-rounded bg-xwork text-white fw-semibold me-4">
                                    <i class="fa fad fa-2x fa-wallet"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h4 class="mb-1">Metode pembayaran populer</h4>
                                    <p class="mb-0">
                                        Kami menawarkan pilihan pembayaran QRIS, eWallet, Pulsa dan Transfer Bank.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0 item item-rounded bg-warning text-white fw-semibold me-4">
                                    <i class="fa fad fa-2x fa-bolt"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h4 class="mb-1">Pembayaran Realtime</h4>
                                    <p class="mb-0">
                                        Hanya dibutuhkan beberapa detik saja untuk menyelesaikan pembayaran.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0 item item-rounded bg-xmodern text-white fw-semibold me-4">
                                    <i class="fa fad fa-2x fa-mouse-pointer"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h4 class="mb-1">Pengoperasian yang mudah</h4>
                                    <p class="mb-0">
                                        Situs kami berfungsi dengan baik dan tampilan yang nyaman serta mudah untuk digunakan.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0 item item-rounded bg-xdream text-white fw-semibold me-4">
                                    <i class="fa fad fa-2x fa-shipping-fast"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h4 class="mb-1">Proses pengiriman seketika</h4>
                                    <p class="mb-0">
                                        Setelah pembayaran selesai, produk akan kami kirim secepat mungkin.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="d-flex">
                                <div class="flex-shrink-0 item item-rounded bg-xsmooth text-white fw-semibold me-4">
                                    <i class="fa fad fa-2x fa-headset"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <h4 class="mb-1">Layanan Pelanggan</h4>
                                    <p class="mb-0">
                                        Tim support kami siap membantu Anda dengan tanggapan secepatnya.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5 block block-rounded block-transparent bg-body">
                        <div class="block-content block-content-full">
                            <div class="row justify-content-sm-between align-items-center p-3">
                                <div class="col-sm-6">
                                    <h4 class="mb-2">
                                        Mendaftarkan Akun
                                    </h4>
                                    <p class="text-muted mb-sm-0">
                                        Yuk gabung! untuk melihat catatan transaksi kamu serta memberi ulasan pada produk yang telah kamu beli.
                                    </p>
                                </div>
                                <div class="col-sm-6 text-sm-end">
                                    <a class="btn btn-hero btn-primary px-4 py-2" href="{{ route('auth.register') }}">
                                        Buat Akun Baru
                                        <i class="fa fa-fw fa-arrow-right opacity-50 ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Featured -->


        </main>
        <!-- END Main Container -->

@endsection
