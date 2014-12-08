<?php


$page_title = "Team Schedule";
$page_author = "Weiwei Chen";
$page_description = "This it the UWAFT team schedule";
//put each needed css link as a element in this array
$page_css = array("<link href=\"css/carousel.css\" rel=\"stylesheet\">");
//put each needed meta data as a element in this array
$page_meta = array();
//put needed javascript script here
$page_js = array();
include_once "includes/header.php"
?>
<link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.0.2/fullcalendar.css" rel="stylesheet" type="text/css" />
<link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.0.2/fullcalendar.print.css" rel="stylesheet" type="text/css" media='print' />
<link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
<div class="container needSpaceBetweenHeader">
    <section class="content-header">
        <h1>
            Team Schedule
            <small>Check out our plans!</small>
        </h1>
    </section>

    <div class="row">

        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-body no-padding">
                    <!-- THE CALENDAR -->
                    <div id="calendar"></div>
                </div><!-- /.box-body -->
            </div><!-- /. box -->
        </div><!-- /.col -->
    </div><!-- /.row -->


</div>

<?php
    include_once "includes/footer.php"
?>
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.min.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.7.0/moment.min.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.0.2/fullcalendar.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
        
        function convertDateTimeToJSDateTime(mySqlDateTime){
            var dateParts = mySqlDateTime.split("-");
            return new Date(dateParts[0], dateParts[1] - 1, dateParts[2].substr(0, 2), dateParts[2].substr(3, 2), dateParts[2].substr(6, 2), dateParts[2].substr(9, 2));
        }

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
                prev: "Previous",
                next: "Next",
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
                            if(isset($row["AllDate"])&&$row["AllDate"]!= null){
                                if($row["AllDate"] == 1)$alldate = "true";
                                else $alldate = "false";
                                echo ", allDay: ".$alldate;
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
            editable: false,
            droppable: false, // this allows things to be dropped onto the calendar !!!
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
    });
</script>