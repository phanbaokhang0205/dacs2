@extends('layouts.user.main')
@section('content')
    <main>

        <div class="container-fluid top-title">
            <img src="" alt="" class="img-fluid">
            <div class="content-header">
                <div class="title">
                    <i class='bx bx-car mb-5'></i>
                    <h1 class="pb-4">Sản phẩm</h1>
                    <a href="{{ route('homepage') }}">Homepage/ </a>
                    <a class="gt" href="{{ route('products') }}">Products</a>
                </div>
            </div>
        </div>

        <div class="container content mt-5 mb-5" id="menu">

            <div class="shop-sidebar__mobile">
                <label for="side__mobile-input" class="side__filter-btn" style="cursor: pointer;">
                    <div class="icon">
                        <i class='bx bx-filter-alt'></i>
                    </div>
                    <p style=" text-transform: uppercase; font-weight: 500;">Lọc</p>
                </label>

            </div>

            <div class="row row-wrapper">
                <!-- Bảng danh mục -->
                <div class="col-lg-3">
                    <div class="shop-sidebar__PC">
                        <aside class="timkiem mb-3">
                            <input type="text" placeholder="Tìm kiếm">
                            <i class='bx bx-search-alt-2'></i>
                        </aside>
                        <aside class="danhmucsanpham mb-3">
                            <div class="content">
                                <div class="title" id="menu">danh mục sản phẩm</div>
                                <div class="memu-danhmucsanpham">
                                    <ul class="menu">
                                        <li><a href="#menu"
                                                style="color: #000;font-weight: 700;font-size: 25px;letter-spacing: 2px;">Xe
                                                số</a></li>
                                        <li><a href="#menu">Xe tay ga</a></li>
                                        <li><a href="#menu">Xe tay côn</a></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                        <aside class="sanpham mb-3">
                            <div class="content">
                                <div class="title">Sản phẩm</div>
                                <div class="menu-sanpham">
                                    <ul class="menu">
                                        @foreach ($lastestProducts as $product)
                                            <li>
                                                <a href="">
                                                    <img width="90px" height="70px"
                                                        src="{{ asset('img/' . $product->productImage) }}" alt="">
                                                    <div class="product-content">
                                                        <span>{{ $product->productName }}<br>$
                                                            {{ $product->listPrice }}</span>
                                                    </div>
                                                </a>
                                            </li>
                                        @endforeach


                                    </ul>
                                </div>
                            </div>
                        </aside>
                        <aside class="baivietmoi mb-5">
                            <div class="content">
                                <div class="title">Bài viết mới</div>
                                <ul class="menu">
                                    <li>
                                        <a
                                            href="https://www.24h.com.vn/xe-may-xe-dap/honda-bat-ngo-tung-khuyen-mai-cho-loat-dong-xe-ga-sh-c748a1479423.html">
                                            <img width="90px" height="70px"
                                                src="https://icdn.24h.com.vn/upload/2-2023/images/2023-06-28/255x170/sh1--1--1687947231-77-width740height555_anh_cat_3_2.jpg"
                                                alt="">
                                            <div class="tintuc-content">
                                                <p>Honda bất ngờ tung khuyến ...</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.24h.com.vn/xe-may-xe-dap/sieu-pham-moto-guzzi-v100-mandello-se-ban-tai-viet-nam-tu-thang-8-2023-c748a1480244.html">
                                            <img width="90px" height="70px"
                                                src="https://icdn.24h.com.vn/upload/3-2023/images/2023-07-01/255x170/20230701_112405_0000-1688185481-277-width740height555_anh_cat_3_2.jpg"
                                                alt="">
                                            <div class="tintuc-content">
                                                <p>Siêu phẩm Moto Guzzi ...</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.24h.com.vn/xe-may-xe-dap/bang-gia-honda-lead-dau-thang-7-2023-giam-hon-3-trieu-dong-c748a1480154.html">
                                            <img width="90px" height="70px"
                                                src="https://icdn.24h.com.vn/upload/2-2023/images/2023-06-30/255x170/lead3--1--1688133669-864-width740height555_anh_cat_3_2.jpg"
                                                alt="">
                                            <div class="tintuc-content">
                                                <p>Bảng giá Honda LEAD ...</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.24h.com.vn/xe-may-xe-dap/xe-may-co-hiem-co-kho-tim-cua-dan-choi-sai-thanh-c748a1479864.html">
                                            <img width="90px" height="70px"
                                                src="https://icdn.24h.com.vn/upload/2-2023/images/2023-06-30/255x170/adt1688066319-tp-img-4105-1388_anh_cat_3_2.jpg"
                                                alt="">
                                            <div class="tintuc-content">
                                                <p>Xe máy cổ 'hiếm có khó ...</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://www.24h.com.vn/xe-may-xe-dap/phat-me-bo-doi-2024-triumph-speed-400-va-scrambler-400-x-c748a1479596.html">
                                            <img width="90px" height="70px"
                                                src="https://icdn.24h.com.vn/upload/2-2023/images/2023-06-29/255x170/trium1--1--1688007655-398-width740height555_anh_cat_3_2.jpg"
                                                alt="">
                                            <div class="tintuc-content">
                                                <p>Phát mê bộ đôi 2024 Triumph ...</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>

                </div>


                <!-- bảng sản phẩm -->
                <div class="sanPham col-lg-9">


                    <!-- Xe số -->
                    <div id="xe_so" class="dsxeSo">
                        <!-- page-1 -->
                        <div class="row">
                            @foreach ($products as $product)
                                @if ($product->gearBox === 'motorcycle')
                                    <div class="col-lg-6 pb-3">
                                        <div class="blade card text-center">
                                            <div class="icon-heart">
                                                <i class='bx bxs-heart'></i>
                                            </div>
                                            <i class='bx bx-cart'></i>
                                            <img width="100%" height="300px" class="IMG card-img-top" src="{{ asset('img/' . $product->productImage) }}"
                                                alt="Title">
                                            <div class="card-body">
                                                <h4 class="NAME card-title">{{ $product->productName }}</h4>
                                                <p class="card-text"><span class="PRICE">$ {{ $product->listPrice }}</span>
                                                </p>
                                                <div class="btn-muangay">
                                                    <a class="muaNgay" href="" role="button">Mua ngay</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>

                    </div>

                    <!-- Xe ga -->
                    <div id="xe_ga" class="dsxeGa">
                        <!-- page-1 -->
                        <div class="row">
                            @foreach ($products as $product)
                                @if ($product->gearBox === 'scooter')
                                    <div class="col-lg-6 pb-3">
                                        <div class="blade card text-center">
                                            <div class="icon-heart">
                                                <i class='bx bxs-heart'></i>
                                            </div>
                                            <i class='bx bx-cart'></i>
                                            <img width="100%" height="300px" class="IMG card-img-top" src="{{ asset('img/' . $product->productImage) }}"
                                                alt="Title">
                                            <div class="card-body">
                                                <h4 class="NAME card-title">{{ $product->productName }}</h4>
                                                <p class="card-text"><span class="PRICE">$ {{ $product->listPrice }}</span>
                                                </p>
                                                <div class="btn-muangay">
                                                    <a class="muaNgay" href="" role="button">Mua ngay</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>

                    </div>

                    <!-- Xe tay côn -->
                    <div id="xe_con" class="dsxeCon">
                        <!-- page-1 -->
                        <div class="row">
                            @foreach ($products as $product)
                                @if ($product->gearBox === 'manual')
                                    <div class="col-lg-6 pb-3">
                                        <div class="blade card text-center">
                                            <div class="icon-heart">
                                                <i class='bx bxs-heart'></i>
                                            </div>
                                            <i class='bx bx-cart'></i>
                                            <img width="100%" height="300px" class="IMG card-img-top" src="{{ asset('img/' . $product->productImage) }}"
                                                alt="Title">
                                            <div class="card-body">
                                                <h4 class="NAME card-title">{{ $product->productName }}</h4>
                                                <p class="card-text"><span class="PRICE">$ {{ $product->listPrice }}</span>
                                                </p>
                                                <div class="btn-muangay">
                                                    <a class="muaNgay" href="" role="button">Mua ngay</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>

                    </div>


                    <!-- opt-page 1 2-->
                    <div class="d-flex justify-content-center text-center">{{ $paginate->links() }}</div>

                </div>

            </div>
        </div>

        <!-- Overlayout -->
        <input type="checkbox" name="" class="cart__input" id="cart__mobile-input" style="display: none;">

        <label for="cart__mobile-input" class="cart__overlay"></label>

        <!-- cart -->
        <div class="cart-wrapper">
            <table class="cart container">
                <thead>
                    <tr>
                        <td style="width: 50%;"><b>Sản phẩm</b></td>
                        <td style="width: 10%;"><b>Đơn giá</b></td>
                        <td style="width: 20%;"><b>Số lượng</b></td>
                        <td style="width: 10%;"><b>Số tiền</b></td>
                        <td style="width: 10%;"><b>Thao tác</b></td>

                    </tr>
                </thead>
                <tbody>

                    <!-- <tr>
                                                <td style="width: 100%;">
                                                    <img src="/img/blade-2023.png" alt="" class="image">
                                                    <p class="info">
                                                        <span class="name">BLADE 2023</span>
                                                        <span style="color: rgba(0,0,0,0.5);">
                                                            <br>Tình trạng: Còn hàng<br>
                                                            Mã SP: No.010<br>
                                                            Hãng: Honda<br>
                                                        </span>
                                                    </p>
                                                </td>
                                                <td class="text-center">
                                                    <span class="price">19.250.000</span>₫
                                                </td>
                                                <td>
                                                    <div class="cong-tru-btn">
                                                        <button class="tru">-</button>
                                                        <span class="num">1</span>
                                                        <button class="cong">+</button>
                                                    </div>

                                                </td>
                                                <td class="text-center">
                                                    <span class="price2">19.250.000</span>₫
                                                </td>
                                                <td class="text-center">
                                                    <button class="del">Xóa</button>
                                                </td>
                                            </tr> -->

                </tbody>
            </table>

            <div class="total-price" style="text-align: center; font-size: 2em; padding: 20px 0;">
                <b>Tổng tiền: <span class="total">0</span><sup>₫</sup></b>
            </div>

        </div>

    </main>
    <!-- script -->
    <script src="sanpham.js"></script>
@endsection
