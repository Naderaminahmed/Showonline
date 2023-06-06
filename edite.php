<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" 
          href="CSS.css"
          type="text/css" >
   
    <title>edite the photo describe</title>
</head>
<body>
 <?php

 $namephoto=$_GET['namephoto'];
 
 if(isset($_POST['descrip'])){
    try{
    
    
        $dp= new PDO("mysql:host=localhost;dbname=showonline","root","");
    
    }
    catch(PDOException $e){
    die("faild connect".$e.getMessage());   
    }
      
    $uname=$_GET['namephoto'];
    $udescrip=$_POST['descrip'];
    $stmt=$dp->prepare("update photo set descrip=:udescrip where namephoto=:uname");
    $stmt->bindParam(":uname",$uname);
    $stmt->bindParam(":udescrip",$udescrip);
    $stmt->execute();
      
 header("location:http://localhost/webproject/manage.php");
 die();
 
}
 
 ?>  
 <center>

 <form action=""
       method="POST">
 <br><br><br><br>



    <label for="a"> ادخل الوصف الجديد</label>
<br>

<textarea   dir="rtl"
            name="descrip" 
            rows="5"
            require
            class="checkmanage"
            style="width:300px;"
           >

</textarea>


    <br>
<br> 


<a href="http://localhost/webproject/manage.php">

<button class="edite">الغاء</button>



</a>

<input type="submit" class="edite" value="تعديل">

  </form>  


  
</center>
</body>
</html>