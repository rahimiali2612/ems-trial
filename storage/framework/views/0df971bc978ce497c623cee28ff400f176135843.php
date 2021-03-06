<?php $__env->startSection('title','Charts Chartist'); ?>


<?php $__env->startSection('vendor-style'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendors/chartist-js/chartist.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('page-style'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/pages/charts-chartist.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="seaction" id="materialize-chartist">

   <!--Simple Line Chart-->
   <div id="ct1-chart" class="ct-chart card">
      <div class="card-content">
         <h4 class="card-title">Simple Line Chart</h4>
         <p class="caption">
            <a href="https://gionkunz.github.io/chartist-js/getting-started.html" target="_blank">Chartist-js</a> An
            example of a simple line chart with three series. You can edit this example in realtime.
         </p>
      </div>
   </div>

   <!--Holes In Data-->
   <div id="ct2-chart" class="ct-chart card">
      <div class="card-content">
         <h4 class="card-title">Holes In Data</h4>
         <p class="caption">
            <a href="https://gionkunz.github.io/chartist-js/getting-started.html" target="_blank">Chartist-js</a>
            Chartist does not freak out if you have holes in your data. Instead it will render the lines in segments and
            handles these holes gracefully. This also allows you to introduce a line at a later point or to terminate
            the series before others.
         </p>
      </div>
   </div>

   <!--Line Scatter Diagram With Responsive Settings-->
   <div id="ct3-chart" class="ct-chart card">
      <div class="card-content">
         <h4 class="card-title">Line Scatter Diagram With Responsive Settings</h4>
         <p class="caption">
            <a href="https://gionkunz.github.io/chartist-js/getting-started.html" target="_blank">Chartist-js</a> This
            advanced example uses a line chart to draw a scatter diagram. The data object is created with a functional
            style random mechanism. There is a mobile first responsive configuration using the responsive options to
            show less labels on small screens.
         </p>
      </div>
   </div>

   <!--Line Chart With Area-->
   <div id="ct4-chart" class="ct-chart card">
      <div class="card-content">
         <h4 class="card-title">Line Chart With Area</h4>
         <p class="caption">
            <a href="https://gionkunz.github.io/chartist-js/getting-started.html" target="_blank">Chartist-js</a> This
            chart uses the showArea option to draw line, dots but also an area shape. Use the low option to specify a
            fixed lower bound that will make the area expand. You can also use the areaBase property to specify a data
            value that will be used to determine the area shape base position (this is 0 by default).
         </p>
      </div>
   </div>

   <!--Bi-polar Line Chart With Area Only-->
   <div id="ct5-chart" class="ct-chart card">
      <div class="card-content">
         <h4 class="card-title">Bi-polar Line Chart With Area Only</h4>
         <p class="caption">
            <a href="https://gionkunz.github.io/chartist-js/getting-started.html" target="_blank">Chartist-js</a> You
            can also only draw the area shapes of the line chart. Area shapes will always be constructed around their
            areaBase (that can be configured in the options) which also allows you to draw nice bi-polar areas.
         </p>
      </div>
   </div>

   <!--Using Events To Replace Graphics-->
   <div id="ct6-chart" class="ct-chart card">
      <div class="card-content">
         <h4 class="card-title">Using Events To Replace Graphics</h4>
         <p class="caption">
            <a href="https://gionkunz.github.io/chartist-js/getting-started.html" target="_blank">Chartist-js</a>
            Chartist has fixed graphical representations that are chosen because of their flexibility and to provide a
            high level of separation of the concerns. However, sometimes you probably would like to use different shapes
            or even images for your charts. One way to achieve this is by using the draw events and replace or add
            custom SVG shapes.
         </p>
      </div>
   </div>

   <!--Bi-Polar Bar Chart-->
   <div id="ct7-chart" class="ct-chart card">
      <div class="card-content">
         <h4 class="card-title">Bi-Polar Bar Chart</h4>
         <p class="caption">
            <a href="https://gionkunz.github.io/chartist-js/getting-started.html" target="_blank">Chartist-js</a> A
            bi-polar bar chart with a range limit set with low and high. There is also an interpolation function used to
            skip every odd grid line / label.
         </p>
      </div>
   </div>

   <!--Overlapping Bars On Mobile-->
   <div id="ct8-chart" class="ct-chart card">
      <div class="card-content">
         <h4 class="card-title">Overlapping Bars On Mobile</h4>
         <p class="caption">
            <a href="https://gionkunz.github.io/chartist-js/getting-started.html" target="_blank">Chartist-js</a> This
            example makes use of label interpolation and the seriesBarDistance property that allows you to make bars
            overlap over each other. This then can be used to use the available space on mobile better. Resize your
            browser to see the effect of the responsive configuration.
         </p>
      </div>
   </div>

   <!--Simple Pie Chart-->
   <div id="ct9-chart" class="ct-chart card">
      <div class="card-content">
         <h4 class="card-title">Simple Pie Chart</h4>
         <p class="caption">
            <a href="https://gionkunz.github.io/chartist-js/getting-started.html" target="_blank">Chartist-js</a> A very
            simple pie chart with label interpolation to show percentage instead of the actual data series value.
         </p>
      </div>
   </div>

   <!--Animating A Donut With Svg.animate-->
   <div id="ct10-chart" class="ct-chart card">
      <div class="card-content">
         <h4 class="card-title">Animating A Donut With Svg.animate</h4>
         <p class="caption">
            <a href="https://gionkunz.github.io/chartist-js/getting-started.html" target="_blank">Chartist-js</a>
            Although it'd be also possible to achieve this animation with CSS, with some minor suboptimal things, here's
            an example of how to animate donut charts using Chartist.Svg.animate and SMIL.
         </p>
      </div>
   </div>

</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('vendor-script'); ?>
<script src="<?php echo e(asset('vendors/chartist-js/chartist.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('page-script'); ?>
<script src="<?php echo e(asset('js/scripts/charts-chartist.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/materialize-update/resources/views/pages/charts-chartist.blade.php ENDPATH**/ ?>