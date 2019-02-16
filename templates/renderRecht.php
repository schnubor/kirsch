<?php
    function renderRecht($recht, $parent)
    {
        $id = slugify($recht->title);

        echo "<div>";
        echo "\t<h4 class=\"collapse-button collapsed\" data-toggle=\"collapse\" data-target=\"#" . $id . "\" aria-expanded=\"false\" aria-controls=\"" . $id . "\"><i class=\"fas fa-chevron-right\"></i><span>" . $recht->title . "</span></h4>";
        echo "\t\t<div class=\"collapse\" id=\"" . $id . "\" data-parent=\"#" . $parent . "\">";
        echo "\t\t<p class=\"collapse-content\">" . $recht->description . "</p>";
        echo "\t</div>";
        echo "</div>";
    }
?>