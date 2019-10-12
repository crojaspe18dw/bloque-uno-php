<!DOCTYPE html>
<html>
    <head>
        <title>primer ejercicio php</title>
        <meta charset="utf-8">
    </head>
    <body>


        <?php
            


            $pisos=$_POST['pisos'];
            $puertasa=$_POST['puertas'];
            $arraypuertas=["A","B","C","D","E","F","G","H"];

            for($i =1;$i<=$pisos;$i++){
                for($j =1;$j<=$puertas;$j++){
                    echo "<h1>piso ".$i." puerta ".$arraypuertas[$j]." </h1>";
                }
            }
        
        ?>
        
    </body>
</html>