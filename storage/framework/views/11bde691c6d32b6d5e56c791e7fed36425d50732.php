;
<?php $__env->startSection('content'); ?>
<div class="page-heading">
    <h3>Category</h3>
</div>
<section class="section">
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Table Category</h4>
                    <a class="btn btn-success btn-md mt-3" href="<?php echo e(route('adm.addcategoryadmin')); ?>">Tambah Data</a>
                </div>
                
                <div class="card-content">
                    
                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Category</th>
                                    <th>Active</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td style="width:70px"><?php echo e(++$i); ?></td>
                                    <td style="word-wrap: break-word;width: 300px;"><?php echo e($c->category); ?></td>
                                    <td style="word-wrap: break-word;width: 200px;">
                                        <?php if($c->active==1): ?>
                                        <span class="badge bg-success">Active</span>
                                        <?php else: ?>
                                        <span class="badge bg-danger">Non-Active</span>
                                        <?php endif; ?>
                                    </td>
                                    <td style="width: 150px"><a href="<?php echo e(route('adm.editcategory',$c->id)); ?>" class="btn btn-success btn-md">Edit</a>
                                        <?php if($c->active==1): ?>
                                        <a href="<?php echo e(route('adm.deactivecategory',$c->id)); ?>" class="btn btn-warning btn-md">Deactive</a>
                                        <?php else: ?>
                                        <a href="<?php echo e(route('adm.activecategory',$c->id)); ?>" class="btn btn-info btn-md">Active</a>
                                        <?php endif; ?>
                                        <a href="<?php echo e(route('adm.deletecategory',$c->id)); ?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger btn-md">Hapus</a></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pamerana/public_html/resources/views/admin/category/index.blade.php ENDPATH**/ ?>