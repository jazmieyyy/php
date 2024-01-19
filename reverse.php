<html>
<body>
    <h2>Reverse of a String</h2>
    <form action="" method="post">
        Enter the string : 
        <input type="text" name="str" />
        <input type="submit" value="Check />
    </form>

    <?php  
	if($_POST){
		$string = $_POST['str'];
		echo "Reverse string of $string is " .strrev( $string ); 
		} 
	?> 
</body>
</html>

