<div class="comment_tab">Комментарии</div>


<div id="comment_section">
    <ol class="comments first_level">

        <?php if(!count($comments)): ?>

            <li>
                <div class="comment_box commentbox1">

                    <div class="comment_text">
                        <p>Вы будете первым, кто оставит здесь комментарий!</p>
                    </div>
                    <div class="cleaner"></div>

                </div>
            </li>

        <?php else: ?>

            <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

            <li>
                <div class="comment_box commentbox1">

                    <div class="comment_text">

                        <?php if(Auth::check()): ?>
                        <div class="comment_delete_btn">
                            <a href="<?php echo e(action('CommentController@destroy', $comment->id)); ?>">Х</a>
                        </div>
                        <?php endif; ?>

                        <div class="comment_author"><?php echo e($comment->author); ?><span class="date"><?php echo e($comment->created_at); ?></span></div>
                        <p><?php echo $comment->content; ?></p>
                    </div>
                    <div class="cleaner"></div>

                </div>
            </li>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

        <?php endif; ?>

    </ol>
</div>

<div id="comment_form">
    <h3>Оставьте свой комментарий</h3>

    <?php echo Form::open(['route' => ['comment.save', $post->id]]); ?>


        <div class="form-row">
            <?php echo Form::label('author', 'Имя:'); ?>

            <?php echo Form::text('author', null, ['class' => 'form-control']); ?>

        </div>

        <div class="form-row">
            <?php echo Form::label('email', 'E-mail:'); ?>

            <?php echo Form::text('email', null, ['class' => 'form-control']); ?>

        </div>

        <div class="form-row">
            <?php echo Form::label('content', 'Текст комментария:'); ?>

            <?php echo Form::textarea('content', null, ['class' => 'form-control']); ?>

        </div>

        <div class="form-row">
            <?php echo Form::submit('Добавить комментарий', ['class' => 'submit_btn']); ?>

        </div>

    <?php echo Form::close(); ?>


    <?php echo $__env->make('errors.list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>


