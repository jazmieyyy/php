<html>
<body>
    <form action="" method="POST">
        <H1>Biodata</h1>
        Name:<br><input type=text name="name1"><br><br>
        Address:<br> <textarea name=address> </textarea><br><br>
        Age:<br> <input type=text name=age><br><br>
        Phone:<br> <input type=number name=phone><br><br>
        Email:<br> <input type=email name=email><br><br>
        Educational Qualification:<br><input type=text name=qualification><br><br>
        <input type=submit value=Display><br><br>
    </form>
</body>
</html>
<?php
if ($_POST) {
    echo "<h1>Biodata</h1>";
    echo "Name: " . $_POST["name1"] . "<br>";
    echo "Address: " . $_POST["address"] . "<br>";
    echo "Age: " . $_POST["age"] . "<br>";
    echo "Mobile: " . $_POST["phone"] . "<br>";
    echo "Email: " . $_POST["email"] . "<br>";
    echo "Qualification: " . $_POST["qualification"] . "<br>";
}
?>