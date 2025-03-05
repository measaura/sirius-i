<?php
include_once 'includes/db_func.php';
include_once 'func/user_check.php';
$uac = $_SESSION['uac'];
$uid = $_SESSION['uid'];
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-scheme="orange">

<head>
   <meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
   <meta name="description" content="Add your own content to this blank page.">
   <title>Work Orders | SIRIUS-I</title>

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

   <!-- Favicons [ OPTIONAL ] -->
   <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
   <link rel="manifest" href="site.webmanifest">

   <!-- Loader.CSS [ OPTIONAL ] -->
   <link rel="stylesheet" href="assets/pages/loader.css.c6c9f1286fdc9e0b4228065b34d8750e1ed9beb2c8a8230d53e826a5f2fc8631.css">

   <!-- toastr CSS [ OPTIONAL ] -->
   <link rel="stylesheet" href="assets/vendors/toastr/toastr.min.css">
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
                     <li class="breadcrumb-item active" aria-current="page">Work Orders</li>
                  </ol>
               </nav>
               <!-- END : Breadcrumb -->


               <h1 class="page-title mb-0 mt-2">Work Orders</h1>

               <p class="lead">
                  Work Order lists.
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
                              <option value="wo_no">Work Order No</option>
                              <option value="level">Level</option>
                              <option value="request_date">Request Date</option>
                              <option value="items">Items</option>
                              <option value="status">Status</option>
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
                        <div id="work-order-table" class="table table-striped table-bordered m-0"></div>
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

    <!-- Approval Modal -->
    <div class="modal fade" id="approvalModal" tabindex="-1" role="dialog" aria-labelledby="approvalModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="approvalModalLabel">Approve Work Order</h5>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
                <div class="modal-body">
                    <!-- Work Order Details will be loaded here via AJAX -->
                </div>
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="closeBtn">Close</button>
                    <button type="button" class="btn btn-primary" id="approveButton" style="display: none;">Approve</button>
                    <button type="button" class="btn btn-success" id="acceptButton" style="display: none;">Accept</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Approval Modal -->

    <!-- Approve Modal -->
    <div class="modal fade" id="approveModal" tabindex="-1" role="dialog" aria-labelledby="approveModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="approveModalLabel">Work Order Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="workOrderDetails">
                        <!-- Work Order details will be loaded here -->
                    </div>
                    <form id="assignForm">
                        <div class="form-group">
                            <label for="assignTo">Assign To</label>
                            <select class="form-control" id="assignTo" name="assign_to">
                                <!-- Options will be loaded here -->
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="saveAssignment">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Approve Modal -->

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
    $(document).ready(function() {
        var table = new Tabulator("#work-order-table", {
          ajaxURL: 'func/get_wo.php',
          ajaxParams: {
              uac: uac,
              uid: uid
          },
          layout: "fitColumns",
          layoutColumnsOnNewData:true,
          pagination: "true",
          paginationMode: "remote",
          paginationSize: 10,
          paginationSizeSelector: [10, 25, 50, 100],
          columns: [
              {title: "Work Order No", field: "wo_no"},
              {title: "Level", field: "level"},
              {title: "Request Date", field: "request_date"},
              {title: "Items", field: "items", formatter: function(cell, formatterParams) {
                var items = cell.getValue();
                return items.map(item => item.name+' ('+item.oem_serial+')').join(", ");
              }},
              {title: "Status", field: "status", formatter: function(cell, formatterParams) {
                var status = cell.getValue();
                switch(status) {
                  case '0':
                    return "Created";
                  case '1':
                    return "Approved";
                  case '2':
                    return "Assigned";
                  case '3':
                    return "Completed";
                  default:
                    return "Unknown";
                }
              }},
              {title: "Action", field: "assign_to", formatter: function(cell, formatterParams) {
                var status = cell.getRow().getData().status;
               if (uac > 2) {
                  if (status == '0') {
                     return "<button class='btn btn-primary btn-sm' data-bs-toggle='modal' data-bs-target='#approvalModal' data-id='" + cell.getRow().getData().wo_id + "' data-status='" + cell.getRow().getData().status + "'>Approve</button>";
                  } else {
                     return "<button class='btn btn-secondary btn-sm' data-bs-toggle='modal' data-bs-target='#approvalModal' data-id='" + cell.getRow().getData().wo_id + "' data-status='" + cell.getRow().getData().status + "'>View</button>";
                  }
               } else {
                  var assigned_id = cell.getData().assign_to;
                  if (uid == assigned_id) {
                     if(status == 1 ){
                        return "<button class='btn btn-success btn-sm' data-bs-toggle='modal' data-bs-target='#approvalModal' data-id='" + cell.getRow().getData().wo_id + "' data-status='" + cell.getRow().getData().status + "'>Accept</button>";
                     } else {
                        return "<button id='openWO' class='btn btn-success btn-sm' data-id='" + cell.getRow().getData().wo_id + "' data-status='" + cell.getRow().getData().status + "'>Open</button>";
                     }
                  } else {
                     return "<button class='btn btn-secondary btn-sm' data-bs-toggle='modal' data-bs-target='#approvalModal' data-id='" + cell.getRow().getData().wo_id + "' data-status='" + cell.getRow().getData().status + "'>View</button>";
                  }
               }
              }}
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
            let v = s.value;
            if (e === "status") {
          switch (v.toLowerCase()) {
            case "created":
              v = 0;
              break;
            case "approved":
              v = 1;
              break;
            case "assigned":
              v = 2;
              break;
            case "completed":
              v = 3;
              break;
            default:
              v = 4;
          }
            }
            const o = e == "function" ? c : e;
            e == "function" ? ((n.disabled = !0), (s.disabled = !0)) : ((n.disabled = !1), (s.disabled = !1)), e && table.setFilter(o, t, v);
        }
        // document.getElementById("_dm-filterField").addEventListener("change", o),
        // document.getElementById("_dm-filterType").addEventListener("change", o),
        document.getElementById("_dm-filterValue").addEventListener("keyup", o),
        document.getElementById("_dm-filterClear").addEventListener("click", function () {
            (i.value = "none"), (n.value = "like"), (s.value = ""), table.clearFilter();
        });

      $('#approvalModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget);
          var workOrderId = button.data('id');
          var status = button.data('status');
          var modal = $(this);
          $.ajax({
         url: 'func/get_wo_details.php',
         method: 'GET',
         data: { id: workOrderId },
         success: function(data) {
            let detailsHtml = '';
            if(data.error){
               detailsHtml = data.error;
            } else {
               detailsHtml = `
                  <h3>Work Order No: ${data.wo_no}</h3>
                  <p>Created By: <b>${data.created_by}</b></p>
                  <p>Request Date: <b>${data.request_date}</b></p>
                  <p>Level: <b>${data.level}</b>&nbsp; inspections: <b>${data.test_results}</b></p>
                  <p>Assigned To: <b>${data.assign_to}</b></p>
                  <p>Status: <b>${data.status_text}</b></p>
                  <h4>Items</h4>
                  <table class="table">
                        <thead>
                           <tr>
                              <th>Item</th>
                              <th>OEM Serial</th>
                           </tr>
                        </thead>
                        <tbody>`;
               data.items.forEach(item => {
                  detailsHtml += `
                        <tr>
                           <td>${item.item}</td>
                           <td>${item.oem_serial}</td>
                        </tr>`;
               });
               detailsHtml += `
                        </tbody>
                  </table>`;
            //   $('#workOrderDetails').html(detailsHtml);
            }
            // Load assign_to options
            let assignToOptions = ''; // Fetch options from your source
            $('#assignTo').html(assignToOptions);

            modal.find('.modal-body').html(detailsHtml).data('id', workOrderId);
            var status = data.status; // Assuming the response contains the status
            if(uac<=2){
               if (status == '0') {
                  $('#approveButton').show();
                  $('#acceptButton').hide();
               } else if (status == '1') {
                  $('#approveButton').hide();
                  $('#acceptButton').show();
               }
            } else {
               if (status == '0') {
                  $('#approveButton').show();
                  $('#acceptButton').hide();
               } else {
                  $('#approveButton').hide();
                  $('#acceptButton').hide();
               }
            }
         }
         });
      });

        $('#approveButton').click(function() {
            var workOrderId = $('#approvalModal').find('.modal-body').data('id');
            console.log( workOrderId);
            $('.modal-body').hide();
            $('.modal-footer').hide();
            $('#loader').show(); // Show loader
            $.ajax({
                url: 'approve_wo.php',
                method: 'POST',
                data: { id: workOrderId },
                success: function(response) {
                  console.log(response);
                  let data = JSON.parse(response);
                    $('#loader').hide(); // Hide loader
                    $('.modal-body').show();
                    $('.modal-footer').show();
                    $('#approvalModal').modal('hide'); // Hide modal
                     if(data.type == 'success'){
                      toastr.success(data.text,'SIRIUS-I');
                     }else{
                        toastr.error(data.text,'SIRIUS-I');
                     }
                     table.setData(); // This will reload the data from the ajaxURL
                },
                error: function() {
                  $('#loader').hide(); // Hide loader on error
                  // alert('Failed to approve work order.');
                }
            });
        });

        $('#acceptButton').click(function() {
            var workOrderId = $('#approvalModal').find('.modal-body').data('id');
            console.log( workOrderId);
            $('.modal-body').hide();
            $('.modal-footer').hide();
            $('#loader').show(); // Show loader
            $.ajax({
                url: 'accept_wo.php',
                method: 'POST',
                data: { id: workOrderId },
                success: function(response) {
                  console.log(response);
                  let data = JSON.parse(response);
                    $('#loader').hide(); // Hide loader
                    $('.modal-body').show();
                    $('.modal-footer').show();
                    $('#approvalModal').modal('hide'); // Hide modal
                     if(data.type == 'success'){
                      toastr.success(data.text,'SIRIUS-I');
                     }else{
                        toastr.error(data.text,'SIRIUS-I');
                     }
                     table.setData(); // This will reload the data from the ajaxURL
                },
                error: function() {
                  $('#loader').hide(); // Hide loader on error
                  // alert('Failed to approve work order.');
                }
            });
        });

    });
    </script>
<?php
// Assuming $uac and $uid are defined and available in this scope
echo "<script>var uac = $uac; var uid = $uid;</script>";
?>
</body>
</html>