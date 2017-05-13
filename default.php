<!DOCTYPE html>
<html lang="<?= Localization::activeLanguage() ?>">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php Loader::element('header_required', array('pageTitle' => isset($pageTitle) ? $pageTitle : '', 'pageDescription' => isset($pageDescription) ? $pageDescription : '', 'pageMetaKeywords' => isset($pageMetaKeywords) ? $pageMetaKeywords : ''));?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://robots-ju.ch/css/style.css">
	<style>header { position: relative; }</style>
</head>
<body>
    <div class="<?php echo $c->getPageWrapperClass()?>">
        <header>
            <div class="container">
                <div class="logo brand-inception">
                    <a href="/">Membres</a>
                </div>
                <?php
                $a = new GlobalArea('Header Nav');
                $a->setCustomTemplate('autonav', 'filiale_navigation.php');
                $a->display();
            ?>
                <ul class="member-menu">
                    <li><a href="https://robots-ju.ch/">Robots-JU.ch</a></li>
                </ul>
            </div>
        </header>
        <div class="container page">
            <div class="row">
                <section class="col-md-6 col-md-offset-3">
                    <h1><?= $c->getCollectionName() ?></h1>
                    <?php
                        $a = new Area('Main');
                        $a->display($c);
                    ?>
                </section>
            </div>
        </div>
    </div>
    <?php Loader::element('footer_required'); ?>
</body>
</html>

