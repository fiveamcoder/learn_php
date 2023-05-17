<?php
    $break = "<br>";
    $x = 0;
    echo $x, $break;
    ++$x  ; // pre increment operator
    $x++ ;  // post increment operator
    $x-- ;  // post decrement operator
    $x = 2;
    $y = 3;
    echo $x**$y, $break; // ** Exponentiation arithmetic operator 

    $x = 1;
    $x += 8; // assignment operators
    $x -= 2;
    $x *= 2;
    $x /= 2;
    $x %= 2;
    echo $x, $break; 

    // Problem : Find greater number between two number

    // Conditional Statements
    $x = 7;
    $y = 10;
    if($x > $y){ 
    echo "A is Big";
    }
    else{
        echo "B is Big" . $break;
    }

    // Problem : Check the number even or odd 

    $x = 7;
    if ($x % 2 == 0){
        echo "Number is even";
    }
    else {
        echo "Number is odd";
    }

    // Problem : Check the number positive or negative 

    $x = -0.20;
    if($x > 0 ){
        echo $break . "Positive";
    }
    else{
        echo $break . "Negative"; 
    }
    
    echo "<p> Life is short </p>"
?>