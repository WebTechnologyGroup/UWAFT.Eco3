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
        <title>UWAFT | Admin Page</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
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
                        <li>
                            <a href="teamScheduleManagement.html">
                                <i class="fa fa-dashboard"></i> <span>Team Schedule</span>
                            </a>
                        </li>
                        <li>
                            <a href="publicEventManagement.php">
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
                        Admin Home Page
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active"><i class="fa fa-dashboard"></i> Home</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Main row -->
                    <div class="row">

                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-12 connectedSortable"> 

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

