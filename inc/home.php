<?php
    require( TEMPLATE_DIR . 'renderHead.php' );
?>

<!DOCTYPE html>
<html lang="en">
    <?php renderHead(
        'Kanzlei Kirsch | Handwerk, Wirtschaft & IT/Medien, allgemeines Zivilrecht',
        'Die Anwaltskanzlei im Herzen Rosenheims möchte Leben in das Recht bringen:
Mandantenorientierung, Innovation, Verbindung von Tradition und Moderne.') ?>

    <body>
        <?php include( TEMPLATE_DIR . 'navigation.php') ?>
        <?php include( TEMPLATE_DIR . 'intro.php') ?>
        <?php include( TEMPLATE_DIR . 'kanzlei.php') ?>
        <?php include( TEMPLATE_DIR . 'rechtsgebiete.php') ?>
        <?php include( TEMPLATE_DIR . 'about.php') ?>
        <?php include( TEMPLATE_DIR . 'kosten.php') ?>
        <?php include( TEMPLATE_DIR . 'kontakt.php') ?>
        <?php include( TEMPLATE_DIR . 'footer.php') ?>
        <?php include( TEMPLATE_DIR . 'scrollToTop.php') ?>
    </body>
</html>