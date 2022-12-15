<?php

    
    for($i=1; $i<=5; $i++){
        for($j=1; $j<= 5-$i; $j++){
            echo "&nbsp;&nbsp;"; // non-breaking space
        }

        for($k=1; $k<=$i; $k++){
            echo  "*&nbsp;&nbsp;";
        }
        echo  "<br/>";
    }
?>