<?php
          $n = $_POST['name'];
          $p = $_POST['num'];
         echo " hello $n <br>";  
         echo " your phone numer :$p";

         echo "<br>";
         echo "<br>";


         $h = "localhost";
         $u = "root";
         $p = "";
         $dn = "sample";
         if(!$con = mysqli_connect($h,$u,$p,$dn))
         {
            die("fail to connect!");
         }
         else{
            echo " mysql is connected";
         }

         
$sql= "insert into dt values('$n','$p')";



         if(mysqli_query($con,$sql)){
            echo "<br> table values inserted";
         }
         else{

            echo "error ";
         }
 ?> 
  


