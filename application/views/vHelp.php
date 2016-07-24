<?php
	/*
	* @nom             : help.php
	* @description     : Structure pour la page "aide" du site des features
	* @authors         : Romain Claveau <romain.claveau@protonmail.ch>
	*/

    $_template =  new Template("Muonium Cloud : ".$this->txt->global->help);
    $_template->addCss("home_global");
    $_template->addCss("home_help");
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
                    <div>Muonium Cloud</div>
                </a>
            </div>
            <div id="list">
                <ul>
                    <li><a href="About"><?php echo $this->txt->global->about; ?></a></li>
                    <li><a href="Adventure"><?php echo $this->txt->global->adventure; ?></a></li>
                    <li><a href="Security"><?php echo $this->txt->global->security; ?></a></li>
                    <li><a href="https://quantacloud.wordpress.com/"><?php echo $this->txt->global->blog; ?></a></li>
                    <li><a href="Donate"><?php echo $this->txt->global->donate; ?></a></li>
                    <li class="selected"><a href="Help"><?php echo $this->txt->global->help; ?></a></li>
                </ul>
            </div>
        </section>

        <!-- Sécurité -->
        <section id="help">
            <p class="question"><?php echo $this->txt->help->losePwd; ?></p>
            <p class="answer"><?php echo $this->txt->help->losePwdAns; ?></p>

            <p class="question"><?php echo $this->txt->help->whoCanAccessMyFiles; ?></p>
            <p class="answer"><?php echo $this->txt->help->whoCanAccessMyFilesAns; ?></p>

            <p class="question"><?php echo $this->txt->help->howEncrypted; ?></p>
            <p class="answer"><?php echo $this->txt->help->howEncryptedAns; ?></p>

            <p class="question"><?php echo $this->txt->help->howFunded; ?></p>
            <p class="answer"><?php echo $this->txt->help->howFundedAns; ?></p>

            <p class="question"><?php echo $this->txt->help->helpTerrorism; ?></p>
            <p class="answer"><?php echo $this->txt->help->helpTerrorismAns; ?></p>

            <p class="question"><?php echo $this->txt->help->helpMoney; ?></p>
            <p class="answer"><?php echo $this->txt->help->helpMoneyAns; ?></p>

            <p class="question"><?php echo $this->txt->help->anotherQuestion; ?></p>
            <p class="answer"><?php echo $this->txt->help->anotherQuestionAns; ?></b></p>
        </section>

        <!-- Footer : Copyright + RS -->
        <section id="footer">
            <div id="copyright">&copy; 2015-2016 <b>Kantum Technologies</b></div>
            <div id="rs">
                <a href="mailto:quantacloud@protonmail.ch"><img src="./public/pictures/features/mail.svg" alt="mail" /></a>
                <a href="https://plus.google.com/u/0/b/113792890240805745979/113792890240805745979/posts"><img src="./public/pictures/features/gplus.svg" alt="google plus" /></a>
                <a href="https://twitter.com/MuoniumCloud"><img src="./public/pictures/features/twitter.svg" alt="twitter" /></a>
                <a href="https://www.facebook.com/MuoniumCloud/"><img src="./public/pictures/features/facebook.svg" alt="facebook" /></a>
            </div>
        </section>
    </body>
<?php
    $_template->getFooter();
?>
