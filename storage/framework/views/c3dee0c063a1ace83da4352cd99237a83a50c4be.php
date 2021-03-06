<?php $__env->startSection('title','Animations'); ?>


<?php $__env->startSection('vendor-style'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendors/animate-css/animate.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="section">
  <div class="card">
    <div class="card-content">
      <p><a href="https://daneden.github.io/animate.css/" target="_blank">Animate.css</a> Just-add-water CSS
        animations.</p>
    </div>
  </div>
  <!--animations-->

  <div class="row">
    <div class="col s12">
      <div class="card card-tabs" id="basic-animations">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Basic Animations</h4>
              </div>
              <div class="col s12 m6 l2">
                <ul class="tabs">
                  <li class="tab col s6 p-0"><a class="active p-0" href="#view-animations">View</a></li>
                  <li class="tab col s6 p-0"><a class="p-0" href="#html-animations">Html</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-animations">
            <div class="row">
              <div class="col s12">
                <div class="row">
                  <div class="col s12 m6 l6">
                    <select class="browser-default js--animations">
                      <optgroup label="Attention Seekers">
                        <option value="bounce">bounce</option>
                        <option value="flash">flash</option>
                        <option value="pulse">pulse</option>
                        <option value="rubberBand">rubberBand</option>
                        <option value="shake">shake</option>
                        <option value="swing">swing</option>
                        <option value="tada">tada</option>
                        <option value="wobble">wobble</option>
                        <option value="jello">jello</option>
                      </optgroup>
                      <optgroup label="Bouncing Entrances">
                        <option value="bounceIn">bounceIn</option>
                        <option value="bounceInDown">bounceInDown</option>
                        <option value="bounceInLeft">bounceInLeft</option>
                        <option value="bounceInRight">bounceInRight</option>
                        <option value="bounceInUp">bounceInUp</option>
                      </optgroup>
                      <optgroup label="Bouncing Exits">
                        <option value="bounceOut">bounceOut</option>
                        <option value="bounceOutDown">bounceOutDown</option>
                        <option value="bounceOutLeft">bounceOutLeft</option>
                        <option value="bounceOutRight">bounceOutRight</option>
                        <option value="bounceOutUp">bounceOutUp</option>
                      </optgroup>
                      <optgroup label="Fading Entrances">
                        <option value="fadeIn">fadeIn</option>
                        <option value="fadeInDown">fadeInDown</option>
                        <option value="fadeInDownBig">fadeInDownBig</option>
                        <option value="fadeInLeft">fadeInLeft</option>
                        <option value="fadeInLeftBig">fadeInLeftBig</option>
                        <option value="fadeInRight">fadeInRight</option>
                        <option value="fadeInRightBig">fadeInRightBig</option>
                        <option value="fadeInUp">fadeInUp</option>
                        <option value="fadeInUpBig">fadeInUpBig</option>
                      </optgroup>
                      <optgroup label="Fading Exits">
                        <option value="fadeOut">fadeOut</option>
                        <option value="fadeOutDown">fadeOutDown</option>
                        <option value="fadeOutDownBig">fadeOutDownBig</option>
                        <option value="fadeOutLeft">fadeOutLeft</option>
                        <option value="fadeOutLeftBig">fadeOutLeftBig</option>
                        <option value="fadeOutRight">fadeOutRight</option>
                        <option value="fadeOutRightBig">fadeOutRightBig</option>
                        <option value="fadeOutUp">fadeOutUp</option>
                        <option value="fadeOutUpBig">fadeOutUpBig</option>
                      </optgroup>
                      <optgroup label="Flippers">
                        <option value="flip">flip</option>
                        <option value="flipInX">flipInX</option>
                        <option value="flipInY">flipInY</option>
                        <option value="flipOutX">flipOutX</option>
                        <option value="flipOutY">flipOutY</option>
                      </optgroup>
                      <optgroup label="Lightspeed">
                        <option value="lightSpeedIn">lightSpeedIn</option>
                        <option value="lightSpeedOut">lightSpeedOut</option>
                      </optgroup>
                      <optgroup label="Rotating Entrances">
                        <option value="rotateIn">rotateIn</option>
                        <option value="rotateInDownLeft">rotateInDownLeft</option>
                        <option value="rotateInDownRight">rotateInDownRight</option>
                        <option value="rotateInUpLeft">rotateInUpLeft</option>
                        <option value="rotateInUpRight">rotateInUpRight</option>
                      </optgroup>
                      <optgroup label="Rotating Exits">
                        <option value="rotateOut">rotateOut</option>
                        <option value="rotateOutDownLeft">rotateOutDownLeft</option>
                        <option value="rotateOutDownRight">rotateOutDownRight</option>
                        <option value="rotateOutUpLeft">rotateOutUpLeft</option>
                        <option value="rotateOutUpRight">rotateOutUpRight</option>
                      </optgroup>
                      <optgroup label="Sliding Entrances">
                        <option value="slideInUp">slideInUp</option>
                        <option value="slideInDown">slideInDown</option>
                        <option value="slideInLeft">slideInLeft</option>
                        <option value="slideInRight">slideInRight</option>
                      </optgroup>
                      <optgroup label="Sliding Exits">
                        <option value="slideOutUp">slideOutUp</option>
                        <option value="slideOutDown">slideOutDown</option>
                        <option value="slideOutLeft">slideOutLeft</option>
                        <option value="slideOutRight">slideOutRight</option>
                      </optgroup>
                      <optgroup label="Zoom Entrances">
                        <option value="zoomIn">zoomIn</option>
                        <option value="zoomInDown">zoomInDown</option>
                        <option value="zoomInLeft">zoomInLeft</option>
                        <option value="zoomInRight">zoomInRight</option>
                        <option value="zoomInUp">zoomInUp</option>
                      </optgroup>
                      <optgroup label="Zoom Exits">
                        <option value="zoomOut">zoomOut</option>
                        <option value="zoomOutDown">zoomOutDown</option>
                        <option value="zoomOutLeft">zoomOutLeft</option>
                        <option value="zoomOutRight">zoomOutRight</option>
                        <option value="zoomOutUp">zoomOutUp</option>
                      </optgroup>
                      <optgroup label="Specials">
                        <option value="hinge">hinge</option>
                        <option value="rollIn">rollIn</option>
                        <option value="rollOut">rollOut</option>
                      </optgroup>
                    </select>
                  </div>
                  <div class="col s12 m6 l6 center-align mt-3 mb-3">
                    <div id="animationSandbox" class="animation-example animation-hover" data-animation="bounce">
                      <button type="button" class="btn waves-effect waves-light red accent-3">Look At ME!</button>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12 m12 l12 pb-2">
                    <p>Use a classes <code>.animation-{name}</code> to quickly add a animation.</p>
                    <p>Add the class <code>animated</code> to the element you want to animate. You may also want to
                      include the class <code>infinite</code> for an infinite loop.</p>
                    <p>Example:</p>
                    <button type="button"
                      class="btn waves-effect waves-light light-blue accent-3 animated infinite rubberBand mt-2 mb-2">Infinite
                      rubberBand</button>
                    <p>You can do a whole bunch of other stuff with animate.css when you combine it with jQuery or add
                      your own CSS rules. Dynamically add animations using jQuery with ease:</p>
                    <p><a href="https://www.youtube.com/watch?v=CBQGl6zokMs">View a video tutorial</a> on how to use
                      Animate.css with jQuery here. </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="html-animations">
            <code class="language-javascript" data-language="javascript">
              $('#yourElement').addClass('animated bounceOutLeft');
            </code>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('page-script'); ?>
<script src="<?php echo e(asset('js/scripts/css-animation.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ems\resources\views/pages/css-animations.blade.php ENDPATH**/ ?>