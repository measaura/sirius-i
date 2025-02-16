<?php

include_once 'includes/db_func.php';
include_once 'func/user_check.php';

$text = '';
$type = '';
if (isset($_SESSION['message']) && $_SESSION['message']!= ''){
    $text = $_SESSION['message'];
}
if(isset($_SESSION['msgtype'])&&$_SESSION['msgtype']!=''){
    $type = $_SESSION['msgtype'];
}

unset($_SESSION['message']);
unset($_SESSION['msgtype']);
$user_email = $_SESSION['username'];
$user_id = $_SESSION['uid'];
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-scheme="orange">

<head>
   <meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
   <meta name="description" content="Add your own content to this blank page.">
   <title>Profile | SIRIUS-I</title>


   <!-- STYLESHEETS -->
   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

   <!-- Fonts [ OPTIONAL ] -->
   <style type="text/css">@font-face {font-family:Poppins;font-style:normal;font-weight:300;src:url(./assets/fonts/poppins/5.0.11/devanagari/300/normal.woff2);unicode-range:U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:300;src:url(./assets/fonts/poppins/5.0.11/latin/300/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:300;src:url(./assets/fonts/poppins/5.0.11/latin-ext/300/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:400;src:url(./assets/fonts/poppins/5.0.11/latin-ext/400/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:400;src:url(./assets/fonts/poppins/5.0.11/latin/400/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:400;src:url(./assets/fonts/poppins/5.0.11/devanagari/400/normal.woff2);unicode-range:U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:500;src:url(./assets/fonts/poppins/5.0.11/devanagari/500/normal.woff2);unicode-range:U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:500;src:url(./assets/fonts/poppins/5.0.11/latin-ext/500/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:500;src:url(./assets/fonts/poppins/5.0.11/latin/500/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:700;src:url(./assets/fonts/poppins/5.0.11/devanagari/700/normal.woff2);unicode-range:U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:700;src:url(./assets/fonts/poppins/5.0.11/latin-ext/700/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:700;src:url(./assets/fonts/poppins/5.0.11/latin/700/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(./assets/fonts/ubuntu/5.0.11/cyrillic-ext/400/normal.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(./assets/fonts/ubuntu/5.0.11/latin-ext/400/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(./assets/fonts/ubuntu/5.0.11/latin/400/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(./assets/fonts/ubuntu/5.0.11/greek-ext/400/normal.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(./assets/fonts/ubuntu/5.0.11/greek/400/normal.woff2);unicode-range:U+0370-03FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(./assets/fonts/ubuntu/5.0.11/cyrillic/400/normal.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(./assets/fonts/ubuntu/5.0.11/greek/500/normal.woff2);unicode-range:U+0370-03FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(./assets/fonts/ubuntu/5.0.11/greek-ext/500/normal.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(./assets/fonts/ubuntu/5.0.11/cyrillic/500/normal.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(./assets/fonts/ubuntu/5.0.11/cyrillic-ext/500/normal.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(./assets/fonts/ubuntu/5.0.11/latin-ext/500/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(./assets/fonts/ubuntu/5.0.11/latin/500/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(./assets/fonts/ubuntu/5.0.11/greek-ext/700/normal.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(./assets/fonts/ubuntu/5.0.11/latin/700/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(./assets/fonts/ubuntu/5.0.11/greek/700/normal.woff2);unicode-range:U+0370-03FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(./assets/fonts/ubuntu/5.0.11/cyrillic-ext/700/normal.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(./assets/fonts/ubuntu/5.0.11/cyrillic/700/normal.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(./assets/fonts/ubuntu/5.0.11/latin-ext/700/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}</style>

   <!-- Fontawesome styles [ OPTIONAL ] -->
   <link rel="stylesheet" href="assets/vendors/fontawesome/css/solid.css">
   <link rel="stylesheet" href="assets/vendors/fontawesome/css/fontawesome.css">

   <!-- Bootstrap CSS [ REQUIRED ] -->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">

   <!-- Nifty CSS [ REQUIRED ] -->
   <link rel="stylesheet" href="assets/css/nifty.min.css">


   <!-- Favicons [ OPTIONAL ] -->
   <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
   <link rel="manifest" href="site.webmanifest">

   <!-- Dropzone styles [ OPTIONAL ] -->
   <link rel="stylesheet" href="assets/pages/file-uploads.3d391965cf0cc4d0a1b7af781db030a9aba4da869cfb4bb4e6bbbafcd564835d.css">

   <!-- Cropper styles [ OPTIONAL ] -->
   <link rel="stylesheet" href="assets/vendors/cropper/cropper.min.css">

   <!-- toastr.js -->
   <link rel="stylesheet" href="assets/vendors/toastr/toastr.min.css">

   <style>

      .dz-max-files-reached{
         display: none;
      }
      .circle-crop  {
         border-radius: 50% !important;
      }

      /* The css styles for `outline` do not follow `border-radius` on iOS/Safari (#979). */
      .cropper-view-box {
         outline: 0;
         box-shadow: 0 0 0 1px #39f;
      }
      input.uppercase {
         text-transform: uppercase;
      }

   </style>
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
   <div id="root" class="root tm--expanded-hd mn--sticky <?php echo isset($_GET['first'])&&$_GET['first']==1?'mn--min':'mn--max' ?>">

      <!-- CONTENTS -->
      <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
      <section id="content" class="content">
         <div class="content__header content__boxed rounded-0">
            <div class="content__wrap d-md-flex align-items-start hv-outline-parent hv-outline-inherit">


               <figure class="m-0">
                  <div class="d-inline-flex align-items-center position-relative pt-xl-3 mb-3">
                     <div class="flex-shrink-0">
                        <!-- File previews -->
                        <div id="profile_dzPreviews" class="" style="position:absolute; width: 128px; height: 128px;  z-index:9;">
                           <div id="profile_dzTemplate">
                              <div class="d-flex align-items-center" style="position:absolute; width: 100%">
                                 <!-- Image preview -->
                                 <div class="flex-grow-1">
                                    <img class="dz-img hv-oc hv-gc img-xl rounded-circle" data-dz-thumbnail>
                                    <!-- <img src="assets/img/sample-img/img-1.jpg" class="intro-img-panel" alt="explore image"> -->
                                 </div>
                                 <div class="d-flex justify-content-between  flex-grow-1 ms-3" style="position:absolute; width: 100%; height: 100%; bottom:0px; right: 0px; z-index:9;">

                                    <!-- Progress and remove button -->
                                    <div class="flex-shrink-0 d-flex align-items-center flex-row gap-3 single-explore-img-info">
                                       <button data-dz-remove class="btn btn-icon btn-xs btn-danger rounded-circle dz-cancel">
                                          <i class="demo-psi-trash"></i>
                                       </button>
                                    </div>
                                    <!-- END : Progress and remove button -->

                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- END : File previews -->
                        <img id="user-avatar-img" class="hv-oc img-xl rounded-circle border" src="assets/img/<?php echo $user_avatar?'uploads/'.$user_avatar:'profile-photos/3.png' ?>" alt="Profile Picture" loading="lazy">
                     </div>
                     <div class="flex-grow-1 ms-4">
                        <a id="user-fullname" href="#" class="h1 btn-link text-body-emphasis"><?php echo $user_fullname; ?></a>
                        <p id="user-designation" class="h3 text-white ms-1"><?php echo $designation; ?></p>

                        <!-- Social network button -->
                        <div class="mt-3 text-reset">
                           <!-- <p class="h3 text-white ms-1">SHORT CIRCUIT WORKS</p> -->
                           <!-- <a href="#" class="btn btn-icon btn-hover bg-blue-700 text-white">
                              <i class="demo-psi-facebook fs-4"></i>
                           </a>
                           <a href="#" class="btn btn-icon btn-hover bg-blue-400 text-white">
                              <i class="demo-psi-twitter fs-4"></i>
                           </a>
                           <a href="#" class="btn btn-icon btn-hover bg-red text-white">
                              <i class="demo-psi-google-plus fs-4"></i>
                           </a>
                           <a href="#" class="btn btn-icon btn-hover bg-orange text-white">
                              <i class="demo-psi-instagram fs-4"></i>
                           </a> -->
                        </div>
                        <!-- END : Social network button -->

                     </div>
                  </div>

                  <!-- <div class="pb-4">
                     <blockquote class="blockquote text-reset">
                        <p>How about if I sleep a little bit longer and forget all this nonsense.</p>
                     </blockquote>
                     <figcaption class="blockquote-footer mb-xl-0">
                        Someone famous - <cite title="Source Title">Stephen Tran</cite>
                     </figcaption>
                  </div> -->
               </figure>
               <!-- <div class="d-inline-flex justify-content-end pt-xl-5 gap-2 ms-auto">
                  <button class="btn btn-light text-nowrap">Edit Profile</button>
                  <button class="btn btn-success text-nowrap">Send Message</button>
               </div> -->
            </div>

         </div>


         <div class="content__boxed mt-4">
            <div class="content__wrap">
               <div class="d-md-flex gap-4">

                  <!-- Sidebar -->
                  <div class="w-md-200px flex-shrink-0">

                     <div class="text-primary">
                        <h5 class="text-primary-emphasis">About Me</h5>
                        <ul class="list-unstyled mb-3">
                           <!-- <li class="mb-2"><i class="demo-psi-map-marker-2 fs-5 me-3"></i>San Jose CA</li> -->
                           <li class="mb-2"><i class="demo-psi-internet fs-5 me-3"></i><a href="#" class="btn-link text-decoration-underline" target="blank"><?php echo $user_email ?></a></li>
                           <li class="mb-2"><i class="demo-psi-old-telephone fs-5 me-3"></i><span id="user-profile-mobile"><?php echo $user_mobile ?></span></li>
                        </ul>
                     </div>

                     <!-- <div class="py-3 mt-3 rounded text-info-emphasis">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui consequatur ipsum porro a repellat eaque exercitationem necessitatibus esse voluptate corporis.</p>
                        <small class="fst-italic">Last Update : Today 13:54</small>
                     </div> -->


                     <!-- <h5 class="mt-5">Skills</h5>
                     <div class="d-flex flex-wrap gap-2">
                        <a href="#" class="btn btn-xs btn-outline-light text-nowrap">PHP Programming</a>
                        <a href="#" class="btn btn-xs btn-outline-light text-nowrap">Marketing</a>
                        <a href="#" class="btn btn-xs btn-outline-light text-nowrap">Graphic Desig</a>
                        <a href="#" class="btn btn-xs btn-outline-light text-nowrap">Sketch</a>
                        <a href="#" class="btn btn-xs btn-outline-light text-nowrap">Photography</a>
                        <a href="#" class="btn btn-xs btn-outline-light text-nowrap">HTML</a>
                        <a href="#" class="btn btn-xs btn-outline-light text-nowrap">CSS</a>
                     </div> -->


                     <!-- <h5 class="mt-5">Gallery</h5>
                     <div class="row g-1 mb-3">
                        <div class="col-4">
                           <img class="img-fluid rounded" src="../../assets/img/megamenu/img-3.jpg" alt="thumbs" loading="lazy">
                        </div>
                        <div class="col-4">
                           <img class="img-fluid rounded" src="../../assets/img/megamenu/img-6.jpg" alt="thumbs" loading="lazy">
                        </div>
                        <div class="col-4">
                           <img class="img-fluid rounded" src="../../assets/img/megamenu/img-4.jpg" alt="thumbs" loading="lazy">
                        </div>
                        <div class="col-4">
                           <img class="img-fluid rounded" src="../../assets/img/megamenu/img-2.jpg" alt="thumbs" loading="lazy">
                        </div>
                        <div class="col-4">
                           <img class="img-fluid rounded" src="../../assets/img/megamenu/img-5.jpg" alt="thumbs" loading="lazy">
                        </div>
                        <div class="col-4">
                           <img class="img-fluid rounded" src="../../assets/img/megamenu/img-1.jpg" alt="thumbs" loading="lazy">
                        </div>
                     </div> -->
                  </div>
                  <!-- END : Sidebar -->


                  <!-- <div class="vr d-none"></div> -->

                  <!-- Content -->
                  <div class="flex-fill">
                     <div class="card mb-3">
                        <form id="form-1" method="post">
                           <input type="hidden" name="user-id" value="<?php echo $user_id; ?>">
                           <input type="hidden" name="user-avatar" value="<?php echo $user_avatar; ?>">
                           <div class="card-body">
                              <h5 class="card-title mt-3">Personal Details</h5>
                                 <!-- Default Style -->
                                 <div id="profileImg" class="dropzone bg-light text-center rounded mb-3">
                                    <div class="dz-message m-0">
                                       <div class="p-3 text-body-secondary text-opacity-25">
                                          <i class="demo-psi-upload-to-cloud display-5"></i>
                                       </div>
                                       <h4>Drop your latest photo here</h4>
                                       <p class="text-body-secondary mb-0">or click to pick manually</p>
                                    </div>
                                    <div class="fallback">
                                       <input name="file" type="file" multiple>
                                    </div>
                                 </div>
                                 <!-- END : Default Style -->

                              <!-- <textarea class="form-control" rows="4" placeholder="What are you thinking?"></textarea> -->
                              <div class="row mt-3">
                                 <div class="col-md-6">
                                    <label for="fullname" class="form-label">Full name</label>
                                    <input id="fullname" name="user-fullname" type="text" class="form-control uppercase" value="<?php echo $user_fullname; ?>">
                                 </div>
                                 <div class="col-md-6">
                                    <label for="designation" class="form-label">Designation</label>
                                    <input id="designation" name="user-designation" type="text" class="form-control uppercase" value="<?php echo $designation; ?>">
                                 </div>
                              </div>
                              <div class="row mt-3">
                                 <div class="col-md-6">
                                    <label for="mobile" class="form-label">Mobile number</label>
                                    <input id="mobile" name="user-mobile" type="text" class="form-control" value="<?php echo $user_mobile; ?>">
                                 </div>
                                 <!-- <div class="col-md-6">
                                    <label for="designation" class="form-label">Designation</label>
                                    <input id="designation" name="user-designation" type="text" class="form-control">
                                 </div> -->
                              </div>
                              <h5 class="card-title mt-5">Change Password</h5>
                              <div class="row mt-3">
                                 <div class="col-md-6">
                                    <label for="pass1" class="form-label">New Password</label>
                                    <input id="pass1" type="password" class="form-control" oninput="validatePassword(this.value)">
                                    <div class="invalid-feedback">Please input your password</div>
                                    <span id="errorMessage" class="font-weight-bold text-danger"></span>
                                    <div id="pwdHint" class="form-group" style="display:none">
                                       <ul style="list-style-type: none;">
                                             <li id="minLength"><i class="fas fa-times
                                                text-danger"></i> Minimum 8 characters</li>
                                             <li id="uppercase"><i class="fas fa-times
                                                text-danger"></i> At least one uppercase
                                                letter</li>
                                             <li id="lowercase"><i class="fas fa-times
                                                text-danger"></i> At least one lowercase
                                                letter</li>
                                             <li id="symbol"><i class="fas fa-times
                                                text-danger"></i> 
                                                   At least one symbol (@$!%*?&-)
                                             </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <label for="pass2" class="form-label">Repeat Password</label>
                                    <input id="pass2" type="password" class="form-control">
                                    <div id="passwordError" class="invalid-feedback">Password does not match</div>
                                 </div>
                              </div>
                              <div class="d-flex align-items-center mt-3">
                                 <!-- <a class="btn btn-icon btn-hover btn-outline-light" href="#"">
                                    <i class=" demo-pli-video fs-4"></i>
                                 </a>
                                 <a class="btn btn-icon btn-hover btn-outline-light" href="#"">
                                    <i class=" demo-pli-camera-2 fs-4"></i>
                                 </a>
                                 <a class="btn btn-icon btn-hover btn-outline-light" href="#">
                                    <i class="demo-pli-file fs-4"></i>
                                 </a> -->
                                 <button id="next-1" class="btn btn-sm btn-primary hstack gap-2 ms-auto" type="submit">
                                    <!-- <i class="demo-psi-right-4 fs-5"></i>
                                    <span class="vr"></span> -->
                                    Save
                                 </button>
                              </div>

                           </div>
                        </form>
                     </div>

                  </div>
                  <!-- END : Content -->

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
      if(isset($_SESSION['sidebar'])){
         include 'seidebar.php';
      }
      ?>



      <!-- Cropper modal  -->
      <div class="modal fade" id="cropmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="LGModalLabel" aria-hidden="true">
      </div>
      <!-- End cropper modal  -->
   </div>
   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
   <!-- END - PAGE CONTAINER -->

   <?php
   if(isset($_SESSION['scrolltop'])&&$_SESSION['scrolltop']==1){
      include 'scrolltop.php';
   }
   ?>

   <!-- Cropper Modal Template -->
   <template id="modaltpl">
      <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
            <div class="modal-body">
               <div class="img-container">
               </div>
            </div>
            <div class="modal-footer">
            </div>
         </div>
      </div>
   </template>
   <!-- End Cropper Modal Template -->

   <?php
   include_once 'javascript.php';
   ?>
   <!-- Fontawesome Scripts [ OPTIONAL ] -->
   <script src="assets/vendors/fontawesome/js/fontawesome.js"></script>

   <!-- Dropzone Scripts [ OPTIONAL ] -->
   <script src="assets/vendors/dropzone/dropzone-min.ca7382cd44de7fd6e5f02831dc2400b18e29a69711e3bc3a84e15c648d8e6363.js"></script>
   
   <!-- Cropper Scripts [ OPTIONAL ] -->
   <script src="assets/vendors/cropper/cropper.min.js"></script>

   <!-- toastr.js -->
   <script src="assets/vendors/toastr/toastr.min.js"></script>

   <script>
      function validatePassword(password) {
            const strongPasswordRegex = 
                  /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&-])[A-Za-z\d@$!%*?&-]{8,}$/;
            const errorMessage = document.getElementById('errorMessage');

            // Check each condition and update the corresponding label
            document.getElementById('minLength').innerHTML = 
                  password.length >= 8 ?
                '<i class="fas fa-check text-success"></i> Minimum 8 characters' :
                '<i class="fas fa-times text-danger"></i> Minimum 8 characters';
            document.getElementById('uppercase').innerHTML = 
                  /[A-Z]/.test(password) ?
                '<i class="fas fa-check text-success"></i> At least one uppercase letter' :
                '<i class="fas fa-times text-danger"></i> At least one uppercase letter';
            document.getElementById('lowercase').innerHTML = 
                  /[a-z]/.test(password) ?
                '<i class="fas fa-check text-success"></i> At least one lowercase letter' :
                '<i class="fas fa-times text-danger"></i> At least one lowercase letter';
            document.getElementById('symbol').innerHTML = 
                  /[@$!%*?&-]/.test(password) ?
                '<i class="fas fa-check text-success"></i> At least one symbol (@$!%*?&-)' :
                '<i class="fas fa-times text-danger"></i> At least one symbol (@$!%*?&-)';

            // Check overall validity and update the error message
            if (strongPasswordRegex.test(password)) {
                errorMessage.textContent = 'Strong Password';
                errorMessage.classList.remove('text-danger');
                errorMessage.classList.add('text-success');
            } else {
               if(password.length > 0){
                errorMessage.textContent = 'Weak Password';
                errorMessage.classList.remove('text-success');
                errorMessage.classList.add('text-danger');
               }else{
                errorMessage.textContent = '';
               }
            }
        }

   window.addEventListener('DOMContentLoaded', function () {
      console.log('DOM Content Loaded');

        // Check if passwords match
        const passwordError = document.getElementById('passwordError');
        $('#pass1').on("keyup", function(){
         if(this.value.length > 0){
            $('#pwdHint').show();
         }else{
            $('#pwdHint').hide();
         }
        });
        var pass2='';
        $("#pass2").on("keyup", function () {
         //  console.log($("#pass2").val());
          // errorMessage.removeClass('invalid-feedback');
          if(this.value.length > 0){
            passwordError.classList.remove('invalid-feedback');
            // errorMessage.textContent = '';
            // return;
          if ($("#pass1").val() == $("#pass2").val()) {
            // console.log('matched');
            passwordError.textContent = 'Password matched';
            passwordError.classList.remove('text-danger');
            passwordError.classList.add('text-success');
            pass2 = this.value;
          }else{
            // theForm.classList.add("was-validated")
            // console.log('not matched');
            passwordError.textContent = 'Password does not match';
            passwordError.classList.remove('text-success');
            passwordError.classList.add('text-danger');
          }
         }else{
            passwordError.textContent = '';
            passwordError.classList.add('invalid-feedback');
         }
        });
   // $(document).ready(function(){
         var text = '<?php echo $text; ?>';
         var type = '<?php echo $type; ?>';
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

         if(text!=''){
               if(type == 'error'){
                  toastr.error(text,'SIRIUS-I');
               }else if(type=='success'){
                  toastr.success(text,'SIRIUS-I');
               }else if(type=='info'){
                  toastr.info(text,'SIRIUS-I');
               }
         }

         // $('.i-checks').iCheck({
         //     checkboxClass: 'icheckbox_square-green',
         //     radioClass: 'iradio_square-green',
         // });
         // $('#svpDiv').hide();


      // });

      // (User Details section) //////////////////////////////////////////////////////////////

      document.getElementById('fullname').addEventListener('keyup', function(){
         document.getElementById('user-fullname').textContent = this.value.toUpperCase();
      });
      document.getElementById('designation').addEventListener('keyup', function(){
         document.getElementById('user-designation').textContent = this.value.toUpperCase();
         document.getElementById('user-profile-designation').textContent = this.value.toUpperCase();
      });
      document.getElementById('mobile').addEventListener('keyup', function(){
         document.getElementById('user-profile-mobile').textContent = this.value;
      });

      var croppedProfileImage = new Blob();
      var croppedProfileImageName;
      const profilePreviewNode = document.querySelector( "#profile_dzTemplate" );
      const profilePreviewTemplate = profilePreviewNode.parentNode.innerHTML;

      profilePreviewNode.id = "";
      profilePreviewNode.parentNode.removeChild(profilePreviewNode);

      // Background dropzone with cropper modal 
      cropDrop = new Dropzone ("#profileImg", {
         url: 'save-profile.php',
         thumbnailWidth: 128,
         thumbnailHeight: 128,
         // parallelUploads: 5,
         maxFiles: 1,
         previewTemplate: profilePreviewTemplate,
         acceptedFiles: ".png, .jpg, .jpeg",
         // autoProcessQueue: false,
         //autoQueue: false, // Make sure the files aren"t queued until manually added
         previewsContainer: "#profile_dzPreviews", // Define the container to display the previews
         init: function() {
            console.log('init');
            this.on("addedfile", file => {
               console.log('addded file')
               // $('#cropmodal').modal('show');
               // // $('#introImg').hide();
               console.log( file.type);
               // Filter other than image file from being dropped to dropzone
               switch(file.type){
                  case 'image/png':
                  case 'image/jpeg':
                  case 'image/bmp':
                  break;
                  default:
                     console.log('not image');
                     const previewNode = document.querySelector( "#profile_dzTemplate" );
                     previewNode.parentNode.removeChild(previewNode);
                  break;
               }
            });

            this.on("removedfile", file => {
               console.log('removed file: '+ file.previewElement.parentNode);

               // Clear croppedImage vars to prevent submit without image data
               croppedImage = "";

               // $('#introImg').show();
            });

            this.on("drop", file => {
               console.log('dropped');
            });

            this.on("thumbnail", function(file, dataUrl) {
               console.log('thumbnail');
               // console.log(dataUrl);
               // $('#introImg').hide();
            });

            this.on('sending', function (file, xhr, formData) {
                  // // Append all form inputs to the formData Dropzone will POST
                  // var data = form.serializeArray();
                  // $.each(data, function (key, el) {
                  //    // formData.append(el.name, el.value);
                  // });
                  // console.log(formData);

            });
         },
         transformFile: function(file, done) {
            console.log('tranformfile');
            if("content" in document.createElement("template")){ 
               const cropmodal = document.querySelector("#cropmodal");
               const modaltpl = document.querySelector("#modaltpl");
               const modalclone = modaltpl.content.cloneNode(true);
               const modalbody = modalclone.querySelector(".modal-body");
               const modalfooter = modalclone.querySelector(".modal-footer");

               var myDropZone = this;
               var cropBoxData;
               var canvasData;

               // Create the confirm crop button
               var confirm = document.createElement('button');
               confirm.className = 'btn btn-primary';
               confirm.textContent = 'Confirm';
               confirm.addEventListener('click', function() {

                  // Get the canvas with image data from Cropper.js
                  var canvas = cropper.getCroppedCanvas({
                     width: 128,
                     height: 128
                  });

                  // Turn the canvas into a Blob (file object without a name)
                  canvas.toBlob(function(blob) {

                     // Update the image thumbnail with the new image data
                     myDropZone.createThumbnail(
                        blob,
                        myDropZone.options.thumbnailWidth,
                        myDropZone.options.thumbnailHeight,
                        myDropZone.options.thumbnailMethod,
                        false, 
                        function(dataURL) {
                           // Update the Dropzone file thumbnail
                           myDropZone.emit('thumbnail', file, dataURL);

                           // Return modified file to dropzone
                           done(blob);
                        }
                     );

                     // Assign the image blob to global vars to append to formData later
                     croppedProfileImage = blob;
                     croppedProfileImageName = file.name;

                  });
                  // Remove the editor from modal to avoid editor duplicates
                  removecrop = cropmodal.querySelector(".modal-dialog");
                  removecrop.parentNode.removeChild(removecrop);

                  // Hide the crop modal
                  $('#cropmodal').modal('hide');

               });
               // Append the Confirm button to modal footer
               modalfooter.appendChild(confirm);
               var imgcontainer = modalbody.querySelector(".img-container");

               // Load the image
               var image = new Image();
               image.src = URL.createObjectURL(file);
               // Append the image to the modal image container
               imgcontainer.appendChild(image);
               // Append the modal image container to the modal body
               modalbody.appendChild(imgcontainer);
               // Append the editor to the modal
               cropmodal.appendChild(modalclone);
               

               // Display the crop modal
               $('#cropmodal').modal('show');

               $('#cropmodal').on('shown.bs.modal', function () {
                  // console.log('modal on show');
                  // Create the cropper object and append to modal
                  cropper = new Cropper(image, {
                     aspectRatio: 1,
                     viewMode: 1,
                     ready: function () {
                        //Should set crop box data first here
                        cropper.setCropBoxData(cropBoxData).setCanvasData(canvasData);
                        // Set circle cropper (for profile use)
                        $(('.cropper-view-box')).addClass('circle-crop');
                        $(('.cropper-face')).addClass('circle-crop');
                        // const tempImg = document.getElementById('profileImgTemp');
                        // tempImg.parentNode.removeChild(tempImg);
                     }
                  });
               }).on('hidden.bs.modal', function () {
                  // After imgae was cropped
                  cropBoxData = cropper.getCropBoxData();
                  canvasData = cropper.getCanvasData();
                  // cropper.destroy();
               });

            }
         }
      });

      // Submit User Details information
      var next1 = document.querySelector("#next-1");
      next1.addEventListener("click", function (event) {
         var form1 = document.getElementById("form-1");
         var formData = new FormData(form1);
         event.preventDefault();
         for (const [key, value] of formData) {
            // console.log (`${key}: ${value}\n`);
         }
         if(pass2 != ''){
            formData.append('edit', pass2);
         }
         const data = {};
         for (let keyValue of formData.entries()) {
            data[keyValue[0]] = keyValue[1];
         }
         // console.log('data',data);
         if( data['user-fullname'] != ''){
            if(croppedProfileImage.size > 0){
               formData.append('croppedImage', croppedProfileImage, croppedProfileImageName);
            }
            $.ajax({
               type: "POST",
               url: "save_profile.php",
               data: formData,
               contentType: false,
               processData: false,
            }).done(function (ajaxData) {
               console.log(ajaxData);
               if(ajaxData.data.user_avatar != null){
                  document.getElementById('user-avatar-img').src = 'assets/img/uploads/'+ajaxData.data.user_avatar;
                  document.getElementById('user-profile-img').src = 'assets/img/uploads/'+ajaxData.data.user_avatar;
               }
               document.getElementById('user-profile-fullname').innerHTML = ajaxData.data.user_fullname;
               document.getElementById('user-profile-mobile').innerHTML = ajaxData.data.user_mobile;
               document.getElementById('root').classList.remove('mn--min');
               document.getElementById('root').classList.add('mn--max');

            }).success(function (ajaxData) {
               // console.log(ajaxData);
               if(ajaxData.text != ''){
                  if(ajaxData.type == 'error'){
                     toastr.error(ajaxData.text,'SIRIUS-I');
                  }else if(ajaxData.type=='success'){
                     toastr.success(ajaxData.text,'SIRIUS-I');
                  }else if(ajaxData.type=='info'){
                     toastr.info(ajaxData.text,'SIRIUS-I');
                  }
                  // $('#form1')[0].reset();
                  $('#pass1').val('') ;
                  $('#pass2').val('');
               }
            }).fail(function (jqXHR, textStatus, errorThrown) {
               console.log(jqXHR);
               console.log(textStatus);
               console.log(errorThrown);
            });
         }
         // event.preventDefault();
         event.stopPropagation();  
      });
      // End submit User Details information
      // End (User Details section)


   });
   </script>

</body>

</html>