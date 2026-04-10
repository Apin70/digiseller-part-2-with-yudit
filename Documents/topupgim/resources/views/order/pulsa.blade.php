@extends('layouts.app')

@section('title', 'Isi Pulsa di Topupgim - TopUpGim')

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
                <div class="row gx-5 flex-md-grow-1 pb-4">
                    <div class="col-lg-5">
                        <div class="my-4 mx-2">
                            <div class="block block-rounded block-mode-loading-circle block-themed">
                                <div class="block-content block-content-full">
                                    <label class="form-label" for="inputPhoneNumber">Nomor HP</label>
                                    <div class="input-group mb-4">
                                        <span class="input-group-text input-group-text-alt">
                                            <i class="far fa-address-book"></i>
                                        </span>
                                        <input id="inputPhoneNumber" name="inputPhoneNumber" type="search" class="form-control form-control-lg form-control-alt phone" placeholder="08XXXXXXXXXX" data-lpignore="true" autocomplete="off">
                                    </div>
                                    <button type="button" id="buttonComfirm" class="btn btn-sm btn-hero btn-primary w-100 disabled">
                                        Beli Pulsa
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7" style="min-height: 35em;">
                        <div class="my-4 mx-2">
                            <!-- Products -->
                            <div class="d-flex flex-column mb-4" style="scroll-margin-top: 100px;">
                                <div class="d-flex align-items-top">
                                    <img class="lazy me-2 me-lg-3" style="width: 27px; height: 1.6rem; object-fit: cover;" src="../https://cdn.topupgim.com/no-image2575.jpg?w=100" data-src="https://cdn.topupgim.com/category-icons/562478a4-afba-4a6a-acd9-02954df15bed.png" alt="Pulsa">
                                    <h3 class="m-0">Pulsa</h3>
                                </div>
                                <p class="fs-sm mb-0" style="color: #606060;"></p>
                                <div id="productList" class="row row-cols-3 row-cols-sm-3 row-cols-md-4 row-cols-lg-3 row-cols-xl-4 g-4 pt-4 mb-4">
                                    <a id="1528768154" data-id="1528768154" data-title="Telkomsel" data-sim-operator="TELKOMSEL" data-property-key="no_hp" class="product-item animated fadeIn" href="../product/telkomsel/152876815481d9.html?section=content-property" title="Topup Telkomsel">
                                        <div class="product-tile-idea-card bg-body-extra-light h-100">
                                            <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                                <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/7b91b6b1-b983-4b74-b93f-75acce75f3fc.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                                </div>
                                            </div>
                                            <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                                <span class="text-dark fs-sm d-none d-lg-block">Telkomsel</span>
                                                <span class="text-dark fs-xs d-block d-lg-none">Telkomsel</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a id="1528542016" data-id="1528542016" data-title="Indosat IM3" data-sim-operator="INDOSAT" data-property-key="no_hp" class="product-item animated fadeIn" href="../product/indosat-im3/152854201681d9.html?section=content-property" title="Topup Indosat IM3">
                                        <div class="product-tile-idea-card bg-body-extra-light h-100">
                                            <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                                <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/4b2b36af-b0fc-4558-9978-74b1986a7063.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                                </div>
                                            </div>
                                            <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                                <span class="text-dark fs-sm d-none d-lg-block">Indosat IM3</span>
                                                <span class="text-dark fs-xs d-block d-lg-none">Indosat IM3</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a id="1528761408" data-id="1528761408" data-title="XL Pulsa" data-sim-operator="XL" data-property-key="no_hp" class="product-item animated fadeIn" href="../product/xl-pulsa/152876140881d9.html?section=content-property" title="Topup XL Pulsa">
                                        <div class="product-tile-idea-card bg-body-extra-light h-100">
                                            <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                                <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/f9829a99-6cb4-4123-925d-d76bc9f6f978.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                                </div>
                                            </div>
                                            <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                                <span class="text-dark fs-sm d-none d-lg-block">XL Pulsa</span>
                                                <span class="text-dark fs-xs d-block d-lg-none">XL Pulsa</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a id="1528027223" data-id="1528027223" data-title="AXIS" data-sim-operator="AXIS" data-property-key="no_hp" class="product-item animated fadeIn" href="../product/axis/152802722381d9.html?section=content-property" title="Topup AXIS">
                                        <div class="product-tile-idea-card bg-body-extra-light h-100">
                                            <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                                <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/ef4b4b8d-302f-4b58-8a32-7766ebfbf07e.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                                </div>
                                            </div>
                                            <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                                <span class="text-dark fs-sm d-none d-lg-block">AXIS</span>
                                                <span class="text-dark fs-xs d-block d-lg-none">AXIS</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a id="1528658729" data-id="1528658729" data-title="Tri" data-sim-operator="THREE" data-property-key="no_hp" class="product-item animated fadeIn" href="../product/tri/152865872981d9.html?section=content-property" title="Topup Tri">
                                        <div class="product-tile-idea-card bg-body-extra-light h-100">
                                            <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                                <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/0e0383e1-54bc-459c-8fbf-449634b04321.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                                </div>
                                            </div>
                                            <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                                <span class="text-dark fs-sm d-none d-lg-block">Tri</span>
                                                <span class="text-dark fs-xs d-block d-lg-none">Tri</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a id="1528707010" data-id="1528707010" data-title="SMARTFREN" data-sim-operator="SMARTFREN" data-property-key="no_hp" class="product-item animated fadeIn" href="../product/smartfren/152870701081d9.html?section=content-property" title="Topup SMARTFREN">
                                        <div class="product-tile-idea-card bg-body-extra-light h-100">
                                            <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                                <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/dfd8d57d-8582-46e4-8142-66f02b727f3f.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                                </div>
                                            </div>
                                            <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                                <span class="text-dark fs-sm d-none d-lg-block">SMARTFREN</span>
                                                <span class="text-dark fs-xs d-block d-lg-none">SMARTFREN</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a id="1528768154" data-id="1528768154" data-title="Telkomsel" data-sim-operator="TELKOMSEL" data-property-key="no_hp" class="product-item animated fadeIn" href="../product/telkomsel/152876815481d9.html?section=content-property" title="Topup Telkomsel">
                                        <div class="product-tile-idea-card bg-body-extra-light h-100">
                                            <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                                <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/7b91b6b1-b983-4b74-b93f-75acce75f3fc.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                                </div>
                                            </div>
                                            <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                                <span class="text-dark fs-sm d-none d-lg-block">Telkomsel</span>
                                                <span class="text-dark fs-xs d-block d-lg-none">Telkomsel</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a id="1528542016" data-id="1528542016" data-title="Indosat IM3" data-sim-operator="INDOSAT" data-property-key="no_hp" class="product-item animated fadeIn" href="../product/indosat-im3/152854201681d9.html?section=content-property" title="Topup Indosat IM3">
                                        <div class="product-tile-idea-card bg-body-extra-light h-100">
                                            <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                                <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/4b2b36af-b0fc-4558-9978-74b1986a7063.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                                </div>
                                            </div>
                                            <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                                <span class="text-dark fs-sm d-none d-lg-block">Indosat IM3</span>
                                                <span class="text-dark fs-xs d-block d-lg-none">Indosat IM3</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a id="1528027223" data-id="1528027223" data-title="AXIS" data-sim-operator="AXIS" data-property-key="no_hp" class="product-item animated fadeIn" href="../product/axis/152802722381d9.html?section=content-property" title="Topup AXIS">
                                        <div class="product-tile-idea-card bg-body-extra-light h-100">
                                            <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                                <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/ef4b4b8d-302f-4b58-8a32-7766ebfbf07e.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                                </div>
                                            </div>
                                            <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                                <span class="text-dark fs-sm d-none d-lg-block">AXIS</span>
                                                <span class="text-dark fs-xs d-block d-lg-none">AXIS</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a id="1528707010" data-id="1528707010" data-title="SMARTFREN" data-sim-operator="SMARTFREN" data-property-key="no_hp" class="product-item animated fadeIn" href="../product/smartfren/152870701081d9.html?section=content-property" title="Topup SMARTFREN">
                                        <div class="product-tile-idea-card bg-body-extra-light h-100">
                                            <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                                <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/dfd8d57d-8582-46e4-8142-66f02b727f3f.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                                </div>
                                            </div>
                                            <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                                <span class="text-dark fs-sm d-none d-lg-block">SMARTFREN</span>
                                                <span class="text-dark fs-xs d-block d-lg-none">SMARTFREN</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a id="1528658729" data-id="1528658729" data-title="Tri" data-sim-operator="THREE" data-property-key="no_hp" class="product-item animated fadeIn" href="../product/tri/152865872981d9.html?section=content-property" title="Topup Tri">
                                        <div class="product-tile-idea-card bg-body-extra-light h-100">
                                            <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                                <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/0e0383e1-54bc-459c-8fbf-449634b04321.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                                </div>
                                            </div>
                                            <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                                <span class="text-dark fs-sm d-none d-lg-block">Tri</span>
                                                <span class="text-dark fs-xs d-block d-lg-none">Tri</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a id="1528761408" data-id="1528761408" data-title="XL Pulsa" data-sim-operator="XL" data-property-key="no_hp" class="product-item animated fadeIn" href="../product/xl-pulsa/152876140881d9.html?section=content-property" title="Topup XL Pulsa">
                                        <div class="product-tile-idea-card bg-body-extra-light h-100">
                                            <div class="pt-1 px-3 pt-lg-2 px-lg-4">
                                                <div class="lazy product-tile-idea position-relative mt-3" data-bg="https://cdn.topupgim.com/product-tiles/f9829a99-6cb4-4123-925d-d76bc9f6f978.png?w=200" style="background-image: url('../https://cdn.topupgim.com/no-image2575.jpg?w=100');">
                                                </div>
                                            </div>
                                            <div class="text-center mb-3" style="line-height: normal; margin-top: 0.8em; padding: 0 4px 0 4px;">
                                                <span class="text-dark fs-sm d-none d-lg-block">XL Pulsa</span>
                                                <span class="text-dark fs-xs d-block d-lg-none">XL Pulsa</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- END Products -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->

@endsection
