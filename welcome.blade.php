<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SOLE</title>

<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/slick-team-slider.css') }}" />


<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.easing.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.mixitup.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
         
			 .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 20%;
      margin: auto;
  }
  
  

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body style="background-image:url(img/d.jpg);box-shadow: 10px 10px 5px #888888"">
     
                <!--HEADER START-->
    <div class="main-navigation navbar-fixed-top" >
        <nav class="navbar navbar-default" style="background-image:url(img/ww.jpg);box-shadow: 10px 10px 5px #888888"">
            <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar" style="" >

              <ul class="nav navbar-nav navbar-right">
                <li><a class="btn button-medium" style="width:150px; height:30px; color:black" href="#myCarousel"><font  style="font-size:12px">Top</font></a></li>
                <li><a class="btn button-medium" style="width:150px; height:30px; color:black" href="#se"><font style="font-family:Comic Sans MS, Cursive; font-color:#ffffff ; font-size:12px">Auction Categories</font></a></li>
                <li><a class="btn button-medium"  style="width:150px; height:30px; color:black" href="#about"><font style=" font-family:Comic Sans MS, Cursive;font-size:12px">Hot Auctions</font></a></li>
                <li><a class="btn button-medium" style="width:150px; height:30px ; color:black" href="#contact"><font style="font-family:Comic Sans MS, Cursive; ;font-size:12px">CONTACT US</font></a></li>
                


                
              </ul>
             <br>
                    <div >
            @if (Route::has('login'))
                <div style="float:left">
                    @if (Auth::check())
                        <a  style="font-size:50px ; color:#000000" href="{{ url('/home') }}">Home</a>
                    @else
                        <a style="font-size:50px ; color:#000000" href="{{ url('/login') }}">Login</a>
                        &#160&#160&#160&#160
                        <a style="font-size:50px ; color:#000000" href="{{ url('/register') }}">Register</a>

                    @endif
                </div>
            @endif
</div>
            </div>
          </div>

        </nav>

    </div>
    <!--HEADER END-->

<div id="myCarousel" class="carousel slide" data-ride="carousel" style="height:320px;width:570px;margin-left:360px ;margin-top:170px">
    <!-- Indicators -->
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
    
      <div class="item active">
        <img src="img/12.jpg" alt="Chania" style="height:320px;width:670px">
      </div>

      <div class="item">
        <img src="img/661.jpg" alt="Chania" style="height:320px;width:670px">
      </div>
    
      <div class="item">
        <img src="img/wq.jpg" alt="Flower" style="height:320px;width:670px">
      </div>
       <div class="item">
        <img src="img/44.jpg" alt="Flower" style="height:320px;width:670px">
      </div>
      <div class="item">
        <img src="img/99.jpg" alt="Flower" style="height:320px;width:670px">
      </div>

     
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

    <!--BANNER END-->

    <!--CTA1 START-->
    <div style=" margin-top:30px">
        <div class="container" >
            <div class="row text-center white" style="background-image:url(img/ww.jpg);box-shadow: 10px 10px 5px #888888"">
  <canvas id="canvas" style=" margin-left:30px; width:160px ; height:160px"width="140" height="140"
