<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Post;

class Artist extends Model
{
    protected $table = 'artists';
    protected $fillable = array('name', 'first_letter');
    public $timestamps = false;//Отключаем Timestamps для этой модели

    use Sluggable;

    public function sluggable() //Инициализация методов модуля Sluggable (Добавляет слаги в модели)
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function scopeArtists($query)
    {
        $query->orderBy('name');
    }

    public function posts()
    {
        return $this->hasMany('App\Post', 'artist', 'name');
    }

}
