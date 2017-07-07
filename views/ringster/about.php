<?php

use yii\helpers\Html;

?>

<!-- about -->
<div class="about agileits">
    <div class="container">
        <div class="w3ls-title">
            <h3>ABOUT US</h3>
        </div>
        <div class="about-w3ls-row">
            <div class="col-md-4 about-left">
                <div class="pic">
                    <div class="stack twisted">
                        <?= Html::img('@web/images/img2.jpg', ['alt' => 'Наш логотип']) ?>
                    </div>
                </div>
            </div>
            <div class="col-md-8 about-right">
                <h5>Blanditiis praesentium deleniti atque corrupti quos </h5>
                <p>Dignissimos at vero eos et accusamus et iusto odio ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecat laborum et dolorum fuga.  </p>
                <!-- history -->
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title asd">
                                <a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Lorem ipsum dolor
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body panel_text">
                                Sed lectus tellus sodales id elit a, feugiat porttitor nulla. Sed porta magna vitae nisl vulputate lacinia. Morbi malesuada sollicitudin tortor, vitae pharetra nunc lacinia eget leo sodales adipiscing.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title asd">
                                <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Blanditiis praesentium
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body panel_text">
                                Feugiat porttitor nulla Sed lectus tellus sodales id elit a,  Sed porta magna vitae nisl vulputate lacinia. Morbi malesuada sollicitudin tortor, vitae pharetra nunc lacinia eget leo sodales adipiscing.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title asd">
                                <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Terry richardson
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body panel_text">
                                Morbi malesuada sollicitudin tortor, vitae pharetra nunc lacinia eget leo sodales adipiscing. Sed lectus tellus, sodales id elit a, feugiat porttitor nulla. Sed porta magna vitae nisl vulputate lacinia.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title asd">
                                <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Nulla ornare purus
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                            <div class="panel-body panel_text">
                                Sed lectus tellus, sodales id elit a, feugiat porttitor nulla. Sed porta magna vitae nisl vulputate lacinia. Morbi malesuada sollicitudin tortor, vitae pharetra nunc lacinia eget leo sodales adipiscing.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //history -->
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //about -->
<!-- about-slid -->
<div class="about-slid">
    <div class="container">
        <div class="flipster">
            <ul>
                <li>
                    <div class="pricing">
                        <div class="pricing-top ">
                            <h3>Special plan</h3>
                            <p>$150/month</p>
                        </div>
                        <div class="pricing-bottom">
                            <div class="pricing-bottom-top">
                                <p>Yoga Class : 6.00am - 7.00am</p>
                                <p>Gym : 7.05am - 8.00am</p>
                                <p>Weight Lifting : 8.05am - 9.00am </p>
                                <p>Running : 9.05am - 10.00am</p>
                            </div>
                            <div class="pricing-bottom-bottom">
                                <p><span>Unlimited</span>lectustes</p>
                            </div>
                            <div class="buy-button">
                                <a href="#">Join Now</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="pricing">
                        <div class="pricing-top top-two">
                            <h3>Basic plan</h3>
                            <p>$50/month</p>
                        </div>
                        <div class="pricing-bottom">
                            <div class="pricing-bottom-top">
                                <p>Yoga Class : 6.00am - 7.00am</p>
                                <p class="display-none">Gym : 7.05am - 8.00am</p>
                                <p class="display-none">Weight Lifting : 8.05am - 9.00am </p>
                                <p class="display-none">Running : 9.05am - 10.00am</p>
                            </div>
                            <div class="pricing-bottom-bottom">
                                <p><span>Sunt inc</span> lectustes</p>
                            </div>
                            <div class="buy-button">
                                <a href="#">Join Now</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="pricing">
                        <div class="pricing-top top-three">
                            <h3>Standard plan</h3>
                            <p>$100/month</p>
                        </div>
                        <div class="pricing-bottom">
                            <div class="pricing-bottom-top">
                                <p>Yoga Class : 6.00am - 7.00am</p>
                                <p>Gym : 7.05am - 8.00am</p>
                                <p class="display-none">Weight Lifting : 8.05am - 9.00am </p>
                                <p class="display-none">Running : 9.05am - 10.00am</p>
                            </div>
                            <div class="pricing-bottom-bottom">
                                <p><span>Sunt inc</span> lectustes</p>
                            </div>
                            <div class="buy-button">
                                <a href="#">Join Now</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="pricing">
                        <div class="pricing-top top-four">
                            <h3>Premium plan</h3>
                            <p>$130/month</p>
                        </div>
                        <div class="pricing-bottom">
                            <div class="pricing-bottom-top">
                                <p>Yoga Class : 6.00am - 7.00am</p>
                                <p>Gym : 7.05am - 8.00am</p>
                                <p>Weight Lifting : 8.05am - 9.00am </p>
                                <p class="display-none">Running : 9.05am - 10.00am</p>
                            </div>
                            <div class="pricing-bottom-bottom">
                                <p><span>Unlimited</span>lectustes</p>
                            </div>
                            <div class="buy-button">
                                <a href="#">Join Now</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="pricing">
                        <div class="pricing-top top-five">
                            <h3>Super Fast plan</h3>
                            <p>$200/month</p>
                        </div>
                        <div class="pricing-bottom">
                            <div class="pricing-bottom-top">
                                <p>Yoga Class : 5.00am - 7.00am</p>
                                <p>Gym : 7.05am - 8.00am</p>
                                <p>Weight Lifting : 8.05am - 9.00am </p>
                                <p>Running : 9.05am - 10.00am</p>
                            </div>
                            <div class="pricing-bottom-bottom">
                                <p><span>Sunt inc</span> lectustes</p>
                            </div>
                            <div class="buy-button">
                                <a href="#">Join Now</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

