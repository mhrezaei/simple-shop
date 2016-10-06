<?php

function insertUser($name, $fatherName, $nationalCode, $sex, $birthDay, $tel, $mobile, $state, $city, $address, $postalCode, $job, $education, $course, $email, $userName, $passWord, $status)
{
    mysql_query('SET NAMES UTF8;');
    $query = mysql_query("INSERT INTO `users` (
                                                `id` ,
                                                `name` ,
                                                `fatherName` ,
                                                `nationalCode` ,
                                                `sex` ,
                                                `birthDay` ,
                                                `tel` ,
                                                `mobile` ,
                                                `state` ,
                                                `city` ,
                                                `address` ,
                                                `postalCode` ,
                                                `job` ,
                                                `education` ,
                                                `cours` ,
                                                `email` ,
                                                `userName` ,
                                                `passWord` ,
                                                `status`
                                                )
                                                VALUES (
                                                NULL , '$name', '$fatherName', '$nationalCode', '$sex', '$birthDay', '$tel', '$mobile', '$state', '$city', '$address', '$postalCode', '$job', '$education', '$course', '$email', '$userName', '$passWord', '$status'
                                                );");
    if($query)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function checkNewUser($email)
{
    mysql_query('SET NAMES UTF8;');
    $query = mysql_query("SELECT * FROM `users` WHERE `email` = '$email'");
    if(mysql_num_rows($query) > 0)
    {
        return false;
    }
    else
    {
        return true;
    }
}

function checkNewUserName($userName)
{
    mysql_query('SET NAMES UTF8;');
    $query = mysql_query("SELECT * FROM `users` WHERE `userName` = '$userName'");
    if(mysql_num_rows($query) > 0)
    {
        return false;
    }
    else
    {
        return true;
    }
}

function insertComment($name, $email, $title, $comment)
{
    $query = DatabaseHandler::Execute("INSERT INTO `comments` (
                                                    `id` ,
                                                    `name` ,
                                                    `email` ,
                                                    `title` ,
                                                    `comment` ,
                                                    `status`,
                                                    `time`,
                                                    `repTime`,
                                                    `repText`
                                                    )
                                                    VALUES (
                                                    NULL , '$name', '$email', '$title', '$comment', '1', '" . time() . "', '', ''
                                                    );");
    if($query) return true;
    return false;
}

function checkLogin($username, $password)
{
    mysql_query('SET NAMES UTF8;');
    $query = mysql_query("SELECT * FROM `users` WHERE `userName` = '$username' AND `passWord` = '$password'");
    if(mysql_num_rows($query) > 0)
    {
        return mysql_result($query, 0, 'id');
    }
    else
    {
        return false;
    }
}

function userInfoFromId($id)
{
    mysql_query('SET NAMES UTF8;');
    $query = mysql_query("SELECT * FROM `users` WHERE `id` =$id");
    if(mysql_num_rows($query) > 0)
    {
        $query = mysql_fetch_assoc($query);
        return $query;
    }
    return false;
}
?>