<?php
    if (!empty($_POST['textToDecrypt'])) {
        require_once 'src/TextEncryption.php';

        $textEncryption = new TextEncryption;
        $_POST['isEncryptor'] = $_POST['isEncryptor'] == 'true' ? true : false;
    
        $decryptedText = $textEncryption->decryptor($_POST['textToDecrypt'], $_POST['isEncryptor']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Task Number One</title>
</head>
<body>
    <form name="form" action="" method="post">
        <input type="text" name="textToDecrypt" id="textToDecrypt">

        <input type="radio" name="isEncryptor" id="isEncryptorTrue" value="true" checked>
        <label for="isEncryptorTrue">Encrypt your text.</label>
        <input type="radio" name="isEncryptor" id="isEncryptorFalse" value="false">
        <label for="isEncryptorFalse">Decrypt your text.</label>

        <input type="submit">
    </form>
    <p>Text before change: <?= $_POST['textToDecrypt'] ?></p>
    <p>Text after change: <?= $decryptedText ?></p>
</body>
</html>