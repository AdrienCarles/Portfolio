<?php require('header-cv.php');

$spec = isset($_GET['spec']) ? $_GET['spec'] : NULL;

?>

<div class="content" id="page-preuves">
    <div class="parallax-preuves">
        <div class="col-12" onmousedown="return false" onselectstart="return false">
            <h1 id="titre-cv">Preuves</h1>
        </div>
    </div>

    <?php
        if($spec == "ligue1"){
    ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">La maison des ligues</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-5 card">
                    <img src="./Preuves/maison_des_ligues/planification.png" alt="">
                </div>
                <div class="col-1"></div>
                <div class="col-4 text_preuve">
                    <div class="card">
                        <h3 class="text-center">Travailler en mode projet</h3>
                        <p class="text-center">Extrait du découpage en lotissement du projet</p>
                        <p class="text-center">Chaque lot correspond à une mission</p>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    <?php
        }
        if($spec == "ligue2"){
    ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p></p>
                </div>
            </div>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-5 card">
                    <img src="./Preuves/maison_des_ligues/extrait.png" alt="">
                </div>
                <div class="col-1"></div>
                <div class="col-4 text_preuve">
                    <div class="card">
                        <h3 class="text-center">Mettre à disposition des utilisateurs un service informatique</h3>
                        <p class="text-center">Capture d'écran de la page d'accueil du site</p>
                    </div>
                </div>
                <div class="col-1"></div>
                </div>
            </div>
        </div>
    <?php        
        }
        if($spec == "portfolio"){
    ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">Mon portfolio</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-5 text_preuve">
                    <div class="card">
                        <h3 class="text-center">Organiser son développement professionnel</h3>
                        <p class="text-center">Durant ma formation j'ai été amené à produire mon propre portfolio décrivant mes expériences professionnelles ainsi que les compétences développées durant ma formation</p>
                        <p class="text-center">L'image représente le code CSS m'ayant en partie permis d'animer mon menu</p>
                    </div>
                </div>
                <div class="col-1"></div>
                <div class="col-4">
                    <img src="./Preuves/portfolio/css.png" alt="">
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    <?php        
        }
        if($spec == "fredi1"){
    ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">Projet Fredi</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text_preuve">
                    <div class="card">
                        <h3 class="text-center">Gérer le patrimoine informatique</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 flex-centrer">
                    <img src="./Preuves/fredi/utilisateur.png" alt="preuve">
                </div>
            </div>
            <div class="row">
                <div class="col-12 text_preuve">
                    <div class="card">
                        <p class="text-center">Extrait de la base de donnée du projet Fredi</p>
                        <p class="text-center">Cet extrait réprésente les informations utilisateur nécessaires à leurs identifications</p>
                        <p class="text-center">Afin de garantir la confidentialité les mots de passes sont hachés</p>
                    </div>
                </div>
            </div>
        </div>
    <?php        
        }
        if($spec == "fredi2"){
            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center">Projet Fredi</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <img src="./Preuves/fredi/planification.png" alt="preuve">
                        </div>
                        <div class="col-1"></div>
                        <div class="col-5 text_preuve">
                            <div class="card">
                                <h3 class="text-center">Travailler en mode projet</h3>
                                <p>Extrait de la planification des tâches</br>Crée via l'outil de gestion de projet Trello</p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php        
        }
        if($spec == "fredi3"){
            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center">Projet Fredi</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text_preuve">
                            <div class="card">
                                <h3 class="text-center">Mettre à disposition des utilisateurs</br>un service informatique</h3>
                                <p>Capture d'écran de la page affichant les lignes de la note de frais en cours</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 flex-centrer">
                            <img src="./Preuves/fredi/lignes.png" alt="preuve">
                        </div>
                    </div>
                </div>
            <?php        
        }
        if($spec == "pixbulle1"){
            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center">Réalisations en milieu professionnel en cours de première année - Pixbulle</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 text_preuve">
                            <div class="card">
                                <h3 class="text-center">Gérer le patrimoine informatique</h3>
                                <p>Extrait des mentions légales que nous devions mettre dans le site WordPress</p>
                            </div>
                        </div>
                        <div class="col-6 flex-centrer">
                            <img src="./Preuves/Pixbulle/mentions.png" alt="preuve">
                        </div>
                    </div>
                </div>
            <?php        
        }
        if($spec == "pixbulle2"){
            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center">Réalisations en milieu professionnel en cours de première année - Pixbulle</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 text_preuve">
                            <div class="card">
                                <h3 class="text-center">Travailler en mode projet</h3>
                                <p>Extrait du cahier des charges encadrant le projet</p>
                            </div>
                        </div>
                        <div class="col-8 flex-centrer">
                            <img src="./Preuves/Pixbulle/Cahier des charges.png" alt="preuve">
                        </div>
                    </div>
                </div>
            <?php        
        }
        if($spec == "pixbulle3"){
            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center">Réalisations en milieu professionnel en cours de première année - Pixbulle</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 text_preuve">
                            <div class="card">
                                <h3 class="text-center">Gérer le patrimoine informatique</h3>
                                <p>Copie du site crée afin de le sauvegarder sur un autre support</p>
                            </div>
                        </div>
                        <div class="col-8 flex-centrer">
                            <img src="./Preuves/Pixbulle/sauvegarde.png" alt="preuve">
                        </div>
                    </div>
                </div>
            <?php        
        }
        if($spec == "pixbulle4"){
            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center">Réalisations en milieu professionnel en cours de première année - Pixbulle</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text_preuve">
                            <div class="card">
                                <h3 class="text-center">Développer la présence en ligne de l’organisation</h3>
                                <p>Résultat du test de performance du site réalisé via GoogleSpeed</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 flex-centrer">
                            <img src="./Preuves/Pixbulle/GoogleSpeed.png" alt="preuve">
                        </div>
                    </div>
                </div>
            <?php        
        }
        if($spec == "pixbulle5"){
            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center">Réalisations en milieu professionnel en cours de première année - Pixbulle</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text_preuve">
                            <div class="card">
                                <h3 class="text-center">Travailler en mode projet</h3>
                                <p>Extrait de l'interface homme machine mise en place pour encadrer le projet</p>
                            </div>
                        </div>
                        <div class="col-12 flex-centrer">
                            <img src="./Preuves/Pixbulle/IHM.png" alt="preuve">
                        </div>
                    </div>
                </div>
            <?php        
        }
        if($spec == "pixbulle6"){
            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center">Réalisations en milieu professionnel en cours de première année - Pixbulle</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 text_preuve">
                            <div class="card">
                                <h3 class="text-center">Mettre à disposition des utilisateurs un service informatique</h3>
                                <p>Résultat d'un test d'envoi de mail via un formulaire</p>
                            </div>
                        </div>
                        <div class="col-8 flex-centrer">
                            <img src="./Preuves/Pixbulle/test.png" alt="preuve">
                        </div>
                    </div>
                </div>
            <?php        
        }
        if($spec == "pixbulle7"){
            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center">Réalisations en milieu professionnel en cours de première année - Pixbulle</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text_preuve">
                            <div class="card">
                                <h3 class="text-center">Organiser son développement professionnel</h3>
                                <p>Extrait de la formation WordPress suivie au cours du stage</p>
                            </div>
                        </div>
                        <div class="col-12 flex-centrer">
                            <img src="./Preuves/Pixbulle/formation.png" alt="preuve">
                        </div>
                    </div>
                </div>
            <?php        
        }
        if($spec == "pixbulle8"){
            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center">Réalisations en milieu professionnel en cours de première année - Pixbulle</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 text_preuve">
                            <div class="card">
                                <h3 class="text-center">Gérer le patrimoine informatique</h3>
                                <p>Extrait du cahier des charges encadrant le projet</p>
                            </div>
                        </div>
                        <div class="col-8 flex-centrer">
                            <img src="./Preuves/Pixbulle/Cahier des charges.png" alt="preuve">
                        </div>
                    </div>
                </div>
            <?php        
        }
        if($spec == "silusin1"){
            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center">Réalisations en milieu professionnel en cours de deuxième année </br>Les Silusins</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text_preuve">
                            <div class="card">
                                <h3 class="text-center">Gérer le patrimoine informatique</h3>
                                <p>Afin d'assurer une sauvegarde de la solution un repertoire GitHub a été créé</p>
                            </div>
                        </div>
                        <div class="col-12 flex-centrer">
                            <img src="./Preuves/Silusins/git.png" alt="preuve">
                        </div>
                    </div>
                </div>
            <?php        
        }
        if($spec == "silusin2"){
            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center">Réalisations en milieu professionnel en cours de deuxième année </br>Les Silusins</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text_preuve">
                            <div class="card">
                                <h3 class="text-center">Répondre aux incidents et aux demandes d’assistance et d’évolution</h3>
                                <p>Capture d'écran de la solution mantis permettant de faire du reporting des anomalies et erreurs</p>
                            </div>
                        </div>
                        <div class="col-12 flex-centrer">
                            <img src="./Preuves/Silusins/mantis.jpg" alt="preuve">
                        </div>
                    </div>
                </div>
            <?php        
            
        }
        if($spec == "silusin3"){
            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center">Réalisations en milieu professionnel en cours de deuxième année </br>Les Silusins</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text_preuve">
                            <div class="card">
                                <h3 class="text-center">Travailler en mode projet</h3>
                                <p>Planning prévsionnel des tâches à réaliser lors du stage</p>
                            </div>
                        </div>
                        <div class="col-12 flex-centrer">
                            <img src="./Preuves/Silusins/planification.png" alt="preuve">
                        </div>
                    </div>
                </div>
            <?php        
        }
        if($spec == "silusin4"){
            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center">Réalisations en milieu professionnel en cours de deuxième année </br>Les Silusins</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text_preuve">
                            <div class="card">
                                <h3 class="text-center">Gérer le patrimoine informatique</h3>
                                <p>Capture d'écran des differents rôles utilisés dans la solution</p>
                            </div>
                        </div>
                        <div class="col-12 flex-centrer">
                            <img src="./Preuves/Silusins/Roles.png" alt="preuve">
                        </div>
                    </div>
                </div>
            <?php        
        }
        if($spec == "silusin5"){
            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center">Réalisations en milieu professionnel en cours de deuxième année </br>Les Silusins</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text_preuve">
                            <div class="card">
                                <h3 class="text-center">Répondre aux incidents et aux demandes d’assistance et d’évolution</h3>
                                <p>Durant la réalisation de la solution une anomalie liée au modèle de donnée fut détecté. Nous n'avons pas eu le temps de la corriger entièrement mais une solution alternative fut trouvée afin de répondre aux besoins du client</p>
                            </div>
                        </div>
                        <div class="col-12 flex-centrer">
                            <img class="ano" src="./Preuves/Silusins/annomalie.png" alt="preuve">
                        </div>
                    </div>
                </div>
            <?php        
        }
        if($spec == "silusin6"){
            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center">Réalisations en milieu professionnel en cours de deuxième année </br>Les Silusins</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text_preuve">
                            <div class="card">
                                <h3 class="text-center">Développer la présence en ligne de l’organisation</h3>
                                <p>MLD et MCD de la base de données utilisé par l'application</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 flex-centrer">
                            <img class="modele" src="./Preuves/Silusins/MCD.png" alt="preuve">
                        </div>
                        <div class="col-12 flex-centrer">
                            <img class="modele" src="./Preuves/Silusins/MLD.png" alt="preuve">
                        </div>
                    </div>
                </div>
            <?php        
        }
        if($spec == "silusin7"){
            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center">Réalisations en milieu professionnel en cours de deuxième année </br>Les Silusins</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text_preuve">
                            <div class="card">
                                <h3 class="text-center">Travailler en mode projet</h3>
                                <p>Extrait du bilan semestriel tenu lors du stage</p>
                            </div>
                        </div>
                        <div class="col-12 flex-centrer">
                            <img src="./Preuves/Silusins/rapport.png" alt="preuve">
                        </div>
                    </div>
                </div>
            <?php        
        }
        if($spec == "silusin8"){
            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center">Réalisations en milieu professionnel en cours de deuxième année </br>Les Silusins</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text_preuve">
                            <div class="card">
                                <h3 class="text-center">Mettre à disposition des utilisateurs un service informatique</h3>
                                <p>Installation des bases de données sur une clé USB afin d'utiliser la solution de façon nomade</p>
                            </div>
                        </div>
                        <div class="col-12 flex-centrer">
                            <img src="./Preuves/Silusins/clee.png" alt="preuve">
                        </div>
                    </div>
                </div>
            <?php        
        }
        if($spec == "silusin9"){
            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center">Réalisations en milieu professionnel en cours de deuxième année </br>Les Silusins</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text_preuve">
                            <div class="card">
                                <h3 class="text-center">Répondre aux incidents et aux demandes d’assistance et d’évolution</h3>
                                <p>Capture d'écran des PDF générés durant la phase de test</p>
                                <p>La première image montre un PDF générant une erreur</p>
                                <p>La seconde image montre le PDF conforme aux attentes du client</p>
                            </div>
                        </div>
                        <div class="col-6 flex-centrer">
                            <img class="pdf" src="./Preuves/Silusins/pdfnonconforme.png" alt="preuve">
                        </div>
                        <div class="col-6 flex-centrer">
                            <img class="pdf" src="./Preuves/Silusins/pdfconforme.png" alt="preuve">
                        </div>
                    </div>
                </div>
            <?php        
        }
        if($spec == "silusin10"){
            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center">Réalisations en milieu professionnel en cours de deuxième année </br>Les Silusins</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text_preuve">
                            <div class="card">
                                <h3 class="text-center">Travailler en mode projet</h3>
                                <p>Extrait du bilan réalisé en fin de stage. En vert les tâches accomplies et fonctionelles et en rouge les tâches non-fonctionnelles</p>
                            </div>
                        </div>
                        <div class="col-12 flex-centrer">
                            <img src="./Preuves/Silusins/Bilan.png" alt="preuve">
                        </div>
                    </div>
                </div>
            <?php        
        }
        if($spec == "silusin11"){
            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center">Réalisations en milieu professionnel en cours de deuxième année </br>Les Silusins</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 text_preuve">
                            <div class="card">
                                <h3 class="text-center">Mettre à disposition des utilisateurs un service informatique</h3>
                                <p>Photo prise durant la formation des élèves</p>
                            </div>
                        </div>
                        <div class="col-8 flex-centrer">
                            <img class="formation" src="./Preuves/Silusins/formation.jpg" alt="preuve">
                        </div>
                    </div>
                </div>
            <?php        
        }
    ?>
</div>

<?php require('footer.php');?>