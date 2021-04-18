@extends('layout')

@section('title')
    Главная
@endsection

@section('logo')
    <div class="logo">
        <img src="/img/logo.png" alt="logo">
    </div>
@endsection

@section('content')
    @include('components.recipe_cards')
    </div>
@endsection
