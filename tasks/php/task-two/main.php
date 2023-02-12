<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Task Number Two</title>
</head>
<body>
    <form name="form" action="" method="post">
        <label>
            Input number that will be convert to LCD:
            <input type="text" name="numberToConvert" id="numberToConvert">
        </label>
        <input type="submit">
    </form>
    <?php
        if (!empty($_POST['numberToConvert'])) {
            if (is_numeric($_POST['numberToConvert'])) {
                require_once('src/LCDDisplayNumbers.php');

                $LCDDisplay = new LCDDisplayNumbers();
                $LCDDisplay->displayLCDNumbers($_POST['numberToConvert']);
            } else {
                echo "<p>Entered text could only contains numbers!</p>";
            }
        }
    ?>
</body>
</html>