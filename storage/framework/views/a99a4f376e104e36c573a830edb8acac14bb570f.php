;
<?php $__env->startSection('content'); ?>
<div class="page-heading">
    <h3>User Admin</h3>
</div>
<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Add User Admin</h4>
        </div>  
        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endif; ?>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <form action="<?php echo e(route('adm.storeadmin')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="basicInput">Name</label>
                            <input type="text" name="name" class="form-control" id="basicInput">
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Institusi</label>
                            <input type="text" name="institusi" class="form-control" id="basicInput">
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Email</label>
                            <input type="email" name="email" class="form-control" id="basicInput">
                        </div>
                        <div class="form-group">
                            <label for="basicInput">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success btn-lg mt-3" style="width: 200px" type="submit">Save</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pamerana/public_html/resources/views/admin/admin/add.blade.php ENDPATH**/ ?>