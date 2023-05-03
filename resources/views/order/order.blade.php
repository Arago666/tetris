@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="app">
            {{--        <router-link to="/">Home</router-link>--}}
            {{--        <router-link to="/order">Заказы</router-link>--}}
            {{--        <hr>--}}
            <router-view></router-view>
            {{--        @canany(['superadministrator'])--}}
            {{--            111111111111111111111111222<button class="btn btn-success">Hello World!</button>--}}
            {{--            <a href="{{ route('logout') }}" >Logout11</a>--}}

            {{--            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}

            {{--            </div>--}}
            {{--        @endcanany--}}
            {{--        <script>--}}
            {{--            window.user = @json(auth()->user());--}}
            {{--            window.user_roles = @json(auth()->user()->roles);--}}
            {{--            window.user_permissions = @json(auth()->user()->permissions);--}}
            {{--        </script>--}}
            <component :is="'script'">
                window.user = @json(auth()->user());
                window.user_roles = @json(auth()->user()->roles);
                window.user_permissions = @json(auth()->user()->permissions);
            </component>
        </div>

    </div>
{{--    <component :is="'script'">--}}
{{--        window.user = @json(auth()->user());--}}
{{--        window.user_roles = @json(auth()->user()->roles);--}}
{{--        window.user_permissions = @json(auth()->user()->permissions);--}}
{{--    </component>--}}
@endsection
