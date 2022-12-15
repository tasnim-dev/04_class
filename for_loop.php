<?php 

// print *****

    echo "<h1> * Pattern using for loop </h1><br>";

    for($i = 1; $i <= 5; $i++){
        echo "*";
    } 
    echo "<br> <br>";

// *
// *
// *

    for($i=1; $i<=3; $i++){
        for($j=1; $j<=1; $j++){
            echo "*";
        }
        echo "<br>";
    }

// ***
// *** 
// ***

    echo "<br> <br>"; 

    for($i=1; $i<=3; $i++){
        for($j=1; $j<=5; $j++){
            echo "*";
        }
        echo "<br>";
    }

// *
// **
// ***

    echo "<br>";

    for($i=1; $i<4; $i++){
        for($j=1; $j<=$i; $j++){
            echo "*";
        }
        echo "<br>";
    }

// *
// ***
// *****

    echo "<br>";

    for($i=1; $i<=3; $i++){
        for($j=1; $j<=2*$i-1; $j++){
            echo "*";
        }
        echo "<br>";
    }


// *****
// ***
// *

    echo "<br>";

    for($i=1; $i<=3; $i++){
        for($j=5; $j>=2*$i-1; $j--){
            echo "*";
        }
        echo "<br>";
    }

// ***
// **
// *

    echo "<br>";

    for($i=1; $i<=3; $i++){
        for($j=3; $j>=$i; $j--){
            echo "*";
        }
        echo "<br>";
    }


//      *
//    * * *
//  * * * * *
    
    echo "<br>";

    for($i=1; $i<=5; $i++){
        for($space=1; $space<=5-$i; $space++){
            echo " &nbsp ";
        }
        for($j=1; $j<=2*$i-1; $j++){
            echo "*";
        }
        echo "<br>";
    }

//    *
//   * *
//  * * *

    echo "<br>";

    for ($i=1; $i<=4; $i++){
        for($space=1; $space<=4-$i; $space++){
            echo "&nbsp;&nbsp;";
        }
        for($j=1; $j<=$i; $j++){
            echo "*&nbsp;&nbsp;";
        }
        echo "<br>";
    }

// * * *
//  * *
//   * 

    echo "<br>";

    for($i=4; $i>=1; $i--){
        for($space=1; $space<=4-$i; $space++){
            echo "&nbsp;&nbsp;";
        }
        for($j=1; $j<=$i; $j++){
            echo "*&nbsp;&nbsp;";
        }
        echo "<br>";
    }


// * * * * *
//   * * *
//     * 

    echo "<br>";

    for($i=5; $i>=1; $i--){
        for($space=1; $space<=5-$i; $space++ ){
            echo "&nbsp;&nbsp;";
        }
        for($j=1; $j<=2*$i-1; $j++){
            echo "*";
        }
        echo "<br>";

    }
?>