<div class="menu shadow">
    <div class="row mt-3">
        <div class="col-3 d-flex align-items-center">
            <h2 class="menu-page">@yield('title')</h2>
        </div>
        <div class="col-9 ml-auto">
            <ul class="d-flex align-items-center float-end">
                <li>
                    <a class="menu-item" href="{{route('home')}}">
                        Главная
                    </a>
                </li>
                <li>
                    <a class="menu-item" href="{{route('recipe_index')}}">
                        Рецепты
                    </a>
                </li>
                <li>
                    <a class="menu-item" href="{{route('user_index')}}">
                        Пользователи
                    </a>
                </li>
                @if(Auth::check() && Auth::user()->admin == 1)
                    <li>
                        <a class="menu-item" href="{{route('admin')}}">
                            Администрирование
                        </a>
                    </li>
                @endif
                @if(Auth::check() == 0)
                    <li>
                        @include('auth.login.loginButton')
                    </li>
                    <li>
                        @include('auth.registration.regButton')
                    </li>
                @else
                    <li>
                        <a class="menu-item" href="{{route('user_show', Auth::id())}}">
                            Личный кабинет
                        </a>
                    </li>
                    <li>
                        <a class="menu-item" href="{{route('logout')}}">
                            Выход
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>
