<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
      <link rel="stylesheet" 
    href="CSS.css"type="text/css" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>log in</title>
</head>
<body class="them" id="body">

<br><br><br> <br><br><br><br>
 
 <?php


function loged(){

  
echo"<center>";

echo " لقد تم تسجيل الدخول  بالفعل";
echo"<br>";
if(isset($_COOKIE['username'])){
echo $_COOKIE['username']."  اسم المستخدم هو";
}echo"<br>";
echo"<br>";
echo '<a href="manage.php"><button   class="them buttonstyle ">   اضافة محتوى المحل   </button></a>';
echo"<br>";
echo"<br>";
echo '<a href="logout.php"><button class="buttonstyle" class="them">تسجيل الخروج</button></a>';
echo"<br>";

echo "</center>";

}


if(isset($_COOKIE['username'])){
  
    header("refresh:http://localhost/webproject/login.php");
     
   loged();

  
  
    // echo "تم تسجيل الدخول";
    die();

  }

  else{

    if(isset($_POST['username'])){
      try{

          $dp= new PDO("mysql:host=localhost;dbname=showonline","root","");
      
      }
      catch(PDOException $e){
      die("faild connect".$e.getMessage());
      
          
      }
        
      $uname=$_POST['username'];
      $pass=$_POST['password'];
      $stmt=$dp->prepare("select * from users where username=:uname and password=:pass");
            
         
        
        
        $stmt->bindParam(":uname",$uname);
        
        $stmt->bindParam(":pass",$pass);
        $stmt->execute();
        if($stmt->rowCount()){
       
          setcookie('username', $_POST['username']);
      
           

  header("refresh:http://localhost/webproject/login.php");

loged();
  
  die();
}
      else
      echo "false";
      
        }
      
  

}//elsecook



 ?>

 
<center id="error">



 <h2 class="them">تسجيل الدخول</h2>

   <h3 class="them">قبل تسجيل الدخول يجب ان تكون قد اشتركت بخدمة عبر التواصل مع المشرف ليتم اضافة حساب جديد لك </h3>
  <h4> ادخل كلمة المرور واسم المستخدم التي اخذتها من المشرف  </h4>     
  </center>

<form action="" 
      method="POST"  
      id="formlogin">
    
    <center>
      <h3 class="them">اسم المستخدم</h3>

 <input  class="checklogin input"
         type="text" 
         name="username">   
    
      <h3 class="them">كلمة المرور</h3>

 <input   class="checklogin input" 
          type="passwrod"
          name="password">   
    
    <br>
    <br>
       <input  class="buttonstyle"
               type="submit" 
               value="تسجيل الدخول"
               class="them"
               name="enter"
              
               >  
  </center> 
   
</form>
 

<h1 id="phpvalue" data-php="<?php echo $rab; ?>"></h1>

   

       
 <script src="fjs.js"></script>
 
</body> 
</html>

