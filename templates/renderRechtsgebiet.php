<?php
    require(__DIR__ . '/renderRecht.php');

    function renderRechtsgebiet($rechtsgebiet)
    {
        echo "<div class=\"col-md-6\" id=\"" . slugify($rechtsgebiet->title) . "\">";
        echo "<h3>" . $rechtsgebiet->title . "</h3>";
        echo "<p>" . $rechtsgebiet->description . "</p>";
        echo "<hr>";

        foreach ($rechtsgebiet->rechte as $recht) {
            renderRecht($recht, slugify($rechtsgebiet->title));
        }

        echo "</div>";
    }
?>