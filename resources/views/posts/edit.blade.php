@extends('layouts.master')

@section('main_content')

    <div class="post_section">
        <h3>Редактирование текста песни:</h3>

        <h2>{{$post->artist}} - {{$post->title}}</h2>

        <hr/>

        {!! Form::model($post, ['method' => 'patch', 'action' => ['PostController@update', $post->id]]) !!}

        @include('partials._form_post', ['submitButtonText' => 'Сохранить'])

        {!! Form::close() !!}


        <div class="cleaner_h20"></div>



        <div class="cleaner"></div>

    </div>


@stop