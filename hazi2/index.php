<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $tomb = array(5, '5', '05', 12.3, '16.7', 'five', 0xDECAFBAD, '10e200');
        for ($i = 0; $i < count($tomb); $i++) {
            if (is_numeric($tomb[$i])) {
                echo gettype($tomb[$i]) . " Igen <br>";
            } else {
                echo gettype($tomb[$i]) . " Nem <br>";
            }
        }
        
        $orszagok = array(" Magyarország " => " Budapest", " Románia" => " Bukarest",
            "Belgium" => "Brussels", "Austria" => "Vienna", "Poland" => "Warsaw");
        foreach ($orszagok as $kulcs => $ertek) {
            print "$kulcs fővárosa $ertek <br>";
        }
        
        
        $napok = array(
            "HU" => array("H", "K", "Sze", "Cs", "P", "Szo", "V"),
            "EN" => array("M", "Tu", "W", "Th", "F", "Sa", "Su"),
            "DE" => array("Mo", "Di", "Mi", "Do", "F", "Sa", "So"),
        );
        foreach ($napok as $kulcs => $ertek) {
            echo "$kulcs: ";
            foreach ($ertek as $nap) {
                print "$nap, ";
            }
            print "<br>";
        }
        
        
        $szinek = array('A' => 'Kek', 'B' => 'Zold', 'C' => 'Piros');
        function atalakit($tomb, $meret) {
            if ($meret == 'nagybetus') {
                foreach ($tomb as $kulcs => $ertek) {
                    echo strtoupper($ertek) . " ";
                }
            } else if ($meret == 'kisbetus') {
                foreach ($tomb as $kulcs => $ertek) {
                    echo strtolower($ertek) . " ";
                }
            } else {
                echo "nem helyes meret";
            }
        }
        atalakit($szinek, 'nagybetus');
        atalakit($szinek, 'kisbetus');
        ?>
    </body>
</html>
