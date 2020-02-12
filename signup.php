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


//writing user submitted data to database
$username = $_POST['username'];
$password = $_POST['password'];


//before writing username and password to database we will check if that user is already registered
$sql = "SELECT username FROM users where username='".$username."'";

$res = $conn->query($sql);
$row = mysqli_fetch_array($res);

if ($username == $row["username"]) {
    // if user is already registered
    $row = mysqli_fetch_array($res);
    echo "<h4>Username " .$username." Already taken!</h4>";
    echo" <script>alert('This username is already registered!')</script>";
      
} else {
    //if that username is not already registered
    $sql = "INSERT INTO users (username, password) VALUES ('" . $username. "', '".$password."')";
    if ($conn->query($sql) === TRUE) {
        echo "<h2>user ".$username." registered successfully!"."</h2>";
        echo" <script>alert('Successfully registered...click on continue!')</script>";

    } else {
        echo "Error creating table: " . $conn->error;
    }
}


//listing all registered users
echo "<b>All Registered Users:"."</b><br>";
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
}
echo "<br>Continue(Please log in to continue...) <a href='http://localhost/arushi/'>log in</a>";


$conn->close();
?>
