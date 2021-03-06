<?php $__env->startSection('title','Users edit'); ?>


<?php $__env->startSection('vendor-style'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendors/select2/select2.min.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendors/select2/select2-materialize.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('page-style'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/pages/page-users.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<!-- users edit start -->
<div class="section users-edit">
  <div class="card">
    <div class="card-content">
      <!-- <div class="card-body"> -->
      <ul class="tabs mb-2 row">
        <li class="tab">
          <a class="display-flex align-items-center active" id="account-tab" href="#account">
            <i class="material-icons mr-1">person_outline</i><span>Account</span>
          </a>
        </li>
        <li class="tab">
          <a class="display-flex align-items-center" id="information-tab" href="#information">
            <i class="material-icons mr-2">error_outline</i><span>Information</span>
          </a>
        </li>
      </ul>
      <div class="divider mb-3"></div>
      <div class="row">
        <div class="col s12" id="account">
          <!-- users edit media object start -->
          <div class="media display-flex align-items-center mb-2">
            <a class="mr-2" href="#">
              <img src="<?php echo e(asset('images/avatar/avatar-11.png')); ?>" alt="users avatar" class="z-depth-4 circle"
                height="64" width="64">
            </a>
            <div class="media-body">
              <h5 class="media-heading mt-0">Avatar</h5>
              <div class="user-edit-btns display-flex">
                <a href="#" class="btn-small indigo">Change</a>
                <a href="#" class="btn-small btn-light-pink">Reset</a>
              </div>
            </div>
          </div>
          <!-- users edit media object ends -->
          <!-- users edit account form start -->
          <form id="accountForm">
            <div class="row">
              <div class="col s12 m6">
                <div class="row">
                  <div class="col s12 input-field">
                    <input id="username" name="username" type="text" class="validate" value="dean3004"
                      data-error=".errorTxt1">
                    <label for="username">Username</label>
                    <small class="errorTxt1"></small>
                  </div>
                  <div class="col s12 input-field">
                    <input id="name" name="name" type="text" class="validate" value="Dean Stanley"
                      data-error=".errorTxt2">
                    <label for="name">Name</label>
                    <small class="errorTxt2"></small>
                  </div>
                  <div class="col s12 input-field">
                    <input id="email" name="email" type="email" class="validate" value="deanstanley@gmail.com"
                      data-error=".errorTxt3">
                    <label for="email">E-mail</label>
                    <small class="errorTxt3"></small>
                  </div>
                </div>
              </div>
              <div class="col s12 m6">
                <div class="row">
                  <div class="col s12 input-field">
                    <select>
                      <option>User</option>
                      <option>Staff</option>
                    </select>
                    <label>Role</label>
                  </div>
                  <div class="col s12 input-field">
                    <select>
                      <option>Active</option>
                      <option>Banned</option>
                      <option>Close</option>
                    </select>
                    <label>Status</label>
                  </div>
                  <div class="col s12 input-field">
                    <input id="company" name="company" type="text" class="validate">
                    <label for="company">Company</label>
                  </div>
                </div>
              </div>
              <div class="col s12">
                <table class="mt-1">
                  <thead>
                    <tr>
                      <th>Module Permission</th>
                      <th>Read</th>
                      <th>Write</th>
                      <th>Create</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Users</td>
                      <td>
                        <label>
                          <input type="checkbox" checked />
                          <span></span>
                        </label>
                      </td>
                      <td>
                        <label>
                          <input type="checkbox" />
                          <span></span>
                        </label>
                      </td>
                      <td>
                        <label>
                          <input type="checkbox" />
                          <span></span>
                        </label>
                      </td>
                      <td>
                        <label>
                          <input type="checkbox" checked />
                          <span></span>
                        </label>
                      </td>
                    </tr>
                    <tr>
                      <td>Articles</td>
                      <td>
                        <label>
                          <input type="checkbox" />
                          <span></span>
                        </label>
                      </td>
                      <td>
                        <label>
                          <input type="checkbox" checked />
                          <span></span>
                        </label>
                      </td>
                      <td>
                        <label>
                          <input type="checkbox" />
                          <span></span>
                        </label>
                      </td>
                      <td>
                        <label>
                          <input type="checkbox" checked />
                          <span></span>
                        </label>
                      </td>
                    </tr>
                    <tr>
                      <td>Staff</td>
                      <td>
                        <label>
                          <input type="checkbox" checked />
                          <span></span>
                        </label>
                      </td>
                      <td>
                        <label>
                          <input type="checkbox" checked />
                          <span></span>
                        </label>
                      </td>
                      <td>
                        <label>
                          <input type="checkbox" />
                          <span></span>
                        </label>
                      </td>
                      <td>
                        <label>
                          <input type="checkbox" />
                          <span></span>
                        </label>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <!-- </div> -->
              </div>
              <div class="col s12 display-flex justify-content-end mt-3">
                <button type="submit" class="btn indigo">
                  Save changes</button>
                <button type="button" class="btn btn-light">Cancel</button>
              </div>
            </div>
          </form>
          <!-- users edit account form ends -->
        </div>
        <div class="col s12" id="information">
          <!-- users edit Info form start -->
          <form id="infotabForm">
            <div class="row">
              <div class="col s12 m6">
                <div class="row">
                  <div class="col s12">
                    <h6 class="mb-2"><i class="material-icons mr-1">link</i>Social Links</h6>
                  </div>
                  <div class="col s12 input-field">
                    <input class="validate" type="text" value="https://www.twitter.com/">
                    <label>Twitter</label>
                  </div>
                  <div class="col s12 input-field">
                    <input class="validate" type="text" value="https://www.facebook.com/">
                    <label>Facebook</label>
                  </div>
                  <div class="col s12 input-field">
                    <input class="validate" type="text">
                    <label>Google+</label>
                  </div>
                  <div class="col s12 input-field">
                    <input id="linkedin" name="linkedin" class="validate" type="text">
                    <label for="linkedin">LinkedIn</label>
                  </div>
                  <div class="col s12 input-field">
                    <input class="validate" type="text" value="https://www.instagram.com/">
                    <label>Instagram</label>
                  </div>
                </div>
              </div>
              <div class="col s12 m6">
                <div class="row">
                  <div class="col s12">
                    <h6 class="mb-4"><i class="material-icons mr-1">person_outline</i>Personal Info</h6>
                  </div>
                  <div class="col s12 input-field">
                    <input id="datepicker" name="datepicker" type="text" class="birthdate-picker datepicker"
                      placeholder="Pick a birthday" data-error=".errorTxt4">
                    <label for="datepicker">Birth date</label>
                    <small class="errorTxt4"></small>
                  </div>
                  <div class="col s12 input-field">
                    <select id="accountSelect">
                      <option>USA</option>
                      <option>India</option>
                      <option>Canada</option>
                    </select>
                    <label>Country</label>
                  </div>
                  <div class="col s12">
                    <label>Languages</label>
                    <select class="browser-default" id="users-language-select2" multiple="multiple">
                      <option value="English" selected>English</option>
                      <option value="Spanish">Spanish</option>
                      <option value="French">French</option>
                      <option value="Russian">Russian</option>
                      <option value="German">German</option>
                      <option value="Arabic" selected>Arabic</option>
                      <option value="Sanskrit">Sanskrit</option>
                    </select>
                  </div>
                  <div class="col s12 input-field">
                    <input id="phonenumber" type="text" class="validate" value="(+656) 254 2568">
                    <label for="phonenumber">Phone</label>
                  </div>
                  <div class="col s12 input-field">
                    <input id="address" name="address" type="text" class="validate" data-error=".errorTxt5">
                    <label for="address">Address</label>
                    <small class="errorTxt5"></small>
                  </div>
                </div>
              </div>
              <div class="col s12">
                <div class="input-field">
                  <input id="websitelink" name="websitelink" type="text" class="validate">
                  <label for="websitelink">Website</label>
                </div>
                <label>Favourite Music</label>
                <div class="input-field">
                  <select class="browser-default" id="users-music-select2" multiple="multiple">
                    <option value="Rock">Rock</option>
                    <option value="Jazz" selected>Jazz</option>
                    <option value="Disco">Disco</option>
                    <option value="Pop">Pop</option>
                    <option value="Techno">Techno</option>
                    <option value="Folk" selected>Folk</option>
                    <option value="Hip hop">Hip hop</option>
                  </select>
                </div>
              </div>
              <div class="col s12">
                <label>Favourite movies</label>
                <div class="input-field">
                  <select class="browser-default" id="users-movies-select2" multiple="multiple">
                    <option value="The Dark Knight" selected>The Dark Knight
                    </option>
                    <option value="Harry Potter" selected>Harry Potter</option>
                    <option value="Airplane!">Airplane!</option>
                    <option value="Perl Harbour">Perl Harbour</option>
                    <option value="Spider Man">Spider Man</option>
                    <option value="Iron Man" selected>Iron Man</option>
                    <option value="Avatar">Avatar</option>
                  </select>
                </div>
              </div>
              <div class="col s12 display-flex justify-content-end mt-1">
                <button type="submit" class="btn indigo">
                  Save changes</button>
                <button type="button" class="btn btn-light">Cancel</button>
              </div>
            </div>
          </form>
          <!-- users edit Info form ends -->
        </div>
      </div>
      <!-- </div> -->
    </div>
  </div>
</div>
<!-- users edit ends -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('vendor-script'); ?>
<script src="<?php echo e(asset('vendors/select2/select2.full.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendors/jquery-validation/jquery.validate.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('page-script'); ?>
<script src="<?php echo e(asset('js/scripts/page-users.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/materialize-update/resources/views/pages/page-users-edit.blade.php ENDPATH**/ ?>