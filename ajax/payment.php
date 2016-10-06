<?php

include '../config/config.php';

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['price']) && isset($_POST['pid']))
{
    if(strlen(($_POST['name'] + 0)) < 1)
    {
        $name = '-';
    }
    else
    {
        $name = $_POST['name'];
    }
    
    if(strlen(($_POST['email'] + 0)) < 1)
    {
        $email = '-';
    }
    else
    {
        $email = $_POST['email'];
    }
    
    if(strlen(($_POST['mobile'] + 0)) < 1)
    {
        $mobile = '-';
    }
    else
    {
        $mobile = $_POST['mobile'];
    }
    
    if(($_POST['price'] + 0) > 100)
    {
        $price = $_POST['price'];
		$price = gPureText($price, 'number');
		$price = $price . 0;
        $pid = $_POST['pid'];
        $random = randnum();
        $time = time();
        $trans = DatabaseHandler::Execute("INSERT INTO `transactions` (
                                                                        `id` ,
                                                                        `name` ,
                                                                        `tel` ,
                                                                        `email` ,
                                                                        `price` ,
                                                                        `pid` ,
                                                                        `randomCode` ,
                                                                        `refId` ,
                                                                        `paymentStatus` ,
                                                                        `transStatus` ,
                                                                        `time` ,
                                                                        `res1` ,
                                                                        `res2` ,
                                                                        `res3`
                                                                        )
                                                                        VALUES (
                                                                        NULL , '$name', '$mobile', '$email', '$price', '$pid', '$random', '0', '1', '1', '$time', '', '', ''
                                                                        );

                                                                        ");
        if($trans)
        {
            echo $random;
        }
        else
        {
            echo -2;
        }
    }
    else
    {
        echo -1;
        exit;
    }
}

if(isset($_POST['tid']) && isset($_POST['state']) && isset($_POST['resnum']) && isset($_POST['mid']) && isset($_POST['refnum']))
{
	require_once(SITE_ROOT . '/include/nusoap.php');	
	$tid = $_POST['tid'];
	$state = $_POST['state'];
	$resnum = $_POST['resnum'];
	$mid = $_POST['mid'];
	$refnum = $_POST['refnum'];
	if($tid == $resnum)
	{
		$transaction = getTransactionWithRandomID($resnum);
		if($state == 'OK')
		{
			$transaction = getTransactionWithRandomID($resnum);
			if($transaction)
			{
				if(!searchRefIDFromTransaction($refnum))
				{
					if(transactionsOneFieldUpdate($transaction['id'], 'refId', $refnum))
					{
						//wsdl
						$wsdlURL = "https://acquirer.samanepay.com/payments/referencepayment.asmx?WSDL";
						if(extension_loaded('soap'))
						{
							$soap = new nusoap_client($wsdlURL, 'wsdl');
						}
						else
						{
							$soap = new SoapClient($wsdlURL, "wsdl");
						}
						$soapProxy = $soap->getProxy();
						$res = $soapProxy->VerifyTransaction($refnum, $mid);
						if($transaction['price'] == $res)
						{
							if(transactionsOneFieldUpdate($transaction['id'], 'paymentStatus', 2) && transactionsOneFieldUpdate($transaction['id'], 'transStatus', 2))
							{
								echo 8;
								// pardakht ba movafaghiat anjam shod.
							}
							else
							{
								echo 7;
								// dar sabte nahaee etela'at moshkeli be vojood amade ast
							}
						}
						else
						{
							echo 6;
							// mablaghe vared shode be dorosti vared nashode
						}
					}
					else
					{
						echo 5;
						// dar sabte etela'at moshkeli be vojood amade ast
					}
				}
				else
				{
					transactionsOneFieldUpdate($transaction['id'], 'paymentStatus', 3);
					transactionsOneFieldUpdate($transaction['id'], 'transStatus', 3);
					echo 4;
					// in refnum ghablan estefadeh shode ast
				}
			}
			else
			{
				echo 3;
				// transaction yafte nashod
			}
		}
		else
		{
			transactionsOneFieldUpdate($transaction['id'], 'paymentStatus', 3);
			transactionsOneFieldUpdate($transaction['id'], 'transStatus', 3);
			echo 2;
			//pardakht be dorosti anjam nashode ast.
		}
	}
	else
	{
		echo 1;
		// tid va resnum yeki nemibashad
	}
}

?>