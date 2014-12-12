<!-- teamform.html
INFO8240 Assignment 2 Conestoga Pizzeria
HTML 5 and PHP technologies used

Revision History
Thida Pao, 2014.11.27: Created                
-->

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
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
        <style>
            @media (max-width: 980px) {
                body {
                    padding-top: 0;
                }
            }
        </style>
    </head>

    <body class="skin-blue">
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
                        <li>
                            <a href="publicEventManagement.php">
                                <i class="fa fa-calendar"></i> <span>Public Events</span>
                            </a>
                        </li>
                        <li class="active">
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
                        Team Page Info Form
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Public Events</li>
                    </ol>
                </section>

                <section class="content">
                    <!-- Main row -->
                    <div class="row">
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-12 connectedSortable"> 

                            <!-- Map box -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <div class="col-sm-12">
                                        <h3 class="box-title">Add new team member</h3>
                                    </div>
                                </div>
                                <div class="box-body">

                                    <form  role= "form" name="memberForm" action="webFormValidation.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group form-group-lg">
                                            <label for="teamcategory">Category</label><br>
                                            <select name="teamcategory" id="teamcategory" class="form-control input-lg">
                                                <option selected disabled>Please select one</option> 
                                                <option value="projectmanagement">Project Management Team</option>
                                                <option value="technical">Technical Team</option>
                                                <option value="communications">Communications Team</option>
                                            </select>
                                        </div>      
                                        <div class="form-group form-group-lg"> 
                                            <label for="firstName">First Name</label> <br>
                                            <input type="text" class="form-control input-lg" placeholder="First Name" id="firstName" name="firstName" /> 			
                                        </div>
                                        <div class="form-group form-group-lg"> 
                                            <label for="lastName">Last Name</label> <br>
                                            <input type="text" class="form-control input-lg" placeholder="Last Name" id="lastName" name="lastName" /> 			
                                        </div>
                                        <div class="form-group form-group-lg"> 
                                            <label for="position">Position</label> <br>
                                            <input type="text" class="form-control input-lg" placeholder="Position" id="position" name="position" /> 			
                                        </div>
                                        <div class="form-group form-group-lg"> 
                                            <label for="program">Program</label> <br>
                                            <input type="text" class="form-control input-lg" placeholder="Program" id="program" name="program" /> 			
                                        </div> 		
                                        <div class="form-group form-group-lg"> 
                                            <label for="growup">When I was a kid I wanted to be:</label> <br>
                                            <input type="text" class="form-control input-lg" placeholder="When I grow up" id="growup" name="growup" /> 			
                                        </div> 	
                                        <div class="form-group form-group-lg"> 
                                            <label for="favEco">Favorite part of EcoCAR/UWAFT:</label> <br>
                                            <textarea class="form-control input-lg" id="favEco" name="favEco" rows="3"> </textarea>      		
                                        </div> 			
                                        <div class="form-group form-group-lg"> 
                                            <label for="cereal">Favorite Breakfast Cereal:</label> <br>
                                            <input type="text" class="form-control input-lg" placeholder="cereal" id="cereal" name="cereal" /> 			
                                        </div> 		
                                        <div class="form-group form-group-lg"> 
                                            <label for="bucket">Three things on your bucket list: </label> <br>
                                            <textarea class="form-control input-lg" id="bucket" name="bucket" rows="3"></textarea>         	
                                        </div> 
                                        <div class="form-group form-group-lg"> 
                                            <label for="facts">Two things about you: </label> <br>
                                            <textarea class="form-control input-lg" id="facts" name="facts" rows="3"> </textarea>             
                                        </div> 
                                        <div class="form-group form-group-lg"> 
                                            <label for="profileImage">Profile Picture Upload</label> <br>
                                            <input type="file" id="profileImage" name="profileImage" accept="image/*"/>    
                                            <p class="help-block">Upload your profile picture here.</p>      
                                        </div>  
                                        <div class="formButtons">
                                            <input type="submit" value="Submit" class="btn btn-primary" />
                                            <input type="reset" value="Clear" class="btn btn-default"/>
                                        </div> 		
                                    </form>
                                </div></div></section></div>
                    <div class="row">
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-12 connectedSortable"> 

                            <!-- Map box -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <div class="col-sm-12">
                                        <h2>Current Members</h2>
                                    </div>
                                </div>
                                <div class="box-body">



                                    <h3>Project Management</h3>
                                    <div class="table-responsive">
                                        <table class="table table-striped">

                                            <?php 
