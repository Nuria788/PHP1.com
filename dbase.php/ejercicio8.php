<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class= "principal" id="main">
     <?php
        $numMax = $_GET ['numero'];
        for ($x=1; $x <= $numMax ; $x++){
        echo "<div class=\"".$_GET['color']."\">".$_GET['texto']."</div>";
       }
     ?>
    
</body>
</html>