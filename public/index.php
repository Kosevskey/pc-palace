<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Home - PC Palace</title>
</head>
<body>
    <?php require("../components/nav.php"); 
 
    // GET zieht sich alles aus der URL
    if (isset($_GET['page'])) { // Abfrage, ob der page-Parameter gesetzt ist (zieht den Parameter mit GET aus der URL)
        if ($_GET['page'] == "product") { // Abfrage, ob das Wort "product" drin steht
            require_once "../page/product.php";
 
        } else if ($_GET['page'] == "spiel") {
            require_once "../page/spiel.php";
 
        } else if ($_GET['page'] == "ateez") {
            require_once "../page/ateez.php";
 
        } 
    }

    ?>
</body>
</html>