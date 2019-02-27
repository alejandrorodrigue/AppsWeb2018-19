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
         $solicitante=$base->prepare("SELECT * From Solicitante");
         $solicitante->execute();
         $registros=$solicitante->fetchAll(PDO::FETCH_OBJ);


         foreach($registros as $solicitante):
            echo $solicitante->Nombre;
         endforeach;
    
    ?>
</body>
</html>