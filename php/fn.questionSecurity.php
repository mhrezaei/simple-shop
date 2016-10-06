<?php

function questionSecurity($code = 'y')
{
    if(!is_numeric($code))
    {
        $x = rand(1, 9);
        $y = rand(1, 9);
        $z = sha1(md5($x + $y));
        $_SESSION['qs'] = $z;
        $a = "$x + $y";
        return $a;
    }
    else
    {
        if(isset($_SESSION['qs']))
        {
            if($_SESSION['qs'] == sha1(md5($code)))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }
}

?>