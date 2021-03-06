<?php $__env->startSection('title','App Contact'); ?>


<?php $__env->startSection('vendor-style'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendors/flag-icon/css/flag-icon.min.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendors/data-tables/css/jquery.dataTables.min.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('page-style'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/pages/app-sidebar.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/pages/app-contacts.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<!-- Add new contact popup -->
<div class="contact-overlay"></div>
<div style="bottom: 54px; right: 19px;" class="fixed-action-btn direction-top">
  <a class="btn-floating btn-large primary-text gradient-shadow contact-sidebar-trigger" href="#modal1">
    <i class="material-icons">person_add</i>
  </a>
</div>
<!-- Add new contact popup Ends-->

<!-- Sidebar Area Starts -->
<div class="sidebar-left sidebar-fixed">
  <div class="sidebar">
    <div class="sidebar-content">
      <div class="sidebar-header">
        <div class="sidebar-details">
          <h5 class="m-0 sidebar-title"><i class="material-icons app-header-icon text-top">perm_identity</i> Contacts
          </h5>
          <div class="mt-10 pt-2">
            <p class="m-0 subtitle font-weight-700">Total number of contacts</p>
            <p class="m-0 text-muted">1457 Contacts</p>
          </div>
        </div>
      </div>
      <div id="sidebar-list" class="sidebar-menu list-group position-relative animate fadeLeft delay-1">
        <div class="sidebar-list-padding app-sidebar sidenav" id="contact-sidenav">
          <ul class="contact-list display-grid">
            <li class="sidebar-title">Filters</li>
            <li class="active"><a href="javascript:void(0)" class="text-sub"><i class="material-icons mr-2">
                  perm_identity </i> All
                Contact</a></li>
            <li><a href="javascript:void(0)" class="text-sub"><i class="material-icons mr-2"> history </i> Frequent</a>
            </li>
            <li><a href="javascript:void(0)" class="text-sub"><i class="material-icons mr-2"> star_border </i> Starred
                Contacts</a></li>
            <li class="sidebar-title">Options</li>
            <li><a href="javascript:void(0)" class="text-sub"><i class="material-icons mr-2"> keyboard_arrow_down </i>
                Import</a></li>
            <li><a href="javascript:void(0)" class="text-sub"><i class="material-icons mr-2"> keyboard_arrow_up </i>
                Export</a></li>
            <li><a href="javascript:void(0)" class="text-sub"><i class="material-icons mr-2"> print </i> Print</a></li>
            <li class="sidebar-title">Department</li>
            <li><a href="javascript:void(0)" class="text-sub"><i class="purple-text material-icons small-icons mr-2">
                  fiber_manual_record </i> Engineering</a></li>
            <li><a href="javascript:void(0)" class="text-sub"><i class="amber-text material-icons small-icons mr-2">
                  fiber_manual_record </i> Sales</a></li>
            <li><a href="javascript:void(0)" class="text-sub"><i
                  class="light-green-text material-icons small-icons mr-2">
                  fiber_manual_record </i> Support</a></li>
          </ul>
        </div>
      </div>
      <a href="#" data-target="contact-sidenav" class="sidenav-trigger hide-on-large-only"><i
          class="material-icons">menu</i></a>
    </div>
  </div>
</div>
<!-- Sidebar Area Ends -->

<!-- Content Area Starts -->
<div class="content-area content-right">
  <div class="app-wrapper">
    <div class="datatable-search">
      <i class="material-icons mr-2 search-icon">search</i>
      <input type="text" placeholder="Search Contact" class="app-filter" id="global_filter">
    </div>
    <div id="button-trigger" class="card card card-default scrollspy border-radius-6 fixed-width">
      <div class="card-content p-0">
        <table id="data-table-contact" class="display" style="width:100%">
          <thead>
            <tr>
              <th class="background-image-none center-align">
                <label>
                  <input type="checkbox" onClick="toggle(this)" />
                  <span></span>
                </label>
              </th>
              <th>User</th>
              <th>Full Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Favorite</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="center-align contact-checkbox">
                <label class="checkbox-label">
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
              </td>
              <td><span class="avatar-contact avatar-online"><img src="<?php echo e(asset('images/avatar/avatar-1.png')); ?>"
                    alt="avatar"></span></td>
              <td>John</td>
              <td>john@domain.com</td>
              <td>202-555-0119</td>
              <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
              <td><span><i class="material-icons delete">delete_outline</i></span></td>
            </tr>
            <tr>
              <td class="center-align contact-checkbox">
                <label class="checkbox-label">
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
              </td>
              <td><span class="avatar-contact avatar-online"><img src="<?php echo e(asset('images/avatar/avatar-2.png')); ?>"
                    alt="avatar"></span></td>
              <td>Rodolfo</td>
              <td>rodo@domain.com</td>
              <td>202-555-0125</td>
              <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
              <td><span><i class="material-icons delete">delete_outline</i></span></td>
            </tr>
            <tr>
              <td class="center-align contact-checkbox">
                <label class="checkbox-label">
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
              </td>
              <td><span class="avatar-contact avatar-online"><img src="<?php echo e(asset('images/avatar/avatar-3.png')); ?>"
                    alt="avatar"></span></td>
              <td>Marco</td>
              <td>marco@domain.com</td>
              <td>202-555-0177</td>
              <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
              <td><span><i class="material-icons delete">delete_outline</i></span></td>
            </tr>
            <tr>
              <td class="center-align contact-checkbox">
                <label class="checkbox-label">
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
              </td>
              <td><span class="avatar-contact avatar-online"><img src="<?php echo e(asset('images/avatar/avatar-4.png')); ?>"
                    alt="avatar"></span></td>
              <td>Joshua</td>
              <td>jos@domain.com</td>
              <td>202-555-0126</td>
              <td><span class="favorite"><i class="material-icons amber-text"> star_border </i></span></td>
              <td><span><i class="material-icons delete">delete_outline</i></span></td>
            </tr>
            <tr>
              <td class="center-align contact-checkbox">
                <label class="checkbox-label">
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
              </td>
              <td><span class="avatar-contact avatar-online"><img src="<?php echo e(asset('images/avatar/avatar-4.png')); ?>"
                    alt="avatar"></span></td>
              <td>Gene</td>
              <td>gene@domain.com</td>
              <td>202-555-0130</td>
              <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
              <td><span><i class="material-icons delete">delete_outline</i></span></td>
            </tr>
            <tr>
              <td class="center-align contact-checkbox">
                <label class="checkbox-label">
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
              </td>
              <td><span class="avatar-contact avatar-online"><img src="<?php echo e(asset('images/avatar/avatar-5.png')); ?>"
                    alt="avatar"></span></td>
              <td>Oscar</td>
              <td>oscar@domain.com</td>
              <td>+1-202-555-0119</td>
              <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
              <td><span><i class="material-icons delete">delete_outline</i></span></td>
            </tr>
            <tr>
              <td class="center-align contact-checkbox">
                <label class="checkbox-label">
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
              </td>
              <td><span class="avatar-contact avatar-online"><img src="<?php echo e(asset('images/avatar/avatar-6.png')); ?>"
                    alt="avatar"></span></td>
              <td>William</td>
              <td>will@domain.com</td>
              <td>+1-202-555-0125</td>
              <td><span class="favorite"><i class="material-icons amber-text"> star_border </i></span></td>
              <td><span><i class="material-icons delete">delete_outline</i></span></td>
            </tr>
            <tr>
              <td class="center-align contact-checkbox">
                <label class="checkbox-label">
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
              </td>
              <td><span class="avatar-contact avatar-online"><img src="<?php echo e(asset('images/avatar/avatar-7.png')); ?>"
                    alt="avatar"></span></td>
              <td>Dorian</td>
              <td>dori@domain.com</td>
              <td>202-555-0112</td>
              <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
              <td><span><i class="material-icons delete">delete_outline</i></span></td>
            </tr>
            <tr>
              <td class="center-align contact-checkbox">
                <label class="checkbox-label">
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
              </td>
              <td><span class="avatar-contact avatar-online"><img src="<?php echo e(asset('images/avatar/avatar-8.png')); ?>"
                    alt="avatar"></span></td>
              <td>Lester</td>
              <td>les@domain.com</td>
              <td>+1-202-555-0177</td>
              <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
              <td><span><i class="material-icons delete">delete_outline</i></span></td>
            </tr>
            <tr>
              <td class="center-align contact-checkbox">
                <label class="checkbox-label">
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
              </td>
              <td><span class="avatar-contact avatar-online"><img src="<?php echo e(asset('images/avatar/avatar-9.png')); ?>"
                    alt="avatar"></span></td>
              <td>Charles</td>
              <td>name@domain.com</td>
              <td>+1-202-555-0126</td>
              <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
              <td><span><i class="material-icons delete">delete_outline</i></span></td>
            </tr>
            <tr>
              <td class="center-align contact-checkbox">
                <label class="checkbox-label">
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
              </td>
              <td><span class="avatar-contact avatar-online"><img src="<?php echo e(asset('images/avatar/avatar-1.png')); ?>"
                    alt="avatar"></span></td>
              <td>William</td>
              <td>name@domain.com</td>
              <td>+1-202-555-0130</td>
              <td><span class="favorite"><i class="material-icons amber-text"> star_border </i></span></td>
              <td><span><i class="material-icons delete">delete_outline</i></span></td>
            </tr>
            <tr>
              <td class="center-align contact-checkbox">
                <label class="checkbox-label">
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
              </td>
              <td><span class="avatar-contact avatar-online"><img src="<?php echo e(asset('images/avatar/avatar-11.png')); ?>"
                    alt="avatar"></span></td>
              <td>John</td>
              <td>name@domain.com</td>
              <td>+1-202-555-0112</td>
              <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
              <td><span><i class="material-icons delete">delete_outline</i></span></td>
            </tr>
            <tr>
              <td class="center-align contact-checkbox">
                <label class="checkbox-label">
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
              </td>
              <td><span class="avatar-contact avatar-online"><img src="<?php echo e(asset('images/avatar/avatar-12.png')); ?>"
                    alt="avatar"></span></td>
              <td>John</td>
              <td>name@domain.com</td>
              <td>+1-202-555-0112</td>
              <td><span class="favorite"><i class="material-icons amber-text"> star_border </i></span></td>
              <td><span><i class="material-icons delete">delete_outline</i></span></td>
            </tr>
            <tr>
              <td class="center-align contact-checkbox">
                <label class="checkbox-label">
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
              </td>
              <td><span class="avatar-contact avatar-online"><img src="<?php echo e(asset('images/avatar/avatar-13.png')); ?>"
                    alt="avatar"></span></td>
              <td>John</td>
              <td>name@domain.com</td>
              <td>+1-202-555-0112</td>
              <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
              <td><span><i class="material-icons delete">delete_outline</i></span></td>
            </tr>
            <tr>
              <td class="center-align contact-checkbox">
                <label class="checkbox-label">
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
              </td>
              <td><span class="avatar-contact avatar-online"><img src="<?php echo e(asset('images/avatar/avatar-14.png')); ?>"
                    alt="avatar"></span></td>
              <td>Jake</td>
              <td>name@domain.com</td>
              <td>+1-202-555-0112</td>
              <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
              <td><span><i class="material-icons delete">delete_outline</i></span></td>
            </tr>
            <tr>
              <td class="center-align contact-checkbox">
                <label class="checkbox-label">
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
              </td>
              <td><span class="avatar-contact avatar-online"><img src="<?php echo e(asset('images/avatar/avatar-15.png')); ?>"
                    alt="avatar"></span></td>
              <td>Jake</td>
              <td>name@domain.com</td>
              <td>+1-202-555-0112</td>
              <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
              <td><span><i class="material-icons delete">delete_outline</i></span></td>
            </tr>
            <tr>
              <td class="center-align contact-checkbox">
                <label class="checkbox-label">
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
              </td>
              <td><span class="avatar-contact avatar-online"><img src="<?php echo e(asset('images/avatar/avatar-16.png')); ?>"
                    alt="avatar"></span></td>
              <td>Heather</td>
              <td>name@domain.com</td>
              <td>+1-202-555-0112</td>
              <td><span class="favorite"><i class="material-icons amber-text"> star_border </i></span></td>
              <td><span><i class="material-icons delete">delete_outline</i></span></td>
            </tr>
            <tr>
              <td class="center-align contact-checkbox">
                <label class="checkbox-label">
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
              </td>
              <td><span class="avatar-contact avatar-online"><img src="<?php echo e(asset('images/avatar/avatar-17.png')); ?>"
                    alt="avatar"></span></td>
              <td>Joanna</td>
              <td>name@domain.com</td>
              <td>+1-202-555-0112</td>
              <td><span class="favorite"><i class="material-icons amber-text"> star_border </i></span></td>
              <td><span><i class="material-icons delete">delete_outline</i></span></td>
            </tr>
            <tr>
              <td class="center-align contact-checkbox">
                <label class="checkbox-label">
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
              <td><span class="avatar-contact avatar-online"><img src="<?php echo e(asset('images/avatar/avatar-1.png')); ?>"
                    alt="avatar"></span></td>
              <td>Joanna</td>
              <td>name@domain.com</td>
              <td>+1-202-555-0112</td>
              <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
              <td><span><i class="material-icons delete">delete_outline</i></span></td>
            </tr>
            <tr>
              <td class="center-align contact-checkbox">
                <label class="checkbox-label">
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
              </td>
              <td><span class="avatar-contact avatar-online"><img src="<?php echo e(asset('images/avatar/avatar-2.png')); ?>"
                    alt="avatar"></span></td>
              <td>Cassandra</td>
              <td>name@domain.com</td>
              <td>+1-202-555-0112</td>
              <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
              <td><span><i class="material-icons delete">delete_outline</i></span></td>
            </tr>
            <tr>
              <td class="center-align contact-checkbox">
                <label class="checkbox-label">
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
              </td>
              <td><span class="avatar-contact avatar-online"><img src="<?php echo e(asset('images/avatar/avatar-3.png')); ?>"
                    alt="avatar"></span></td>
              <td>Dolores</td>
              <td>name@domain.com</td>
              <td>+1-202-555-0112</td>
              <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
              <td><span><i class="material-icons delete">delete_outline</i></span></td>
            </tr>
            <tr>
              <td class="center-align contact-checkbox">
                <label class="checkbox-label">
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
              </td>
              <td><span class="avatar-contact avatar-online"><img src="<?php echo e(asset('images/avatar/avatar-4.png')); ?>"
                    alt="avatar"></span></td>
              <td>Susan</td>
              <td>name@domain.com</td>
              <td>+1-202-555-0112</td>
              <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
              <td><span><i class="material-icons delete">delete_outline</i></span></td>
            </tr>
            <tr>
              <td class="center-align contact-checkbox">
                <label class="checkbox-label">
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
              </td>
              <td><span class="avatar-contact avatar-online"><img src="<?php echo e(asset('images/avatar/avatar-5.png')); ?>"
                    alt="avatar"></span></td>
              <td>Susan</td>
              <td>name@domain.com</td>
              <td>+1-202-555-0112</td>
              <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
              <td><span><i class="material-icons delete">delete_outline</i></span></td>
            </tr>
            <tr>
              <td class="center-align contact-checkbox">
                <label class="checkbox-label">
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
              </td>
              <td><span class="avatar-contact avatar-online"><img src="<?php echo e(asset('images/avatar/avatar-6.png')); ?>"
                    alt="avatar"></span></td>
              <td>Kathleen</td>
              <td>name@domain.com</td>
              <td>+1-202-555-0112</td>
              <td><span class="favorite"><i class="material-icons amber-text"> star_border </i></span></td>
              <td><span><i class="material-icons delete">delete_outline</i></span></td>
            </tr>
            <tr>
              <td class="center-align contact-checkbox">
                <label class="checkbox-label">
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
              </td>
              <td><span class="avatar-contact avatar-online"><img src="<?php echo e(asset('images/avatar/avatar-7.png')); ?>"
                    alt="avatar"></span></td>
              <td>Chief</td>
              <td>name@domain.com</td>
              <td>+1-202-555-0112</td>
              <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
              <td><span><i class="material-icons delete">delete_outline</i></span></td>
            </tr>
            <tr>
              <td class="center-align contact-checkbox">
                <label class="checkbox-label">
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
              </td>
              <td><span class="avatar-contact avatar-online"><img src="<?php echo e(asset('images/avatar/avatar-8.png')); ?>"
                    alt="avatar"></span></td>
              <td>Walter</td>
              <td>name@domain.com</td>
              <td>+1-202-555-0112</td>
              <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
              <td><span><i class="material-icons delete">delete_outline</i></span></td>
            </tr>
            <tr>
              <td class="center-align contact-checkbox">
                <label class="checkbox-label">
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
              </td>
              <td><span class="avatar-contact avatar-online"><img src="<?php echo e(asset('images/avatar/avatar-9.png')); ?>"
                    alt="avatar"></span></td>
              <td>Walter</td>
              <td>name@domain.com</td>
              <td>+1-202-555-0112</td>
              <td><span class="favorite"><i class="material-icons amber-text"> star_border </i></span></td>
              <td><span><i class="material-icons delete">delete_outline</i></span></td>
            </tr>
            <tr>
              <td class="center-align contact-checkbox">
                <label class="checkbox-label">
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
              </td>
              <td><span class="avatar-contact avatar-online"><img src="<?php echo e(asset('images/avatar/avatar-10.png')); ?>"
                    alt="avatar"></span></td>
              <td>Kathleen</td>
              <td>name@domain.com</td>
              <td>+1-202-555-0112</td>
              <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
              <td><span><i class="material-icons delete">delete_outline</i></span></td>
            </tr>
            <tr>
              <td class="center-align contact-checkbox">
                <label class="checkbox-label">
                  <input type="checkbox" name="foo" />
                  <span></span>
                </label>
              </td>
              <td><span class="avatar-contact avatar-online"><img src="<?php echo e(asset('images/avatar/avatar-11.png')); ?>"
                    alt="avatar"></span></td>
              <td>Terry</td>
              <td>name@domain.com</td>
              <td>+1-202-555-0112</td>
              <td><span class="favorite"><i class="material-icons"> star_border </i></span></td>
              <td><span><i class="material-icons delete">delete_outline</i></span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Content Area Ends -->

<!--  Contact sidebar -->
<div class="contact-compose-sidebar">
  <div class="card quill-wrapper">
    <div class="card-content pt-0">
      <div class="card-header display-flex pb-2">
        <h3 class="card-title contact-title-label">Create New Contact</h3>
        <div class="close close-icon">
          <i class="material-icons">close</i>
        </div>
      </div>
      <div class="divider"></div>
      <!-- form start -->
      <form class="edit-contact-item mb-5 mt-5">
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix"> perm_identity </i>
            <input id="first_name" type="text" class="validate">
            <label for="first_name">First Name</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix"> perm_identity </i>
            <input id="last_name" type="text" class="validate">
            <label for="last_name">Last Name</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix"> business </i>
            <input id="company" type="text" class="validate">
            <label for="company">Company</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix"> business_center </i>
            <input id="business" type="text" class="validate">
            <label for="business">Job Title</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix"> email </i>
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix"> call </i>
            <input id="phone" type="text" class="validate">
            <label for="phone">Phone</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix"> note </i>
            <input id="notes" type="text" class="validate">
            <label for="notes">Notes</label>
          </div>
        </div>
      </form>
      <div class="card-action pl-0 pr-0 right-align">
        <button class="btn-small waves-effect waves-light add-contact">
          <span>Add Contact</span>
        </button>
        <button class="btn-small waves-effect waves-light update-contact display-none">
          <span>Update Contact</span>
        </button>
      </div>
      <!-- form start end-->
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('vendor-script'); ?>
<script src="<?php echo e(asset('vendors/data-tables/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('page-script'); ?>
<script src="<?php echo e(asset('js/scripts/app-contacts.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ems\resources\views/pages/app-contacts.blade.php ENDPATH**/ ?>