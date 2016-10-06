<?php

function createThums($source, $final, $width, $height)
{
    $nw = $width;    //New Width
    $nh = $height;    //new Height

    $source = $source;    //Source file
    $dest = $final;    //Destination *Note you can add or change the name of the file here. ie. thumb_test.jpg

    $stype = explode(".", $source);
    $stype = $stype[count($stype)-1];

    $size = getimagesize($source);
    $w = $size[0];    //Images width
    $h = $size[1];    //Images height

    switch($stype) {
        case 'gif':
        $simg = imagecreatefromgif($source);
        break;
        case 'jpg':
        $simg = imagecreatefromjpeg($source);
        break;
        case 'png':
        $simg = imagecreatefrompng($source);
        break;
    }

    $dimg = imagecreatetruecolor($nw, $nh);
    $wm = $w/$nw;
    $hm = $h/$nh;
    $h_height = $nh/2;
    $w_height = $nw/2;
     
    if($w> $h) {
        $adjusted_width = $w / $hm;
        $half_width = $adjusted_width / 2;
        $int_width = $half_width - $w_height;
        imagecopyresampled($dimg,$simg,-$int_width,0,0,0,$adjusted_width,$nh,$w,$h);
    }
    elseif(($w <$h) || ($w == $h))
    {
        $adjusted_height = $h / $wm;
        $half_height = $adjusted_height / 2;
        $int_height = $half_height - $h_height;
        imagecopyresampled($dimg,$simg,0,-$int_height,0,0,$nw,$adjusted_height,$w,$h);
    }
    else
    {
        imagecopyresampled($dimg,$simg,0,0,0,0,$nw,$nh,$w,$h);
    }

    imagejpeg($dimg,$dest,100);
}


?>