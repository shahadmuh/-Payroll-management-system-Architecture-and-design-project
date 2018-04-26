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
if(isset($_POST['pickSub']))
$s=mysql_query(INSERT INTO Payment (type) VALUES("pickup"));

else if(isset($_POST['mailSub'])){
$s1=mysql_query(INSERT INTO Payment (type) VALUES("mail"));
$s2=mysql_query(INSERT INTO Employee (payment) VALUES("mail"));
if(isset($_POST['mailAdrsSub']))
$s3=mysql_query(INSERT INTO Payment (mailbox) VALUES('$mailAdrs'));}

else if(isset($_POST['directSub'])){
$s4=mysql_query(INSERT INTO Payment (type) VALUES("directDeposit"));
$s5=mysql_query(INSERT INTO Employee (payment) VALUES("directDeposit"));
if(isset($_POST['AccSub']))
$s6=mysql_query(INSERT INTO Payment (bankAcc) VALUES('$Acc'));}




 

   
if(!($database=mysql_connect("localhost","root","")))
die ("<p>Could not connect to database</p>");
if(!mysql_select_db("Payroll",$database))
die ("<p>Could not open Payroll management system database</p>");


?>