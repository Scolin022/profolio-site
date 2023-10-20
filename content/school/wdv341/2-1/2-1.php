<?php
    $yourName = "Samantha";
    $number1 = 20; 
    $number2 = 7;  
    $total = $number1 + $number2;
    $languages = ["PHP", "HTML", "JavaScript"]; // PHP indexed array

    echo "let languagesJS = ["; // echo out JavaScript array

    foreach ($languages as $index => $language) { // foreach loop for array values
        echo "\"$language\"";
        if ($index !== count($languages) - 1) {
            echo ",";
        }
    }

    echo "];";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>PHP Basics</title>

    <script src="path/to/script1.js" async></script>
    <script src="path/to/script2.js" async></script>
    
    <script>
        console.log(languagesJS);
    </script>
</head>
<body>
    <h1>2-1: PHP Basics</h1>
    <h1><?= $yourName; ?></h1> <!-- shorthand PHP variables -->
    <?php
        echo "Number 1: $number1<br>"; // echo out the variables
        echo "Number 2: $number2<br>";
        echo "Total: $total<br>";
    ?>
</body>
</html>