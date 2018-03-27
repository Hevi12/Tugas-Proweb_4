<?php

session_start();
$user=$_POST["inEmail"];
$pass=$_POST["inPassword"];
//===========================
$dbuser="admin@gmail.com";
$dbpass= "admin";
//===========================
if($user == $dbuser && $pass == $dbpass){
    
?>
   <script>
       window.location="history.php";
    </script>
 <?php
}

else{
    if(isset($_SESSION["GAGAL"])){
        $_SESSION["GAGAL"]++;
    }
    else{
            $_SESSION["GAGAL"]=1;
        }
        header("location:index.php");
}



