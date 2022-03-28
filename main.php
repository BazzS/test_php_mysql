<form action="delete.php" method="post" >
	<h3>Product List</h3>
	<div class="Align">

		<button type="submit" name="delete-product-btn" id="delete-product-btn">MASS DELETE</button>

		<button type="button" onclick="location.href='add.php';" >ADD</button>


	</div>

	<br><br><br><br>
	<?php
		$connect = mysqli_connect("localhost", "root", "Atlon111","scandiweb");
	 ?>

    <?php
	    $query = 'SELECT * FROM DVD';
        $info = mysqli_query($connect,$query);
		while ($goods = mysqli_fetch_array($info)){
	?>
			<div class='block'>
				<p class='info'>
					<input type="checkbox" id="checkbox" name="DVD[]" class="delete-checkbox" value="<?php echo $goods['ID_DVD']?>">
					<?php
						echo "DVD".'<br>';
						echo 'SKU:  '.$goods['SKU'].'<br>';
						echo 'Name:  '.$goods['Name'].'<br>';
						echo 'Price:  '.$goods['Price'].'<br>';
						echo 'Size:  '.$goods['Size'].'<br>';
					?>
				</p>
			</div>
	<?php
		}
	    $query = 'SELECT * FROM Book';
        $info = mysqli_query($connect,$query);
		while ($goods = mysqli_fetch_array($info)){
	?>
			<div class='block'>
				<p class='info'>
					<input type="checkbox" id="checkbox" name="Book[]" class="delete-checkbox" value="<?php echo $goods['ID_Book']?>">
					<?php
						echo "Book".'<br>';
						echo 'SKU:  '.$goods['SKU'].'<br>';
						echo 'Name:  '.$goods['Name'].'<br>';
						echo 'Price:  '.$goods['Price'].'<br>';
						echo 'Size:  '.$goods['Weight'].'<br>';
					?>
				</p>
			</div>
	<?php
		}
		$query = 'SELECT * FROM Furniture';
		$info = mysqli_query($connect,$query);
		while ($goods = mysqli_fetch_array($info)){
	?>
		<div class='block'>
			<p class='info'>
				<input type="checkbox" id="checkbox" name="Furniture[]" class="delete-checkbox" value="<?php echo $goods['ID_Furniture']?>">
				<?php
					echo "Furniture".'<br>';
					echo 'SKU:  '.$goods['SKU'].'<br>';
					echo 'Name:  '.$goods['Name'].'<br>';
					echo 'Price:  '.$goods['Price'].'<br>';
					echo 'Dimensions:  '.$goods['Height'].'x'.$goods['Width'].'x'.$goods['Length'].'<br>';
				?>
			</p>
		</div>
	<?php
}
