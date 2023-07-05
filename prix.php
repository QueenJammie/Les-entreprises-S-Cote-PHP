<?php session_start(); ?>

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
        </style>
        <title>Les entreprises S Côté inc. 🛠️</title>
    </head>
    <body class="prix">
        <div class="container">
            <?php include_once('header.php'); ?>
            <main>
                <div class="banner">
                    <nav class="menu">
                        <button class="changeTheme">Changer de thème 👉</button>
                        <div class="menu_horizontal">
                            <a href="index.php">Accueil</a>
                            <a href="works.php">Travaux</a>
                            <a href="/" class="active">Prix</a>
                            <a href="contact.php">Nous contacter</a>
                        </div>
                    </nav>
                </div>
                <a href="./contact.php">
                    <button class="reservez">Soumission 👍</button>
                </a>
            </main>
            <footer>
                <hr />
                <p>
                    This website was coded by
                    <a href="https://jammielachancecote-portfolio.netlify.app/project.html" target="_blank" class="coder">
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
    <script src="src/script.js"></script>
    </body>
</php>
