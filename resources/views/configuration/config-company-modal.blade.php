<div id="edit-company-modal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <h4>Edit Company</h4>
    </div>
    <div class="modal-body">
      <form action="{{ url('con-companies') }}" method="POST">
        @csrf  
        <div class="row">
          <input type="text" id="id" name="id" value="">
          <div class="input-field col s12">
            <input type="text" name="company_name" id="company_name">
            <label for="fn">Company Name</label>
          </div>
        </div>
    </div>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Back</a>
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Submit</a>
  </div>
</div>

<div id="create-company-modal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <h4>Create Company</h4>
    </div>
    <div class="modal-body">
      <form action="{{ url('con-companies') }}" method="POST">
        @csrf  
        <div class="row">
          <div class="input-field col s12">
            <input type="text" name="comp_name" id="comp_name">
            <label for="fn">Company Name</label>
          </div>
        </div>
      
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Back</a>
      <button type="submit" class="btn cyan waves-effect waves-light">Submit <i class="material-icons right">send</i></button>
    </form>
    </div>
  </div>
</div>