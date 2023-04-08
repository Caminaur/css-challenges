<nav class="navbar">
    <li class="navbar-toggle" id="toggleButton" data-toggle-button="false"><i class="fas fa-bars"></i></li>
    <ul>
        <x-navbar.nav-item 
            name="{{ __('base.home') }}" 
            iclass="fa fa-home"
            navUrl="{{ url('/home') }}"    
        />
        <div class="dropdown nav-item" data-dropdown>
            <li data-dropdown-button>
                <a data-dropdown-button class="link" href="#"><i
                        class="fa-solid fa-caret-down"></i>{{ __('base.challenges') }}</a>
                <div class="dropdown-menu information-grid">
                    <div>
                        <div class="dropdown-heading">{{ __('base.30-d-challenges') }}</div>
                        <div class="dropdown-links">
                            @for ($i = 1; $i <= 30; $i++)
                                @if ($i == 1 || $i == 4 || $i == 12)
                                    <a href="{{ url('/css-challenge-' . $i) }}">{{ $i }}</a>
                                    <a href="{{ url('/css-challenge-' . $i . 'b') }}">{{ $i }}b</a>
                                @else
                                    <a href="{{ url('/css-challenge-' . $i) }}">{{ $i }}</a>
                                @endif
                            @endfor
                        </div>
                    </div>
                    <div>
                        <div class="dropdown-heading">{{ __('base.bonus-challenges') }}</div>
                        <div class="dropdown-links">
                            @for ($i = 1; $i <= 1; $i++)
                                <a href="{{ url('/css-challenge-bonus-' . $i) }}">{{ $i }}</a>
                            @endfor
                        </div>
                    </div>
                </div>
            </li>
        </div>
        <x-navbar.nav-item 
            name="{{ __('base.version-control') }}" 
            iclass="fa fa-key"
            navUrl="#"    
        />
    </ul>
    <ul>
        <div class="dropdown" data-dropdown>
            <li class="nav-item" data-dropdown-button>
                <a class="link" href="#" data-dropdown-button>{{ __('base.lang') }}</a>
                <div class="lang-div dropdown-menu" action="{{ url('/set/lang') }}">
                    <h6>Change language!</h6>
                    <a class="lang-links" href="{{ url('/set/es') }}">
                        <img class="flag-icon" src="{{ url('/images/flags/spain_flag.png') }}" alt="">
                        <span>ES</span>
                    </a>
                    <a class="lang-links" href="{{ url('/set/en') }}">
                        <img class="flag-icon" src="{{ url('/images/flags/uk_flag.png') }}" alt="">
                        <span>EN</span>
                    </a>
                    <a class="lang-links" href="{{ url('/set/de') }}">
                        <img class="flag-icon" src="{{ url('/images/flags/german_flag.png') }}" alt="">
                        <span>DE</span>
                    </a>
                </div>
        </div>
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
                    <a href="{{ route('login') }}"><i class="fa-regular fa-user"></i>{{ __('base.login') }}</a>
                </li>
            @endif
            @if (Route::has('register'))
                <li class="nav-item">
                    <a href="{{ route('register') }}">{{ __('base.register') }}</a>
                </li>
            @endif
        @else
            <div class="dropdown">
                <li class="nav-item" data-dropdown>
                    <a class="link" data-dropdown-button>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu logout" data-dropdown-menu>
                        <a class="dropdown-item btn-submit" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </div>
        @endguest
    </ul>
</nav>
