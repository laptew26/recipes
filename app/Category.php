<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';  //Подключение таблицы

    protected $fillable = [ //Разрешенные изменяемые поля
        'name'
    ];

    public function recipes()   //Связь с рецептами
    {
        return $this->hasMany(Recipe::class);
    }
}
