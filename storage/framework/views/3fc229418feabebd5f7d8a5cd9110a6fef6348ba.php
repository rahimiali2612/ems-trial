<?php $__env->startSection('title','Form Select2'); ?>
<?php $__env->startSection('vendor-style'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendors/select2/select2.min.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendors/select2/select2-materialize.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('page-style'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/pages/form-select2.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="section">
  <!-- select2 -->
  <div class="row">
    <div class="col s12">
      <div class="card-panel">
        <a href="https://select2.org/" target="_blank">Select2</a> gives you a customizable select box with
        support for searching, tagging, remote data sets,
        infinite scrolling, and many other highly used options.
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <div class="card card-tabs">
        <div class="card-content">
          <div class="row">
            <div class="col s12 m6 l10">
              <h4 class="card-title">Select2</h4>
            </div>
            <div class="col s12 m6 l2">
              <ul class="tabs">
                <li class="tab col s4 p-0"><a class="active p-0" href="#view-select2">View</a></li>
                <li class="tab col s4 p-0"><a class="p-0" href="#html-select2">Html</a></li>
                <li class="tab col s4 p-0"><a class="p-0" href="#js-select2">Js</a></li>
              </ul>
            </div>
          </div>
          <div class="card-content">
            <!-- select2 tab -->
            <div id="view-select2">
              <div class="row">
                <div class="col m6 s12">
                  <h6 class="card-title">Basic Select2</h6>
                  <p class="card-text">Use <code class="token function language-javascript">.select2</code>
                    class for basic select2 control.</p>
                  <div class="input-field">
                    <select class="select2 browser-default">
                      <option value="square">Square</option>
                      <option value="rectangle">Rectangle</option>
                      <option value="rombo">Rombo</option>
                      <option value="romboid">Romboid</option>
                      <option value="trapeze">Trapeze</option>
                      <option value="traible">Triangle</option>
                      <option value="polygon">Polygon</option>
                    </select>
                  </div>
                </div>
                <div class="col m6 s12">
                  <h6 class="card-title">Single Select with Label</h6>
                  <p class="card-text">Use <code class="token function language-javascript">optgroup</code>
                    attribute for basic select2 with Label control.</p>
                  <div class="input-field">
                    <select class="select2 browser-default">
                      <optgroup label="Figures">
                        <option value="romboid">Romboid</option>
                        <option value="trapeze">Trapeze</option>
                        <option value="triangle">Triangle</option>
                        <option value="polygon">Polygon</option>
                      </optgroup>
                      <optgroup label="Colors">
                        <option value="red">Red</option>
                        <option value="green">Green</option>
                        <option value="blue">Blue</option>
                        <option value="purple">Purple</option>
                      </optgroup>
                    </select>
                  </div>
                </div>
                <div class="col m6 s12">
                  <h6>Select With Icon</h6>
                  <p>Use data attribute <code class="token function language-javascript">data-icon</code> to
                    add icon name for each options. And use class <code
                      class="token function language-javascript">.select2-icons</code> to set icon with option.</p>
                  <div class="input-field">
                    <select data-placeholder="Select a state..." class="select2-icons browser-default"
                      id="select2-icons">
                      <option value="Ac unit" data-icon="ac_unit" selected>Ac unit</option>
                      <option value="widgets" data-icon="widgets">Widgets</option>
                      <option value="weekend" data-icon="weekend">Weekend</option>
                      <option value="web" data-icon="web">web</option>
                      <option value="warning" data-icon="warning">Warning</option>
                      <option value="apps" data-icon="apps">Apps</option>
                      <option value="airplay" data-icon="airplay">Airplay</option>
                      <option value="accessibility" data-icon="accessibility">Accessibility</option>
                      <option value="accessible" data-icon="accessible">Accessible</option>
                    </select>
                  </div>
                </div>
                <div class="col m6 s12">
                  <h6>Template support</h6>
                  <p>Select2 supports custom themes using the theme option so you can style Select2 to match
                    the rest of your application. These are using the <code
                      class="token function language-javascript">classic</code> theme, which matches the old look of
                    Select2.</p>
                  <div class="input-field">
                    <select class="select2-theme browser-default" id="select2-theme">
                      <optgroup label="Figures">
                        <option value="romboid">Romboid</option>
                        <option value="trapeze">Trapeze</option>
                        <option value="triangle">Triangle</option>
                        <option value="polygon">Polygon</option>
                      </optgroup>
                      <optgroup label="Colors">
                        <option value="red">Red</option>
                        <option value="green">Green</option>
                        <option value="blue">Blue</option>
                        <option value="purple">Purple</option>
                      </optgroup>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <!-- html code tab-->
            <div id="html-select2">
              <pre><code class="language-markup">
// Basic Select2
&lt;div class="input-field"&gt;
  &lt;select class="select2 browser-default"&gt;
    &lt;option value="square"&gt;Square&lt;/option&gt;
    &lt;option value="rectangle"&gt;Rectangle&lt;/option&gt;
    &lt;option value="rombo"&gt;Rombo&lt;/option&gt;
    &lt;option value="romboid"&gt;Romboid&lt;/option&gt;
    &lt;option value="trapeze"&gt;Trapeze&lt;/option&gt;
    &lt;option value="traible"&gt;Triangle&lt;/option&gt;
    &lt;option value="polygon"&gt;Polygon&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;
// Select2 With Icon
&lt;div class="input-field"&gt;
  &lt;select data-placeholder="Select a state..." class="select2-icons browser-default" id="select2-icons"&gt;
    &lt;option value="Ac unit" data-icon="ac_unit" selected&gt;Ac unit&lt;/option&gt;
    &lt;option value="widgets" data-icon="widgets"&gt;Widgets&lt;/option&gt;
    &lt;option value="weekend" data-icon="weekend"&gt;Weekend&lt;/option&gt;
    &lt;option value="web" data-icon="web"&gt;web&lt;/option&gt;
    &lt;option value="warning" data-icon="warning"&gt;Warning&lt;/option&gt;
    &lt;option value="apps" data-icon="apps"&gt;Apps&lt;/option&gt;
    &lt;option value="airplay" data-icon="airplay"&gt;Airplay&lt;/option&gt;
    &lt;option value="accessibility" data-icon="accessibility"&gt;Accessibility&lt;/option&gt;
    &lt;option value="accessible" data-icon="accessible"&gt;Accessible&lt;/option&gt;
  &lt;/select&gt;
&lt;/div>
//selects witn label
&lt;div class="input-field"&gt;
  &lt;select class="select2 browser-default"&gt;
    &lt;optgroup label="Figures"&gt;
      &lt;option value="romboid"&gt;Romboid&lt;/option&gt;
      &lt;option value="trapeze"&gt;Trapeze&lt;/option&gt;
      &lt;option value="triangle"&gt;Triangle&lt;/option&gt;
      &lt;option value="polygon"&gt;Polygon&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label="Colors"&gt;
      &lt;option value="red"&gt;Red&lt;/option&gt;
      &lt;option value="green"&gt;Green&lt;/option&gt;
      &lt;option value="blue"&gt;Blue&lt;/option&gt;
      &lt;option value="purple"&gt;Purple&lt;/option&gt;
    &lt;/optgroup&gt;
  &lt;/select&gt;
&lt;/div&gt;
           </code></pre>
            </div>
            <!-- js code tab-->
            <div id="js-select2">
              <pre><code class="language-javascript">
// Basic Select2 select
$(".select2").select2({
    dropdownAutoWidth: true,
    width: '100%'
});
// Select With Icon
$(".select2-icons").select2({
    dropdownAutoWidth: true,
    width: '100%',
    minimumResultsForSearch: Infinity,
    templateResult: iconFormat,
    templateSelection: iconFormat,
    escapeMarkup: function (es) { return es; }
});

// Format icon
function iconFormat(icon) {
    var originalOption = icon.element;
    if (!icon.id) { return icon.text; }
    var $icon = "&lt;i class='material-icons'&gt;" + $(icon.element).data('icon') + "&lt;/i&gt;" + icon.text;
    return $icon;
}
// Theme support
$(".select2-theme").select2({
    dropdownAutoWidth: true,
    width: '100%',
    placeholder: "Classic Theme",
    theme: "classic"
});
  </code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- select2 multiple -->
  <div class="row">
    <div class="col s12">
      <div class="card card-tabs">
        <div class="card-content">
          <div class="row">
            <div class="col s12 m6 l10">
              <h4 class="card-title">Multiple Select2</h4>
            </div>
            <div class="col s12 m6 l2">
              <ul class="tabs">
                <li class="tab col s4 p-0"><a class="active p-0" href="#view-multiple">View</a></li>
                <li class="tab col s4 p-0"><a class="p-0" href="#html-multiple">Html</a></li>
                <li class="tab col s4 p-0"><a class="p-0" href="#js-multiple">Js</a></li>
              </ul>
            </div>
          </div>
          <div class="card-content">
            <!-- select2 tab -->
            <div id="view-multiple">
              <div class="row">
                <div class="col m6">
                  <h6>Multiple Select with Label</h6>
                  <p>Use <code class="token function language-javascript">optgroup</code> attribute for
                    multiple select box with Label control.</p>
                  <div class="input-field">
                    <select class="select2 browser-default" multiple="multiple">
                      <optgroup label="Figures">
                        <option value="romboid">Romboid</option>
                        <option value="trapeze" selected>Trapeze</option>
                        <option value="triangle">Triangle</option>
                        <option value="polygon">Polygon</option>
                      </optgroup>
                      <optgroup label="Colors">
                        <option value="red">Red</option>
                        <option value="green">Green</option>
                        <option value="blue" selected>Blue</option>
                        <option value="purple">Purple</option>
                      </optgroup>
                    </select>
                  </div>
                </div>
                <div class="col m6">
                  <h6>Maximum Select with Label</h6>
                  <p>Select2 multi-value select boxes can set restrictions regarding the maximum number of options
                    selected.
                    The select below is declared with the <code
                      class="token function language-javascript">multiple</code>
                    attribute with <code class="token function language-javascript">maximumSelectionLength</code> in the
                    select2 options.
                  </p>
                  <div class="input-field">
                    <select class="max-length browser-default" multiple="multiple" id="max_length">
                      <optgroup label="Figures">
                        <option value="romboid">Romboid</option>
                        <option value="trapeze" selected>Trapeze</option>
                        <option value="triangle">Triangle</option>
                        <option value="polygon">Polygon</option>
                      </optgroup>
                      <optgroup label="Colors">
                        <option value="red">Red</option>
                        <option value="green">Green</option>
                        <option value="blue">Blue</option>
                        <option value="purple">Purple</option>
                      </optgroup>
                    </select>
                  </div>
                </div>
                <div class="col m6">
                  <h6>Select With Icon</h6>
                  <p>Use data attribute <code class="token function language-javascript">data-icon</code> to
                    add icon name for each options. And use class <code
                      class="token function language-javascript">.select2-icons</code> to set icon with option.</p>
                  <div class="input-field">
                    <select data-placeholder="Select a state..." class="select2-icons browser-default"
                      id="multiple-select2-icons" multiple="multiple">
                      <option value="access_alarm" data-icon="access_alarm" selected>Access_alarm</option>
                      <option value="account_circle" data-icon="account_circle">Account_circle</option>
                      <option value="add_alarm" data-icon="add_alarm">Add_alarm</option>
                      <option value="add_alert" data-icon="add_alert">Add_alert</option>
                      <option value="airport_shuttle" data-icon="airport_shuttle">Airport_shuttle</option>
                      <option value="announcement" data-icon="announcement">Announcement</option>
                      <option value="archive" data-icon="archive">Archive</option>
                      <option value="android" data-icon="android">Android</option>
                      <option value="assessment" data-icon="assessment">Assessment</option>
                      <option value="assignment" data-icon="assignment">Assignment</option>
                      <option value="attach_file" data-icon="attach_file">Attach_file</option>
                      <option value="attachment" data-icon="attachment">Attachment</option>
                      <option value="audiotrack" data-icon="audiotrack">Audiotrack</option>
                    </select>
                  </div>
                </div>
                <div class="col m6">
                  <h6>Multiple Select2</h6>
                  <p>Use <code class="token function language-javascript">.select2</code> class for basic
                    select2 control. Use <code class="token function language-javascript">multiple="multiple"</code>
                    attribute for multiple select box.</p>
                  <div class="input-field">
                    <select class="select2 browser-default" multiple="multiple">
                      <option value="square">Square</option>
                      <option value="rectangle" selected>Rectangle</option>
                      <option value="rombo">Rombo</option>
                      <option value="romboid">Romboid</option>
                      <option value="trapeze">Trapeze</option>
                      <option value="traible" selected>Triangle</option>
                      <option value="polygon">Polygon</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <!-- html code tab-->
            <div id="html-multiple">
              <pre><code class="language-markup">
// Multiple Select with Label
&lt;div class="input-field"&gt;
  &lt;select class="select2 browser-default" multiple="multiple"&gt;
    &lt;optgroup label="Figures"&gt;
      &lt;option value="romboid"&gt;Romboid&lt;/option&gt;
      &lt;option value="trapeze" selected&gt;Trapeze&lt;/option&gt;
      &lt;option value="triangle"&gt;Triangle&lt;/option&gt;
      &lt;option value="polygon"&gt;Polygon&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label="Colors"&gt;
      &lt;option value="red"&gt;Red&lt;/option&gt;
      &lt;option value="green"&gt;Green&lt;/option&gt;
      &lt;option value="blue" selected&gt;Blue&lt;/option&gt;
      &lt;option value="purple"&gt;Purple&lt;/option&gt;
    &lt;/optgroup&gt;
  &lt;/select&gt;
&lt;/div&gt;
//Multiple select with label
&lt;div class="input-field"&gt;
  &lt;select class="max-length browser-default" multiple="multiple" id="max_length"&gt;
    &lt;optgroup label="Figures"&gt;
      &lt;option value="romboid"&gt;Romboid&lt;/option&gt;
      &lt;option value="trapeze" selected&gt;Trapeze&lt;/option&gt;
      &lt;option value="triangle"&gt;Triangle&lt;/option&gt;
      &lt;option value="polygon"&gt;Polygon&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label="Colors"&gt;
      &lt;option value="red"&gt;Red&lt;/option&gt;
      &lt;option value="green"&gt;Green&lt;/option&gt;
      &lt;option value="blue"&gt;Blue&lt;/option&gt;
      &lt;option value="purple"&gt;Purple&lt;/option&gt;
    &lt;/optgroup&gt;
  &lt;/select&gt;
&lt;/div&gt;
// Mutliple select with icon
&lt;div class="input-field"&gt;
  &lt;select data-placeholder="Select a state..." class="select2-icons browser-default"
    id="multiple-select2-icons" multiple="multiple"&gt;
    &lt;option value="3d_rotation" data-icon="3d_rotation" selected&gt;3d_rotation&lt;/option&gt;
    &lt;option value="access_alarm" data-icon="access_alarm"&gt;Access_alarm&lt;/option&gt;
    &lt;option value="account_circle" data-icon="account_circle"&gt;Account_circle&lt;/option&gt;
    &lt;option value="add_alarm" data-icon="add_alarm"&gt;Add_alarm&lt;/option&gt;
    &lt;option value="add_alert" data-icon="add_alert"&gt;Add_alert&lt;/option&gt;
    &lt;option value="airport_shuttle" data-icon="airport_shuttle"&gt;Airport_shuttle&lt;/option&gt;
    &lt;option value="announcement" data-icon="announcement"&gt;Announcement&lt;/option&gt;
    &lt;option value="archive" data-icon="archive"&gt;Archive&lt;/option&gt;
    &lt;option value="android" data-icon="android"&gt;Android&lt;/option&gt;
    &lt;option value="assessment" data-icon="assessment"&gt;Assessment&lt;/option&gt;
    &lt;option value="assignment" data-icon="assignment"&gt;Assignment&lt;/option&gt;
    &lt;option value="attach_file" data-icon="attach_file"&gt;Attach_file&lt;/option&gt;
    &lt;option value="attachment" data-icon="attachment"&gt;Attachment&lt;/option&gt;
    &lt;option value="audiotrack" data-icon="audiotrack"&gt;Audiotrack&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;
//Multiple select2
&lt;div class="input-field"&gt;
    &lt;select class="select2 browser-default" multiple="multiple"&gt;
      &lt;option value="square"&gt;Square&lt;/option&gt;
      &lt;option value="rectangle" selected&gt;Rectangle&lt;/option&gt;
      &lt;option value="rombo"&gt;Rombo&lt;/option&gt;
      &lt;option value="romboid"&gt;Romboid&lt;/option&gt;
      &lt;option value="trapeze"&gt;Trapeze&lt;/option&gt;
      &lt;option value="traible" selected&gt;Triangle&lt;/option&gt;
      &lt;option value="polygon"&gt;Polygon&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;
          </code></pre>
            </div>
            <!-- js code tab-->
            <div id="js-multiple">
              <pre><code class="language-javascript">
// Select With Icon
$(".select2-icons").select2({
    dropdownAutoWidth: true,
    width: '100%',
    minimumResultsForSearch: Infinity,
    templateResult: iconFormat,
    templateSelection: iconFormat,
    escapeMarkup: function (es) { return es; }
});

// Format icon
function iconFormat(icon) {
    var originalOption = icon.element;
    if (!icon.id) { return icon.text; }
    var $icon = "<i class='material-icons'>" + $(icon.element).data('icon') + "</i>" + icon.text;

    return $icon;
}


// Limiting the number of selections
$(".max-length").select2({
    dropdownAutoWidth: true,
    width: '100%',
    maximumSelectionLength: 2,
    placeholder: "Select maximum 2 items"
});
    </code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- select2 advance -->
  <div class="row">
    <div class="col s12">
      <div class="card card-tabs">
        <div class="card-content">
          <div class="row">
            <div class="col s12 m6 l10">
              <h4 class="card-title">Advance Options</h4>
            </div>
            <div class="col s12 m6 l2">
              <ul class="tabs">
                <li class="tab col s4 p-0"><a class="active p-0" href="#view-advance">View</a></li>
                <li class="tab col s4 p-0"><a class="p-0" href="#html-advance">Html</a></li>
                <li class="tab col s4 p-0"><a class="p-0" href="#js-advance">Js</a></li>
              </ul>
            </div>
          </div>
          <div class="card-content">
            <!-- select2 tab -->
            <div id="view-advance">
              <div class="row">
                <div class="col m6">
                  <h6>Loading Remote Data</h6>
                  <p>Select2 comes with AJAX support built in, using jQuery's AJAX methods. In this example,
                    we can search for repositories using GitHub's API.</p>
                  <div class="input-field">
                    <select class="select2-data-ajax browser-default" id="select2-ajax"></select>
                  </div>
                </div>

                <div class="col m6">
                  <h6>Customizing How Results Are Matched</h6>
                  <p>Unlike other dropdowns on this page, this one matches options only if the term appears in
                    the beginning of the string as opposed to anywhere: This custom matcher uses a compatibility
                    module that is only bundled in the full version of Select2. You also have the option of using a more
                    complex matcher.</p>
                  <div class="input-field">
                    <select class="select2-customize-result browser-default" multiple="multiple"
                      id="select2-customize-result">
                      <optgroup label="Figures">
                        <option value="romboid">Romboid</option>
                        <option value="trapeze">Trapeze</option>
                        <option value="triangle">Triangle</option>
                        <option value="polygon">Polygon</option>
                      </optgroup>
                      <optgroup label="Colors">
                        <option value="red">Red</option>
                        <option value="green">Green</option>
                        <option value="blue">Blue</option>
                        <option value="purple">Purple</option>
                      </optgroup>
                    </select>
                  </div>
                </div>

                <div class="col m6">
                  <h6>Programmatic access</h6>
                  <p>Select2 supports methods that allow programmatic control of the component.</p>
                  <div class="input-field">
                    <select class="select2 js-example-programmatic browser-default" id="programmatic-single">
                      <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                      </optgroup>
                      <optgroup label="Pacific Time Zone">
                        <option value="CA">California</option>
                        <option value="NV">Nevada</option>
                        <option value="OR">Oregon</option>
                        <option value="WA">Washington</option>
                      </optgroup>
                      <optgroup label="Mountain Time Zone">
                        <option value="AZ">Arizona</option>
                        <option value="CO">Colorado</option>
                        <option value="ID">Idaho</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NM">New Mexico</option>
                        <option value="ND">North Dakota</option>
                        <option value="UT">Utah</option>
                        <option value="WY">Wyoming</option>
                      </optgroup>
                      <optgroup label="Central Time Zone">
                        <option value="AL">Alabama</option>
                        <option value="AR">Arkansas</option>
                        <option value="IL">Illinois</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="OK">Oklahoma</option>
                        <option value="SD">South Dakota</option>
                        <option value="TX">Texas</option>
                        <option value="TN">Tennessee</option>
                        <option value="WI">Wisconsin</option>
                      </optgroup>
                      <optgroup label="Eastern Time Zone">
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="IN">Indiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="OH">Ohio</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WV">West Virginia</option>
                      </optgroup>
                    </select>
                  </div>
                  <div class="btn-toolbar" role="toolbar" aria-label="Programmatic control">
                    <div class="btn-group-sm" aria-label="Set Select2 option">
                      <button class="js-programmatic-set-val btn">
                        Set"California"
                      </button>
                    </div>
                    <div class="btn-group-sm" role="group" aria-label="Open and close">
                      <button class="js-programmatic-open btn">
                        Open
                      </button>
                      <button class="js-programmatic-close btn">
                        Close
                      </button>
                    </div>
                    <div class="btn-group-sm" role="group" aria-label="Initialize and destroy">
                      <button class="js-programmatic-init btn">
                        Init
                      </button>
                      <button class="js-programmatic-destroy btn">
                        Destroy
                      </button>
                    </div>
                  </div>
                </div>

                <div class="col m6">
                  <h6>Loading Array Data</h6>
                  <p>Select2 provides a way to load the data from a local array. You can provide initial
                    selections with array data by providing the option tag for the selected values, similar to how it
                    would
                    be done for a standard select.</p>
                  <div class="input-field">
                    <select class="select2-data-array browser-default" id="select2-array"></select>
                  </div>
                </div>

              </div>
            </div>
            <!-- html code tab-->
            <div id="html-advance">
              <pre><code class="language-markup">
// Loading Remote Data
&lt;select class="select2-data-ajax browser-default" id="select2-ajax"&gt;&lt;/select&gt;
// Customizing How Results Are Matched
&lt;div class="input-field"&gt;
  &lt;select class="select2-customize-result browser-default" multiple="multiple"
    id="select2-customize-result"&gt;
    &lt;optgroup label="Figures"&gt;
      &lt;option value="romboid"&gt;Romboid&lt;/option&gt;
      &lt;option value="trapeze"&gt;Trapeze&lt;/option&gt;
      &lt;option value="triangle"&gt;Triangle&lt;/option&gt;
      &lt;option value="polygon"&gt;Polygon&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label="Colors"&gt;
      &lt;option value="red"&gt;Red&lt;/option&gt;
      &lt;option value="green"&gt;Green&lt;/option&gt;
      &lt;option value="blue"&gt;Blue&lt;/option&gt;
      &lt;option value="purple"&gt;Purple&lt;/option&gt;
    &lt;/optgroup&gt;
  &lt;/select&gt;
&lt;/div&gt;
// Programmatic access
&lt;div class="input-field"&gt;
    &lt;select class="select2 js-example-programmatic browser-default" id="programmatic-single"&gt;
      &lt;optgroup label="Alaskan/Hawaiian Time Zone"&gt;
        &lt;option value="AK"&gt;Alaska&lt;/option&gt;
        &lt;option value="HI"&gt;Hawaii&lt;/option&gt;
      &lt;/optgroup&gt;
      &lt;optgroup label="Pacific Time Zone"&gt;
        &lt;option value="CA"&gt;California&lt;/option&gt;
        &lt;option value="NV"&gt;Nevada&lt;/option&gt;
        &lt;option value="OR"&gt;Oregon&lt;/option&gt;
        &lt;option value="WA"&gt;Washington&lt;/option&gt;
      &lt;/optgroup&gt;
      &lt;optgroup label="Eastern Time Zone"&gt;
        &lt;option value="CT"&gt;Connecticut&lt;/option&gt;
        &lt;option value="DE"&gt;Delaware&lt;/option&gt;
        &lt;option value="FL"&gt;Florida&lt;/option&gt;
        &lt;option value="GA"&gt;Georgia&lt;/option&gt;
        &lt;option value="IN"&gt;Indiana&lt;/option&gt;
        &lt;option value="ME"&gt;Maine&lt;/option&gt;
        &lt;option value="MD"&gt;Maryland&lt;/option&gt;
        &lt;option value="MA"&gt;Massachusetts&lt;/option&gt;
        &lt;option value="MI"&gt;Michigan&lt;/option&gt;
        &lt;option value="NH"&gt;New Hampshire&lt;/option&gt;
        &lt;option value="NJ"&gt;New Jersey&lt;/option&gt;
        &lt;option value="NY"&gt;New York&lt;/option&gt;
        &lt;option value="NC"&gt;North Carolina&lt;/option&gt;
        &lt;option value="OH"&gt;Ohio&lt;/option&gt;
        &lt;option value="PA"&gt;Pennsylvania&lt;/option&gt;
        &lt;option value="RI"&gt;Rhode Island&lt;/option&gt;
        &lt;option value="SC"&gt;South Carolina&lt;/option&gt;
        &lt;option value="VT"&gt;Vermont&lt;/option&gt;
        &lt;option value="VA"&gt;Virginia&lt;/option&gt;
        &lt;option value="WV"&gt;West Virginia&lt;/option&gt;
      &lt;/optgroup&gt;
    &lt;/select&gt;
  &lt;/div&gt;
  &lt;div class="btn-toolbar" role="toolbar" aria-label="Programmatic control"&gt;
    &lt;div class="btn-group-sm" aria-label="Set Select2 option"&gt;
      &lt;button class="js-programmatic-set-val btn"&gt;
        Set"California"
      &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="btn-group-sm" role="group" aria-label="Open and close"&gt;
      &lt;button class="js-programmatic-open btn"&gt;
        Open
      &lt;/button&gt;
      &lt;button class="js-programmatic-close btn"&gt;
        Close
      &lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="btn-group-sm" role="group" aria-label="Initialize and destroy"&gt;
      &lt;button class="js-programmatic-init btn"&gt;
        Init
      &lt;/button&gt;
      &lt;button class="js-programmatic-destroy btn"&gt;
        Destroy
      &lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  // Loading array data
  &lt;div class="input-field"&gt;
      &lt;select class="select2-data-array browser-default" id="select2-array"&gt;&lt;/select&gt;
    &lt;/div&gt;
          </code></pre>
            </div>
            <!-- js code tab-->
            <div id="js-advance">
              <pre><code class="language-javascript">
  // Loading remote data
  $(".select2-data-ajax").select2({
      dropdownAutoWidth: true,
      width: '100%',
      ajax: {
          url: "https://api.github.com/search/repositories",
          dataType: 'json',
          delay: 250,
          data: function (params) {
              return {
                  q: params.term, // search term
                  page: params.page
              };
          },
          processResults: function (data, params) {
              // parse the results into the format expected by Select2
              // since we are using custom formatting functions we do not need to
              // alter the remote JSON data, except to indicate that infinite
              // scrolling can be used
              params.page = params.page || 1;

              return {
                  results: data.items,
                  pagination: {
                      more: (params.page * 30) &lt; data.total_count
                  }
              };
          },
          cache: true
      },
      placeholder: 'Search for a repository',
      escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
      minimumInputLength: 1,
      templateResult: formatRepo,
      templateSelection: formatRepoSelection
  });

function formatRepo(repo) {
    if (repo.loading) return repo.text;

    var markup = "&lt;div class='select2-result-repository clearfix'&gt;" +
        "&lt;div class='select2-result-repository__avatar'&gt;&lt;img src='" + repo.owner.avatar_url + "' /&gt;&lt;/div&gt;" +
        "&lt;div class='select2-result-repository__meta'&gt;" +
        "&lt;div class='select2-result-repository__title'&gt;" + repo.full_name + "&lt;/div&gt;";

    if (repo.description) {
        markup += "&lt;div class='select2-result-repository__description'&gt;" + repo.description + "&lt;/div&gt;";
    }

    markup += "&lt;div class='select2-result-repository__statistics'&gt;" +
        "&lt;div class='select2-result-repository__forks'&gt;&lt;i class='icon-code-fork mr-0'&gt;&lt;/i&gt; " + repo.forks_count + " Forks&lt;/div&gt;" +
        "&lt;div class='select2-result-repository__stargazers'&gt;&lt;i class='icon-star5 mr-0'&gt;&lt;/i&gt; " + repo.stargazers_count + " Stars&lt;/div&gt;" +
        "&lt;div class='select2-result-repository__watchers'&gt;&lt;i class='icon-eye mr-0'&gt;&lt;/i&gt; " + repo.watchers_count + " Watchers&lt;/div&gt;" +
        "&lt;/div&gt;" +
        "&lt;/div&gt;&lt;/div&gt;";

    return markup;
}

function formatRepoSelection(repo) {
    return repo.full_name || repo.text;
}
// Customizing how result are matched
// Customizing how results are matched
function matchStart(term, text) {
    if (text.toUpperCase().indexOf(term.toUpperCase()) === 0) {
        return true;
    }

    return false;
}

$.fn.select2.amd.require(['select2/compat/matcher'], function (oldMatcher) {
    $(".select2-customize-result").select2({
        dropdownAutoWidth: true,
        width: '100%',
        placeholder: "Search by 'r'",
        matcher: oldMatcher(matchStart)
    });
});

// Programmatic access
var $select = $(".js-example-programmatic").select2({
    dropdownAutoWidth: true,
    width: '100%'
});
var $selectMulti = $(".js-example-programmatic-multi").select2();
$selectMulti.select2({
    dropdownAutoWidth: true,
    width: '100%',
    placeholder: "Programmatic Events"
});
$(".js-programmatic-set-val").on("click", function () { $select.val("CA").trigger("change"); });

$(".js-programmatic-open").on("click", function () { $select.select2("open"); });
$(".js-programmatic-close").on("click", function () { $select.select2("close"); });

$(".js-programmatic-init").on("click", function () { $select.select2(); });
$(".js-programmatic-destroy").on("click", function () { $select.select2("destroy"); });

$(".js-programmatic-multi-set-val").on("click", function () { $selectMulti.val(["CA", "AL"]).trigger("change"); });
$(".js-programmatic-multi-clear").on("click", function () { $selectMulti.val(null).trigger("change"); });

// Loading array data
var data = [
    { id: 0, text: 'enhancement' },
    { id: 1, text: 'bug' },
    { id: 2, text: 'duplicate' },
    { id: 3, text: 'invalid' },
    { id: 4, text: 'wontfix' }
];

$(".select2-data-array").select2({
    dropdownAutoWidth: true,
    width: '100%',
    data: data
});
    </code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- select2 size -->
  <div class="row">
    <div class="col s12">
      <div class="card card-tabs">
        <div class="card-content">
          <div class="row">
            <div class="col s12 m6 l10">
              <h4 class="card-title">Size</h4>
            </div>
            <div class="col s12 m6 l2">
              <ul class="tabs">
                <li class="tab col s4 p-0"><a class="active p-0" href="#view-size">View</a></li>
                <li class="tab col s4 p-0"><a class="p-0" href="#html-size">Html</a></li>
                <li class="tab col s4 p-0"><a class="p-0" href="#js-size">Js</a></li>
              </ul>
            </div>
          </div>
          <div class="card-content">
            <!-- select2 tab -->
            <div id="view-size">
              <div class="row">
                <div class="col s12">
                  <p>For different sizes of select2, Use classes like <code class="token function
                    language-javascript">.select2-size-sm</code> &amp;
                    <code class="token function
                  language-javascript">.select2-size-lg</code> for Large, small &amp; Extra Small Select respectively.
                  </p>
                </div>
                <div class="col s12">
                  <h6>Large</h6>
                  <div class="input-field">
                    <select class="select2-size-lg browser-default" id="large-select">
                      <option value="square">Square</option>
                      <option value="rectangle">Rectangle</option>
                      <option value="rombo">Rombo</option>
                      <option value="romboid">Romboid</option>
                      <option value="trapeze">Trapeze</option>
                      <option value="traible">Triangle</option>
                      <option value="polygon">Polygon</option>
                    </select>
                  </div>
                </div>
                <div class="col s12">
                  <h6>Default</h6>
                  <div class="input-field">
                    <select class="select2 browser-default" id="default-select">
                      <option value="square">Square</option>
                      <option value="rectangle">Rectangle</option>
                      <option value="rombo">Rombo</option>
                      <option value="romboid">Romboid</option>
                      <option value="trapeze">Trapeze</option>
                      <option value="traible">Triangle</option>
                      <option value="polygon">Polygon</option>
                    </select>
                  </div>
                </div>
                <div class="col s12">
                  <h6>Small</h6>
                  <div class="input-field">
                    <select class="select2-size-sm browser-default" id="small-select">
                      <option value="square">Square</option>
                      <option value="rectangle">Rectangle</option>
                      <option value="rombo">Rombo</option>
                      <option value="romboid">Romboid</option>
                      <option value="trapeze">Trapeze</option>
                      <option value="traible">Triangle</option>
                      <option value="polygon">Polygon</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <!-- html code tab-->
            <div id="html-size">
              <pre><code class="language-markup">
// Large
&lt;div class="input-field"&gt;
    &lt;select class="select2-size-lg browser-default" id="large-select"&gt;
      &lt;option value="square"&gt;Square&lt;/option&gt;
      &lt;option value="rectangle"&gt;Rectangle&lt;/option&gt;
      &lt;option value="rombo"&gt;Rombo&lt;/option&gt;
      &lt;option value="romboid"&gt;Romboid&lt;/option&gt;
      &lt;option value="trapeze"&gt;Trapeze&lt;/option&gt;
      &lt;option value="traible"&gt;Triangle&lt;/option&gt;
      &lt;option value="polygon"&gt;Polygon&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;
  // Small
  &lt;div class="input-field"&gt;
      &lt;select class="select2-size-sm browser-default" id="small-select"&gt;
        &lt;option value="square"&gt;Square&lt;/option&gt;
        &lt;option value="rectangle"&gt;Rectangle&lt;/option&gt;
        &lt;option value="rombo"&gt;Rombo&lt;/option&gt;
        &lt;option value="romboid"&gt;Romboid&lt;/option&gt;
        &lt;option value="trapeze"&gt;Trapeze&lt;/option&gt;
        &lt;option value="traible"&gt;Triangle&lt;/option&gt;
        &lt;option value="polygon"&gt;Polygon&lt;/option&gt;
      &lt;/select&gt;
    &lt;/div&gt;
</code></pre>
            </div>
            <!-- js code tab-->
            <div id="js-size">
              <pre><code class="language-javascript">
// Large
$('.select2-size-lg').select2({
    dropdownAutoWidth: true,
    width: '100%',
    containerCssClass: 'select-lg'
});

// Small
$('.select2-size-sm').select2({
    dropdownAutoWidth: true,
    width: '100%',
    containerCssClass: 'select-sm'
});
  </code></pre>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col s12">
      <div class="card card-tabs">
        <div class="card-content">
          <div class="row">
            <div class="col s12 m6 l10">
              <h4 class="card-title">Multi Select Size</h4>
            </div>
            <div class="col s12 m6 l2">
              <ul class="tabs">
                <li class="tab col s4 p-0"><a class="active p-0" href="#view-multi-size">View</a></li>
                <li class="tab col s4 p-0"><a class="p-0" href="#html-multi-size">Html</a></li>
                <li class="tab col s4 p-0"><a class="p-0" href="#js-multi-size">Js</a></li>
              </ul>
            </div>
          </div>
          <div class="card-content">
            <!-- select2 tab -->
            <div id="view-multi-size">
              <div class="row">
                <div class="col s12">
                  <p>For different sizes of select2, Use classes like <code class="token function
                  language-javascript">.select2-size-sm</code> &amp;
                    <code class="token function
                  language-javascript">.select2-size-lg</code> for Large, small &amp; Extra Small Select respectively.
                  </p>
                </div>
                <div class="col s12">
                  <h6>Large</h6>
                  <div class="input-field">
                    <select class="select2-size-lg browser-default" multiple="multiple" id="large-select-multi">
                      <option value="square" selected>Square</option>
                      <option value="rectangle">Rectangle</option>
                      <option value="rombo">Rombo</option>
                      <option value="romboid">Romboid</option>
                      <option value="trapeze">Trapeze</option>
                      <option value="traible">Triangle</option>
                      <option value="polygon">Polygon</option>
                    </select>
                  </div>
                </div>
                <div class="col s12">
                  <h6>Default</h6>
                  <div class="input-field">
                    <select class="select2 browser-default" multiple="multiple" id="default-select-multi">
                      <option value="square">Square</option>
                      <option value="rectangle">Rectangle</option>
                      <option value="rombo">Rombo</option>
                      <option value="romboid">Romboid</option>
                      <option value="trapeze">Trapeze</option>
                      <option value="traible">Triangle</option>
                      <option value="polygon" selected>Polygon</option>
                    </select>
                  </div>
                </div>
                <div class="col s12">
                  <h6>Small</h6>
                  <div class="input-field">
                    <select class="select2-size-sm browser-default" multiple="multiple" id="small-select-multi">
                      <option value="square">Square</option>
                      <option value="rectangle">Rectangle</option>
                      <option value="rombo" selected>Rombo</option>
                      <option value="romboid">Romboid</option>
                      <option value="trapeze">Trapeze</option>
                      <option value="traible">Triangle</option>
                      <option value="polygon">Polygon</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <!-- html code tab-->
            <div id="html-multi-size">
              <pre><code class="language-markup">
//large
&lt;div class="input-field"&gt;
    &lt;select class="select2-size-lg browser-default" multiple="multiple" id="large-select-multi"&gt;
      &lt;option value="square" selected&gt;Square&lt;/option&gt;
      &lt;option value="rectangle"&gt;Rectangle&lt;/option&gt;
      &lt;option value="rombo"&gt;Rombo&lt;/option&gt;
      &lt;option value="romboid"&gt;Romboid&lt;/option&gt;
      &lt;option value="trapeze"&gt;Trapeze&lt;/option&gt;
      &lt;option value="traible"&gt;Triangle&lt;/option&gt;
      &lt;option value="polygon"&gt;Polygon&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;
  //small
&lt;div class="input-field"&gt;
  &lt;select class="select2-size-sm browser-default" multiple="multiple" id="small-select-multi"&gt;
    &lt;option value="square"&gt;Square&lt;/option&gt;
    &lt;option value="rectangle"&gt;Rectangle&lt;/option&gt;
    &lt;option value="rombo" selected&gt;Rombo&lt;/option&gt;
    &lt;option value="romboid"&gt;Romboid&lt;/option&gt;
    &lt;option value="trapeze"&gt;Trapeze&lt;/option&gt;
    &lt;option value="traible"&gt;Triangle&lt;/option&gt;
    &lt;option value="polygon"&gt;Polygon&lt;/option&gt;
  &lt;/select&gt;
&lt;/div&gt;
  </code></pre>
            </div>
            <!-- js code tab-->
            <div id="js-multi-size">
              <pre><code class="language-javascript">
// Large
$('.select2-size-lg').select2({
    dropdownAutoWidth: true,
    width: '100%',
    containerCssClass: 'select-lg'
});

// Small
$('.select2-size-sm').select2({
    dropdownAutoWidth: true,
    width: '100%',
    containerCssClass: 'select-sm'
});
</code></pre>
            </div>
          </div>
          <a class="waves-effect waves-light btn modal-trigger" href="#regularExpressionPopupModal">Modal</a>

        <div id="regularExpressionPopupModal" class="modal">
            <div class="modal-content">
                <h5>Add Regular Expression</h5>
                <div class="input-field">
                    <select class="select2 browser-default">
                      <option value="square">Square</option>
                      <option value="rectangle">Rectangle</option>
                      <option value="rombo">Rombo</option>
                      <option value="romboid">Romboid</option>
                      <option value="trapeze">Trapeze</option>
                      <option value="traible">Triangle</option>
                      <option value="polygon">Polygon</option>
                    </select>
                </div>
                <div class="input-field">
                    <input id="availableRegularExpressionValidationMessage" name="availableRegularExpressionValidationMessage"/>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn waves-effect waves-light green modal-action add-regularexpression mr-2" type="button">
                    Save
                    <i class="material-icons right">save</i>
                </button>
                <button class="btn waves-effect waves-light red modal-action modal-close mr-1">
                    Cancel
                    <i class="material-icons right">cancel</i>
                </button>
            </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('vendor-script'); ?>
<script src="<?php echo e(asset('vendors/select2/select2.full.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('page-script'); ?>
<script src="<?php echo e(asset('js/scripts/form-select2.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/materialize-admin/materialize-html-laravel-template/resources/views/pages/form-select2.blade.php ENDPATH**/ ?>