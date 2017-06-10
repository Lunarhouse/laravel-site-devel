<?php $__env->startSection('main_content'); ?>

    <div class="post_section">


        <h2><?php echo e($post->artist); ?> - <?php echo e($post->title); ?> </h2>


        <div class="post_meta">
            <strong>Дата публикации:</strong> <?php echo e($post->published_at); ?> |
        </div>

        <?php if(Auth::check()): ?>
            <div class="edit_btn">
                <a href=<?php echo e(route('post.edit', $post->id)); ?> target="_parent">Редактировать</a>
            </div>

            <div class="delete_btn">
                <a href=<?php echo e(route('post.destroy', $post->id)); ?> target="_parent">Удалить</a>
            </div>
        <?php endif; ?>

        <div class="right">
            <p><?php echo $post->content; ?></p>

        </div>


        <div class="cleaner_h20"></div>

        <div class="post_button comment">
            <a href="#comments_anchor">Комментарии: <?php echo e(count($comments)); ?></a>
        </div>

        <div class="comments" id="comments_anchor">

           <?php echo $__env->make('partials.comments_post_section', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        </div>

        <div class="cleaner"></div>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>