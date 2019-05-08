<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acad exchange | Home</title>
</head>
<header class="header">
    <h1 class="header__logo">Acad exchange</h1>
    <nav class="header__nav">
        <ul class="nav__list">
            <?php foreach(ae_get_nav_menu ('main') as $item): ?>
            <li class="nav__item"><a href="<?= $item->url; ?>" class="item__link"><?= $item->title; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav>
    <?php echo ae_get_asset('src/scss/index.scss'); ?>
</header>
<body class="main">