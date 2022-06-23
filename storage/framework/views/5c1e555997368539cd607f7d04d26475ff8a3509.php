<?php $__env->startSection('title', 'Index'); ?>

<?php $__env->startSection('menubar'); ?>
   <?php echo \Illuminate\View\Factory::parentPlaceholder('menubar'); ?>
   インデックスページ
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   <p>ここが本文のコンテンツです。</p>
   <ul>
   <?php echo $__env->renderEach('components.item', $data, 'item'); ?>
   </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.helloapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravelapp/resources/views/hello/index.blade.php ENDPATH**/ ?>