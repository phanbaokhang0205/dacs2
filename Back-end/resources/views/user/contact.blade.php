@extends('layouts.user.main')
@section('content')
    <main>
        <div class="container-fluid top-title">
            <img src="{{ asset('img/slide8.jpg') }}" alt="" class="img-fluid">
            <div class="content-header">
                <div class="title">
                    <i class='bx bxs-phone mb-5'></i>
                    <h1 class="pb-4">Sản phẩm</h1>
                    <a href="{{ route('homepage') }}">Homepage / </a>
                    <a class="gt" href="{{ route('contact') }}">Contact</a>
                </div>
            </div>  
        </div>
        <div class="container-fluid pt-4" style="background-color: aquamarine;">
            <div class="row row_lienHe text-center">
                <div class="col-lg-3">
                    <i class='bx bx-phone-call'></i>
                    <h3>Số điện thoại</h3>
                    <p>0793351522</p>
                </div>
                <div class="col-lg-3">
                    <i class='bx bx-location-plus'></i>
                    <h3>Địa chỉ</h3>
                    <p>470 Đường Trần Đại Nghĩa</p>
                </div>
                <div class="col-lg-3">
                    <i class='bx bx-time-five'></i>
                    <h3>Thời gian mở cửa</h3>
                    <p>8:00 đến 17:00</p>
                </div>
                <div class="col-lg-3">
                    <i class='bx bx-envelope'></i>
                    <h3>Email</h3>
                    <p>garaje@xe.vn.com</p>
                </div>
            </div>

        </div>

        <div class="container pt-4 mb-4">
            <h1 class="text-center">
                Liên hệ với chúng tôi
            </h1>
            <form action="#" class="form_lienHe">
                <div class="row mb-3">
                    <div class="col-lg-6 mt-3">
                        <input class="p-2" type="text" placeholder="Họ và tên">
                    </div>
                    <div class="col-lg-6 mt-3">
                        <input class="p-2" type="text" placeholder="Email">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <textarea style="resize: none; width: 100%; padding: 10px;" cols="20" rows="5" placeholder="Nội dung"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <button type="submit" style="width: 210px; height: 50px; border-radius: 10px;">Gửi liên
                            hệ</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection
