<?php
    $title = "Exercise 4";
    include "../ex02/header.php";

?>

<h1>Age Check Exerise</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="ageCheck">
    Enter Age: <input type="number" name="age" min=0><br>
</form>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if (isset($_POST["age"])) {
    
        $age = $_POST["age"];
    
        if ($age>=18){
            echo '<h3 class="success">You are eligible for voting.</h3>';
        }
        else{
            echo '<h3 class="fail">You are not eligible for voting.</h3>';
        }
    }
}
?>

<h1> Holiday Check Exercise </h1>

<p> Current Date is: <p>

<?php $currentMonth = date('m');
    //echo $currentMonth;

    switch($currentMonth){
        case "08":
            echo "It is August, holiday.";
            break;
        default:
            echo "It is ".date("F").", not yet holiday.";                                                                                                                                                                                                                               
    }
?>


<h1> Number Multiplication Exercise</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="number">
    Enter Number: <input type="number" name="number" min=0><br>
</form>

<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST["number"])){
            $n = $_POST["number"];
    
            for ($i=1; $i < 11 ; $i++) { 
                echo "$n*$i=".$n*$i."<br>";
            }

        }
    }
?>

<h1> 1 to N Numbers Exercise</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="whileLoop">
    Enter End Number: <input type="number" name="whileLoop" min=0><br>
</form>


<?php


if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["whileLoop"])){
        $n = $_POST["whileLoop"];
        $m = 1;
        while ($m != $n) {
            echo "$m <br>";
            ;
            $m++;
        }
    }    
}

?>


<h1> Array Exercise </h1>
<?php
    $myarray= array("HTML", "CSS", "PHP", "JavaScript");
    foreach ($myarray as $x) {
        echo "$x <br>";
    }

?>

<?php
    include "../ex02/footer.php"
?>