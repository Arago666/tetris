@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark text-light">
                <div class="card-header">{{ __('Добро пожаловать на сайт') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('На сайте вы можете заполнить данные по заказу, произвести расчеты стоимости и многое другое!') }}
                </div>
            </div>
        </div>
    </div>
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
    </div>
</div>
@endsection
