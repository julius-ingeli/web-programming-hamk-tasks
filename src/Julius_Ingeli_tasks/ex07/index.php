<?php
$title = "Exercise 7";
include "../ex02/header.php";
$id=1 ;
$url= "profile.php?id=".$id;

?>
 




<button type="button" class="btn btn-primary"><a href="register.php"> Register</a></button>
<button type="button" class="btn btn-success"><a href="<?php echo $url;?>"> Visit profile</a></button>
<button type="button" class="btn btn-danger"><a href="seedata.php"> See all user data</a></button>






<?php
include "../ex02/footer.php"

?>