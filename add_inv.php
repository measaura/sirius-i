<?php
include_once('includes/db_func.php');
include_once 'func/user_check.php';
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-scheme="orange">

<head>
   <meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
   <meta name="description" content="General form-control live preview. You can copy our examples and paste them into your project!">
   <title>Add Inventory | SIRIUS-I</title>


   <!-- STYLESHEETS -->
   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

   <!-- Fonts [ OPTIONAL ] -->
   
   
   <style type="text/css">@font-face {font-family:Poppins;font-style:normal;font-weight:300;src:url(/assets/fonts/poppins/5.0.11/latin/300/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:300;src:url(/assets/fonts/poppins/5.0.11/devanagari/300/normal.woff2);unicode-range:U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:300;src:url(/assets/fonts/poppins/5.0.11/latin-ext/300/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:400;src:url(/assets/fonts/poppins/5.0.11/latin/400/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:400;src:url(/assets/fonts/poppins/5.0.11/latin-ext/400/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:400;src:url(/assets/fonts/poppins/5.0.11/devanagari/400/normal.woff2);unicode-range:U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:500;src:url(/assets/fonts/poppins/5.0.11/latin/500/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:500;src:url(/assets/fonts/poppins/5.0.11/latin-ext/500/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:500;src:url(/assets/fonts/poppins/5.0.11/devanagari/500/normal.woff2);unicode-range:U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:700;src:url(/assets/fonts/poppins/5.0.11/devanagari/700/normal.woff2);unicode-range:U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:700;src:url(/assets/fonts/poppins/5.0.11/latin/700/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:700;src:url(/assets/fonts/poppins/5.0.11/latin-ext/700/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(/assets/fonts/ubuntu/5.0.11/greek-ext/400/normal.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(/assets/fonts/ubuntu/5.0.11/greek/400/normal.woff2);unicode-range:U+0370-03FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(/assets/fonts/ubuntu/5.0.11/latin-ext/400/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(/assets/fonts/ubuntu/5.0.11/cyrillic-ext/400/normal.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(/assets/fonts/ubuntu/5.0.11/cyrillic/400/normal.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(/assets/fonts/ubuntu/5.0.11/latin/400/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(/assets/fonts/ubuntu/5.0.11/cyrillic-ext/500/normal.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(/assets/fonts/ubuntu/5.0.11/greek/500/normal.woff2);unicode-range:U+0370-03FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(/assets/fonts/ubuntu/5.0.11/cyrillic/500/normal.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(/assets/fonts/ubuntu/5.0.11/latin/500/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(/assets/fonts/ubuntu/5.0.11/latin-ext/500/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(/assets/fonts/ubuntu/5.0.11/greek-ext/500/normal.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(/assets/fonts/ubuntu/5.0.11/latin/700/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(/assets/fonts/ubuntu/5.0.11/greek/700/normal.woff2);unicode-range:U+0370-03FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(/assets/fonts/ubuntu/5.0.11/cyrillic-ext/700/normal.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(/assets/fonts/ubuntu/5.0.11/cyrillic/700/normal.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(/assets/fonts/ubuntu/5.0.11/greek-ext/700/normal.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(/assets/fonts/ubuntu/5.0.11/latin-ext/700/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}</style>


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
   <div id="root" class="root mn--max tm--expanded-hd  mn--max mn--sticky">

      <!-- CONTENTS -->
      <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
      <section id="content" class="content">
         <div class="content__header content__boxed overlapping">
            <div class="content__wrap">


               <!-- Breadcrumb -->
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="main.php">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Add Inventory</li>
                  </ol>
               </nav>
               <!-- END : Breadcrumb -->


               <h1 class="page-title mb-0 mt-2">Add Inventory</h1>

               <p class="lead">
                  Main inventory for SIRIUS-I
               </p>
            </div>

         </div>


         <div class="content__boxed">
            <div class="content__wrap">

               <h2 class="mb-3">Form Layouts</h2>
               <div class="card mb-3">
                  <div class="card-body">
                     <h5 class="card-title">Inline form</h5>


                     <!-- Inline Form -->
                     <form class="row row-cols-md-auto g-3 align-items-center">
                        <div class="col-12">
                           <label for="_dm-staticEmail" class="visually-hidden">Email</label>
                           <input type="text" class="form-control" id="_dm-inputEmail" placeholder="Email">
                        </div>
                        <div class="col-12">
                           <label for="_dm-inputPassword" class="visually-hidden">Password</label>
                           <input type="password" class="form-control" id="_dm-inputPassword" placeholder="Password">
                        </div>
                        <div class="col-12">
                           <div class="form-check">
                              <input id="_dm-rememberCheck" class="form-check-input" type="checkbox">
                              <label for="_dm-rememberCheck" class="form-check-label">
                                 Remember Me
                              </label>
                           </div>
                        </div>
                        <div class="col-12">
                           <button type="submit" class="btn btn-primary">Confirm identity</button>
                        </div>
                     </form>
                     <!-- END : Inline Form -->


                  </div>
               </div>


               <section>
                  <div class="row">
                     <div class="col-md-6 mb-3">
                        <div class="card h-100">
                           <div class="card-body">
                              <h5 class="card-title">Block styled form</h5>


                              <!-- Block styled form -->
                              <form class="row g-3">
                                 <div class="col-md-6">
                                    <label for="_dm-inputEmail2" class="form-label">Email</label>
                                    <input id="_dm-inputEmail2" type="email" class="form-control">
                                 </div>

                                 <div class="col-md-6">
                                    <label for="_dm-inputPassword2" class="form-label">Password</label>
                                    <input id="_dm-inputPassword2" type="password" class="form-control">
                                 </div>

                                 <div class="col-12">
                                    <label for="_dm-inputAddress" class="form-label">Address</label>
                                    <input id="_dm-inputAddress" type="text" class="form-control" placeholder="1234 Main St">
                                 </div>

                                 <div class="col-12">
                                    <label for="_dm-inputAddress2" class="form-label">Address 2</label>
                                    <input id="_dm-inputAddress2" type="text" class="form-control" placeholder="Apartment, studio, or floor">
                                 </div>

                                 <div class="col-md-6">
                                    <label for="_dm-inputCity" class="form-label">City</label>
                                    <input id="_dm-inputCity" type="text" class="form-control">
                                 </div>

                                 <div class="col-md-4">
                                    <label for="inputState" class="form-label">State</label>
                                    <select id="inputState" class="form-select">
                                       <option selected>Choose...</option>
                                       <option>State 1</option>
                                       <option>State 2</option>
                                       <option>State 3</option>
                                    </select>
                                 </div>

                                 <div class="col-md-2">
                                    <label for="_dm-inputZip" class="form-label">Zip</label>
                                    <input id="_dm-inputZip" type="text" class="form-control">
                                 </div>

                                 <div class="col-12">
                                    <div class="form-check">
                                       <input id="_dm-gridCheck" class="form-check-input" type="checkbox">
                                       <label for="_dm-gridCheck" class="form-check-label">
                                          Check me out
                                       </label>
                                    </div>
                                 </div>

                                 <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                 </div>
                              </form>
                              <!-- END : Block styled form -->


                           </div>
                        </div>

                     </div>
                     <div class="col-md-6 mb-3">
                        <div class="card h-100">
                           <div class="card-body">
                              <h5 class="card-title">Horizontal form</h5>


                              <!-- Horizontal Form -->
                              <form>
                                 <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                       <input type="email" class="form-control" id="inputEmail3">
                                    </div>
                                 </div>

                                 <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                       <input type="password" class="form-control" id="inputPassword3">
                                    </div>
                                 </div>

                                 <div class="row mb-3">
                                    <label for="_dm-inputAddress3" class="col-sm-2 form-label">Address</label>
                                    <div class="col-sm-10">
                                       <input id="_dm-inputAddress3" type="text" class="form-control" placeholder="1234 Main St">
                                    </div>
                                 </div>

                                 <div class="row mb-3">
                                    <label for="_dm-inputAddress4" class="col-sm-2 col-form-label">Address 2</label>
                                    <div class="col-sm-10">
                                       <input id="_dm-inputAddress4" type="text" class="form-control" placeholder="Apartment, studio, or floor">
                                    </div>
                                 </div>

                                 <div class="row mb-3">
                                    <label for="_dm-inputCity2" class="col-sm-2 col-form-label">City</label>
                                    <div class="col-sm-10">
                                       <input id="_dm-inputCity2" type="text" class="form-control">
                                    </div>
                                 </div>

                                 <div class="row mb-3">
                                    <div class="col-sm-10 offset-sm-2">
                                       <div class="form-check">
                                          <input id="_dm-rememberCheck3" class="form-check-input" type="checkbox">
                                          <label for="_dm-rememberCheck3" class="form-check-label">
                                             Remember Me
                                          </label>
                                       </div>
                                    </div>
                                 </div>

                                 <button type="submit" class="btn btn-primary">Sign in</button>
                              </form>
                              <!-- END : Horizontal Form -->


                           </div>
                        </div>

                     </div>
                  </div>
               </section>


               <h2 class="mt-5 mb-3">Form Sizing</h2>
               <section>
                  <div class="row">
                     <div class="col-md-6 mb-3">
                        <div class="card h-100">
                           <div class="card-body">
                              <h5 class="card-title">Input size</h5>


                              <!-- Horizontal form label sizing -->
                              <div class="row mb-3">
                                 <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                                 <div class="col-sm-10">
                                    <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm">
                                 </div>
                              </div>

                              <div class="row mb-3">
                                 <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                                 <div class="col-sm-10">
                                    <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
                                 </div>
                              </div>

                              <div class="row mb-3">
                                 <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                                 <div class="col-sm-10">
                                    <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg">
                                 </div>
                              </div>
                              <!-- END : Horizontal form label sizing -->


                              <!-- Grid Input Size -->
                              <div class="row mb-3">
                                 <label for="_dm-inputGrid1" class="col-2 col-form-label">Grid Input</label>
                                 <div class="col-5">
                                    <input id="_dm-inputGrid1" type="text" class="form-control" placeholder=".col-5">
                                 </div>
                              </div>

                              <div class="row mb-3">
                                 <div class="col-7 offset-2">
                                    <input id="_dm-inputGrid1" type="text" class="form-control" placeholder=".col-7">
                                 </div>
                              </div>

                              <div class="row mb-3">
                                 <div class="col-9 offset-2">
                                    <input id="_dm-inputGrid1" type="text" class="form-control" placeholder=".col-9">
                                 </div>
                              </div>
                              <!-- END : Grid Input Size -->


                           </div>
                        </div>

                     </div>
                     <div class="col-md-6 mb-3">
                        <div class="card h-100">
                           <div class="card-body">
                              <h5 class="card-title">No label form</h5>


                              <!-- No Label Form -->
                              <div class="row g-3">
                                 <div class="col-sm-5">
                                    <input type="text" class="form-control" placeholder="Name" aria-label="Name">
                                 </div>

                                 <div class="col-sm">
                                    <input type="email" class="form-control" placeholder="Email" aria-label="Email">
                                 </div>

                                 <div class="col-sm">
                                    <input type="text" class="form-control" placeholder="Website" aria-label="Website">
                                 </div>

                                 <div class="col-sm-12">
                                    <textarea class="form-control" placeholder="Message" rows="14"></textarea>
                                 </div>
                              </div>
                              <!-- END : No Label Form -->


                           </div>
                        </div>

                     </div>
                  </div>
               </section>


               <h2 class="mt-5 mb-3">Floating labels <span class="badge bg-info">New</span></h2>
               <section>
                  <div class="row">
                     <div class="col-md-6 mb-3">
                        <div class="card h-100">
                           <div class="card-body">
                              <h5 class="card-title">Input</h5>


                              <!-- Floating label on input field -->
                              <div class="form-floating mb-3">
                                 <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                 <label for="floatingInput">Email address</label>
                              </div>

                              <div class="form-floating mb-3">
                                 <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                 <label for="floatingPassword">Password</label>
                              </div>

                              <form class="form-floating">
                                 <input type="email" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="test@example.com">
                                 <label for="floatingInputValue">Input with value</label>
                              </form>
                              <!-- END : Floating label on input field -->


                           </div>
                        </div>

                     </div>
                     <div class="col-md-6 mb-3">
                        <div class="card h-100">
                           <div class="card-body">
                              <h5 class="card-title">Select and textarea</h5>


                              <!-- Floating label on select -->
                              <div class="form-floating mb-3">
                                 <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                 </select>
                                 <label for="floatingSelect">Works with selects</label>
                              </div>
                              <!-- END : Floating label on select -->


                              <!-- Floating label on textarea -->
                              <div class="form-floating">
                                 <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 140px"></textarea>
                                 <label for="floatingTextarea2">Comments</label>
                              </div>
                              <!-- END : Floating label on textarea -->


                           </div>
                        </div>

                     </div>
                  </div>
               </section>


               <h2 class="mt-5 mb-3">Input Groups</h2>
               <section>
                  <div class="row">
                     <div class="col-md-6 mb-3">
                        <div class="card h-100">
                           <div class="card-body">
                              <h5 class="card-title">Icons Addons</h5>


                              <!-- Icons Addons -->
                              <div class="input-group mb-3">
                                 <span class="input-group-text" id="basic-addon1">
                                    <i class="demo-pli-star"></i>
                                 </span>
                                 <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                              </div>

                              <div class="input-group mb-3">
                                 <input type="text" class="form-control" placeholder="Folder Name" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                 <span class="input-group-text" id="basic-addon2">
                                    <i class="demo-pli-inbox-full"></i>
                                 </span>
                              </div>

                              <div class="input-group mb-3">
                                 <span class="input-group-text">
                                    <i class="demo-pli-coin"></i>
                                 </span>
                                 <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Earning">
                                 <span class="input-group-text">.00</span>
                              </div>

                              <div class="input-group mb-3">
                                 <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                                 <span class="input-group-text">@</span>
                                 <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                              </div>
                              <!-- END : Icons Addons -->


                           </div>
                        </div>

                     </div>
                     <div class="col-md-6 mb-3">
                        <div class="card h-100">
                           <div class="card-body">
                              <h5 class="card-title">Buttons Addons</h5>

                              <div class="input-group mb-3">
                                 <button class="btn btn-warning" type="button" id="button-addon1">Button</button>
                                 <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                              </div>

                              <div class="input-group mb-3">
                                 <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                                 <button class="btn btn-info" type="button" id="button-addon2">Button</button>
                              </div>

                              <div class="input-group mb-3">
                                 <button class="btn btn-secondary" type="button">Button</button>
                                 <button class="btn btn-secondary" type="button">Button</button>
                                 <input type="text" class="form-control" placeholder="" aria-label="Example text with two button addons">
                              </div>

                              <div class="input-group">
                                 <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username with two button addons">
                                 <button class="btn btn-success" type="button">Button</button>
                                 <button class="btn btn-success" type="button">Button</button>
                              </div>


                           </div>
                        </div>

                     </div>
                     <div class="col-md-6 mb-3">
                        <div class="card h-100">
                           <div class="card-body">
                              <h5 class="card-title">Checkboxes and radio addons</h5>


                              <!-- Checkbox addons -->
                              <div class="input-group mb-3">
                                 <div class="input-group-text">
                                    <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
                                 </div>
                                 <input type="text" class="form-control" aria-label="Text input with checkbox">
                              </div>
                              <!-- END : Checkbox addons -->


                              <!-- Radio addons-->
                              <div class="input-group mb-3">
                                 <div class="input-group-text">
                                    <input class="form-check-input mt-0" type="radio" name="radio-input-grpup" aria-label="Radio button for following text input">
                                 </div>
                                 <input type="text" class="form-control" aria-label="Text input with radio button">
                              </div>

                              <div class="input-group">
                                 <div class="input-group-text">
                                    <input class="form-check-input mt-0" type="radio" name="radio-input-grpup" aria-label="Radio button for following text input">
                                 </div>
                                 <input type="text" class="form-control" aria-label="Text input with radio button">
                              </div>
                              <!-- END : Radio addons-->


                           </div>
                        </div>

                     </div>
                     <div class="col-md-6 mb-3">
                        <div class="card h-100">
                           <div class="card-body">
                              <h5 class="card-title">Dropdowns Addons</h5>


                              <!-- Dropdown Addons -->
                              <div class="input-group mb-3">
                                 <button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                 <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                       <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                 </ul>
                                 <input type="text" class="form-control" aria-label="Text input with dropdown button">
                              </div>

                              <div class="input-group mb-3">
                                 <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                 <button class="btn btn-warning dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
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

                              <div class="input-group">
                                 <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                 <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action before</a></li>
                                    <li><a class="dropdown-item" href="#">Another action before</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                       <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                 </ul>
                                 <input type="text" class="form-control" aria-label="Text input with 2 dropdown buttons">
                                 <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
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
                              <!-- END : Dropdown Addons -->


                           </div>
                        </div>

                     </div>
                  </div>
               </section>


               <h2 class="mt-5 mb-3">Validation</h2>
               <section>
                  <div class="card h-100">
                     <div class="card-body">
                        <h5 class="card-title">Validation States</h5>

                        <form class="row g-3">
                           <div class="col-md-4">
                              <label for="validationServer01" class="form-label">First name</label>
                              <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>
                              <div class="valid-feedback">
                                 Looks good!
                              </div>
                           </div>
                           <div class="col-md-4">
                              <label for="validationServer02" class="form-label">Last name</label>
                              <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
                              <div class="valid-feedback">
                                 Looks good!
                              </div>
                           </div>
                           <div class="col-md-4">
                              <label for="validationServerUsername" class="form-label">Username</label>
                              <div class="input-group has-validation">
                                 <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                 <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                 <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    Please choose a username.
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <label for="validationServer03" class="form-label">City</label>
                              <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
                              <div id="validationServer03Feedback" class="invalid-feedback">
                                 Please provide a valid city.
                              </div>
                           </div>
                           <div class="col-md-3">
                              <label for="validationServer04" class="form-label">State</label>
                              <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
                                 <option selected disabled value="">Choose...</option>
                                 <option>...</option>
                              </select>
                              <div id="validationServer04Feedback" class="invalid-feedback">
                                 Please select a valid state.
                              </div>
                           </div>
                           <div class="col-md-3">
                              <label for="validationServer05" class="form-label">Zip</label>
                              <input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
                              <div id="validationServer05Feedback" class="invalid-feedback">
                                 Please provide a valid zip.
                              </div>
                           </div>
                           <div class="col-12">
                              <div class="form-check">
                                 <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                                 <label class="form-check-label" for="invalidCheck3">
                                    Agree to terms and conditions
                                 </label>
                                 <div id="invalidCheck3Feedback" class="invalid-feedback">
                                    You must agree before submitting.
                                 </div>
                              </div>
                           </div>
                           <div class="col-12">
                              <button class="btn btn-primary" type="submit">Submit form</button>
                           </div>
                        </form>


                     </div>
                  </div>

               </section>


               <h2 class="mt-5 mb-3">Form elements</h2>
               <section>
                  <div class="row">
                     <div class="col-md-6 mb-3">
                        <div class="card h-100">
                           <div class="card-body">
                              <h5 class="card-title">Default state</h5>

                              <!-- Static Input -->
                              <div class="row mb-3">
                                 <label for="_dm-staticInput" class="col-sm-3 col-form-label">Static</label>
                                 <div class="col-sm-9">
                                    <input id="_dm-staticInput" type="email" class="form-control-plaintext" value="username">
                                 </div>
                              </div>
                              <!-- END : Static Input -->


                              <!-- Text input -->
                              <div class="row mb-3">
                                 <label for="_dm-textInput" class="col-sm-3 col-form-label">Text Input</label>
                                 <div class="col-sm-9">
                                    <input id="_dm-textInput" type="text" class="form-control" placeholder="Default Input">
                                 </div>
                              </div>
                              <!-- END : Text input -->


                              <!-- Text input with help -->
                              <div class="row mb-3">
                                 <label for="_dm-textInputWitHelp" class="col-sm-3 form-label">With Help</label>
                                 <div class="col-sm-9">
                                    <input id="_dm-textInputWitHelp" type="text" class="form-control" placeholder="Input with help" aria-describedby="inputHelp">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                 </div>
                              </div>
                              <!-- END : Text input with help -->


                              <!-- Floating label -->
                              <div class="row mb-3">
                                 <label for="_dm-floatingInput" class="col-sm-3 form-label">Floating label</label>
                                 <div class="col-sm-9">
                                    <div class="form-floating mb-3">
                                       <input id="dm_floatingInput" type="text" class="form-control" placeholder="Username">
                                       <label for="dm_floatingInput">Username</label>
                                    </div>
                                 </div>
                              </div>
                              <!-- END : Floating label -->


                              <!-- Readonly -->
                              <div class="row mb-3">
                                 <label class="col-sm-3 col-form-label">Readonly</label>
                                 <div class="col-sm-9">
                                    <input class="form-control" type="text" value="Readonly input here..." aria-label="readonly input example" readonly>
                                 </div>
                              </div>
                              <!-- END : Readonly -->


                              <!-- Textarea -->
                              <div class="row mb-3">
                                 <label for="_dm-textareaInput" class="col-sm-3 col-form-label">Textarea</label>
                                 <div class="col-sm-9">
                                    <textarea id="_dm-textareaInput" class="form-control" placeholder="Textarea" rows="5"></textarea>
                                 </div>
                              </div>
                              <!-- END : Textarea -->


                              <!-- Checkboxes -->
                              <div class="row mb-3">
                                 <label class="col-sm-3 col-form-label">Checkboxes</label>
                                 <div class="col-sm-9 py-2">
                                    <div class="form-check mb-2">
                                       <input id="_dm-blockCheckboxes" class="form-check-input" type="checkbox" checked>
                                       <label for="_dm-blockCheckboxes" class="form-check-label">
                                          Option 1 (pre-checked)
                                       </label>
                                    </div>

                                    <div class="form-check mb-2">
                                       <input id="_dm-blockCheckbox2" class="form-check-input" type="checkbox">
                                       <label for="_dm-blockCheckbox2" class="form-check-label">
                                          Option 2
                                       </label>
                                    </div>

                                    <div class="form-check">
                                       <input id="_dm-blockCheckbox3" class="form-check-input" type="checkbox">
                                       <label for="_dm-blockCheckbox3" class="form-check-label">
                                          Option 3
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <!-- END : Checkboxes -->


                              <!-- Inline Checkboxes-->
                              <div class="row mb-3">
                                 <label class="col-sm-3 col-form-label">Inline Checkboxes</label>
                                 <div class="col-sm-9 pt-3">
                                    <div class="form-check form-check-inline">
                                       <input id="_dm-inlineCheckboxes" class="form-check-input" type="checkbox" autocomplete="off" value="option1" checked>
                                       <label for="_dm-inlineCheckboxes" class="form-check-label">Pre-checked</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                       <input id="_dm-inlineCheckboxes2" class="form-check-input" type="checkbox" autocomplete="off" value="option2">
                                       <label for="_dm-inlineCheckboxes2" class="form-check-label">Option 2</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                       <input id="_dm-inlineCheckboxes3" class="form-check-input" type="checkbox" autocomplete="off" value="option3">
                                       <label for="_dm-inlineCheckboxes3" class="form-check-label">Option 3</label>
                                    </div>
                                 </div>
                              </div>
                              <!-- END : Inline Checkboxes-->


                              <!-- Radios -->
                              <div class="row mb-3">
                                 <label class="col-sm-3 col-form-label">Radios</label>
                                 <div class="col-sm-9 pt-3">
                                    <div class="form-check mb-2">
                                       <input id="_dm-blockRadios" class="form-check-input" type="radio" name="radioBlockDefault" checked>
                                       <label for="_dm-blockRadios" class="form-check-label">
                                          Option 1 ( Pre-checked )
                                       </label>
                                    </div>

                                    <div class="form-check mb-2">
                                       <input id="_dm-blockRadios2" class="form-check-input" type="radio" name="radioBlockDefault">
                                       <label for="_dm-blockRadios2" class="form-check-label">
                                          Option 2
                                       </label>
                                    </div>

                                    <div class="form-check">
                                       <input id="_dm-blockRadios3" class="form-check-input" type="radio" name="radioBlockDefault">
                                       <label for="_dm-blockRadios3" class="form-check-label">
                                          Option 3
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <!-- END : Radios -->


                              <!-- Inline Radios -->
                              <div class="row mb-3">
                                 <label class="col-sm-3 col-form-label">Inline radios</label>
                                 <div class="col-sm-9 pt-3">
                                    <div class="form-check form-check-inline">
                                       <input id="_dm-inlineRadio1" class="form-check-input" type="radio" name="inlineRadioOptions" value="option1" checked>
                                       <label for="_dm-inlineRadio1" class="form-check-label">Pre-checked</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                       <input id="_dm-inlineRadio2" class="form-check-input" type="radio" name="inlineRadioOptions" value="option2">
                                       <label for="_dm-inlineRadio2" class="form-check-label">Option 2</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                       <input id="_dm-inlineRadio3" class="form-check-input" type="radio" name="inlineRadioOptions" value="option3">
                                       <label for="_dm-inlineRadio3" class="form-check-label">Option 3</label>
                                    </div>
                                 </div>
                              </div>
                              <!-- END : Inline Radios -->


                              <!-- File Input -->
                              <div class="row mb-3">
                                 <label for="_dm-fileInput" class="col-sm-3 col-form-label">File input</label>
                                 <div class="col-sm-9">
                                    <input id="_dm-fileInput" class="form-control" type="file">
                                 </div>
                              </div>
                              <!-- END : File Input -->


                           </div>
                        </div>

                     </div>
                     <div class="col-md-6 mb-3">
                        <div class="card h-100">
                           <div class="card-body">
                              <h5 class="card-title">Disabled</h5>

                              <!-- Disabled static Input -->
                              <div class="row mb-3">
                                 <label for="_dm-disabledStaticInput" class="col-sm-3 col-form-label">Static</label>
                                 <div class="col-sm-9">
                                    <input id="_dm-disabledStaticInput" type="email" class="form-control-plaintext" value="username" disabled>
                                 </div>
                              </div>
                              <!-- END : Disabled static Input -->


                              <!-- Disabled text input -->
                              <div class="row mb-3">
                                 <label for="_dm-disabledTextInput" class="col-sm-3 col-form-label">Text Input</label>
                                 <div class="col-sm-9">
                                    <input id="_dm-disabledTextInput" type="text" class="form-control" placeholder="Default Input" disabled>
                                 </div>
                              </div>
                              <!-- END : Disabled text input -->


                              <!-- Disabled text input with help -->
                              <div class="row mb-3">
                                 <label for="_dm-disabledTextInputWitHelp" class="col-sm-3 form-label">With Help</label>
                                 <div class="col-sm-9">
                                    <input id="_dm-disabledTextInputWitHelp" type="text" class="form-control" placeholder="Input with help" aria-describedby="inputHelp" disabled>
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                 </div>
                              </div>
                              <!-- END : Disabled text input with help -->


                              <!-- Disabled floating label -->
                              <div class="row mb-3">
                                 <label for="_dm-disabledFloatingInput" class="col-sm-3 form-label">Floating label</label>
                                 <div class="col-sm-9">
                                    <div class="form-floating mb-3">
                                       <input id="dm_disabledFloatingInput" type="text" class="form-control" placeholder="Username" disabled>
                                       <label for="dm_disabledFloatingInput">Username</label>
                                    </div>
                                 </div>
                              </div>
                              <!-- END : Disabled floating label -->


                              <!-- Disabled readonly -->
                              <div class="row mb-3">
                                 <label class="col-sm-3 col-form-label">Readonly</label>
                                 <div class="col-sm-9">
                                    <input class="form-control" type="text" value="Readonly input here..." aria-label="readonly input example" readonly disabled>
                                 </div>
                              </div>
                              <!-- END : Disabled readonly -->


                              <!-- Disabled textarea -->
                              <div class="row mb-3">
                                 <label for="_dm-disabledTextareaInput" class="col-sm-3 col-form-label">Textarea</label>
                                 <div class="col-sm-9">
                                    <textarea id="_dm-disabledTextareaInput" class="form-control" placeholder="Textarea" rows="5" disabled></textarea>
                                 </div>
                              </div>
                              <!-- END : Disabled textarea -->


                              <!-- Disabled checkboxes -->
                              <div class="row mb-3">
                                 <label class="col-sm-3 col-form-label">Checkboxes</label>
                                 <div class="col-sm-9 py-2">
                                    <div class="form-check mb-2">
                                       <input id="_dm-disabledBlockCheckboxes" class="form-check-input" type="checkbox" checked disabled>
                                       <label for="_dm-disabledBlockCheckboxes" class="form-check-label">
                                          Option 1 (pre-checked)
                                       </label>
                                    </div>

                                    <div class="form-check mb-2">
                                       <input id="_dm-disabledBlockCheckbox2" class="form-check-input" type="checkbox" disabled>
                                       <label for="_dm-disabledBlockCheckbox2" class="form-check-label">
                                          Option 2
                                       </label>
                                    </div>

                                    <div class="form-check">
                                       <input id="_dm-disabledBlockCheckbox3" class="form-check-input" type="checkbox" disabled>
                                       <label for="_dm-disabledBlockCheckbox3" class="form-check-label">
                                          Option 3
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <!-- END : Disabled checkboxes -->


                              <!-- Disabled inline checkboxes-->
                              <div class="row mb-3">
                                 <label class="col-sm-3 col-form-label">Inline Checkboxes</label>
                                 <div class="col-sm-9 pt-3">
                                    <div class="form-check form-check-inline">
                                       <input id="_dm-disabledInlineCheckboxes" class="form-check-input" type="checkbox" autocomplete="off" value="option1" checked disabled>
                                       <label for="_dm-disabledInlineCheckboxes" class="form-check-label">Pre-checked</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                       <input id="_dm-disabledInlineCheckboxes2" class="form-check-input" type="checkbox" autocomplete="off" value="option2" disabled>
                                       <label for="_dm-disabledInlineCheckboxes2" class="form-check-label">Option 2</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                       <input id="_dm-disabledInlineCheckboxes3" class="form-check-input" type="checkbox" autocomplete="off" value="option3" disabled>
                                       <label for="_dm-disabledInlineCheckboxes3" class="form-check-label">Option 3</label>
                                    </div>
                                 </div>
                              </div>
                              <!-- END : Disabled inline checkboxes-->


                              <!-- Disabled radios -->
                              <div class="row mb-3">
                                 <label class="col-sm-3 col-form-label">Radios</label>
                                 <div class="col-sm-9 pt-3">
                                    <div class="form-check mb-2">
                                       <input id="_dm-disabledBlockRadios" class="form-check-input" type="radio" name="disabledradioBlock" checked disabled>
                                       <label for="_dm-disabledBlockRadios" class="form-check-label">
                                          Option 1 ( Pre-checked )
                                       </label>
                                    </div>

                                    <div class="form-check mb-2">
                                       <input id="_dm-disabledBlockRadios2" class="form-check-input" type="radio" name="disabledradioBlock" disabled>
                                       <label for="_dm-disabledBlockRadios2" class="form-check-label">
                                          Option 2
                                       </label>
                                    </div>

                                    <div class="form-check">
                                       <input id="_dm-disabledBlockRadios3" class="form-check-input" type="radio" name="disabledradioBlock" disabled>
                                       <label for="_dm-disabledBlockRadios3" class="form-check-label">
                                          Option 3
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <!-- END : Disabled radios -->


                              <!-- Disabled inline radios -->
                              <div class="row mb-3">
                                 <label class="col-sm-3 col-form-label">Inline radios</label>
                                 <div class="col-sm-9 pt-3">
                                    <div class="form-check form-check-inline">
                                       <input id="_dm-disabledInlineRadio1" class="form-check-input" type="radio" name="disabledInlineRadioOptions" value="option1" checked disabled>
                                       <label for="_dm-disabledInlineRadio1" class="form-check-label">Pre-checked</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                       <input id="_dm-disabledInlineRadio2" class="form-check-input" type="radio" name="disabledInlineRadioOptions" value="option2" disabled>
                                       <label for="_dm-disabledInlineRadio2" class="form-check-label">Option 2</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                       <input id="_dm-disabledInlineRadio3" class="form-check-input" type="radio" name="disabledInlineRadioOptions" value="option3" disabled>
                                       <label for="_dm-disabledInlineRadio3" class="form-check-label">Option 3</label>
                                    </div>
                                 </div>
                              </div>
                              <!-- END : Disabled inline radios -->


                              <!-- Disabled file input -->
                              <div class="row mb-3">
                                 <label for="_dm-disabledFileInput" class="col-sm-3 col-form-label">File input</label>
                                 <div class="col-sm-9">
                                    <input id="_dm-disabledFileInput" class="form-control" type="file" disabled>
                                 </div>
                              </div>
                              <!-- END : Disabled file input -->


                           </div>
                        </div>

                     </div>
                  </div>
               </section>

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



</body>

</html>