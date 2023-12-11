{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Home') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.user.main')
@section('content')
    <main>
        <!-- Slideshow -->
        <div class="slideshow container-fluid ">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
                        aria-label="First slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="https://recmiennam.com/wp-content/uploads/2018/01/hinh-nen-sieu-xe-moto-25.jpg"
                            class="w-100 d-block" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/img/slide2.avif') }}" class="w-100 d-block" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/img/slide3.jpg') }}" class="w-100 d-block" alt="Third slide">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>


        <!--  content -->
        <div class="container mt-5 mb-5">
            <div class=" row">
                <div class="ab col-md-6 col-sm-6">
                    <img src="/img/slide2.avif" alt="">
                </div>
                <div class="ex col-md-6 col-sm-6">
                    <img src="/img/slide3.jpg" alt="">
                </div>
            </div>
        </div>

        <!-- Sản phẩm bán chạy -->
        <h1 class="sanpham-h1 container mb-5">Sản phẩm mới nhất</h1>

        <div class="banChay container mb-3">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-lg-3 col-sm-6 mt-3">
                        <div class="sp sh-mode card text-center">
                            <div class="cart-title">
                                <div class="icon-heart">
                                    <i class='bx bxs-heart'></i>
                                </div>
                                @if ($product->discountPercent > 0)
                                    <div class="sales">
                                        <p>-{{ round($product->discountPercent) }}%</p>
                                    </div>
                                @endif
                                <img class="card-img-top" src="{{ asset('img/' . $product->productImage) }}" alt="Title">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">{{ $product->productName }}</h4>
                                @if ($product->discountPercent > 0)
                                    <p class="card-text">
                                        <s class="mx-2" style="color: rgb(109, 108, 107);">$ {{ $product->listPrice }}</s>
                                        $
                                        {{ $product->listPrice - ($product->listPrice * $product->discountPercent) / 100 }}
                                    </p>
                                @else
                                    <p class="mx-2">$ {{ $product->listPrice }}</p>
                                @endif

                                <div class="btn-xemThem">
                                    <a class="muaNgay" href="/sanpham/chitiet/SH-mode.html" role="button">Xem thêm</a>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>

        <!-- Sản phẩm của chung toi -->
        <div id="menu" class="title-sanPham container mb-3">
            <h1 class="sanpham-h1 ">Sản phẩm</h1>
        </div>

        <!-- Menu -->
        <div class="menu-xe container">
            <a id="1" class="button-xeSo" href="#menu" onclick="displaySo()"
                style="background-color: rgb(252, 175, 11);">Xe số</a>
            <a id="2" class="button-xeGa" href="#menu" onclick="displayGa()">Xe tay ga</a>
            <a id="3" class="button-xetayCon" href="#menu" onclick="displayCon()">Xe tay côn</a>
        </div>

        <!-- Xe so -->

        <div id="xe_1" class="xeSo container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 sanpham_xeSo">
                    <div class="button-xem">
                        <a class="btn-a" href="../sanpham/chitiet/blade.html" role="button">Xem thêm</a>
                    </div>
                    <img class="card-img-top img-fluid" src="" alt="Title">
                    <div class="card-body">
                        <h4 class="card-title">Blade 2023</h4>
                        <p class="card-text">Từ 19.250.000 VNĐ</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sanpham_xeSo">

                    <div class="button-xem">
                        <a class="btn-a" href="../sanpham/chitiet/future.html" role="button">Xem thêm</a>
                    </div> <img class="card-img-top img-fluid" src="/img/future.png" alt="Title">
                    <div class="card-body">
                        <h4 class="card-title">Future 125 FI</h4>
                        <p class="card-text">Từ 31.090.000 VNĐ</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sanpham_xeSo">

                    <div class="button-xem">
                        <a class="btn-a" href="../sanpham/chitiet/wave.html" role="button">Xem thêm</a>
                    </div> <img class="card-img-top img-fluid" src="/img/wave.png" alt="Title">
                    <div class="card-body">
                        <h4 class="card-title">Wave RSX FI 110</h4>
                        <p class="card-text">Từ 22.140.000 VNĐ</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sanpham_xeSo">

                    <div class="button-xem">
                        <a class="btn-a" href="../sanpham/chitiet/update.html" role="button">Xem thêm</a>
                    </div> <img class="card-img-top img-fluid" src="/img/Sirius-Black-Drum-002.png" alt="Title">
                    <div class="card-body">
                        <h4 class="card-title">SIRIUS FI</h4>
                        <p class="card-text">Từ 21.500.000 VNĐ</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sanpham_xeSo">

                    <div class="button-xem">
                        <a class="btn-a" href="../sanpham/chitiet/cup.html" role="button">Xem thêm</a>
                    </div> <img class="card-img-top img-fluid" src="/img/cup.png" alt="Title">
                    <div class="card-body">
                        <h4 class="card-title">Super Cub C125</h4>
                        <p class="card-text">Từ 28.700.000 VNĐ</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sanpham_xeSo">

                    <div class="button-xem">
                        <a class="btn-a" href="../sanpham/chitiet/update.html" role="button">Xem thêm</a>
                    </div> <img class="card-img-top img-fluid" src="/img/Sirius-Black-Drum-002.png" alt="Title">
                    <div class="card-body">
                        <h4 class="card-title">SIRIUS FI</h4>
                        <p class="card-text">Từ 21.500.000 VNĐ</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Xe tay ga -->

        <div id="xe_2" class="xeGa container" style="display: none;">
            <div class="row">
                <div class="col-lg-3 col-sm-6 sanpham_xeGa">

                    <div class="button-xem">
                        <a class="btn-a" href="../sanpham/chitiet/freego.html" role="button">Xem thêm</a>
                    </div> <img class="card-img-top img-fluid" src="/img/FreeGo-Mat-Red-SMK-004.png" alt="Title">
                    <div class="card-body">
                        <h4 class="card-title">FREEGO S </h4>
                        <p class="card-text">Từ 34.700.000 VNĐ</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sanpham_xeGa">

                    <div class="button-xem">
                        <a class="btn-a" href="../sanpham/chitiet/grande.html" role="button">Xem thêm</a>
                    </div> <img class="card-img-top img-fluid" src="/img/New-Grande-Pearl-White-004.png" alt="Title">
                    <div class="card-body">
                        <h4 class="card-title">GRANDE BLUE CORE HYBRID</h4>
                        <p class="card-text">Từ 50.000.000 VNĐ</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sanpham_xeGa">

                    <div class="button-xem">
                        <a class="btn-a" href="../sanpham/chitiet/SH-mode.html" role="button">Xem thêm</a>
                    </div> <img class="card-img-top img-fluid" src="/img/shmode.png" alt="Title">
                    <div class="card-body">
                        <h4 class="card-title">Sh Mode 125cc</h4>
                        <p class="card-text">Từ 58.190.000 VNĐ</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sanpham_xeGa">

                    <div class="button-xem">
                        <a class="btn-a" href="../sanpham/chitiet/update.html" role="button">Xem thêm</a>
                    </div> <img class="card-img-top img-fluid mt-5" src="/img/vision.jpg" alt="Title">
                    <div class="card-body">
                        <h4 class="card-title">Vision</h4>
                        <p class="card-text">Từ 31.690.000 VNĐ</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sanpham_xeGa">

                    <div class="button-xem">
                        <a class="btn-a" href="../sanpham/chitiet/Vario.html" role="button">Xem thêm</a>
                    </div> <img class="card-img-top img-fluid" src="/img/vario.jpg" alt="Title">
                    <div class="card-body">
                        <h4 class="card-title">Honda VARIO 160</h4>
                        <p class="card-text">Từ 56.490.000 VNĐ</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sanpham_xeGa">

                    <div class="button-xem">
                        <a class="btn-a" href="../sanpham/chitiet/Air-blade.html" role="button">Xem thêm</a>
                    </div> <img class="card-img-top img-fluid" src="/img/airblade.png" alt="Title">
                    <div class="card-body">
                        <h4 class="card-title">Air Blade 125/160</h4>
                        <p class="card-text">Từ 42.790.000 VNĐ</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- xe tay con -->

        <div id="xe_3" class="xetayCon container " style="display: none;">
            <div class="row">
                <div class="col-lg-3 col-sm-6 sanpham_xetayCon">
                    <div class="button-xem">
                        <a class="btn-a" href="../sanpham/chitiet/winer.html" role="button">Xem thêm</a>
                    </div>
                    <img class="card-img-top img-fluid" src="/img/win-23.png" alt="Title">
                    <div class="card-body">
                        <h4 class="card-title">Winner X</h4>
                        <p class="card-text">Từ 50.060.000 VNĐ</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sanpham_xetayCon">
                    <div class="button-xem">
                        <a class="btn-a" href="../sanpham/chitiet/ex.html" role="button">Xem thêm</a>
                    </div>
                    <img class="card-img-top img-fluid" src="/img/ex.png" alt="Title">
                    <div class="card-body">
                        <h4 class="card-title">EXCITER 155 VVA</h4>
                        <p class="card-text">Từ 52.500.000 VNĐ</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sanpham_xetayCon">
                    <div class="button-xem">
                        <a class="btn-a" href="../sanpham/chitiet/update.html" role="button">Xem thêm</a>
                    </div>
                    <img class="card-img-top img-fluid" src="/img/ex-limit.png" alt="Title">
                    <div class="card-body">
                        <h4 class="card-title">EXCITER 150 RC</h4>
                        <p class="card-text">Từ 44.800.000 VNĐ</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sanpham_xetayCon">
                    <div class="button-xem">
                        <a class="btn-a" href="../sanpham/chitiet/cbr.html" role="button">Xem thêm</a>
                    </div>
                    <img class="card-img-top img-fluid" src="/img/cbr.png" alt="Title">
                    <div class="card-body">
                        <h4 class="card-title">CBR150R</h4>
                        <p class="card-text">Từ 73.290.000 VNĐ</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sanpham_xetayCon">
                    <div class="button-xem">
                        <a class="btn-a" href="../sanpham/chitiet/update.html" role="button">Xem thêm</a>
                    </div>
                    <img class="card-img-top img-fluid" src="/img/cb.png" alt="Title">
                    <div class="card-body">
                        <h4 class="card-title">CB150R The Streetster</h4>
                        <p class="card-text">Từ 105.500.000 VNĐ</p>
                    </div>
                </div>
            </div>
        </div>




        <!-- Tin tức -->
        <div class="container tinTuc mt-5 mb-5">
            <h1 class="mb-3">Tin tức</h1>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="card">
                        <img class="card-img-top" src="/img/tin-1.jpg" alt="Title">
                        <div class="card-body">
                            <h5 class="card-title">SYM trình làng "tân binh" đối đầu SH125i</h5>
                            <div class="cal-view">
                                <div class="cal">
                                    <i class='bx bx-calendar'></i>
                                    2023-02-24T11:46:04+07:00
                                </div>
                                <div class="view">
                                    <i class='bx bx-show'></i>
                                    27
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card">
                        <img class="card-img-top" src="/img/tin-2.jpg" alt="Title">
                        <div class="card-body">
                            <h5 class="card-title">Bảng giá Honda Wave Alpha nửa cuối tháng 6/2023...
                            </h5>
                            <div class="cal-view">
                                <div class="cal">
                                    <i class='bx bx-calendar'></i>
                                    2023-02-24T11:46:04+07:00
                                </div>
                                <div class="view">
                                    <i class='bx bx-show'></i>
                                    27
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card">
                        <img class="card-img-top" src="/img/tin-3.jpg" alt="Title">
                        <div class="card-body">
                            <h5 class="card-title">Honda Vision có giá 21 triệu đồng, liệu có đúng ?</h5>
                            <div class="cal-view">
                                <div class="cal">
                                    <i class='bx bx-calendar'></i>
                                    2023-02-24T11:46:04+07:00
                                </div>
                                <div class="view">
                                    <i class='bx bx-show'></i>
                                    27
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
