<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <meta name="application-name" content="Too Long To Read"/>
    <meta name="author" content="<?=$author?>"/>
    <meta name="description" content="<?=$description?>"/>
    <meta name="keywords" content="<?=$keywords?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?=htmlspecialchars($title)?> | Too Long To Read</title>
    <link rel="stylesheet" href="/css/style.css" type="text/css"/>
</head>
<body>
    <header>
        <a href="/"><img src="/images/logo_tltr_100x100_noBG.png" alt="Logo de Too Long To Read" title="Revenir à l'accueil"/></a>
        <nav>
            <ul>
                <li><a href="/stats" class="caps">Statistiques</a></li>
                <li><a href="/tech" class="caps">Tech</a></li>
<!--                <li><a href="/team" class="caps">L'équipe</a></li>-->
            </ul>
        </nav>
    </header>
    <main>
    <?=$content?>
    </main>
    <footer>
        <div>
            <?php if (isset($lastBookId)): ?>
                <a href="/book/<?=$lastBookId?>" class="button">Accéder au dernier livre consulté sur le site</a>
            <?php endif; ?>
            <a href="https://www.cyu.fr/" target="_blank" title="CY Cergy Paris Université - S'ouvre dans un nouvel onglet">
                <img src="/images/logo_cy.png" alt="Logo de CY Cergy Paris Université"/>
            </a>
            <span>Auteurs : Thomas REMY, Andrea DE ARAUJO</span>
        </div>
    </footer>
</body>
</html>