
<html>
<head><title><?php echo TITLE?></title></head>
<body>
<h3>Calculator</h3>

<?php echo "<p>a=$a, b=$b</p>";?>
<p>
   Result:
	<ul>
		<?php
			echo "<li>$a+$b=$add</li>";
			echo "<li>$a-$b=$substract</li>";
			echo "<li>$a*$b=$multiply</li>";
			echo "<li>$a/$b=$divide</li>";
			echo "<li>sqrt($a)=$squareRoot</li>";
			echo "<li>$a%$b=$mod</li>";
			echo "<li>1/$a=$frac</li>";
			echo "<li>-($a)=$neg</li>";
			echo "<li>setting mem($mem)</li>";
			echo "<li>addimg mem($mem): $mem+$b = $memOper</li>";
		?>
		
	</ul>

<p>

</body>
</html>

