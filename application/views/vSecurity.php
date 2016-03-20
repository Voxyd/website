<?php
	/*
	* @nom             : security.php
	* @description     : Structure pour la page "sécurité" du site des features
	* @authors         : Romain Claveau <romain.claveau@protonmail.ch>
	*/
    $_template =  new Template("Quanta Cloud : Sécurité");
    $_template->addCss("home_global");
    $_template->addCss("home_security");
    $_template->addScript("text/javascript",
                            'function draw()
                            {
                                var element = document.querySelector("section#draw");

                                if(element.style.display == "none")
                                {
                                    element.style.display = "table";
                                }
                                else
                                {
                                    element.style.display = "none";
                                }
                            }'
                         );
    $_template->getHeader();
?>

    </head>
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
                    <li class="selected"><a href="Security">Sécurité</a></li>
                    <li><a href="https://quantacloud.wordpress.com/">Blog</a></li>
                    <li><a href="Donate">Faire un don</a></li>
                    <li><a href="Help">Aide</a></li>
                </ul>
            </div>
        </section>
        
        
        <!-------------->
        <!-- Sécurité -->
        <!-------------->
        <section id="security">
            <div class="paragraph">
                <div class="title">Chiffrement des communications</div>
                <div class="content">
                    <span class="description"><p>Quanta Cloud utilise la technologie <a href="https://en.wikipedia.org/wiki/Transport_Layer_Security#TLS_1.2">TLS 1.2</a> via un certificat généré par <a href="https://letsencrypt.org/">Let's Encrypt</a> afin de sécuriser vos communications entre vos appareils et les serveurs. Grâce à cette technologie, les informations que vous envoyez (votre identifiant, votre mot de passe, etc...) et que vous recevez (informations personnelles, etc...) sont chiffrées au moyen d'un algorithme nommé <a href="https://en.wikipedia.org/wiki/Advanced_Encryption_Standard">AES-128</a> permettant un chiffrement par <b>AES - 128 bits</b>.<br />Ainsi, même si vos communications sont interceptées, elles ne pourront pas être déchiffrées et personne ne pourra voler les informations en transit entre vous et les serveurs.</p></span>
                    <span class="image"><img src="./public/pictures/security/letsencrypt.svg" alt="Let's Encrypt" /></span>
                </div>
            </div>
            
            <div class="paragraph">
                <div class="title">Chiffrement des fichiers</div>
                <div class="content">
                    <span class="image"><img src="./public/pictures/security/openpgpjs.png" alt="OpenPGP.js" /></span>
                    <span class="description"><p>Nous utilisons le chiffrement de bout-en-bout. Cela signifie que quelque soit le stade (upload, stockage, download), votre fichier sera toujours chiffré. Ainsi, si une interception a lieu, l'attaquant ne pourra jamais lire vos fichiers. L'algorithme de chiffrement utilisé est <b>RSA</b> via <a href="http://openpgpjs.org/">OpenPGP.js</a> (qui est une implémentation complète et opensource de OpenPGP) qui permet <b>un chiffrement sur 4096 bits</b>. Lors de la création de son compte, l'utilisateur se voit attribuer deux clés personnelles et uniques afin de pouvoir chiffrer et déchiffrer ses fichiers. Grâce à ce principe, nous ne pouvons pas déchiffrer vos fichiers. Lors de votre connexion, vos deux clés seront stockées au niveau de votre navigateur afin de permettre le chiffrement et le déchiffrement en local. Ceci permet de conserver les flux chiffrés.<br /><a style="cursor: pointer;" onclick="draw();">Ouvrir le schéma de fonctionnement</a></p></span>
                </div>
            </div>
            
            <div class="paragraph">
                <div class="title">Sous la protection des lois suisses</div>
                <div class="content">
                    <span class="description"><p>Nos serveurs seront basés <b>en Suisse</b>, comme la plupart des projets qui utilisent le chiffrement comme moyen pour se défendre contre l'espionnage de masse. Le premier avantage est sa neutralité vis à vis de l'UE et des USA, la rendant quasiment invulnérable contre des intrusions gouvernementales. De plus, la Suisse possède des lois permettant le chiffrement <b>sans aucune restriction et sans conditions</b> (contrairement aux USA avec <a href="https://en.wikipedia.org/wiki/Patriot_Act">le Patriot Act</a>). Nos serveurs se situeront en Suisse, en sécurité contre les intrusions physiques. Vos fichiers restent chiffrés sur les serveurs, les rendant invulnérables, même face à des attaques physiques.</p></span>
                    <span class="image"><img src="./public/pictures/features/encryption.svg" alt="Lois suisses" /></span>
                </div>
            </div>
        
            <div class="paragraph" id="triple_auth">
                <div class="title">Triple-authentification</div>
                <div class="content">
                    <span class="image"><img src="./public/pictures/security/triple-auth.svg" alt="Triple authentification" /></span>
                    <span class="description"><p>Aucune autre personn mise à part vous de doit accéder à vos fichiers. C'est pour cela que nous avons mis en place un <b>système d'authentification avec 3 couches</b>. Le principe est assez simple : Vous rentrez <b>vos identifiants</b> (pseudo/mail &amp; mot de passe) et validez, ceci correspond à la première couche de sécurité. Une fois que vous êtes connecté, il vous faut entrer <b>votre phrase secrète</b> afin de pouvoir déchiffrer votre clé personnelle qui permet ensuite le déchiffrement de vos fichiers, cela correspond à la deuxième couche. Mais, nous avons pensé qu'une couche supplémentaire apporterait une sécurité en plus. Lorsque vous avez rentré vos identifiants et votre phrase secrète, <b>un mail contenant un code vous est envoyé</b>, vous devez rentrer le code reçu sur la page pour être totalement authentifié. Tout ceci est peut-être un peu long, mais permet de renforcer la sécurité de votre compte.<br />Ce système est inspiré de la <a href="https://en.wikipedia.org/wiki/Multi-factor_authentication">double-authentification</a> faite par certains sites comme Gmail ou encore Facebook.</p></span>
                </div>
            </div>
        </section>
        
        
        <!------------>
        <!-- Schéma -->
        <!------------>
        <section id="draw" style="display: none;" onclick="draw();">
            <img src="./public/pictures/security/close.png" class="close" />
            <p><img src="./public/pictures/security/draw.png" alt="Schéma chiffrement" /></p>
        </section>
        
    
        <!----------------------------->
        <!-- Footer : Copyright + RS -->
        <!----------------------------->
        <section id="footer">
            <div id="copyright">&copy; 2015-2016 <b>Kantum Technologies</b></div>
            <div id="rs">
                <a href="#"><img src="./public/pictures/features/mail.svg" alt="mail" /></a>
                <a href="#"><img src="./public/pictures/features/gplus.svg" alt="google plus" /></a>
                <a href="#"><img src="./public/pictures/features/twitter.svg" alt="twitter" /></a>
                <a href="https://www.facebook.com/quantacloud/"><img src="./public/pictures/features/facebook.svg" alt="facebook" /></a>
            </div>
        </section>
    </body>
<?php
    $_template->getFooter();
?>
