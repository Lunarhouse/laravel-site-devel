
<h5>Исполнители</h5>

<ul class="sidebar_menu">

    @foreach ($artists as $artist)

        <li><a href="{{action('ArtistController@show', [$artist->slug]) }}">{{$artist->name}}</a></li>

    @endforeach

</ul>