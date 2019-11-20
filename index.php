<?php 
require "SecureHasher.php";
require "Md5.php";
require "Sha1.php";
require "Sha256.php";
?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>

<form method="post">
	Text:
	<input type="text" name="inputData">
	Salt:
	<input type="text" name="salt">
	<button name="hashItButton">Hash it</button>
</form>

<?php
if(isset($_POST["hashItButton"])) {
	$data = $_POST["inputData"];
	$salt = $_POST["salt"];

	echo "Input: ". $data ."<br>";
	echo "Salt parameter: ". $salt ."<br>";

	$hasher = new SecureHasher(new Md5(), $salt);
	echo "Md5: ". $hasher->hashIt($data) ."<br>";

	$hasher = new SecureHasher(new Sha1(), $salt);
	echo "Sha1: ". $hasher->hashIt($data) ."<br>";

	$hasher = new SecureHasher(new Sha256(), $salt);
	echo "Sha256: ". $hasher->hashIt($data) ."<br>";
}

?>

</body>
</html>