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
			function ubah_huruf($string){
            	$length=strlen($string);
                for($i=0;$i<$length;$i++){
					$check=ord($string[$i])+1;
                	if($check>122){
                    	$string[$i]="a";
                       }
                	else{
                    	$string[$i]=chr($check);
                     }
                }
                return $string;
			//kode di sini
			}
 
			// TEST CASES
			echo ubah_huruf('wow'); // xpx
            echo "<br>";
			echo ubah_huruf('developer'); // efwfmpqfs
            echo "<br>";
			echo ubah_huruf('laravel'); // mbsbwfm
            echo "<br>";
			echo ubah_huruf('keren'); // lfsfo
            echo "<br>";
			echo ubah_huruf('semangat'); // tfnbohbu
 
?>

</body>
</html>