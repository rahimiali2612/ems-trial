<?php $__env->startSection('title','Chips'); ?>


<?php $__env->startSection('content'); ?>
<div class="section">
  <div class="card">
    <div class="card-content">
      <p class="caption mb-0">Chips can be used to represent small blocks of information. They are most commonly
        used either for contacts or for tags.</p>
    </div>
  </div>
  <!--chips-->
  <div class="row">
    <div class="col s12">
      <div id="contacts" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Contacts</h4>
              </div>
              <div class="col s12 m6 l2">
                <ul class="tabs">
                  <li class="tab col s6 p-0"><a class="active p-0" href="#view-contacts">View</a></li>
                  <li class="tab col s6 p-0"><a class="p-0" href="#html-contacts">Html</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-contacts">
            <div class="row">
              <div class="col s12">
                <div class="chip">
                  <img src="<?php echo e(asset('images/avatar/avatar-1.png')); ?>" alt="Contact Person">
                  John Doe
                </div>
                <div class="chip">
                  Tag
                  <i class="close material-icons">close</i>
                </div>
              </div>
            </div>
          </div>
          <div id="html-contacts">
            <pre><code class="language-markup">
    &lt;div class="chip">
        &lt;img src="../../../images/avatar/avatar-1.png" alt="Contact Person">
        Jane Doe
    &lt;/div>
    </code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Tags -->
  <div class="row">
    <div class="col s12">
      <div id="tags" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Tags</h4>
              </div>
              <div class="col s12 m6 l2">
                <ul class="tabs">
                  <li class="tab col s6 p-0"><a class="active p-0" href="#view-tags">View</a></li>
                  <li class="tab col s6 p-0"><a class="p-0" href="#html-tags">Html</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-tags">
            <div class="row">
              <div class="col s12">
                <div class="chip">
                  Tag
                  <i class="close material-icons">close</i>
                </div>
              </div>
            </div>
          </div>
          <div id="html-tags">
            <pre class="language-markup"><code class="language-markup" data-language="markup">
    &lt;div class="chip">
        Tag
        &lt;i class="close material-icons">close&lt;/i>
    &lt;/div>
    </code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Chips Styles -->
  <div class="row">
    <div class="col s12">
      <div id="chips-styles" class="card card-default">
        <div class="card-content">
          <div class="row">
            <div class="col s12">
              <h4 class="card-title">Chips Styles</h4>
            </div>
            <div class="col s12">
              <p>You can also style it easily with materialize admin theme pre defined color set classes.
              </p>
              <div class="section">
                <div class="chip cyan white-text">
                  <img src="<?php echo e(asset('images/logo/login-logo.png')); ?>" alt="Materialize"> Solid
                  color background
                </div>
                <div class="chip cyan white-text z-depth-4">
                  <img src="<?php echo e(asset('images/logo/login-logo.png')); ?>" alt="Materialize"> Solid
                  color with shadow
                </div>
              </div>
              <div class="section">
                <div class="chip gradient-45deg-purple-deep-orange white-text">
                  <img src="<?php echo e(asset('images/avatar/avatar-2.png')); ?>" alt="Materialize">
                  Gradient color background
                </div>
                <div class="chip gradient-45deg-purple-deep-orange gradient-shadow white-text">
                  <img src="<?php echo e(asset('images/avatar/avatar-3.png')); ?>" alt="Materialize">
                  Gradient color with shadow
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Styles tag chips -->
  <div class="row">
    <div class="col s12">
      <div id="tags-two" class="card card-default">
        <div class="card-content">
          <div class="row">
            <div class="col s12">
              <h4 class="card-title">Styles tag chips</h4>
            </div>
            <div class="col s12">
              <p>You can also style tag chips easily with materialize admin theme pre defined color set
                classes.</p>
              <div class="section">
                <div class="chip cyan white-text">
                  Tag
                  <i class="material-icons close">close</i>
                </div>
                <div class="chip cyan z-depth-4 white-text">
                  Candy
                  <i class="material-icons close">close</i>
                </div>
                <div class="chip gradient-45deg-purple-deep-orange white-text">
                  Cake
                  <i class="material-icons close">close</i>
                </div>
                <div class="chip gradient-45deg-purple-deep-orange gradient-shadow white-text">
                  Book
                  <i class="material-icons close">close</i>
                </div>
              </div>
              <div class="section">
                <div class="chip cyan white-text">
                  <img src="<?php echo e(asset('images/avatar/avatar-1.png')); ?>" alt="Contact Person">
                  John Doe
                  <i class="material-icons close">close</i>
                </div>
                <div class="chip cyan z-depth-4 white-text">
                  <img src="<?php echo e(asset('images/logo/login-logo.png')); ?>" alt="Materialize">
                  Materialize Admin Theme
                  <i class="material-icons close">close</i>
                </div>
                <div class="chip gradient-45deg-purple-deep-orange white-text">
                  <img src="<?php echo e(asset('images/avatar/avatar-4.png')); ?>" alt="Materialize">
                  Materialize Admin Theme
                  <i class="material-icons close">close</i>
                </div>
                <div class="chip gradient-45deg-purple-deep-orange gradient-shadow white-text">
                  <img src="<?php echo e(asset('images/avatar/avatar-4.png')); ?>" alt="Materialize">
                  Materialize Admin Theme
                  <i class="material-icons close">close</i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Javascript Plugin Usage -->
  <div class="row">
    <div class="col s12">
      <div id="plugin-usage" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l6">
                <h4 class="card-title">Javascript Plugin Usage</h4>
              </div>
              <div class="col s12 m6 l6">
                <ul class="tabs">
                  <li class="tab col s3 p-0"><a class="active p-0" href="#view-plugin">View</a></li>
                  <li class="tab col s3 p-0"><a class="p-0" href="#html-plugin">Html</a></li>
                  <li class="tab col s3 p-0"><a class="p-0" href="#Javascript-plugin">JS</a></li>
                  <li class="tab col s3 p-0"><a class="p-0" href="#data-plugin">Data</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-plugin">
            <div class="row">
              <div class="col s12">
                <p>To add tags, just enter your tag text and press enter. You can delete them by
                  clicking on the close icon or by using your delete button.</p>
                <div class="section">
                  <div class="chips" data-index="0" data-initialized="true"></div>
                  <br />
                  <p class="caption">Set initial tags.</p>
                  <div class="chips chips-initial"></div>
                  <br />
                  <p class="caption">Use placeholders and override hint texts.</p>
                  <div class="chips chips-placeholder"></div>
                  <br />
                  <p class="caption">Use autocomplete with chips.</p>
                  <div class="chips chips-autocomplete"></div>
                </div>
              </div>
            </div>
          </div>
          <div id="html-plugin">
            <pre><code class="language-markup">
    &lt;!-- Default with no input (automatically generated)  -->
    &lt;div class="chips">&lt;/div>
    &lt;div class="chips chips-initial">&lt;/div>
    &lt;div class="chips chips-placeholder">&lt;/div>
    &lt;div class="chips chips-autocomplete">&lt;/div>

    &lt;!-- Customizable input  -->
    &lt;div class="chips">
    &lt;input class="custom-class">
    &lt;/div>
    </code></pre>
          </div>
          <div id="Javascript-plugin">
            <pre><code class="language-javascript">
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.chips');
    var instances = M.Chips.init(elems, options);
    });

    // Or with jQuery

    $('.chips').chips();
    $('.chips-initial').chips({
    data: [{
    tag: 'Apple',
    }, {
    tag: 'Microsoft',
    }, {
    tag: 'Google',
    }],
    });
    $('.chips-placeholder').chips({
    placeholder: 'Enter a tag',
    secondaryPlaceholder: '+Tag',
    });
    $('.chips-autocomplete').chips({
    autocompleteOptions: {
    data: {
    'Apple': null,
    'Microsoft': null,
    'Google': null
    },
    limit: Infinity,
    minLength: 1
    }
    });
    </code></pre>
          </div>
          <div id="data-plugin">
            <pre><code class="language-markup">
    var chip = {
        tag: 'chip content',
        image: '', //optional
    };
    </code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- options -->
