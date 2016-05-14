<?php
	/*
	* @nom             : about.php
	* @description     : Structure pour la page "à propos" du site des features
	* @authors         : Romain Claveau <romain.claveau@protonmail.ch>
	*/
    $_template =  new Template("Quanta Cloud : ".$this->txt->global->about);
    $_template->addCss("home_global");
    $_template->addCss("home_about");  
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
                    <li class="selected"><a href="About"><?php echo $this->txt->global->about; ?></a></li>
                    <li><a href="Adventure"><?php echo $this->txt->global->adventure; ?></a></li>
                    <li><a href="Security"><?php echo $this->txt->global->security; ?></a></li>
                    <li><a href="https://quantacloud.wordpress.com/"><?php echo $this->txt->global->blog; ?></a></li>
                    <li><a href="Donate"><?php echo $this->txt->global->donate; ?></a></li>
                    <li><a href="Help"><?php echo $this->txt->global->help; ?></a></li>
                </ul>
            </div>
        </section>
        
        <!-- Présentation des membres de l'équipe -->
        <section id="about">
            <p class="title"><?php echo $this->txt->about->ourPolicy; ?></p>
            <p class="description"><?php echo $this->txt->about->policy; ?></p>
            
            <p class="title"><?php echo $this->txt->about->ourTeam; ?></p>
            <table class="members">
                <tr>
                    <td class="photo"><img src="./public/pictures/photos/paul.jpg" alt="Photo de Paul" /></td>
                    <td class="description">
                        <p class="name">Paul Feuvraux <a href="https://fr.linkedin.com/in/paul-feuvraux-816811100"><img src="./public/pictures/about/linkedin.svg" style="height: 18px;width: 18px;" /></a></p>
                        <p class="role"><?php echo $this->txt->about->PaulRole; ?></p>
                        <p class="life"><?php echo $this->txt->about->PaulLife; ?></p>
                    </td>
                    <td class="photo"><img src="./public/pictures/photos/romain.jpg" alt="Photo de Romain" /></td>
                    <td class="description">
                        <p class="name">Romain Claveau <a href="https://fr.linkedin.com/in/romainclaveau"><img src="./public/pictures/about/linkedin.svg" style="height: 18px;width: 18px;" /></a></p>
                        <p class="role"><?php echo $this->txt->about->RomainRole; ?></p>
                        <p class="life"><?php echo $this->txt->about->RomainLife; ?></p>
                    </td>
                </tr>
                <td class="photo"><img src="./public/pictures/photos/dylan.jpg" alt="Photo de Dylan" /></td>
                    <td class="description">
                        <p class="name">Dylan Clement <a href="https://www.linkedin.com/in/dylan-clement-4a5325112"><img src="./public/pictures/about/linkedin.svg" style="height: 18px;width: 18px;" /></a></p>
                        <p class="role"><?php echo $this->txt->about->DylanRole; ?></p>
                        <p class="life"><?php echo $this->txt->about->DylanLife; ?></p>
                    </td>
			<td class="photo"><img src="./public/pictures/photos/arnaud.jpg"  alt="Photo d'Arnaud" /></td>
                    <td class="description">
                        <p class="name">Arnaud Defay  <a href="#"><img src="./public/pictures/about/linkedin.svg" style="height: 18px;width: 18px;" /></a></p>
                        <p class="role"><?php echo $this->txt->about->ArnaudRole; ?></p>
                        <p class="life"><?php echo $this->txt->about->ArnaudLife; ?></p>
                    </td>
                </tr>
                    
            </table>
            
            <p class="title" style="padding-top: 5vh;"><?php echo $this->txt->about->thanksTo; ?></p>
            <table class="thanks">
                <tr>
                    <td><img src="./public/pictures/about/thanks/apache.png" /><br /><a href="http://httpd.apache.org/"><b>Apache</b></a></td>
                    <td><img src="./public/pictures/about/thanks/automattic.png" /><br /><a href="https://wordpress.com/"><b>Wordpress</b></a></td>
                    <td><img src="./public/pictures/about/thanks/github.png" /><br /><a href="https://github.com/"><b>GitHub</b></a></td>
                </tr>
                <tr>
                    <td><img src="./public/pictures/about/thanks/debian.svg" /><br /><a href="https://www.debian.org/"><b>Debian</b></a></td>
                    <td><img src="./public/pictures/about/thanks/linux.png" /><br /><a href="http://kernel.org/"><b>Linux</b></a></td>
                    <td><img src="./public/pictures/about/thanks/mysql.png" /><br /><a href="https://www.mysql.com/"><b>MySQL</b></a></td>
                </tr>
                <tr>
                    <td><img src="./public/pictures/about/thanks/php.png" /><br /><a href="http://www.php.net/"><b>PHP</b></a></td>
                    <td><img src="./public/pictures/about/thanks/protonmail.png" /><br /><a href="https://protonmail.ch/"><b>ProtonMail</b></a></td>
                    <td><img src="./public/pictures/about/thanks/opensource.png" /><br /><a href="https://github.com/Ne0blast/AEjS"><b>AEJS</b></a></td>
                </tr>
                <tr>
                    <td><img src="./public/pictures/about/thanks/icons8.svg" /><br /><a href="https://icons8.com/"><b>Icons8</b></a></td>
                    <td><img src="./public/pictures/about/thanks/gnu.png" /><br /><a href="https://security.appspot.com/vsftpd.html"><b>vsFTPD</b></a></td>
                    <td><img src="./public/pictures/about/thanks/letsencrypt.svg" /><br /><a href="https://letsencrypt.org/"><b>Let's Encrypt</b></a></td>
                </tr>
                <tr>
                    <td><img src="./public/pictures/about/thanks/brackets.jpg" /><br /><a href="http://brackets.io/"><b>Brackets</b></a></td>
                    <td><img src="./public/pictures/about/thanks/phpmyadmin.png" /><br /><a href="http://www.phpmyadmin.net/"><b>PHPMyAdmin</b></a></td>
                </tr>
            </table>
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