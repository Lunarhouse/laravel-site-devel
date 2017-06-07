@extends('layouts.master')

@section('main_content')
    <div class="post_section">
        @forelse($artists as $artist)

            <a href={{action('ArtistController@show', [$artist->slug])}}><h4>{{$artist->name}}</h4></a>

        @empty

            <div class="message_box">
                <div class="message_text">
                    <div class="alert_message"><p>К сожалению данная категория пока пуста</p></div>
                </div>
                <div class="cleaner"></div>
            </div>

        @endforelse
    </div>

@stop