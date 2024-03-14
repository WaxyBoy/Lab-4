<!DOCTYPE html>
<html>
	<head> 
		<title>Menu with CSS </title>
		
		<link rel="stylesheet" href="css/style.css" />
		<script type="text/javascript" src="js/js.js"></script>

	</head>

	<?php include ("db_connection.php"); ?>

	<body bgcolor="#5978ff">
		<br><br><br>
		

	<img class="logo" src="img/Logo.png"/>
	<h1 align="center"> JBU Online Store </h1>
	
	
	<div class="cartIMG">
		<img src="img/cart.png" width=30% onclick="javascript:displaycart()"/>
	</div>
	<div class="cartDiv" id="cart">
		<p id="CartContent"></p>
	</div>
	
	<ul>
		<li class="menu-item"><a href="#" class="drp">Books</a>
			<div class="menu-content">
				<a  href="add_book.php">Add Book</a><br>
				<a  href="remove_book.php">Remove Book</a><br>
				<a href="display_books.php">Display all Books</a><br>
			</div>
		</li>
		
		<li class="menu-item"><a href="#" class="drp">Electronics</a>
		<div class="menu-content">
			<a  href="add_book.php">Laptops</a><br>
			<a  href="remove_book.php">Tablets</a><br>
			<a href="display_books.php">Chargers</a><br>
			<a href="display_books.php">Headphones</a><br>
		</div>
		</li>
		
			<li class="menu-item"><a href="#" class="drp">Clothing</a>
		<div class="menu-content">
			<a  href="add_book.php">T-Shirts</a><br>
			<a  href="remove_book.php">Hoodies</a><br>
			<a href="display_books.php">Pants</a><br>
			<a href="display_books.php">Sweaters</a><br>
		</div>
		</li>
		
			<li class="menu-item"><a href="#" class="drp">Knick-Knacks</a>	
		<div class="menu-content">
			<a href="add_user.php">Coffee Mugs</a><br>
			<a href="remove_user.php">Lanyards</a><br>
			<a href="display_users.php">Keychains</a><br>
			<a href="display_users.php">Stickers</a><br>
		</div>
		</li>
	</ul>
	<p align="center"> Welcome to JBU's Online store - open for faculty/staff and students!<p>
	<table align="center">
		<tr>

			<?php 
			$i = 0;
			$sql_product="SELECT * FROM product_tab";
			$result_product=$connect->query($sql_product);
	
			while($row_product = $result_product->fetch_assoc())
			{
		?>
				<td>
					<?php echo "<img src='".$row_product["product_image"]."'/><br>";?>
					<?php echo "<a href='javascript:void(0)' onclick='popup('1')'>".$row_product["product_name"]." </a><br>";?>
					<?php echo "<button style='width:100px, height:20px' onclick='javascript:addTocart('".$row_product["product_name"]."')'> Add To Cart </button>";?>
				</td>
			<?php 
			$i ++;
			if ($i %5 == 0)
			{
				echo "</tr><tr>";
			}
			}
		?>
			</tr>
		</center>
		</table>
	</body>
</html>



