<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>FarmStay</title>

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:600' rel='stylesheet' type='text/css'>

    <!-- font awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href=""/>
    <link href="{{asset('/css/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- animate.css -->
    <link href="{{asset('/css/client/animate/animate.css')}}" rel="stylesheet">
    <link href="{{asset('/css/client/animate/set.css')}}" rel="stylesheet">

    <!-- gallery -->
    <link href="{{asset('/css/client/gallery/blueimp-gallery.min.css')}}" rel="stylesheet">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('/img/logo.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('/img/logo.png')}}" type="image/x-icon">


    <link href="{{asset('/css/client/style.css')}}" rel="stylesheet">

</head>

<body>
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<div class="navbar-wrapper">
    <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="top-nav">
            <div class="container">
                <div class="navbar-header">
                    <!-- Logo Starts -->
                    <a class="navbar-brand" href="#home"><img src="{{asset('/img/logo.png')}}" alt="logo" width="50" height="50"></a>
                    <!-- #Logo Ends -->


                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <ul class="nav navbar-nav navbar-left scroll">
                        <li class="active">
                            <a href="#home" style="font-size: 15px">FarmStay</a>
                        </li>

                    </ul>

                </div>

                <!-- Nav Starts -->
                <div class="navbar-collapse  collapse">
                    <ul class="nav navbar-nav navbar-right scroll">
                        <li class="active"><a
                                    href="http://thebootstrapthemes.com/live/thebootstrapthemes-restaurant/#home">Home</a>
                        </li>
                        <li class=""><a href="http://thebootstrapthemes.com/live/thebootstrapthemes-restaurant/#menu">農業体験について</a>
                        </li>
                        <li class=""><a href="http://thebootstrapthemes.com/live/thebootstrapthemes-restaurant/#foods">目的で探す</a>
                        </li>
                        <li class=""><a
                                    href="http://thebootstrapthemes.com/live/thebootstrapthemes-restaurant/#partners">
                                会社概要</a>
                        </li>
                        <li class=""><a
                                    href="http://thebootstrapthemes.com/live/thebootstrapthemes-restaurant/#contact">ログイン</a>
                        </li>
                    </ul>
                </div>
                <!-- #Nav Ends -->

            </div>
        </div>
    </div>
</div>
<!-- #Header Starts -->


<div id="home">
    <!-- Slider Starts -->
    <div class="banner">
        <img src="{{asset('/img/back.jpg')}}" alt="banner" class="img-responsive">
        <div class="caption">
            <div class="caption-wrapper">
                <div class="caption-info">
                    <i class="fa fa-leaf fa-5x animated bounceInDown"></i>
                    <h1 class="animated bounceInUp">地域の農家さんに泊まれる</h1>
                    <p class="animated bounceInLeft">地元の方と交流を深めたり、ひと味違った思い出とごちそうを収穫してみませんか？</p>
                    <a href="http://thebootstrapthemes.com/live/thebootstrapthemes-restaurant/#menu"
                       class="explore animated bounceInDown"><i class="fa fa-angle-down  fa-3x"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- #Slider Ends -->
</div>


<!-- Cirlce Starts -->
<div id="menu" class="container spacer about">
    <h2 class="text-center wowload fadeInUp">Creative photographers of London</h2>
    <div class="row">
        <div class="col-sm-6 wowload fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
            <h4><i class="fa fa-camera-retro"></i> Introduction </h4>
            <p>旬の果実や野菜を自分の手で収穫し、その場で味わえる農業体験。自然の恵みをいっぱい受けた収穫物で作る料理は、最高のごちそうです。農家の方に秘伝のレシピを教えてもらったりする事ができます。</p>
            <p>また、農家さんの家に泊まることで、地元の方と交流を深めたりもできます。</p>

        </div>
        <div class="col-sm-6 wowload fadeInRight">

            <h4><i class="fa fa-bars"></i> Menu</h4>

            <!-- menus -->
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion"
                               href="http://thebootstrapthemes.com/live/thebootstrapthemes-restaurant/#collapseOne"
                               aria-expanded="true" aria-controls="collapseOne">
                                <i class="fa fa-coffee"></i> 農業体験について
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel">
                        <div class="panel-body">
                            <div class="clearfix food-list">
                                <div class="pull-left">農業体験について</div>
                                <span class="pull-right">農業体験について</span></div>
                            <div class="clearfix food-list">
                                <div class="pull-left">農業体験について</div>
                                <span class="pull-right">農業体験について</span></div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                               href="http://thebootstrapthemes.com/live/thebootstrapthemes-restaurant/#collapseTwo"
                               aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fa fa-fire"></i> 目的で探す
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel">
                        <div class="panel-body">
                            <div class="clearfix food-list">
                                <div class="pull-left">農業体験</div>
                                <span class="pull-right">農業体験</span></div>
                            <div class="clearfix food-list">
                                <div class="pull-left">民泊</div>
                                <span class="pull-right">民泊</span></div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                               href="http://thebootstrapthemes.com/live/thebootstrapthemes-restaurant/#collapseThree"
                               aria-expanded="false" aria-controls="collapseThree">
                                <i class="fa fa-beer"></i> 会社概要
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel">
                        <div class="panel-body">
                            <div class="clearfix food-list">
                                <div class="pull-left">会社概要</div>
                                <span class="pull-right">会社概要</span></div>
                            <div class="clearfix food-list">
                                <div class="pull-left">会社概要</div>
                                <span class="pull-right">会社概要</span></div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                               href="http://thebootstrapthemes.com/live/thebootstrapthemes-restaurant/#collapseFour"
                               aria-expanded="false" aria-controls="collapseFour">
                                <i class="fa fa-spoon"></i> ヘルプ
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel">
                        <div class="panel-body">
                            <div class="clearfix food-list">
                                <div class="pull-left">ヘルプ</div>
                                <span class="pull-right">ヘルプ</span></div>
                            <div class="clearfix food-list">
                                <div class="pull-left"></div>
                                <span class="pull-right">ヘルプ</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- menus -->

        </div>
    </div>


</div>
<!-- #Cirlce Ends -->


<!-- works -->
<div id="foods" class=" clearfix grid">
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{asset('/img/top/1.jpg')}}" alt="img01"/>
        <figcaption>
            <h2>Agricultural experience</h2>
            <p>大阪で農業体験ができます<br>
                <a href="{{asset('/img/top/1.jpg')}}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{asset('/img/top/2.jpg')}}" alt="img01"/>
        <figcaption>
            <h2>Agricultural experience</h2>
            <p>三重で農業体験ができます<br>
                <a href="{{asset('/img/top/2.jpg')}}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{asset('/img/top/3.jpg')}}" alt="img01"/>
        <figcaption>
            <h2>Agricultural experience</h2>
            <p>山梨で農業体験ができます<br>
                <a href="{{asset('/img/top/3.jpg')}}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{asset('/img/top/4.jpg')}}" alt="img01"/>
        <figcaption>
            <h2>Agricultural experience</h2>
            <p>栃木で農業体験ができます<br>
                <a href="{{asset('/img/top/4.jpg')}}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>

    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{asset('/img/top/5.jpg')}}" alt="img01"/>
        <figcaption>
            <h2>Private residence</h2>
            <p>高知で民泊ができます<br>
                <a href="{{asset('/img/top/5.jpg')}}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{asset('/img/top/6.jpg')}}" alt="img01"/>
        <figcaption>
            <h2>Agricultural experience</h2>
            <p>群馬で農業体験ができます<br>
                <a href="{{asset('/img/top/6.jpg')}}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{asset('/img/top/1.jpg')}}" alt="img01"/>
        <figcaption>
            <h2>Agricultural experience</h2>
            <p>大阪で農業体験ができます<br>
                <a href="{{asset('/img/top/1.jpg')}}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{asset('/img/top/2.jpg')}}" alt="img01"/>
        <figcaption>
            <h2>Agricultural experience</h2>
            <p>三重で農業体験ができます<br>
                <a href="{{asset('/img/top/2.jpg')}}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{asset('/img/top/3.jpg')}}" alt="img01"/>
        <figcaption>
            <h2>Agricultural experience</h2>
            <p>山梨で農業体験ができます<br>
                <a href="{{asset('/img/top/3.jpg')}}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>

