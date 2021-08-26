$(document).ready(function() {
 
  $('.edit-company').click(function(event) {
    var id = $(this).attr('data-id');
    var companyEditModal = $('#edit-company-modal');
    companyEditModal.find('input[name="id"]').val(id);
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