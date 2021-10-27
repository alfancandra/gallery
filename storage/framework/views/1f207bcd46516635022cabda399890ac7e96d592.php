

<?php $__env->startSection('title', 'All Photo'); ?>

<?php $__env->startSection('content'); ?>
    <div class="full-screen-portfolio" id="portfolio">
        <div class="container-fluid">
          <div class="row">
            <?php $__currentLoopData = $photo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 col-sm-6">
                <div class="portfolio-item">
                    <a href="<?php echo e(route('photodescription',[$item->photoid,$item->title])); ?>">
                      <div class="thumb">
                        <div class="hover-effect">
                            <div class="hover-content">
                                <h1><?php echo e($item->title); ?></h1>
                                <p class="deskripsi"><?php echo e($item->deskripsi); ?></p>
                                <p><?php echo e($item->category); ?></p>
                            </div>
                        </div>
                        <div class="image">
                            <img class="photo-collection" src="<?php echo e(asset('img/photo/'.$item->images)); ?>">
                        </div>
                    </div></a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
          
        </div>
    </div>

    <footer>
        <div class="container-fluid">
            <div class="col-md-12">
                <p>Copyright &copy; 2018 Company Name 
    
    | Designed by TemplateMo</p>
            </div>
        </div>
    </footer>


      <!-- Modal button -->
    <div class="popup-icon">
      <button id="modBtn" class="modal-btn"><img src="<?php echo asset('img/contact-icon.png'); ?>" alt=""></button>
    </div>  

    <!-- Modal -->
    <div id="modal" class="modal">
      <!-- Modal Content -->
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h3 class="header-title">Say hello to <em>Highway</em></h3>
          <div class="close-btn"><img src="<?php echo asset('img/close_contact.png'); ?>" alt=""></div>    
        </div>
        <!-- Modal Body -->
        <div class="modal-body">
          <div class="col-md-6 col-md-offset-3">
            <form id="contact" action="" method="post">
                <div class="row">
                    <div class="col-md-12">
                      <fieldset>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="btn">Send Message Now</button>
                      </fieldset>
                    </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Coding\web\gallery\gallery\resources\views/photo/showall.blade.php ENDPATH**/ ?>