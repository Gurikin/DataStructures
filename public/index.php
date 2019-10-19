<?php

require_once('../vendor/autoload.php');

use DataStructures\Node;
use DataStructures\Queue;
use DataStructures\Stack;

$stack = new Stack();
$stack->put("Lilu");
$stack->put("Leon");
$stack->put("Harry");

foreach ($stack->getList() as $item) {
    echo $item . "<br>\n";
}

echo "===========End of Stack. Bye!===========<br>\n";

$queue = new Queue();
$queue->put("Lilu");
$queue->put("Leon");
$queue->put("Harry");

foreach ($queue->getList() as $item) {
    echo $item . "<br>\n";
}

echo "===========End of Queue. Bye!===========<br>\n";
echo "Memory: " . memory_get_peak_usage() . "<br>\n";
echo "===========End of script. Bye!===========<br>\n";
