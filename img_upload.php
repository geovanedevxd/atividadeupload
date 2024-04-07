<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    
    <?php


    if ($_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
        $imagemTemp = $_FILES['imagem']['tmp_name'];
        echo "<img src='data:image/jpeg;base64," . base64_encode(file_get_contents($imagemTemp)) . "'>";
        echo "<br>";
        echo "Link para a imagem: <a href='data:image/jpeg;base64," . base64_encode(file_get_contents($imagemTemp)) . "' download>Download img1.jpg</a><br>";
    }

    ?>


</body>

</html>