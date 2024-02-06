<?php
$title = "Exercise 7.1 Register";
include "../ex02/header.php";
?>

<h2>Input Your Information Below:</h2>
<form name="form1" method="post" action="../crud/process.php">
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname" required>
            </div>
            <div class="col">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter your last name" name="lname" required>
            </div>

            <div class ="col">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email"placeholder="Enter your e-mail" name="email"required>
            </div>
        </div>

    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password" required>
            </div>
            <div class="col">
                <label for="dob">Date of Birth </label>
                <input type ="date" class="form-control" id="dob" name="dob" required>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<?php
include "../ex02/footer.php";
?>