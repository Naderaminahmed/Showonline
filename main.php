<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
   <title >main page </title>
    <link rel="stylesheet" 
          href="CSS.css"
          type="text/css" > 
    
</head>

<body 
     class="them"
     id="body" >
 <br><br><br><br><br><br> 
     
<?php

$c=0;
$arr[]=0;
$i=0;
$v=0;

$select="select * from photo";
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



<center>






<div onclick="funonclick1(<?php echo ++$i;?>)"id="div1ofimage" >
<P class="div1_paragraphdescripimg">
<?php  echo $arrdescrip[$c];?>
</P>

<img src="images/<?php echo $arr[$c] ?>" alt="" id="<?php echo $i;?>photo"class="image">


</div>
<br>

 <?php

  }
 
 ?>

</div>

<!-- 
<label for="sereach" id="label_sereach">بحث</label>
<input type="text" id="sereach"> -->



</center>
  <script src="fjs.js"></script>       
</body>
</html>