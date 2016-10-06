<?php

function randomString($length=20 , $characters="1234567890abcdefghijklmnopqrstuvwxyz")
{
$result = NULL ;
while(strlen($result) < $length) {
       $result .= $characters[mt_rand(0, strlen($characters))];
}

return $result;

}

echo randomString(15);

?>
