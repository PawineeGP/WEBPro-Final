@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CHECK ME</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://blackrockdigital.github.io/startbootstrap-landing-page/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <!-- <link href="css/home-page.css" rel="stylesheet"> -->

    <!-- Custom Fonts -->
    <link href="https://blackrockdigital.github.io/startbootstrap-landing-page/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
	  <link rel="stylesheet" type="text/css" href="css/mobile.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/menu.css">
    <!-- Scipt -->
	  <script src="js/mobile.js" type="text/javascript"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>    -->
     <script type="text/javascript" src="http://www.bt-50.com/js/main.js?3"></script>

     <style media="screen">

     #gotoTop{
     position:fixed;
     margin:auto;
     right:0px;
     bottom:0px;
     border:0px;
     cursor:pointer;
     z-index: 99;
     display:none;
     }
     </style>

</head>

<body>
  <div class="container">
  <div class="collapse navbar-collapse" id="app-navbar-collapse bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="#about">หน้าแรก</a>
        </li>
        <li>
            <a href="#contact">คำนวนการรับประทานอาหาร</a>
        </li>
        <li>
            <a href="#Menus">เมนูแนะนำ</a>
        </li>

        <li>
            <a href="#Stact">สถิติ</a>
        </li>
      <!-- Right Side Of Navbar -->
      <!-- <ul class="nav navbar-nav navbar-right"> -->
          <!-- Authentication Links -->

          @if (Auth::guest())
              <li><a href="{{ route('login') }}">Login</a></li>
              <li><a href="{{ route('register') }}">Register</a></li>
          @else
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                      <li>
                          <a href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              Logout
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                  </ul>
              </li>
          @endif
      </ul>
  </div>
