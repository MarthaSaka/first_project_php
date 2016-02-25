<?php
function arearectangle($a,$b){
    $arearectangle=$a*$b;
    return $arearectangle;
}
    
    $result=arearectangle(5,6);
    echo $result;
    
    echo"<br />";
    
    function areatriangle($a,$b){
        $areatriangle=$a*$b/2;
        return $areatriangle;
    }
    $result=areatriangle(7,8);
    echo $result;
    /*Hello*/
    echo"<br />";
    
    function areacircle($a){
        $areacircle=22/7*$a*$a;
        return $areacircle;
    }
    $result=areacircle(14);
    echo $result;
    
    echo"<br />";
    
    
    function areasquare($a){
        $areasquare=$a*$a;
        return $areasquare;
    }
    $result=areasquare(8);
    echo $result;
    
    echo"<br />";
    
    function multiply_divide($a,$b){
        $multiply=$a*$b;
        $divide=$a/$b;
        return array($multiply,$divide);
    }
    $result_array=multiply_divide(15,5);
    echo "multiply:".$result_array[0] ."<br />";
    echo "divide:".$result_array[1] ."<br />";
    
?>
