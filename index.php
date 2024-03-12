<?php
    require_once('connection.php');
    $all_events = $connection -> query ("SELECT *  FROM events");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>ngty</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="/icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="head">
            <div class="hi">
                <h3>STUDENT'S <br>
                    EVENTS
                </h3>
            </div>
            <div class="buttons">
                <div class="a1">
                    <h6>ВСЕ СОБЫТИЯ</h6>
                </div>
                <div class="a2" >
                    <h6>НАУКА</h6>   
                </div>
                <div class="a3">
                    <h6>ПРОФКОМ</h6>
                </div>
                <div class="a4">
                    <h6>СПОРТ</h6>
                </div> 
            </div>
        </div>
        <div class="content-wrapper">     
            <?php while ($row = $all_events -> fetch_assoc())
            { 
                $role = $row['role'];
                $severity = $row['severity'];
                $comment = $row['comment'];
                $date = $row['date'];
                $name = $row['name'];
                $cabinet = $row['cabinet'];
                $iconColor = "black";
                if($severity != "black") {
                  $iconColor = "white";
                }
                ?>
                <a href="user-info.php?id=<?php echo $row['id'];?>">
                <div class="event <?php echo $severity;?>">
                    <div class="top">
                        <h5><?php echo date('d.m.Y', strtotime($date));?></h5>
                        <img src="<?php echo $role;?>-<?php echo $iconColor;?>.png" alt="<?php echo $role;?>"  width="48" height="48">
                    </div>
                    <div class="about">
                        <h4><?php echo $name;?></h4>
                        <p style="color: <?php echo $iconColor;?>"><?php echo $comment;?>
                        </p>
                    </div>
                </div>
                </a>
            <?php 
            } ?>
        </div>
        <div class="footer">
            <p>НГТУ, 2024</p>
        </div>
    </div>
</body>
</html>
