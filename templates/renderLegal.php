<?php
    function renderLegal( $entry ) {
        $renderer = new \Contentful\RichText\Renderer();

        echo "<section id=\"legal\">\n";
        echo "    <div class=\"container\">\n";
        echo "        <a href=\"/\" class=\"logo\">KIRSCH</a>\n";
        echo "<hr/>";
        echo "        <h2 class=\"title\">$entry->title</h2>\n";
        echo nl2br($renderer->render($entry->get('content')));
        echo "    </div>\n";
        echo "</section>";

    }
?>