<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Skolin | Cara gampang cari sekolah</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="{{ asset('admin/assets/plugins/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('admin/assets/plugins/font-awesome/css/all.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('admin/assets/plugins/animate/animate.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('admin/assets/css/default/style.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('admin/assets/css/default/style-responsive.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('admin/assets/css/default/theme/default.css') }}" rel="stylesheet" id="theme" />
	<link rel="icon" href="{{ asset('admin/assets/images/fav.png') }}" type="image/png">
	<link href="{{ asset('admin/assets/css/default/theme/admin-theme.css') }}" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="{{ asset('admin/assets/plugins/jquery-jvectormap/jquery-jvectormap.css') }}" rel="stylesheet" />
	<link href="{{ asset('admin/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css') }}" rel="stylesheet" />
	<link href="{{ asset('admin/assets/plugins/gritter/css/jquery.gritter.css') }}" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->

<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		@include('adminsekolah.include.navbar')
		<!-- end #header -->
		<div class="sidebar-bg"></div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
		<!-- begin #content -->
		<div id="content" class="content">
			<div class="alert alert-warning">
				<p>{{ $message }}</p>
			</div>
        </div>
		
		<!-- end #content -->
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	@include('includes.script')
	
	<script>
		$(document).ready(function() {
			App.init();
			Dashboard.init();
		});
	</script>
	<script>
		(function(i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function() {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
			m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');
		ga('create', 'UA-53034621-1', 'auto');
		ga('send', 'pageview');
	</script>
</body>
</html>