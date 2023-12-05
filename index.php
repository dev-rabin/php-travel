<?php
$server = "localhost";
$user_name = "root";
$password = "";

$connection = mysqli_connect($server, $user_name, $password);

if(!$connection){
    die("Connection failed due to" . mysqli_connect_error());
}
echo"Successfully Connected!";

$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$querry = $_POST['querry'];

$sql = "INSERT INTO `trip` . `trip_details` (`name`,`gender`,`age`,`email`,`phone`,`querry`) VALUES (
    '$name','$gender','$age','$email','$phone','$querry', current_timestamp()
);";

echo $sql;

if($connection->query($sql)){
    echo "Inserted Successfully!";
}
else{
    echo "ERROR : <br> $connection->error";
}

$connection->close();
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
    <div class="container text-center my-3 p-2">
        <h1>Welcome to CDLSIET-Sirsa, Manali Trip Form</h1>
            <p>Enter your details to confirm your participation in this trip</p>
            <p>Thanks! For Submitting this Form</p>
        <div class="row">
            
            <form action="index.php" method="post">
                <input class="col-md-5 col-lg-5 col-sm-12 col-12 my-2 p-2" type="text" name="name" id="name" placeholder="Name">
                <input class="col-md-5 col-lg-5 col-sm-12 col-12 my-2 p-2" type="text" name="gender" id="gender" placeholder="Gender">
                <input class="col-md-5 col-lg-5 col-sm-12 col-12 my-2 p-2" type="text" name="age" id="age" placeholder="Age">
                <input class="col-md-5 col-lg-5 col-sm-12 col-12 my-2 p-2" type="text" name="age" id="age" placeholder="Age">
                <input class="col-md-5 col-lg-5 col-sm-12 col-12 my-2 p-2" type="email" name="email" id="email" placeholder="Email">
                <input class="col-md-5 col-lg-5 col-sm-12 col-12 my-2 p-2" type="phone" name="phone" id="phone" placeholder="Mobile Number">

                <textarea class="col-md-10 col-lg-10 col-sm-12 col-12 my-2 p-2" name="querry" id="" cols="30" rows="10" placeholder="Enter your querry" id="querry"></textarea>
                <div class="col-12">
                    <input class=" col-1 text-center p-2 fw-bold bg-primary text-light my-2" type="button" value="Submit">
                <input class=" col-1 text-center p-2 fw-bold bg-danger text-light" type="button" value="Reset">
                </div>
        </div>
        

        </form>
    </div>

</body>

</html>