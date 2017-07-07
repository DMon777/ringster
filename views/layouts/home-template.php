<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\components\MenuWidget;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='//fonts.googleapis.com/css?family=Baumans' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php
$script1 = <<< JS
		$(".scroll").click(function(event){		
		event.preventDefault();
		
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
JS;
    $this->registerJs($script1);

    ?>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="header">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1><?=Html::a('Ringster',Url::home());?></h1>
            </div>
            <!-- top-nav -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php echo MenuWidget::widget();?>
                </ul>
                <div class="clearfix"> </div>
            </div>
        </nav>
    </div>
</div>
<!-- //header -->
<!-- banner -->
<div class="banner">
    <div class="container">
        <div class="banner-text">
            <h4>Are You</h4>
            <h2>Ringster</h2>
            <h3>Get To Fit</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt lorem sed velit fermentum lobortis. Fusce eu semper lacus, eget placerat mauris. Sed lectus tellus, sodales id elit a, feugiat porttitor nulla. Sed porta magna vitae nisl vulputate lacinia. Morbi malesuada sollicitudin tortor vitae pharetra .</p>
        </div>
    </div>
</div>
<!-- //banner -->


<!-- content -->
<?php echo $content;?>
<!-- content end -->


<!-- map -->
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555"></iframe>
    <div class="address agileits">
        <div class="w3ls-title">
            <h3>GET IN TOUCH</h3>
        </div>
        <p>Broome St, NY 10002, Canada. </p>
        <p>Telephone : +00 111 222 3333</p>
        <p>FAX : +1 888 888 4444</p>
        <p>Email : <a href="mailto:example@mail.com">mail@example.com</a></p>
        <ul class="social-icons">
            <li>Follow Us :</li>
            <li><a href="#"> </a></li>
            <li><a href="#" class="fb"> </a></li>
            <li><a href="#" class="in"> </a></li>
            <li><a href="#" class="dott"> </a></li>
        </ul>
    </div>

</div>
<!-- //map -->
<!-- footer -->
<div class="footer">
    <div class="container">
        <h3><a href="index.html">Ringster</a></h3>
        <p>© 2016 Ringster . All rights reserved | Design by <a href="http://w3layouts.com">W3layouts.</a></p>
    </div>
</div>
<!-- //footer -->
<!-- smooth-scrolling-of-move-up -->
<!--<script type="text/javascript">-->
<!--    $(document).ready(function() {-->
<!---->
<!--        var defaults = {-->
<!--            containerID: 'toTop', // fading element id-->
<!--            containerHoverID: 'toTopHover', // fading element hover id-->
<!--            scrollSpeed: 1200,-->
<!--            easingType: 'linear'-->
<!--        };-->
<!---->
<!--        $().UItoTop({ easingType: 'easeOutQuart' });-->
<!---->
<!--    });-->
<!--</script>-->


<?php

$script = <<< JS

        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };

        $().UItoTop({ easingType: 'easeOutQuart' });
    
JS;
$this->registerJs($script);

?>

<!-- //smooth-scrolling-of-move-up -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
