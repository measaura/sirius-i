<?php
include_once 'includes/env.php';
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>STEP | Training Calendar</title>

    <?php include_once 'head.php'; ?>
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">

    <link href="css/plugins/fullcalendar/main.css" rel="stylesheet">
    <!-- <link href="css/plugins/fullcalendar/fullcalendar.print.css" rel='stylesheet' media='print'> -->

    

    <!-- <link href="css/plugins/fullcalendar/main.css" rel="stylesheet"> -->
    <!-- <script src="js/plugins/fullcalendar/moment.min.js"></script> -->
    <style>
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
    .fc-day-sat { 
        background-color:papayawhip;  
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
</head>

<body class="">

    <div id="wrapper">

<?php
include 'sidebar.php';
?>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        
<?php
include 'topnav.php';
?>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Training Calendar</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="main.php">Home</a>
                        </li>
                        <li>
                            <a href="trainings.php">Trainings</a>
                        </li>
                        <li class="active">
                            <strong>Calendar</strong>
                        </li>
                    </ol>
                </div>
                <!-- <div class="col-sm-8">
                    <div class="title-action">
                        <a href="" class="btn btn-primary">This is action area</a>
                    </div>
                </div> -->
            </div>

            <div class="wrapper wrapper-content">
                <div class="row animated fadeInDown">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Training Calendar</h5>
                                <!-- <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="calendar.html#">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user">
                                        <li><a href="calendar.html#">Config option 1</a>
                                        </li>
                                        <li><a href="calendar.html#">Config option 2</a>
                                        </li>
                                    </ul>
                                    <a class="close-link">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div> -->
                            </div>
                            <div class="ibox-content">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <!-- <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Draggable Events</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="calendar.html#">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user">
                                        <li><a href="calendar.html#">Config option 1</a>
                                        </li>
                                        <li><a href="calendar.html#">Config option 2</a>
                                        </li>
                                    </ul>
                                    <a class="close-link">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <div id='external-events'>
                                    <p>Drag a event and drop into callendar.</p>
                                    <div class='external-event navy-bg'>Go to shop and buy some products.</div>
                                    <div class='external-event navy-bg'>Check the new CI from Corporation.</div>
                                    <div class='external-event navy-bg'>Send documents to John.</div>
                                    <div class='external-event navy-bg'>Phone to Sandra.</div>
                                    <div class='external-event navy-bg'>Chat with Michael.</div>
                                    <p class="m-t">
                                        <input type='checkbox' id='drop-remove' class="i-checks" checked /> <label for='drop-remove'>remove after drop</label>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="ibox float-e-margins">
                            <div class="ibox-content">
                                <h2>FullCalendar</h2> is a jQuery plugin that provides a full-sized, drag & drop calendar like the one below. It uses AJAX to fetch events on-the-fly for each month and is
                                easily configured to use your own feed format (an extension is provided for Google Calendar).
                                <p>
                                    <a href="http://arshaw.com/fullcalendar/" target="_blank">FullCalendar documentation</a>
                                </p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
<?php
include 'footer.php';
?>

<!-- jQuery UI  -->
<script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- iCheck -->
<script src="js/plugins/iCheck/icheck.min.js"></script>

<!-- Full Calendar -->
<script src="js/plugins/fullcalendar/main.js"></script>

<script>
    // onkeyup event will occur when the user 
    // release the key and calls the function
    // assigned to this event
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
    console.log("DOMContentLoaded");
    // alert(eventJson);
    const d = new Date();
    var dateToday = d.getFullYear()+'-'+String(d.getMonth()+1).padStart(2, '0')+'-'+String(d.getDate()).padStart(2, '0');
    // alert(dateToday);
    var dateNow = String(dateToday);

    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        // plugins: [ googleCalendarPlugin ],
        eventSources: [
            {
                googleCalendarApiKey: $google_key,
                googleCalendarId: 'en.malaysia#holiday@group.v.calendar.google.com',
                className: 'gcal-event' // an option!
            },
            'get_events.php'
        ],
        // events: 'get_events.php',
        headerToolbar: {
            left: 'prev,next today',
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
            
            console.log(arg.event);

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

function saveEvent(data) {
    $.ajax({
        type: "POST",
        url: 'save_events.php',
        data: data,
        success: function (data) {
            // alert(data,status);
            if (data.status) {
                calendar.render();
            }
        },
        error: function () {
            alert('Failed');
        }
    })
}
function delEvent(data) {
    $.ajax({
        type: "POST",
        url: 'save_events.php?delete',
        data: data,
        success: function (data) {
            // alert(data,status);
            if (data.status) {
                calendar.render();
            }
        },
        error: function () {
            alert('Failed');
        }
    })
}
</script>
</body>

</html>