</div>
<!-- works -->


<div id="partners" class="container spacer ">
    <h2 class="text-center  wowload fadeInUp">Some of our happy customers</h2>
    <div class="clearfix">
        <div class="col-sm-6 col-sm-offset-3">

            <div id="carousel-testimonials" class="carousel slide testimonails  wowload fadeInRight"
                 data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active animated bounceInRight row">
                        <div class="animated slideInLeft col-xs-2"><img alt="portfolio"
                                                                        src="{{asset('/img/team/suzuki2.jpg')}}" width="100"
                                                                        class="img-circle img-responsive"></div>
                        <div class="col-xs-10">
                            <p> I must explain to you how all this mistaken idea of denouncing pleasure and praising
                                pain was born and I will give you a complete account of the system, and expound the
                                actual teachings of the great explorer of the truth, the master-builder of human
                                happiness. </p>
                            <span>Angel Smith - <b>eshop Canada</b></span>
                        </div>
                    </div>
                    <div class="item  animated bounceInRight row">
                        <div class="animated slideInLeft col-xs-2"><img alt="portfolio"
                                                                        src="{{asset('/img/team/suzuki2.jpg')}}" width="100"
                                                                        class="img-circle img-responsive"></div>
                        <div class="col-xs-10">
                            <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because
                                those who do not know how to pursue pleasure rationally encounter consequences that are
                                extremely painful.</p>
                            <span>John Partic - <b>Crazy Pixel</b></span>
                        </div>
                    </div>
                    <div class="item  animated bounceInRight row">
                        <div class="animated slideInLeft  col-xs-2"><img alt="portfolio"
                                                                         src="{{asset('/img/team/suzuki2.jpg')}}" width="100"
                                                                         class="img-circle img-responsive"></div>
                        <div class="col-xs-10">
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so
                                beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire,
                                that they cannot foresee the pain and trouble that are bound to ensue.</p>
                            <span>Harris David - <b>Jet London</b></span>
                        </div>
                    </div>
                </div>

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-testimonials" data-slide-to="1"></li>
                    <li data-target="#carousel-testimonials" data-slide-to="2"></li>
                </ol>
                <!-- Indicators -->
            </div>
        </div>
    </div>


    <!-- team -->
    <h3 class="text-center  wowload fadeInUp">Our Chefs</h3>
    <p class="text-center  wowload fadeInLeft">Our chefs that is making everything possible</p>
    <div class="row grid team  wowload fadeInUpBig">
        <div class=" col-sm-3 col-xs-6">
            <figure class="effect-chico">
                <img src="{{asset('/img/team/suzuki2.jpg')}}" alt="img01" class="img-responsive"/>
                <figcaption>
                    <p><b>Barbara Husto</b><br>Senior Chef</p>
                </figcaption>
            </figure>
        </div>

        <div class=" col-sm-3 col-xs-6">
            <figure class="effect-chico">
                <img src="{{asset('/img/team/suzuki2.jpg')}}" alt="img01"/>
                <figcaption>
                    <p><b>Barbara Husto</b><br>Chef</p>
                </figcaption>
            </figure>
        </div>

        <div class=" col-sm-3 col-xs-6">
            <figure class="effect-chico">
                <img src="{{asset('/img/team/suzuki2.jpg')}}" alt="img01"/>
                <figcaption>
                    <p><b>Barbara Husto</b><br>Asst Chef</p>
                </figcaption>
            </figure>
        </div>

        <div class=" col-sm-3 col-xs-6">
            <figure class="effect-chico">
                <img src="{{asset('/img/team/suzuki2.jpg')}}" alt="img01"/>
                <figcaption>
                    <p><b>Barbara Husto</b><br>Asst Chef</p>
                </figcaption>
            </figure>
        </div>
    </div>
    <!-- team -->
