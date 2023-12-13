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
                        <img src="{{ asset('img/slide6.jpg') }}"
                            class="w-100 d-block" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/img/slide8.jpg') }}" class="w-100 d-block" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/img/slide9.jpg') }}" class="w-100 d-block" alt="Third slide">
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
        <h1 class="sanpham-h1 container mb-5">Lastest Products</h1>

        <div class="banChay container mb-3">
            <div class="row">
                @foreach ($lastestProducts as $product)
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
                                    <a class="muaNgay" href="{{ route('detail_product', $product->productID) }}"
                                        role="button">Xem thêm</a>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>

        <!-- Sản phẩm của chung toi -->
        <div id="menu" class="title-sanPham container mb-3">
            <h1 class="sanpham-h1 ">Products</h1>
        </div>

        <!-- Menu -->
        <div class="menu-xe container">
            <a id="1"  href="#menu" style="background-color: rgb(252, 175, 11);">Motorcycle</a>
            <a id="2" class="button-xeGa" href="#menu">Scooter</a>
            <a id="3" class="button-xetayCon" href="#menu">Manual</a>
            <a id="4" class="button-xetayDien" href="#menu">Electric</a>
        </div>

        <!-- Xe so -->

        <div id="xe_1" class="xeSo container">
            <div class="row">
                @foreach ($products as $product)
                    @if ($product->gearBox === 'motorcycle')
                        <div class="col-lg-3 col-sm-6 sanpham_xeSo">
                            <div class="button-xem">
                                <a class="btn-a" href="{{ route('detail_product', $product->productID) }}"
                                    role="button">Xem thêm</a>
                            </div>
                            <img class="card-img-top img-fluid" src="{{ asset('img/' . $product->productImage) }}"
                                alt="Title">
                            <div class="card-body">
                                <h4 class="card-title">{{ $product->productName }}</h4>
                                <p class="card-text">$ {{ $product->listPrice }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

        <!-- Xe tay ga -->

        <div id="xe_2" class="xeGa container" style="display: none;">
            <div class="row">
                @foreach ($products as $product)
                    @if ($product->gearBox === 'scooter')
                        <div class="col-lg-3 col-sm-6 sanpham_xeGa">

                            <div class="button-xem">
                                <a class="btn-a" href="{{ route('detail_product', $product->productID) }}" role="button">Xem thêm</a>
                            </div>
                            <img class="card-img-top img-fluid" src="{{ asset('img/' . $product->productImage) }}"
                                alt="Title">
                            <div class="card-body">
                                <h4 class="card-title">{{ $product->productName }}</h4>
                                <p class="card-text">$ {{ $product->listPrice }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>

        <!-- xe tay con -->

        <div id="xe_3" class="xetayCon container " style="display: none;">
            <div class="row">
                @foreach ($products as $product)
                    @if ($product->gearBox === 'manual')
                        <div class="col-lg-3 col-sm-6 sanpham_xetayCon">
                            <div class="button-xem">
                                <a class="btn-a" href="{{ route('detail_product', $product->productID) }}" role="button">Xem thêm</a>
                            </div>
                            <img class="card-img-top img-fluid" src="{{ asset('img/' . $product->productImage) }}"
                                alt="Title">
                            <div class="card-body">
                                <h4 class="card-title">{{ $product->productName }}</h4>
                                <p class="card-text">$ {{ $product->listPrice }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>

        {{-- xe dien --}}
        <div id="xe_4" class="xetayDien container " style="display: none;">
            <div class="row">
                @foreach ($products as $product)
                    @if ($product->gearBox === 'electric')
                        <div class="col-lg-3 col-sm-6 sanpham_xetayCon">
                            <div class="button-xem">
                                <a class="btn-a" href="{{ route('detail_product', $product->productID) }}" role="button">Xem thêm</a>
                            </div>
                            <img class="card-img-top img-fluid" src="{{ asset('img/' . $product->productImage) }}"
                                alt="Title">
                            <div class="card-body">
                                <h4 class="card-title">{{ $product->productName }}</h4>
                                <p class="card-text">$ {{ $product->listPrice }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach

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
@section('js')
<script>
    // Lắng nghe sự kiện click trên các thẻ a
    document.querySelectorAll('.button-xeSo, .button-xeGa, .button-xetayCon, .button-xetayDien').forEach(function(
        element) {
        element.addEventListener('click', function() {
            // Lấy ID của thẻ a được click
            var clickedId = this.id;

            // Lặp qua tất cả các thẻ a và thay đổi màu sắc tương ứng
            document.querySelectorAll('.button-xeSo, .button-xeGa, .button-xetayCon, .button-xetayDien')
                .forEach(function(aElement) {
                    if (aElement.id === clickedId) {
                        aElement.style.backgroundColor = 'rgb(252, 175, 11)';
                    } else {
                        aElement.style.backgroundColor = '#fff';
                    }
                });

            // Lặp qua tất cả các phần tử xe và hiển thị/ẩn tương ứng
            document.querySelectorAll('.xeSo, .xeGa, .xetayCon, .xetayDien').forEach(function(
            xeElement) {
                if (xeElement.id === 'xe_' + clickedId) {
                    xeElement.style.display = 'block';
                } else {
                    xeElement.style.display = 'none';
                }
            });
        });
    });
</script>
@endsection
