<!-- fichier cnam/nfa017/2017-cf1/index.inc.php - 20180604-PBO -->

<!-- ENTETE HTML =============================================================== -->
<?php
     include'inc/entete.inc.php';
     entete("NFA083 CF1 : Présentation hébergeur",0); /* pour le title et le h1 */ 
?>

    <!-- PRESENTATION Hébergeur ============================================================== -->
    <section>
        <h2>Informations sur mon hébergeur</h2>
        <p><strong>Nom : </strong> LWS</p>
        <p><strong>Logo : </strong> <img src="img/lws.jpg" /></p>
        <p><strong>Siège social : </strong> 4 Rue Galvani 75017 Paris</p>
        <p><strong>Lien d'inscription : </strong>
            <a href="https://www.lws.fr/hebergement_web.php" target="_blanck">Inscription LWS</a></p>
    </section>
    <section>
        <h2>Informations sur la page question.php</h2>
        <p><strong>Temps de chargement total en ms( https://tools.pingdom.com/ ): </strong> 2 050 s</p>
        <p><strong>Temps lié hébergeur (ms) : </strong> 1 200 s</p>
        <p><strong>Temps lié image (ms) : </strong> 46 ms</p>
        <p><strong>Temps lié CSS (ms) : </strong> 42 ms</p>
        <p><strong>Temps lié JS (ms) : </strong> 10 ms</p>
        <p><strong>Adresse IP d'hébergement de la page question.php 
           (http://www.mon-ip.com/adresse-ip-site-internet.php) : </strong>
            <?php echo $_SERVER['SERVER_ADDR'];?>
        </p>
        <p><strong>Nom du serveur d'hébergement de la page question.php : </strong> ns1.lws-hosting.net</p>
    </section>
    <section>
        <h2>Complément d'information</h2>
        <p><strong>Une question complémentaire ? </strong>
            <a href="question.php" id="question" class="actif">Poser une question</a>
        </p>
    </section>

    <footer>Copyright P.BOUQUET</footer>

    </body>

    </html>
