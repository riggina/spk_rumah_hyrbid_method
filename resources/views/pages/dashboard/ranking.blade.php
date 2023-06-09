@extends('layouts.main')

@section('container')
    @include('partials/sidebars')
    <div class="container dashboard">
        <div class="col-md-12 my-5 d-flex">
            <div class="col-md-6">
                <h4>Peringkat</h4>
            </div>
            <div class="col-md-6 col-sm-6 d-flex justify-content-end">
                @if (auth()->check())
                    <nav class="navbar navbar-expand-sm">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ auth()->user()->name }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <li><a class="dropdown-item" href="/register">Create New Admin</a></li>
                                </ul>
                              </li>   
                        </ul>
                    </nav>
                @endif
            </div>   
        </div>
        <div class="col-md-12">
            <table>
                <thead>
                    <tr>
                        <th class="date">Rank</th>
                        <th  class="date">Skor Akhir Perhitungan</th>
                        <th  class="date">Nama Alternatif</th>
                        <th  class="date">Harga Rumah</th>
                        <th  class="date">Luas Tanah</th>
                        <th  class="date">Luas Bangunan</th>
                        <th  class="date">Tanggal Input Data</th>
                    </tr> 
                </thead>
                <tbody>
                    @foreach($items as $key => $item)
                    {{-- @php
                        dd($items);
                    @endphp --}}
                    <tr> 
                        <td class="date">{{ $item['rank']}}</td>
                        <td  class="date">{{ $item['score'] }}</td>
                        <td  class="date">{{ $item['alternative_name']}}</td>
                        <td  class="date">Rp. {{  number_format($item['C1'], 0, ',', '.' )}}</td>
                        <td  class="date">{{ $item['C16']}} m²</td>
                        <td  class="date">{{ $item['C17']}} m²</td>
                        <td  class="date">{{ \Carbon\Carbon::parse($item['created_at'])->format('d-m-Y') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <br/>
        <div class="col-md-12">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
        </div>
    </div>
    
@endsection

@php
    $showHeader = false;
    $showFooter = false;
@endphp