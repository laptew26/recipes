<?php

namespace App\Http\Controllers;

use App\Difficulty;
use App\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecipeController extends Controller
{
    public function index() //Вывод всех рецептов
    {
        $recipes = Recipe::paginate(15);    //По 15 записей рецептов на 1 страницу
        return view('recipe.index', [
            'recipes' => $recipes,
        ]);
    }

    public function create()    //Вывод страницы создания рецепта
    {
        return view('recipe.create', [
            'difficulties' => Difficulty::all(),
        ]);
    }

    public function store(Request $request) //POST запрос на создание рецепта
    {
        Recipe::create($request->except('photo'));  //Все input поля кроме photo
        $file_input = $request->file('photo');  //Запись в переменную file_input информацию из этого input
        $file_name = $file_input->getClientOriginalName();  //Запись в переменную file_name названия файла
        $path = public_path('/img');    //Запись в переменную path путь где лежат фотографии
        $file_input->move($path, $file_name);   //Перемещение файла из переменной file input в путь(path) и название его из переменной file_name
        return redirect(route('recipe_show', $request->id));    //Переход на только что созданный рецепт
    }

    public function show($id)   //Вывод рецепта
    {
        return view('recipe.show', [
            'recipe' => Recipe::find($id),
        ]);
    }

    public function edit($id)   //Вывод формы обновления рецепта
    {
        return view('recipe.edit', [
            'recipe' => Recipe::find($id),
            'difficulties' => Difficulty::all(),
        ]);
    }

    public function update($id, Request $request)   //Post запрос на обновление рецепта
    {
        Recipe::find($id)->update($request->except('photo'));
        $file_input = $request->file('photo');
        $file_name = $file_input->getClientOriginalName();
        $path = public_path('/img');
        $file_input->move($path, $file_name);
        return redirect(route('recipe_show', $request->id));
    }

    public function destroy($id)    //Удаление рецепта
    {
        $recipe = Recipe::find($id);    //Поиск этого рецепта
        if (Auth::user()->id == $recipe->user_id || Auth::user()->admin == 1) {
            $recipe->delete();  //Если пользователь - владелец рецепта или администратор, то происходит удаление
            return redirect(route('recipe_index')); //Возврат на страницу с рецептами
        }
    }
}
