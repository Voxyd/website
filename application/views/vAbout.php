<?php
	/*
	* @nom             : about.php
	* @description     : Structure pour la page "à propos" du site des features
	* @authors         : Romain Claveau <romain.claveau@protonmail.ch>
	*/
    $_template =  new Template("Quanta Cloud : &Agrave; propos");
    $_template->addCss("home_global");
    $_template->addCss("home_about");  
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
                    <li class="selected"><a href="About">&Agrave; propos</a></li>
                    <li><a href="Adventure">Avancement</a></li>
                    <li><a href="Security">Sécurité</a></li>
                    <li><a href="https://quantacloud.wordpress.com/">Blog</a></li>
                    <li><a href="Donate">Faire un don</a></li>
                    <li><a href="Help">Aide</a></li>
                </ul>
            </div>
        </section>
        
        
        <!------------------------------------------>
        <!-- Présentation des membres de l'équipe -->
        <!------------------------------------------>
        <section id="about">
            <p class="title">Notre politique</p>
            <p class="description"><b>L</b>a vie privée sur Internet est un droit. Pourquoi devrions-nous accepter ce que nous n'accepterions pas dans notre vie de tous les jours (hors-ligne) ? Depuis des années, les sociétés privées telles que Google, Facebook, etc... ainsi que les services gouvernementaux nous espionnent et collectent des informations à notre propos, tous les jours, sur le web. Cependant, nous avons les moyens de contrer cet espionnage de masse à l'aide de la cryptographie mais trop peu de projets nous permettent de nous protéger convenablement. Mais aujourd'hui, nous avons la chance d'avoir une alternative sûre pour nos mails : <span>ProtonMail</span>, qui permet le chiffrement de bout-en-bout de ces derniers.<br /><b>C</b>'est dans cette optique-là que nous avons lancé le développement de <span>Quanta Cloud</span> afin de vous proposer une alternative pour le stockage de vos documents en ligne de façon sécurisée. Notre politique nous oblige à chiffrer de bout-en-bout vos fichiers vous rendant les seuls vrais propriétaires de ceux-ci.</p>
            
            <p class="title">Notre équipe</p>
            <table class="members">
                <tr>
                    <td class="photo"><img src="./public/pictures/photos/paul.jpg" alt="Photo de Paul" /></td>
                    <td class="description">
                        <p class="name">Paul Feuvraux <a href="https://fr.linkedin.com/in/paul-feuvraux-816811100"><img src="./public/pictures/about/linkedin.svg" style="height: 18px;width: 18px;" /></a></p>
                        <p class="role">Co-Fondateur &amp; Administrateur système et réseaux</p>
                        <p class="life">Paul est un lycéen passionné par beaucoup de sciences ainsi que l'informatique. Il gère les serveurs, ainsi que, épaulé par Romain, l'équipe Quanta Cloud. La vie privée sur Internet est un sujet qui lui tient très à coeur. Sans oublier qu'il porte beaucoup d'intérêt envers les mangas, animes, dramas, le Japon, ainsi que l'open source, le Libre .</p>
                    </td>
                    <td class="photo"><img src="./public/pictures/photos/romain.jpg" alt="Photo de Romain" /></td>
                    <td class="description">
                        <p class="name">Romain Claveau <a href="https://fr.linkedin.com/in/romainclaveau"><img src="./public/pictures/about/linkedin.svg" style="height: 18px;width: 18px;" /></a></p>
                        <p class="role">Co-Fondateur &amp; Développeur front-end</p>
                        <p class="life">Romain est un étudiant en physique passionné par l'astrophysique, la physique quantique et tout ce qui tourne autour ainsi que l'informatique. Il est l'un des fondateurs de Quanta Cloud et est responsable de la gestion de l'équipe ainsi que la partie front-end du projet. En plus de cela, c'est un grand fan de badminton qu'il pratique en compétition.</p>
                    </td>
                </tr>
                
                <tr>
                    <td class="photo"><img src="./public/pictures/photos/quentin.jpg" alt="Photo de Quentin" /></td>
                    <td class="description">
                        <p class="name">Quentin Thomas  <a href="#"><img src="./public/pictures/about/linkedin.svg" style="height: 18px;width: 18px;" /></a></p>
                        <p class="role">Développeur back-end</p>
                        <p class="life">Quentin est développeur back-end. Il est passionné par l'informatique ainsi que les jeux vidéo. Il est actuellement dans la même section de BTS que Dylan, et fera une licence professionnelle une fois son BTS obtenu dans le but de devenir développeur web.</p>
                    </td>
                    <td class="photo"><img src="./public/pictures/photos/dylan.jpg" alt="Photo de Dylan" /></td>
                    <td class="description">
                        <p class="name">Dylan Clement <a href="https://www.linkedin.com/in/dylan-clement-4a5325112"><img src="./public/pictures/about/linkedin.svg" style="height: 18px;width: 18px;" /></a></p>
                        <p class="role">Développeur back-end</p>
                        <p class="life">Dylan développe avec Quentin le back-end, passionné par l'informatique, il étudie actuellement l'informatique et le réseau en BTS et souhaite ensuite faire une licence professionnelle dans le développement web.</p>
                    </td>
                </tr>
                
                <tr>
                    <td class="photo"><img src="./public/pictures/photos/arnaud.jpg"  alt="Photo d'Arnaud" /></td>
                    <td class="description">
                        <p class="name">Arnaud Defay  <a href="#"><img src="./public/pictures/about/linkedin.svg" style="height: 18px;width: 18px;" /></a></p>
                        <p class="role">Designer</p>
                        <p class="life">Arnaud est un étudiant en physique dans la même promotion que Romain. Passionné par l'informatique et l'électronique, Arnaud a codé l'intégralité des scripts lui permettant de gérer sa maison avec sa tablette. Ses multiples compétences autour de photoshop lui permettent d'être le designer du projet. Plus tard, il projette de travailler autour de la domotique ou des énergies renouvelables.</p>
                    </td>
                    <td class="photo"><img src="./public/pictures/photos/matthieu.jpg"  alt="Photo de Matthieu" /></td>
                    <td class="description">
                        <p class="name">Matthieu Rabin <a href="#"><img src="./public/pictures/about/linkedin.svg" style="height: 18px;width: 18px;" /></a></p>
                        <p class="role">Développeur Android</p>
                        <p class="life">Matthieu est un développeur Android, c'est lui qui développe l'application Android de Quanta Cloud. Actuellement dans la même section que Quentin et Dylan, il étudie la programmation web, orientée objet, et les réseaux. Il vise actuellement l'école Nancy Telecom pour devenir architecte de logiciel. Il aime les jeux vidéo ainsi que faire des sorties entre amis.</p>
                    </td>
                </tr>
            </table>
            
            <p class="title" style="padding-top: 5vh;">Remerciements</p>
            <table class="thanks">
                <tr>
                    <td><img src="./public/pictures/about/thanks/apache.png" /><br /><a href="http://httpd.apache.org/"><b>Apache</b></a></td>
                    <td><img src="./public/pictures/about/thanks/automattic.png" /><br /><a href="https://wordpress.com/"><b>Wordpress</b></a></td>
                    <td><img src="./public/pictures/about/thanks/git.png" /><br /><a href="https://about.gitlab.com/"><b>GitLab</b></a></td>
                </tr>
                <tr>
                    <td><img src="./public/pictures/about/thanks/debian.svg" /><br /><a href="https://www.debian.org/"><b>Debian</b></a></td>
                    <td><img src="./public/pictures/about/thanks/linux.png" /><br /><a href="http://kernel.org/"><b>Linux</b></a></td>
                    <td><img src="./public/pictures/about/thanks/mysql.png" /><br /><a href="https://www.mysql.com/"><b>MySQL</b></a></td>
                </tr>
                <tr>
                    <td><img src="./public/pictures/about/thanks/php.png" /><br /><a href="http://www.php.net/"><b>PHP</b></a></td>
                    <td><img src="./public/pictures/about/thanks/protonmail.png" /><br /><a href="https://protonmail.ch/"><b>ProtonMail</b></a></td>
                    <td><img src="./public/pictures/about/thanks/openpgpjs.png" /><br /><a href="http://openpgpjs.org/"><b>OpenPGP.js</b></a></td>
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
