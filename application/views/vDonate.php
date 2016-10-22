<?php
	/*
	* @nom             : donate.php
	* @description     : Structure pour la page "don" du site des features
	* @authors         : Romain Claveau <romain.claveau@protonmail.ch>
	*/

    $_template =  new Template("Muonium : ".$this->txt->global->donate);
    $_template->addCss("home_global");
    $_template->addCss("home_donate");
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
                    <li class="selected"><a href="Donate"><?php echo $this->txt->global->donate; ?></a></li>
                    <li><a href="Help"><?php echo $this->txt->global->help; ?></a></li>
                </ul>
            </div>
        </section>

        <!-- Dons -->
        <section id="donate">
            <table>
                <tr>
                    <td>
                        <img src="./public/pictures/donate/server.svg" alt="financement serveurs" /><br /><br />
                        <?php echo $this->txt->donate->serverFinancing; ?><br /><br />
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="FFEGL5WHW4YWQ">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
</form>
                    </td>
                    <td>
                        <img src="./public/pictures/donate/team.svg" alt="financement équipe" /><br /><br />
                        <?php echo $this->txt->donate->teamFinancing; ?> <a style="cursor:pointer;color: #00a7ff;font-weight: bold;" onclick="open_why();">(<?php echo $this->txt->donate->why; ?>)</a><br /><br />
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="UULPTNF33P3EC">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
</form>
                    </td>
                    <td>
                        <img src="./public/pictures/donate/conference.svg" alt="financement conférences" /><br /><br />
                        <?php echo $this->txt->donate->conferenceFinancing; ?><br /><br />
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="93P5MY2H7RESL">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
</form>
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

        <!-- PopUp "Pourquoi ?" -->
        <section id="popUp_why">
            <div id="content_popUp">
                <a onclick="close_why();"><?php echo $this->txt->global->close; ?></a>
                <p>
                    <span class="title"><b><?php echo $this->txt->donate->whyDonate; ?></b><br /><br /></span>
                    <span class="text">
                    <?php echo $this->txt->donate->whyDonateTxt; ?>
                    </span>
                </p>
            </div>
        </section>

        <script type="text/javascript">
            var open_why = function()
            {
                document.querySelector("section#popUp_why").style.display = "block";
            }

            var close_why = function()
            {
                document.querySelector("section#popUp_why").style.display = "none";
            }
        </script>
    </body>
<?php
    $_template->getFooter();
?>
