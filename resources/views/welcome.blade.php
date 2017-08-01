<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}" />
	<link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>{{ config('app.name', 'Laravel') }} | Index</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/material-dashboard.css') }}" rel="stylesheet"/>
	<link href="{{ asset('css/documentation.css') }}" rel="stylesheet" />

    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>

	<style>
		pre.prettyprint{
		    background-color: #eee;
		    border: 0px;
		    margin-bottom: 60px;
		    margin-top: 30px;
		    padding: 20px;
		    text-align: left;
		}
		.atv, .str{
		    color: #05AE0E;
		}
		.tag, .pln, .kwd{
		    color: #3472F7;
		}
		.atn{
		    color: #2C93FF;
		}
		.pln{
		    color: #333;
		}
		.com{
		    color: #999;
		}
		.space-top{
		    margin-top: 50px;
		}
		.area-line{
		    border: 1px solid #999;
		    border-left: 0;
		    border-right: 0;
		    color: #666;
		    display: block;
		    margin-top: 20px;
		    padding: 8px 0;
		    text-align: center;
		}
		.area-line a{
		    color: #666;
		}
		.container-fluid{
		    padding-right: 15px;
		    padding-left: 15px;
		}
		.cover {
			background-image: url("{{ asset('img/cover.jpeg') }}"); 
		}

	</style>
</head>

<body class="components-page">

<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll" >
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button id="menu-toggle" type="button" class="navbar-toggle">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar bar1"></span>
        <span class="icon-bar bar2"></span>
        <span class="icon-bar bar3"></span>
      </button>
      <a href="http://www.creative-tim.com">
           <div class="logo-container">
                <div class="logo">
                    <img src="{{ asset('img/new_logo.png') }}" alt="Creative Tim Logo">
                </div>
                <div class="brand">
                    {{ config('app.name', 'Laravel') }}
                </div>
            </div>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">
		<ul  class="nav navbar-nav navbar-right">
			<li>
		                <a href="https://twitter.com/CreativeTim" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-twitter"></i>
						</a>
		            </li>
		            <li>
		                <a href="https://www.facebook.com/CreativeTim" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-facebook-square"></i>
						</a>
		            </li>
					<li>
		                <a href="https://www.instagram.com/CreativeTimOfficial" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-instagram"></i>
						</a>
		            </li>
            @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
            @else
            <li><a href="{{ route('home') }}">Dashboard</a></li>
            <li class="dropdown">                    
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="material-icons">person</i> {{ Auth::user()->name }}
                    <p class="hidden-lg hidden-md">Profile</p>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ route('logout') }}" 
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	<div class="page-header header-filter cover">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h1 class="title text-center">Welcome to {{ config('app.name', 'Laravel') }}</h1>
				</div>
			</div>
		</div>
	</div>

    <div class="main main-raised">
        <div class="section">
    <div class="container">
        <div class="row">
            
            <div class="col-md-12">

			<!-- License Row -->
			<div class="tim-row tim-row-first" id="license">
				<h2 class="text-center">License</h2>
				<legend></legend>
				<p>
					 Currently, on <a href="www.creative-tim.com" target="_blank">Creative Tim</a> you can get the products with two types of licenses: Personal or Developer. All the freebies are licensed to Personal License as default. If you are making a paid purchase, be sure to go through the table with the rights and the guidelines, so you can know what is the best fit for you. View the rights table and the description for each license on our <a target="_blank" href="http://www.creative-tim.com/license?ref=license-page-mk-free">Official License Page</a>.
				</p>
			</div>

			<!-- Tutorial Row -->
			<div class="tim-row" id="tutorial">
				<h2 class="text-center">Short Description and Usage</h2>
				<legend></legend>
				<p>
					<b>Material Dashboard</b> is a free Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design. We are very excited to introduce our take on the material concepts through an easy to use and beautiful set of components. Material Dashboard was built over the popular Bootstrap framework and it comes with a couple of third-party plugins redesigned to fit in with the rest of the elements.
				</p>
				<p>
					Using it is very simple and it will enable you to refresh you classic looking application. To get the desired effect you will also need to integrate JS plugins that take a little bit more effort. It the end the result will be worth it.
				</p>
			</div>

			<div class="tim-row">
				<h2 class="text-center">Getting Started</h2>
				<legend></legend>
				<p>
					The <b>Material Dashboard</b> is built on top of Bootstrap 3, so you can safely use it on your existing or new Bootstrap project. No line of code from Bootstrap 3 was changed, so you don't have to worry about undesired effects in your work.
				</p>
				<p>
					The easiest way to start is to use our <a href="../examples/template.html" target="_blank">start-up template</a> where all the files are already included and ready to use.
				</p>
			</div>

			<div class="tim-row">
				<h2 class="text-left">Restyled Components</h2>
 			   <legend></legend>
 			   <p>
 			   Here is the list of Bootstrap 3 components that were restyled in <b>Material Dashboard</b>:
 				   <ul>
 					   <li> Buttons </li>
 					   <li> Inputs</li>
 					   <li> Textarea</li>
 					   <li> Menu </li>
 					   <li> Dropdown</li>
 					   <li> Navigation Menu</li>
 					   <li> Labels</li>
 					   <li> Notifications</li>
 					   <li> Typography</li>
 					   <li> Tables</li>
 				   </ul>
 			   </p>
			</div>

			<!-- License Row -->
			<div class="tim-row" id="changing-colors">
				<h2 class="text-center">Changing Colors (SASS)</h2>
				<legend></legend>
				<p>You can change the default colors via variables from SASS:</p>

				<ol>
					<li>You can find the colors in assets/sass/material-kit/_variables.scss starting with line 28 where is the primary color set: <code>$brand-primary: $purple !default;</code>. All the possible colors are in assets/sass/material-kit/_colors.scss</li>
					<li>Add the SASS folder from <code>assets/sass/</code> the project inside <a href="http://koala-app.com/" target="_blank">Koala Compiler</a> and find the file material-dashboard.scss, it will be the one in Green.</li>
					<li>Right click on that file and set the output path, it must be in assets/css/ so anything that you compile will overwrite the original material-dashboard.css</li>
					<li>Press on compile and everything will be done automatically</li>
				</ol>

			</div>

			</div> <!-- end container -->
		 </div> <!--  end col-md-8 -->
	 </div> <!-- end row -->
 </div> <!-- end first container-->
