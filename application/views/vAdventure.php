<?php
	/*
	* @nom             : adventure.php
	* @description     : Structure pour l'avancement du site des features
	* @authors         : Romain Claveau <romain.claveau@protonmail.ch>
	*/
    $_template =  new Template("Quanta Cloud : Avancement");
    $_template->addCss("home_global");
    $_template->addCss("home_adventure");  
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
                    <li class="selected"><a href="Adventure">Avancement</a></li>
                    <li><a href="Security">Sécurité</a></li>
                    <li><a href="https://quantacloud.wordpress.com/">Blog</a></li>
                    <li><a href="Donate">Faire un don</a></li>
                    <li><a href="Help">Aide</a></li>
                </ul>
            </div>
        </section>
        
        
        <!---------------->
        <!-- Avancement -->
        <!---------------->
        <section id="work">
            <div id="bubbles">
                <div class="bubble"><div class="ok" onmouseover="description(1);"><p>Phase 1<br /><b>100%</b></p></div></div>
                <div class="bubble"><div class="wait" onmouseover="description(2);"><p>Phase 2<br /><b>25%</b></p></div></div>
                <div class="bubble"><div class="no" onmouseover="description(3);"><p>Phase 3<br /><b>0%</b></p></div></div>
                <div class="bubble"><div class="no" onmouseover="description(4);"><p>Phase 4<br /><b>0%</b></p></div></div>
                <div class="bubble"><div class="no" onmouseover="description(5);"><p>Phase 5<br /><b>0%</b></p></div></div>
            </div>
            
            <div id="description">
                <div>
                    <p>Passez la souris sur une des bulles pour afficher les informations</p>
                </div>
            </div>
        </section>
        
        
        <!----------------------------->
        <!-- Footer : Copyright + RS -->
        <!----------------------------->
        <section id="footer">
            <div id="copyright">&copy; 2015-2016 <b>Kantum Technologies</b></div>
            <div id="rs">
                <a href="#mailto:quantacloud@protonmail.ch><img src="./public/pictures/features/mail.svg" alt="mail" /></a>
                <a href="https://plus.google.com/u/0/b/113792890240805745979/113792890240805745979/posts"><img src="./public/pictures/features/gplus.svg" alt="google plus" /></a>
                <a href="https://twitter.com/QuantaCloud"><img src="./public/pictures/features/twitter.svg" alt="twitter" /></a>
                <a href="https://www.facebook.com/quantacloud/"><img src="./public/pictures/features/facebook.svg" alt="facebook" /></a>
            </div>
        </section>
        
        <script type="text/javascript">
            function description(phase)
            {
                var text;
                
                switch(phase)
                {
                    case 1:
                        text = "<b>Phase 1</b><br /><p style='text-align: justify';>Cette première phase consiste à la création d'un site web complet dit de 'features' permettant la présentation du projet en général, des développeurs ainsi que des informations supplémentaires sur la sécurité.<br /><br />Date de lancement prévue : <b>Fin Janvier 2016</b></p>";
                        break;
                    case 2:
                        text = "<b>Phase 2</b><br /><p style='text-align: justify';>La deuxième phase consiste au développement de l'interface de gestion de vos fichiers. L'interface ne comportera que les fonctionnalités de base (celles du chiffrement seront bien-sûr les premières à être implantées). Une fois terminée, la bêta limitée pourra être lancée. Elle comprendra environ une cinquantaine de personnes (grand maximum).<br /><br />Date de lancement prévue : <b>Juillet 2016</b></p>";
                        break;
                    case 3:
                        text = "<b>Phase 3</b><br /><p style='text-align: justify';>La troisième phase consiste en l'achat de nos propres serveurs et à l'ouverture de la bêta publique avec des fonctionnalités supplémentaires (en plus de celles de base). Nos serveurs pourront supporter environ 1000 à 2000 personnes.<br /><br />Date de lancement prévue : <b>Janvier 2017</b></p>";
                        break;
                    case 4:
                        text = "<b>Phase 4</b><br /><p style='text-align: justify';>La quatrième phase consiste en la sortie d'une version complètement stable de l'interface (avec sûrement des améliorations de performances, de simplifications de certaines fonctionnalités, etc...). Le lancement de la première version stable sera accompagnée d'un achat de plusieurs serveurs à haute capacité de stockage.<br /><br />Date de lancement prévue : <b>Avril-Mai 2017</b></p>";
                        break;
                    case 5:
                        text = "<b>Phase 5</b><br /><p style='text-align: justify';>La cinquième et dernière phase sera principalement le lancement d'autres projets sous le nom de <b>Kantum Technologies</b> ainsi que le financement de nouveaux serveurs. L'interface subira alors une analyse rigoureuse afin d'améliorer de façon significative l'expérience utilisateur.<br /><br />Date de lancement prévue : <b>Janvier 2018</b></p>";
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
