<?php

session_start();
include 'php/fn.antiInjection.php';
include 'php/fn.query.php';
include 'config/config.php';

if(isset($_POST['txtUserName']))
{
    if($_GET['action'] == 'Login')
    {
        $user = antiInject($_POST['txtUserName']);
        $pass = sha1(md5(antiInject($_POST['txtPassWord'])));
        $result = checkLogin($user, $pass);
        if($result)
        {
            $_SESSION['user']['i'] = $result;
            $_SESSION['user']['u'] = md5($user);
            if(isset($_GET['urlBack']))
            {
                $url = $_GET['urlBack'];
            }
            else
            {
                $url = 'profile.php';
            }
            header("location: $url");
        }
        else
        {
            $url = 'index.php?login=false';
            header("location: $url");
        }
    }
    else
    {
        header("location: index.php");
    }
}
else
{
    header("location: index.php");
}

?>