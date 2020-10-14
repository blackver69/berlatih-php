<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Function</title>
    </head>
    <body>
        <?php 
            function tentukan_deret_geometri($angka){
        	    $diff=round($angka[1]/$angka[0]);
        	    $counter=$angka[0];
                $length=count($angka);
                for($i=0;$i<$length;$i++){
                    if($angka[$i]!=$counter){
               		    return false;
                    }
                	$counter*=$diff;
                }
                return true;
            }
            $check=tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
            if($check==1)echo "true<br>";
            else echo "false<br>";
		    $check=tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
            if($check==1)echo "true<br>";
            else echo "false<br>";
		    $check=tentukan_deret_geometri([2, 4, 6, 8]); // false
            if($check==1)echo "true<br>";
            else echo "false<br>";
		    $check=tentukan_deret_geometri([2, 6, 18, 54]); // true
            if($check==1)echo "true<br>";
            else echo "false<br>";
		    $check=tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
            if($check==1)echo "true<br>";
            else echo "false<br>";
            
    

		


    ?>
</body>
</html>