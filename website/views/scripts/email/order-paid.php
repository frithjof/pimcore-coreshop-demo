<?php

echo $this->wysiwyg("content");

$user = $this->params['user'];
$order = $this->params['order'];

?>

<?php if($order instanceof \Pimcore\Model\Object\CoreShopOrder) { ?>
    <table class="row">
        <tr>
            <td class="wrapper">
                <table class="twelve columns">
                    <tr>
                        <td>
                            <?php echo $this->partial("coreshop/email/helper/order-details.php", array("order" => $order, "user" => $user));?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
<?php } ?>

<?php if($user instanceof \Pimcore\Model\Object\CoreShopUser) { ?>
    <table class="row">
        <tr>
            <td class="wrapper">
                <table class="six columns">
                    <tr>
                        <td>
                            <?php echo $this->partial("coreshop/email/helper/address.php", array("address" => $user->findAddressByName($order->getShippingAddress() ? $order->getShippingAddress() : $order->getBillingAddress())));?>
                        </td>
                    </tr>
                </table>
            </td>
            <td class="wrapper">
                <table class="six columns">
                    <tr>
                        <td>
                            <?php echo $this->partial("coreshop/email/helper/address.php", array("address" => $user->findAddressByName($order->getBillingAddress())));?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
<?php } ?>