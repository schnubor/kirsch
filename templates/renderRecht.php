<?php
    function renderRecht($recht, $parent)
    {
        $id = slugify($recht->title);
        $renderer = new \Contentful\RichText\Renderer();
        $content = '<div class="collapse-content">' . nl2br($renderer->render($recht->get('content'))) . '</div>';

        echo "<div>";
        echo "\t<h4 class=\"collapse-button collapsed\" data-toggle=\"collapse\" data-target=\"#" . $id . "\" aria-expanded=\"false\" aria-controls=\"" . $id . "\"><i class=\"fas fa-chevron-right\"></i><span>" . $recht->title . "</span></h4>";
        echo "\t\t<div class=\"collapse\" id=\"" . $id . "\" data-parent=\"#" . $parent . "\">";
        echo "\t\t" . $content;
        echo "\t</div>";
        echo "</div>";
    }
?>