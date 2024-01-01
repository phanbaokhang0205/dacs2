<div class="account">
    <div class="admin_profile">
        <div class="name">Username</div>
        <div class="img"><img src="" alt=""><i class='bx bxs-user-circle bx-md'></i></div>
        <div class="opt">
            <div class="btn-dropdown">
                <button class="down">
                    <i class='bx bxs-chevron-down'></i>
                </button>
            </div>
            <div class="content-dropdown">

<<<<<<< HEAD
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
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <a  class="dropdown-item" href="{{ route('homepage') }}" target="_blank">
                            {{ __('Homepage') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
=======
            </div>

        </div>
>>>>>>> bc5f221fb35bbbd56602ad6de4f394d7c84bf727
    </div>
</div>
