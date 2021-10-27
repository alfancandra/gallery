;
<?php $__env->startSection('content'); ?>
<div class="page-heading">
    <h3>Photo</h3>
</div>
<section class="section">
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Table Photo</h4>
                    <a class="btn btn-success btn-md mt-3" href="">Tambah Data</a>
                </div>
                
                <div class="card-content">
                    
                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th>Images</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $photo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td style="width:70px"><?php echo e(++$i); ?></td>
                                    <td style="word-wrap: break-word;width: 300px;"><?php echo e($p->title); ?></td>
                                    <td style="word-wrap: break-word;width: 500px;"><?php echo e($p->deskripsi); ?></td>
                                    <td style="width:120px;"><?php echo e($p->category_id); ?></td>
                                    <td style="width: 150px"><a href="<?php echo e(url('img/photo/'.$p->images)); ?>"><img src="<?php echo e(asset('img/photo/'.$p->images)); ?>" width="100px"></td>
                                    <td style="width: 150px"><a href="" class="btn btn-success btn-md">Edit</a>
                                        <a href="" class="btn btn-danger btn-md">Hapus</a></td>
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
<?php echo $__env->make('admin.template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Coding\web\gallery\gallery\resources\views/admin/photo.blade.php ENDPATH**/ ?>