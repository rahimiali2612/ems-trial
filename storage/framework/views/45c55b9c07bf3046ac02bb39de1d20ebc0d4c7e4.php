<?php $__env->startSection('title','Sass'); ?>


<?php $__env->startSection('content'); ?>
<div class="section">
  <div class="card">
    <div class="card-content">
      <p class="caption">Media can be styled in different ways using Materialize.</p>
    </div>
  </div>
  <!--SASS Variables-->
  <div class="row">
    <div class="col s12 m12 l12">
      <div id="sass-variables" class="card card-default">
        <div class="card-content">
          <h4 class="card-title">Variables</h4>
          <div class="row">
            <div class="col s12">
              <p>When using Sass, you can change the color scheme of your site extremely quickly. Below is a very small
                sample of what you can change through sass in <code class=" language-scss">_variables.scss</code>.</p>
            </div>
            <div class="col s12">
              <pre><code class="language-css">
  $primary-color: color("materialize-red", "lighten-2") !default;
  $primary-color-light: false !default;
  $primary-color-dark: false !default;
  @if not $primary-color-light {
  $primary-color-light: lighten($primary-color, 15%);
  }
  @if not $primary-color-dark {
  $primary-color-dark: darken($primary-color, 15%);
  }
  $secondary-color: color("teal", "lighten-1") !default;
  $success-color: color("green", "base") !default;
  $error-color: color("red", "base") !default;

  $link-color: color("light-blue", "darken-1") !default;

  /*** More variables not shown here.. ***/
          </code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Media Queries-->
  <div class="row">
    <div class="col s12 m12 l12">
      <div id="media-queries" class="card card-default">
        <div class="card-content">
          <div class="section">
            <h4 class="card-title">Media Queries</h4>
            <p class="caption">We have 3 media queries for the 3 standard screen sizes you can use in your custom Sass
              files. This also includes media query variables that will define the range.</p>
            <div class="row">
              <div class="col s12">
                <h4 class="card-title">CSS</h4>
                <p>
                  Small screens are defined as having a max-width of 600px
                  <br> Medium screens are defined as having a max-width of 992px
                  <br> Large screen are defined as having a min-width of 992px
                </p>
              </div>
              <div class="col s12">
                <pre><code class="language-css">
  /* These classes can be added to HTML Elements
  * to affect visibility on certain displays.
  */
  .hide-on-small-only
  .hide-on-small-and-down
  .hide-on-med-and-down
  .hide-on-med-and-up
  .hide-on-med-only
  .hide-on-large-only
  .show-on-large
  .show-on-medium
  .show-on-small
  .show-on-medium-and-up
  .show-on-medium-and-down
                  </code></pre>
              </div>
            </div>
            <div class="row">
              <div class="col s12">
                <h4 class="card-title">Sass</h4>
              </div>
              <div class="col s12">
                <pre><code class="language-css">
  @media  #{$small-and-down} {
  // styles for small screens and down
  }
  @media  #{$medium-and-up} {
  // styles for medium screens and larger
  }
  @media  #{$medium-and-down} {
  // styles for medium screens and down
  }
  @media  #{$large-and-up} {
  // styles for large screens and up
  }
  @media  #{$extra-large-and-up} {
  // styles for extra large screens and up
  }
                  </code></pre>
              </div>
            </div>
          </div>
          <!-- Floating Action Button -->
          <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
            <a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow">
              <i class="material-icons">add</i>
            </a>
            <ul>
              <li>
                <a href="<?php echo e(asset('css-helpers')); ?>" class="btn-floating blue">
                  <i class="material-icons">help_outline</i>
                </a>
              </li>
              <li>
                <a href="<?php echo e(asset('cards-extended')); ?>" class="btn-floating green">
                  <i class="material-icons">widgets</i>
                </a>
              </li>
              <li>
                <a href="<?php echo e(asset('app-calendar')); ?>" class="btn-floating amber">
                  <i class="material-icons">today</i>
                </a>
              </li>
              <li>
                <a href="<?php echo e(asset('app-email')); ?>" class="btn-floating red">
                  <i class="material-icons">mail_outline</i>
                </a>
              </li>
            </ul>
          </div>
          <!-- Floating Action Button -->
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/materialize-admin/materialize-html-laravel-template/resources/views/pages/css-sass.blade.php ENDPATH**/ ?>