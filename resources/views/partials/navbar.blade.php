<nav class="navbar">
    <li class="navbar-toggle" id="toggleButton" data-toggle-button="false"><i class="fas fa-bars"></i></li>
    <ul>
        <li class="nav-item">
            <a href="#"><i class="fa fa-home"></i>Home</a>
        </li>
        <div class="dropdown nav-item" data-dropdown>
            <li data-dropdown-button>
                <a data-dropdown-button class="link" href="#"><i
                        class="fa-solid fa-caret-down"></i>Challenges</a>
                <div class="dropdown-menu information-grid">
                    <div>
                        <div class="dropdown-heading">CSS 30 day Challenge</div>
                        <div class="dropdown-links">
                            @for ($i = 1; $i <= 30; $i++)
                                @if ($i == 1 || $i == 4 || $i == 12 || $i == 13)
                                    <a href="{{ url('/css-challenge-' . $i) }}">{{ $i }}</a>
                                    <a href="{{ url('/css-challenge-' . $i . 'b') }}">{{ $i }}b</a>
                                @else
                                    <a href="{{ url('/css-challenge-' . $i) }}">{{ $i }}</a>
                                @endif
                            @endfor
                        </div>
                    </div>
                    <div>
                        <div class="dropdown-heading">Bonus Challenges</div>
                        <div class="dropdown-links">
                            @for ($i = 1; $i <= 1; $i++)
                                <a href="{{ url('/css-challenge-bonus/' . $i) }}">{{ $i }}</a>
                            @endfor
                        </div>
                    </div>
                </div>
            </li>
        </div>
        <li class="nav-item">
            <a href="#"><i class="fa fa-key"></i>Repositories</a>
        </li>
        <li class="nav-item">
            <a href="#"><i class="fa fa-magic"></i>Features</a>
        </li>

        <li class="nav-item">
            <a href="#"><i class="fa-solid fa-money-check-dollar"></i>Pricing</a>
        </li>
    </ul>
    <ul>
        @if (str_contains(Request::url(), '/css-challenge-'))
            <div class="ba-box">
                @php
                    $current = intval(explode('/css-challenge-', Request::url())[1]);
                    $next = $current + 1;
                    $previous = $current - 1;
                @endphp
                @if ($previous >= 1)
                    <a class="before-next before" href="{{ url('/css-challenge-' . $previous) }}"><i
                            class="fa-solid fa-chevron-left"></i></a>
                @endif
                @if ($next <= 30)
                    <a class="before-next after" href="{{ url('/css-challenge-' . $next) }}"><i
                            class="fa-solid fa-chevron-right"></i></a>
                @endif
            </div>
        @endif
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a href="{{ route('login') }}"><i class="fa-regular fa-user"></i>Login</a>
                </li>
            @endif
            @if (Route::has('register'))
                <li class="nav-item">
                    <a href="{{ route('register') }}">Register</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
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
</nav>
