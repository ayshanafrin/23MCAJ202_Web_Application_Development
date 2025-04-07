<!DOCTYPE html>
<html lang="en">
<head>
   <style>
      body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background-color: #f0f8ff;
        }
        h2 {
            color: #003366;
        }
        pre {
            background-color: #e6f2ff;
            padding: 10px;
            border-left: 5px solid #007acc;
            font-size: 16px;
            border-radius: 5px;
        }
   </style>
</head>
<body>
    <?php

    $names = array("aysha","basil","anu","manu","zaraa","vipin");


    echo "<h2>Original Array</h2>";
    echo "<pre>"; //to maintain formatting like line breaks and spaces for better readability.
    print_r($names);
    echo "</pre>";

    asort($names);
    echo "<h2>Array in Ascending Order</h2>";
    echo "<pre>"; //to maintain formatting like line breaks and spaces for better readability.
    print_r($names);
    echo "</pre>";

    arsort($names);
    echo "<h2>Array in Descending Order</h2>";
    echo "<pre>"; //to maintain formatting like line breaks and spaces for better readability.
    print_r($names);
    echo "</pre>";


    ?>
</body>
</html>
