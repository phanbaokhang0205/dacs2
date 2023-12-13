@extends('layouts.user.main')
@section('content')
    <main>

        <div class="container-fluid top-title">
            <img src="/img/xe2.jpg" alt="" class="img-fluid">
            <div class="content-header">
                <div class="title">
                    <i class='bx bx-car mb-5'></i>
                    <h1 class="pb-4">Sản phẩm</h1>
                    <a href="{{ route('homepage') }}">Trang chủ / </a>
                    <a class="gt" href="{{ route('products') }}">Sản phẩm</a>
                </div>
            </div>
        </div>


        <!-- Thong tin sản phẩm -->
        <div class="container ">
            <div class="row">
                <div class="col-lg-6 img">
                    <img src="{{ asset('img/' . $product->productImage) }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 desr">
                    <h1>{{ $product->productName }}</h1>
                    <table class="thongTin">
                        <tr>
                            <td>
                                <b>Price:</b>
                            </td>
                            <td style="color: red; font-size: 1.3rem;"> $ {{ $product->listPrice }}</td>
                        </tr>
                        <tr>
                            <td><b>Gear Box:</b></td>
                            <td>{{ $product->gearBox }}</td>
                        </tr>
                        <tr>
                            <td><b>Product code:</b></td>
                            <td>{{ $product->productCode }}</td>
                        </tr>
                        <tr>
                            <td><b>Brand:</b></td>
                            <td>
                                @foreach ($brands as $brand)
                                    @if ($brand->brandID === $product->brandID)
                                        {{ $brand->brandName }}
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                Description
                                {{ $product->description }}
                            </td>
                        </tr>
                        <tr class="them-mua">
                            <td>
                                <div class="themvaoGio mt-4 mb-3">
                                    <div class="cong-tru-btn">
                                        <button id="tru" onclick="f_tru()">-</button>
                                        <span id="soLuong">1</span>
                                        <button id="cong" onclick="f_cong()">+</button>
                                    </div>

                                </div>
                            </td>
                            <td>
                                <div class="muaHang">
                                    <i class='bx bx-cart'></i>
                                    <span>Add to cart</span>
                                </div>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>

            <!-- Thong số kỹ thuật -->
            <div class="row row-kyThuat mt-5">
                <div class="title">
                    <h1>Specifications</h1>
                </div>
                <table class="thongSo">
                    <tr>
                        <td>Self mass</td>
                        <td>110 kg</td>
                    </tr>
                    <tr>
                        <td>LENGTH x WIDTH X HEIGHT</td>
                        <td>1.890 mm x 720 mm x 1.110 mm</td>
                    </tr>
                    <tr>
                        <td>Wheel axle distance
                        </td>
                        <td>1.304 mm
                        </td>
                    </tr>
                    <tr>
                        <td>Saddle height</td>
                        <td>780-790 mm</td>
                    </tr>
                    <tr>
                        <td>Ground clearance</td>
                        <td>130 mm</td>
                    </tr>
                    <tr>
                        <td>Petrol tank capacity</td>
                        <td>5.6 liters
                        </td>
                    </tr>
                    <tr>
                        <td>Layer size before/after
                        </td>
                        <td>Front tire 80/90-16M/C 43P
                            Rear tire 100/90-14M/C 57P</td>
                    </tr>
                    <tr>
                        <td>Forks</td>
                        <td>Cylindrical fork
                        </td>
                    </tr>
                    <tr>
                        <td>Rear fork
                        </td>
                        <td>Single fork
                        </td>
                    </tr>
                    <tr>
                        <td>Engine type
                        </td>
                        <td>4 stroke, 4 valve, liquid cooled
                        </td>
                    </tr>
                    <tr>
                        <td>Maximum capacity
                        </td>
                        <td>9 kW/8500 rpm
                        </td>
                    </tr>
                    <tr>
                        <td>Engine oil capacity
                        </td>
                        <td>After draining 0.8 L
                            After defrosting the machine 0.9 L</td>
                    </tr>
                    <tr>
                        <td>Fuel consumption
                        </td>
                        <td>2.16 liters/100km
                        </td>
                    </tr>
                    <tr>
                        <td>Transmission type
                        </td>
                        <td>Automatic, stepless
                        </td>
                    </tr>
                    <tr>
                        <td>System starts
                        </td>
                        <td>Electricity</td>
                    </tr>
                    <tr>
                        <td>Maximum moment
                        </td>
                        <td>12 N.m/7000 rpm
                        </td>
                    </tr>
                    <tr>
                        <td>Cylinder capacity
                        </td>
                        <td>124.8 cc
                        </td>
                    </tr>
                    <tr>
                        <td>Diameter x Piston stroke
                        </td>
                        <td>53.5 x 55.5 mm
                        </td>
                    </tr>
                    <tr>
                        <td>Compression ratio
                        </td>
                        <td>11.5:1
                        </td>
                    </tr>
                </table>
            </div>

            <!-- Đánh giá -->
            <div class="row row-danhGia mt-5">
                <div class="title">
                    <h1>Rate</h1>
                </div>
                <div class="form-danhgia">

                    <p><strong>Your rate</strong></p>
                    <small onclick="danhGia_s1()" id="s1" class="sao-1">&#9733; </small>
                    <small onclick="danhGia_s2()" id="s2" class="sao-2">&#9733; &#9733;</small>
                    <small onclick="danhGia_s3()" id="s3" class="sao-3">&#9733; &#9733; &#9733;</small>
                    <small onclick="danhGia_s4()" id="s4" class="sao-4">&#9733; &#9733; &#9733; &#9733; </small>
                    <small onclick="danhGia_s5()" id="s5" class="sao-5">&#9733; &#9733; &#9733; &#9733;
                        &#9733;</small>

                    <p class="mt-3"><strong>Your comment:</strong></p>
                    <textarea cols="10" rows="5" style="resize: none; width: 100%"></textarea>

                    <div class="ten-email mt-4 ">
                        <div class="ten">
                            <p><strong>Name:</strong></p>
                            <input type="text">
                        </div>
                        <div class="email">
                            <p><strong>Email:</strong></p>
                            <input type="email">
                        </div>
                    </div>

                    <div class="luuthongtin mt-3">
                        <input id="luu" type="checkbox">
                        <label style="cursor: pointer;" for="luu" class="mx-3 ">Save the information.</label>
                    </div>

                    <button class="gui mt-4">
                        Send
                    </button>
                </div>
            </div>
            <!-- Sản phẩm liên quann -->
            <div class="row row-lienQuan mt-5">
                <div class="title">
                    <h1>Related products</h1>
                </div>
                <div class="noiDung pt-3">
                    <div class="row">
                        @foreach ($products as $item)
                            @if (($product->gearBox === $item->gearBox))
                                <div class="col-lg-4">
                                    <div class="vespa card text-center">
                                        <div class="icon-heart">
                                            <i class='bx bxs-heart'></i>
                                        </div>
                                        <img class="card-img-top" src="{{ asset('img/' . $item->productImage) }}"
                                            alt="Title">
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $item->productName }}</h4>
                                            <p class="card-text">$ {{ $item->listPrice }}</p>
                                            <div class="btn-xemThem">
                                                <a class="muaNgay" href="{{ route('detail_product', $item->productID) }}"
                                                    role="button">Mua ngay</a>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>


    </main>
    <!-- script -->
    <script src="chitiet.js"></script>
@endsection
