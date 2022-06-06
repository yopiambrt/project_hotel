<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
		</li>
		<li class="nav-item d-none d-sm-inline-block">
			<a href="<?php echo site_url('dashboard'); ?>" class="nav-link">Home</a>
		</li>
	</ul>

	<!-- SEARCH FORM -->
	<form class="form-inline ml-3">
		<div class="input-group input-group-sm">
			<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
			<div class="input-group-append">
				<button class="btn btn-navbar" type="submit">
					<i class="fas fa-search"></i>
				</button>
			</div>
		</div>
	</form>

	<!-- Right navbar links -->
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="<?php echo base_url('index.php/hotel/index') ?>" class="brand-link">

		<span class="brand-text font-weight-light">Hotel Mulya Senayan</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?php echo base_url('assets/admin'); ?>/dist/img/hotel.jpeg" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block"><?= $this->session->userdata('name'); ?></a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
				<li class="nav-item has-treeview ">
					<a href="<?php echo site_url('dashboard/index'); ?>" class="nav-link ">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>

				<li class="nav-item has-treeview">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-edit"></i>
						<p>
							Forms
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">

						<li class="nav-item">
							<a href="<?php echo site_url('hotel/inputForm'); ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Tambah Data Kamar</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="<?php echo site_url('hotel/inputPengunjung'); ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Tambah Data Pengunjung</p>
							</a>
						</li>

					</ul>
				</li>
				<li class="nav-item has-treeview">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-table"></i>
						<p>
							Tables
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo site_url('hotel/listkamar'); ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Data Kamar</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?php echo site_url('hotel/listpengunjung'); ?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Data Pengunjung</p>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-item has-treeview ">
					<a href="<?php echo site_url('login/logout'); ?>" class="nav-link ">
						<i class="nav-icon fas fa-th"></i>
						<p>
							Logout

						</p>
					</a>
				</li>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>