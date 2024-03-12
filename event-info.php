<?php
    require_once('connection.php');

    $user_id = ($_GET['id']);
    $query = $connection -> query ("SELECT *  FROM events WHERE id = '$user_id'");
    $data = $query -> fetch_assoc()     
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
    <div class="wrapper2">
        <div class="head">
            <div class="hi">
                <h3>STUDENT'S<br>
                    EVENTS
                </h3>
            </div>
        </div>
        <div class="container_page2">
            <div class="blue">
                <h4><?php echo $data['name'];?></h4>
                <p>
      				<?php echo $data['comment'];?><br><br>
      				<?php echo $data['comment'];?><br><br>
      				<?php echo $data['comment'];?><br><br>
                </p>
            </div>
            <div class="info">
                <div class="more date">
                    <p>КОГДА:</p>
                </div>
                <div class="details year">
                    <p><?php echo date('d.m.Y', strtotime($data['date']));?></p>
                </div>
                <div class="more where">
                    <p>ПОДРОБНЕЕ:</p>
                </div>
                <div class="details place">
                    <p>ауд. <?php echo $data['cabinet'];?></p>
                </div>
                <div class="more phone">
                    <p>ТЕЛ:</p>
                </div>
                <div class="details number">
                    <p><?php echo $data['phone'];?></p>
                </div>
            </div>
        </div>
        <div class="footer2">
            <p>НГТУ, 2024</p>
        </div> 
</body>
