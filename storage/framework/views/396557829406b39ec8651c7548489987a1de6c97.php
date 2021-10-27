<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Pameran Arsitektur UAJY - <?php echo $__env->yieldContent('title'); ?></title>
<!-- 

Highway Template

https://templatemo.com/tm-520-highway

-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png') }">
        <?php if(request()->route()->getName() != "usr.profile"): ?>
            <link rel="stylesheet" href="<?php echo asset('css/bootstrap.min.css'); ?>">
            <link rel="stylesheet" href="<?php echo asset('css/bootstrap-theme.min.css'); ?>">
        <?php endif; ?>
        
        <link rel="stylesheet" href="<?php echo asset('css/fontAwesome.css'); ?>">
        <link rel="stylesheet" href="<?php echo asset('css/light-box.css'); ?>">
        <link rel="stylesheet" href="<?php echo asset('css/templatemo-style.css'); ?>">

        <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body style="background: #151515">
    <nav>
        <div class="logo" style="z-index: -1">
            <a href="<?php echo e(url('/')); ?>">Pameran Arsitektur UAJY</a>
        </div>
        <?php if(request()->route()->getName() != "usr.profile"): ?>
            <div class="menu-icon">
            <span></span>
        <?php endif; ?>
      </div>
    </nav>
    <section class="overlay-menu">
        <div class="container">
          <div class="row">
            <div class="main-menu">
                <ul>
                    <span>- Category -</span>
                    <hr>
                    <?php
                        $category = App\Models\Category::where('active',1)->get();
                    ?>
                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li>
                          <a href="<?php echo e(url('category/'.$cat->id)); ?>"><?php echo e($cat->category); ?></a>
                      </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <hr>
                    <?php if(!Auth::user()): ?>
                    <li>
                        <a href="<?php echo e(route('login')); ?>">Login</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('register')); ?>">Register</a>
                    </li>
                    <?php else: ?>
                    <?php if(Auth::user()->role_id==1): ?>
                    <li>
                        <a href="<?php echo e(route('adm.dashboardadmin')); ?>">Admin Page</a>
                    </li>
                    <?php endif; ?>
                    <li>
                        <a href="<?php echo e(route('usr.profile')); ?>">Profile</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('logout')); ?>">Logout</a>
                    </li>
                    <?php endif; ?>
                </ul>
                
            </div>
          </div>
        </div>
      </section>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo asset('js/jquery.jscroll.min.js'); ?>"></script>
    <script src="<?php echo asset('js/vendor/bootstrap.min.js'); ?>"></script>
    
    <script src="<?php echo asset('js/plugins.js'); ?>"></script>
    <script src="<?php echo asset('js/main.js'); ?>"></script>
    <?php echo $__env->yieldContent('content'); ?>;
    

    
</body>
</html><?php /**PATH E:\Coding\web\gallery\gallery\resources\views/template.blade.php ENDPATH**/ ?>