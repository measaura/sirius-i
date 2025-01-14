<?php
// session_start();
// echo "Session list<br/>";
// foreach ($_SESSION as $key=>$value){
//     echo "<b>".$key."</b>".": ".$value."<br/>";
// }

$qry = "SELECT * FROM users WHERE id = $user_id";
// echo $qry;
$res = mysqli_query($conn, $qry);
while ($row = mysqli_fetch_array($res)){
   $user_fullname = $row['fullname'];
   $designation = $row['designation'];
   $user_email = $row['email'];
   $user_avatar = $row['avatar'];
}
?>
               <!-- Profile Widget -->
                <!-- <style>
                  .dropdown-toggle{
                     white-space:normal;
                  }
                </style> -->
                <div id="_dm-mainnavProfile" class="mainnav__widget my-3 hv-outline-parent">

<!-- Profile picture  -->
<div class="mininav-toggle text-center py-2">
   <img id="user-avatar-img" class="mainnav__avatar img-md rounded-circle hv-oc" src="assets/img/<?php echo $user_avatar?'uploads/'.$user_avatar:'profile-photos/3.png' ?>" alt="Profile Picture">
</div>


<div class="mininav-content collapse d-mn-max">
   <span data-popper-arrow class="arrow"></span>
   <div class="d-grid">

      <!-- User name and position -->
      <button class="mainnav-widget-toggle d-block btn border-0 p-2" data-bs-toggle="collapse" data-bs-target="#usernav" aria-expanded="false" aria-controls="usernav">
         <span class="d-flex justify-content-center align-items-center">
            <h5 class="mb-0" id="user-profile-fullname"><?php echo $user_fullname; ?></h5>
         </span>
         <small class="text-body-secondary" id="user-profile-nickname"><?php echo $designation; ?></small>
      </button>
      
   </div>
</div>

</div>
<!-- End - Profile widget -->