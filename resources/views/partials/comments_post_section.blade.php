<div class="comment_tab">Комментарии</div>


<div id="comment_section">
    <ol class="comments first_level">

        @if(!count($comments))

            <li>
                <div class="comment_box commentbox1">

                    <div class="comment_text">
                        <p>Вы будете первым, кто оставит здесь комментарий!</p>
                    </div>
                    <div class="cleaner"></div>

                </div>
            </li>

        @else

            @foreach($comments as $comment)

            <li>
                <div class="comment_box commentbox1">

                    <div class="comment_text">

                        @if(Auth::check())
                        <div class="comment_delete_btn">
                            <a href="{{action('CommentController@destroy', $comment->id)}}">Х</a>
                        </div>
                        @endif

                        <div class="comment_author">{{$comment->author}}<span class="date">{{$comment->created_at}}</span></div>
                        <p>{!!$comment->content!!}</p>
                    </div>
                    <div class="cleaner"></div>

                </div>
            </li>

            @endforeach

        @endif

    </ol>
</div>

<div id="comment_form">
    <h3>Оставьте свой комментарий</h3>

    {!! Form::open(['route' => ['comment.save', $post->id]]) !!}

        <div class="form-row">
            {!! Form::label('author', 'Имя:') !!}
            {!! Form::text('author', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-row">
            {!! Form::label('email', 'E-mail:') !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-row">
            {!! Form::label('content', 'Текст комментария:') !!}
            {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-row">
            {!! Form::submit('Добавить комментарий', ['class' => 'submit_btn']) !!}
        </div>

    {!! Form::close() !!}

    @include('errors.list')

</div>


