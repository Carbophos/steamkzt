
<html lang="eu">
    <head>
        <title> Калькулятор</title>
    </head>
    <body>
<form  method="post" class = "calculate">

    <label for="kzt">Цена за игру в стим:</label>
    <input id="kzt" name="game" type="number"/>
    <input name="send" type="submit" value="Посчитать">

</form>
    <?php
    if($_POST["send"])
        {
            if(isset($_POST["game"]))
            {
                $game = $_POST['game']; }
                $result = (($game / 100) * 9) + $game;
                echo $result;
        }
    $q = 0.2102;

    ?>

    </body>
</html>