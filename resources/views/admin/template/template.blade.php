<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('assets/admin/css/bootstrap.css') !!}">

    <link rel="stylesheet" href="{!! asset('assets/admin/vendors/iconly/bold.css') !!}">

    <link rel="stylesheet" href="{!! asset('assets/admin/vendors/perfect-scrollbar/perfect-scrollbar.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/admin/vendors/bootstrap-icons/bootstrap-icons.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/admin/css/app.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/admin/vendors/toastify/toastify.css') !!}">
    <link rel="shortcut icon" href="{!! asset('assets/admin/images/favicon.svg" type="image/x-icon') !!}">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="{{ route('adm.dashboardadmin') }}"><img src="{!! asset('assets/admin/images/logo/logo.png') !!}" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item {{ request()->routeIs('adm.dashboardadmin') ? 'active' : '' }}">
                            <a href="{{ route('adm.dashboardadmin') }}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item {{ Request::is('admin/photo*') || Request::is('admin/category') ? 'active' : '' }} has-sub">
                            <a href="" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Photo</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item"><a href="{{ route('adm.photoadmin') }}">Photo</a></li>
                                <li class="submenu-item"><a href="{{ route('adm.categoryadmin') }}">Category</a></li>
                            </ul>
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
                @yield('content')
            </div>

            
        </div>

    </div>
    <script src="{!! asset('assets/admin/vendors/perfect-scrollbar/perfect-scrollbar.min.js') !!}"></script>
    <script src="{!! asset('assets/admin/js/bootstrap.bundle.min.js') !!}"></script>

    <script src="{!! asset('assets/admin/vendors/apexcharts/apexcharts.js') !!}"></script>
    <script src="{!! asset('assets/admin/js/pages/dashboard.js') !!}"></script>

    <script src="{!! asset('assets/admin/js/main.js') !!}"></script>
</body>

</html>