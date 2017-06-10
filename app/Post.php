<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;


class Post extends Model
{

    protected $table = 'posts';
    protected $fillable = ['artist', 'title', 'content', 'slug', 'published', 'published_at'];
    protected $primaryKey = 'slug';
    public $incrementing = FALSE; //Отключаем автоинкремент у $primaryKey

    use Sluggable;


    public function sluggable() //Инициализация методов модуля Sluggable (Добавляет слаги в модели)
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    public function scopePublished($query)//Опубликованные посты
    {
        $query->where('published_at', '<=', Carbon::now())
              ->where('published', '=', 1)
              ->orderBy('published_at', 'desc');
    }



    public function scopeUnPublished($query)//Неопубликованные посты
    {
        $query->where('published_at', '=>', Carbon::now())
              ->orWhere('published', '=', 0)
              ->orderBy('created_at', 'desc');
    }


    public function comments()
    {
        return $this->hasMany('App\Comment','post_id','id');//Выборка комментариев по id статьи
    }


    public function getPublishedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->formatLocalized('%d %B %Y');
    }

}
