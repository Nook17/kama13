 <!--   Core JS Files   -->
 <script src="{{ asset('admin/js/material-dashboard-pro/jquery.min.js') }}" type="text/javascript"></script>
 <script src="{{ asset('admin/js/material-dashboard-pro/popper.min.js') }}" type="text/javascript"></script>
 <script src="{{ asset('admin/js/material-dashboard-pro/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
 <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
 <script src="{{ asset('admin/js/plugins/jquery.dataTables.min.js') }}"></script>
 <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
 <script src="{{ asset('admin/js/plugins/jasny-bootstrap.min.js') }}"></script>
 <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
 <script src="{{ asset('admin/js/plugins/bootstrap-selectpicker.js') }}"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('admin/js/material-dashboard-pro/material-dashboard.min-v=2.0.2.js') }}" type="text/javascript"></script>
 <!-- CKEditor -->
 {{-- <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script> --}}
 {{-- <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script> --}}
 <script>
    //  $('textarea').ckeditor();
     // $('.textarea').ckeditor(); // if class is prefered.
 </script>
 <script src="{{ asset('vendor/select2/select2.full.min.js') }}"></script>
 <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
 <script>
     $(function () {
       // Replace the <textarea id="editor1"> with a CKEditor
       // instance, using default configuration.
       CKEDITOR.replace('editor1');
       //bootstrap WYSIHTML5 - text editor
       $(".textarea").wysihtml5();
     });
 </script>
<script>
    $(document).ready(function() {
      $(".select2").select2();
    });
  </script>
  <!-- Plugin for the momentJs  -->
  {{-- <script src="{{ asset('admin/js/plugins/moment.min.js') }}"></script> --}}
  <!--  Plugin for Sweet Alert -->
  {{-- <script src="{{ asset('admin/js/plugins/sweetalert2.js') }}"></script> --}}
  <!-- Forms Validations Plugin -->
  {{-- <script src="{{ asset('admin/js/plugins/jquery.validate.min.js') }}"></script> --}}
  <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  {{-- <script src="{{ asset('admin/js/plugins/jquery.bootstrap-wizard.js') }}"></script> --}}
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  {{-- <script src="{{ asset('admin/js/plugins/bootstrap-datetimepicker.min.js') }}"></script> --}}
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  {{-- <script src="{{ asset('admin/js/plugins/bootstrap-tagsinput.js') }}"></script> --}}
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  {{-- <script src="{{ asset('admin/js/plugins/fullcalendar.min.js') }}"></script> --}}
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  {{-- <script src="{{ asset('admin/js/plugins/jquery-jvectormap.js') }}"></script> --}}
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  {{-- <script src="{{ asset('admin/js/plugins/nouislider.min.js') }}"></script> --}}
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script> --}}
  <!-- Library for adding dinamically elements -->
  {{-- <script src="{{ asset('admin/js/plugins/arrive.min.js') }}"></script> --}}
  <!--  Google Maps Plugin    -->
  {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script> --}}
  <!-- Place this tag in your head or just before your close body tag. -->
  {{-- <script async defer src="https://buttons.github.io/buttons.js"></script> --}}
  <!-- Chartist JS -->
  {{-- <script src="{{ asset('admin/js/plugins/chartist.min.js') }}"></script> --}}
  <!--  Notifications Plugin    -->
  {{-- <script src="{{ asset('admin/js/plugins/bootstrap-notify.js') }}"></script> --}}

 <script>
   $(document).ready(function () {
     $('#datatables').DataTable({
       "pagingType": "full_numbers",
       "lengthMenu": [
         [10, 25, 50, -1],
         [10, 25, 50, "All"]
       ],
       responsive: true,
       language: {
         search: "_INPUT_",
         searchPlaceholder: "Search records",
       }
     });

     var table = $('#datatable').DataTable();

     // Edit record
     table.on('click', '.edit', function () {
       $tr = $(this).closest('tr');
       var data = table.row($tr).data();
       alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
     });

     // Delete a record
     table.on('click', '.remove', function (e) {
       $tr = $(this).closest('tr');
       table.row($tr).remove().draw();
       e.preventDefault();
     });

     //Like record
     table.on('click', '.like', function () {
       alert('You clicked on Like button');
     });
   });
 </script>
 
</body>
</html>