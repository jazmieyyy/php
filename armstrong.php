<!-- 16.Write a PHP program to check whether a given number is Armstrong or not. -->

<!DOCTYPE html>
<html>
<body>
    <h2>Enter the Number</h2><br>
    <form action="" method="post">
        <input type="text" name="number" />
        <input type="submit" value="Check" />
    </form>

    <?php
	if ($_POST) {
    $number = $_POST['number'];
    $temp = $number;
    $sum = 0;
    while ($temp != 0) {
        $rem = $temp % 10;
        $sum = $sum + ($rem * $rem * $rem);
        $temp = $temp / 10;
    }
    if ($number == $sum)
        echo $sum." is Armstrong Number";

    else

        echo $sum." is Not an Armstrong Number";
}
?>
</body>
</html>
