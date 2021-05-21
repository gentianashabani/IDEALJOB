<?php
$myemail="tina@dermaku.com";
$mypass="12345";

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $pass=$_POST['password'];
    if($email==$myemail and $pass==$mypass){
        if(isset($_POST['remember']) ){
            setcookie('email', $email, time()+60*60*7);
            setcookie('pass', $pass, time()+60*60*7);
        }
            session_start();
            $_SESSION['email']=$email;
            header("location: index.php");
    }else{
        echo "Email or Password is invalid. <br> click here to <a href='singup.php'> Create account </a>";
    }
}
    else{
        header("location: login.php");
    }
?>