<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $sqlInsert = "Insert into Solicitante (DNI,Nombre,Apellido1,Apellido2,Email,Domicilio,CP,Localidad,Provincia) 
        Values (:dni,:nombre,:apellido1,:apellido2,:email,:domicilio,:cp,:localidad,:provincia)";
    
        $resultado = $base->prepare($sqlInsert);
        $resultado->bindValue(':dni',$dni);
        $resultado->execute();
        $resultado->closeCursor();
        $base = null;
        return;
    ?>
</body>
</html>