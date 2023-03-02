<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="asset/css/style.css">
        <link rel="icon" type="image/x-icon" href="asset/ico/site_icon.ico">
        <title>Aurélien CROUIN - Développeur Web Junior</title>
    </head>

    <body>
        <header>
            <img src="asset/img/logo_ac.png" alt="Logo du site représentant un C de couleur rouge et un A de couleur grise, qui ont presque fusionnés">
            <h1>AURÉLIEN CROUIN</h1>
            <nav>
                <ul>
                    <li><a href="">À Propos</a></li>
                    <li><a href="">Réalisations</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </nav>
        </header>

        <main>
        
            <section id="apropos">
                <div id="titres-apropos">
                    <h2>À propos</h2>
                    <h2>Qui suis-je ?</h2>
                </div>
                <div id="contenu-apropos">
                    <div id="portrait-apropos"></div>
                    <div id="texte-apropos">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa optio amet saepe alias aliquam? Error optio sit hic sint veniam odio saepe non cupiditate nisi? Numquam earum magni quibusdam voluptatum!
                        Repellendus, itaque modi! Adipisci quas animi nulla voluptatibus! Minus quae nemo iste non ducimus dolor odio dolore cumque tenetur ratione, fuga reiciendis sapiente, cum facilis temporibus sequi voluptatem vel quisquam.</p>
                    </div>
                </div>
            </section>

            <section id="competences">
                <div class="description">
                    <p></p>
                </div>
                <div class="images-competences">
                    <div class="cpt">
                        <img src="" alt="">
                        <h3>HTML5</h3>
                    </div>
                    <div class="cpt">
                        <img src="" alt="">
                        <h3>CSS3</h3>
                    </div>
                    <div class="cpt">
                        <img src="" alt="">
                        <h3>PHP</h3>
                    </div>
                    <div class="cpt">
                        <img src="" alt="">
                        <h3>MySQL</h3>
                    </div>
                    <div class="clear"></div>
                    <div class="cpt">
                        <img src="" alt="">
                        <h3>JavaScript</h3>
                    </div>                    
                    <div class="cpt">
                        <img src="" alt="">
                        <h3>WordPress</h3>
                    </div>
                    <div class="cpt">
                        <img src="" alt="">
                        <h3>Suite Adobe</h3>
                    </div>
                    <div class="cpt">
                        <img src="" alt="">
                        <h3>Suite Microsoft</h3>
                    </div>                    
                </div>
            </section>

            <section id="formulaire">
                <p>Envie de travailler ensemble ? Des questions à me poser ? Ou simplement envie de papoter ? Contactez-moi via ce formulaire !</p>
                <form action="" method="">
                    <label for="identite">Votre identité :</label>
                    <input type="text" name ="identite" id="identite">

                    <label for="email">Votre adresse mail :</label>
                    <input type="email" name ="email" id="email">

                    <label for="objet">Sujet de votre message :</label>
                    <input type="text" name ="objet" id="objet">

                    <label for="message">Votre message :</label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </form>
            </section>

        </main>

        <footer>
            <h4>Aurélien Crouin © 2023 - Mentions Légales</h4>
        </footer>

        <script src="script.js"></script>
    </body>

</html>