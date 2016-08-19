<h1>Please Confirm Your Order</h1>
<p>Please confirm your order before clicking the Buy Now button below. If you have changes, <?php echo anchor("welcome/cart", "go back to your shopping cart");?>.</p>


<form method="POST" 
		action="https://www.paypal.com/cgi-bin/webscr" 
		accept-charset="utf-8">
  <input type="hidden" name="cmd" value="_cart"> 
  <input type="hidden" name="upload" value="1">
  <input type="hidden" name="business" value="seller@dezignerfotos.com">
		
<p>
<?php
$TOTALPRICE = $_SESSION['totalprice'];

if (count($_SESSION['cart'])){
	$count = 1;
	foreach ($_SESSION['cart'] as $PID => $row){	
		echo "<b>". $row['count'] . " " . $row['name'] . " @ " . $row['price']."<br/>";
		echo "<input type='hidden' name='item_name_".$count."' value='".$row['name']."'/>\n";
		//echo "<input type='hidden' name='item_quantity_".$count."' value='".$row['count']."'/>\n";
		//echo "<input type='hidden' name='item_price_".$count."' value='".$row['price']."'/>\n";
                echo "<input type='hidden' name='quantity_".$count."' value='".$row['count']."'/>\n";
                echo "<input type='hidden' name='amount_".$count."' value='".$row['price']."'/>\n";
		echo "<input type='hidden' name='item_currency_".$count."' value='USD'/>\n";
		echo "<input type='hidden' name='ship_method_name_".$count."' value='UPS Ground'/>\n";
		echo "<input type='hidden' name='ship_method_price_".$count."' value='5.00'/>\n";
		$TOTALPRICE += 5;
		$count++;
	}
}

echo "<b>TOTAL (w/shipping): ". $TOTALPRICE;
?>
</p>
<!--<input type="image" name="Google Checkout" alt="Fast checkout through Google"
src="http://checkout.google.com/buttons/checkout.gif?merchant_id=change-this-now&w=180&h=46&style=white&variant=text&loc=en_US"
height="46" width="180"/>-->

<!--<input type="hidden" name="item_name_1" value="Item Name 1">
<input type="hidden" name="amount_1" value="1.00">
<input type="hidden" name="shipping_1" value="1.75">
<input type="hidden" name="item_name_2" value="Item Name 2">
<input type="hidden" name="amount_2" value="2.00">
<input type="hidden" name="shipping_2" value="2.50">-->
<input type="submit" value="PayPal">

</form>