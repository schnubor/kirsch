<?php
    $entry = $contentfulClient->getEntry('2eiPmbp44gKqzPRqEAkd3T');
    $renderer = new \Contentful\RichText\Renderer();
?>

<section id="kosten">
    <div class="container">
        <h2 class="title white"><?php echo $entry->title ?></h2>

        <div class="row content">
            <div class="col-md-12">
                <?php echo nl2br($renderer->render($entry->get('content'))); ?>
            </div>
        </div>
    </div>
</section>