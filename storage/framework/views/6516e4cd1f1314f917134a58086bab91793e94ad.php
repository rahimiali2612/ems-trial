<?php $__env->startSection('title','Waves'); ?>


<?php $__env->startSection('content'); ?>
<div class="section">
  <div class="card">
    <div class="card-content">
      <p class="caption mb-0">Waves is an external library that we've included in Materialize to allow us to create the
        ink effect outlined in Material Design</p>
    </div>
  </div>
  <!-- Applying Waves -->
  <div class="row">
    <div class="col s12">
      <div id="applying-waves" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Applying Waves</h4>
              </div>
              <div class="col s12 m6 l2">
                <ul class="tabs">
                  <li class="tab col s6 p-0"><a class="active p-0" href="#view-applying-waves">View</a></li>
                  <li class="tab col s6 p-0"><a class="p-0" href="#html-applying-waves">Html</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-applying-waves">
            <div class="row">
              <div class="col s12">
                <p>To put the waves effect on buttons, you just have to put the class <code
                    class="language-markup">waves-effect</code>
                  on to the buttons. If you want the waves effect to be white instead, add both <code
                    class="language-markup">waves-effect
                    waves-light</code> as classes.</p>
              </div>
              <div class="col s12">
                <a class="waves-effect waves-light btn-large" href="#">Wave</a>
                <div class="card-panel waves-effect waves-dark teal">
                  <span class="white-text">I am a very simple card. I am good at containing small bits of information.I
                    am convenient because I require little markup to use effectively. I am similar to what is called a
                    panel in other frameworks.</span>
                </div>
              </div>
            </div>
          </div>
          <div id="html-applying-waves">
            <pre><code class="language-markup">
  &lt;a class="waves-effect waves-light btn-large" href="#">Wave&lt;/a>
  </code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--  Customization  -->
  <div class="row">
    <div class="col s12">
      <div id="video-two" class="card card card-default">
        <div class="card-content">
          <h4 class="card-title">Customization</h4>
          <p>There are several ways to customize waves, you can either use pre-created classes, or you can define your
            own color by creating a new class</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Available Colors -->
  <div class="row">
    <div class="col s12">
      <div id="available-colors" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Available Colors</h4>
              </div>
              <div class="col s12 m6 l2">
                <ul class="tabs">
                  <li class="tab col s6 p-0"><a class="active p-0" href="#view-available-colors">View</a></li>
                  <li class="tab col s6 p-0"><a class="p-0" href="#html-available-colors">Html</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-available-colors">
            <div class="row">
              <div class="col s12">
                <p>To use these, just add the corresponding class to your button. Play around with changing the
                  background color of butons and the waves effect to create something cool!</p>
              </div>
              <div class="collection waves-color-demo">
                <div class="collection-item">Default<a href="#!"
                    class="waves-effect btn secondary-content white black-text">Send</a>
                </div>
                <div class="collection-item"><code class="language-markup">waves-light</code><a href="#!"
                    class="waves-effect waves-light btn secondary-content">Send</a>
                </div>
                <div class="collection-item"><code class="language-markup">waves-red</code><a href="#!"
                    class="waves-effect waves-red btn white black-text secondary-content">Send</a>
                </div>
                <div class="collection-item"><code class="language-markup">waves-yellow</code><a href="#!"
                    class="waves-effect waves-yellow btn white black-text secondary-content">Send</a>
                </div>
                <div class="collection-item"><code class="language-markup">waves-orange</code><a href="#!"
                    class="waves-effect waves-orange btn white black-text secondary-content">Send</a>
                </div>
                <div class="collection-item"><code class="language-markup">waves-purple</code><a href="#!"
                    class="waves-effect waves-purple btn white black-text secondary-content">Send</a>
                </div>
                <div class="collection-item"><code class="language-markup">waves-green</code><a href="#!"
                    class="waves-effect waves-green btn white black-text secondary-content">Send</a>
                </div>
                <div class="collection-item"><code class="language-markup">waves-teal</code><a href="#!"
                    class="waves-effect waves-teal btn white black-text secondary-content">Send</a>
                </div>
              </div>
            </div>
          </div>
          <div id="html-available-colors">
            <pre><code class="language-markup">
  &lt;a href="#!" class="btn waves-effect waves-teal">Send&lt;/a>
  </code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Custom Colors -->
  <div class="row">
    <div class="col s12">
      <div id="custom-colors" class="card card card-default">
        <div class="card-content">
          <div class="row">
            <div class="col s12">
              <h4 class="card-title">Custom Colors</h4>
              <p>If the color you want is not already available, you can easily make your own waves color by creating a
                custom CSS class. Take a look at the example below where we add a waves-brown effect</p>
            </div>
            <div class="col s12">
              <pre><code class="language-css">
        /*
        When creating your CSS selector,
        change "brown" to something of your choosing
        */
        .waves-effect.waves-brown .waves-ripple {
          /* The alpha value allows the text and background color
          of the button to still show through. */
          background-color: rgba(121, 85, 72, 0.65);
        }
        </code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--  Circle  -->
  <div class="row">
    <div class="col s12">
      <div id="circle" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Circle</h4>
              </div>
              <div class="col s12 m6 l2">
                <ul class="tabs">
                  <li class="tab col s6 p-0"><a class="active p-0" href="#view-circle">View</a></li>
                  <li class="tab col s6 p-0"><a class="p-0" href="#html-circle">Html</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-circle">
            <div class="row">
              <div class="col s12">
                <p>If you want waves to form to a non rectangular shape, there is an option for circular waves. Just
                  add the <code class="language-markup">waves-circle</code> in addition to <code
                    class="language-markup">waves-effect</code>
                </p>
              </div>
              <div class="collection waves-color-demo">
                <div class="collection-item">Default
                  <a href="#!" class="waves-effect waves-circle btn-floating secondary-content">
                    <i class="material-icons">add</i>
                  </a>
                </div>
                <div class="collection-item"><code class="language-markup">waves-light</code>
                  <a href="#!" class="waves-effect waves-circle waves-light btn-floating secondary-content">
                    <i class="material-icons">add</i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div id="html-circle">
            <pre><code class="language-markup">
  &lt;a href="#!" class="waves-effect waves-circle waves-light btn-floating secondary-content">
  &lt;i class="mdi-content-add">&lt;/i>
  &lt;/a>
  </code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/materialize-update/resources/views/pages/advance-ui-waves.blade.php ENDPATH**/ ?>