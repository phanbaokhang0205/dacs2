<header class="container-fluid">
    <!-- place navbar here -->


    <!-- nav__pc -->
    <nav class="nav__pc fixed-top">
        <h1 class="logo "><span>GARA</span>JE</h1>

        <div class="links">
            <ul class="">
                <li>
                    <a href="../home/home.html">Trang Chủ</a>
                </li>
                <li>
                    <a href="../gioithieu/gioiThieu.html">Giới Thiệu</a>
                </li>
                <li>
                    <a href="../sanpham/sanPham.html">Sản Phẩm</a>
                </li>
                <li>
                    <a href="../lienhe/lienHe.html">Liên hệ</a>
                </li>
                <!-- Authentication Links -->
                    @guest
                    @if (Route::has('login'))
                    <li>
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif

                    @if (Route::has('register'))
                    <li>
                        <a href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color:rgb(252, 175, 11)" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
            </ul>
        </div>

        <label for="nav__mobile-input" class="nav__bars-btn" style="cursor: pointer;">
            <i class='bx bx-menu'></i>
        </label>
        <!-- Overlayout -->
        <input type="checkbox" name="" class="nav__input" id="nav__mobile-input" style="display: none;">

        <label for="nav__mobile-input" class="nav__overlay"></label>

        <nav class="nav__mobile">
            <label for="nav__mobile-input" class="nav__mobile-close" style="cursor: pointer;">
                <i class='bx bx-x'></i>
            </label>
            <h1 class="logo-mobile"><span>GARA</span>JE</h1>
            <hr style="color: #fff;">
            <div class="links-mobile">
                <ul>
                    <li>
                        <a href="#" class="nav__mobile-link">Trang Chủ</a>
                    </li>
                    <li>
                        <a href="#" class="nav__mobile-link">Giới Thiệu</a>
                    </li>
                    <li>
                        <a href="#" class="nav__mobile-link">Sản Phẩm</a>
                    </li>
                    <li>
                        <a href="#" class="nav__mobile-link">Liên hệ</a>
                    </li>

                </ul>
            </div>
        </nav>
    </nav>



</header>
