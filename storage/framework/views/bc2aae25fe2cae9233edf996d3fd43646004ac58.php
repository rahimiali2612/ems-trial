<?php $__env->startSection('title', 'Carousel'); ?>


<?php $__env->startSection('content'); ?>
<div class="section">

  <div class="card">
    <div class="card-content">
      <p class="caption">Our Carousel is a robust and versatile component that can be an image slider, to an item
        carousel, to an onboarding experience. It is touch enabled making it especially smooth to use on mobile.</p>
      <p>Note: This is also touch compatible! Try swiping with your finger to scroll through the carousel.</p>
    </div>
  </div>

  <!--Prefilling Text Inputs-->
  <div class="row">
    <div class="col s12">
      <div id="carousel" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l6">
                <h4 class="card-title">Carousel</h4>
              </div>
              <div class="col s12 m6 l6">
                <ul class="tabs">
                  <li class="tab col s4 p-0"><a class="active p-0" href="#view-carousel">View</a></li>
                  <li class="tab col s4 p-0"><a class="p-0" href="#html-carousel">Html</a></li>
                  <li class="tab col s4 p-0"><a class="p-0" href="#js-carousel">JS</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-carousel">
            <div class="row">
              <div class="col s12">
                <div class="carousel">
                  <a class="carousel-item" href="#one!">
                    <img src="<?php echo e(asset('images/gallery/1.png')); ?>" alt="">
                  </a>
                  <a class="carousel-item" href="#two!">
                    <img src="<?php echo e(asset('images/gallery/2.png')); ?>" alt="">
                  </a>
                  <a class="carousel-item" href="#three!">
                    <img src="<?php echo e(asset('images/gallery/3.png')); ?>" alt="">
                  </a>
                  <a class="carousel-item" href="#four!">
                    <img src="<?php echo e(asset('images/gallery/4.png')); ?>" alt="">
                  </a>
                  <a class="carousel-item" href="#five!">
                    <img src="<?php echo e(asset('images/gallery/5.png')); ?>" alt="">
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div id="html-carousel">
            <pre><code class="language-markup">
&lt;div class="carousel">
  &lt;a class="carousel-item" href="#one!">&lt;img src="https://lorempixel.com/250/250/nature/1">&lt;/a>
  &lt;a class="carousel-item" href="#two!">&lt;img src="https://lorempixel.com/250/250/nature/2">&lt;/a>
  &lt;a class="carousel-item" href="#three!">&lt;img src="https://lorempixel.com/250/250/nature/3">&lt;/a>
  &lt;a class="carousel-item" href="#four!">&lt;img src="https://lorempixel.com/250/250/nature/4">&lt;/a>
  &lt;a class="carousel-item" href="#five!">&lt;img src="https://lorempixel.com/250/250/nature/5">&lt;/a>
&lt;/div>
          </code></pre>
          </div>
          <div id="js-carousel">
            <pre><code class="language-javascript">
  $(document).ready(function(){
    $('.carousel').carousel();
  });
    </code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--  Options Section  -->
  <div class="row">
    <div class="col s12 m12 l12">
      <div id="jquery-plugin" class="card card card-default">
        <div class="card-content">
          <h4 class="card-title">jQuery Plugin Options</h4>
          <div class="row">
            <div class="col s12">
              <table class="highlight">
                <thead>
                  <tr>
                    <th>Option Name</th>
                    <th>Description</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>duration</td>
                    <td>Transition duration in milliseconds. (Default: 200)</td>
                  </tr>
                  <tr>
                    <td>dist</td>
                    <td>Perspective zoom. If 0, all items are the same size. (Default: -100)</td>
                  </tr>
                  <tr>
                    <td>shift</td>
                    <td>Set the spacing of the center item. (Default: 0)</td>
                  </tr>
                  <tr>
                    <td>padding</td>
                    <td>Set the padding between non center items. (Default: 0)</td>
                  </tr>
                  <tr>
                    <td>fullWidth</td>
                    <td>Make the carousel a full width slider like the second example. (Default: false)</td>
                  </tr>
                  <tr>
                    <td>indicators</td>
                    <td>Set to true to show indicators. (Default: false)</td>
                  </tr>
                  <tr>
                    <td>noWrap</td>
                    <td>Don't wrap around and cycle through items. (Default: false)</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col s12 m12 l12">
      <div id="methods" class="card card card-default">
        <div class="card-content">
          <h4 class="card-title">jQuery Plugin Methods</h4>
          <div class="row">
            <div class="col s12">
              <p>We have methods to pause, start, move to next and move to previous slide.</p>
              <pre><code class="language-javascript col s12">
