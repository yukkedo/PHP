<?php
for ($i = 1; $i <= 5; $i++){
    echo $i * 2;
    echo '<br />';
}
?>

<?php
$count = 0;

while ($count < 20){
    $count ++;
    echo $count . '<br />';
}
?>

<?php
$count = 0;

while ($count <= 100){
    if($count === 20){
        break;
    }
    if($count %3 === 0){
        $count ++;
        continue;
    }
    echo $count . '<br />';
    $count ++;
}
?>

<?php
$nume = 0;
do{
    echo '$nume =' . $nume . '<br />';
    $nume ++;
}while($nume < 3);
?>

<?php
for($i = 1; $i <= 50; $i++){
    if($i % 3 === 0 && $i %5 === 0){
        echo 'FizzBuzz'. '<br />';
    }elseif($i % 5 === 0){
        echo 'Buzz' . '<br />';
    }elseif($i % 3 === 0){
        echo 'Fizz' . '<br />';
    }else{
        echo $i . '<br />';
    }
}
?>

<?php
for($i = 0; $i < 6; $i ++){
    for($j = 1; $j < 6; $j ++){
        echo '●';
    }
    echo '<br />';
}