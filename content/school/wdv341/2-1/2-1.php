<?php
    $yourName = "Samantha"; // PHP variable called $yourName assigned to string
    $number1 = 20; 
    $number2 = 7;  
    $total = $number1 + $number2; // PHP variable assigned to added value of two other variable values
    $languages = ["PHP", "HTML", "JavaScript"]; // PHP indexed array named $languages containing three strings

    echo "let languagesJS = ["; // echo out a started JavaScript array named languagesJS that is not closed yet

    foreach ($languages as $index => $language) { // foreach loop created to iterate over values in $languages array
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

    <!-- async script tags -->
    <script src="path/to/script1.js" async></script> <!-- tells the browser it's safe to continue parasing while the scripts are being downloaded -->
    <script src="path/to/script2.js" async></script>
    
    <script>
        console.log(languagesJS);
    </script>
</head>
<body>
    <h1>2-1: PHP Basics</h1>
    <h1><?= $yourName; ?></h1> <!-- shorthand way of echoing out PHP variables directly into HTML -->
    <?php
        echo "Number 1: $number1<br>"; // echo out variable values with line break (<br)
        echo "Number 2: $number2<br>";
        echo "Total: $total<br>";
    ?>
</body>
</html>