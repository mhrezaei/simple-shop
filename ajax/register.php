<?php

if(isset($_POST['txtName']))
{
    include '../php/fn.detect_lang.php';
    include '../php/fn.validate_email.php';
    include '../php/fn.nationalcode.php';
    include '../php/aPdate.php';
    include '../config/config.php';
    include '../php/fn.query.php';
    
    $txtName = $_POST['txtName'];
    $txtFatherName = $_POST['txtFatherName'];
    $txtNationalCode = $_POST['txtNationalCode'];
    $CbSe = $_POST['CbSe'];
    $CbDay = $_POST['CbDay'];
    $CbMonth = $_POST['CbMonth'];
    $CbYear = $_POST['CbYear'];
    $txtPhone = $_POST['txtPhone'];
    $txtMobile = $_POST['txtMobile'];
    $CbState = $_POST['CbState'];
    $txtCity = $_POST['txtCity'];
    $txtAddress = $_POST['txtAddress'];
    $txtPostalCode = $_POST['txtPostalCode'];
    $txtJob = $_POST['txtJob'];
    $txtEducation = $_POST['txtEducation'];
    $txtCourse = $_POST['txtCourse'];
    $txtEmail = $_POST['txtEmail'];
    $txtUserName = $_POST['txtUserName'];
    $txtPassWord = $_POST['txtPassWord'];
    $txtVerifyPassword = $_POST['txtVerifyPassword'];
    
    if(is_arabic($txtName) && is_arabic($txtFatherName) && NationalCode($txtNationalCode) == '1' && is_numeric($txtPhone) && strlen($txtPhone) == '11' && is_numeric($txtMobile) && strlen($txtMobile) == '11' && is_arabic($txtCity) && is_arabic($txtAddress) && is_numeric($txtPostalCode) && strlen($txtPostalCode) == '10' && EmailValidation($txtEmail) && !is_arabic($txtUserName) && $txtPassWord == $txtVerifyPassword)
    {
        if(checkNewUser($txtEmail))
        {
            $date = jalali_to_gregorian($CbYear, $CbMonth, $CbDay);
            $date = mktime(0, 0, 0, $date[1], $date[2], $date['0']);
            $txtPassWord = sha1(md5($txtPassWord));
            if(insertUser($txtName, $txtFatherName, $txtNationalCode, $CbSe, $date, $txtPhone, $txtMobile, $CbState, $txtCity, $txtAddress, $txtPostalCode, $txtJob, $txtEducation, $txtCourse, $txtEmail, $txtUserName, $txtPassWord, '1'))
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
    else
    {
        echo 4;
    }
}

if(isset($_POST['txtComments']))
{
    include '../php/fn.validate_email.php';
    include '../config/config.php';
    include '../php/fn.query.php';
    
    $txtNames = $_POST['txtNames'];
    $txtEmails = $_POST['txtEmails'];
    $txtTitles = $_POST['txtTitles'];
    $txtComments = $_POST['txtComments'];
    
    if(strlen($txtNames) > 3 && EmailValidation($txtEmails) && strlen($txtTitles) > 3 && strlen($txtComments) > 10)
    {
        if(insertComment($txtNames, $txtEmails, $txtTitles, $txtComments))
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