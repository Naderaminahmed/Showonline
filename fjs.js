/*appbar of all pages*/




document.write(`<div id="appbar_div11"class="them">
<center><h1 class="appbar_div1_c_h1 them">
Show Online</h1><button id="appbar_div1_c_buttonContact"  class=" them" >
 تواصل مع المشرف</button><button id="appbar_div1_c_buttonthem"
 class="them" >الثيم</button>
 <button id="appbar_div1_c_buttonList"class="them">
 القائمة</button></center></div>
 <br><br><br><br><br> <div id="appbar_divofList" class="them" dir="rtl">
 <center><a href="main.php"><p class=" appbar_div_c_paragraph them">
 الصفحه الرئيسية</p></a><a href="newuser.php">
 <p class=" appbar_div_c_paragraph them" id="admin_adduser_paragraph">
 اضافه مشترك جديد</p></a><a href="manage.php">
 <p class=" appbar_div_c_paragraph them"id= "admin_manage_paragraph">
 ادارة محتوئ المحل</p></a><a href="partition.html">
 <p class=" appbar_div_c_paragraph them">الاقسام</p>
 <a href="login.php"><p class=" appbar_div_c_paragraph them"id="appbar_div_c_paragraphlogin">
 تسجيل دخول</p>
 </a>  
   <a href="weare.html"><p class=" appbar_div_c_paragraph them">
   من نحن</p></a>
   </center></div>  <br> <br> <br>  `);

// الصلاحيات حق الادمن 

if(getcooki("username")==null){

document.getElementById("appbar_div_c_paragraphlogin").innerText="تسجيل الدخول";
  
  document.getElementById("admin_adduser_paragraph").style.display="none";
  document.getElementById("admin_manage_paragraph").style.display="none";



}



else {

  document.getElementById("appbar_div_c_paragraphlogin").innerText="تسجيل الخروج";
  
  document.getElementById("admin_adduser_paragraph").style.display="none";
  document.getElementById("admin_manage_paragraph").style.display="block";


  if(getcooki("username")=="admin")

  {
    document.getElementById("admin_adduser_paragraph").style.display="block";
  
  
  
  }
  

}


// اسكريب لعرض الكوكي حسب المفتاح
//start script

 function getcooki (name){
var cookarr = document.cookie.split(";") ;
for(var i = 0 ; i<cookarr.length;i++){

  var cookpbear = cookarr[i].split("=") ;
  if (name == cookpbear[0].trim() ){

    return decodeURIComponent (cookpbear[1]) ;
  }
}
return null ; 

 }
 //end script 


//end abbbar

 let x=false;   
 

appbar_div1_c_buttonList=document.getElementById("appbar_div1_c_buttonList"); 
thembutton=document.getElementById("appbar_div1_c_buttonthem"); 
appbar_div1_c_buttonList.onclick=fun1;
thembutton.onclick=them1;
them=document.getElementsByClassName("them");

color1="black";
color2="white";

document.cookie=`color=white;`;

console.log( typeof getcooki("color"));

//them1;

function them1(){

var xr=getcooki("color");
if(color1==xr){
color1="black";
color2="white";}

else{
    
  color1="white";  
  
  color2="black";
}

 for(i=0;i<them.length;i++){
 
them[i].style.color=color1;  
them[i].style.borderColor=color1;  
them[i].style.backgroundColor=
`${color2}`;   

}
   
    
    }

    let li1= 
document.getElementsByClassName("appbar_div_c_paragraph"); 
 
ul1=document.getElementById("appbar_divofList"); 

     function fun1(){
     x=!x;
         if(x===true){

ul1.style.display="block";
                       }
else{
         ul1.style.display="none";
         
        }
}

var error1=document.getElementById("error");

var input=document.getElementsByClassName("input");

function inputtirm(){
  let t=0;
  error1.innerHTML="خطا في كلمة المرور او اسم المستخدم";

}

function addpho(){
  
var div_of_img=document.getElementById("div_of_img");
if(div_of_img)
div_of_img.style.display="block";


}
 
     pho1 =document.getElementsByClassName("image");
 
  div1_paragraphdescripimg =document.getElementsByClassName("div1_paragraphdescripimg");
    
     function funonclick1(b){

              b=b-1; 
  

  if(pho1[b].style.display=="none")  
      {
     
  div1_paragraphdescripimg[b].style.display="none";
  pho1[b].style.display="block";
    
    }
    
    else{

   div1_paragraphdescripimg[b].style.display="block"; 

      
   pho1[b].style.display="none";
      
  
  }
          
          
}



//form follow page add new user

if(window.location=="http://localhost/webproject/newuser.php"){
 
check=document.getElementsByClassName("addnewuser");

checkradio=document.getElementsByClassName("newuser_radiobutton");

 var newuser_form=document.getElementById("newuser_form");
 
 newuser_form.addEventListener("submit",(e)=>{
  ch=0;
  
  while(ch<check.length){

    
if(check[ch].value)
  ch++;

else {

e.preventDefault();
break;
}

}   
while(chra<=checkradio.length){
if(!checkradio[chra].value)
if(checkradio.length==0)
e.preventDefault();
}

 
 });

}
//form in page log in 

if(window.location=="http://localhost/webproject/login.php"){
 
checklogin1=document.getElementsByClassName("checklogin");

 var formlogin=document.getElementById("formlogin");

 formlogin.addEventListener("submit",(e)=>{

 ch1=0;
   while(checklogin1.length){

    
if(checklogin1[ch1].value)
  ch1++;
else {

e.preventDefault();
break;
}

}


 
 });



}
 

function confirm_delete(){

document.getElementById("confirm_delete").style.display="block";


}

function cancele_omet(){

  document.getElementById("confirm_delete").style.display="none";


}


// form manage pages

 var manage_form=document.getElementById("manage_form");
 checklogin2=document.getElementsByClassName("checkmanage");

 if(window.location=="http://localhost/webproject/manage.php"){
 
  
//اذا في ملف تم اختيارة يتم تغير النص 

document.getElementById("input_file").onchange=()=>{
document.getElementById("file_label").innerText="تم اختيار الصورة";}

manage_form.addEventListener("submit",(e)=>{
ch2=0;
  while(ch2<checklogin2.length){

if(checklogin2[ch2].value){
  ch2++;


}
else {
e.preventDefault();
break;
}
   }
 
 });

 }//end if window.location