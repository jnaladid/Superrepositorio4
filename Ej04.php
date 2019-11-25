<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $int1 = rand(1, 3);
        $int2 = rand(1, 3);
        $suma = $int1 + $int2;
        $resta= $int1 - $int2;
        $mult = $int1 * $int2;
        $div = $int1 / $int2;
        
        echo "int1 + int2 = $suma  <br> int1 - int2 = $resta <br> int1 * int2 = $mult<br> int1 / int2 = $div"
        ?>
    </body>
</html>
