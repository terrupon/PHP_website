<!DOCTYPE html>
<html>
<head>
    <title>Мой сайт</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
    <div class="content">
        <h2>Обо мне</h2>
        <div class="info-block">
            <h3>Подробности:</h3>
            <?php
            $surname = "Юмашев";
            $name = "Тагир";
            $age = 25;
            $city = "Уфа";
            ?>
            <p><strong>Фамилия:</strong> <?php echo $surname; ?></p>
            <p><strong>Имя:</strong> <?php echo $name; ?></p>
            <p><strong>Возраст:</strong> <?php echo $age; ?></p>
            <p><strong>Город:</strong> <?php echo $city; ?></p>
        </div>

        <h2>Примеры работы с переменными</h2>
        <div class="info-block">
            <h3>Примеры переменных:</h3>
            <?php

            $string = "Пример строки";
            $number = 42;
            $boolean = true;
            $array = array("элемент 1", "элемент 2", "элемент 3");


            echo "Строка: " . $string . "<br>";
            echo "Число: " . $number . "<br>";
            echo "Логическое значение: " . ($boolean ? 'true' : 'false') . "<br>";
            echo "Массив: ";
            print_r($array);
            echo "<br>";


            $sum = $number + 10;


            echo "Результат сложения: " . $sum . "<br>";
            ?>
        </div>
    </div>
    <img src="image.jpg" alt="Изображение">
</div>
</body>
</html>

