<!-- 17.Display the Fibonacci series up to a given number. -->

<!DOCTYPE html>
<html>
<body>
    <h2>Fibonacci Series</h2>
    <form action="" method="post">
        Enter the number : 
        <input type="text" name="number" />
        <input type="submit" />
    </form>

    <?php
	if ($_POST) {
    $n1 = 0;
    $n2 = 1;
    $limit = $_POST['number'];
    for($i=0; $i < $limit; $i++){
    	 echo $n1 . "</br>";

        $n3 = $n1 + $n2;
        $n1 = $n2;
        $n2 = $n3; 
    }
}
?>
</body>
</html>
