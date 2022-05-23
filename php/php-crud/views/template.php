<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $title ?></title>
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="../public/css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>

</head>

<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost:8080/php-crud/router.php">Crud PHP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://localhost:8080/php-crud/router.php">CRUD Produits</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

    <?= $content ?>
    
    <footer class="bg-light text-center text-lg-start mt-auto">
  <div class="text-center p-3">
    © Mon template mvc/php *Libert Josic* 2022 Copyright:
  </div>
</footer>

</body>

</html>