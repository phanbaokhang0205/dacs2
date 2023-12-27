<header class="container-fluid">
    <!-- place navbar here -->


    <!-- nav__pc -->
    <nav class="nav__pc fixed-top">
        <a href="{{ route('homepage') }}" style="text-decoration: none">
            <h1 class="logo "><span>GARA</span>JE</h1>
        </a>

        <div class="links">
            <ul class="">
                <li>
                    <a href="{{ route('homepage') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('intro') }}">Intro</a>
                </li>
                <li>
                    <a href="{{ route('products') }}">Products</a>
                </li>
                <li>
                    <a href="{{ route('contact') }} ">Contact</a>
                </li>
                {{-- Cart --}}
                <li class="cart">
                    <a class="d-flex align-items-center gap-3" href="{{ route('listcart') }}">
                        <i class='bx bx-cart bx-md'></i>
                        @php
                            $qty = 0;
                            $cart = Session::get('cart');
                        @endphp
                        @if (!empty($cart))
                            @foreach ($cart as $key => $item)
                                @php
                                    $qty += $item['qty'];
                                @endphp
                            @endforeach
                            <span class="quantity_cart"><p>{{ $qty }}</p></span>
                        @endif
                    </a>
                </li>



            </ul>
        </div>

        <div class="login_register text-white">

            <!-- Authentication Links -->
            <ul class="profile_user">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Welcome, {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item item_logout text-dark m-0" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            @if (Auth::user()->typeuser === 'admin')
                                <a class="text-dark dropdown-item m-0" href="{{ route('admin.index') }}" target="_blank">Dashboard</a>
                            @endif

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
                        <a href="{{ route('homepage') }}" class="nav__mobile-link">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('intro') }}" class="nav__mobile-link">Intro</a>
                    </li>
                    <li>
                        <a href="{{ route('products') }}" class="nav__mobile-link">Products</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="nav__mobile-link">Contact</a>
                    </li>

                </ul>
            </div>
        </nav>
    </nav>



</header>
