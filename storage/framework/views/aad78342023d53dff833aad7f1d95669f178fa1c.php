<div class="form-group">
    <?php echo Form::label('artist', 'Исполнитель:'); ?>

    <?php echo Form::text('artist', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::label('title', 'Название композиции:'); ?>

    <?php echo Form::text('title', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::label('content', 'Текст песни:'); ?>

    <?php echo Form::textarea('content', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::label('published', 'Опубликовано:'); ?>

    <?php echo Form::checkbox('published', null, false); ?>

</div>


<div class="form-group">
    <?php echo Form::label('published_at', 'Дата публикации:'); ?>

    <?php echo Form::input('date', 'published_at', date('Y-m-d H:i:s'), ['class' => 'form-control']); ?>

</div>


<div class="form-group">
    <?php echo Form::submit($submitButtonText, ['class' => 'btn btn-primary']); ?>

</div>


<?php echo $__env->make('errors.list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>