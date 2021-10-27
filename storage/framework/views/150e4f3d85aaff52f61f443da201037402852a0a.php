

<?php $__env->startSection('content'); ?>

<?php    
if(!empty(Auth::user()->image)){
    $photo = '/img/user/'.Auth::user()->image;
}else{
    $photo = '/img/user/user.png';
}
?>

<div class="page-heading">
    <h3>Profile Statistics</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon purple">
                                        <i class="iconly-boldImage"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Photo</h6>
                                    <h6 class="font-extrabold mb-0"><?php echo e($photoCount); ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Users</h6>
                                    <h6 class="font-extrabold mb-0"><?php echo e($userCount); ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green">
                                        <i class="iconly-boldShow"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Total View</h6>
                                    <h6 class="font-extrabold mb-0"><?php echo e($photoView); ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon red">
                                        <i class="iconly-boldFilter"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Category</h6>
                                    <h6 class="font-extrabold mb-0"><?php echo e($categoryCount); ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Latest Comments</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-lg">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Comment</th>
                                            <th>Photo</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="col-3">
                                                <div class="d-flex align-items-center">
                                                    <p class="font-bold ms-3 mb-0"><?php echo e($comment->name); ?></p>
                                                </div>
                                            </td>
                                            <td class="col-5">
                                                <p class=" mb-0"><?php echo e($comment->comment); ?></p>
                                            </td>
                                            <td class="col-2">
                                                <a href="<?php echo e(route('photodescription',[$comment->photoid,$comment->title])); ?>">
                                                    <p class=" mb-0"><?php echo e($comment->title); ?></p>
                                                </a>
                                            </td>
                                            <td class="col-2">
                                                <p class="mb-0"><?php echo e(Carbon\Carbon::parse($comment->commentdate)->format('d F Y')); ?></p>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="card">
                <div class="card-body py-4 px-5">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <img src="<?php echo asset($photo); ?>" alt="Face 1">
                        </div>
                        <div class="ms-3 name">
                            <h5 class="font-bold"><?php echo e(Auth::user()->name); ?></h5>
                            <h6 class="text-muted mb-0"><?php echo e(Auth::user()->email); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
    <script src="<?php echo asset('assets/admin/vendors/apexcharts/apexcharts.js'); ?>"></script>
    <script>
        var optionsProfileVisits = {
            annotations: {
                position: 'back'
            },
            dataLabels: {
                enabled:false
            },
            chart: {
                type: 'bar',
                height: 300
            },
            fill: {
                opacity:1
            },
            plotOptions: {
            },
            series: [{
                name: 'sales',
                data: [9,20,30,20,10,20,30,20,10,20,30,20]
            }],
            colors: '#435ebe',
            xaxis: {
                categories: ["Jan","Feb","Mar","Apr","May","Jun","Jul", "Aug","Sep","Oct","Nov","Dec"],
            },
        }
        var chartProfileVisits = new ApexCharts(document.querySelector("#chart-profile-visits"), optionsProfileVisits);
        chartProfileVisits.render();
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Coding\web\gallery\gallery\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>