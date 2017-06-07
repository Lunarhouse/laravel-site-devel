<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['author','email','content','post_id'];



    public function scopeActual($query) //Область последних комментариев
    {
        $query->latest('created_at')->take(5);
    }

    public function getCreatedAtAttribute($date) //Геттер человекопонятных дат
    {
        Carbon::setLocale('ru'); //Установка русского языка для дат
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->diffForHumans(); //Возращает количество единиц времени с момента написания
    }


    public function postName()
    {
        return $this->BelongsTo('App\Post', 'post_id', 'id'); //Выборка поста для блока последних комментариев
    }

}
