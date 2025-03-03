<?php
include_once 'includes/db_func.php';
include_once 'func/user_check.php';
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-scheme="orange">

<head>
   <meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
   <meta name="description" content="SIRIUS-I is a responsive admin dashboard for managing inventory and certification for iron materials in Setegap Ventures Petroleum.">
   <title>Inventory Movement | SIRIUS-I</title>


   <!-- STYLESHEETS -->
   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

   <!-- Fonts [ OPTIONAL ] -->
   
   
   <style type="text/css">@font-face {font-family:Poppins;font-style:normal;font-weight:300;src:url(./assets/fonts/poppins/5.0.11/devanagari/300/normal.woff2);unicode-range:U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:300;src:url(./assets/fonts/poppins/5.0.11/latin/300/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:300;src:url(./assets/fonts/poppins/5.0.11/latin-ext/300/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:400;src:url(./assets/fonts/poppins/5.0.11/latin-ext/400/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:400;src:url(./assets/fonts/poppins/5.0.11/latin/400/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:400;src:url(./assets/fonts/poppins/5.0.11/devanagari/400/normal.woff2);unicode-range:U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:500;src:url(./assets/fonts/poppins/5.0.11/devanagari/500/normal.woff2);unicode-range:U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:500;src:url(./assets/fonts/poppins/5.0.11/latin-ext/500/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:500;src:url(./assets/fonts/poppins/5.0.11/latin/500/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:700;src:url(./assets/fonts/poppins/5.0.11/devanagari/700/normal.woff2);unicode-range:U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:700;src:url(./assets/fonts/poppins/5.0.11/latin-ext/700/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:700;src:url(./assets/fonts/poppins/5.0.11/latin/700/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(./assets/fonts/ubuntu/5.0.11/cyrillic-ext/400/normal.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(./assets/fonts/ubuntu/5.0.11/latin-ext/400/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(./assets/fonts/ubuntu/5.0.11/latin/400/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(./assets/fonts/ubuntu/5.0.11/greek-ext/400/normal.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(./assets/fonts/ubuntu/5.0.11/greek/400/normal.woff2);unicode-range:U+0370-03FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(./assets/fonts/ubuntu/5.0.11/cyrillic/400/normal.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(./assets/fonts/ubuntu/5.0.11/greek/500/normal.woff2);unicode-range:U+0370-03FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(./assets/fonts/ubuntu/5.0.11/greek-ext/500/normal.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(./assets/fonts/ubuntu/5.0.11/cyrillic/500/normal.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(./assets/fonts/ubuntu/5.0.11/cyrillic-ext/500/normal.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(./assets/fonts/ubuntu/5.0.11/latin-ext/500/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(./assets/fonts/ubuntu/5.0.11/latin/500/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(./assets/fonts/ubuntu/5.0.11/greek-ext/700/normal.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(./assets/fonts/ubuntu/5.0.11/latin/700/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(./assets/fonts/ubuntu/5.0.11/greek/700/normal.woff2);unicode-range:U+0370-03FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(./assets/fonts/ubuntu/5.0.11/cyrillic-ext/700/normal.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(./assets/fonts/ubuntu/5.0.11/cyrillic/700/normal.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(./assets/fonts/ubuntu/5.0.11/latin-ext/700/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}</style>


   <!-- Bootstrap CSS [ REQUIRED ] -->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">

   <!-- Nifty CSS [ REQUIRED ] -->
   <link rel="stylesheet" href="assets/css/nifty.min.css">

   <!-- Tabulator CSS [ REQUIRED ] -->
   <link rel="stylesheet" href="assets/pages/tabulator.594dba0f683f451ea86885101e908a107608649cfba970d58003968fc240d2a1.css">
   <!-- <link rel="stylesheet" href="assets/vendors/tabulator/css/tabulator-site.min.css"> -->

   <!-- Favicons [ OPTIONAL ] -->
   <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
   <link rel="manifest" href="site.webmanifest">


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
                     <li class="breadcrumb-item active" aria-current="page">Inventory Movement</li>
                  </ol>
               </nav>
               <!-- END : Breadcrumb -->


               <h1 class="page-title mb-0 mt-2">Inventory Movement</h1>

               <p class="lead">
                  Inventory Movement Tracking.
               </p>
            </div>

         </div>


         <div class="content__boxed">
            <div class="content__wrap">

               <div class="col-xl-12 mb-3">
                  <div class="card">
                     <div class="card-header">
                        <!-- Toolbar -->
                        <div class="d-flex gap-2 py-3" style="max-width: 700px;">
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
   <div class="scroll-container" id="scrollToTopContainer" style="display: none;">
      <a href="#root" class="scroll-page ratio ratio-1x1" aria-label="Scroll button"></a>
   </div>
   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
   <!-- END - SCROLL TO TOP BUTTON -->

   <!-- include('demo.php'); -->


<?php
   include('javascript.php');
?>


   <!-- Tabulator scripts [ OPTIONAL ] -->
   <script src="assets/vendors/tabulator/js/tabulator.min.js"></script>
   <script>
      document.addEventListener("DOMContentLoaded", () => {
         const f = new Tabulator("#_dm-tabulatorPagination", {
                  // data: e,
                  ajaxURL: "func/get_movement.php",
                  ajaxParams: { type: "all", year: "2024" },
                  layout: "fitDataFill",
                  layoutColumnsOnNewData:true,
                  pagination: "true",
                  paginationMode: "remote",
                  paginationSize: 10,
                  paginationSizeSelector: [10, 25, 50, 100],
                  columns: [
                     { title: "Product Name", field: "item", sorter: "string", frozen:true },
                     { title: "OEM Serial", field: "oem_serial", sorter: "string", frozen:true },
                     { title: "SVP Serial", field: "svp_serial", sorter: "string", frozen:true },
                     { title: "January", field: "January", sorter: "string" },
                     { title: "February", field: "February", sorter: "string" },
                     { title: "March", field: "March", sorter: "string" },
                     { title: "April", field: "April", sorter: "string" },
                     { title: "May", field: "May", sorter: "string" },
                     { title: "June", field: "June", sorter: "string" },
                     { title: "July", field: "July", sorter: "string" },
                     { title: "August", field: "August", sorter: "string" },
                     { title: "September", field: "September", sorter: "string" },
                     { title: "October", field: "October", sorter: "string" },
                     { title: "November", field: "November", sorter: "string" },
                     { title: "December", field: "December", sorter: "string" },
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
         // const a = new Tabulator("#_dm-tabulatorFilter", {
         //    data: [
         //          { id: 1, name: "Oli Bob", progress: 12, location: "United Kingdom", gender: "Male", rating: 1, col: "red", dob: "14/04/1984", car: 1, lucky_no: 5, lorem: "Lorem ipsum dolor sit amet, elit consectetur adipisicing " },
         //          { id: 2, name: "Mary May", progress: 7, location: "Germany", gender: "Female", rating: 2, col: "blue", dob: "14/05/1982", car: !0, lucky_no: 10, lorem: "Lorem ipsum dolor sit amet, elit consectetur adipisicing " },
         //          {
         //             id: 3,
         //             name: "Christine Lobowski",
         //             progress: 42,
         //             location: "France",
         //             gender: "Female",
         //             rating: 0,
         //             col: "green",
         //             dob: "22/05/1982",
         //             car: "true",
         //             lucky_no: 12,
         //             lorem: "Lorem ipsum dolor sit amet, elit consectetur adipisicing ",
         //          },
         //          { id: 4, name: "Brendon Philips", progress: 100, location: "USA", gender: "Male", rating: 1, col: "orange", dob: "01/08/1980", car: !1, lucky_no: 18, lorem: "Lorem ipsum dolor sit amet, elit consectetur adipisicing " },
         //          { id: 5, name: "Margret Marmajuke", progress: 16, location: "Canada", gender: "Female", rating: 5, col: "yellow", dob: "31/01/1999", car: !1, lucky_no: 33, lorem: "Lorem ipsum dolor sit amet, elit consectetur adipisicing " },
         //          { id: 6, name: "Frank Harbours", progress: 38, location: "Russia", gender: "Male", rating: 4, col: "red", dob: "12/05/1966", car: 1, lucky_no: 2, lorem: "Lorem ipsum dolor sit amet, elit consectetur adipisicing " },
         //          { id: 7, name: "Jamie Newhart", progress: 23, location: "India", gender: "Male", rating: 3, col: "green", dob: "14/05/1985", car: !0, lucky_no: 63, lorem: "Lorem ipsum dolor sit amet, elit consectetur adipisicing " },
         //          { id: 8, name: "Gemma Jane", progress: 60, location: "China", gender: "Female", rating: 0, col: "red", dob: "22/05/1982", car: "true", lucky_no: 72, lorem: "Lorem ipsum dolor sit amet, elit consectetur adipisicing " },
         //          { id: 9, name: "Emily Sykes", progress: 42, location: "South Korea", gender: "Female", rating: 1, col: "maroon", dob: "11/11/1970", car: !1, lucky_no: 44, lorem: "Lorem ipsum dolor sit amet, elit consectetur adipisicing " },
         //          { id: 10, name: "James Newman", progress: 73, location: "Japan", gender: "Male", rating: 5, col: "red", dob: "22/03/1998", car: !1, lucky_no: 9, lorem: "Lorem ipsum dolor sit amet, elit consectetur adipisicing " },
         //    ],
         //    height: "300px",
         //    layout: "fitColumns",
         //    columns: [
         //          { title: "Name", field: "name", width: 200 },
         //          { title: "Progress", field: "progress", formatter: "progress", cssClass: "tabulator-progress", sorter: "number" },
         //          { title: "Gender", field: "gender" },
         //          { title: "Rating", field: "rating", formatter: "star", hozAlign: "center", width: 100 },
         //          { title: "Favourite Color", field: "col" },
         //          { title: "Date Of Birth", field: "dob", hozAlign: "center", sorter: "date" },
         //          { title: "Driver", field: "car", hozAlign: "center", formatter: "tickCross" },
         //    ],
         // });
      });
   </script>


</body>

</html>