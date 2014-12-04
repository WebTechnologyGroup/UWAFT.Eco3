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
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.0.2/fullcalendar.css" rel="stylesheet" type="text/css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.0.2/fullcalendar.print.css" rel="stylesheet" type="text/css" media='print' />
        <!-- Theme style -->
        <link href="../css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link href="css/publicEvent.css" rel="stylesheet" type="text/css" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script>
            function isEventFormValid()
            {
                var errors = new Array();
                var errorMessage = "Please correctly provide the following information. \n";

                var form = document.getElementById("eventForm");
                if (form.title.value == "")
                    errors.push("title");
                if (form.date.value == "")
                    errors.push("date");
                if (form.time.value == "")
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
                $title = $_POST["title"];
                $message = $_POST["message"];
                $date = $_POST["date"];
                $time = $_POST["time"];


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
            <a href="../index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                UWAFT
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Terence <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="../img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        Terence
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
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
                            <p>Hello, Jane</p>

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
                            <a href="../index.html">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="pages/publicEventManagement.php">
                                <i class="fa fa-calendar"></i> <span>Public Events</span>
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
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Main row -->
                    <div class="row">

                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-12 connectedSortable"> 

                            <!-- Map box -->
                            <div class="box box-solid bg-light-blue-gradient">
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

                                    <table class="eventTable">
                                        <tr>
                                            <th style='width: 20%;'>Title</th>
                                            <th style='width: 55%;'>Message</th> 
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th></th>
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
                                                    <td><button class="btn btn-primary btn-sm editButton" data-toggle="modal" data-target="#editModal" id="<?php echo "editButton" . $row["PublicEventID"]; ?>">Edit</button>  
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

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="//code.jquery.com/ui/1.11.1/jquery-ui.min.js" type="text/javascript"></script>
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

