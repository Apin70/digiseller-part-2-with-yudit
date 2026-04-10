@extends('layouts.app')

@section('title', 'Referral Topupgim - Topupgim - TopUpGim')

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
                        <h2 class="text-center mb-5">Referral Topupgim</h2>
                        <div class="static-page pb-5">
                            <p>&nbsp;</p><p>Referral Topupgim, cara menghasilkan uang modal HP dan internet.</p><figure class="image"><img src="../https://cdn.topupgim.com/pages/07ecbc9d-5cd8-4713-84c7-f195f73a461a.jpg"></figure><figure class="image"><img src="../https://cdn.topupgim.com/pages/23cc2419-dd0b-4ede-9138-900f495a363b.jpg"></figure><figure class="image"><img src="../https://cdn.topupgim.com/pages/c4729879-373c-4222-84ea-6f6e61db9ead.jpg"></figure><figure class="image"><img src="../https://cdn.topupgim.com/pages/8f30d0b5-122b-4946-867b-6c5aaf608b71.jpg"></figure><figure class="image"><img src="../https://cdn.topupgim.com/pages/dcbbb973-1ba1-403e-8123-6b0cca227f24.jpg"></figure><figure class="image"><img src="../https://cdn.topupgim.com/pages/f19bbe88-76f2-4c85-9a5c-4d03b58a9a74.jpg"></figure><figure class="image"><img src="../https://cdn.topupgim.com/pages/31fdff84-77c2-4961-b430-a554d0894258.jpg"></figure><figure class="image"><img src="../https://cdn.topupgim.com/pages/c49b5bc1-82a9-4910-8953-07b86bb4852e.jpg"></figure><figure class="image"><img src="../https://cdn.topupgim.com/pages/693e45bf-da86-4ec3-894b-e049516b021a.jpg" alt=""></figure><p>&nbsp;</p><h3><strong>Cara Kerja Topupgim Referal</strong></h3><p>Cara kerja program Topupgim Referal cukup sederhana. Kamu cukup <i>join</i>, mempromosikan produk, dan kamu sudah bisa mendapatkan komisi jika ada transaksi melalui link referal kamu. Berikut ini adalah cara mengikuti program Topupgim Affiliate.</p><ol><li>Buat akun di Topupgim</li><li>Buat link referal dari produk yang kamu ingin sebarkan</li><li>Sebarkan link ke teman kamu melalui sosial media seperti youtube, whatsapp, instagram, tiktok, dan lainnya.</li><li>Jika ada transkasi melalui link yang kamu sebarkan, kamu akan mendapatkan komisi.</li></ol><p>&nbsp;</p><h3>Jumlah Komisi Per Transaksi</h3><p>Komisi yang kamu dapatkan 50% dari keuntungan transaksi. Contohnya 284 Diamond Mobile Legends keuntungannya Rp10.000, maka kamu akan mendapkan komisi sebesar <strong>Rp. 5000</strong>.</p><p>&nbsp;</p><h3>Berapa Lama Link Transaksi Tercatat Sebagai Komisi?</h3><p>Jika ada yang klik link referal kamu, maka kamu akan mendapatkan komisi dari semua transaksi yang mereka lakukan<strong> selama 90 hari.</strong></p><p><strong>Contoh: </strong>ada 100 orang yang klik link referal kamu, dapat dalam 3 bulan jumlah transaksi mereka adalah 10 transaksi, maka jika di rata-ratakan pertransaksi kamu dapat komisi Rp.2000</p><p>100 (orang) x 10 (transaksi) x Rp. 2000 (komisi) = <strong>Rp. 2000.000</strong></p><p>&nbsp;</p><h3>Saya Share Pulsa Telkomsel, tapi Mereka Membeli Pulsa Axis apakah dapat komisi?</h3><p>Semua transaksi yang berasal dari link referral yang kamu sebarkan akan dihitung sebagai komisi, walaupun mereka membeli produk yang berbeda. Link Referral kamu akan menempel selama 90 Hari di akun mereka.</p><p><strong>Ketentuan produk dan konten yang dilarang:</strong></p><ul><li>Produk dan konten yang berkaitan dengan kegiatan ilegal (narkoba dan obat-obatan terlarang, penipuan, terorisme, tindakan kriminal, dll)</li><li>Produk dan konten yang berkaitan dengan tembakau, perjudian, dan senjata</li><li>Produk dan konten yang berkaitan dengan pornografi atau cabul</li><li>Produk dan konten yang berkaitan dengan kekerasan</li><li>Produk dan konten yang mengandung ujaran kebencian, bersifat memfitnah atau mencemarkan, dan diskriminatif</li></ul><figure class="image"><img></figure><figure class="image"><img></figure>
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
