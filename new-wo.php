<?php
include_once 'includes/db_func.php';
include_once 'func/user_check.php';

$sql ="SELECT MAX(wo_id) as wo_id FROM work_order";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);
$wo_id = $row['wo_id'];
$wo_id = str_pad($wo_id + 1, 3, '0', STR_PAD_LEFT);
$wo_no = "WO-" . date('y') . "." . $wo_id;

?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-scheme="orange">

<head>
   <meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
   <meta name="description" content="Add your own content to this blank page.">
   <title>New Work Order | SIRIUS-I</title>


   <?php
   include 'headcss.php';
   ?>

   <!-- Tabulator CSS [ REQUIRED ] -->
   <!-- <link rel="stylesheet" href="assets/vendors/tabulator/css/tabulator.min.css"> -->
   <link rel="stylesheet" href="assets/pages/tabulator.594dba0f683f451ea86885101e908a107608649cfba970d58003968fc240d2a1.css">


   <!-- Favicons [ OPTIONAL ] -->
   <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
   <link rel="manifest" href="site.webmanifest">

   <!-- Loader.CSS [ OPTIONAL ] -->
   <link rel="stylesheet" href="assets/pages/loader.css.c6c9f1286fdc9e0b4228065b34d8750e1ed9beb2c8a8230d53e826a5f2fc8631.css">

   <!-- Jquery-UI CSS [ OPTIONAL ] -->
   <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.min.css">

   <style>
      .tabulator-selected {
         color : var(--bs-primary-color) !important;
         background-color: var(--bs-primary) !important;
      }
      input[type="checkbox"] {
         /* appearance: none;
         background-color: #fff;
         margin: 0; */
         font: inherit;
         color: currentColor;
         width: 1.15em;
         height: 1.15em;
         border: 0.15em solid var(--bs-primary) !important;
         border-radius: 0.15em;
         transform: translateY(-0.075em);
      }
      #loader {
         position: fixed;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background: rgba(0, 0, 0, 0.5);
         z-index: 9999;
         display: none;
         justify-content: center;
         align-items: center;
      }
      .loader {
         min-height: 100%;
         display: flex;
         /* display: flex;
         justify-content: center;
         align-items: center;
         height: 100vh; */
      }
      body #toast-container > div {
         opacity: .9;
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
                     <li class="breadcrumb-item active" aria-current="page">New Work Order</li>
                  </ol>
               </nav>
               <!-- END : Breadcrumb -->


               <h1 class="page-title mb-0 mt-2">New Work Order</h1>

               <p class="lead">
                  Create new certification work order.
               </p>
            </div>

         </div>


         <div class="content__boxed">
            <div class="content__wrap">

               <div class="col-xl-12 mb-3">

                  <form id="woForm" method="post" class="row g-3">
                     <input type="hidden" name="creator_id" value="<?php echo $user_id; ?>">
                     <div class="card">
                        <div class="card-header">
                           <div class="row g-3">
                              
                              <!-- <form class="row g-3"> -->
                              <div class="row g-3">
                                 <div class="col-md-4">
                                    <label for="wo_no" class="form-label">Work Order No</label><h1><?php echo $wo_no ?></h1>
                                    <input id="wo_no" name="wo_no" type="hidden"  value="<?php echo $wo_no ?>">
                                 </div>
                                 <div class="col-md-4">
                                    <label for="level" class="form-label">Certification Type</label>
                                    <select id="level" class="form-select form-select-lg" name="level">
                                       <option selected>Choose...</option>
                                       <option value="1">Level 1</option>
                                       <option value="3">Level 3</option>
                                    </select>
                                 </div>
                                 <div class="col-md-4" id="assignTo">
                                    <label for="level" class="form-label">Assign To</label>
                                    <input type="text" class="form-control form-control-lg" id="assign">
                                    <input type="hidden" name="assign_id" id="assign_id">
                                 </div>
                              </div>
                              <div class="row g-3">
                                 <!-- <div class="col-md-4"></div> -->
                                 <div class="col-12">
                                    <div class="row">
                                       <div class="col-md-4">
                                          <div class="align-middle"><h3>SELECTED: <span id="select-stats">0</span></h3></div>
                                       </div>
                                       <div class="col-md-1">
                                          <div class="form-check">
                                             <input id="visual"  name="visual" class="form-check-input" type="checkbox" value="1">
                                             <label for="visual" class="form-check-label">
                                                Visual Inspection
                                             </label>
                                          </div>
                                       </div>

                                       <div class="col-md-1">
                                          <div class="form-check">
                                             <input id="disassembly"  name="disassembly" class="form-check-input" type="checkbox" value="1">
                                             <label for="disassembly" class="form-check-label">
                                                Disassembly Inspection
                                             </label>
                                          </div>
                                       </div>

                                       <div class="col-md-1">
                                          <div class="form-check">
                                             <input id="mpi" name="mpi" class="form-check-input" type="checkbox" value="1">
                                             <label for="mpi" class="form-check-label">
                                                MPI Inspection
                                             </label>
                                          </div>
                                       </div>

                                       <div class="col-md-1">
                                          <div class="form-check">
                                             <input id="dimensional"  name="dimensional" class="form-check-input" type="checkbox" value="1">
                                             <label for="dimensional" class="form-check-label">
                                                Dimensional Inspection
                                             </label>
                                          </div>
                                       </div>

                                       <div class="col-md-1">
                                          <div class="form-check">
                                             <input id="gauge"  name="gauge" class="form-check-input" type="checkbox" value="1">
                                             <label for="gauge" class="form-check-label">
                                                No-Go Gauge
                                             </label>
                                          </div>
                                       </div>

                                       <div class="col-md-1">
                                          <div class="form-check">
                                             <input id="assembly" name="assembly" class="form-check-input" type="checkbox" value="1">
                                             <label for="assembly" class="form-check-label">
                                                Assembly Inspection
                                             </label>
                                          </div>
                                       </div>

                                       <div class="col-md-1">
                                          <div class="form-check">
                                             <input id="pressure" name="pressure" class="form-check-input" type="checkbox" value="1">
                                             <label for="pressure" class="form-check-label">
                                                Pressure Test
                                             </label>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>


                              <!-- </form> -->

                           </div>
                        </div>
                        <div class="card-body">
                           <div class="row d-flex">
                              <!-- Toolbar -->
                              <div class="d-flex gap-2 py-3 col-md-7">
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
                                    <option value="<"><</option>
                                    <option value="<="><=</option>
                                    <option value=">">></option>
                                    <option value=">=">>=</option>
                                    <option value="!=">!=</option>
                                 </select>

                                 <input id="_dm-filterValue" class="form-control" type="text" placeholder="value to filter">
                                 <button id="_dm-filterClear" class="btn btn-secondary text-nowrap" type="button">Clear Filter</button>
                              </div>
                              <!-- <div class="d-flex gap-2 py-3 col-md-5 justify-content-end">
                                 <button id="select-all" class="btn btn-primary text-nowrap" type="button">Select All</button>
                                 <button id="deselect-all" class="btn btn-primary text-nowrap" type="button">Deselect All</button>
                              </div> -->
                              <!-- END : Toolbar -->
                           </div>
                           <!-- Pagination -->
                           <div id="_dm-tabulatorPagination" class="table table-striped m-0"></div>
                           <!-- END : Pagination -->
                        </div>
                        <div class="card-footer">
                           <button type="submit" id="newWo" class="btn btn-primary">Create Work Order</button>
                        </div>
                     </div>
                  </form>

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


      <div id="loader" class="py-4 text-center">
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

   <!-- include('demo.php'); -->


