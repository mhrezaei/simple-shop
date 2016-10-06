<?php

################# Add View News counter ################# 
function addViewNewsCounter($nid)
{
    $news = DatabaseHandler::GetRow("SELECT * FROM `news` WHERE `id` = " . $nid . " AND `status` = 1 ;");
    if($news)
    {
        $news['view'] = $news['view'] + 1;
        DatabaseHandler::Execute("UPDATE `news` SET `view` = " . $news['view'] . " WHERE `news`.`id` = " . $nid);
    }
}
################# Add View News counter ################# 


################# Add View Plan counter ################# 
function addViewPlanCounter($pid)
{
    $plans = DatabaseHandler::GetRow("SELECT * FROM `plans` WHERE `id` = " . $pid . " ;");
    if($plans)
    {
        $plans['view'] = $plans['view'] + 1;
        DatabaseHandler::Execute("UPDATE `plans` SET `view` = " . $plans['view'] . " WHERE `plans`.`id` = " . $pid);
    }
}
################# Add View Plan counter ################# 

######################## randnum ########################
function randnum()
{
    $first = date('ym');
    $last = '';
    for($i = 1; $i <= 6; $i++)
    {
        $last .= rand(0,9);
    }
    $num = $first . $last;
    
    return $num;
}
######################## randnum ########################

######################## Get Gallery With CatID And Gfromid With Status And Count ########################
function getGalleryWithCatIDAndGfromidWithStatusAndCount($catID, $gFromID, $status, $start, $end)
{
    $gallery = DatabaseHandler::GetAll("SELECT * FROM `gallery` WHERE `catID` = $catID AND `gForID` = $gFromID AND `status` = $status LIMIT $start , $end ;");
    if($gallery)
    {
        return $gallery;
    }
    else
    {
        return false;
    }
}
######################## Get Gallery With CatID And Gfromid With Count ########################

######################## Transactions One Field Update ########################
function transactionsOneFieldUpdate($id, $field, $value)
{
    $update = DatabaseHandler::Execute("UPDATE `transactions` SET `" . $field . "` = '" . $value . "' WHERE `transactions`.`id` = " . $id . " ;");    
    if($update)
    {
        return true;
    }
    else
    {
        return false;
    }
}
######################## Transactions One Field Update ########################

######################## Search RefID From Transaction ########################
function searchRefIDFromTransaction($refID)
{
    $trans = DatabaseHandler::GetAll("SELECT * FROM `transactions` WHERE `refId` LIKE '" . $refID . "' LIMIT 0 , 30 ;");
    if($trans)
    {
        return true;
    }
    else
    {
        return false;
    }
}
######################## Search RefID From Transaction ########################

######################## Get Transaction With RandomID ########################
function getTransactionWithRandomID($random)
{
    $trans = DatabaseHandler::GetRow("SELECT * FROM `transactions` WHERE `randomCode` LIKE '" . $random . "' ;");
    if($trans)
    {
        return $trans;
    }
    else
    {
        return false;
    }
}
######################## Get Transaction With RandomID ########################

