<?php

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdatabase2";

   $email_address = $_POST['email_address'];
    $password2 = $_POST['password'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query
$sql = "SELECT * FROM test3";

// Execute query and get result
$result = $conn->query($sql);

// Check if any data is returned
if ($result->num_rows > 0) {
    // Loop through data and output it
    while($row = $result->fetch_assoc()) {
      if($row['email_address']==$email_address &&  $row['passwd']==$password){ 
        echo "Login Successful";
        
    }
}
} else {
    echo "0 results";
}

// Close connection
$conn->close();

?>