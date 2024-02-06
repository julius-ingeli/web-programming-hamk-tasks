<?php



if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $dob = $_POST['dob'];
}



include 'db.php';



$sql = "INSERT INTO profileInfo (fname, lname, email, pass, dob) VALUES ('$fname', '$lname','$email','$pass','$dob')";

if($conn->query($sql) == TRUE){
    echo "data commited to db.";
}
else{
      echo "data not commited to db. code:".$sql . "<br>". $conn->error;
}

$conn->close();
?>