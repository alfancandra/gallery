;

<?php $__env->startSection('content'); ?>;
<link rel="stylesheet" type="text/css" href="<?php echo asset('css/login.css'); ?>">
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <h1>REGISTER</h1>
    </div>

    <!-- Login Form -->
    <form action="<?php echo e(route('storeregister')); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <input type="text" id="login" class="fadeIn second" name="name" placeholder="Nama Lengkap" value="<?php echo e(old('name')); ?>">

      <input type="text" id="login" class="fadeIn second" name="email" placeholder="Email">
      <?php if($errors->has('email')): ?><br><small class="text-danger" role="alert"><?php echo e($errors->first('email')); ?></small><?php endif; ?>

      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">

      <input type="text" class="fadeIn third" name="hp" placeholder="Nomor Hp" value="<?php echo e(old('hp')); ?>"> 
      <input type="text" id="login" class="fadeIn second" name="institusi" placeholder="Institusi" value="<?php echo e(old('institusi')); ?>">
      <input type="submit" class="fadeIn fourth" value="Register">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="<?php echo e(route('forgotpassword')); ?>">Forgot Password?</a>
      <br>
      <a class="underlineHover" href="<?php echo e(route('login')); ?>">Login</a>
    </div>

  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Coding\web\gallery\gallery\resources\views/register.blade.php ENDPATH**/ ?>