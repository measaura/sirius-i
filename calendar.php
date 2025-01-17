<?php

include_once 'includes/db_func.php';
include_once 'includes/env.php';

?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-scheme="orange">

<head>
   <meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
   <meta name="description" content="Add your own content to this blank page.">
   <title>Calendar | SIRIUS-I</title>


   <!-- STYLESHEETS -->
   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

   <!-- Fonts [ OPTIONAL ] -->
   
   
   <style type="text/css">@font-face {font-family:Poppins;font-style:normal;font-weight:300;src:url(./assets/fonts/poppins/5.0.11/devanagari/300/normal.woff2);unicode-range:U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:300;src:url(./assets/fonts/poppins/5.0.11/latin/300/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:300;src:url(./assets/fonts/poppins/5.0.11/latin-ext/300/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:400;src:url(./assets/fonts/poppins/5.0.11/latin-ext/400/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:400;src:url(./assets/fonts/poppins/5.0.11/latin/400/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:400;src:url(./assets/fonts/poppins/5.0.11/devanagari/400/normal.woff2);unicode-range:U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:500;src:url(./assets/fonts/poppins/5.0.11/devanagari/500/normal.woff2);unicode-range:U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:500;src:url(./assets/fonts/poppins/5.0.11/latin-ext/500/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:500;src:url(./assets/fonts/poppins/5.0.11/latin/500/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:700;src:url(./assets/fonts/poppins/5.0.11/devanagari/700/normal.woff2);unicode-range:U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:700;src:url(./assets/fonts/poppins/5.0.11/latin-ext/700/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:700;src:url(./assets/fonts/poppins/5.0.11/latin/700/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(./assets/fonts/ubuntu/5.0.11/cyrillic-ext/400/normal.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(./assets/fonts/ubuntu/5.0.11/latin-ext/400/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(./assets/fonts/ubuntu/5.0.11/latin/400/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(./assets/fonts/ubuntu/5.0.11/greek-ext/400/normal.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(./assets/fonts/ubuntu/5.0.11/greek/400/normal.woff2);unicode-range:U+0370-03FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:400;src:url(./assets/fonts/ubuntu/5.0.11/cyrillic/400/normal.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(./assets/fonts/ubuntu/5.0.11/greek/500/normal.woff2);unicode-range:U+0370-03FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(./assets/fonts/ubuntu/5.0.11/greek-ext/500/normal.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(./assets/fonts/ubuntu/5.0.11/cyrillic/500/normal.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(./assets/fonts/ubuntu/5.0.11/cyrillic-ext/500/normal.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(./assets/fonts/ubuntu/5.0.11/latin-ext/500/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:500;src:url(./assets/fonts/ubuntu/5.0.11/latin/500/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(./assets/fonts/ubuntu/5.0.11/greek-ext/700/normal.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(./assets/fonts/ubuntu/5.0.11/latin/700/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(./assets/fonts/ubuntu/5.0.11/greek/700/normal.woff2);unicode-range:U+0370-03FF;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(./assets/fonts/ubuntu/5.0.11/cyrillic-ext/700/normal.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(./assets/fonts/ubuntu/5.0.11/cyrillic/700/normal.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Ubuntu;font-style:normal;font-weight:700;src:url(./assets/fonts/ubuntu/5.0.11/latin-ext/700/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}</style>


   <!-- Bootstrap CSS [ REQUIRED ] -->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">

   <!-- Nifty CSS [ REQUIRED ] -->
   <link rel="stylesheet" href="assets/css/nifty.min.css">

   <!-- Fullcalendar CSS [ REQUIRED ] -->
   <link rel="stylesheet" href="assets/css/fullcalendar.css">


   <!-- Favicons [ OPTIONAL ] -->
   <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
   <link rel="manifest" href="site.webmanifest">

   <style>
   :root{
      --fc-today-bg-color:#f5a338;
   }
    #calendar {
        /* max-width: 1100px;
        margin: 0 auto; */
    }
    .fc .fc-button {
        padding: 0 0.65em;
    }
    .fc-event-title {
        color: white;
    }
    .fc-day-sun { 
        background-color:lightsalmon; 
    }
    .fc-day-sun .fc-daygrid-day-number{
      color: black;
    }
    .fc-day-sun .fc-col-header-cell-cushion{
      color: black;
    }
    .fc-day-sat { 
        background-color:papayawhip;  
    }
    .fc-day-today {
        background-color: #f0f0f0;
    }
    .fc-daygrid-day-number{
      font-size: 1.2em;
      font-weight: bold;
    }
    .gcal-event {
        background-color: mistyrose;
    }
    .gcal-event .fc-event-title {
        color: black;
        text-overflow: ellipsis;
    }
    .gcal-event .fc-event-title:hover {
        background-color: mistyrose;
        overflow:visible;
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
                     <li class="breadcrumb-item"><a href="">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Calendar</li>
                  </ol>
               </nav>
               <!-- END : Breadcrumb -->


               <h1 class="page-title mb-0 mt-2">Calendar</h1>

               <p class="lead">
                  Event and expiry status calendar.
               </p>
            </div>

         </div>


         <div class="content__boxed">
            <div class="content__wrap">
               <div class="card text-center mb-4 ">
                  <!-- <div class="card-header">Header</div> -->
                  <div class="card-body">
                     <div>
                        <div id="calendar"></div>
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

   </div>
   <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
   <!-- END - PAGE CONTAINER -->

   <?php
   include_once 'javascript.php';
   ?>

   <script src="assets/vendors/fullcalendar/index.global.js"></script>
   <script src="assets/vendors/fullcalendar/gcal.js"></script>
   <script>
   function getEvents() {
      // if (str.length <7) {
      //     document.getElementById("fullname").value = "";
      //     document.getElementById("email").value = "";
      //     document.getElementById("contact").value = "";
      //     return;
      // }
      // else {
         console.log("getEvents");
         // Creates a new XMLHttpRequest object
         var xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange = function () {

               // Defines a function to be called when
               // the readyState property changes
               if (this.readyState == 4 && 
                     this.status == 200) {
                  // Typical action to be performed
                  // when the document is ready
                  // var myObj = JSON.parse(this.responseText);

                  // Returns the response data as a
                  // string and store this array in
                  // a variable assign the value 
                  // received to first name input field
                     
                  // document.getElementById("fullname").value = myObj[0];
                  // document.getElementById("email").value = myObj[1];
                  // document.getElementById("contact").value = myObj[2];
                  // console.log(this.responseText);
                  myObj = this.responseText;
                  return myObj;
               }
         };

         // xhttp.open("GET", "filename", true);
         xmlhttp.open("GET", "get_events.php?emp_id=", true);
               
         // Sends the request to the server
         xmlhttp.send();
      // }
   }

   document.addEventListener('DOMContentLoaded', function() {
      const d = new Date();
      var dateToday = d.getFullYear()+'-'+String(d.getMonth()+1).padStart(2, '0')+'-'+String(d.getDate()).padStart(2, '0');
      // alert(dateToday);
      var dateNow = String(dateToday);
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
         eventSources: [
               {
                  googleCalendarApiKey: <?php echo "'".$google_key."'"; ?>,
                  googleCalendarId: 'en.malaysia#holiday@group.v.calendar.google.com',
                  className: 'gcal-event' // an option!
               },
               'get_events.php'
         ],
         // events: 'get_events.php',
         headerToolbar: {
               left: 'prevYear,prev,next,nextYear today',
               center: 'title',
               right: 'dayGridMonth,timeGridWeek,timeGridDay'
         },
         firstDay: 1,
         initialDate: dateNow,
         navLinks: true, // can click day/week names to navigate views
         selectable: true,
         selectMirror: true,
         select: function(arg) {
               var title = prompt('Event Title:');
               if (title) {
               calendar.addEvent({
                  title: title,
                  start: arg.start,
                  end: arg.end,
                  allDay: arg.allDay
               })
                  console.log('Start: '+arg.start);
                  console.log('End: '+arg.end);
                  console.log('Title: '+title);
                  console.log('All day: '+arg.allDay);
                  console.log('Color: '+arg.eventColor);
                  const offset = arg.start.getTimezoneOffset();
                  startDate = new Date(arg.start.getTime() - (offset*60*1000));
                  endDate = new Date(arg.end.getTime() - (offset*60*1000));
                  var data = {
                     title: title,
                     start: startDate.toISOString().slice(0, 19).replace('T', ' '),
                     end: arg.end != null ? endDate.toISOString().slice(0, 19).replace('T', ' ') : null,
                     allday: arg.allDay
                  };
                  saveEvent(data);
               }
               calendar.unselect()
         },
         eventMouseEnter: function(arg){

               var start = arg.event.start;
               var end = arg.event.end;
               var allDay = arg.event.allDay;
               var startTime;
               var endTime;
               
               // console.log(arg.event);

               const offset = start.getTimezoneOffset();

               if (!start) {
                  startTime = '';
               } else {
                  startDate = new Date(start.getTime() - (offset*60*1000));
                  startTime = "Start: "+startDate.toISOString().slice(0, 19).replace('T', ' ');
               }

               if (!end || allDay) {
                  endTime = '';
               } else {
                  endDate = new Date(end.getTime() - (offset*60*1000));
                  endTime = "End: " + endDate.toISOString().slice(0, 19).replace('T', ' ');
               }

               if(allDay){
                  alldayEvent = "All day event";
               }else{
                  alldayEvent = "";
               }

               var title = arg.event.title;
               var location = "at " + arg.event.extendedProps.location;
               if (!arg.event.extendedProps.location) {
                  location = '';
               }

               var contentTemplate = '<div style="padding: 15px;">' + startTime + '<br/>'+  endTime +  alldayEvent + '</div>';
               $(arg.el).popover({
                  title: title,
                  // placement:'top',
                  trigger : 'hover',
                  html: true,
                  // content: "Start: "+startTime + "<br/>"+ "End: " + endTime,
                  container:'body',
                  template: '<div class="popover" style="width: 400px !important; max-width: 600px !important;" role="tooltip">\
                  <div class="arrow"></div>\
                  <h3 class="popover-title"></h3>\
                  <div style="padding: 15px;"></div>\
                  <div style="width: 100%; font-style: italic; font-size: 10px; margin-bottom: 10px; margin-top: -5px;"><p>'+title+'</p></div>\
                  '+contentTemplate+'\
                  </div>',
                  placement: function (context, source) {
                     var position = $(source).position();
                     // console.log(position.left);
                     // console.log(source);
                     // console.log(context);
                     if (position.left > 515) {
                           return "left";
                     }
                     if (position.left < 515) {
                           return "right";
                     }
                     if (position.top < 110){
                           return "bottom";
                     }
                     return "top";
                  },
                  // trigger: "hover"
               }).popover('show');
               // $(arg.el).popover('hide');
         },
         eventClick: function(info) {
               // if (confirm('Are you sure you want to delete '+info.event.title+'?')) {
               //     console.log(info.event.id);
               //     var data = {
               //         eventId : info.event.id,
               //         delEvent : true
               //     };
               //     delEvent(data);
               //     info.event.remove()
               // }            

               info.jsEvent.preventDefault(); // don't let the browser navigate
               if (info.event.url) {
                  window.open(info.event.url, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=50,left=50,width=1000,height=800");
               }
         },
         editable: false,
         dayMaxEvents: true, // allow "more" link when too many events
      });

      calendar.render();
   });

   </script>


</body>

</html>