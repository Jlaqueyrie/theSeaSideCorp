<!DOCTYPE html>
<html>
    <head>
        <?php
            ini_set('display_errors',1);
            ini_set('log_error',1);
            error_reporting(E_ALL);
        ?>
        <meta charset="utf-8">
        <title>the seaside corp</title>
        <meta name="description" content="site de vente de produit marin">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/contact.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
        <link href="../theSeaSideCorp/font/belligerentmadness/stylesheet.css" rel="stylesheet">
        <link href="../theSeaSideCorp/font/lemonyellow/stylesheet.css" rel="stylesheet">
        <link rel="stylesheet" href="css/contact_responsive.css"/>
    </head>
    <body>
        <main>
            <!-- en tête--->
            <?php include('header.php')?>
            <section> 
                <div id="coordonnee">
                    <h3>Nos coordonées</h3>
                    <hr>
                    <ul id="listContact">
                        <li><i class="far fa-building"></i> ma petite entreprise<br> 31300 toulouse</li>
                        <li><i class="fas fa-road"></i> 15 chemin de la crabe <br> 31300 toulouse</li>
                        <li><i class="fas fa-phone"></i> 056190265</li>
                        <li><i class="fas fa-envelope-open-text"></i><a href="mailto:agence@pro-web31.com"> agence@pro-web31.com</a></li>
                    </ul>
                    <table id="tableHoraire">
                        <th colspan="2">Horaires d'ouverture</th>
                        <tr><td>du lundi au vendredi</td><td>9h00-12h00 et 13h00-19h00</td></tr>
                        <tr><td>Samedi</td><td>9h00-12h00 sans interruption</td></tr>
                        <tr><td>Dimanche</td><td>fermé</td></tr>
                    </table>
                </div>

                <div id="contact">
                    <h2>Nous Contacter</h2>
                    <form method="post" action="validation.php">
                        <h3> Vos coordonnées</h3>
                        <hr>
                        <div class="vert-align">
                            <label for="nom">Nom</label><br><input type="text" name="nom" placeholder="entrez votre nom" autofocus required>
                            <br>
                            <label for="email">Email</label><br><input type="email" name="email" placeholder="entrez votre email" required>
                            <br>
                            <label for="message">Message</label><br><textarea id="message" rows="10" cols="40" name="message" placeholder="entrez votre message" maxlength="250" required></textarea>
                            <br>
                        </div>
                        <div>
                            <input type="radio" id="Produit 1" name="produit1" value="produit1">
                            <label for="choixProduitRadio1">Produit 1</label>
                        </div>
                        <div>
                            <input type="radio" id="Produit 2" name="produit2" value="produit2">
                            <label for="choixProduitRadio2">Produit 2</label>
                        </div>
                        <h2> Vos choix de produits</h2>
                        <hr>
                        <select id="choix" name="choixProduit">
                            <option value="Produit 1">Produit 1</option>
                            <option value="Produit 2">Produit 2</option>
                        </select>
                        <br>
                        <input type="submit" value="Envoyer">
                        <input type="reset" value="Effacer">
                    </form>
                </div>

                <div id="map">
                    <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=15%20chemin%20de%20la%20crabes%20toulouse+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                </div>
            </section>
            <!-- pied de page--->
                <?php include('footer.php')?>
        </main>
    </body>
</html>