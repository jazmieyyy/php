<!DOCTYPE html>
<body>
    <h2>Your Selected Fruits</h2>
    <?php
    if(isset($_POST['selected_fruits'])) {
        echo "<ul>";
        foreach($_POST['selected_fruits'] as $fruit) {
            echo "<li>" . ucfirst($fruit) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No fruits selected.</p>";
    }
    ?>
    <p><a href="fruits.html">Go back to select more fruits</a></p>
</body>
</html>
