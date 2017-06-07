@extends('layouts.master')

@section('main_content')

    <div class="post_section">

        <h2>Добавить текст песни</h2>

        <hr/>


        <div class="right">
            {!! Form::open(['route' => 'post.store']) !!}

                @include('partials._form_post', ['submitButtonText' => 'Добавить Текст'])

            {!! Form::close() !!}
        </div>

        <div class="cleaner_h20"></div>



        <div class="cleaner"></div>

    </div>


@stop