<?php

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdatabase";

   $email_address = $_POST['email_address'];
    $password2 = $_POST['password'];
    // $confirm_password = $_POST['confirm_password'];
    // $conn = mysqli_connect('localhost','root','','test2');

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query
$sql = "SELECT * FROM test2";

// Execute query and get result
$result = $conn->query($sql);

// Check if any data is returned
if ($result->num_rows > 0) {
    // Loop through data and output it
    while($row = $result->fetch_assoc()) {
      if($row['email_address']==$email_address &&  $row['passwd']==$password){ 
        echo "Login Successful";
        //  header("Location : ");
      //   echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
    }
}
} else {
    echo "0 results";
}

// Close connection
$conn->close();

   //  $email_address = $_POST['email_address']
   //  $password = $_POST['password']
   //  $confirm_password = $_POST['confirm_password']
   //  $conn = new mysqli('localhost','root','','test');
   //  if($conn->connect_error){
   //      die('Connection Failed : '.$conn->connect_error);
   //  }else{
   //      $stmt = $conn->prepare("insert into registration(email_address, password, confirm_password)values(?, ?, ?)");
   //      $stmt->bind_param("sss",$email_address, $password, $confirm_password);
   //      $stmt->execute();
   //      echo "registration successful..";
   //      $stmt->close();
   //      $conn->close();
   //  }


?>