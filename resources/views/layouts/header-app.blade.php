<div class="header" style="">
    <div class="" style="padding-left: 70px;padding-top: 20px;">
        <a href="">
            <!-- <img src="" alt=""> -->
            <label for="">Hybrid Electrostance</label>
        </a>
    </div>
    <div class="nav-wrap">
        <div class="nav-left">
        </div>
        <div class="nav-right">
        @auth
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    {{ csrf_field() }}
            <button class="btn btn-primary" type="submit">Выйти</button>
        </form>
        @else
            <a class="btn btn-primary" href="{{route('login')}}">Войти</a>
        @endif
        </div>
    </div>
</div>