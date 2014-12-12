<!DOCTYPE html>

<!-- webFormValidation.php
	 
	 
	 Revision History
		Thida Pao, 2014.10.17: Created 
-->
<?php
//inital setup for this page, this has to be set before include header
$page_title = "Our team";
$page_author = "Chanthida Pao";
$page_description = "This it web from validation page";
//put each needed meta data as a element in this array
$page_meta = array();
//put needed javascript script here
$page_js = array();

    $firstName = trim(isset($_POST["firstName"]) ? $_POST["firstName"]: null);
    $lastName = trim(isset($_POST["lastName"]) ? $_POST["lastName"]: null);
    $position = trim(isset($_POST["position"]) ? $_POST["position"]: null);
    $program = trim(isset($_POST["program"]) ? $_POST["program"]: null);
    $growup = trim(isset($_POST["growup"]) ? $_POST["growup"]: null);
    $favEco = trim(isset($_POST["favEco"]) ? $_POST["favEco"]: null);
    $cereal = trim(isset($_POST["cereal"]) ? $_POST["cereal"]: null);
    $bucket = trim(isset($_POST["bucket"]) ? $_POST["bucket"]: null);
    $facts = trim(isset($_POST["facts"]) ? $_POST["facts"]: null);    
    $teamcategory = null;
    $imageName = 

	$errors = array();

	if(isset($_POST["teamcategory"]) == true) $teamcategory = $_POST["teamcategory"];
	
	if($firstName == "") array_push($errors, "First Name");
	if($lastName == "") array_push($errors, "Last Name");
	if($position == "") array_push($errors, "Position");
	if($growup == "") array_push($errors, "What would you like to be when you grow up");
	if($favEco == "") array_push($errors, "Favourite EcoCar experience?");
	if($cereal == "") array_push($errors, "Favourite cereal?");
	if($bucket == "") array_push($errors, "Bucket list answers");
	if($facts == "") array_push($errors, "Two Facts");
	if($teamcategory == null) array_push($errors, "Category");

	$target_dir = "../images/";
	$target_file = $target_dir . basename($_FILES["profileImage"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	if(isset($_POST["profileImage"])) {
    $check = getimagesize($_FILES["profileImage"]["tmp_name"]);

    if($check == false) array_push($errors, "File is not an image.");
    if (file_exists($target_file)) array_push($errors, "Sorry, file already exists.");
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) $array = array($errors, "Sorry, only JPG, JPEG, PNG & GIF files are allowed.");

} 
?>

<html>
	<head>
		<meta charset="utf-8" />
		<title>Web Form</title>
	</head>
	
	<body>
		<h1><?php echo count($errors) == 0 ? "Web Form Summary" : "Web Form Error"; ?></h1>
	
		<p>
			<?php
				echo count($errors) == 0 ?
					"Please confirm the following information before creating your account." :
					"Please correct the following information before creating your account.";
			?>
		</p>
		
		<?php
			if(count($errors) == 0)
			{
		?>
				<p>
					First Name: <?php echo $firstName; ?><br />
					Last Name: <?php echo $lastName; ?><br />
					Position: <?php echo $position; ?><br />
					Program: <?php echo $program; ?><br />
					What would you like to be when you grow up: 
					<?php echo $growup; ?><br />
					Favourite EcoCar experience: 
					<?php echo $favEco; ?><br />
					Favourite Cereal: <?php echo $cereal; ?><br />
					Bucket List: <?php echo $bucket; ?><br />
					Two Facts<?php echo $facts; ?><br />:
					Category: <?php echo $teamcategory; ?><br />
					Image: <?php echo $target_file; ?><br />
				</p>
				
				<form action="webFormDataPersistence.php" method="post">
					<input type="hidden" id="hiddenFirstName" name="hiddenFirstName" value="<?php echo $firstName; ?>" />
					<input type="hidden" id="hiddenLastName" name="hiddenLastName" value="<?php echo $lastName; ?>" />
					<input type="hidden" id="hiddenposition" name="hiddenposition" value="<?php echo $position; ?>" />
					<input type="hidden" id="hiddenprogram" name="hiddenprogram" value="<?php echo $program; ?>" />
					<input type="hidden" id="hiddengrownup" name="hiddengrowup" value="<?php echo $growup; ?>" />
					<input type="hidden" id="hiddenfavEco" name="hiddenfavEco" value="<?php echo $favEco; ?>" />
					<input type="hidden" id="hiddencereal" name="hiddencereal" value="<?php echo $cereal; ?>" />					
					<input type="hidden" id="hiddenbucket" name="hiddenbucket" value="<?php echo $bucket; ?>" />
					<input type="hidden" id="hiddenfacts" name="hiddenfacts" value="<?php echo $facts; ?>" />
					<input type="hidden" id="hiddenteamcategory" name="hiddenteamcategory" value="<?php echo $teamcategory; ?>" />
					<input type="hidden" id="hiddenImageFile" name="hiddenImageFile" value="<?php echo $target_file; ?>" />

					<input type="submit" value="Submit User" />
				</form>
		<?php } else { ?>
				<ul>
					<?php foreach($errors as $error) { ?>
						<li><?php echo $error; ?></li>
					<?php } ?>
				</ul>
		<?php } ?>
	</body>
</html>