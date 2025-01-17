<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-scheme="navy">

<head>
   <meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
   <meta name="description" content="Interactive Tables and Data Grids for JavaScript.">
   <title>Tabulator | Nifty - Admin Template</title>


   <!-- STYLESHEETS -->
   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

   <!-- Fonts [ OPTIONAL ] -->
   
   
   <style type="text/css">@font-face {font-family:Poppins;font-style:normal;font-weight:300;src:url(/cf-fonts/s/poppins/5.0.11/latin-ext/300/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:300;src:url(/cf-fonts/s/poppins/5.0.11/latin/300/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:300;src:url(/cf-fonts/s/poppins/5.0.11/devanagari/300/normal.woff2);unicode-range:U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:400;src:url(/cf-fonts/s/poppins/5.0.11/latin/400/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:400;src:url(/cf-fonts/s/poppins/5.0.11/devanagari/400/normal.woff2);unicode-range:U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:400;src:url(/cf-fonts/s/poppins/5.0.11/latin-ext/400/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:500;src:url(/cf-fonts/s/poppins/5.0.11/latin-ext/500/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:500;src:url(/cf-fonts/s/poppins/5.0.11/latin/500/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:500;src:url(/cf-fonts/s/poppins/5.0.11/devanagari/500/normal.woff2);unicode-range:U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:700;src:url(/cf-fonts/s/poppins/5.0.11/devanagari/700/normal.woff2);unicode-range:U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:700;src:url(/cf-fonts/s/poppins/5.0.11/latin/700/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:700;src:url(/cf-fonts/s/poppins/5.0.11/latin-ext/700/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(/cf-fonts/s/ubuntu/5.0.11/greek/400/normal.woff2);unicode-range:U+0370-03FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(/cf-fonts/s/ubuntu/5.0.11/cyrillic/400/normal.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(/cf-fonts/s/ubuntu/5.0.11/cyrillic-ext/400/normal.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(/cf-fonts/s/ubuntu/5.0.11/latin/400/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(/cf-fonts/s/ubuntu/5.0.11/latin-ext/400/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(/cf-fonts/s/ubuntu/5.0.11/greek-ext/400/normal.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(/cf-fonts/s/ubuntu/5.0.11/greek-ext/500/normal.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(/cf-fonts/s/ubuntu/5.0.11/latin-ext/500/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(/cf-fonts/s/ubuntu/5.0.11/cyrillic-ext/500/normal.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(/cf-fonts/s/ubuntu/5.0.11/cyrillic/500/normal.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(/cf-fonts/s/ubuntu/5.0.11/greek/500/normal.woff2);unicode-range:U+0370-03FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(/cf-fonts/s/ubuntu/5.0.11/latin/500/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(/cf-fonts/s/ubuntu/5.0.11/cyrillic-ext/700/normal.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(/cf-fonts/s/ubuntu/5.0.11/latin/700/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(/cf-fonts/s/ubuntu/5.0.11/cyrillic/700/normal.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(/cf-fonts/s/ubuntu/5.0.11/greek/700/normal.woff2);unicode-range:U+0370-03FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(/cf-fonts/s/ubuntu/5.0.11/greek-ext/700/normal.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(/cf-fonts/s/ubuntu/5.0.11/latin-ext/700/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}</style>


   <!-- Bootstrap CSS [ REQUIRED ] -->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">

   <!-- Nifty CSS [ REQUIRED ] -->
   <link rel="stylesheet" href="assets/css/nifty.min.css">


   <!-- Favicons [ OPTIONAL ] -->
   <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
   <link rel="manifest" href="site.webmanifest">


   <!-- Tabulator styles [ OPTIONAL ] -->
   <link rel="stylesheet" href="assets/pages/tabulator.594dba0f683f451ea86885101e908a107608649cfba970d58003968fc240d2a1.css">

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
   <div id="root" class="root mn--max tm--expanded-hd">

      <!-- CONTENTS -->
      <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
      <section id="content" class="content">
         <div class="content__header content__boxed overlapping">
            <div class="content__wrap">


               <!-- Breadcrumb -->
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="">Home</a></li>
                     <li class="breadcrumb-item"><a href="tables/">Tables</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Tabulator</li>
                  </ol>
               </nav>
               <!-- END : Breadcrumb -->


               <h1 class="page-title mb-0 mt-2">Tabulator</h1>

               <p class="lead">
                  Interactive Tables and Data Grids for JavaScript.
               </p>
            </div>

         </div>


         <div class="content__boxed">
            <div class="content__wrap">
               <div class="card mb-3">
                  <div class="card-body">
                     <div class="mb-3">
                        <h2>Tabulator</h2>
                        <p class="m-0">Tabulator allows you to create interactive tables in seconds from any HTML Table, Javascript Array or JSON formatted data.</p>
                     </div>

                     <hr>

                     <h3 class="h4">Basic Example</h3>

                     <!-- Basic table -->
                     <div id="_dm-tabulatorBasic" class="table"></div>
                     <!-- END : Basic table -->


                  </div>
               </div>


               <div class="card mb-3">
                  <div class="card-body">

                     <h3 class="h4">Resizable Columns</h3>

                     <!-- Resizable Columns -->
                     <div id="_dm-tabulatorResizableColumns" class="table table-striped table-bordered"></div>
                     <!-- END : Resizable Columns -->


                  </div>
               </div>


               <h2 class="mt-5 mb-3">Bootstrap styles</h2>
               <div class="row">
                  <div class="col-xl-6 mb-3">
                     <div class="card">
                        <div class="card-body">
                           <h3 class="h4">Striped rows</h3>

                           <!-- Table striped -->
                           <div id="_dm-tabulatorStriped" class="table table-striped"></div>
                           <!-- END : Table striped -->


                        </div>
                     </div>

                  </div>
                  <div class="col-xl-6 mb-3">
                     <div class="card">
                        <div class="card-body">
                           <h3 class="h4">Bordered tables</h3>

                           <!-- Bordered tables -->
                           <div id="_dm-tabulatorBorderedTable" class="table table-bordered"></div>
                           <!-- END : Bordered tables -->


                        </div>
                     </div>

                  </div>
               </div>


               <h2 class="mt-5 mb-3">Advanced options</h2>
               <div class="row">
                  <div class="col-xl-6 mb-3">
                     <div class="card">
                        <div class="card-body">
                           <h3 class="h4">Pagination</h3>

                           <!-- Pagination -->
                           <div id="_dm-tabulatorPagination" class="table table-striped m-0"></div>
                           <!-- END : Pagination -->


                        </div>
                     </div>

                  </div>
                  <div class="col-xl-6 mb-3">
                     <div class="card">
                        <div class="card-body">
                           <h3 class="h4">Editing Data ( click name field to edit the name )</h3>

                           <!-- Edit Data -->
                           <div id="_dm-tabulatorEditData" class="table table-striped m-0"></div>
                           <!-- END : Edit Data -->


                        </div>
                     </div>

                  </div>
               </div>


               <div class="row">
                  <div class="col-xl-6 mb-3">
                     <div class="card">
                        <div class="card-body">
                           <h3 class="h4">Collapsed list</h3>

                           <!-- Collapsed list -->
                           <div id="_dm-tabulatorCollapsedList" class="table table-striped"></div>
                           <!-- END : Collapsed list -->


                        </div>
                     </div>

                  </div>
                  <div class="col-xl-6 mb-3">
                     <div class="card">
                        <div class="card-body">
                           <h3 class="h4">Vertical column headers</h3>

                           <!-- Vertical Column Headers -->
                           <div id="_dm-tabulatorVerticalHeaders" class="table table-striped m-0"></div>
                           <!-- END : Vertical Column Headers -->


                        </div>
                     </div>

                  </div>
               </div>


               <div class="card mb-3">
                  <div class="card-body">
                     <h3 class="h4">Formatting data</h3>

                     <!-- Formatting data table -->
                     <div id="_dm-tabulatorFormatData" class="table table-striped"></div>
                     <!-- END : Formatting data table -->


                  </div>
               </div>


               <div class="card">
                  <div class="card-header">
                     <h3 class="h4 card-title">Filter Data</h3>

                     <!-- Toolbar -->
                     <div class="d-flex gap-2 py-3" style="max-width: 700px;">
                        <select id="_dm-filterField" class="form-select">
                           <option value="none">Select field</option>
                           <option value="name">Name</option>
                           <option value="gender">Gender</option>
                           <option value="rating">Rating</option>
                           <option value="col">Favourite Colour</option>
                           <option value="dob">Date Of Birth</option>
                           <option value="car">Drives</option>
                           <option value="function">Drives & Rating < 3</option>
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


                     <!-- Filter Data -->
                     <div id="_dm-tabulatorFilter" class="table table-striped"></div>
                     <!-- END : Filter Data -->


                  </div>
               </div>

            </div>
         </div>


         <!-- FOOTER -->

         <footer class="mt-auto">
            <div class="content__boxed">
               <div class="content__wrap py-3 py-md-1 d-flex flex-column flex-md-row align-items-md-center">
                  <div class="text-nowrap mb-4 mb-md-0">Copyright &copy; 2024 <a href="#" class="ms-1 btn-link fw-bold">My Company</a></div>
                  <nav class="nav flex-column gap-1 flex-md-row gap-md-3 ms-md-auto">
                     <a class="nav-link link-offset-3 link-underline-hover px-0" href="#">Policy Privacy</a>
                     <a class="nav-link link-offset-3 link-underline-hover px-0" href="#">Terms and conditions</a>
                     <a class="nav-link link-offset-3 link-underline-hover px-0" href="#">Contact Us</a>
                  </nav>
               </div>
            </div>
         </footer>

         <!-- END - FOOTER -->


      </section>

      <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
      <!-- END - CONTENTS -->


      <!-- HEADER -->
      <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
      <header class="header">
         <div class="header__inner">

            <!-- Brand -->
            <div class="header__brand">
               <div class="brand-wrap">

                  <!-- Brand logo -->
                  <a href="" class="brand-img stretched-link">
                     <img src="assets/img/logo.svg" alt="Nifty Logo" class="Nifty logo" width="16" height="16">
                  </a>


                  <!-- Brand title -->
                  <div class="brand-title">Nifty</div>


                  <!-- You can also use IMG or SVG instead of a text element. -->
                  <!--
            <div class="brand-title">
               <img src="assets/img/brand-title.svg" alt="Brand Title">
            </div>
            -->

               </div>
            </div>
            <!-- End - Brand -->


            <div class="header__content">

               <!-- Content Header - Left Side: -->
               <div class="header__content-start">


                  <!-- Navigation Toggler -->
                  <button type="button" class="nav-toggler header__btn btn btn-icon btn-sm" aria-label="Nav Toggler">
                     <i class="demo-psi-list-view"></i>
                  </button>

                  <div class="vr mx-1 d-none d-md-block"></div>

                  <!-- Searchbox -->
                  <div class="header-searchbox">

                     <!-- Searchbox toggler for small devices -->
                     <label for="header-search-input" class="header__btn d-md-none btn btn-icon rounded-pill shadow-none border-0 btn-sm" type="button">
                        <i class="demo-psi-magnifi-glass"></i>
                     </label>

                     <!-- Searchbox input -->
                     <form class="searchbox searchbox--auto-expand searchbox--hide-btn input-group">
                        <input id="header-search-input" class="searchbox__input form-control bg-transparent" type="search" placeholder="Type for search . . ." aria-label="Search">
                        <div class="searchbox__backdrop">
                           <button class="searchbox__btn header__btn btn btn-icon rounded shadow-none border-0 btn-sm" type="button">
                              <i class="demo-pli-magnifi-glass"></i>
                           </button>
                        </div>
                     </form>
                  </div>
               </div>
               <!-- End - Content Header - Left Side -->


               <!-- Content Header - Right Side: -->
               <div class="header__content-end">


                  <!-- Mega Dropdown -->
                  <div class="dropdown">

                     <!-- Toggler -->
                     <button class="header__btn btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-label="Megamenu dropdown" aria-expanded="false">
                        <i class="demo-psi-layout-grid"></i>
                     </button>

                     <!-- Mega Dropdown Menu -->
                     <div class="dropdown-menu dropdown-menu-end p-3 mega-dropdown">
                        <div class="row">
                           <div class="col-md-3">


                              <!-- Pages List Group -->
                              <div class="list-group list-group-borderless">
                                 <div class="list-group-item d-flex align-items-center border-bottom mb-2">
                                    <div class="flex-shrink-0 me-2">
                                       <i class="demo-pli-file fs-4"></i>
                                    </div>
                                    <h5 class="flex-grow-1 m-0">Pages</h5>
                                 </div>
                                 <a href="#" class="list-group-item list-group-item-action">Profile</a>
                                 <a href="#" class="list-group-item list-group-item-action">Search Result</a>
                                 <a href="#" class="list-group-item list-group-item-action">FAQ</a>
                                 <a href="#" class="list-group-item list-group-item-action">Screen Lock</a>
                                 <a href="#" class="list-group-item list-group-item-action">Maintenance</a>
                                 <a href="#" class="list-group-item list-group-item-action">Invoices</a>
                                 <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Disabled Item</a>
                              </div>


                           </div>
                           <div class="col-md-3">


                              <!-- Mailbox list group -->
                              <div class="list-group list-group-borderless mb-3">
                                 <div class="list-group-item d-flex align-items-center border-bottom mb-2">
                                    <div class="flex-shrink-0 me-2">
                                       <i class="demo-pli-mail fs-4"></i>
                                    </div>
                                    <h5 class="flex-grow-1 m-0">Mailbox</h5>
                                 </div>
                                 <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                    Inbox <span class="badge bg-danger rounded-pill">14</span>
                                 </a>
                                 <a href="#" class="list-group-item list-group-item-action">Read Messages</a>
                                 <a href="#" class="list-group-item list-group-item-action">Compose</a>
                                 <a href="#" class="list-group-item list-group-item-action">Template</a>
                              </div>


                              <!-- News -->
                              <div class="list-group list-group-borderless bg-warning-subtle py-2">
                                 <div class="list-group-item d-flex align-items-center border-bottom text-warning-emphasis">
                                    <div class="flex-shrink-0 me-2">
                                       <i class="demo-pli-calendar-4 fs-4"></i>
                                    </div>
                                    <h5 class="flex-grow-1 m-0 text-reset">News</h5>
                                 </div>
                                 <small class="list-group-item text-warning-emphasis">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic dolore unde autem, molestiae eum laborum aliquid at commodi cum? Blanditiis.
                                 </small>
                              </div>


                           </div>
                           <div class="col-md-3">


                              <!-- List Group -->
                              <div class="list-group list-group-borderless">
                                 <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                    <div class="flex-shrink-0 me-3">
                                       <i class="demo-pli-data-settings fs-1"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                       <div class="d-flex justify-content-between align-items-start">
                                          <a href="#" class="h5 d-block mb-0 stretched-link text-decoration-none">Data Backup</a>
                                          <span class="badge bg-success rounded-pill ms-auto">40%</span>
                                       </div>
                                       <small class="text-body-secondary">Current usage of disks for backups.</small>
                                    </div>
                                 </div>

                                 <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                    <div class="flex-shrink-0 me-3">
                                       <i class="demo-pli-support fs-1"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                       <a href="#" class="h5 d-block mb-0 stretched-link text-decoration-none">Support</a>
                                       <small class="text-body-secondary">Have any questions ? please don't hesitate to ask.</small>
                                    </div>
                                 </div>

                                 <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                    <div class="flex-shrink-0 me-3">
                                       <i class="demo-pli-computer-secure fs-1"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                       <a href="#" class="h5 d-block mb-0 stretched-link text-decoration-none">Security</a>
                                       <small class="text-body-secondary">Our devices are secure and up-to-date.</small>
                                    </div>
                                 </div>


                                 <div class="list-group-item list-group-item-action d-flex align-items-start">
                                    <div class="flex-shrink-0 me-3">
                                       <i class="demo-pli-map-2 fs-1"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                       <a href="#" class="h5 d-block mb-0 stretched-link text-decoration-none">Location</a>
                                       <small class="text-body-secondary">From our location up here, we kept in close touch.</small>
                                    </div>
                                 </div>
                              </div>


                           </div>
                           <div class="col-md-3">

                              <!-- Simple gallery -->
                              <div class="d-grid gap-2 pt-4 pt-md-0">
                                 <div class="row g-1 rounded-3 overflow-hidden">
                                    <div class="col-6 mt-0">
                                       <img class="img-fluid" src="assets/img/megamenu/img-1.jpg" alt="thumbnails" loading="lazy">
                                    </div>
                                    <div class="col-6 mt-0">
                                       <img class="img-fluid" src="assets/img/megamenu/img-3.jpg" alt="thumbnails" loading="lazy">
                                    </div>
                                    <div class="col-6">
                                       <img class="img-fluid" src="assets/img/megamenu/img-2.jpg" alt="thumbnails" loading="lazy">
                                    </div>
                                    <div class="col-6">
                                       <img class="img-fluid" src="assets/img/megamenu/img-4.jpg" alt="thumbnails" loading="lazy">
                                    </div>
                                 </div>
                                 <a href="#" class="btn btn-primary">Browse Gallery</a>
                              </div>


                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End - Mega Dropdown -->


                  <!-- Notification Dropdown -->
                  <div class="dropdown">

                     <!-- Toggler -->
                     <button class="header__btn btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-label="Notification dropdown" aria-expanded="false">
                        <span class="d-block position-relative">
                           <i class="demo-psi-bell"></i>

                           <span class="badge badge-super rounded-pill bg-danger p-1">
                              <span class="visually-hidden">unread messages</span>
                           </span>

                           <!-- Set custom notification count -->
                           <!--
                     <span class="badge badge-super rounded-pill bg-danger p-1">
                     	 19<span class="visually-hidden">unread messages</span>
                     </span>
                     -->

                        </span>
                     </button>


                     <!-- Notification dropdown menu -->
                     <div class="dropdown-menu dropdown-menu-end w-md-300px">
                        <div class="border-bottom px-3 py-2 mb-3">
                           <h5>Notifications</h5>
                        </div>


                        <div class="list-group list-group-borderless">


                           <!-- List item -->
                           <div class="list-group-item list-group-item-action d-flex align-items-center mb-3">
                              <div class="flex-shrink-0 me-3">
                                 <i class="demo-psi-data-settings text-danger fs-2"></i>
                              </div>
                              <div class="flex-grow-1">
                                 <a href="#" class="h6 fw-normal d-block mb-0 stretched-link text-decoration-none">Your storage is full</a>
                                 <small class="text-body-secondary">Local storage is nearly full.</small>
                              </div>
                           </div>


                           <!-- List item -->
                           <div class="list-group-item list-group-item-action d-flex align-items-center mb-3">
                              <div class="flex-shrink-0 me-3">
                                 <i class="demo-psi-pen-5 text-info fs-2"></i>
                              </div>
                              <div class="flex-grow-1">
                                 <a href="#" class="h6 fw-normal d-block mb-0 stretched-link text-decoration-none">Writing a New Article</a>
                                 <small class="text-body-secondary">Wrote a news article for the John Mike</small>
                              </div>
                           </div>


                           <!-- List item -->
                           <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                              <div class="flex-shrink-0 me-3">
                                 <i class="demo-psi-speech-bubble-3 text-success fs-2"></i>
                              </div>
                              <div class="flex-grow-1">
                                 <div class="d-flex justify-content-between align-items-start">
                                    <a href="#" class="h6 fw-normal mb-0 stretched-link text-decoration-none">Comment sorting</a>
                                    <span class="badge bg-info rounded ms-auto">NEW</span>
                                 </div>
                                 <small class="text-body-secondary">You have 1,256 unsorted comments.</small>
                              </div>
                           </div>


                           <!-- List item -->
                           <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                              <div class="flex-shrink-0 me-3">
                                 <img class="img-xs rounded-circle" src="assets/img/profile-photos/7.png" alt="Profile Picture" loading="lazy">
                              </div>
                              <div class="flex-grow-1">
                                 <a href="#" class="h6 fw-normal d-block mb-0 stretched-link text-decoration-none">Lucy Sent you a message</a>
                                 <small class="text-body-secondary">30 minutes ago</small>
                              </div>
                           </div>


                           <!-- List item -->
                           <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                              <div class="flex-shrink-0 me-3">
                                 <img class="img-xs rounded-circle" src="assets/img/profile-photos/3.png" alt="Profile Picture" loading="lazy">
                              </div>
                              <div class="flex-grow-1">
                                 <a href="#" class="h6 fw-normal d-block mb-0 stretched-link text-decoration-none">Jackson Sent you a message</a>
                                 <small class="text-body-secondary">1 hours ago</small>
                              </div>
                           </div>

                           <div class="text-center mb-2">
                              <a href="#" class="btn-link text-primary icon-link icon-link-hover">
                                 Show all Notifications
                                 <i class="bi demo-psi-arrow-out-right"></i>
                              </a>
                           </div>

                        </div>
                     </div>
                  </div>
                  <!-- End - Notification dropdown -->


                  <!-- User dropdown -->
                  <div class="dropdown">

                     <!-- Toggler -->
                     <button class="header__btn btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-label="User dropdown" aria-expanded="false">
                        <i class="demo-psi-male"></i>
                     </button>


                     <!-- User dropdown menu -->
                     <div class="dropdown-menu dropdown-menu-end w-md-450px">

                        <!-- User dropdown header -->
                        <div class="d-flex align-items-center border-bottom px-3 py-2">
                           <div class="flex-shrink-0">
                              <img class="img-sm rounded-circle" src="assets/img/profile-photos/4.png" alt="Profile Picture" loading="lazy">
                           </div>
                           <div class="flex-grow-1 ms-3">
                              <h5 class="mb-0">Aaron Chavez</h5>
                              <span class="text-body-secondary fst-italic">aaron_chavez@example.com</span>
                           </div>
                        </div>

                        <div class="row">
                           <div class="col-md-7">

                              <!-- Simple widget and reports -->
                              <div class="list-group list-group-borderless mb-3">
                                 <div class="list-group-item text-center border-bottom mb-3">
                                    <p class="h1 display-1 text-primary fw-semibold">17</p>
                                    <p class="h6 mb-0"><i class="demo-pli-basket-coins fs-3 me-2"></i> New orders</p>
                                    <small class="text-body-secondary">You have new orders</small>
                                 </div>
                                 <div class="list-group-item py-0 d-flex justify-content-between align-items-center">
                                    Today Earning
                                    <small class="fw-bolder">$578</small>
                                 </div>
                                 <div class="list-group-item py-0 d-flex justify-content-between align-items-center">
                                    Tax
                                    <small class="fw-bolder text-danger">- $28</small>
                                 </div>
                                 <div class="list-group-item py-0 d-flex justify-content-between align-items-center">
                                    Total Earning
                                    <span class="fw-bolder text-body-emphasis">$6,578</span>
                                 </div>
                              </div>


                           </div>
                           <div class="col-md-5">

                              <!-- User menu link -->
                              <div class="list-group list-group-borderless h-100 py-3">
                                 <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                    <span><i class="demo-pli-mail fs-5 me-2"></i> Messages</span>
                                    <span class="badge bg-danger rounded-pill">14</span>
                                 </a>
                                 <a href="#" class="list-group-item list-group-item-action">
                                    <i class="demo-pli-male fs-5 me-2"></i> Profile
                                 </a>
                                 <a href="#" class="list-group-item list-group-item-action">
                                    <i class="demo-pli-gear fs-5 me-2"></i> Settings
                                 </a>

                                 <a href="#" class="list-group-item list-group-item-action mt-auto">
                                    <i class="demo-pli-computer-secure fs-5 me-2"></i> Lock screen
                                 </a>
                                 <a href="#" class="list-group-item list-group-item-action">
                                    <i class="demo-pli-unlock fs-5 me-2"></i> Logout
                                 </a>
                              </div>


                           </div>
                        </div>

                     </div>
                  </div>
                  <!-- End - User dropdown -->


                  <div class="vr mx-1 d-none d-md-block"></div>

                  <div class="form-check form-check-alt form-switch mx-md-2">
                     <input id="headerThemeToggler" class="form-check-input mode-switcher" type="checkbox" role="switch">
                     <label class="form-check-label ps-1 fw-bold d-none d-md-flex align-items-center " for="headerThemeToggler">
                        <i class="mode-switcher-icon icon-light demo-psi-sun fs-5"></i>
                        <i class="mode-switcher-icon icon-dark d-none demo-psi-half-moon"></i>
                     </label>
                  </div>

                  <div class="vr mx-1 d-none d-md-block"></div>

                  <!-- Sidebar Toggler -->
                  <button class="sidebar-toggler header__btn btn btn-icon btn-sm" type="button" aria-label="Sidebar button">
                     <i class="demo-psi-dot-vertical"></i>
                  </button>


               </div>
            </div>
         </div>
      </header>
      <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
      <!-- END - HEADER -->


      <!-- MAIN NAVIGATION -->
      <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
      <nav id="mainnav-container" class="mainnav">
         <div class="mainnav__inner">

            <!-- Navigation menu -->
            <div class="mainnav__top-content scrollable-content pb-5">


               <!-- Profile Widget -->
               <div id="_dm-mainnavProfile" class="mainnav__widget my-3 hv-outline-parent">

                  <!-- Profile picture  -->
                  <div class="mininav-toggle text-center py-2">
                     <img class="mainnav__avatar img-md rounded-circle hv-oc" src="assets/img/profile-photos/1.png" alt="Profile Picture">
                  </div>


                  <div class="mininav-content collapse d-mn-max">
                     <span data-popper-arrow class="arrow"></span>
                     <div class="d-grid">

                        <!-- User name and position -->
                        <button class="mainnav-widget-toggle d-block btn border-0 p-2" data-bs-toggle="collapse" data-bs-target="#usernav" aria-expanded="false" aria-controls="usernav">
                           <span class="dropdown-toggle d-flex justify-content-center align-items-center">
                              <h5 class="mb-0 me-3">Aaron Chavez</h5>
                           </span>
                           <small class="text-body-secondary">Administrator</small>
                        </button>


                        <!-- Collapsed user menu -->
                        <div id="usernav" class="nav flex-column collapse">
                           <a href="#" class="nav-link d-flex justify-content-between align-items-center">
                              <span><i class="demo-pli-mail fs-5 me-2"></i><span class="ms-1">Messages</span></span>
                              <span class="badge bg-danger rounded-pill">14</span>
                           </a>
                           <a href="#" class="nav-link">
                              <i class="demo-pli-male fs-5 me-2"></i>
                              <span class="ms-1">Profile</span>
                           </a>
                           <a href="#" class="nav-link">
                              <i class="demo-pli-gear fs-5 me-2"></i>
                              <span class="ms-1">Settings</span>
                           </a>
                           <a href="#" class="nav-link">
                              <i class="demo-pli-computer-secure fs-5 me-2"></i>
                              <span class="ms-1">Lock screen</span>
                           </a>
                           <a href="#" class="nav-link">
                              <i class="demo-pli-unlock fs-5 me-2"></i>
                              <span class="ms-1">Logout</span>
                           </a>
                        </div>


                     </div>
                  </div>

               </div>
               <!-- End - Profile widget -->


               <!-- Navigation Category -->
               <div class="mainnav__categoriy py-3">
                  <h6 class="mainnav__caption mt-0 fw-bold">Navigation</h6>
                  <ul class="mainnav__menu nav flex-column">

                     <!-- Link with submenu -->
                     <li class="nav-item has-sub">


                        <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-home fs-5 me-2"></i>
                           <span class="nav-label ms-1">Dashboard</span>
                        </a>

                        <!-- Dashboard submenu list -->
                        <ul class="mininav-content nav collapse">
                           <li data-popper-arrow class="arrow"></li>
                           <li class="nav-item">
                              <a href="" class="nav-link">Dashboard 1</a>
                           </li>
                           <li class="nav-item">
                              <a href="dashboard-2/" class="nav-link">Dashboard 2</a>
                           </li>
                           <li class="nav-item">
                              <a href="dashboard-3/" class="nav-link">Dashboard 3</a>
                           </li>

                        </ul>
                        <!-- END : Dashboard submenu list -->

                     </li>
                     <!-- END : Link with submenu -->

                     <!-- Link with submenu -->
                     <li class="nav-item has-sub">


                        <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-split-vertical-2 fs-5 me-2"></i>
                           <span class="nav-label ms-1">Layouts</span>
                        </a>

                        <!-- Layouts submenu list -->
                        <ul class="mininav-content nav collapse">
                           <li data-popper-arrow class="arrow"></li>
                           <li class="nav-item">
                              <a href="layouts/minimal-navigation/" class="nav-link">Mini Navigation</a>
                           </li>
                           <li class="nav-item">
                              <a href="layouts/push-navigation/" class="nav-link">Push Navigation</a>
                           </li>
                           <li class="nav-item">
                              <a href="layouts/slide-navigation/" class="nav-link">Slide Navigation</a>
                           </li>
                           <li class="nav-item">
                              <a href="layouts/reveal-navigation/" class="nav-link">Reveal Navigation</a>
                           </li>
                           <li class="nav-item">
                              <a href="layouts/stuck-sidebar/" class="nav-link">Stuck Sidebar</a>
                           </li>
                           <li class="nav-item">
                              <a href="layouts/pinned-sidebar/" class="nav-link">Pinned Sidebar</a>
                           </li>
                           <li class="nav-item">
                              <a href="layouts/unite-sidebar/" class="nav-link">Unite Sidebar</a>
                           </li>
                           <li class="nav-item">
                              <a href="layouts/sticky-header/" class="nav-link">Sticky Header</a>
                           </li>
                           <li class="nav-item">
                              <a href="layouts/sticky-navigation/" class="nav-link">Sticky Navigation</a>
                           </li>

                        </ul>
                        <!-- END : Layouts submenu list -->

                     </li>
                     <!-- END : Link with submenu -->

                     <!-- Regular menu link -->
                     <li class="nav-item">
                        <a href="widgets/" class="nav-link mininav-toggle"><i class="demo-pli-gear fs-5 me-2"></i>

                           <span class="nav-label mininav-content ms-1">
                              <span data-popper-arrow class="arrow"></span>
                              Widgets
                           </span>
                        </a>
                     </li>
                     <!-- END : Regular menu link -->


                  </ul>
               </div>
               <!-- END : Navigation Category -->


               <!-- Components Category -->
               <div class="mainnav__categoriy py-3">
                  <h6 class="mainnav__caption mt-0 fw-bold">Components</h6>
                  <ul class="mainnav__menu nav flex-column">

                     <!-- Link with submenu -->
                     <li class="nav-item has-sub">


                        <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-boot-2 fs-5 me-2"></i>
                           <span class="nav-label ms-1">Ui Elements</span>
                        </a>

                        <!-- Ui Elements submenu list -->
                        <ul class="mininav-content nav collapse">
                           <li data-popper-arrow class="arrow"></li>
                           <li class="nav-item">
                              <a href="ui-elements/buttons/" class="nav-link">Buttons</a>
                           </li>
                           <li class="nav-item">
                              <a href="ui-elements/cards/" class="nav-link">Cards</a>
                           </li>
                           <li class="nav-item">
                              <a href="ui-elements/dropdowns/" class="nav-link">Dropdowns</a>
                           </li>
                           <li class="nav-item">
                              <a href="ui-elements/components/" class="nav-link">Components</a>
                           </li>
                           <li class="nav-item">
                              <a href="ui-elements/list-group/" class="nav-link">List Group</a>
                           </li>
                           <li class="nav-item">
                              <a href="ui-elements/typography/" class="nav-link">Typography</a>
                           </li>
                           <li class="nav-item">
                              <a href="ui-elements/modals/" class="nav-link">Modals</a>
                           </li>
                           <li class="nav-item">
                              <a href="ui-elements/progress/" class="nav-link">Progress</a>
                           </li>
                           <li class="nav-item">
                              <a href="ui-elements/placeholders/" class="nav-link d-flex align-items-center">Placeholders<span class="badge bg-danger ms-auto">NEW</span></a>
                           </li>
                           <li class="nav-item">
                              <a href="ui-elements/tabs-accordions/" class="nav-link">Tabs &amp; Accordions</a>
                           </li>
                           <li class="nav-item">
                              <a href="ui-elements/tooltips-popovers/" class="nav-link">Tooltips &amp; Popover</a>
                           </li>

                        </ul>
                        <!-- END : Ui Elements submenu list -->

                     </li>
                     <!-- END : Link with submenu -->

                     <!-- Link with submenu -->
                     <li class="nav-item has-sub">


                        <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-pen-5 fs-5 me-2"></i>
                           <span class="nav-label ms-1">Forms</span>
                        </a>

                        <!-- Forms submenu list -->
                        <ul class="mininav-content nav collapse">
                           <li data-popper-arrow class="arrow"></li>
                           <li class="nav-item">
                              <a href="forms/general/" class="nav-link">General</a>
                           </li>
                           <li class="nav-item">
                              <a href="forms/tags/" class="nav-link">Tags</a>
                           </li>
                           <li class="nav-item">
                              <a href="forms/date-time-picker/" class="nav-link">Date Time Picker</a>
                           </li>
                           <li class="nav-item">
                              <a href="forms/validation/" class="nav-link">Validation</a>
                           </li>
                           <li class="nav-item">
                              <a href="forms/wizard/" class="nav-link">Wizard</a>
                           </li>
                           <li class="nav-item">
                              <a href="forms/file-uploads/" class="nav-link">File Uploads</a>
                           </li>
                           <li class="nav-item">
                              <a href="forms/text-editor/" class="nav-link">Text Editor</a>
                           </li>

                        </ul>
                        <!-- END : Forms submenu list -->

                     </li>
                     <!-- END : Link with submenu -->

                     <!-- Link with submenu -->
                     <li class="nav-item has-sub">


                        <a href="#" class="mininav-toggle nav-link active"><i class="demo-pli-receipt-4 fs-5 me-2"></i>
                           <span class="nav-label ms-1">Tables</span>
                        </a>

                        <!-- Tables submenu list -->
                        <ul class="mininav-content nav collapse">
                           <li data-popper-arrow class="arrow"></li>
                           <li class="nav-item">
                              <a href="tables/static-tables/" class="nav-link">Static Tables</a>
                           </li>
                           <li class="nav-item">
                              <a href="tables/gridjs/" class="nav-link">Gridjs</a>
                           </li>
                           <li class="nav-item">
                              <a href="tables/tabulator/" class="nav-link active">Tabulator</a>
                           </li>

                        </ul>
                        <!-- END : Tables submenu list -->

                     </li>
                     <!-- END : Link with submenu -->

                     <!-- Link with submenu -->
                     <li class="nav-item has-sub">


                        <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-bar-chart fs-5 me-2"></i>
                           <span class="nav-label ms-1">Charts</span>
                        </a>

                        <!-- Charts submenu list -->
                        <ul class="mininav-content nav collapse">
                           <li data-popper-arrow class="arrow"></li>
                           <li class="nav-item">
                              <a href="charts/chart.js/" class="nav-link">ChartJS</a>
                           </li>
                           <li class="nav-item">
                              <a href="charts/charts.css/" class="nav-link">ChartsCSS</a>
                           </li>
                           <li class="nav-item">
                              <a href="charts/sparklines/" class="nav-link">Sparklines</a>
                           </li>

                        </ul>
                        <!-- END : Charts submenu list -->

                     </li>
                     <!-- END : Link with submenu -->

                     <!-- Link with submenu -->
                     <li class="nav-item has-sub">


                        <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-repair fs-5 me-2"></i>
                           <span class="nav-label ms-1">Miscellaneous</span>
                        </a>

                        <!-- Miscellaneous submenu list -->
                        <ul class="mininav-content nav collapse">
                           <li data-popper-arrow class="arrow"></li>
                           <li class="nav-item">
                              <a href="miscellaneous/timeline/" class="nav-link">Timeline</a>
                           </li>
                           <li class="nav-item">
                              <a href="miscellaneous/loader.css/" class="nav-link">Loader.CSS</a>
                           </li>
                           <li class="nav-item">
                              <a href="miscellaneous/spinkit/" class="nav-link">Spinkit</a>
                           </li>
                           <li class="nav-item">
                              <a href="miscellaneous/clipboard/" class="nav-link">Clipboard</a>
                           </li>

                        </ul>
                        <!-- END : Miscellaneous submenu list -->

                     </li>
                     <!-- END : Link with submenu -->


                  </ul>
               </div>
               <!-- END : Components Category -->


               <!-- More Category -->
               <div class="mainnav__categoriy py-3">
                  <h6 class="mainnav__caption mt-0 fw-bold">More</h6>
                  <ul class="mainnav__menu nav flex-column">

                     <!-- Link with submenu -->
                     <li class="nav-item has-sub">


                        <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-computer-secure fs-5 me-2"></i>
                           <span class="nav-label ms-1">App Views</span>
                        </a>

                        <!-- App Views submenu list -->
                        <ul class="mininav-content nav collapse">
                           <li data-popper-arrow class="arrow"></li>
                           <li class="nav-item">
                              <a href="app-views/file-manager/" class="nav-link">File Manager</a>
                           </li>
                           <li class="nav-item">
                              <a href="app-views/users/" class="nav-link">Users</a>
                           </li>
                           <li class="nav-item">
                              <a href="app-views/users-2/" class="nav-link">Users 2</a>
                           </li>
                           <li class="nav-item">
                              <a href="app-views/profile/" class="nav-link">Profile</a>
                           </li>
                           <li class="nav-item">
                              <a href="app-views/calendar/" class="nav-link">Calendar</a>
                           </li>
                           <li class="nav-item">
                              <a href="app-views/taskboard/" class="nav-link">Taskboard</a>
                           </li>
                           <li class="nav-item">
                              <a href="app-views/chat/" class="nav-link">Chat</a>
                           </li>
                           <li class="nav-item">
                              <a href="app-views/contact-us/" class="nav-link">Contact Us</a>
                           </li>

                        </ul>
                        <!-- END : App Views submenu list -->

                     </li>
                     <!-- END : Link with submenu -->

                     <!-- Link with submenu -->
                     <li class="nav-item has-sub">


                        <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-speech-bubble-5 fs-5 me-2"></i>
                           <span class="nav-label ms-1">Blog Apps</span>
                        </a>

                        <!-- Blog Apps submenu list -->
                        <ul class="mininav-content nav collapse">
                           <li data-popper-arrow class="arrow"></li>
                           <li class="nav-item">
                              <a href="blog-apps/blog/" class="nav-link">Blog</a>
                           </li>
                           <li class="nav-item">
                              <a href="blog-apps/blog-list/" class="nav-link">Blog List</a>
                           </li>
                           <li class="nav-item">
                              <a href="blog-apps/blog-list-2/" class="nav-link">Blog List 2</a>
                           </li>
                           <li class="nav-item">
                              <a href="blog-apps/blog-article/" class="nav-link">Blog Article</a>
                           </li>
                           <li class="nav-item">
                              <a href="blog-apps/manage-posts/" class="nav-link">Manage Posts</a>
                           </li>
                           <li class="nav-item">
                              <a href="blog-apps/add-edit-posts/" class="nav-link">Add Edit Posts</a>
                           </li>

                        </ul>
                        <!-- END : Blog Apps submenu list -->

                     </li>
                     <!-- END : Link with submenu -->

                     <!-- Link with submenu -->
                     <li class="nav-item has-sub">


                        <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-mail fs-5 me-2"></i>
                           <span class="nav-label ms-1">Email</span>
                        </a>

                        <!-- Email submenu list -->
                        <ul class="mininav-content nav collapse">
                           <li data-popper-arrow class="arrow"></li>
                           <li class="nav-item">
                              <a href="email/inbox/" class="nav-link">Inbox</a>
                           </li>
                           <li class="nav-item">
                              <a href="email/view-message/" class="nav-link">View Message</a>
                           </li>
                           <li class="nav-item">
                              <a href="email/compose-message/" class="nav-link">Compose Message</a>
                           </li>

                        </ul>
                        <!-- END : Email submenu list -->

                     </li>
                     <!-- END : Link with submenu -->

                     <!-- Link with submenu -->
                     <li class="nav-item has-sub">


                        <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-file-html fs-5 me-2"></i>
                           <span class="nav-label ms-1">Other Pages</span>
                        </a>

                        <!-- Other Pages submenu list -->
                        <ul class="mininav-content nav collapse">
                           <li data-popper-arrow class="arrow"></li>
                           <li class="nav-item">
                              <a href="other-pages/blank-page/" class="nav-link">Blank Page</a>
                           </li>
                           <li class="nav-item">
                              <a href="other-pages/invoice/" class="nav-link">Invoice</a>
                           </li>
                           <li class="nav-item">
                              <a href="other-pages/search-results/" class="nav-link">Search Results</a>
                           </li>
                           <li class="nav-item">
                              <a href="other-pages/faq/" class="nav-link">FAQ</a>
                           </li>
                           <li class="nav-item">
                              <a href="other-pages/pricing-tables/" class="nav-link">Pricing Tables</a>
                           </li>
                           <li class="nav-item">
                              <a href="other-pages/error-404/" class="nav-link">Error 404</a>
                           </li>
                           <li class="nav-item">
                              <a href="other-pages/error-500/" class="nav-link">Error 500</a>
                           </li>

                        </ul>
                        <!-- END : Other Pages submenu list -->

                     </li>
                     <!-- END : Link with submenu -->

                     <!-- Link with submenu -->
                     <li class="nav-item has-sub">


                        <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-window-2 fs-5 me-2"></i>
                           <span class="nav-label ms-1">Front Pages</span>
                        </a>

                        <!-- Front Pages submenu list -->
                        <ul class="mininav-content nav collapse">
                           <li data-popper-arrow class="arrow"></li>
                           <li class="nav-item">
                              <a href="front-pages/error-404/" class="nav-link">Error 404</a>
                           </li>
                           <li class="nav-item">
                              <a href="front-pages/error-500/" class="nav-link">Error 500</a>
                           </li>
                           <li class="nav-item">
                              <a href="front-pages/maintenance/" class="nav-link">Maintenance</a>
                           </li>
                           <li class="nav-item">
                              <a href="front-pages/login/" class="nav-link">Login</a>
                           </li>
                           <li class="nav-item">
                              <a href="front-pages/register/" class="nav-link">Register</a>
                           </li>
                           <li class="nav-item">
                              <a href="front-pages/password-reminder/" class="nav-link">Password Reminder</a>
                           </li>
                           <li class="nav-item">
                              <a href="front-pages/lock-screen/" class="nav-link">Lock Screen</a>
                           </li>

                        </ul>
                        <!-- END : Front Pages submenu list -->

                     </li>
                     <!-- END : Link with submenu -->

                     <!-- Link with submenu -->
                     <li class="nav-item has-sub">


                        <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-tactic fs-5 me-2"></i>
                           <span class="nav-label ms-1">Menu Levels</span>
                        </a>

                        <!-- Menu Levels submenu list -->
                        <ul class="mininav-content nav collapse">
                           <li data-popper-arrow class="arrow"></li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">Menu Link</a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">Menu Link</a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link">Menu Link</a>
                           </li>
                           <li class="nav-item has-sub">
                              <a href="#" class="mininav-toggle nav-link collapsed">Submenu</a>
                              <ul class="mininav-content nav collapse">
                                 <li data-popper-arrow class="arrow"></li>
                                 <li class="nav-item">
                                    <a href="#" class="nav-link">Menu Link</a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="#" class="nav-link">Menu Link</a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="#" class="nav-link">Menu Link</a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="#" class="nav-link">Menu Link</a>
                                 </li>
                              </ul>
                           </li>
                           <li class="nav-item has-sub">
                              <a href="#" class="mininav-toggle nav-link collapsed">Submenu</a>
                              <ul class="mininav-content nav collapse">
                                 <li data-popper-arrow class="arrow"></li>
                                 <li class="nav-item">
                                    <a href="#" class="nav-link">Menu Link</a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="#" class="nav-link">Menu Link</a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="#" class="nav-link">Menu Link</a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="#" class="nav-link">Menu Link</a>
                                 </li>
                              </ul>
                           </li>
                        </ul>
                        <!-- END : Menu Levels submenu list -->

                     </li>
                     <!-- END : Link with submenu -->


                  </ul>
               </div>
               <!-- END : More Category -->


               <!-- Extras Category -->
               <div class="mainnav__categoriy py-3">
                  <h6 class="mainnav__caption mt-0 fw-bold">Extras</h6>
                  <ul class="mainnav__menu nav flex-column">

                     <!-- Link with submenu -->
                     <li class="nav-item has-sub">


                        <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-happy fs-5 me-2"></i>
                           <span class="nav-label ms-1">Icons Pack</span>
                        </a>

                        <!-- Icons Pack submenu list -->
                        <ul class="mininav-content nav collapse">
                           <li data-popper-arrow class="arrow"></li>
                           <li class="nav-item">
                              <a href="icons-pack/ionicons/" class="nav-link">Ionicons</a>
                           </li>
                           <li class="nav-item">
                              <a href="icons-pack/themify-icons/" class="nav-link">Themify Icons</a>
                           </li>
                           <li class="nav-item">
                              <a href="icons-pack/flag-icons/" class="nav-link">Flag Icons</a>
                           </li>
                           <li class="nav-item">
                              <a href="icons-pack/weather-icons/" class="nav-link">Weather Icons</a>
                           </li>

                        </ul>
                        <!-- END : Icons Pack submenu list -->

                     </li>
                     <!-- END : Link with submenu -->

                     <!-- Link with submenu -->
                     <li class="nav-item has-sub">


                        <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-medal-2 fs-5 me-2"></i>
                           <span class="nav-label ms-1">Premium Icons</span>
                        </a>

                        <!-- Premium Icons submenu list -->
                        <ul class="mininav-content nav collapse">
                           <li data-popper-arrow class="arrow"></li>
                           <li class="nav-item">
                              <a href="premium-icons/line-icons-pack/" class="nav-link">Line Icons Pack</a>
                           </li>
                           <li class="nav-item">
                              <a href="premium-icons/solid-icons-pack/" class="nav-link">Solid Icons Pack</a>
                           </li>

                        </ul>
                        <!-- END : Premium Icons submenu list -->

                     </li>
                     <!-- END : Link with submenu -->

                     <!-- Link with submenu -->
                     <li class="nav-item has-sub">


                        <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-love fs-5 me-2"></i>
                           <span class="nav-label ms-1">Helper Classes</span>
                        </a>

                        <!-- Helper Classes submenu list -->
                        <ul class="mininav-content nav collapse">
                           <li data-popper-arrow class="arrow"></li>
                           <li class="nav-item">
                              <a href="helper-classes/background/" class="nav-link">Background</a>
                           </li>
                           <li class="nav-item">
                              <a href="helper-classes/link/" class="nav-link">Link</a>
                           </li>
                           <li class="nav-item">
                              <a href="helper-classes/text/" class="nav-link">Text</a>
                           </li>
                           <li class="nav-item">
                              <a href="helper-classes/borders/" class="nav-link">Borders</a>
                           </li>
                           <li class="nav-item">
                              <a href="helper-classes/images/" class="nav-link">Images</a>
                           </li>
                           <li class="nav-item">
                              <a href="helper-classes/sizing/" class="nav-link">Sizing</a>
                           </li>
                           <li class="nav-item">
                              <a href="helper-classes/more/" class="nav-link">More</a>
                           </li>

                        </ul>
                        <!-- END : Helper Classes submenu list -->

                     </li>
                     <!-- END : Link with submenu -->


                  </ul>
               </div>
               <!-- END : Extras Category -->


               <!-- Widget -->
               <div class="mainnav__widget">

                  <!-- Widget buttton form small navigation -->
                  <div class="mininav-toggle text-center py-2 d-mn-min">
                     <i class="demo-pli-monitor-2"></i>
                  </div>

                  <div class="d-mn-max mt-5"></div>

                  <!-- Widget content -->
                  <div class="mininav-content collapse d-mn-max">
                     <span data-popper-arrow class="arrow"></span>
                     <h6 class="mainnav__caption fw-bold">Server Status</h6>
                     <ul class="list-group list-group-borderless">
                        <li class="list-group-item text-reset">
                           <div class="d-flex justify-content-between align-items-start">
                              <p class="mb-2 me-auto">CPU Usage</p>
                              <span class="badge bg-info rounded">35%</span>
                           </div>
                           <div class="progress progress-md">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 35%" aria-label="CPU Progress" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </li>
                        <li class="list-group-item text-reset">
                           <div class="d-flex justify-content-between align-items-start">
                              <p class="mb-2 me-auto">Bandwidth</p>
                              <span class="badge bg-warning rounded">73%</span>
                           </div>
                           <div class="progress progress-md">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 73%" aria-label="Bandwidth Progress" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </li>
                     </ul>
                     <div class="d-grid px-3 mt-3">
                        <a href="#" class="btn btn-sm btn-success">View Details</a>
                     </div>
                  </div>
               </div>
               <!-- End - Profile widget -->


            </div>
            <!-- End - Navigation menu -->


            <!-- Bottom navigation menu -->
            <div class="mainnav__bottom-content border-top pb-2">
               <ul id="mainnav" class="mainnav__menu nav flex-column">
                  <li class="nav-item has-sub">
                     <a href="#" class="nav-link mininav-toggle collapsed" aria-expanded="false">
                        <i class="demo-pli-unlock fs-5 me-2"></i>
                        <span class="nav-label ms-1">Logout</span>
                     </a>
                     <ul class="mininav-content nav flex-column collapse">
                        <li data-popper-arrow class="arrow"></li>
                        <li class="nav-item">
                           <a href="#" class="nav-link">This device only</a>
                        </li>
                        <li class="nav-item">
                           <a href="#" class="nav-link">All Devices</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Lock screen</a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
            <!-- End - Bottom navigation menu -->


         </div>
      </nav>
      <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
      <!-- END - MAIN NAVIGATION -->


      <!-- SIDEBAR -->
      <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
      <aside class="sidebar">
         <div class="sidebar__inner scrollable-content">


            <!-- This element is only visible when sidebar Stick mode is active. -->
            <div class="sidebar__stuck align-items-center mb-3 px-3">
               <button type="button" class="sidebar-toggler btn-close btn-lg rounded-circle" aria-label="Close"></button>
               <p class="m-0 text-danger fw-bold">&lt;= Close the sidebar</p>
            </div>


            <!-- Sidebar tabs nav -->
            <div class="sidebar__wrap">
               <nav>
                  <div class="nav nav-underline nav-fill nav-component flex-nowrap border-bottom" id="nav-tab" role="tablist">
                     <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#nav-chat" type="button" role="tab" aria-controls="nav-chat" aria-selected="true">
                        <i class="d-block demo-pli-speech-bubble-5 fs-3 mb-2"></i>
                        <span>Chat</span>
                     </button>

                     <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-reports" type="button" role="tab" aria-controls="nav-reports" aria-selected="false">
                        <i class="d-block demo-pli-information fs-3 mb-2"></i>
                        <span>Reports</span>
                     </button>

                     <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-settings" type="button" role="tab" aria-controls="nav-settings" aria-selected="false">
                        <i class="d-block demo-pli-wrench fs-3 mb-2"></i>
                        <span>Settings</span>
                     </button>
                  </div>
               </nav>
            </div>
            <!-- End - Sidebar tabs nav -->


            <!-- Sideabar tabs content -->
            <div class="tab-content sidebar__wrap" id="nav-tabContent">

               <!-- Chat tab Content -->
               <div id="nav-chat" class="tab-pane fade py-4 show active" role="tabpanel" aria-labelledby="nav-chat-tab">

                  <!-- Family list group -->
                  <h5 class="px-3">Family</h5>
                  <div class="list-group list-group-borderless">

                     <div class="list-group-item list-group-item-action d-flex align-items-start mb-2">
                        <div class="flex-shrink-0 me-3">
                           <img class="img-xs rounded-circle" src="assets/img/profile-photos/2.png" alt="Profile Picture" loading="lazy">
                        </div>
                        <div class="flex-grow-1 ">
                           <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Stephen Tran</a>
                           <small class="text-body-secondary">Available</small>
                        </div>
                     </div>


                     <div class="list-group-item list-group-item-action d-flex align-items-start mb-2">
                        <div class="flex-shrink-0 me-3">
                           <img class="img-xs rounded-circle" src="assets/img/profile-photos/8.png" alt="Profile Picture" loading="lazy">
                        </div>
                        <div class="flex-grow-1 ">
                           <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Betty Murphy</a>
                           <small class="text-body-secondary">Iddle</small>
                        </div>
                     </div>


                     <div class="list-group-item list-group-item-action d-flex align-items-start mb-2">
                        <div class="flex-shrink-0 me-3">
                           <img class="img-xs rounded-circle" src="assets/img/profile-photos/7.png" alt="Profile Picture" loading="lazy">
                        </div>
                        <div class="flex-grow-1 ">
                           <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Brittany Meyer</a>
                           <small class="text-body-secondary">I think so!</small>
                        </div>
                     </div>


                     <div class="list-group-item list-group-item-action d-flex align-items-start mb-2">
                        <div class="flex-shrink-0 me-3">
                           <img class="img-xs rounded-circle" src="assets/img/profile-photos/4.png" alt="Profile Picture" loading="lazy">
                        </div>
                        <div class="flex-grow-1 ">
                           <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Jack George</a>
                           <small class="text-body-secondary">Last seen 2 hours ago</small>
                        </div>
                     </div>

                  </div>
                  <!-- End - Family list group -->


                  <!-- Friends Group -->
                  <h5 class="d-flex mt-5 px-3">Friends <span class="badge bg-success ms-auto">587 +</span></h5>
                  <div class="list-group list-group-borderless">
                     <a href="#" class="list-group-item list-group-item-action">
                        <span class="d-inline-block bg-success rounded-circle p-1 me-2"></span>
                        Joey K. Greyson
                     </a>
                     <a href="#" class="list-group-item list-group-item-action">
                        <span class="d-inline-block bg-info rounded-circle p-1 me-2"></span>
                        Andrea Branden
                     </a>
                     <a href="#" class="list-group-item list-group-item-action">
                        <span class="d-inline-block bg-warning rounded-circle p-1 me-2"></span>
                        Johny Juan
                     </a>
                     <a href="#" class="list-group-item list-group-item-action">
                        <span class="d-inline-block bg-secondary rounded-circle p-1 me-2"></span>
                        Susan Sun
                     </a>
                  </div>
                  <!-- End - Friends Group -->


                  <!-- Simple news widget -->
                  <div class="p-3 mt-5 rounded bg-info-subtle text-info-emphasis">
                     <h5 class="text-info-emphasis">News</h5>
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui consequatur ipsum porro a repellat eaque exercitationem necessitatibus esse voluptate corporis.</p>
                     <small class="fst-italic">Last Update : Today 13:54</small>
                  </div>
                  <!-- End - Simple news widget -->

               </div>
               <!-- End - Chat tab content -->


               <!-- Reports tab content -->
               <div id="nav-reports" class="tab-pane fade py-4" role="tabpanel" aria-labelledby="nav-reports-tab">

                  <!-- Billing and Resports -->
                  <div class="px-3">
                     <h5 class="mb-3">Billing &amp; Reports</h5>
                     <p>Get <span class="badge bg-danger">$15.00 off</span> your next bill by making sure your full payment reaches us before August 5th.</p>

                     <h5 class="mt-5 mb-0">Amount Due On</h5>
                     <p>August 17, 2028</p>
                     <p class="h1">$83.09</p>

                     <div class="d-grid">
                        <button class="btn btn-success" type="button">Pay now</button>
                     </div>
                  </div>
                  <!-- End - Billing and Resports -->


                  <!-- Additional actions nav -->
                  <h5 class="mt-5 px-3">Additional Actions</h5>
                  <div class="list-group list-group-borderless">
                     <a href="#" class="list-group-item list-group-item-action">
                        <i class="demo-pli-information me-2 fs-5"></i>
                        Services Information
                     </a>
                     <a href="#" class="list-group-item list-group-item-action">
                        <i class="demo-pli-mine me-2 fs-5"></i>
                        Usage
                     </a>
                     <a href="#" class="list-group-item list-group-item-action">
                        <i class="demo-pli-credit-card-2 me-2 fs-5"></i>
                        Payment Options
                     </a>
                     <a href="#" class="list-group-item list-group-item-action">
                        <i class="demo-pli-support me-2 fs-5"></i>
                        Messages Center
                     </a>
                  </div>
                  <!-- End - Additional actions nav -->


                  <!-- Contact widget -->
                  <div class="px-3 mt-5 text-center">
                     <div class="mb-3">
                        <i class="demo-pli-old-telephone display-4 text-primary"></i>
                     </div>
                     <p>Have a question ?</p>
                     <p class="h5 mb-0"> (415) 234-53454 </p>
                     <small><em>We are here 24/7</em></small>
                  </div>
                  <!-- End - Contact widget -->

               </div>
               <!-- End - Reports tab content -->


               <!-- Settings content -->
               <div id="nav-settings" class="tab-pane fade py-4" role="tabpanel" aria-labelledby="nav-settings-tab">

                  <!-- Account settings -->
                  <h5 class="px-3">Account Settings</h5>
                  <div class="list-group list-group-borderless">

                     <div class="list-group-item mb-1">
                        <div class="d-flex justify-content-between mb-1">
                           <label class="form-check-label text-body-emphasis stretched-link" for="_dm-sbPersonalStatus">Show my personal status</label>
                           <div class="form-check form-switch">
                              <input id="_dm-sbPersonalStatus" class="form-check-input" type="checkbox" checked>
                           </div>
                        </div>
                        <small class="text-body-secondary">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small>
                     </div>

                     <div class="list-group-item mb-1">
                        <div class="d-flex justify-content-between mb-1">
                           <label class="form-check-label text-body-emphasis stretched-link" for="_dm-sbOfflineContact">Show offline contact</label>
                           <div class="form-check form-switch">
                              <input id="_dm-sbOfflineContact" class="form-check-input" type="checkbox">
                           </div>
                        </div>
                        <small class="text-body-secondary">Aenean commodo ligula eget dolor. Aenean massa.</small>
                     </div>

                     <div class="list-group-item mb-1">
                        <div class="d-flex justify-content-between mb-1">
                           <label class="form-check-label text-body-emphasis stretched-link" for="_dm-sbInvisibleMode">Invisible Mode</label>
                           <div class="form-check form-switch">
                              <input id="_dm-sbInvisibleMode" class="form-check-input" type="checkbox">
                           </div>
                        </div>
                        <small class="text-body-secondary">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</small>
                     </div>

                  </div>
                  <!-- End - Account settings -->


                  <!-- Public Settings -->
                  <h5 class="mt-5 px-3">Public Settings</h5>
                  <div class="list-group list-group-borderless">

                     <div class="list-group-item d-flex justify-content-between mb-1">
                        <label class="form-check-label" for="_dm-sbOnlineStatus">Online Status</label>
                        <div class="form-check form-switch">
                           <input id="_dm-sbOnlineStatus" class="form-check-input" type="checkbox" checked>
                        </div>
                     </div>

                     <div class="list-group-item d-flex justify-content-between mb-1">
                        <label class="form-check-label" for="_dm-sbMuteNotifications">Mute Notifications</label>
                        <div class="form-check form-switch">
                           <input id="_dm-sbMuteNotifications" class="form-check-input" type="checkbox" checked>
                        </div>
                     </div>

                     <div class="list-group-item d-flex justify-content-between mb-1">
                        <label class="form-check-label" for="_dm-sbMyDevicesName">Show my device name</label>
                        <div class="form-check form-switch">
                           <input id="_dm-sbMyDevicesName" class="form-check-input" type="checkbox" checked>
                        </div>
                     </div>

                  </div>
                  <!-- End - Public Settings -->

               </div>
               <!-- End - Settings content -->

            </div>
            <!-- End - Sidebar tabs content -->

         </div>
      </aside>
      <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
      <!-- END - SIDEBAR -->


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


   <!-- BOXED LAYOUT : BACKGROUND IMAGES CONTENT [ DEMO ] -->
   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
   <div id="_dm-boxedBgContent" class="_dm-boxbg offcanvas offcanvas-bottom" data-bs-scroll="true" tabindex="-1">
      <div class="offcanvas-body px-4">

         <!-- Content Header -->
         <div class="offcanvas-header border-bottom p-0 pb-3">
            <div>
               <h4 class="offcanvas-title">Background Images</h4>
               <span class="text-body-secondary">Add an image to replace the solid background color</span>
            </div>
            <button type="button" class="btn-close btn-lg text-reset shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
         </div>
         <!-- End - Content header -->


         <!-- Collection Of Images -->
         <div id="_dm-boxedBgContainer" class="row mt-3">

            <!-- Blurred Background Images -->
            <div class="col-lg-4">
               <h5 class="mb-2">Blurred</h5>
               <div class="_dm-boxbg__img-container d-flex flex-wrap">
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/blurred/thumbs/1.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/blurred/thumbs/2.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/blurred/thumbs/3.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/blurred/thumbs/4.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/blurred/thumbs/5.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/blurred/thumbs/6.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/blurred/thumbs/7.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/blurred/thumbs/8.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/blurred/thumbs/9.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/blurred/thumbs/10.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/blurred/thumbs/11.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/blurred/thumbs/12.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/blurred/thumbs/13.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/blurred/thumbs/14.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/blurred/thumbs/15.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/blurred/thumbs/16.jpg" alt="Background Image" loading="lazy">
                  </a>
               </div>
            </div>
            <!-- End - Blurred Background Images -->


            <!-- Polygon Background Images -->
            <div class="col-lg-4">
               <h5 class="mb-2">Polygon &amp; Geometric</h5>
               <div class="_dm-boxbg__img-container d-flex flex-wrap mb-4">
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/polygon/thumbs/1.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/polygon/thumbs/2.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/polygon/thumbs/3.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/polygon/thumbs/4.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/polygon/thumbs/5.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/polygon/thumbs/6.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/polygon/thumbs/7.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/polygon/thumbs/8.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/polygon/thumbs/9.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/polygon/thumbs/10.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/polygon/thumbs/11.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/polygon/thumbs/12.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/polygon/thumbs/13.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/polygon/thumbs/14.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/polygon/thumbs/15.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/polygon/thumbs/16.jpg" alt="Background Image" loading="lazy">
                  </a>
               </div>
            </div>
            <!-- End - Polygon Background Images -->


            <!-- Abstract Background Images -->
            <div class="col-lg-4">
               <h5 class="mb-2">Abstract</h5>
               <div class="_dm-boxbg__img-container d-flex flex-wrap">
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/abstract/thumbs/1.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/abstract/thumbs/2.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/abstract/thumbs/3.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/abstract/thumbs/4.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/abstract/thumbs/5.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/abstract/thumbs/6.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/abstract/thumbs/7.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/abstract/thumbs/8.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/abstract/thumbs/9.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/abstract/thumbs/10.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/abstract/thumbs/11.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/abstract/thumbs/12.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/abstract/thumbs/13.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/abstract/thumbs/14.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/abstract/thumbs/15.jpg" alt="Background Image" loading="lazy">
                  </a>
                  <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                     <img class="img-responsive" src="assets/premium/boxed-bg/abstract/thumbs/16.jpg" alt="Background Image" loading="lazy">
                  </a>
               </div>
            </div>
            <!-- End - Abstract Background Images -->


         </div>
         <!-- End - Collection Of Images -->


      </div>
   </div>
   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
   <!-- END - BOXED LAYOUT : BACKGROUND IMAGES CONTENT [ DEMO ] -->


   <!-- SETTINGS CONTAINER [ DEMO ] -->
   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
   <div id="_dm-settingsContainer" class="_dm-settings-container offcanvas offcanvas-end rounded-start" tabindex="-1">
      <button id="_dm-settingsToggler" class="_dm-btn-settings btn btn-sm btn-danger p-2 rounded-0 rounded-start shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#_dm-settingsContainer" aria-label="Customization button" aria-controls="#_dm-settingsContainer">
         <i class="demo-psi-gear fs-1"></i>
      </button>


      <div class="offcanvas-body py-0">
         <div class="_dm-settings-container__content row">
            <div class="col-lg-3 p-4">

               <h4 class="fw-bold pb-3 mb-2">Layouts</h4>


               <!-- OPTION : Centered Layout -->
               <h6 class="mb-2 pb-1">Layouts</h6>
               <div class="d-flex align-items-center pt-1 mb-2">
                  <label class="form-check-label flex-fill" for="_dm-fluidLayoutRadio">Fluid Layout</label>
                  <div class="form-check form-switch">
                     <input id="_dm-fluidLayoutRadio" class="form-check-input ms-0" type="radio" name="settingLayouts" autocomplete="off" checked>
                  </div>
               </div>


               <!-- OPTION : Boxed layout -->
               <div class="d-flex align-items-center pt-1 mb-2">
                  <label class="form-check-label flex-fill" for="_dm-boxedLayoutRadio">Boxed Layout</label>
                  <div class="form-check form-switch">
                     <input id="_dm-boxedLayoutRadio" class="form-check-input ms-0" type="radio" name="settingLayouts" autocomplete="off">
                  </div>
               </div>


               <!-- OPTION : Boxed layout with background images -->
               <div id="_dm-boxedBgOption" class="opacity-50 d-flex align-items-center pt-1 mb-2">
                  <label class="form-label flex-fill mb-0">BG for Boxed Layout</label>

                  <button id="_dm-boxedBgBtn" class="btn btn-icon btn-primary btn-xs" type="button" data-bs-toggle="offcanvas" data-bs-target="#_dm-boxedBgContent" disabled>
                     <i class="demo-psi-dot-horizontal"></i>
                  </button>
               </div>


               <!-- OPTION : Centered Layout -->
               <div class="d-flex align-items-start pt-1 pb-3 mb-2">
                  <label class="form-check-label flex-fill text-nowrap" for="_dm-centeredLayoutRadio">Centered Layout</label>
                  <div class="form-check form-switch">
                     <input id="_dm-centeredLayoutRadio" class="form-check-input ms-0" type="radio" name="settingLayouts" autocomplete="off">
                  </div>
               </div>


               <!-- OPTION : Transition timing -->
               <h6 class="mt-4 mb-2 py-1">Transitions</h6>
               <div class="d-flex align-items-center pt-1 pb-3 mb-2">
                  <select id="_dm-transitionSelect" class="form-select" aria-label="select transition timing">
                     <option value="in-quart">In Quart</option>
                     <option value="out-quart" selected>Out Quart</option>
                     <option value="in-back">In Back</option>
                     <option value="out-back">Out Back</option>
                     <option value="in-out-back">In Out Back</option>
                     <option value="steps">Steps</option>
                     <option value="jumping">Jumping</option>
                     <option value="rubber">Rubber</option>
                  </select>
               </div>


               <!-- OPTION : Sticky Header -->
               <h6 class="mt-4 mb-2 py-1">Header</h6>
               <div class="d-flex align-items-center pt-1 pb-3 mb-2">
                  <label class="form-check-label flex-fill" for="_dm-stickyHeaderCheckbox">Sticky header</label>
                  <div class="form-check form-switch">
                     <input id="_dm-stickyHeaderCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                  </div>
               </div>


               <!-- OPTION : Additional Offcanvas -->
               <h6 class="mt-4 mb-2 py-1">Additional Offcanvas</h6>
               <p>Select the offcanvas placement.</p>
               <div class="text-nowrap">
                  <button type="button" class="_dm-offcanvasBtn btn btn-sm btn-primary" value="offcanvas-top">Top</button>
                  <button type="button" class="_dm-offcanvasBtn btn btn-sm btn-primary" value="offcanvas-end">Right</button>
                  <button type="button" class="_dm-offcanvasBtn btn btn-sm btn-primary" value="offcanvas-bottom">Btm</button>
                  <button type="button" class="_dm-offcanvasBtn btn btn-sm btn-primary" value="offcanvas-start">Left</button>
               </div>


            </div>
            <div class="col-lg-3 p-4 bg-body">

               <h4 class="fw-bold pb-3 mb-2">Sidebars</h4>


               <!-- OPTION : Sticky Navigation -->
               <h6 class="mb-2 pb-1">Navigation</h6>
               <div class="d-flex align-items-center pt-1 mb-2">
                  <label class="form-check-label flex-fill" for="_dm-stickyNavCheckbox">Sticky navigation</label>
                  <div class="form-check form-switch">
                     <input id="_dm-stickyNavCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                  </div>
               </div>


               <!-- OPTION : Navigation Profile Widget -->
               <div class="d-flex align-items-center pt-1 mb-2">
                  <label class="form-check-label flex-fill" for="_dm-profileWidgetCheckbox">Widget Profile</label>
                  <div class="form-check form-switch">
                     <input id="_dm-profileWidgetCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off" checked>
                  </div>
               </div>


               <!-- OPTION : Mini navigation mode -->
               <div class="d-flex align-items-center pt-3 mb-2">
                  <label class="form-check-label flex-fill" for="_dm-miniNavRadio">Min / Collapsed Mode</label>
                  <div class="form-check form-switch">
                     <input id="_dm-miniNavRadio" class="form-check-input ms-0" type="radio" name="navigation-mode" autocomplete="off">
                  </div>
               </div>


               <!-- OPTION : Maxi navigation mode -->
               <div class="d-flex align-items-center pt-1 mb-2">
                  <label class="form-check-label flex-fill" for="_dm-maxiNavRadio">Max / Expanded Mode</label>
                  <div class="form-check form-switch">
                     <input id="_dm-maxiNavRadio" class="form-check-input ms-0" type="radio" name="navigation-mode" autocomplete="off" checked>
                  </div>
               </div>


               <!-- OPTION : Push navigation mode -->
               <div class="d-flex align-items-center pt-1 mb-2">
                  <label class="form-check-label flex-fill" for="_dm-pushNavRadio">Push Mode</label>
                  <div class="form-check form-switch">
                     <input id="_dm-pushNavRadio" class="form-check-input ms-0" type="radio" name="navigation-mode" autocomplete="off">
                  </div>
               </div>


               <!-- OPTION : Slide on top navigation mode -->
               <div class="d-flex align-items-center pt-1 mb-2">
                  <label class="form-check-label flex-fill" for="_dm-slideNavRadio">Slide on top</label>
                  <div class="form-check form-switch">
                     <input id="_dm-slideNavRadio" class="form-check-input ms-0" type="radio" name="navigation-mode" autocomplete="off">
                  </div>
               </div>


               <!-- OPTION : Slide on top navigation mode -->
               <div class="d-flex align-items-center pt-1 mb-2">
                  <label class="form-check-label flex-fill" for="_dm-revealNavRadio">Reveal Mode</label>
                  <div class="form-check form-switch">
                     <input id="_dm-revealNavRadio" class="form-check-input ms-0" type="radio" name="navigation-mode" autocomplete="off">
                  </div>
               </div>

               <div class="d-flex align-items-center justify-content-between gap-3 py-3">
                  <button class="nav-toggler btn btn-primary btn-sm" type="button">
                     Navigation
                  </button>
                  <button class="sidebar-toggler btn btn-primary btn-sm" type="button">
                     Sidebar
                  </button>
               </div>


               <h6 class="mt-3 mb-2 py-1">Sidebar</h6>


               <!-- OPTION : Disable sidebar backdrop -->
               <div class="d-flex align-items-center pt-1 mb-2">
                  <label class="form-check-label flex-fill" for="_dm-disableBackdropCheckbox">Disable backdrop</label>
                  <div class="form-check form-switch">
                     <input id="_dm-disableBackdropCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                  </div>
               </div>


               <!-- OPTION : Static position -->
               <div class="d-flex align-items-center pt-1 mb-2">
                  <label class="form-check-label flex-fill" for="_dm-staticSidebarCheckbox">Static position</label>
                  <div class="form-check form-switch">
                     <input id="_dm-staticSidebarCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                  </div>
               </div>


               <!-- OPTION : Stuck sidebar -->
               <div class="d-flex align-items-center pt-1 mb-2">
                  <label class="form-check-label flex-fill" for="_dm-stuckSidebarCheckbox">Stuck Sidebar </label>
                  <div class="form-check form-switch">
                     <input id="_dm-stuckSidebarCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                  </div>
               </div>


               <!-- OPTION : Unite Sidebar -->
               <div class="d-flex align-items-center pt-1 mb-2">
                  <label class="form-check-label flex-fill" for="_dm-uniteSidebarCheckbox">Unite Sidebar</label>
                  <div class="form-check form-switch">
                     <input id="_dm-uniteSidebarCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                  </div>
               </div>


               <!-- OPTION : Pinned Sidebar -->
               <div class="d-flex align-items-start pt-1 mb-2">
                  <label class="form-check-label flex-fill" for="_dm-pinnedSidebarCheckbox">Pinned Sidebar</label>
                  <div class="form-check form-switch">
                     <input id="_dm-pinnedSidebarCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                  </div>
               </div>

            </div>
            <div class="col-lg-6 p-4">
               <h4 class="fw-bold pb-3 mb-2">Colors</h4>

               <div class="d-flex mb-4 pb-4">
                  <div class="d-flex flex-column">
                     <h5 class="h6">Modes</h5>
                     <div class="form-check form-check-alt form-switch">
                        <input id="settingsThemeToggler" class="form-check-input mode-switcher" type="checkbox" role="switch">
                        <label class="form-check-label ps-3 fw-bold d-none d-md-flex align-items-center " for="settingsThemeToggler">
                           <i class="mode-switcher-icon icon-light demo-psi-sun fs-3"></i>
                           <i class="mode-switcher-icon icon-dark d-none demo-psi-half-moon fs-5"></i>
                        </label>
                     </div>
                  </div>
                  <div class="vr mx-4"></div>
                  <div class="_dm-colorSchemesMode__colors">
                     <h5 class="h6">Color Schemes</h5>
                     <div id="dm_colorSchemesContainer" class="d-flex flex-wrap justify-content-center">
                        <button class="_dm-colorSchemes _dm-box-xs _dm-bg-gray" type="button" data-color="gray"></button>
                        <button class="_dm-colorSchemes _dm-box-xs _dm-bg-navy" type="button" data-color="navy"></button>
                        <button class="_dm-colorSchemes _dm-box-xs _dm-bg-ocean" type="button" data-color="ocean"></button>
                        <button class="_dm-colorSchemes _dm-box-xs _dm-bg-lime" type="button" data-color="lime"></button>

                        <button class="_dm-colorSchemes _dm-box-xs _dm-bg-violet" type="button" data-color="violet"></button>
                        <button class="_dm-colorSchemes _dm-box-xs _dm-bg-orange" type="button" data-color="orange"></button>
                        <button class="_dm-colorSchemes _dm-box-xs _dm-bg-teal" type="button" data-color="teal"></button>
                        <button class="_dm-colorSchemes _dm-box-xs _dm-bg-corn" type="button" data-color="corn"></button>

                        <button class="_dm-colorSchemes _dm-box-xs _dm-bg-cherry" type="button" data-color="cherry"></button>
                        <button class="_dm-colorSchemes _dm-box-xs _dm-bg-coffee" type="button" data-color="coffee"></button>
                        <button class="_dm-colorSchemes _dm-box-xs _dm-bg-pear" type="button" data-color="pear"></button>
                        <button class="_dm-colorSchemes _dm-box-xs _dm-bg-night" type="button" data-color="night"></button>
                     </div>
                  </div>
               </div>


               <div id="dm_colorModeContainer">
                  <div class="row text-center mb-2">

                     <!-- Expanded Header -->
                     <div class="col-md-4">
                        <h6 class="m-0">Expanded Header</h6>
                        <div class="_dm-colorShcemesMode">

                           <!-- Scheme Button -->
                           <button type="button" class="_dm-colorModeBtn btn p-1 shadow-none" data-color-mode="tm--expanded-hd">
                              <img src="assets/img/color-schemes/expanded-header.png" alt="color scheme illusttration" loading="lazy">
                           </button>

                        </div>
                     </div>


                     <!-- Fair Header -->
                     <div class="col-md-4">
                        <h6 class="m-0">Fair Header</h6>
                        <div class="_dm-colorShcemesMode">

                           <!-- Scheme Button -->
                           <button type="button" class="_dm-colorModeBtn btn p-1 shadow-none" data-color-mode="tm--fair-hd">
                              <img src="assets/img/color-schemes/fair-header.png" alt="color scheme illusttration" loading="lazy">
                           </button>

                        </div>
                     </div>


                     <div class="col-md-4">
                        <h6 class="m-0">Full Header</h6>

                        <div class="_dm-colorShcemesMode">

                           <!-- Scheme Button -->
                           <button type="button" class="_dm-colorModeBtn btn p-1 shadow-none" data-color-mode="tm--full-hd">
                              <img src="assets/img/color-schemes/full-header.png" alt="color scheme illusttration" loading="lazy">
                           </button>

                        </div>
                     </div>
                  </div>


                  <div class="row text-center mb-2">
                     <div class="col-md-4">
                        <h6 class="m-0">Primary Nav</h6>

                        <div class="_dm-colorShcemesMode">

                           <!-- Scheme Button -->
                           <button type="button" class="_dm-colorModeBtn btn p-1 shadow-none" data-color-mode="tm--primary-mn">
                              <img src="assets/img/color-schemes/navigation.png" alt="color scheme illusttration" loading="lazy">
                           </button>

                        </div>
                     </div>

                     <div class="col-md-4">
                        <h6 class="m-0">Brand</h6>

                        <div class="_dm-colorShcemesMode">

                           <!-- Scheme Button -->
                           <button type="button" class="_dm-colorModeBtn btn p-1 shadow-none" data-color-mode="tm--primary-brand">
                              <img src="assets/img/color-schemes/brand.png" alt="color scheme illusttration" loading="lazy">
                           </button>

                        </div>
                     </div>

                     <div class="col-md-4">
                        <h6 class="m-0">Tall Header</h6>
                        <div class="_dm-colorShcemesMode">

                           <!-- Scheme Button -->
                           <button type="button" class="_dm-colorModeBtn btn p-1 shadow-none" data-color-mode="tm--tall-hd">
                              <img src="assets/img/color-schemes/tall-header.png" alt="color scheme illusttration" loading="lazy">
                           </button>

                        </div>
                     </div>


                  </div>
               </div>

               <div class="pt-3">

                  <h5 class="fw-bold mt-2">Miscellaneous</h5>

                  <div class="d-flex gap-3 my-3">
                     <label for="_dm-fontSizeRange" class="form-label flex-shrink-0 mb-0">Root Font sizes</label>
                     <div class="position-relative flex-fill">
                        <input type="range" class="form-range" min="9" max="19" step="1" value="16" id="_dm-fontSizeRange">
                        <output id="_dm-fontSizeValue" class="range-bubble"></output>
                     </div>
                  </div>

                  <h5 class="fw-bold mt-4">Scrollbars</h5>
                  <p class="mb-2">Hides native scrollbars and creates custom styleable overlay scrollbars.</p>
                  <div class="row">
                     <div class="col-5">

                        <!-- OPTION : Apply the OverlayScrollBar to the body. -->
                        <div class="d-flex align-items-center pt-1 mb-2">
                           <label class="form-check-label flex-fill" for="_dm-bodyScrollbarCheckbox">Body scrollbar</label>
                           <div class="form-check form-switch">
                              <input id="_dm-bodyScrollbarCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                           </div>
                        </div>


                        <!-- OPTION : Apply the OverlayScrollBar to content containing class .scrollable-content. -->
                        <div class="d-flex align-items-center pt-1 mb-2">
                           <label class="form-check-label flex-fill" for="_dm-sidebarsScrollbarCheckbox">Navigation and Sidebar</label>
                           <div class="form-check form-switch">
                              <input id="_dm-sidebarsScrollbarCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                           </div>
                        </div>

                     </div>
                     <div class="col-7">

                        <div class="alert alert-warning mb-0" role="alert">
                           Please consider the performance impact of using any scrollbar plugin.
                        </div>

                     </div>
                  </div>

               </div>


            </div>
         </div>


      </div>
   </div>
   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
   <!-- END - SETTINGS CONTAINER [ DEMO ] -->


   <!-- OFFCANVAS [ DEMO ] -->
   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
   <div id="_dm-offcanvas" class="offcanvas" tabindex="-1">

      <!-- Offcanvas header -->
      <div class="offcanvas-header">
         <h5 class="offcanvas-title">Offcanvas Header</h5>
         <button type="button" class="btn-close btn-lg text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>

      <!-- Offcanvas content -->
      <div class="offcanvas-body">
         <h5>Content Here</h5>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente eos nihil earum aliquam quod in dolor, aspernatur obcaecati et at. Dicta, ipsum aut, fugit nam dolore porro non est totam sapiente animi recusandae obcaecati dolorum, rem ullam cumque. Illum quidem reiciendis autem neque excepturi odit est accusantium, facilis provident molestias, dicta obcaecati itaque ducimus fuga iure in distinctio voluptate nesciunt dignissimos rem error a. Expedita officiis nam dolore dolores ea. Soluta repellendus delectus culpa quo. Ea tenetur impedit error quod exercitationem ut ad provident quisquam omnis! Nostrum quasi ex delectus vero, facilis aut recusandae deleniti beatae. Qui velit commodi inventore.</p>
      </div>

   </div>
   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
   <!-- END - OFFCANVAS [ DEMO ] -->


   <!-- JAVASCRIPTS -->
   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->


   <!-- Bootstrap JS [ OPTIONAL ] -->
   <script src="assets/js/bootstrap.min.js"></script>


   <!-- Nifty JS [ OPTIONAL ] -->
   <script src="assets/js/nifty.min.js"></script>


   <!-- Tabulator scripts [ OPTIONAL ] -->
   <script src="assets/pages/tabulator.min.4ea3bc3ed82b9a9e49db087ebf1d76bab14134fbdc083dd065781193637499e6.js"></script>


</body>

</html>