<?php $__env->startSection('title','Pagination'); ?>


<?php $__env->startSection('content'); ?>
<div class="section">
  <div class="card">
    <div class="card-content">
      <p class="caption mb-0"><a href="http://ionden.com/a/plugins/ion.rangeSlider/en.html"
          target="_blank">ion.RangeSlider</a>
        is Easy, flexible and responsive range slider with skin support.</p>
    </div>
  </div>
  <!--pagination-->
  <div class="row">
    <div class="col s12">
      <div class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Basic Pagination</h4>
              </div>
              <div class="col s12 m6 l2">
                <ul class="tabs">
                  <li class="tab col s6 p-0"><a class="active p-0" href="#view-pagination">View</a></li>
                  <li class="tab col s6 p-0"><a class="p-0" href="#html-pagination">Html</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-pagination">
            <div class="row">
              <div class="col s12">
                <ul class="pagination">
                  <li class="disabled">
                    <a href="#!">
                      <i class="material-icons">chevron_left</i>
                    </a>
                  </li>
                  <li class="active"><a href="#!">1</a>
                  </li>
                  <li class="waves-effect"><a href="#!">2</a>
                  </li>
                  <li class="waves-effect"><a href="#!">3</a>
                  </li>
                  <li class="waves-effect"><a href="#!">4</a>
                  </li>
                  <li class="waves-effect"><a href="#!">5</a>
                  </li>
                  <li class="waves-effect">
                    <a href="#!">
                      <i class="material-icons">chevron_right</i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div id="html-pagination">
            <pre><code class="language-markup">
    &lt;ul class="pagination">
      &lt;li class="disabled">&lt;a href="#!">&lt;i class="mdi-navigation-chevron-left">&lt;/i>&lt;/a>&lt;/li>
      &lt;li class="active">&lt;a href="#!">1&lt;/a>&lt;/li>
      &lt;li class="waves-effect">&lt;a href="#!">2&lt;/a>&lt;/li>
      &lt;li class="waves-effect">&lt;a href="#!">3&lt;/a>&lt;/li>
      &lt;li class="waves-effect">&lt;a href="#!">4&lt;/a>&lt;/li>
      &lt;li class="waves-effect">&lt;a href="#!">5&lt;/a>&lt;/li>
      &lt;li class="waves-effect">&lt;a href="#!">&lt;i class="mdi-navigation-chevron-right">&lt;/i>&lt;/a>&lt;/li>
    &lt;/ul>
  </code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/materialize-update/resources/views/pages/ui-pagination.blade.php ENDPATH**/ ?>