@extends('layouts.master')

@section('main_content')

    <div class="post_section">

        <h2>Добавить нового исполнителя</h2>

        <hr/>


        <div class="right">
            {!! Form::open(['route' => 'artist.store']) !!}

            @include('partials._form_artist', ['submitButtonText' => 'Добавить Исполнителя'])

            {!! Form::close() !!}
        </div>

        <div class="cleaner_h20"></div>



        <div class="cleaner"></div>

    </div>


@stop