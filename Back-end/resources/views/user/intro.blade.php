@extends('layouts.user.main')
@section('content')
    <main>
        <!-- gt -->
        <div class="container-fluid top-title">
            <img src="{{ asset('img/slide8.jpg') }}" alt="" class="img-fluid">
            <div class="content-header">
                <div class="title">
                    <i class='bx bx-home mb-5'></i>
                    <h1 class="pb-4">Intro</h1>
                    <a href="{{ route('homepage') }}">Homepage / </a>
                    <a class="gt" href="{{ route('intro') }}">Intro</a>
                </div>
            </div>
        </div>
        <div class="container gioiThieu">
            <div class="row row-gt">
                <div class="col-lg-6">
                    <img src="{{ asset('img/slide4.jpg') }}" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <h1>Introducing GARAJE</h1>
                    <p>Welcome to GARAJE - our online motorcycle sales website! We provide
                        a foundation
                        Great for customers to be able to buy motorbikes easily and conveniently from home. With many years
                        terrible
                        experience in this field, we are committed to providing our customers with products
                        matter
                        Best quality, ensuring safety and durability.</p>
                </div>
            </div>
        </div>
        <!-- su menh và tầm nhìn -->
        <div class="container-fluid tamNhin_suMenh mt-5" style="background-color: rgb(214, 214, 214); ">
            <div class="container pt-3">
                <div class="row row-sm_tn mt-4">
                    <div class="col-lg-6 col-sm-12 mb-3">
                        <div class="suMenh">
                            <h1>Mission</h1>
                            <p>GARAJE provides customers with diverse motorbike options, creating a shopping experience
                                favorable
                                Convenient for customers, provide good after-sales service and create value for customers.
                            </p>
                        </div>
                        <div class="tamNhin">
                            <h1>Vision</h1>
                            <p>GARAJE wants to become a leading motorbike shopping place, creating a motorbike shopping
                                community
                                machine
                                ,Sustainable development and positive contributions to the community.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12 mb-3">
                        <img src="{{ asset('img/slide1.jpg') }}" alt="" class="a img-fluid">
                    </div>
                    <div class="col-lg-3 col-sm-12 mb-3">
                        <img src="{{ asset('img/slide2.avif') }}" alt="" class="b img-fluid">
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
                            Genuine
                        </h4>
                        <p>To ensure quality and reputation, we commit to only providing genuine products to you.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <i class='bx bx-cart'></i>
                    <div class="content">
                        <h4>
                            Free ship
                        </h4>
                        <p> Enjoy more convenient and economical shopping with our free shipping policy!</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <i class='bx bx-check-shield'></i>
                    <div class="content">
                        <h4>
                            Warranty 12 months
                        </h4>
                        <p>Committed to a 12-month product warranty and brings peace of mind to customers.</p>
                    </div>
                </div>
            </div>
            <div class="row row-dv mt-5">
                <div class="col-lg-4">
                    <i class='bx bx-timer'></i>
                    <div class="content">
                        <h4>
                            Return within 7 days
                        </h4>
                        <p>Return the product within 7 days if you are not satisfied with our product.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <i class='bx bx-wallet-alt'></i>
                    <div class="content">
                        <h4>
                            Good price
                        </h4>
                        <p> We guarantee to bring customers the most reasonable and competitive prices.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <i class='bx bx-wink-smile'></i>
                    <div class="content">
                        <h4>
                            Preferential service
                        </h4>
                        <p> We always provide the best preferential service to our customers.</p>
                    </div>
                </div>
            </div>
        </div>
        <hr width="100%" class="mb-5">
        <div class="container doiNgu">
            <div class="row row-dn">
                <div class="col-lg-6 ronaldo">
                    <img src="{{ asset('img/ro.jpg') }}" class="">
                    <b>NGUYỄN NGUYÊN HẬU</b>
                    <p>CEO and founder</p>
                </div>
                <div class="col-lg-6 messi">
                    <img src="{{ asset('img/messi.jpg') }}" alt="" class="">
                    <b>PHAN BẢO KHANG</b>
                    <p>CEO and founder</p>
                </div>
            </div>
        </div>


    </main>
@endsection
