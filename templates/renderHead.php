<?php
    function renderHead($title, $description, $noindex = false )
    {
        require_once(TEMPLATE_DIR . '/head.php');
        include(INCLUDE_DIR . '/contentful-init.php');

        $ogImage = $contentfulClient->getAsset('1Jhs0s0B8StmWDieCYLwhN');
        $imageUrl = $ogImage->getFile()->getUrl();

        echo "\t<title>" . $title . "</title>";
        echo "\t<meta name=\"description\" content=\"" . $description . "\">\n";
        echo "\t<link rel=\"canonical\" href=\"https://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}\">\n";
        echo "\t<meta property=\"og:url\" content=\"https://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}\">\n";
        echo "\t<meta property=\"og:type\" content=\"website\">\n";
        echo "\t<meta property=\"og:title\" content=\"" . $title . "\">\n";
        echo "\t<meta property=\"og:image\" content=\"$imageUrl\">\n";
        echo "\t<meta property=\"og:description\" content=\"" . $description . "\">\n";
        echo "\t<meta property=\"og:site_name\" content=\"Kanzlei Kristin Kirsch | Allgemeines Zivilrecht, Handwerk, Wirtschaft & IT\">\n";
        echo $noindex ? "\t<meta name=\"robots\" content=\"noindex,nofollow\">\n" : '';
        echo "</head>";
    }
?>
