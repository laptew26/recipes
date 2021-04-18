@extends('layout')

@section('title')
    Рецепты
@endsection

@section('content')
    {{$recipes->render()}}
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название</th>
            <th scope="col">Описание</th>
        </tr>
        </thead>
        <tbody>
        @foreach($recipes as $recipe)
            <tr>
                <th scope="row">{{$recipe->id}}</th>
                <td><a href="{{route('recipe_show', $recipe->id)}}">{{$recipe->title}}</a></td>
                <td>{{$recipe->description}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$recipes->render()}}
@endsection
