
      <?php

if(isset($_COOKIE['username']))
setcookie('username',$_COOKIE['username'],time()+0);
header("location:http://localhost/webproject/login.php" );

 ?>
 
 
          
