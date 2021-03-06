<?php $__env->startSection('title', 'Collapsibles'); ?>


<?php $__env->startSection('content'); ?>
<div class="section">
   <div class="card">
      <div class="card-content">
         <p class="caption">
            Collapsibles are accordion elements that expand when clicked on. They allow you to hide content that is not
            immediately relevant to the user.
         </p>
      </div>
   </div>
   <!--Accordion-->
   <div class="row">
      <div class="col s12">
         <ul class="collapsible collapsible-accordion">
            <li>
               <div class="collapsible-header"><i class="material-icons">mic_none</i> First Header</div>
               <div class="collapsible-body">
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                     et
                     dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                     aliquip
                     ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                     tempor
                     incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                     ullamco
                     laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing
                     elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis
                     nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </p>
               </div>
            </li>
            <li>
               <div class="collapsible-header"><i class="material-icons">cloud_queue</i> Second Header</div>
               <div class="collapsible-body">
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                     et
                     dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                     aliquip
                     ex ea commodo consequat.
                  </p>
               </div>
            </li>
            <li>
               <div class="collapsible-header"><i class="material-icons">adjust</i> Third Header</div>
               <div class="collapsible-body">
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                     et
                     dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                     aliquip
                     ex ea commodo consequat.
                  </p>
               </div>
            </li>
         </ul>
      </div>
   </div>
   <div id="popout" class="row">
      <div class="col s12">
         <h4 class="header">Popout</h4>
         <p>To create a popout collapsible, just add the class <code class="language-markup">popout</code>.</p>
      </div>
      <div class="col s12">
         <ul class="collapsible popout">
            <li class="active">
               <div class="collapsible-header" tabindex="0"><i class="material-icons">filter_drama</i>First</div>
               <div class="collapsible-body" style="display: block;">
                  <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                     labore et
                     dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                     aliquip
                     ex ea commodo consequat.</span>
               </div>
            </li>
            <li class="">
               <div class="collapsible-header" tabindex="0"><i class="material-icons">place</i>Second</div>
               <div class="collapsible-body" style="">
                  <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                     labore et
                     dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                     aliquip
                     ex ea commodo consequat.</span>
               </div>
            </li>
            <li class="">
               <div class="collapsible-header" tabindex="0"><i class="material-icons">whatshot</i>Third</div>
               <div class="collapsible-body" style="">
                  <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                     labore et
                     dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                     aliquip
                     ex ea commodo consequat.</span>
               </div>
            </li>
         </ul>
         <pre><code class="language-markup">
  &lt;ul class="collapsible popout">
      </code></pre>
      </div>
   </div>
   <div id="structure" class="section scrollspy card card-tabs">
      <div class="card-content">
         <div class="card-title">
            <div class="row">
               <div class="col s12 m6 l6">
                  <h4 class="card-title">Structure</h4>
               </div>
               <div class="col s12 m6 l6">
                  <ul class="tabs">
                     <li class="tab col s6 p-0"><a class="p-0" href="#html-collapsible">Html</a></li>
                     <li class="tab col s6 p-0"><a class="p-0" href="#js-collapsible">JS</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div id="html-collapsible">
            <pre><code class="language-markup">
&lt;ul class="collapsible">
   &lt;li>
   &lt;div class="collapsible-header">&lt;i class="material-icons">filter_drama&lt;/i>First&lt;/div>
   &lt;div class="collapsible-body">&lt;span>Lorem ipsum dolor sit amet.&lt;/span>&lt;/div>
   &lt;/li>
   &lt;li>
   &lt;div class="collapsible-header">&lt;i class="material-icons">place&lt;/i>Second&lt;/div>
   &lt;div class="collapsible-body">&lt;span>Lorem ipsum dolor sit amet.&lt;/span>&lt;/div>
   &lt;/li>
   &lt;li>
   &lt;div class="collapsible-header">&lt;i class="material-icons">whatshot&lt;/i>Third&lt;/div>
   &lt;div class="collapsible-body">&lt;span>Lorem ipsum dolor sit amet.&lt;/span>&lt;/div>
   &lt;/li>
