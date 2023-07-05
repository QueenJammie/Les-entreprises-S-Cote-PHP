<?php session_start(); ?>

<!-- https://www.chiny.me/envoyer-des-mails-en-php-7-21.php#:~:text=En%20PHP%20il%20est%20possible%20d%27envoyer%20un%20mail,ressemble%20%C3%A0%20ceci%3A%20mail%20%28%24dest%2C%20%24objet%2C%20%24message%2C%20%24entetes%29%3B -->

<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" href="img/renovation_icone.png" type="image/x-icon">
        <link rel="stylesheet" href="./src/style.css" />
        <style>
            main nav {
                height: 230px;
            }
            .menu_horizontal {
                width: 95%;
                display: flex;
                justify-content: space-evenly;
                margin: 1em;
                background-color: rgba(255, 255, 255, 0.5);
                border: 2px solid #f5e6c2;
                border-radius: 10px;
            }
            .submit:hover {
                cursor: pointer;
            }
            .memo {
                float: right;
            }
        </style>
        <title>Les entreprises S Côté inc. 🛠️</title>
        <script src="https://code.jquery.com/jquery-3.5.0.min.js">
        </script>
    </head>
    <body class="contact">
        <div class="container">
            <?php include_once('header.php'); ?>
        <main>
            <div class="banner">
                <nav class="menu">
                    <button class="changeTheme">Changer de thème 👉</button>
                    <div class="menu_horizontal">
                    <a href="index.php">Accueil</a>
                    <a href="works.php">Travaux</a>
                    <a href="prix.php">Prix</a>
                    <a href="/" class="active">Nous contacter</a>
                    </div>
                </nav>
            </div>
            <a  href="mailto:jersey1@live.ca?subject=Demande de client&body=Bonjour, monsieur Côté! ..." style="display: block">
                jersey1@live.ca
            </a>
            <a href="tel:4187176946">
                418-717-6946
            </a>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <form action="mailto:jammie.lacc@outlook.com?subject=Demande de client" method="post" enctype="text/plain" id="formulaire" data-netlify="true">
                <div class="coordonnees">
                    <div>
                        <label for="prenom">Prénom</label>
                        <input type="text" name="prenom" class="form-control" id="prenom" required />
                    </div>
                    <div>
                        <label for="nom_de_famille">Nom de famille</label>
                        <input type="text" name="nom" class="form-control" id="nom_de_famille" />
                    </div>
                </div>
                <div class="coordonnees">
                    <div>
                        <label for="userMail">Adresse mail</label>
                        <input type="text" name="mail" class="form-control" id="userMail" />
                    </div>
                    <div>
                        <label for="subject">Sujet</label>
                        <input type="text" name="objet" class="form-control" id="subject" />
                    </div>
                </div>
                
                <div>
                    <label for="message">Votre message</label>
                    <br />
                    <textarea name="message" class="form-control" id="message" rows="10">Bonjour, monsieur Côté! ...</textarea>
                </div>
                <div>
                    <input type="submit" value="Envoyer" class="btn btn-primary submit" />
                    <br />
                    <small>
                        <span class="memo">Ce lien ouvrira votre serveur email personnel et vous permettra d'envoyer des images. Vos données ne seront pas perdues et vous pourrez vérifier vos renseignements avant l'envoi.</span>
                    </small>
                </div>
            </form>
        </main>
        <footer>
            <hr />
            <p>
            This website was coded by
            <a
                href="https://jammielachancecote-portfolio.netlify.app/project.html"
                target="_blank"
                class="coder"
            >
                Jammie Lachance-Côté
            </a>
            <br />
            <a href="https://shecodes.io" target="_blank" class="link">
                <img src="./img/SheCodes.png" alt="SheCodes" />
            </a>
            </p>
            <div id="date"><?php echo date('F j Y à h:i'); ?></div>
        </footer>
        </div>
    <script src="src/script.js">
    </script>
  </body>
</php>
