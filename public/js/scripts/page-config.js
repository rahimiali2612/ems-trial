$(document).ready(function() {
 
  $('.edit-company').click(function(event) {
    var id = $(this).attr('data-id');
    var company_name = $(this).attr('data-company_name');
    var companyEditModal = $('#edit-company-modal');
    companyEditModal.find('input[name="id"]').val(id);
    companyEditModal.find('input[value="company_name"]').val(company_name);
    companyEditModal.modal();
  });
  $('#com-add-btn').click(function(event) {
    var companyAddModal = $('#create-company-modal');
    companyAddModal.modal();
  });

});

//Datatable
$(function () {

  // Simple Data Table

  $('#companies-list').DataTable({
    "responsive": true,
    "lengthMenu": [
      [10, 25, 50, -1],
      [10, 25, 50, "All"]
    ]
  });


});