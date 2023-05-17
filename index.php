<?php
    $break = "<br>";
    
    // Array
    $students = [89, 87, 85, 81, 79, 75, 72, 69];
    $students[8] = 98;
    echo $students[2] + $students[0] . "<br>";
    echo $students[8] . "<br>";

    $cars = [];
    $cars[0] = "Toyota";
    $cars[1] = "Suzuki";
    $cars[2] = "Lamborgini";
    echo $cars[1] . "<br>";

    // Associative Array 
    $students = [ 'name'=> "Mahmud", 'roll' => 3, 'location' => "Naogoan" ];
    echo $students['name'] . "<br>";
    echo $students['roll'] . "<br>";
    echo $students['location'] . "<br>";

    // old declaration
    $birds = array();
    $birds[0] = "Doel";
    $birds[1] = "Koel";
    $birds[2] = "Tiya";
    echo $birds[1] . "<br>";

    // Loop
    
?>
