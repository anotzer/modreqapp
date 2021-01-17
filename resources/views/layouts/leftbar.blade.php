<link rel="stylesheet" href="{{asset('/css/bar.css')}}" />
<div class="header">
    <div id="title">
        Название
    </div>
    <div class="control">


    @guest
        @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link btn_t" id="btn-control" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @endif
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>
            <a href="/settings" class="btn_t" id="btn-control">
            
                <div class="btn__content">
                    Настройка
                </div> 
            </a>
            <a href="/home" class="btn_t" id="btn-control">
                <div class="btn__content">
                    Главная
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
    </div>
</div>