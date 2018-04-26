    <?php
session_start();
if(isset($_POST['submit'])){
if (empty($_POST['username']) || empty($_POST['password'])) {
echo "<p style='color:red;'>"."Username or  Password is invalid"."</p>";
die();}
else
{
      $username=$_POST["username"];
      $password=$_POST["password"];
      $type=$_POST["text"];
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
$username=stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

      $query="SELECT * FROM Employee WHERE name= '$username' AND password='$password'";
      if(!($result=mysql_query($query,$database))){
echo "<p style='color:red;'>"."Username or  Password is invalid"."</p>";
die();}
$rows =mysql_num_rows($result);
 

}
}

?>