<div class="knowledge">
    <?php
    // переменные
    $string = "Пример строки";
    $number = 42;
    $boolean = true;

    // вывод
    echo "<p><strong>Строка:</strong> " . $string . "</p>";
    echo "<p><strong>Число:</strong> " . $number . "</p>";
    echo "<p><strong>Логическое значение:</strong> " . ($boolean ? 'true' : 'false') . "</p>";
    echo "</p>";

    $sum = $number + 10;
    $concatenation = $string . " дополнение";

    echo "<p><strong>Результат сложения:</strong> " . $sum . "</p>";
    echo "<p><strong>Результат конкатенации:</strong> " . $concatenation . "</p>";
    ?>
</div>
