<!DOCTYPE html>
<html>
<head>
    <title>Мой сайт</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        .variable {
            margin-bottom: 10px;
        }

        .variable label {
            font-weight: bold;
        }

        .variable span {
            margin-left: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Добро пожаловать на мой сайт!</h1>

    <?php

    $greeting = "Приветствую Вас на моем сайте!";


    echo "<p>$greeting</p>";
    ?>

    <?php

    $name = "Тагир";
    $surname = "Юмашев";
    $age = 25;
    $city = "Уфа";

    echo '<p><strong>Имя:</strong> <span style="font-size: 18px;">' . $name . '</span></p>';
    echo '<p><strong>Фамилия:</strong> <span style="font-size: 18px;">' . $surname . '</span></p>';
    echo '<p><strong>Возраст:</strong> <span style="font-size: 18px;">' . $age . '</span></p>';
    echo '<p><strong>Город:</strong> <span style="font-size: 18px;">' . $city . '</span></p>';
    ?>




    <img src="image.jpg" alt="Мое изображение">

    <?php include 'main.php'; ?>
</div>
</body>
</html>