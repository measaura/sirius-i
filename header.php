      <!-- HEADER -->
      <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
      <header class="header">
         <div class="header__inner">

            <!-- Brand -->
            <div class="header__brand">
               <div class="brand-wrap">

                  <!-- Brand logo -->
                  <a href="<?php echo $_SESSION['username']?'main.php':'/'; ?>" class="brand-img stretched-link">
                     <img src="assets/img/svp-sirius.png" alt="SVP Logo" class="SVP logo" width="32" height="32">
                     <!-- <img src="assets/img/svp-sirius.png" alt="SIRIUS-P" class="brand-image" style="opacity: .8"> -->
                  </a>


                  <!-- Brand title -->
                  <div class="brand-title">SIRIUS-I</div>


                  <!-- You can also use IMG or SVG instead of a text element. -->
                  <!--
            <div class="brand-title">
               <img src="./assets/img/brand-title.svg" alt="Brand Title">
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


               </div>
               <!-- End - Content Header - Left Side -->


               <!-- Content Header - Right Side: -->
               <div class="header__content-end">

                  <?php 
                  // include 'mega_dropdown.php';
                  // include 'notification_dropdown.php';
                  ?>

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
                              <img class="img-sm rounded-circle" src="assets/img/<?php echo $user_avatar?'uploads/'.$user_avatar:'profile-photos/3.png' ?>" alt="Profile Picture" loading="lazy">
                           </div>
                           <div class="flex-grow-1 ms-3">
                              <h5 class="mb-0"><?php echo $user_fullname ?></h5>
                              <span class="text-body-secondary fst-italic"><?php echo $user_email ?></span>
                           </div>
                        </div>

                        <div class="row">
                           <div class="col-md-7">

                              <!-- Simple widget and reports -->
                              <div class="list-group list-group-borderless mb-3">
                                 <div class="list-group-item text-center border-bottom mb-3">
                                    <p class="h1 display-1 text-primary fw-semibold">17</p>
                                    <p class="h6 mb-0"><i class="demo-pli-medal-2 fs-3 me-2"></i> New Certification</p>
                                    <small class="text-body-secondary">You have new certification</small>
                                 </div>
                                 <!-- <div class="list-group-item py-0 d-flex justify-content-between align-items-center">
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
                                 </div> -->
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

                                 <!-- <a href="#" class="list-group-item list-group-item-action mt-auto">
                                    <i class="demo-pli-computer-secure fs-5 me-2"></i> Lock screen
                                 </a> -->
                                 <a href="logout.php" class="list-group-item list-group-item-action">
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
                  <!-- <button class="sidebar-toggler header__btn btn btn-icon btn-sm" type="button" aria-label="Sidebar button">
                     <i class="demo-psi-dot-vertical"></i>
                  </button> -->


               </div>
            </div>
         </div>
      </header>
      <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
      <!-- END - HEADER -->