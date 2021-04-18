<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Difficulty extends Model
{
    protected $table = 'difficulties';  //Подключение таблицы

    protected $fillable = [ //Разрешенные изменяемые поля
        'name'
    ];

    public function recipes()   //Связь с рецептами
    {
        return $this->hasMany(Recipe::class);
    }
}
