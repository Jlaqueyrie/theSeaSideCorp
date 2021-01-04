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
        <link rel="stylesheet" href="css/product.css">    </head>
        <link rel="stylesheet" href="css/product_responsive.css"/>
    <body>
        <main>
            <!-- en tête--->
            <?php include('header.php')?>

            <aside id="image-produit">
                <img src="./images/boite1.jpg">
            </aside>
            <aside id="description-produit">
                <h3> Ma boite de sardine 1</h3>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                    Minus aut culpa nobis aperiam veritatis nesciunt fugiat commodi accusamus,
                    reprehenderit voluptatem soluta expedita dolores quas accusantium numquam aspernatur dicta sed vel.
                </p>
                <ul>
                    <li> argument de vente 1</li>
                    <li> argument de vente 2</li>
                    <li> argument de vente 3</li>
                    <li> argument de vente 4</li>
                </ul>
                <input type="submit" value="Achetez maintenant">
            </aside>
            <figure>
                <figcaption>galerie-de-produit</figcaption>
                <a href=#><img src="./images/boite3.jpg"></a>
                <a href=#><img src="./images/boite3.jpg"></a>
                <a href=#><img src="./images/boite3.jpg"></a>
                <a href=#><img src="./images/boite3.jpg"></a>
            </figure>
            <?php include('footer.php')?>
        </main> 
    </body>
        
</html> 