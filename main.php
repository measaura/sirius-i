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
   <title>Dashboard | SIRIUS-I</title>


   <!-- STYLESHEETS -->
   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

   <!-- Fonts [ OPTIONAL ] -->
   
   
   <style type="text/css">@font-face {font-family:Poppins;font-style:normal;font-weight:300;src:url(./assets/fonts/poppins/5.0.11/devanagari/300/normal.woff2);unicode-range:U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:300;src:url(./assets/fonts/poppins/5.0.11/latin/300/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:300;src:url(./assets/fonts/poppins/5.0.11/latin-ext/300/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:400;src:url(./assets/fonts/poppins/5.0.11/latin-ext/400/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:400;src:url(./assets/fonts/poppins/5.0.11/latin/400/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:400;src:url(./assets/fonts/poppins/5.0.11/devanagari/400/normal.woff2);unicode-range:U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:500;src:url(./assets/fonts/poppins/5.0.11/devanagari/500/normal.woff2);unicode-range:U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:500;src:url(./assets/fonts/poppins/5.0.11/latin-ext/500/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:500;src:url(./assets/fonts/poppins/5.0.11/latin/500/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:700;src:url(./assets/fonts/poppins/5.0.11/devanagari/700/normal.woff2);unicode-range:U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:700;src:url(./assets/fonts/poppins/5.0.11/latin-ext/700/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:700;src:url(./assets/fonts/poppins/5.0.11/latin/700/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(./assets/fonts/ubuntu/5.0.11/cyrillic-ext/400/normal.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(./assets/fonts/ubuntu/5.0.11/latin-ext/400/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(./assets/fonts/ubuntu/5.0.11/latin/400/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(./assets/fonts/ubuntu/5.0.11/greek-ext/400/normal.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(./assets/fonts/ubuntu/5.0.11/greek/400/normal.woff2);unicode-range:U+0370-03FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(./assets/fonts/ubuntu/5.0.11/cyrillic/400/normal.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(./assets/fonts/ubuntu/5.0.11/greek/500/normal.woff2);unicode-range:U+0370-03FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(./assets/fonts/ubuntu/5.0.11/greek-ext/500/normal.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(./assets/fonts/ubuntu/5.0.11/cyrillic/500/normal.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(./assets/fonts/ubuntu/5.0.11/cyrillic-ext/500/normal.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(./assets/fonts/ubuntu/5.0.11/latin-ext/500/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(./assets/fonts/ubuntu/5.0.11/latin/500/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(./assets/fonts/ubuntu/5.0.11/greek-ext/700/normal.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(./assets/fonts/ubuntu/5.0.11/latin/700/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(./assets/fonts/ubuntu/5.0.11/greek/700/normal.woff2);unicode-range:U+0370-03FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(./assets/fonts/ubuntu/5.0.11/cyrillic-ext/700/normal.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(./assets/fonts/ubuntu/5.0.11/cyrillic/700/normal.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(./assets/fonts/ubuntu/5.0.11/latin-ext/700/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}</style>


   <!-- Bootstrap CSS [ REQUIRED ] -->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">

   <!-- Nifty CSS [ REQUIRED ] -->
   <link rel="stylesheet" href="assets/css/nifty.min.css">


   <!-- Favicons [ OPTIONAL ] -->
   <link rel="apple-touch-icon" sizes="180x180" href="https://preview.themeon.net/nifty/apple-touch-icon.png">
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
                     <li class="breadcrumb-item"><a href="../../">Home</a></li>
                     <!-- <li class="breadcrumb-item"><a href="../../other-pages/">Other Pages</a></li> -->
                     <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                  </ol>
               </nav>
               <!-- END : Breadcrumb -->


               <h1 class="page-title mb-0 mt-2">Overview Dashboard</h1>

               <p class="lead">
                  Overview status of SIRIUS-I.
               </p>
            </div>

         </div>




         <div class="content__boxed">
            <div class="content__wrap">
               <div class="card">
                  <div class="card-body">

                     <div class="row mt-5">
                        <div class="col-12 col-xl-3">
                           <div class="row g-xl-1">
                              <div class="col-sm-6">

                                 <!--Tile-->
                                 <div class="card text-bg-primary mb-3 mb-xl-1 hv-grow">
                                    <div class="p-3 text-center">
                                       <span class="display-5">53</span>
                                       <p>Sales</p>
                                       <i class="demo-psi-shopping-bag fs-4"></i>
                                    </div>
                                 </div>
                                 <!--END : Tile-->


                                 <!--Tile-->
                                 <div class="card text-bg-warning mb-3 mb-xl-1 hv-grow">
                                    <div class="p-3 text-center">
                                       <span class="display-5">68</span>
                                       <p>Messages</p>
                                       <i class="demo-psi-mail fs-4"></i>
                                    </div>
                                 </div>
                                 <!--END : Tile-->

                              </div>
                              <div class="col-sm-6">

                                 <!--Tile-->
                                 <div class="card text-bg-info mb-3 mb-xl-1 hv-grow">
                                    <div class="p-3 text-center">
                                       <span class="display-5">32</span>
                                       <p>Projects</p>
                                       <i class="demo-psi-coding fs-4"></i>
                                    </div>
                                 </div>
                                 <!--END : Tile-->


                                 <!--Tile-->
                                 <div class="card text-bg-success mb-3 mb-xl-1 hv-grow">
                                    <div class="p-3 text-center">
                                       <span class="display-5">12</span>
                                       <p>Reports</p>
                                       <i class="demo-psi-receipt-4 fs-4"></i>
                                    </div>
                                 </div>
                                 <!--END : Tile-->

                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-xl-5">
                           <div class="row">
                              <div class="col-md-6">

                                 <!-- Stat widget -->
                                 <div class="card mb-3 mb-xl-3">
                                    <div class="card-body py-3">
                                       <div class="d-flex align-items-center">
                                          <!--{{/*
                           <div class="flex-shrink-0">
                              <div class="img-md ratio ratio-1x1 text-bg-success rounded-circle">
                                 <i class="d-flex align-items-center justify-content-center demo-pli-male fs-2"></i>
                              </div>
                           </div>
                           */}}-->

                                          <div class="flex-shrink-0">
                                             <div class="text-bg-success rounded-circle d-flex align-items-center justify-content-center p-3">
                                                <i class="demo-pli-male fs-4"></i>
                                             </div>
                                          </div>
                                          <div class="flex-grow-1 ms-3">
                                             <h5 class="h2 mb-0 fw-bold">241</h5>
                                             <p class="mb-0">Registered User</p>
                                          </div>
                                       </div>

                                    </div>
                                 </div>

                                 <!-- END : Stat widget -->

                                 <!-- Stat widget -->
                                 <div class="card mb-3 mb-xl-3">
                                    <div class="d-flex align-items-stretch">
                                       <div class="d-flex align-items-center justify-content-center flex-shrink-0 text-bg-danger px-4 rounded-start">
                                          <i class="demo-psi-speech-bubble-3 fs-1"></i>
                                       </div>
                                       <div class="flex-grow-1 py-3 ms-3">
                                          <h5 class="h2 mb-0 fw-bold text-danger">379</h5>
                                          <p class="mb-0">Comments</p>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- END : Stat widget -->

                                 <!-- Stat widget -->
                                 <div class="card text-bg-info mb-3 mb-xl-3">
                                    <div class="card-body py-3 d-flex align-items-stretch">
                                       <div class="d-flex align-items-center justify-content-center flex-shrink-0 rounded-start">
                                          <i class=" demo-psi-mail-unread fs-1"></i>
                                       </div>
                                       <div class="flex-grow-1 ms-3">
                                          <h5 class="h2 mb-0">543</h5>
                                          <p class="mb-0">New Emails</p>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- END : Stat widget -->

                              </div>
                              <div class="col-md-6">

                                 <!-- Stat widget -->
                                 <div class="card bg-purple text-white mb-3 mb-xl-3">
                                    <div class="card-body py-3">
                                       <div class="d-flex align-items-center mb-3">
                                          <div class="flex-shrink-0">
                                             <i class="d-flex align-items-center justify-content-center demo-pli-male-female display-6"></i>
                                          </div>
                                          <div class="flex-grow-1 ms-4">
                                             <h5 class="h2 mb-0">314,675</h5>
                                             <p class="text-white text-opacity-75 mb-0">Visit Today</p>
                                          </div>
                                       </div>

                                       <div class="progress progress-md mb-2">
                                          <div class="progress-bar bg-white" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                       </div>

                                       <p class="text-white text-opacity-75 mb-0"><strong class="text-reset">35%</strong> Higher than yesterday </p>

                                    </div>
                                 </div>

                                 <!-- END : Stat widget -->


                                 <!-- Stat widget -->
                                 <div class="card bg-primary text-white mb-3 mb-xl-3">
                                    <div class="card-body py-3">
                                       <div class="d-flex align-items-center mb-3">
                                          <div class="flex-shrink-0">
                                             <i class="d-flex align-items-center justify-content-center demo-pli-add-cart display-5"></i>
                                          </div>
                                          <div class="flex-grow-1 ms-4">
                                             <h5 class="h2 mb-0">5,345</h5>
                                             <p class="text-white text-opacity-75 mb-0">Items Sold</p>
                                          </div>
                                       </div>

                                       <div class="progress progress-md mb-2">
                                          <div class="progress-bar bg-white" role="progressbar" style="width: 91%;" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                                       </div>

                                       <p class="text-white text-opacity-75 mb-0"><strong class="text-reset">954</strong> Sales in this month</p>

                                    </div>
                                 </div>

                                 <!-- END : Stat widget -->

                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6 col-xl-2">

                           <!--Stat widget -->
                           <div class="card text-bg-danger text-center">
                              <div class="p-3 text-center">
                                 <i class="demo-psi-speech-bubble-3 display-3 my-4"></i>
                                 <div class="display-4">83</div>
                                 <p>Comments</p>
                                 <small class="lh-1">74 Unapproved Comments</small>
                              </div>
                           </div>
                           <!--END : Stat widget -->

                        </div>
                        <div class="col-sm-6 col-xl-2">

                           <!--Stat widget -->
                           <div class="card mb-1">
                              <div class="px-3 py-4 text-bg-dark text-center rounded">
                                 <i class="demo-psi-folder-with-document display-4 my-3"></i>
                              </div>
                              <div class="p-3 text-center">
                                 <span class="h1 fw-normal"><span class="h3 align-top">$</span>728</span>
                                 <p>Earnings</p>
                                 <small class="lh-1">2,675 Last 30 days earning</small>
                              </div>
                           </div>
                           <!--END : Stat widget -->

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="content__boxed">
            <div class="content__wrap">


               <!-- Table with toolbar -->
               <div class="card">
                  <div class="card-header">
                     <h5 class="card-title mb-3">Inventory Status</h5>
                     <div class="row">

                        <!-- Left toolbar -->
                        <div class="col-md-6 d-flex gap-1 align-items-center mb-3">
                           <button class="btn btn-primary hstack gap-2">
                              <i class="demo-psi-add fs-5"></i>
                              <span class="vr"></span>
                              Add New
                           </button>
                           <button class="btn btn-icon btn-outline-light" aria-label="Print table">
                              <i class="demo-pli-printer fs-5"></i>
                           </button>
                           <div class="btn-group">
                              <button class="btn btn-icon btn-outline-light" aria-label="Information"><i class="demo-pli-exclamation fs-5"></i></button>
                              <button class="btn btn-icon btn-outline-light" aria-label="Remove"><i class="demo-pli-recycling fs-5"></i></button>
                           </div>
                        </div>
                        <!-- END : Left toolbar -->

                        <!-- Right Toolbar -->
                        <div class="col-md-6 d-flex gap-1 align-items-center justify-content-md-end mb-3">
                           <div class="form-group">
                              <input type="text" placeholder="Search..." class="form-control" autocomplete="off">
                           </div>
                           <div class="btn-group">
                              <button class="btn btn-icon btn-outline-light" aria-label="Download"><i class="demo-pli-download-from-cloud fs-5"></i></button>
                              <div class="btn-group dropdown">
                                 <button class="btn btn-icons btn-outline-light dropdown-toggle hstack gap-2" data-bs-toggle="dropdown" aria-expanded="false">
                                    Options
                                    <span class="vr"></span>
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                 </button>
                                 <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                       <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <!-- END : Right Toolbar -->

                     </div>
                  </div>

                  <div class="card-body">
                     <div class="table-responsive">
                        <table class="table table-striped">
                           <thead>
                              <tr>
                                 <th>Invoice</th>
                                 <th>User</th>
                                 <th>Order date</th>
                                 <th>Amount</th>
                                 <th class="text-center">Status</th>
                                 <th class="text-center">Tracking Number</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td><a href="#" class="btn-link"> Order #53431</a></td>
                                 <td>Steve N. Horton</td>
                                 <td><span class="text-body"><i class="demo-pli-clock"></i> May 22, 2024</span></td>
                                 <td>$45.00</td>
                                 <td class="text-center fs-5">
                                    <div class="d-block badge bg-success">Paid</div>
                                 </td>
                                 <td class="text-center">-</td>
                              </tr>
                              <tr>
                                 <td><a href="#" class="btn-link"> Order #53432</a></td>
                                 <td>Charles S Boyle</td>
                                 <td><span class="text-body"><i class="demo-pli-clock"></i> May 24, 2024</span></td>
                                 <td>$245.30</td>
                                 <td class="text-center fs-5">
                                    <div class="d-block badge bg-info">Shipped</div>
                                 </td>
                                 <td class="text-center">CGX0089734531</td>
                              </tr>
                              <tr>
                                 <td><a href="#" class="btn-link"> Order #53433</a></td>
                                 <td>Lucy Doe</td>
                                 <td><span class="text-body"><i class="demo-pli-clock"></i> May 24, 2024</span></td>
                                 <td>$38.00</td>
                                 <td class="text-center fs-5">
                                    <div class="d-block badge bg-info">Shipped</div>
                                 </td>
                                 <td class="text-center">CGX0089934571</td>
                              </tr>
                              <tr>
                                 <td><a href="#" class="btn-link"> Order #53434</a></td>
                                 <td>Teresa L. Doe</td>
                                 <td><span class="text-body"><i class="demo-pli-clock"></i> May 15, 2024</span></td>
                                 <td>$77.99</td>
                                 <td class="text-center fs-5">
                                    <div class="d-block badge bg-info">Shipped</div>
                                 </td>
                                 <td class="text-center">CGX0089734574</td>
                              </tr>
                              <tr>
                                 <td><a href="#" class="btn-link"> Order #53435</a></td>
                                 <td>Teresa L. Doe</td>
                                 <td><span class="text-body"><i class="demo-pli-clock"></i> May 12, 2024</span></td>
                                 <td>$18.00</td>
                                 <td class="text-center fs-5">
                                    <div class="d-block badge bg-success">Paid</div>
                                 </td>
                                 <td class="text-center">-</td>
                              </tr>
                              <tr>
                                 <td><a href="#" class="btn-link">Order #53437</a></td>
                                 <td>Charles S Boyle</td>
                                 <td><span class="text-body"><i class="demo-pli-clock"></i> May 17, 2024</span></td>
                                 <td>$658.00</td>
                                 <td class="text-center fs-5">
                                    <div class="d-block badge bg-danger">Refunded</div>
                                 </td>
                                 <td class="text-center">-</td>
                              </tr>
                              <tr>
                                 <td><a href="#" class="btn-link">Order #536584</a></td>
                                 <td>Scott S. Calabrese</td>
                                 <td><span class="text-body"><i class="demo-pli-clock"></i> May 19, 2024</span></td>
                                 <td>$45.58</td>
                                 <td class="text-center fs-5">
                                    <div class="d-block badge bg-warning">Unpaid</div>
                                 </td>
                                 <td class="text-center">-</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>

                     <nav class="text-align-center mt-5" aria-label="Table navigation">
                        <ul class="pagination justify-content-center">
                           <li class="page-item disabled">
                              <a class="page-link" href="#">Previous</a>
                           </li>
                           <li class="page-item active" aria-current="page">
                              <span class="page-link">1</span>
                           </li>
                           <li class="page-item"><a class="page-link" href="#">2</a></li>
                           <li class="page-item"><a class="page-link" href="#">3</a></li>
                           <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                           <li class="page-item"><a class="page-link" href="#">5</a></li>
                           <li class="page-item">
                              <a class="page-link" href="#">Next</a>
                           </li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <!-- END : Table with toolbar -->


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

   <?php
   include_once 'javascript.php';
   ?>

   <!-- Plugin scripts [ OPTIONAL ] -->
   <script src="assets/pages/dashboard-1.min.js"></script>


</body>

</html>