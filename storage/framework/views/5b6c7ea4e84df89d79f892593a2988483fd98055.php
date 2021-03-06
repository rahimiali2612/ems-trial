<?php $__env->startSection('title','Typography'); ?>


<?php $__env->startSection('content'); ?>
<div class="section">
  <!-- Want to Change Font ? -->
  <div class="row">
    <div class="col s12 m12 l12">
      <div id="change-font" class="card card card-default">
        <div class="card-content">
          <h4 class="card-title">Want to Change Font ?</h4>
          <p>In case you don't want to use Roboto on your webpage, fear not. Simply change the font stack by
            modifying the code below to your liking and add it to your custom css.</p>
          <p>Inside sass/themes/default/_typography.scss you can change the font as per your requirements. As
            we did for our themes ;)</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Headers -->
  <div class="row">
    <div class="col s12">
      <div id="headers" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Headers</h4>
              </div>
              <div class="col s12 m6 l2">
                <ul class="tabs">
                  <li class="tab col s6 p-0"><a class="active p-0" href="#view-headers">View</a></li>
                  <li class="tab col s6 p-0"><a class="p-0" href="#html-headers">Html</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-headers">
            <div class="row">
              <div class="col s12">
                <p>We provide some basic styling on header tags. In the example, you can see the the 6
                  header tags' different sizes.</p>
                <h1>Heading h1</h1>
                <h2>Heading h2</h2>
                <h3>Heading h3</h3>
                <h4>Heading h4</h4>
                <h5>Heading h5</h5>
                <h6>Heading h6</h6>
              </div>
            </div>
          </div>
          <div id="html-headers">
            <pre><code class="language-markup">
    &lt;h1> Heading h1 &lt;/h1>
    &lt;h2> Heading h2 &lt;/h2>
    &lt;h3> Heading h3 &lt;/h3>
    &lt;h4> Heading h4 &lt;/h4>
    &lt;h5> Heading h5 &lt;/h5>
    &lt;h6> Heading h6 &lt;/h6>
    </code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Flow Text -->
  <div class="row">
    <div class="col s12 m12 l12">
      <div id="flow-text" class="card card card-default">
        <div class="card-content">
          <h4 class="card-title">Flow Text</h4>
          <div class="row">
            <div class="col s12">
              <p>To use flow-text on a body of text, simply just add the class <code
                  class="language-markup">flow-text</code>
                to a tag</p>
              <a id="flow-toggle" class="btn waves-effect waves-light mt-2">Toggle
                flow-text</a>
            </div>
            <div class="col s12 mt-2">
              <div id="flow-text-demo">
                <p class="flow-text">To see Flow Text in action, slowly resize your browser and watch
                  the size of this text body change! Use the button above to toggle off/on flow-text
                  to see the difference!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Blockquotes -->
  <div class="row">
    <div class="col s12">
      <div id="blockquotes" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Blockquotes</h4>
              </div>
              <div class="col s12 m6 l2">
                <ul class="tabs">
                  <li class="tab col s6 p-0"><a class="active p-0" href="#view-blockquotes">View</a>
                  </li>
                  <li class="tab col s6 p-0"><a class="p-0" href="#html-blockquotes">Html</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-blockquotes">
            <div class="row">
              <div class="col s12">
                <p>Blockquotes are mainly used to give emphasis to a quote or citation. You can also
                  use these for some extra text hierarchy and emphasis.</p>
              </div>
              <div class="col s12">
                <blockquote>The people who are crazy enough to think they can change the world
                  <br />Are the ones who do.
                  <br />- Steve Jobs</blockquote>
              </div>
            </div>
          </div>
          <div id="html-blockquotes">
            <pre><code class="language-markup">
    &lt;blockquote>
    This is an example quotation that uses the blockquote tag.
    &lt;/blockquote>
    </code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Paragraph -->
  <div class="row">
    <div class="col s12 m12 l12">
      <div id="paragraph" class="card card card-default">
        <div class="card-content">
          <h4 class="card-title">Paragraph</h4>
          <p>This is a paragraph. Paragraphs are preset with a font size, line height and spacing to match
            the overall vertical rhythm. To show what a paragraph looks like this needs a little more
            content so, did you know that there are storms occurring on Jupiter that are larger than the
            Earth? Pretty cool. Wrap strong around type to make it bold!. You can also use em
            to<em>italicize</em>
            your words.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('page-script'); ?>
<script src="<?php echo e(asset('js/scripts/css-typography.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/materialize-admin/materialize-html-laravel-template/resources/views/pages/css-typography.blade.php ENDPATH**/ ?>