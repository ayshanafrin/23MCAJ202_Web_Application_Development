<!DOCTYPE html>
<head><title>Document</title>
  <style>
    *{
        background:lightblue;
    }
    table{
        border-collapse:collapse;
        width: 50%;
        margin: 20px auto;
    }
    th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align:left;
        }
    th {
            background-color:rgb(132, 167, 202);
            color: white;
       }   
    td{
           background-color: white;
    }    
    h2 {
            text-align: center;
        }   
  </style>
</head>
<body>
    <?php

    $cnames = array("Virat Kohli","Sachin Tendulkar","MS Dhoni","Jadeja","ABD Villers","Chris Gale","Suresh Raina","Dwayne Bravo","bumrah");

    echo "<h2>Cricket Players List</h2>";
    echo "<table>";
    echo "<tr><th>Names</th></tr>";

    $num=1;
    foreach($cnames as $player) {
    echo "<tr><td>$player</td></tr>";
    $num++;
    }

    echo "</table>";


    ?>
</body>
</html>

