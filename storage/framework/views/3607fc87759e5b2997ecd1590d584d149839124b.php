<?php $__env->startSection('title','Scrollspy'); ?>


<?php $__env->startSection('content'); ?>
<div class="section">
  <div class="row">
    <div class="col m9 l10 s12">
      <div class="card">
        <div class="card-content">
          <p class="caption mb-0">Scrollspy is a jQuery plugin that tracks certain elements and which element the
            user's screen is currently centered on. Our main demo of this is our table of contents on every
            documentation page to the right. Clicking on these links will also scroll the page to that element.</p>
        </div>
      </div>
      <!-- Table of Contents Structure -->
      <div class="row">
        <div class="col s12 m12 l12">
          <div id="structure" class="card card card-default scrollspy">
            <div class="card-content">
              <h4 class="card-title">Table of Contents Structure</h4>
              <pre><code class="language-markup">
      &lt;div class="row"&gt;
        &lt;div class="col s12 m9 l10"&gt;
          &lt;div id="introduction" class="section scrollspy"&gt;
            &lt;p&gt;Content &lt;/p&gt;
          &lt;/div&gt;
          &lt;div id="structure" class="section scrollspy"&gt;
            &lt;p&gt;Content &lt;/p&gt;
          &lt;/div&gt;
          &lt;div id="initialization" class="section scrollspy"&gt;
            &lt;p&gt;Content &lt;/p&gt;
          &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="col hide-on-small-only m3 l2"&gt;
          &lt;ul class="section table-of-contents"&gt;
          &lt;li&gt;&lt;a href="#introduction"&gt;Introduction&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#structure"&gt;Structure&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#initialization"&gt;Intialization&lt;/a&gt;&lt;/li&gt;
          &lt;/ul&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      </code></pre>
            </div>
          </div>
        </div>
      </div>

      <!-- jQuery Plugin Initialization -->
      <div class="row">
        <div class="col s12 m12 l12">
          <div id="initialization" class="card card card-default scrollspy">
            <div class="card-content">
              <h4 class="card-title">jQuery Plugin Initialization</h4>
              <pre><code class="language-javascript">
      $(document).ready(function(){
        $('.scrollspy').scrollSpy();
      });
      </code></pre>
            </div>
          </div>
        </div>
      </div>

      <!-- jQuery Plugin Options -->
      <div class="row">
        <div class="col s12 m12 l12">
          <div id="option" class="card card card-default scrollspy">
            <div class="card-content">
              <h4 class="card-title">jQuery Plugin Options</h4>
              <table class="highlight responsive-table">
                <thead>
                  <tr>
                    <th style="min-width: 150px;">Option Name</th>
                    <th>Description</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>scrollOffset</td>
                    <td>Offset for centering element when scrolled to. Default: 200</td>
                  </tr>
                  <tr>
                    <td>activeClass</td>
                    <td>Class name to be added to the active link. Default: active</td>
                  </tr>
                  <tr>
                    <td>getActiveElement</td>
                    <td>
                      Function that returns a selector to add <code class="inline language-markup">activeClass</code>
                      to. The parameter is the section id. Default:
                      <pre class="language-javascript">
        <code class="language-javascript">
      function(id) {
        return 'a[href="#' + id + '"]';
      }
        </code></pre>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- Methods -->
      <div class="row">
        <div class="col s12 m12 l12">
          <div id="methods" class="card card card-default scrollspy">
            <div class="card-content">
              <h4 class="card-title">Methods</h4>
              <p class="m-0">Because jQuery is no longer a dependency, all the methods are called on the plugin
                instance. You can get the plugin instance like this:</p>
              <pre><code class="language-javascript">
  var instance = M.ScrollSpy.getInstance(elem);
  /* jQuery Method Calls
    You can still use the old jQuery plugin method calls.
    But you won't be able to access instance properties.

    $('.scrollspy').scrollSpy('methodName');
  */
      </code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col hide-on-small-only m3 l2">
      <div class="toc-wrapper">
        <br>
        <br>
        <br>
        <ul class="section table-of-contents">
          <li><a href="#structure">Structure</a></li>
          <li><a href="#initialization">Intialization</a></li>
          <li><a href="#option">Option</a></li>
          <li><a href="#methods">Methods</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('page-script'); ?>
<script src="<?php echo e(asset('js/scripts/advance-ui-scrollspy.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/materialize-update/resources/views/pages/advance-ui-scrollspy.blade.php ENDPATH**/ ?>