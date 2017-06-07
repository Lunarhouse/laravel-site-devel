@inject('string', 'Illuminate\Support\Str')

<h5>Последние комментарии</h5>

@if(!count($lastComments))

    <p>Комментариев пока нет</p>

@else

    @foreach($lastComments as $comment)
        <div class="recent_comment_box">

            <a href="{{action('PostController@show', [$comment->postName['id']]) }}#comments_anchor">{{$comment->author}} к записи {{$comment->postArtist . $comment->postName['title']}}</a>
            <p>{!!$string->words($comment->content,25)!!}</p>

            <div class="comment_meta">
                {{$comment->created_at}}
            </div>

        </div>
    @endforeach

@endif

