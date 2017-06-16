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
    <h2 class="text-center wowload fadeInUp">地元の方と交流を深めたり、ひと味違った思い出とごちそうを収穫してみませんか？</h2>
    <div class="row">
        <div class="col-sm-6 wowload fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
            <h4><i class="fa fa-camera-retro"></i> Introduction </h4>
            <p>旬の果実や野菜を自分の手で収穫し、その場で味わえる農業体験。自然の恵みをいっぱい受けた収穫物で作る料理は、最高のごちそうです。農家の方に秘伝のレシピを教えてもらったりする事ができます。</p>
            <p>また、農家さんの家に泊まることで、地元の方と交流を深めたりもできます。</p>

        </div>
        <div class="col-sm-6 wowload fadeInRight">

            <h4><i class="fa fa-search"></i> Search</h4>

            <label class="sr-only" for="inlineFormInputGroup">どこへ行きますか？</label>
            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon"><i class="fa fa-fighter-jet"></i></div>
                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="どこへ行きますか？">
            </div>
            <br>

            <label class="sr-only" for="inlineFormInputGroup">チェックイン/チェックアウト</label>
            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="チェックイン/チェックアウト">
            </div>
            <br>
            <label class="sr-only" for="inlineFormInputGroup">人数</label>
            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="人数">
            </div>
            <br>
            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> </button>

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
        <h2 class="text-center  wowload fadeInUp">Contact</h2>
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