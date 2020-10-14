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
        function papan_catur(int $num){
            for($i=0;$i<$num;$i++){
                if($i%2==0){
                    for($j=0;$j<$num;$j++){
                        echo "#  ";
                    }
                }
                else{
                    for($j=0;$j<$num-1;$j++){
                        echo "  #";
                    }
                }
                echo "<br>";
            }
        }
        echo papan_catur(4);
        echo "<br>";
        echo papan_catur(8);
        echo "<br>";
        echo papan_catur(5); 
        echo "<br>";

    ?>
</body>
</html>

