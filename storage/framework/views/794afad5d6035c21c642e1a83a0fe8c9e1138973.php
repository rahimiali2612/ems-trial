<?php $__env->startSection('title','Ratings'); ?>


<?php $__env->startSection('vendor-style'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendors/rateYo/jquery.rateyo.min.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<!-- rating page start -->
<div class="section">
  <div class="row">
    <!-- description -->
    <div class="col s12">
      <div class="card-panel">
        We are using <a href="https://rateyo.fundoocode.ninja/" target="_blank">rateYO</a> for ratings.RateYo! is a tiny
        and
        flexible jQuery star rating plugin, it uses SVG to render rating, so no images required.
        just create a &lt;div&gt;, throw some styles, initialize and thats it!.Hover to change the rating and
        Click to
        set.
      </div>
    </div>
    <!-- rating options examples -->
    <div class="col s12">
      <div class="row">
        <div class="col l4 m6 s12">
          <div class="card-panel">
            <h6 class="m-0">Default</h6>
            <p>This is the most basic example of ratings. </p>
            <div class="rateYo"></div>
          </div>
        </div>
        <div class="col l4 m6 s12">
          <div class="card-panel">
            <h6 class="m-0">onSet</h6>
            <p>
              This function is called whenever the rating is set.
            </p>
            <div class="onset-rate"></div>
          </div>
        </div>
        <div class="col l4 m6 s12">
          <div class="card-panel">
            <h6 class="m-0">onChange</h6>
            <p>
              This function is called whenever the rating is changed.
            </p>
            <div class="display-flex flex-wrap">
              <div class="rate-onchange"></div>
              <div class="chip ml-1">0</div>
            </div>
          </div>
        </div>
        <div class="col l4 m6 s12">
          <div class="card-panel">
            <h6 class="m-0">Normal Fill</h6>
            <p>The background color for the un-rated part of a star.You can set this option using
              <code class="token function language-javascript">data-rateyo-normal-fill</code> attribute.
            </p>
            <div class="normalfillrate" data-rateyo-normal-fill="#e8eaf6"></div>
          </div>
        </div>
        <div class="col l4 m6 s12">
          <div class="card-panel">
            <h6 class="m-0">Rated Fill</h6>
            <p>The color for the rated part of a star.You can set this option using
              <code class="token function language-javascript">data-rateyo-rated-fill</code> attribute.</p>
            <div class="rateYo" data-rateyo-rated-fill="#3f51b5"></div>
          </div>
        </div>
        <div class="col l4 m6 s12">
          <div class="card-panel">
            <h6 class="m-0">Num Stars</h6>
            <p>
              Number of stars to use, to display the rating.You can set this option using
              <code class="token function laguage-javascript">data-rateyo-num-stars</code>
              attribute.
            </p>
            <div class="num-rate" data-rateyo-num-stars="3"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col l4 m6  s12">
          <div class="card-panel">
            <h6 class="m-0">Max Value</h6>
            <p>
              The Maximum value, you want the rating to end with. You can set this option using
              <code class="token function language-javascript">data-rateyo-max-value</code>
              attribute.
            </p>
            <!-- <div class="counter chip">0</div> -->
            <div class="num-rate tooltipped" data-rateyo-num-stars="1" data-rateyo-max-value="1"></div>
          </div>
        </div>
        <div class="col l4 m6 s12">
          <div class="card-panel">
            <h6 class="m-0">Read Only</h6>
            <p>
              If you want the rating to be
              non-editable.You can set this option using <code
                class="token function language-javascript">data-rateyo-read-only="true"</code> attribute.
            </p>
            <div class="num-rate" data-rateyo-read-only="true" data-rateyo-rating="50%"></div>
          </div>
        </div>
        <div class="col l4 m12 s12">
          <div class="card-panel">
            <h6 class="m-0">Spacing</h6>
            <p>
              The amount of space between stars in pixels.You can set this option using <code
                class="token function language-javascript">data-rateyo-spacing</code> attribute.
            </p>
            <div class="num-rate" data-rateyo-spacing="5px"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col m6 s12">
          <div class="card-panel">
            <h6 class="m-0">Half Star</h6>
            <p>When set to <code class="token function laguage-javascript">true</code>, rating will be displayed in the
              steps of <code class="token function laguage-javascript">0.5</code>. You can set
              this option using <code class="token function laguage-javascript">data-rateyo-half-star="true"</code>
              attribute.</p>
            <div class="num-rate" data-rateyo-half-star="true"></div>
          </div>
        </div>
        <div class="col m6 s12">
          <div class="card-panel">
            <h6 class="m-0">Full Star</h6>
            <p>
              When set to <code class="token function language-javascript">true</code>, rating will be displayed in the
              steps of <code class="token function language-javascript">1</code> .You can set this option using
              <code class="token function language-javascript">data-rateyo-full-star="true"</code> attribute.</p>
            <div class="num-rate" data-rateyo-full-star="true"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col m6 s12">
          <div class="card-panel">
            <h6 class="m-0">Multi Color</h6>
            <p>you can set this option using <code
                class="token function language-javascript">data-rateyo-multi-color="true"</code> attribute, This option
              helps in changeing the color of the rating, as the
              rating value changes(
              Multi Color ).</p>
            <div class="multi-color-rate"></div>
          </div>
        </div>
        <div class="col m6 s12">
          <div class="card-panel">
            <h6 class="m-0">Star With</h6>
            <p>The width of each star, the width of a star is always equal to its height.You can set this
              option using <code class="token function  language-javascript">data-rateyo-star-width</code>
              attribute.</p>
            <div class="rateYo" data-rateyo-star-width="38px"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- rating page end -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('vendor-script'); ?>
<script src="<?php echo e(asset('vendors/rateYo/jquery.rateyo.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('page-script'); ?>
<script src="<?php echo e(asset('js/scripts/extra-components-ratings.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ems\resources\views/pages/extra-components-ratings.blade.php ENDPATH**/ ?>