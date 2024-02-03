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
    function fibonacciSeries($limit) {
        $fibonacci = [0, 1];
        while (($next = end($fibonacci) + prev($fibonacci)) <= $limit) {
            $fibonacci[] = $next;
        }
        return $fibonacci;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $givenNumber = $_POST['number'];
        if (!ctype_digit($givenNumber) || $givenNumber <= 0) {
            echo "Invalid input. Please enter a positive integer.";
        } else {
            echo "Fibonacci series up to $givenNumber: ";
            echo implode(" ", fibonacciSeries((int)$givenNumber));
        }
    }
    ?>

</body>
</html>
