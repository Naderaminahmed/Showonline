<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport"
     content="width=device-width, initial-scale=1.0">
   
    <meta charset="UTF-8">
    <title>new user</title>

      <link rel="stylesheet" 
            href="CSS.css"
            type="text/css" >
    
    
</head>
<body class="them">
    
  
      <br>
      <br>
      <br>
      <br>


      <?php
     
     if(isset($_COOKIE['username'])){
     if($_COOKIE['username']=="admin"){
        if(isset($_POST["adduser"])){


       
         $user=$_POST["username"];
         $pass=$_POST["password"];
         $part=$_POST["partion"];
         $nameofshop=$_POST["nameofshop"];
         $timesubscription=$_POST["timesubscription"];
         $codesql="insert into users (username,password,partion,nameofshop,location)value('$user','$pass','$part','$nameofshop','o')";
         $con=mysqli_connect("localhost","root","","showonline");
         $q=mysqli_query($con,$codesql);

         if(!$q)echo "errror"; 
         
        }
        
        }
        else exit();
       
    }
    else{ 
      header("location:http://localhost/webproject/login.php");
      exit();
        }
    

      ?>
      
    
      <form method="post"
            action=""
            id="newuser_form" >

           <center> 
<h1 class=" them">اضافة مشترك جديد  </h1>
<h3 class=" them">يتبع قسم </h3>

      <select  class="them input"
               name="partion">
      <option  class="them"
               value="ذهب ومجوهرات">
           ذهب ومجوهرات
           </option>

          <option class="them"
                  value="فساتين اعراس">
              فساتين اعراس
          </option>
          
          <option class="them"
                  value="جوالات">
              جوالات
          </option>
          
          <option class="them"
                  value="ملابس  رجالية">
               ملابس  رجالية
          </option>
          
          <option class="them"
                  value="ملابس نسائية">
              ملابس نسائية
          </option>
          
          <option class="them"
                  value="احذية">
              احذية
          </option>
          
          <option class="them"
                  value="حرف يدوية">
               حرف يدوية
          </option>
            
     
            

      </select>             
                   
                     
      <h3 class=" them">اسم المستخدم </h3>
           
           <input class="input"        
                  type="text" 
                  class="them"
                  name="username"
                  class="addnewuser"> 

 <h3 class=" them"> كلمة المرور  </h3>
          
          <input   class="input"
                   type="password"
                   class="them"
                   name="password" 
                   class="addnewuser" > 

 <h3 class=" them" >مدة الاشتراك </h3>

<table>
       <tr>
           <td>
<span class=" them"> 10$ شهر واحد </span>
           </td>
            
            <td>
                <input class="input"
                       type="radio"
                       name="timesubscription"
                       value="+1 month"
                       class="them"
                       class="newuser_radiobutton"> 

            </td>
       </tr>
       <tr>
            <td>
<span class=" them">40$ ستة اشهر </span>
            </td>
            
            <td>
               <input class="input" 
                      type="radio" 
                      name="timesubscription"
                      value="+6 months"
                      class="them"
                      class="newuser_radiobutton">
            </td>
       </tr>
       <tr>
             <td>
<span class=" them">80$ لمدة سنة </span>
             </td>
             <td>
                  <input 
                         type="radio"
                         name="timesubscription"
                         value="+1 year"
                         class="them input newuser_radiobutton"
                         > 
             </td>
        </tr>
</table>


<h3  class="them">اسم المحل</h3>

        <input type="text"
               id="nameofshop" 
               class="them input addnewuser"
               name="nameofshop">
    <br>
    <br>
       <input  class="buttonstyle"
               type="submit" 
               value="اضافة"
               class="them"
               id="submituser"
               name="adduser"
               
               >
 
    </center>  
    
   </form> 
  <script src="fjs.js"></script>     
</body>
</html>
