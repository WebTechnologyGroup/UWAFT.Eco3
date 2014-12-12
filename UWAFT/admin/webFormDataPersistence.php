<!DOCTYPE html>

<!-- webFormDataPersistence.php
	 
	 Revision History
		Thida Pao, 2014.11.28: Created
-->
<?php
//inital setup for this page, this has to be set before include header
$page_title = "Our team";
$page_author = "Chanthida Pao";
$page_description = "This it team data insert page";
//put each needed meta data as a element in this array
$page_meta = array();
//put needed javascript script here
$page_js = array();

	include("includes/databaseConnection.php");

	$firstName = $_POST["hiddenFirstName"];
	$lastName = $_POST["hiddenLastName"];
	$position = $_POST["hiddenposition"];
	$program = $_POST["hiddenprogram"];
	$growup = $_POST["hiddengrowup"];
	$favEco = $_POST["hiddenfavEco"];
	$cereal = $_POST["hiddencereal"];
	$bucket = $_POST["hiddenbucket"];
	$facts = $_POST["hiddenfacts"];
	$teamcategory = $_POST["hiddenteamcategory"];
	$img_file = $_POST["hiddenImageFile"];

	$sqlInsertIntoStatement = "INSERT INTO $teamcategory (firstName, lastName,
		position, program, growup, favEco, cereal, bucket, facts, profileImage) 
		VALUES ('$firstName', '$lastName', '$position', '$program', '$growup',
			'$favEco', '$cereal', '$bucket', '$facts', '$img_file')"; 

	mysqli_query($link, $sqlInsertIntoStatement);
	mysqli_close($link);
    header("location:teamform.php");
?>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Web Form</title>
		<style>
          body {
            padding-top: 60px;
          }
          @media (max-width: 980px) {
            body {
              padding-top: 0;
            }
          }
        </style>
	</head>
	<body>
		<h1>Team Info Created</h1>

		<p>Your info has successfully saved</p>
	</body>
</html>