<?php $__env->startSection('title','Breadcrumbs'); ?>


<?php $__env->startSection('content'); ?>
<div class="section">
  <div class="card">
    <div class="card-content">
      <p class="caption mb-0">Breadcrumbs are a good way to display your current location. This is usually used when
        you have multiple layers of content.</p>
    </div>
  </div>

  <!-- Left Aligned -->
  <div class="row">
    <div class="col s12">
      <div id="left-aligned" class="card card-default">
        <div class="card-content">
          <div class="row">
            <div class="col s12">
              <h4 class="card-title">Left Aligned</h4>
            </div>
            <div class="col s12">
              <nav>
                <div class="nav-wrapper">
                  <div class="col s12">
                    <a href="#!" class="breadcrumb">First</a>
                    <a href="#!" class="breadcrumb">Second</a>
                    <a href="#!" class="breadcrumb">Third</a>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Right Aligned -->
  <div class="row">
    <div class="col s12">
      <div id="right-aligned" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Right Aligned</h4>
              </div>
              <div class="col s12 m6 l2">
                <ul class="tabs">
                  <li class="tab col s6 p-0"><a class="active p-0" href="#view-right-aligned">View</a></li>
                  <li class="tab col s6 p-0"><a class="p-0" href="#html-right-aligned">Html</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-right-aligned">
            <div class="row">
              <div class="col s12">
                <nav>
                  <div class="nav-wrapper">
                    <div class="col s12 right-align">
                      <a href="#!" class="breadcrumb">First</a>
                      <a href="#!" class="breadcrumb">Second</a>
                      <a href="#!" class="breadcrumb">Third</a>
                    </div>
                  </div>
                </nav>
              </div>
            </div>
          </div>
          <div id="html-right-aligned">
            <pre><code class="language-markup">
  &lt;nav>
    &lt;div class="nav-wrapper">
      &lt;div class="col s12">
        &lt;a href="#!" class="breadcrumb">First&lt;/a>
        &lt;a href="#!" class="breadcrumb">Second&lt;/a>
        &lt;a href="#!" class="breadcrumb">Third&lt;/a>
      &lt;/div>
    &lt;/div>
  &lt;/nav>
  </code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/materialize-update/resources/views/pages/ui-breadcrumbs.blade.php ENDPATH**/ ?>