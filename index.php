<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>the seaside corp</title>
        <meta name="description" content="site de vente de produit marin">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
        <link href="../theSeaSideCorp/font/belligerentmadness/stylesheet.css" rel="stylesheet">
        <link href="../theSeaSideCorp/font/lemonyellow/stylesheet.css" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css"/>
        <link rel="stylesheet" href="css/responsive.css"/>
    </head>
    <body>
        <main>
            <?php include('header.php')?>
            <!-- en tête--->
            <section> 
                <aside>
                    <h3>Titre du bloc de gauche</h3>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                        officia deserunt mollit anim id est laborum."
                    </p>
                </aside>
                <div id="colone-Droite">
                    <h1>titre principale de la section</h1>
                    <h2>Résumé de la section principale</h2>
                    <div class="bloc-gauche">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                            et dolore magna aliqua. <a href="https://www.w3schools.com/tags/att_href.asp">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                            officia deserunt mollit</a> anim id est laborum."
                        </p>
                    </div>
                    <div class="bloc-droit">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                            et dolore magna aliqua. 
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                            officia deserunt mollit anim id est laborum."
                            </p>
                        </p>
                    </div>
                    <div  class="bloc-dessous">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
                            officia deserunt mollit anim id est laborum."
                        </p>
                    </div>
                </div>
            </section>
            <!---Galerie-->
            <figure>
                <figcaption> Galerie image SeaSide corp</figcaption>
                <img src="images/1.jpg" alt="image galerie 1">
                <img src="images/2.jpg" alt="image galerie 2">
                <img src="images/3.jpg" alt="image galerie 3">
                <img src="images/7.jpg" alt="image galerie 4">
            </figure>
            <!-- pied de page--->
            <?php include('footer.php')?>
        </main>
    </body>
</html>