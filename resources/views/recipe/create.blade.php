@extends('layout')

@section('title', 'Создание рецепта')

@section('content')
    <div class="app shadow">
        <div class="app-img">
            <img class="app" src="/img/example.png">
        </div>
        <div class="app_about">
            <form action="{{route('recipe_store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div>
                        <label class="form-label" for="time">Название:</label>
                        <input class="form-control" name="title" type="text" placeholder="Название">
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="time">Время приготовления(в минутах):</label>
                        <input type="text" name="time" class="form-control" maxlength="3" placeholder="Время приготовления">
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
                        <label class="form-label">Автор: {{Auth::name}}</label>
                    </div>
                    <div>
                        <label class="form-label">Ингридиенты:</label>
                        <textarea name="description" class="form-control" placeholder="Ингредиенты"
                                  rows="10"></textarea>
                    </div>
                    <div>
                        <label class="form-label">Рецепт:</label>
                        <textarea name="description" class="form-control" placeholder="Описание рецепта"
                                  rows="10"></textarea>
                    </div>
                    <div>
                        <label for="photo" class="form-label">Сменить фотографию:</label>
                        <input type="file" class="form-control" name="photo" accept="image/jpeg,image/png">
                    </div>
                    <div>
                        <button class="button" type="submit">Отредактировать</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
