<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="img_upload.php" method="POST" enctype="multipart/form-data">
        Selecione uma imagem para fazer upload:
        <input type="file" name="imagem" accept="image/*">
        <br>
        <input type="submit" value="Enviar IMG">
    </form>
    <form action="pdf_upload.php" method="POST"  enctype="multipart/form-data">
    Selecione um arquivo PDF para fazer upload:

        <input type="file" name="pdf" accept="application/pdf">
        <br>
        <input type="submit" value="Enviar PDF">
    </form>


</body>

</html>