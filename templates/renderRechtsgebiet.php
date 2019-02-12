<?php
    require(__DIR__ . '/renderRecht.php');

    function renderRechtsgebiet($rechtsgebiet)
    {
        echo "<div class=\"col-md-6\" id=\"" . $rechtsgebiet->title . "\">";
        echo "<h3>" . $rechtsgebiet->title . "</h3>";
        echo "<p>" . $rechtsgebiet->description . "</p>";
        echo "<hr>";

        foreach ($rechtsgebiet->rechte as $recht) {
            renderRecht($recht, $rechtsgebiet->title);
        }

        echo "</div>";
    }
?>