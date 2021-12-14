<?php
session_start();
    if(!isset($_SESSION['szam']))
    {
        $_SESSION['szam'] = rand(1, 10);
    }
    $rand = $_SESSION['szam'];
    $beirtSzam = isset($_POST['tipp']) ? $_POST['tipp'] : false;
?>
<html>
    <body>
        <form action = "" method = "post">
            Adj meg egy számot 1 és 10 között: 
                <input type = "text" name = "tipp" /><br>
                <button type = "submit">Ok</button><br>
        </form>
        <?php
            if ($beirtSzam != false)
            {
                print "A szám amit megadtál: $beirtSzam <br />";
                if ($beirtSzam == $rand){
                    print "Eltaláltad! <br />"; 
                    unset($_SESSION['szam']); 
                }
                else if ($beirtSzam > $rand){
                    print "Kisebb. <br />";
                }
                else if ($beirtSzam < $rand){
                    print "Nagyobb. <br />";
                }
            }
        ?>
    </body>
</html>