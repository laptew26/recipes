@extends('layout')

@section('title')
    Рецепт №{{$recipe->id}}
@endsection

@section('content')
    <div class="app shadow">
        <div class="app-img">
            <img class="app" src="/img/example.png">
        </div>
        <div class="app_about">
            <form action="{{route('recipe_update', $recipe->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div>
                        <label class="form-label" for="time">Название:</label>
                        <input class="form-control" name="title" type="text" value="{{$recipe->title}}"
                               placeholder="{{$recipe->title}}">
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="time">Время приготовления(в минутах):</label>
                        <input type="text" name="time" class="form-control" maxlength="3" value="{{$recipe->time}}"
                               placeholder="{{$recipe->time}}">
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="time">Сложность приготовления:</label>
                        <select class="form-select" name="difficulty" id="difficulty">
                            @foreach($difficulties as $difficulty)
                                <option value="{{$difficulty->id}}">{{$difficulty->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6">
                        <label class="form-label">Автор: {{$recipe->user->name}}</label>
                    </div>
                    <div>
                        <label class="form-label">Ингридиенты:</label>
                        <textarea name="description" class="form-control" placeholder="{{$recipe->ingredients}}"
                                  rows="10">{{$recipe->ingredients}}</textarea>
                    </div>
                    <div>
                        <label class="form-label">Рецепт:</label>
                        <textarea name="description" class="form-control" placeholder="{{$recipe->description}}"
                                  rows="10">{{$recipe->description}}</textarea>
                    </div>
                    <div>
                        <label for="photo" class="form-label">Сменить фотографию:</label>
                        <input type="file" class="form-control" name="photo" accept="image/jpeg,image/png">
                    </div>
                    <div>
                        <button class="button" type="submit">Отредактировать</button>
                        <a class="button button-danger" href="{{route('recipe_destroy', $recipe->id)}}">Удалить</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
