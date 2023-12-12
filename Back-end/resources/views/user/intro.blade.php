@extends('layouts.user.main')
@section('content')
    <main>
        <!-- gt -->
        <div class="container-fluid top-title">
            <img src="" alt="" class="img-fluid">
            <div class="content-header">
                <div class="title">
                    <i class='bx bx-home mb-5'></i>
                    <h1 class="pb-4">Sản phẩm</h1>
                    <a href="{{ route('homepage') }}">Homepage / </a>
                    <a class="gt" href="{{ route('intro') }}">Intro</a>
                </div>
            </div>
        </div>
        <div class="container gioiThieu">
            <div class="row row-gt">
                <div class="col-lg-6">
                    <img src="" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <h1>Giới thiệu về GARAJE</h1>
                    <p>Chào mừng bạn đến với GARAJE - trang web bán xe máy trực tuyến của chúng tôi! Chúng tôi cung cấp
                        một nền tảng
                        tuyệt vời để khách hàng có thể mua xe máy một cách dễ dàng và thuận tiện từ nhà. Với nhiều năm
                        kinh
                        nghiệm trong lĩnh vực này, chúng tôi cam kết cung cấp cho khách hàng của mình những sản phẩm
                        chất
                        lượng tốt nhất, đảm bảo tính an toàn và độ bền cao.</p>
                </div>
            </div>
        </div>
        <!-- su menh và tầm nhìn -->
        <div class="container-fluid tamNhin_suMenh mt-5" style="background-color: rgb(214, 214, 214); ">
            <div class="container pt-3">
                <div class="row row-sm_tn mt-4">
                    <div class="col-lg-6 col-sm-12 mb-3">
                        <div class="suMenh">
                            <h1>Sứ mệnh</h1>
                            <p>GARAJE cung cấp cho khách hàng các lựa chọn xe máy đa dạng,tạo ra trải nghiệm mua sắm
                                thuận
                                tiện cho khách hàng,cung cấp dịch vụ hậu mãi tốt và tạo ra giá trị cho khách hàng.</p>
                        </div>
                        <div class="tamNhin">
                            <h1>Tầm Nhìn</h1>
                            <p>GARAJE muốn vươn lên thành nơi mua sắm xe máy hàng đầu,tạo ra một cộng đồng mua sắm xe
                                máy
                                ,Phát triển bền vững và đóng góp tích cực cho cộng đồng</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12 mb-3">
                        <img src="" alt="" class="a img-fluid">
                    </div>
                    <div class="col-lg-3 col-sm-12 mb-3">
                        <img src="" alt="" class="b img-fluid">
                    </div>
                </div>
            </div>
        </div>
        <div class="container dichVu mb-5">
            <div class="row row-dv">
                <div class="col-lg-4">
                    <i class='bx bx-medal'></i>
                    <div class="content">
                        <h4>
                            Hàng chính hãng
                        </h4>
                        <p> Để đảm bảo chất lượng và uy tín, chúng tôi cam kết chỉ cung cấp hàng chính hãng cho quý
                            khách.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <i class='bx bx-cart'></i>
                    <div class="content">
                        <h4>
                            Miễn phí giao hàng
                        </h4>
                        <p> Tận hưởng mua sắm thoải mái và tiết kiệm hơn với chính sách giao hàng miễn phí của chúng
                            tôi!</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <i class='bx bx-check-shield'></i>
                    <div class="content">
                        <h4>
                            Bảo hành 12 tháng
                        </h4>
                        <p> Cam kết bảo hành sản
                            phẩm trong 12 tháng và đem lại sự yên tâm cho khách hàng.</p>
                    </div>
                </div>
            </div>
            <div class="row row-dv mt-5">
                <div class="col-lg-4">
                    <i class='bx bx-timer'></i>
                    <div class="content">
                        <h4>
                            Đổi trả trong vòng 7 ngày
                        </h4>
                        <p> Đổi
                            trả sản phẩm trong vòng 7 ngày nếu quý khách không hài lòng với sản phẩm của chúng tôi.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <i class='bx bx-wallet-alt'></i>
                    <div class="content">
                        <h4>
                            Giá cả hợp lý
                        </h4>
                        <p> Chúng tôi đảm bảo mang đến cho khách hàng giá cả hợp lý và cạnh tranh nhất.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <i class='bx bx-wink-smile'></i>
                    <div class="content">
                        <h4>
                            Dịch vụ ưu đãi
                        </h4>
                        <p> Chúng tôi luôn cung cấp dịch vụ ưu đãi tốt nhất cho khách hàng của mình.</p>
                    </div>
                </div>
            </div>
        </div>
        <hr width="100%" class="mb-5">
        <div class="container doiNgu">
            <div class="row row-dn">
                <div class="col-lg-6 ronaldo">
                    <img src="" class="">
                    <b>NGUYỄN NGUYÊN HẬU</b>
                    <p>Giám đốc điều hành và người sáng lập</p>
                </div>
                <div class="col-lg-6 messi">
                    <img src="" alt="" class="">
                    <b>PHAN BẢO KHANG</b>
                    <p>Giám đốc điều hành và người sáng lập</p>
                </div>
            </div>
        </div>


    </main>
@endsection
