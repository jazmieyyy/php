<html>

<body>
    <h2> LIST OF FRUITS</h2>
    <form action="" method="POST">
        Choose any fruit
        <select name="fruits">
            <option value="Grape">Mango</option>
            <option value="Grape">Grape</option>
            <option value="Banana">Banana</option>
            <option value="Chicku">Chicku</option>
            <option value="Apple">Apple</option>
            <option value="Orange">Orange</option>
            <option value="Pine Apple">Pine Apple</option>
        </select><br><br>
        <input type="submit" value="SELECT">
    </form>

    <?php
    if ($_POST) {
        echo "<h2> You have selected : </h2>";
        echo $_POST["fruits"];
    }
    ?>
</body>

</html>

