<?php
require "header.php"
?>

<section id="cart_items">
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Shopping Cart</li>
			</ol>
		</div>
		<div class="table-responsive cart_info">
			<table class="table table-condensed">
				<thead>
					<tr class="cart_menu">
						<td class="image">Item</td>
						<td class="description"></td>
						<td class="price">Price</td>
						<td class="quantity">Quantity</td>
						<td class="total">Total</td>
						<td></td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="cart_product">
							<a href=""><img src="images/book.png" alt=""></a>
						</td>
						<td class="cart_description">
							<h4><a href="">Book I</a></h4>
							<p>Autor:</p>
							<p>Editura:</p>
							<p>Gen:</p>
						</td>
						<td class="cart_price">
							<p>10Lei</p>
						</td>
						<td class="cart_quantity">
							<div class="cart_quantity_button">
								<a class="cart_quantity_up" href=""> + </a>
								<input class="cart_quantity_input" type="text" name="quantity" value="1" size="2">
								<a class="cart_quantity_down" href=""> - </a>
							</div>
						</td>
						<td class="cart_total">
							<p class="cart_total_price">10Lei</p>
						</td>
						<td class="cart_delete">
							<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
						</td>
					</tr>

					<tr>
						<td class="cart_product">
							<a href=""><img src="images/book.png" alt=""></a>
						</td>
						<td class="cart_description">
							<h4><a href="">Book II</a></h4>
							<p>Autor:</p>
							<p>Editura:</p>
							<p>Gen:</p>
						</td>
						<td class="cart_price">
							<p>10Lei</p>
						</td>
						<td class="cart_quantity">
							<div class="cart_quantity_button">
								<a class="cart_quantity_up" href=""> + </a>
								<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
								<a class="cart_quantity_down" href=""> - </a>
							</div>
						</td>
						<td class="cart_total">
							<p class="cart_total_price">10Lei</p>
						</td>
						<td class="cart_delete">
							<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
						</td>
					</tr>
					<tr>
						<td class="cart_product">
							<a href=""><img src="images/book.png" alt=""></a>
						</td>
						<td class="cart_description">
							<h4><a href="">Book III</a></h4>
							<p>Autor:</p>
							<p>Editura:</p>
							<p>Gen:</p>
						</td>
						<td class="cart_price">
							<p>10Lei</p>
						</td>
						<td class="cart_quantity">
							<div class="cart_quantity_button">
								<a class="cart_quantity_up" href=""> + </a>
								<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
								<a class="cart_quantity_down" href=""> - </a>
							</div>
						</td>
						<td class="cart_total">
							<p class="cart_total_price">10Lei</p>
						</td>
						<td class="cart_delete">
							<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
						</td>
					</tr>

					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td class="cart_order_price">
							Total price: <b>30Lei</b>&nbsp;
						</td>
					</tr>

					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td class="cart_order_button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="mainpage.php" class="btn btn-success">Checkout</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</section>
<!--/#cart_items-->

<?php
require "footer.php"
?>