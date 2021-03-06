<?php $__env->startSection('title','Form Layouts'); ?>


<?php $__env->startSection('vendor-style'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendors/flag-icon/css/flag-icon.min.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="seaction">

  <div class="card">
    <div class="card-content">
      <p class="caption mb-0">Includes predefined classes for easy form layout options.</p>
    </div>
  </div>

  <!--Basic Form-->

  <!-- jQuery Plugin Initialization -->
  <div class="row">
    <div class="col s12 m6 l6">
      <div id="basic-form" class="card card card-default scrollspy">
        <div class="card-content">
          <h4 class="card-title">Basic Form</h4>
          <form>
            <div class="row">
              <div class="input-field col s12">
                <input type="text" id="fn">
                <label for="fn">Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="email" type="email">
                <label for="email">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="password" type="password">
                <label for="password">Password</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea id="message" class="materialize-textarea"></textarea>
                <label for="message">Message</label>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Form with placeholder -->
    <div class="col s12 m6 l6">
      <div id="placeholder" class="card card card-default scrollspy">
        <div class="card-content">
          <h4 class="card-title">Form with placeholder</h4>
          <form>
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="John Doe" id="name2" type="text">
                <label for="name2">Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="john@domainname.com" id="email2" type="email">
                <label for="email">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="YourPassword" id="password2" type="password">
                <label for="password">Password</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea placeholder="Oh WoW! Let me check this one too." id="message2"
                  class="materialize-textarea"></textarea>
                <label for="message">Message</label>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Form with icon prefixes -->
    <div class="col s12 m6 l6">
      <div id="prefixes" class="card card card-default scrollspy">
        <div class="card-content">
          <h4 class="card-title">Form with icon prefixes</h4>
          <form>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="name3" type="text">
                <label for="name3">Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input id="email3" type="email">
                <label for="email3">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">lock_outline</i>
                <input id="password3" type="password">
                <label for="password3">Password</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">question_answer</i>
                <textarea id="message3" class="materialize-textarea"></textarea>
                <label for="message3">Message</label>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Form with validation -->
    <div class="col s12 m6 l6">
      <div id="validation" class="card card card-default scrollspy">
        <div class="card-content">
          <h4 class="card-title">Form with validation</h4>
          <form>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="name4" type="text" class="validate">
                <label for="name4">Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input id="email4" type="email" class="validate">
                <label for="email4">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">lock_outline</i>
                <input id="password5" type="password" class="validate">
                <label for="password5">Password</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">question_answer</i>
                <textarea id="message4" class="materialize-textarea validate"></textarea>
                <label for="message4">Message</label>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Form with validation -->
    <div class="col s12 m12 l12">
      <div id="inline-form" class="card card card-default scrollspy">
        <div class="card-content">
          <h4 class="card-title">Inline form</h4>
          <form>
            <div class="row">
              <div class="input-field col m4 s6">
                <i class="material-icons prefix">account_circle</i>
                <input id="icon_prefix1" type="text" class="validate">
                <label for="icon_prefix1">First Name</label>
              </div>
              <div class="input-field col m4 s6">
                <i class="material-icons prefix">lock_outline</i>
                <input id="icon_password" type="password" class="validate">
                <label for="icon_password">Password</label>
              </div>
              <div class="input-field col m4 s12">
                <div class="input-field col s12">
                  <button class="btn cyan waves-effect waves-light" type="submit" name="action">
                    <i class="material-icons left">lock_open</i> Login</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Form with validation -->
    <div class="col s12 m12 l12">
      <div id="form-with-validation" class="card card card-default scrollspy">
        <div class="card-content">
          <h4 class="card-title">Inline form with placeholder</h4>
          <form>
            <div class="row">
              <div class="input-field col m4 s6">
                <i class="material-icons prefix">account_circle</i>
                <input placeholder="John Doe" id="icon_prefix2" type="text" class="validate">
                <label for="icon_prefix2">First Name</label>
              </div>
              <div class="input-field col m4 s6">
                <i class="material-icons prefix">email</i>
                <input placeholder="john@mydomain.com" id="icon_email" type="email" class="validate">
                <label for="icon_email">Email</label>
              </div>
              <div class="input-field col m4 s12">
                <div class="input-field col s12">
                  <button class="btn cyan waves-effect waves-light" type="submit" name="action">
                    <i class="material-icons left">perm_identity</i> Signup</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Form Advance -->
    <div class="col s12 m12 l12">
      <div id="Form-advance" class="card card card-default scrollspy">
        <div class="card-content">
          <h4 class="card-title">Form Advance</h4>
          <form>
            <div class="row">
              <div class="input-field col m6 s12">
                <input id="first_name01" type="text">
                <label for="first_name01">First Name</label>
              </div>
              <div class="input-field col m6 s12">
                <input id="last_name" type="text">
                <label for="last_name">Last Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="email5" type="email">
                <label for="email">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="password6" type="password">
                <label for="password">Password</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col m6 s12">
                <select>
                  <option value="" disabled selected>Choose your profile</option>
                  <option value="1">Manager</option>
                  <option value="2">Developer</option>
                  <option value="3">Business</option>
                </select>
                <label>Select Profile</label>
              </div>
              <div class="input-field col m6 s12">
                <input type="text" class="datepicker" id="dob">
                <label for="dob">DOB</label>
              </div>
            </div>
            <div class="row">
              <div class="col m6 s12 file-field input-field">
                <div class="btn float-right">
                  <span>File</span>
                  <input type="file">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>
              <div class="input-field col m6 s12">
                <span>Range</span>
                <p class="range-field">
                  <input type="range" id="test5" min="0" max="100" />
                </p>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea id="message5" class="materialize-textarea"></textarea>
                <label for="message">Message</label>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.contentLayoutMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ems\resources\views/pages/form-layouts.blade.php ENDPATH**/ ?>