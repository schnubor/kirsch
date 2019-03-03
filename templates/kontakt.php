<?php
$entry = $contentfulClient->getEntry('6BOdiNcpabR9NupPaOU1ph');
$renderer = new \Contentful\RichText\Renderer();
?>

<section id="kontakt">
    <div class="container">
        <h2 class="title">
            <?php echo $entry->title ?>
        </h2>

        <div class="row content">
            <div class="col-md-6">
                <p>
                    <?php echo nl2br($renderer->render($entry->content)) ?>
                </p>

                <a href="tel:<?php echo $entry->phone ?>">
                    <div class="contactbox">
                        <i class="fas fa-phone"></i>
                        <span>
                            <?php echo $entry->phone ?>
                        </span>
                    </div>
                </a>

                <a href="mailto:<?php echo $entry->email ?>">
                    <div class="contactbox">
                        <i class="fas fa-envelope"></i>
                        <span>
                            <?php echo $entry->email ?>
                        </span>
                    </div>
                </a>

                <a href="tel:<?php echo $entry->fax ?>">
                    <div class="contactbox">
                        <i class="fas fa-fax"></i>
                        <span>
                            <?php echo $entry->fax ?>
                        </span>
                    </div>
                </a>
            </div>

            <div class="col-md-6">
                <div class="list onWhite downloads animated">
                    <h3>Downloads</h3>
                    <ul>
                        <?php
                            foreach( $entry->downloads as $asset ) {
                                echo "<li>\n";
                                echo "<a href=\"" . $asset->getFile()->getUrl() . "\" download>" . $asset->getTitle() . "</a>\n";
                                echo "<p class=\"description\"><em>" . $asset->getDescription() . "</em></p>\n";
                                echo "</li>";
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="map animated">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2677.1852010063453!2d12.125002374073288!3d47.85537638086767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47761a37c2c8c3e3%3A0x6c9bacca705f1453!2sMax-Josefs-Platz+16%2C+83022+Rosenheim!5e0!3m2!1sen!2sde!4v1550332306622" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</section> 