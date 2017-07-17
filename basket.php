<?php
include_once 'config/config.php';

if (isset($_GET['action']) and isset($_GET['id']))
{
    $action = $_GET['action'];
    $id = $_GET['id'];

    if (is_numeric($id) and $id > 0)
    {
        userBasketManage($action, $id, 1);
        header('location: basket');
    }
}

include 'header.php';

include 'slider.php';

$basket = userBasketData();

?>

<style>
    .table>tbody>tr>td, .table>tfoot>tr>td{
        vertical-align: middle;
    }
    @media screen and (max-width: 600px) {
        table#cart tbody td .form-control{
            width:20%;
            display: inline !important;
        }
        .actions .btn{
            width:36%;
            margin:1.5em 0;
        }

        .actions .btn-info{
            float:left;
        }
        .actions .btn-danger{
            float:right;
        }

        table#cart thead { display: none; }
        table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
        table#cart tbody tr td:first-child { background: #333; color: #fff; }
        table#cart tbody td:before {
            content: attr(data-th); font-weight: bold;
            display: inline-block; width: 8rem;
        }



        table#cart tfoot td{display:block; }
        table#cart tfoot td .btn{display:block;}

    }
</style>

<!--<div class="container" style="margin-top: 20px;">-->
<!---->
<!--    <div class="col-md-3" style="border: 1px solid red"></div>-->
<!--    <div class="col-md-9" style="border: 1px solid black"></div>-->
<!---->
<!--</div>-->

<div class="container" style="margin-top: 20px;">
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">سبد خرید</h3>
            </div>
            <div class="panel-body">
                <?php
                if ($basket){
                ?>
                <table id="cart" class="table table-hover table-condensed" style="direction: rtl;">
                    <thead>
                    <tr>
                        <th style="width:50%; text-align: right;">محصول</th>
                        <th style="width:10%">قیمت (تومان)</th>
                        <th style="width:8%">تعداد</th>
                        <th style="width:22%" class="text-center">مجموع (تومان)</th>
                        <th style="width:10%"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $total_price = 0;
                    foreach ($basket as $key => $value){
                        $product = findProduct($key);
                        if ($product){
                    ?>
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-10" style="padding: 10px; padding-right: 40px;">
                                    <p><?php echo $product['title']; ?></p>
                                </div>
                                <div class="col-sm-2 hidden-xs"><img src="<?php echo $uri . '/' . $product['image']; ?>" alt="..." class="img-responsive" style="max-width: 100px;"/></div>
                            </div>
                        </td>
                        <td data-th="Price"><?php echo number_format($product['price']); ?></td>
                        <td data-th="Quantity" style="text-align: center;">
<!--                            <input type="number" class="form-control text-center" value="--><?php //echo $value; ?><!--">-->
                            <?php echo $value; ?>
                        </td>
                        <td data-th="Subtotal" class="text-center"><?php $total = $product['price'] * $value; $total_price += $total; echo number_format($total); ?></td>
                        <td class="actions" data-th="">
                            <a href="basket?action=add&id=<?php echo $product['id']; ?>" class="btn btn-success btn-sm" style="padding: 4px; padding-right: 0px;"><i class="glyphicon glyphicon-plus"></i></a>
                            <a href="basket?action=remove&id=<?php echo $product['id']; ?>" class="btn btn-warning btn-sm" style="padding: 4px; padding-right: 0px;"><i class="glyphicon glyphicon-minus"></i></a>
                            <a href="basket?action=delete&id=<?php echo $product['id']; ?>" class="btn btn-danger btn-sm" style="padding: 4px; padding-right: 0px;"><i class="glyphicon glyphicon-remove"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                    <?php } ?>
                    </tbody>
                    <tfoot>
                    <tr class="visible-xs">
                        <td class="text-center"><strong><?php echo number_format($total_price); ?></strong></td>
                    </tr>
                    <tr>
                        <td><a href="<?php echo $uri; ?>" class="btn btn-warning"><i class="fa fa-angle-left"></i> ادامه خرید</a></td>
                        <td colspan="2" class="hidden-xs"></td>
                        <td class="hidden-xs text-center"><strong><?php echo number_format($total_price); ?></strong></td>
                        <td><a class="btn btn-success btn-block" id="btnOpenForm" onclick="openOrderForm()">ثبت سفارش <i class="fa fa-angle-right"></i></a></td>
                    </tr>
                    </tfoot>
                </table>


                    <div class="row" style="padding: 30px; display: none;" id="orderForm">
                        <table width="700" align="center">
                            <tr>
                                <td width="200" height="40" align="right" valign="middle" dir="rtl">نام و نام خانوادگی:</td>
                                <td height="40" align="right" valign="middle" dir="rtl"><input type="text" name="txtName" class="txtInput" id="txtName" /><span class="note txtName"><span class="star"> * </span>مثال: احمد مختاری</span></td>
                            </tr>
                            <tr>
                                <td width="200" height="40" align="right" valign="middle" dir="rtl">ایمیل:</td>
                                <td height="40" align="right" valign="middle" dir="rtl"><input type="text" name="txtEmail" class="txtInput" id="txtEmail" dir="ltr" /><span class="note txtEmail"><span class="star"> * </span>مثال: example@domain.com</span></td>
                            </tr>
                            <tr>
                                <td width="200" height="40" align="right" valign="middle" dir="rtl">تلفن:</td>
                                <td height="40" align="right" valign="middle" dir="rtl"><input type="text" name="txtMobile" class="txtInput" id="txtMobile" /><span class="note txtTitle"><span class="star"> * </span>مثال: 09121234567</span></td>
                            </tr>
                            <tr>
                                <td width="200" height="200" align="right" valign="middle" dir="rtl">آدرس:</td>
                                <td height="200" align="right" valign="middle" dir="rtl"><textarea cols="5" rows="5" name="txtAddress" id="txtAddress" class="taInput" style="height: 300; padding: 5px;"></textarea><span class="note taComment"><span class="star"> * </span>مثال: تهران، سیدخندان، پلاک ۱۲</span></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="left" valign="middle" dir="rtl" height="40">
                                    <div style="float: right;" >
                                        <a class="btn btn-info" style="padding-bottom: 7px;" onclick="basketForm();">ثبت سفارش</a>
                                    </div>
                                    <div style="padding-right: 15px; padding-top: 9px; float: right;" class="contactFinal"></div>
                                </td>
                            </tr>
                        </table>
                    </div>


                <?php }else{ ?>
                    <div class="alert alert-warning" style="width: 60%; font-size: 14px; margin: 0 auto; margin-top: 30px; margin-bottom: 30px;">محصولی در سبد خرید ثبت نشده است.</div>
                <?php } ?>
</div>
</div>

        <form action="https://sep.shaparak.ir/Payment.aspx" method="post" name="SamanPayment" style="display: none;">
            <input type="hidden" name="Amount" id="Amount" />
            <input type="hidden" name="MID" id="MID" value="10002890" />
            <input type="hidden" name="ResNum" id="ResNum" />
            <input type="hidden" name="RedirectURL" id="RedirectURL" value="<?php $uri . '/basketProcess'; ?>" />
        </form>




<?php

include 'footer.php';

?>

