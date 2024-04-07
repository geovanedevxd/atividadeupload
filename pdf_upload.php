<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
</head>
<body>
    

    <?php 
    
        $upload_Dir = "./upload_pdf/";
        $upload_file = $upload_Dir . basename($_FILES["pdf"]["name"]);
        $uploadOK = 1;
        
        $imageFileType = strtolower(pathinfo($_FILES["pdf"]["name"], PATHINFO_EXTENSION));

        if ($imageFileType != "pdf"){
            $mensErro = "Arquivo Inválido.";
            $uploadOK = 0;
        }
        if ($uploadOK == 1){
            move_uploaded_file($_FILES["pdf"]["tmp_name"], $upload_file); 
            $mensErro = "Arquivo válido e enviado com sucesso.";
            $uploadOK = 0;
        }

    ?>

    <a href='<?php echo $upload_file; ?>' target='_blank'>Analisar PDF</a>

</body>
</html>