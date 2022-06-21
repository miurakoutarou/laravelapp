<?php $__env->startSection('title', 'Index'); ?>

<?php $__env->startSection('menubar'); ?>
   <?php echo \Illuminate\View\Factory::parentPlaceholder('menubar'); ?>
   インデックスページ
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   <p>ここが本文のコンテンツです。</p>
   <p>必要なだけ記述できます。</p>
  
   <?php echo $__env->make('components.message', ['msg_title'=>'OK', 
      'msg_content'=>'サブビューです。'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.helloapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravelapp/resources/views/hello/index.blade.php ENDPATH**/ ?>