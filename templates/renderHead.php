<?php
    function renderHead($title, $description)
    {
        require_once(TEMPLATE_DIR . '/head.php');

        echo "\t<title>" . $title . "</title>";
        echo "\t<meta name=\"description\" content=\"" . $description . "\">\n";
        echo "\t<link rel=\"canonical\" href=\"http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}\">\n";
        echo "\t<meta property=\"og:url\" content=\"http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}\">\n";
        echo "\t<meta property=\"og:type\" content=\"website\">\n";
        echo "\t<meta property=\"og:title\" content=\"" . $title . "\">\n";
        echo "\t<meta property=\"og:image\" content=\"http://{$_SERVER['HTTP_HOST']}/img/content/fb.png\">\n";
        echo "\t<meta property=\"og:description\" content=\"" . $description . "\">\n";
        echo "\t<meta property=\"og:site_name\" content=\"Dr. med. B. Schulze - Fachärztin für Urologie\">\n";
        echo "</head>";
    }
?>