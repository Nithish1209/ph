<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        .form{
            background-color:lightblue;
    margin:40px;
    height:200px;
    width: 290px;
    padding:12px;

        }
        </style>

</head>
<body bgcolor="pink">
    <center> <div class="form"> 
     <?php 
     echo "<center><H3>ENTER YOUR DETAILS</H3> </center>";
     
     ?> 
    <center>   <form action="form2.php"  method="post"> 

       NAME:  <input type=" text"  name="name"><br><br> 

       NUMBER: <input type="number"   name="num"><br><br>   
         <input type="submit" value="send">  
      </form></center>
</div></center>
   
 




</body>
</html> 



     