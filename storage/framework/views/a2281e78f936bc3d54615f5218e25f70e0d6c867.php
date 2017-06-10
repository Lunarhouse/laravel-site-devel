<?php $string = app('Illuminate\Support\Str'); ?>

<h5>Последние комментарии</h5>

<?php if(!count($lastComments)): ?>

    <p>Комментариев пока нет</p>

<?php else: ?>

    <?php $__currentLoopData = $lastComments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <div class="recent_comment_box">

            <a href="<?php echo e(action('PostController@show', [$comment->postName['id']])); ?>#comments_anchor"><?php echo e($comment->author); ?> к записи <?php echo e($comment->postArtist . $comment->postName['title']); ?></a>
            <p><?php echo $string->words($comment->content,25); ?></p>

            <div class="comment_meta">
                <?php echo e($comment->created_at); ?>

            </div>

        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

<?php endif; ?>

