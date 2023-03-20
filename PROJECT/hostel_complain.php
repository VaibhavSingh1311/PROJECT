<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" >
    <title>Hostel Complain</title>


</head>
<body>
   <form action="hostelcomplain.php" method="post" >
      <div id="container">
    <h1 class="main_heading">Hostel Complain</h1>
    <hr>
    <hr>
    <h2>Contact Imformation</h2>

       <p>
         Name: *<input type="text" id="name" name="name" placeholder="adeeb shekh" required>
       </p>

       <p>Room No:<textarea name="room" id="room" cols="30" rows="2"  placeholder="SVBH 416"></textarea></p>
        <p>Student ID:*<input type="studentId" name="student_id" id="student_id" placeholder="20223000" required></p>
        <p>Phone no.:*<input type="phone" name="phone" id="phone" placeholder="7588964125" required></p>
        <p>Email*<input type="email" name="email" id="email" placeholder="@gmail.com" required></p>
    <h2>Complain Information</h2>

    <p>Complain date: <input type="date" name="exp_date" id="exp_date"></p>
    <p>
        Complain Type:*
        <select name="complain_type" id="complain_type" required>
        <option value="">--Select a complain Type--</option>
        <option value="electricity issue">Electricity issue</option>
        <option value="Washroom issue">Washroom issue</option>
        <option value="Lift problem">Lift problem</option>
        <option value="Cleaning/Housekeeping issue">Cleaning/Housekeeping issue</option>
        <option value="Wifi">Wifi</option>
        <option value="Furniture">Furniture</option>
       </select>
    </p>

     <p>Complain description:<textarea name="complain" id="complain" cols="30" rows="5"  placeholder="Poor working of socket"></textarea></p>

     <br>
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
   </form>
</div>

</body>
</html>