</div>

<!-- About Starts -->
<div class="highlight-info">
    <div class="overlay spacer">

        <div class="container">
            <h2 class="text-center wowload fadeInUp animated">価値</h2>
            <div class="row text-center  wowload fadeInDownBig animated"
                 style="visibility: visible; animation-name: fadeInDownBig;">
                <div class="col-sm-4 col-xs-12">
                    <i class="fa fa-car  fa-5x"></i><h4>気軽に日帰りで農業体験ができます</h4>
                    <br><br><br>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <i class="fa fa-user-o  fa-5x"></i><h4>地域の方とも交流できます</h4>
                    <br><br><br>
                </div>

                <div class="col-sm-4 col-xs-12">
                    <i class="fa fa-volume-control-phone fa-5x"></i><h4>しっかりとしたサポート体制</h4>
                    <br><br><br>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Ends -->


<div id="contact" class="spacer">
    <!--Contact Starts-->
    <div class="container contactform center">
        <h2 class="text-center  wowload fadeInUp">Reservation</h2>
        <div class="row wowload fadeInLeftBig">
            <div class="col-sm-6 col-sm-offset-3 col-xs-12">
                <input type="text" placeholder="Name">
                <input type="text" placeholder="Company">
                <textarea rows="5" placeholder="Message"></textarea>
                <button class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send</button>
            </div>
        </div>
    </div>
</div>
<!--Contact Ends-->
<div  style="position: relative; overflow: hidden;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d207432.995974794!2d139.57030491888455!3d35.673540788923226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x605d1b87f02e57e7%3A0x2e01618b22571b89!2z5p2x5Lqs6YO9!5e0!3m2!1sja!2sjp!4v1490011186435"  frameborder="0" style="border:0; width: 100%; height: 500px; " allowfullscreen></iframe>
</div>

<!-- Footer Starts -->
<div class="footer text-center spacer">
    <p class="wowload flipInX"><a href="#"><i class="fa fa-facebook fa-2x"></i></a> <a href="#"><i
                    class="fa fa-instagram fa-2x"></i></a> <a href="#"><i class="fa fa-twitter fa-2x"></i></a> <a
                href="#"><i class="fa fa-flickr fa-2x"></i></a></p>
    Copyright 2014 Cyrus Creative Studio. All rights reserved.
</div>
<!-- # Footer Ends -->
<a href="#home" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>



<!-- jquery -->
<script src="{{asset('/js/jquery.js')}}"></script>

<!-- wow script -->
<script src="{{asset('/js/wow/wow.min.js')}}"></script>


<!-- boostrap -->
<script src="{{asset('/js/bootstrap/js/bootstrap.js')}}" type="text/javascript"></script>

<!-- jquery mobile -->
<script src="{{asset('/js/mobile/touchSwipe.min.js')}}"></script>
<script src="{{asset('/js/respond/respond.js')}}"></script>

<!-- gallery -->
<script src="{{asset('/js/gallery/jquery.blueimp-gallery.min.js')}}"></script>


<!-- custom script -->
<script src="{{asset('/js/script.js')}}"></script>
</body>
</html>