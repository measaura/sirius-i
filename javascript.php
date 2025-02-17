   <!-- JAVASCRIPTS -->
   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
   
   <!-- jQuery JS [ REQUIRED ] -->
   <script src="assets/js/jquery.js"></script>

   <!-- Bootstrap JS [ REQUIRED ] -->
   <script src="assets/js/bootstrap.min.js"></script>

   <!-- Nifty JS [ REQUIRED ] -->
   <script src="assets/js/nifty.min.js"></script>

   <!-- toastr.js -->
   <script src="assets/vendors/toastr/toastr.min.js"></script>
   <!-- mainnav scripts [ REQUIRED ]  -->
   <script>
      $(document).ready(function () {
         // mainnav regular menu
         $('ul.mainnav__menu a').filter(function () {
            // console.log('item '+this.pathname );
            return this.pathname === location.pathname; 
         }).not('.has-sub .mininav-toggle').addClass('active').parentsUntil('ul.mainnav__menu').siblings('.has-sub').children('a').removeClass('active');

         // mainnav has-sub menu
         $('ul.mininav-content a').filter(function () {
               // console.log('sub '+this.href);
               // console.log('---');
               return this.pathname == location.pathname; 
         }).addClass('active').parentsUntil('li.has-sub').siblings().addClass('active').removeClass('collapsed');
         
         toastr.options = {
         "closeButton": true,
         "debug": false,
         "progressBar": true,
         "preventDuplicates": false,
         "positionClass": "toast-top-center",
         "onclick": null,
         "showDuration": "400",
         "hideDuration": "1000",
         "timeOut": "7000",
         "extendedTimeOut": "1000",
         "showEasing": "swing",
         "hideEasing": "linear",
         "showMethod": "fadeIn",
         "hideMethod": "fadeOut"
         }
      });
   </script>