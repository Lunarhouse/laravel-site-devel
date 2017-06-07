<div class="form-group">
    {!! Form::label('artist', 'Исполнитель:') !!}
    {!! Form::text('artist', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('title', 'Название композиции:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('content', 'Текст песни:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('published', 'Опубликовано:') !!}
    {!! Form::checkbox('published', null, false) !!}
</div>


<div class="form-group">
    {!! Form::label('published_at', 'Дата публикации:') !!}
    {!! Form::input('date', 'published_at', date('Y-m-d H:i:s'), ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
</div>


@include('errors.list')