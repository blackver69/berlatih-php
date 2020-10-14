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
        function palindrome_angka(int $num){

            while($num){
                $num++;
                $counter=$num;
                $counting=0;
                while($counter){
                    $counting*=10;
                    $counting+=($counter%10);
                    $counter/=10;
                }
                if($counting-$num==0)return $num;
            }
            

        }
        echo palindrome_angka(8); // 9
		echo palindrome_angka(10); // 11
		echo palindrome_angka(117); // 121
		echo palindrome_angka(175); // 181
		echo palindrome_angka(1000); // 1001

    ?>
</body>
</html>
