<html lang="ru">
    <head>
        <title> Калькулятор</title>
    </head>
    <body>
<form  method="post" class = "calculate">

    <label for="kzt">Цена за игру в стим:</label>
    <input id="kzt" name="game" type="number" min="1"/>
    <input name="send" type="submit" value="Посчитать">

</form>
    <?php
    $q = 0.2102 . "p"; //курс рубля за 1 тенге
    echo "Курс за 1 тенге: ". $q . "<br/>";
    if(isset($_POST['send']))
    {
            if(isset($_POST['game']))
            {
                $game = $_POST['game'];
                $result = (($game / 100) * 9) + $game;
                echo "Итог сколько нужно положить: ".$result. " ₸ <br/>";
                $q = 0.2102;
                $result *= $q; //
                echo "Конечная цена: ". round($result, 3) . "p";
            }
    }
    ?>
    </body>
</html>