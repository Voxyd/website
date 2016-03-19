<?php
	/*
	* @nom             : help.php
	* @description     : Structure pour la page "aide" du site des features
	* @authors         : Romain Claveau <romain.claveau@protonmail.ch>
	*/

    $_template =  new Template("Quanta Cloud : Aide");
    $_template->addCss("home_global");
    $_template->addCss("home_help");  
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
                    <li><a href="Donate">Faire un don</a></li>
                    <li class="selected"><a href="Help">Aide</a></li>
                </ul>
            </div>
        </section>
        
        
        <!-------------->
        <!-- Sécurité -->
        <!-------------->
        <section id="help">
            <p class="question">J'ai perdu mon mot de passe, comment le récupérer ?</p>
            <p class="answer">S'il s'agit de votre mot de passe d'identification, vous avez un lien sur la page de connexion "Mot de passe oublié ?". Votre mot de passe sera réinitialisé et un mail vous sera envoyé avec un mot de passe temporaire.<br />En revanche, si c'est votre mot de passe de déchiffrement, il nous est impossible d'en redéfinir un et il faut considérer que tous vos fichiers sont perdus.</p>
            
            <p class="question">Qui peut accéder à mes fichiers ?</p>
            <p class="answer">Seul vous pouvez accéder à vos fichiers. Sans rentrer dans les termes techniques. Vous avez besoin d'une clé unique (personnelle) pour chiffrer et déchiffrer vos fichiers et cette clé est elle-même chiffrée à l'aide de votre mot de passe de chiffrement. Ainsi, personne, même pas nous, ne peut accéder à vos fichiers à part vous.</p>
        
            <p class="question">Comment sont chiffrés mes fichiers ?</p>
            <p class="answer">Vos fichiers sont chiffrés de bout-en-bout avec l'outil <a href="http://openpgpjs.org/">OpenPGP.js</a> au niveau de votre navigateur à l'aide de votre clé personnelle, elle aussi déchiffrée au niveau de votre navigateur. Ainsi, les données qui sont envoyées sont déjà chiffrées et personne d'autre à part vous ne peut les déchiffrer.</p>
        
            <p class="question">Comment est financé Quanta Cloud, reçoit-il de l'aide de société ?</p>
            <p class="answer">Non, Quanta Cloud a pour principe de n'appartenir à aucune société (à part la notre), de ne pas recevoir d'aide de grosses sociétés, afin de ne pas mettre en péril sa politique de confidentialité, etc... Ainsi, Quanta Cloud est seulement financé à l'aide de vos dons. Vous pouvez faire un tour dans <a href="Donate">la section "Dons"</a> si cela vous intéresse.</p>
        
            <p class="question">Tentez-vous d'aider les terroristes, ou organisations malfaisantes ?</p>
            <p class="answer">Non, nous prônons la vie privée, certes, en aidant le monde  a obtenir une meilleure vie privée, nous aidons involontairement le terrorisme. Mais nous sommes dans le même cas que <a href="https://protonmail.com/blog/privacy-encryption-and-terrorism/">ProtonMail</a>. Dans tous les cas, même si nous ne développerions pas Quanta Cloud, les terroristes ainsi que toute autre personne ou groupe de personnes chiffreraient.</p>

            
            <p class="question">Une autre question ?</p>
            <p class="answer">Notre FAQ sera mise à jour au fur et à mesure de vos questions. Vous pouvez nous contacter à l'adresse suivante : <b>quantacloud [AT] protonmail [DOT] ch</b></p>
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
