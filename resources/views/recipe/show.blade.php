@extends('layout')

@section('title')
    Рецепт №{{$recipe->id}}
@endsection

@section('content')
    <div class="app shadow">
        <div class="app-img">
            <img class="app" src="/img/{{$recipe->photo}}">
        </div>
        <div class="app_about">
            <div class="mb-3">
                <h2>{{$recipe->title}}</h2>
                <span>~{{$recipe->time}} минут | {{$recipe->difficulty->name}}</span>
                @if(isOwner($recipe->id))
                    <a href="{{route('recipe_edit', $recipe->id)}}" class="button update">Редактировать</a>
                @endif
            </div>
            <div class="app-author">
                <p class="app-about-title">Автор:</p>
                <span>{{$recipe->user->name}}</span>
            </div>
            <p class="app-about-title">Ингридиенты:</p>
            <p>{{$recipe->ingredients}}</p>
            <p class="app-about-title">Рецепт:</p>
            <p>{{$recipe->description}}</p>
        </div>
    </div>
@endsection
