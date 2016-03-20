<?php
	/*
	* @nom             : donate.php
	* @description     : Structure pour la page "don" du site des features
	* @authors         : Romain Claveau <romain.claveau@protonmail.ch>
	*/

    $_template =  new Template("Quanta Cloud : Dons");
    $_template->addCss("home_global");
    $_template->addCss("home_donate");  
    $_template->getHeader();
?>
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
                    <li class="selected"><a href="Donate">Faire un don</a></li>
                    <li><a href="Help">Aide</a></li>
                </ul>
            </div>
        </section>
        
        
        <!---------->
        <!-- Dons -->
        <!---------->
        <section id="donate">
            <table>
                <tr>
                    <td>
                        <img src="./public/pictures/donate/server.svg" alt="financement serveurs" /><br /><br />
                        Participer au financement des serveurs<br /><br />
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="L4CKE3QX56FJ4">
                            <input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
                        </form>
                    </td>
                    <td>
                        <img src="./public/pictures/donate/team.svg" alt="financement équipe" /><br /><br />
                        Participer au financement de l'équipe<br /><br />
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="8F6EEEBVRHAWJ">
                            <input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
                        </form>
                    </td>
                    <td>
                        <img src="./public/pictures/donate/conference.svg" alt="financement conférences" /><br /><br />
                        Participer au financement des conférences<br /><br />
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="NP2H7H7KXJB5Q">
                            <input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
                        </form>
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