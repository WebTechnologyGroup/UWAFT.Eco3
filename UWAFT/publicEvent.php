<?php
/* Template Name: Public Event */
/*  PublicEvent.php
 * public event page

 * Revision
 * Created by Terence: 11/24/2014
 */
?>

<?php
//inital setup for this page, this has to be set before include header
$page_title = "Public Event";
$page_author = "Weiwei Chen";
$page_description = "This it the public event page";
//put each needed css link as a element in this array
$page_css = ["<link href=\"css/AdminLTE.css\" rel=\"stylesheet\" type=\"text/css\" />",
    "<link href=\"//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css\" rel=\"stylesheet\" type=\"text/css\" />",
    "<link href=\"//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\"/>"
];
//put each needed meta data as a element in this array
$page_meta = array("<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>");
//put needed javascript script here
$page_js = array();
include_once "includes/header.php";
?>
    <div class="container needSpaceBetweenHeader">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Our Public Events
                <small>Check our timeline</small>
            </h1><!--
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>Calendar</a></li>
                <li class="active">Public Events</li>
            </ol>-->
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <!-- The time line -->
                    <ul class="timeline">
                        <?php
                        include "includes/databaseConnection.php";
                        $sql = "SELECT * FROM PublicEvent order by Date DESC, Time DESC";
                        $result = $link->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            $labelColors = ["bg-red", "bg-green", "bg-blue", "bg-orange", "bg-gray", "bg-purple"];
                            $displayedDate = null;
                            $colorIndex = 0;
                            while ($row = $result->fetch_assoc()) {
                                //check if date is different, if so, show date label once
                                if ($displayedDate != $row["Date"]) {
                                    $displayedDate = $row["Date"];
                                    echo "<li class=\"time-label\"> <span class=\"" . $labelColors[$colorIndex++] . "\">" . $displayedDate . "</span> </li>";
                                }

                                //event item
                                ?>
                                <li>
                                    <i class="fa fa-calendar bg-green"></i>
                                    <div class="timeline-item">
                                        <span class="time"><i class="fa fa-clock-o"></i> <?php echo $row["Time"] ?></span>
                                        <h3 class="timeline-header"><?php echo $row["Title"] ?></h3>
                                        <?php if($row["Message"]!=null){ ?>
                                        <div class="timeline-body">
                                            <p><?php echo $row["Message"] ?></p>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </li>
                                <?php
                            }//end while
                        }// end if
                        $link->close();
                        ?>

        </section><!-- /.content -->
    </div><!-- / container -->

    <?php include_once 'includes/footer.php'; ?>


