
<h5>Исполнители</h5>

<ul class="sidebar_menu">

    <?php $__currentLoopData = $artists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artist): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

        <li><a href="<?php echo e(action('ArtistController@show', [$artist->slug])); ?>"><?php echo e($artist->name); ?></a></li>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

</ul>