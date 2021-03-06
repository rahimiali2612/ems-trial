<?php $__env->startSection('title','Buttons'); ?>


<?php $__env->startSection('content'); ?>
<div class="section">
  <div class="card">
    <div class="card-content">

      <p>There are 3 main button types described in material design. The raised button is a
        standard button that signify actions and seek to give depth to a mostly flat page. The floating
        circular
        action button is meant for very important functions. Flat buttons are usually used within elements
        that
        already have depth like cards or modals.</p>
    </div>
  </div>

  <!--Raised Button-->
  <div class="row">
    <div class="col s12">
      <div id="raised-button" class="card card-tabs">
        <div class="card-content">

          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Raised Button</h4>
              </div>
              <div class="col s12 m6 l2">
                <ul class="tabs">
                  <li class="tab col s6 p-0"><a class="active p-0" href="#view-raised-button">View</a></li>
                  <li class="tab col s6 p-0"><a class="p-0" href="#html-raised-button">Html</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-raised-button">
            <div class="row">
              <div class="col s12">
                <div class="row">
                  <div class="col s12">
                    <p>The raised button is a standard button that signify actions and seek to give depth to a mostly
                      flat page. The floating circular action button is meant for very important functions. Flat buttons
                      are usually used within elements that already have depth like cards or modals.</p>
                  </div>
                  <div class="col s12 mt-3 mb-3">
                    <a class="waves-effect waves-light btn mb-1 mr-1">button</a>
                    <a class="waves-effect waves-light btn mb-1 mr-1">
                      <i class="material-icons left">settings_backup_restore</i> button</a>
                    <a class="waves-effect waves-light btn mb-1">
                      <i class="material-icons right">gps_fixed</i> button</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="html-raised-button">
            <pre><code class="language-markup">
  &lt;a class="waves-effect waves-light  btn">button&lt;/a>
  &lt;a class="waves-effect waves-light  btn">&lt;i class="material-icons left">settings_backup_restore&lt;/i> button&lt;/a>
  &lt;a class="waves-effect waves-light  btn">&lt;i class="material-icons right">gps_fixed&lt;/i> button&lt;/a>
  </code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Flat Buttton-->
  <div class="row">
    <div class="col s12">
      <div id="flat-button" class="card card-tabs position-none">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Flat Button</h4>
              </div>
              <div class="col s12 m6 l2">
                <ul class="tabs">
                  <li class="tab col s6 p-0"><a class="active p-0" href="#view-flat-button">View</a></li>
                  <li class="tab col s6 p-0"><a class="p-0" href="#html-flat-button">Html</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-flat-button">
            <div class="row">
              <div class="col s12 mt-3">
                <a class="btn-flat mb-1 waves-effect">Button</a>
                <a class="btn-flat mb-1 waves-effect">
                  <i class="material-icons left">comment</i> Button</a>
                <a class="btn-flat mb-1 waves-effect">
                  <i class="material-icons right">email</i> Button</a>
                <a class="btn-flat mb-1 dropdown-trigger waves-effect" href="#!" data-target="dropdown562">Dropdown<i
                    class="material-icons right">arrow_drop_down</i></a>
                <ul id="dropdown562" class="dropdown-content">
                  <li><a href="#!" class="-text">.zip</a>
                  </li>
                  <li><a href="#!" class="-text">.tar</a>
                  </li>
                  <li><a href="#!" class="-text">.exe</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div id="html-flat-button">
            <pre><code class="language-markup col s12">
  &lt;a class="waves-effect btn-flat">Button&lt;/a>
  </code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Floating Buttton-->
  <div class="row">
    <div class="col s12 m12 l12">
      <div id="floating-button" class="card card-default position-none">
        <div class="card-content">
          <div class="row">
            <div class="col s12">
              <h4 class="card-title">Floating Button</h4>
            </div>
            <div class="col s12 mt-3">
              <div class="row">
                <div class="col s12 m4 center">
                  <a class="btn-floating mb-1 btn-large waves-effect waves-light mr-1">
                    <i class="material-icons">add</i>
                  </a>
                  <a class="btn-floating mb-1 waves-effect waves-light ">
                    <i class="material-icons">clear</i>
                  </a>
                  <p class="mt-1">Raised</p>
                </div>
                <div class="col s12 m4 center">
                  <a
                    class="btn-floating mb-1 btn-large btn-flat waves-effect waves-light pink accent-2 white-text mr-1">
                    <i class="material-icons">content_copy</i>
                  </a>
                  <a class="btn-floating mb-1 btn-flat waves-effect waves-light pink accent-2 white-text">
                    <i class="material-icons">content_cut</i>
                  </a>
                  <p class="mt-1">Default</p>
                </div>
                <div class="col s12 m4 center">
                  <a class="dropdown-trigger btn-floating mb-1 btn-large waves-effect waves-light mr-1" href="#!"
                    data-target="dropdown2">
                    <i class="material-icons">vertical_align_bottom</i>
                  </a>
                  <ul id="dropdown2" class="dropdown-content">
                    <li><a href="#!" class="-text">.zip</a>
                    </li>
                    <li><a href="#!" class="-text">.tar</a>
                    </li>
                    <li><a href="#!" class="-text">.exe</a>
                    </li>
                  </ul>
                  <a class="dropdown-trigger btn-floating mb-1 btn-flat waves-effect waves-light  pink accent-2 white-text"
                    href="#!" data-target="dropdown2">
                    <i class="material-icons">cloud_download</i>
                  </a>
                  <p class="mt-1">Dropdown</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Submit Button-->
  <div class="row">
    <div class="col s12">
      <div id="submit-button" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Submit Button</h4>
              </div>
              <div class="col s12 m6 l2">
                <ul class="tabs">
                  <li class="tab col s6 p-0"><a class="active p-0" href="#view-submit-button">View</a></li>
                  <li class="tab col s6 p-0"><a class="p-0" href="#html-submit-button">Html</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-submit-button">
            <div class="row">
              <div class="col s12">
                <p>When you use a button to submit a form, instead of using a input tag, use a button tag with a type
                  submit</p>
              </div>
              <div class="col s12 mt-2 mb-2">
                <button class="btn mb-1 waves-effect waves-light mr-1" type="submit" name="action">Submit</button>
                <button class="btn mb-1 waves-effect waves-light mr-1" type="submit" name="action">Reply
                  <i class="material-icons left">reply</i>
                </button>
                <button class="btn mb-1 waves-effect waves-light " type="submit" name="action">Send
                  <i class="material-icons right">send</i>
                </button>
              </div>
            </div>
          </div>
          <div id="html-submit-button">
            <pre><code class="language-markup">
  &lt;button class="btn waves-effect waves-light " type="submit" name="action">Submit&lt;/button>
  &lt;button class="btn waves-effect waves-light " type="submit" name="action">Reply
    &lt;i class="material-icons left">reply&lt;/i>
  &lt;/button>
  &lt;button class="btn waves-effect waves-light " type="submit" name="action">Send
    &lt;i class="material-icons right">send&lt;/i>
  &lt;/button>
  </code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Larger Button Size-->
  <div class="row">
    <div class="col s12">
      <div id="larger-button" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Larger Button</h4>
              </div>
              <div class="col s12 m6 l2">
                <ul class="tabs">
                  <li class="tab col s6 p-0"><a class="active p-0" href="#view-larger-button">View</a></li>
                  <li class="tab col s6 p-0"><a class="p-0" href="#html-larger-button">Html</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-larger-button">
            <div class="row">
              <div class="col s12">
                <p>This button has a larger height for buttons that need more attention.</p>
              </div>
              <div class="col s12 mt-2 mb-2">
                <a class="waves-effect waves-light btn-large mb-1 mr-1">Button</a>
                <a class="waves-effect waves-light btn-large mb-1 mr-1">
                  <i class="material-icons left">desktop_mac</i> button</a>
                <a class="waves-effect waves-light btn-large mb-1">
                  <i class="material-icons right">cast</i> button</a>
              </div>
            </div>
          </div>
          <div id="html-larger-button">
            <pre><code class="language-markup col s12">
  &lt;a class="waves-effect waves-light btn-large">Button&lt;/a>
  &lt;a class="waves-effect waves-light btn-large">&lt;i class="material-icons left">cloud&lt;/i>button&lt;/a>
  &lt;a class="waves-effect waves-light btn-large">&lt;i class="material-icons right">cloud&lt;/i>button&lt;/a>
  </code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Larger Button Size-->
  <div class="row">
    <div class="col s12">
      <div id="small-button" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Small Button</h4>
              </div>
              <div class="col s12 m6 l2">
                <ul class="tabs">
                  <li class="tab col s6 p-0"><a class="active p-0" href="#view-small-button">View</a></li>
                  <li class="tab col s6 p-0"><a class="p-0" href="#html-small-button">Html</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-small-button">
            <div class="row">
              <div class="col s12">
                <p>When mouse and keyboard are the primary input methods, this smaller button is useful for denser UI
                  layouts.</p>
              </div>
              <div class="col s12 mt-2 mb-2">
                <a class="waves-effect waves-light btn-small mb-1 mr-1">Button</a>
                <a class="waves-effect waves-light btn-small mb-1 mr-1"><i
                    class="material-icons left">cloud</i>button</a>
                <a class="waves-effect waves-light btn-small mb-1"><i class="material-icons right">cloud</i>button</a>
              </div>
            </div>
          </div>
          <div id="html-small-button">
            <pre><code class="language-markup col s12">
  &lt;a class="waves-effect waves-light btn-small">Button&lt;/a>
  &lt;a class="waves-effect waves-light btn-small">&lt;i class="material-icons left">cloud&lt;/i>button&lt;/a>
  &lt;a class="waves-effect waves-light btn-small">&lt;i class="material-icons right">cloud&lt;/i>button&lt;/a>
  </code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Disabled Button Size-->
  <div class="row">
    <div class="col s12">
      <div id="disabled-button" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Disabled Button</h4>
              </div>
              <div class="col s12 m6 l2">
                <ul class="tabs">
                  <li class="tab col s6 p-0"><a class="active p-0" href="#view-disabled-button">View</a></li>
                  <li class="tab col s6 p-0"><a class="p-0" href="#html-disabled-button">Html</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-disabled-button">
            <div class="row">
              <div class="col s12">
                <p>This style can be applied to all button types.</p>
              </div>
              <div class="col s12 mt-2 mb-2">
                <a class="btn-large disabled mb-1 mr-1">Button</a>
                <a class="btn disabled mb-1 mr-1">Button</a>
                <a class="btn-flat disabled mb-1 mr-1">Button</a>
                <a class="btn-floating disabled mb-1"><i class="material-icons">add</i></a>
              </div>
            </div>
          </div>
          <div id="html-disabled-button">
            <pre><code class="language-markup col s12">
  &lt;a class="btn-large disabled">Button&lt;/a>
  &lt;a class="btn disabled">Button&lt;/a>
  &lt;a class="btn-flat disabled">Button&lt;/a>
  &lt;a class="btn-floating disabled">&lt;i class="material-icons">add&lt;/i>&lt;/a>
  </code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Button colors-->
  <div class="row">
    <div class="col s12 m12 l12">
      <div id="button-colors" class="card card-default">
        <div class="card-content">
          <div class="row">
            <div class="col s12">
              <h4 class="card-title">Button Colors</h4>
            </div>
            <div class="col s12">
              <h6>Material Colors</h6>
              <div class="row mt-4">
                <div class="col s12 m3 l3 center mb-3">
                  <p><a class="mb-6 btn waves-effect waves-light purple lightrn-1">button</a></p>
                  <p><a class="mb-6 btn waves-effect waves-light cyan">button</a></p>
                  <p><a class="mb-6 btn waves-effect waves-light red accent-2">button</a></p>
                  <p><a class="mb-6 btn waves-effect waves-light amber darken-4">button</a></p>
                  <p><a class="mb-6 btn waves-effect waves-light green darken-1">button</a></p>
                </div>
                <div class="col s12 m3 l3 center mb-3">
                  <p>
                    <a class="mb-6 btn-floating waves-effect waves-light purple lightrn-1">
                      <i class="material-icons">clear</i>
                    </a>
                  </p>
                  <p>
                    <a class="mb-6 btn-floating waves-effect waves-light cyan">
                      <i class="material-icons">clear</i>
                    </a>
                  </p>
                  <p>
                    <a class="mb-6 btn-floating waves-effect waves-light red accent-2">
                      <i class="material-icons">clear</i>
                    </a>
                  </p>
                  <p>
                    <a class="mb-6 btn-floating waves-effect waves-light amber darken-4">
                      <i class="material-icons">clear</i>
                    </a>
                  </p>
                  <p>
                    <a class="mb-6 btn-floating waves-effect waves-light green darken-1">
                      <i class="material-icons">clear</i>
                    </a>
                  </p>
                </div>
                <div class="col s12 m3 l3 center mb-3">
                  <p><a class="mb-6 btn btn-large waves-effect waves-light purple lightrn-1">button</a></p>
                  <p><a class="mb-6 btn btn-large waves-effect waves-light cyan">button</a></p>
                  <p><a class="mb-6 btn btn-large waves-effect waves-light red accent-2">button</a></p>
                  <p><a class="mb-6 btn btn-large waves-effect waves-light amber darken-4">button</a></p>
                  <p><a class="mb-6 btn btn-large waves-effect waves-light green darken-1">button</a></p>
                </div>
                <div class="col s12 m3 l3 center">
                  <p>
                    <a class="mb-6 btn-floating btn-large waves-effect waves-light purple lightrn-1">
                      <i class="material-icons">clear</i>
                    </a>
                  </p>
                  <p>
                    <a class="mb-6 btn-floating btn-large waves-effect waves-light cyan">
                      <i class="material-icons">clear</i>
                    </a>
                  </p>
                  <p>
                    <a class="mb-6 btn-floating btn-large waves-effect waves-light red accent-2">
                      <i class="material-icons">clear</i>
                    </a>
                  </p>
                  <p>
                    <a class="mb-6 btn-floating btn-large waves-effect waves-light amber darken-4">
                      <i class="material-icons">clear</i>
                    </a>
                  </p>
                  <p>
                    <a class="mb-6 btn-floating btn-large waves-effect waves-light green darken-1">
                      <i class="material-icons">clear</i>
                    </a>
                  </p>
                </div>
                <div class="col s12">
                  <div class="card card-alert green white-text">
                    <div class="card-content">
                      <p>
                        <span class="font-weight-600">Note:</span> Please refer <a href="<?php echo e(asset('css-color')); ?>"
                          target="_blank">css-color.html</a>
                        file for all colors classes & more details.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/materialize-admin/materialize-html-laravel-template/resources/views/pages/ui-basic-buttons.blade.php ENDPATH**/ ?>