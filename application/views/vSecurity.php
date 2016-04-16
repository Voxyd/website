<?php
	/*
	* @nom             : security.php
	* @description     : Structure pour la page "sécurité" du site des features
	* @authors         : Romain Claveau <romain.claveau@protonmail.ch>
	*/
    $_template =  new Template("Quanta Cloud : ".$this->txt->global->security);
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
                    <div>Quanta Cloud</div>
                </a>
            </div>
            <div id="list">
                <ul>
                    <li><a href="About"><?php echo $this->txt->global->about; ?></a></li>
                    <li><a href="Adventure"><?php echo $this->txt->global->adventure; ?></a></li>
                    <li class="selected"><a href="Security"><?php echo $this->txt->global->security; ?></a></li>
                    <li><a href="https://quantacloud.wordpress.com/"><?php echo $this->txt->global->blog; ?></a></li>
                    <li><a href="Donate"><?php echo $this->txt->global->donate; ?></a></li>
                    <li><a href="Help"><?php echo $this->txt->global->help; ?></a></li>
                </ul>
            </div>
        </section>
        
        
        <!-- Sécurité -->
        <section id="security">
            <div class="paragraph">
                <div class="title"><?php echo $this->txt->security->communicationsEncryption; ?></div>
                <div class="content">
                    <span class="description"><p><?php echo $this->txt->security->communicationsEncryptionTxt; ?></p></span>
                    <span class="image"><img src="./public/pictures/security/letsencrypt.svg" alt="Let's Encrypt" /></span>
                </div>
            </div>
            
            <div class="paragraph">
                <div class="title"><?php echo $this->txt->security->filesEncryption; ?></div>
                <div class="content">
                    <span class="image"><img src="./public/pictures/security/openpgpjs.png" alt="OpenPGP.js" /></span>
                    <span class="description"><?php echo $this->txt->security->filesEncryptionTxt; ?></span>
                </div>
            </div>
            
            <div class="paragraph">
                <div class="title">
                    <?php echo $this->txt->security->SwissLaws; ?>
				</div>
                <div class="content">
                    <span class="description"><?php echo $this->txt->security->SwissLawsTxt; ?></span>
                    <span class="image"><img src="./public/pictures/features/encryption.svg" alt="Lois suisses" /></span>
                </div>
            </div>
        
            <div class="paragraph" id="triple_auth">
                <div class="title"><?php echo $this->txt->security->tripleAuth; ?></div>
                <div class="content">
                    <span class="image">
                        <img src="./public/pictures/security/triple-auth.svg" alt="Triple authentification" />
                    </span>
                    <span class="description"><p><?php echo $this->txt->security->tripleAuthTxt; ?></p></span>
                </div>
            </div>
        </section>
        
        
        <!-- Schéma -->
        <section id="draw" style="display: none;" onclick="draw();">
            <img src="./public/pictures/security/close.png" class="close" />
            <p><img src="./public/pictures/security/draw.png" alt="Schéma chiffrement" /></p>
        </section>
    
        <!-- Footer : Copyright + RS -->
        <section id="footer">
            <div id="copyright">&copy; 2015-2016 <b>Kantum Technologies</b></div>
            <div id="rs">
                <a href="mailto:quantacloud@protonmail.ch"><img src="./public/pictures/features/mail.svg" alt="mail" /></a>
                <a href="https://plus.google.com/u/0/b/113792890240805745979/113792890240805745979/posts"><img src="./public/pictures/features/gplus.svg" alt="google plus" /></a>
                <a href="https://twitter.com/QuantaCloud"><img src="./public/pictures/features/twitter.svg" alt="twitter" /></a>
                <a href="https://www.facebook.com/quantacloud/"><img src="./public/pictures/features/facebook.svg" alt="facebook" /></a>
            </div>
        </section>
    </body>
<?php
    $_template->getFooter();
?>
