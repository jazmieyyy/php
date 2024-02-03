<!--24. PHP program to store current date-time in a cookie and display the Last visited date-time on the 
web page upon revisiting the same web page.-->

<html>
<body>
    <h2> Last visited time on the web page</h2>
    <?php
    $intm = 60 * 60 * 24 * 60 + time();
    setcookie('lastVisit', date("G:i - d/m/y"), $intm);
    if (isset($_COOKIE['lastVisit'])) {
        $visit = $_COOKIE['lastVisit'];
        echo "Your last visit was - " . $visit;
    } else
        echo "You have not visited this website before!";
    ?>
</body>
</html>
