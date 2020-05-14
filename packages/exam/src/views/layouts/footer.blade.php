  <!-- footer content -->
        <footer>
          <div class="pull-right">
            Made With  <i class="fa fa-heart fa-2x " style="color: red"></i>By Sayandeep & Souvik
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('assets/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('assets/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('assets/vendors/nprogress/nprogress.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('assets/vendors/iCheck/icheck.min.js') }}"></script>

    <!-- bootstrap-wysiwyg -->
    <script src="{{ asset('assets/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery.hotkeys/jquery.hotkeys.js') }}"></script>
    <script src="{{ asset('assets/vendors/google-code-prettify/src/prettify.js') }}"></script>
    <!-- jQuery Tags Input -->
    <script src="{{ asset('assets/vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}"></script>
    <!-- Switchery -->
    <script src="{{ asset('assets/vendors/switchery/dist/switchery.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('assets/vendors/select2/dist/js/select2.full.min.js') }}"></script>
    <!-- Parsley -->
    <script src="{{ asset('assets/vendors/parsleyjs/dist/parsley.min.js') }}"></script>
    <!-- Autosize -->
    <script src="{{ asset('assets/vendors/autosize/dist/autosize.min.js') }}"></script>
    <!-- jQuery autocomplete -->
    <script src="{{ asset('assets/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') }}"></script>
    <!-- starrr -->
    <script src="{{ asset('assets/vendors/starrr/dist/starrr.js') }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('assets/build/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/fastclick/lib/fastclick.js') }}"></script>


    <!-- Ion.RangeSlider -->
    <script src="{{ asset('assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js') }}"></script>
    <!-- Bootstrap Colorpicker -->
    <script src="{{ asset('assets/vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>

    <!-- Bootstrap Colorpicker -->
    <script src="{{ asset('assets/vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>

    <!-- jQuery Knob -->
    <script src="{{ asset('assets/vendors/jquery-knob/dist/jquery.knob.min.js') }}"></script>
    <!-- Cropper -->
    <script src="{{ asset('assets/vendors/cropper/dist/cropper.min.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('assets/build/js/custom.min.js') }}"></script>

    <!-- Hidden On Click Event -->
    <script>
  function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.visibility = 'visible';
    }
    else document.getElementById('ifYes').style.visibility = 'hidden';

}
</script>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
    $(document).ready(function(){
        $(".add-row").click(function(){
            var sname = $("#sname").val();
            var cans = $("#cans").val();
            var wans = $("#wans").val();
            var markup = "<TR><TD><input type='checkbox' name='record'></TD><TD>" + sname + "</TD><TD>" + cans + "</TD><TD>"+ wans + "</TD></TR>";
            $("table tbody").append(markup);
        });

        // Find and remove selected table rows
        $(".delete-row").click(function(){
            $("table tbody").find('input[name="record"]').each(function(){
              if($(this).is(":checked")){
                    $(this).parents("tr").remove();
                }
            });
        });
    });
</script>

<script>
      function auto_end_date(){
       var start_date = document.getElementById("start_date").value;
       document.getElementById("end_date").value = start_date;
       //alert(start_date);
      }
    </script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- morris.js -->
    <script src="{{ asset('assets/vendors/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/morris.js/morris.min.js') }}"></script>



</body>
</html>
