<?php

class Tabung
{

    function rumus( $jari_jari, $tinggi)
    {
        $volume = 3.14 * $jari_jari * $jari_jari * $tinggi;
        echo "Volume Tabung adalah:" .$volume;
        echo "<br/>";

        $luas = 2 * 3.14 * $jari_jari *($jari_jari + $tinggi);
        echo "Luas Permukaan Tabung adalah:" .$luas;
        echo "<br/>";

        $ls = 2 * 3.14 * $jari_jari *$tinggi;
        echo "Luas Selimut Tabung adalah:". $ls;
        echo "<br/>";

    }
}

    
