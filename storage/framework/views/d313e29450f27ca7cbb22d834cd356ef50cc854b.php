;

<?php $__env->startSection('content'); ?>;
<link rel="stylesheet" type="text/css" href="<?php echo asset('css/login.css'); ?>">

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <h1>Forgot Password</h1>
      <p>Please Enter your Email Address to request a password reset</p>
    </div>

    <!-- Login Form -->
    <form action="<?php echo e(route('sendemail')); ?>" method="POST">
    <?php echo csrf_field(); ?>

	    
	    <?php if($message = Session::get('error')): ?>
		    <div class="alert alert-danger alert-block mb-3">
		        <button type="button" class="close" data-dismiss="alert">×</button>    
		        <?php echo e($message); ?>

		    </div>
			<?php endif; ?>

      <input type="text" id="login" class="fadeIn second" name="email" placeholder="Email">
      <?php if($errors->has('email')): ?><br><small class="text-danger" role="alert"><?php echo e($errors->first('email')); ?></small><?php endif; ?>
      <input type="submit" class="fadeIn fourth" value="Submit">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <br>
      <a class="underlineHover" href="<?php echo e(route('register')); ?>">Register</a>
      <br>
      <a class="underlineHover" href="<?php echo e(route('login')); ?>">Login</a>
    </div>

  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Coding\web\gallery\gallery\resources\views/auth/forgotpassword.blade.php ENDPATH**/ ?>