<?php
include_once 'includes/db_func.php';
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-scheme="orange">

<head>
   <meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
   <meta name="description" content="Add your own content to this blank page.">
   <title>Users List | SIRIUS-I</title>


   <!-- STYLESHEETS -->
   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

   <!-- Fonts [ OPTIONAL ] -->
   
   
   <style type="text/css">@font-face {font-family:Poppins;font-style:normal;font-weight:300;src:url(./assets/fonts/poppins/5.0.11/devanagari/300/normal.woff2);unicode-range:U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:300;src:url(./assets/fonts/poppins/5.0.11/latin/300/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:300;src:url(./assets/fonts/poppins/5.0.11/latin-ext/300/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:400;src:url(./assets/fonts/poppins/5.0.11/latin-ext/400/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:400;src:url(./assets/fonts/poppins/5.0.11/latin/400/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:400;src:url(./assets/fonts/poppins/5.0.11/devanagari/400/normal.woff2);unicode-range:U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:500;src:url(./assets/fonts/poppins/5.0.11/devanagari/500/normal.woff2);unicode-range:U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:500;src:url(./assets/fonts/poppins/5.0.11/latin-ext/500/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:500;src:url(./assets/fonts/poppins/5.0.11/latin/500/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:700;src:url(./assets/fonts/poppins/5.0.11/devanagari/700/normal.woff2);unicode-range:U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:700;src:url(./assets/fonts/poppins/5.0.11/latin-ext/700/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:700;src:url(./assets/fonts/poppins/5.0.11/latin/700/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(./assets/fonts/ubuntu/5.0.11/cyrillic-ext/400/normal.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(./assets/fonts/ubuntu/5.0.11/latin-ext/400/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(./assets/fonts/ubuntu/5.0.11/latin/400/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(./assets/fonts/ubuntu/5.0.11/greek-ext/400/normal.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(./assets/fonts/ubuntu/5.0.11/greek/400/normal.woff2);unicode-range:U+0370-03FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(./assets/fonts/ubuntu/5.0.11/cyrillic/400/normal.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(./assets/fonts/ubuntu/5.0.11/greek/500/normal.woff2);unicode-range:U+0370-03FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(./assets/fonts/ubuntu/5.0.11/greek-ext/500/normal.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(./assets/fonts/ubuntu/5.0.11/cyrillic/500/normal.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(./assets/fonts/ubuntu/5.0.11/cyrillic-ext/500/normal.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(./assets/fonts/ubuntu/5.0.11/latin-ext/500/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(./assets/fonts/ubuntu/5.0.11/latin/500/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(./assets/fonts/ubuntu/5.0.11/greek-ext/700/normal.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(./assets/fonts/ubuntu/5.0.11/latin/700/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(./assets/fonts/ubuntu/5.0.11/greek/700/normal.woff2);unicode-range:U+0370-03FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(./assets/fonts/ubuntu/5.0.11/cyrillic-ext/700/normal.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(./assets/fonts/ubuntu/5.0.11/cyrillic/700/normal.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(./assets/fonts/ubuntu/5.0.11/latin-ext/700/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}</style>


   <!-- Bootstrap CSS [ REQUIRED ] -->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">

   <!-- Nifty CSS [ REQUIRED ] -->
   <link rel="stylesheet" href="assets/css/nifty.min.css">

   <!-- Tabulator CSS [ REQUIRED ] -->
   <!-- <link rel="stylesheet" href="assets/vendors/tabulator/css/tabulator.min.css"> -->
   <link rel="stylesheet" href="assets/pages/tabulator.594dba0f683f451ea86885101e908a107608649cfba970d58003968fc240d2a1.css">

   <!-- Favicons [ OPTIONAL ] -->
   <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
   <link rel="manifest" href="site.webmanifest">

   <!-- Loader.CSS [ OPTIONAL ] -->
   <link rel="stylesheet" href="assets/pages/loader.css.c6c9f1286fdc9e0b4228065b34d8750e1ed9beb2c8a8230d53e826a5f2fc8631.css">

   <!-- toastr.js -->
   <link rel="stylesheet" href="assets/vendors/toastr/toastr.min.css">


   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

   [ REQUIRED ]
   You must include this category in your project.


   [ OPTIONAL ]
   This is an optional plugin. You may choose to include it in your project.


   [ DEMO ]
   Used for demonstration purposes only. This category should NOT be included in your project.


   [ SAMPLE ]
   Here's a sample script that explains how to initialize plugins and/or components: This category should NOT be included in your project.


   Detailed information and more samples can be found in the documentation.

   ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->


</head>

<body class="out-quart">


   <!-- PAGE CONTAINER -->
   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
   <div id="root" class="root mn--max tm--expanded-hd mn--max mn--sticky">

      <!-- CONTENTS -->
      <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
      <section id="content" class="content">
         <div class="content__header content__boxed overlapping">
            <div class="content__wrap">


               <!-- Breadcrumb -->
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="main.php">Home</a></li>
                     <!-- <li class="breadcrumb-item"><a href="tables/">Tables</a></li> -->
                     <li class="breadcrumb-item active" aria-current="page">Users List</li>
                  </ol>
               </nav>
               <!-- END : Breadcrumb -->


               <h1 class="page-title mb-0 mt-2">Users List</h1>

               <p class="lead">
                  Manage System Users.
               </p>
            </div>

         </div>


         <div class="content__boxed">
            <div class="content__wrap">

               <div class="col-xl-12 mb-3">
                  <div class="card">
                     <div class="card-header">
                        <div class="row d-flex">
                           <!-- Toolbar -->
                           <div class="d-flex gap-2 py-2 col-md-6" >
                              <select id="_dm-filterField" class="form-select">
                                 <option value="none">Select field</option>
                                 <option value="item">Product Name</option>
                                 <option value="oem_serial">OEM Serial</option>
                                 <option value="svp_serial">SVP Serial</option>
                                 <option value="oem">OEM</option>
                                 <option value="mwp">MWP</option>
                              </select>

                              <select id="_dm-filterType" class="form-select">
                                 <option value="like">Like</option>
                                 <option value="=">=</option>
                                 <option value="<">
                                    << /option>
                                 <option value="<=">
                                    <=< /option>
                                 <option value=">">></option>
                                 <option value=">=">>=</option>
                                 <option value="!=">!=</option>
                              </select>

                              <input id="_dm-filterValue" class="form-control" type="text" placeholder="value to filter">
                              <button id="_dm-filterClear" class="btn btn-primary text-nowrap">Clear Filter</button>
                           </div>
                           <!-- END : Toolbar -->
                            <!-- <div class="col-md-4"></div> -->
                           <div class="d-flex gap-2 py-2 col-md-6 justify-content-end">
                              <button type="button" class="btn btn-success hstack gap-2" id="btnAddUser" data-bs-toggle="modal" data-bs-target="#verticalCentered">
                                 <i class="demo-pli-add-user fs-4"></i>
                                 <span class="vr"></span>
                                 Add User
                              </button>
                           </div>
                           <div class="modal fade" id="verticalCentered" tabindex="-1" aria-labelledby="verticalCenteredLabel" style="display: none;" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h1 class="modal-title fs-5" id="verticalCenteredLabel">Add new user</h1>
                                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                       <form id="userForm">
                                          <div class="mb-3">
                                             <label for="username" class="form-label">Email</label>
                                             <input type="text" class="form-control" id="email" name="email" required>
                                          </div>
                                          <!-- <div class="mb-3">
                                             <label for="fullname" class="form-label">Full Name</label>
                                             <input type="text" class="form-control" id="fullname" name="fullname" required>
                                          </div> -->
                                          <!-- Add other form fields as needed -->
                                          <button type="submit" class="btn btn-primary">Add user</button>
                                       </form>
                                       <div id="loader" class="py-4 text-center" style="display: none;">
                                          <!-- Loader - Ball spin fade loader -->
                                          <div class="loader">
                                             <div class="loader-inner ball-spin-fade-loader">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                             </div>
                                          </div>
                                          <!-- END : Loader - Ball spin fade loader -->

                                       </div>
                                    </div>
                                    <div class="modal-footer">
                                       <button id="closeBtn" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                     </div>
                     <div class="card-body">
                        <!-- Pagination -->
                        <div id="_dm-tabulatorPagination" class="table table-striped table-bordered m-0"></div>
                        <!-- END : Pagination -->


                     </div>
                  </div>

               </div>


            </div>
         </div>
      <?php
      include 'footer.php';
      ?>


      </section>

      <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
      <!-- END - CONTENTS -->


      <?php
      include 'header.php';
      include 'mainnav.php'; 
      include 'sidebar.php';
      ?>


   </div>
   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
   <!-- END - PAGE CONTAINER -->


   <!-- SCROLL TO TOP BUTTON -->
   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
   <div class="scroll-container">
      <a href="#root" class="scroll-page ratio ratio-1x1" aria-label="Scroll button"></a>
   </div>
   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
   <!-- END - SCROLL TO TOP BUTTON -->

   <!-- include('demo.php'); -->


<?php
   include('javascript.php');
?>

   <!-- Luxon scripts [ OPTIONAL ] -->
   <script src="assets/vendors/luxon/luxon.js"></script>

   <!-- toastr.js -->
   <script src="assets/vendors/toastr/toastr.min.js"></script>

   <!-- Tabulator scripts [ OPTIONAL ] -->
   <script src="assets/vendors/tabulator/js/tabulator.min.js"></script>
   <script>
      document.addEventListener("DOMContentLoaded", () => {
         //custom formatter definition
         var openButton = function(value, data, cell, row, options){ //plain text value
            var button = $("<button>Edit Row</button>");
            
            button.on("click", function(){
               loadDialog(data);
            });

            return button;
         };
         //Generate print icon
         var printIcon = function(cell, formatterParams){ //plain text value
            return "<i class='demo-pli-pencil'></i>";
         };
         var trashIcon = function(cell, formatterParams){ //plain text value
            return "<i class='demo-pli-trash'></i>";
         };
         const f = new Tabulator("#_dm-tabulatorPagination", {
                  // data: e,
                  ajaxURL: "func/get_users.php",
                  ajaxParams: { type: "fcp" },
                  layout: "fitColumns",
                  layoutColumnsOnNewData:true,
                  pagination: "true",
                  paginationMode: "remote",
                  paginationSize: 10,
                  paginationSizeSelector: [10, 25, 50, 100],
                  columns: [
                     { title: "Username", field: "username",  sorter: "string" },
                     { title: "Full Name", field: "fullname", sorter: "string" },
                     { title: "Company", field: "company", sorter: "string" },
                     { title: "Designation", field: "designation", sorter: "string" },
                     { title: "Employee ID", field: "emp_id", sorter: "string" },
                     { title: "HP No", field: "mobile", sorter: "string", width: 100 },
                     { title: "Access", field: "access_level", sorter: "number", width: 120 },
                     { title: "Last Login", field: "logindate", sorter: "date", formatter: "datetime", formatterParams:{
                           inputFormat:"yyyy-MM-dd HH:mm:ss",
                           outputFormat:"dd/MM/yyyy HH:mm:ss",
                           invalidPlaceholder:"(invalid date)",
                           timezone:"Asia/Kuala_Lumpur",
                        } 
                     },
                     { title: "Is Login", field: "islogin", hozAlign:"center", headerSort:false, headerHozAlign:"center", formatter:"tickCross", width: 80 },
                     {
                        title: "Action",
                        headerSort:false,
                        headerHozAlign:"center",
                        columns: [
                           { 
                              headerSort:false, 
                              formatter:printIcon, 
                              width:40, 
                              hozAlign:"center", 
                              cellClick:function(e, cell){
                                 alert("Printing row data for: " + cell.getRow().getData().id)
                              }
                           },
                           { 
                              headerSort:false, 
                              formatter:trashIcon, 
                              width:40, 
                              hozAlign:"center", 
                              cellClick:function(e, cell){
                                 alert("Deleting row data for: " + cell.getRow().getData().id)
                              }
                           },
                        ],
                     }
                     // { title: "Action" , headerSort:false, formatterParams:openButton},
                  ],
            }),
            r = () => '<i class="demo-psi-question fs-5"></i>',
            i = document.getElementById("_dm-filterField"),
            n = document.getElementById("_dm-filterType"),
            s = document.getElementById("_dm-filterValue");

            function c(e) {
               return e.car && e.rating < 3;
            }
            function o() {
               let e = i.options[i.selectedIndex].value,
                     t = n.options[n.selectedIndex].value;
               const o = e == "function" ? c : e;
               e == "function" ? ((n.disabled = !0), (s.disabled = !0)) : ((n.disabled = !1), (s.disabled = !1)), e && f.setFilter(o, t, s.value);
            }
            document.getElementById("_dm-filterField").addEventListener("change", o),
            document.getElementById("_dm-filterType").addEventListener("change", o),
            document.getElementById("_dm-filterValue").addEventListener("keyup", o),
            document.getElementById("_dm-filterClear").addEventListener("click", function () {
               (i.value = "none"), (n.value = "like"), (s.value = ""), f.clearFilter();
            });
         
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

         $('#userForm').on('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission
            // Hide the form
            $('#userForm').hide();
            $('#closeBtn').hide();
            // Show the loader
            $('#loader').show();
            $.ajax({
                  type: 'POST',
                  url: 'addnew.php', // Replace with the path to your server-side script
                  data: $(this).serialize(),
                  success: function(response) {
                     // Hide the loader
                     $('#loader').hide();
                     // Reset the form
                     $('#email').val('');
                     // Show the form
                     $('#userForm').show();
                     // Handle the response from the server
                     let data = JSON.parse(response);
                     console.log(data.status);
                     // Optionally, you can close the modal and refresh the data on the page
                     $('#verticalCentered').modal('hide');
                     if(data.status == 'success'){
                        toastr.success(data.message,'SIRIUS-I');
                     }else{
                        toastr.error(data.message,'SIRIUS-I');
                     }
                     // Refresh data on the page (e.g., reload a table or list)
                     // Refresh the Tabulator table
                     f.setData(); // This will reload the data from the ajaxURL
                  },
                  error: function(xhr, status, error) {
                     // Handle any errors
                     console.error(error);
                  }
            });
         });
      });
   </script>



</body>

</html>