<?php
   include('javascript.php');
?>
   <!-- Jquery-UI scripts [ OPTIONAL ] -->
   <script src="assets/vendors/jquery-ui/jquery-ui.min.js"></script>

   <!-- Luxon scripts [ OPTIONAL ] -->
   <script src="assets/vendors/luxon/luxon.js"></script>


   <!-- Tabulator scripts [ OPTIONAL ] -->
   <script src="assets/vendors/tabulator/js/tabulator.min.js"></script>
   <script>
      document.addEventListener("DOMContentLoaded", () => {
         const f = new Tabulator("#_dm-tabulatorPagination", {
                  // data: e,
                  ajaxURL: "func/get_data.php",
                  ajaxParams: { type: "pce" },
                  selectableRows: true,
                  rowHeader: {
                     formatter:"rowSelection",
                     titleFormatter:"rowSelection",
                     titleFormatterParams:{
                        rowRange:"active" //only toggle the values of the active filtered rows
                     },
                     hozAlign:"center",
                     headerSort:false
                  },
                  layout: "fitDataFill",
                  layoutColumnsOnNewData:true,
                  filterMode: "remote",
                  pagination: "true",
                  paginationMode: "remote",
                  paginationSize: 10,
                  paginationSizeSelector: [10, 25, 50, 100],
                  columns: [
                     { title: "Product Name", field: "item", sorter: "string" },
                     { title: "Nominal Size", field: "nom_size", sorter: "string" },
                     { title: "End Connection", field: "end_conn", sorter: "string" },
                     { title: "OEM Serial", field: "oem_serial", sorter: "string" },
                     { title: "SVP Serial", field: "svp_serial", sorter: "string" },
                     { title: "OEM", field: "oem", sorter: "string" },
                     { title: "MWP", field: "mwp", sorter: "number" },
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
         // document.getElementById("_dm-filterField").addEventListener("change", o),
         // document.getElementById("_dm-filterType").addEventListener("change", o),
         document.getElementById("_dm-filterValue").addEventListener("keyup", o),
         document.getElementById("_dm-filterClear").addEventListener("click", function () {
               (i.value = "none"), (n.value = "like"), (s.value = ""), f.clearFilter();
         });
         // //select row on "select all" button click
         // document.getElementById("select-all").addEventListener("click", function(){
         //    f.selectRow();
         // });

         // //deselect row on "deselect all" button click
         // document.getElementById("deselect-all").addEventListener("click", function(){
         //    f.deselectRow();
         // });

         const selectedIds = new Set();
         f.on("rowSelectionChanged", function(data, rows){
            // document.getElementById("select-stats").innerHTML = data.length;
            document.getElementById("select-stats").innerHTML = selectedIds.size;
            // console.log(selectedIds.size);
         });

         f.on( "rowSelected", function ( row )
         {
            const id = row.getData()[this.options.index] ?? null;
            if ( id !== null )
            {
               selectedIds.add( id );
            }
         } );

         f.on( "rowDeselected", function ( row )
         {
            const id = row.getData()[this.options.index] ?? null;
            if ( id !== null )
            {
               selectedIds.delete( id );
            }
         } );

         f.on( "dataProcessed", function ()
         {
            f.selectRow( Array.from( selectedIds.values() ) );
            console.log(selectedIds);
         } );

         document.getElementById('level').addEventListener('change', function() {
            var selectedValue = this.value;
            if (selectedValue == '1') {
               document.getElementById('visual').checked = true;
               document.getElementById('dimensional').checked = true;
               document.getElementById('gauge').checked = true;
               document.getElementById('pressure').checked = true;
               document.getElementById('disassembly').checked = false;
               document.getElementById('mpi').checked = false;
               document.getElementById('assembly').checked = false;
            } else if (selectedValue == '3') {
               document.getElementById('visual').checked = true;
               document.getElementById('dimensional').checked = true;
               document.getElementById('gauge').checked = true;
               document.getElementById('pressure').checked = true;
               document.getElementById('disassembly').checked = true;
               document.getElementById('mpi').checked = true;
               document.getElementById('assembly').checked = true;
            } else {
               document.getElementById('visual').checked = false;
               document.getElementById('dimensional').checked = false;
               document.getElementById('gauge').checked = false;
               document.getElementById('pressure').checked = false;
               document.getElementById('disassembly').checked = false;
               document.getElementById('mpi').checked = false;
               document.getElementById('assembly').checked = false;
            }
         });

         // document.querySelector('form').addEventListener('submit', function(event) {
         //    event.preventDefault(); // Prevent the default form submission

         //    const formData = new FormData(this);
         //    const selectedRows = Array.from(selectedIds.values());

         //    selectedRows.forEach((row, index) => {
         //       formData.append(`wo_item_id[${index}]`, row);
         //    });

         //    fetch('formtest.php', {
         //       method: 'POST',
         //       body: formData
         //    })
         //    .then(response => response.json())
         //    // .then(response => response.text())
         //    .then(data => {
         //       console.log(data);
         //       // Handle the response from the server
         //    })
         //    .catch(error => {
         //       console.error('Error:', error);
         //    });
         // });

         $('#assign').on('keyup', function() {
            let assign = $(this).val();
            console.log(assign);
            if (assign.length >= 3) {
               $.ajax({
                  type: 'GET',
                  url: 'func/get_names.php',
                  data: { name: assign, superior: false },
                  success: function(response) {
                     let data = response; //JSON.parse(response);
                     let suggestions = data.map(suser => suser.fullname);
                     $('#assign').autocomplete({
                        source: suggestions,
                        minLength: 3,
                        appendTo: '#assignTo', // Ensure the autocomplete dropdown is appended to the modal
                        select: function(event, ui) {
                           let selectedSUser = data.find(suser => suser.fullname === ui.item.value);
                           $('#assign').val(selectedSUser.fullname);
                           $('#assign_id').val(selectedSUser.id);
                        }
                     });
                  },
                  error: function(xhr, status, errors) {
                     console.error(errors);
                  }
               });
            }//else{
               // $('#fullname').autocomplete('destroy');
            //    $('#assign').val('');
            // }
         });
         
         // Submit User Details information
         var newWo = document.querySelector("#newWo");
         newWo.addEventListener("click", function (event) {
            var form1 = document.getElementById("woForm");
            var formData = new FormData(form1);
            event.preventDefault();
            console.log(Array.from( selectedIds.values() ));
            formData.append('item-id',Array.from( selectedIds.values() ));
            for (const [key, value] of formData) {
               console.log (`${key}: ${value}\n`);
            }
            const data = {};
            for (let keyValue of formData.entries()) {
               data[keyValue[0]] = keyValue[1];
            }
            // console.log('data',data);
            if( data['level'] != 'Choose...'){
               // if(croppedProfileImage.size > 0){
               //    formData.append('croppedImage', croppedProfileImage, croppedProfileImageName);
               // }

               // Show the loader
               $('#loader').show();

               $.ajax({
                  type: "POST",
                  url: "save_wo.php",
                  data: formData,
                  contentType: false,
                  processData: false,
               }).done(function (ajaxData) {
                  console.log(ajaxData);

               }).success(function (ajaxData) {
                  // Hide the loader
                  $('#loader').hide();
                  console.log('success',ajaxData);
                  if(ajaxData.text != ''){
                     if(ajaxData.type == 'error'){
                        toastr.error(ajaxData.text,'SIRIUS-I');
                     }else if(ajaxData.type=='success'){
                        toastr.success(ajaxData.text,'SIRIUS-I');
                     }else if(ajaxData.type=='info'){
                        toastr.info(ajaxData.text,'SIRIUS-I');
                     }
                  }
               }).fail(function (jqXHR, textStatus, errorThrown) {
                  console.log(jqXHR);
                  console.log(textStatus);
                  console.log(errorThrown);
               });
            }else{
               toastr.error('Please make sure all information are entered / chosen!', 'SIRIUS-I');
               $('level').focus();
            }
            // event.preventDefault();
            event.stopPropagation();  
         });
      });
   </script>


</body>

</html>