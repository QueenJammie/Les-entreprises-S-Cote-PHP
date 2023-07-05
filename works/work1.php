<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>Work #1</title>
        <style>
            body {
                background: linear-gradient(
                    44.8deg,
                    rgba(102, 189, 255, 0.87) 0,
                    rgba(135, 128, 110, 0.28) 49%
                );
                background-size: cover;
                background-repeat: no-repeat;
            }
            .grid {
                display: grid;
                grid-template-columns: 1fr 1fr;
            }
            a {
                display: block;
                position: relative;
                bottom: 25px;
                text-align: center;
                font-size: 35px;
                text-decoration: none;
            }
            a:hover {
                text-decoration: underline;
            }
            .image {
                margin: 20px 2vw 20px;
            }
            img {
                width: 60vw;
                border: 10px dotted grey;
            }
            .commentaire {
                height: 725px;
                border: 1px solid #000;
                border-radius: 8px;
                background-color: #B5A592;
                margin: 20px 0 2vw;
                padding: 10px;
                overflow: scroll;
            }
            .commentaire h3 {
                text-align: center;
                margin-top: 15px;
            }
            .commentaire h4 {
                font-size: 18px;
            }
            .formulaire {
                border: 2px solid #000;
                border-radius: 8px;
                margin: -3px;
                height: 198px;
                background-color: lightgrey;
                padding: 3px;
            }
            #pseudo {
                width: 100%;
            }
            header h1 {
                font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
                text-align: center;
                font-size: 48px;
                font-weight: normal;
                margin-top: 40px;
                }
                header h1 .entreprise_header {
                font-size: 20px;
                position: relative;
                top: -1em;
                left: 130px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <?php include_once('../header.php'); ?>
            <div class="grid">
                <div class="image">
                    <img src="work1.jpg" alt="" />
                </div>
                <div class="commentaire">
                    <h3>Commentaires</h3>
                    <div class="formulaire">
                        <form action="work1_submit_comment.php" method="post">
                            <label for="pseudo" class="form-label">Entrez votre nom:</label>
                            <input type="text" name="pseudo" class="form-control" id="pseudo" />
                            <label for="commentaire_box" class="form-label">et votre commentaire:</label>
                            <textarea name="commentaire_box" placeholder="Dites-nous vos impressions. Êtes-vous satisfait.e de notre travail?" class="form-control" id="commentaire_box" cols="40" rows="3"></textarea>
                            <br />
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </form>
                    </div>
                    <br /><br /><br />
                    <?php
                        try {
                            $mysqlClient = new PDO('mysql:host=localhost;dbname=db_entreprisescote;charset=utf8', 'root',  '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],);
                        }
                        catch (Exception $e) {
                            die('Erreur : ' . $e->getMessage());
                        }
                        
                        $sqlQuery = 'SELECT * FROM work1_tbl_commentaires';
                        $commentairesStatement = $mysqlClient->prepare($sqlQuery);
                        $commentairesStatement->execute();
                        $tbl_commentaires = $commentairesStatement->fetchAll();

                        foreach ($tbl_commentaires as $commentaire) {
                    ?>
                        <h4><?php echo $commentaire['pseudo']; ?></h4>
                        <p><?php echo $commentaire['commentaire']; ?></p>
                    <?php
                        }
                    ?>
                </div>
            </div>
            
            <a href="../works.php" style="display: inline-block; margin: 0 40%;">Retour</a>
        </div>
    </body>
</html>
