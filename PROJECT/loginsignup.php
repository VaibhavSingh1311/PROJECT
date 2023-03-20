<?php
// check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // retrieve the values from the form
  $email = $_POST["email_address"];
  $password = $_POST["password"];
  $confirmPassword = $_POST["confirm_password"];
  
  // validate the input
  if (empty($email) || empty($password) || empty($confirmPassword)) {
    echo "All fields are required.";
  } else if ($password != $confirmPassword) {
    echo "Passwords do not match.";
  } else {
    // connect to the database
    $servername = "localhost";
    $username ="root";
    $password = "";
    $dbname = "testdatabase2";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    // insert the data into the database
    $sql = "INSERT INTO test3 (email_address, passwd, confirm_password) VALUES ('$email', '$password', '$confirmPassword')";
    if ($conn->query($sql) === TRUE) {
      echo "File uploaded successfully.";
    } else {
      echo "Error uploading file: " . $conn->error;
    }
    
    $conn->close();

    header("Location: login.php");
    exit();

  }
}
?>