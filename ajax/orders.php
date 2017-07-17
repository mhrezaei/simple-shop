<?php
include '../config/config.php';

if (isset($_POST['tName']) and isset($_POST['tEmail']) and isset($_POST['tMobile']) and isset($_POST['tAddress']))
{
    $name = htmlCoding($_POST['tName']);
    $email = htmlCoding($_POST['tEmail']);
    $mobile = htmlCoding($_POST['tMobile']);
    $address = htmlCoding($_POST['tAddress']);
    $tracking = rand(111111, 999999);

    if(userBasketCheck())
    {
        $sql = "INSERT INTO `orders` (`id`, `name`, `email`, `mobile`, `address`, `status`, `price`, `bank_status`, `tracking`) VALUES (NULL, '" . $name . "', '" . $email . "', '" . $mobile . "', '" . $address . "', '1', '0', '0', '" . $tracking . "'); ";
        if (DatabaseHandler::Execute($sql))
        {
            $order = findOrders($tracking);
            $total_price = 0;
            $basket = userBasketData();
            foreach ($basket as $key => $value) {
                $product = findProduct($key);
                if ($product)
                {
                    $total = $product['price'] * $value;
                    $total_price += $total;
                    $basket_sql = "INSERT INTO `basket` (`id`, `order_id`, `product_id`, `count`, `price`, `total`) VALUES (NULL, '" . $order['id'] . "', '" . $product['id'] . "', '" . $value . "', '" . $product['price'] . "', '" . $total_price . "'); ";
                    DatabaseHandler::Execute($basket_sql);
                }

            }

            updateOneFieldFromTable('orders', 'price', $total_price, $order['id']);
            $data['price'] = $total_price;
            $data['tracking'] = $tracking;
            $data['status'] = 1;
            formatBasket();
        }
        else
        {
            $data['status'] = 2; // insert to database not success
        }
    }
    else
    {
        $data['status'] = 3;
    }

    echo json_encode($data);

}

?>