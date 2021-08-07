<form method="POST">
    <input type="text" name="num1" placeholder="Num 1">
    <select name="symbol">
        <option value="0">Select operator</option>
        <option value="1">+</option>
        <option value="2">-</option>
        <option value="3">*</option>
        <option value="4">/</option>
    </select>
    <input type="text" name="num2" placeholder="Num 2">
    <input type="submit" name="calculate" value="Calculate">
</form>
<?php

    if(isset($_POST['calculate'])){
        if(!empty($_POST['num1']) && !empty($_POST['num2']) && !empty($_POST['symbol'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $symbol = $_POST['symbol'];

            if($symbol == 1){
                echo $num1 + $num2;
            }

            if($symbol == 2){
                echo $num1 - $num2;
            }

            if($symbol == 3){
                echo $num1 * $num2;
            }

            if($symbol == 4){
                echo $num1 / $num2;
            }
        }
    }