<div class="row">
  <div class="col s12">
    <div id="options" class="card card-default">
      <div class="card-content">
        <h4 class="card-title">Options</h4>
        <table class="table responsive-table highlight">
          <thead>
            <tr>
              <th>Name</th>
              <th>Type</th>
              <th>Default</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>data</td>
              <td>Array</td>
              <td>[]</td>
              <td>Set the chip data (look at the Chip data object)</td>
            </tr>
            <tr>
              <td>placeholder</td>
              <td>String</td>
              <td>''</td>
              <td>Set first placeholder when there are no tags.</td>
            </tr>
            <tr>
              <td>secondaryPlaceholder</td>
              <td>String</td>
              <td>''</td>
              <td>Set second placeholder when adding additional tags.</td>
            </tr>
            <tr>
              <td>autocompleteOptions</td>
              <td>Object</td>
              <td>{}</td>
              <td>Set autocomplete options.</td>
            </tr>
            <tr>
              <td>limit</td>
              <td>Integer</td>
              <td>Infinity</td>
              <td>Set chips limit.</td>
            </tr>
            <tr>
              <td>onChipAdd</td>
              <td>Function</td>
              <td>null</td>
              <td>Callback for chip add.</td>
            </tr>
            <tr>
              <td>onChipSelect</td>
              <td>Function</td>
              <td>null</td>
              <td>Callback for chip select.</td>
            </tr>
            <tr>
              <td>onChipDelete</td>
              <td>Function</td>
              <td>null</td>
              <td>Callback for chip delete.</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- methods -->
