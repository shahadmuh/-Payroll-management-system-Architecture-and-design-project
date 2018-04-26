<?php
session_start();
$servername = "localhost";
$username = "436201525";
$password = "1234";
$dbname = "Payroll";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} ?>
<script>
xmlhttp.onreadystatechange = function()
{
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
    {
        document.getElementById("myDiv").innerHTML = xmlhttp.responseText;
    }
    else 
    </script>
  <?php  
    $servername = "localhost";
$username = "1234";
$password = "1234";
$dbname = "Payroll";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
}
if(isset($_POST['submitM'])|| (isset($_POST['saveM'])){
if (empty($_POST['hours']) {
echo "<p style='color:red;'>"."hours is invalid"."</p>";
die();}
else
{
      $hours=$_POST["hours"];
      
if(!($database=mysql_connect("localhost","root","")))
die ("<p>Could not connect to database</p>");
if(!mysql_select_db("Payroll",$database))
die ("<p>Could not open Payroll management system database</p>");

if(isset($_POST['submitM']))
echo "<Timecard has been submitted>";
(isset($_POST['saveM']))
echo "<Timecard has been saved>";

$s=mysql_query(INSERT INTO Timecard (totalHours) VALUES('$hours')); 
}
?>