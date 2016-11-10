<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select name, Role_id from shopping_user where identification_number = '$user_check'");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['name'];
   $_SESSION['Role_id'] = $row['Role_id']; 
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>