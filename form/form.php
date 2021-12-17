<html>
<body>
</body>
<?php
echo "<h3>User Results:</h3>";
echo"Name: "; 
if (empty($_POST['name'])){
	echo ""."<br>";
}else{
	echo $_POST["name"]."<br>";
}
echo"Email: "; 
if (empty($_POST['email'])){
	echo ""."<br>";
}else{
	echo $_POST["email"]."<br>";
}
echo "Phone: "; 
if (empty($_POST['phonenumber'])){
	echo ""."<br>";
}else{
	echo $_POST["phonenumber"]."<br>";
}
echo "Country: "; 
if (empty($_POST['country'])){
	echo ""."<br>";
}else{
	echo $_POST["country"]."<br>";
}
echo "Gender: "; 
if (empty($_POST['Gender'])){
	echo ""."<br>";
}else{
	echo $_POST["Gender"]."<br>";
}
echo "Interests: "; 
if (empty($_POST['interests'])){
	echo ""."<br>";
}else{
	echo $_POST['interests']."<br>";
}
echo "Address: "; 
if (empty($_POST['address'])){
	echo ""."<br>";
}else{
	echo $_POST["address"]."<br>";
}
?>
</body>
</html>