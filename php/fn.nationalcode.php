<?php

function NationalCode($codes)
{
    if(strlen($codes) == '10' && is_numeric($codes))
    {
        $code = str_split($codes);
        $err ;
        foreach($code as $k => $v)
        {
            if($code[0] <> $v)
            {
                  $err = 1;
                  break;
            }
            else
            {
                $err = 2;
            }
        }
        if($err == 1)
        {
            $valid = 0;
            $jumper = 10;
            for($i = 0; $i <= 8; $i++)
            {
                $valid += $code[$i] * $jumper;
                --$jumper;
            }
            $valid = $valid % 11;
            if($valid >= 0 && $valid < 2)
            {
                if($valid == $code['9'])
                {
                    $msg = 1; // national code valid
                }
                else
                {
                    $msg = 2; // national code invalid
                }
            }
            else
            {
                $valid = 11 - $valid;
                if($valid == $code['9'])
                {
                    $msg = 1; // national code valid
                }
                else
                {
                    $msg = 2; // national code invalid
                }
            }
        }
        else
        {
            $msg = 3; // number not be equal
        }
    }
    else
    {
        $msg = 4; // not numbet AND not 10 char
    }
    return $msg;
}


?>