<?php
    $entry = $contentfulClient->getEntry('2eiPmbp44gKqzPRqEAkd3T');
    $renderer = new \Contentful\RichText\Renderer();
?>

<section id="kosten">
    <div class="container">
        <p class="title white"><?php echo $entry->title ?></p>

        <div class="row content">
            <div class="col-md-6">
                <?php echo $renderer->render($entry->get('leftColumn')); ?>
            </div>
            <div class="col-md-6">
                <?php echo $renderer->render($entry->get('rightColumn')); ?>
            </div>
        </div>
    </div>
</section>