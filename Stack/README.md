Stack
=====

A LIFO stack.


Usage
=====

    $Stack = new Stack;

    echo "Size: " . $Stack->Size() . "\n";  
    echo "Counter: " . $Stack->Counter() . "\n";
    echo "isEmpty: " . $Stack->isEmpty() . "\n";  
    echo "--------\n";
    echo "Pushing 3 items:\n";
    $Stack->Push("Item 1");
    $Stack->Push("Item 2");
    $Stack->Push("Item 3");
    echo "Echoing top item five times\n";
    echo $Stack->Top() . "\n";
    echo $Stack->Top() . "\n";  
    echo $Stack->Top() . "\n";
    echo $Stack->Top() . "\n";
    echo $Stack->Top() . "\n";
    echo "Popping top item: \n";
    echo $Stack->Pop() . "\n";
    echo "Echoing top item: \n";
    echo $Stack->Top() . "\n";
    echo "Popping top 2 items: \n";
    echo $Stack->Pop() . "\n";
    echo $Stack->Pop() . "\n";
    echo "Is stack empty? \n";
    echo $Stack->isEmpty();