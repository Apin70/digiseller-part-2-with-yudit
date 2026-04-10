@extends('layouts.app')

@section('title', 'Pencarian: ' . ($keyword ?? '') . ' - TopUpGim')

@section('content')
        <!-- Main Container -->
        <main id="main-container" class="container-home">
            <div class="content py-5 text-center">
                <h2>Hasil Pencarian</h2>
                @if($keyword)
                    <p class="text-muted">Menampilkan hasil untuk: <strong>{{ $keyword }}</strong></p>
                @else
                    <p class="text-muted">Masukkan kata kunci pencarian.</p>
                @endif
            </div>
        </main>
@endsection