<?php
$flipster_script = <<< JS
    $(function(){ $(".flipster").flipster({ style: 'carousel', start: 0 }); });
JS;
$this->registerJs($flipster_script);
?>

    </div>
</div>
<!-- //about-slid -->
<!-- team -->
<div class="team agileits">
    <div class="team-info">
        <div class="container">
            <div class="w3ls-title">
                <h3>Our Trainers</h3>
            </div>
            <div class="team-row">
                <div class="col-md-3 team-grids">
                    <div class="team-img">
                        <img class="img-responsive" src="images/t1.jpg" alt="">
                        <div class="captn">
                            <div class="captn-top">
                                <h4>Edwards Doe</h4>
                                <p>Aenean pulvinar ac enimet posuere tincidunt velit Utin tincidunt</p>
                            </div>
                            <div class="social-icons">
                                <ul>
                                    <li><a href="#"> </a></li>
                                    <li><a href="#" class="fb"> </a></li>
                                    <li><a href="#" class="in"> </a></li>
                                </ul>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 team-grids">
                    <div class="team-img">
                        <img class="img-responsive" src="images/t2.jpg" alt="">
                        <div class="captn">
                            <div class="captn-top">
                                <h4>Mark Sophia</h4>
                                <p>Aenean pulvinar ac enimet posuere tincidunt velit Utin tincidunt</p>
                            </div>
                            <div class="social-icons">
                                <ul>
                                    <li><a href="#"> </a></li>
                                    <li><a href="#" class="fb"> </a></li>
                                    <li><a href="#" class="in"> </a></li>
                                </ul>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 team-grids">
                    <div class="team-img">
                        <img class="img-responsive" src="images/t3.jpg" alt="">
                        <div class="captn">
                            <div class="captn-top">
                                <h4>Michael amet</h4>
                                <p>Aenean pulvinar ac enimet posuere tincidunt velit Utin tincidunt</p>
                            </div>
                            <div class="social-icons">
                                <ul>
                                    <li><a href="#"> </a></li>
                                    <li><a href="#" class="fb"> </a></li>
                                    <li><a href="#" class="in"> </a></li>
                                </ul>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 team-grids">
                    <div class="team-img">
                        <img class="img-responsive" src="images/t4.jpg" alt="">
                        <div class="captn">
                            <div class="captn-top">
                                <h4>Daniel Nyari</h4>
                                <p>Aenean pulvinar ac enimet posuere tincidunt velit Utin tincidunt</p>
                            </div>
                            <div class="social-icons">
                                <ul>
                                    <li><a href="#"> </a></li>
                                    <li><a href="#" class="fb"> </a></li>
                                    <li><a href="#" class="in"> </a></li>
                                </ul>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- //team -->