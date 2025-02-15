
               <!-- Profile Widget -->
                <!-- <style>
                  .dropdown-toggle{
                     white-space:normal;
                  }
                </style> -->
                <div id="_dm-mainnavProfile" class="mainnav__widget my-3 hv-outline-parent">

<!-- Profile picture  -->
<div class="mininav-toggle text-center py-2">
   <img id="user-profile-img" class="mainnav__avatar img-md rounded-circle hv-oc" src="assets/img/<?php echo $user_avatar?'uploads/'.$user_avatar:'profile-photos/3.png' ?>" alt="Profile Picture">
</div>


<div class="mininav-content collapse d-mn-max">
   <span data-popper-arrow class="arrow"></span>
   <div class="d-grid">

      <!-- User name and position -->
      <button class="mainnav-widget-toggle d-block btn border-0 p-2" data-bs-toggle="collapse" data-bs-target="#usernav" aria-expanded="false" aria-controls="usernav">
         <span class="dropdown-toggle d-flex justify-content-center align-items-center">
            <h5 class="mb-0 text-wrap" id="user-profile-fullname" style="overflow-wrap: break-word;"><?php echo $user_fullname; ?></h5>
         </span>
         <small class="text-body-secondary" id="user-profile-designation"><?php echo $designation; ?></small>
      </button>
      <!-- Collapsed user menu -->
      <div id="usernav" class="nav flex-column collapse" style="">
         <!-- <a href="#" class="nav-link d-flex justify-content-between align-items-center">
            <span><i class="demo-pli-mail fs-5 me-2"></i><span class="ms-1">Messages</span></span>
            <span class="badge bg-danger rounded-pill">14</span>
         </a> -->
         <a href="profile.php" class="nav-link">
            <i class="demo-pli-male fs-5 me-2"></i>
            <span class="ms-1">Profile</span>
         </a>
         <a href="#" class="nav-link">
            <i class="demo-pli-gear fs-5 me-2"></i>
            <span class="ms-1">Settings</span>
         </a>
      </div>
      
   </div>
</div>

</div>
<!-- End - Profile widget -->