<?php
class ReduceNumberToZero 
{
    public function numberOfSteps ($num) {
        $count = 0;
        while($num > 0){
            if($num % 2 == 0){
                $num = $num / 2;
            }else{
                $num = $num - 1;
            }
            $count++;
        }
        return $count;
    } 
}



// will come back to explain on thursday

?>