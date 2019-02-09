<?php
    function renderRecht($recht)
    {
        echo "\t<h4>" . $recht->title . "</h4>";
        echo "\t<p>" . $recht->description . "</p>";
    }
?>