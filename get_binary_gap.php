<?php
function solution($N){
echo $binary = decbin($N);
$count;
$i2 = 0;
$count[$i2] = 0;
$READ = false;
$countB = 0;
$IS_0 = "TRUE";
for ($i = 0; $i < strlen($binary); $i++){
        if (substr($binary, $i, 1) == 0){
                echo "(0 DETECTED);";
                echo "count:" . $count[$i2]++;
                $READ = true;
                $LAST_0 = "TRUE";
                $IN_BETWEEN = "TRUE";
        } else {
                $i2++;
                $count[$i2] = 0;
                echo "(1 DETECTED)";
                $LAST_0 = "FALSE";
                if ($IN_BETWEEN === "TRUE"){
                        $IS_0 = "FALSE";
                }
        }
}
echo print_r($count);
echo $C;
if ($READ == true){
        for ($i = 0; $i < ($i2 + 1); $i++){
                if (!empty($count[$i])){
                        $all_counts[] = $count[$i];
                }
        }

        if ($IS_0 === "TRUE"){
                echo "should be 0 ";
                return 0;
        } else {
                echo $binary_gap = max($all_counts);
                return $binary_gap;
                }
        } else {
        echo 0;
        return 0;
        }
}

solution(32);
?>


