<!-- 28. Write a PHP program to create an array and store 10 names in the array. Do the following 
operations.
a. Display the contents using for each statement.
b. Display the array in a sorted order.
c. Display the array without the duplicate elements
d. Remove the last element and display
e. Display the array in reverse order
f. Search an element in the given array. -->
<!DOCTYPE html>
<html>
<body>
    <h2>List</h2>
    <p>Chile, Colombia, Pakistan, Pakistan, Italy, Chile, Austria, New Zealand, United States</p>
    <h2>Array Operations</h2>
    <form action="" method="post">
        <input type=radio name=choice value=display>Display Array<br />
        <input type=radio name=choice value=sort>Sorted Array<br />
        <input type=radio name=choice value=dupli>Without Duplicate<br />
        <input type=radio name=choice value=pop>Delete Last<br />
        <input type=radio name=choice value=rev>Array Reverse<br />

        Enter the name: <input type="text" name="searchName" />
        <input type=radio name=choice value=search>Array Search<br /><br/>
        <input type=Submit>
    </form>

    <?php
    if ($_POST) {
    $countries = array("Chile", "Colombia", "Pakistan", "Pakistan", "Italy","Chile", "Austria", "New Zealand", "United States");
    $val = $_POST['choice'];
    switch ($val) {
        case "display":
            foreach ($countries as $value)
                echo "<br>" . $value;
            break;
        case "sort":
            sort($countries);
            echo "<h3>Sorted Array</h3>";
            foreach ($countries as $value)
                echo "<br>" . $value;
            break;
        case "dupli":
            $uarray = array_unique($countries);
            foreach ($uarray as $value)
                echo "<br>" . $value;
            break;
        case "pop":
            array_pop($countries);
            foreach ($countries as $value)
                echo "<br>" . $value;
            break;
        case "rev":
            $revarr = array_reverse($countries);
            foreach ($revarr as $value)
                echo "<br>" . $value;
            break;
        case "search":
            echo "The searched element : " . $_POST["searchName"] . "<br>";
            echo "<br/><br/>Position - " . array_search($_POST["searchName"], $countries, true);
            break;
    }
}
?>
</body>
</html>

