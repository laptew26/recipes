<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table = 'recipes';   //Подключение таблицы

    protected $fillable = [     //Разрешенные изменяемые поля
        'title', 'description', 'user_id', 'category_id',
        'healthy', 'time', 'difficulty_id', 'photo',
    ];

    public function difficulty()    //Связь с сложностью
    {
        return $this->belongsTo(Difficulty::class);
    }

    public function category()  //Связь с категориями
    {
        return $this->belongsTo(Category::class);
    }


    public function user()  //Связь с пользователем
    {
        return $this->belongsTo(User::class);
    }
}
