<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Second task from PHP section</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        pre {
            text-align: center;
            font-size: 2.5em;
        }
    </style>
</head>
<body>
    <div class="nav justify-content-center bg-primary">
        <h1 class="text-white">Second task from PHP section</h1>
    </div>

    <form class="form-group col mt-5 d-flex justify-content-center flex-column" name="form" method="post">
            <input class="col-8 align-self-center form-control" type="text" name="numberToConvert" id="numberToConvert" placeholder="Input number that will be converted to LCD number">
            <button type="submit" class="col-2 mt-3 align-self-center btn btn-primary">Confirm</button>
    </form>

    <p class="h5 mt-4 text-center">Number will be displayed down below.</p>

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

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>