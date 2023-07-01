    <div class="section-header">
        {{-- Filter --}}
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header mx-2">
                <h4 class="offcanvas-title" id="offcanvasRightLabel">Filter</h4>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="container">
                    <form action="{{ route('filterByLuasBangunan') }}" method="POST">
                        @csrf
                    <div class="row gx-1">
                        <div class="my-2">
                            <label for="exampleFormControlInput22" class="form-label title">Harga Rumah</label>
                            <div class="row d-flex no-gutters">
                                <div class="col-5 btn-group">
                                    <button type="button" class="btn dropup" data-bs-toggle="dropdown" aria-expanded="false">
                                    Min
                                    </button>
                                    <ul class="dropdown-menu scrollable-menu">
                                        <li><a class="dropdown-item" href="#">Rp.50.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.100.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.150.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.200.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.250.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.300.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.350.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.400.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.450.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.500.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.550.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.600.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.650.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.700.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.750.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.800.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.850.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.900.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.950.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.1.000.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.1.500.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.2.000.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.3.000.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.4.000.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.5.000.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.8.000.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.10.000.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.50.000.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.100.000.000.000</a></li>
                                    </ul>
                                </div>
                                <div class="col-1 d-flex align-items-center justify-content-center p-0">
                                    s/d
                                </div>
                                <div class="col-5 btn-group dropup">
                                    <button type="button" class="btn dropup" data-bs-toggle="dropdown" aria-expanded="false">
                                    Max
                                    </button>
                                    <ul class="dropdown-menu scrollable-menu">
                                        <li><a class="dropdown-item" href="#">Rp.50.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.100.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.150.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.200.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.250.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.300.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.350.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.400.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.450.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.500.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.550.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.600.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.650.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.700.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.750.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.800.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.850.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.900.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.950.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.1.000.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.1.500.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.2.000.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.3.000.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.4.000.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.5.000.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.8.000.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.10.000.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.50.000.000.000</a></li>
                                        <li><a class="dropdown-item" href="#">Rp.100.000.000.000</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="exampleFormControlInput22" class="form-label title">Luas Bangunan</label>
                            <select class="form-select" name="C15" id="exampleFormControlInput5" aria-label="Default select example">
                                <option value="1">36m² - 45m²</option>
                                <option value="2">54m² - 60m²</option>
                                <option value="3">70m² - 90m²</option>
                                <option value="4">120m² - 200m²</option>
                                <option value="5">>200m²</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="exampleFormControlInput23" class="form-label title">Luas Tanah</label>
                            <select name="C16" class="form-select" id="exampleFormControlInput23" aria-label="Default select example">
                                <option value="1">60m² - 89m²</option>
                                <option value="2">90m² - 119m²</option>
                                <option value="3">120m² - 149m²</option>
                                <option value="4">150m² - 179m²</option>
                                <option value="5">180m² - 209m²</option>
                                <option value="6">>210m²</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 my-2">
                            <label for="exampleFormControlInput24" class="form-label title">Sertifikat Rumah</label>
                            <select name="C13" class="form-select" id="exampleFormControlInput24" aria-label="Default select example">
                                <option value="4">SHM</option>
                                <option value="3">SHGB</option>
                                <option value="2">AJB</option>
                                <option value="1">GIRIK</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 my-2">
                            <label for="exampleFormControlInput22" class="form-label title">Kamar Tidur</label>
                            <select class="form-select" id="exampleFormControlInput5" aria-label="Default select example">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">>3</option>
                            </select>
                        </div>
                        <div class="col-6 my-2">
                            <label for="exampleFormControlInput23" class="form-label title">Kamar Mandi</label>
                            <select class="form-select" id="exampleFormControlInput23" aria-label="Default select example">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">>3</option>
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-submit my-2 px-5" type="submit" class="btn btn-primary">Filter</button>
                    </form>
                </div> 

            </div>
        </div>
        {{-- Header --}}
        <section class="header-main border-none bg-white">
            <div class="container">
            <div class="row pt-3 pb-3 d-flex align-items-center">
                <div class="col-md-2 col-sm-12 col-xs-12">
                    <img src="img/Logo.png" alt="SPK Rumah Balikpapan"/>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-6">
                        <form action="/alternative" method="GET" id="search-form">
                            <div class="d-flex form-inputs">
                                <span class="bi bi-search form-control-feedback"></span>
                                <input class="form-control search" type="text" name="search" id="search-input" placeholder="Cari Perumahan Favorit Anda..." value="{{ request('search') }}">
                            </div>
                        </form>
                </div>
                <div class="col-md-1 col-sm-6 col-xs-6">
                        <button class="btn filter-button" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Filter</button>         
                </div>
                <div class="col-md-1">
                    <a href="login" class="btn admin-button">
                        <i class="bi bi-person-fill"></i>
                    </a>  
                </div>
            </div>
            </div> 
        </section>
    </div>


    {{-- <script>
        document.getElementById("search-input").addEventListener("keydown", function(event){
            if (event.key === "Enter") {
                event.preventDefault();
                document.getElementById("search-form").submit();
            }
        });

        function filterData(selectedValue) {
            let filterData;
            case '1':
                filteredData = alternative.filter(item => item.luas >= 36 && item.luas <= 45);
                break;
            case '2':
                filteredData = alternative.filter(item => item.luas >= 54 && item.luas <= 60);
                break;
            case '3':
                filteredData = alternative.filter(item => item.luas >= 70 && item.luas <= 90);
                break;
            case '4':
                filteredData = alternative.filter(item => item.luas >= 120 && item.luas <= 200);
                break;
            case '5':
                filteredData = alternative.filter(item => item.luas > 200);
                break;

        }
    </script> --}}

    {{-- <p class="card-text">{{ $post["alternatif_name"] }}</p>
                <p class="card-text">{{ $post["harga_rumah"] }}</p>
                <p class="card-text">{{ $post["dp_rumah"] }}</p> --}}

