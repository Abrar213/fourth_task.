<!DOCTYPE HTML>
<html>  
<head>
<style>
body{
background-image: url(image99.png);
background-size: 100% 100%;
background-attachment: fixed;
}
.intnum{
margin-top:200px;
}
.B{
  margin-top: 28px;
margin-left: 133PX;
}
form{
margin-top: 450px;
margin-left:760px;
}
</style>
</head> 
<body>

<form   action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
please enter the Number: <input type=int name="intnumber"><br>
<input class="B" type="submit" name="submit" value="submit">
</form>

</body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DB";

if(isset($_GET["submit"])){
$intnumber=$_GET["intnumber"];

}
// Create connection// Check connection
$conn =mysqli_connect("localhost", "root","","DB")or die ("Error in  Connection");

 //sql to create table
$sql = "CREATE TABLE number1 (
intnumber INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$sql = "INSERT INTO number1 (intnumber)
VALUES ('$intnumber')";

if ($conn->query($sql) === TRUE) {
  echo "The table has been successfully created and the value added";
} else {
  echo "Error creating table: " . $conn->error;
}
$conn->close();
?>

</html>
