<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


//Роуты статичных страниц

Route::get('about', ['as' => 'about', 'uses' => 'PagesController@about']);


//Роуты для постов

Route::get('/', ['as' => 'index', 'uses' => 'PostController@index']);//Главная страница

Route::group(['middleware' => 'auth'], function() {//Группа для авторизованного пользователя

    Route::get('post/create', ['as' => 'post.create', 'uses' => 'PostController@create']);//Создание нового поста
    Route::post('post', ['as' => 'post.store', 'uses' => 'PostController@store']);//Сохранение поста
    Route::get('post/{id}/edit', ['as' => 'post.edit', 'uses' => 'PostController@edit']);//Редактирование существующего поста
    Route::patch('post/{id}', ['as' => 'post.update', 'uses' => 'PostController@update']);//Сохранение отредактированного поста
    Route::get('post/delete/{id}', ['as' => 'post.destroy', 'uses' => 'PostController@destroy']);//Удаление поста
    Route::get('post/unpublished', 'PostController@unpublished');//Неопубликованные

    Route::get('artist/add', ['as' => 'artist.create', 'uses' => 'ArtistController@create' ]);//Создание исполнителя
    Route::get('artist/{slug}/delete', ['as' => 'artist.delete', 'uses' => 'ArtistController@destroy'])->where('slug', '[A-Za-z0-9-]+');
    Route::post('artist', ['as' => 'artist.store', 'uses' => 'ArtistController@store']);


    Route::get('comment/{id}/delete', ['as' => 'comment.destroy', 'uses' => 'CommentController@destroy']);//Удаление комментария

});




Route::get('post/{slug}', ['as' => 'show', 'uses' => 'PostController@show']); //Отображение поста

//Route::get('post/{slug}', 'PostController@show')->where('slug', '^[\w\d\/-]+');
//Route::get('post/{id}', 'PostController@show')->where('id', '^(?!0)[\d]+');




//$router->resource('post', 'PostController');//Замена всему вышестоящему

//Роуты для исполнителей
Route::get('artist/{letter}', 'ArtistController@letter')->where('letter', '[A-Za-zА-Яа-я0-9]'); //Отображение исполнителей по буквам
Route::get('artist/{slug}', 'ArtistController@show')->where('slug', '[A-Za-z0-9-]+');//Отображение исполнителя


//Роуты для комментов

Route::post('post/{id}',['as' => 'comment.save', 'uses' => 'CommentController@save']);



//Роуты авторизации

Auth::routes();

Route::get('/home', 'HomeController@index');

//Композеры для боксов

View::composer('partials.comments_box', function($view){ //Бокс последних комментариев

    $lastComments = App\Comment::actual()->with('postName')->get();
    $view->with('lastComments', $lastComments);

});

View::composer('partials.artists_box', function($view){ //Бокс исполнителей

    $artists = App\Artist::artists()->get();
    $view->with('artists', $artists);
});



