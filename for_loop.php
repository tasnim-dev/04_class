<?php

  $piramid = "";
    for($i=1; $i<=5; $i++){
        for($j=1; $j<= 5-$i; $j++){
        echo $piramid."&nbsp;&nbsp;"; // non-breaking space
        }

        for($k=1; $k<=$i; $k++){
        echo $piramid. "*&nbsp;&nbsp;";
        }
     echo $piramid. "<br/>";
    }
?>