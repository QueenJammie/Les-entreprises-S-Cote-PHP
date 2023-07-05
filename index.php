<?php
    session_start();
?>
<!DOCTYPE php>
<php lang="fr">
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
    <?php
        if ($_SESSION['background'] == "dark") {
            echo "<body class='index dark'>";
        } else if ($_SESSION['background'] == "white") {
            echo "<body class='index'>";
        }
    ?>
        <div class="container">
            <?php include_once('header.php'); ?>
            <main>
                <div class="banner">
                    <nav class="menu">
                        <button class="changeTheme">Changer de thème 👉</button>
                        <div class="menu_horizontal">
                        <a href="/" class="active">Accueil</a>
                        <a href="works.php">Travaux</a>
                        <a href="prix.php">Prix</a>
                        <a href="contact.php">Nous contacter</a>
                        <a href="inscription.php">S'incrire</a>
                        </div>
                    </nav>
                </div>
                <div class="description">
                    <?php echo $_SESSION['background']; ?>
                    <p>
                        Le bricolage est une activité manuelle visant à réparer, entretenir,
                        améliorer ou fabriquer de petits objets.
                    </p>
                    <p>
                        On dit d'une personne habile de ses mains qu'il est un « bon
                        bricoleur ». À l'inverse, l'expression « bricoleur du dimanche » est
                        plus péjorative. On évoque aussi le « système D » (de « débrouille
                        ») pour une réalisation de bricolage particulièrement ingénieuse.
                        Dans la partie commerciale du secteur, le concept anglo-saxon du do
                        it yourself (« faites-le vous-même »), abrégé DIY a été une telle
                        réussite commerciale pour les magasins de bricolage que les
                        distributeurs de meubles l'ont adopté, sous l'argument de prix
                        compétitifs.
                    </p>
                    <p>
                        Dans ce sens commun, le bricolage a gagné ses lettres de noblesse
                        dans les années 1980 avec la conversion de titres de presse à des
                        techniques de plus en plus professionnelles, mises à la portée de
                        l'amateur.
                    </p>
                </div>
                <a href="./contact.php#formulaire">
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
        <script>
            function changeTheme() {
                let body = document.querySelector("body");

                if (body.classList.contains("dark")) {
                    body.classList.remove("dark");
                    <?php $_SESSION['background'] = "white"; ?>
                } else {
                    body.classList.add("dark");
                    <?php $_SESSION['background'] = "dark"; ?>
                }
            }

            let changeThemeButton = document.querySelector("button.changeTheme");
            changeThemeButton.addEventListener("click", changeTheme);
        </script>
    </body>
</php>