// Next slide
$('.carousel').carousel('next');
$('.carousel').carousel('next', 3); // Move next n times.
// Previous slide
$('.carousel').carousel('prev');
$('.carousel').carousel('prev', 4); // Move prev n times.
// Set to nth slide
$('.carousel').carousel('set', 4);
// Destroy carousel
$('.carousel').carousel('destroy');
          </code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Full Width Slider -->
  <div class="row">
    <div class="col s12">
      <div id="carousel-full-width" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l6">
                <h4 class="card-title">Full Width Slider</h4>
              </div>
              <div class="col s12 m6 l6">
                <ul class="tabs">
                  <li class="tab col s4 p-0"><a class="active p-0" href="#view-carousel-full-width">View</a></li>
                  <li class="tab col s4 p-0"><a class="p-0" href="#html-carousel-full-width">Html</a></li>
                  <li class="tab col s4 p-0"><a class="p-0" href="#js-carousel-full-width">JS</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-carousel-full-width">
            <div class="row">
              <div class="col s12 mb-2">
                <p>Our carousel has a full width option that makes it into a simple and elegant image carousel. You can
                  also have indicators that show up on the bottom of the slider.</p>
                <p>Note: This is also touch compatible! Try swiping with your finger to scroll through the carousel.</p>
              </div>
              <div class="col s12">
                <div class="carousel carousel-slider">
                  <a class="carousel-item" href="#one!">
                    <img src="<?php echo e(asset('images/gallery/28.png')); ?>" alt="">
                  </a>
                  <a class="carousel-item" href="#two!">
                    <img src="<?php echo e(asset('images/gallery/29.png')); ?>" alt="">
                  </a>
                  <a class="carousel-item" href="#three!">
                    <img src="<?php echo e(asset('images/gallery/30.png')); ?>" alt="">
                  </a>
                  <a class="carousel-item" href="#four!">
                    <img src="<?php echo e(asset('images/gallery/31.png')); ?>" alt="">
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div id="html-carousel-full-width">
            <pre><code class="language-markup">
&lt;div class="carousel carousel-slider">
  &lt;a class="carousel-item" href="#one!">&lt;img src="https://lorempixel.com/800/400/food/1">&lt;/a>
  &lt;a class="carousel-item" href="#two!">&lt;img src="https://lorempixel.com/800/400/food/2">&lt;/a>
  &lt;a class="carousel-item" href="#three!">&lt;img src="https://lorempixel.com/800/400/food/3">&lt;/a>
  &lt;a class="carousel-item" href="#four!">&lt;img src="https://lorempixel.com/800/400/food/4">&lt;/a>
&lt;/div>
  </code></pre>
          </div>
          <div id="js-carousel-full-width">
            <pre><code class="language-javascript">
      $('.carousel.carousel-slider').carousel({fullWidth: true});
    </code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Special Options -->
  <div class="row">
    <div class="col s12">
      <div id="carousel-special-options" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l6">
                <h4 class="card-title">Special Options</h4>
              </div>
              <div class="col s12 m6 l6">
                <ul class="tabs">
                  <li class="tab col s4 p-0"><a class="active p-0"
                      href="#view-carousel-carousel-special-options">View</a></li>
                  <li class="tab col s4 p-0"><a class="p-0" href="#html-carousel-special-options">Html</a></li>
                  <li class="tab col s4 p-0"><a class="p-0" href="#js-carousel-special-options">JS</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-carousel-carousel-special-options">
            <div class="row">
              <div class="col s12 mb-2">
                <p>The carousel doesn't only support images but also allows you to make content carousels. You can add
                  fixed items to your carousel by adding a div with the class <a>carousel-fixed-item</a> and adding
                  your fixed content in there.</p>
                <p>Note: This is also touch compatible! Try swiping with your finger to scroll through the carousel.</p>
              </div>
              <div class="col s12">
                <div class="carousel carousel-slider center carousel-indicators" data-indicators="true">
                  <div class="carousel-fixed-item center">
                    <a class="btn waves-effect white grey-text darken-text-2">button</a>
                  </div>
                  <a class="carousel-item red white-text" href="#one!">
                    <h2>First Panel</h2>
                    <p class="white-text">This is your first panel</p>
                  </a>
                  <a class="carousel-item amber white-text" href="#two!">
                    <h2>Second Panel</h2>
                    <p class="white-text">This is your second panel</p>
                  </a>
                  <a class="carousel-item green white-text" href="#three!">
                    <h2>Third Panel</h2>
                    <p class="white-text">This is your third panel</p>
                  </a>
                  <a class="carousel-item blue white-text" href="#four!">
                    <h2>Fourth Panel</h2>
                    <p class="white-text">This is your fourth panel</p>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div id="html-carousel-special-options">
            <pre><code class="language-markup">
&lt;div class="carousel carousel-slider center" data-indicators="true">
  &lt;div class="carousel-fixed-item center">
    &lt;a class="btn waves-effect white grey-text darken-text-2">button&lt;/a>
  &lt;/div>
  &lt;div class="carousel-item red white-text" href="#one!">
    &lt;h2>First Panel&lt;/h2>
    &lt;p class="white-text">This is your first panel&lt;/p>
  &lt;/div>
  &lt;div class="carousel-item amber white-text" href="#two!">
    &lt;h2>Second Panel&lt;/h2>
    &lt;p class="white-text">This is your second panel&lt;/p>
  &lt;/div>
  &lt;div class="carousel-item green white-text" href="#three!">
    &lt;h2>Third Panel&lt;/h2>
    &lt;p class="white-text">This is your third panel&lt;/p>
  &lt;/div>
  &lt;div class="carousel-item blue white-text" href="#four!">
    &lt;h2>Fourth Panel&lt;/h2>
    &lt;p class="white-text">This is your fourth panel&lt;/p>
  &lt;/div>
&lt;/div>
  </code></pre>
          </div>
          <div id="js-carousel-special-options">
            <pre><code class="language-javascript">
              $('.carousel.carousel-slider').carousel({
                fullWidth: true,
                indicators: true
              });
  </code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('page-script'); ?>
<script src="<?php echo e(asset('js/scripts/advance-ui-carousel.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/materialize-admin/materialize-html-laravel-template/resources/views/pages/advance-ui-carousel.blade.php ENDPATH**/ ?>