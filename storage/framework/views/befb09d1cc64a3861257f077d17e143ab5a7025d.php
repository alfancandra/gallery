;
<?php $__env->startSection('content'); ?>
<div class="page-heading">
    <h3>Photo</h3>
</div>
<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tambah Data Photo</h4>
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
                    <form action="<?php echo e(route('adm.storephoto')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="basicInput">Title</label>
                            <input type="text" name="title" class="form-control" id="basicInput"
                                placeholder="Enter Title" required>
                        </div>

                        <div class="form-group">
                            <label for="basicInput">Description</label>
                            <textarea class="form-control" name="deskripsi" required></textarea>
                        </div>

                        <div class="form-group">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Input Photo</label>
                                <input class="form-control" name="images" type="file" id="formFile" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="basicInput">Category</label>
                            <select class="form-select" name="category_id" id="basicSelect" required>
                                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($c->id); ?>"><?php echo e($c->category); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
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
<?php echo $__env->make('admin.template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pamerana/public_html/resources/views/admin/photo/add.blade.php ENDPATH**/ ?>