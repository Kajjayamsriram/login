<?php

$target_dir="uploads/";
$target_file=$target_dir.basename($_FILES["fileToUpoad"]["name"]);
$uploadOk=1;
$imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])){
	$check=getimagesize($_FILES["filesToUpload"]["tmp_name"]);
	if($check!==false){
		echo "File is image".$check["mime"].".";
		$uploadOk=1;
	}else{
		echo "File is not image.";
		$uploadOk=0;
	}
}

if (file_exists($target_file)){
	echo "Sorry file already exists";
	$uploadOk=0;
}

if ($FILES["fileToUpoad"]["size"]>500000){
	echo "sorry file is too large.";
	$uploadOk=0;
}

if($imageFileType!="jpeg" && imageFileType!="jpg" && imageFileType!="png" && imageFileType!="gif"){
	echo "sorry files supports only jpeg jpg png and gif are allowed.";
	uploadOk=0;
}

if($uploadOk==0){
	echo "sorry your file was not uploaded";
}else{
	if(move_upload_file($_FILES["filesToUpload"]['tmp_name'],$target_file)){
		echo "The file".htmlspecialchars(basename($_FILES['filesToUpload']['name']))."has been uploaded.";
	}else{
		echo "sorry error in uploading file.";
	
	}
}
?>
