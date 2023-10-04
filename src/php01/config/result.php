<?php
$name = htmlspecialchars($_GET['name'], ENT_QUOTES);
print "私の名前は、" . $name . "<br/>";
$product = htmlspecialchars($_GET['product'], ENT_QUOTES);
print "ご希望の商品は、" . $product . "<br/>";
$order = htmlspecialchars($_GET['order'], ENT_QUOTES);
print "注文数は、" . $order;

