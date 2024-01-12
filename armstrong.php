<!DOCTYPE html>
<html lang="en">
<head>
    <title>Armstrong Number </title>
</head>
<body>
    <form method="post">
        <input type="text" name="number">
        <input type="submit" name="submit">
    </form>  
    <?php
        $number = $_POST['number']; 
        $originalNumber = $number;
        $numDigits = strlen((string)$number);
        $sum = 0;
        while($number > 0){
            $digit = $number % 10;
            $sum += pow($digit, $numDigits);
            $number = (int)($number / 10);
        }   
       if($sum === $originalNumber){
        echo "$originalNumber is an Armstrong number";
       } else {
        echo "$originalNumber is not an Armstrong number";
       }
    ?>
</body>
</html>