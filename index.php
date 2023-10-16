<html lang="ru">
    <head>
        <title> Калькулятор</title>
    </head>
    <body>

    <?php $q = 0.2102 . "p"; //курс рубля за 1 тенге
    echo "Курс за 1 тенге: " . $q . "<br/>"; ?>

<form  method="post" class = "calculate">

    <label for="kzt">Цена за игру в стим:</label>
    <input id="kzt" name="game" type="number" min="1"/>
    <input name="send" type="submit" value="Посчитать">

</form>
<?php
    if (isset($_POST['send']))
        {
            if (isset($_POST['game']))
        {
                $game = $_POST['game'];
                $result = (($game / 100) * 9) + $game;
                echo "Итог сколько нужно положить: " . $result . " ₸ <br/>";
                $q = 0.2102;
                $result *= $q; //
                echo "Конечная цена: " . round($result, 3) . "p";
        }
    }
?>
<form  method="post" class = "modifikator">

    <label for="qiwi">Сколько рублей хотите положить на Steam:</label>
    <input id="qiwi" name="price" type="number" min="1"/>
    <input name="button" type="submit" value="Посчитать">

</form>
<?php
    if(isset($_POST['button']))
    {
        if(isset($_POST['price']))
        {
            $q = 0.2102;
            $price  = $_POST['price'];
            $tenge1 = $price / $q;

            echo "Сколько переведётся в Тенге в Киви: ". round($tenge1, 2) . "₸";
            $money = (($tenge1 /100) * 9);
            $tenge1 -= $money;
            echo "Сколько начислится на Steam: ". round($tenge1, 3) . "₸";
        }
    }
?>

    </body>
</html>