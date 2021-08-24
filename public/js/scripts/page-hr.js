$(function () {

  // Horizontal And Vertical Scroll Table

  $('#hr-list').DataTable({
    "scrollY": false,
    "scrollX": true,
    "responsive": true,
    "lengthMenu": [
      [10, 25, 50, -1],
      [10, 25, 50, "All"]
    ]
  })

});

