<?php

include_once 'includes/db_func.php';
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-scheme="orange">

<head>
   <meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
   <meta name="description" content="Nifty is a responsive admin dashboard template based on Bootstrap 5 framework. There are a lot of useful components.">
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
   <div id="root" class="root mn--max tm--expanded-hd">

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
               <div class="row">
                  <div class="col-xl-7 mb-3 mb-xl-0">

                     <div class="card h-100">
                        <div class="card-header d-flex align-items-center border-0">
                           <div class="me-auto">
                              <h3 class="h4 m-0">Network</h3>
                           </div>
                           <div class="toolbar-end">
                              <button type="button" class="btn btn-icon btn-sm btn-hover btn-light" aria-label="Refresh Network Chart">
                                 <i class="demo-pli-repeat-2 fs-5"></i>
                              </button>
                              <div class="dropdown">
                                 <button class="btn btn-icon btn-sm btn-hover btn-light" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Network dropdown">
                                    <i class="demo-pli-dot-horizontal fs-4"></i>
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                 </button>
                                 <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                       <a href="#" class="dropdown-item">
                                          <i class="demo-pli-pen-5 fs-5 me-2"></i> Edit Date
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" class="dropdown-item">
                                          <i class="demo-pli-refresh fs-5 me-2"></i> Refresh
                                       </a>
                                    </li>
                                    <li>
                                       <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                       <a href="#" class="dropdown-item">
                                          <i class="demo-pli-file-csv fs-5 me-2"></i> Save as CSV
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" class="dropdown-item">
                                          <i class="demo-pli-calendar-4 fs-5 me-2"></i> View Details
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>


                        <!-- Network - Area Chart -->
                        <div class="card-body py-0" style="height: 250px; max-height: 275px">
                           <canvas id="_dm-networkChart"></canvas>
                        </div>
                        <!-- END : Network - Area Chart -->


                        <div class="card-body mt-4">
                           <div class="row">
                              <div class="col-md-8">

                                 <!-- CPU Temperature -->
                                 <h4 class="h5 mb-3">CPU Temperature</h4>
                                 <div class="row">
                                    <div class="col-5">
                                       <div class="h5 display-6 fw-normal">
                                          43.7 <span class="fw-bold fs-5 align-top">°C</span>
                                       </div>
                                    </div>
                                    <div class="col-7 text-sm">
                                       <div class="d-flex justify-content-between align-items-start px-3 mb-3">
                                          Min Values
                                          <span class="d-block badge bg-success ms-auto">27°</span>
                                       </div>
                                       <div class="d-flex justify-content-between align-items-start px-3">
                                          Max Values
                                          <span class="d-block badge bg-danger ms-auto">89°</span>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- END : CPU Temperature -->


                                 <!-- Today Tips -->
                                 <div class="mt-4">
                                    <h5>Today Tips</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                                 </div>
                                 <!-- END : Today Tips -->


                              </div>
                              <div class="col-md-4">


                                 <!-- Bandwidth usage and progress bars -->
                                 <h4 class="h5 mb-3">Bandwidth Usage</h4>
                                 <div class="h2 fw-normal">
                                    754.9<span class="ms-2 fs-6 align-top">Mbps</span>
                                 </div>


                                 <div class="mt-4 mb-2 d-flex justify-content-between">
                                    <span class="">Income</span>
                                    <span class="">70%</span>
                                 </div>
                                 <div class="progress progress-md">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-label="Incoming Progress" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>


                                 <div class="mt-4 mb-2 d-flex justify-content-between">
                                    <span class="">Outcome</span>
                                    <span class="">10%</span>
                                 </div>
                                 <div class="progress progress-md">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-label="Outcome Progress" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                                 <!-- END : Bandwidth usage and progress bars -->


                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-5">
                     <div class="row">
                        <div class="col-sm-6">


                           <!-- Tile - HDD Usage -->
                           <div class="card bg-success text-white overflow-hidden mb-3">
                              <div class="p-3 pb-2">
                                 <h5 class="mb-3"><i class="demo-psi-data-storage text-reset text-opacity-75 fs-3 me-2"></i> HDD Usage</h5>
                                 <ul class="list-group list-group-borderless">
                                    <li class="list-group-item p-0 text-reset d-flex justify-content-between align-items-start">
                                       <div class="me-auto">Free Space</div>
                                       <span class="fw-bold">132Gb</span>
                                    </li>
                                    <li class="list-group-item p-0 text-reset d-flex justify-content-between align-items-start">
                                       <div class="me-auto">Used space</div>
                                       <span class="fw-bold">1,45Gb</span>
                                    </li>
                                 </ul>
                              </div>

                              <!-- Area Chart -->
                              <div class="py-0" style="height: 70px; margin: 0 -5px -5px;">
                                 <canvas id="_dm-hddChart"></canvas>
                              </div>
                              <!-- END : Area Chart -->

                           </div>
                           <!-- END : Tile - HDD Usage -->


                        </div>
                        <div class="col-sm-6">


                           <!-- Tile - Earnings -->
                           <div class="card bg-info text-white overflow-hidden mb-3">
                              <div class="p-3 pb-2">
                                 <h5 class="mb-3"><i class="demo-psi-coin text-reset text-opacity-75 fs-2 me-2"></i> Earning</h5>
                                 <ul class="list-group list-group-borderless">
                                    <li class="list-group-item p-0 text-reset d-flex justify-content-between align-items-start">
                                       <div class="me-auto">Today</div>
                                       <span class="fw-bold">$764</span>
                                    </li>
                                    <li class="list-group-item p-0 text-reset d-flex justify-content-between align-items-start">
                                       <div class="me-auto">Last 7 Day</div>
                                       <span class="fw-bold">$1,332</span>
                                    </li>
                                 </ul>
                              </div>

                              <!-- Line Chart -->
                              <div class="py-0" style="height: 70px; margin: 0 -5px -5px;">
                                 <canvas id="_dm-earningChart"></canvas>
                              </div>
                              <!-- END : Line Chart -->

                           </div>
                           <!-- END : Tile - Earnings -->


                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-6">


                           <!-- Tile - Sales -->
                           <div class="card bg-purple text-white overflow-hidden mb-3">
                              <div class="p-3 pb-2">
                                 <h5 class="mb-3"><i class="demo-psi-basket-coins text-reset text-opacity-75 fs-2 me-2"></i> Sales</h5>
                                 <ul class="list-group list-group-borderless">
                                    <li class="list-group-item p-0 text-reset d-flex justify-content-between align-items-start">
                                       <div class="me-auto">Today</div>
                                       <span class="fw-bold">$764</span>
                                    </li>
                                    <li class="list-group-item p-0 text-reset d-flex justify-content-between align-items-start">
                                       <div class="me-auto">Last 7 Day</div>
                                       <span class="fw-bold">$1,332</span>
                                    </li>
                                 </ul>
                              </div>

                              <!-- Bar Chart -->
                              <div class="py-0" style="height: 70px">
                                 <canvas id="_dm-salesChart"></canvas>
                              </div>
                              <!-- END : Bar Chart -->

                           </div>
                           <!-- END : Tile - Sales -->


                        </div>
                        <div class="col-sm-6">

                           <!-- Tile - Task Progress -->
                           <div class="card bg-warning text-white overflow-hidden mb-3">
                              <div class="p-3 pb-2">
                                 <h5 class="mb-3"><i class="demo-psi-basket-coins text-reset text-opacity-75 fs-2 me-2"></i> Progress</h5>
                                 <ul class="list-group list-group-borderless">
                                    <li class="list-group-item p-0 text-reset d-flex justify-content-between align-items-start">
                                       <div class="me-auto">Completed</div>
                                       <span class="fw-bold">34</span>
                                    </li>
                                    <li class="list-group-item p-0 text-reset d-flex justify-content-between align-items-start">
                                       <div class="me-auto">Total</div>
                                       <span class="fw-bold">79</span>
                                    </li>
                                 </ul>
                              </div>

                              <!-- Horizontal Bar Chart -->
                              <div class="py-0 pb-2" style="height: 70px">
                                 <canvas id="_dm-taskChart"></canvas>
                              </div>
                              <!-- END : Horizontal Bar Chart -->

                           </div>
                           <!-- END : Tile - Task Progress -->

                        </div>
                     </div>


                     <!-- Simple state widget -->
                     <div class="card">
                        <div class="card-body text-center">
                           <div class="d-flex align-items-center">
                              <div class="flex-shrink-0 p-3">
                                 <div class="h3 display-3">95</div>
                                 <span class="h6">New Friends</span>
                              </div>
                              <div class="flex-grow-1 text-center ms-3">
                                 <p class="text-body-secondary">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                 <button class="btn btn-sm btn-danger">View Details</button>

                                 <!-- Social media statistics -->
                                 <div class="mt-4 pt-3 d-flex justify-content-around border-top">
                                    <div class="text-center">
                                       <h4 class="mb-1">1,345</h4>
                                       <small class="text-body-secondary">Following</small>
                                    </div>
                                    <div class="text-center">
                                       <h4 class="mb-1">23k</h4>
                                       <small class="text-body-secondary">Followers</small>
                                    </div>
                                    <div class="text-center">
                                       <h4 class="mb-1">278</h4>
                                       <small class="text-body-secondary">Posts</small>
                                    </div>
                                 </div>
                                 <!-- END : Social media statistics -->
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- END : Simple state widget -->


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


         <div class="bg-body-secondary bg-opacity-50 my-3 pt-3">
            <div class="content__boxed">
               <div class="content__wrap">

                  <div class="row gx-5 gy-5 gy-md-0">
                     <div class="col-md-4">


                        <!-- TODO List -->
                        <h4 class="mb-3">To-do list</h4>
                        <ul class="list-group list-group-borderless">
                           <li class="list-group-item px-0">
                              <div class="form-check ">
                                 <input id="_dm-todoList1" class="form-check-input" type="checkbox" checked>
                                 <label for="_dm-todoList1" class="form-check-label text-decoration-line-through">
                                    Find an idea <span class="badge bg-danger text-decoration-line-through">Important</span>
                                 </label>
                              </div>
                           </li>
                           <li class="list-group-item px-0">
                              <div class="form-check">
                                 <input id="_dm-todoList2" class="form-check-input" type="checkbox">
                                 <label for="_dm-todoList2" class="form-check-label">
                                    Do some work
                                 </label>
                              </div>
                           </li>
                           <li class="list-group-item px-0">
                              <div class="form-check">
                                 <input id="_dm-todoList3" class="form-check-input" type="checkbox">
                                 <label for="_dm-todoList3" class="form-check-label">
                                    Read the book
                                 </label>
                              </div>
                           </li>
                           <li class="list-group-item px-0">
                              <div class="form-check">
                                 <input id="_dm-todoList4" class="form-check-input" type="checkbox">
                                 <label for="_dm-todoList4" class="form-check-label">
                                    Upgrade server <span class="badge bg-warning">Warning</span>
                                 </label>
                              </div>
                           </li>
                           <li class="list-group-item px-0">
                              <div class="form-check">
                                 <input id="_dm-todoList5" class="form-check-input" type="checkbox">
                                 <label for="_dm-todoList5" class="form-check-label">
                                    Redesign my logo <span class="badge bg-info">2 Mins</span>
                                 </label>
                              </div>
                           </li>
                        </ul>

                        <div class="input-group mt-3">
                           <input type="text" class="form-control form-control-sm" placeholder="Add new list" aria-label="Add new list" aria-describedby="button-addon">
                           <button id="button-addon" class="btn btn-sm btn-secondary hstack gap-2" type="button">
                              <i class="demo-psi-add text-dark text-opacity-40 fs-4"></i>
                              <span class="vr"></span>
                              Add New
                           </button>
                        </div>
                        <!-- END : TODO List -->


                     </div>
                     <div class="col-md-4">


                        <!-- Service options -->
                        <h4 class="mb-3">Services</h4>
                        <div class="list-group list-group-borderless">
                           <div class="list-group-item px-0 mb-2">
                              <div class="d-flex justify-content-between">
                                 <label class="form-check-label h5 mb-0" for="_dm-dbPersonalStatus">Show my personal status</label>
                                 <div class="form-check form-switch">
                                    <input id="_dm-dbPersonalStatus" class="form-check-input" type="checkbox" checked>
                                 </div>
                              </div>
                              <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</span>
                           </div>

                           <div class="list-group-item px-0 mb-2">
                              <div class="d-flex justify-content-between">
                                 <label class="form-check-label h5 mb-0" for="_dm-dbOfflineContact">Show offline contact</label>
                                 <div class="form-check form-switch">
                                    <input id="_dm-dbOfflineContact" class="form-check-input" type="checkbox">
                                 </div>
                              </div>
                              <span>Aenean commodo ligula eget dolor. Aenean massa.</span>
                           </div>

                           <div class="list-group-item px-0 mb-2">
                              <div class="d-flex justify-content-between">
                                 <label class="form-check-label h5 mb-0" for="_dm-dbMuteNotifications">Mute notifications</label>
                                 <div class="form-check form-switch">
                                    <input id="_dm-dbMuteNotifications" class="form-check-input" type="checkbox">
                                 </div>
                              </div>
                              <span>Aenean commodo ligula eget dolor. Aenean massa.</span>
                           </div>

                           <div class="list-group-item px-0 mb-2">
                              <div class="d-flex justify-content-between">
                                 <label class="form-check-label h5 mb-0" for="_dm-dbInvisibleMode">Invisible Mode</label>
                                 <div class="form-check form-switch">
                                    <input id="_dm-dbInvisibleMode" class="form-check-input" type="checkbox" checked>
                                 </div>
                              </div>
                              <span>Nascetur ridiculus mus.</span>
                           </div>
                        </div>
                        <!-- END : Service options -->


                     </div>
                     <div class="col-md-4">

                        <!-- User quote  -->
                        <div class="d-flex align-items-center position-relative hv-grow-parent hv-outline-parent">
                           <div class="flex-shrink-0">
                              <img class="hv-gc hv-oc img-lg rounded-circle" src="assets/img/profile-photos/8.png" alt="Profile Picture" loading="lazy">
                           </div>
                           <div class="flex-grow-1 ms-3">
                              <a href="#" class="d-block stretched-link h5 link-offset-2-hover text-decoration-none link-underline-hover mb-0">Kathryn Obrien</a>
                              Project manager
                           </div>
                        </div>

                        <figure class="d-flex flex-column align-items-center justify-content-center my-4">
                           <blockquote class="blockquote mb-0">
                              <p class="quote">Lorem ipsum dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</p>
                           </blockquote>
                        </figure>

                        <div class="border-top pt-3">
                           <a href="#" class="btn btn-icon btn-link text-indigo" aria-label="Facebook button">
                              <i class="demo-psi-facebook fs-4"></i>
                           </a>
                           <a href="#" class="btn btn-icon btn-link text-info" aria-label="Twitter button">
                              <i class="demo-psi-twitter fs-4"></i>
                           </a>
                           <a href="#" class="btn btn-icon btn-link text-red" aria-label="Google plus button">
                              <i class="demo-psi-google-plus fs-4"></i>
                           </a>
                           <a href="#" class="btn btn-icon btn-link text-orange" aria-label="Instagram button">
                              <i class="demo-psi-instagram fs-4"></i>
                           </a>
                        </div>
                        <!-- END : User quote  -->


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
      ?>


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

   <?php
   include_once 'javascript.php';
   ?>

   <!-- Plugin scripts [ OPTIONAL ] -->
   <script src="assets/pages/dashboard-1.min.js"></script>


</body>

</html>