</div> <!-- end section -->


    <footer class="footer footer-transparent">
        <div class="container">
            <nav class="pull-left">
                <ul>
					<li>
						<a href="http://www.creative-tim.com">
							Creative Tim
						</a>
					</li>
					<li>
						<a href="http://presentation.creative-tim.com">
						   About Us
						</a>
					</li>
					<li>
						<a href="http://blog.creative-tim.com">
						   Blog
						</a>
					</li>
					<li>
						<a href="http://www.creative-tim.com/license">
							Licenses
						</a>
					</li>
                </ul>
            </nav>
            <div class="social-area pull-right">
                <a class="btn btn-just-icon btn-twitter btn-simple" href="https://twitter.com/CreativeTim">
                    <i class="fa fa-twitter"></i>
                </a>
                <a class="btn btn-just-icon btn-facebook btn-simple" href="https://www.facebook.com/CreativeTim">
                    <i class="fa fa-facebook-square"></i>
                </a>
                <a class="btn btn-just-icon btn-google btn-simple" href="https://plus.google.com/+CreativetimPage">
                    <i class="fa fa-google-plus"></i>
                </a>
				<a class="btn btn-just-icon btn-instagram btn-simple" href="https://www.instagram.com/creativetimofficial">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
            <div class="copyright">
                &copy; <script>document.write(new Date().getFullYear())</script> Creative Tim, made with love
            </div>
        </div>
    </footer>


</body>
	<!--   Core JS Files   -->
	<script src="{{ asset('js/jquery-3.1.0.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/material.min.js') }}" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="{{ asset('js/chartist.min.js') }}"></script>

	<!--  Notifications Plugin    -->
	<script src="{{ asset('js/bootstrap-notify.js') }}"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="{{ asset('js/material-dashboard.js') }}"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="{{ asset('js/demo.js') }}"></script>

    <script>
        var header_height;
        var fixed_section;
        var floating = false;

        $().ready(function(){
            suggestions_distance = $("#suggestions").offset();
            pay_height = $('.fixed-section').outerHeight();

			$(window).on('scroll', md.checkScrollForTransparentNavbar);
			demo.initDocumentationCharts();
        });
    </script>

</html>
