<?php

/*  databaseManagement.php
 *  this is used to add/update/delete data from database, it builds in all database relative management functions
 *
 *   Revision
 * 	Created by Terence at 11/28/2014
 */

function getPublicEvents() {
    include "databaseConnection.php";
    $sql = "SELECT * FROM PublicEvent order by Date DESC, Time DESC";
    $result = $link->query($sql);
    $link->close();
    return $result;
}

function addNewPublicEvent($title, $date, $time, $message = null) {
    $sql = "insert into PublicEvent (Title, Message, Date, Time)  VALUES('$title', '$message', '$date', '$time')";
    return managePublicEvent($sql);
}

function updatePublicEventById($id, $title, $date, $time, $message) {
    $sql = "update PublicEvent set Title = '$title', Message = '$message', Date = '$date', Time = '$time' where PublicEventID = $id";
    return managePublicEvent($sql);
}

function deletePublicEventById($id) {
    $sql = "delete from PublicEvent where PublicEventID = $id";
    $result = managePublicEvent($sql);
    return $result;
}

function managePublicEvent($sql){
    include "databaseConnection.php";
    $result = $link->query($sql);
    if ($result !== TRUE) {
        echo "Error: " . $link->error;
    }
    $link->close();
    return $result;
}

function addNewScheduleToDB($title, $start, $end, $allDay, $url, $color){
    if($url!="null")$sql = "insert into TeamSchedule (Title, StartDate, EndDate, AllDay, url, Color)  VALUES('{$title}', '{$start}', '{$end}', {$allDay}, '{$url}', '#{$color}')"; 
    else $sql = "insert into TeamSchedule (Title, StartDate, EndDate, AllDay, Color)  VALUES('{$title}', '{$start}', '{$end}', {$allDay}, '#{$color}')";
    return managePublicEvent($sql);
}
?>