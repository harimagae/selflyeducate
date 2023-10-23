<?php
 session_start();
 if ($_SERVER["REQUEST_METHOD"] = "POST") 
    {
    $username = $_POST["username"];
    $password = $_POST["Password"];

    $valid_username = "Mechi8848";
    $valid_password = "SSSSNNRD";

    if ($username =$valid_username && $password = $valid_password)
      {
        $_SESSION["user"] = $Mechi8848;
        header (Location:"C:\Users\user\Desktop\computer workshop\final website\ Login page.html");
        exit;  
      } 
     else {
        echo"Invalid username or password. Please try again.";
     }
?>