style="background-color:#333 ; margin-right:-20px ; padding-left:50px">
</canvas>           
		   <h1 class="cta-title" style="color:#000000">SOLE</h1>
		<img src = "img/ri.gif" style="width:50px ;margin-left:-10px;">

                <p class="cta-sub-title" style="color:#000000">YOUR Electronic Auction</p>
            </div>
        </div>
    </div>
    <!--CTA1 END-->

    <!--SERVICE START-->
    <div id="service" class="section-padding">
        <div class="container">
            <div  class="row">
                <div id = "se" class="page-title text-center">
                    <h1 style="color:ffffff ; font-size:40px">Categories</h1>
                    <p> here is we show Categories that offered by our Auction  <br>You can visit and brows</p>
                    <hr class="pg-titl-bdr-btm"></hr>
                </div>
                
    
    <!--SERVICE END-->

    <!--PORTFOLIO START-->
    <div id="portfolio" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="page-title text-center">
                  
                    <hr class="pg-titl-bdr-btm"></hr>
                </div>
				 <div class="col-md-12 fil-btn text-center" style="margin-top:-100px" >
                         <div class="filter wrk-title active" style="margin-bottom:40px" data-filter="all">
						 All</div>
                <div class="port-sec">
                   
						 
                            <div class="filter wrk-title" data-filter=".category-1">
					    <a  href="{{ route('house') }}"> <img src="img/65.jpg" style="width:100px ; radius:10px;border-radius:7px; height:100px ;width:150px;margin-left:120px; float:left"></a>

							 </div>
                            <div class="filter wrk-title" data-filter=".category-2">
							<a  href="{{ route('car') }}"><img src="img/12.jpg"style="width:170px ; radius:10px;border-radius:7px; height:100px ;width:150px; float:right"></a>

							</div>
                            <div class="filter wrk-title lst-cld" data-filter=".category-3">
							   <a  href="{{ route('art') }}"> <img src="img/661.jpg" style="width:170px ; radius:10px;border-radius:7px; height:100px ;width:150px; float:right"></a>

							</div>
                            <div class="filter wrk-title lst-cld" data-filter=".category-4">
						  <a  href="{{ route('picture') }}"><img src="img/43.jpg" style="width:170px ; radius:10px;border-radius:7px; height:100px ;width:150px; float:right"></a>

							</div>

                    </div>
            
    <!--PORTFOLIO END-->

    <!--TEAM START-->
    <div id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="page-title text-center" style="background-image:url(img/nar2.gif) ; width:95% ; height:200px">
                    
                </div>
                <h1 style="margin-left:480px">HOT Auctions</h1>
                    <hr class="pg-titl-bdr-btm"></hr>
                <div class="filimg mix category-4  col-md-12 col-sm-8 col-xs-12" data-myorder="2">
                    <div class="col-md-12">
                    <div class="service-box">
                        <div class="table-responsive" style="margin-left:300px ; ">
            <table class="table table-striped">
              <thead>
                <tr>
                   <th>عدد المشاركين في المزاد</th>
                   <th>صاحب اعلى سعر</th>
                  <th>اعلى سعر</th>
                    <thتاريخ البدء</th>
                  <th>تاريخ الإنتهاء</th>
                  <th>حالة المزاد</th>
                   <th>الصنف</th>
                  <th>اسم المزاد</th>
                 
              

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                    <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                  
                </tr>
                
                    <tr>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                    <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                  
                </tr>
              </tbody>
            </table>
          </div>
                </div>
            </div>
            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    <!--TEAM END-->
    
    <!--CTA2 START-->

    </div>
    <!--CTA2 END-->

    <!--CONTACT START-->
    <div id="contact" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="page-title text-center">
                    <h1>تواصل معنا</h1>
                    <p>نسعد باستقبال اقتراحاتكم وشكاويكم .. فالموقع بكم و لأجلكم <br>
                 </p>
                    <hr class="pg-titl-bdr-btm"></hr>
                </div>
                <div id="sendmessage">تم ارسال رسالتك .شكراً لك</div>
                <div id="errormessage"></div>
                
                <div class="form-sec">
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="col-md-4 form-group">
                            <input type="text" name="name" class="form-control text-field-box" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="email" class="form-control text-field-box" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="text" class="form-control text-field-box" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="col-md-12 form-group">
                            <textarea class="form-control text-field-box" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
            
                            <button class="button-medium" id="contact-submit" type="submit" name="contact">send know</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--CONTACT END-->


    <div class="footer-bottom" style="background-image:url(img/ww.jpg)">
        <div class="container">
            <div style="visibility: visible; animation-name: zoomIn;" class="col-md-12 text-center wow zoomIn">
                <div class="footer_copyright">
                    <p style="color:black"> &copy copyright reserve </p> 
<h3 style="color:black"> SOLE</h3>                   
                
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mixitup.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
    
       <script>
$(function(){

  $('#myCarousel').carousel();
});
</script>

<script>
var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var radius = canvas.height / 2;
ctx.translate(radius, radius);
radius = radius * 0.90
setInterval(drawClock, 1000);

function drawClock() {
  drawFace(ctx, radius);
  drawNumbers(ctx, radius);
  drawTime(ctx, radius);
}

function drawFace(ctx, radius) {
  var grad;
  ctx.beginPath();
  ctx.arc(0, 0, radius, 0, 2*Math.PI);
  ctx.fillStyle = 'white';
  ctx.fill();
  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
  grad.addColorStop(0, '#333');
  grad.addColorStop(0.5, 'white');
  grad.addColorStop(1, '#333');
  ctx.strokeStyle = grad;
  ctx.lineWidth = radius*0.1;
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
  ctx.fillStyle = '#333';
  ctx.fill();
}

function drawNumbers(ctx, radius) {
  var ang;
  var num;
  ctx.font = radius*0.15 + "px arial";
  ctx.textBaseline="middle";
  ctx.textAlign="center";
  for(num = 1; num < 13; num++){
    ang = num * Math.PI / 6;
    ctx.rotate(ang);
    ctx.translate(0, -radius*0.85);
    ctx.rotate(-ang);
    ctx.fillText(num.toString(), 0, 0);
    ctx.rotate(ang);
    ctx.translate(0, radius*0.85);
    ctx.rotate(-ang);
  }
}

function drawTime(ctx, radius){
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour=hour%12;
    hour=(hour*Math.PI/6)+
    (minute*Math.PI/(6*60))+
    (second*Math.PI/(360*60));
    drawHand(ctx, hour, radius*0.5, radius*0.07);
    //minute
    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
    drawHand(ctx, minute, radius*0.8, radius*0.07);
    // second
    second=(second*Math.PI/30);
    drawHand(ctx, second, radius*0.9, radius*0.02);
}

function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0,0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
}
</script>

            </div>
        </div>
    </body>
</html>
