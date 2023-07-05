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
            /*
            .editing_work {
                list-style: none;
                width: 100%;
            }
            .editing_work a {
                color: #000;
            }
            .editing_work a:nth-child(2) {
                margin-left: 50%;
            }
            */
        </style>
        <title>Les entreprises S Côté inc. 🛠️</title>
    </head>
    <?php
        if (isset($_SESSION['background'])) {
            if ($_SESSION['background'] == "dark") {
                echo "<body class='works dark'>";
            } else if ($_SESSION['background'] == "white") {
                echo "<body class='works'>";
            }
        } else {
            echo "<body class='works'>";
        }
    ?>
        <div class="container">
            <?php include_once('header.php'); ?>
            <main>
                <div class="banner">
                    <nav class="menu">
                        <button class="changeTheme">Changer de thème 👉</button>
                        <div class="menu_horizontal"> 
                            <a href="index.php">Accueil</a>
                            <a href="works.php" class="active">Travaux</a>
                            <a href="prix.php">Prix</a>
                            <a href="contact.php">Nous contacter</a>
                            <a href="inscription.php">S'incrire</a>
                        </div>
                    </nav>
                </div>
                <h2>Nos travaux:</h2>
                <?php
                $isEnabled = true;

                if ($isEnabled):
                ?>
                <div class="gallerie gallerieGrid3">
                    <div>
                        <a href="works/work1.php" alt="Travaux 1">
                            <img
                            src="https://s3.amazonaws.com/shecodesio-production/uploads/files/000/066/030/original/work1.jpg?1675653371"
                            alt="Image 1"
                            class="image-travail"
                            />
                        </a>
                        <!--
                        <ul class="editing_work">
                                <a href="works/work1_editing_commentaire.php"><del>Éditer</del></a>
                                <a href="works/work1_delete_commentaire.php">Supprimer</a>
                        </ul>
                        -->
                    </div>
                    
                    <a href="works/work2.php" alt="Travaux 2">
                        <img
                        src="https://s3.amazonaws.com/shecodesio-production/uploads/files/000/066/031/original/work2.jpg?1675653455"
                        alt="Image 2"
                        />
                    </a>
                    <a href="works/work3.php" alt="Travaux 3">
                        <img
                        src="https://s3.amazonaws.com/shecodesio-production/uploads/files/000/066/032/original/work3.jpg?1675653515"
                        alt="Image 3"
                        />
                    </a>
                </div>
                <div class="gallerie gallerieGrid2">
                    <a href="works/work4.php" alt="Travaux 4">
                        <img
                        src="https://s3.amazonaws.com/shecodesio-production/uploads/files/000/066/033/original/work4.jpg?1675653555"
                        alt="Image 4"
                        />
                    </a>
                    <a href="works/work5.php" alt="Travaux 5">
                        <img
                        src="https://s3.amazonaws.com/shecodesio-production/uploads/files/000/066/034/original/work5.jpg?1675653620"
                        alt="Image 5"
                        />
                    </a>
                </div>
                <?php
                endif;
                ?>
                <a href="./contact.php">
                    <button class="reservez">Soumission 👍</button>
                </a>
            </main>
            <footer>
                <hr />
                <p>
                    This website was coded by
                    <a  href="https://jammielachancecote-portfolio.netlify.app/project.html"  target="_blank" class="coder">
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