</div>


  <!-- Header -->
      <a name="about"></a>
    <div class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                  <div class="header">

  		           </div>
            </div>
        </div>
      </div>
    </div>
        <!-- /.container -->
        <!-- contact -->
        <a name="contact"></a>
        <div class="contact">
          <div id="body">
  			<div class="header">
  				<div>
  					<h1>คำนวณ</h1>
  				</div>
  			</div>
  			<div class="body">
  				<img src="img/bg-header-about.jpg" alt="">
  			</div>
  			<div class="footer">
  				<div class="sidebar">
  					<h1>จำนวนแคลอรี่(Calorie)ที่จำเป็นในแต่ละวัน</h1>
  					<p>ผู้ชาย :: 1,800 - 2,000 kcal <br>
              ผู้หญิง :: 1,500 - 1,800 kcal
              <br>
              <br>
              <img src="img/cantaloupe.jpg" alt="" width="160" height="160">
            </p>
  				</div>
  				<div class="article">
  					<h1><strong>ตารางคำนวณ</strong></h1>
            <div class="row">
              <div class="col-lg-12">
              <form class="from" action="index.html" method="post">
                  เลือกเพศของคุณ
                  <p>
              <input type=radio checked align=left value=MalePick name=gender>&nbsp;&nbsp; ชาย &nbsp;&nbsp;
              <input type=radio align=left value=FemPick name=gender>  &nbsp;หญิง</p>
            ส่วนสูงของคุณ (เซนติเมตร)<br>
            <input size=5 name="cents"><br />
            น้ำหนักของคุณ (กิโลกรัม)<br>
            <input size=5 name="kilograms"><br />
            อายุของคุณ (ปี)<BR>
            <input size=5 name="years"><br />
            ระดับการออกกำลังกายของคุณ<br>
            <select name=exercise>
              <option value="1.25">น้อย หรือไม่ค่อยออกกำลังกาย</option>
              <option value="1.375">ปานกลาง ออกกำลังกาย 1-3 ครั้งต่อสัปดาห์</option>
              <option value="1.55">ปานกลาง ออกกำลังกาย 4-5 ครั้งต่อสัปดาห์</option>
              <option value="1.7">หนัก ออกกำลังกาย 6-7 ครั้งต่อสัปดาห์</option>
              <option value="1.9">หนักมาก ออกกำลังกายวันละ 2 ครั้งขึ้นไป</option>
            </select>
            <br><br />
            <input onClick="CalcDCI()" type="button" value="คำนวณ" name="button">
              <br>
              <br>
              <br>
            <div class="cal">
              <h1>ผลการคำนวน</h1>
              BMR (Basal Metabolic Rate) พลังงานที่จำเป็นพื้นฐานในการมีชีวิต<BR>
              <input  size="5" name="BMR" style="background-color:#FFC; border:solid 1px #CCC" > กิโลแคลอรี่
              <br>
              TDEE (Total Daily Energy Expenditure) พลังงานที่คุณใช้ในแต่ละวัน<BR>
              <input size="5" name="tdee" style="background-color:#FFC; border:solid 1px #CCC" > กิโลแคลอรี่
            </div>

              <ul class="img-center">
              <li><img src="img/new-chills.png" alt=""></li><br>
              <li><strong><p>คุณรัประทานหารได้แย่มาก</p></strong></li>
                  </ul>
  					<p></p>
  					<h1>คำแนะนำเพิ่มเติม</h1>
            <p><li>คุณมีความเสี่ยงที่จะอ้วนขึ้น คุณควรรับประทานอาหารที่มีแคลอรี่สูงๆให้น้อยลง</li></p>
  					<span></span>
  					<span></span>
  					<p></p>
            </form>
          </div>
  			</div>
  		</div>
    </div>
  </div>
  </div>


        <!-- Menus -->
        <a name="Menus"></a>
        <div id="body">
       <div class="header">
          <!-- <div class="container">
            <div class="row"> -->
          <div>
  					<h1>เมนูแนะนำ</h1>
  				</div>
  			</div>
  			<div class="blog">
  				<div class="featured">
  					<ul>
  						<li>
  							<img src="img/new-chills.png" alt="">
  							<div>
  								<h1>NEW CHILLS FOR SUMMER</h1>
  								<span>By Admin on November 28, 2023</span>
  								<p>You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template.</p>
  								<a href="singlepost.html" class="more">Read More</a>
  							</div>
  						</li>
  						<li>
  							<img src="img/berries.png" alt="">
  							<div>
  								<h1>BERRIES ON THE GROVE</h1>
  								<span>By Admin on November 28, 2023</span>
  								<p>You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template.</p>
  								<a href="singlepost.html" class="more">Read More</a>
  							</div>
  						</li>
  					</ul>
  					<a href="blog.html" class="load">Load More</a>
  				</div>
  				<div class="sidebar">
  					<h1>Recent Posts</h1>
  					<img src="img/on-diet.png" alt="">
  					<h2>ON THE DIET</h2>
  					<span>By Admin on November 28, 2023</span>
  					<p>You can replace all this text with your own text. You can remove any link to our website from this website template.</p>
  					<a href="singlepost.html" class="more">Read More</a>
  				</div>
          </div>
        </div>
      <!-- </div>
    </div> -->


  <!-- Stact -->
  <a name="Stact"></a>
  <div class="stact">
    <div id="body" class="contact">
    			<div class="header">
    				<div>
    					<h1>สถิติ</h1>
    				</div>
    			</div>
    			<div class="body">
    				<div>
    					<div>
    						<img src="img/check-in.png" alt="">
    						<h1>UNIT 0123 , ABC BUILDING, BUSSINESS PARK</h1>
    						<p>If you're having problems editing this website template, then don't hesitate to ask for help on the Forums.</p>
    					</div>
    				</div>
    			</div>
        </div>

        <!-- Footer -->
        <footer>
   <div class="container">
       <div class="row">
           <div class="col-lg-12">
               <ul class="list-inline">
                   <!-- <li>
                       <a href="#">หน้าแรก</a>
                   </li> -->
                   <li class="footer-menu-divider">&sdot;</li>
                   <li>
                       <a href="#about">หน้าแรก</a>
                   </li>
                   <li class="footer-menu-divider">&sdot;</li>
                   <li>
                       <a href="#Manus">เมนูแนะนำ</a>
                   </li>
                   <li class="footer-menu-divider">&sdot;</li>
                   <li>
                       <a href="#contact">คำนวณ</a>
                   </li>
                   <li>
                       <a href="#Stact">สถิติ</a>
                   </li>

               </ul>
               <p class="copyright text-muted small">GiGie &copy; Web Programing :2017</p>
           </div>
       </div>
   </div>
</footer>
    <!-- jQuery -->
    <script src="https://blackrockdigital.github.io/startbootstrap-landing-page/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://blackrockdigital.github.io/startbootstrap-landing-page/js/bootstrap.min.js"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  <!--  -->
  <img id="gotoTop" src="img/home-icon.png" border="0" />

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">
$(function(){
// เงื่อนไข event เมื่อมีการเลื่อน scrollbar ในหน้าเพจ
$(window).scroll(function(){
if($(document).scrollTop()>100){ // เงื่อนไขขอบบนสุดของ หน้าเพจ มากกว่า 100 pixels หรือไม่
$("#gotoTop").fadeIn(); // ถ้ามากกว่าให้แสดง ปุ่ม go to top
}else{
$("#gotoTop").hide(); // ถ้าน้อยกว่าให้ซ่อน ปุ่ม go to top
}
});
// เงื่อนไขเมื่อมีการคลิกที่ปุ่ม go to top
$("#gotoTop").click(function(){
$('html, body').animate({ // สร้างการเคลื่อนไหว
scrollTop: $(document.body).offset().top // ให้หน้าเพจเลื่อนไปทำตำแหน่งบนสุด
}, 500); // ภายในเวลา 0.5 วินาที ---- 1000 เท่ากับ 1 วินาที
});
});
</script>
</body>
</html>

@endsection
