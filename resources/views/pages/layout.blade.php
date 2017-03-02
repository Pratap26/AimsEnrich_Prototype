<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
   	<meta name="description" content="">


<title>aimsenrich</title>
   <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
   <link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/icofont.css">
    <link rel="stylesheet" href="css/slidr.css">     
    <link rel="stylesheet" href="css/main.css">  
    <link rel="stylesheet" href="css/responsive.css">  

	<!-- font -->
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>

	<!-- icons -->	
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="images/ico/apple-touch-icon-57-precomposed.png">
   
<header id="header" class="clearfix">
		<!-- navbar -->
		<nav class="navbar navbar-default">
					<div class="container" style="width:100%">
				<div class="navbar-right">
					<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav">

							 @if (Auth::guest())
							<li ><a href="{{ url('/login') }}"><i class="fa fa-sign-in"></i>Login</a></li>
              <li><a href="{{ url('/register') }}"><i class="fa fa-external-link"></i>Sign Up</a></li>
							<li ><a href="#"><i class="fa fa fa-book"></i>Apply</a></li>
							<li ><a href="#"><i class="fa fa-phone"></i>Contact</a></li>
							@else
              <li > <a href="{{ url('logout') }}"> <i class="fa fa-sign-out"></i>LOGOUT </a></li>
							<li ><a href="#"><i class="fa fa fa-book"></i> Apply</a></li>
							<li ><a href="#"><i class="fa fa-phone"></i>Contact</a></li>
							@endif 
						</ul>
					</div>
				</div>
			</div>
			<div class="container" style="width:100%">
				<!-- navbar-header -->
				<div class="navbar-header">

					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
			 
				</div>
				<!-- /navbar-header -->
					<span class="span_nav">
				@if (Auth::guest())
					<a class="navbar-brand" href="/"><img style="padding: 0em 1em ;margin-top:-1.2em;height:2.8em;margin-left:2em; border-right:1px solid #5a5a5a" class="img-responsive" src="images/logo.jpg" alt="Logo"></a>
					@else
					<a class="navbar-brand" href="home"><img style="padding: 0em 1em;margin-top:-1.2em;height:2.8em;margin-left:2em; border-right:1px solid #5a5a5a" class="img-responsive" src="images/logo.jpg" alt="Logo"></a>
					@endif

                <span class="edu">EXECUTIVE EDUCATION</span>
                    </span>
				<!-- nav-right -->
        <div class="container_nav">
				<div class="nav-right">

					<!-- sign-in -->					
					<ul class="sign-in">
						 @if (Auth::guest())
                        	<li><a href="{{ url('/individual_courses') }}">Courses For Individual</a></li>
                             <li><a href="#">Custom Courses For Organisation</a></li>
                             <li><a href="#">Online Courses</a></li>
                        @else
                             <li><a href="{{ url('/individual_courses') }}">Courses For Individual</a></li>
                             <li><a href="#">Custom Courses For Organisation</a></li>
                             <li><a href="#">Online Courses</a></li>
                             <li><a href="{{ url('/profile') }}">Profile View</a></li>
                            
                        @endif
					</ul><!-- sign-in -->					
				</div>
      </div>
			</div><!-- container -->
		</nav><!-- navbar -->
	</header><!-- header -->
    @yield('header')
  </head>
<body>
@yield('content')
 @if (Auth::guest())
   <div class="footer1">
    <div class="container">
      <div class="row">
        <div class="col-sm-5">
             <div class="txt">
              We Would love to keep you notified.
             </div>
          </div>
      <div class="col-sm-2">
        <div style="margin-top:0.5em;">
        <input type="text" name="email" id="email" palceholder="email@gmail.com">  </input>
      </div>
      </div>
      <div class="col-sm-5">
      <div style="margin-top:0.5em;">
        <a href="#">  <img style="width:6em;height:2em" src="images/register.png"></a>
      </div>
      </div>
      </div>
    </div>
   </div>
   @endif


 <footer>   <div id="footer">
			<div class="container">
				<div class="row">
					<!-- footer-widget -->
					<div class="col-sm-4">
						<div class="ed">
							Executive Education
						</div>
						<div class="add1">
							Aimsenrich Global Education Pvt.Ltd.
						</div>
						<div class="add2">
							#301,3rd Floor,Centre Point
						</div>
						<div class="add2">
							Opp Nagarjuna Hotel
						</div>
						<div class="add2">
							Residency Road
						</div>
						<div class="add2">
							Bangalore-560025
						</div>
						<div class="add2">
							Karnataka,India
						</div>
                     
                   </div>
                   <div class="col-sm-4">
                   	<div class="pull-center">
                   		<span class="link">
                   			<a href="#"><img  style="width:3em;height:3em ;margin-top:5em;margin-left:5em;" src="images/FB.png" ></a>
                   		</span>
                   		<span class="link">
                   			<a href="#"><img  style="width:3em;height:3em ;margin-top:5em;" src="images/Linkedin.png" ></a>
                   		</span>
                   		<span class="link">
                   			<a href="#"><img  style="width:3em;height:3em ;margin-top:5em;" src="images/Twitter.png" ></a>
                   		</span>

                  
                   	</div>
                   </div>
                   <div class="col-sm-4">
                   	<div class="pull-right">
                   	<div class="contact">
                     <img  style="width:2em;height:2em;" src="images/Tel-icon.png"></a><span class="ct"> Call us +9880098800</span>
                    </div>
                    </div>
                    <div class="pull-right">
                   	<div class="contact">
                     <img  style="width:2em;height:2em;" src="images/cb.png" ></a><span class="ct">Request a Call Back</span>
                    </div>
                    </div>
                   <div class="pull-right">
                   	<div class="contact">
                     <img  style="width:2em;height:1.8em;" src="images/email.png"></a><span class="ct">admision@aimsenrich.com</span>
                 </div>
                   </div>
                   </div>

               </div>
                 <hr class="style1">
                 <div class="col-md-6">
                 	<div clASS="foot" >
							Copyright AIMSENRICH Global Pvt. Ltd.
						</div>

                 </div>
                 <div class="col-md-6">
                 	<div class="pull-right">
                 	<span class="fot-txt">
                 		Terms of use
                 	</span>
                 	<span class="fot-txt">
                 		Privacy Policy
                 	</span>
                 </div>
             </div>
           </div>


                 </div>
           
  </footer>



     <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


 
  </body>
  </html>