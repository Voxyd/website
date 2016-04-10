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
                        Participer au financement de l'équipe <a style="cursor:pointer;color: #00a7ff;font-weight: bold;" onclick="open_why();">(Pourquoi ?)</a><br /><br />
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
                <a href="mailto:quantacloud@protonmail.ch"><img src="./public/pictures/features/mail.svg" alt="mail" /></a>
                <a href="#"><img src="./public/pictures/features/gplus.svg" alt="google plus" /></a>
                <a href="https://twitter.com/QuantaCloud"><img src="./public/pictures/features/twitter.svg" alt="twitter" /></a>
                <a href="https://www.facebook.com/quantacloud/"><img src="./public/pictures/features/facebook.svg" alt="facebook" /></a>
            </div>
        </section>
        
        
        <!------------------------>
        <!-- PopUp "Pourquoi ?" -->
        <!------------------------>
        <section id="popUp_why">
            <div id="content_popUp">
                <a onclick="close_why();">Fermer</a>
                <p>
                    <span class="title"><b>Pourquoi faire un don ?</b><br /><br /></span>
                    <span class="text">
                        Notre équipe est composée d'étudiants, pas de professionnels à proprement parler. Donc, nous ne sommes pas rémunérés par un quelconque emploi. Ainsi, si nous avons besoin d'argent, nous sommes obligés de consacrer de notre temps pour travailler, ce qui est du temps en moins pour travailler sur Quanta Cloud ou sur nos études.<br />
                        Or, si par vos dons, nous parvenons à établir un certain équilibre et nous n'avons pas forcément besoin de travailler pour subvenir à nos besoins, alors nous pourrons nous consacrer davantage au développement de Quanta Cloud.
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