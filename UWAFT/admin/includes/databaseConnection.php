<?php
/*  databaseConnection.php
 *  this file connect database with default value
 *
 *   Revision
 * 	Created by Terence at 11/27/2014
 */

        $server = "localhost";
	$username = "root";
	$password = "";
	$database = "UWAFT";

	$link = mysqli_connect($server, $username, $password, $database) or die("Error " . mysqli_error($link));
?>



