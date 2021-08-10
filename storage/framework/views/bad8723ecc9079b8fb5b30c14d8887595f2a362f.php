<?php $__env->startSection('title','App Invoice List'); ?>


<?php $__env->startSection('vendor-style'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendors/data-tables/css/jquery.dataTables.min.css')); ?>">
<link rel="stylesheet" type="text/css"
  href="<?php echo e(asset('vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendors/data-tables/css/dataTables.checkboxes.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('page-style'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/pages/app-invoice.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<!-- invoice list -->
<section class="invoice-list-wrapper section">
  <!-- create invoice button-->
  <!-- Options and filter dropdown button-->
  <div class="invoice-filter-action mr-3">
    <a href="javascript:void(0)" class="btn waves-effect waves-light invoice-export border-round z-depth-4">
      <i class="material-icons">picture_as_pdf</i>
      <span class="hide-on-small-only">Export to PDF</span>
    </a>
  </div>
  <!-- create invoice button-->
  <div class="invoice-create-btn">
    <a href="<?php echo e(asset('app-invoice-add')); ?>" class="btn waves-effect waves-light invoice-create border-round z-depth-4">
      <i class="material-icons">add</i>
      <span class="hide-on-small-only">Create Invoice</span>
    </a>
  </div>
  <div class="filter-btn">
    <!-- Dropdown Trigger -->
    <a class='dropdown-trigger btn waves-effect waves-light purple darken-1 border-round' href='#'
      data-target='btn-filter'>
      <span class="hide-on-small-only">Filter Invoice</span>
      <i class="material-icons">keyboard_arrow_down</i>
    </a>
    <!-- Dropdown Structure -->
    <ul id='btn-filter' class='dropdown-content'>
      <li><a href="#!">Paid</a></li>
      <li><a href="#!">Unpaid</a></li>
      <li><a href="#!">Partial Payment</a></li>
    </ul>
  </div>
  <div class="responsive-table">
    <table class="table invoice-data-table white border-radius-4 pt-1">
      <thead>
        <tr>
          <!-- data table responsive icons -->
          <th></th>
          <!-- data table checkbox -->
          <th></th>
          <th>
            <span>Invoice#</span>
          </th>
          <th>Amount</th>
          <th>Date</th>
          <th>Customer</th>
          <th>Tags</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td></td>
          <td></td>
          <td>
            <a href="<?php echo e(asset('app-invoice-view')); ?>">INV-00956</a>
          </td>
          <td><span class="invoice-amount">$459.30</span></td>
          <td><small>12-08-19</small></td>
          <td><span class="invoice-customer">Pixinvent PVT. LTD</span></td>
          <td>
            <span class="bullet green"></span>
            <small>Technology</small>
          </td>
          <td>
            <span class="chip lighten-5 red red-text">UNPAID</span>
          </td>
          <td>
            <div class="invoice-action">
              <a href="<?php echo e(asset('app-invoice-view')); ?>" class="invoice-action-view mr-4">
                <i class="material-icons">remove_red_eye</i>
              </a>
              <a href="<?php echo e(asset('app-invoice-edit')); ?>" class="invoice-action-edit">
                <i class="material-icons">edit</i>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td></td>
          <td> </td>
          <td>
            <a href="<?php echo e(asset('app-invoice-view')); ?>">INV-00349</a>
          </td>
          <td><span class="invoice-amount">$125.00</span></td>
          <td><small>08-08-19</small></td>
          <td><span class="invoice-customer">Volkswagen</span></td>
          <td>
            <span class="bullet blue"></span>
            <small>Car</small>
          </td>
          <td><span class="chip lighten-5 green green-text">PAID</span></td>
          <td>
            <div class="invoice-action">
              <a href="<?php echo e(asset('app-invoice-view')); ?>" class="invoice-action-view mr-4">
                <i class="material-icons">remove_red_eye</i>
              </a>
              <a href="<?php echo e(asset('app-invoice-edit')); ?>" class="invoice-action-edit">
                <i class="material-icons">edit</i>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td></td>
          <td> </td>
          <td>
            <a href="<?php echo e(asset('app-invoice-view')); ?>">INV-00853</a>
          </td>
          <td><span class="invoice-amount">$10,503</span></td>
          <td><small>02-08-19</small></td>
          <td><span class="invoice-customer">Chevron Corporation</span></td>
          <td>
            <span class="bullet grey"></span>
            <small>Corporation</small>
          </td>
          <td><span class="chip lighten-5 red red-text">UNPAID</span></td>
          <td>
            <div class="invoice-action">
              <a href="<?php echo e(asset('app-invoice-view')); ?>" class="invoice-action-view mr-4">
                <i class="material-icons">remove_red_eye</i>
              </a>
              <a href="<?php echo e(asset('app-invoice-edit')); ?>" class="invoice-action-edit">
                <i class="material-icons">edit</i>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td></td>
          <td> </td>
          <td>
            <a href="<?php echo e(asset('app-invoice-view')); ?>">INV-00452</a>
          </td>
          <td><span class="invoice-amount">$90</span></td>
          <td><small>28-07-19</small></td>
          <td><span class="invoice-customer">Alphabet</span></td>
          <td>
            <span class="bullet cyan"></span>
            <small>Electronic</small>
          </td>
          <td><span class="chip lighten-5 orange orange-text">Partially Paid</span></td>
          <td>
            <div class="invoice-action">
              <a href="<?php echo e(asset('app-invoice-view')); ?>" class="invoice-action-view mr-4">
                <i class="material-icons">remove_red_eye</i>
              </a>
              <a href="<?php echo e(asset('app-invoice-edit')); ?>" class="invoice-action-edit">
                <i class="material-icons">edit</i>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td></td>
          <td> </td>
          <td>
            <a href="<?php echo e(asset('app-invoice-view')); ?>">INV-00123</a>
          </td>
          <td><span class="invoice-amount">$15,900</span></td>
          <td><small>23-07-19</small></td>
          <td><span class="invoice-customer">Toyota Motor</span></td>
          <td>
            <span class="bullet blue"></span>
            <small>Car</small>
          </td>
          <td><span class="chip lighten-5 green green-text">PAID</span></td>
          <td>
            <div class="invoice-action">
              <a href="<?php echo e(asset('app-invoice-view')); ?>" class="invoice-action-view mr-4">
                <i class="material-icons">remove_red_eye</i>
              </a>
              <a href="<?php echo e(asset('app-invoice-edit')); ?>" class="invoice-action-edit">
                <i class="material-icons">edit</i>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td>
            <a href="<?php echo e(asset('app-invoice-view')); ?>">INV-00853</a>
          </td>
          <td><span class="invoice-amount">$115.06</span></td>
          <td><small>24-06-19</small></td>
          <td><span class="invoice-customer">Samsung Electronics</span></td>
          <td>
            <span class="bullet cyan"></span>
            <small>Electronic</small>
          </td>
          <td><span class="chip lighten-5 green green-text">PAID</span></td>
          <td>
            <div class="invoice-action">
              <a href="<?php echo e(asset('app-invoice-view')); ?>" class="invoice-action-view mr-4">
                <i class="material-icons">remove_red_eye</i>
              </a>
              <a href="<?php echo e(asset('app-invoice-edit')); ?>" class="invoice-action-edit">
                <i class="material-icons">edit</i>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td></td>
          <td> </td>
          <td>
            <a href="<?php echo e(asset('app-invoice-view')); ?>">INV-00153</a>
          </td>
          <td><span class="invoice-amount">$1,090</span></td>
          <td><small>23-05-19</small></td>
          <td><span class="invoice-customer">Pixinvent PVT. LTD</span></td>
          <td>
            <span class="bullet grey"></span>
            <small>Corporation</small>
          </td>
          <td><span class="chip lighten-5 red red-text">UNPAID</span></td>
          <td>
            <div class="invoice-action">
              <a href="<?php echo e(asset('app-invoice-view')); ?>" class="invoice-action-view mr-4">
                <i class="material-icons">remove_red_eye</i>
              </a>
              <a href="<?php echo e(asset('app-invoice-edit')); ?>" class="invoice-action-edit">
                <i class="material-icons">edit</i>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td></td>
          <td> </td>
          <td>
            <a href="<?php echo e(asset('app-invoice-view')); ?>">INV-00788</a>
          </td>
          <td><span class="invoice-amount">$555.50</span></td>
          <td><small>10-06-19</small></td>
          <td><span class="invoice-customer">ExxonMobil</span></td>
          <td>
            <span class="bullet orange"></span>
            <small>Mobile</small>
          </td>
          <td><span class="chip lighten-5 red red-text">UNPAID</span></td>
          <td>
            <div class="invoice-action">
              <a href="<?php echo e(asset('app-invoice-view')); ?>" class="invoice-action-view mr-4">
                <i class="material-icons">remove_red_eye</i>
              </a>
              <a href="<?php echo e(asset('app-invoice-edit')); ?>" class="invoice-action-edit">
                <i class="material-icons">edit</i>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td></td>
          <td> </td>
          <td>
            <a href="<?php echo e(asset('app-invoice-view')); ?>">INV-00326</a>
          </td>
          <td><span class="invoice-amount">$8,563</span></td>
          <td><small>06-01-19</small></td>
          <td><span class="invoice-customer">Wells Fargo</span></td>
          <td>
            <span class="bullet red"></span>
            <small>Food</small>
          </td>
          <td><span class="chip lighten-5 green green-text">PAID</span></td>
          <td>
            <div class="invoice-action">
              <a href="<?php echo e(asset('app-invoice-view')); ?>" class="invoice-action-view mr-4">
                <i class="material-icons">remove_red_eye</i>
              </a>
              <a href="<?php echo e(asset('app-invoice-edit')); ?>" class="invoice-action-edit">
                <i class="material-icons">edit</i>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td></td>
          <td> </td>
          <td>
            <a href="<?php echo e(asset('app-invoice-view')); ?>">INV-00759</a>
          </td>
          <td><span class="invoice-amount">$10,960.20</span></td>
          <td><small>22-05-19</small></td>
          <td><span class="invoice-customer">Ping An Insurance</span></td>
          <td>
            <span class="bullet grey"></span>
            <small>Corporation</small>
          </td>
          <td><span class="chip lighten-5 orange orange-text">Partially Paid</span></td>
          <td>
            <div class="invoice-action">
              <a href="<?php echo e(asset('app-invoice-view')); ?>" class="invoice-action-view mr-4">
                <i class="material-icons">remove_red_eye</i>
              </a>
              <a href="<?php echo e(asset('app-invoice-edit')); ?>" class="invoice-action-edit">
                <i class="material-icons">edit</i>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td></td>
          <td> </td>
          <td>
            <a href="<?php echo e(asset('app-invoice-view')); ?>">INV-00999</a>
          </td>
          <td><span class="invoice-amount">$886.90</span></td>
          <td><small>12-05-19</small></td>
          <td><span class="invoice-customer">Apple</span></td>
          <td>
            <span class="bullet green"></span>
            <small>Electronic</small>
          </td>
          <td><span class="chip lighten-5 red red-text">UNPAID</span></td>
          <td>
            <div class="invoice-action">
              <a href="<?php echo e(asset('app-invoice-view')); ?>" class="invoice-action-view mr-4">
                <i class="material-icons">remove_red_eye</i>
              </a>
              <a href="<?php echo e(asset('app-invoice-edit')); ?>" class="invoice-action-edit">
                <i class="material-icons">edit</i>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td></td>
          <td> </td>
          <td>
            <a href="<?php echo e(asset('app-invoice-view')); ?>">INV-00223</a>
          </td>
          <td><span class="invoice-amount">$459.30</span></td>
          <td><small>28-04-19</small></td>
          <td><span class="invoice-customer">Communications</span></td>
          <td>
            <span class="bullet green"></span>
            <small>Technology</small>
          </td>
          <td><span class="chip lighten-5 green green-text">PAID</span></td>
          <td>
            <div class="invoice-action">
              <a href="<?php echo e(asset('app-invoice-view')); ?>" class="invoice-action-view mr-4">
                <i class="material-icons">remove_red_eye</i>
              </a>
              <a href="<?php echo e(asset('app-invoice-edit')); ?>" class="invoice-action-edit">
                <i class="material-icons">edit</i>
              </a>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('vendor-script'); ?>
<script src="<?php echo e(asset('vendors/data-tables/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/data-tables/js/datatables.checkboxes.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('page-script'); ?>
<script src="<?php echo e(asset('js/scripts/app-invoice.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/materialize-admin/materialize-html-laravel-template/resources/views/pages/app-invoice-list.blade.php ENDPATH**/ ?>