include("includes/databaseConnection.php");

$projectmanagementTeamResult=mysqli_query($link,"SELECT id,firstName,lastName,position FROM projectmanagement ORDER BY firstName");

$i=0;
while( $row = mysqli_fetch_array($projectmanagementTeamResult, MYSQLI_BOTH) )
{
    echo "<tr>";
    echo "<td><b>".$row['firstName']."</b></td>";
    echo "<td>".$row['lastName']."&nbsp;</td>";
    echo "<td>".$row['position']."&nbsp;</td>";

    echo "<td><a onclick=\"return confirm('Are you sure?');\" href=teamform.php?position=projectmanagement&action=del&id=".$row['id']."><span class=red>delete</span></a></td>";
    echo "<td></td>";
    echo "</tr>";
    $i++;

}
if(@$_REQUEST['action']=="del"&&@$_REQUEST['position']=="projectmanagement")
{
    mysqli_query($link, "DELETE FROM projectmanagement WHERE id=".round($_REQUEST['id']));
}

                                            ?>

                                        </table>
                                        <p></p>
                                        <h3>Technical Team</h3>
                                        <table class="table table-striped">
                                            <?php    
include("includes/databaseConnection.php");

$technicalTeamResult=mysqli_query($link,"SELECT id,firstName,lastName,position FROM technical ORDER BY firstName");

$i=0;
while( $row = mysqli_fetch_array($technicalTeamResult, MYSQLI_BOTH) )
{
    echo "<tr>";
    echo "<td class=tabval><b>".$row['firstName']."</b></td>";
    echo "<td class=tabval>".$row['lastName']."&nbsp;</td>";
    echo "<td class=tabval>".$row['position']."&nbsp;</td>";

    echo "<td class=tabval><a onclick=\"return confirm('Are you sure?');\" href=teamform.php?position=technical&action=del&id=".$row['id']."><span class=red>delete</span></a></td>";
    echo "<td class=tabval></td>";
    echo "</tr>";
    $i++;

}
if(@$_REQUEST['action']=="del"&&@$_REQUEST['position']=="technical")
{
    mysqli_query($link, "DELETE FROM technical WHERE id=".round($_REQUEST['id']));
}
                                            ?>
                                        </table>
                                        <table class="table table-striped">

                                            <h3>Communications Team</h3>
                                            <?php
include("includes/databaseConnection.php");

$comunicationsTeamResult=mysqli_query($link,"SELECT id,firstName,lastName,position FROM communications ORDER BY firstName");

$i=0;
while( $row = mysqli_fetch_array($comunicationsTeamResult, MYSQLI_BOTH) )
{

    echo "<tr valign=center>";
    echo "<td class=tabval><b>".$row['firstName']."</b></td>";
    echo "<td class=tabval>".$row['lastName']."&nbsp;</td>";
    echo "<td class=tabval>".$row['position']."&nbsp;</td>";

    echo "<td class=tabval><a onclick=\"return confirm('Are you sure?');\" href=teamform.php?position=comunications&action=del&id=".$row['id']."><span class=red>delete</span></a></td>";
    echo "<td class=tabval></td>";
    echo "</tr>";
    $i++;

}
if(@$_REQUEST['action']=="del"&&@$_REQUEST['position']=="comunications")
{
    mysqli_query($link, "DELETE FROM communications WHERE id=".round($_REQUEST['id']));
}
mysqli_close($link);   
                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </section>
            </aside>
        </div>
    </body>  
</html>