######################## gPureText ########################
function gPureText( $Text , $Style = "Text" , $Switches=NULL  ) 
{
    $Style = strtolower($Style) ; 
    $Text = str_replace( "||"  , "AAA" , $Text ) ; 
    
    
    if(!strstr($Switches,"E")) {
        $Text=str_replace("1","غ±",$Text);
        $Text=str_replace("2","غ²",$Text);
        $Text=str_replace("3","غ³",$Text);
        $Text=str_replace("4","غ´",$Text);
        $Text=str_replace("5","غµ",$Text);
        $Text=str_replace("6","غ¶",$Text);
        $Text=str_replace("7","غ·",$Text);
        $Text=str_replace("8","غ¸",$Text);
        $Text=str_replace("9","غ¹",$Text);
        $Text=str_replace("0","غ°",$Text);    
    }
    
    
    switch( $Style ) {
        case "number" :
            $Text=str_replace("غ±","1",$Text);
            $Text=str_replace("غ²","2",$Text);
            $Text=str_replace("غ³","3",$Text);
            $Text=str_replace("غ´","4",$Text);
            $Text=str_replace("غµ","5",$Text);
            $Text=str_replace("غ¶","6",$Text);
            $Text=str_replace("غ·","7",$Text);
            $Text=str_replace("غ¸","8",$Text);
            $Text=str_replace("غ¹","9",$Text);
            $Text=str_replace("غ°","0",$Text);    
            $Text+=0 ; 
            break ; 
                        
        case "convert" : 
            $Text = str_replace( "'" , NULL , $Text) ; 
            //$Text = ereg_replace( "'" , NULL , $Text) ; 
            $Text = str_replace( "==" , NULL , $Text) ; 
            //$Text = ereg_replace( "==" , NULL , $Text) ; 
            $Text = str_replace(" 
" , ".." , $Text ) ; //Contains somthing. it is not empty

        case "users" :
            $Text = strip_tags($Text) ;  
            $Text = trim($Text) ; 
                        
        case "special" :
            $Text = str_replace( "[\x5c\]" , NULL , $Text) ; 
            //$Text = ereg_replace( "[\x5c\]" , NULL , $Text) ; 
            $Text = str_replace( "|"  , "â€Œâ€Œ"       , $Text ) ; // contains something. it is not empty
            $Text = str_replace( "ظٹ" , "غŒ" , $Text ) ; 
            $Text = str_replace( "ظƒ"  , "ع©" , $Text ) ;
            $Text = str_replace( "آ¬"  , "â€ڈ" , $Text ) ;
            break ;
            
        case "comment" :
        case "comments":
            $Text = str_replace( "==" , " " , $Text ) ; 
            $Text = str_replace( "|"  , "â€Œâ€Œ"       , $Text ) ; // contains something. it is not empty
            break ;
                
        case "rss"      :
            $Text = str_replace( "|"  , "â€Œâ€ڈ"       , $Text ) ; // contains something. it is not empty
            $Text = str_replace( "{{" , "<p>"    , $Text ) ; 
            $Text = str_replace( "}}" , "</p>"   , $Text ) ; 
            $Text = str_replace( "{!" , "<p>",$Text) ; 
            $Text = str_replace( "!}" , "</p>" , $Text ) ; 
            $Text = str_replace( "{#" , "<p>"    , $Text ) ; 
            $Text = str_replace( "#}" , "</p>"   , $Text ) ; 
            $Text = str_replace( "{L" , "<div align='left' dir='ltr'>"    , $Text ) ; 
            $Text = str_replace( "L}" , "</div>"   , $Text ) ; 
            $Text = str_replace( "{_" , "<i>"    , $Text ) ; 
            $Text = str_replace( "_}" , "</i>"   , $Text ) ; 
            $Text = str_replace( "{+" , "<b>"    , $Text ) ; 
            $Text = str_replace( "+}" , "</b>"   , $Text ) ; 
            $Text = str_replace( "{" , "<div><b>"    , $Text ) ; 
            $Text = str_replace( "}" , "</b></div>"   , $Text ) ; 
            $Text = str_replace( "\n" , "<br />"   , $Text ) ;  
            $Text = str_replace(" 
" , "<br />" , $Text ) ; //Contains somthing. it is not empty
            break ; 
        
        case "body"      :
            $Text = str_replace( "*"  , "ظ­"   , $Text ) ; 
            $Text = str_replace( "-"  , "ظ€"   , $Text ) ; 
            $Text = str_replace( "|"  , "â€ڈâ€Œ"       , $Text ) ; // contains something. it is not empty
            $Text = str_replace( "{{" , "<br><font color='red' style='font-size:11px;line-height:1.6'><b>"    , $Text ) ; 
            $Text = str_replace( "}}" , "</b></font>"   , $Text ) ; 
            $Text = str_replace( "{!" , "<table width='90%' border='0' cellpadding='0' cellspacing='0' ><tr><td style='text-align:justify;font-size:12px;line-height:1.7'>",$Text) ; 
            $Text = str_replace( "!}" , "</td></tr></table>" , $Text ) ; 
            $Text = str_replace( "{#" , "<div align='center'>"    , $Text ) ; 
            $Text = str_replace( "#}" , "</div>"   , $Text ) ; 
            $Text = str_replace( "{L" , "<div align='left' dir='ltr'>"    , $Text ) ; 
            $Text = str_replace( "L}" , "</div>"   , $Text ) ; 
            $Text = str_replace( "{_" , "<i>"    , $Text ) ; 
            $Text = str_replace( "_}" , "</i>"   , $Text ) ; 
            $Text = str_replace( "{+" , "<b><font style='font-size:11px'>"    , $Text ) ; 
            $Text = str_replace( "+}" , "</font></b>"   , $Text ) ; 
            $Text = str_replace( "{" , "<font color='CC3300' style='font-size:11px'><b>"    , $Text ) ; 
            $Text = str_replace( "}" , "</b></font>"   , $Text ) ; 
            $Text = str_replace( "\n\n" , "<p>"   , $Text ) ; 
            $Text = str_replace( "\n" , "<div style='line-height:0.8'>&nbsp;</div>"   , $Text ) ;  
            $Text = str_replace(" 
" , "<p>" , $Text ) ; //Contains somthing. it is not empty
            break ; 
                
                
        case "text"      :
            $Text = str_replace( "*"  , "ظ­"   , $Text ) ; 
            $Text = str_replace( "-"  , "ظ€"   , $Text ) ; 
            $Text = str_replace( "|"  , "â€Œâ€ڈ"       , $Text ) ; // contains something. it is not empty
            $Text = str_replace( "{L" , "<div align='left' dir='ltr'>"    , $Text ) ; 
            $Text = str_replace( "L}" , "</div>"   , $Text ) ; 
            $Text = str_replace( "{_" , "<i>"    , $Text ) ; 
            $Text = str_replace( "_}" , "</i>"   , $Text ) ; 
            $Text = str_replace( "{+" , "<b><font style='font-size:11px'>"    , $Text ) ; 
            $Text = str_replace( "+}" , "</font></b>"   , $Text ) ; 
            $Text = str_replace( "\n\n" , "<p>"   , $Text ) ; 
            $Text = str_replace( "\n" , "<br />"   , $Text ) ;  
            $Text = str_replace(" 
" , "<p>" , $Text ) ; //Contains somthing. it is not empty
            break ; 
        
        case "notice"    : 
            $Text = str_replace( "|" , "â€ڈâ€Œ" , $Text ) ; 
            $Text = str_replace( "*" , "<br><font color='#990066'>ظ­</font> " , $Text ) ; 
//                    , "<p></p><img src='Images/Check.gif' border='0' />" , $Text ) ;
            break ;
    }

    $Text = str_replace( "AAA"  , "|"       , $Text ) ; 
    return trim($Text) ; 
}

######################## gPureText ########################

######################## gCharLimit ########################
function gCharLimit($String , $Length)
{
    if(strlen($String) > $Length ) {
        $String = substr(trim($String),0,$Length); 
        $String = substr($String,0,strlen($String)-strpos(strrev($String)," "));
        $String = $String.'...';
    }
    return $String ; 
}
######################## gCharLimit ########################

######################## Get One Plan And News ########################
function getOnePlanAndNews($id, $cat = 1, $haveStatus = 1, $status = 1)
{
    // $cat = 1 => news
    // $cat = 2 => paln
    // $havestatus = 1 => yes || 2 => no
    if($haveStatus == 1)
    {
        $hStatus = " AND `status` = $status ;";
    }
    else
    {
        $hStatus = " ;";
    }
    //////////////////////////////////
    if($cat == 1)
    {
        $table = "`news`";
    }
    else
    {
        $table = "`plans`";
    }
    //////////////////////////////////
    $result = DatabaseHandler::GetRow("SELECT * FROM $table WHERE `id` = $id $hStatus");
    if($result)
    {
        return $result;
    }
    else
    {
        return false;
    }
}
######################## Get One Plan And News ########################

######################## Check Users For Login To Admin ########################
function checkUserForLoginToAdmin($user, $pass)
{
    $user = DatabaseHandler::GetRow("SELECT * FROM `users` WHERE `userName` LIKE '" . $user . "' AND `passWord` LIKE '" . sha1(md5($pass)) . "' LIMIT 0 , 30");
    if($user)
    {
        return $user;
    }
    else
    {
        return false;
    }
}
######################## Check Users For Login To Admin ########################

######################## Check Users Accesss ########################
function checkUserAccess($accessOne = 'admin', $uid = 0)
{
    if(isset($_SESSION['user']['id']))
    {
        $u = $_SESSION['user']['id'];
    }
    else
    {
        $u = $uid;
    }
    $access = DatabaseHandler::GetRow("SELECT * FROM `useraccess` WHERE `uID` = " . $u . " AND `title` LIKE '" . $accessOne . "' AND `status` = 1 LIMIT 0 , 30");
    if($access)
    {
        return true;
    }
    else
    {
        return false;
    }
}
######################## Check Users Accesss ########################

######################## Get One User ########################
function getOneUser($id)
{
    $user = DatabaseHandler::GetRow("SELECT * FROM `users` WHERE `id` = $id LIMIT 0 , 30");
    if($user)
    {
        return $user;
    }
    else
    {
        return true;
    }
}
######################## Get One User ########################

######################## Set User Session ########################
function setUserSession($uID = 1, $uPass = 1, $status = 1, $time = 0)
{
    if($status == 1)
    {
        $_SESSION['user']['id'] = $uID;
        $_SESSION['user']['key'] = md5($uPass);
        if($time == 0)
        {
            $_SESSION['user']['time'] = time() + 1800;
        }
        else
        {
            $_SESSION['user']['time'] = $time;
        }
        return true;
    }
    elseif($status == 2)
    {
        if(isset($_SESSION['user']))
        {
            if(isset($_SESSION['user']['id']))
            {
                $user = getOneUser($_SESSION['user']['id']);
                if($user)
                {
                    if(md5($user['passWord']) == $_SESSION['user']['key'])
                    {
                        if($_SESSION['user']['time'] > time())
                        {
                            $_SESSION['user']['time'] = time() + 1800;
                            return true;
                        }
                        else
                        {
                            unset($_SESSION['user']);
                            return false;
                        }
                    }
                    else
                    {
                        unset($_SESSION['user']);
                        return false;
                    }
                }
                else
                {
                    unset($_SESSION['user']);
                    return false;
                }
            }
            else
            {
                unset($_SESSION['user']);
                return false;
            }
        }
        else
        {
            unset($_SESSION['user']);
            return false;
        }
    }
}
######################## Set User Session ########################

######################## Set User logOut ########################
function setUsetLogOut()
{
    unset($_SESSION['user']);
}
######################## Set User logOut ########################

######################## Html Coding ########################
function htmlCoding($input, $type = 1)
{
    if($type == '1')
    {
        $input = str_replace( "ي" , "ی" , $input ) ; 
        $input = str_replace( "ك"  , "ک" , $input ) ;
        $input = str_replace( "¬"  , "‏" , $input ) ;
        return htmlspecialchars($input ,ENT_QUOTES);
    }
    else
    {
        return htmlspecialchars_decode($input, ENT_QUOTES);
    }
}
######################## Html Coding ########################

######################## Get All News ########################
function getAllNewsWithstatus($status)
{
    $news = DatabaseHandler::GetAll("SELECT * FROM `news` WHERE `status` = $status ORDER BY `id` DESC;");
    if($news)
    {
        return $news;
    }
    else
    {
        return false;
    }
}
######################## Get All News ########################

######################## Get All Plan ########################
function getAllPlanWithstatus($status)
{
    $plans = DatabaseHandler::GetAll("SELECT * FROM `plans` WHERE `status` = $status ORDER BY `id` DESC;");
    if($plans)
    {
        return $plans;
    }
    else
    {
        return false;
    }
}
######################## Get All Plan ########################

######################## Update One Field From Table ########################
function updateOneFieldFromTable($table, $field, $value, $id)
{
    $result = DatabaseHandler::Execute("UPDATE `$table` SET `$field` = '" . $value . "' WHERE `id` = $id ;");
    if($result)
    {
        return true;
    }
    else
    {
        return false;
    }
    
}
######################## Update One Field From Table ########################









?>