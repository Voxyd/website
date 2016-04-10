<?php
	/*
	* @nom             : index.php
	* @description     : Structure pour l'index du site des features
	* @authors         : Romain Claveau <romain.claveau@protonmail.ch>
	*/

    $_template =  new Template("Quanta Cloud : Chiffrement de vos fichiers");
    $_template->addCss("home_global");
    $_template->addCss("home_features");  
    $_template->addScript("application/ld+json",
                            " {
                                '@context' : 'http://schema.org',
                                '@type' : 'Organization',
                                'name' : 'Quanta Cloud',
                                'url' : 'https://www.quantacloud.ch',
                                'sameAs' : [ 'https://www.facebook.com/quantacloud/' ]
                            } "
                         );

    $_template->addMeta("description","Quanta Cloud est un projet permettant le stockage sécurisé de vos fichiers en ligne et de permettre ensuite leur gestion");

    $_template->addMeta("keywords","fichiers, fichiers en ligne, facile, quanta, quantacloud, quanta cloud, chiffrement, stockage, fichiers, cloud, secure, quanta, 
                        quantacloud, quanta cloud, encrypt, decrypt, kantum, technologies, kantum technologies, 
                        stockage cloud, cloud chiffré, secure cloud, encrypted cloud, stockage en ligne, stockage sécurisé, 
                        chiffré, private drive, private cloud, files, storage, files storage");
    $_template->addMeta("robots","index, follow");

    $_template->addMeta("language","french");

    $_template->getHeader();
?>
<head><!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//quantacloud.ch/majorana/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//quantacloud.ch/majorana/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code --></head>
    <body>
        <!------------------------------------>
        <!-- Zone de selection de la langue -->
        <!------------------------------------>
        <section id="language">
            <div>
                <select>
                    <option value="fr" selected>Français</option>
                    <option value="en">English</option>
                </select>
            </div>
        </section>
        
        
        <!----------------->
        <!-- Logo + Menu -->
        <!----------------->
        <section id="header">
            <div id="logo">
                <a href="Accueil">
                    <div><img src="./public/pictures/logo_anime.svg" alt="logo animé" /></div>
                    <div>Quanta Cloud</div>
                </a>
            </div>
            <div id="list">
                <ul>
                    <li><a href="About">&Agrave; propos</a></li>
                    <li><a href="Adventure">Avancement</a></li>
                    <li><a href="Security">Sécurité</a></li>
                    <li><a href="https://quantacloud.wordpress.com/">Blog</a></li>
                    <li><a href="Donate">Faire un don</a></li>
                    <li><a href="Help">Aide</a></li>
                </ul>
            </div>
        </section>
        
        
        <!---------------------------->
        <!-- Zone d'accroche + fond -->
        <!---------------------------->
        <section id="background">
            <div id="box">
                <div id="slogan">
                    <p>"Keep our privacy"</p>
                </div>
                <div id="catch">
                    <p style="color: #ffb52d;"><b>Solution de stockage sécurisé</b></p>
                </div>
                <div id="button">
                    <a href="../neutron/"><input type="button" value="Se connecter" /></a>&nbsp;
                    <a href="../neutron/Inscription"><input type="button" value="S'inscrire" /></a>
                </div>
            </div>
        </section>
        
        
        <!--------------------->
        <!-- Fonctionnalités -->
        <!--------------------->
        <section id="features">
            <table>
                <tr>
                    <td>
                        <img src="./public/pictures/features/lock.svg" alt="Connexions sécurisées" /><br />
                        <b>Connexions sécurisées</b><br /><br />
                        <p>Toutes vos connexions à Quanta Cloud sont sécurisées à l'aide de la technologie TLS 1.2</p>
                    </td>
                    <td>
                        <img src="./public/pictures/features/encryption.svg" alt="Chiffrement bout-en-bout" /><br />
                        <b>Chiffrement de bout-en-bout</b><br /><br />
                        <p>Tous vos fichiers sont chiffrés au niveau de votre navigateur afin que vous puissiez être les seuls à pouvoir les consulter</p>
                    </td>
                    <td>
                        <img src="./public/pictures/features/protection.svg" alt="Protection" /><br />
                        <b>Protection</b><br /><br />
                        <p>Vos fichiers sont protégés contre l'espionnage et seuls vos identifiants vous permettent de visionner vos fichiers</p>
                    </td>
                    <td>
                        <img src="./public/pictures/features/free.svg" alt="Gratuit" /><br />
                        <b>Gratuit</b><br /><br />
                        <p>La vie privée sur Internet est un droit. Ce sont vos dons qui permettent de financer les serveurs, l'équipe ainsi que nos conférences</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="./public/pictures/features/opensource.png" alt="OpenSource" /><br />
                        <b>OpenSource</b><br /><br />
                        <p>Quanta Cloud utilise des algorithmes de chiffrements opensources, testés par la communauté du Libre</p>
                    </td>
                    <td>
                        <img src="./public/pictures/features/anonymous.svg" alt="Anonymat" /><br />
                        <b>Anonymat</b><br /><br />
                        <p>Quanta Cloud ne requiert et ne collecte aucune information personnelle, vous restez anonyme</p>
                    </td>
                    <td>
                        <img src="./public/pictures/features/modern.svg" alt="Modernité" /><br />
                        <b>Modernité</b><br /><br />
                        <p>L'interface est intuitive et moderne, vous permettant d'accéder à vos fichiers rapidement et facilement</p>
                    </td>
                    <td>
                        <img src="./public/pictures/features/access.svg" alt="Accessibilité" /><br />
                        <b>Accessibilité</b><br /><br />
                        <p>Accédez à tous vos fichiers facilement en ligne, de n'importe où et n'importe quand</p>
                    </td>
                </tr>
            </table>
        </section>
        
        
        <!----------------------------->
        <!-- Footer : Copyright + RS -->
        <!----------------------------->
        <section id="footer">
            <div id="copyright">&copy; 2015-2016 <b>Kantum Technologies</b></div>
            <div id="rs">
                <a href="mailto:quantacloud@protonmail.ch"><img src="./public/pictures/features/mail.svg" alt="mail" /></a>
                <a href="#"><img src="./public/pictures/features/gplus.svg" alt="google plus" /></a>
                <a href="https://twitter.com/QuantaCloud"><img src="./public/pictures/features/twitter.svg" alt="twitter" /></a>
                <a href="https://www.facebook.com/quantacloud/"><img src="./public/pictures/features/facebook.svg" alt="facebook" /></a>
            </div>
        </section>
    </body>
<?php
    $_template->getFooter();
?>

