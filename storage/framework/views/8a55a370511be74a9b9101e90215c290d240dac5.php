<?php $__env->startSection('title','Preloader'); ?>


<?php $__env->startSection('content'); ?>
<div class="seaction">
  <div class="card">
    <div class="card-content">
      <p class="caption mb-0">If you have content that will take a long time to load, you should give the user
        feedback. For this reason we provide a number activity + progress indicators.</p>
    </div>
  </div>

  <!--Linear-->
  <div class="row">
    <div class="col s12">
      <div id="linear" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Linear</h4>
              </div>
              <div class="col s12 m6 l2">
                <ul class="tabs">
                  <li class="tab col s6 p-0"><a class="active p-0" href="#view-linear">View</a></li>
                  <li class="tab col s6 p-0"><a class="p-0" href="#html-linear">Html</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-linear">
            <div class="row">
              <div class="col s12">
                <div class="progress">
                  <div class="determinate" style="width: 70%"></div>
                </div>
              </div>
            </div>
          </div>
          <div id="html-linear">
            <pre><code class="language-markup">
    &lt;div class="progress">
      &lt;div class="determinate" style="width: 70%">&lt;/div>
    &lt;/div>
  </code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Indeterminate Linear -->
  <div class="row">
    <div class="col s12">
      <div id="indeterminate-linear" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Indeterminate Linear</h4>
              </div>
              <div class="col s12 m6 l2">
                <ul class="tabs">
                  <li class="tab col s6 p-0"><a class="active p-0" href="#view-indeterminate-linear">View</a></li>
                  <li class="tab col s6 p-0"><a class="p-0" href="#html-indeterminate-linear">Html</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-indeterminate-linear">
            <div class="row">
              <div class="col s12">
                <div class="progress">
                  <div class="indeterminate"></div>
                </div>
              </div>
            </div>
          </div>
          <div id="html-indeterminate-linear">
            <pre><code class="language-markup">
    &lt;div class="progress">
      &lt;div class="indeterminate">&lt;/div>
    &lt;/div>
  </code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Circular-->
  <h4 class="header">Circular</h4>
  <p>There are 4 colors and 3 sizes of circular spinners. The spinner should be nested in a <code
      class="language-markup">preloader-wrapper</code>
    div. The default size is medium, but you can add the classes <code class="language-markup">big</code> or <code
      class="language-markup">small</code> to adjust the size accordingly. You can add the classes <code
      class="language-markup">spinner-red-only</code>,
    <code class="language-markup">spinner-blue-only</code>, <code class="language-markup">spinner-yellow-only</code>
    and <code class="language-markup">spinner-green-only</code>. You can also leave this class as just <code
      class="language-markup">spinner-layer</code>
    and it will be set to the <code class="language-css">$spinner-default-color</code> variable in our variables.scss
    file.</p>

  <div class="row">
    <div class="col s12">
      <div id="simple-circular" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Simple Circular</h4>
              </div>
              <div class="col s12 m6 l2">
                <ul class="tabs">
                  <li class="tab col s6 p-0"><a class="active p-0" href="#view-simple-circular">View</a></li>
                  <li class="tab col s6 p-0"><a class="p-0" href="#html-simple-circular">Html</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-simple-circular">
            <div class="row">
              <div class="col s12 m4 center">
                <div class="preloader-wrapper big active">
                  <div class="spinner-layer spinner-blue-only">
                    <div class="circle-clipper left">
                      <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                      <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                      <div class="circle"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col s12 m4 center">
                <div class="preloader-wrapper active">
                  <div class="spinner-layer spinner-red-only">
                    <div class="circle-clipper left">
                      <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                      <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                      <div class="circle"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col s12 m4 center">
                <div class="preloader-wrapper small active">
                  <div class="spinner-layer spinner-green-only">
                    <div class="circle-clipper left">
                      <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                      <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                      <div class="circle"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="html-simple-circular">
            <pre><code class="language-markup">
  &lt;div class="preloader-wrapper big active">
    &lt;div class="spinner-layer spinner-blue-only">
      &lt;div class="circle-clipper left">
        &lt;div class="circle">&lt;/div>
      &lt;/div>&lt;div class="gap-patch">
        &lt;div class="circle">&lt;/div>
      &lt;/div>&lt;div class="circle-clipper right">
        &lt;div class="circle">&lt;/div>
      &lt;/div>
    &lt;/div>
  &lt;/div>

  &lt;div class=&quot;preloader-wrapper active&quot;&gt;
    &lt;div class=&quot;spinner-layer spinner-red-only&quot;&gt;
      &lt;div class=&quot;circle-clipper left&quot;&gt;
        &lt;div class=&quot;circle&quot;&gt;&lt;/div&gt;
      &lt;/div&gt;&lt;div class=&quot;gap-patch&quot;&gt;
        &lt;div class=&quot;circle&quot;&gt;&lt;/div&gt;
      &lt;/div&gt;&lt;div class=&quot;circle-clipper right&quot;&gt;
        &lt;div class=&quot;circle&quot;&gt;&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class=&quot;preloader-wrapper small active&quot;&gt;
    &lt;div class=&quot;spinner-layer spinner-green-only&quot;&gt;
      &lt;div class=&quot;circle-clipper left&quot;&gt;
        &lt;div class=&quot;circle&quot;&gt;&lt;/div&gt;
      &lt;/div&gt;&lt;div class=&quot;gap-patch&quot;&gt;
        &lt;div class=&quot;circle&quot;&gt;&lt;/div&gt;
      &lt;/div&gt;&lt;div class=&quot;circle-clipper right&quot;&gt;
        &lt;div class=&quot;circle&quot;&gt;&lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
