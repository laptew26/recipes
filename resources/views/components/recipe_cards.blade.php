<div class="bg-cards shadow">
    <div class="row">
        @foreach($recipes as $recipe)
            <div class="col-4 mb-3">
                <div class="card">
                    <a href="{{route('recipe_show', $recipe->id)}}"><img src="/img/example.png" class="card-img-top"
                                                                     alt="#"></a>
                    <div class="card-body">
                        <div class="card-title">
                            <a href="{{route('recipe_show', $recipe->id)}}"><h4>{{$recipe->title}}</h4></a>
                            <p class="card-text">~{{$recipe->time}} минут | {{$recipe->difficulty->name}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
