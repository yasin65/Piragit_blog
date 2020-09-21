<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Metro Admin Template - Metro UI Style Bootstrap Admin Template</title>
<meta name="description" content="Metro Admin Template.">
<meta name="author" content="Łukasz Holeczek">
<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
<!-- end: Meta -->

<!-- start: Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- end: Mobile Specific -->

<!-- start: CSS -->
<link id="bootstrap-style" href="{{asset('admin')}}/css/bootstrap.min.css" rel="stylesheet">
<link href="{{asset('admin')}}/css/bootstrap-responsive.min.css" rel="stylesheet">
<link id="base-style" href="{{asset('admin')}}/css/style.css" rel="stylesheet">
<link id="base-style-responsive" href="{{asset('admin')}}/css/style-responsive.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>

<link rel="shortcut icon" href="{{asset('admin')}}/{{asset('admin')}}/img/favicon.ico">		
</head>

<body>
<!-- start: Header -->
<div class="navbar">
<div class="navbar-inner">
	<div class="container-fluid">
		<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>
		<a class="brand" href="{{route('dashboard')}}"><span>Metro</span></a>
						
		<!-- start: Header Menu -->
		<div class="nav-no-collapse header-nav">
			<ul class="nav pull-right">
				
				
				<li class="dropdown">
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="halflings-icon white user"></i> Łukasz Holeczek
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li class="dropdown-menu-title">
								<span>Account Settings</span>
						</li>
						<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
						<li><a href="login.html"><i class="halflings-icon off"></i> Logout</a></li>
					</ul>
				</li>
				<!-- end: User Dropdown -->
			</ul>
		</div>
		<!-- end: Header Menu -->
		
	</div>
</div>
</div>
<!-- start: Header -->

<div class="container-fluid-full">
<div class="row-fluid">
		
	<!-- start: Main Menu -->
<div id="sidebar-left" class="span2">
	<div class="nav-collapse sidebar-nav">
		<ul class="nav nav-tabs nav-stacked main-menu">
			
			<li><a href="{{route('dashboard')}}"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
			<li><a href="{{route('category.index')}}"><i class="icon-envelope"></i><span class="hidden-tablet"> Category</span></a></li>
			<li><a href="{{route('tag.index')}}"><i class="icon-tag"></i><span class="hidden-tablet"> Tag</span></a></li>
			<li><a href="{{route('post.index')}}"><i class="icon-eye-open"></i><span class="hidden-tablet"> Post </span></a></li>
			
			<li>
				<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Dropdown</span><span class="label label-important"> 3 </span></a>
				<ul>
					<li><a class="submenu" href="submenu.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 1</span></a></li>
					<li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 2</span></a></li>
					
				</ul>	
			</li>

		<li class="nav-item mt-auto">
            <a href="{{ route('setting.index') }}" class="nav-link {{ (request()->is('admin/setting')) ? 'active': '' }}">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Setting
              </p>
            </a>
          </li>

			

			<li class="nav-item mt-auto">
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <button style="background: red">Logout</button>
            </a>
          </li>


          <li><a href="{{route('website.home')}}"target="blank"><button style="background: green">View Website</button> </a></li>
			
			
		</ul>
	</div>
</div>
	<!-- end: Main Menu -->
	
	<noscript>
		<div class="alert alert-block span10">
			<h4 class="alert-heading">Warning!</h4>
			<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
		</div>
	</noscript>
	
	<!-- start: Content -->
	<div id="content" class="span10">
	
	
	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="{{route('dashboard')}}">Home</a> 
			<i class="icon-angle-right"></i>
		</li>
		<li><a href="{{route('dashboard')}}">Dashboard</a></li>
	</ul>



	


@yield('admin_content')
	


</div><!--/.fluid-container-->

	<!-- end: Content -->
</div><!--/#content.span10-->
</div><!--/fluid-row-->

<div class="modal hide fade" id="myModal">
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	<h3>Settings</h3>
</div>
<div class="modal-body">
	<p>Here settings can be configured...</p>
</div>
<div class="modal-footer">
	<a href="#" class="btn" data-dismiss="modal">Close</a>
	<a href="#" class="btn btn-primary">Save changes</a>
</div>
</div>

<div class="clearfix"></div>

<footer>

<p>
	<span style="text-align:left;float:left">&copy; 2013 <a href="http://bootstrapmaster.com/" alt="Bootstrap Themes">creativeLabs</a></span>
	<span class="hidden-phone" style="text-align:right;float:right">Powered by: <a href="http://admintemplates.co/" alt="Bootstrap Admin Templates">Metro</a></span>
</p>

</footer>


<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  @csrf
</form>

<!-- start: JavaScript-->

<script src="{{asset('admin')}}/js/jquery-1.9.1.min.js"></script>
<script src="{{asset('admin')}}/js/jquery-migrate-1.0.0.min.js"></script>

<script src="{{asset('admin')}}/js/jquery-ui-1.10.0.custom.min.js"></script>

<script src="{{asset('admin')}}/js/jquery.ui.touch-punch.js"></script>

<script src="{{asset('admin')}}/js/modernizr.js"></script>

<script src="{{asset('admin')}}/js/bootstrap.min.js"></script>

<script src="{{asset('admin')}}/js/jquery.cookie.js"></script>

<script src="{{asset('admin')}}/js/fullcalendar.min.js"></script>

<script src="{{asset('admin')}}/js/jquery.dataTables.min.js"></script>

<script src="js/excanvas.js"></script>
<script src="{{asset('admin')}}/js/jquery.flot.js"></script>
<script src="{{asset('admin')}}/js/jquery.flot.pie.js"></script>
<script src="{{asset('admin')}}/js/jquery.flot.stack.js"></script>
<script src="{{asset('admin')}}/js/jquery.flot.resize.min.js"></script>

<script src="{{asset('admin')}}/js/jquery.chosen.min.js"></script>

<script src="{{asset('admin')}}/js/jquery.uniform.min.js"></script>

<script src="{{asset('admin')}}/js/jquery.cleditor.min.js"></script>

<script src="{{asset('admin')}}/js/jquery.noty.js"></script>

<script src="{{asset('admin')}}/js/jquery.elfinder.min.js"></script>

<script src="{{asset('admin')}}/js/jquery.raty.min.js"></script>

<script src="{{asset('admin')}}/js/jquery.iphone.toggle.js"></script>

<script src="{{asset('admin')}}/js/jquery.uploadify-3.1.min.js"></script>

<script src="{{asset('admin')}}/js/jquery.gritter.min.js"></script>

<script src="{{asset('admin')}}/js/jquery.imagesloaded.js"></script>

<script src="{{asset('admin')}}/js/jquery.masonry.min.js"></script>

<script src="{{asset('admin')}}/js/jquery.knob.modified.js"></script>

<script src="{{asset('admin')}}/js/jquery.sparkline.min.js"></script>

<script src="{{asset('admin')}}/js/counter.js"></script>

<script src="{{asset('admin')}}/js/retina.js"></script>

<script src="{{asset('admin')}}/js/custom.js"></script>
<!-- end: JavaScript-->

</body>

<!-- Mirrored from bootstrapmaster.com/live/metro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2018 16:56:47 GMT -->
</html>
