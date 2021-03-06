<?php $__env->startSection('title','Form File Uploads'); ?>


<?php $__env->startSection('vendor-style'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendors/flag-icon/css/flag-icon.min.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendors/dropify/css/dropify.min.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="section">
  <div class="card">
    <div class="card-content">
      <p class="caption"><a href="https://github.com/JeremyFagis/dropify" target="_blank">Dropify</a> Override your
        input files with style.</p>
    </div>
  </div>
  <div class="divider mb-1"></div>
  <!--file-upload-->
  <div id="file-upload" class="section">
    <!--Default version-->
    <div class="row section">
      <div class="col s12 m4 l3">
        <p>Default version</p>
      </div>
      <div class="col s12 m8 l9">
        <input type="file" id="input-file-now" class="dropify" data-default-file="" />
      </div>
    </div>
    <!--Default value-->
    <div class="divider mb-1 mt-1"></div>
    <div class="row section">
      <div class="col s12 m4 l3">
        <p>Default value</p>
      </div>
      <div class="col s12 m8 l9">
        <input type="file" id="input-file-now-disabled-2" class="dropify" disabled="disabled"
          data-default-file="../../../images/gallery/1.png" />
      </div>
    </div>
    <!--Set dropzone height-->
    <div class="divider mb-1 mt-1"></div>
    <div class="row section">
      <div class="col s12 m4 l3">
        <p>Set dropzone height</p>
      </div>
      <div class="col s12 m8 l9">
        <input type="file" id="input-file-now-custom-2" class="dropify" data-height="500" />
      </div>
    </div>
    <!--Disabled the dropzone-->
    <div class="divider mb-1 mt-1"></div>
    <div class="row section">
      <div class="col s12 m4 l3">
        <p>Disabled the dropzone</p>
      </div>
      <div class="col s12 m8 l9">
        <input type="file" id="input-file-now-disabled-1" class="dropify" disabled="disabled" />
      </div>
    </div>
    <!--Max file size-->
    <div class="divider mb-1 mt-1"></div>
    <div class="row section">
      <div class="col s12 m4 l3">
        <p>Max file size</p>
      </div>
      <div class="col s12 m8 l9">
        <p>Maximum file upload size 2MB.</p>
        <input type="file" id="input-file-max-fs" class="dropify" data-max-file-size="2M" />
      </div>
    </div>
    <!--remove button-->
    <div class="divider mb-1 mt-1"></div>
    <div class="row section">
      <div class="col s12 m4 l3">
        <p>Remove button</p>
      </div>
      <div class="col s12 m8 l9">
        <input type="file" id="input-file-disable-remove" class="dropify" data-disable-remove="true" />
      </div>
    </div>
    <!--use events-->
    <div class="divider mb-1 mt-1"></div>
    <div class="row section">
      <div class="col s12 m4 l3">
        <p>Use events</p>
      </div>
      <div class="col s12 m8 l9">
        <input type="file" id="input-file-events" class="dropify-event"
          data-default-file="<?php echo e(asset('images/gallery/1.png')); ?>" />
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('vendor-script'); ?>
<script src="<?php echo e(asset('vendors/dropify/js/dropify.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('page-script'); ?>
<script src="<?php echo e(asset('js/scripts/form-file-uploads.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/materialize-admin/materialize-html-laravel-template/resources/views/pages/form-file-uploads.blade.php ENDPATH**/ ?>