<?php 
// pengulangan 
// for
// while
// do.. while
//foreach : pengulangan khusus array

// for( $i = 0; $i < 5; $i++ ) { 
//     echo  "hello world!<br>";
//}
// $i = 0;
// while( $i < 5 ) {
//     echo " Hello world! <br>";
//     $i++;
// }

// $i = 10;
// do {
//     echo "hello world! <br>";
//     $i++; 
// } while( $i < 5 );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

     <table border="1" cellpadding="10" cellpadding="0">
         <?php
          for( $i = 1; $i <=3; $i++ ){
              echo "<tr>";
              for( $j = 1; $j <= 5; $j++ )
              echo "<td>$i,$j</td>";
          }
          echo "</tr>";
         
         
         
         ?>

</body>
</html>