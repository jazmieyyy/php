<!-- 18.Create a PHP program to display the bio data of a person by reading the personal details using 
an HTML page. -->

<!DOCTYPE html>
<head>
    <title>BioData</title>
</head>
<body>
    <h2>Enter the details</h2>
    <form method="post">
        Name: <br><input type="text" name="name" required><br>
        Age: <br><input type="text" name="age" required><br>
        Phone Number: <br><input type="tel" name="phone" required><br>
        Email: <br><input type="email" name="email" required><br>
        Address: <br><textarea name="address" required></textarea><br>
        Gender: <br><input type="radio" id="male" name="gender" value="male" required>male 
        <input type="radio" id="female" name="gender" value="female" required>female
        <input type="radio" id="other" name="gender" value="other" required>Other <br>
        <input type="submit" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])) {
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $age = isset($_POST['age']) ? $_POST['age'] : '';
        $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $address = isset($_POST['address']) ? $_POST['address'] : '';
        $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    
    echo "<h2>BIO DATA</h2>";
    echo "<p><strong>Name:</strong> $name</p>"; 
    echo "<p><strong>Age:</strong> $age</p>"; 
    echo "<p><strong>Phone Number:</strong> $phone</p>";
    echo "<p><strong>Email:</strong> $email</p>"; 
    echo "<p><strong>Address:</strong> $address</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    }
    ?>
</body>
</html>
