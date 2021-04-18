@extends('layout')

@section('title')
    Рецепт №{{$user->id}}
@endsection

@section('content')
    <div class="app shadow">
        <div class="app-img">
            <img class="app" src="/img/example.png">
        </div>
        <div class="app_about">
            <div class="mb-3">
                <h2>{{$user->name}}</h2>
            </div>
            <div class="app-author">
                <p class="app-about-title">Почта:</p>
                <span>{{$user->email}}</span>
            </div>
            <p class="app-about-title">Рецепты этого пользователя:</p>

            @foreach($user->recipes as $recipe)
                <div class="mb-1">
                    <a href="{{route('recipe_show', $recipe->id)}}">{{$recipe->title}}</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
