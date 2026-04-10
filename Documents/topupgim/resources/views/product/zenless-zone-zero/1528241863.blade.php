@extends('layouts.app')

@section('title', 'Top Up Zenless Zone Zero | Top Up Genshin Murah | Topupgim - TopUpGim')

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
            <div class="row g-0 flex-md-grow-1 ps-xl-5 pe-xl-4 pb-4">
                <div class="col-lg-5 py-4 py-lg-5">
                    <div class="ps-md-5 pe-md-5 pe-lg-0 px-3">


                        <!-- Cover Content -->
                        <div class="ratio mb-4" style="--bs-aspect-ratio: 50%;">
                            <div>
                                <img class="img-fluid rounded img-slider w-100" src="../../https://cdn.topupgim.com/product-rectangles/c77152d6-684f-4a4e-9f40-f07ce8794a0f.jpg" alt="Top Up Zenless Zone Zero">
                            </div>
                        </div>
                        <!-- END Cover Content -->

                        <!-- Description Content -->
                        <h1 class="mb-2">Top Up Zenless Zone Zero</h1>
                        <div class="d-flex flex-row flex-wrap align-items-center gy-1 mb-2">
                            <img src="{{ asset(\'assets/media/images/instant-badge.png" style="height: 50px;" class="mb-1 me-3" alt="delivery image">
                            <img src="{{ asset(\'assets/media/images/official-store-badge.png" style="height: 50px;" class="mb-1 me-3" alt="provider image">
                        </div>
                        <div class="static-page-product-desc mb-4"><p>Top Up Zenless Zone Zero resmi dengan <strong>harga termurah</strong> se-Indonesia di Topupgim.com, 60 Monochrome<strong> hanya Rp13.300.&nbsp;</strong></p><p><strong>Kenapa Top Up di Topupgim.com?</strong></p><div class="raw-html-embed"><ul class="list_alasan" style="list-style: none; padding-left: 0;"><li style="background: #fff;padding: 5px 8px;margin-bottom: 5px;border-radius: 5px; box-shadow: 0 1px 3px rgba(214,221,237,.5), 0 1px 2px rgba(214,221,237,.5);"><strong>Dijamin Hemat</strong>. Pasti ada promo setiap hari 🔥</li><li style="background: #fff;padding: 5px 8px;margin-bottom: 5px;border-radius: 5px;box-shadow: 0 1px 3px rgba(214,221,237,.5), 0 1px 2px rgba(214,221,237,.5);"><strong>Mudah &amp; Otomatis.</strong> Tidak perlu kirim bukti transfer.</li><li style="background: #fff;padding: 5px 8px;margin-bottom: 5px; border-radius: 5px;box-shadow: 0 1px 3px rgba(214,221,237,.5), 0 1px 2px rgba(214,221,237,.5);"><strong>Dijamin Resmi</strong>. Pasti dikirim dalam hitungan detik.</li></ul><p style="font-size: 13px;">Top Up Zenless Zone Zero murah dan aman di Topupgim, dijamin harga termurah dan pengiriman instan. </p></div></div>
                        <div class="d-flex flex-row flex-wrap align-items-center gy-1">
                            <span class="text-dark fs-sm fw-semibold mb-2 me-3">
                                <i class="fa fa-cart-shopping opacity-75 me-1"></i> Terjual: <span class="text-primary">131</span>
                            </span>
                            <a class="text-dark fs-sm fw-semibold mb-2 me-3" href="#modal-share-content" data-bs-toggle="modal" data-bs-target="#modal-share-content">
                                <i class="fa fa-share-square opacity-75 me-1"></i> Share &amp; Dapatkan Uang
                            </a>
                        </div>
                        <!-- END Description Content -->

                        <!-- Review Content -->
                        <div id="parent-content-review" class="d-none">
                            <div id="content-review">
                                <div id="review-scope-loading" class="text-center text-primary py-7 d-none">
                                    <i class="fa fa-3x fa-circle-notch fa-spin"></i>
                                </div>
                                <div id="review-scope-empty" class="d-none"></div>
                                <div id="review-scope" class="pt-4 mt-4 border-top d-none">
                                    <h3 class="mb-1">Ulasan dan Transaksi</h3>
                                    <p class="fs-sm mb-4">Ulasan dan transaksi terbaru. Ulasan akan dibuat secara otomatis jika tidak ada komplain dan kamu bisa mengedit atau menghapusnya kapan saja.</p>
                                    <div class="d-flex align-items-center mb-4 ps-3 ps-lg-0">
                                        <div class="d-flex flex-column text-center">
                                            <h2 class="display-3 mb-0">
                                                <span id="review-score-average">5.0</span><span class="fs-lg fw-normal text-muted"> /5</span>
                                            </h2>
                                            <div class="text-center">
                                                <div id="review-score-star" class="mb-1" data-score="5" data-number="5" data-readonly="true"></div>
                                                <p id="review-score-total" class="fs-sm text-muted mb-0">(5 Ulasan)</p>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 flex-column ms-1 ms-md-0 ps-4 ps-md-5 pe-5">
                                            <div class="d-flex align-items-center mb-1">
                                                <div class="d-flex flex-column" style="width: 1em;">
                                                    <span class="fs-sm">5</span>
                                                </div>
                                                <div class="d-flex flex-fill flex-column me-2">
                                                    <div class="progress m-2" style="height: 6px;">
                                                        <div id="review-score-progress-five" class="progress-bar rounded" role="progressbar" style="width: 0%;"></div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column" style="width: 1em;">
                                                    <span id="review-score-five" class="fs-sm text-nowrap">0</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-1">
                                                <div class="d-flex flex-column" style="width: 1em;">
                                                    <span class="fs-sm">4</span>
                                                </div>
                                                <div class="d-flex flex-fill flex-column me-2">
                                                    <div class="progress m-2" style="height: 6px;">
                                                        <div id="review-score-progress-four" class="progress-bar rounded" role="progressbar" style="width: 0%;"></div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column" style="width: 1em;">
                                                    <span id="review-score-four" class="fs-sm text-nowrap">0</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-1">
                                                <div class="d-flex flex-column" style="width: 1em;">
                                                    <span class="fs-sm">3</span>
                                                </div>
                                                <div class="d-flex flex-fill flex-column me-2">
                                                    <div class="progress m-2" style="height: 6px;">
                                                        <div id="review-score-progress-three" class="progress-bar rounded" role="progressbar" style="width: 0%;"></div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column" style="width: 1em;">
                                                    <span id="review-score-three" class="fs-sm text-nowrap">0</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-1">
                                                <div class="d-flex flex-column" style="width: 1em;">
                                                    <span class="fs-sm">2</span>
                                                </div>
                                                <div class="d-flex flex-fill flex-column me-2">
                                                    <div class="progress m-2" style="height: 6px;">
                                                        <div id="review-score-progress-two" class="progress-bar rounded" role="progressbar" style="width: 0%;"></div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column" style="width: 1em;">
                                                    <span id="review-score-two" class="fs-sm text-nowrap">0</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-1">
                                                <div class="d-flex flex-column" style="width: 1em;">
                                                    <span class="fs-sm">1</span>
                                                </div>
                                                <div class="d-flex flex-fill flex-column me-2">
                                                    <div class="progress m-2" style="height: 6px;">
                                                        <div id="review-score-progress-one" class="progress-bar rounded" role="progressbar" style="width: 0%;"></div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column" style="width: 1em;">
                                                    <span id="review-score-one" class="fs-sm text-nowrap">0</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <div class="d-flex mb-3 flex-wrap gap-2 align-items-center text-nowrap">
                                            <div class="form-check form-block highlight">
                                                <input type="radio" id="reviewFilter_all" class="form-check-input" name="reviewFilter" value="all" checked>
                                                <label class="form-check-label no-content bg-body py-1" for="reviewFilter_all">
                                                    <span class="fs-sm">Semua</span>
                                                </label>
                                            </div>
                                            <div class="form-check form-block highlight">
                                                <input type="radio" id="reviewFilter_with_comment" class="form-check-input" name="reviewFilter" value="with_comment">
                                                <label class="form-check-label no-content bg-body py-1" for="reviewFilter_with_comment">
                                                    <span class="fs-sm">Dengan Komentar</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div id="review-scope-list-loading" class="text-center text-primary py-7 d-none">
                                            <i class="fa fa-3x fa-circle-notch fa-spin"></i>
                                        </div>
                                        <div id="review-scope-frame-list" class="d-flex flex-column border-top pt-4 mt-1">
                                            <div id="review-scope-list" class="d-flex flex-column"></div>
                                            <div class="d-flex justify-content-between align-items-center mt-2">
                                                <button type="button" id="review-nav-prev" class="a btn btn-sm text-secondary d-none" disabled>
                                                    <i class="me-1 fa fa-angle-left"></i> Sebelumnya
                                                </button>
                                                <button type="button" id="review-nav-next" class="a btn btn-sm text-secondary d-none" disabled>
                                                    Selanjutnya <i class="ms-1 fa fa-angle-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Review Content -->

                        <!-- Ranking Content -->
                        <div id="parent-content-ranking" class="d-none">
                        </div>
                        <!-- END Ranking Content -->

                        <!-- Article Content -->
                        <div id="parent-content-article" class="d-none">
                        </div>
                        <!-- END Article Content -->

                    </div>
                </div>
                <div class="col-lg-7">
                    <div id="content-topup" class="content" style="scroll-margin-top: 50px;">
                        <a href="#modal-how-to-order" class="d-block d-md-none fw-semibold text-center btn btn-primary mt-2 w-100" style="font-size: 13px; line-height: 25px;" data-bs-toggle="modal" data-bs-target="#modal-how-to-order">
                            Tutorial Pembelian Tanpa Login?
                        </a>
                        <form class="js-validation-product-start-transaction" method="POST" novalidate="novalidate">
                            <input type="hidden" name="_csrf" value="5gicFpH2-ePCVCqdtLtPXqH0LTnZ97kSf7HM">
                            <input type="hidden" name="_productPaymentMethod" value="">
                            <input type="hidden" name="_redemptionIsAttached" value="">
                            <input type="hidden" name="_exfee" value="">
                            <ul class="timeline timeline-alt">

                                <div class="d-flex justify-content-end mb-3 w-100">
                                    <a href="#modal-how-to-order" class="d-none d-md-block fw-semibold" style="font-size: 13px; line-height: 25px;" data-bs-toggle="modal" data-bs-target="#modal-how-to-order">
                                        <u>Tutorial Pembelian Tanpa Login?</u>
                                    </a>
                                </div>

                                <!-- Gim ID -->
                                <li id="content-property" class="timeline-event " style="scroll-margin-top: 75px;">
                                    <div class="timeline-event-icon-flat bg-primary">
                                        <span class="fs-lg fw-bold">1</span>
                                    </div>
                                    <div id="product-account-block" class="product-block timeline-event-block-no-sm block block-rounded block-mode-loading-circle block-themed">
                                        <div class="block-header block-header-default mb-3 mb-md-0" style="background-color: #535c76;">
                                            <h3 class="block-title ms-5 ms-md-0 d-none d-md-block">Masukkan Informasi Akun</h3>
                                        </div>
                                        <div class="block-content block-content-full">
                                            <div class="row mb-4">
                                                <label class="col-sm-4 col-form-label" for="property-user_id">User ID <span class="text-info">*</span></label>
                                                <div class="col-sm-8">
                                                    <input data-property-type="identity_number" id="property-user_id" name="property-user_id" type="text" minlength="" class="form-control form-control-lg form-control-alt" placeholder="Masukkan User ID.." value="" data-rule-digits="true" required>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-sm-4 col-form-label" for="property-zone_id">Server <span class="text-info">*</span></label>
                                                <div class="col-sm-8">
                                                    <select data-property-type="options" id="property-zone_id" name="property-zone_id" class="form-select text-body-color" required>
                                                        <option value="os_asia">Asia</option>
                                                        <option value="os_usa">America</option>
                                                        <option value="os_euro">Europe</option>
                                                        <option value="os_cht">TW_HK_MO</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-1">
                                                <div class="col-sm-8 ms-auto d-flex">
                                                    <a href="#modal-product-helper" class="btn btn-sm btn-danger bg-xplay text-white" data-bs-toggle="modal" data-bs-target="#modal-product-helper">
                                                        <i class="far fa-fw fa-question-circle me-1"></i>Tutorial
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- END Gim ID -->

                                <!-- Denomination -->
                                <li id="content-denomination" class="timeline-event" style="scroll-margin-top: 75px;">
                                    <div class="timeline-event-icon-flat bg-xsmooth">
                                        <span class="fs-lg fw-bold">2</span>
                                    </div>
                                    <div id="product-denom-block" class="product-block timeline-event-block-no-sm block block-rounded block-mode-loading-circle block-themed">
                                        <div class="block-header block-header-default mb-3 mb-md-0" style="background-color: #535c76;">
                                            <h3 class="block-title ms-5 ms-md-0 d-none d-md-block">Pilih Nominal</h3>
                                        </div>
                                        <div class="block-content pb-2 animated fadeIn">

                                            <div class="px-2 py-2 mb-4 bg-info-light rounded d-flex align-items-center">
                                                <i class="far fa-info-circle me-2 text-info"></i><span class="fs-xs text-info">Harga tertera sudah termasuk biaya admin dan biaya tambahan lainnya.</span>
                                            </div>

                                            <div class="row px-md-1 animated fadeIn" style="min-height: 7rem;">
                                                <div id="pDRoot_TA904XI6" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_TA904XI6" name="productDenomination" value="TA904XI6" data-price-preview="75100" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_TA904XI6">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/9918400b-1e98-463d-8c3a-a6856810aff2.png?w=75" alt="Keanggotaan Inter-Knot">
                                                                <span id="productDenominationTitle_TA904XI6" class="fs-sm fw-semibold">Keanggotaan Inter-Knot</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp75.100</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp79.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp3.900</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_WR587A1M" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_WR587A1M" name="productDenomination" value="WR587A1M" data-price-preview="16100" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_WR587A1M">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/f587a47f-3b5f-48ae-b958-d3d49172f68d.png?w=75" alt="Monochrome ×60">
                                                                <span id="productDenominationTitle_WR587A1M" class="fs-sm fw-semibold">Monochrome ×60</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp16.100</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp0</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp0</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_ME772WYT" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_ME772WYT" name="productDenomination" value="ME772WYT" data-price-preview="77900" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_ME772WYT">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/19c3dd73-44f8-457d-a5ad-6fcb734cf169.png?w=75" alt="Monochrome ×330">
                                                                <span id="productDenominationTitle_ME772WYT" class="fs-sm fw-semibold">Monochrome ×330</span>
                                                                <span class="fs-xs">300 + 30 Bonus</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp77.900</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp79.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp1.100</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_EA948KNL" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_EA948KNL" name="productDenomination" value="EA948KNL" data-price-preview="223000" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_EA948KNL">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/d657d12f-f840-4327-b257-f2bc43c2416c.png?w=75" alt="Monochrome ×1090">
                                                                <span id="productDenominationTitle_EA948KNL" class="fs-sm fw-semibold">Monochrome ×1090</span>
                                                                <span class="fs-xs">980 + 110 Bonus</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp223.000</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp249.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp26.000</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_CM444T58" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_CM444T58" name="productDenomination" value="CM444T58" data-price-preview="444500" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_CM444T58">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/1966d07e-b782-4253-82ac-bce249ff0ea5.png?w=75" alt="Monochrome ×2240">
                                                                <span id="productDenominationTitle_CM444T58" class="fs-sm fw-semibold">Monochrome ×2240</span>
                                                                <span class="fs-xs">1980+260 Bonus</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp444.500</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp479.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp34.500</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_WI120PEE" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_WI120PEE" name="productDenomination" value="WI120PEE" data-price-preview="732900" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_WI120PEE">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/95b1ee67-9e61-40de-a745-0bf14caa6ada.png?w=75" alt="Monochrome ×3880">
                                                                <span id="productDenominationTitle_WI120PEE" class="fs-sm fw-semibold">Monochrome ×3880</span>
                                                                <span class="fs-xs">3280 + 600 Bonus</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp732.900</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp799.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp66.100</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div id="pDRoot_IB124VJV" class="pDRoot col-6 col-md-4 px-2 mb-3" data-is-region-id="true" data-region-list="" data-sku-mobapay="">
                                                    <div class="form-check form-block highlight h-100">
                                                        <input type="radio" class="form-check-input" id="productDenomination_IB124VJV" name="productDenomination" value="IB124VJV" data-price-preview="1464200" data-is-empty="" required >
                                                        <label class="form-check-label-rounded-lg h-100 py-3 bg-body" for="productDenomination_IB124VJV">
                                                            <div class="d-flex flex-column text-center justify-content-center align-items-center h-100 ">
                                                                <img class="lazy mb-1 " style="width: 50px; height: 50px; object-fit: cover;" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/denomination-items/d028959c-880c-4c0a-be76-822b0bb12ff8.png?w=75" alt="Monochrome ×8080">
                                                                <span id="productDenominationTitle_IB124VJV" class="fs-sm fw-semibold">Monochrome ×8080</span>
                                                                <span class="fs-xs">6480 + 2000 Bonus</span>
                                                                <p class="text-xplay fw-semibold mt-1 mb-0" style="font-family: trebuchet ms,Helvetica,sans-serif;">Rp1.464.200</p>
                                                                <p class="fs-xs mb-0 fw-light mb-3">
                                                                    <del>Rp1.599.000</del>
                                                                </p>
                                                                <span class="sku-limited-label position-absolute fs-xs fw-semibold text-white bg-primary-dark-op text-center bg-transparent top-50 start-50 translate-middle py-1 py-lg-2 w-100 d-none">Pembelian Mencapai Batas</span>
                                                            </div>
                                                            <div class="text-center border border-2 bg-info-light form-check-description position-absolute bottom-0 end-0 w-100" style="border-radius: 0 0 10px 10px; line-height: 1.4rem; z-index: 2;">
                                                                <span class="text-info fw-normal mx-2" style="font-size: 0.70rem !important;">
                                                                    <span class="fs-xs text-nowrap" style="font-weight: 450;">Hemat Rp134.800</span>
                                                                </span>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- END Denomination -->

                                <!-- Payment Method -->
                                <li id="content-method" class="timeline-event" style="scroll-margin-top: 75px;">
                                    <div class="timeline-event-icon-flat bg-xwork">
                                        <span class="fs-lg fw-bold">3</span>
                                    </div>
                                    <div class="product-block timeline-event-block-no-sm block block-rounded block-mode-loading-circle block-themed">
                                        <div class="block-header block-header-default" style="background-color: #535c76;">
                                            <h3 class="block-title ms-5 ms-md-0">Pilih Metode Pembayaran</h3>
                                        </div>
                                        <div class="block-content block-content-full pb-2">

                                            <div id="method-VIRTUAL_ACCOUNT" class="method-container d-flex flex-column">
                                                <div class="method-group-label form-check form-block highlight mb-3">
                                                    <div class="form-check-label-rounded-lg h-100 p-0" onclick="document.querySelector('#method-VIRTUAL_ACCOUNT').classList.toggle('active');">
                                                        <div class="d-flex align-items-center py-2">
                                                            <div class="flex-grow-1 d-flex align-items-center mx-2 mx-md-4">
                                                                <span class="fw-semibold text-start my-2 me-1">Tranfer Bank (VA)</span>
                                                                <i class="method-angle-down fa fa-caret-down"></i>
                                                                <i class="method-angle-up fa fa-caret-up" style="display: none;"></i>
                                                            </div>
                                                            <div id="productMethodPrice_VIRTUAL_ACCOUNT" class="productMethodPrice method-angle-down d-flex justify-content-end my-auto pe-2 pe-md-4 text-nowrap">
                                                                <span class="d-block fs-sm text-end ms-2">Tidak tersedia</span>
                                                            </div>
                                                        </div>
                                                        <div class="method-icons d-flex align-items-center justify-content-between px-2 px-md-4 py-3 border-top border-2 animated fadeIn">
                                                            <div class="d-flex flex-row flex-wrap justify-content-start gap-2">
                                                                <div id="pmIcon_73893915" class="pmIcon text-center bg-white rounded px-2 border">
                                                                    <img class="img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/payment-channels/5e95bcfe-2441-4248-955a-f566a7bfeebd.jpg">
                                                                </div>
                                                                <div id="pmIcon_38595772" class="pmIcon text-center bg-white rounded px-2 border">
                                                                    <img class="img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/payment-channels/a6d18927-25d5-429d-973b-fef0f5835a76.jpg">
                                                                </div>
                                                                <div id="pmIcon_31851227" class="pmIcon text-center bg-white rounded px-2 border">
                                                                    <img class="img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/payment-channels/7c539dba-e821-4acf-a5e9-f9b61f26772a.jpg">
                                                                </div>
                                                                <div id="pmIcon_31190119" class="pmIcon text-center bg-white rounded px-2 border">
                                                                    <img class="img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/payment-channels/0b2378d9-284b-4cfe-932c-14cc2efa3db2.jpg">
                                                                </div>
                                                                <div id="pmIcon_45669464" class="pmIcon text-center bg-white rounded px-2 border">
                                                                    <img class="img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/payment-channels/5ee759e8-75c9-4267-959c-b0c4d0641882.jpg">
                                                                </div>
                                                                <div id="pmIcon_13920347" class="pmIcon text-center bg-white rounded px-2 border">
                                                                    <img class="img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/payment-channels/0ede6492-44b8-444d-951d-e6e60919a8f1.jpg">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="method-group d-flex flex-column animated fadeIn" style="display: none;">
                                                    <div id="productPaymentMethodContainer_73893915" class="productPaymentMethodContainer form-check form-block highlight mb-3 ms-3 ms-md-3">
                                                        <input type="radio" class="form-check-input" id="productPaymentMethod_73893915" name="productPaymentMethod" value="73893915" data-xmethod="73893915" data-exfee="false" data-guarantee="false" disabled="" required>
                                                        <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_73893915">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-inline-flex">
                                                                    <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                        <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/5e95bcfe-2441-4248-955a-f566a7bfeebd.jpg">
                                                                    </div>
                                                                    <div class="my-auto">
                                                                        <span class="chTitle fs-sm d-block fw-semibold">BNI</span>
                                                                        <p class="mtdTitle fs-xs m-0 d-none">Tranfer Bank (VA)</p>
                                                                    </div>
                                                                </div>
                                                                <div id="productChannelName_73893915" class="productChannelName d-flex justify-content-end my-auto">
                                                                    <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>                                                    <div id="productPaymentMethodContainer_38595772" class="productPaymentMethodContainer form-check form-block highlight mb-3 ms-3 ms-md-3">
                                                        <input type="radio" class="form-check-input" id="productPaymentMethod_38595772" name="productPaymentMethod" value="38595772" data-xmethod="38595772" data-exfee="false" data-guarantee="false" disabled="" required>
                                                        <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_38595772">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-inline-flex">
                                                                    <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                        <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/a6d18927-25d5-429d-973b-fef0f5835a76.jpg">
                                                                    </div>
                                                                    <div class="my-auto">
                                                                        <span class="chTitle fs-sm d-block fw-semibold">BRI</span>
                                                                        <p class="mtdTitle fs-xs m-0 d-none">Tranfer Bank (VA)</p>
                                                                    </div>
                                                                </div>
                                                                <div id="productChannelName_38595772" class="productChannelName d-flex justify-content-end my-auto">
                                                                    <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>                                                    <div id="productPaymentMethodContainer_31851227" class="productPaymentMethodContainer form-check form-block highlight mb-3 ms-3 ms-md-3">
                                                        <input type="radio" class="form-check-input" id="productPaymentMethod_31851227" name="productPaymentMethod" value="31851227" data-xmethod="31851227" data-exfee="false" data-guarantee="false" disabled="" required>
                                                        <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_31851227">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-inline-flex">
                                                                    <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                        <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/7c539dba-e821-4acf-a5e9-f9b61f26772a.jpg">
                                                                    </div>
                                                                    <div class="my-auto">
                                                                        <span class="chTitle fs-sm d-block fw-semibold">BSI</span>
                                                                        <p class="mtdTitle fs-xs m-0 d-none">Tranfer Bank (VA)</p>
                                                                    </div>
                                                                </div>
                                                                <div id="productChannelName_31851227" class="productChannelName d-flex justify-content-end my-auto">
                                                                    <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>                                                    <div id="productPaymentMethodContainer_31190119" class="productPaymentMethodContainer form-check form-block highlight mb-3 ms-3 ms-md-3">
                                                        <input type="radio" class="form-check-input" id="productPaymentMethod_31190119" name="productPaymentMethod" value="31190119" data-xmethod="31190119" data-exfee="false" data-guarantee="false" disabled="" required>
                                                        <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_31190119">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-inline-flex">
                                                                    <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                        <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/0b2378d9-284b-4cfe-932c-14cc2efa3db2.jpg">
                                                                    </div>
                                                                    <div class="my-auto">
                                                                        <span class="chTitle fs-sm d-block fw-semibold">CIMB Niaga</span>
                                                                        <p class="mtdTitle fs-xs m-0 d-none">Tranfer Bank (VA)</p>
                                                                    </div>
                                                                </div>
                                                                <div id="productChannelName_31190119" class="productChannelName d-flex justify-content-end my-auto">
                                                                    <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>                                                    <div id="productPaymentMethodContainer_45669464" class="productPaymentMethodContainer form-check form-block highlight mb-3 ms-3 ms-md-3">
                                                        <input type="radio" class="form-check-input" id="productPaymentMethod_45669464" name="productPaymentMethod" value="45669464" data-xmethod="45669464" data-exfee="false" data-guarantee="false" disabled="" required>
                                                        <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_45669464">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-inline-flex">
                                                                    <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                        <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/5ee759e8-75c9-4267-959c-b0c4d0641882.jpg">
                                                                    </div>
                                                                    <div class="my-auto">
                                                                        <span class="chTitle fs-sm d-block fw-semibold">Danamon</span>
                                                                        <p class="mtdTitle fs-xs m-0 d-none">Tranfer Bank (VA)</p>
                                                                    </div>
                                                                </div>
                                                                <div id="productChannelName_45669464" class="productChannelName d-flex justify-content-end my-auto">
                                                                    <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>                                                    <div id="productPaymentMethodContainer_13920347" class="productPaymentMethodContainer form-check form-block highlight mb-3 ms-3 ms-md-3">
                                                        <input type="radio" class="form-check-input" id="productPaymentMethod_13920347" name="productPaymentMethod" value="13920347" data-xmethod="13920347" data-exfee="false" data-guarantee="false" disabled="" required>
                                                        <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_13920347">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="d-inline-flex">
                                                                    <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                        <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/0ede6492-44b8-444d-951d-e6e60919a8f1.jpg">
                                                                    </div>
                                                                    <div class="my-auto">
                                                                        <span class="chTitle fs-sm d-block fw-semibold">Permata</span>
                                                                        <p class="mtdTitle fs-xs m-0 d-none">Tranfer Bank (VA)</p>
                                                                    </div>
                                                                </div>
                                                                <div id="productChannelName_13920347" class="productChannelName d-flex justify-content-end my-auto">
                                                                    <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>                                                </div>
                                            </div>

                                            <div id="productPaymentMethodContainer_35936359" class="productPaymentMethodContainer form-check form-block highlight mb-3">
                                                <input type="radio" class="form-check-input" id="productPaymentMethod_35936359" name="productPaymentMethod" value="35936359" data-xmethod="35936359" data-exfee="false" data-guarantee="false" disabled="" required>
                                                <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_35936359">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-inline-flex">
                                                            <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/2bdd13df-707f-42c9-827c-c3485cca35c4.jpg">
                                                            </div>
                                                            <div class="my-auto">
                                                                <span class="chTitle fs-sm d-block fw-semibold">Alfamart</span>
                                                                <p class="mtdTitle fs-xs m-0">Gerai Ritel</p>
                                                            </div>
                                                        </div>
                                                        <div id="productChannelName_35936359" class="productChannelName d-flex justify-content-end my-auto">
                                                            <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                        </div>
                                                    </div>
                                                    <p class="form-check-description fs-xs px-2 px-md-4 pt-2 mb-2 border-top border-2">
                                                        Belum termasuk biaya admin Alfamart Rp3.000
                                                    </p>
                                                        </label>
                                            </div>                                            <div id="productPaymentMethodContainer_32181873" class="productPaymentMethodContainer form-check form-block highlight mb-3">
                                                <input type="radio" class="form-check-input" id="productPaymentMethod_32181873" name="productPaymentMethod" value="32181873" data-xmethod="32181873" data-exfee="false" data-guarantee="false" disabled="" required>
                                                <label class="form-check-label-rounded-lg h-100 p-0" for="productPaymentMethod_32181873">
                                                    <div class="d-flex justify-content-between">
                                                        <div class="d-inline-flex">
                                                            <div class="text-center bg-white rounded my-3 mx-2 mx-md-4 px-2 border">
                                                                <img class="lazy img-sq-sm fit-contain" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="../../https://cdn.topupgim.com/payment-channels/3a09b60f-51e3-4634-a7fa-6287e92cee2d.jpg">
                                                            </div>
                                                            <div class="my-auto">
                                                                <span class="chTitle fs-sm d-block fw-semibold">Topupgim</span>
                                                                <p class="mtdTitle fs-xs m-0">Saldo Reseller</p>
                                                            </div>
                                                        </div>
                                                        <div id="productChannelName_32181873" class="productChannelName d-flex justify-content-end my-auto">
                                                            <span class="d-block fs-sm text-center me-2 me-md-4">Tidak tersedia</span>
                                                        </div>
                                                    </div>
                                                    <p class="form-check-description fs-xs px-2 px-md-4 pt-2 mb-2 border-top border-2">
                                                        Harga lebih hemat, cocok untuk usaha sampingan kamu top up game dan pulsa
                                                    </p>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- END Payment Method -->


                                <!-- Purchasing -->
                                <li id="content-confirm" class="timeline-event" style="scroll-margin-top: 75px;">
                                    <div class="timeline-event-icon-flat bg-xeco">
                                        <span class="fs-lg fw-bold">4</span>
                                    </div>
                                    <div class="product-block timeline-event-block-no-sm block block-rounded block-mode-loading-circle block-themed">
                                        <div class="block-header block-header-default" style="background-color: #535c76;">
                                            <h3 class="block-title ms-5 ms-md-0">Konfirmasi Pembelian</h3>
                                        </div>
                                        <div class="block-content block-content-full">
                                            <div class="row mb-4">
                                                <label class="col-sm-4 col-form-label" for="memberWhatsAppNo">
                                                    No. WhatsApp
                                                    <span class="fs-xs text-info">(opsional)</span>
                                                </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control form-control-lg form-control-alt phone" id="memberWhatsAppNo" name="memberWhatsAppNo" placeholder="6288888888888">
                                                    <p class="text-muted fs-xs my-1">Nomor ini akan dihubungi apabila ada kendala. Bisa dikosongkan jika lupa.</p>
                                                </div>
                                            </div>
                                            <div id="block-phone-extra-payment-method" class="row mb-4 d-none">
                                                <label class="col-sm-4 col-form-label" for="memberPhoneExtra"><span id="label-phone-extra">Nomor Pengirim </span><span class="text-info">*</span></label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control form-control-lg form-control-alt phone" id="memberPhoneExtra" name="memberPhoneExtra" placeholder="6288888888888" minlength="8" maxlength="16">
                                                    <p id="summary-phone-extra" class="text-muted fs-xs mb-0 my-1">Nomor ini wajib digunakan untuk pembayaran.</p>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-sm-4 col-form-label" for="redemptionApplyCode">Kode Promo</label>
                                                <div class="col-sm-8">
                                                    <div class="input-group animated fadeIn">
                                                        <input type="text" class="form-control form-control-lg form-control-alt" id="redemptionApplyCode" name="redemptionApplyCode" placeholder="Tukar kode di sini.." maxlength="20">
                                                        <button id="redemptionCancel" type="button" class="btn fs-sm btn-alt-danger rounded-end d-none"><i class="fa fa-times me-1"></i> Batal</button>
                                                        <button id="redemptionSubmit" type="button" class="btn fs-sm btn-alt-primary" disabled>Gunakan</button>
                                                    </div>
                                                    <button id="redeemAvaliable" type="button" class="btn fs-sm btn-alt-info text-start mt-3 w-100">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <i class="fa fa-badge-percent me-2"></i>
                                                            <spa class="text-start flex-fill">Kode Promo yang Tersedia</spa>
                                                            <i class="fa fa-arrow-right-long"></i>
                                                        </div>
                                                    </button>
                                                    <p id="disc-message" class="fs-xs text-dark mt-2 mb-0 d-none"></p>
                                                </div>
                                            </div>
                                            <div id="block-GUARANTEE-delivery" class="row mb-4 d-none">
                                                <label class="col-sm-4 col-form-label">Pengiriman Kilat</label>
                                                <div class="col-sm-8 my-auto">
                                                    <div class="form-check form-switch">
                                                        <input style="cursor: pointer;" class="form-check-input" type="checkbox" id="fastDeliveryGuarantee" name="fastDeliveryGuarantee" data-cost-idr="2500">
                                                        <label style="cursor: pointer;" class="form-check-label fs-sm text-muted" for="fastDeliveryGuarantee" data-bs-toggle="popover" data-bs-animation="true" data-bs-placement="top" title="" data-bs-content="Kamu dapat klaim biaya tambahan ini jika waktu pengiriman terlambat atau lebih dari 60 detik" data-bs-original-title="Garansi Pengiriman Kilat">Memakai <span class="fw-light">(Rp2.500)</span><i class="ms-1 far fa-question-circle"></i></label>
                                                    </div>
                                                    <p class="text-muted fs-xs my-1">Gak perlu ngantri, hitungan detik langsung dikirim!</p>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-4 col-form-label">Ringkasan Pesanan</label>
                                                <div class="col-sm-8 my-auto d-flex flex-column animated fadeIn">
                                                    <div class="d-flex flex-column border border-1 rounded rounded-3 px-3 py-2">
                                                        <div class="d-flex justify-content-between align-items-center pb-2 pt-2">
                                                            <p class="fs-sm mb-0">Membeli Item</p>
                                                            <p class="desk_item-selected fs-sm fw-semibold text-primary text-end h6 mb-0">Belum Dipilih</p>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center pb-2">
                                                            <p class="fs-sm mb-0">Metode Pembayaran</p>
                                                            <p class="desk_method-selected fs-sm fw-semibold text-primary text-end h6 mb-0">Belum Dipilih</p>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center pb-2">
                                                            <p class="fs-sm mb-0">Harga Awal</p>
                                                            <p class="desk_amount-before fs-sm fw-semibold text-end h6 mb-0">-</p>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center pb-2">
                                                            <p class="fs-sm mb-0">Biaya Admin</p>
                                                            <p class="desk_admin-fee fs-sm fw-semibold text-primary text-end h6 mb-0">Rp0</p>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center pb-2">
                                                            <p class="fs-sm mb-0">Diskon Hemat</p>
                                                            <p class="desk_amount-deducted fs-sm fw-semibold text-danger text-end h6 mb-0">-</p>
                                                        </div>
                                                        <div id="disc-container" class="desk_disc-container d-flex justify-content-between align-items-center pb-2 d-none">
                                                            <p class="fs-sm mb-0 text-nowrap">Diskon Promo</p>
                                                            <div class="d-flex flex-column">
                                                                <p id="disc-promo-amount" class="desk_disc-promo-amount fs-sm fw-semibold text-danger text-end h6 mb-0">-</p>
                                                                <p class="fs-xs text-end mb-0">
                                                                    <span id="disc-name" class="desk_disc-name"></span>,
                                                                    <span id="disc-summary" class="desk_disc-summary"></span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center pb-2">
                                                            <p class="fs-sm mb-0" style="cursor: pointer;" data-bs-toggle="popover" data-bs-animation="true" data-bs-placement="top" title="" data-bs-content="Kamu berpotensi mendapatkan Cashback Gimkoin yang dapat kamu gunakan untuk pembelian produk tertentu. Satu Gimkoin setara dengan 1 rupiah. Pastikan kamu telah login ke akun kamu dahulu." data-bs-original-title="Cashback Gimkoin">Cashback Gimkoin <i class="ms-1 far fa-question-circle"></i></p>
                                                            <p class="desk_coin-amount fs-sm fw-semibold text-end h6 mb-0">-</p>
                                                        </div>
                                                        <div class="d-flex flex-column border-top pt-2 align-items-end">
                                                            <span class="fs-sm fw-semibold text-end pb-2">Total Tagihan</span>
                                                            <div class="d-flex align-items-center pb-2">
                                                                <span class="fs-sm me-2"><del class="desk_amount-crossed-out no-strip"></del></span>
                                                                <span id="productPriceIDR" class="desk_productPriceIDR fs-lg fw-semibold text-end text-currency">-</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <div id="guarantee-container" class="desk_guarantee-container d-flex align-items-center text-gray-dark fs-xs animated fadeIn mt-2 d-none">
                                                            (<span id="item-price" class="desk_item-price fw-light me-1"></span>+<i class="fa fa-shipping-fast mx-1"></i><span id="guarantee-price" class="desk_guarantee-price fw-light">Rp2.500</span>)
                                                        </div>
                                                        <span id="exfee-summary" class="desk_exfee-summary fs-xs text-muted mt-2 d-none">Total tagihan di atas belum termasuk biaya metode pembayaran <span id="exfee-channel-name" class="desk_exfee-channel-name"></span> yang dibebankan ke pembeli.</span>
                                                    </div>
                                                    <div class="px-2 py-2 mt-3 bg-info-light rounded d-flex align-items-center">
                                                        <i class="far fa-info-circle me-2 text-info"></i><span class="fs-xs text-info">Pastikan pesanan kamu sudah benar sebelum melanjutkan pesanan. Login/Register untuk mendapatkan Cashback Gimkoin.</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="confirmation-submit" class="desk_confirmation-submit row justify-content-center px-2 px-lg-3 py-2">
                                                <button id="productProceed" type="button" class="desk_productProceed btn btn-hero btn-primary">
                                                    Beli Sekarang
                                                </button>
                                            </div>
                                            <div id="confirmation-extra" class="desk_confirmation-extra row justify-content-center px-2 px-lg-3 py-2 d-none">
                                                <button type="button" onclick="location.href='https://resellergame.com/'" class="btn btn-hero btn-primary">
                                                    Mendaftar Agen
                                                </button>
                                            </div>
                                            <div id="confirmation-sign-in" class="desk_confirmation-sign-in row justify-content-center px-2 px-lg-3 py-2 d-none">
                                                <button type="button" onclick="location.href='../../auth/sign-in.html'" class="btn btn-hero btn-primary">
                                                    Masuk Akun
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- END Purchasing -->
                            </ul>
                        </form>

                        <!-- Review Content -->
                        <div id="parent-content-review-mobile" class="d-none" data-shown="1"></div>
                        <!-- END Review Content -->

                        <!-- Ranking Content -->
                        <div id="parent-content-ranking-mobile" class="d-none" data-shown=""></div>
                        <!-- END Ranking Content -->

                        <!-- Article Content -->
                        <div id="parent-content-article-mobile" class="d-none"></div>
                        <!-- END Article Content -->

                        <!-- Faq Content -->
                        <div id="parent-content-faq" class="mt-5 d-none" style="margin-left: 4rem;">
                        </div>
                        <!-- END Faq Content -->

                        <!-- Share Modal -->
                        <div class="modal fade" id="modal-share-content" tabindex="-1" role="dialog" aria-labelledby="modal-share-content" aria-describedby="modal-share-content" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-fadein modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Bagikan Ke</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body min-scrollbar">
                                        <div class="d-flex flex-row flex-wrap justify-content-center">
                                            <a class="fw-semibold m-3" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Ftopupgim.com%2Fproduct%2Fzenless-zone-zero%2F1528241863%3Faff%3DInternal_Share" target="_blank">
                                                <i class="fab fa-2x fa-facebook opacity-75"></i>
                                            </a>
                                            <a class="fw-semibold m-3" href="https://twitter.com/share?url=https%3A%2F%2Ftopupgim.com%2Fproduct%2Fzenless-zone-zero%2F1528241863%3Faff%3DInternal_Share" target="_blank">
                                                <i class="fab fa-2x fa-twitter opacity-75"></i>
                                            </a>
                                            <a class="fw-semibold m-3" href="https://api.whatsapp.com/send?text=https%3A%2F%2Ftopupgim.com%2Fproduct%2Fzenless-zone-zero%2F1528241863%3Faff%3DInternal_Share" target="_blank">
                                                <i class="fab fa-2x fa-whatsapp opacity-75"></i>
                                            </a>
                                            <a class="fw-semibold m-3" href="https://pinterest.com/pin/create/button/?url=https%3A%2F%2Ftopupgim.com%2Fproduct%2Fzenless-zone-zero%2F1528241863%3Faff%3DInternal_Share" target="_blank">
                                                <i class="fab fa-2x fa-pinterest opacity-75"></i>
                                            </a>
                                            <a class="fw-semibold m-3" href="https://t.me/share/url?url=https%3A%2F%2Ftopupgim.com%2Fproduct%2Fzenless-zone-zero%2F1528241863%3Faff%3DInternal_Share" target="_blank">
                                                <i class="fab fa-2x fa-telegram opacity-75"></i>
                                            </a>
                                            <a class="fw-semibold m-3" href="https://linkedin.com/sharing/share-offsite/?url=https%3A%2F%2Ftopupgim.com%2Fproduct%2Fzenless-zone-zero%2F1528241863%3Faff%3DInternal_Share" target="_blank">
                                                <i class="fab fa-2x fa-linkedin opacity-75"></i>
                                            </a>
                                        </div>
                                        <p class="fs-sm fw-light text-center mb-4 mt-1 text-dark" style="word-break:break-all; word-wrap: break-word;">https://topupgim.com/product/zenless-zone-zero/1528241863?aff=Internal_Share</p>
                                        <p class="fs-sm mb-3 border-top pt-3">Ajak pelanggan baru ke TopUpGim menggunakan link referral, dan kamu menerima 50% dari setiap keuntungan pembelian.<br /><a href="{{ route('page.show', 'referral') }}" target="_blank">Baca program referral lebih lanjut</a></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Share Modal -->

                        <!-- How To Get ID Modal -->
                        <div class="modal fade" id="modal-product-helper" tabindex="-1" role="dialog" aria-labelledby="modal-product-helper" aria-describedby="modal-product-helper" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-fadein modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Menemukan Informasi Akun</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body min-scrollbar">
                                        <img class="img-fluid w-100 h-auto rounded mb-4" src="../../https://cdn.topupgim.com/product-helpers/71ae9f2e-bf34-4d23-b619-87149c6446e8.jpg">
                                        <div class="static-page"><p>Untuk menemukan UID Anda, masuklah ke akun Anda di dalam aplikasi. Ketuk nama pengguna Anda di sudut kiri atas, dan UID akan ditampilkan di sebelah kiri.</p></div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END How To Get ID Modal -->

                        <!-- Verification ID Modal -->
                        <div class="modal fade" id="modal-product-info" tabindex="-1" role="dialog" aria-labelledby="modal-product-info" aria-describedby="modal-product-info" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-fadein modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 id='modal-product-info-title' class="modal-title"></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body min-scrollbar">
                                        <div class="d-flex flex-column align-items-center pt-4 w-100" style="min-height: 200px;">
                                            <h4 id="modal-product-info-message" class="text-center d-none"></h4>
                                            <div id="modal-product-info-player" class="d-flex flex-column w-100 mx-3">
                                                <p class="text-muted fs-sm mb-2"><i class="far fa-check-circle me-2"></i>Informasi akun tersimpan pada browser</p>
                                                <div class="w-100 border rounded">
                                                    <div class="d-flex justify-content-between align-items-center w-100 px-4 py-2">
                                                        <span class="text-primary fw-semibold">ID</span>
                                                        <span id="modal-product-info-player-id"></span>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center border-top px-4 py-2">
                                                        <span class="text-primary fw-semibold">Nama</span>
                                                        <span id="modal-product-info-player-name"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Verification ID Modal -->

                        <!-- How To Order Modal -->
                        <div class="modal fade" id="modal-how-to-order" tabindex="-1" role="dialog" aria-labelledby="modal-how-to-order" aria-describedby="modal-how-to-order" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-fadein modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tutorial Pembelian</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body min-scrollbar">
                                        <div class="static-page" style="min-height: 380px;"><p><strong>Video Youtube </strong>Tutorial Pembelian Tanpa perlu Login.</p><div style="border-radius:12px;height:0;overflow:hidden;padding-bottom:56.25%;position:relative;"><iframe style="height:100%;left:0;position:absolute;top:0;width:100%;" src="https://www.youtube.com/embed/7_g48wHaA-Y" title="Tutorial Pembelian Tanpa Login" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen="">
      </iframe></div></div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END How To Order Modal -->


                        <!-- Pop Info Modal -->
                        <div class="modal fade" id="modal-pop-info" tabindex="-1" role="dialog" aria-labelledby="modal-pop-info" aria-describedby="modal-pop-info" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-fadein modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 id="modal-title-pop-info" class="modal-title"></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body min-scrollbar">
                                        <div id="modal-body-pop-info" class="static-page" style="min-height: 300px;"></div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Pop Info Modal -->

                        <!-- Redemption Avaliable Modal -->
                        <div class="modal fade" id="modal-redemption-content" tabindex="-1" role="dialog" aria-labelledby="modal-redemption-content" aria-describedby="modal-share-content" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-fadein modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Promo Tersedia</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body min-scrollbar">
                                        <div class="d-flex flex-column align-items-center w-100" style="min-height: 200px;">
                                            <span class="text-muted fs-lg py-4 px-2">Oops.., belum ada apa-apa di sini.</span>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Redemption Avaliable Modal -->

                        <!-- Pop In Confirmation -->
                        <div class="modal fade" id="modal-product-confirmation" tabindex="-1" role="dialog" aria-labelledby="modal-product-confirmation" aria-describedby="modal-product-confirmation" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-fadein modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Mohon Konfirmasi Detail Pesanan Anda</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body min-scrollbar">
                                        <div class="d-flex flex-column">
                                            <div class="d-flex justify-content-between align-items-center pb-3 mb-3 border-bottom border-2">
                                                <div class="ratio ratio-1x1" style="width: 50px;">
                                                    <img class="img-fluid product-tile" style="background-image: url('../../https://cdn.topupgim.com/product-tiles/3444314e-f59c-4f57-b727-5018a31a4986ebf4.jpg?w=200');">
                                                </div>
                                                <div class="d-flex justify-content-end flex-column align-items-end">
                                                    <span class="h6 fs-normal fw-semibold mb-2">Zenless Zone Zero</span>
                                                    <span id="purchase-denomination-text" class="h6 fs-normal fw-normal m-0"></span>
                                                </div>
                                            </div>
                                            <div id="purchase-property-player-name" class="d-flex justify-content-between align-items-center pb-2 d-none">
                                                <p class="fs-sm mb-0 text-nowrap">Nama Pemain</p>
                                                <div class="d-flex flex-column align-items-end">
                                                    <p id="purchase-property-player-name-text" class="text-end text-primary fs-normal fw-semibold mb-0"></p>
                                                    <span id="purchase-property-no-verified" class="text-end fs-xs text-muted d-none">Pastikan kamu yakin dengan info akunmu</span>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center pb-2">
                                                <p class="fs-sm mb-0">User ID</p>
                                                <p id="purchase-property-user_id-text" class="fs-sm fw-normal h6 mb-0"></p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center pb-2">
                                                <p class="fs-sm mb-0">Server</p>
                                                <p id="purchase-property-zone_id-text" class="fs-sm fw-normal h6 mb-0"></p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center pb-2">
                                                <p class="fs-sm mb-0">Metode Pembayaran</p>
                                                <p id="purchase-method-text" class="fs-sm fw-normal text-end h6 mb-0"></p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center pb-2">
                                                <p class="fs-sm mb-0">Nomor WhatsApp</p>
                                                <p id="purchase-whatsapp-text" class="fs-sm fw-normal text-end h6 mb-0"></p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center pb-2">
                                                <p class="fs-sm mb-0" style="cursor: pointer;" data-bs-toggle="popover" data-bs-animation="true" data-bs-placement="top" title="" data-bs-content="Kamu berpotensi mendapatkan Cashback Gimkoin yang dapat kamu gunakan untuk pembelian produk tertentu. Satu Gimkoin setara dengan 1 rupiah. Pastikan kamu telah login ke akun kamu dahulu." data-bs-original-title="Cashback Gimkoin">Cashback Gimkoin<i class="ms-1 far fa-question-circle"></i></p>
                                                <span>
                                                    <span class="desk_coin-amount fs-sm fw-semibold text-end h6 mb-0"></span>
                                                    <a href="../../auth/sign-in.html" class="fs-sm fw-semibold">(Perlu Login -&gt;)</a>
                                                </span>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center pb-2">
                                                <p class="fs-sm mb-0">Total Tagihan</p>
                                                <div class="d-flex flex-column align-items-end animated fadeIn">
                                                    <p id="purchase-price-text" class="fs-normal fw-semibold mb-0 text-currency"></p>
                                                    <div class="d-flex align-items-center">
                                                        <div id="purchase-disc-container" class="d-flex align-items-center text-gray-dark fs-xs d-none">
                                                            <i class="fa fa-tag me-2"></i><del><span id="purchase-disc-init-price" class="fw-light"></span></del>
                                                        </div>
                                                        <div id="purchase-guarantee-container" class="d-flex align-items-center text-gray-dark fs-xs ms-2 d-none">
                                                            (<span id="purchase-item-price" class="fw-light me-1"></span>+<i class="fa fa-shipping-fast mx-1"></i><span id="purchase-guarantee-price" class="fw-light">Rp2.500</span>)
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="border-top border-2 fs-sm mt-2 mb-4 pt-3">Terkonfirmasi sebagai menerima <a href="{{ route('page.show', 'terms-of-use') }}" class="fw-semibold text-dark"><u>Terms of Use</u></a> &amp; <a href="{{ route('page.show', 'privacy-policy') }}" class="fw-semibold text-dark"><u>Privacy Policy</u></a></p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">Batal</button>
                                        <button id="productSubmit" type="button" class="btn btn-primary">Konfirmasi</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Pop In Confirmation -->                    </div>
                </div>
            </div>

            <div class="content">
                <!-- Faq Content -->
                <div id="parent-content-faq-mobile" class="d-none mb-5"></div>
                <!-- END Faq Content -->

                <!-- Pages -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="m-0">Kabar dan Promosi</h3>
                    <button type="button" class="btn btn-sm btn-alt-secondary" onclick="location.href='../../featured/news-and-promotions1191.html?code=1528241863';">
                        <i class="fa fa-fw fa-arrow-right text-muted"></i>
                    </button>
                </div>
                <div class="row items-push mb-4">
                    <div class="col-sm-6 col-lg-4">
                        <a class="block block-rounded block-link-pop overflow-hidden h-100 mb-0" href="../../news/build-belle-terbaik-di-zenless-zone-zero-maksimalkan-damage-dan-skillnya.html">
                            <div class="ratio mb-1" style="--bs-aspect-ratio: 55%;">
                                <div>
                                    <img class="lazy img-fluid img-round-top img-slider w-100" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/pages/d997f148-f06f-404d-a2d6-f3403955e2ff.jpg?w=500" alt="Gambar Artikel">
                                </div>
                            </div>
                            <div class="block-content block-content-full h-100">
                                <p class="fw-bold mb-1 text-truncate">
                                    Build Belle Terbaik di Zenless Zone Zero! Maksimalkan Damage dan Skillnya!
                                </p>
                                <p class="fs-sm fw-medium text-muted text-line-2 mb-0">
                                    Maksimalkan potensi Belle di Zenless Zone Zero dengan build terbaik! Temukan rekomendasi senjata, artefak, hingga strategi skill untuk jadi DPS mematikan di semua mode pertempuran.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <a class="block block-rounded block-link-pop overflow-hidden h-100 mb-0" href="../../news/kolaborasi-zenless-zone-zero-aston-martin-inovasi-gaya-dan-aksi-dalam-dunia-game.html">
                            <div class="ratio mb-1" style="--bs-aspect-ratio: 55%;">
                                <div>
                                    <img class="lazy img-fluid img-round-top img-slider w-100" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/pages/597308f7-5f55-42c3-b4f8-500a62d8352b.jpg?w=500" alt="Gambar Artikel">
                                </div>
                            </div>
                            <div class="block-content block-content-full h-100">
                                <p class="fw-bold mb-1 text-truncate">
                                    Kolaborasi Zenless Zone Zero × Aston Martin: Inovasi Gaya dan Aksi dalam Dunia Game
                                </p>
                                <p class="fs-sm fw-medium text-muted text-line-2 mb-0">
                                    Kolaborasi futuristik Zenless Zone Zero × Aston Martin hadirkan sensasi gaming penuh gaya dan kecepatan! Eksplorasi kota dengan mobil ikonik dan skin eksklusif – hanya untuk pemain yang siap tampil beda.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <a class="block block-rounded block-link-pop overflow-hidden h-100 mb-0" href="../../news/zenless-zone-zero-2-1-deburan-ombak-kala-menyapa-siap-guncang-musim-panas.html">
                            <div class="ratio mb-1" style="--bs-aspect-ratio: 55%;">
                                <div>
                                    <img class="lazy img-fluid img-round-top img-slider w-100" src="../../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/pages/0529e259-45bd-46f0-a29d-eab00ec090b4.jpg?w=500" alt="Gambar Artikel">
                                </div>
                            </div>
                            <div class="block-content block-content-full h-100">
                                <p class="fw-bold mb-1 text-truncate">
                                    Zenless Zone Zero 2.1 “Deburan Ombak Kala Menyapa” Siap Guncang Musim Panas!
                                </p>
                                <p class="fs-sm fw-medium text-muted text-line-2 mb-0">
                                    Update Zenless Zone Zero 2.1 “Deburan Ombak Kala Menyapa” hadir dengan map Sunset Jetty, karakter baru Haiyan &amp; Luna, event seru, dan fitur sistem terbaru. Siap sambut musim panas dengan petualangan penuh aksi dan hadiah melimpah!
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- END Pages -->


                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="m-0">Top Up Game Populer Lainnya</h3>
                    <button type="button" class="btn btn-sm btn-alt-secondary" onclick="location.href='../../category/Game.html';">
                        <i class="fa fa-fw fa-arrow-right text-muted"></i>
                    </button>
                </div>
                <div class="d-flex flex-wrap mb-5">
                    <a href="../mobile-legends/1528378309.html" title="top up Mobile Legends" class="btn btn-alt-primary rounded-pill me-2 mb-2">
                        Mobile Legends
                    </a>
                    <a href="../free-fire/1528555434.html" title="top up Free Fire" class="btn btn-alt-primary rounded-pill me-2 mb-2">
                        Free Fire
                    </a>
                    <a href="../hago/1528242362.html" title="top up HAGO" class="btn btn-alt-primary rounded-pill me-2 mb-2">
                        HAGO
                    </a>
                    <a href="../honor-of-kings/1528385129.html" title="top up Honor of Kings" class="btn btn-alt-primary rounded-pill me-2 mb-2">
                        Honor of Kings
                    </a>
                    <a href="../pubgm/1528036161.html" title="top up PUBGM Global" class="btn btn-alt-primary rounded-pill me-2 mb-2">
                        PUBGM Global
                    </a>
                    <a href="../call-of-duty-mobile/1528919312.html" title="top up Call of Duty Mobile" class="btn btn-alt-primary rounded-pill me-2 mb-2">
                        Call of Duty Mobile
                    </a>
                    <a href="../blood-strike/1528112021.html" title="top up Blood Strike" class="btn btn-alt-primary rounded-pill me-2 mb-2">
                        Blood Strike
                    </a>
                    <a href="../zepeto/1528847900.html" title="top up Zepeto" class="btn btn-alt-primary rounded-pill me-2 mb-2">
                        Zepeto
                    </a>
                    <a href="../genshin-impact/1528787297.html" title="top up Genshin Impact" class="btn btn-alt-primary rounded-pill me-2 mb-2">
                        Genshin Impact
                    </a>
                    <a href="../magic-chess-go-go/1528273402.html" title="top up Magic Chess Go Go" class="btn btn-alt-primary rounded-pill me-2 mb-2">
                        Magic Chess Go Go
                    </a>
                    <a href="../eggy-party/1528742300.html" title="top up Eggy Party" class="btn btn-alt-primary rounded-pill me-2 mb-2">
                        Eggy Party
                    </a>
                    <a href="../point-blank/1528615283.html" title="top up Point Blank" class="btn btn-alt-primary rounded-pill me-2 mb-2">
                        Point Blank
                    </a>
                    <a href="../super-sus/1528483107.html" title="top up Super Sus" class="btn btn-alt-primary rounded-pill me-2 mb-2">
                        Super Sus
                    </a>
                    <a href="../steam-wallet-voucher/1528569704.html" title="top up Steam Wallet Voucher" class="btn btn-alt-primary rounded-pill me-2 mb-2">
                        Steam Wallet Voucher
                    </a>
                    <a href="../garena-undawn/1528433756.html" title="top up Garena Undawn" class="btn btn-alt-primary rounded-pill me-2 mb-2">
                        Garena Undawn
                    </a>
                </div>
            </div>
        </main>
        <!-- END Main Container -->

@endsection
