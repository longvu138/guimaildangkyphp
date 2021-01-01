<?php

if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    $email=trim($_GET['email']);
    echo $email;
    $hash=trim($_GET['hash']);
    echo $hash;
    require_once "config.php";
    $sql= "SELECT * FROM users WHERE email='".$email."' and activation_code='".$hash."' and status='0'";
    echo $sql;
    $search = mysqli_query ($conn,$sql); 

    $row=mysqli_num_rows($search);
   echo $row;

 
    if($row>0)
    {
        mysqli_query($conn,"UPDATE users SET status='1' WHERE email='".$email."' and activation_code='".$hash."' and status='0'");
        echo 'active thành công';
    }
    else{

    }
}else{
   
}
?>