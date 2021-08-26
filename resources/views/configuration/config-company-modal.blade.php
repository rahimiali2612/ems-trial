<div id="edit-company-modal" class="modal">
  <div class="modal-content">
    <h4>Edit Company</h4>
    {{csrf_field()}}
    <input type="text" id="id" name="id" value="">
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Back</a>
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Submit</a>
  </div>
</div>

<div id="create-company-modal" class="modal">
  <div class="modal-content">
    <h4>Create Company</h4>
    {{csrf_field()}}
    <input type="text" id="id" name="id" value="">
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Back</a>
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Submit</a>
  </div>
</div>