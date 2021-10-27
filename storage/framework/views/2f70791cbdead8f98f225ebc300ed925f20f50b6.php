;
<?php $__env->startSection('content'); ?>
<div class="page-heading">
    <h3>Users</h3>
</div>
<section class="section">
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">

                <?php if($message = Session::get('success')): ?>
                    <div class="alert alert-success alert-block mb-3"> 
                        <?php echo e($message); ?>

                    </div>
                <?php endif; ?>

                <div class="card-header">
                    <h4 class="card-title">Table Users</h4>
                </div>
                
                <div class="card-content">
                    
                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Institusi</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td style="width:70px"><?php echo e(++$i); ?></td>
                                    <td style="word-wrap: break-word;width: 300px;"><?php echo e($user->name); ?></td>
                                    <td style="word-wrap: break-word;width: 300px;"><?php echo e($user->email); ?></td>
                                    <td style="word-wrap: break-word;width: 500px;"><?php echo e($user->institusi); ?></td>
                                    <td style="width: 150px">
                                        <a onClick="if(!confirm('Are you sure to delete this photo?')){return false;}" href="<?php echo e(route('adm.destroyuser',$user->id)); ?>" class="btn btn-danger btn-md">Delete</a></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <?php echo e($users->links()); ?>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pamerana/public_html/resources/views/admin/user/index.blade.php ENDPATH**/ ?>