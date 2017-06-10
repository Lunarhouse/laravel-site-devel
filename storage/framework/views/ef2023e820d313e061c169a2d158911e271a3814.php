<div class="post_section">

    <?php if(!count($posts)): ?>

        <div class="message_box">
            <div class="message_text">
                <p>К сожалению данная категория пока пуста</p>
            </div>
            <div class="cleaner"></div>
        </div>


    <?php else: ?>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

            <a href="<?php echo e(action('PostController@show', [$post->slug])); ?>"><h2><?php echo e($post->artist); ?> - <?php echo e($post->title); ?> </h2></a>
        <?php echo e($post->slug); ?>


            <div class="post_meta">
                <strong>Дата публикации:</strong> <?php echo e($post->published_at); ?> |
            </div>


            <div class="right">

                <p><?php echo $post->excerpt; ?></p>

            </div>

            <div class="cleaner_h20"></div>

            <div class="post_button comment">
                <a href="<?php echo e(action('PostController@show', [$post->slug])); ?>#comments_anchor">Комментарии: <?php echo e($post->comments_count); ?></a>
            </div>

            <div class="post_button more">
                <a href="<?php echo e(action('PostController@show', [$post->slug])); ?>">Читать далее <span>&raquo;</span></a>
            </div>

            <div class="cleaner"></div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

        <?php echo e($posts->links()); ?> <!--Пагинация-->
    <?php endif; ?>
</div>