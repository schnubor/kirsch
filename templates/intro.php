<?php
    $middleBox = $contentfulClient->getEntry('3T3lIEP8CQrrsIFczbSgLs');
    $rightBox = $contentfulClient->getEntry('5fWPGBpQFGhKyTF96TZ40L');
    $asset = $contentfulClient->getAsset('7GpoXwOMzQBnpaxCCSFmzR');
    $url = $asset->getFile()->getUrl();
    $renderer = new \Contentful\RichText\Renderer();

    echo "<div class=\"intro\" style=\"background-image: url('" .$url . "')\">";
?>
    <div class="overlay" id="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="box centered">
                        <h1>
                            Handwerk, Wirtschaft & IT
                            <hr>
                            allgemeines Zivilrecht
                        </h1>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <?php echo $middleBox->title ?>
                        <hr>
                        <p>
                        <?php echo nl2br($renderer->render($middleBox->get('content'))); ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <?php echo $rightBox->title ?>
                        <hr>
                        <p>
                            <?php echo nl2br($renderer->render($rightBox->get('content'))); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>