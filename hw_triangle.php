<?php 

    $raw = "5";
    $column = "5";
    $try1 = "";

    for($i= 0; $i <= $raw  ; $i++){
        for ($j= 0; $j <=$column - $i ; $j++){
            $try1 .= "  * ";
        }

        echo $try1 . "</br>";
        $try1 = "";

    }
?>

<?php 

#Second method
echo "<br>";

    $try1 = "";

    for($i= 5; $i >=0 ; $i--){
        for ($j= 0; $j <= $i  ; $j++){
            $try1 .= "  * ";
        }


        echo $try1 . "</br>";
        $try1 = "";

}

?>




