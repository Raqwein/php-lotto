<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lottó</title>
    </head>
    <body>
        Ez az index.php
        <?php
        include ("fgv.php");
        $sorsolt=sorsolas();
        var_dump ($sorsolt);
            //lottohúzás
        
        
        lottoszelveny($sorsolt);
	
	echo "</table>";
        //echo "Ezek voltak a számok";
        //echo "Itt már a php script fut";
        ?>
    </body>
</html>
