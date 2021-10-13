// Call the dataTables jQuery plugin
// $(document).ready(function() {
//   $('#dataTable').DataTable();
// });
$(document).ready(function() {
  $('#datatablesSimple').DataTable( {
      "language": {
          "lengthMenu": "Display _MENU_ records per page",
          "zeroRecords": "Nothing found - sorry",
          "info": "Affichage page _PAGE_ de _PAGES_",
          "infoEmpty": "No records available",
          "infoFiltered": "(filtered from _MAX_ total records)"
      }
  } );
} );