</code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Circular Flashing Colors -->
  <div class="row">
    <div class="col s12">
      <div id="circular-flashing" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Circular Flashing Colors</h4>
              </div>
              <div class="col s12 m6 l2">
                <ul class="tabs">
                  <li class="tab col s6 p-0"><a class="active p-0" href="#view-circular-flashing">View</a></li>
                  <li class="tab col s6 p-0"><a class="p-0" href="#html-circular-flashing">Html</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-circular-flashing">
            <div class="row">
              <div class="col s12">
                <div class="row">
                  <div class="col s12 m4 center">
                    <div class="preloader-wrapper big active">
                      <div class="spinner-layer spinner-blue">
                        <div class="circle-clipper left">
                          <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                          <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                          <div class="circle"></div>
                        </div>
                      </div>
                      <div class="spinner-layer spinner-red">
                        <div class="circle-clipper left">
                          <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                          <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                          <div class="circle"></div>
                        </div>
                      </div>
                      <div class="spinner-layer spinner-yellow">
                        <div class="circle-clipper left">
                          <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                          <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                          <div class="circle"></div>
                        </div>
                      </div>
                      <div class="spinner-layer spinner-green">
                        <div class="circle-clipper left">
                          <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                          <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                          <div class="circle"></div>
                        </div>
                      </div>
                    </div>
                    <p>Big</p>
                  </div>
                  <div class="col s12 m4 center">
                    <div class="preloader-wrapper active">
                      <div class="spinner-layer spinner-blue">
                        <div class="circle-clipper left">
                          <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                          <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                          <div class="circle"></div>
                        </div>
                      </div>
                      <div class="spinner-layer spinner-red">
                        <div class="circle-clipper left">
                          <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                          <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                          <div class="circle"></div>
                        </div>
                      </div>
                      <div class="spinner-layer spinner-yellow">
                        <div class="circle-clipper left">
                          <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                          <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                          <div class="circle"></div>
                        </div>
                      </div>
                      <div class="spinner-layer spinner-green">
                        <div class="circle-clipper left">
                          <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                          <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                          <div class="circle"></div>
                        </div>
                      </div>
                    </div>
                    <p>Normal</p>
                  </div>
                  <div class="col s12 m4 center">
                    <div class="preloader-wrapper small active">
                      <div class="spinner-layer spinner-blue">
                        <div class="circle-clipper left">
                          <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                          <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                          <div class="circle"></div>
                        </div>
                      </div>
                      <div class="spinner-layer spinner-red">
                        <div class="circle-clipper left">
                          <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                          <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                          <div class="circle"></div>
                        </div>
                      </div>
                      <div class="spinner-layer spinner-yellow">
                        <div class="circle-clipper left">
                          <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                          <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                          <div class="circle"></div>
                        </div>
                      </div>
                      <div class="spinner-layer spinner-green">
                        <div class="circle-clipper left">
                          <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                          <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                          <div class="circle"></div>
                        </div>
                      </div>
                    </div>
                    <p>Small</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="html-circular-flashing">
            <pre><code class="language-markup">
  &lt;div class="preloader-wrapper big active">
    &lt;div class="spinner-layer spinner-blue">
      &lt;div class="circle-clipper left">
        &lt;div class="circle">&lt;/div>
      &lt;/div>&lt;div class="gap-patch">
        &lt;div class="circle">&lt;/div>
      &lt;/div>&lt;div class="circle-clipper right">
        &lt;div class="circle">&lt;/div>
      &lt;/div>
    &lt;/div>

    &lt;div class="spinner-layer spinner-red">
      &lt;div class="circle-clipper left">
        &lt;div class="circle">&lt;/div>
      &lt;/div>&lt;div class="gap-patch">
        &lt;div class="circle">&lt;/div>
      &lt;/div>&lt;div class="circle-clipper right">
        &lt;div class="circle">&lt;/div>
      &lt;/div>
    &lt;/div>

    &lt;div class="spinner-layer spinner-yellow">
      &lt;div class="circle-clipper left">
        &lt;div class="circle">&lt;/div>
      &lt;/div>&lt;div class="gap-patch">
        &lt;div class="circle">&lt;/div>
      &lt;/div>&lt;div class="circle-clipper right">
        &lt;div class="circle">&lt;/div>
      &lt;/div>
    &lt;/div>

    &lt;div class="spinner-layer spinner-green">
      &lt;div class="circle-clipper left">
        &lt;div class="circle">&lt;/div>
      &lt;/div>&lt;div class="gap-patch">
        &lt;div class="circle">&lt;/div>
      &lt;/div>&lt;div class="circle-clipper right">
        &lt;div class="circle">&lt;/div>
      &lt;/div>
    &lt;/div>
  &lt;/div>
</code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/materialize-update/resources/views/pages/ui-preloader.blade.php ENDPATH**/ ?>