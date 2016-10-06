<?php

function EmailValidation($email)
{ 
    $email = htmlspecialchars(stripslashes(strip_tags($email)));
    if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$email))
    {
        /*$domain = explode('@', $email);
        $domain = $domain[1];
        if(!checkdnsrr($domain,'MX'))
        {
            //return false;
            return true;
        }*/
        return true;
    }
    else
    {
        return false;
    }
}

/*if(EmailValidation('narmafzar_tehran@yahoo.com')){
    echo 1;
}
else{
    echo 2;
}*/

?>