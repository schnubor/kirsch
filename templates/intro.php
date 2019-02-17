<?php
    $asset = $contentfulClient->getAsset('7GpoXwOMzQBnpaxCCSFmzR');
    $url = $asset->getFile()->getUrl();

    echo "<div class=\"intro\" style=\"background-image: url('" .$url . "')\">";
?>
    <div class="overlay" id="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="box centered">
                        <h1>
                            Handwerk, Wirtschaft & IT/Medien
                            <hr>
                            allgemeines Zivilrecht
                        </h1>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        Neugründung
                        <hr>
                        <p>
                            <br>
                            Max-Josefs-Platz 16 <br>
                            83022 Rosenheim <br><br>

                            <strong>Rechtsanwältin Kristin Kirsch</strong><br>
                            <a href="mailto:kanzlei@kirschkanzlei.de">kanzlei@kirschkanzlei.de</a><br>
                            Telefon 08031/25313
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        Rat neu erfunden
                        <hr>
                        <p>
                            Die Anwaltskanzlei im Herzen Rosenheims möchte Leben in das Recht bringen: <br><br>
Mandantenorientierung, Innovation, Verbindung von Tradition und Moderne.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>