<div class="row">
  <div class="col s12">
    <div id="methods" class="card card-default">
      <div class="card-content">
        <div class="row">
          <div class="col s12">
            <h4 class="card-title">Methods</h4>
          </div>
          <div class="col s12">
            <p class="caption">
              Use these methods to interact with chips.
            </p>

            <p>Because jQuery is no longer a dependency, all the methods are called on the plugin instance.
              You can get the plugin instance like this: </p>
            <pre><code class="language-javascript col s12">
var instance = M.Chips.getInstance(elem);

/* jQuery Method Calls
You can still use the old jQuery plugin method calls.
But you won't be able to access instance properties.

$('.chips').chips('methodName');
$('.chips').chips('methodName', paramName);
*/
</code></pre>

            <h5 class="method-header">
              .addChip();
            </h5>
            <p>Add chip to input.</p>
            <h6>Arguments</h6>
            <p>
              <b>Chip:</b> Chip data object.</p>
            <pre><code class="language-javascript col s12">
instance.addChip({
tag: 'chip content',
image: '', // optional
});
</code></pre>
            <br>
            <h5 class="method-header">
              .deleteChip();
            </h5>
            <p>Delete nth chip.</p>
            <h6>Arguments</h6>
            <p>
              <b>Integer:</b> Index of chip.</p>
            <pre><code class="language-javascript col s12">
instance.deleteChip(3); // Delete 3rd chip.
</code></pre>
            <br>
            <h5 class="method-header">
              .selectChip();
            </h5>
            <p>Select nth chip.</p>
            <h6>Arguments</h6>
            <p>
              <b>Integer:</b> Index of chip.</p>
            <pre><code class="language-javascript col s12">
instance.selectChip(2); // Select 2nd chip
</code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Properties -->
<div class="row">
  <div class="col s12">
    <div id="properties" class="card card-default">
      <div class="card-content">
        <div class="row">
          <div class="col s12">
            <h4 class="card-title">Properties</h4>
            <table class="striped responsive-table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Type</th>
                  <th>Description</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>el</td>
                  <td>Element</td>
                  <td>The DOM element the plugin was initialized with.</td>
                </tr>
                <tr>
                  <td>options</td>
                  <td>Object</td>
                  <td>The options the instance was initialized with.</td>
                </tr>
                <tr>
                  <td>chipsData</td>
                  <td>Array</td>
                  <td>Array of the current chips data.</td>
                </tr>
                <tr>
                  <td>hasAutocomplete</td>
                  <td>Boolean</td>
                  <td>If the chips has autocomplete enabled.</td>
                </tr>
                <tr>
                  <td>autocomplete</td>
                  <td>Object</td>
                  <td>
                    <a href="<?php echo e(asset('autocomplete')); ?>">Autocomplete</a> instance, if any.</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('page-script'); ?>
<script src="<?php echo e(asset('js/scripts/ui-chips.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/materialize-update/resources/views/pages/ui-chips.blade.php ENDPATH**/ ?>