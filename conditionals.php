<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<?php
$name = "Dark Matter";
$read = true;
?>

<body>
    <h1>
        <?php
        if ($name == $read) {
            echo "You have read " . $name;
        } else {
            echo "You don't have read " . $name;
        }
        ?>
        <!-- You have read "<?php echo $name; ?>." -->
    </h1>
</body>

</html>