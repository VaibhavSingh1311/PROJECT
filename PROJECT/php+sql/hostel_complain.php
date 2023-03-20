// check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    // retrieve the values from the form
    $name = $_POST["name"];
    $room = $_POST["room"];
    $studentID = $_POST["studentID"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $exp_date = $_POST["exp_date"];
    $complain_type = $_POST["complain_type"];
    $complain = $_POST["complain"];

    if (empty($name) || empty($room) || empty($studentID) || empty($phone) || empty($exp_date) || empty($complain_type) || empty($complain))
    { 
        echo "All fields are required.";
    }
    else{

        // connection to database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname ="complains";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // insert the data into the database
        $sql = "INSERT INTO hostel_complain (name, room, studentID, phone, email, exp_date, complain_type, complain) VALUES ('$name', '$room', '$studentID', '$phone','$email', '$exp_date', '$complain_type', '$complain')";
        if ($conn->query($sql) === TRUE) {
            echo "File uploaded successfully.";
        } else {
            echo "Error uploading file: " . $conn->error;
        }

        $conn->close();

        header("Location: complain.html");
        exit();
    }
}
?>
