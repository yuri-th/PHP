<?php
function area($bottom, $height, $upper)
{
    $triangle = $bottom * $height / 2;
    echo "三角形の面積は" . $triangle . "c㎡ です。";

    $square = $bottom * $height;
    echo "四角形の面積は" . $square . "c㎡ です。";


    $trapezoid = ($bottom + $upper) * $height / 2;
    echo "台形の面積は" . $trapezoid . "c㎡ です。";

}

echo area(2, 8, 3);