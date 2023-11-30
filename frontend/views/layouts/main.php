<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset1;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

\frontend\assets\AppAsset1::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
<?php $this->beginBody() ?>


<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

<!-- Page Navbar -->
<nav class="custom-navbar" data-spy="affix" data-offset-top="20">
    <div class="container">
        <a class="logo" href="/">Menu</a>
        <ul class="nav">
            <li class="item">
                <a class="link" href="#home">Home</a>
            </li>
            <li class="item">
                <a class="link" href="#about">About</a>
            </li>
            <li class="item">
                <a class="link" href="#portfolio">Portfolio</a>
            </li>
            <li class="item">
                <a class="link" href="#testmonial">Testmonial</a>
            </li>
            <li class="item">
                <a class="link" href="#blog">Blog</a>
            </li>
            <li class="item">
                <a class="link" href="#contact">Contact</a>
            </li>
            <li class="item ml-md-3">
                <a href="components.html" class="btn btn-primary">Components</a>
            </li>
        </ul>
        <a href="javascript:void(0)" id="nav-toggle" class="hamburger hamburger--elastic">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </a>
    </div>
</nav><!-- End of Page Navbar -->

<!-- page header -->

<main role="main" class="flex-shrink-0">
    <div class="">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>
<!-- footer -->
<div class="container">

    <footer class="footer">
        <p class="mb-0">Copyright
            <script>document.write(new Date().getFullYear())</script> &copy; <a
                    href="http://www.devcrud.com">DevCRUD</a> Distribution <a
                    href="https://themewagon.com">ThemeWagon</a>
        </p>
        <div class="social-links text-right m-auto ml-sm-auto">
            <a href="javascript:void(0)" class="link"><i class="ti-facebook"></i></a>
            <a href="javascript:void(0)" class="link"><i class="ti-twitter-alt"></i></a>
            <a href="javascript:void(0)" class="link"><i class="ti-google"></i></a>
            <a href="javascript:void(0)" class="link"><i class="ti-pinterest-alt"></i></a>
            <a href="javascript:void(0)" class="link"><i class="ti-instagram"></i></a>
            <a href="javascript:void(0)" class="link"><i class="ti-rss"></i></a>
        </div>
    </footer>
</div> <!-- end of page footer -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();?>






