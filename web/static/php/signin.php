<?php
$servername = "localhost";
$db_username = "arushi";
$db_password = "jain";
$dbname = "user_registration";

// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//we will authenticate our login credentials here
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT username FROM users WHERE username='" .$username."'AND password='".$password."'";

if ($res = mysqli_query($conn,$sql))
{
   
    // output data of each row
  if( $row = mysqli_fetch_array($res))
  
   {
    echo "<h4>Welcome " .$username."!</h4>";
    echo "<br> <a href='http://localhost/arushi/'>logout</a>";
    
    header("Location:http://localhost/arushi/webmain.html");
   
   }
   else
   {
       echo" <script>alert('You are not registered....Signup! or may be your username and password is wrong!')</script>";
       echo" <h1>SIGNUP NOW!</h1>";
       echo "<br> <a href='http://localhost/arushi/'>Signup</a>";
    
   }
   
} 
else
 {
    echo "<script>alert('Wrong user name or password')</script>";
}


/*echo "<br><b>All Registered Users:"."</b><br>";
//we will authenticate our login credentials here
$sql = "SELECT username, password FROM users";
$res = $conn->query($sql);
if ( mysqli_num_rows($res) > 0 ) {
    // output data of each row
    while($row = mysqli_fetch_array($res)) {
        echo "username: " . $row["username"]."<br>";
    }
} else {
    echo "0 results";
}*/

$conn->close();
?>

