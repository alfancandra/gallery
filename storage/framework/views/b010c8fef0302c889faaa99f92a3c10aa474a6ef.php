<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset('assets/admin/css/bootstrap.css'); ?>">

    <link rel="stylesheet" href="<?php echo asset('assets/admin/vendors/iconly/bold.css'); ?>">

    <link rel="stylesheet" href="<?php echo asset('assets/admin/vendors/perfect-scrollbar/perfect-scrollbar.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('assets/admin/vendors/bootstrap-icons/bootstrap-icons.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('assets/admin/css/app.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('assets/admin/vendors/toastify/toastify.css'); ?>">
    <link rel="shortcut icon" href="<?php echo asset('assets/admin/images/favicon.svg" type="image/x-icon'); ?>">
</head>
<style>
    *{
        font-family: Arial;
    }
</style>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="<?php echo e(route('adm.dashboardadmin')); ?>">Admin Panel</a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item <?php echo e(request()->routeIs('adm.dashboardadmin') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('adm.dashboardadmin')); ?>" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item <?php echo e(Request::is('admin/photo*') || Request::is('admin/category') ? 'active' : ''); ?> has-sub">
                            <a href="" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Photos</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item"><a href="<?php echo e(route('adm.photoadmin')); ?>">Photo</a></li>
                                <li class="submenu-item"><a href="<?php echo e(route('adm.categoryadmin')); ?>">Category</a></li>
                            </ul>
                        </li>

                        <li class="sidebar-item <?php echo e(Request::is('admin/user*') || Request::is('admin/useradmin') ? 'active' : ''); ?> has-sub">
                            <a href="" class='sidebar-link'>
                                <i class="iconly-boldProfile"></i>
                                <span>Users</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item"><a href="<?php echo e(route('adm.user')); ?>">User</a></li>
                                <li class="submenu-item"><a href="<?php echo e(route('adm.useradmin')); ?>">Admin</a></li>
                            </ul>
                        </li>

                        <li class="sidebar-item">
                            <a href="<?php echo e(route('logout')); ?>" class='sidebar-link'>
                                <i class="bi bi-x-octagon-fill"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            
            <div class="page-content">
                <?php echo $__env->yieldContent('content'); ?>
            </div>

            
        </div>

    </div>
    <script src="<?php echo asset('assets/admin/vendors/perfect-scrollbar/perfect-scrollbar.min.js'); ?>"></script>
    <script src="<?php echo asset('assets/admin/js/bootstrap.bundle.min.js'); ?>"></script>

    <script src="<?php echo asset('assets/admin/vendors/apexcharts/apexcharts.js'); ?>"></script>
    <script src="<?php echo asset('assets/admin/js/pages/dashboard.js'); ?>"></script>

    <script src="<?php echo asset('assets/admin/js/main.js'); ?>"></script>
    <?php echo $__env->yieldPushContent('js-plugin'); ?>
</body>

</html><?php /**PATH D:\website\Pameran\resources\views/admin/template/template.blade.php ENDPATH**/ ?>