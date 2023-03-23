<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CV DIKA LANGGENG TRIJAYA</title>
	<script src="{{ asset('Atlantis/js/plugin/webfont/webfont.min.js') }}"></script>
	@php
		$src = asset('Atlantis/css/fonts.min.css');
		echo "
		<script>
			WebFont.load({
				google: {'families':['Lato:300,400,700,900']},
				custom: {'families':['Flaticon', 'Font Awesome 5 Solid', 'Font Awesome 5 Regular', 'Font Awesome 5 Brands', 'simple-line-icons'], urls: ['$src']},
				active: function() {
					sessionStorage.fonts = true;
				}
			});
		</script>
		";
	@endphp
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('Atlantis/css/atlantis.min.css') }}">
	<link rel="stylesheet" href="{{ asset('Atlantis/css/demo.css') }}">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header" data-background-color="blue2">
				<a href="#" class="logo" style="color: white">
					<b>ADMIN PAGE</b>
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="{{ asset('Atlantis/img/Profile.png') }}" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="{{ asset('Atlantis/img/Profile.png') }}" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>Admin</h4>
												<a href="#" class="btn btn-xs btn-warning btn-sm mb-2">Ganti Password</a>
												<a href="#" class="btn btn-xs btn-danger btn-sm mb-2">Log Out</a>
											</div>
										</div>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="sidebar sidebar-style-2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="{{ asset('Atlantis/img/Profile.png') }}" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<b class="mt-2">Admin</b>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>
							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#">
											<span class="link-collapse">Ganti Password</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="link-collapse">Log Out</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a href="#" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Menu</h4>
						</li>
						<li class="nav-item">
							<a href="#">
								<i class="fas fa-image"></i>
								<p>Galery</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#">
								<i class="fas fa-car"></i>
								<p>Data Produk</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#">
								<i class="fas fa-cart-plus"></i>
								<p>Data Produk Masuk</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#">
								<i class="fas fa-cart-arrow-down"></i>
								<p>Data Produk Keluar</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#">
								<i class="fas fa-store"></i>
								<p>Data Company</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#">
								<i class="fas fa-user"></i>
								<p>User Management</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">@yield('title')</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row mt--2">
						@yield('main')
					</div>
				</div>
			</div>
			<footer class="footer">
                <center>
                    <span>© 2023 <a href="#">CV DIKA LANGGENG TRIJAYA</a>. All Rights Reserved.</span>
                </center>
			</footer>
		</div>
		<div class="custom-template">
			<div class="title">Settings</div>
			<div class="custom-content">
				<div class="switcher">
					<div class="switch-block">
						<h4>Logo Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="white"></button>
							<br/>
							<button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
							<button type="button" class="selected changeLogoHeaderColor" data-color="blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Navbar Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeTopBarColor" data-color="dark"></button>
							<button type="button" class="changeTopBarColor" data-color="blue"></button>
							<button type="button" class="changeTopBarColor" data-color="purple"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue"></button>
							<button type="button" class="changeTopBarColor" data-color="green"></button>
							<button type="button" class="changeTopBarColor" data-color="orange"></button>
							<button type="button" class="changeTopBarColor" data-color="red"></button>
							<button type="button" class="changeTopBarColor" data-color="white"></button>
							<br/>
							<button type="button" class="changeTopBarColor" data-color="dark2"></button>
							<button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="purple2"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="green2"></button>
							<button type="button" class="changeTopBarColor" data-color="orange2"></button>
							<button type="button" class="changeTopBarColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Sidebar</h4>
						<div class="btnSwitch">
							<button type="button" class="selected changeSideBarColor" data-color="white"></button>
							<button type="button" class="changeSideBarColor" data-color="dark"></button>
							<button type="button" class="changeSideBarColor" data-color="dark2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Background</h4>
						<div class="btnSwitch">
							<button type="button" class="changeBackgroundColor" data-color="bg2"></button>
							<button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
							<button type="button" class="changeBackgroundColor" data-color="bg3"></button>
							<button type="button" class="changeBackgroundColor" data-color="dark"></button>

						</div>
					</div>
				</div>
			</div>
			<div class="custom-toggle">
				<i class="flaticon-settings"></i>
			</div>
		</div>
	</div>
	<script src="{{ asset('Atlantis/js/core/jquery.3.2.1.min.js') }}"></script>
	<script src="{{ asset('Atlantis/js/core/popper.min.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
	<script src="{{ asset('Atlantis/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('Atlantis/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>
	<script src="{{ asset('Atlantis/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
	<script src="{{ asset('Atlantis/js/plugin/chart.js/chart.min.js') }}"></script>
	<script src="{{ asset('Atlantis/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>
	<script src="{{ asset('Atlantis/js/plugin/chart-circle/circles.min.js') }}"></script>
	<script src="{{ asset('Atlantis/js/plugin/datatables/datatables.min.js') }}"></script>
	<script src="{{ asset('Atlantis/js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
	<script src="{{ asset('Atlantis/js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>
	<script src="{{ asset('Atlantis/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
	<script src="{{ asset('Atlantis/js/atlantis.min.js') }}"></script>
	<script src="{{ asset('Atlantis/js/setting-demo.js') }}"></script>
	<script src="{{ asset('Atlantis/js/demo.js') }}"></script>
	@yield('script')
</body>
</html>
