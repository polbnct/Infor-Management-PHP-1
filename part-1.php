<?php
        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];

        $total = null;
        $total = (pow($b, 2) - (4 * $a * $c));
        echo $total;

    ?>