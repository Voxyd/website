<?php
	/*
	* @nom             : adventure.php
	* @description     : Structure pour l'avancement du site des features
	* @authors         : Romain Claveau <romain.claveau@protonmail.ch>
	*/
    $_template =  new Template("Muonium : ".$this->txt->global->adventure);
    $_template->addCss("home_global");
    $_template->addCss("home_adventure");
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
                    <li class="selected"><a href="Adventure"><?php echo $this->txt->global->adventure; ?></a></li>
                    <li><a href="Security"><?php echo $this->txt->global->security; ?></a></li>
                    <li><a href="https://muonium.wordpress.com/"><?php echo $this->txt->global->blog; ?></a></li>
                    <li><a href="Donate"><?php echo $this->txt->global->donate; ?></a></li>
                    <li><a href="Help"><?php echo $this->txt->global->help; ?></a></li>
                </ul>
            </div>
        </section>

        <!-- Avancement -->
        <section id="work">
            <div id="bubbles">
                <div class="bubble"><div class="ok" onmouseover="description(1);"><p><?php echo $this->txt->adventure->phase; ?> 1<br /><b>100%</b></p></div></div>
                <div class="bubble"><div class="wait" onmouseover="description(2);"><p><?php echo $this->txt->adventure->phase; ?> 2<br /><b>30%</b></p></div></div>
                <div class="bubble"><div class="no" onmouseover="description(3);"><p><?php echo $this->txt->adventure->phase; ?> 3<br /><b>0%</b></p></div></div>
                <div class="bubble"><div class="no" onmouseover="description(4);"><p><?php echo $this->txt->adventure->phase; ?> 4<br /><b>0%</b></p></div></div>
                <div class="bubble"><div class="no" onmouseover="description(5);"><p><?php echo $this->txt->adventure->phase; ?> 5<br /><b>0%</b></p></div></div>
            </div>

            <div id="description">
                <div>
                    <p><?php echo $this->txt->adventure->mouseDescription; ?></p>
                </div>
            </div>
        </section>

        <!-- Footer : Copyright + RS -->
        <section id="footer">
            <div id="copyright">&copy; 2015-2016 <b>Kantum Technologies</b></div>
            <div id="rs">
                <a href="#mailto:muonium@protonmail.ch"><img src="./public/pictures/features/mail.svg" alt="mail" /></a>
                <a href="https://plus.google.com/u/0/b/113792890240805745979/113792890240805745979/posts"><img src="./public/pictures/features/gplus.svg" alt="google plus" /></a>
                <a href="https://twitter.com/MuoniumCloud"><img src="./public/pictures/features/twitter.svg" alt="twitter" /></a>
                <a href="https://www.facebook.com/MuoniumCloud/"><img src="./public/pictures/features/facebook.svg" alt="facebook" /></a>
            </div>
        </section>

        <script type="text/javascript">
            function description(phase)
            {
                var text;

                switch(phase)
                {
                    case 1:
                        text = "<?php echo $this->txt->adventure->phase1; ?></p>";
                        break;
                    case 2:
                        text = "<?php echo $this->txt->adventure->phase2; ?></p>";
                        break;
                    case 3:
                        text = "<?php echo $this->txt->adventure->phase3; ?></p>";
                        break;
                    case 4:
                        text = "<?php echo $this->txt->adventure->phase4; ?></p>";
                        break;
                    case 5:
                        text = "<?php echo $this->txt->adventure->phase5; ?></p>";
                        break;
                    default:
                        break;
                }

                document.querySelector("section#work div#description div p").innerHTML = text;
            }
        </script>
    </body>
<?php
    $_template->getFooter();
?>
