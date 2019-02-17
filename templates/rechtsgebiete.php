<?php
require(__DIR__ . '/renderRechtsgebiet.php');
$query = new \Contentful\Delivery\Query();
$query->setContentType('rechtsgebiet');
try {
    $rechtsgebiete = $contentfulClient->getEntries($query);
} catch (\Contentful\Core\Exception\NotFoundException $exception) {
    debug_to_console('Contentful error: ' . $exception);
}
?>

<section id="rechtsgebiete">
    <div class="container">
        <h2 class="title">Rechtsgebiete</h2>
        <div class="row content">
            <?php
            foreach ($rechtsgebiete as $rechtsgebiet) {
                renderRechtsgebiet($rechtsgebiet);
            }
            ?>
        </div>
    </div>
</section>
