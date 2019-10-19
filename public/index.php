<?php

require_once('../vendor/autoload.php');

use DataStructures\Node;
use DataStructures\Queue;
use DataStructures\Stack;

$stack = new Stack();
$stack->put("Lilu");
$stack->put("Leon");
$stack->put("Harry");

echo $stack->get() . "<br>\n";
echo $stack->get() . "<br>\n";
echo $stack->get() . "<br>\n";

echo "===========End of Stack. Bye!===========<br>\n";

$queue = new Queue();
$queue->put("Lilu");
$queue->put("Leon");
$queue->put("Harry");

echo $queue->get() . "<br>\n";
echo $queue->get() . "<br>\n";
echo $queue->get() . "<br>\n";

echo "===========End of Queue. Bye!===========<br>\n";
echo "===========End of script. Bye!===========<br>\n";
