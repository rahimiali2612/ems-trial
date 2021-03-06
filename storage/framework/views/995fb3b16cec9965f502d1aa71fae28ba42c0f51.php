<?php $__env->startSection('title','Nestable'); ?>


<?php $__env->startSection('vendor-style'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendors/jquery.nestable/nestable.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="section">
  <div class="card">
    <div class="card-content">
      <p class="caption mb-0"><a href="https://dbushell.com/Nestable/" target="_blank">Nestable</a>
        Drag & drop hierarchical list with mouse and touch compatibility (jQuery plugin).</p>
    </div>
  </div>
  <!-- BASIC NESTABLES -->
  <div class="row">
    <div class="col s12 m12 l12">
      <div id="basic-Netables" class="card card card-default scrollspy">
        <div class="card-content">
          <h4 class="card-title">Basic Nestables</h4>
          <p>Netables and also draggable using touch devices, you can simply create on by with an Ordered list, further
            reading please reffer documentation</p>
          <div class="dd" id="nestable">
            <ol class="dd-list">
              <li class="dd-item" data-id="1">
                <div class="dd-handle">Item 1</div>
              </li>
              <li class="dd-item" data-id="2">
                <div class="dd-handle">Item 2</div>
                <ol class="dd-list">
                  <li class="dd-item" data-id="3">
                    <div class="dd-handle">Item 3</div>
                  </li>
                  <li class="dd-item" data-id="4">
                    <div class="dd-handle">Item 4</div>
                  </li>
                  <li class="dd-item" data-id="5">
                    <div class="dd-handle">Item 5</div>
                    <ol class="dd-list">
                      <li class="dd-item" data-id="6">
                        <div class="dd-handle">Item 6</div>
                      </li>
                      <li class="dd-item" data-id="7">
                        <div class="dd-handle">Item 7</div>
                      </li>
                      <li class="dd-item" data-id="8">
                        <div class="dd-handle">Item 8</div>
                      </li>
                    </ol>
                  </li>
                  <li class="dd-item" data-id="9">
                    <div class="dd-handle">Item 9</div>
                  </li>
                  <li class="dd-item" data-id="10">
                    <div class="dd-handle">Item 10</div>
                  </li>
                </ol>
              </li>
              <li class="dd-item" data-id="11">
                <div class="dd-handle">Item 11</div>
              </li>
              <li class="dd-item" data-id="12">
                <div class="dd-handle">Item 12</div>
              </li>
            </ol>
          </div>
          <textarea id="nestable-output"></textarea>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Dark Theme -->
<div class="row">
  <div class="col s12 m12 l12">
    <div id="dark-Netables" class="card card card-default scrollspy">
      <div class="card-content">
        <h4 class="card-title">Dark Theme</h4>
        <p>This configuration allows you to add a handler at the left so you only allowed to move it from the handler
        </p>
        <div class="dd" id="nestable2">
          <ol class="dd-list">
            <li class="dd-item" data-id="13">
              <div class="dd-handle">Item 13</div>
            </li>
            <li class="dd-item" data-id="14">
              <div class="dd-handle">Item 14</div>
            </li>
            <li class="dd-item" data-id="15">
              <div class="dd-handle">Item 15</div>
              <ol class="dd-list">
                <li class="dd-item" data-id="16">
                  <div class="dd-handle">Item 16</div>
                </li>
                <li class="dd-item" data-id="17">
                  <div class="dd-handle">Item 17</div>
                </li>
                <li class="dd-item" data-id="18">
                  <div class="dd-handle">Item 18</div>
                </li>
              </ol>
            </li>
          </ol>
        </div>
        <textarea id="nestable2-output"></textarea>
      </div>
    </div>
  </div>
</div>

<!-- Draggable Handles -->
<div class="row">
  <div class="col s12 m12 l12">
    <div id="draggable-handles" class="card card card-default scrollspy">
      <div class="card-content">
        <h4 class="card-title">Draggable Handles</h4>
        <p>This configuration allows you to add a handler at the left so you only allowed to move it from the handler
        </p>
        <div class="dd" id="nestable3">
          <ol class="dd-list">
            <li class="dd-item dd3-item" data-id="13">
              <div class="dd-handle dd3-handle"></div>
              <div class="dd3-content">Item 13</div>
            </li>
            <li class="dd-item dd3-item" data-id="14">
              <div class="dd-handle dd3-handle"></div>
              <div class="dd3-content">Item 14</div>
            </li>
            <li class="dd-item dd3-item" data-id="15">
              <div class="dd-handle dd3-handle"></div>
              <div class="dd3-content">Item 15</div>
              <ol class="dd-list">
                <li class="dd-item dd3-item" data-id="16">
                  <div class="dd-handle dd3-handle"></div>
                  <div class="dd3-content">Item 16</div>
                </li>
                <li class="dd-item dd3-item" data-id="17">
                  <div class="dd-handle dd3-handle"></div>
                  <div class="dd3-content">Item 17</div>
                </li>
                <li class="dd-item dd3-item" data-id="18">
                  <div class="dd-handle dd3-handle"></div>
                  <div class="dd3-content">Item 18</div>
                </li>
              </ol>
            </li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('vendor-script'); ?>
<script src="<?php echo e(asset('vendors/jquery.nestable/jquery.nestable.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('page-script'); ?>
<script src="<?php echo e(asset('js/scripts/extra-components-nestable.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/materialize-update/resources/views/pages/extra-components-nestable.blade.php ENDPATH**/ ?>