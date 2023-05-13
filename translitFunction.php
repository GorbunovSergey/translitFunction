<?php 

function translit($number)
{
    $num = strval($number);
    $numArr = str_split($num, 1);

    $units = [1 => 'один', 'два', 'три', 'четыре', 'пять', 'шесть', 'семь', 'восемь', 'девять'];
    $eleven = [1 => 'одиннадцать', 'двеннадцать', 'триннадцать', 'четырнадцать', 'пятнадцать', 'шестнадцать', 'семнадцать', 'восемнадцать', 'девятнадцать'];
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

            break;
    }
}
