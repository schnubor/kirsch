<?php
require(__DIR__ . '/renderRechtsgebiet.php');
$rechtsgebiete = $contentfulClient->getEntry('2AoJH2CE38ylndeSriZ3Nv');
?>

<section id="rechtsgebiete">
    <div class="container">
        <h2 class="title white">
            <?php echo $rechtsgebiete->title ?>
        </h2>
        <div class="row content">
            <?php
            foreach ($rechtsgebiete->listEntries as $rechtsgebiet) {
                renderRechtsgebiet($rechtsgebiet);
            }
            ?>
        </div>
    </div>
</section> 