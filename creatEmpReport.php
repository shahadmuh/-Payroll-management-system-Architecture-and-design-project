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
} 
?>
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


if(isset($_POST['$vacay'])){
$sql=mysql_query("SELECT vacayTime FROM Report WHERE empName='$username'");
echo "<h3>your remaining vacation time is : </h3>"."$sql";}


if(isset($_POST['$hoursWorked'])){
$sqls=mysql_query("SELECT totalHoursWorked FROM Report WHERE empName='$username'");
echo "<h3>your total hours work is : </h3>"."$sqls";}

if(isset($_POST['$specSub'])){
if (empty($_POST['$proName'])) {
echo "<p style='color:red;'>"."Username or  Password is invalid"."</p>";
die();}
else
{
      $proName=$_POST["projName"];
      
$sqls2=mysql_query("SELECT projHours FROM Report WHERE projName='$proName'");
echo "<h3>your total hours in this project is : </h3>"."$sqls2";}}


if(isset($_POST['$totalPay'])){
$sqls3=mysql_query("SELECT totalPay FROM Report WHERE empName='$username'");
echo "<h3>your total received is :</h3>"."$sqls3";}









if(!($database=mysql_connect("localhost","root","")))
die ("<p>Could not connect to database</p>");
if(!mysql_select_db("Payroll",$database))
die ("<p>Could not open Payroll management system database</p>");

?>