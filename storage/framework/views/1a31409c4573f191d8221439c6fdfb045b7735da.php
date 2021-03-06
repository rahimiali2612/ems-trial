<?php $__env->startSection('title','Alerts'); ?>


<?php $__env->startSection('content'); ?>
<div class="section">
  <div class="card">
    <div class="card-content">
      <p class="caption"><a href="ui-alerts" target="_blank">Alerts</a> are simple materialize cars that provide
        contextual feedback messages for typical user actions with the handful of available and flexible alert
        messages.</p>
    </div>
  </div>
  <!--ui-alert-->
  <div class="row">
    <div class="col s12 m12 l12">
      <div id="ui-alert" class="card card-default">
        <div class="card-content">
          <div class="row">
            <!--SIMPLE-->
            <div class="col s12 m4 l4">
              <p>
                <strong>SIMPLE</strong>
              </p>
              <p>Add materialize lighten color contextual class.</p>
              <div class="card-alert card purple lighten-5">
                <div class="card-content purple-text">
                  <p>NEWS : You have done 5 actions.</p>
                </div>
              </div>
              <div class="card-alert card cyan lighten-5">
                <div class="card-content cyan-text">
                  <p>INFO : You have 18 messages</p>
                </div>
                <button type="button" class="close cyan-text" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="card-alert card green lighten-5">
                <div class="card-content green-text">
                  <p>SUCCESS : The page has been added.</p>
                </div>
                <button type="button" class="close green-text" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="card-alert card red lighten-5">
                <div class="card-content red-text">
                  <p>DANGER : The daily report has failed</p>
                </div>
                <button type="button" class="close red-text" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="card-alert card orange lighten-5">
                <div class="card-content orange-text">
                  <p>WARNING : Bandwidth limit exceeded</p>
                </div>
                <button type="button" class="close orange-text" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
            </div>
            <!--DARK-->
            <div class="col s12 m4 l4">
              <p>
                <strong>DARK</strong>
              </p>
              <p>Add materialize base color contextual class.</p>
              <div class="card-alert card purple">
                <div class="card-content white-text">
                  <p>NEWS : You have done 5 actions.</p>
                </div>
              </div>
              <div class="card-alert card cyan">
                <div class="card-content white-text">
                  <p>INFO : You have 18 messages</p>
                </div>
                <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="card-alert card green">
                <div class="card-content white-text">
                  <p>SUCCESS : The page has been added.</p>
                </div>
                <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="card-alert card red">
                <div class="card-content white-text">
                  <p>DANGER : The daily report has failed</p>
                </div>
                <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="card-alert card orange">
                <div class="card-content white-text">
                  <p>WARNING : Bandwidth limit exceeded</p>
                </div>
                <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
            </div>
            <!--WITH ICON-->
            <div class="col s12 m4 l4">
              <p>
                <strong>GRADIENT BG WITH ICON</strong>
              </p>
              <p>Add materialize icons class.</p>
              <div class="card-alert card gradient-45deg-purple-deep-orange">
                <div class="card-content white-text">
                  <p>
                    <i class="material-icons">notifications</i> NEWS : You have done 5 actions.</p>
                </div>
              </div>
              <div class="card-alert card gradient-45deg-light-blue-cyan">
                <div class="card-content white-text">
                  <p>
                    <i class="material-icons">info_outline</i> INFO : You have 18 messages</p>
                </div>
                <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="card-alert card gradient-45deg-green-teal">
                <div class="card-content white-text">
                  <p>
                    <i class="material-icons">check</i> SUCCESS : The page has been added.</p>
                </div>
                <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="card-alert card gradient-45deg-red-pink">
                <div class="card-content white-text">
                  <p>
                    <i class="material-icons">error</i> DANGER : The daily report has failed</p>
                </div>
                <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="card-alert card gradient-45deg-amber-amber">
                <div class="card-content white-text">
                  <p>
                    <i class="material-icons">warning</i> WARNING : Bandwidth limit exceeded</p>
                </div>
                <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col s12 m12 l12">
      <div id="ui-alert-title" class="card card-default">
        <div class="card-content">
          <div class="row">
            <!--DARK-->
            <div class="col s12 m4 l4">
              <p>
                <strong>WITH TITLE</strong>
              </p>
              <p>Add title class.</p>
              <div class="card-alert card cyan lighten-5">
                <div class="card-content cyan-text darken-1">
                  <span class="card-title cyan-text darken-1">Some Message</span>
                  <p>Lorem ipsum Minim ad pariatur eiusmod ea ut nulla aliqua est quis id dolore minim voluptate.</p>
                </div>
                <button type="button" class="close cyan-text" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="card-alert card cyan lighten-5">
                <div class="card-content cyan-text darken-1">
                  <span class="card-title cyan-text darken-1">Some Message</span>
                  <p>Lorem ipsum Minim ad pariatur eiusmod ea ut nulla aliqua est quis id dolore minim voluptate.</p>
                </div>
                <button type="button" class="close cyan-text" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="card-alert card cyan">
                <div class="card-content white-text">
                  <span class="card-title white-text darken-1">Some Message</span>
                  <p>Lorem ipsum Minim ad pariatur eiusmod ea ut nulla aliqua est quis id dolore minim voluptate.</p>
                </div>
                <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="card-alert card green">
                <div class="card-content white-text">
                  <span class="card-title white-text darken-1">
                    <i class="material-icons">notifications</i> Some Message</span>
                  <p>Lorem ipsum Minim ad pariatur eiusmod ea ut nulla aliqua est quis id dolore minim voluptate.</p>
                </div>
                <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
            </div>
            <!--WITH Title & ICON-->
            <div class="col s12 m4 l4">
              <p>
                <strong>WITH ACTION BUTTONS</strong>
              </p>
              <p>Add materialize button for actions.</p>
              <div class="card-alert card pink lighten-5">
                <div class="card-content pink-text darken-1">
                  <span class="card-title pink-text darken-1">Some Message</span>
                  <p>Lorem ipsum Minim ad pariatur eiusmod ea ut nulla aliqua est quis id dolore minim voluptate.</p>
                </div>
                <div class="card-action pink lighten-4">
                  <a href="#" class="pink-text">Ok</a>
                  <a href="#" class="pink-text">Cancel</a>
                </div>
                <button type="button" class="close pink-text" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="card-alert card cyan">
                <div class="card-content white-text">
                  <span class="card-title white-text darken-1">Some Message</span>
                  <p>Lorem ipsum Minim ad pariatur eiusmod ea ut nulla aliqua est quis id dolore minim voluptate.</p>
                </div>
                <div class="card-action cyan darken-2">
                  <a class="waves-effect waves-light mb-2 btn white-text">Ok</a>
                  <a class="waves-effect waves-light mb-2 btn white-text">Cancel</a>
                </div>
                <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="card-alert card green">
                <div class="card-content white-text">
                  <span class="card-title white-text darken-1">
                    <i class="material-icons">notifications</i> Some Message</span>
                  <p>Lorem ipsum Minim ad pariatur eiusmod ea ut nulla aliqua est quis id dolore minim voluptate.</p>
                </div>
                <div class="card-action green darken-2">
                  <a class="btn-flat waves-effect purple white-text mb-1">
                    <i class="material-icons left">check</i> Ok</a>
                  <a class="btn-flat btn waves-effect red accent-2 white-text mb-1">
                    <i class="material-icons left">clear</i> Cancel</a>
                </div>
                <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
            </div>
            <!--WITH Avatar-->
            <div class="col s12 m4 l4">
              <p>
                <strong>WITH AVATAR</strong>
              </p>
              <p>Add avatar on alerts.</p>
              <div class="card-alert card cyan lighten-5">
                <div class="card-content cyan-text">
                  <p class="single-alert">
                    <img src="<?php echo e(asset('images/avatar/avatar-2.png')); ?>" alt="avatar"
                      class="alert-circle responsive-img valign profile-image" />
                    <span>You have new task.</span>
                  </p>
                </div>
                <button type="button" class="close cyan-text" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="card-alert card purple">
                <div class="card-content white-text">
                  <p class="single-alert">
                    <img src="<?php echo e(asset('images/avatar/avatar-1.png')); ?>" alt="avatar"
                      class="alert-circle responsive-img valign profile-image" />
                    <span>You have new task.</span>
                  </p>
                </div>
                <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="card-alert card cyan">
                <div class="card-content white-text">
                  <img src="<?php echo e(asset('images/avatar/avatar-3.png')); ?>" alt="avatar"
                    class="alert-circle responsive-img valign profile-image" />
                  <span class="card-title white-text darken-1">Some Message</span>
                  <p>Lorem ipsum Minim ad pariatur eiusmod ea ut nulla aliqua est quis id dolore minim voluptate.</p>
                </div>
                <div class="card-action cyan darken-1">
                  <a href="#" class="white-text">Ok</a>
                  <a href="#" class="white-text">Cancel</a>
                </div>
                <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="card-alert card green">
                <div class="card-content white-text">
                  <img src="<?php echo e(asset('images/avatar/avatar-4.png')); ?>" alt="avatar"
                    class="alert-circle responsive-img valign profile-image" />
                  <span class="card-title white-text darken-1">
                    <i class="material-icons">notifications</i> Some Message</span>
                  <p>Lorem ipsum Minim ad pariatur eiusmod ea ut nulla aliqua est quis id dolore minim voluptate.</p>
                </div>
                <div class="card-action green darken-2">
                  <a class="btn-flat waves-effect purple white-text mb-1">
                    <i class="material-icons left">check</i> Ok</a>
                  <a class="btn-flat btn waves-effect red accent-2 white-text mb-1">
                    <i class="material-icons left">clear</i> Cancel</a>
                </div>
                <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('page-script'); ?>
<script src="<?php echo e(asset('js/scripts/ui-alerts.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/materialize-update/resources/views/pages/ui-alerts.blade.php ENDPATH**/ ?>