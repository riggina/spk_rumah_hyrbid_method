@extends('layouts.main')

@section('container')
<div class="container mt-3">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/banner.png" class="d-block w-100" alt="gambar">
          </div>
          <div class="carousel-item">
            <img src="img/banner.png" class="d-block w-100" alt="gambar">
          </div>
          <div class="carousel-item">
            <img src="img/banner.png" class="d-block w-100" alt="gambar">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br/>
    <div class="row d-flex">
      <div class="col title-of">
        Rekomendasi Rumah Paling Baru
      </div>
      <div class="col d-flex align-items-end justify-content-end mb-2">
        <a href="/dariperingkat">Lihat rumah berdasarkan peringkat</a>
      </div>
    </div>
    
    <div class="row gy-3">
      @include('partials/card')
    </div>
</div>
@endsection

@section('footer')
  <p>2023 Sistem Pendukung Keputusan Rekomendasi Rumah Tinggal Balikpapan.</p>
@endsection

@php
    $showHeader = true;
    $showFooter = true;
@endphp
