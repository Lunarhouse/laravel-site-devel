<div class="post_section">

    @if(!count($posts))

        <div class="message_box">
            <div class="message_text">
                <p>К сожалению данная категория пока пуста</p>
            </div>
            <div class="cleaner"></div>
        </div>


    @else
        @foreach($posts as $post)

            <a href="{{action('PostController@show', [$post->slug]) }}"><h2>{{$post->artist}} - {{$post->title}} </h2></a>
        {{$post->slug}}

            <div class="post_meta">
                <strong>Дата публикации:</strong> {{$post->published_at}} |
            </div>


            <div class="right">

                <p>{!!$post->excerpt!!}</p>

            </div>

            <div class="cleaner_h20"></div>

            <div class="post_button comment">
                <a href="{{action('PostController@show', [$post->slug])}}#comments_anchor">Комментарии: {{$post->comments_count}}</a>
            </div>

            <div class="post_button more">
                <a href="{{action('PostController@show', [$post->slug]) }}">Читать далее <span>&raquo;</span></a>
            </div>

            <div class="cleaner"></div>

        @endforeach

        {{$posts->links()}} <!--Пагинация-->
    @endif
</div>