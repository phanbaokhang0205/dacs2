@extends('layouts.user.main')
@section('content')
    <main>
        <div class="container-fluid top-title">
            <img src="{{ asset('img/slide8.jpg') }}" alt="" class="img-fluid" width="100%">
            <div class="content-header">
                <div class="title">
                    <i class='bx bx-car mb-5'></i>
                    <h1 class="pb-4">Products</h1>
                    <a href="{{ route('homepage') }}">Homepage / </a>
                    <a class="gt" href="{{ route('products') }}">Product</a>
                </div>
            </div>
        </div>


        <!-- Thong tin sản phẩm -->
        <div class="container ">
            <div class="row">
                <div class="col-lg-6 img">
                    <img src="{{ asset('img/' . $product->productImage) }}" alt="" class="img-fluid" width="100%">
                </div>
                <div class="col-lg-6 desr">
                    <h1>{{ $product->productName }}</h1>
                    <table width="100%" class="thongTin">
                        <tr>
                            <td>
                                <b>Price:</b>
                            </td>
                            <td style="color: red; font-size: 1.3rem;">
                                @if ($product->discountPercent > 0)
                                    <p>{{ $product->listPrice - ($product->listPrice * $product->discountPercent) / 100 }}
                                    </p>
                                @endif
                            </td>
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
                    </table>

                    <p class="mt-5">
                        {{ strip_tags($product->description) }}
                    </p>
                    <div class="them-mua">
                        <div class="themvaoGio mt-4 mb-3">
                            <div class="cong-tru-btn">
                                <button id="tru" onclick="f_tru()">-</button>
                                <span class="d-inline-block bg-light"
                                    style="width: 35px; height: 35px; line-height: 35px; text-align: center;"
                                    id="soLuong">1</span>
                                <button id="cong" onclick="f_cong()">+</button>
                            </div>

                        </div>
                        <form action="{{ route('addcart', $product->productID) }}" method="post" class="form_cart">
                            @csrf
                            <button type="submit" class="muaHang">
                                <i class='bx bx-cart'></i>
                                <span>Add to cart</span>
                            </button>
                        </form>
                    </div>

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
                    <form action="" method="post">
                        @csrf
                        {{-- <p><strong>Your rate</strong></p>
                        <small onclick="danhGia_s1()" id="s1" class="sao-1">&#9733; </small>
                        <small onclick="danhGia_s2()" id="s2" class="sao-2">&#9733; &#9733;</small>
                        <small onclick="danhGia_s3()" id="s3" class="sao-3">&#9733; &#9733; &#9733;</small>
                        <small onclick="danhGia_s4()" id="s4" class="sao-4">&#9733; &#9733; &#9733; &#9733; </small>
                        <small onclick="danhGia_s5()" id="s5" class="sao-5">&#9733; &#9733; &#9733; &#9733;
                            &#9733;</small> --}}


                        <label for="your_comment"><strong>Your rate:</strong></label>

                        <textarea class="mt-3" id="your_comment" cols="10" rows="5" style="resize: none; width: 100%"
                            placeholder="Fill in your comment..."></textarea>

                        <button class="gui mt-4" type="submit" style="border-radius: 20px">
                            <i class='bx bx-send'></i>
                        </button>
                    </form>
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
                            @if ($product->gearBox === $item->gearBox)
                                <div class="col-lg-4">
                                    <div class="vespa card text-center">
                                        <div class="icon-heart">
                                            <i class='bx bxs-heart'></i>
                                        </div>
                                        <img class="card-img-top" src="{{ asset('img/' . $item->productImage) }}"
                                            alt="Title" style="width: 100%; height: 250px;">
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $item->productName }}</h4>
                                            <p class="card-text">$ {{ $item->listPrice }}</p>
                                            <div class="btn-xemThem">
                                                <a class="muaNgay" href="{{ route('detail_product', $item->productID) }}"
                                                    role="button">Buy now</a>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
            {{-- Comments --}}
            <div class="row row-danhGia mt-5">
                <div class="title">
                    <h1>Commments</h1>
                </div>
                @foreach ($users as $user)
                    @if ($user->comments != '')
                        <div class="comments mt-3">
                            <div class="comment-item">
                                <div class="profile_user d-flex align-items-center">
                                    <div class="img"><i class='bx bxs-user-circle bx-md'></i></div>
                                    <div class="name_email">
                                        <b>{{ $user->name }} <span style="color: gray">{{ $user->email }}</span></b>
                                    </div>
                                </div>
                                <div class="user_comment mx-5">
                                    <p>{{ $user->comments }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach


            </div>
        </div>


    </main>
    <!-- script -->
    <script src="chitiet.js"></script>
@endsection
