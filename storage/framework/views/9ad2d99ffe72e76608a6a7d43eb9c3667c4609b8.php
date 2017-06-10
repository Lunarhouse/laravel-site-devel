<?php $__env->startSection('main_content'); ?>

    <div class="post_section">

        <h2>Добавить текст песни</h2>

        <hr/>


        <div class="right">
            <?php echo Form::open(['route' => 'post.store']); ?>


                <?php echo $__env->make('partials._form_post', ['submitButtonText' => 'Добавить Текст'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php echo Form::close(); ?>

        </div>

        <div class="cleaner_h20"></div>



        <div class="cleaner"></div>

    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>