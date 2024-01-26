<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1: Getting Started with PHP - Julius</title>
</head>
<body>
    <?php
        //T3.1:Write PHP code to output the following message:
        echo "<h3>Hello world! My name is \"David\"</h3>";
        //T3.2:Create a PHP variable named $title and assign it the value "PHP is interesting." Then, use this variable as the content within an <h4> (heading 4) element.
        $title = "PHP is interesting"; //I do not stand behind this statement.
        echo "<h4>$title</h4>";
        //T3.3:Define three variables: $g1 = 5, $g2 = 4, and $g3 = 5. These variables represent the grades of three students in the course. To display this information, create an HTML table within your PHP code. The table should be structured with columns for Serial Number (S.n.), Name, and Grade
        $g1 = 5; $g2 = 4; $g3 = 5;
        echo"
        <table>
        <tr> 
           <th>S.n</th>
           <th>Name</th>
           <th>Grade</th> 
        </tr>
        <tr> 
           <td>1</td>
           <td>John</td>
           <td>$g1</td> 
        </tr>

        <tr> 
           <td>2</td>
           <td>Alice</td>
           <td>$g2</td> 
        </tr>

        <tr> 
           <td>3</td>
           <td>Bob</td>
           <td>$g3</td> 
        </tr>   
    </table>
    ";
    ?>
    <!--T3.4 Take a screenshot that confirms your development environment setup and include it as an image in the "ex1.php" file.-->
    <img src="enviroment.png">

</body>
</html>