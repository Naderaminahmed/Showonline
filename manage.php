<!DOCTYPE html>
<html     lang="en">
<head>
    <meta charset="UTF-8">
    <title>manage the content</title>
    <link rel="stylesheet" 
          href="CSS.css"
          type="text/css" >
</head>

<body     class="them" 
          id="body">
<br><br><br><br>

<center>
 <h3> ادارة محتوئ المحل </h3><br><br>
               
    

    <?php

    if(isset($_COOKIE['username'])){
    $i=0;
    if(isset($_POST['add'])){


        $image=$_FILES['image'];
        $file="images/".$image['name'];
        move_uploaded_file($image['tmp_name'],$file);
        $pho=$image["name"];
        $username=$_COOKIE['username'];
        $descrip=$_POST['descrip'];
        $codesql="insert into photo (namephoto,partion,username,descrip)value('$pho','a','$username','$descrip')";
        $con=mysqli_connect("localhost","root","","showonline");
        $q=mysqli_query($con,$codesql);
        if($q)echo "add into data base";
        else echo "errror";  


}
 
}//ifcookie
 
 else{
     header("location:http://localhost/webproject/login.php");
     exit();
     }
 
 
 
 ?>





<div  id="div1ofimage">


<form action=""
      method="post" 
      id="manage_form"
      enctype="multipart/form-data">

<button class="them addphoto">


<label for="input_file"id="file_label" >
    اختيار صورة من  الملفات

</label>

</button>

<br>
<br>
<label for="text"> اسم المنتج</label>
<input type="text " id="text"/>

<label for="text"> سعر المنتج</label>
<input type="text" id="text"/>

<label for="textarea">
    مواصفات المنتج
</label>

<textarea   dir="rtl"
            name="descrip" 
            rows="3"
            cols="19"
            class="checkmanage">

</textarea>

<input 
      id="input_file" 
      style="visibility:hidden"
      type="file" 
      name="image"
      class="checkmanage  them"
      placeholder="choose image">

<input 
      type="submit"
      name="add"  
      calss="them"
      id="addbutton"
      value="اضافة الصورة"
      onclick="addpho()">


<br>

</form>

<br>


 <?php
$v=0;
$i=0;
$arr[]=0;
$arrdescrip[]=0;
 
$username=$_COOKIE['username'];


if($username=="admin")
        $select="select * from photo";
    else
        $select="select * from photo where username='$username'";



$con1=mysqli_connect("localhost","root","","showonline");
$reseltselect=mysqli_query($con1,$select);

while($row=mysqli_fetch_array($reseltselect)){

    $arr[$v]=$row['namephoto'];
$arrdescrip[$v]=$row['descrip'];

    $v++;
   
}



if($arr)
  for($c=count($arr)-1;$c>=0;$c--)
      if($arr[$c]){
   ?>

<div onclick="funonclick1(<?php echo ++$i;?>)" class="div_of_img">


            <P class="div1_paragraphdescripimg">
<?php  echo $arrdescrip[$c];?>
            </P>

<img src="images/<?php echo $arr[$c];?>" 
     alt="" 
     id="<?php echo $i;?>photo"
     class="image">

</div>



<a href="edite.php?namephoto=<?php echo $arr[$c];?>"class="aedite">
   <button class = "them edite" >تعديل
   </button> 
</a>


<a href="delete.php?namephoto='<?php echo $arr[$c];?>'" 
   class="aedite">
  

      <button class = "them delete "> حذف
      </button>
      </a>

      
<!-- 
      <button class = "them delete" onclick=confirm_delete(); >
          حذف 
      </button> -->




 <?php
}


 ?>
 
</div>
</center>      
     <script src="fjs.js"></script>   
</body>
</html>
