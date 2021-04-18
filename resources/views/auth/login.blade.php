@extends('layout')

@section('title', 'Авторизация')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <form action="{{route('doLogin')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="emailLog" class="form-label">Эл. почта:</label>
                        <input class="form-control" type="email" name="email" id="email" required
                               placeholder="Эл. почта">
                    </div>
                    <div class="mb-3">
                        <label for="passwordLog" class="form-label">Пароль:</label>
                        <input class="form-control" type="password" name="password" id="password" required
                               placeholder="Пароль">
                    </div>
                    <button type="submit" id="logBtn" class="button">Авторизация</button>
                </form>
            </div>
        </div>

    </div>
@endsection
