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
        <title>UWAFT | Calendar</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../css/font-awesome.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link href="css/publicEvent.css" rel="stylesheet" type="text/css" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script>
            function isEmpty(input){
                return input.trim() == "";
            }
            function isEventFormValid()
            {
                var errors = new Array();
                var errorMessage = "Please correctly provide the following information. \n";

                var form = document.getElementById("eventForm");
                if (isEmpty(form.title.value))
                    errors.push("title");
                if (isEmpty(form.date.value))
                    errors.push("date");
                if (isEmpty(form.time.value))
                    errors.push("time");
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
        </script>
    </head>

    <body class="skin-blue">
        <?php
        include_once "includes/databaseManagement.php";
        include_once "includes/commons.php";
        
        $updateTitle = "test";

        if (isset($_POST["type"]) && isset($_POST["title"]) && isset($_POST["date"]) && isset($_POST["time"])) {
            if ($_POST["type"] == "add") {
                $title = trim($_POST["title"]);
                $message = trim($_POST["message"]);
                $date = trim($_POST["date"]);
                $time = trim($_POST["time"]);


                if (addNewPublicEvent($title, $date, $time, $message)) {
                    header("location:publicEventManagement.php");
                } else {
                    showAlertMessage("Fail to add new event!");
                }
            } else if ($_POST["type"] == "update") {
                
            }
        } else if (isset($_GET["deleteButton"])) {
            $id = substr($_GET["deleteButton"], strlen("deleteButton"));
            if (deletePublicEventById($id)) {
                header("location:publicEventManagement.php");
            } else {
                echo "<script type='text/javascript'>alert('Delete event successfully!');</script>";
                showAlertMessage("Fail to delete event!");
            }
        }
        ?>
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.php" class="logo">
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
                        <li>
                            <a href="teamScheduleManagement.php">
                                <i class="fa fa-dashboard"></i> <span>Team Schedule</span>
                            </a>
                        </li>
                        <li class="active">
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
                        Public Events
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Public Events</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Main row -->
                    <div class="row">

                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-12 connectedSortable"> 

                            <!-- Map box -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        <button class="btn btn-primary btn-sm daterange pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-calendar"> Add Event</i></button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                        <h3 class="modal-title" id="myModalLabel">Add new event</h3>
                                                    </div>
                                                    <div class="modal-body">

                                                        <form id="eventForm" name="eventForm" action="publicEventManagement.php" method="post" onsubmit="return isEventFormValid();">
                                                            <div>
                                                                <label for="title">Title</label> <br>
                                                                <input type="text" placeholder="title" id="title" name="title" />
                                                            </div>

                                                            <div>
                                                                <label for="message">Message</label><br>
                                                                <input type="text" placeholder="message" id="message" name="message" />
                                                            </div>

                                                            <div>
                                                                <label for="date">Date</label><br>
                                                                <input type="date" placeholder="yyyy-mm-dd" id="date" name="date" />
                                                            </div>			

                                                            <div>
                                                                <label for="time">Time</label><br>
                                                                <input type="time" placeholder="hh:mm:ss" id="time" name="time" />
                                                            </div>

                                                            <input type="hidden" name="type" value="add" />
                                                            <br>

                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary" id="saveButton">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /. tools -->

                                    <i class="fa fa-calendar"></i>
                                    <h3 class="box-title">
                                        Events
                                    </h3>
                                </div>
                                <div class="box-body">

                                    <table class="table table-striped eventTable">
                                        <tr>
                                            <th style='width: 20%;'>Title</th>
                                            <th style='width: 50%;'>Message</th> 
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Actions</th>
                                            <?php
                                            $result = getPublicEvents();
                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $result->fetch_assoc()) {
                                                    ?>
                                                </tr>
                                                <tr>
                                                    <td><?php echo $row["Title"]; ?></td>
                                                    <td><?php echo $row["Message"]; ?></td>
                                                    <td><?php echo $row["Date"]; ?></td>
                                                    <td><?php echo $row["Time"]; ?></td>
                                                    <td><!--<button class="btn btn-primary btn-sm editButton" data-toggle="modal" data-target="#editModal" id="<?php echo "editButton" . $row["PublicEventID"]; ?>">Edit</button>  -->
                                                        <button class="btn btn-primary btn-sm deleteButton" id="<?php echo "deleteButton" . $row["PublicEventID"]; ?>">Delete</button> </td>

                                                </tr>
                                                <?php
                                            }//end while
                                        }// end if
                                        ?>
                                    </table>
                                </div><!-- /.box-body-->
                            </div>
                            <!-- /.box -->

                        </section><!-- right col -->
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div>

        <script src="../js/jquery-2.1.1.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/jquery-ui.min.js" type="text/javascript"></script>
        <script>
                            $('#saveButton').click(function () {
                                $('#eventForm').submit();
                            });
                            $('#updateEventButton').click(function () {
                                $('#updateEventForm').submit();
                            });
                            $('.deleteButton').on('click', function (e) {
                                var url = "publicEventManagement.php?deleteButton=";
                                window.location = url.concat(e.target.id);
                            });
                            $('.editButton').on('click', function (e) {
                                
                            });
        </script>
        <!--edit event Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h3 class="modal-title" id="myModalLabel">Update event</h3>
                    </div>
                    <div class="modal-body">
                        <form id="updateEventForm" name="updateEventForm" action="publicEventManagement.php" method="post" onsubmit="return isEventFormValid();">
                            <div>
                                <label for="title">Title</label> <br>
                                <input type="text" placeholder="title" id="title" name="title" value="<?php echo $updateTitle; ?>"/>
                            </div>

                            <div>
                                <label for="message">Message</label><br>
                                <input type="text" placeholder="message" id="message" name="message" value="<?php echo $row["Message"]; ?>"/>
                            </div>

                            <div>
                                <label for="date">Date</label><br>
                                <input type="date" placeholder="yyyy-mm-dd" id="date" name="date" value="<?php echo $row["Date"]; ?>"/>
                            </div>			

                            <div>
                                <label for="time">Time</label><br>
                                <input type="time" placeholder="hh:mm:ss" id="time" name="time" value="<?php echo $row["Time"]; ?>"/>
                            </div>

                            <input type="hidden" name="type" value="add" />
                            <br>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="updateEventButton">Save changes</button>
                    </div>
                </div>
            </div>
        </div> <!--end edit event Modal -->
    </body>
</html>

