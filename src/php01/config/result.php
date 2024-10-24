<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
print '私の名前は、' . $name . '<br />';


$menu = htmlspecialchars($_POST['set-menu'], ENT_QUOTES);
print 'ご希望の商品は、' . $menu . '<br />';

$count = htmlspecialchars($_POST['count'], ENT_QUOTES);
print '注文数は、' . $count ;

?>