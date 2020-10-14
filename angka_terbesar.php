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
        $ans="0";
        function pasangan_terbesar($angka){
            $length=strlen($angka)-1;
            for($i=0;$i<$length;$i++){
                $check=substr($angka,$i,2);
 
                if($ans<$check){
                    $ans=$check;
                  
                }
            }
            return $ans;
        }
        echo pasangan_terbesar(641573); // 73
        echo "<br>";
        echo pasangan_terbesar(12783456); // 83
        echo "<br>";
        echo pasangan_terbesar(910233); // 91
        echo "<br>";
        echo pasangan_terbesar(71856421); // 85
        echo "<br>";
        echo pasangan_terbesar(79918293); // 99
        echo "<br>";

    ?>
</body>
</html>

