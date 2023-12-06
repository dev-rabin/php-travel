<!-- INSERT INTO `trip_details` (`sno`, `name`, `email`, `time`) VALUES ('1', 'Robin', 'test@gmail.com', current_timestamp()); -->

<?php
$insert = false;  
// Connecting to the Database
if (isset($_POST['name'])) {
  
$servername = "localhost";
$username = "root";
$password = "";
$database = "trip";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    // echo "Connection was successful<br>";
}

// Variables to be inserted into the table
$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$other = $_POST['other'];
// Sql query to be executed
$sql = "INSERT INTO `trip_details` (`name`,`gender`,`age`,`phone`,`email`,`other`,`time`) VALUES ('$name','$gender','$age','$phone', '$email','$other',current_timestamp());";

$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if($result){
    // echo "The record has been inserted successfully successfully!<br>";
    $insert= true;
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}
$conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nova+Square&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Travel Form</title>
</head>

<body>
    <div class="container text-center my-5 p-2">
        <h1>Welcome to CDLSIET-Sirsa, Manali Trip Form</h1>
        <p>Enter your details to confirm your participation in this trip</p>
        <?php
        if ($insert == true) {
            echo "<p class='submit-msg'>Thanks! For Submitting this Form</p>";
        }
        
        ?>
        <div class="row">
            <form action="index.php" method="post">

            <input class="col-md-5 col-lg-5 col-sm-12 col-12 my-2 p-2" type="text" name="name" id="name" placeholder="Name">
            
                <input class="col-md-5 col-lg-5 col-sm-12 col-12 my-2 p-2" type="text" name="gender" id="gender" placeholder="Gender">

                <input class="col-md-5 col-lg-5 col-sm-12 col-12 my-2 p-2" type="text" name="age" id="age" placeholder="Age">
                
                <input class="col-md-5 col-lg-5 col-sm-12 col-12 my-2 p-2" type="phone" name="phone" id="phone" placeholder="Mobile Number">

                <input class="col-md-5 col-lg-5 col-sm-12 col-12 my-2 p-2" type="email" name="email" id="email" placeholder="Email">
                

                <input class="col-md-5 col-lg-5 col-sm-12 col-12 my-2 p-2" type="text" name="other" id="other" placeholder="enter your query">

        	        <div>
                    <button class="btn text-center p-2 fw-bold bg-primary text-light my-2">Submit</button>
                    <!-- <button class=" col-1 text-center p-2 fw-bold bg-danger text-light my-2">Reset</button> -->
                </div>
            </form>
        </div>



    </div>

</body>

</html>