<?php $__env->startSection('title', 'Index'); ?>

<?php $__env->startSection('menubar'); ?>
   <?php echo \Illuminate\View\Factory::parentPlaceholder('menubar'); ?>
   インデックスページ
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <p><?php echo e($msg); ?></p>
    <?php if(count($errors) > 0): ?>
        <p>入力に問題があります。再入力して下さい。</p>
    <?php endif; ?>
    <form action="/hello" method="post">
    <table>
        <?php echo csrf_field(); ?>
        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <tr><th>ERROR</th>
            <td><?php echo e($message); ?></td></tr>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <tr><th>name: </th><td><input type="text" 
            name="name" value="<?php echo e(old('name')); ?>"></td></tr>
        <?php $__errorArgs = ['mail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <tr><th>ERROR</th>
            <td><?php echo e($message); ?></td></tr>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <tr><th>mail: </th><td><input type="text" 
            name="mail" value="<?php echo e(old('mail')); ?>"></td></tr>
        <?php $__errorArgs = ['age'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <tr><th>ERROR</th>
            <td><?php echo e($message); ?></td></tr>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <tr><th>age: </th><td><input type="text" 
            name="age" value="<?php echo e(old('age')); ?>"></td></tr>
        <tr><th></th><td><input type="submit" value="send">
        </td></tr>
    </table>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.helloapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/laravelapp/resources/views/hello/index.blade.php ENDPATH**/ ?>