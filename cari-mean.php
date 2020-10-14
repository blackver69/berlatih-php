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
        function cari_mean($angka){
        	$ans=0;
            $length=count($angka);
            for($i=0;$i<$length;$i++){
                $ans+=$angka[$i];
                }
            
            return round($ans/$length);
        }


		echo cari_mean([1, 2, 3, 4, 5]); // 3
        echo "<br>";
		echo cari_mean([3, 5, 7, 5, 3]); // 5
        echo "<br>";
		echo cari_mean([6, 5, 4, 7, 3]); // 5
        echo "<br>";
		echo cari_mean([1, 3, 3]); // 2
        echo "<br>";
		echo cari_mean([7, 7, 7, 7, 7]); // 7
        echo "<br>";

    ?>
</body>
</html>

