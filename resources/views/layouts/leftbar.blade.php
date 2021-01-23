<!-- Side Nav START -->
<div class="side-nav">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable">
            <li class="nav-item dropdown open">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <!-- <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span> -->
                    <span class="title">Меню</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{\URL::current() == route('home') ? 'active' : ''}}">
                        <a href="{{route('home')}}">Главная</a>
                    </li>
                    @auth
                        @if(\App\Models\User::checkAdm())
                        <li class="{{\URL::current() == route('settings') ? 'active' : ''}}">
                            <a href="{{route('settings')}}">Настройки</a>
                        </li>
                        @endif
                    @endif
                </ul>
            </li>
        </ul>
    </div>
</div>