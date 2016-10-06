<?php

include '../php/fn.detect_lang.php';
include '../php/fn.validate_email.php';
include '../php/fn.nationalcode.php';
include '../config/config.php';
include '../php/fn.query.php';

if(isset($_POST['checkTxtName']))
{
    if(is_arabic($_POST['checkTxtName']))
    {
        echo 1;
    }
    else
    {
        echo 2;
    }
}
if(isset($_POST['checkTxtFatherName']))
{
    if(is_arabic($_POST['checkTxtFatherName']))
    {
        echo 1;
    }
    else
    {
        echo 2;
    }
}
if(isset($_POST['checktxtNationalCode']))
{
    if(NationalCode($_POST['checktxtNationalCode']) == '1')
    {
        echo 1;
    }
    else
    {
        echo 2;
    }
}
if(isset($_POST['checktxtPhone']))
{
    if(strlen($_POST['checktxtPhone']) == '11' && is_numeric($_POST['checktxtPhone']))
    {
        echo 1;
    }
    else
    {
        echo 2;
    }
}
if(isset($_POST['checktxtMobile']))
{
    if(strlen($_POST['checktxtMobile']) == '11' && is_numeric($_POST['checktxtMobile']))
    {
        echo 1;
    }
    else
    {
        echo 2;
    }
}
if(isset($_POST['checktxtCity']))
{
    if(is_arabic($_POST['checktxtCity']))
    {
        echo 1;
    }
    else
    {
        echo 2;
    }
}
if(isset($_POST['checktxtAddress']))
{
    if(is_arabic($_POST['checktxtAddress']))
    {
        echo 1;
    }
    else
    {
        echo 2;
    }
}
if(isset($_POST['checktxtPostalCode']))
{
    if(strlen($_POST['checktxtPostalCode']) == '10' && is_numeric($_POST['checktxtPostalCode']))
    {
        echo 1;
    }
    else
    {
        echo 2;
    }
}
if(isset($_POST['checktxtEmail']))
{
    if(checkNewUser($_POST['checktxtEmail']))
    {
        if(EmailValidation($_POST['checktxtEmail']))
        {
            echo 1;
        }
        else
        {
            echo 2;
        }
    }
    else
    {
        echo 3;
    }
}
if(isset($_POST['checktxtUserName']))
{
    if(checkNewUserName($_POST['checktxtUserName']))
    {
        if(!is_arabic($_POST['checktxtUserName']) && strlen($_POST['checktxtUserName']) > 4)
        {
            echo 1;
        }
        else
        {
            echo 2;
        }
    }
    else
    {
        echo 3;
    }
}

?>