<!DOCTYPE html>
<html>
<body>

<br>
<form action="fileupload.php" method="post" enctype="multipart/form-data">
<h2>PERSONAL DETAILS</h2>
	<form method="post" action="#">
		Name:<input type="text" name="name"><br><br>
		Email:<input type="email" name="email"><br><br>
		
		Mobile No:<input type="tel" name="mobile" maxlength="10"/><br><br>
		
		Gender:
		Male<input type="radio" name="gender" value="male">
		Female<input type="radio" name="gender" value="female">
		<br><br>	

    Select image to upload:
    <input type="file" name="image" id="image">
    <input type="submit" name="submit">
</form>
<?php 
    print_r($_FILES);
    echo "<br>";
    print_r($_POST);

    $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
echo $target_file;

if(isset($_POST["submit"])) {

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"],$target_file)) {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }


}}

?>

<img src="uploads/<?php echo $_FILES["image"]["name"];?>">
</body>
</html>
