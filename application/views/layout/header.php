<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Warung Bakso Bintang</title>
	<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
	<link href="<?= base_url('assets/') ?>css/styles.css" rel="stylesheet" />
	<link href="<?= base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
	<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
		<!-- Navbar Brand-->
		<a class="navbar-brand ps-3 font-monospace fw-lighter fw-bolder fs-5">Warung Bakso <sup>Bintang</sup></a>
		<!-- Sidebar Toggle-->
		<button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
		<!-- Navbar Search-->
		<form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
			<div class="input-group">
				<input class="form-control" type="text" placeholder="Cari..." aria-label="Cari..." aria-describedby="btnNavbarSearch" />
				<button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
			</div>
		</form>
		<!-- Navbar-->
		<?php
		if ($user['role'] == 'User') { ?>

			<!-- Nav Item - Alerts -->
			<li class="navbar-nav ms-auto ms-md-0 me-3 me-mg-4">
				<a class="nav-link" href="<?= base_url('Profil/pembelian'); ?>">
					<i class="fas fa-history fa-fw"></i>
					<!-- Counter - Alerts -->
					<span class="badge badge-danger badge-counter"></span>
				</a>
			</li>

			<!-- Nav Item - Alerts -->
			<li class="navbar-nav ms-auto ms-md-0 me-3 me-mg-4">
				<a class="nav-link" href="<?= base_url('Profil/detail'); ?>">
					<i class="fas fa-shopping-cart fa-fw"></i>
					<!-- Counter - Alerts -->
					<span class="badge badge-danger badge-counter">
						<?= $jlh ?>
					</span>
				</a>
			</li>

		<?php
		}
		?>
		<!-- Navbar-->
		<ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['nama']; ?></span></a>
				<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
					<li><a class="dropdown-item" href="#!">Settings</a></li>
					<li><a class="dropdown-item" href="#!">Activity Log</a></li>
					<li>
						<hr class="dropdown-divider" />
					</li>
					<li><a class="dropdown-item" href="<?= base_url('Auth/logout'); ?>">Logout</a></li>
				</ul>
			</li>
		</ul>
	</nav>
	<div id="layoutSidenav">
		<div id="layoutSidenav_nav">
			<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
				<div class="sb-sidenav-menu">
					<div class="nav">
						<?php
						if ($user['role'] == 'Admin') {
						?>
							<div class="sb-sidenav-menu-heading">Core</div>
							<a class="nav-link" href="<?= base_url('/Dashboard') ?>">
								<div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
								Dashboard
							</a>
						<?php } ?>
						<?php
						if ($user['role'] == 'Admin') {
						?>
							<div class="sb-sidenav-menu-heading">Fitur</div>
							<a class="nav-link" href="<?= site_url('Menu/') ?>">
								<div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
								Menu
							</a>
							<a class="nav-link" href="<?= site_url('Penjualan/') ?>">
								<div class="sb-nav-link-icon"><i class="fas fa-fw fa-coins"></i></div>
								Penjualan
							</a>
							<a class="nav-link" href="<?= site_url('Pegawai/') ?>">
								<div class="sb-nav-link-icon"><i class="fas fa-fw fa-users"></i></div>
								Pegawai
							</a>
							<a class="nav-link" href="<?= site_url('auth/logout') ?>">
								<div class="sb-nav-link-icon"><i class="fas fa-fw fa-sign-out-alt"></i></div>
								Logout
							</a>
						<?php
						} else {
						?>
							<div class="sb-sidenav-menu-heading">Fitur</div>
							<a class="nav-link" href="<?= site_url('Profil/menu') ?>">
								<div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
								Menu
							</a>
							<a class="nav-link" href="<?= site_url('Profil/') ?>">
								<div class="sb-nav-link-icon"><i class="fas fa-fw fa-user"></i></div>
								Profil
							</a>
							<a class="nav-link" href="<?= site_url('Profil/tentang') ?>">
								<div class="sb-nav-link-icon"><i class="fas fa-fw fa-question-circle"></i></div>
								Tentang Kami
							</a>
							<a class="nav-link" href="<?= site_url('auth/logout') ?>">
								<div class="sb-nav-link-icon"><i class="fas fa-fw fa-sign-out-alt"></i></div>
								Logout
							</a>
						<?php } ?>
					</div>
				</div>
				<div class="sb-sidenav-footer">
					<div class="small">Logged in as:</div>
					<?= $user['nama']; ?>
				</div>
			</nav>
		</div>
		<div id="layoutSidenav_content">
			<main>
