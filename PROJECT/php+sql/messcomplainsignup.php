<?php
// check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // retrieve the values from the form
  $name = $_POST["name"];
  $room = $_POST["room"];
  $studentid = $_POST["studentid"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $exp_date = $_POST["exp_date"];
  $complain = $_POST["complain"];
  
  // validate the input
  if (empty($name) || empty($room) || empty($studentid) || empty($phone) || empty($email) || empty($exp_date) || empty($complain)) {
    echo "All fields are required.";
  }else {
    // connect to the database
    $servername = "localhost";
    $username ="root";
    $password = "";
    $dbname = "hostel_complain";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    // insert the data into the database
    $sql = "INSERT INTO mess_complain (name, room, studentid, phone, email, exp_date, complain) VALUES ('$name', '$room', '$studentid','$phone','$email','$exp_date','$complain')";
    if ($conn->query($sql) === TRUE) {
      echo "File uploaded successfully.";
    } else {
      echo "Error uploading file: " . $conn->error;
    }
    
    $conn->close();

    header("Location: mess_complain.php");
    exit();

  }
}
?>