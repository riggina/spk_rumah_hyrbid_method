@extends('layouts.main')

@section('container')
    <div class="container mt-3">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Hasil Pencarian</li>
        </ol>
      </nav>
        <div class="container d-flex justify-content-center align-items-center" style="height: 50vh">
            <h4>{{$message}}</h4>
        </div>
    </div>
@endsection

@section('footer')
  <p>2023 Sistem Pendukung Keputusan Rekomendasi Rumah Tinggal Balikpapan</p>
@endsection

@php
    $showHeader = true;
    $showFooter = true;
@endphp