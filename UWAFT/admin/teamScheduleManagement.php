<?php
/*  publicEventManagement.php
 *  this page is used to manage public events
 *
 *   Revision
 * 	Created by Terence at 11/27/2014
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>UWAFT | Team Schedule</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../css/font-awesome.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.0.2/fullcalendar.css" rel="stylesheet" type="text/css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.0.2/fullcalendar.print.css" rel="stylesheet" type="text/css" media='print' />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
    </head>

    <body class="skin-blue">
        <?php
        include_once "includes/databaseManagement.php";
        include_once "includes/commons.php";
        
        $updateTitle = "test";
    
        $field_title = "Title";
        $field_start = "StartDate";
        $field_end = "EndDate";
        $field_allDay = "AllDay";
        $field_url = "url";
        $field_color = "color"; 
        if (isset($_GET[$field_title]) && isset($_GET[$field_start]) && isset($_GET[$field_end]) && isset($_GET[$field_allDay]) && isset($_GET[$field_url])&& isset($_GET[$field_color])) {
            if ($_GET["type"] == "add") {
                $title = trim($_GET[$field_title]);
                $start = trim($_GET[$field_start]);
                $end = trim($_GET[$field_end]);
                $allDay = trim($_GET[$field_allDay]);
                $url = trim($_GET[$field_url]);
                $color = trim($_GET[$field_color]);

                if (addNewScheduleToDB($title, $start, $end, $allDay, $url, $color)) {
                    header("location:teamScheduleManagement.php");
                } else {
                    showAlertMessage("Fail to add new event!");
                }
            } else if ($_GET["type"] == "update") {
                
            }
        } else if (isset($_GET["deleteButton"])) {
            $id = substr($_GET["deleteButton"], strlen("deleteButton"));
            if (deletePublicEventById($id)) {
                header("location:teamScheduleManagement.php");
            } else {
                echo "<script type='text/javascript'>alert('Delete event successfully!');</script>";
                showAlertMessage("Fail to delete event!");
            }
        }
        ?>
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="../index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                UWAFT
            </a>

        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, Terence</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li  class="active">
                            <a href="teamScheduleManagement.php">
                                <i class="fa fa-dashboard"></i> <span>Team Schedule</span>
                            </a>
                        </li>
                        <li>
                            <a href="publicEventManagement.php">
                                <i class="fa fa-calendar"></i> <span>Public Events</span>
                            </a>
                        </li>
                        <li>
                            <a href="teamform.php">
                                <i class="fa fa-user"></i> <span>Team Members</span>
                            </a>
                        </li>

                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Team Schedule
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Team Schedule</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="box box-primary">
                                <div class="box-body no-padding">
                                    <!-- THE CALENDAR -->
                                    <div id="calendar"></div>
                                </div><!-- /.box-body -->
                            </div><!-- /. box -->
                        </div><!-- /.col -->
                        <div class="col-md-3">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Create Event</h3>
                                </div>
                                <div class="box-body">
                                    <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                                        <button type="button" id="color-chooser-btn" class="btn btn-danger btn-block btn-sm dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>
                                        <ul class="dropdown-menu" id="color-chooser">
                                            <li><a id="#00A65A" class="text-green" href="#"><i class="fa fa-square"></i> Green</a></li>
                                            <li><a id="#0073B7" class="text-blue" href="#"><i class="fa fa-square"></i> Blue</a></li>
                                            <li><a id="#001F3F" class="text-navy" href="#"><i class="fa fa-square"></i> Navy</a></li>
                                            <li><a id="#F39C12" class="text-yellow" href="#"><i class="fa fa-square"></i> Yellow</a></li>
                                            <li><a id="#FF851B" class="text-orange" href="#"><i class="fa fa-square"></i> Orange</a></li>
                                            <li><a id="#00C0EF" class="text-aqua" href="#"><i class="fa fa-square"></i> Aqua</a></li>
                                            <li><a id="#F56954" class="text-red" href="#"><i class="fa fa-square"></i> Red</a></li>
                                            <li><a id="#F012BE" class="text-fuchsia" href="#"><i class="fa fa-square"></i> Fuchsia</a></li>
                                            <li><a id="#932AB6" class="text-purple" href="#"><i class="fa fa-square"></i> Purple</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                    <form role="form" id="addNewSchedule">
                                        <div class="form-group">
                                            <label for="new-event-title">Event Title</label>
                                            <input id="new-event-title" name="title" type="text" class="form-control" placeholder="Event Title">
                                        </div>
                                        <div class="form-group">
                                            <label for="new-event-start">Start Date</label>
                                            <input id="new-event-start" name="start" type="text" class="form-control" placeholder="YYYY-MM-DD HH:MM:SS">
                                        </div>
                                        <div class="form-group">
                                            <label for="new-event-end">End Date</label>
                                            <input id="new-event-end" name="end" type="text" class="form-control" placeholder="YYYY-MM-DD HH:MM:SS">
                                        </div>
                                        <div class="form-group">
                                            <label for="new-event-url">Link</label>
                                            <input id="new-event-url" name="url" type="text" class="form-control" placeholder="url in event">
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="allday" id="new-event-allday"> Is event all day?
                                            </label>
                                        </div>
                                        <button id="add-new-event" type="button" class="btn btn-default">Add</button>
                                    </form>

                                </div>
                            </div>
                        </div><!-- /.col -->
                    </div><!-- /.row -->


                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div>

        <script src="../js/jquery-2.1.1.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.7.0/moment.min.js" type="text/javascript"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.0.2/fullcalendar.min.js" type="text/javascript"></script>
        <script>
            $(function() {

                /* initialize the external events
                 -----------------------------------------------------------------*/
                function ini_events(ele) {
                    ele.each(function() {

                        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                        // it doesn't need to have a start or end
                        var eventObject = {
                            title: $.trim($(this).text()) // use the element's text as the event title
                        };

                        // store the Event Object in the DOM element so we can get to it later
                        $(this).data('eventObject', eventObject);

                        // make the event draggable using jQuery UI
                        $(this).draggable({
                            zIndex: 1070,
                            revert: true, // will cause the event to go back to its
                            revertDuration: 0  //  original position after the drag
                        });

                    });
                }
                ini_events($('#external-events div.external-event'));

                /* initialize the calendar
                 -----------------------------------------------------------------*/
                //Date for the calendar events (dummy data)
                var date = new Date();
                var d = date.getDate(),
                    m = date.getMonth(),
                    y = date.getFullYear();
                $('#calendar').fullCalendar({
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay'
                    },
                    buttonText: {//This is to add icons to the visible buttons
                        prev: "previous",
                        next: "next",
                        today: 'today',
                        month: 'month',
                        week: 'week',
                        day: 'day'
                    },
                    //Random default events
                    events: [
                        <?php
                            include "includes/databaseConnection.php";
                            $sql = "SELECT * FROM TeamSchedule";
                            $result = $link->query($sql);
                            $numOfRow = $result->num_rows;
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                {
                                    $numOfRow --;
                                    echo "{";
                                    echo "title: '".$row["Title"] ."',";
                                    echo "start: convertDateTimeToJSDateTime(\"".$row["StartDate"] ."\"),";
                                    echo "end: convertDateTimeToJSDateTime(\"".$row["EndDate"] ."\"),";
                                    echo "backgroundColor: \"". $row["Color"] ."\",";
                                    echo "borderColor: \"". $row["Color"] ."\"";
                                    if(isset($row["AllDay"])&&$row["AllDay"]!= null){
                                        if($row["AllDay"] == 1)$allday = "true";
                                        else $allday = "false";
                                        echo ", allDay: ".$allday;
                                    } 
                                    if(isset($row["url"])&&$row["url"]!= null) echo ", url: '".$row["url"] . "'";
                                    echo "}";
                                    if($numOfRow>0)echo ",";
                                }
                                }//end while
                            }// end if

                            $link->close();
                        ?>
                    ],
                    editable: true,
                    droppable: true, // this allows things to be dropped onto the calendar !!!
                    drop: function(date, allDay) { // this function is called when something is dropped

                        // retrieve the dropped element's stored Event Object
                        var originalEventObject = $(this).data('eventObject');

                        // we need to copy it, so that multiple events don't have a reference to the same object
                        var copiedEventObject = $.extend({}, originalEventObject);

                        // assign it the date that was reported
                        copiedEventObject.start = date;
                        copiedEventObject.allDay = allDay;
                        copiedEventObject.backgroundColor = $(this).css("background-color");
                        copiedEventObject.borderColor = $(this).css("border-color");

                        // render the event on the calendar
                        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

                        // is the "remove after drop" checkbox checked?
                        if ($('#drop-remove').is(':checked')) {
                            // if so, remove the element from the "Draggable Events" list
                            $(this).remove();
                        }

                    }
                });

                function convertDateTimeToJSDateTime(mySqlDateTime){
                    var dateParts = mySqlDateTime.split("-");
                    if(dateParts.length == 3)return new Date(dateParts[0], dateParts[1] - 1, dateParts[2].substr(0, 2), dateParts[2].substr(3, 2), dateParts[2].substr(6, 2), dateParts[2].substr(9, 2));
                    else return null;
                }
                
                function isEmpty(input){
                    return input.trim() == "";
                }
                
                function jsDateToMySqlDatetime(date){
                    return date.getUTCFullYear() + '-' +
                        ('00' + (date.getUTCMonth()+1)).slice(-2) + '-' +
                        ('00' + date.getUTCDate()).slice(-2) + ' ' + 
                        ('00' + date.getUTCHours()).slice(-2) + ':' + 
                        ('00' + date.getUTCMinutes()).slice(-2) + ':' + 
                        ('00' + date.getUTCSeconds()).slice(-2);
                }
                
                Date.prototype.isValid = function () {
                    // An invalid date object returns NaN for getTime() and NaN is the only
                    // object not strictly equal to itself.
                    return this.getTime() === this.getTime();
                };  
                function isValidDate(date){
                    var convertedDate = convertDateTimeToJSDateTime(date);
                    return convertedDate != null && convertedDate.isValid();
                }
                function isEventFormValid()
                {
                    var errors = new Array();
                    var errorMessage = "Please correctly provide the following information. \n";

                    var form = document.getElementById("addNewSchedule");
                    if (isEmpty(form.title.value))
                        errors.push("title");
                    if (isEmpty(form.start.value) || !isValidDate(form.start.value))
                        errors.push("Start date");
                    if (isEmpty(form.end.value) || !isValidDate(form.end.value) || convertDateTimeToJSDateTime(form.end.value)<convertDateTimeToJSDateTime(form.start.value))
                        errors.push("End date");
                    if (errors.length !== 0)
                    {
                        for (var i = 0; i < errors.length; i++)
                            errorMessage += "\n - " + errors[i];
                        alert(errorMessage);

                        return false;
                    }
                    else
                        return true;
                }
                
                function componentToHex(c) {
                    var hex = c.toString(16);
                    return hex.length == 1 ? "0" + hex : hex;
                }
                
                function rgbToHex(r, g, b) {
                    return "#" + componentToHex(r) + componentToHex(g) + componentToHex(b);
                }

                /* ADDING EVENTS */
                var currColor = "#f56954"; //Red by default
                //Color chooser button
                var colorChooser = $("#color-chooser-btn");
                $("#color-chooser > li > a").click(function(e) {
                    e.preventDefault();
                    //Save color
                    currColor2 = $(this).css("color");
                    currColor = e.target.id;
                    //Add color effect to button
                    colorChooser
                    .css({"background-color": currColor2, "border-color": currColor2})
                    .html($(this).text()+' <span class="caret"></span>');
                });
                
                $("#add-new-event").click(function(e) {
                    e.preventDefault();
                    
                    if (!isEventFormValid()) {
                        return;
                    }
                    
                    var form = document.getElementById("addNewSchedule");
                    var isAllDay = form.allday.checked?1:0;
                    var url = form.url.value.trim()==""?"null":form.url.value.trim();
                    window.location.href = "teamScheduleManagement.php?type=add&Title=" + form.title.value.trim() + "&StartDate=" + form.start.value.trim() + "&EndDate=" + form.end.value.trim() + "&AllDay=" + isAllDay + "&url=" + url+ "&color=" + currColor.substring(1,7);
                });
            });
        </script>
    </body>
</html>

