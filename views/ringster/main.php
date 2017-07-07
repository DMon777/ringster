<?php

use yii\helpers\Html;

?>

<div class="skills agileits">
    <div class="container">
        <div class="w3ls-title">
            <h3>Who we are</h3>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt lorem sed velit fermentum lobortis. Fusce eu semper lacus, eget placerat mauris. Sed lectus tellus, sodales id elit a, feugiat porttitor nulla. Sed porta magna vitae nisl vulputate lacinia. Morbi malesuada sollicitudin tortor, vitae pharetra nunc lacinia eget. Nulla ornare purus nunc, ut dapibus leo sodales adipiscing. Praesent sit amet justo diam. Quisque sagittis egestas sem vitae vestibulum. Quisque nec lacus ornare, volutpat arcu in, lacinia dolor.</p>
        <div class="skills-w3row">
            <div class="col-md-4 skills-left">
                <?= Html::img('@web/images/img1.jpg', ['alt' => 'Наш логотип']) ?>
            </div>
            <div class="col-md-8 skills-right">
                <h4>Why Choose Us</h4>
                <ul>
                    <li><div class="demo demo-1" data-percent="65"></div><p>Sed tincidunt</p></li>
                    <li><div class="demo demo-2" data-percent="95"></div><p>Lorem sed</p> </li>
                    <li><div class="demo demo-3" data-percent="85"></div><p>Consectetur</p> </li>
                    <li><div class="demo demo-4" data-percent="72"></div><p>Velitlorem</p> </li>
                </ul>

<?php
$circle_script = <<< JS
  $('.demo-1').percentcircle();
    $('.demo-2').percentcircle({
        animate : true,
        fillColor: '#e94e02'
    });
    $('.demo-3').percentcircle({
        animate : true,
        fillColor: '#F2B33F'
    });
    $('.demo-4').percentcircle({
        animate : true,
        fillColor: '#79302a'
    });
JS;
$this->registerJs($circle_script);
?>

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //skills -->
<!-- slid -->
<div class="slid">
    <div class="container">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <h3>Adult Beginner</h3>
                        <p>Fusce eu semper lacus, eget placerat mauris. Sed lectus tellus, sodales id elit a, feugiat porttitor nulla. Sed porta magna vitae nisl vulputate lacinia. Morbi malesuada sollicitudin tortor, vitae pharetra nunc lacinia eget. Nulla ornare purus nunc </p>
                    </li>
                    <li class="slide">
                        <h3>Advanced Classes</h3>
                        <p>Sed lectus tellus, sodales id elit a, feugiat porttitor nulla. Fusce eu semper lacus, eget placerat mauris. Sed porta magna vitae nisl vulputate lacinia. Morbi malesuada sollicitudin tortor, vitae pharetra nunc lacinia eget. Nulla ornare purus nunc </p>
                    </li>
                    <li class="slide">
                        <h3>Special Classes</h3>
                        <p>Fusce eu semper lacus, eget placerat mauris. Sed lectus tellus, sodales id elit a, feugiat porttitor nulla. Sed porta magna vitae nisl vulputate lacinia. Morbi malesuada sollicitudin tortor, vitae pharetra nunc lacinia eget. Nulla ornare purus nunc </p>
                    </li>
                </ul>
            </div>
        </section>
        <!-- FlexSlider -->
<?php
$flexsiler_script = <<< JS
 $(window).load(function() {
    $('.flexslider').flexslider({
        animation: "slide",
        controlsContainer: $(".custom-controls-container"),
        customDirectionNav: $(".custom-navigation a")
    });
});
JS;
$this->registerJs($flexsiler_script);
?>
        <!-- //FlexSlider -->
    </div>
</div>
<!-- //slid -->
<!-- features -->
<div class="features agileits">
    <div class="container">
        <div class="w3ls-title">
            <h3>OUR FEATURES</h3>
        </div>
        <div class="features-w3ls-row">
            <div class="col-md-4 features-grid">
                <span class="glyphicon glyphicon-home effect-1" aria-hidden="true"></span>
                <h5>Cum soluta nobis</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum iaculis enim, non convallis felis mattis at</p>
            </div>
            <div class="col-md-4 features-grid">
                <span class="glyphicon glyphicon-list-alt effect-1" aria-hidden="true"></span>
                <h5>Soluta vum nobis</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum iaculis enim, non convallis felis mattis at</p>
            </div>
            <div class="col-md-4 features-grid">
                <span class="glyphicon glyphicon-tree-deciduous effect-1" aria-hidden="true"></span>
                <h5>Nobis cum soluta</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum iaculis enim, non convallis felis mattis at</p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //features -->
<!-- subscribe -->
<div class="subscribe">
    <div class="container">
        <div class="subscribe-info">
            <h4>SIGN UP FOR NEWSLETTER</h4>
            <p><span>Contact us </span>Lorem ipsum dolor sit amet consectetur, <br> adipiscing elit Cras rutrum iaculis enim, non convallis felis mattis convallis.</p>
            <form action="#" method="post">
                <input type="text" name="Email" placeholder="Your Email" required="">
                <input type="submit" value="Subscribe">
                <div class="clearfix"> </div>
            </form>
        </div>
    </div>
</div>
<!-- //subscribe -->