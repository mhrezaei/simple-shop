<?php

function antiInject($Source)
{
    $Source = htmlspecialchars(trim($Source));
    if(!get_magic_quotes_gpc())
    {
        $Source = addslashes($Source);
    }
    return mysql_real_escape_string(stripslashes($Source));
}

?>