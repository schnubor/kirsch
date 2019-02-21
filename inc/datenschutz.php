<?php
    require( TEMPLATE_DIR . 'renderHead.php' );
    require( TEMPLATE_DIR . 'renderLegal.php' );
    $entry = $contentfulClient->getEntry('4ZWTfKvUDuxNTPTl1HSJB8');
?>

<!DOCTYPE html>
<html lang="en">
    <?php renderHead(
        'Kanzlei Kirsch | Handwerk, Wirtschaft & IT/Medien, allgemeines Zivilrecht | Datenschutz',
        'Die Anwaltskanzlei im Herzen Rosenheims möchte Leben in das Recht bringen:
Mandantenorientierung, Innovation, Verbindung von Tradition und Moderne.', true) ?>

    <body>
        <?php renderLegal($entry) ?>
    </body>
</html>