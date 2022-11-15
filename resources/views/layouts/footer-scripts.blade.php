  <script src="{{ asset('dashboard/js/jquery.min.js') }}"></script>
<script src="{{ asset('dashboard/js/popper.min.js') }}"></script>

 <script src="{{ asset('dashboard/js/bootstrap.min.js') }}"></script>


     <script src="{{ asset('dashboard/js/config.js') }}"></script>

  
   <script src="{{ asset('dashboard/js/jquery.dataTables.min.js') }}"></script>

 <script src="{{ asset('dashboard/js/dataTables.bootstrap4.min.js') }}"></script>
 <script src="{{ URL::asset('dashboard/js/toastr.js') }}"></script>

      <script>
  $('.datatables').DataTable(
  {
    autoWidth: true,
    "lengthMenu": [
      [16, 32, 64, -1],
      [16, 32, 64, "All"]
    ]
  });
</script>

 
<script src="{{ asset('dashboard/js/apps.js') }}"></script>
<script src="{{ asset('dashboard/js/jquery-1.11.1.js') }}"></script>
<script src="{{ asset('dashboard/js/jquery.repeater.js') }}"></script>
<script>
  $(document).ready(function () {
      'use strict';

      $('.repeater').repeater({
          defaultValues: {
              'textarea-input': 'foo',
              'text-input': 'bar',
              'select-input': 'B',
              'checkbox-input': ['A', 'B'],
              'radio-input': 'B'
          },
          show: function () {
              $(this).slideDown();
          },
          hide: function (deleteElement) {
              if(confirm('هل انت متاكد من حذف تاريخ الاستحقاق؟')) {
                  $(this).slideUp(deleteElement);
              }
          },
          ready: function (setIndexes) {

          }
      });

      window.outerRepeater = $('.outer-repeater').repeater({
          isFirstItemUndeletable: true,
          defaultValues: { 'text-input': 'outer-default' },
          show: function () {
              console.log('outer show');
              $(this).slideDown();
          },
          hide: function (deleteElement) {
              console.log('outer delete');
              $(this).slideUp(deleteElement);
          },
          repeaters: [{
              isFirstItemUndeletable: true,
              selector: '.inner-repeater',
              defaultValues: { 'inner-text-input': 'inner-default' },
              show: function () {
                  console.log('inner show');
                  $(this).slideDown();
              },
              hide: function (deleteElement) {
                  console.log('inner delete');
                  $(this).slideUp(deleteElement);
              }
          }]
      });
  });
  </script>
 <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
  <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>