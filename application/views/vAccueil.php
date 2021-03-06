<?php
	/*
	* @nom             : index.php
	* @description     : Structure pour l'index du site des features
	* @authors         : Romain Claveau <romain.claveau@protonmail.ch>
	*/

    $_template =  new Template("Muonium : ".$this->txt->global->home);
    $_template->addCss("home_global");
    $_template->addCss("home_features");
    $_template->addScript("application/ld+json",
                            " {
                                '@context' : 'http://schema.org',
                                '@type' : 'Organization',
                                'name' : 'Muonium',
                                'url' : 'https://www.muonium.ch',
                                'sameAs' : [ 'https://www.facebook.com/muoniumcloud/' ]
                            } "
                         );

    $_template->addMeta("description","Muonium est un projet permettant le stockage sécurisé de vos fichiers en ligne et de permettre ensuite leur gestion");

    $_template->addMeta("keywords","fichiers, fichiers en ligne, facile, muonium, chiffrement, stockage, fichiers, cloud, secure, muonium,
                     	encrypt, decrypt, kantum, technologies, kantum technologies,
                        stockage cloud, cloud chiffré, secure cloud, encrypted cloud, stockage en ligne, stockage sécurisé,
                        chiffré, private drive, private cloud, files, storage, files storage");
    $_template->addMeta("robots","index, follow");

    $_template->addMeta("language","french");

    $_template->getHeader();
?>
<body>
        <!-- Zone de selection de la langue -->
        <section id="language">
            <div>
                <?php $this->getLanguageSelector(); ?>
            </div>
        </section>

        <!-- Logo + Menu -->
        <section id="header">
            <div id="logo">
                <a href="Accueil">
                    <div><img src="./public/pictures/logo_anime.svg" alt="logo animé" /></div>
                    <div>Muonium</div>
                </a>
            </div>
            <div id="list">
                <ul>
                    <li><a href="About"><?php echo $this->txt->global->about; ?></a></li>
                    <li><a href="Adventure"><?php echo $this->txt->global->adventure; ?></a></li>
                    <li><a href="Security"><?php echo $this->txt->global->security; ?></a></li>
                    <li><a href="https://muonium.wordpress.com/"><?php echo $this->txt->global->blog; ?></a></li>
                    <li><a href="Donate"><?php echo $this->txt->global->donate; ?></a></li>
                    <li><a href="Help"><?php echo $this->txt->global->help; ?></a></li>
                </ul>
            </div>
        </section>

        <!-- Zone d'accroche + fond -->
        <section id="background">
            <div id="box">
                <div id="slogan">
                    <p>"Keep our privacy"</p>
                </div>
                <div id="catch">
                    <p style="color: #ffb52d;"><b><?php echo $this->txt->home->secureStorageSolution; ?></b></p>
                </div>
                <div id="button">
                    <a href="#"><input type="button" value="<?php echo $this->txt->global->login; ?>" /></a>&nbsp;
                    <a href="#"><input type="button" value="<?php echo $this->txt->global->register; ?>" /></a>
                </div>
            </div>
        </section>

        <!-- Fonctionnalités -->
        <section id="features">
            <table>
                <tr>
                    <td>
                        <img src="./public/pictures/features/lock.svg" alt="<?php echo $this->txt->home->securedConnections; ?>" /><br />
                        <b><?php echo $this->txt->home->securedConnections; ?></b><br /><br />
                        <p><?php echo $this->txt->home->securedConnectionsTxt; ?></p>
                    </td>
                    <td>
                        <img src="./public/pictures/features/encryption.svg" alt="<?php echo $this->txt->home->endToEndEncryption; ?>" /><br />
                        <b><?php echo $this->txt->home->endToEndEncryption; ?></b><br /><br />
                        <p><?php echo $this->txt->home->endToEndEncryptionTxt; ?></p>
                    </td>
                    <td>
                        <img src="./public/pictures/features/protection.svg" alt="<?php echo $this->txt->home->protection; ?>" /><br />
                        <b><?php echo $this->txt->home->protection; ?></b><br /><br />
                        <p><?php echo $this->txt->home->protectionTxt; ?></p>
                    </td>
                    <td>
                        <img src="./public/pictures/features/free.svg" alt="<?php echo $this->txt->home->free; ?>" /><br />
                        <b><?php echo $this->txt->home->free; ?></b><br /><br />
                        <p><?php echo $this->txt->home->freeTxt; ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="./public/pictures/features/opensource.png" alt="<?php echo $this->txt->home->openSource; ?>" /><br />
                        <b><?php echo $this->txt->home->openSource; ?></b><br /><br />
                        <p><?php echo $this->txt->home->openSourceTxt; ?></p>
                    </td>
                    <td>
                        <img src="./public/pictures/features/anonymous.svg" alt="<?php echo $this->txt->home->anonymity; ?>" /><br />
                        <b><?php echo $this->txt->home->anonymity; ?></b><br /><br />
                        <p><?php echo $this->txt->home->anonymityTxt; ?></p>
                    </td>
                    <td>
                        <img src="./public/pictures/features/modern.svg" alt="<?php echo $this->txt->home->modernity; ?>" /><br />
                        <b><?php echo $this->txt->home->modernity; ?></b><br /><br />
                        <p><?php echo $this->txt->home->modernityTxt; ?></p>
                    </td>
                    <td>
                        <img src="./public/pictures/features/access.svg" alt="<?php echo $this->txt->home->accessibility; ?>" /><br />
                        <b><?php echo $this->txt->home->accessibility; ?></b><br /><br />
                        <p><?php echo $this->txt->home->accessibilityTxt; ?></p>
                    </td>
                </tr>
            </table>
        </section>

        <!-- Footer : Copyright + RS -->
        <section id="footer">
            <div id="copyright">&copy; 2015-2016 <b>Kantum Technologies</b></div>
            <div id="rs">
                <a href="mailto:muonium@protonmail.ch"><img src="./public/pictures/features/mail.svg" alt="mail" /></a>
                <a href="https://plus.google.com/u/0/b/113792890240805745979/113792890240805745979/posts"><img src="./public/pictures/features/gplus.svg" alt="google plus" /></a>
                <a href="https://twitter.com/MuoniumCloud"><img src="./public/pictures/features/twitter.svg" alt="twitter" /></a>
                <a href="https://www.facebook.com/MuoniumCloud/"><img src="./public/pictures/features/facebook.svg" alt="facebook" /></a>
            </div>
        </section>
    </body>
<?php
    $_template->getFooter();
?>
