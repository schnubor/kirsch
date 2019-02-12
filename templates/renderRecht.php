<?php
    function renderRecht($recht, $title)
    {
        $id = slugify($recht->title);

        echo "<div>";
        echo "\t<h4 class=\"collapse-button\" data-toggle=\"collapse\" data-target=\"#" . $id . "\" aria-expanded=\"false\" aria-controls=\"" . $id . "\">" . $recht->title . "</h4>";
        echo "\t<div class=\"collapse\" id=\"" . $id . "\" data-parent=\"#" . $title . "\">";
        echo "\t\t<p class=\"collapse-content\">" . $recht->description . "</p>";
        echo "\t</div>";
        echo "</div>";
    }
?>