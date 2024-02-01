<?php
    $title = "Exercise03";
    include "../ex02/header.php";
?>


<div class="container">
    <div class="row">

    </div>


    <div class="row">
        <h1>Form exercise</h1>    
        
        <div class="col-sm-3">
               
            <form method="post" name="nameform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                First Name: <input type="text"  name="fn" required><br><br>
            </div>

              <div class="col-sm-3">
                Last Name: <input type="text" name="ln" required><br><br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
    
    <?php
            //form check
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                //retrieving data for name form
            
                $firstName = $_POST["fn"];
                $lastName = $_POST["ln"];
                //check if both fields are filled
                if (!empty($firstName) && !empty($lastName)){
                    echo "<h3>Hello, $firstName, $lastName, welcome to my site.</h3>";
                }
                else{
                    echo "<h3>Please enter both first and last name.</h3>";
                }
            }
            //retrieving data for string form
            
                $string1 = $_POST["str1"];
                $string2 = $_POST["str2"];
                $strresult = $string1 . $string2;
            
            
    ?>
    <h1>Table exercise</h1>
    <table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>John Doe</td>
            <td>john@example.com</td>
            <td>25</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Jane Smith</td>
            <td>jane@example.com</td>
            <td>30</td>
        </tr>
        <tr>
            <td>3</td>
            <td>My Name</td>
            <td>My@name.com</td>
            <td>75</td>
        </tr>
    </tbody>
</table>


<h1>String Exercise</h1>
<form method="post" name="stringform" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
    String 1:<input type="text" name="str1">
    String 2:<input type="text" name="str2">
    <button type="submit" value="concatenate">Concatenate</button>
</form>
<?php
    echo "<p>Concatenated Result:<strong> $strresult</strong></p>";
    echo "<h1>Number addition Exercise</h1>\n296+234+46 = ";
    echo 298+234+46;
    echo "<h1>Browser Detection Exercise</h1>";
    
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    echo $userAgent;

?>


<?php include "../ex02/footer.php"; ?>