&lt;/ul>
          </code></pre>
         </div>
         <div id="js-collapsible">
            <h4 class="header">Initialization</h4>
            <span>Collapsible elements only need initialization if they are added dynamically. You can also pass in
               options
               inside the initialization, however this can be done in the HTML markup as well.</span>
            <pre><code class="language-javascript">
        $(document).ready(function(){
          $('.collapsible').collapsible({
            accordion:true
          });
        });
      </code></pre>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col s12">
         <h4 class="header">Preselected Section</h4>
         <p>
            If you want a collapsible with a preopened section just add the
            <code class=" language-markup">active</code> class to the li of collapsible-header.
         </p>
      </div>
      <div class="col s12">
         <ul class="collapsible collapsible-accordion">
            <li>
               <div class="collapsible-header"><i class="material-icons">blur_circular</i> First Header</div>
               <div class="collapsible-body">
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                     et
                     dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                     aliquip
                     ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                     tempor
                     incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                     ullamco
                     laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing
                     elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis
                     nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </p>
               </div>
            </li>
            <li class="active">
               <div class="collapsible-header"><i class="material-icons">details</i> Preselected Section</div>
               <div class="collapsible-body">
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                     et
                     dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                     aliquip
                     ex ea commodo consequat.
                  </p>
               </div>
            </li>
            <li>
               <div class="collapsible-header"><i class="material-icons">filter_center_focus</i> Third Header</div>
               <div class="collapsible-body">
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                     et
                     dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                     aliquip
                     ex ea commodo consequat.
                  </p>
               </div>
            </li>
         </ul>
         <pre><code class="language-markup">
          &lt;li class=&quot;active&quot;&gt;
          &lt;div class=&quot;collapsible-header&quot;&gt;
            &lt;i class=&quot;material-icons&quot;&gt;details&lt;/i&gt; Preselected Section&lt;/div&gt;
            &lt;/li&gt;
      </code></pre>
      </div>
   </div>
   <div id="options" class="scrollspy section">
      <h4>Options</h4>
      <span>You can customize the behavior of each collapsible using these options. For example, you can call a custom
         function
         to run when a collapsbile is opened or closed. The function passes the
         <span class="language-markup">li</span> element that was opened or closed as an argument.</span>
      <pre><code class="language-javascript">
    $('.collapsible').collapsible({
      accordion: false, // A setting that changes the collapsible behavior to expandable instead of the default accordion style
      onOpen: function(el) { alert('Open'); }, // Callback for Collapsible open
      onClose: function(el) { alert('Closed'); } // Callback for Collapsible close
    });
  </code></pre>
   </div>
   <div id="methods" class="scrollspy section">
      <h4>Methods</h4>
      <span>You can programmatically open and close collapsibles through these methods. The second parameter is the
         0-based
         index of the collapsible you want to open.</span>
      <pre><code class="language-javascript">
    // Open
    $('.collapsible').collapsible('open', 0);
    // Close
    $('.collapsible').collapsible('close', 0);
    // Destroy
    $('.collapsible').collapsible('destroy');
  </code></pre>
   </div>
   <!--Accordion Options-->
   <div class="divider"></div>
   <div id="accordion-options">
      <!--Accordion Options-->
      <div class="divider"></div>
      <div class="col s12">
         <div>
            <h4 class="header">Options</h4>
            <p class="caption">
               There are two ways a collapsible can behave. It can either allow multiple sections to stay open, or it
               can
               only
               allow one section to stay open at a time, which is called an accordion. See below for a demo of each type
            </p>
            <div class="row">
               <div class="col s12">
                  <h4 class="header">Accordion</h4>
                  <p>
                     This is default behavior, but you can explicitly set it by setting the
                     <code class=" language-markup"> accordion: true</code> option while initializing Collapse in Js.
                  </p>
               </div>
               <div class="col s12">
                  <ul class="collapsible collapsible-accordion">
                     <li>
                        <div class="collapsible-header"><i class="material-icons">pie_chart_outlined</i> First Header
                        </div>
                        <div class="collapsible-body">
                           <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                              ut
                              labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                              laboris
                              nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur
                              adipiscing
                              elit,
                              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                              veniam,
                              quis
                              nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum
                              dolor
                              sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                              dolore
                              magna
                              aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                              ex
                              ea
                              commodo consequat.
                           </p>
                        </div>
                     </li>
                     <li>
                        <div class="collapsible-header"><i class="material-icons">border_all</i> Second Header</div>
                        <div class="collapsible-body">
                           <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                              ut
                              labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                              laboris
                              nisi ut aliquip ex ea commodo consequat.
                           </p>
                        </div>
                     </li>
                     <li>
                        <div class="collapsible-header"><i class="material-icons">trending_up</i> Third Header</div>
                        <div class="collapsible-body">
                           <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                              ut
                              labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                              laboris
                              nisi ut aliquip ex ea commodo consequat.
                           </p>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="row">
               <div class="col s12">
                  <h4 class="header">Expandable</h4>
                  <p>
                     Use as an expandable option by setting the
                     <code class=" language-markup">accordion: false</code> option while initializing Collapse in Js.
                  </p>
               </div>
               <div class="col s12">
                  <ul class="collapsible expandable">
                     <li>
                        <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
                        <div class="collapsible-body">
                           <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                              incididunt
                              ut
                              labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                              laboris
                              nisi ut aliquip ex ea commodo consequat.</span>
                        </div>
                     </li>
                     <li>
                        <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
                        <div class="collapsible-body">
                           <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                              incididunt
                              ut
                              labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                              laboris
                              nisi ut aliquip ex ea commodo consequat.</span>
                        </div>
                     </li>
                     <li>
                        <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
                        <div class="collapsible-body">
                           <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                              incididunt
                              ut
                              labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                              laboris
                              nisi ut aliquip ex ea commodo consequat.</span>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="divider"></div>
   <!--Using Color-->
   <div class="row">
      <div class="col s12">
         <div id="using-color">
            <h4 class="header">Using Color</h4>
            <p class="caption">
               This theme has various <a href="<?php echo e(asset('css-color')); ?>" target="_blank">color palette</a> based on the
               material
               design
               base
               colors, you can use any of theme just need to add color class.
            </p>
            <div class="row">
               <div class="col s12">
                  <p>Single color with icons</p>
               </div>
               <div class="col s12">
                  <ul class="collapsible collapsible-accordion">
                     <li>
                        <div class="collapsible-header light-blue light-blue-text text-lighten-5">
                           <i class="material-icons">swap_calls</i> First Header
                        </div>
                        <div class="collapsible-body light-blue lighten-5">
                           <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                              ut
                              labore
                              et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                              nisi
                              ut
                              aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                              sed
                              do
                              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                              nostrud
                              exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor
                              sit
                              amet,
                              consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                              aliqua.
                              Ut
                              enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                              commodo
                              consequat.
                           </p>
                        </div>
                     </li>
                     <li>
                        <div class="collapsible-header light-blue light-blue-text text-lighten-5">
                           <i class="material-icons">filter_list</i> Second Header
                        </div>
                        <div class="collapsible-body light-blue lighten-5">
                           <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                              ut
                              labore
                              et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                              nisi
                              ut
                              aliquip ex ea commodo consequat.
                           </p>
                        </div>
                     </li>
                     <li>
                        <div class="collapsible-header light-blue light-blue-text text-lighten-5">
                           <i class="material-icons">sort</i> Third Header
                        </div>
                        <div class="collapsible-body light-blue lighten-5">
                           <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                              ut
                              labore
                              et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                              nisi
                              ut
                              aliquip ex ea commodo consequat.
                           </p>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col s12">
               <p>Multiple colors with icons</p>
            </div>
            <div class="col s12">
               <ul class="collapsible collapsible-accordion">
                  <li>
                     <div class="collapsible-header purple lightrn-1 white-text">
                        <i class="material-icons">settings_backup_restore</i> First Header
                     </div>
                     <div class="collapsible-body purple lighten-5">
                        <p>
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                           labore
                           et
                           dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                           ut
                           aliquip
                           ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                           eiusmod
                           tempor
                           incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                           exercitation
                           ullamco
                           laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur
                           adipiscing
                           elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                           veniam,
                           quis
                           nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                     </div>
                  </li>
                  <li>
                     <div class="collapsible-header cyan white-text"><i class="material-icons">toll</i> Second Header
                     </div>
                     <div class="collapsible-body cyan lighten-5 lighten-5">
                        <p>
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                           labore
                           et
                           dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                           ut
                           aliquip
                           ex ea commodo consequat.
                        </p>
                     </div>
                  </li>
                  <li>
                     <div class="collapsible-header red accent-2 white-text">
                        <i class="material-icons">timeline</i> Third Header
                     </div>
                     <div class="collapsible-body red lighten-5">
                        <p>
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                           labore
                           et
                           dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                           ut
                           aliquip
                           ex ea commodo consequat.
                        </p>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
         <div class="row">
            <div class="col s12">
               <p>Gradient with icons</p>
            </div>
            <div class="col s12">
               <ul class="collapsible collapsible-accordion">
                  <li>
                     <div class="collapsible-header waves-light gradient-45deg-purple-deep-orange lightrn-1 white-text">
                        <i class="material-icons">settings_backup_restore</i> First Header
                     </div>
                     <div class="collapsible-body purple lighten-5">
                        <p>
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                           labore
                           et
                           dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                           ut
                           aliquip
                           ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                           eiusmod
                           tempor
                           incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                           exercitation
                           ullamco
                           laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur
                           adipiscing
                           elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                           veniam,
                           quis
                           nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                     </div>
                  </li>
                  <li>
                     <div class="collapsible-header gradient-45deg-light-blue-cyan white-text">
                        <i class="material-icons">toll</i> Second Header
                     </div>
                     <div class="collapsible-body cyan lighten-5 lighten-5">
                        <p>
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                           labore
                           et
                           dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                           ut
                           aliquip
                           ex ea commodo consequat.
                        </p>
                     </div>
                  </li>
                  <li>
                     <div class="collapsible-header gradient-45deg-red-pink accent-2 white-text">
                        <i class="material-icons">timeline</i> Third Header
                     </div>
                     <div class="collapsible-body red lighten-5">
                        <p>
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                           labore
                           et
                           dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                           ut
                           aliquip
                           ex ea commodo consequat.
                        </p>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/materialize-update/resources/views/pages/advance-ui-collapsibles.blade.php ENDPATH**/ ?>