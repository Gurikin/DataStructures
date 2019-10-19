<?php

require_once('../vendor/autoload.php');

use DataStructures\Node;
use DataStructures\Stack;

$stack = new Stack();
$stack->put("Lilu");
$stack->put("Leon");
$stack->put("Harry");

echo $stack->get() . "<br>\n";
echo $stack->get() . "<br>\n";
echo $stack->get() . "<br>\n";

echo "===========End of script. Bye!===========";