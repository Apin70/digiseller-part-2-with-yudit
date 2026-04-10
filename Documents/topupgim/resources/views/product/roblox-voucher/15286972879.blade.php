@extends('layouts.app')

@section('title', 'Halaman tidak ditemukan - Topupgim - TopUpGim')

@section('content')

                        <!-- Content -->
                        <div class="flex-grow-1 d-flex align-items-center p-5 bg-body-light">
                            <div class="w-100">
                                <p class="text-danger fs-4 fw-bold text-uppercase mb-2">
                                    404 Kesalahan
                                </p>
                                <p class="fs-4 fw-medium text-muted mb-5">
                                    Maaf halaman yang Anda cari tidak ditemukan.
                                </p>
                                <a class="btn btn-lg btn-alt-danger" href="https://topupgim.com/">
                                    <i class="fa fa-arrow-left opacity-50 me-1"></i>
                                    Kembali ke Beranda
                                </a>
                            </div>
                        </div>
                        <!-- END Content -->

@endsection
