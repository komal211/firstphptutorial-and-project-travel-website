<?php
$insert = false;
if(isset($_POST['name'])){
    
    $server ="localhost";
    $username="root";
    $password="team";
    $database ="trip";
    $con=mysqli_connect($server,$username,$password,$database);
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    //echo "success connection to db";
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO trip (`name`, `age`, `gender`, `email`, `phone`, `otherinfo`, `date_insert`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    if($con -> query($sql)==true){
        $insert=true;
    }
    else{
        echo "Error in inserting query $sql <br> $con->error";
    }
  //  echo $sql;
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css"></link>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital@1&family=Playfair+Display:ital,wght@1,600&display=swap" rel="stylesheet">
</head>
<body>
    <img class="bg" src="toronto_skyline.jpg" alt="Toronto Skyline">
    <div class="container">
        <h1>Welcome to Toronto Trip Travel Form</h1>
        <p>Enter your details and submit this form to confirm your participation in the trip</p>
        <?php
        if($insert == true){
        echo "<p class='submit'>Thank you for submitting your form. We are happy to see you joining us for trip to Toronto Skyline.</p>";
        }
        ?>
        <form action="index.php" method="POST">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button type="submit" class="btn">Submit</button>
            <!--<button class="btn">Reset</button>-->
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>

