<?php
    $entry = $contentfulClient->getEntry('4DjKyNRfocz76ESDPhyLcr');
    $renderer = new \Contentful\RichText\Renderer();

    $portrait = $contentfulClient->getAsset('7rLimRK7hShWCjFB12xWEX');
    $url = $portrait->getFile()->getUrl();
?>

<section id="about">
    <div class="container">
        <h2 class="title"><?php echo $entry->title ?></h2>
    
        <div class="row content">
            <div class="col-lg-4 animated">
                <img src="<?php echo $url ?>" alt="Portrait Kristin Kirsch" class="portrait">
                <hr>
                <p>Rechtsanwältin Kristin Kirsch</p>
            </div>
            <div class="col-lg-4"><?php echo $renderer->render($entry->get('leftColumn')); ?></div>
            <div class="col-lg-4"><?php echo $renderer->render($entry->get('rightColumn')); ?></div>
        </div>
    </div>
</section>