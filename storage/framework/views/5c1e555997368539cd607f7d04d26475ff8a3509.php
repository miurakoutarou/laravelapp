<?php $__env->startSection('title', 'Index'); ?>

<?php $__env->startSection('menubar'); ?>
   <?php echo \Illuminate\View\Factory::parentPlaceholder('menubar'); ?>
   インデックスページ
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   <table>
   <tr><th>Name</th><th>Mail</th><th>Age</th></tr>
   <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr>
           <td><?php echo e($item->name); ?></td>
           <td><?php echo e($item->mail); ?></td>
           <td><?php echo e($item->age); ?></td>
       </tr>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </table>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.helloapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravelapp/resources/views/hello/index.blade.php ENDPATH**/ ?>