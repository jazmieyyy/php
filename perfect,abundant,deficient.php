
<!-- 20. Write a PHP program to check whether a given number is perfect, abundant or deficient. -->

<html>
<body>
  <h2> Perfect, Abundant or Deficient </h2>
	<form action= "" method="post">
		Enter the number: <input type="text" name="number" />
		 <input type="submit" value="Check" /> <br> <br>
		 <?php 
			if($_POST) {
				$number = $_POST['number'];
				$sum = 0;
				for($i = 1; $i < $number; $i++){
					if ($number % $i == 0){
						$sum += $i;
					}
				}
				if ($sum == $number){
					echo "Perfect number";
				} else if ($sum > $number){
					echo "Abundant number";
				} else {
					echo "Deficient number";
				}
			}
		 ?>
	</form>
</body>
</html>

