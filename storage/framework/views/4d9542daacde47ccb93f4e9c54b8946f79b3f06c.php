<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-content">
        <div class="card-title"><?php echo e(__('Verify Your Email Address')); ?></div>
          <?php if(session('resent')): ?>
          <div class="card-alert card green lighten-5" role="alert">
              <div class="card-content green-text">
                <?php echo e(__('A fresh verification link has been sent to your email address.')); ?>

              </div>
          </div>
          <?php endif; ?>

          <?php echo e(__('Before proceeding, please check your email for a verification link.')); ?>

          <?php echo e(__('If you did not receive the email')); ?>,
          <form class="d-inline" method="POST" action="<?php echo e(route('verification.resend')); ?>">
              <?php echo csrf_field(); ?>
              <button type="submit"
                  class="waves-effect waves-light btn"><?php echo e(__('click here to request another')); ?></button>.
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.fullLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/materialize-admin/materialize-html-laravel-template/resources/views/auth/verify.blade.php ENDPATH**/ ?>