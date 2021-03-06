<?php $__env->startSection('title','Badges'); ?>


<?php $__env->startSection('page-style'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/pages/badges.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="section">
  <div class="card">
    <div class="card-content">
      <p class="caption mb-0">Badges can notify you that there are new or unread messages or notifications. Add the new
        class to the badge to give it the background.</p>
    </div>
  </div>
  <!--Badge-->
  <div class="row">
    <div class="col s12">
      <div id="badges" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Badges in Collections</h4>
              </div>
              <div class="col s12 m6 l2">
                <ul class="tabs">
                  <li class="tab col s6 p-0"><a class="active p-0" href="#view-badges">View</a></li>
                  <li class="tab col s6 p-0"><a class="p-0" href="#html-badges">Html</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-badges">
            <div class="row">
              <div class="col s12">
                <p>You can use badges in any type of the <a href="collections" target="_blank">Collection</a>.</p>
              </div>
              <div class="col s12">
                <ul class="collection">
                  <li> <a href="#!" class="collection-item">Alan<span class="badge">1</span></a></li>
                  <li><a href="#!" class="collection-item">Alan<span class="new badge">4</span></a></li>
                  <li><a href="#!" class="collection-item">Alan</a></li>
                  <li><a href="#!" class="collection-item">Alan<span class="badge">14</span></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="html-badges">
            <pre><code class="language-markup">
&lt;ul class=&quot;collection&quot;&gt;
&lt;li&gt; &lt;a href=&quot;#!&quot; class=&quot;collection-item&quot;&gt;Alan&lt;span class=&quot;badge&quot;&gt;1&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;#!&quot; class=&quot;collection-item&quot;&gt;Alan&lt;span class=&quot;new badge&quot;&gt;4&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;#!&quot; class=&quot;collection-item&quot;&gt;Alan&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href=&quot;#!&quot; class=&quot;collection-item&quot;&gt;Alan&lt;span class=&quot;badge&quot;&gt;14&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
</code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Badges in Dropdown -->
  <div class="row">
    <div class="col s12">
      <div id="badges-dropdown" class="card card-tabs position-none">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Badges in Dropdown</h4>
              </div>
              <div class="col s12 m6 l2">
                <ul class="tabs">
                  <li class="tab col s6 p-0"><a class="active p-0" href="#view-dropdown">View</a></li>
                  <li class="tab col s6 p-0"><a class="p-0" href="#html-dropdown">Html</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-dropdown">
            <div class="row">
              <div class="col s12">
                <ul id="dropdown2" class="dropdown-content">
                  <li><a href="#!">one<span class="badge">1</span></a></li>
                  <li><a href="#!">two<span class="new badge">1</span></a></li>
                  <li><a href="#!">three</a></li>
                </ul>
                <a class="btn dropdown-trigger" href="#!" data-target="dropdown2">Dropdown<i
                    class="material-icons right">arrow_drop_down</i></a>
              </div>
            </div>
          </div>
          <div id="html-dropdown">
            <pre><code class="language-markup">
  &lt;ul id="dropdown2" class="dropdown-content">
    &lt;li>&lt;a href="#!">one&lt;span class="badge">1&lt;/span>&lt;/a>&lt;/li>
    &lt;li>&lt;a href="#!">two&lt;span class="new badge">1&lt;/span>&lt;/a>&lt;/li>
    &lt;li>&lt;a href="#!">three&lt;/a>&lt;/li>
  &lt;/ul>
  &lt;a class="btn dropdown-trigger" href="#!" data-target="dropdown2">Dropdown&lt;i class="material-icons right">arrow_drop_down&lt;/i>&lt;/a>
  </code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Badges in Navbar -->
<div class="row">
  <div class="col s12">
    <div id="badges-navbar" class="card card-tabs">
      <div class="card-content">
        <div class="card-title">
          <div class="row">
            <div class="col s12 m6 l10">
              <h4 class="card-title">Badges in Navbar</h4>
            </div>
            <div class="col s12 m6 l2">
              <ul class="tabs">
                <li class="tab col s6 p-0"><a class="active p-0" href="#view-navbar">View</a></li>
                <li class="tab col s6 p-0"><a class="p-0" href="#html-navbar">Html</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="view-navbar">
          <div class="row">
            <div class="col s12">
              <nav>
                <div class="nav-wrapper">
                  <a href="" class="brand-logo ml-1">Logo</a>
                  <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="">sass</a></li>
                    <li><a href="">sass <span class="new badge">4</span></a></li>
                    <li><a href="">sass</a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
        <div id="html-navbar">
          <pre><code class="language-markup">
  &lt;nav>
    &lt;div class="nav-wrapper">
      &lt;a href="" class="brand-logo">Logo&lt;/a>
      &lt;ul id="nav-mobile" class="right hide-on-med-and-down">
        &lt;li>&lt;a href="">sass&lt;/a>&lt;/li>
        &lt;li>&lt;a href="">sass &lt;span class="new badge">4&lt;/span>&lt;/a>&lt;/li>
        &lt;li>&lt;a href="">sass&lt;/a>&lt;/li>
      &lt;/ul>
    &lt;/div>
  &lt;/nav></code></pre>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Badges in Collapsibles -->
<div class="row">
  <div class="col s12">
    <div id="badges-collapsibles" class="card card-tabs">
      <div class="card-content">
        <div class="card-title">
          <div class="row">
            <div class="col s12 m6 l10">
              <h4 class="card-title">Badges in Collapsibles</h4>
            </div>
            <div class="col s12 m6 l2">
              <ul class="tabs">
                <li class="tab col s6 p-0"><a class="active p-0" href="#view-collaps">View</a></li>
                <li class="tab col s6 p-0"><a class="p-0" href="#html-collaps">Html</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="view-collaps">
          <div class="row">
            <div class="col s12">
              <ul class="collapsible" data-collapsible="accordion">
                <li>
                  <div class="collapsible-header">
                    <i class="material-icons">filter_drama</i>First
                    <span class="new badge">4</span>
                  </div>
                  <div class="collapsible-body">
                    <p>Lorem ipsum dolor sit amet.</p>
                  </div>
                </li>
                <li>
                  <div class="collapsible-header">
                    <i class="material-icons">place</i>Second
                    <span class="badge">1</span>
                  </div>
                  <div class="collapsible-body">
                    <p>Lorem ipsum dolor sit amet.</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div id="html-collaps">
          <pre><code class="language-markup">
  &lt;ul class="collapsible" data-collapsible="accordion">
    &lt;li>
      &lt;div class="collapsible-header">
        &lt;i class="material-icons">filter_drama&lt;/i>
        First
        &lt;span class="new badge">4&lt;/span>&lt;/div>
      &lt;div class="collapsible-body">&lt;p>Lorem ipsum dolor sit amet.&lt;/p>&lt;/div>
    &lt;/li>
      &lt;li>
        &lt;div class="collapsible-header">
        &lt;i class="material-icons">place&lt;/i>
        Second
        &lt;span class="badge">1&lt;/span>&lt;/div>
      &lt;div class="collapsible-body">&lt;p>Lorem ipsum dolor sit amet.&lt;/p>&lt;/div>
    &lt;/li>
  &lt;/ul></code></pre>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Options -->
<div class="row">
  <div class="col s12">
    <h4 class="header">Options</h4>
    <p class="caption">You can customize captions in many ways.</p>
  </div>
</div>

<!-- Custom Caption -->
<div class="row">
  <div class="col s12">
    <div id="custom-caption" class="card card-tabs">
      <div class="card-content">
        <div class="card-title">
          <div class="row">
            <div class="col s12 m6 l10">
              <h4 class="card-title">Custom Caption</h4>
            </div>
            <div class="col s12 m6 l2">
              <ul class="tabs">
                <li class="tab col s6 p-0"><a class="active p-0" href="#view-custom-caption">View</a></li>
                <li class="tab col s6 p-0"><a class="p-0" href="#html-custom-caption">Html</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="view-custom-caption">
          <div class="row">
            <div class="col s12">
              <div class="collection">
                <a href="#!" class="collection-item">Custom Badge Captions<span class="new badge"
                    data-badge-caption="custom caption">4</span></a>
                <a href="#!" class="collection-item">Custom Badge Captions<span class="badge"
                    data-badge-caption="custom caption">4</span></a>
              </div>
            </div>
          </div>
        </div>
        <div id="html-custom-caption">
          <pre><code class="language-markup">
  &lt;span class="new badge" data-badge-caption="custom caption">4&lt;/span>
  &lt;span class="badge" data-badge-caption="custom caption">4&lt;/span>
  </code></pre>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Colors -->
<div class="row">
  <div class="col s12">
    <div id="colors" class="card card-tabs">
      <div class="card-content">
        <div class="card-title">
          <div class="row">
            <div class="col s12 m6 l10">
              <h4 class="card-title">Colors</h4>
            </div>
            <div class="col s12 m6 l2">
              <ul class="tabs">
                <li class="tab col s6 p-0"><a class="active p-0" href="#view-colors">View</a></li>
                <li class="tab col s6 p-0"><a class="p-0" href="#html-colors">Html</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="view-colors">
          <div class="row">
            <div class="col s12">
              <div class="collection">
                <a href="#!" class="collection-item">Gradient with shadow<span
                    class="new badge gradient-45deg-purple-deep-orange gradient-shadow"
                    data-badge-caption="gradient purple orange">4 </span></a>
                <a href="#!" class="collection-item">Gradient<span class="new badge gradient-45deg-light-blue-cyan"
                    data-badge-caption="gradient blue cyan">4</span></a>
                <a href="#!" class="collection-item">Red<span class="new badge red"
                    data-badge-caption="red">4</span></a>
                <a href="#!" class="collection-item">Blue<span class="new badge blue"
                    data-badge-caption="blue">4</span></a>
              </div>
            </div>
          </div>
        </div>
        <div id="html-colors">
          <pre><code class="language-markup">
  &lt;a href="#!" class="collection-item">Gradient with shadow&lt;span class="new badge gradient-45deg-purple-deep-orange gradient-shadow" data-badge-caption="gradient purple orange">4 &lt;/span>&lt;/a>
  &lt;a href="#!" class="collection-item">Gradient&lt;span class="new badge gradient-45deg-light-blue-cyan" data-badge-caption="gradient blue cyan">4&lt;/span>&lt;/a>
  &lt;span class="new badge red">4&lt;/span>
  &lt;span class="new badge blue">4&lt;/span>
  </code></pre>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/materialize-update/resources/views/pages/ui-badges.blade.php ENDPATH**/ ?>