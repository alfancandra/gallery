;
<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo asset('assets/admin/vendors/simple-datatables/style.css'); ?>">
<div class="page-heading">
    <h3>Photo</h3>
</div>
<section class="section">
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Table Photo</h4>
                    <a class="btn btn-success btn-md mt-3" href="<?php echo e(route('adm.addphotoadmin')); ?>">Add Data</a>
                </div>
                
                <?php if($message = Session::get('success')): ?>
                    <div class="alert alert-success alert-block mb-3">
                        <?php echo e($message); ?>

                    </div>
                <?php endif; ?>
                
                <div class="card-content">
                    
                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>View</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $photo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td style="width:70px"><?php echo e(++$i); ?></td>
                                    <td style="word-wrap: break-word;width: 300px;"><a href="<?php echo e(route('adm.showphoto',$p->idphoto)); ?>"><?php echo e($p->title); ?></a></td>
                                    <td style="word-wrap: break-word;width: 500px;"><?php echo e($p->deskripsi); ?></td>
                                    <td style="width:200px;"><?php echo e($p->category); ?></td>
                                    <td style="width: 100px">
                                        <?php if($p->photoactive==1): ?>
                                        <span class="badge bg-success">Active</span>
                                        <?php else: ?>
                                        <span class="badge bg-danger">Non-Active</span>
                                        <?php endif; ?>
                                        </td>
                                    <td style="width:70px"><?php echo e($p->reads); ?></td>
                                    <td style="width: 250px"><a href="<?php echo e(route('adm.editphoto',$p->idphoto)); ?>" class="btn btn-success btn-md">Edit</a>
                                        <?php if($p->photoactive==1): ?>
                                        <a href="<?php echo e(route('adm.deactivephoto',$p->idphoto)); ?>" class="btn btn-warning btn-md">Deactive</a>
                                        <?php else: ?>
                                        <a href="<?php echo e(route('adm.activephoto',$p->idphoto)); ?>" class="btn btn-info btn-md">Active</a>
                                        <?php endif; ?>
                                        <a onClick="if(!confirm('Are you sure to delete this photo?')){return false;}" href="<?php echo e(route('adm.destroyphotoadmin',$p->idphoto)); ?>" class="btn btn-danger btn-md">Delete</a></td>
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
<?php $__env->startPush('js-plugin'); ?>
<script src="<?php echo asset('assets/admin/vendors/simple-datatables/simple-datatables.js'); ?>"></script>
<script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pamerana/public_html/resources/views/admin/photo/photo.blade.php ENDPATH**/ ?>