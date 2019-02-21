<?php
    $entry = $contentfulClient->getEntry('3OnlyaHzr3fg21xhbLa4zU');
    $renderer = new \Contentful\RichText\Renderer();
?>

<section id="kanzlei">
    <div class="container">
        <h2 class="title"><?php echo $entry->title ?></h2>

        <div class="row content">
            <div class="col-md-6">
                <?php echo nl2br($renderer->render($entry->get('leftColumn'))); ?>
            </div>
            <div class="col-md-6">
                <div class="list animated">
                    <?php echo nl2br($renderer->render($entry->get('rightColumn'))); ?>
                </div>
            </div>
        </div>
    </div>
</section>