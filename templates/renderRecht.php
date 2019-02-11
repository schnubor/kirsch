<?php
    function renderRecht($recht)
    {
        echo "<div>";
        echo "\t<h4>" . $recht->title . "</h4>";
        echo "\t<p>" . $recht->description . "</p>";
        echo "</div>";
    }
?>