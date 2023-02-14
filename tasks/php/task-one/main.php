<?php
    if (!empty($_POST['textToDecrypt'])) {
        require_once 'src/TextEncryption.php';

        $textEncryption = new TextEncryption;
        $_POST['isEncryptor'] = $_POST['isEncryptor'] === 'true' ? true : false;
    
        $decryptedText = $textEncryption->decryptor($_POST['textToDecrypt'], $_POST['isEncryptor']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>First task from PHP section<</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="nav justify-content-center bg-primary">
        <h1 class="text-white">First task from PHP section</h1>
    </div>

    <form class="form-group col mt-5 d-flex justify-content-center flex-column" name="form" method="post">
        <input class="col-8 align-self-center form-control" type="text" name="textToDecrypt" id="textToDecrypt" placeholder="Enter text">
        <div class="h6 mt-3 align-self-center">
            <label class="h5 form-check-label" for="isEncryptorTrue">Encrypt your text:  </label>
            <input class="ml-2 form-check-check" type="radio" name="isEncryptor" id="isEncryptorTrue" value="true" checked>
        </div>
        <div class="h6 mt-3 align-self-center">
            <label class="h5 form-check-label" for="isEncryptorFalse">Decrypt your text:  </label>
            <input class="ml-2 form-check-check" type="radio" name="isEncryptor" id="isEncryptorFalse" value="false">
        </div>
        <button type="submit" class="col-2 mt-3 align-self-center btn btn-primary">Confirm</button>
    </form>

    <div class="d-flex mt-5 flex-column">
        <p class="align-self-center h5">Text before change:
            <span class="text-primary"><?= !empty($_POST['textToDecrypt']) ? $_POST['textToDecrypt'] : '' ?></span>
        </p>
        <p class="align-self-center h5">Text after change:
            <span class="text-primary"><?= !empty($decryptedText) ? $decryptedText : '' ?></span>
        </p>
    </div>
    
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>