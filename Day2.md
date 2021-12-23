# Tag 2
Wir haben am Tag 1 einen ersten Einstieg in PHP vorgenommen.
Nun soll von 08:00 bis 12:00 folgender Auftrag durch Sie realisiert werden:  

| Zeit | Beschreibung | Quelle |
| --- | --- | --- |
| 30' | Erstelle dir eine Statische Webseite mit HTML und CSS wobei du das HTML in eine PHP Datei schreibst. Erstelle dir hierbei mindestens folgende Seiten <pre>Home mit Inhalt<br>Kontakt<br>Registrieren<br>Login<br>Impressum<br>About<br>Store! (Soll dann etwas verkauft werden können)</pre> | |
| 30' | Setze dich mit dem CSS Framework Bootstrap auseinander. Beantworte hierbei folgende Fragen: Was ist es? Wozu dient es? Was bringt es mir? Wie verwende ich es? | https://getbootstrap.com/ |
| 45' | Erweitere deine bestehende Statische HTML Webseite mit Bootstrap. Implementiere folgende Punkte: Layouts, mit Grid! Formulare! Navbar! Content! Alerts bei Formularen! | |
| 30' | Setze dich mit der Library PHP Mailer auseinander. Wie funktioniert es? Wie ist es in PHP zu implementieren? | https://packagist.org/packages/phpmailer/phpmailer |
| 30' | Installiere dir Composer | https://getcomposer.org/ |
| 15' | Starte ein neues Composer Projekt.<pre>composer init</pre> und installiere dir die PHPMailer Library | | 
| 45' | Sorge dafür, dass dein ausgefülltes Formular via Mail an dich gesendet wird | |
| Bonus | Um die Kontaktseite oder so spannender zu gestalten, möchte man eine Karte verwenden! Schau dir mal die https://leafletjs.com/ Library an. Um danach ein Layer verwenden zu können, ist OpenStreetmap als freier Anbieter optimal. Siehe weiter unten ein Code Example. Jedoch ist es für dich noch nicht erforderlich, dies mit PHP zu kombinieren. Gib die Karte mit dem Fokus auf deine Adresse aus.  | https://leafletjs.com/ <br> https://www.openstreetmap.org/ <br> | 

<pre>
<?php
    if($map):
        $coordinates = $map->coordinates;
        if($coordinates):
            $comment = $map->map_description;
            $comment = str_replace("\n","",strip_tags(str_replace("</p>", "<br>", trim($comment)), '<br><a><strong><em>'));
            $zoom = $map->zoom_factor;
    ?>

    <div id="map" class="col-md map"></div>
    <script>
        <?php
            echo "var place = [{$coordinates}];";
        ?>
        var map = L.map('map').setView(place, <?php echo $zoom ?>);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
        L.marker(place).addTo(map)
            .bindPopup('<?php echo $comment ?>')
            .openPopup();
    </script>
    <?php
        endif;
    endif;
    ?>
</pre>
