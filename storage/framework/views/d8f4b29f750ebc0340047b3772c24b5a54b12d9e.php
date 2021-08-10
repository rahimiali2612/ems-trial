<?php $__env->startSection('title','Timeline Page'); ?>


<?php $__env->startSection('page-style'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/pages/page-timeline.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="section">
  <!-- timeline -->
  <ul class="timeline">
    <li>
      <div class="timeline-badge blue">
        <a class="tooltipped" data-position="top" data-tooltip="Sep 20 2019"><i
            class="material-icons white-text">ac_unit</i></a>
      </div>
      <div class="timeline-panel">
        <div class="card m-0 hoverable" id="profile-card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator responsive-img" src="<?php echo e(asset('images/gallery/28.png')); ?>" alt="user bg" />
          </div>
          <div class="card-content">
            <img src="<?php echo e(asset('images/avatar/avatar-7.png')); ?>" alt=""
              class="circle responsive-img activator card-profile-image orange padding-1" />
            <a class="btn-floating activator btn-move-up waves-effect waves-light red accent-2 z-depth-4 right">
              <i class="material-icons">edit</i>
            </a>
            <h5 class="card-title activator grey-text text-darken-4 mt-1">Roger Waters</h5>
            <p><i class="material-icons profile-card-i">perm_identity</i> Project Manager</p>
            <p><i class="material-icons profile-card-i">perm_phone_msg</i> +1 (612) 222 8989</p>
            <p><i class="material-icons profile-card-i">email</i> yourmail@domain.com</p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Roger Waters <i class="material-icons right">close</i>
            </span>
            <p>Here is some more information about this card.</p>
            <p><i class="material-icons">perm_identity</i> Project Manager</p>
            <p><i class="material-icons">perm_phone_msg</i> +1 (612) 222 8989</p>
            <p><i class="material-icons">email</i> yourmail@domain.com</p>
            <p><i class="material-icons">cake</i> 18th June 1990</p>
            <p></p>
            <p><i class="material-icons">airplanemode_active</i> BAR - AUS</p>
            <p></p>
          </div>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge cyan">
        <a class="tooltipped" data-position="top" data-tooltip="Sep 18 2019"><i
            class="material-icons white-text">language</i></a>
      </div>
      <div class="timeline-panel">
        <div class="card m-0 hoverable">
          <div class="card-content">
            <div class="card-header pb-1">
              <div class="avatar mr-2">
                <img src="<?php echo e(asset('images/avatar/avatar-1.png')); ?>" alt="avatar-1.png"
                  class="responsive-img border-radius-4" width="38">
              </div>
              <div class="card-text">
                <h6 class="m-0">Portfolio project work</h6>
                <small>5 hour ago</small>
              </div>
            </div>
            <div class="divider"></div>
            <div class="card-image waves-effect waves-block waves-light mt-1">
              <img class="responsive-img " src="<?php echo e(asset('images/gallery/profile-bg.png')); ?>" alt="28.png">
            </div>
            <p class="card-text mt-1">
              Nullam facilisis fermentum aliquam. Suspendisse ornare dolor vitae libero hendrerit auctor lacinia a
              ligula.
              Curabitur elit tellus, porta ut orci sed, fermentum bibendum nisi.
            </p>
          </div>
          <!-- card action -->
          <div class="card-action">
            <a href="#" class="m-0"><i class="material-icons">favorite_border</i></a>
            <span class="ml-3 vertical-align-top">Like</span>
            <a href="#" class="mr-0 ml-3"><i class="material-icons">chat_bubble_outline</i></a>
            <span class="ml-3 vertical-align-top">Comment</span>
            <a href="#" class="mr-0 ml-3"><i class="material-icons">share</i></a>
            <span class="ml-3 vertical-align-top">Share</span>
          </div>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge red">
        <a class="tooltipped" data-position="top" data-tooltip="Sep 02 2019"><i
            class="material-icons white-text">laptop_mac</i></a>
      </div>
      <div class="timeline-panel">
        <div class="card m-0 hoverable">
          <div class="card-content">
            <div class="card-img">
              <img src="<?php echo e(asset('images/gallery/44.jpg')); ?>" alt="" class="responsive-img">
            </div>
            <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris,
              paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé
              pra.</p>
          </div>
          <div class="card-action">
            <a><i class="material-icons mr-1">favorite_border</i></a>
            <a><i class="material-icons">share</i></a>
          </div>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge green">
        <a class="tooltipped" data-position="top" data-tooltip="Aug 19 2019"> <i
            class="material-icons white-text">mail_outline</i></a>
      </div>
      <div class="timeline-panel">
        <div class="card-panel hoverable border-radius-6 m-0 card-animation-1">
          <img class="responsive-img border-radius-4 z-depth-4 image-n-margin" src="<?php echo e(asset('images/gallery/48.jpg')); ?>"
            alt="" />
          <h6><a href="#" class="mt-5">Festivals</a></h6>
          <p>Fashion is a popular style, especially in clothing, footwear, lifestyle, accessories,
            makeup,
            hairstyle and
            body.</p>
          <div class="row mt-4">
            <div class="col s2">
              <a href="#"><img src="<?php echo e(asset('images/user/9.jpg')); ?>" alt="" width="40"
                  class="circle responsive-img mr-3" /></a>
            </div>
            <a href="#">
              <div class="col s3 p-0 mt-1"><span class="pt-2">Taniya</span></div>
            </a>
            <div class="col s7 mt-1 right-align">
              <a href="#"><span class="material-icons">favorite_border</span></a>
              <span class="ml-3 vertical-align-top">340</span>
              <a href="#"><span class="material-icons ml-10">chat_bubble_outline</span></a>
              <span class="ml-3 vertical-align-top">80</span>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge orange">
        <a class="tooltipped" data-position="top" data-tooltip="Aug 15 2019"><i
            class="material-icons white-text">mic_none</i></a>
      </div>
      <div class="timeline-panel mb-4">
        <div class="card hoverable m-0 ">
          <div class="card-content">
            <div class="card-header">
              <h3 class="mr-1 blue-text">30</h3>
              <div>
                <h6 class="m-0 blue-text">Friends</h6>
                <small>like Your Company</small>
              </div>
            </div>
            <div class="divider mb-2"></div>
            <ul class="horizontal-avatar mb-0">
              <li>
                <img src="<?php echo e(asset('images/avatar/avatar-2.png')); ?>" width="45" class="mr-1 border-radius-4"
                  alt="avatar-2.png">
              </li>
              <li>
                <img src="<?php echo e(asset('images/avatar/avatar-3.png')); ?>" width="45" class="mr-1 border-radius-4"
                  alt="avatar-3.png">
              </li>
              <li>
                <img src="<?php echo e(asset('images/avatar/avatar-4.png')); ?>" width="45" class="mr-1 border-radius-4"
                  alt="avatar-4.png">
              </li>
              <li>
                <img src="<?php echo e(asset('images/avatar/avatar-1.png')); ?>" width="45" class="mr-1 border-radius-4"
                  alt="avatar-4.png">
              </li>
              <li>
                <img src="<?php echo e(asset('images/avatar/avatar-6.png')); ?>" width="45" class="mr-1 border-radius-4"
                  alt="avatar-6.png">
              </li>
              <li>
                <img src="<?php echo e(asset('images/avatar/avatar-7.png')); ?>" width="45" class="mr-1 border-radius-4"
                  alt="avatar-7.png">
              </li>
              <li>
                <img src="<?php echo e(asset('images/avatar/avatar-9.png')); ?>" width="45" class="mr-1 border-radius-4"
                  alt="avatar-9.png">
              </li>
              <li>
                <img src="<?php echo e(asset('images/avatar/avatar-8.png')); ?>" width="45" class="mr-1 border-radius-4"
                  alt="avatar-8.png">
              </li>
              <li>
                <img src="<?php echo e(asset('images/avatar/avatar-10.png')); ?>" width="45" class="mr-1 border-radius-4"
                  alt="avatar-10.png">
              </li>
              <li>
                <img src="<?php echo e(asset('images/avatar/avatar-11.png')); ?>" width="45" class="mr-1 border-radius-4"
                  alt="avatar-11.png">
              </li>
              <li>
                <img src="<?php echo e(asset('images/avatar/avatar-12.png')); ?>" width="45" class="mr-1 border-radius-4"
                  alt="avatar-12.png">
              </li>
            </ul>
          </div>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge yellow">
        <a class="tooltipped" data-position="top" data-tooltip="Aug 15 2019"><i
            class="material-icons white-text">play_arrow</i></a>
      </div>
      <div class="timeline-panel">
        <div class="card m-0 hoverable">
          <div class="card-content">
            <div class="card-text">
              <p class="flow-text">
                10:00 Webshop mockups discussions
              </p>
              <a href="#" class="display-flex">
                <i class="material-icons mr-1">location_on</i> <span> Skype for Bussiness</span>
              </a>
            </div>
            <div class="card-text display-flex mt-2">
              <span class="flow-text mr-1">with</span>
              <a href="" class="mr-1">
                <img src="<?php echo e(asset('images/avatar/avatar-10.png')); ?>" class="circle" width="38" alt="">
              </a>
              <a href="" class="mr-1">
                <img src="<?php echo e(asset('images/avatar/avatar-11.png')); ?>" class="circle" width="38" alt="">
              </a>
              <a href="" class="mr-1">
                <img src="<?php echo e(asset('images/avatar/avatar-12.png')); ?>" class="circle" width="38" alt="">
              </a>
              <a href="" class="mr-1">
                <img src="<?php echo e(asset('images/avatar/avatar-13.png')); ?>" class="circle" width="38" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge teal">
        <a class="tooltipped" data-position="top" data-tooltip="May 10 2019"><i
            class="material-icons white-text">phone_iphone</i></a>
      </div>
      <div class="timeline-panel">
        <div class="card-panel hoverable border-radius-6 m-0 card-animation-1">
          <img class="responsive-img border-radius-4 z-depth-4 image-n-margin" src="<?php echo e(asset('images/gallery/46.jpg')); ?>"
            alt="" />
          <h6><a href="#" class="mt-5">Twitter Brings Its 'Data Saver'</a></h6>
          <p>Microblogging site Twitter has rolled out its latest update for Android and iOS users
            with the "data
            saver"
            twitter.
          </p>
          <div class="row mt-4">
            <div class="col s2">
              <a href="#"><img src="<?php echo e(asset('images/user/8.jpg')); ?>" width="40" alt="news"
                  class="circle responsive-img mr-3" /></a>
            </div>
            <a href="#">
              <div class="col s3 p-0 mt-1"><span class="pt-2">Emma</span></div>
            </a>
            <div class="col s7 mt-1 right-align">
              <a href="#"><span class="material-icons">favorite_border</span></a>
              <span class="ml-3 vertical-align-top">234</span>
              <a href="#"><span class="material-icons ml-10">chat_bubble_outline</span></a>
              <span class="ml-3 vertical-align-top">45</span>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge deep-orange">
        <a class="tooltipped" data-position="top" data-tooltip="Feb 15 2019"><i
            class="material-icons white-text">card_travel</i></a>
      </div>
      <div class="timeline-panel">
        <div class="card hoverable">
          <div class="card-content">
            <p>
              I am a very simple card. I am good at containing small bits of information.
            </p>
          </div>
          <div class="card-tabs">
            <ul class="tabs tabs-fixed-width">
              <li class="tab"><a href="#test4">Tab 1</a></li>
              <li class="tab"><a class="active" href="#test5">Tab 2</a></li>
              <li class="tab"><a href="#test6">Tab 3</a></li>
            </ul>
          </div>
          <div class="card-content grey lighten-4">
            <div id="test4">
              <div class="card-img">
                <img src="<?php echo e(asset('images/gallery/breadcrumb-bg.jpg')); ?>" class="responsive-img" alt="">
              </div>
            </div>
            <div id="test5">
              <h6 class="center"> social innovation </h6>
              Empower change-makers; a challenges and opportunities collective impact
              collaborate.
            </div>
            <div id="test6">Revolutionary, expose the truth shine benefit corporation, activate
              incubator revolutionary co-create.</div>
          </div>
        </div>
      </div>
    </li>
    <li class="clearfix" style="float: none;"></li>
  </ul>
  <!-- / timeline -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/materialize-admin/materialize-html-laravel-template/resources/views/pages/page-timeline.blade.php ENDPATH**/ ?>