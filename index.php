<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <style>
    body{
        background:#00808052;
    }
    .row{
        float : left;
        width:8%;
        border:ridge;
        text-align:center;
        margin:8px;
        padding: 8px 0px 8px 0px;
        background:#f6ff3480
    }
    h1{
        text-align:center;
        text-decoration:underline;
    }
    tr{
        background:#00b0ff1a;
    }
    .first{
        color:blue;
    }
    .x{
        color:red;
    }
    .second{
        color:green;
    }
    .equal{
        color:grey;
    }
    </style>
</head>
<body>
    <h1>Table 1-20</h1>
    <?php 
        for($i=1; $i<=20; $i++){
            echo "<div class='row'><center><table>";
            for($j=1; $j<=10; $j++){
                echo "<tr><td class='first'>$i</td> <td class='x'>x</td> <td class='second'>$j</td> <td class='equal'>=</td> <td class='res'>". $i*$j ."</td></tr>";
            }
            echo "</table></center></div>";
        }
    ?>
</body>
</html>