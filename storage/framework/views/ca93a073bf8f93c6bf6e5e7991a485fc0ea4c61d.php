<?php $__env->startSection('title','Grid'); ?>


<?php $__env->startSection('content'); ?>
<div class="section">
  <div class="card">
    <div class="card-content">
      <p class="caption">Materialize using a standard 12 column fluid responsive grid system.The grid helps you layout
        your page in an ordered, easy fashion.</p>
    </div>
  </div>

  <!--Container-->
  <div class="row">
    <div class="col s12">
      <div id="Container" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Container</h4>
              </div>
              <div class="col s12 m6 l2">
                <ul class="tabs">
                  <li class="tab col s6 p-0"><a class="active p-0" href="#view-container">View</a></li>
                  <li class="tab col s6 p-0"><a class="p-0" href="#html-container">Html</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-container">
            <div class="row">
              <div class="col s12">
                <p>The container class is not strictly part of the grid but is important in laying out content. It
                  allows you to center your page content. The <code class=" language-markup">container</code> class is
                  set to ~70% of the window width. It helps you center and contain your page content. We use the
                  container to contain our body content.</p>
              </div>
            </div>
            <div class="row">
              <div class="col s12">
                <h4 class="card-title">Demo</h4>
                <p>Try the button below to see what the page looks like without containers.</p>
                <a id="container-toggle-button" class="btn waves-effect waves-light">Turn off Containers</a>
              </div>
              <div class="col s12">
                <div class="row">
                  <div class="col s12">
                    <div class="browser-window">
                      <div class="top-bar">
                        <div class="circles">
                          <div class="close-circle circle"></div>
                          <div class="minimize-circle circle"></div>
                          <div class="maximize-circle circle"></div>
                        </div>
                      </div>
                      <div class="content">
                        <div class="row">
                          <div class="site-layout-example-top col s12">
                            <!-- <p class="flat-text-logo"></p> -->
                          </div>
                          <div class="site-layout-example-right col s12">
                            <div class="container">
                              <p class="flat-text small"></p>
                              <p class="flat-text full-width"></p>
                              <p class="flat-text full-width"></p>
                              <p class="flat-text full-width"></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col s12">
                    <p>To add a container just put your content inside a <code class="language-markup">&lt;div></code>
                      tag with a <code class="language-markup">container</code> class. Here's an example of how your
                      page might be set up.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="html-container">
            <pre><code class="language-markup">
  &lt;body>
    &lt;div class="container">
    &lt;!-- Page Content goes here -->
    &lt;/div>
  &lt;/body>
  </code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--12 Columns-->
  <div class="row">
    <div class="col s12">
      <div id="12-columns" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">12 Columns</h4>
              </div>
              <div class="col s12 m6 l2">
                <ul class="tabs">
                  <li class="tab col s6 p-0"><a class="active p-0" href="#view-12-columns">View</a></li>
                  <li class="tab col s6 p-0"><a class="p-0" href="#html-columns">Html</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-12-columns">
            <div class="row">
              <div class="col s12">
                <p>The container class is not strictly part of the grid but is important in laying out content. It
                  allows you to center your page content. The <code class=" language-markup">container</code> class is
                  set to ~70% of the window width. It helps you center and contain your page content. We use the
                  container to contain our body content.</p>
              </div>
            </div>
            <div class="row">
              <div class="col s12">
                <p>Take a look at this section to quickly understand how the grid works!</p>
                <p>Our standard grid has 12 columns. No matter the size of the browser, each of these columns will
                  always have an equal width.</p>
              </div>
              <div class="col s12">
                <div class="col s1 grid-example">
                  <span class="flow-text">1</span>
                </div>
                <div class="col s1 grid-example">
                  <span class="flow-text">2</span>
                </div>
                <div class="col s1 grid-example">
                  <span class="flow-text">3</span>
                </div>
                <div class="col s1 grid-example">
                  <span class="flow-text">4</span>
                </div>
                <div class="col s1 grid-example">
                  <span class="flow-text">5</span>
                </div>
                <div class="col s1 grid-example">
                  <span class="flow-text">6</span>
                </div>
                <div class="col s1 grid-example">
                  <span class="flow-text">7</span>
                </div>
                <div class="col s1 grid-example">
                  <span class="flow-text">8</span>
                </div>
                <div class="col s1 grid-example">
                  <span class="flow-text">9</span>
                </div>
                <div class="col s1 grid-example">
                  <span class="flow-text">10</span>
                </div>
                <div class="col s1 grid-example">
                  <span class="flow-text">11</span>
                </div>
                <div class="col s1 grid-example">
                  <span class="flow-text">12</span>
                </div>
              </div>
              <div class="col s12">
                <p>To get a feel of how the grid is used in HTML. Take a look at this code below which will produce a
                  similar result as the one above.</p>
                <p>Note: For now, just know that the <code class=" language-markup">s1</code> stands for small-1 which
                  in plain English means "1 column on small screens".</p>
              </div>
            </div>
          </div>
          <div id="html-columns">
            <pre><code class="language-markup">
  &lt;div class="row">
    &lt;div class="col s1">1&lt;/div>
    &lt;div class="col s1">2&lt;/div>
    &lt;div class="col s1">3&lt;/div>
    &lt;div class="col s1">4&lt;/div>
    &lt;div class="col s1">5&lt;/div>
    &lt;div class="col s1">6&lt;/div>
    &lt;div class="col s1">7&lt;/div>
    &lt;div class="col s1">8&lt;/div>
    &lt;div class="col s1">9&lt;/div>
    &lt;div class="col s1">10&lt;/div>
    &lt;div class="col s1">11&lt;/div>
    &lt;div class="col s1">12&lt;/div>
  &lt;/div>
  </code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Columns live inside Rows-->
  <div class="row">
    <div class="col s12">
      <div id="inside-rows" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Columns live inside Rows</h4>
              </div>
              <div class="col s12 m6 l2">
                <ul class="tabs">
                  <li class="tab col s6 p-0"><a class="active p-0" href="#view-inside-rows">View</a></li>
                  <li class="tab col s6 p-0"><a class="p-0" href="#html-inside-rows">Html</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-inside-rows">
            <div class="row">
              <div class="col s12">
                <p>The container class is not strictly part of the grid but is important in laying out content. It
                  allows you to center your page content. The <code class=" language-markup">container</code> class is
                  set to ~70% of the window width. It helps you center and contain your page content. We use the
                  container to contain our body content.</p>
              </div>
            </div>
            <div class="row">
              <div class="col s12">
                <p>Remember when you are creating your layout that all columns must be contained inside a row and that
                  you must add the <code class=" language-markup">col</code> class to your inner divs to make them into
                  columns</p>
              </div>
              <div class="col s12">
                <div class="col s12 grid-example">
                  <span class="flow-text">This div is 12-columns wide on all screen sizes</span>
                </div>
                <div class="col s6 grid-example">
                  <span class="flow-text">6-columns (one-half)</span>
                </div>
                <div class="col s6 grid-example">
                  <span class="flow-text">6-columns (one-half)</span>
                </div>
              </div>
            </div>
          </div>
          <div id="html-inside-rows">
            <pre><code class="language-markup">
  &lt;div class="row">
    &lt;div class="col s12">This div is 12-columns wide on all screen sizes&lt;/div>
    &lt;div class="col s6">6-columns (one-half)&lt;/div>
    &lt;div class="col s6">6-columns (one-half)&lt;/div>
  &lt;/div>
  </code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Offsets-->
  <div class="row">
    <div class="col s12">
      <div id="offsets" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Offsets</h4>
              </div>
              <div class="col s12 m6 l2">
                <ul class="tabs">
                  <li class="tab col s6 p-0"><a class="active p-0" href="#view-offsets">View</a></li>
                  <li class="tab col s6 p-0"><a class="p-0" href="#html-offsets">Html</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-offsets">
            <div class="row">
              <div class="col s12">
                <p>To offset, simply add <code class=" language-markup">offset-s2</code> to the class where <code
                    class=" language-markup">s</code>
                  signifies the screen class-prefix (s = small, m = medium, l = large) and the number after is the
                  number of columns you want to offset by.</p>
              </div>
              <div class="col s12">
                <div class="col s12 grid-example">
                  <span class="flow-text">This div is 12-columns wide on all screen sizes</span>
                </div>
                <div class="col s6 offset-s6 grid-example">
                  <span class="flow-text">6-columns (offset-by-6)</span>
                </div>
              </div>
            </div>
          </div>
          <div id="html-offsets">
            <pre><code class="language-markup">
  &lt;div class="row">
    &lt;div class="col s12">&lt;span class="flow-text">This div is 12-columns wide on all screen sizes&lt;/span>&lt;/div>
    &lt;div class="col s6 offset-s6">&lt;span class="flow-text">6-columns (offset-by-6)&lt;/span>&lt;/div>
  &lt;/div>
  </code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Grid push and pull -->
  <div class="row">
    <div class="col s12">
      <div id="push-and-pull" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Push and Pull</h4>
              </div>
              <div class="col s12 m6 l2">
                <ul class="tabs">
                  <li class="tab col s6 p-0"><a class="active p-0" href="#view-pull-push">View</a></li>
                  <li class="tab col s6 p-0"><a class="p-0" href="#html-pull-push">Html</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-pull-push">
            <div class="row">
              <div class="col s12">
                <p>You can easily change the order of your columns with push and pull. Simply add <code
                    class="language-markup">push-s2</code>
                  or <code class="language-markup">pull-s2</code> to the class where <code
                    class="language-markup">s</code>
                  signifies the screen class-prefix (s = small, m = medium, l = large) and the number after is the
                  number of columns you want to push or pull by.</p>
              </div>
              <div class="col s12">
                <div class="col s7 push-s5 grid-example">
                  <span style="font-size: 14px;">This div is 7-columns wide on pushed to the right by 5-columns.</span>
                </div>
                <div class="col s5 pull-s7 grid-example">
                  <span style="font-size: 14px;">5-columns wide pulled to the left by 7-columns.</span>
                </div>
              </div>
            </div>
          </div>
          <div id="html-pull-push">
            <pre><code class="language-markup">
  &lt;div class="row">
    &lt;div class="col s7 push-s5">&lt;span class="flow-text">This div is 7-columns wide on pushed to the right by 5-columns.&lt;/span>&lt;/div>
    &lt;div class="col s5 pull-s7">&lt;span class="flow-text">5-columns wide pulled to the left by 7-columns.&lt;/span>&lt;/div>
  &lt;/div>
  </code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Creating Layouts-->
  <div class="row">
    <div class="col s12">
      <div id="creating-layouts" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Creating Layouts</h4>
              </div>
              <div class="col s12 m6 l2">
                <ul class="tabs">
                  <li class="tab col s6 p-0"><a class="active p-0" href="#view-layouts">View</a></li>
                  <li class="tab col s6 p-0"><a class="p-0" href="#html-layouts">Html</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-layouts">
            <div class="row">
              <div class="col s12">
                <p>Here we will show you how to create some commonly used layouts with our grid system. Hopefully these
                  will get you more comfortable with laying out elements. To keep these demos simple, the ones here
                  will not be responsive.</p>
              </div>
              <div class="col s12">
                <div class="card-panel">
                  <div class="row">
                    <div class="col s12 m6">
                      <h4>Section</h4>
                      <p>The section class is used for simple top and bottom padding. Just add the <code
                          class=" language-markup">section</code>
                        class to your div's containing large blocks of content.</p>
                    </div>
                    <div class="col s12 m6">
                      <h4>Divider</h4>
                      <p>Dividers are 1 pixel lines that help break up your content. Just add the <code
                          class=" language-markup">divider</code>
                        to a div in between your content.</p>
                    </div>
                  </div>
                  <!--Sections and Dividers-->
                  <h4 class="header">Example Sections and Dividers</h4>
                  <div class="divider"></div>
                  <div class="section">
                    <h5>Section 1</h5>
                    <p>Stuff</p>
                  </div>
                  <div class="divider"></div>
                  <div class="section">
                    <h5>Section 2</h5>
                    <p>Stuff</p>
                  </div>
                  <div class="divider"></div>
                  <div class="section">
                    <h5>Section 3</h5>
                    <p>Stuff</p>
                  </div>
                  <div class="divider"></div>
                </div>
              </div>
            </div>
          </div>
          <div id="html-layouts">
            <pre><code class="language-markup">
  &lt;div class="divider">&lt;/div>
    &lt;div class="section">
      &lt;h5>Section 1&lt;/h5>
      &lt;p>Stuff&lt;/p>
    &lt;/div>
    &lt;div class="divider">&lt;/div>
    &lt;div class="section">
      &lt;h5>Section 2&lt;/h5>
      &lt;p>Stuff&lt;/p>
    &lt;/div>
    &lt;div class="divider">&lt;/div>
    &lt;div class="section">
      &lt;h5>Section 3&lt;/h5>
      &lt;p>Stuff&lt;/p>
  &lt;/div>
  </code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Example Promotion Table-->
  <div class="row">
    <div class="col s12">
      <div id="example-promotion" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Example Promotion Table</h4>
              </div>
              <div class="col s12 m6 l2">
                <ul class="tabs">
                  <li class="tab col s6 p-0"><a class="active p-0" href="#view-tabs">View</a></li>
                  <li class="tab col s6 p-0"><a class="p-0" href="#html-tabs">Html</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-tabs">
            <div class="row">
              <div class="col s12">
                <p>If we want 3 divs that are equal size, we define the divs with a width of 4-columns, 4+4+4 = 12,
                  which nicely adds up to 12. Inside those divs, we can put our content. Take our front page content
                  for example. We've modified it slightly for the sake of this example.</p>
              </div>
              <div class="col s12">
                <div class="card-panel mb-3">
                  <div class="row">
                    <div class="col s12 m4 l4">
                      <div class="center promo promo-example">
                        <i class="material-icons">flash_on</i>
                        <p class="flow-text">Speeds up development</p>
                        <p class="light center">We did most of the heavy lifting for you to provide a default stylings
                          that incorporate our custom components.</p>
                      </div>
                    </div>
                    <div class="col s12 m4 l4">
                      <div class="center promo promo-example">
                        <i class="material-icons">group</i>
                        <p class="flow-text">User Experience Focused</p>
                        <p class="light center">By utilizing elements and principles of Material Design, we were able
                          to create a framework that focuses on User Experience.</p>
                      </div>
                    </div>
                    <div class="col s12 m4 l4">
                      <div class="center promo promo-example">
                        <i class="material-icons">settings</i>
                        <p class="flow-text">Easy to work with</p>
                        <p class="light center">We have provided detailed as well as specific code examples to help new
                          users get started.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="html-tabs">
            <pre><code class="language-markup">
  &lt;div class="row">
    &lt;div class="col s4">
    &lt;!-- Promo Content 1 goes here -->
    &lt;/div>
    &lt;div class="col s4">
    &lt;!-- Promo Content 2 goes here -->
    &lt;/div>
    &lt;div class="col s4">
    &lt;!-- Promo Content 3 goes here -->
    &lt;/div>
  &lt;/div>
  </code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Example Side Navigation Layout-->
  <div class="row">
    <div class="col s12">
      <div id="navigation-layout" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Example Side Navigation Layout</h4>
              </div>
              <div class="col s12 m6 l2">
                <ul class="tabs">
                  <li class="tab col s6 p-0"><a class="active p-0" href="#view-navigation">View</a></li>
                  <li class="tab col s6 p-0"><a class="p-0" href="#html-navigation">Html</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-navigation">
            <div class="row">
              <div class="col s12">
                <p>You can see how easy it is to create layouts using the grid system. Just remember to make sure your
                  column numbers add up to 12 for a even layout</p>
              </div>
              <div class="col s12">
                <div class="row">
                  <div class="col s12">
                    <div class="browser-window">
                      <div class="top-bar">
                        <div class="circles">
                          <div class="close-circle circle"></div>
                          <div class="minimize-circle circle"></div>
                          <div class="maximize-circle circle"></div>
                        </div>
                      </div>
                      <div class="content">
                        <div class="row">
                          <div class="site-layout-example-top col s12">
                            <!-- <p class="flat-text-logo"></p> -->
                          </div>
                          <div class="site-layout-example-left col s3">
                            <p class="flat-text-header"></p>
                            <p class="flat-text"></p>
                            <p class="flat-text"></p>
                          </div>
                          <div class="site-layout-example-right col s9">
                            <p class="flat-text"></p>
                            <p class="flat-text"></p>
                            <p class="flat-text"></p>
                            <p class="flat-text"></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="html-navigation">
            <pre><code class="language-markup">
  &lt;!-- Navbar goes here -->
  &lt;!-- Page Layout here -->
  &lt;div class="row">
    &lt;div class="col s3">
    &lt;!-- Grey navigation panel -->
    &lt;/div>
    &lt;div class="col s9">
    &lt;!-- Teal page content  -->
    &lt;/div>
  &lt;/div>
  </code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Creating Responsive Layouts-->
  <div class="row">
    <div class="col s12 m12 l12">
      <div id="creating-responsive-layouts" class="card card-default">
        <div class="card-content">
          <h4 class="card-title">Creating Responsive Layouts</h4>
          <div class="row">
            <div class="col s12">
              <p>Above we showed you how to layout elements using our grid system. Now we'll show you how to design
                your layouts so that they look great on all screen sizes.</p>
            </div>
            <div class="col s12">
              <table class="highlight responsive-table">
                <thead>
                  <tr>
                    <th>Type</th>
                    <th data-field="id">Mobile Devices
                      <br>&lt;= 600px</th>
                    <th data-field="name">Tablet Devices
                      <br>&gt; 600px</th>
                    <th data-field="price">Desktop Devices
                      <br>&gt; 992px</th>
                    <th data-field="price">Large Desktop Devices
                      <br>&gt; 1200px</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <strong>Class Prefix</strong>
                    </td>
                    <td><code class="language-markup">.s</code></td>
                    <td><code class="language-markup">.m</code></td>
                    <td><code class="language-markup">.l</code></td>
                    <td><code class="language-markup">.xl</code></td>
                  </tr>
                  <tr>
                    <td>
                      <strong>Container Width</strong>
                    </td>
                    <td>90%</td>
                    <td>85%</td>
                    <td>70%</td>
                    <td>70%</td>
                  </tr>
                  <tr>
                    <td>
                      <strong>Number of Columns</strong>
                    </td>
                    <td>12</td>
                    <td>12</td>
                    <td>12</td>
                    <td>12</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Creating Responsive Layouts-->
  <div class="row">
    <div class="col s12">
      <div id="adding-responsiveness" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Adding Responsiveness</h4>
              </div>
              <div class="col s12 m6 l2">
                <ul class="tabs">
                  <li class="tab col s6 p-0"><a class="active p-0" href="#view-adding">View</a></li>
                  <li class="tab col s6 p-0"><a class="p-0" href="#html-adding">Html</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-adding">
            <div class="row">
              <div class="col s12">
                <p>In the previous examples, we only defined the size for small screens using <code
                    class=" language-markup">"col
                    s12"</code>. This is fine if we want a fixed layout since the rules propogate upwards. By just
                  saying
                  s12, we are essentially saying
                  <code class=" language-markup">"col s12 m12 l12"</code>. But by explicitly defining the size we can
                  make our website more responsive.</p>
              </div>
              <div class="col s12">
                <div class="grid-example col s12 teal lighten-2">
                  <span class="flow-text">I am always full-width (col s12)</span>
                </div>
                <div class="grid-example col s12 m6 teal lighten-2">
                  <span class="flow-text">I am full-width on mobile (col s12 m6)</span>
                </div>
              </div>
            </div>
          </div>
          <div id="html-adding">
            <pre><code class="language-markup">
  &lt;div class="row">
    &lt;div class="grid-example col s12">&lt;span class="flow-text">I am always full-width (col s12)&lt;/span>&lt;/div>
    &lt;div class="grid-example col s12 m6">&lt;span class="flow-text">I am full-width on mobile (col s12 m6)&lt;/span>&lt;/div>
  &lt;/div>
  </code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Responsive Side Navigation Layout-->
  <div class="row">
    <div class="col s12">
      <div id="responsive-side" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">Responsive Side Navigation Layout</h4>
              </div>
              <div class="col s12 m6 l2">
                <ul class="tabs">
                  <li class="tab col s6 p-0"><a class="active p-0" href="#view-side-navigation">View</a></li>
                  <li class="tab col s6 p-0"><a class="p-0" href="#html-side-navigation">Html</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-side-navigation">
            <div class="row">
              <div class="col s12">
                <p>In this example below, we take the same layout from above, but we make it responsive by defining how
                  many columns the div should take up on each screen size. Try resizing your browser and watch the
                  layout change below.</p>
              </div>
              <div class="col s12">
                <div class="row">
                  <div class="col s12">
                    <div class="browser-window">
                      <div class="top-bar">
                        <div class="circles">
                          <div class="close-circle circle"></div>
                          <div class="minimize-circle circle"></div>
                          <div class="maximize-circle circle"></div>
                        </div>
                      </div>
                      <div class="content">
                        <div class="row">
                          <div class="site-layout-example-top col s12">
                            <!-- <p class="flat-text-logo"></p> -->
                          </div>
                          <div class="site-layout-example-left col s12 m4 l3">
                            <p class="flat-text-header"></p>
                            <p class="flat-text"></p>
                            <p class="flat-text"></p>
                          </div>
                          <div class="site-layout-example-right col s12 m8 l9">
                            <p class="flat-text"></p>
                            <p class="flat-text"></p>
                            <p class="flat-text"></p>
                            <p class="flat-text"></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="html-side-navigation">
            <pre><code class="language-markup">
  &lt;!-- Navbar goes here -->
    &lt;!-- Page Layout here -->
    &lt;div class="row">
    &lt;div class="col s12 m4 l3"> &lt;!-- Note that "m4 l3" was added -->
    &lt;!-- Grey navigation panel
        This content will be:
    3-columns-wide on large screens,
    4-columns-wide on medium screens,
    12-columns-wide on small screens  -->
    &lt;/div>
    &lt;div class="col s12 m8 l9"> &lt;!-- Note that "m8 l9" was added -->
    &lt;!-- Teal page content
        This content will be:
    9-columns-wide on large screens,
    8-columns-wide on medium screens,
    12-columns-wide on small screens  -->
    &lt;/div>
  &lt;/div>
  </code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--More Responsive Grid Examples-->
  <div class="row">
    <div class="col s12">
      <div id="grid-examples" class="card card-tabs">
        <div class="card-content">
          <div class="card-title">
            <div class="row">
              <div class="col s12 m6 l10">
                <h4 class="card-title">More Responsive Grid Examples</h4>
              </div>
              <div class="col s12 m6 l2">
                <ul class="tabs">
                  <li class="tab col s6 p-0"><a class="active p-0" href="#view-grid-examples">View</a></li>
                  <li class="tab col s6 p-0"><a class="p-0" href="#html-grid-examples">Html</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="view-grid-examples">
            <div class="row">
              <div class="col s12">
                <div class="row">
                  <div class="col s12">
                    <div class="col grid-example s12 blue lighten-1">
                      <span class="flow-text">s12</span>
                    </div>
                    <div class="col grid-example s12 m4 l2 teal lighten-1">
                      <span class="flow-text">s12 m4 l2</span>
                    </div>
                    <div class="col grid-example s12 m4 l8 teal lighten-1">
                      <span class="flow-text">s12 m4 l8</span>
                    </div>
                    <div class="col grid-example s12 m4 l2 teal lighten-1">
                      <span class="flow-text">s12 m4 l2</span>
                    </div>
                    <div class="col grid-example s12 m6 l3 purple lighten-3">
                      <span class="flow-text">s12 m6 l3</span>
                    </div>
                    <div class="col grid-example s12 m6 l3 purple lighten-3">
                      <span class="flow-text">s12 m6 l3</span>
                    </div>
                    <div class="col grid-example s12 m6 l3 purple lighten-3">
                      <span class="flow-text">s12 m6 l3</span>
                    </div>
                    <div class="col grid-example s12 m6 l3 purple lighten-3">
                      <span class="flow-text">s12 m6 l3</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="html-grid-examples">
            <pre><code class="language-markup col s12">
  &lt;div class="row">
    &lt;div class="col s12">&lt;p>s12&lt;/p>&lt;/div>
    &lt;div class="col s12 m4 l2">&lt;p>s12 m4&lt;/p>&lt;/div>
    &lt;div class="col s12 m4 l8">&lt;p>s12 m4&lt;/p>&lt;/div>
    &lt;div class="col s12 m4 l2">&lt;p>s12 m4&lt;/p>&lt;/div>
    &lt;/div>
    &lt;div class="row">
    &lt;div class="col s12 m6 l3">&lt;p>s12 m6 l3&lt;/p>&lt;/div>
    &lt;div class="col s12 m6 l3">&lt;p>s12 m6 l3&lt;/p>&lt;/div>
    &lt;div class="col s12 m6 l3">&lt;p>s12 m6 l3&lt;/p>&lt;/div>
    &lt;div class="col s12 m6 l3">&lt;p>s12 m6 l3&lt;/p>&lt;/div>
  &lt;/div>
  </code></pre>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('page-script'); ?>
<script src="<?php echo e(asset('js/scripts/css-grid.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/materialize-update/resources/views/pages/css-grid.blade.php ENDPATH**/ ?>