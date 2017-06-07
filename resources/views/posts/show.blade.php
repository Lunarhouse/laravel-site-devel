@extends('layouts.master')

@section('main_content')

    <div class="post_section">


        <h2>{{$post->artist}} - {{$post->title}} </h2>


        <div class="post_meta">
            <strong>Дата публикации:</strong> {{$post->published_at}} |
        </div>

        @if(Auth::check())
            <div class="edit_btn">
                <a href={{route('post.edit', $post->id)}} target="_parent">Редактировать</a>
            </div>

            <div class="delete_btn">
                <a href={{route('post.destroy', $post->id)}} target="_parent">Удалить</a>
            </div>
        @endif

        <div class="right">
            <p>{!!$post->content!!}</p>

        </div>


        <div class="cleaner_h20"></div>

        <div class="post_button comment">
            <a href="#comments_anchor">Комментарии: {{count($comments)}}</a>
        </div>

        <div class="comments" id="comments_anchor">

           @include('partials.comments_post_section')

        </div>

        <div class="cleaner"></div>

    </div>

@stop