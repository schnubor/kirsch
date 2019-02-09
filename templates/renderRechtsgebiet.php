<?php
    require(__DIR__ . '/renderRecht.php');

    function renderRechtsgebiet($rechtsgebiet)
    {
        echo "\t<h3>" . $rechtsgebiet->title . "</h3>";
        echo "\t<p>" . $rechtsgebiet->description . "</p>";
        echo "<hr>";

        foreach ($rechtsgebiet->rechte as $recht) {
            renderRecht($recht);
        }
    }
?>