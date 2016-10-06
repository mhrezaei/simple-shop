<?php

session_start();
include 'php/fn.query.php';
include 'config/config.php';
if(isset($_SESSION['user']))
{
    $user = userInfoFromId($_SESSION['user']['i']);
    if($user)
    {
        if(md5($user['userName']) == $_SESSION['user']['u'])
        {
            echo '<pre>';
            print_r($user);
            echo '</pre>';
        }
        else
        {
            unset($_SESSION['user']);
            header("location: login.php?action=doLogin");
        }
    }
    else
    {
        unset($_SESSION['user']);
        header("location: login.php?action=doLogin");
    }
}
else
{
    header("location: index.php");
}

?>