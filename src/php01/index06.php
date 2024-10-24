<?php
function number($a)
{
    echo $a;
}

number(5);
?>
<!-- 練習問題 -->
<?php
function totalscore($score1, $score2, $score3)
{
    $total = $score1 + $score2 + $score3;
    
    if($total > 210){
        echo $total . '点なので合格です';
    }else{
        echo $total . '点なので不合格です';
    }
}

echo (totalscore(80, 60, 90));
echo '<br />';
?>

<?php
function getTriangleArea($base, $height){
    return ($base * $height) / 2;
}
function getSquareArea($base, $height){
    return $base * $height;
}
function getTrapezoidArea($upperbase, $bottom, $height){
    return ($upperbase + $bottom) * $height / 2;
} 

echo getTriangleArea(4, 5);
echo '<br />';
echo getSquareArea(5, 5);
echo '<br />';
echo getTrapezoidArea(6, 8, 5);
echo '<br />';
?>