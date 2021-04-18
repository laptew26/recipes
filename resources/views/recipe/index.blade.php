@extends('layout')

@section('title')
    Рецепты
    @endsection

    @section('content')
    @include('components.recipe_cards')
    {{$recipes->render()}}
    <br>
    </div>
@endsection
