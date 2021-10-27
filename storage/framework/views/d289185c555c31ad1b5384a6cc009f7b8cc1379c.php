;
<?php $__env->startSection('content'); ?>
<div class="page-heading">
    <h3>Detail Photo</h3>
</div>
<!-- Basic Horizontal form layout section start -->
<section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"></h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label>Title</label>
                                    </div>
                                    <div class="col-md-8">
                                        <label><?php echo e($photo->title); ?></label>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label>Description</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <label><?php echo e($photo->deskripsi); ?></label>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label>Category</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <label><?php echo e($photo->category); ?></label>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label>Image</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <td style="width: 150px"><a href="<?php echo e(url('img/photo/'.$photo->images)); ?>"><img src="<?php echo e(asset('img/photo/'.$photo->images)); ?>" style="max-width: 400px"></a></td>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label>View</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <label><?php echo e($photo->reads); ?></label>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label>Status</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <?php if($photo->photoactive==1): ?>
                                        <span class="badge bg-success">Active</span>
                                        <?php else: ?>
                                        <span class="badge bg-danger">Non-Active</span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Coding\web\gallery\gallery\resources\views/admin/photo/show.blade.php ENDPATH**/ ?>