<?php

function translit($number)
{

    $numArr = str_split($number, 1);



    $units = [1 => 'один', 'два', 'три', 'четыре', 'пять', 'шесть', 'семь', 'восемь', 'девять'];
    $eleven = [1 => 'одиннадцать', 'двенадцать', 'тринадцать', 'четырнадцать', 'пятнадцать', 'шестнадцать', 'семнадцать', 'восемнадцать', 'девятнадцать'];
    $dozens = [1 => 'десять', 'двадцать', 'тридцать', 'сорок', 'пятьдесят', 'шестьдесят', 'семьдесят', 'восемьдесят', 'девяносто',];
    $hundreds = [1 => 'сто', 'двести', 'триста', 'четыреста', 'пятьсот', 'шестьсот', 'семьсот', 'восемьсот', 'девятьсот'];

    $length = count($numArr);

    switch ($length) {
        case 1:
            foreach ($units as $key => $val) {
                if ($numArr[0] == $key) {
                    echo $val;
                }
            }
            break;

        case 2:
            if ($numArr[0] == 1 && $numArr[1] < 10) {

                foreach ($eleven as $key => $val) {
                    if ($numArr[1] == $key) {
                        echo $val;
                    }
                }
            } else if ($numArr[0] >= 1 && $numArr[0] <= 9) {

                foreach ($dozens as $key => $val) {
                    if ($numArr[0] == $key) {
                        echo $val . ' ';
                    }
                }

                foreach ($units as $key => $val) {
                    if ($numArr[1] == $key) {
                        echo $val;
                    }
                }
            }

            break;

        case 3:

            foreach ($hundreds as $key => $val) {
                if ($numArr[0] == $key) {
                    echo $val . ' ';
                }
            }

            if ($numArr[1] > 1) {
                foreach ($dozens as $key => $val) {
                    if ($numArr[1] == $key) {
                        echo $val . ' ';
                    }
                }
                foreach ($units as $key => $val) {
                    if ($numArr[2] == $key) {
                        echo $val;
                    }
                }
            } else {
                foreach ($eleven as $key => $val) {
                    if ($numArr[2] == $key) {
                        echo $val . ' ';
                    }
                }
            }

            break;
    }
}


?>
<?php if (empty($_GET)) { ?>
    <form action="" method="GET">
        <input name="num">
        <input type="submit">
    </form>
<?php } else {

    $num = $_GET['num'];

    echo translit($num);
}
?>