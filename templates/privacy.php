<?php
    $entry = $contentfulClient->getEntry('4ZWTfKvUDuxNTPTl1HSJB8');
    $renderer = new \Contentful\RichText\Renderer();
?>

<section id="legal">
    <div class="container">
        <div class="logo">KIRSCH</div>

        <h2 class="title"><?php echo $entry->title ?></h2>

        <?php echo $renderer->render($entry->get('content')); ?>
    </div>
</section>